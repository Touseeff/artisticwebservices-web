# Senior Dev Report #1 — PHP Architecture & Template Refactor
**Engineer**: Senior Fullstack Developer #1 (10 YOE)  
**Date**: April 2026  
**Specialization**: PHP Architecture, Template Systems  
**Codebase**: `D:\xampp\htdocs\artasticwebservices-web`

---

## Executive Summary

The codebase is functional and has clearly had iterative improvements applied — config constants, `SITE_BASE` dynamic URL resolution, `require_once` for critical includes, and page-variable-driven JSON-LD schemas all show deliberate design thinking. However, seven distinct architectural issues were found during audit. The most critical is **duplicate JSON-LD structured data** — Google Search Console will flag this and it actively harms SEO rankings. Secondary concerns include redundant CSS loading (3 stylesheets loaded twice per page), a `form-quote.php` include that uses plain `include` instead of `require_once` across 28+ pages, a 1,364-line footer.php that is unmaintainable, and missing enforcement of the page variable contract. All issues have production-ready fixes below.

---

## Issue #1: Duplicate JSON-LD — BreadcrumbList + Service Schema Emitted Twice

**Severity**: Critical  
**Files**: `includes/head.php:243–257` and `includes/footer.php:1085–1140`  
**Problem**:  
`head.php` conditionally emits a `BreadcrumbList` block (lines 243–257) when `$page_breadcrumbs` is set. `footer.php` unconditionally emits another `BreadcrumbList` block (line 1085–1091) built from `$_SERVER['REQUEST_URI']` path segments. On every service/solution page both blocks render, producing **two BreadcrumbList schemas and two Service schemas** in the same HTML document. Google's Rich Results Test treats this as malformed structured data and suppresses both.

Additionally, `head.php` emits a `Service` schema when `$page_service_schema` is set (lines 281–298), while `footer.php` also emits a `Service` schema for all `/services/` and `/solutions/` URLs (lines 1093–1140).

**Concrete collision example** — `services/mobile-app-development.php` produces:
1. BreadcrumbList from `head.php` (via `$page_breadcrumbs`)
2. Service schema from `head.php` (via `$page_service_schema`)
3. BreadcrumbList from `footer.php` (auto-built from URI)
4. Service schema from `footer.php` (auto-built from URI)

**Fix — production-ready code**:

**Step 1**: Remove the BreadcrumbList block from `head.php` entirely (lines 243–257). The footer version is superior — it auto-builds from the real URI and does not require pages to set `$page_breadcrumbs`.

Delete this block from `includes/head.php`:
```php
// DELETE THESE LINES (243–257) from head.php:
    <?php if (!empty($page_breadcrumbs)): ?>
    <!-- BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://artisticwebservices.com/"},
            <?php foreach ($page_breadcrumbs as $i => $bc): ?>
            {"@type": "ListItem", "position": <?php echo $i + 2; ?>, "name": "<?php echo addslashes($bc['name']); ?>", "item": "<?php echo $bc['url']; ?>"}<?php echo ($i < count($page_breadcrumbs) - 1) ? ',' : ''; ?>
            <?php endforeach; ?>
        ]
    }
    </script>
    <?php endif; ?>
```

**Step 2**: Remove the Service schema block from `head.php` (lines 281–298). The footer's URI-aware version is the canonical source.

Delete this block from `includes/head.php`:
```php
// DELETE THESE LINES (281–298) from head.php:
    <?php if (!empty($page_service_schema)): ?>
    <!-- Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        ...
    }
    </script>
    <?php endif; ?>
```

**Step 3**: The footer already auto-builds a quality `BreadcrumbList` and `Service` schema from URI segments. Keep those intact but guard against emitting when the page is the homepage (URI = `/`):

In `includes/footer.php`, wrap the BreadcrumbList and Service output in a check:
```php
// In footer.php, around line 1085 — add this guard:
<?php if (!empty($__segments)): // Skip structured data on homepage ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": <?= json_encode($__crumbs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
}
</script>
<?php endif; ?>
```

**Step 4**: Keep `$page_service_schema` as a page-level variable for future custom overrides, but use it in footer.php instead of head.php:

