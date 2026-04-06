<?php
/**
 * submit-calculator.php — App Cost Calculator form handler
 * Accepts GET submissions from services/app-cost-calculator.php
 * Sends a detailed HTML email via SMTP (Hostinger)
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/mailer.php';

$base = defined('SITE_BASE') ? SITE_BASE : '';

// ── Input helper ──────────────────────────────────────────────────────────────
function cleanVal($val): string {
    return htmlspecialchars(strip_tags(trim($val ?? '')));
}
function cleanArr(array $arr): array {
    return array_map(fn($v) => htmlspecialchars(strip_tags(trim($v))), $arr);
}

// ── Collect fields (form uses GET) ────────────────────────────────────────────
$name        = cleanVal($_GET['username']          ?? '');
$email       = cleanVal($_GET['user-email']        ?? '');
$phone       = cleanVal($_GET['user-number']       ?? '');
$platforms   = cleanArr($_GET['platforms']         ?? []);
$proj_type   = cleanVal($_GET['project-type']      ?? '');
$ui_type     = cleanVal($_GET['ui-type']           ?? '');
$sign_types  = cleanArr($_GET['signup-types']      ?? []);
$screens     = cleanVal($_GET['number-of-screens'] ?? '');
$funcs       = cleanArr($_GET['functionalities']   ?? []);
$description = cleanVal($_GET['app-description']   ?? '');

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
sendMail([
    'reply_to' => $email,
    'subject'  => "App Cost Calculator Submission — $name",
    'fields'   => $fields,
    'source'   => 'App Cost Calculator',
]);

// ── Redirect ──────────────────────────────────────────────────────────────────
header("Location: {$base}/thank-you");
exit;
