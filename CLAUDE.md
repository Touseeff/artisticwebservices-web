# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Static marketing website for ArtisticWebServices (software development agency). No database, no CMS, no backend framework — all content is hardcoded PHP. ~200 PHP pages across root, `services/`, `solutions/`, and `insights/` directories.

**Live site**: https://artisticwebservices.com  
**Stack**: Procedural PHP · Bootstrap 5 · jQuery 3.6 · Apache mod_rewrite

## Local Development

Requires XAMPP (or any Apache+PHP stack). Clone into the htdocs directory and access via `http://localhost/artisticwebservices-web/`.

The site auto-detects localhost vs production via `includes/config.php` — `SITE_BASE` adjusts dynamically so links work in both environments.

**Email testing**: On localhost, SMTP writes to `logs/mail-dev.log` instead of sending. Controlled by `SMTP_LOCAL_DEV` in `.env` (override if the flag gets hardcoded in `smtp-config.php`).

**Environment**: Copy `.env.example` to `.env` and fill in SMTP credentials. The `.env` file is loaded by `includes/smtp-config.php` using `parse_ini_file` — no Composer autoloader or dotenv library.

## Deployment

Push to `main` triggers GitHub Actions (`.github/workflows/deploy.yml`):
1. Creates `.env` from GitHub Secrets
2. FTP-deploys to Hostinger shared hosting at `/public_html/`

Excluded from deploy: `.git*`, `reports/`, `logs/`, `*.py`, `prompt.md`

## Architecture

### Page Template Pattern

Every page follows the same structure — set page variables, then include shared modules:

```php
$page_title       = "Page Title | ArtisticWebServices";
$page_description = "Meta description.";
// optional: $page_breadcrumbs, $page_faq, $page_service_schema, $page_article_schema, $page_canonical, $page_og_image, $page_hero_poster

require_once 'includes/config.php';
require_once 'includes/head.php';     // <html><head>…, CSS, JSON-LD
require_once 'includes/header.php';   // navbar, preloader
?>
<!-- page HTML -->
<?php
require_once 'includes/footer.php';   // footer, lead modal, all JS
```

`includes/page-contract.php` can optionally be inserted between config and head to validate/normalize page variables. It enforces `$page_title` as required and provides defaults for all optional variables.

### Includes Directory

| File | Role |
|---|---|
| `config.php` | Session init, site constants, dynamic `SITE_BASE` |
| `head.php` | Full `<head>` block: meta, OG, CSS load order, JSON-LD structured data |
| `header.php` | Navbar with mega-menu dropdowns (Services/Solutions), mobile accordion nav |
| `footer.php` | Orchestrates footer partials below |
| `partials/footer-html.php` | Footer columns, links, contact info |
| `partials/footer-modal.php` | Lead capture modal (fetch POST to `/contact-form`) |
| `partials/footer-scripts.php` | Vendor JS load order + mibooz.js |
| `partials/footer-tawkto.php` | Tawk.to live chat embed |
| `csrf.php` | CSRF token generation (`csrf_field()`, `csrf_meta()`) and `csrf_verify()` |
| `rate-limit.php` | File-based sliding-window limiter (5 req/60s per IP, stored in `logs/rate-limit/`) |
| `mailer.php` | Native PHP SMTP over SSL socket to Hostinger — no PHPMailer |
| `smtp-config.php` | Loads `.env`, defines SMTP constants |
| `form-quote.php` | Reusable quote-request form strip |
| `page-contract.php` | Optional page variable validation |
| `city-page-template.php` | Shared template for geo-targeted city landing pages |

### Form & Lead Pipeline

All forms converge on `contact-form.php`: contact page (POST), quote strip (GET), lead modal (fetch POST), app calculator → `submit-calculator.php` → `contact-form.php`. The handler runs CSRF verification, rate limiting, input sanitization, then sends via `sendMail()` and redirects to `/thank-you`. Modal submissions send header `X-AWS-Form: json` to get JSON responses instead of redirects.

**Form fields**: `first_name` (required), `email` (required), `last_name`, `phone`, `description`, `states[]` (multi-select services), `host` / `page` / `service` (hidden tracking fields), `csrf_token`.

### Routing

All routing is Apache `.htaccess` — no PHP router:
- Clean URLs: `/page` internally serves `/page.php`
- `.php` and `.html` extensions 301-redirect to clean equivalents
- `/includes/`, `/vendor/`, `/logs/`, `.env`, `composer.*` return 403
- Custom 404 page at `404.php` (served with HTTP 200 — soft 404; Google may not detect broken links)

### CSS Layers (load order matters)

1. Bootstrap 5 (bundled in `assets/vendors/`)
2. Vendor plugin CSS (swiper, owl-carousel, wow/animate, etc.)
3. `style-01.css@v=1.1.css` — main theme (207 KB)
4. `mibooz-responsive.css@v=1.1.css` — responsive overrides (85 KB)
5. `custom-fixes.css` — ad-hoc override layer (126 KB, 3700+ lines)

CSS specificity increases down this chain. New style overrides go in `custom-fixes.css`.

### Structured Data (JSON-LD)

`head.php` always emits Organization + WebSite schemas. Per-page schemas are controlled by page variables (`$page_breadcrumbs` → BreadcrumbList, `$page_faq` → FAQPage, `$page_service_schema` → Service, `$page_article_schema` → NewsArticle).

**Gotcha**: `footer.php` auto-emits BreadcrumbList/Service for any URL under `/services/` or `/solutions/`. If the page already sets `$page_breadcrumbs` or `$page_service_schema`, duplicate structured data results — Google may flag it.

## Key Conventions

- **No build pipeline**: No Webpack, Vite, or asset compiler. Edit CSS/JS files directly.
- **Vendor libraries are bundled** in `assets/vendors/` — not managed by npm or Composer.
- **PHP is the template engine**: No Twig, Blade, or Smarty.
- **All credentials in `.env`**: SMTP config reads from `.env` via `parse_ini_file`. Never hardcode secrets.
- **CSRF tokens required on all forms**: Use `csrf_field()` in `<form>` elements, `csrf_meta()` in `<head>` for fetch-based forms.
- **Image format**: WebP is the primary image format. Place images in `assets/images/` organized by section (`services/`, `solutions/`, `insights/`, etc.).
- **Geo city pages**: City-specific landing pages in `insights/` set a `$city` array and delegate to `includes/city-page-template.php`.
- **LCP preload**: Set `$page_hero_poster` to the hero image path to emit a `<link rel="preload">` for that image in `head.php`.

## Known Gotchas

- **`smtp-debug.php` must never exist in production**: If this file reappears (e.g. restored from git), delete it immediately before deploying. It contains a hardcoded token that exposes SMTP credentials and `.env` contents.
- **SMTP SSL requires a CA bundle**: `mailer.php` enforces peer verification and will refuse to send if no CA bundle is found on the server. Set `curl.cainfo` in `php.ini` to the CA bundle path. On XAMPP the bundle is at `C:/xampp/apache/bin/curl-ca-bundle.crt`. On Hostinger, check `php.ini` or `/etc/ssl/certs/ca-certificates.crt`.
- **`SMTP_LOCAL_DEV` may be hardcoded**: Check `includes/smtp-config.php` — if it is hardcoded `true`, emails won't send on production until it's moved to `.env`.
- **`social-share.php` is empty**: The file is included in some pages but outputs nothing (removed by design). Don't add content without auditing all include sites.
- **BreadcrumbList + Service on the same page is intentional**: All service and solution pages set both `$page_breadcrumbs` and `$page_service_schema`. These are different schema types and are complementary — Google does not flag them. The footer no longer auto-emits schemas.
