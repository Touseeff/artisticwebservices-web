# QA Report — Backend & PHP Security
**Auditor**: QA Developer #1
**Date**: April 2026
**Scope**: Backend PHP, SMTP, Form Handlers

---

## Executive Summary

The ArtisticWebServices backend PHP codebase demonstrates reasonable baseline practices (output escaping in email bodies, SSL transport headers, session-based admin auth), but contains several critical and high-severity issues that must be resolved before the site is considered secure for production. The most urgent problems are: the complete absence of CSRF protection on all public forms, an SSL certificate verification bypass that enables man-in-the-middle attacks on the SMTP connection, both form handlers accepting GET submissions containing sensitive PII (exposing data in server logs and browser history), and the admin panel having no brute-force lockout, rate limiting, or IP restriction. Secondary concerns include the SMTP_LOCAL_DEV flag being determined purely from HTTP_HOST (spoofable in certain server configurations), plaintext log file exposure risk, hardcoded fake captcha values, and an open redirect vector in the thank-you redirect.

---

## Critical Issues

### C-1: No CSRF Protection on Any Form
- **File**: `includes/form-quote.php:18`, `contact-form.php:16–44`, `submit-calculator.php:21–41`
- **Severity**: Critical
- **Description**: Neither the contact form nor the calculator form implements any CSRF token. Both handlers accept submissions from any origin without verification. An attacker can embed a hidden form on a third-party page that auto-submits to `contact-form.php` or `submit-calculator.php`, causing the victim's browser to send a forged request. Because the forms use GET (and also accept POST in `contact-form.php`), the attack surface is especially wide — a crafted URL alone suffices for the GET-based handlers.
- **Fix**: Generate a cryptographically random token per session (`bin2hex(random_bytes(32))`), store it in `$_SESSION['csrf_token']`, embed it as a hidden field in every form, and validate it server-side in each handler before any processing. Reject and redirect (with error) on mismatch.

---

### C-2: SSL Certificate Verification Disabled in SMTP Connection
- **File**: `includes/mailer.php:54–60`
- **Severity**: Critical
- **Description**: The SSL stream context explicitly sets `verify_peer => false`, `verify_peer_name => false`, and `allow_self_signed => true`. This completely disables TLS certificate validation for the SMTP connection to `smtp.hostinger.com`. Any network-level attacker (ISP, shared-hosting neighbour, compromised router) can perform a man-in-the-middle attack, intercept the SMTP conversation, and capture the SMTP username and password sent in cleartext (base64-encoded AUTH LOGIN) as well as all email content.
- **Fix**: Remove the three disabling options and enable proper validation:
  ```php
  $ctx = stream_context_create([
      'ssl' => [
          'verify_peer'      => true,
          'verify_peer_name' => true,
          'cafile'           => '/etc/ssl/certs/ca-certificates.crt', // adjust to server path
      ],
  ]);
  ```
  On Hostinger shared hosting the system CA bundle is available; verify the correct path via `openssl_get_cert_locations()`.

---

### C-3: Sensitive PII Transmitted via GET Parameters
- **File**: `submit-calculator.php:22–31`, `includes/form-quote.php:18`, `contact-form.php:16`
- **Severity**: Critical
- **Description**: `submit-calculator.php` reads exclusively from `$_GET`, and `contact-form.php` also accepts GET (line 16: `$src = ($_SERVER['REQUEST_METHOD'] === 'POST') ? $_POST : $_GET`). The form in `includes/form-quote.php` uses `method="get"`. This means full names, email addresses, phone numbers, and project descriptions appear in:
  - Server access logs (in full, in plaintext)
  - Browser history on the user's device
  - Referrer headers sent to any third-party resource loaded on the thank-you page
  - Any browser extension, proxy, or analytics tool that logs URLs
  
  This constitutes a GDPR/CCPA data exposure violation.
- **Fix**: Change both forms to `method="post"`, update both handlers to read exclusively from `$_POST`, and remove the `$_GET` fallback from `contact-form.php`. Remove the GET branch entirely.

---

