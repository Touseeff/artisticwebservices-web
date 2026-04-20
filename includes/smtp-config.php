<?php
/**
 * SMTP Configuration — ArtisticWebServices
 * Hostinger Shared Hosting
 *
 * Credentials are loaded from ../.env (one directory above this file).
 * NEVER hardcode passwords here. NEVER commit .env to version control.
 *
 * HOW TO UPDATE:
 *   1. Edit the .env file in the project root (same folder as index.php).
 *   2. Set real values for SMTP_PASS, SMTP_ADMIN_PASS, etc.
 *   3. On the server you may also inject these as real server environment
 *      variables (e.g. via cPanel / hPanel environment settings) — this
 *      file will pick them up via getenv() even without a .env file.
 */

// ── Load .env file ─────────────────────────────────────────────────────────────
// parse_ini_file is safe here: the .env format is a subset of PHP .ini syntax.
// Server-set environment variables take priority over .env values.
$_env_file = __DIR__ . '/../.env';
if (file_exists($_env_file)) {
    $_env_vars = parse_ini_file($_env_file);
    if (is_array($_env_vars)) {
        foreach ($_env_vars as $_env_key => $_env_val) {
            // Only set if not already present in the real environment
            if (getenv($_env_key) === false) {
                putenv("{$_env_key}={$_env_val}");
            }
        }
    }
    unset($_env_vars, $_env_key, $_env_val);
}
unset($_env_file);

// ── Helper: read an env variable with a default ────────────────────────────────
if (!function_exists('_smtp_env')) {
    function _smtp_env(string $key, string $default = ''): string {
        $val = getenv($key);
        return ($val !== false && $val !== '') ? $val : $default;
    }
}

// ── Hostinger SMTP Settings ────────────────────────────────────────────────────
define('SMTP_HOST',       _smtp_env('SMTP_HOST',   'smtp.hostinger.com'));
define('SMTP_PORT',       (int) _smtp_env('SMTP_PORT', '465'));   // 465 = SSL | 587 = TLS
define('SMTP_SECURE',     _smtp_env('SMTP_SECURE', 'ssl'));       // 'ssl' for 465, 'tls' for 587

// ── Email Account Credentials ──────────────────────────────────────────────────
// Accept SMTP_USER / SMTP_PASS (.env.example) or legacy SMTP_USERNAME / SMTP_PASSWORD (some CI templates).
define('SMTP_USERNAME',   _smtp_env('SMTP_USER',   _smtp_env('SMTP_USERNAME',   '')));
define('SMTP_PASSWORD',   _smtp_env('SMTP_PASS',   _smtp_env('SMTP_PASSWORD',   '')));

// ── From / Reply-To ────────────────────────────────────────────────────────────
define('SMTP_FROM_EMAIL', _smtp_env('SMTP_FROM_EMAIL', _smtp_env('SMTP_USER')));
define('SMTP_FROM_NAME',  _smtp_env('SMTP_FROM_NAME',  'ArtisticWebServices'));

// ── Default recipient ──────────────────────────────────────────────────────────
define('MAIL_TO',         _smtp_env('MAIL_TO', _smtp_env('SMTP_USER')));

// ── Admin Panel Access Password ────────────────────────────────────────────────
// Protects /mailer-admin-aws7749. Set a strong value in .env — never commit it.
define('SMTP_ADMIN_PASS', _smtp_env('SMTP_ADMIN_PASS', ''));

// ── Debug Mode ─────────────────────────────────────────────────────────────────
// Production: always false. Set true briefly in .env only when troubleshooting.
define('SMTP_DEBUG',      _smtp_env('SMTP_DEBUG', 'false') === 'true');

// ── Local Development Mode ─────────────────────────────────────────────────────
// If SMTP_LOCAL_DEV is explicitly set in .env, honour it.
// Otherwise auto-detect from the request hostname (localhost / 127.0.0.1).
$_smtp_local_env = _smtp_env('SMTP_LOCAL_DEV', '');
if ($_smtp_local_env !== '') {
    define('SMTP_LOCAL_DEV', $_smtp_local_env === 'true');
} else {
    $_smtp_local_host = strtolower($_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? '');
    define('SMTP_LOCAL_DEV',
        str_starts_with($_smtp_local_host, 'localhost') ||
        str_starts_with($_smtp_local_host, '127.0.0.1')
    );
    unset($_smtp_local_host);
}
unset($_smtp_local_env);