```php
// In footer.php, replace the auto-generated Service block with:
<?php
$__emit_service = false;
$__svc_name     = $__title_clean;
$__svc_desc     = trim($__desc);

// Allow page to override with richer data
if (!empty($page_service_schema)) {
    $__svc_name     = $page_service_schema['name'];
    $__svc_desc     = $page_service_schema['description'];
    $__emit_service = true;
} elseif ($__is_service || $__is_solution) {
    $__emit_service = true;
}

if ($__emit_service):
?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": <?= json_encode($__svc_name) ?>,
    "description": <?= json_encode($__svc_desc) ?>,
    "url": <?= json_encode($__canonical) ?>,
    "provider": {
        "@type": "Organization",
        "name": "ArtisticWebServices",
        "url": "https://artisticwebservices.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "26 Broadway, Suite 934",
            "addressLocality": "New York",
            "addressRegion": "NY",
            "postalCode": "10004",
            "addressCountry": "US"
        }
    },
    "areaServed": {"@type": "Country", "name": "United States"},
    "serviceType": <?= json_encode($__svc_name) ?>
}
</script>
<?php endif; ?>
```

**Why**: Google's Structured Data documentation explicitly states duplicate schema types on the same page cause unpredictable behavior. The Rich Results Test will show errors. Centralizing structured data in footer.php (where the URI context is available) and allowing `$page_service_schema` to enrich — not duplicate — the output is the correct architectural pattern.

---

## Issue #2: Duplicate CSS Loading — 3 Stylesheets Loaded Twice Per Page

**Severity**: High  
**Files**: `includes/head.php:98–99,113` and `includes/header.php:138–140`  
**Problem**:  
The following stylesheets are loaded in both `head.php` (inside `<head>`) and then again immediately in `header.php` (in `<body>`):

- `assets/css/style-01.css@v=1.1.css` — loaded at head.php:98 AND header.php:138
- `assets/css/mibooz-responsive.css@v=1.1.css` — loaded at head.php:99 AND header.php:139
- Select2 CSS (`cdn.jsdelivr.net/…/select2.min.css`) — loaded at head.php:113 AND header.php:140

This means every page request downloads these files twice (browser cache aside on first load), doubles the render-blocking time on initial paint, and is confusing for any developer debugging CSS specificity issues.

**Fix — production-ready code**:

Remove the three duplicate `<link>` tags from `includes/header.php` (lines 138–140):

```php
// DELETE these 3 lines from includes/header.php:
<link rel="stylesheet" href="<?= $B ?>/assets/css/style-01.css@v=1.1.css" />
<link rel="stylesheet" href="<?= $B ?>/assets/css/mibooz-responsive.css@v=1.1.css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
```

The versions in `head.php` inside `<head>` are the correct location — they are already preloaded and link-tagged correctly.

**Why**: CSS `<link>` tags in `<body>` cause Flash of Unstyled Content (FOUC) and are invalid HTML per the HTML5 spec (link[rel=stylesheet] belongs in `<head>`). The browser may also trigger an additional layout/paint pass when it encounters a stylesheet mid-body.

---

## Issue #3: `include` Instead of `require_once` for form-quote.php

**Severity**: High  
**Files**: 28 pages across `/services/`, `/solutions/`, and `/about-us.php`  
**Problem**:  
`form-quote.php` is included using plain `include` across all pages. This means:
1. If `form-quote.php` is missing or has a parse error, the page silently renders without the quote form instead of crashing with a fatal error.
2. `include` (not `include_once`) allows the file to be included multiple times if a page has multiple code paths — though this is not currently happening, it is a latent risk.

Example occurrences:
- `services/mobile-app-development.php:1857` — `<?php include __DIR__ . '/../includes/form-quote.php'; ?>`
- `solutions/consulting.php` — `require_once` used for head/header/footer but `include` for form-quote

**Fix — production-ready code**:

Replace all occurrences site-wide. The correct call is:
```php
<?php require_once __DIR__ . '/../includes/form-quote.php'; ?>
```

For `about-us.php` (root-level), it should be:
```php
<?php require_once __DIR__ . '/includes/form-quote.php'; ?>
```

