# Senior Dev Report #6 — DevOps, Email Pipeline & Environment Config
**Engineer**: Senior Fullstack Developer #6 (10 YOE)
**Date**: April 2026
**Specialization**: DevOps, Email Systems, Infrastructure, CI/CD

---

## Executive Summary

This audit covers the complete DevOps and email infrastructure for artisticwebservices.com, hosted on Hostinger shared hosting. The site uses a hand-rolled native PHP SMTP mailer instead of PHPMailer (which is declared in `composer.json` but never installed), manual FTP deployment, and a single `smtp-config.php` file that mixes credentials with runtime logic. Overall the system is functional but carries several reliability gaps, one security smell (credentials file structure encourages committing placeholders adjacent to real values), and a completely absent CI/CD pipeline.

**Critical Issues: 1** — SMTP failure silently redirects user to thank-you without showing an error.
**High Issues: 3** — No retry logic, no production logging, PHPMailer phantom dependency.
**Medium Issues: 4** — Missing gzip MIME types, no ETags control, robots.txt gaps, no `.env` separation.
**Low Issues: 3** — Sitemap missing `lastmod`, cache durations aggressive for PHP pages, no X-Robots-Tag on handler endpoints.

---

## Issue #1: Silent Failure on SMTP Error — User Sees Thank-You on Failed Send
**Severity**: Critical
**File**: `contact-form.php:56-64`, `submit-calculator.php:58-67`
**Problem**: Both form handlers call `sendMail()` and completely discard the boolean return value. If SMTP fails (wrong password, Hostinger outage, socket timeout), the user is silently redirected to `/thank-you`, the lead is lost, there is no log entry in production mode, and the business has no idea.

```php
// CURRENT — return value ignored:
sendMail([...]);
header("Location: {$base}/thank-you");
exit;

// FIXED — check return value, queue failed emails, redirect appropriately:
$sent = sendMail([
    'reply_to' => $email,
    'subject'  => "New Inquiry from $first_name $last_name — $host",
    'fields'   => $fields,
    'source'   => $page,
]);

if (!$sent) {
    // Log the failed lead so no inquiry is lost
    _mailer_queue_failed([
        'to'      => MAIL_TO,
        'subject' => "New Inquiry from $first_name $last_name — $host",
        'fields'  => $fields,
        'source'  => $page,
    ]);
    // Redirect to a soft-error page that asks user to try again / call directly
    header("Location: {$base}/contact-us?error=send_failed");
    exit;
}

header("Location: {$base}/thank-you");
exit;
```

Apply the same pattern to `submit-calculator.php`. Add a `?error=send_failed` message handler in `contact-us.php` (a simple JS/PHP check on the query string, showing an inline banner).

---

## Issue #2: No SMTP Retry Logic — Single Transient Failure Loses the Lead
**Severity**: High
**File**: `includes/mailer.php:41-174`
**Problem**: `_smtp_send()` attempts to open the socket exactly once. Transient DNS hiccups or momentary Hostinger SMTP queue backlogs (common on shared hosting) will permanently fail without retry. The 15-second timeout is hard-coded and not configurable.

**Fix**: Add a retry wrapper inside `sendMail()` before returning `false`, and expose timeout as a constant.

See **Email Reliability Improvements** section below for the full updated `mailer.php`.

---

## Issue #3: No Production Error Logging — Failures Disappear Silently
**Severity**: High
**File**: `includes/mailer.php:200-209`
**Problem**: The log file (`logs/mail-dev.log`) is only written when `SMTP_LOCAL_DEV === true`. In production, PHP's `error_log()` is called inside `_smtp_send()` on socket/auth failures, but the failed email payload (To, Subject, fields) is never captured. If Hostinger's SMTP is down for an hour, there is no record of which leads were lost.

**Fix**: Implement `_mailer_queue_failed()` — a function that appends failed email payloads as JSON lines to a non-web-accessible log file. See Email Reliability Improvements section.

---

## Issue #4: PHPMailer Declared in composer.json But Never Installed or Used
**Severity**: High
**File**: `composer.json`
**Problem**: `composer.json` requires `phpmailer/phpmailer: ^6.9` but the `vendor/` directory does not exist. The site uses a custom native SMTP implementation in `mailer.php` instead. This creates three problems:
1. Any developer who runs `composer install` will install PHPMailer but it will never be loaded — confusing.
2. CI/CD pipelines that auto-run `composer install` waste time and disk.
3. It signals an abandoned migration intention.

**Recommendation**: Remove the PHPMailer dependency and keep the native SMTP implementation. Reasoning:
- The native mailer already handles SSL/TLS, MIME multipart, AUTH LOGIN, and dot-stuffing correctly.
- PHPMailer adds ~500KB of vendor code for no functional gain on Hostinger shared hosting.
- Shared hosting PHP often has OpenSSL but not Composer's stream wrappers configured for autoload.
- If reliability becomes an issue, migrate to Hostinger's SMTP relay or a transactional provider (Mailgun, Postmark) via their HTTP API — not via PHPMailer.

**Updated composer.json**:
```json
{
    "name": "artisticwebservices/website",
    "description": "ArtisticWebServices main website — no PHP dependencies (native SMTP mailer)",
    "require": {},
    "config": {
        "optimize-autoloader": true,
        "vendor-dir": "vendor"
    }
}
```

