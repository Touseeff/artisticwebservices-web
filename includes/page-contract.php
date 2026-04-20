<?php
/**
 * Page Variable Contract — includes/page-contract.php
 *
 * PURPOSE
 * -------
 * Validates and normalises the $page_* variables that every page must set
 * before including head.php. Enforces required variables and provides safe
 * defaults for optional ones so that head.php never receives undefined input.
 *
 * USAGE (do NOT include in head.php — that would require updating 200+ pages)
 * ---------------------------------------------------------------------------
 * In each page file, include this AFTER setting $page_* variables and BEFORE
 * including head.php:
 *
 *   <?php
 *   require_once __DIR__ . '/../includes/config.php';
 *
 *   $page_title       = 'My Page Title';
 *   $page_description = 'My meta description.';
 *   $page_canonical   = 'https://artisticwebservices.com/services/my-page';
 *   // ... other optional $page_* variables ...
 *
 *   require_once __DIR__ . '/../includes/page-contract.php';  // <-- add this
 *   require_once __DIR__ . '/../includes/head.php';
 *   ?>
 *
 * REQUIRED VARIABLES
 * ------------------
 *   $page_title        string   <title> tag and og:title (fatal if empty)
 *
 * RECOMMENDED VARIABLES (warning + fallback if missing)
 * -----------------------------------------------------
 *   $page_description  string   <meta name="description"> and og:description
 *
 * OPTIONAL VARIABLES (safe defaults applied automatically)
 * --------------------------------------------------------
 *   $page_canonical       string   Canonical URL  (auto-built from REQUEST_URI)
 *   $page_og_image        string   Open Graph image URL  (empty string)
 *   $page_breadcrumbs     array    BreadcrumbList schema items  ([])
 *   $page_faq             array    FAQPage schema Q&A pairs     ([])
 *   $page_service_schema  array    Service schema data          ([])
 *   $page_article_schema  array    Article schema data          ([])
 *   $load_slick           bool     Load Slick carousel JS       (false)
 */

// ── Required: $page_title ───────────────────────────────────────────────────
if (empty($page_title)) {
    trigger_error(
        'Page contract violation: $page_title is required but was empty or not set. ' .
        'Set it before including page-contract.php.',
        E_USER_ERROR
    );
}

// ── Recommended: $page_description ─────────────────────────────────────────
if (empty($page_description)) {
    trigger_error(
        'Page contract: $page_description is missing — using $page_title as fallback. ' .
        'Set $page_description for better SEO.',
        E_USER_WARNING
    );
    $page_description = strip_tags((string) $page_title);
}

// ── Optional: $page_canonical ───────────────────────────────────────────────
// Auto-build from current request if not set. Query strings are stripped so
// paginated / filtered URLs do not create duplicate canonicals.
if (!isset($page_canonical)) {
    $__protocol   = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $__host_base  = defined('SITE_BASE')
        ? rtrim(SITE_BASE, '/')
        : $__protocol . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost');
    $__uri        = strtok($_SERVER['REQUEST_URI'] ?? '/', '?'); // strip query string
    $page_canonical = $__host_base . $__uri;
    unset($__protocol, $__host_base, $__uri);
}

// ── Optional: remaining page variables with safe defaults ───────────────────
if (!isset($page_og_image))       { $page_og_image       = ''; }
if (!isset($page_breadcrumbs))    { $page_breadcrumbs    = []; }
if (!isset($page_faq))            { $page_faq            = []; }
if (!isset($page_service_schema)) { $page_service_schema = []; }
if (!isset($page_article_schema)) { $page_article_schema = []; }
if (!isset($load_slick))          { $load_slick          = false; }