To apply this globally, run from the project root:
```bash
# Dry-run first:
grep -rn "include __DIR__.*form-quote.php" . --include="*.php"

# Then apply:
find . -name "*.php" -not -path "./includes/*" \
  -exec sed -i 's/<?php include __DIR__ . \(.*form-quote\.php\)/<?php require_once __DIR__ . \1/g' {} \;
```

Or apply individually to each file. The pattern to find and replace:
```php
// BEFORE (wrong):
<?php include __DIR__ . '/../includes/form-quote.php'; ?>

// AFTER (correct):
<?php require_once __DIR__ . '/../includes/form-quote.php'; ?>
```

**Why**: `require_once` is the correct function for critical template partials. A missing form is a functional defect — it should be a fatal error that gets caught in staging, not a silent failure in production. `require_once` also prevents accidental double-inclusion.

---

## Issue #4: No Page Variable Contract — Silent Failures on Missing Variables

**Severity**: High  
**Files**: `includes/head.php:7–14` (partial mitigation exists), all page files  
**Problem**:  
Pages set `$page_title`, `$page_description`, `$page_canonical`, `$page_keywords`, `$page_og_image`, `$page_breadcrumbs`, `$page_faq`, `$page_service_schema`, and `$page_article_schema` with no formal contract. `head.php` provides defaults for 4 of these variables, but:

1. `$page_canonical` defaults to `SITE_URL . '/'` (homepage URL) for all pages — a silent SEO disaster if a page forgets to set it.
2. `$page_keywords` is not defaulted, so a missing `<meta name="keywords">` tag renders with no warning.
3. `$page_service_schema`, `$page_faq`, `$page_article_schema` are checked with `!empty()` but there is no validation of their array structure. A malformed array produces broken JSON-LD with no error log entry.
4. `solutions/consulting.php` does not set `$page_faq` at all — no warning, no fallback.

**Fix — production-ready code**:

Create a dedicated page contract validator. Add this to `includes/config.php` AFTER the constants block, or create `includes/page-contract.php`:

```php
<?php
/**
 * Page Variable Contract Validator
 * Call this AFTER setting all $page_* vars, BEFORE requiring head.php.
 *
 * In production (SITE_ENV !== 'development'), validation is skipped for performance.
 */
function aws_validate_page_contract(array $vars): void
{
    if (!defined('SITE_ENV') || SITE_ENV !== 'development') {
        return;
    }

    $required = [
        'page_title'       => 'string',
        'page_description' => 'string',
        'page_canonical'   => 'string',
    ];

    $optional_typed = [
        'page_keywords'        => 'string',
        'page_og_image'        => 'string',
        'page_breadcrumbs'     => 'array',
        'page_faq'             => 'array',
        'page_service_schema'  => 'array',
        'page_article_schema'  => 'array',
    ];

    $errors = [];

    foreach ($required as $name => $type) {
        if (!isset($vars[$name]) || gettype($vars[$name]) !== $type || $vars[$name] === '') {
            $errors[] = "MISSING required page variable: \${$name} (expected non-empty {$type})";
        }
    }

    // Canonical must not be the homepage URL on non-homepage pages
    if (isset($vars['page_canonical']) && $vars['page_canonical'] === SITE_URL . '/') {
        $script = $_SERVER['SCRIPT_NAME'] ?? '';
        if (!in_array(basename($script), ['index.php', ''], true)) {
            $errors[] = "WARNING: \$page_canonical is set to homepage URL on a non-homepage page ({$script})";
        }
    }

    // Validate $page_faq structure
    if (!empty($vars['page_faq']) && is_array($vars['page_faq'])) {
        foreach ($vars['page_faq'] as $i => $faq) {
            if (!isset($faq['q']) || !isset($faq['a'])) {
                $errors[] = "MALFORMED \$page_faq[{$i}]: must have 'q' and 'a' keys";
            }
        }
    }

    // Validate $page_service_schema structure
    if (!empty($vars['page_service_schema']) && is_array($vars['page_service_schema'])) {
        if (!isset($vars['page_service_schema']['name']) || !isset($vars['page_service_schema']['description'])) {
            $errors[] = "MALFORMED \$page_service_schema: must have 'name' and 'description' keys";
        }
    }

    // Validate $page_breadcrumbs structure
    if (!empty($vars['page_breadcrumbs']) && is_array($vars['page_breadcrumbs'])) {
        foreach ($vars['page_breadcrumbs'] as $i => $bc) {
            if (!isset($bc['name']) || !isset($bc['url'])) {
                $errors[] = "MALFORMED \$page_breadcrumbs[{$i}]: must have 'name' and 'url' keys";
            }
        }
    }

    if (!empty($errors)) {
        $file = $_SERVER['SCRIPT_FILENAME'] ?? 'unknown';
        error_log('[AWS Page Contract] ' . $file . ': ' . implode(' | ', $errors));
        // In development: show visible warning bar
        echo '<div style="position:fixed;top:0;left:0;right:0;z-index:999999;background:#c00;color:#fff;'
           . 'font:12px monospace;padding:6px 12px;white-space:pre-wrap;">'
           . htmlspecialchars(implode("\n", $errors))
           . '</div>';
    }
}
```