---

## Issue #5: SMTP Credentials Structure Encourages Accidental Commit
**Severity**: Medium
**File**: `includes/smtp-config.php`
**Problem**: While the current file uses placeholder values (`YOUR_EMAIL_PASSWORD_HERE`), the entire credential structure lives in a PHP file that IS tracked by git. A developer replacing the placeholder with a real password and committing is one `git add -A` away. The `.gitignore` does not exclude `smtp-config.php`. The file's own header comment warns against committing passwords — but warnings in comments are not enforcement.

**Fix**: See `.env` Implementation Plan below.

---

## Issue #6: Incomplete Gzip Compression — Missing Key MIME Types
**Severity**: Medium
**File**: `.htaccess:12-18`
**Problem**: The `mod_deflate` block is missing several MIME types that Apache commonly serves uncompressed:

| Missing Type | Impact |
|---|---|
| `application/font-woff` | Older woff variant not compressed |
| `image/webp` | Webp images not compressed (minor but consistent) |
| `application/manifest+json` | PWA manifest not compressed |
| `text/cache-manifest` | AppCache not compressed |
| `application/vnd.ms-fontobject` | EOT fonts not compressed |
| `application/xhtml+xml` | XHTML responses not compressed |

Additionally, `font/woff` and `font/woff2` are already in the expires block but missing from the deflate block.

**Fix** (replace the `mod_deflate` block):
```apache
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css
    AddOutputFilterByType DEFLATE text/javascript application/javascript application/x-javascript
    AddOutputFilterByType DEFLATE application/json application/xml application/xhtml+xml
    AddOutputFilterByType DEFLATE application/manifest+json text/cache-manifest
    AddOutputFilterByType DEFLATE image/svg+xml image/webp
    AddOutputFilterByType DEFLATE font/woff font/woff2 application/x-font-woff
    AddOutputFilterByType DEFLATE application/font-woff application/vnd.ms-fontobject
</IfModule>
```

---

## Issue #7: ETags Not Disabled — Can Cause Cache Invalidation Conflicts
**Severity**: Medium
**File**: `.htaccess`
**Problem**: ETags are not explicitly disabled. On shared hosting (multiple server nodes or inode-based ETags), ETags generated on one server node may not match ETags from another, causing unnecessary revalidation requests and defeating the `Cache-Control: immutable` header set for static assets. This is a known Apache shared hosting problem.

**Fix** (add after `ServerSignature Off`):
```apache
# Disable ETags — let Cache-Control headers handle caching
FileETag None
Header unset ETag
```

---

## Issue #8: robots.txt Missing Critical Paths
**Severity**: Medium
**File**: `robots.txt`
**Problem**: Several sensitive or indexable-but-unwanted paths are not disallowed:

| Missing Disallow | Risk |
|---|---|
| `/logs/` | If .htaccess fails, log files become publicly crawlable |
| `/mailer-admin-aws7749` | Hidden admin panel — should never be indexed |
| `/submit-calculator.php` | Form handler endpoint — should not be indexed |
| `/vendor/` | Not blocked (though vendor dir missing today, future-proof) |
| `/thank-you` | Duplicate content risk if crawled |
| `/*.php$` wildcard for handlers | submit-calculator.php, mailer-admin-aws7749.php exposed |

Additionally, `Disallow: /*.py$` uses a regex glob that Apache robots.txt parsers support but Google specifically documents as NOT supporting wildcards in that format consistently. Use `/*.py` instead.

See **robots.txt Recommended Version** below.

---

## Issue #9: Cache Duration Too Aggressive for CSS/JS on a Marketing Site
**Severity**: Low
**File**: `.htaccess:30-32`
**Problem**: CSS and JS are cached for 1 month (`access plus 1 month`) AND set `immutable` via the `Cache-Control` header in the `mod_headers` block. The `immutable` directive tells browsers to never revalidate even on manual refresh. For a marketing site where styles may be updated frequently without filename versioning (no cache-busting query strings or content-hash filenames observed), this will cause stale styles for returning visitors for up to 30 days.

**Fix options** (pick one):
1. Use content-hash filenames (`main.a3f9b2.css`) — best practice, lets you keep `immutable`.
2. Reduce CSS/JS cache to 1 week without `immutable`:
```apache
ExpiresByType text/css           "access plus 1 week"
ExpiresByType text/javascript    "access plus 1 week"
ExpiresByType application/javascript "access plus 1 week"
```
And in the `FilesMatch` block, change CSS/JS entries to:
```apache
<FilesMatch "\.(css|js)$">
    Header set Cache-Control "public, max-age=604800"
</FilesMatch>
<FilesMatch "\.(webp|png|jpg|jpeg|gif|svg|ico|woff|woff2)$">
    Header set Cache-Control "public, max-age=31536000, immutable"
</FilesMatch>
```

---

## Issue #10: X-Robots-Tag Missing on Form Handler Endpoints
**Severity**: Low
**File**: `.htaccess`
**Problem**: Form endpoints (`contact-form.php`, `submit-calculator.php`) are blocked from crawling via `robots.txt`, but they have no `X-Robots-Tag` HTTP header. If a link to these URLs ever appears externally (shared in a client email, logged in a referral), Googlebot will still discover and attempt to index them. The `X-Robots-Tag` header is the authoritative enforcement mechanism.

