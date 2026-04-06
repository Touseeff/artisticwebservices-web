<?php
/**
 * SMTP Admin Panel — ArtisticWebServices
 * Secret URL: /mailer-admin-aws7749
 * Password-protected. Change SMTP_ADMIN_PASS in includes/smtp-config.php
 *
 * ⚠️  Keep this URL secret. Do NOT link to it from any public page.
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/smtp-config.php';

session_start();

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
    $submitted = trim($_POST['panel_password'] ?? '');
    if ($submitted === SMTP_ADMIN_PASS || $submitted === $today_token) {
        $_SESSION['smtp_admin_auth'] = $today_token;
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $login_error = 'Incorrect password.';
        // Slow down brute-force
        sleep(2);
    }
}

$authenticated = isset($_SESSION['smtp_admin_auth'])
              && $_SESSION['smtp_admin_auth'] === $today_token;

// ── Handle test email ─────────────────────────────────────────────────────────
$test_result = null;
if ($authenticated && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['test_to'])) {
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

  <?php if ($login_error): ?>
    <div class="err"><?= htmlspecialchars($login_error) ?></div>
  <?php endif; ?>

  <form method="POST">
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
      <tr><td>Password</td>         <td><?= defined('SMTP_PASSWORD') && SMTP_PASSWORD !== 'YOUR_EMAIL_PASSWORD_HERE' ? str_repeat('•', 12) : '<span style="color:#fbbf24">⚠ NOT SET</span>' ?></td></tr>
      <tr><td>From Email</td>       <td><?= cfg('SMTP_FROM_EMAIL') ?></td></tr>
      <tr><td>From Name</td>        <td><?= cfg('SMTP_FROM_NAME') ?></td></tr>
      <tr><td>Default Recipient</td><td><?= cfg('MAIL_TO') ?></td></tr>
      <tr><td>Debug Mode</td>       <td><?= defined('SMTP_DEBUG') && SMTP_DEBUG ? '<span class="badge-no">ON</span>' : '<span class="badge-ok">OFF</span>' ?></td></tr>
      <tr><td>Mailer Engine</td>   <td><span class="badge-ok">Native PHP Socket (no Composer)</span></td></tr>
    </table>

    <?php if (defined('SMTP_PASSWORD') && SMTP_PASSWORD === 'YOUR_EMAIL_PASSWORD_HERE'): ?>
    <div class="warn">
      <strong>Password not set.</strong> Open <code>includes/smtp-config.php</code> and replace the placeholder with your real Hostinger email password.
    </div>
    <?php endif; ?>
  </div>

  <!-- Test Email -->
  <div class="section">
    <h3>Send Test Email</h3>

    <?php if ($test_result === 'success'): ?>
      <div class="ok">✓ Test email sent successfully! Check your inbox.</div>
    <?php elseif ($test_result === 'error'): ?>
      <div class="err">✗ Test email failed. Check your SMTP password in <code>includes/smtp-config.php</code>. See PHP error log for details.</div>
    <?php elseif ($test_result === 'invalid'): ?>
      <div class="err">Invalid recipient email address.</div>
    <?php endif; ?>

    <form method="POST">
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
      <tr><td>Config file</td>  <td>includes/smtp-config.php</td></tr>
      <tr><td>Mailer file</td>  <td>includes/mailer.php</td></tr>
      <tr><td>Engine</td>       <td>Native PHP socket — no Composer needed</td></tr>
    </table>
  </div>

  <!-- Forms that use SMTP -->
  <div class="section">
    <h3>Forms Connected to SMTP</h3>
    <table class="table">
      <tr><td>Contact / Quote forms</td>    <td><code>contact-form.php</code></td></tr>
      <tr><td>App Cost Calculator</td>      <td><code>submit-calculator.php</code></td></tr>
      <tr><td>Footer AWS Modal</td>         <td><code>contact-form.php</code> (fetch)</td></tr>
    </table>
  </div>

<?php endif; ?>
</div>
</body>
</html>