Then add to `includes/head.php` BEFORE the HTML output:
```php
<?php
// Validate page variable contract (dev-mode only)
if (function_exists('aws_validate_page_contract')) {
    aws_validate_page_contract(get_defined_vars());
}
?>
```

Add to `includes/config.php`:
```php
// Add after the SITE_BASE define block:
define('SITE_ENV', 'development'); // Change to 'production' on live server
```

**Why**: Silent variable failures are the hardest class of bug to diagnose in template systems. The dev-mode validator surfaces them as visible UI warnings and error log entries during development, with zero runtime cost in production.

---

## Issue #5: footer.php is 1,364 Lines — Unmaintainable Monolith

**Severity**: Medium  
**File**: `includes/footer.php`  
**Problem**:  
The file contains 6 logically distinct concerns mixed together:
1. Lines 1–21: PHP variable setup (Tawk.to visitor attrs)
2. Lines 22–600: CSS for modal, floating widgets, footer layout, logo scroll strip
3. Lines 601–783: Footer HTML (navigation links, social icons, copyright)
4. Lines 784–875: Lead modal HTML
5. Lines 876–1051: Vendor JS, modal JS, dropdown JS, lazy-load JS
6. Lines 1052–1365: JSON-LD schemas, auto-fix JS bundle, Tawk.to script, preloader dismiss

A developer fixing a footer link must scroll past 800 lines of CSS and JS to find it. A developer debugging the lead modal JS must search through vendor script tags to find the right block.

**Fix — proposed split into sub-includes**:

Create a `includes/partials/` directory and split footer.php into:

```
includes/
  footer.php              ← slim orchestrator (~30 lines)
  partials/
    footer-styles.php     ← all footer/modal/widget CSS (~580 lines)
    footer-html.php       ← footer nav, address, social, copyright HTML (~183 lines)
    modal-lead.php        ← lead modal HTML + form (~80 lines)
    footer-scripts.php    ← vendor JS + modal/dropdown/lazy JS (~160 lines)
    footer-schema.php     ← BreadcrumbList + Service JSON-LD PHP (~90 lines)
    tawk-chat.php         ← Tawk.to integration script (~65 lines)
    preloader-dismiss.php ← preloader fade JS (~20 lines)
```

**New slim `includes/footer.php`** (production-ready):

```php
<?php
$B = defined('SITE_BASE') ? SITE_BASE : '';

// Optional visitor info for Tawk.to
if (!isset($tawk_visitor_name))  $tawk_visitor_name  = '';
if (!isset($tawk_visitor_email)) $tawk_visitor_email = '';
if (!isset($tawk_visitor_phone)) $tawk_visitor_phone = '';

$__tawk_attrs = [];
foreach (['name' => $tawk_visitor_name, 'email' => $tawk_visitor_email, 'phone' => $tawk_visitor_phone] as $__k => $__v) {
    $__v = trim((string) $__v);
    if ($__v !== '') $__tawk_attrs[$__k] = $__v;
}
$__tawk_attrs_json = json_encode(
    $__tawk_attrs,
    JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE
);
?>
<?php require_once __DIR__ . '/partials/footer-styles.php'; ?>
<?php require_once __DIR__ . '/partials/footer-html.php'; ?>
<?php require_once __DIR__ . '/partials/modal-lead.php'; ?>
<?php require_once __DIR__ . '/partials/footer-scripts.php'; ?>
<?php require_once __DIR__ . '/partials/footer-schema.php'; ?>
<?php require_once __DIR__ . '/partials/tawk-chat.php'; ?>
<?php require_once __DIR__ . '/partials/preloader-dismiss.php'; ?>
```

