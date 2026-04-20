# Artastic Web Services — Site Architecture

> Last audited: April 2026
> Stack: PHP (no framework) · Bootstrap 5 · jQuery 3.6 · Apache / XAMPP

---

## Table of Contents

1. [Project Overview](#1-project-overview)
2. [Technology Stack](#2-technology-stack)
3. [Directory Structure](#3-directory-structure)
4. [Page System & Template Pattern](#4-page-system--template-pattern)
5. [Routing](#5-routing)
6. [Includes / Shared Modules](#6-includes--shared-modules)
7. [Form & Lead Pipeline](#7-form--lead-pipeline)
8. [Email System (SMTP)](#8-email-system-smtp)
9. [SEO & Structured Data](#9-seo--structured-data)
10. [Frontend Assets](#10-frontend-assets)
11. [Navigation System](#11-navigation-system)
12. [Third-Party Integrations](#12-third-party-integrations)
13. [Security & HTTP Headers](#13-security--http-headers)
14. [Performance Optimizations](#14-performance-optimizations)
15. [Known Issues & Tech Debt](#15-known-issues--tech-debt)
16. [File Count Summary](#16-file-count-summary)

---

## 1. Project Overview

Artastic Web Services is a **static marketing website** for a software development agency. It has no database, no CMS, and no backend framework. All page content is hardcoded in PHP files. The site is designed for:

- Lead generation (contact forms, quote modals, app cost calculator)
- SEO (structured data, geo-targeted landing pages, clean URLs)
- Service/solution showcase (~100+ pages)

**Deployment targets**: Local XAMPP (development) → Hostinger shared hosting (production).

---

## 2. Technology Stack

| Layer | Technology | Version / Notes |
|---|---|---|
| Language | PHP (procedural) | No framework (no Laravel, Symfony, etc.) |
| Web Server | Apache | mod_rewrite, mod_deflate, mod_expires |
| CSS Framework | Bootstrap | 5.x (bundled in `/assets/vendors/bootstrap/`) |
| JS Library | jQuery | 3.6.0 |
| Package Manager | Composer | Minimal — only lists PHPMailer but uses custom SMTP instead |
| Email | Custom native PHP SMTP | Raw SSL socket to Hostinger SMTP, no PHPMailer library used |
| Live Chat | Tawk.to | JS embed in footer |
| Fonts | Google Fonts (Rubik, Federo) + local custom fonts | Preconnect hints in head |
| Icons | Font Awesome 6.7.2 (CDN) + custom `mibooz-icons` font | |
| Build Pipeline | None | No Webpack, Vite, or asset compiler |

---

## 3. Directory Structure

```
artasticwebservices-web/
│
├── index.php                        # Home page
├── about-us.php                     # About page
├── our-story.php                    # Company story
├── services.php                     # Services hub
├── contact.php                      # Contact page
├── contact-form.php                 # Form handler (POST + GET)
├── submit-calculator.php            # Calculator form handler
├── thank-you.php                    # Post-submission confirmation
├── privacy-policy.php
├── terms-of-use.php
├── mailer-admin-aws7749.php         # SMTP test panel (admin only)
│
├── [geo-redirect pages]             # mobile-app-development-in-{city}.php (root-level, 9 files)
├── [service-redirect pages]         # artificial-intelligence.php, augmented-reality.php, etc.
├── [solution-redirect pages]        # alliance-partners.php, aws-services.php, etc. (25 files)
│
├── services/                        # 33 service detail pages
│   ├── mobile-app-development.php
│   ├── web-development.php
│   ├── ecommerce-app-development.php
│   ├── progressive-web-apps.php
│   ├── augmented-reality.php
│   ├── custom-crm-development-services.php
│   ├── ai.php, blockchain.php, iot.php, saas.php …
│   └── app-cost-calculator.php      # Interactive pricing calculator
│
├── solutions/                       # 25 solution/industry pages
│   ├── alliance-partners.php
│   ├── consulting.php
│   ├── full-cycle-development.php
│   ├── lms.php, startup.php, enterprise.php
│   ├── healthcare.php, education.php, fintech.php, travel.php
│   ├── oil-and-gas.php, real-estate.php, construction.php
│   ├── location.php, process.php, industries.php …
│
├── insights/                        # 43 content pages
│   ├── case-studies.php             # Hub (redirects to /services/case-studies)
│   ├── digital-insights.php         # Blog hub
│   ├── bizi-app.php, fintrack.php, healthify-app.php …  # Individual case studies
│   └── mobile-app-development-in-{city}.php             # Geo-SEO articles (9 files)
│
├── includes/                        # Shared layout & logic
│   ├── config.php                   # Global constants, dynamic SITE_BASE
│   ├── head.php                     # HTML <head>, all meta tags, JSON-LD
│   ├── header.php                   # Navigation bar, preloader (511 lines)
│   ├── footer.php                   # Footer, lead modal, scripts (1,364 lines)
│   ├── form-quote.php               # Reusable quote form strip
│   ├── mailer.php                   # Native PHP SMTP implementation
│   ├── smtp-config.php              # SMTP credentials and flags
│   └── social-share.php            # Empty placeholder (outputs nothing)
│
├── assets/
│   ├── css/
│   │   ├── style-01.css@v=1.1.css           # Main theme (207 KB)
│   │   ├── mibooz-responsive.css@v=1.1.css  # Responsive overrides (85 KB)
│   │   └── custom-fixes.css                 # Ad-hoc overrides layer (126 KB, 3,700+ lines)
│   ├── js/
│   │   └── mibooz.js                        # Custom site interactions (minified, 13.6 KB)
│   ├── images/                              # 500+ images (WebP primary, PNG/JPG fallback)
│   │   ├── services/, solutions/, insights/ # Section-organized assets
│   │   ├── resources/, favicons/, og/
│   ├── images-new/                          # Newer image assets
│   └── vendors/                            # 28 bundled JS/CSS libraries (no CDN for most)
│
├── bootstrap/4.0.0/                 # Legacy Bootstrap copy (unused — Bootstrap 5 in vendors/)
├── logs/                            # Mail debug logs (local dev mode)
├── .htaccess                        # Apache rewrite rules + security headers (105 lines)
├── .gitignore
├── composer.json                    # PHPMailer listed; not actually loaded
├── robots.txt
└── sitemap.xml                      # URL index (13.5 KB)
```

---

## 4. Page System & Template Pattern

Every page follows the same procedural pattern:

```php
<?php
// 1. Set page-specific variables
$page_title       = "Service Name | Artastic";
$page_description = "Meta description for this page.";
$page_breadcrumbs = [["Home","https://…"], ["Services","…"], ["This Page","…"]];
$page_faq         = [["Question?", "Answer."], …];     // optional
$page_service_schema = […];                            // optional

// 2. Load shared config
require_once 'includes/config.php';

// 3. Output <head> + navbar
require_once 'includes/head.php';
require_once 'includes/header.php';
?>

<!-- 4. Page-specific HTML content -->
<section>…</section>

<?php
// 5. Output footer + all scripts
require_once 'includes/footer.php';
?>
```

There is no template engine (no Twig, Blade, or Smarty). PHP itself is the template layer.

---

## 5. Routing

Routing is handled **entirely by Apache `.htaccess`** — there is no PHP router.

### Rewrite Rules (`.htaccess`)

| Rule | Trigger | Result |
|---|---|---|
| HTTPS redirect | HTTP request (non-localhost) | 301 → HTTPS |
| `.html` strip | `/page.html` | 301 → `/page` |
| `index.php` strip | `/index.php` | 301 → `/` |
| `.php` strip (external) | `/page.php` in URL | 301 → `/page` |
| Extensionless serve (internal) | `/page` (no file exists) | Internally serves `/page.php` |
| Soft 404 | No matching `.php` file | Serves `/index.php` with HTTP 200 |

### Protected Paths (403 Forbidden)

- `/includes/` — hides SMTP credentials
- `/vendor/`, `/prompt/`
- `*.py` files, `.env`, `composer.json`, `composer.lock`

### Example URL Flow

```
Browser: GET /services/mobile-app-development
  → Apache: no file at that exact path
  → .htaccess rule 5: internally serve services/mobile-app-development.php
  → PHP outputs HTML → 200 OK

Browser: GET /nonexistent-page
  → No matching .php file
  → ErrorDocument 404 → /index.php → 200 OK (soft 404, SEO risk)
```

---

## 6. Includes / Shared Modules

### `includes/config.php`
- Computes `SITE_BASE` dynamically based on `$_SERVER['HTTP_HOST']`
- Works on `localhost/artasticwebservices-web/` (subfolder) and `artasticwebservices.com` (root) without code changes
- Defines global site-wide constants

### `includes/head.php` (~200 lines)
- Outputs full `<html><head>` block
- Embeds: charset, viewport, favicon, Open Graph, Twitter Card
- Loads all CSS (Bootstrap → vendor plugins → theme → responsive → custom-fixes)
- Emits JSON-LD structured data (see Section 9)
- Preconnects to Google Fonts, CDNs

### `includes/header.php` (511 lines)
- Preloader overlay
- Desktop mega-menu navbar (Services + Solutions dropdowns)
- Mobile accordion navigation
- "Call Now" CTA button
- Requires jQuery (already loaded in `<head>`)

### `includes/footer.php` (1,364 lines)
- Footer columns (links, contact info, social links)
- Lead capture modal (fetch POST to `/contact-form`)
- Session-storage flag to suppress modal re-open in same session
- Tawk.to live chat embed
- All vendor JS files in correct load order
- `mibooz.js` (last)
- Emits additional JSON-LD for `/services/` and `/solutions/` URLs (see Section 9)

### `includes/form-quote.php`
- Reusable quote-request strip embedded on most service/solution pages
- Submits via GET to `/contact-form`

### `includes/mailer.php` (~300 lines)
- Custom raw PHP SMTP implementation (no PHPMailer)
- See Section 8

### `includes/smtp-config.php`
- Hostinger SMTP credentials
- `SMTP_LOCAL_DEV` flag (controls log-to-file vs. send mode)

---

## 7. Form & Lead Pipeline

Three entry points all converge on `contact-form.php`:

```
1. /contact page form          → POST  → /contact-form
2. Quote strip (form-quote.php) → GET  → /contact-form
3. Lead modal (footer)         → fetch POST → /contact-form
4. App calculator              → GET  → /submit-calculator → /contact-form
                                                 ↓
                                        contact-form.php
                                        (sanitize, validate)
                                                 ↓
                                        sendMail() via SMTP
                                                 ↓
                                        Redirect → /thank-you
```

### Standard Form Fields

| Field | Required | Notes |
|---|---|---|
| `first_name` | Yes | |
| `email` | Yes | Validated with `filter_var(FILTER_VALIDATE_EMAIL)` |
| `last_name` | No | |
| `phone` | No | |
| `description` | No | Free text |
| `states[]` | No | Multi-select: services of interest |
| `host` | Hidden | Submitting page hostname (tracking) |
| `page` | Hidden | Source URL (tracking) |
| `service` | Hidden | Single service name (tracking) |

---

## 8. Email System (SMTP)

**File**: `includes/mailer.php`
**Dependency**: None (no PHPMailer, no Composer autoloader)

### Connection Flow

```
stream_socket_client("ssl://smtp.hostinger.com:465")
  → EHLO handshake
  → AUTH LOGIN (base64-encoded credentials)
  → MAIL FROM
  → RCPT TO (admin email)
  → DATA: MIME multipart (text/plain + text/html)
  → Dot-stuffing for SMTP protocol compliance
  → QUIT
```

### Local Dev Mode

If `SMTP_LOCAL_DEV = true` in `smtp-config.php`:
- Email is NOT sent
- Full MIME message is written to `logs/mail-dev.log`

> **Warning**: This flag is set in PHP source code. Risk of shipping `true` to production. Should be moved to an environment variable (`.env`).

---

## 9. SEO & Structured Data

### Always-emitted JSON-LD (head.php)

- `Organization` + `LocalBusiness` + `ProfessionalService`
- `WebSite` with `SearchAction` (sitelinks searchbox)
- `hreflang` alternates for 8 regions (all currently point to same URL — no true i18n)

### Optional Per-Page JSON-LD

Set PHP variables before `require 'includes/head.php'`:

| Variable | Schema Type | Usage |
|---|---|---|
| `$page_breadcrumbs` | `BreadcrumbList` | Breadcrumb trail |
| `$page_faq` | `FAQPage` | FAQ accordion answers |
| `$page_service_schema` | `Service` | Service detail pages |
| `$page_article_schema` | `NewsArticle` | Blog/insight pages |

### Footer Auto-Emit (footer.php)

For URLs matching `/services/` or `/solutions/`, the footer **automatically emits** `BreadcrumbList` and `Service` JSON-LD.

> **Issue**: If a page already sets `$page_breadcrumbs` or `$page_service_schema`, this creates **duplicate structured data** — Google may flag it.

---

## 10. Frontend Assets

### CSS Load Order

```
1. Bootstrap 5              (assets/vendors/bootstrap/…)
2. Font Awesome 6.7.2       (CDN — cdnjs.cloudflare.com)
3. Vendor plugins CSS       (wow, swiper, owl, slick, bxSlider, magnific-popup, etc.)
4. style-01.css@v=1.1.css   (main theme — 207 KB)
5. mibooz-responsive.css    (responsive overrides — 85 KB)
6. custom-fixes.css         (ad-hoc override layer — 126 KB, 3,700+ lines)
```

### JS Load Order

```
1. jQuery 3.6.0             (loaded in <head> for early availability)
2. Bootstrap Bundle          (includes Popper.js)
3. Vendor plugins (~20)      (swiper, owl-carousel, WOW, isotope, nouislider, etc.)
4. mibooz.js                (custom site logic — loaded last)
```

### Vendor Libraries (assets/vendors/)

| Library | Purpose |
|---|---|
| bootstrap | Grid + components |
| jquery | DOM / AJAX |
| swiper | Touch carousel |
| owl-carousel | Feature carousel |
| slick, bxSlider, tiny-slider | Legacy carousels (partially redundant) |
| wow + animate | Scroll-triggered animations |
| jarallax | Parallax backgrounds |
| jquery-ui | UI widgets |
| nouislider + wnumb | Range slider (app calculator) |
| isotope | Filterable grid |
| jquery-magnific-popup | Lightbox |
| jquery-validate | Client-side form validation |
| odometer | Number counter animation |
| bootstrap-select | Enhanced `<select>` dropdowns |
| circle-progress | SVG progress circles |
| jquery-ajaxchimp | Newsletter subscribe |
| countdown | Timer widget |
| mibooz-icons | Custom icon font |
| the-sayinistic-font | Custom display font |

### Images

- **Primary format**: WebP (lossless, best compression)
- **Fallback**: PNG / JPG where WebP unavailable
- **Organization**: `/assets/images/{services,solutions,insights,resources,favicons,og}/`
- **Lazy loading**: `loading="lazy"` attribute on non-hero images

---

## 11. Navigation System

### Desktop
- Sticky top navbar
- **Services mega-menu**: 20+ services arranged in columns; triggered on hover via CSS + `servicedrp()` JS function
- **Solutions mega-menu**: Consulting group + Industries group; `solutiondrp()` JS function
- Primary links: Startups, Enterprise, Case Studies, About, Contact
- CTA: "Get a Quote" button → opens lead modal; "Call Now" button

### Mobile
- Hamburger toggle button
- Accordion-style expandable menus for Services and Solutions
- All links accessible without JavaScript for accessibility fallback

---

## 12. Third-Party Integrations

| Service | Integration Method | File(s) | Purpose |
|---|---|---|---|
| Tawk.to | JS embed snippet | `includes/footer.php` | Live chat widget |
| Hostinger SMTP | Raw TCP/SSL socket | `includes/mailer.php` | Email delivery |
| Google Fonts | `<link>` CDN with preconnect | `includes/head.php` | Rubik + Federo fonts |
| Font Awesome 6.7.2 | CDN `<link>` (cdnjs) | `includes/head.php` | Icon set |
| jsDelivr | CDN for Select2 | `includes/footer.php` | Enhanced dropdowns |
| No analytics | — | — | No GA4, GTM, Mixpanel, or Pixel detected |

---

## 13. Security & HTTP Headers

All security headers are set in `.htaccess`:

| Header | Value | Purpose |
|---|---|---|
| `X-Content-Type-Options` | `nosniff` | Prevent MIME-sniffing |
| `X-Frame-Options` | `SAMEORIGIN` | Clickjacking protection |
| `X-XSS-Protection` | `1; mode=block` | Legacy XSS filter |
| `Referrer-Policy` | `strict-origin-when-cross-origin` | Privacy control |
| `Permissions-Policy` | `camera=(), microphone=(), geolocation=(self)` | Feature access control |
| `Strict-Transport-Security` | `max-age=31536000; includeSubDomains; preload` | Force HTTPS (HSTS) |
| `Content-Security-Policy` | `default-src 'self'`; inline scripts allowed; jsDelivr/cdnjs/Tawk.to whitelisted | XSS + data exfiltration prevention |

### Directory Protections (403)

- `/includes/` — SMTP credentials hidden from web access
- `/vendor/`, `/prompt/`
- `*.py`, `.env`, `composer.json`, `composer.lock`

### Known Security Gaps

- **No CSRF tokens** on any form — open to cross-site form submission attacks
- **`verify_peer=false`** in SMTP SSL context — disables cert verification (acceptable on Hostinger shared hosting but worth reviewing)

---

## 14. Performance Optimizations

Configured in `.htaccess`:

### Compression (mod_deflate)
- Gzip enabled for: HTML, CSS, JS, JSON, SVG, XML, web fonts

### Browser Caching (mod_expires)
| Asset Type | Cache Duration |
|---|---|
| Images (WebP, PNG, JPG, SVG) | 1 year |
| Fonts (WOFF, WOFF2, TTF) | 1 year |
| CSS / JS | 1 month |
| HTML | 1 day (or `no-cache`) |

### Other
- `<link rel="preconnect">` for Google Fonts and CDNs in `head.php`
- WebP as primary image format
- Deferred JS loading (vendor scripts at end of `<body>`)
- Minified `mibooz.js` (single-line output)

---

## 15. Known Issues & Tech Debt

| Severity | Issue | Location | Notes |
|---|---|---|---|
| Medium | **Duplicate JSON-LD** | `head.php` + `footer.php` | BreadcrumbList/Service emitted twice for service/solution pages |
| Medium | **No CSRF protection** | All forms | Add CSRF token validation to `contact-form.php` |
| Medium | **`SMTP_LOCAL_DEV` in source code** | `smtp-config.php` | Risk of shipping `true` to prod; move to `.env` |
| Medium | **`verify_peer=false` on SMTP** | `mailer.php` | Disables SSL cert verification |
| Low | **`custom-fixes.css` bloat** | `assets/css/custom-fixes.css` | 3,700+ lines of ad-hoc overrides; hard to maintain |
| Low | **Redundant slider libraries** | `assets/vendors/` | Owl, Swiper, Slick, bxSlider — likely only 1–2 actually used |
| Low | **`social-share.php` empty** | `includes/social-share.php` | Included but outputs nothing; remove include or implement |
| Low | **hreflang all same URL** | `head.php` | Regional hreflang tags don't support true locale pages |
| Low | **Soft 404 returns HTTP 200** | `.htaccess` | All 404s serve home page — Google may not detect broken links |
| Low | **Typo in filename** | Root | `fintness-mobile-app-development.php` should be `fitness-…` |
| Low | **Legacy Bootstrap 4 copy** | `bootstrap/4.0.0/` | Unused; Bootstrap 5 is in `assets/vendors/` |
| Low | **No analytics** | Entire site | No GA4 or GTM — no traffic/conversion data |

---

## 16. File Count Summary

| Location | Files | Type |
|---|---|---|
| Root `.php` | ~113 | Pages (service redirects, geo pages, handlers) |
| `services/` | 33 | Service detail pages |
| `solutions/` | 25 | Industry / solution pages |
| `insights/` | 43 | Case studies + blog + geo articles |
| `includes/` | 8 | Shared layout modules |
| `assets/css/` | 3 | Stylesheets (theme + responsive + fixes) |
| `assets/js/` | 1 | Custom JS (minified) |
| `assets/vendors/` | 28 | Bundled JS/CSS libraries |
| `assets/images/` | 500+ | Image assets (WebP primary) |

**Approximate total site size**: ~500 MB (dominated by images and bundled vendor libraries)

---

*Architecture document auto-generated from full codebase audit — April 2026.*