**Fix** (add inside `mod_headers` block):
```apache
# Prevent form handlers and admin pages from being indexed even if crawled
<FilesMatch "(contact-form|submit-calculator|mailer-admin-aws7749)\.php$">
    Header always set X-Robots-Tag "noindex, nofollow"
</FilesMatch>
```

---

## .env Implementation Plan

### Step 1: Create `.env` file (never commit this)
```ini
# .env — Local and production environment variables
# NEVER commit this file. Add it to .gitignore.
# Copy .env.example to .env and fill in real values.

SMTP_HOST=smtp.hostinger.com
SMTP_PORT=465
SMTP_SECURE=ssl
SMTP_USERNAME=info@artisticwebservices.com
SMTP_PASSWORD=your_real_password_here
SMTP_FROM_EMAIL=info@artisticwebservices.com
SMTP_FROM_NAME=ArtisticWebServices
MAIL_TO=info@artisticwebservices.com
SMTP_ADMIN_PASS=your_strong_admin_password_here
SMTP_DEBUG=false
```

### Step 2: Create `.env.example` (DO commit this)
```ini
# .env.example — Commit this file. Copy to .env and fill values.
# Do NOT put real credentials here.

SMTP_HOST=smtp.hostinger.com
SMTP_PORT=465
SMTP_SECURE=ssl
SMTP_USERNAME=info@yourdomain.com
SMTP_PASSWORD=
SMTP_FROM_EMAIL=info@yourdomain.com
SMTP_FROM_NAME=YourCompanyName
MAIL_TO=info@yourdomain.com
SMTP_ADMIN_PASS=
SMTP_DEBUG=false
```

### Step 3: Add to `.gitignore`
```gitignore
# Environment variables — NEVER commit
.env

# Composer vendor directory
vendor/

# Large media files - exceed GitHub's 100MB limit
*.mp4
*.mov
*.avi
*.mkv
*.wmv

# OS files
.DS_Store
Thumbs.db

# Local dev email logs
logs/
```

### Step 4: Updated `includes/smtp-config.php` (reads from .env)

```php
<?php
/**
 * SMTP Configuration — ArtisticWebServices
 * Hostinger Shared Hosting
 *
 * Reads credentials from .env file in the project root.
 * The .env file is excluded from version control via .gitignore.
 *
 * SETUP:
 *   1. Copy .env.example to .env in the project root
 *   2. Fill in your real SMTP credentials from Hostinger hPanel → Emails → Manage
 *   3. Upload .env to the server via SFTP (never via git)
 *   4. Verify .env is blocked by .htaccess (RewriteRule ^\.env$ - [F,L] — already present)
 */

// ── Load .env file ─────────────────────────────────────────────────────────────
if (!function_exists('_load_env')) {
    function _load_env(string $path): void
    {
        if (!is_readable($path)) {
            // .env missing — fall back to system environment (Docker/cPanel env vars)
            return;
        }
        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $line = trim($line);
            // Skip comments and blank lines
            if ($line === '' || $line[0] === '#') {
                continue;
            }
            if (str_contains($line, '=')) {
                [$key, $value] = explode('=', $line, 2);
                $key   = trim($key);
                $value = trim($value, " \t\n\r\0\x0B\"'"); // strip quotes
                // Only set if not already defined via putenv/system env
                if (!isset($_ENV[$key]) && getenv($key) === false) {
                    putenv("{$key}={$value}");
                    $_ENV[$key] = $value;
                }
            }
        }
    }
}

_load_env(dirname(__DIR__) . '/.env');

// ── Helper: read env with fallback ────────────────────────────────────────────
function _env(string $key, $default = null)
{
    $val = getenv($key);
    if ($val !== false) {
        return $val;
    }
    return $_ENV[$key] ?? $default;
}

// ── Define constants (only if not already defined) ────────────────────────────
if (!defined('SMTP_HOST'))       define('SMTP_HOST',       _env('SMTP_HOST',       'smtp.hostinger.com'));
if (!defined('SMTP_PORT'))       define('SMTP_PORT',   (int)_env('SMTP_PORT',       465));
if (!defined('SMTP_SECURE'))     define('SMTP_SECURE',     _env('SMTP_SECURE',     'ssl'));
if (!defined('SMTP_USERNAME'))   define('SMTP_USERNAME',   _env('SMTP_USERNAME',   ''));
if (!defined('SMTP_PASSWORD'))   define('SMTP_PASSWORD',   _env('SMTP_PASSWORD',   ''));
if (!defined('SMTP_FROM_EMAIL')) define('SMTP_FROM_EMAIL', _env('SMTP_FROM_EMAIL', ''));
if (!defined('SMTP_FROM_NAME'))  define('SMTP_FROM_NAME',  _env('SMTP_FROM_NAME',  'ArtisticWebServices'));
if (!defined('MAIL_TO'))         define('MAIL_TO',         _env('MAIL_TO',         ''));
if (!defined('SMTP_ADMIN_PASS')) define('SMTP_ADMIN_PASS', _env('SMTP_ADMIN_PASS', ''));
if (!defined('SMTP_DEBUG'))      define('SMTP_DEBUG',     (bool)_env('SMTP_DEBUG',  false));

// ── Local Development Mode ─────────────────────────────────────────────────────
// Auto-detected from HTTP_HOST. Emails are written to logs/mail-dev.log
// instead of being sent via SMTP. Never set this manually — it derives from host.
if (!defined('SMTP_LOCAL_DEV')) {
    $_smtp_local_host = strtolower($_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? '');
    define('SMTP_LOCAL_DEV',
        str_starts_with($_smtp_local_host, 'localhost') ||
        str_starts_with($_smtp_local_host, '127.0.0.1')
    );
    unset($_smtp_local_host);
}
```