## High Issues

### H-1: Admin Panel Has No Rate Limiting or Lockout
- **File**: `mailer-admin-aws7749.php:27–38`
- **Severity**: High
- **Description**: The login handler uses `sleep(2)` on a failed attempt, but this is per-request only and provides no persistent lockout. An attacker with even modest concurrency (multiple parallel requests) can bypass this delay and brute-force the `SMTP_ADMIN_PASS` at full speed. There is no attempt counter, no lockout after N failures, no IP-based throttling, and no CAPTCHA. The `sleep(2)` creates a denial-of-service vector against legitimate admin access when scripted attacks are in progress.
- **Fix**: Track failed login attempts in a session variable (or a small flat file / APCu entry keyed on hashed IP). After 5 failures, lock the session out for 15 minutes. Log each failure with `error_log()`. Consider IP allowlisting via `.htaccess` for this path.

---

### H-2: Admin Panel Accessible at Guessable but Public URL
- **File**: `mailer-admin-aws7749.php:1`
- **Severity**: High
- **Description**: The admin panel is at `/mailer-admin-aws7749`. While the suffix adds obscurity, the file is publicly routable with no IP restriction, no HTTP Basic Auth at the server level, and no `noindex` enforcement beyond a `<meta>` tag. The URL format follows a predictable pattern (vendor name + suffix) and could appear in Google Search Console, error logs, or referrer leakage. Security through obscurity alone is not an access control.
- **Fix**: Add an `.htaccess` `Require ip` directive (or `Allow from`) to restrict access to known admin IP addresses. Alternatively, place the file outside the webroot entirely and proxy it through a restricted admin subdomain. The `noindex` meta tag should be supplemented with a `robots.txt` `Disallow` entry.

---

### H-3: Session Token Tied Only to Daily Date — Token Predictability
- **File**: `mailer-admin-aws7749.php:16`, `mailer-admin-aws7749.php:29`, `mailer-admin-aws7749.php:40–41`
- **Severity**: High
- **Description**: `$today_token = hash('sha256', SMTP_ADMIN_PASS . date('Y-m-d'))`. This token:
  1. Is valid for the entire calendar day (24 hours) — a stolen session cookie gives an attacker a full day of access.
  2. Is deterministic and computed from only two inputs: the password and the date. If the admin password is weak, offline dictionary attacks against observed session cookies become feasible.
  3. The session stores this token and validates it on every request, but there is no session regeneration after login (`session_regenerate_id(true)` is absent), enabling session fixation attacks.
- **Fix**: Use a random session token (`bin2hex(random_bytes(32))`) generated at login and stored server-side. Call `session_regenerate_id(true)` immediately after successful authentication. Drop the date-based token scheme entirely.

---

### H-4: Open Redirect via SITE_BASE in Form Handlers
- **File**: `contact-form.php:38–39`, `contact-form.php:64`, `submit-calculator.php:35–36`, `submit-calculator.php:66`
- **Severity**: High
- **Description**: `SITE_BASE` is dynamically constructed in `includes/config.php` from `$_SERVER['HTTP_HOST']` (line 14). On servers where `HTTP_HOST` is not validated against a trusted allowlist, an attacker can supply a crafted `Host:` header (e.g., `Host: evil.com`) which causes `SITE_BASE` to resolve to `https://evil.com`. The redirect on success/error then becomes `Location: https://evil.com/thank-you`, redirecting users off-site after form submission. This is a classic open redirect via `Host` header injection.
- **Fix**: In `includes/config.php`, validate `$_SERVER['HTTP_HOST']` against a hardcoded allowlist of known hostnames before using it to build `SITE_BASE`. If the host is not in the allowlist, fall back to the hardcoded `SITE_URL` constant. Example:
  ```php
  $allowed_hosts = ['artisticwebservices.com', 'www.artisticwebservices.com', 'localhost'];
  if (!in_array($__host, $allowed_hosts, true)) {
      $__host = 'artisticwebservices.com';
  }
  ```

---

