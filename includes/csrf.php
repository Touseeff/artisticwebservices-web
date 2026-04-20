<?php
/**
 * includes/csrf.php — CSRF Protection Helpers
 *
 * Provides token generation, HTML helpers, and verification for all forms.
 * Token is stored in $_SESSION['csrf_token'] and regenerated after each
 * successful form submission to prevent token reuse attacks.
 *
 * Usage:
 *   require_once __DIR__ . '/includes/csrf.php';
 *   csrf_verify();                  // at top of POST handlers
 *   echo csrf_field();              // inside <form> elements
 *   echo csrf_meta();               // in <head> for fetch()-based modals
 */

// ── Start session safely (config.php usually starts it before any output) ────
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ── Token length (bytes → hex string of double length) ────────────────────────
define('CSRF_TOKEN_LENGTH', 32);

/**
 * csrf_token()
 * Returns the current session CSRF token, generating one if it doesn't exist.
 *
 * @return string  64-character hex token
 */
function csrf_token(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(CSRF_TOKEN_LENGTH));
    }
    return $_SESSION['csrf_token'];
}

/**
 * csrf_field()
 * Returns an HTML hidden input element containing the CSRF token.
 * Drop this inside every <form> that submits to a protected handler.
 *
 * @return string  HTML string (not echoed — caller must echo)
 */
function csrf_field(): string
{
    $token = htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8');
    return '<input type="hidden" name="csrf_token" value="' . $token . '">';
}

/**
 * csrf_meta()
 * Returns an HTML <meta> tag containing the CSRF token.
 * Used by fetch()-based modal forms to read the token from the DOM.
 *
 * @return string  HTML string (not echoed — caller must echo)
 */
function csrf_meta(): string
{
    $token = htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8');
    return '<meta name="csrf-token" content="' . $token . '">';
}

/**
 * csrf_verify()
 * Validates the CSRF token submitted via POST.
 * Sends HTTP 403 and exits if the token is missing or invalid.
 * Regenerates the token on success to prevent reuse.
 *
 * Call this at the very top of any POST form handler, after session is started.
 *
 * @return void
 */
function csrf_verify(): void
{
    // Only verify on POST requests
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return;
    }

    $submitted = $_POST['csrf_token'] ?? '';
    $stored    = $_SESSION['csrf_token'] ?? '';

    // Both must be non-empty strings and match using constant-time comparison
    if (
        empty($submitted) ||
        empty($stored) ||
        !hash_equals($stored, $submitted)
    ) {
        http_response_code(403);
        header('Content-Type: text/plain; charset=UTF-8');
        exit('403 Forbidden: Invalid or missing CSRF token.');
    }

    // ── Regenerate token after successful verification (prevents token reuse) ──
    $_SESSION['csrf_token'] = bin2hex(random_bytes(CSRF_TOKEN_LENGTH));
}
