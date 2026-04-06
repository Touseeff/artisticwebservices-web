<?php
/**
 * contact-form.php — Universal contact form handler
 * Accepts POST (standard forms) and GET (legacy form-quote.php links)
 * Sends email via native PHP SMTP socket (Hostinger shared hosting)
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/mailer.php';

// ── Input helper ─────────────────────────────────────────────────────────────
function clean($val): string {
    return htmlspecialchars(strip_tags(trim($val ?? '')));
}

$src = ($_SERVER['REQUEST_METHOD'] === 'POST') ? $_POST : $_GET;

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
sendMail([
    'reply_to' => $email,
    'subject'  => "New Inquiry from $first_name $last_name — $host",
    'fields'   => $fields,
    'source'   => $page,
]);

// ── Redirect ──────────────────────────────────────────────────────────────────
header("Location: {$base}/thank-you");
exit;
