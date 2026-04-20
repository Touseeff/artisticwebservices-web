<?php
/**
 * submit-calculator.php — App Cost Calculator form handler
 * Accepts POST submissions from services/app-cost-calculator.php
 * Sends a detailed HTML email via SMTP (Hostinger)
 *
 * Security: CSRF-protected, rate-limited (5 submissions per 60 seconds per IP).
 */

require_once __DIR__ . '/includes/config.php';     // session + cookie params before CSRF
require_once __DIR__ . '/includes/csrf.php';       // csrf_verify()
require_once __DIR__ . '/includes/rate-limit.php'; // file-based sliding-window limiter
require_once __DIR__ . '/includes/mailer.php';

// ── Security checks (must run before any output) ──────────────────────────────
csrf_verify();                              // 403 + exit on token mismatch
rate_limit_check('calculator_form');        // 429 + exit if over 5 req/60 s per IP

$base = defined('SITE_BASE') ? SITE_BASE : '';

// ── Input helper ──────────────────────────────────────────────────────────────
function cleanVal($val): string {
    return htmlspecialchars(strip_tags(trim($val ?? '')));
}
function cleanArr(array $arr): array {
    return array_map(fn($v) => htmlspecialchars(strip_tags(trim($v))), $arr);
}

// ── Collect fields (form uses POST) ──────────────────────────────────────────
$name        = cleanVal($_POST['username']          ?? '');
$email       = cleanVal($_POST['user-email']        ?? '');
$phone       = cleanVal($_POST['user-number']       ?? '');
$platforms   = cleanArr($_POST['platforms']         ?? []);
$proj_type   = cleanVal($_POST['project-type']      ?? '');
$ui_type     = cleanVal($_POST['ui-type']           ?? '');
$sign_types  = cleanArr($_POST['signup-types']      ?? []);
$screens     = cleanVal($_POST['number-of-screens'] ?? '');
$funcs       = cleanArr($_POST['functionalities']   ?? []);
$description = cleanVal($_POST['app-description']   ?? '');

// ── Validate required fields ──────────────────────────────────────────────────
if (empty($name) || empty($email)) {
    header("Location: {$base}/services/app-cost-calculator.php?error=missing");
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: {$base}/services/app-cost-calculator.php?error=invalid_email");
    exit;
}

// ── Build email fields ────────────────────────────────────────────────────────
$fields = array_filter([
    'Name'              => $name,
    'Email'             => $email,
    'Phone'             => $phone ?: null,
    'Platforms'         => $platforms   ? implode(', ', $platforms)  : null,
    'Project Type'      => $proj_type   ?: null,
    'UI Type'           => $ui_type     ?: null,
    'Sign-up Options'   => $sign_types  ? implode(', ', $sign_types) : null,
    'Number of Screens' => $screens     ?: null,
    'Functionalities'   => $funcs       ? implode(', ', $funcs)      : null,
    'App Description'   => $description ?: null,
]);

// ── Send via SMTP ─────────────────────────────────────────────────────────────
$sent = sendMail([
    'reply_to' => $email,
    'subject'  => "App Cost Calculator Submission — $name",
    'fields'   => $fields,
    'source'   => 'App Cost Calculator',
]);

// ── Redirect ──────────────────────────────────────────────────────────────────
if ($sent) {
    header("Location: {$base}/thank-you");
} else {
    // Log the failed lead so no calculator submission is silently lost
    $failed_log = __DIR__ . '/logs/mail-failed.log';
    $log_entry  = json_encode([
        'time'  => date('Y-m-d H:i:s'),
        'name'  => $name,
        'email' => $email,
        'phone' => $phone,
        'page'  => $_POST['page'] ?? $_SERVER['HTTP_REFERER'] ?? 'App Cost Calculator',
        'error' => 'SMTP send failed',
    ]) . "\n";
    @file_put_contents($failed_log, $log_entry, FILE_APPEND | LOCK_EX);
    header("Location: {$base}/contact?error=send_failed");
}
exit;