---

## Email Reliability Improvements

Full updated `includes/mailer.php` with retry logic, timeout handling, graceful failure, and failed-email queue:

```php
<?php
/**
 * mailer.php — Native PHP SMTP mailer (no Composer / no PHPMailer)
 * Connects directly to Hostinger SMTP via SSL socket (port 465).
 *
 * Improvements over v1:
 *   - Retry once on socket failure (transient Hostinger SMTP hiccup protection)
 *   - Configurable timeout via SMTP_TIMEOUT constant
 *   - Failed emails queued to logs/mail-failed.log (JSON lines) for manual retry
 *   - sendMail() returns bool — callers MUST check and redirect accordingly
 *
 * Usage:
 *   require_once __DIR__ . '/includes/mailer.php';
 *   $ok = sendMail([
 *       'to'       => 'info@artisticwebservices.com',
 *       'reply_to' => $userEmail,
 *       'subject'  => 'New Inquiry',
 *       'fields'   => ['Name' => $name, 'Email' => $email, 'Message' => $msg],
 *       'source'   => 'Contact Page',
 *   ]);
 *   if (!$ok) {
 *       // redirect to error page — do NOT redirect to thank-you
 *   }
 */

if (!defined('SMTP_HOST')) {
    require_once __DIR__ . '/smtp-config.php';
}

if (function_exists('sendMail')) {
    return;
}

// ── Configurable timeout (seconds) ────────────────────────────────────────────
if (!defined('SMTP_TIMEOUT')) {
    define('SMTP_TIMEOUT', 15);
}

// ── Max retry attempts (1 = try once, retry once = 2 total attempts) ──────────
if (!defined('SMTP_MAX_RETRIES')) {
    define('SMTP_MAX_RETRIES', 2);
}

// ── Internal: send a command and read the SMTP response ───────────────────────
function _smtp_cmd($socket, string $cmd): string
{
    fwrite($socket, $cmd . "\r\n");
    $response = '';
    while ($line = fgets($socket, 515)) {
        $response .= $line;
        if (isset($line[3]) && $line[3] !== '-') {
            break;
        }
    }
    return $response;
}

// ── Internal: queue a failed email payload to disk for manual retry ───────────
function _mailer_queue_failed(array $data): void
{
    $logDir = dirname(__DIR__) . '/logs';
    if (!is_dir($logDir)) {
        @mkdir($logDir, 0750, true);
    }
    $entry = json_encode([
        'ts'      => date('c'),
        'to'      => $data['to']      ?? '',
        'subject' => $data['subject'] ?? '',
        'source'  => $data['source']  ?? '',
        'fields'  => $data['fields']  ?? [],
    ], JSON_UNESCAPED_UNICODE) . "\n";
    file_put_contents($logDir . '/mail-failed.log', $entry, FILE_APPEND | LOCK_EX);
}

// ── Internal: open SSL socket and run the SMTP conversation ──────────────────
function _smtp_send(string $to, string $from, string $fromName, string $replyTo,
                    string $subject, string $htmlBody, string $plainBody): bool
{
    $host    = SMTP_HOST;
    $port    = SMTP_PORT;
    $secure  = SMTP_SECURE;
    $user    = SMTP_USERNAME;
    $pass    = SMTP_PASSWORD;
    $timeout = SMTP_TIMEOUT;

    $address = ($secure === 'ssl') ? "ssl://{$host}:{$port}" : "tcp://{$host}:{$port}";

    $ctx = stream_context_create([
        'ssl' => [
            'verify_peer'       => true,        // CHANGED: enforce SSL verification in production
            'verify_peer_name'  => true,
            'allow_self_signed' => false,
            'cafile'            => defined('SSL_CA_BUNDLE') ? SSL_CA_BUNDLE : ini_get('openssl.cafile'),
        ],
    ]);

    $errno  = 0;
    $errstr = '';
    $socket = @stream_socket_client($address, $errno, $errstr, $timeout, STREAM_CLIENT_CONNECT, $ctx);

    if (!$socket) {
        error_log("[Mailer] Socket connect failed ({$address}): {$errstr} ({$errno})");
        return false;
    }

    stream_set_timeout($socket, $timeout);

    fgets($socket, 515); // server greeting

    $ehlo = _smtp_cmd($socket, 'EHLO ' . (gethostname() ?: 'localhost'));
    if (!str_starts_with(trim($ehlo), '2')) {
        error_log("[Mailer] EHLO failed: {$ehlo}");
        fclose($socket);
        return false;
    }

    if ($secure === 'tls') {
        $tls = _smtp_cmd($socket, 'STARTTLS');
        if (!str_starts_with(trim($tls), '2')) {
            error_log("[Mailer] STARTTLS failed: {$tls}");
            fclose($socket);
            return false;
        }
        stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
        _smtp_cmd($socket, 'EHLO ' . (gethostname() ?: 'localhost'));
    }

    _smtp_cmd($socket, 'AUTH LOGIN');
    _smtp_cmd($socket, base64_encode($user));
    $authResp = _smtp_cmd($socket, base64_encode($pass));
    if (!str_starts_with(trim($authResp), '2')) {
        error_log("[Mailer] AUTH failed: {$authResp}");
        fclose($socket);
        return false;
    }

    $fromResp = _smtp_cmd($socket, "MAIL FROM:<{$from}>");
    if (!str_starts_with(trim($fromResp), '2')) {
        error_log("[Mailer] MAIL FROM failed: {$fromResp}");
        fclose($socket);
        return false;
    }

    $rcptResp = _smtp_cmd($socket, "RCPT TO:<{$to}>");
    if (!str_starts_with(trim($rcptResp), '2')) {
        error_log("[Mailer] RCPT TO failed: {$rcptResp}");
        fclose($socket);
        return false;
    }

    _smtp_cmd($socket, 'DATA');

    $boundary = '----=_Part_' . md5(uniqid('', true));
    $date     = date('r');
    $msgId    = '<' . uniqid('', true) . '@artisticwebservices.com>';

    $headers  = "Date: {$date}\r\n";
    $headers .= "Message-ID: {$msgId}\r\n";
    $headers .= "From: =?UTF-8?B?" . base64_encode($fromName) . "?= <{$from}>\r\n";
    $headers .= "To: <{$to}>\r\n";
    $headers .= "Reply-To: <{$replyTo}>\r\n";
    $headers .= "Subject: =?UTF-8?B?" . base64_encode($subject) . "?=\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/alternative; boundary=\"{$boundary}\"\r\n";
    $headers .= "X-Mailer: PHP-NativeSMTP/2.0\r\n";

    $body  = "--{$boundary}\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($plainBody)) . "\r\n";

    $body .= "--{$boundary}\r\n";
    $body .= "Content-Type: text/html; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($htmlBody)) . "\r\n";

    $body .= "--{$boundary}--\r\n";

    $message = $headers . "\r\n" . $body;
    $message = str_replace("\r\n.", "\r\n..", $message);

    fwrite($socket, $message . "\r\n.\r\n");

    $dataResp = '';
    while ($line = fgets($socket, 515)) {
        $dataResp .= $line;
        if (isset($line[3]) && $line[3] !== '-') break;
    }

    _smtp_cmd($socket, 'QUIT');
    fclose($socket);

    if (!str_starts_with(trim($dataResp), '2')) {
        error_log("[Mailer] DATA send failed: {$dataResp}");
        return false;
    }

    return true;
}

// ── Public API ────────────────────────────────────────────────────────────────
/**
 * Send a transactional email via Hostinger SMTP.
 * Returns TRUE on success, FALSE on failure after all retry attempts.
 * On failure, the caller is responsible for redirecting to an error page.
 * Failed payloads are automatically written to logs/mail-failed.log.
 *
 * @param array $data {
 *   string      $to        Recipient address (defaults to MAIL_TO)
 *   string      $reply_to  Reply-To address (usually the submitter's email)
 *   string      $subject   Email subject line
 *   array       $fields    Associative array of label => value for the email body
 *   string      $source    Human-readable page/form name shown in the email header
 *   string|null $html      Raw HTML body (overrides auto-generated body from $fields)
 *   string|null $text      Raw plain-text body (overrides auto-generated)
 * }
 * @return bool True on success, false on failure
 */
function sendMail(array $data): bool
{
    $to      = $data['to']       ?? (defined('MAIL_TO')         ? MAIL_TO         : '');
    $replyTo = $data['reply_to'] ?? (defined('SMTP_FROM_EMAIL') ? SMTP_FROM_EMAIL : $to);
    $subject = $data['subject']  ?? 'New Inquiry — ArtisticWebServices';
    $from    = defined('SMTP_FROM_EMAIL') ? SMTP_FROM_EMAIL : '';
    $name    = defined('SMTP_FROM_NAME')  ? SMTP_FROM_NAME  : 'ArtisticWebServices';

    // ── Local dev: write to log file instead of sending real email ────────────
    if (defined('SMTP_LOCAL_DEV') && SMTP_LOCAL_DEV) {
        $logDir = dirname(__DIR__) . '/logs';
        if (!is_dir($logDir)) { @mkdir($logDir, 0750, true); }
        $entry  = date('[Y-m-d H:i:s]') . " TO:{$to} SUBJ:{$subject}\n";
        foreach (($data['fields'] ?? []) as $k => $v) {
            $entry .= "  {$k}: {$v}\n";
        }
        file_put_contents($logDir . '/mail-dev.log', $entry . "\n", FILE_APPEND | LOCK_EX);
        return true;
    }

    // ── Build HTML body ───────────────────────────────────────────────────────
    if (!empty($data['html'])) {
        $htmlBody  = $data['html'];
        $plainBody = $data['text'] ?? strip_tags($data['html']);
    } else {
        $fields = $data['fields'] ?? [];
        $source = htmlspecialchars($data['source'] ?? 'Website Form');
        $rows   = '';
        $plain  = '';

        foreach ($fields as $label => $value) {
            $lbl   = htmlspecialchars($label);
            $val   = nl2br(htmlspecialchars((string) $value));
            $rows .= "
                <tr>
                    <td style=\"padding:10px 16px;font-weight:600;color:#1a1a2e;
                               background:#f4f6fb;white-space:nowrap;
                               border-bottom:1px solid #e2e8f0;width:160px;\">
                        {$lbl}
                    </td>
                    <td style=\"padding:10px 16px;color:#374151;
                               border-bottom:1px solid #e2e8f0;\">
                        {$val}
                    </td>
                </tr>";
            $plain .= "{$label}: {$value}\n";
        }

        $htmlBody = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"></head>
<body style="margin:0;padding:0;background:#f0f4f8;font-family:Arial,Helvetica,sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background:#f0f4f8;padding:32px 16px;">
    <tr><td align="center">
      <table width="620" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:12px;
             overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.08);max-width:620px;">
        <tr>
          <td style="background:linear-gradient(135deg,#1a1a2e 0%,#16213e 60%,#0f3460 100%);
                     padding:32px 32px 28px;text-align:center;">
            <p style="margin:0 0 6px;font-size:22px;font-weight:700;color:#ffffff;letter-spacing:-.3px;">
              ArtisticWebServices
            </p>
            <p style="margin:0;font-size:13px;color:#94a3b8;">New form submission received</p>
          </td>
        </tr>
        <tr>
          <td style="padding:20px 32px 0;text-align:center;">
            <span style="display:inline-block;background:#eff6ff;color:#3b82f6;
                         font-size:12px;font-weight:600;padding:4px 14px;border-radius:20px;
                         letter-spacing:.4px;text-transform:uppercase;">
              {$source}
            </span>
          </td>
        </tr>
        <tr>
          <td style="padding:24px 32px;">
            <table width="100%" cellpadding="0" cellspacing="0"
                   style="border:1px solid #e2e8f0;border-radius:8px;overflow:hidden;border-collapse:collapse;">
              {$rows}
            </table>
          </td>
        </tr>
        <tr>
          <td style="padding:0 32px 28px;text-align:center;">
            <p style="margin:0;font-size:12px;color:#94a3b8;">
              This email was sent automatically from your website contact form.<br>
              &copy; 2026 ArtisticWebServices — 26 Broadway, Suite 934, New York, NY 10004
            </p>
          </td>
        </tr>
      </table>
    </td></tr>
  </table>
</body>
</html>
HTML;
        $plainBody = "New submission from {$source}\n\n{$plain}";
    }

    // ── Retry loop ────────────────────────────────────────────────────────────
    $maxAttempts = defined('SMTP_MAX_RETRIES') ? (int) SMTP_MAX_RETRIES : 2;
    $attempt     = 0;
    $success     = false;

    while ($attempt < $maxAttempts && !$success) {
        $attempt++;
        if ($attempt > 1) {
            // Brief pause before retry — avoids hammering a temporarily overloaded SMTP server
            sleep(2);
            error_log("[Mailer] Retrying send (attempt {$attempt}/{$maxAttempts}) to {$to}");
        }
        $success = _smtp_send($to, $from, $name, $replyTo, $subject, $htmlBody, $plainBody);
    }

    // ── On total failure: queue to disk ───────────────────────────────────────
    if (!$success) {
        error_log("[Mailer] All {$maxAttempts} send attempts failed. Subject: {$subject} | To: {$to}");
        _mailer_queue_failed([
            'to'      => $to,
            'subject' => $subject,
            'source'  => $data['source'] ?? 'Unknown',
            'fields'  => $data['fields'] ?? [],
        ]);
    }

    return $success;
}
```

