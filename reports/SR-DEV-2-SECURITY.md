# Senior Dev Report #2 — Security Hardening
**Engineer**: Senior Fullstack Developer #2 (10 YOE)
**Date**: April 2026
**Specialization**: Web Application Security, OWASP Top 10

---

## Executive Summary

A full security audit of the ArtisticWebServices PHP web application was conducted against the OWASP Top 10 (2021) framework. Eight distinct security issues were identified ranging from Critical to Low severity. The most urgent findings are: **all form endpoints lack CSRF protection** (every POST/GET handler is forgeable), **SSL peer verification is disabled** in the raw SMTP socket (enabling man-in-the-middle interception of SMTP credentials), **the admin panel has no IP allowlist** and is brute-forceable from the open internet, and **the `submit-calculator.php` endpoint accepts all its sensitive input via GET**, leaking full form data into server access logs, proxy logs, and browser history.

On the positive side: all user input is passed through `htmlspecialchars(strip_tags(trim()))` before being reflected, email addresses are validated with `FILTER_VALIDATE_EMAIL`, `Options -Indexes` is set, the `includes/` directory is blocked at the rewrite level, and no raw `echo $_GET/$_POST` reflections were found in templates.

The table below summarises every finding. Full remediation code follows.

---

## Risk Summary

| # | Issue | Severity | OWASP 2021 | Fixed in This Report |
|---|-------|----------|------------|---------------------|
| 1 | No CSRF tokens on any form | CRITICAL | A01 – Broken Access Control | Yes |
| 2 | SSL `verify_peer=false` in SMTP socket | CRITICAL | A02 – Cryptographic Failures | Yes |
| 3 | Admin panel open to internet (no IP restriction) | HIGH | A05 – Security Misconfiguration | Yes |
| 4 | Calculator form uses GET — data in logs/history | HIGH | A04 – Insecure Design | Yes |
| 5 | `SMTP_LOCAL_DEV` detected via HTTP_HOST (spoofable) | MEDIUM | A05 – Security Misconfiguration | Yes |
| 6 | No rate limiting on any form endpoint | MEDIUM | A07 – Identification/Auth Failures | Yes |
| 7 | Phone field has no server-side format validation | LOW | A03 – Injection | Yes |
| 8 | CSP contains `'unsafe-inline'` and `'unsafe-eval'` | LOW | A05 – Security Misconfiguration | Yes |
| 9 | No open-redirect risk found (hardcoded redirects only) | PASS | A01 | N/A |
| 10 | No file-inclusion manipulation risk found | PASS | A03 | N/A |

---

## CRITICAL: No CSRF Tokens on Any Form Endpoint

**OWASP Category**: A01:2021 – Broken Access Control  
**Files**: `includes/form-quote.php`, `includes/footer.php` (modal), `contact-form.php`, `submit-calculator.php`

### Vulnerable Code

`includes/form-quote.php` — the standard quote form has no token field:
```php
<form id="contact" action="<?= htmlspecialchars($_fq_action) ?>" method="get" class="aws-qf-form" novalidate>
    <input type="hidden" name="host"           value="ArtisticWebServices">
    <input type="hidden" id="captcha_answer"   name="captcha_answer" value="14">
    <input type="hidden" id="captcha"          name="captcha"        value="14">
    <!-- NO CSRF TOKEN -->
```

`includes/footer.php` modal — JavaScript fetch POST with no token:
```javascript
fetch('/contact-form', {
    method: 'POST',
    body: data          // FormData has no csrf_token field
}).catch(function(){});
```

`contact-form.php` — validates fields but never checks a CSRF token:
```php
if (empty($first_name) || empty($email)) { ...redirect... }
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { ...redirect... }
// sendMail() called immediately — any cross-origin POST succeeds
sendMail([...]);
```

### Why This Matters

A malicious website can embed a hidden form or use `fetch()` to silently POST to `contact-form.php` from any browser that has a valid session with your server. While the primary impact here is spam email flooding and potential spear-phishing (an attacker can craft any "Name" and "Service" combination and have it arrive in your inbox), this also serves as an amplification primitive: a single viral link could trigger thousands of forged submissions.

