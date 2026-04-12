<?php
/**
 * blog.php – 301 redirect to the Services hub
 * Keeps any external links alive and passes full link equity.
 */
require_once __DIR__ . '/includes/config.php';
header('Location: ' . SITE_URL . '/services', true, 301);
exit;
