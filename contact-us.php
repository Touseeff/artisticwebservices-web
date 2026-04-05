<?php
/**
 * contact-us.php – 301 redirect to canonical contact page
 */
require_once __DIR__ . '/includes/config.php';
header('Location: ' . SITE_URL . '/contact', true, 301);
exit;
