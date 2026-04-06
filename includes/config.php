<?php
define('SITE_NAME', 'ArtisticWebServices');
define('SITE_URL', 'https://artisticwebservices.com');
define('SITE_EMAIL', 'info@artisticwebservices.com');
define('SITE_PHONE', '(213) 714-7176');
define('SITE_PHONE_HREF', '+12137147176');
define('SITE_ADDRESS', '26 Broadway, Suite 934, New York, NY 10004, USA');
define('SITE_LOGO', 'assets/images/resources/aws-light-logo.webp');
define('SITE_LOGO_DARK', 'assets/images/resources/artisticwebservice w.png');

// ── Dynamic base URL: works on localhost subfolder AND production ─────────────
if (!defined('SITE_BASE')) {
    $__protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    $__host     = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $__script   = $_SERVER['SCRIPT_NAME'] ?? '/index.php';

    // Strip known sub-page folders to find the project root folder
    foreach (['/services/', '/solutions/', '/insights/'] as $__folder) {
        if (($__pos = strpos($__script, $__folder)) !== false) {
            $__script = substr($__script, 0, $__pos) . '/dummy.php';
            break;
        }
    }
    // dirname gives us the project root path, e.g. /aws-web-claude
    $__base_path = rtrim(dirname($__script), '/\\');

    define('SITE_BASE', $__protocol . $__host . $__base_path);
    unset($__protocol, $__host, $__script, $__folder, $__pos, $__base_path);
}
?>