### H-5: Email Header Injection via reply_to Field
- **File**: `includes/mailer.php:134`, `contact-form.php:57`, `submit-calculator.php:59`
- **Severity**: High
- **Description**: The `Reply-To` header is constructed directly from user-supplied email input:
  ```php
  $headers .= "Reply-To: <{$replyTo}>\r\n";
  ```
  `$replyTo` is sourced from `$data['reply_to']`, which in both handlers is set to the user-supplied `$email` value. Although the `clean()` / `cleanVal()` helpers call `htmlspecialchars()` and `strip_tags()`, neither of these sanitizes CRLF sequences (`\r\n`). An attacker can submit an email like `x@x.com\r\nBcc: attacker@evil.com` to inject additional headers into the outgoing email, enabling spam relay or silent BCC exfiltration. The same applies to the `Subject` field (line 58–59 in both handlers — passed directly into `sendMail`).
- **Fix**: Strip all CR and LF characters from any value that is placed into an email header. Apply this in `sendMail()` before header construction:
  ```php
  $replyTo = str_replace(["\r", "\n"], '', $replyTo);
  $subject = str_replace(["\r", "\n"], '', $subject);
  ```
  Also validate `$replyTo` with `filter_var($replyTo, FILTER_VALIDATE_EMAIL)` inside `sendMail()`.

---

## Medium Issues

### M-1: SMTP_LOCAL_DEV Bypasses All Email Sending — Spoofable via Host Header
- **File**: `includes/smtp-config.php:43–47`
- **Severity**: Medium
- **Description**: `SMTP_LOCAL_DEV` is set to `true` when `HTTP_HOST` starts with `localhost` or `127.0.0.1`. An attacker who can control the `Host` header (in misconfigured reverse proxy setups, or via direct access) could send a request with `Host: localhost.evil.com` — `str_starts_with($host, 'localhost')` returns `true`, causing the mailer to silently write form data to `logs/mail-dev.log` rather than sending any email. While less likely in standard Hostinger configs, the detection logic is fragile.
- **Fix**: Use an environment variable or a hardcoded constant in `smtp-config.php` to explicitly set production vs. development mode, rather than deriving it from `HTTP_HOST`. For example: `define('SMTP_LOCAL_DEV', getenv('APP_ENV') === 'local');`

---

### M-2: Dev Log File May Be Web-Accessible
- **File**: `includes/mailer.php:201–208`
- **Severity**: Medium
- **Description**: When `SMTP_LOCAL_DEV` is true, emails are written to `logs/mail-dev.log` relative to the project root. The `logs/` directory is not blocked by the `.htaccess` rules (only `includes/`, `prompt/`, and `vendor/` are blocked, per `.htaccess` line 93). If the `logs/` directory is created and a log file is written, it would be publicly accessible at `https://artisticwebservices.com/logs/mail-dev.log`, exposing all PII submitted via forms (names, emails, phone numbers, messages).
- **Fix**: Add `RewriteRule ^logs/.*$ - [F,L]` to `.htaccess` (or place the log directory outside the webroot). Additionally, create a `.htaccess` inside `logs/` with `Deny from all`.

---

### M-3: Fake / Hardcoded Captcha Values — Zero Bot Protection
- **File**: `includes/form-quote.php:20–21`
- **Severity**: Medium
- **Description**: The form contains two hidden fields with a hardcoded, fixed value of `14`:
  ```html
  <input type="hidden" id="captcha_answer" name="captcha_answer" value="14">
  <input type="hidden" id="captcha"        name="captcha"        value="14">
  ```
  These fields are never validated server-side in `contact-form.php` (no check for `captcha` or `captcha_answer` exists). This is purely cosmetic and provides zero bot/spam protection. Bots that inspect the form (or simply ignore it) can submit freely. The comment "Hidden captcha fields keep server-side validation passing without showing the math question" confirms this is an intentional bypass — but the result is no protection at all.
- **Fix**: Implement a real server-validated protection mechanism. Options in order of preference: (1) Google reCAPTCHA v3 (invisible, frictionless), (2) hCaptcha, (3) a genuine server-side honeypot field with JavaScript-based hidden-field logic, (4) a real math challenge with session-stored answer. Remove the fake hidden fields.

