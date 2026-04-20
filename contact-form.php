<?php
/**
 * contact-form.php — Universal contact form handler
 * Accepts POST submissions from all contact/quote forms and the modal.
 * Sends email via native PHP SMTP socket (Hostinger shared hosting)
 *
 * Security: CSRF-protected, rate-limited (5 submissions per 60 seconds per IP).
 */

require_once __DIR__ . '/includes/csrf.php';       // starts session, provides csrf_verify()
require_once __DIR__ . '/includes/rate-limit.php'; // file-based sliding-window limiter
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/mailer.php';

// ── Security checks (must run before any output) ──────────────────────────────
csrf_verify();                         // 403 + exit on token mismatch
rate_limit_check('contact_form');      // 429 + exit if over 5 req/60 s per IP

// ── Input helper ─────────────────────────────────────────────────────────────
function clean($val): string {
    return htmlspecialchars(strip_tags(trim($val ?? '')));
}

// All submissions must be POST — $_SERVER keys kept for host/page tracking
$src = $_POST;

$first_name  = clean($src['first_name']  ?? '');
$last_name   = clean($src['last_name']   ?? '');
$email       = clean($src['email']       ?? '');
$phone       = clean($src['phone']       ?? '');
$description = clean($src['description'] ?? $src['message'] ?? '');
$host        = clean($src['host']        ?? 'ArtisticWebServices');
$page        = clean($src['page']        ?? $host);

// Services are submitted as states[] array (multi-select custom dropdown)
$states_raw = $src['states'] ?? [];
if (is_array($states_raw)) {
    $service = implode(', ', array_map('strip_tags', array_map('trim', $states_raw)));
} else {
    $service = clean($states_raw ?: ($src['service'] ?? ''));
}

$base = defined('SITE_BASE') ? SITE_BASE : '';

// ── Validate ──────────────────────────────────────────────────────────────────
if (empty($first_name) || empty($email)) {
    header("Location: {$base}/contact?error=missing");
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: {$base}/contact?error=invalid_email");
    exit;
}

// ── Build email fields ────────────────────────────────────────────────────────
$fields = array_filter([
    'Name'    => trim("$first_name $last_name"),
    'Email'   => $email,
    'Phone'   => $phone ?: null,
    'Service' => $service ?: null,
    'Message' => $description ?: null,
]);

// ── Send via SMTP ─────────────────────────────────────────────────────────────
$sent = sendMail([
    'reply_to' => $email,
    'subject'  => "New Inquiry from $first_name $last_name — $host",
    'fields'   => $fields,
    'source'   => $page,
]);

// ── Redirect ──────────────────────────────────────────────────────────────────
if ($sent) {
    header("Location: {$base}/thank-you");
} else {
    // Log the failed lead so no inquiry is silently lost
    $failed_log = __DIR__ . '/logs/mail-failed.log';
    $log_entry  = json_encode([
        'time'  => date('Y-m-d H:i:s'),
        'name'  => trim("$first_name $last_name"),
        'email' => $email,
        'phone' => $phone,
        'page'  => $page,
        'error' => 'SMTP send failed',
    ]) . "\n";
    @file_put_contents($failed_log, $log_entry, FILE_APPEND | LOCK_EX);
    header("Location: {$base}/contact?error=send_failed");
}
exit;
