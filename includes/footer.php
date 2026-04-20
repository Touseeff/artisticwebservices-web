<?php
/**
 * footer.php — Site footer orchestrator (Sprint 3 refactor)
 *
 * Loads all footer partials in the correct order.
 * Previously this file was 767 lines mixing HTML, modals, vendor JS,
 * inline JS, and Tawk.to. Extracted to partials/ for separation of concerns.
 *
 * Partial map:
 *   includes/partials/footer-html.php    — footer columns, trust strip, copyright,
 *                                          mobile nav, scroll-to-top anchor
 *   includes/partials/footer-modal.php   — floating contact bar, lead capture modal
 *                                          HTML + all inline JS (focus trap, form
 *                                          submit, dropdowns, autofix block)
 *   includes/partials/footer-scripts.php — all <script src="..."> vendor tags
 *   includes/partials/footer-tawkto.php  — Tawk.to live chat embed + preloader dismiss
 *
 * Visitor attribute contract (set these BEFORE including footer.php):
 *   $tawk_visitor_name  (string, optional)
 *   $tawk_visitor_email (string, optional)
 *   $tawk_visitor_phone (string, optional)
 */

// ── Ensure config is available ──────────────────────────────────────────────
if (!defined('SITE_BASE')) {
    require_once __DIR__ . '/config.php';
}

// ── SITE_BASE alias used throughout partials ────────────────────────────────
$B = SITE_BASE;

// ── Optional Tawk.to visitor attributes ────────────────────────────────────
if (!isset($tawk_visitor_name))  { $tawk_visitor_name  = ''; }
if (!isset($tawk_visitor_email)) { $tawk_visitor_email = ''; }
if (!isset($tawk_visitor_phone)) { $tawk_visitor_phone = ''; }

$__tawk_attrs = [];
foreach ([
    'name'  => $tawk_visitor_name,
    'email' => $tawk_visitor_email,
    'phone' => $tawk_visitor_phone,
] as $__k => $__v) {
    $__v = trim((string) $__v);
    if ($__v !== '') {
        $__tawk_attrs[$__k] = $__v;
    }
}
$__tawk_attrs_json = json_encode(
    $__tawk_attrs,
    JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE
);

// ── Load partials ───────────────────────────────────────────────────────────
require_once __DIR__ . '/partials/footer-html.php';
require_once __DIR__ . '/partials/footer-modal.php';
?>
</body>
</html>
<?php
require_once __DIR__ . '/partials/footer-scripts.php';
require_once __DIR__ . '/partials/footer-tawkto.php';
?>