---

### M-4: No Input Length Limits Server-Side
- **File**: `contact-form.php:18–24`, `submit-calculator.php:22–31`
- **Severity**: Medium
- **Description**: While the HTML form has `maxlength="50"` on some fields, there are no corresponding server-side length checks. An attacker bypassing the HTML form (e.g., crafting a raw HTTP request) can submit field values of arbitrary length. Very long values are passed directly to `sendMail()` and ultimately written into the outgoing email, potentially:
  - Causing excessive memory usage or email size
  - Triggering SMTP size limits and causing silent failures
  - Creating very large log entries if `SMTP_LOCAL_DEV` is active
- **Fix**: Add `mb_substr()` truncation after `clean()` / `cleanVal()` for each field, matching the expected max lengths (e.g., 50 for names, 254 for email per RFC 5321, 20 for phone, 5000 for message/description).

---

### M-5: Error Redirect Leaks Internal Error Codes in URL
- **File**: `contact-form.php:38–43`, `submit-calculator.php:34–40`
- **Severity**: Medium
- **Description**: Validation failures redirect with error codes in the query string: `?error=missing`, `?error=invalid_email`. While these are low-sensitivity, if these error parameters are rendered unsanitized anywhere in the front-end (e.g., JavaScript reading `URLSearchParams` and inserting into the DOM), they could become an XSS vector. More broadly, exposing structured internal error codes in URLs is a minor information disclosure.
- **Fix**: Ensure any front-end code reading these query parameters uses `textContent` (not `innerHTML`) for display. Consider using a flash-message approach via session instead of URL query parameters.

---

### M-6: No Rate Limiting on Form Submission Endpoints
- **File**: `contact-form.php`, `submit-calculator.php`
- **Severity**: Medium
- **Description**: There is no rate limiting on `contact-form.php` or `submit-calculator.php`. A bot or malicious actor can submit thousands of emails per minute, causing: (1) spam flooding of the admin inbox, (2) exhaustion of the Hostinger SMTP sending quota, (3) potential blacklisting of the sending domain/IP.
- **Fix**: Implement server-side rate limiting using session-based throttling (e.g., track last submission timestamp in `$_SESSION`, reject if within 60 seconds) or use a reverse proxy/WAF rate limiting rule. On Hostinger, `.htaccess`-based `mod_evasive` rules can also help if available.

---

### M-7: Missing `session_start()` in Form Handlers That Will Need Sessions
- **File**: `contact-form.php`, `submit-calculator.php`
- **Severity**: Medium
- **Description**: Neither `contact-form.php` nor `submit-calculator.php` calls `session_start()`. This means CSRF token validation (once implemented) cannot use PHP sessions unless `session_start()` is added. Additionally, any flash message mechanism (for errors without URL exposure) would also require sessions. This is a blocking prerequisite for implementing C-1 (CSRF fix).
- **Fix**: Add `session_start()` at the top of both handlers, before any output or header calls.

---

### M-8: thank-you.php Outputs Unescaped PHP Short Tags
- **File**: `thank-you.php:24–25`
- **Severity**: Medium
- **Description**: `thank-you.php` uses the short echo tag `<?=` to output `$B` (the base URL) directly into `href` attributes:
  ```php
  <a href="<?= $B ?>/" ...>
  <a href="<?= $B ?>/services.php" ...>
  ```
  `$B` is derived from `SITE_BASE`, which is built from `$_SERVER['HTTP_HOST']`. If an attacker controls the `Host` header, `$B` could contain a `javascript:` URI or a `"` character that breaks out of the attribute context, resulting in XSS. The `SITE_BASE` builder does not apply `htmlspecialchars()` to its output.
- **Fix**: Escape `$B` with `htmlspecialchars()` wherever it is echoed into HTML: `<?= htmlspecialchars($B, ENT_QUOTES, 'UTF-8') ?>`. Also apply the `HTTP_HOST` allowlist fix from H-4.