**Why**: Single-responsibility principle applied to template files. Each partial can be independently edited, version-controlled with meaningful diffs, and tested in isolation. This also makes it trivial to conditionally skip sections (e.g., disable Tawk.to on specific pages by checking a flag before requiring `tawk-chat.php`).

---

## Issue #6: `include` vs `require_once` — Incorrect Function for Critical Includes

**Severity**: Medium  
**Files**: Multiple pages, `about-us.php:68`, `services/*.php`, `solutions/*.php`  
**Problem**:  
As detailed in Issue #3, `form-quote.php` uses `include` across 28+ pages. Additionally, `index.php` uses bare `require_once 'includes/config.php'` (relative path, not `__DIR__`-anchored), which works only when the working directory is the project root — it would break if `index.php` were ever symlinked or `chdir()`'d.

`index.php:2`:
```php
require_once 'includes/config.php';   // BAD — relative path, CWD-dependent
```

`index.php:17`:
```php
require_once 'includes/head.php';     // BAD — relative path
```

`index.php:487`:
```php
<?php require_once 'includes/header.php'; ?>   // BAD — relative path
```

**Fix — production-ready code**:

All includes in `index.php` must use `__DIR__`-anchored absolute paths:
```php
// BEFORE (index.php lines 2, 17, 487, 1189, 1190):
require_once 'includes/config.php';
require_once 'includes/head.php';
require_once 'includes/header.php';
require_once 'includes/social-share.php';
require_once 'includes/footer.php';

// AFTER:
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/social-share.php';
require_once __DIR__ . '/includes/footer.php';
```

All `form-quote.php` includes site-wide:
```php
// BEFORE:
<?php include __DIR__ . '/../includes/form-quote.php'; ?>

// AFTER:
<?php require_once __DIR__ . '/../includes/form-quote.php'; ?>
```

**Why**: `__DIR__` is resolved at compile time and is always the directory of the file being parsed, regardless of the current working directory. Relative paths depend on `getcwd()` which can vary under CLI execution, cron jobs, or complex routing setups. `require_once` vs `include` is covered in Issue #3. Always use `require_once` for partials that must be present for the page to function.

---

## Issue #7: Output Buffering — Header-Already-Sent Risk

**Severity**: Medium  
**Files**: All page files, `includes/head.php`  
**Problem**:  
There is no `ob_start()` call at the top of any page or any include. This means:

1. Any whitespace or BOM before `<?php` in any included file will send HTTP headers, making subsequent `header()` calls fatal.
2. `insights/digital-insights.php` calls `header('Location: /services', true, 301); exit;` — if any upstream include has emitted output, this will fail silently (header redirect ignored, PHP warning suppressed by `@` or not surfaced).
3. There is no protection against accidentally echoing debug output before `head.php` loads.

The current `insights/digital-insights.php` pattern is particularly fragile:
```php
<?php header('Location: /services', true, 301); exit; ?>
```
This works only if it is the first byte sent. If any include ever gains a trailing newline after `?>`, it will break.

**Fix — production-ready code**:

Add output buffering to `includes/config.php` as the very first statement:
```php
<?php
// Start output buffer — prevents header-already-sent errors from
// accidental whitespace in includes or BOM in UTF-8 files.
if (!ob_get_level()) {
    ob_start();
}

define('SITE_NAME', 'ArtisticWebServices');
// ... rest of config.php
```

For redirect-only files like `insights/digital-insights.php`, the pattern is already safe as long as `config.php` is not included before it. As-is (no includes, immediate redirect), it is fine. But as a defensive measure, the `ob_start()` in config.php covers all paths that load config first.

**Why**: Output buffering is PHP's standard defensive pattern for template systems. It decouples the "send output" phase from the "build output" phase, prevents header-sent errors from subtle whitespace issues, and enables response manipulation (compression, charset injection) before final delivery.

---

## Issue #8: Template Include Order — All Pages Compliant Except One Edge Case

