<?php
/**
 * contact-form.php — Universal contact form handler
 * Accepts POST (standard forms) and GET (legacy form-quote.php links)
 * Sends email via SMTP using PHPMailer (Hostinger shared hosting)
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
$service     = clean($src['service']     ?? '');
$host        = clean($src['host']        ?? 'ArtisticWebServices');
$page        = clean($src['page']        ?? $host);

$base = defined('SITE_BASE') ? SITE_BASE : '';

// ── Validate ──────────────────────────────────────────────────────────────────
if (empty($first_name) || empty($email)) {
    header("Location: {$base}/contact.php?error=missing");
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: {$base}/contact.php?error=invalid_email");
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
header("Location: {$base}/thank-you.php");
exit;