---

## Low Issues

### L-1: SMTP AUTH LOGIN Responses Not Fully Validated
- **File**: `includes/mailer.php:97–104`
- **Severity**: Low
- **Description**: The AUTH LOGIN sequence sends the username and password in separate steps. The intermediate `334` challenge responses from the server are not validated — only the final `$authResp` is checked. If the server sends an unexpected response mid-sequence, the mailer silently continues, potentially sending credentials at the wrong stage of the protocol.
- **Fix**: Check the return value of each `_smtp_cmd()` call in the AUTH sequence for the expected `334` prefix before proceeding to the next step.

---

### L-2: `@` Error Suppression on `stream_socket_client`
- **File**: `includes/mailer.php:64`
- **Severity**: Low
- **Description**: `@stream_socket_client(...)` suppresses PHP warnings on connection failure. While the error is subsequently logged via `error_log()`, suppressing errors globally on this call masks any unexpected warnings that might be useful during debugging and is generally considered poor practice.
- **Fix**: Remove the `@` suppressor. Use `set_error_handler()` locally if warning suppression is necessary, and always restore it with `restore_error_handler()` afterward.

---

### L-3: `gethostname()` in EHLO May Expose Internal Server Name
- **File**: `includes/mailer.php:77`, `mailer.php:93`
- **Severity**: Low
- **Description**: `EHLO gethostname()` sends the server's internal hostname to the SMTP relay. On shared hosting this is typically innocuous, but on some configurations `gethostname()` returns an internal IP or infrastructure hostname that could aid an attacker in mapping the hosting environment. Some strict SMTP servers also reject non-FQDN EHLO values.
- **Fix**: Use the sending domain as the EHLO argument: `EHLO artisticwebservices.com`, or use `$_SERVER['SERVER_NAME']` validated against the allowlist.

---

### L-4: Plaintext Field Values in Dev Log
- **File**: `includes/mailer.php:203–208`
- **Severity**: Low
- **Description**: The dev log file writes all form field values (including email, phone, message) in plaintext with no masking. If this file is inadvertently left on the server with `SMTP_LOCAL_DEV` still active (or if the file persists from dev testing), it constitutes a PII data store without encryption or access control.
- **Fix**: Ensure `SMTP_LOCAL_DEV` is always `false` in production (enforce via environment variable as per M-1 fix). Add the `logs/` path block to `.htaccess` as per M-2 fix. Consider masking the email field in logs: show only the domain part.

---

### L-5: No `X-Forwarded-For` Logging for Form Submissions
- **File**: `contact-form.php`, `submit-calculator.php`
- **Severity**: Low
- **Description**: Form submissions are processed with no server-side logging of the submitter's IP address. This makes it impossible to investigate spam floods, trace abuse, or provide evidence for any legal/compliance requirement after the fact.
- **Fix**: Log each successful submission to PHP's `error_log()` or a dedicated access log: IP address (from `$_SERVER['REMOTE_ADDR']`), timestamp, and a hash of the email address (for traceability without storing raw PII).

---

### L-6: smtp-config.php Holds SMTP_ADMIN_PASS — Single File Risk
- **File**: `includes/smtp-config.php:34`
- **Severity**: Low
- **Description**: The SMTP password and the admin panel password are both defined in the same file. If a local file inclusion bug (elsewhere in the codebase) or a server misconfiguration exposes `smtp-config.php`, both credentials are compromised simultaneously. The file is not committed with real passwords (good), but the architecture concentrates secrets in one file.
- **Fix**: Consider moving secrets to environment variables (`getenv('SMTP_PASSWORD')`) and reading them at runtime, removing them from PHP source files entirely. Use a `.env` file (blocked in `.htaccess`) with a PHP dotenv loader outside the webroot.

---