---

## Email Deliverability — SPF/DKIM Notes

**Current state** (from code analysis):
- `From:` header is set to `info@artisticwebservices.com` — correct, matches the SMTP AUTH user. Good.
- `Reply-To:` is set to the visitor's email address — correct behavior for a contact form.
- `Message-ID:` and `Date:` headers are properly set — reduces spam score.
- `X-Mailer:` is set but benign.

**SSL verification** (Issue in v1): `verify_peer => false` in `_smtp_send()` disables SSL certificate verification. This is a security smell — if Hostinger's SMTP IP is ever spoofed, credentials would be sent to an attacker. Updated v2 above sets `verify_peer => true`. On Hostinger shared PHP, `openssl.cafile` in `php.ini` should point to the system CA bundle; if it does not, set `SSL_CA_BUNDLE` as a constant pointing to the correct path (commonly `/etc/ssl/certs/ca-certificates.crt` on Linux).

**Hostinger SPF/DKIM setup** (required for deliverability — do this in hPanel):

1. Log into **Hostinger hPanel → Emails → Email Accounts → Manage → DNS Records**
2. Verify these DNS records exist for `artisticwebservices.com`:

| Type | Host | Value | Purpose |
|---|---|---|---|
| TXT | `@` | `v=spf1 include:_spf.hostinger.com ~all` | SPF — authorises Hostinger to send mail |
| TXT | `default._domainkey` | *(provided by Hostinger — copy from hPanel → DKIM)* | DKIM signing |
| TXT | `_dmarc` | `v=DMARC1; p=quarantine; rua=mailto:dmarc@artisticwebservices.com; adkim=r; aspf=r;` | DMARC — reject spoofed mail |