**Severity**: Low  
**Files**: All audited pages  
**Problem**:  
The correct include order `config → head → header → content → footer` is consistently followed across:
- `index.php`: config → head → [content] → header → footer (header is included inside content at line 487, which is acceptable since it's inside `<body>`)
- `services/mobile-app-development.php`: config → head → header → content → footer ✓
- `solutions/consulting.php`: config → head → header → content → footer ✓

One minor ordering concern: `index.php` requires `head.php` at line 17, then emits `<style>` blocks (page-specific CSS) starting at line 19 **outside the `<head>` tag** but before `header.php`. The `<body>` tag is never explicitly opened in index.php — it appears to be opened inside `header.php` or expected in the page template.

Actually, checking the service pages: `services/mobile-app-development.php` line 21 shows `<body>` opened in the page file itself, then `header.php` is required. This is correct — `head.php` closes `</head>` at line 327, then pages open `<body>`.

No critical ordering violations found. The `$B = defined('SITE_BASE') ? SITE_BASE : '';` re-assignment on line 18 of service pages (after `head.php` already set it) is redundant but harmless.

**Fix**:
Remove the redundant `$B` re-assignment from page files since `head.php` already sets it:
```php
// Remove this line from services/*.php and solutions/*.php (e.g., mobile-app-development.php:18):
$B = defined('SITE_BASE') ? SITE_BASE : '';
// $B is already set by head.php — this line is dead code
```

---

## Issue #9: PHP Short Tags — None Found

**Severity**: N/A  
**Finding**: A full scan of `includes/*.php` found zero instances of `<?` short-open tags. All PHP blocks use `<?php` or the echo shorthand `<?=` (which is always enabled regardless of `short_open_tag` and is valid PHP 5.4+). No action required.

---

## Recommended Refactors

### R1: Centralize All Structured Data in a Single Schema Registry

Instead of scattering JSON-LD across head.php and footer.php, create `includes/schema.php`:

```php
<?php
/**
 * Schema Registry — emits all JSON-LD for the current page.
 * Called once from head.php, after all $page_* vars are set.
 *
 * @param array $page_vars  The page's $page_* variable set.
 */
function aws_emit_schemas(array $page_vars): void
{
    $canonical  = $page_vars['page_canonical'] ?? (SITE_URL . '/');
    $title      = trim(strip_tags(explode('|', $page_vars['page_title'] ?? '')[0]));
    $desc       = $page_vars['page_description'] ?? '';
    $og_image   = $page_vars['page_og_image']    ?? (SITE_URL . '/assets/images/resources/artisticwebservice w.png');

    // 1. Organization (always emitted, sitewide)
    echo '<script type="application/ld+json">' . aws_org_schema() . '</script>' . "\n";

    // 2. WebPage (always emitted)
    echo '<script type="application/ld+json">' . json_encode(aws_webpage_schema($title, $desc, $canonical), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";

    // 3. BreadcrumbList — auto from URI (skip on homepage)
    $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $segments = array_values(array_filter(explode('/', trim($uri, '/'))));
    if (!empty($segments)) {
        echo '<script type="application/ld+json">' . json_encode(aws_breadcrumb_schema($segments, $title), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }

    // 4. Service — from $page_service_schema or auto-detected from URL
    $svc = $page_vars['page_service_schema'] ?? null;
    $is_service  = !empty($segments) && in_array($segments[0], ['services', 'solutions'], true);
    if ($svc || $is_service) {
        $svc_name = $svc['name'] ?? $title;
        $svc_desc = $svc['description'] ?? $desc;
        echo '<script type="application/ld+json">' . json_encode(aws_service_schema($svc_name, $svc_desc, $canonical), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }

    // 5. FAQ
    if (!empty($page_vars['page_faq'])) {
        echo '<script type="application/ld+json">' . json_encode(aws_faq_schema($page_vars['page_faq']), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }

    // 6. Article / Case Study
    if (!empty($page_vars['page_article_schema'])) {
        echo '<script type="application/ld+json">' . json_encode(aws_article_schema($page_vars, $title, $desc, $og_image), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
}

function aws_breadcrumb_schema(array $segments, string $final_label): array
{
    $folder_labels = ['services' => 'Services', 'solutions' => 'Solutions', 'insights' => 'Insights'];
    $crumbs  = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => SITE_URL . '/']];
    $pos     = 2;
    $path    = '';
    foreach ($segments as $i => $seg) {
        $path .= '/' . $seg;
        if (isset($folder_labels[$seg])) {
            $label = $folder_labels[$seg];
        } elseif ($i === count($segments) - 1) {
            $label = trim(explode('—', $final_label)[0]);
        } else {
            $label = ucwords(str_replace(['.php', '-'], ['', ' '], $seg));
        }
        $crumbs[] = ['@type' => 'ListItem', 'position' => $pos++, 'name' => trim($label), 'item' => SITE_URL . $path];
    }
    return ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $crumbs];
}

function aws_service_schema(string $name, string $desc, string $url): array
{
    return [
        '@context'    => 'https://schema.org',
        '@type'       => 'Service',
        'name'        => $name,
        'description' => $desc,
        'url'         => $url,
        'provider'    => [
            '@type' => 'Organization',
            'name'  => 'ArtisticWebServices',
            'url'   => 'https://artisticwebservices.com',
            'address' => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => '26 Broadway, Suite 934',
                'addressLocality' => 'New York',
                'addressRegion'   => 'NY',
                'postalCode'      => '10004',
                'addressCountry'  => 'US',
            ],
        ],
        'areaServed'  => ['@type' => 'Country', 'name' => 'United States'],
        'serviceType' => $name,
    ];
}

function aws_faq_schema(array $faqs): array
{
    $entities = [];
    foreach ($faqs as $faq) {
        $entities[] = [
            '@type' => 'Question',
            'name'  => $faq['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']],
        ];
    }
    return ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $entities];
}

function aws_webpage_schema(string $title, string $desc, string $url): array
{
    return [
        '@context'    => 'https://schema.org',
        '@type'       => 'WebPage',
        'name'        => $title,
        'description' => $desc,
        'url'         => $url,
        'inLanguage'  => 'en-US',
        'isPartOf'    => [
            '@type'          => 'WebSite',
            'name'           => 'ArtisticWebServices',
            'url'            => 'https://artisticwebservices.com',
            'potentialAction' => [
                '@type'       => 'SearchAction',
                'target'      => 'https://artisticwebservices.com/?s={search_term_string}',
                'query-input' => 'required name=search_term_string',
            ],
        ],
    ];
}

function aws_article_schema(array $vars, string $title, string $desc, string $image): array
{
    $type = $vars['page_article_schema']['type'] ?? 'Article';
    $date = $vars['page_article_schema']['date'] ?? '2024-01-01';
    return [
        '@context'     => 'https://schema.org',
        '@type'        => $type,
        'headline'     => $title,
        'description'  => $desc,
        'image'        => $image,
        'author'       => ['@type' => 'Organization', 'name' => 'ArtisticWebServices'],
        'publisher'    => [
            '@type' => 'Organization',
            'name'  => 'ArtisticWebServices',
            'logo'  => ['@type' => 'ImageObject', 'url' => 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png'],
        ],
        'url'          => $vars['page_canonical'] ?? '',
        'datePublished' => $date,
        'dateModified'  => date('Y-m-d'),
    ];
}
```

Then in `head.php`, replace all the scattered `<script type="application/ld+json">` blocks with:
```php
<?php
require_once __DIR__ . '/schema.php';
aws_emit_schemas(get_defined_vars());
?>
```

And remove all JSON-LD from `footer.php`.

### R2: Extract the Lead Modal to its Own Partial

The lead modal HTML (footer.php lines 799–874) and its CSS (lines 22–500) are reusable UI. Extract to `includes/partials/modal-lead.php` and call conditionally. Pages that have their own quote form (e.g., the App Cost Calculator) could suppress the modal with `$show_lead_modal = false`.

### R3: Move Page-Specific `<style>` Blocks Out of Body

Several pages emit `<style>` blocks in `<body>` (after `header.php`). This is technically invalid HTML5 (style elements belong in head) and can cause reflow. The proper fix is to set `$page_head_css = '<style>...</style>';` in each page, then echo it inside `head.php`:

```php
// In head.php, just before </head>:
<?php if (!empty($page_head_css)) echo $page_head_css; ?>
```

---

## Page Variable Contract (Proposed)

All page files must set the following variables before `require_once 'includes/head.php'`:

| Variable | Type | Required | Default if missing | Notes |
|---|---|---|---|---|
| `$page_title` | string | **Yes** | Generic AWS title | Max 60 chars for SEO |
| `$page_description` | string | **Yes** | Generic AWS description | 120–160 chars |
| `$page_canonical` | string | **Yes** | `SITE_URL . '/'` (WRONG for most pages) | Must be full absolute URL without trailing slash |
| `$page_keywords` | string | No | Not emitted | Comma-separated, 5–10 terms |
| `$page_og_image` | string | No | AWS default logo | Full absolute URL, 1200×630px recommended |
| `$page_breadcrumbs` | array | No | Auto-built from URI by schema.php | Each item: `['name' => string, 'url' => string]` |
| `$page_faq` | array | No | Not emitted | Each item: `['q' => string, 'a' => string]` |
| `$page_service_schema` | array | No | Auto-detected for /services/ & /solutions/ | `['name' => string, 'description' => string]` |
| `$page_article_schema` | array | No | Not emitted | `['type' => string, 'date' => 'YYYY-MM-DD']` |
| `$tawk_visitor_name` | string | No | `''` | Passed before footer.php |
| `$tawk_visitor_email` | string | No | `''` | Passed before footer.php |
| `$show_lead_modal` | bool | No | `true` | Set `false` to suppress modal |

**Standard page file template**:
```php
<?php
require_once __DIR__ . '/../includes/config.php';

$page_title       = 'Page Title — ArtisticWebServices';
$page_description = '120–160 character description of this page.';
$page_canonical   = SITE_URL . '/services/your-service-name';
$page_keywords    = 'keyword one, keyword two, keyword three';
$page_og_image    = SITE_URL . '/assets/images/resources/artisticwebservice w.png';
$page_service_schema = [
    'name'        => 'Your Service Name',
    'description' => 'Service description for schema.',
];
$page_faq = [
    ['q' => 'Question?', 'a' => 'Answer.'],
];

require_once __DIR__ . '/../includes/head.php';
?>
<body>
<div class="page-wrapper">
<?php require_once __DIR__ . '/../includes/header.php'; ?>

<main>
    <!-- Page content here -->
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div>
</body>
</html>
```

---

## Summary Table

| # | Issue | Severity | Effort | Priority | File(s) |
|---|---|---|---|---|---|
| 1 | Duplicate JSON-LD (BreadcrumbList + Service emitted twice) | **Critical** | 1h | P0 | head.php, footer.php |
| 2 | Duplicate CSS loading (3 stylesheets loaded twice per page) | **High** | 15m | P1 | head.php, header.php |
| 3 | `include` instead of `require_once` for form-quote.php (28 pages) | **High** | 30m | P1 | 28 page files |
| 4 | No page variable contract — silent failures on missing vars | **High** | 2h | P1 | config.php, head.php, all pages |
| 5 | footer.php is 1,364 lines — unmaintainable monolith | **Medium** | 3h | P2 | footer.php |
| 6 | Relative `require_once` paths in index.php (CWD-dependent) | **Medium** | 15m | P1 | index.php |
| 7 | No output buffering — header-already-sent risk | **Medium** | 15m | P2 | config.php |
| 8 | Template include order — compliant, minor redundant `$B` re-assignment | **Low** | 5m | P3 | services/*.php, solutions/*.php |
| 9 | PHP short tags — none found | N/A | — | — | N/A |
| R1 | Centralize all JSON-LD in schema.php registry | Refactor | 4h | P2 | New file |
| R2 | Extract lead modal to partial | Refactor | 1h | P3 | footer.php |
| R3 | Move page `<style>` blocks to `<head>` via `$page_head_css` | Refactor | 2h | P3 | All pages |

**Immediate action items (fix today)**:
1. **P0**: Fix duplicate JSON-LD — remove BreadcrumbList and Service blocks from head.php
2. **P1**: Fix duplicate CSS — remove 3 duplicate `<link>` tags from header.php
3. **P1**: Change all `include` → `require_once` for form-quote.php
4. **P1**: Fix relative paths in index.php to use `__DIR__`

---

*Report generated: April 2026 | Codebase snapshot: artasticwebservices-web*