### L-7: Content-Security-Policy Uses `unsafe-inline` and `unsafe-eval`
- **File**: `.htaccess:47`
- **Severity**: Low
- **Description**: The `Content-Security-Policy` header (applied globally in `.htaccess`) includes `'unsafe-inline'` and `'unsafe-eval'` in `script-src`. While this is a front-end concern, it significantly weakens the CSP as a defence-in-depth measure against any XSS vulnerabilities found in PHP output. `unsafe-eval` in particular enables arbitrary JavaScript evaluation.
- **Fix**: Refactor inline scripts to external JS files and remove `'unsafe-inline'`. Replace `'unsafe-eval'` with nonce-based or hash-based CSP directives if dynamic evaluation is unavoidable. This is a longer-term refactor but substantially improves XSS mitigation.

---

## Positive Findings

The following practices are correctly implemented and should be maintained:

1. **Output escaping in email HTML body** (`includes/mailer.php:222–223`): All field labels and values passed to the auto-generated HTML email body are escaped with `htmlspecialchars()` and `nl2br()`. This prevents XSS in email clients.

2. **Subject and body use base64 encoding** (`includes/mailer.php:135`, `142–148`): Email subjects use RFC 2047 base64 encoding and body parts use `base64` Content-Transfer-Encoding, which eliminates most character-encoding edge cases.

3. **MIME dot-stuffing implemented** (`includes/mailer.php:154`): `str_replace("\r\n.", "\r\n..", $message)` correctly dot-stuffs the DATA payload per SMTP RFC 5321.

4. **`filter_var(FILTER_VALIDATE_EMAIL)` used in both handlers**: Both `contact-form.php` (line 41) and `submit-calculator.php` (line 38) validate the email address format before processing.

5. **`.htaccess` blocks `includes/` directory**: The `RewriteRule ^(includes|prompt|vendor)/.*$ - [F,L]` rule (`.htaccess` line 93) prevents direct web access to PHP files in the `includes/` directory, protecting `smtp-config.php` and `mailer.php` from direct access.

6. **Security headers are broadly set**: `X-Content-Type-Options`, `X-Frame-Options`, `Strict-Transport-Security`, `Referrer-Policy`, and `Permissions-Policy` are all configured in `.htaccess`. `ServerSignature Off` and `Options -Indexes` reduce information disclosure.

7. **Admin panel login error escaped** (`mailer-admin-aws7749.php:124`): `htmlspecialchars($login_error)` is applied before rendering the error message.

8. **Admin panel cfg() helper escapes all constants** (`mailer-admin-aws7749.php:68–70`): The `cfg()` helper wraps all displayed SMTP constants in `htmlspecialchars()`.

9. **Password placeholder detection** (`mailer-admin-aws7749.php:152`, `160–164`): The admin panel actively checks for the placeholder password string and displays a clear warning if it has not been replaced.

10. **`session_start()` and session-based auth in admin panel**: The admin panel uses PHP sessions correctly for maintaining authentication state across requests.

11. **`noindex, nofollow` meta on admin panel** (`mailer-admin-aws7749.php:78`): Reduces crawler discovery of the admin URL.

---

## Total Issue Count

| Severity | Count |
|---|---|
| Critical | 3 |
| High | 5 |
| Medium | 8 |
| Low | 7 |
| **Total** | **23** |

---

## Remediation Priority Order

| Priority | Issue | Effort |
|---|---|---|
| 1 | C-1: Implement CSRF tokens | Medium |
| 2 | C-2: Fix SSL verify_peer | Low |
| 3 | C-3: Switch forms to POST | Low |
| 4 | H-5: Sanitize CRLF in email headers | Low |
| 5 | H-4: Validate HTTP_HOST allowlist | Low |
| 6 | H-1: Admin login rate limiting/lockout | Medium |
| 7 | H-3: Fix session token scheme | Low |
| 8 | M-2: Block logs/ in .htaccess | Low |
| 9 | M-3: Replace fake captcha | High |
| 10 | M-6: Rate limit form endpoints | Medium |
| 11 | H-2: IP-restrict admin panel | Low |
| 12 | M-8: Escape $B in thank-you.php | Low |
| 13 | M-1: Use env var for SMTP_LOCAL_DEV | Low |
| 14 | Remaining M / L issues | Low–Medium |