3. In hPanel → **Emails → Email Accounts → your account → DKIM**, click **Enable DKIM** if not already active.
4. Use [MXToolbox SPF Checker](https://mxtoolbox.com/spf.aspx) and [DKIM Checker](https://mxtoolbox.com/dkim.aspx) to verify after DNS propagation (24-48h).

---

## GitHub Actions Deployment Workflow

Deploy on every push to `main` using FTP to Hostinger. Store credentials as GitHub Secrets.

**Required GitHub Secrets** (Settings → Secrets → Actions):
- `HOSTINGER_FTP_HOST` — e.g., `ftp.artisticwebservices.com`
- `HOSTINGER_FTP_USER` — FTP username from Hostinger hPanel
- `HOSTINGER_FTP_PASSWORD` — FTP password
- `SMTP_PASSWORD` — real SMTP password (for .env generation on deploy)
- `SMTP_ADMIN_PASS` — admin panel password

```yaml
# .github/workflows/deploy.yml
# Deploys the website to Hostinger shared hosting via FTP on every push to main.
# Excludes dev-only files: .env.example, reports/, .github/, *.py scripts, logs/

name: Deploy to Hostinger

on:
  push:
    branches:
      - main
  workflow_dispatch: # allow manual trigger from GitHub Actions UI

jobs:
  deploy:
    name: FTP Deploy to Production
    runs-on: ubuntu-latest
    timeout-minutes: 15

    steps:
      - name: Checkout repository
        uses: actions/checkout@v4
        with:
          fetch-depth: 1  # shallow clone for speed

      - name: Generate .env for production
        run: |
          cat > .env <<EOF
          SMTP_HOST=smtp.hostinger.com
          SMTP_PORT=465
          SMTP_SECURE=ssl
          SMTP_USERNAME=info@artisticwebservices.com
          SMTP_PASSWORD=${{ secrets.SMTP_PASSWORD }}
          SMTP_FROM_EMAIL=info@artisticwebservices.com
          SMTP_FROM_NAME=ArtisticWebServices
          MAIL_TO=info@artisticwebservices.com
          SMTP_ADMIN_PASS=${{ secrets.SMTP_ADMIN_PASS }}
          SMTP_DEBUG=false
          EOF

      - name: Deploy via FTP
        uses: SamKirkland/FTP-Deploy-Action@v4.3.5
        with:
          server: ${{ secrets.HOSTINGER_FTP_HOST }}
          username: ${{ secrets.HOSTINGER_FTP_USER }}
          password: ${{ secrets.HOSTINGER_FTP_PASSWORD }}
          protocol: ftp
          port: 21
          local-dir: ./
          server-dir: /public_html/
          # Exclude files that must never go to production
          exclude: |
            **/.git*
            **/.git*/**
            **/node_modules/**
            **/vendor/**
            **/logs/**
            **/.env.example
            **/.github/**
            **/reports/**
            **/*.py
            **/ARCHITECTURE.md
          dangerous-clean-slate: false  # never delete files not in repo (protects .env on server)

      - name: Deployment summary
        run: |
          echo "Deployed to https://artisticwebservices.com"
          echo "Commit: ${{ github.sha }}"
          echo "Triggered by: ${{ github.actor }}"
```

**Important notes on this workflow**:
- `dangerous-clean-slate: false` is essential — it prevents the FTP action from deleting the `.env` file that lives on the server but not in git.
- The `.env` is generated fresh from GitHub Secrets on every deploy, so the server always has an up-to-date credentials file.
- `logs/` is excluded so local dev logs never overwrite production error logs.
- Consider switching to SFTP (`protocol: sftp`, `port: 22`) once you confirm Hostinger enables SFTP access for your plan — it is encrypted and preferable to plain FTP.

---

## robots.txt Recommended Version

```
User-agent: *
Allow: /

# Block form handlers — not indexable content
Disallow: /contact-form.php
Disallow: /submit-calculator.php

# Block hidden admin panel
Disallow: /mailer-admin-aws7749
Disallow: /mailer-admin-aws7749.php

# Block sensitive server-side directories
Disallow: /includes/
Disallow: /logs/
Disallow: /vendor/
Disallow: /prompt/

# Block thank-you page (no standalone SEO value)
Disallow: /thank-you
Disallow: /thank-you.php

# Block maintenance/dev scripts
Disallow: /update_testimonials.php
Disallow: /update_testimonials2.php
Disallow: /update_names_icons.php
Disallow: /update_city_pages.php
Disallow: /qa_insights.php
Disallow: /*.py

# Block Cloudflare internals
Disallow: /cdn-cgi/

# Allow Googlebot full asset access for rendering
User-agent: Googlebot
Allow: /assets/
Allow: /

# Sitemap location
Sitemap: https://artisticwebservices.com/sitemap.xml
```

**Changes from current**:
- Added `Disallow: /logs/` — critical if .htaccess ever fails or is misconfigured.
- Added `Disallow: /mailer-admin-aws7749` and `/mailer-admin-aws7749.php` — hidden admin panel should never appear in search results.
- Added `Disallow: /submit-calculator.php` — form handler endpoint.
- Added `Disallow: /vendor/` — future-proofing.
- Added `Disallow: /thank-you` and `/thank-you.php` — avoids duplicate content indexing.
- Fixed `/*.py$` (had regex `$` anchor which Google ignores) → `/*.py` (standard glob).

---

## sitemap.xml Audit

**Current state**: Well-structured with 60+ URLs covering core pages, services, solutions, industries, location pages, and case studies. Priorities are sensible. `changefreq` values are appropriate.

**Issues found**:

| Issue | Detail |
|---|---|
| No `<lastmod>` tags on any URL | Google uses `lastmod` to decide crawl priority. Without it, all pages look equally stale. |
| Duplicate concept: `/solutions/startups` and `/solutions/startup` | Both listed — one likely redirects to the other. Check and remove the redirect target. |
| `/solutions/alliance-partners` duplicates `/alliance-partners` | Same page under two URL structures. One should be canonical. |
| `case-studies` only has one entry | If individual case study pages exist (e.g., `/case-studies/bizi-app`), they should each have their own `<url>` entry. |
| No `<image:image>` tags | For a portfolio/case-study site, image sitemaps improve Google Images indexing. |

**Recommended `<lastmod>` approach** — add to each `<url>`:
```xml
<url>
  <loc>https://artisticwebservices.com/</loc>
  <lastmod>2026-04-05</lastmod>
  <changefreq>weekly</changefreq>
  <priority>1.0</priority>
</url>
```
Use the actual date each page was last meaningfully updated. For static pages that rarely change, set `lastmod` to the last deploy date and update it with each deployment (the GitHub Actions workflow can generate sitemap lastmod dates automatically).

---

## Deployment Checklist

| # | Check | Status | Fix |
|---|---|---|---|
| 1 | SMTP credentials NOT in git | Partial — file tracked but uses placeholders | Implement .env approach from this report |
| 2 | `.env` in `.gitignore` | Missing | Add `.env` to .gitignore |
| 3 | `vendor/` in `.gitignore` | Missing | Add `vendor/` to .gitignore |
| 4 | `sendMail()` return value checked | Failing | Update contact-form.php and submit-calculator.php |
| 5 | SMTP retry logic present | Missing | Deploy updated mailer.php from this report |
| 6 | Failed email queue implemented | Missing | Deploy updated mailer.php from this report |
| 7 | `logs/` blocked from web access | Partial — .htaccess has no explicit logs/ block | Add `RewriteRule ^logs/.*$ - [F,L]` to .htaccess |
| 8 | `logs/` in robots.txt | Missing | Use recommended robots.txt from this report |
| 9 | PHPMailer dependency removed | Pending | Update composer.json as shown in Issue #4 |
| 10 | ETags disabled | Missing | Add `FileETag None` + `Header unset ETag` |
| 11 | Gzip MIME types complete | Incomplete | Update mod_deflate block as shown in Issue #6 |
| 12 | CSS/JS cache duration appropriate | Aggressive (immutable 1 month) | Reduce to 1 week without immutable, or use cache-busting filenames |
| 13 | X-Robots-Tag on form handlers | Missing | Add FilesMatch block in .htaccess |
| 14 | SPF record configured in DNS | Unverified | Verify in Hostinger hPanel → DNS |
| 15 | DKIM enabled | Unverified | Enable in Hostinger hPanel → Emails → DKIM |
| 16 | DMARC record configured | Unverified | Add `_dmarc` TXT record to DNS |
| 17 | SSL peer verification enabled | Disabled (verify_peer=false) | Update _smtp_send() as shown in updated mailer.php |
| 18 | sitemap.xml has `<lastmod>` tags | Missing | Add lastmod to all URL entries |
| 19 | Duplicate sitemap entries resolved | Needs review | Audit `/solutions/startup` vs `/solutions/startups` |
| 20 | GitHub Actions deploy workflow | Missing | Add `.github/workflows/deploy.yml` from this report |
| 21 | mailer-admin-aws7749 in robots.txt | Missing | Use recommended robots.txt from this report |
| 22 | `.htaccess` blocks `logs/` directory | Missing explicit block | Add `RewriteRule ^logs/.*$ - [F,L]` |

---

## Critical Action Order (Deploy These First)

1. **Immediately**: Create `.env` file on server with real credentials, add `.env` and `vendor/` to `.gitignore`.
2. **Today**: Update `contact-form.php` and `submit-calculator.php` to check `sendMail()` return value and redirect to error page on failure.
3. **Today**: Deploy updated `mailer.php` with retry logic and `_mailer_queue_failed()`.
4. **This week**: Add `RewriteRule ^logs/.*$ - [F,L]` to `.htaccess` and update robots.txt.
5. **This week**: Set up GitHub Actions deploy workflow so FTP is no longer manual.
6. **This month**: Verify SPF/DKIM/DMARC in DNS. Test with MXToolbox. Fix SSL peer verification.
