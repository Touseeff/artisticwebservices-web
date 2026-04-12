<?php
/**
 * SMTP Configuration — ArtisticWebServices
 * Hostinger Shared Hosting
 *
 * ⚠️  This file is protected by .htaccess (includes/ is blocked from web access).
 *     NEVER expose this file publicly or commit passwords to version control.
 *
 * HOW TO UPDATE:
 *   1. Log into Hostinger hPanel → Emails → Manage
 *   2. Use the email credentials from your email account settings
 *   3. Replace the placeholder values below with your real credentials
 */

// ── Hostinger SMTP Settings ────────────────────────────────────────────────
define('SMTP_HOST',       'smtp.hostinger.com');
define('SMTP_PORT',       465);                  // 465 = SSL  |  587 = TLS
define('SMTP_SECURE',     'ssl');                // 'ssl' for port 465, 'tls' for port 587

// ── Email Account Credentials (Hostinger) ─────────────────────────────────
define('SMTP_USERNAME',   'info@artisticwebservices.com');   // Your full email address
define('SMTP_PASSWORD',   'YOUR_EMAIL_PASSWORD_HERE');        // ← Replace this

// ── From / Reply-To ────────────────────────────────────────────────────────
define('SMTP_FROM_EMAIL', 'info@artisticwebservices.com');
define('SMTP_FROM_NAME',  'ArtisticWebServices');

// ── Default recipient ──────────────────────────────────────────────────────
define('MAIL_TO',         'info@artisticwebservices.com');

// ── Admin Panel Access Password ────────────────────────────────────────────
// Used to protect the hidden SMTP test panel (/mailer-admin-aws7749).
// Set a strong value on the server after deploy — do not commit real passwords.
define('SMTP_ADMIN_PASS', 'YOUR_SMTP_ADMIN_PASSWORD_HERE');

// ── Debug Mode ─────────────────────────────────────────────────────────────
// Production: always false. Set true only briefly on the server when troubleshooting SMTP.
define('SMTP_DEBUG',      false);

// ── Local Development Mode ─────────────────────────────────────────────────
// Automatically detected: on localhost/127.0.0.1, emails are written to
// logs/mail-dev.log instead of being sent via SMTP.
$_smtp_local_host = strtolower($_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? '');
define('SMTP_LOCAL_DEV',
    str_starts_with($_smtp_local_host, 'localhost') ||
    str_starts_with($_smtp_local_host, '127.0.0.1')
);
unset($_smtp_local_host);