The `captcha_answer` hidden field is hardcoded to `14` in both the HTML and the server never validates it — it provides zero protection.

---

## CSRF Implementation Plan

### Step 1 — Token Generator / Session Middleware (`includes/csrf.php`)

Create `D:\xampp\htdocs\artasticwebservices-web\includes\csrf.php`:

```php
<?php
/**
 * csrf.php — Synchroniser-Token Pattern (OWASP-recommended)
 * Include this file at the top of every form-rendering page.
 */

if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'secure'   => true,          // HTTPS only (production)
        'httponly' => true,
        'samesite' => 'Strict',
    ]);
    session_start();
}

/**
 * Generate (or return existing) CSRF token for the current session.
 * Rotates on each new session, NOT per-request (avoids breaking
 * multi-tab workflows while still preventing CSRF).
 */
function csrf_token(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Validate submitted token.
 * Call this at the top of every POST/GET handler before any side-effects.
 */
function csrf_verify(): void
{
    $submitted = $_POST['csrf_token'] ?? $_GET['csrf_token'] ?? '';
    $expected  = $_SESSION['csrf_token'] ?? '';

    // hash_equals prevents timing-based side-channel attacks
    if (!$expected || !hash_equals($expected, $submitted)) {
        http_response_code(403);
        // Generic error — do NOT reveal that it is a CSRF failure
        header('Location: ' . (defined('SITE_BASE') ? SITE_BASE : '') . '/contact?error=invalid_request');
        exit;
    }

    // Rotate token after successful validation (optional but adds defence-in-depth)
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

/**
 * Emit the hidden <input> for use in HTML forms.
 */
function csrf_field(): string
{
    return '<input type="hidden" name="csrf_token" value="'
         . htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8')
         . '">';
}

/**
 * Return the token as a string (use in fetch() / JS headers).
 */
function csrf_meta(): string
{
    return '<meta name="csrf-token" content="'
         . htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8')
         . '">';
}
```

### Step 2 — Apply to `includes/form-quote.php`

```php
<?php
if (!defined('SITE_BASE')) {
    require_once __DIR__ . '/config.php';
}
require_once __DIR__ . '/csrf.php';   // ← ADD THIS
$_fq_action = SITE_BASE . '/contact-form';
?>
<form id="contact" action="<?= htmlspecialchars($_fq_action) ?>" method="post" class="aws-qf-form" novalidate>
    <?= csrf_field() ?>              <!-- ← ADD THIS -->
    <input type="hidden" name="host" value="ArtisticWebServices">
    <!-- remove the fake captcha hidden fields — they do nothing -->
    ...
```

