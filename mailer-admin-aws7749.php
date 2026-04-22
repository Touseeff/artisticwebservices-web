<?php
/**
 * SMTP Admin Panel — ArtisticWebServices
 * Secret URL: /mailer-admin-aws7749
 * Password-protected. Set SMTP_ADMIN_PASS and ADMIN_ALLOWED_IPS in .env
 *
 * ⚠️  Keep this URL secret. Do NOT link to it from any public page.
 *
 * Security layers:
 *   1. IP allowlist — only whitelisted IPs may access this panel
 *   2. Session-based brute-force lockout — max 5 attempts, 15-minute lockout
 *   3. CSRF token protection on all POST forms
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/smtp-config.php';
require_once __DIR__ . '/includes/csrf.php'; // also calls session_start() safely

// ── 1. IP Allowlist ───────────────────────────────────────────────────────────
// Localhost always allowed. Add more IPs in .env as ADMIN_ALLOWED_IPS=1.2.3.4,5.6.7.8
$allowed_ips = ['127.0.0.1', '::1'];
$extra_ips = _smtp_env('ADMIN_ALLOWED_IPS', '');
if ($extra_ips !== '') {
    foreach (array_map('trim', explode(',', $extra_ips)) as $ip) {
        if ($ip !== '' && !in_array($ip, $allowed_ips, true)) {
            $allowed_ips[] = $ip;
        }
    }
}
unset($extra_ips);

$visitor_ip = $_SERVER['REMOTE_ADDR'] ?? '';
if (!in_array($visitor_ip, $allowed_ips, true)) {
    http_response_code(403);
    header('Content-Type: text/plain; charset=UTF-8');
    exit('403 Forbidden: Access denied.');
}

// ── 2. Session-based brute-force protection ───────────────────────────────────
// Max 5 failed login attempts; 15-minute lockout on breach.
define('ADMIN_MAX_ATTEMPTS',  5);
define('ADMIN_LOCKOUT_SECS', 900); // 15 minutes

if (!isset($_SESSION['admin_attempts'])) {
    $_SESSION['admin_attempts'] = 0;
}
if (!isset($_SESSION['admin_lockout_until'])) {
    $_SESSION['admin_lockout_until'] = 0;
}

$lockout_active = (time() < $_SESSION['admin_lockout_until']);
$lockout_remaining = max(0, $_SESSION['admin_lockout_until'] - time());

// Enforce lockout — even before the login form is shown
if ($lockout_active && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // Silently drop POST requests during lockout
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// ── Time-based token (changes every 24 h as extra layer) ──────────────────────
$today_token = hash('sha256', SMTP_ADMIN_PASS . date('Y-m-d'));

// ── Handle logout ─────────────────────────────────────────────────────────────
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// ── Handle login ──────────────────────────────────────────────────────────────
$login_error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['panel_password'])) {

    // Verify CSRF token for the login form (csrf_verify() exits on failure)
    csrf_verify();

    // Re-check lockout (session may have just been restored)
    if (time() < $_SESSION['admin_lockout_until']) {
        $login_error = 'Too many failed attempts. Try again in ' . ceil($lockout_remaining / 60) . ' minute(s).';
    } else {
        $submitted = trim($_POST['panel_password'] ?? '');
        if ($submitted === SMTP_ADMIN_PASS || $submitted === $today_token) {
            // Success — clear attempt counter and authenticate
            $_SESSION['admin_attempts']     = 0;
            $_SESSION['admin_lockout_until'] = 0;
            $_SESSION['smtp_admin_auth']    = $today_token;
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        } else {
            $_SESSION['admin_attempts']++;
            // Slow down brute-force
            sleep(2);
            if ($_SESSION['admin_attempts'] >= ADMIN_MAX_ATTEMPTS) {
                $_SESSION['admin_lockout_until'] = time() + ADMIN_LOCKOUT_SECS;
                $login_error = 'Too many failed attempts. Account locked for 15 minutes.';
            } else {
                $remaining_attempts = ADMIN_MAX_ATTEMPTS - $_SESSION['admin_attempts'];
                $login_error = 'Incorrect password. ' . $remaining_attempts . ' attempt(s) remaining.';
            }
        }
    }
}

$authenticated = isset($_SESSION['smtp_admin_auth'])
              && $_SESSION['smtp_admin_auth'] === $today_token;

// ── Handle test email ─────────────────────────────────────────────────────────
$test_result = null;
if ($authenticated && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['test_to'])) {
    // CSRF is already verified above (via the login branch or directly here)
    // csrf_verify() regenerates the token, so we only call it once per request.
    // The login block calls csrf_verify() for panel_password POSTs.
    // For test_to POSTs we call it explicitly:
    if (!isset($_POST['panel_password'])) {
        csrf_verify();
    }
    require_once __DIR__ . '/includes/mailer.php';
    $test_to = filter_var(trim($_POST['test_to']), FILTER_VALIDATE_EMAIL);
    if ($test_to) {
        $ok = sendMail([
            'to'      => $test_to,
            'subject' => 'SMTP Test — ArtisticWebServices',
            'fields'  => [
                'Status'    => 'SMTP is working correctly ✓',
                'Host'      => SMTP_HOST,
                'Port'      => (string)SMTP_PORT,
                'Sent at'   => date('Y-m-d H:i:s T'),
                'From'      => SMTP_FROM_EMAIL,
            ],
            'source'  => 'SMTP Admin Panel',
        ]);
        $test_result = $ok ? 'success' : 'error';
    } else {
        $test_result = 'invalid';
    }
}

// ── Helpers ───────────────────────────────────────────────────────────────────
function cfg(string $key, $fallback = '—'): string {
    return defined($key) ? htmlspecialchars((string)constant($key)) : $fallback;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SMTP Admin — ArtisticWebServices</title>
<meta name="robots" content="noindex,nofollow">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  body   { font-family: 'Segoe UI', Arial, sans-serif; background: #0f172a; color: #e2e8f0; min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 24px; }
  .card  { background: #1e293b; border: 1px solid #334155; border-radius: 14px; padding: 40px; width: 100%; max-width: 540px; box-shadow: 0 20px 60px rgba(0,0,0,.5); }
  h1     { font-size: 22px; color: #f1f5f9; margin-bottom: 6px; }
  .sub   { font-size: 13px; color: #64748b; margin-bottom: 32px; }
  label  { display: block; font-size: 13px; color: #94a3b8; margin-bottom: 6px; font-weight: 500; }
  input[type="password"], input[type="email"], input[type="text"] {
    width: 100%; padding: 10px 14px; background: #0f172a; border: 1px solid #334155;
    border-radius: 8px; color: #e2e8f0; font-size: 14px; outline: none; transition: border-color .2s;
  }
  input:focus { border-color: #3b82f6; }
  .btn   { display: inline-block; padding: 11px 24px; background: #3b82f6; color: #fff; border: none; border-radius: 8px; font-size: 14px; font-weight: 600; cursor: pointer; width: 100%; margin-top: 16px; transition: background .2s; }
  .btn:hover { background: #2563eb; }
  .btn-danger { background: #dc2626; } .btn-danger:hover { background: #b91c1c; }
  .err   { background: #450a0a; border: 1px solid #dc2626; color: #fca5a5; border-radius: 8px; padding: 10px 14px; margin-bottom: 16px; font-size: 13px; }
  .ok    { background: #052e16; border: 1px solid #16a34a; color: #86efac; border-radius: 8px; padding: 10px 14px; margin-bottom: 16px; font-size: 13px; }
  .warn  { background: #1c1917; border: 1px solid #78350f; color: #fbbf24; border-radius: 8px; padding: 10px 14px; margin-bottom: 16px; font-size: 13px; }
  .table { width: 100%; border-collapse: collapse; margin-bottom: 24px; }
  .table td { padding: 9px 12px; border-bottom: 1px solid #1e293b; font-size: 13px; }
  .table td:first-child { color: #64748b; width: 45%; font-weight: 500; }
  .table td:last-child { color: #e2e8f0; font-family: monospace; }
  .section { background: #0f172a; border: 1px solid #1e293b; border-radius: 10px; padding: 20px; margin-bottom: 24px; }
  .section h3 { font-size: 14px; color: #94a3b8; text-transform: uppercase; letter-spacing: .6px; margin-bottom: 16px; }
  .badge-ok  { display:inline-block; background:#052e16; color:#86efac; border-radius:20px; padding:2px 10px; font-size:11px; font-weight:700; }
  .badge-no  { display:inline-block; background:#450a0a; color:#fca5a5; border-radius:20px; padding:2px 10px; font-size:11px; font-weight:700; }
  .sep { height: 1px; background: #334155; margin: 24px 0; }
  .nav { display: flex; justify-content: space-between; align-items: center; margin-bottom: 28px; }
  .nav a { font-size: 12px; color: #64748b; text-decoration: none; } .nav a:hover { color: #94a3b8; }
  .form-group { margin-bottom: 16px; }
</style>
</head>
<body>
<div class="card">

<?php if (!$authenticated): ?>

  <!-- ── LOGIN FORM ──────────────────────────────────────────────── -->
  <div style="text-align:center;margin-bottom:28px;">
    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
  </div>
  <h1 style="text-align:center;">SMTP Admin Panel</h1>
  <p class="sub" style="text-align:center;">ArtisticWebServices — Restricted Access</p>

  <?php if ($lockout_active): ?>
    <div class="err">Account locked due to too many failed attempts. Try again in <?= ceil($lockout_remaining / 60) ?> minute(s).</div>
  <?php elseif ($login_error): ?>
    <div class="err"><?= htmlspecialchars($login_error) ?></div>
  <?php endif; ?>

  <form method="POST">
    <?= csrf_field() ?>
    <div class="form-group">
      <label for="panel_password">Admin Password</label>
      <input type="password" id="panel_password" name="panel_password" autofocus required
             placeholder="Enter panel password">
    </div>
    <button type="submit" class="btn">Unlock Panel</button>
  </form>

<?php else: ?>

  <!-- ── ADMIN PANEL ────────────────────────────────────────────── -->
  <div class="nav">
    <span style="font-size:14px;font-weight:700;color:#f1f5f9;">⚙ SMTP Admin</span>
    <a href="?logout=1">Log out</a>
  </div>

  <!-- Current SMTP Configuration -->
  <div class="section">
    <h3>Current SMTP Configuration</h3>
    <table class="table">
      <tr><td>SMTP Host</td>        <td><?= cfg('SMTP_HOST') ?></td></tr>
      <tr><td>Port</td>             <td><?= cfg('SMTP_PORT') ?></td></tr>
      <tr><td>Encryption</td>       <td><?= SMTP_PORT == 465 ? 'SSL (smtps)' : 'TLS (starttls)' ?></td></tr>
      <tr><td>Username</td>         <td><?= cfg('SMTP_USERNAME') ?></td></tr>
      <tr><td>Password</td>         <td><?= (defined('SMTP_PASSWORD') && SMTP_PASSWORD !== '' && SMTP_PASSWORD !== 'YOUR_EMAIL_PASSWORD_HERE') ? str_repeat('•', 12) : '<span style="color:#fbbf24">⚠ NOT SET</span>' ?></td></tr>
      <tr><td>From Email</td>       <td><?= cfg('SMTP_FROM_EMAIL') ?></td></tr>
      <tr><td>From Name</td>        <td><?= cfg('SMTP_FROM_NAME') ?></td></tr>
      <tr><td>Default Recipient</td><td><?= cfg('MAIL_TO') ?></td></tr>
      <tr><td>Debug Mode</td>       <td><?= defined('SMTP_DEBUG') && SMTP_DEBUG ? '<span class="badge-no">ON</span>' : '<span class="badge-ok">OFF</span>' ?></td></tr>
      <tr><td>Mailer Engine</td>   <td><span class="badge-ok">Native PHP Socket (no Composer)</span></td></tr>
    </table>

    <?php if (!defined('SMTP_PASSWORD') || SMTP_PASSWORD === '' || SMTP_PASSWORD === 'YOUR_EMAIL_PASSWORD_HERE'): ?>
    <div class="warn">
      <strong>Password not set.</strong> On the server, edit the project root <code>.env</code> and set <code>SMTP_PASS=</code> to your Hostinger mailbox password (same values as <code>SMTP_USER</code> / Hostinger → Emails).
    </div>
    <?php endif; ?>
  </div>

  <!-- Test Email -->
  <div class="section">
    <h3>Send Test Email</h3>

    <?php if ($test_result === 'success'): ?>
      <div class="ok">✓ Test email sent successfully! Check your inbox.</div>
    <?php elseif ($test_result === 'error'): ?>
      <div class="err">✗ Test email failed. Check <code>SMTP_PASS</code> (and <code>SMTP_USER</code>) in the project root <code>.env</code> on the server. See PHP error log for details.</div>
    <?php elseif ($test_result === 'invalid'): ?>
      <div class="err">Invalid recipient email address.</div>
    <?php endif; ?>

    <form method="POST">
      <?= csrf_field() ?>
      <div class="form-group">
        <label for="test_to">Send test email to</label>
        <input type="email" id="test_to" name="test_to" required
               placeholder="yourname@example.com"
               value="<?= htmlspecialchars($_POST['test_to'] ?? MAIL_TO) ?>">
      </div>
      <button type="submit" class="btn">Send Test Email</button>
    </form>
  </div>

  <!-- Quick Setup Guide -->
  <div class="section">
    <h3>Hostinger SMTP Quick Reference</h3>
    <table class="table">
      <tr><td>SMTP Host</td>    <td>smtp.hostinger.com</td></tr>
      <tr><td>Port (SSL)</td>   <td>465</td></tr>
      <tr><td>Port (TLS)</td>   <td>587</td></tr>
      <tr><td>Username</td>     <td>Your full email address</td></tr>
      <tr><td>Password</td>     <td>Your email account password</td></tr>
      <tr><td>Secrets</td>      <td>Project root <code>.env</code> (<code>SMTP_PASS</code>, etc.) — never commit</td></tr>
      <tr><td>Config loader</td><td><code>includes/smtp-config.php</code> (reads <code>.env</code>)</td></tr>
      <tr><td>Mailer file</td>  <td>includes/mailer.php</td></tr>
      <tr><td>Engine</td>       <td>Native PHP socket — no Composer needed</td></tr>
    </table>
  </div>

  <!-- Forms that use SMTP — audit: OK = POST + CSRF + sendMail() -->
  <div class="section">
    <h3>Form → SMTP routing (OK / not OK)</h3>
    <p style="color:#94a3b8;font-size:13px;margin:0 0 12px 0;">
      Every lead form should POST to <code>contact-form.php</code> or <code>submit-calculator.php</code>, include a CSRF token, and rely on <code>includes/mailer.php</code> (SMTP). Use <strong>Send test email</strong> above to confirm credentials.
    </p>
    <table class="table">
      <tr><th>Form / surface</th><th>Handler</th><th>SMTP</th><th>Status</th></tr>
      <tr><td colspan="4" style="background:#1e293b;font-weight:700;padding:10px 8px;">Modal forms</td></tr>
      <tr><td>Site-wide lead modal — “Get a FREE Quote” (<code>includes/partials/footer-modal.php</code>, <code>#awsLeadForm</code>)</td><td><code>contact-form.php</code> via <code>fetch()</code> + JSON + CSRF meta</td><td><code>sendMail()</code></td><td><span class="badge-ok">OK</span> <span style="color:#64748b;font-size:12px;">URL = <code>site-base</code> + <code>/contact-form</code></span></td></tr>
      <tr><td>Travel solution modal — “Get In Touch” (<code>solutions/travel-app-development.php</code>, <code>#contactModal</code>)</td><td><code>contact-form.php</code> normal POST</td><td><code>sendMail()</code></td><td><span class="badge-ok">OK</span> <span style="color:#64748b;font-size:12px;">POST + CSRF + <code>SITE_BASE</code> action</span></td></tr>
      <tr><td colspan="4" style="background:#1e293b;font-weight:700;padding:10px 8px;">Page / inline forms (full submit)</td></tr>
      <tr><td>Contact page (<code>contact.php</code>)</td><td><code>contact-form.php</code></td><td><code>sendMail()</code></td><td><span class="badge-ok">OK</span> <span style="color:#64748b;font-size:12px;">action = <code>SITE_BASE</code>/contact-form</span></td></tr>
      <tr><td>Shared quote strip (<code>includes/form-quote.php</code> — services, solutions, about, etc.)</td><td><code>contact-form.php</code></td><td><code>sendMail()</code></td><td><span class="badge-ok">OK</span></td></tr>
      <tr><td>App cost calculator (<code>services/app-cost-calculator.php</code>)</td><td><code>submit-calculator.php</code></td><td><code>sendMail()</code></td><td><span class="badge-ok">OK</span> <span style="color:#64748b;font-size:12px;">action = <code>SITE_BASE</code>/submit-calculator</span></td></tr>
      <tr><td>Standalone HTML <code>&lt;form&gt;</code> with <code>mailto:</code> only</td><td>—</td><td>—</td><td><span class="badge-no">Not SMTP</span> <span style="color:#64748b;font-size:12px;">(client email app; not a site lead)</span></td></tr>
    </table>
    <p style="color:#94a3b8;font-size:12px;margin:10px 0 0 0;">
      <strong>Remaining to verify manually:</strong> submit a test from the contact page, one service quote form, the floating modal, the travel modal (if you use it), and the calculator — each should land in your inbox or appear in <code>logs/mail-failed.log</code> on failure.
    </p>
  </div>

<?php endif; ?>
</div>
</body>
</html>