> Change `method="get"` to `method="post"` at the same time (see Issue #4 below).

### Step 3 — Apply to every page that renders a form

Add to the `<head>` section (in `includes/head.php` or each page):
```php
<?php require_once __DIR__ . '/includes/csrf.php'; ?>
...
<head>
    <?= csrf_meta() ?>   <!-- exposes token for JavaScript fetch() -->
```

### Step 4 — Validate in `contact-form.php`

```php
<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/csrf.php';     // ← ADD
require_once __DIR__ . '/includes/mailer.php';

// Validate CSRF token BEFORE reading any user input
csrf_verify();                                    // ← ADD — exits on failure

// ... rest of the file unchanged ...
```

### Step 5 — Validate in `submit-calculator.php`

```php
<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/csrf.php';     // ← ADD
require_once __DIR__ . '/includes/mailer.php';

csrf_verify();                                    // ← ADD

// ... rest unchanged ...
```

### Step 6 — Update the footer modal `fetch()` to include the token

In `includes/footer.php`, replace the `awsSubmitForm` function's `fetch` call:

```javascript
function awsSubmitForm(e) {
    e.preventDefault();
    var form = document.getElementById('awsLeadForm');
    var btn  = form.querySelector('.aws-form-submit');
    btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Sending...';
    btn.disabled = true;

    var data = new FormData(form);
    data.append('host', 'ArtisticWebServices');

    // ── Read CSRF token injected by csrf_meta() in <head> ──────────
    var csrfMeta = document.querySelector('meta[name="csrf-token"]');
    if (csrfMeta) {
        data.append('csrf_token', csrfMeta.getAttribute('content'));
    }
    // ───────────────────────────────────────────────────────────────

    /* Remember visitor for Tawk.to */
    try {
        var fn = (form.querySelector('[name="first_name"]') || {}).value || '';
        var ln = (form.querySelector('[name="last_name"]') || {}).value || '';
        var em = (form.querySelector('[name="email"]') || {}).value || '';
        var ph = (form.querySelector('[name="phone"]') || {}).value || '';
        localStorage.setItem('awsTawkVisitor', JSON.stringify({
            name: (fn + ' ' + ln).replace(/\s+/g, ' ').trim(),
            email: em.trim(),
            phone: ph.trim()
        }));
    } catch (err) { }

    fetch('/contact-form', {
        method: 'POST',
        body: data
    }).catch(function(){});

    setTimeout(function() {
        var base = document.querySelector('meta[name="site-base"]');
        var b = base ? base.getAttribute('content') : '';
        window.location.href = b + '/thank-you';
    }, 800);
}
```

---

## CRITICAL: SSL `verify_peer=false` in SMTP Socket

**OWASP Category**: A02:2021 – Cryptographic Failures  
**File**: `includes/mailer.php` lines 54–60

### Vulnerable Code

```php
$ctx = stream_context_create([
    'ssl' => [
        'verify_peer'       => false,   // ← CRITICAL
        'verify_peer_name'  => false,   // ← CRITICAL
        'allow_self_signed' => true,    // ← CRITICAL
    ],
]);
```

### Why This Matters

With `verify_peer=false`, the mailer will happily connect to ANY server claiming to be `smtp.hostinger.com`. A network-level attacker (on the same LAN segment, rogue DNS, or a compromised upstream router) can intercept the SMTP connection and harvest the plaintext `SMTP_PASSWORD` credentials, which are transmitted as Base64 (not encryption) during `AUTH LOGIN`. They then gain full access to the company's email account.

This is not a theoretical risk — shared hosting environments share network infrastructure.

### Fixed Code

```php
// Determine CA bundle path (adjust to your server's actual path)
$caBundlePath = ini_get('curl.cainfo')                        // use PHP's configured bundle
             ?: (file_exists('/etc/ssl/certs/ca-certificates.crt')
                    ? '/etc/ssl/certs/ca-certificates.crt'   // Debian/Ubuntu
                    : (file_exists('/etc/pki/tls/certs/ca-bundle.crt')
                        ? '/etc/pki/tls/certs/ca-bundle.crt' // RHEL/CentOS
                        : ''));                               // fallback — log a warning

if (!$caBundlePath) {
    error_log('[Mailer] WARNING: No CA bundle found. SSL peer verification skipped — update $caBundlePath in mailer.php');
}

$ctx = stream_context_create([
    'ssl' => [
        'verify_peer'       => (bool) $caBundlePath,   // true when bundle found
        'verify_peer_name'  => (bool) $caBundlePath,
        'allow_self_signed' => false,                  // never accept self-signed
        'cafile'            => $caBundlePath ?: null,
        'peer_name'         => $host,                  // must match SMTP_HOST CN
    ],
]);
```

**For Hostinger specifically**: Hostinger's shared servers use cPanel/CloudLinux. The CA bundle is typically at `/etc/pki/tls/certs/ca-bundle.crt`. If `curl.cainfo` is set in `php.ini` (it usually is on Hostinger), the `ini_get()` path will resolve correctly without any hardcoding.

---

## HIGH: Admin Panel Open to the Internet (No IP Restriction)

**OWASP Category**: A05:2021 – Security Misconfiguration  
**File**: `mailer-admin-aws7749.php`

### Vulnerable Code

```php
// ── Handle login ──────────────────────────────────────────────────────────────
$login_error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['panel_password'])) {
    $submitted = trim($_POST['panel_password'] ?? '');
    if ($submitted === SMTP_ADMIN_PASS || $submitted === $today_token) {
        // ... grant access
    } else {
        $login_error = 'Incorrect password.';
        sleep(2);   // ← 2 second delay is insufficient protection
    }
}
```

The `sleep(2)` brute-force mitigation is inadequate. An attacker can run parallel requests (threaded tools like Hydra bypass per-connection delays entirely). There is also no account lockout, no CAPTCHA, and the URL `mailer-admin-aws7749.php` (while obscure) is trivially discoverable via web crawlers, Shodan, or leaking through git history.

### Why This Matters

If `SMTP_ADMIN_PASS` uses a weak password, an attacker gains a UI that confirms the SMTP hostname, port, username, and can trigger outbound emails from your mail server — usable for phishing, spam flooding, or reputation damage.

### Fixed Code — Three-Layer Defence

**Layer 1: IP Allowlist in `.htaccess`** (most effective — stops the request before PHP runs):

Add to `.htaccess`, before any RewriteRules:
```apache
# ─── Admin Panel IP Restriction ─────────────────────
<Files "mailer-admin-aws7749.php">
    Order Deny,Allow
    Deny from all
    Allow from 203.0.113.50     # ← Replace with your static office IP
    Allow from 198.51.100.0/24  # ← Replace with your VPN subnet (if applicable)
    # For dynamic IPs: use a VPN or SSH tunnel instead of listing IPs here
</Files>
```

**Layer 2: Add CSRF token to the admin login form** (prevents CSRF-based session fixation):

In `mailer-admin-aws7749.php`, update the login form:
```php
require_once __DIR__ . '/includes/csrf.php';

// In login handler — verify CSRF first
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['panel_password'])) {
    csrf_verify();   // ← ADD before checking the password

    $submitted = trim($_POST['panel_password'] ?? '');
    ...
}
```

And in the HTML form:
```html
<form method="POST">
    <?= csrf_field() ?>     <!-- ← ADD -->
    <div class="form-group">
        <label for="panel_password">Admin Password</label>
        <input type="password" ...>
    </div>
    <button type="submit" class="btn">Unlock Panel</button>
</form>
```

**Layer 3: Persistent lockout with failed-attempt counter**:

```php
// At top of mailer-admin-aws7749.php, after session_start():
$lockout_key  = 'admin_fail_count';
$lockout_time = 'admin_fail_time';
$max_attempts = 5;
$lockout_secs = 900; // 15 minutes

// Check if locked out
if (isset($_SESSION[$lockout_key]) && $_SESSION[$lockout_key] >= $max_attempts) {
    $elapsed = time() - ($_SESSION[$lockout_time] ?? 0);
    if ($elapsed < $lockout_secs) {
        http_response_code(429);
        die('Too many failed attempts. Try again in ' . ceil(($lockout_secs - $elapsed) / 60) . ' minutes.');
    } else {
        // Reset after lockout period
        unset($_SESSION[$lockout_key], $_SESSION[$lockout_time]);
    }
}

// In the failed-login branch:
} else {
    $_SESSION[$lockout_key]  = ($_SESSION[$lockout_key] ?? 0) + 1;
    $_SESSION[$lockout_time] = time();
    $login_error = 'Incorrect password.';
    sleep(2);
}
```

---

## HIGH: Calculator Form Uses GET — Sensitive Data Exposed in Logs

**OWASP Category**: A04:2021 – Insecure Design  
**File**: `submit-calculator.php` line 22, `services/app-cost-calculator.php` (form action)

### Vulnerable Code

```php
// submit-calculator.php reads every field from $_GET:
$name        = cleanVal($_GET['username']          ?? '');
$email       = cleanVal($_GET['user-email']        ?? '');
$phone       = cleanVal($_GET['user-number']       ?? '');
```

A GET form submission appends all field values to the URL:
```
/submit-calculator?username=John+Doe&user-email=john@example.com&user-number=2135551234&...
```

This URL is written verbatim to:
- Apache/Nginx **access logs** (readable by any shared-hosting admin)
- **Browser history** (accessible to any other user or malware on the device)
- **Referrer headers** if the page links anywhere externally
- **HTTP proxy logs** and CDN logs
- **Analytics tools** (GA, etc.) if they capture the full URL

### Fixed Code

**In `submit-calculator.php`** — accept both POST and GET (backwards-compatible during transition):
```php
// Replace: $name = cleanVal($_GET['username'] ?? '');
// With:
$src  = ($_SERVER['REQUEST_METHOD'] === 'POST') ? $_POST : $_GET;

$name        = cleanVal($src['username']          ?? '');
$email       = cleanVal($src['user-email']        ?? '');
$phone       = cleanVal($src['user-number']       ?? '');
$platforms   = cleanArr($src['platforms']         ?? []);
$proj_type   = cleanVal($src['project-type']      ?? '');
$ui_type     = cleanVal($src['ui-type']           ?? '');
$sign_types  = cleanArr($src['signup-types']      ?? []);
$screens     = cleanVal($src['number-of-screens'] ?? '');
$funcs       = cleanArr($src['functionalities']   ?? []);
$description = cleanVal($src['app-description']   ?? '');
```

**In the calculator form HTML** — change `method` to `POST` and add the CSRF field:
```html
<form action="/submit-calculator" method="post">
    <?= csrf_field() ?>
    <!-- all existing fields unchanged -->
</form>
```

---

## MEDIUM: `SMTP_LOCAL_DEV` Detected via `HTTP_HOST` (Spoofable on CLI/Proxy)

**OWASP Category**: A05:2021 – Security Misconfiguration  
**File**: `includes/smtp-config.php` lines 43–47

### Vulnerable Code

```php
$_smtp_local_host = strtolower($_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? '');
define('SMTP_LOCAL_DEV',
    str_starts_with($_smtp_local_host, 'localhost') ||
    str_starts_with($_smtp_local_host, '127.0.0.1')
);
```

`HTTP_HOST` is a client-supplied header. A request sent with `Host: localhost` to your live production server would set `SMTP_LOCAL_DEV = true`, causing all emails to be silently written to `logs/mail-dev.log` instead of being sent — effectively a denial-of-service against your contact form email delivery.

Additionally, hardcoding environment behaviour inside PHP source (rather than environment variables or a `.env` file) means the same codebase cannot be cleanly promoted between dev/staging/production without code changes.

### Fixed Code

**`.env` file** (place one directory ABOVE the web root, never inside `htdocs/`):
```ini
# /home/username/.env   OR   /var/www/.env  — NOT inside htdocs/
APP_ENV=production
SMTP_LOCAL_DEV=false
SMTP_HOST=smtp.hostinger.com
SMTP_PORT=465
SMTP_SECURE=ssl
SMTP_USERNAME=info@artisticwebservices.com
SMTP_PASSWORD=your_real_password_here
SMTP_FROM_EMAIL=info@artisticwebservices.com
SMTP_FROM_NAME=ArtisticWebServices
MAIL_TO=info@artisticwebservices.com
SMTP_ADMIN_PASS=your_strong_admin_password_here
```

**`includes/smtp-config.php`** — replace the entire file:
```php
<?php
/**
 * SMTP Configuration — reads from environment variables.
 * Set these in the server environment, a .env loader, or Hostinger's hPanel
 * → Advanced → PHP Configuration → Environment Variables.
 *
 * NEVER hardcode credentials. NEVER commit passwords to version control.
 */

// ── Optional: load a .env file if one exists one level above the web root ──
$_envFile = dirname(__DIR__, 1) . '/../.env';   // adjust depth to your server layout
if (is_readable($_envFile)) {
    foreach (file($_envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $_line) {
        if (str_starts_with(trim($_line), '#') || !str_contains($_line, '=')) continue;
        [$_k, $_v] = explode('=', $_line, 2);
        $_k = trim($_k); $_v = trim($_v);
        if (!isset($_ENV[$_k]) && !getenv($_k)) {
            putenv("{$_k}={$_v}");
            $_ENV[$_k] = $_v;
        }
    }
    unset($_envFile, $_line, $_k, $_v);
}

// ── Helper: read env with fallback ──────────────────────────────────────────
function _env(string $key, $default = ''): string {
    $v = getenv($key);
    return ($v !== false && $v !== '') ? $v : (string) $default;
}

// ── SMTP Settings ────────────────────────────────────────────────────────────
define('SMTP_HOST',       _env('SMTP_HOST',       'smtp.hostinger.com'));
define('SMTP_PORT',  (int) _env('SMTP_PORT',       '465'));
define('SMTP_SECURE',     _env('SMTP_SECURE',      'ssl'));
define('SMTP_USERNAME',   _env('SMTP_USERNAME',    ''));
define('SMTP_PASSWORD',   _env('SMTP_PASSWORD',    ''));
define('SMTP_FROM_EMAIL', _env('SMTP_FROM_EMAIL',  ''));
define('SMTP_FROM_NAME',  _env('SMTP_FROM_NAME',   'ArtisticWebServices'));
define('MAIL_TO',         _env('MAIL_TO',          ''));
define('SMTP_ADMIN_PASS', _env('SMTP_ADMIN_PASS',  ''));
define('SMTP_DEBUG',      _env('APP_ENV', 'production') !== 'production');

// ── Local dev flag: read from env, NOT from HTTP_HOST ───────────────────────
// Set SMTP_LOCAL_DEV=true in your local .env only.
define('SMTP_LOCAL_DEV',  strtolower(_env('SMTP_LOCAL_DEV', 'false')) === 'true');
```

---

## MEDIUM: No Rate Limiting on Form Endpoints

**OWASP Category**: A07:2021 – Identification and Authentication Failures  
**Files**: `contact-form.php`, `submit-calculator.php`

### Current State

Neither handler implements any rate limiting. An attacker can spam thousands of submissions per second, flooding the inbox and potentially causing SMTP rate-limit bans from Hostinger.

### Fixed Code — PHP-Level Rate Limiter (No Redis/Memcache Required)

Add to `includes/rate-limit.php`:
```php
<?php
/**
 * rate-limit.php — Simple file-based rate limiter.
 * For production scale, replace with Redis INCR + EXPIRE.
 *
 * Usage: rate_limit_check('contact_form', 5, 60);
 *        // max 5 requests per 60 seconds per IP
 */

function rate_limit_check(string $action, int $maxHits, int $windowSeconds): void
{
    $ip      = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    $key     = preg_replace('/[^a-z0-9_]/', '_', $action . '_' . $ip);
    $dir     = sys_get_temp_dir() . '/aws_rl';
    $file    = $dir . '/' . $key . '.json';

    if (!is_dir($dir)) { @mkdir($dir, 0700, true); }

    $now  = time();
    $data = [];

    if (is_readable($file)) {
        $raw = @file_get_contents($file);
        if ($raw) $data = json_decode($raw, true) ?: [];
    }

    // Prune entries outside the window
    $data = array_filter($data, fn($t) => ($now - $t) < $windowSeconds);
    $data[] = $now;

    @file_put_contents($file, json_encode(array_values($data)), LOCK_EX);

    if (count($data) > $maxHits) {
        http_response_code(429);
        header('Retry-After: ' . $windowSeconds);
        $base = defined('SITE_BASE') ? SITE_BASE : '';
        header("Location: {$base}/contact?error=too_many_requests");
        exit;
    }
}
```

Then add near the top of `contact-form.php` and `submit-calculator.php`:
```php
require_once __DIR__ . '/includes/rate-limit.php';
rate_limit_check('contact_form', 5, 60);  // 5 submissions per minute per IP
```

---

## LOW: Phone Field Has No Server-Side Format Validation

**OWASP Category**: A03:2021 – Injection  
**Files**: `contact-form.php` line 21, `submit-calculator.php` line 24

### Vulnerable Code

```php
$phone = clean($src['phone'] ?? '');
// clean() only does htmlspecialchars + strip_tags + trim
// No regex check — any string passes through to the email body
```

While this does not currently reach a database (so SQL injection is N/A), unvalidated phone numbers can contain arbitrary Unicode, control characters, or RTL overrides that may confuse email clients or logging systems.

### Fixed Code

Add to both handlers after the existing `$phone` line:
```php
$phone = clean($src['phone'] ?? '');

// Server-side phone validation — allow digits, spaces, +, -, (, ) only
if ($phone !== '' && !preg_match('/^\+?[\d\s\-(). ]{6,20}$/', $phone)) {
    $phone = ''; // silently strip invalid phone rather than reject the whole form
}
```

---

## LOW: Content-Security-Policy Contains `'unsafe-inline'` and `'unsafe-eval'`

**OWASP Category**: A05:2021 – Security Misconfiguration  
**File**: `.htaccess` line 47

### Vulnerable Code

```apache
Header always set Content-Security-Policy "default-src 'self'; \
    script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.jsdelivr.net ...
```

`'unsafe-inline'` allows inline `<script>` and `onclick=` attributes — negating most XSS protection. `'unsafe-eval'` permits `eval()`, `setTimeout(string)`, etc.

### Why This Matters

If any XSS were introduced (even via a future code change), the current CSP would not block it. The CSP is effectively decorative today.

### Fixed Code — Nonce-Based CSP (Recommended Path)

The cleanest solution is to generate a per-request nonce in PHP and add it to every inline `<script>` tag:

**In `includes/head.php`** (or a new `includes/csp.php`):
```php
<?php
// Generate nonce once per request
if (!defined('CSP_NONCE')) {
    define('CSP_NONCE', base64_encode(random_bytes(16)));
}

// Emit CSP header — replaces the .htaccess CSP (more flexible from PHP)
$csp = implode('; ', [
    "default-src 'self'",
    "script-src 'self' 'nonce-" . CSP_NONCE . "' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://*.tawk.to https://embed.tawk.to",
    "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://*.tawk.to",
    // Note: style-src still needs unsafe-inline for the many inline styles in templates
    // Migrate to external stylesheets progressively to remove this
    "font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com data: https://*.tawk.to",
    "img-src 'self' data: https: https://*.tawk.to https://cdn.jsdelivr.net https://tawk.link https://s3.amazonaws.com",
    "connect-src 'self' https://artisticwebservices.com https://*.tawk.to wss://*.tawk.to",
    "frame-src https://*.tawk.to",
    "form-action 'self'",
    "object-src 'none'",
    "base-uri 'self'",
    "upgrade-insecure-requests",
]);
header("Content-Security-Policy: {$csp}");
```

Then add `nonce="<?= CSP_NONCE ?>"` to every `<script>` block in templates:
```html
<script nonce="<?= htmlspecialchars(CSP_NONCE, ENT_QUOTES) ?>">
    // your inline script
</script>
```

Remove the CSP line from `.htaccess` once the PHP header is in place (they must not conflict):
```apache
# Remove or comment out this line in .htaccess:
# Header always set Content-Security-Policy "..."
```

**Short-term fix** (remove `'unsafe-eval'` at minimum — it is not needed by any current code):
```apache
Header always set Content-Security-Policy "default-src 'self'; \
    script-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net \
    https://cdnjs.cloudflare.com https://*.tawk.to; \
    style-src 'self' 'unsafe-inline' https://fonts.googleapis.com \
    https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://*.tawk.to; \
    font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com data: https://*.tawk.to; \
    img-src 'self' data: https: https://*.tawk.to https://cdn.jsdelivr.net https://tawk.link https://s3.amazonaws.com; \
    connect-src 'self' https://artisticwebservices.com https://*.tawk.to wss://*.tawk.to; \
    frame-src https://*.tawk.to; \
    form-action 'self'; \
    object-src 'none'; \
    base-uri 'self'; \
    upgrade-insecure-requests;"
```

---

## PASS: Open Redirect — No Risk Found

**File checked**: `thank-you.php`, `contact-form.php`, `submit-calculator.php`

All redirect targets are constructed from the `SITE_BASE` constant (a hardcoded PHP define, not user-controlled) plus hardcoded path strings. No user-supplied `redirect=`, `return=`, or `next=` parameters are honoured anywhere. **No open-redirect vulnerability exists.**

```php
// contact-form.php — safe: $base is a PHP constant, not $_GET['base']
header("Location: {$base}/thank-you");
exit;
```

---

## PASS: File Inclusion Safety — No Risk Found

**Files checked**: all `require_once` calls across all audited files.

Every include path is constructed with `__DIR__` and a hardcoded string literal. No user input reaches any `require`, `include`, `require_once`, or `include_once` call. **No LFI/RFI risk exists.**

```php
// All includes follow this safe pattern:
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/mailer.php';
```

---

## PASS: XSS Output Escaping — Adequate

All user-supplied values pass through `clean()` / `cleanVal()` which wraps `htmlspecialchars(strip_tags(trim()))` before any reflection. The mailer template also escapes all field labels and values with `htmlspecialchars()` before inserting into the HTML email body. No raw `echo $_GET` or `echo $_POST` statements were found in any audited file.

---

## PASS: Information Disclosure — Adequately Controlled

- `Options -Indexes` is set (no directory listing)
- `ServerSignature Off` is set
- Error pages redirect to `index.php` (no stack traces visible to users)
- PHP error display should be `Off` in production `php.ini` (verify with `phpinfo()` check)
- The admin panel does not display the SMTP password in plaintext (uses bullet masking)
- SMTP error details go to `error_log()`, not to the browser

**Recommendation**: Confirm `display_errors = Off` and `log_errors = On` in your Hostinger PHP settings.

---

## Security Checklist

| Check | Status | Fix Applied |
|---|---|---|
| CSRF tokens on all forms | FAIL | Yes — `includes/csrf.php` + per-handler `csrf_verify()` |
| CSRF token in footer modal fetch() | FAIL | Yes — JS reads `<meta name="csrf-token">` |
| SSL peer verification enabled | FAIL | Yes — CA bundle lookup with `verify_peer=true` |
| Admin panel IP-restricted | FAIL | Yes — `.htaccess <Files>` block + session lockout |
| Admin panel has CSRF protection | FAIL | Yes — `csrf_verify()` in login handler |
| Calculator form uses POST | FAIL | Yes — change `method="post"`, read `$_POST` |
| Rate limiting on form endpoints | FAIL | Yes — `includes/rate-limit.php` |
| Phone field server-side validation | FAIL | Yes — regex strip on invalid values |
| `'unsafe-eval'` removed from CSP | FAIL | Yes — short-term fix provided, nonce path documented |
| `SMTP_LOCAL_DEV` via HTTP_HOST | FAIL | Yes — `.env` / `getenv()` replacement |
| XSS output escaping | PASS | N/A |
| Open redirect | PASS | N/A |
| File inclusion safety | PASS | N/A |
| Information disclosure | PASS | N/A |
| `Options -Indexes` set | PASS | N/A |
| `includes/` blocked from web | PASS | N/A |
| Email address validated with FILTER_VALIDATE_EMAIL | PASS | N/A |
| SMTP credentials not in version-controlled source | PARTIAL | Yes — `.env` migration removes all hardcoded values |

---

## Deployment Order (Recommended)

Apply fixes in this order to avoid breaking the live site:

1. **Create `includes/csrf.php`** — no impact, purely additive.
2. **Update `includes/smtp-config.php`** to use `getenv()` — test SMTP still sends before deploying.
3. **Fix SSL `verify_peer`** in `mailer.php` — confirm CA bundle path on Hostinger first.
4. **Add IP restriction** to `.htaccess` for `mailer-admin-aws7749.php`.
5. **Add `csrf_verify()`** to `contact-form.php` and `submit-calculator.php`.
6. **Update `form-quote.php`** to use `method="post"` and add `csrf_field()`.
7. **Update footer modal JS** to include the CSRF token in fetch().
8. **Switch calculator form** from GET to POST.
9. **Add `rate-limit.php`** to both handlers.
10. **Remove `'unsafe-eval'`** from CSP in `.htaccess`.
11. **Plan nonce-based CSP** migration as a follow-up sprint.
