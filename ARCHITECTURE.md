# Artastic Web Services — Site Architecture

> Last audited: April 2026  
> Stack: PHP (no framework) · Bootstrap 5 · jQuery · Apache / XAMPP

---

## Table of Contents

1. [Project Overview](#1-project-overview)
2. [Directory Structure](#2-directory-structure)
3. [Shared Includes & Layout System](#3-shared-includes--layout-system)
4. [Routing & URL Rewriting](#4-routing--url-rewriting)
5. [Page Inventory](#5-page-inventory)
6. [Navigation Structure](#6-navigation-structure)
7. [Form Handling & Lead Pipeline](#7-form-handling--lead-pipeline)
8. [Mailer & SMTP](#8-mailer--smtp)
9. [Frontend Stack](#9-frontend-stack)
10. [SEO Architecture](#10-seo-architecture)
11. [Structured Data (JSON-LD)](#11-structured-data-json-ld)
12. [Security & HTTP Headers](#12-security--http-headers)
13. [Third-Party Integrations](#13-third-party-integrations)
14. [Assets & Performance](#14-assets--performance)
15. [Known Issues & Tech Debt](#15-known-issues--tech-debt)

---

## 1. Project Overview

**Artastic Web Services** is a PHP-based marketing website for a software development agency. It has no CMS, no Composer-managed dependencies, and no build pipeline — all PHP files are served directly by Apache with clean-URL rewrites handled by `.htaccess`.

| Property | Value |
|---|---|
| Primary domain | `https://artisticwebservices.com` |
| Server | Apache (Hostinger production), XAMPP local |
| Language | PHP (procedural, no framework) |
| Dependency management | None (Composer absent; vendors bundled in `assets/vendors/`) |
| CSS framework | Bootstrap 5 |
| JS libraries | jQuery 3.6.0 + many jQuery plugins (see §9) |
| Email | Native PHP SSL sockets → Hostinger SMTP (port 465) |
| Live chat | Tawk.to |

---

## 2. Directory Structure

```
artasticwebservices-web/
│
├── index.php                        # Home page
├── about-us.php                     # Company overview
├── our-story.php                    # Brand story
├── services.php                     # Services hub (grid)
├── contact.php                      # Contact page (UI)
├── contact-form.php                 # Form handler (POST/GET)
├── contact-us.php                   # 301 → /contact
├── blog.php                         # 301 → /insights/digital-insights
├── thank-you.php                    # Post-submission confirmation
├── submit-calculator.php            # App cost calculator handler
├── privacy-policy.php
├── terms-of-use.php
├── mailer-admin-aws7749.php         # SMTP test panel (password-protected)
├── robots.txt
├── sitemap.xml
│
├── mobile-app-development*.php      # Regional redirect stubs (9 files)
│   ├── mobile-app-development.php
│   ├── mobile-app-development-in-dubai.php
│   ├── mobile-app-development-in-bahrain.php
│   ├── mobile-app-development-in-houston.php
│   ├── mobile-app-development-in-karachi.php
│   ├── mobile-app-development-in-kuwait.php
│   ├── mobile-app-development-in-newyork.php
│   ├── mobile-app-development-in-qatar.php
│   ├── mobile-app-development-in-san-francisco.php
│   └── mobile-app-development-company-in-saudi-arabia.php
│
├── includes/                        # Shared layout & logic
│   ├── config.php                   # Constants, SITE_BASE computation
│   ├── head.php                     # <head>, all meta, JSON-LD
│   ├── header.php                   # Nav, preloader, mega-menus
│   ├── footer.php                   # Footer, scripts, lead modal, Tawk.to
│   ├── form-quote.php               # Reusable quote strip (GET form)
│   ├── mailer.php                   # sendMail() implementation (raw SMTP)
│   ├── smtp-config.php              # SMTP credentials & feature flags
│   └── social-share.php            # Empty placeholder (removed)
│
├── services/                        # 32 service detail pages
│   ├── mobile-app-development.php
│   ├── web-development.php
│   ├── ecommerce-app-development.php
│   ├── progressive-web-apps.php
│   ├── augmented-reality.php
│   ├── custom-crm-development-services.php
│   ├── mvp-startup-development.php
│   ├── digital-marketing.php
│   ├── iot-app-development.php
│   ├── blockchain-development.php
│   ├── sharepoint-development.php
│   ├── business-intelligence.php
│   ├── consulting-services.php
│   ├── artificial-intelligence.php
│   ├── legacy-application-modernization-services.php
│   ├── microservices-development.php
│   ├── enterprise-development.php
│   ├── app-support.php
│   ├── customer-experience-and-design.php
│   ├── cloud-managed-services.php
│   ├── security-operations-services.php
│   ├── aws-services.php
│   ├── saas.php
│   ├── healthcare-medical-app.php
│   ├── fitness-mobile-app-development.php
│   ├── on-demand-app-development.php
│   ├── real-estate-app-development.php
│   ├── social-networking-app.php
│   ├── app-cost-calculator.php      # Interactive pricing tool
│   └── ... (duplicates/variants)
│
├── solutions/                       # 25 solution/industry pages
│   ├── alliance-partners.php
│   ├── location.php
│   ├── process.php
│   ├── lms.php
│   ├── startup.php / startups.php
│   ├── enterprise.php
│   ├── healthcare.php
│   ├── educations.php
│   ├── fintech.php
│   ├── travel.php
│   ├── oil-and-gas.php
│   ├── real-estate.php
│   └── ...
│
├── insights/                        # 43 content pages
│   ├── case-studies.php             # Case studies hub
│   ├── digital-insights.php         # Blog hub
│   ├── [individual case studies].php
│   └── mobile-app-development-in-*.php  # Geo SEO articles
│
└── assets/
    ├── css/
    │   ├── style-01.css@v=1.1.css   # Main theme CSS
    │   ├── mibooz-responsive.css    # Responsive overrides
    │   └── custom-fixes.css         # 3,700+ lines of custom overrides
    ├── js/
    │   └── mibooz.js                # Custom site JS (interactions, modals, counters)
    ├── images/                      # All site imagery
    │   └── services/, solutions/, insights/, ...
    └── vendors/                     # Bundled third-party libraries (offline copies)
        ├── bootstrap/
        ├── jquery/
        ├── swiper/
        ├── owl-carousel/
        ├── wow/
        └── ...
```

---

## 3. Shared Includes & Layout System

Every page follows the same template pattern:

```php
<?php
// 1. Set per-page SEO variables
$page_title       = '...';
$page_description = '...';
$page_canonical   = SITE_BASE . '/services/example';
$page_og_image    = SITE_BASE . '/assets/images/og/example.jpg';
$page_breadcrumbs = [...];   // optional — triggers BreadcrumbList JSON-LD
$page_faq         = [...];   // optional — triggers FAQPage JSON-LD
$page_service_schema = [...]; // optional — triggers Service JSON-LD

require_once '../includes/config.php';
require_once '../includes/head.php';   // outputs <head>...</head>
require_once '../includes/header.php'; // outputs <header> + nav
?>

<!-- page-specific HTML content -->
<div class="page-wrapper">
    <!-- hero, sections, etc. -->
    <?php include '../includes/form-quote.php'; ?>
</div>

<?php require_once '../includes/footer.php'; // outputs <footer> + all scripts ?>
```

### `includes/config.php`

Defines all global constants. `SITE_BASE` is dynamically computed so the site works both on `localhost/artasticwebservices-web/` (XAMPP) and on `https://artisticwebservices.com/` without code changes.

| Constant | Value |
|---|---|
| `SITE_NAME` | `"Artastic Web Services"` |
| `SITE_URL` | Production domain |
| `SITE_BASE` | Computed from `HTTP_HOST` + `SCRIPT_NAME` (strips `/services/`, `/solutions/`, `/insights/`) |
| `SMTP_*` | See §8 |
| `MAIL_TO` | Recipient address for all lead emails |

### `includes/head.php`

- Emits the full `<head>` block.
- Reads all `$page_*` PHP variables set by the calling page.
- Loads all vendor CSS (`bootstrap`, `font-awesome`, theme files, `custom-fixes.css`).
- Outputs **four possible JSON-LD blocks**: Organization/LocalBusiness, WebPage/WebSite, BreadcrumbList (if `$page_breadcrumbs` set), FAQPage (if `$page_faq` set), Service (if `$page_service_schema` set).

### `includes/header.php`

- CSS-animated preloader (fades out on `window.load`).
- Sticky navbar with desktop **hover mega-menus** (`servicedrp()` / `solutiondrp()` JS functions).
- Mobile accordion-style dropdowns (`mobileDrpToggle`).
- "Call Now" button triggers `openLeadModal()`.

### `includes/footer.php`

- Footer columns: Services, Solutions, Company, Connect (social).
- Trust logo horizontal scroller.
- All vendor JS `<script>` tags + `mibooz.js`.
- **Lead modal** with `fetch()` POST to `/contact-form`; always redirects to `/thank-you` after 800 ms.
- **Auto-open modal** after 60 seconds, once per session (`sessionStorage` flag).
- Floating email + call buttons.
- **Tawk.to** live chat embed.
- Emits additional **BreadcrumbList + Service JSON-LD** for any URL under `/services/` or `/solutions/` — can duplicate markup already emitted by `head.php` if those variables are also set.

---

## 4. Routing & URL Rewriting

All routing is done in `.htaccess` — there is no PHP router.

```
Browser request: /services/mobile-app-development
  → Apache RewriteRule: serves services/mobile-app-development.php internally
  → PHP file outputs HTML

Browser request: /contact-form  (POST from form submit)
  → Apache: serves contact-form.php internally
  → PHP processes, then header("Location: /thank-you")
```

### Key rewrite rules (`.htaccess`)

| Rule | Effect |
|---|---|
| `http://` → `https://` | HTTPS enforcement (skips `localhost` / `127.0.0.1`) |
| `*.html` → extensionless | Legacy `.html` URL redirect |
| `index.php` → `/` | Canonical home |
| `*.php` → extensionless (301) | Clean URL redirect for external requests |
| Extensionless → `*.php` (internal) | Serve PHP file when it exists |
| `DirectoryIndex index.php index.html` | Default file |
| Error 404/403/500 → `/index.php` | Soft 404 (home page fallback) |

### Blocked paths (403 Forbidden)

- `/includes/` — protects config, mailer, SMTP credentials
- `/prompt/`, `/vendor/` — internal/Composer paths
- `*.py` files — Python utilities blocked
- `.env`, `composer.json`, `composer.lock`

---

## 5. Page Inventory

### Root pages

| URL | File | Description |
|---|---|---|
| `/` | `index.php` | Home — hero video, counters, services grid, FAQ schema |
| `/about-us` | `about-us.php` | Company overview |
| `/our-story` | `our-story.php` | Brand narrative |
| `/services` | `services.php` | Services hub grid |
| `/contact` | `contact.php` | Contact form (UI) |
| `/contact-form` | `contact-form.php` | Form POST/GET handler |
| `/thank-you` | `thank-you.php` | Post-submission confirmation |
| `/submit-calculator` | `submit-calculator.php` | Calculator form handler |
| `/privacy-policy` | `privacy-policy.php` | Legal |
| `/terms-of-use` | `terms-of-use.php` | Legal |
| `/contact-us` | `contact-us.php` | 301 → `/contact` |
| `/blog` | `blog.php` | 301 → `/insights/digital-insights` |

### Services (32 pages under `/services/`)

| URL slug | Topic |
|---|---|
| `mobile-app-development` | Mobile apps |
| `web-development` | Web dev |
| `ecommerce-app-development` | E-commerce |
| `progressive-web-apps` | PWA |
| `augmented-reality` | AR/VR |
| `custom-crm-development-services` | CRM |
| `mvp-startup-development` | MVP / startup |
| `digital-marketing` | Digital marketing |
| `iot-app-development` | IoT |
| `blockchain-development` | Blockchain |
| `sharepoint-development` | SharePoint |
| `business-intelligence` | BI & analytics |
| `consulting-services` | Tech consulting |
| `artificial-intelligence` | AI/ML |
| `legacy-application-modernization-services` | Legacy modernization |
| `microservices-development` | Microservices |
| `enterprise-development` | Enterprise software |
| `app-support` | App maintenance |
| `customer-experience-and-design` | UX/CX |
| `cloud-managed-services` | Cloud |
| `security-operations-services` | DevSecOps |
| `aws-services` | AWS |
| `saas` | SaaS |
| `healthcare-medical-app` | HealthTech |
| `fitness-mobile-app-development` | FitTech |
| `on-demand-app-development` | On-demand |
| `real-estate-app-development` | PropTech |
| `social-networking-app` | Social |
| `app-cost-calculator` | Pricing tool |

### Solutions (25 pages under `/solutions/`)

Consulting, Industries (healthcare, education, fintech, travel, oil & gas, real estate), process, alliance partners, LMS, startup, enterprise.

### Insights (43 pages under `/insights/`)

Case studies hub, blog hub (`digital-insights.php`), individual case studies, geo-targeted SEO articles (`mobile-app-development-in-*.php`).

---

## 6. Navigation Structure

### Primary (desktop hover, mobile accordion)

```
Startups          → /services/mvp-startup-development
Enterprise        → /services/enterprise-development

Services ▼        (mega-dropdown — columns)
  ├─ Mobile App Development
  ├─ Progressive Web Apps
  ├─ Web Development
  ├─ Ecommerce Development
  ├─ Augmented Reality
  ├─ Custom CRM
  ├─ MVP / Startup
  ├─ Digital Marketing
  ├─ DevOps & Security
  ├─ IoT
  ├─ Blockchain
  ├─ SharePoint
  ├─ Business Intelligence
  ├─ Consulting
  ├─ AI / ML
  ├─ Legacy Modernization
  ├─ Microservices
  ├─ ERP / Enterprise
  ├─ App Support
  ├─ CX & Design
  └─ Cloud Managed Services

Solutions ▼       (mega-dropdown — two groups)
  Consulting:
  ├─ Full-Cycle Development
  ├─ Product Management
  ├─ UI/UX Design
  ├─ Startup Consulting
  ├─ Enterprise Consulting
  └─ Hire Developers
  Industries:
  ├─ Healthcare
  ├─ Education
  ├─ Fintech
  ├─ Travel
  ├─ Oil & Gas
  ├─ Fitness / Sports / Social / Real Estate / E-commerce / On-demand

Case Studies      → /insights/case-studies
About Us          → /about-us
Contact Us        → /contact
[Call Now]        → openLeadModal() (JS)
```

### Footer quick links

Home · About · Case Studies · Alliances · Consulting · Industries · Services · Locations · Contact · Privacy Policy · Terms of Use

---

## 7. Form Handling & Lead Pipeline

There are four entry points that all ultimately call `sendMail()`:

```
┌─────────────────────────────────────────────────────────────┐
│                      Lead Entry Points                       │
├────────────────────┬────────────────────┬────────────────────┤
│   Contact Page     │   Quote Strip      │   Lead Modal       │
│   /contact         │   form-quote.php   │   (footer modal)   │
│   method="post"    │   method="get"     │   fetch() POST     │
│   action=contact-  │   action=contact-  │   → /contact-form  │
│   form             │   form             │                    │
└────────────────────┴────────────────────┴────────────────────┘
                              │
                              ▼
                    contact-form.php
                  (POST or GET handler)
                              │
                    ┌─────────┴─────────┐
                    │   Validation      │
                    │ • first_name req  │
                    │ • email required  │
                    │ • FILTER_VALIDATE │
                    └─────────┬─────────┘
                              │
                    sendMail($data)
                              │
                    ┌─────────┴─────────┐
                    │  Success          │  Failure
                    │  redirect         │  redirect
                    │  → /thank-you     │  → /contact?error=
                    └───────────────────┘

     App Calculator:
     /services/app-cost-calculator → submit-calculator.php → sendMail() → /thank-you
```

### Form fields

| Field | Source | Notes |
|---|---|---|
| `first_name` | All forms | Required |
| `last_name` | All forms | Optional |
| `email` | All forms | Required, validated |
| `phone` | All forms | Optional |
| `description` / `message` | All forms | Optional |
| `states[]` | Contact page | Multi-select services |
| `service` | Quote strip | Single hidden field |
| `host` | Hidden field | Page hostname |
| `page` | Hidden field | Source page path |
| `source` | Modal | `"modal-popup"` (note: not mapped to `$page` variable — minor tracking gap) |

---

## 8. Mailer & SMTP

### Configuration (`includes/smtp-config.php`)

| Setting | Value |
|---|---|
| `SMTP_HOST` | `smtp.hostinger.com` |
| `SMTP_PORT` | `465` |
| `SMTP_SECURE` | `'ssl'` |
| `SMTP_USERNAME` | Set via constant (not committed) |
| `SMTP_PASSWORD` | Set via constant (not committed) |
| `SMTP_FROM` | Sender address |
| `SMTP_FROM_NAME` | Sender display name |
| `MAIL_TO` | Lead recipient inbox |
| `SMTP_ADMIN_PASS` | Admin panel password |
| `SMTP_LOCAL_DEV` | `true` on localhost/127.0.0.1 — logs to `logs/mail-dev.log` instead of sending |

### Implementation (`includes/mailer.php`)

- **No PHPMailer/Composer** — raw socket implementation using `stream_socket_client()`.
- MIME multipart: `text/html` + `text/plain` parts.
- `AUTH LOGIN` with base64-encoded credentials.
- `ssl://smtp.hostinger.com:465` for SSL, `tcp://...:587` for STARTTLS.
- `verify_peer` is **disabled** on the SSL context (`'verify_peer' => false`) — acceptable on Hostinger shared hosting but worth reviewing for production hardening.

### Admin SMTP test panel

`/mailer-admin-aws7749.php` — password-protected (session + `SMTP_ADMIN_PASS` / daily rotating token). POST `test_to` field → calls `sendMail()` → shows debug output.

---

## 9. Frontend Stack

### CSS

| File | Role |
|---|---|
| `assets/vendors/bootstrap/bootstrap.min.css` | Grid, components |
| `assets/css/style-01.css@v=1.1.css` | Main theme |
| `assets/css/mibooz-responsive.css` | Responsive overrides |
| `assets/css/custom-fixes.css` | 3,700+ lines of project-specific overrides |
| Font Awesome 6.7.2 | Icon font (CDN) |
| Google Fonts | Rubik, Federo (CDN) |
| Local fonts | `mibooz-icons`, `the-sayinistic-font` |

### JavaScript (loaded in `footer.php`)

| Library | Purpose |
|---|---|
| jQuery 3.6.0 | Core (loaded in `<head>`) |
| Bootstrap Bundle | Dropdowns, modals |
| WOW.js | Scroll-triggered animations |
| Swiper | Touch sliders |
| Owl Carousel | Content carousels |
| Slick | Additional slider |
| bxSlider | Legacy slider |
| Isotope | Grid filtering |
| Magnific Popup | Lightbox |
| jQuery Validate | Client-side form validation |
| AjaxChimp | Newsletter (if used) |
| noUiSlider | Range inputs (calculator) |
| Select2 (jsDelivr CDN) | Enhanced `<select>` |
| tiny-slider | Lightweight slider |
| jarallax | Parallax backgrounds |
| jquery.countdown | Countdown timers |
| circle-progress | Circular progress bars |
| jquery-ui | UI widgets |
| bootstrap-select | Bootstrap-styled selects |
| `assets/js/mibooz.js` | All custom site logic |

### `mibooz.js` responsibilities

- Preloader dismiss on window load
- Sticky nav scroll behavior
- Mega-menu open/close (`servicedrp`, `solutiondrp`)
- Mobile nav accordion (`mobileDrpToggle`)
- Animated counters (stat sections)
- Lead modal: `openLeadModal()`, auto-open timer (60 s, once/session)
- Float buttons visibility
- Scroll-to-top button

---

## 10. SEO Architecture

### Per-page variables (set before `require head.php`)

```php
$page_title       = 'Page Title | Artastic Web Services';
$page_description = '150–160 char description';
$page_keywords    = 'comma, separated, keywords';  // optional
$page_canonical   = SITE_BASE . '/services/example';
$page_og_image    = SITE_BASE . '/assets/images/og/example.jpg';
$page_robots      = 'index, follow';   // default; override to noindex if needed
$page_breadcrumbs = [                  // optional — triggers BreadcrumbList
    ['name' => 'Home',    'url' => SITE_BASE],
    ['name' => 'Services', 'url' => SITE_BASE . '/services'],
    ['name' => 'Example', 'url' => SITE_BASE . '/services/example'],
];
$page_faq = [                          // optional — triggers FAQPage
    ['q' => '...', 'a' => '...'],
];
$page_service_schema = [...];          // optional — triggers Service JSON-LD
```

### Meta tags emitted by `head.php`

- `<title>`
- `meta name="description"` / `keywords`
- `meta name="robots"` with `max-snippet:-1, max-image-preview:large, max-video-preview:-1`
- `link rel="canonical"`
- Open Graph: `og:title`, `og:description`, `og:url`, `og:image`, `og:type`
- Twitter Card: `summary_large_image`
- **hreflang** alternates for `en-us`, `en-ae`, `en-sa`, `en-gb`, `en-au`, `en-ca`, `en-pk`, `x-default` — all currently point to the **same canonical URL** (regional pages do not have separate URLs per locale)

### Sitemap & Robots

- `sitemap.xml` — clean URLs, no trailing slash
- `robots.txt` — disallows `/includes/`, `/contact-form.php`, `/thank-you.php`, Python utilities, `*.py`

---

## 11. Structured Data (JSON-LD)

### Always output (`head.php`)

```json
// 1. Organization + LocalBusiness + ProfessionalService
{
  "@type": ["Organization", "LocalBusiness", "ProfessionalService"],
  "name": "Artastic Web Services",
  "aggregateRating": {...},
  "hasOfferCatalog": {...},
  "sameAs": ["facebook", "linkedin", "twitter", "instagram", "youtube", "github",
             "clutch", "goodfirms", "upwork", "glassdoor"]
}

// 2. WebPage + WebSite with SearchAction
{
  "@type": "WebSite",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://artisticwebservices.com/?s={search_term_string}"
  }
}
```

### Conditional (`head.php`)

| Variable set | Schema type emitted |
|---|---|
| `$page_breadcrumbs` | `BreadcrumbList` |
| `$page_faq` | `FAQPage` |
| `$page_service_schema` | `Service` |
| `$page_article_schema` | `Article` / `NewsArticle` |

### Footer also emits (`footer.php`)

For any URL containing `/services/` or `/solutions/`:
- Additional `BreadcrumbList`
- Additional `Service` block

> **Warning:** If a service page sets both `$page_breadcrumbs`/`$page_service_schema` **and** the footer auto-emits the same types, Google may see duplicate structured data for the same page.

---

## 12. Security & HTTP Headers

All set in `.htaccess`:

| Header | Value / Purpose |
|---|---|
| `X-Content-Type-Options` | `nosniff` |
| `X-Frame-Options` | `SAMEORIGIN` |
| `X-XSS-Protection` | `1; mode=block` |
| `Referrer-Policy` | `strict-origin-when-cross-origin` |
| `Permissions-Policy` | Restricts camera, mic, geolocation |
| `Strict-Transport-Security` | `max-age=31536000; includeSubDomains` (HSTS) |
| `Content-Security-Policy` | Allows self, inline scripts/styles, jsDelivr, cdnjs, Tawk.to, Google Fonts |

### Other hardening

- `Options -Indexes` — directory listing disabled
- `ServerSignature Off`
- `/includes/` directory forbidden (403) — protects SMTP credentials
- `.env`, `composer.json/lock` forbidden

---

## 13. Third-Party Integrations

| Service | Integration method | Files |
|---|---|---|
| **Tawk.to** (live chat) | JS embed in footer | `includes/footer.php` |
| **Hostinger SMTP** | Raw SSL socket | `includes/mailer.php`, `includes/smtp-config.php` |
| **Google Fonts** | `<link>` CDN | `includes/head.php` |
| **Font Awesome 6.7.2** | `<link>` CDN (cdnjs) | `includes/head.php` |
| **Select2** | `<script>` CDN (jsDelivr) | `includes/footer.php` |
| **Social profiles** | Links only (no tracking pixels found) | `includes/footer.php`, schema |
| **Google Maps** | Link only (embed commented out) | `includes/footer.php` |
| **Analytics** | None detected in PHP source | — |

---

## 14. Assets & Performance

### Compression (`.htaccess` mod_deflate)

Compressed: `text/html`, `text/css`, `application/javascript`, `application/json`, `image/svg+xml`, `application/xml`, web fonts.

### Caching (`.htaccess` mod_expires)

| Asset type | Cache duration |
|---|---|
| Images, fonts, favicons | 1 year |
| CSS, JS | 1 month |
| HTML | 1 day (or no-cache) |

### CSS load order (`head.php`)

1. Bootstrap
2. Font Awesome
3. Vendor CSS (WOW, Swiper, Slick, Owl, etc.)
4. `style-01.css` (theme)
5. `mibooz-responsive.css`
6. `custom-fixes.css`

### JS load order (`footer.php`)

1. jQuery (loaded in `<head>` for early availability)
2. Bootstrap bundle
3. All plugin JS
4. `mibooz.js` (custom, last)

---

## 15. Known Issues & Tech Debt

| # | Issue | Location | Severity |
|---|---|---|---|
| 1 | **Duplicate JSON-LD** — BreadcrumbList/Service emitted in both `head.php` and `footer.php` for service/solution pages | `head.php`, `footer.php` | Medium |
| 2 | **`verify_peer => false`** on SMTP SSL context | `includes/mailer.php` | Medium |
| 3 | **Modal `source` field not mapped** to email `$page` variable — lead source tracking gap for modal submissions | `contact-form.php` | Low |
| 4 | **Typo duplicate** service file: `fintness-mobile-app-development.php` | `services/` | Low |
| 5 | **`social-share.php` is empty** — included by pages but outputs nothing | `includes/social-share.php` | Low |
| 6 | **hreflang all point to same URL** — does not provide true per-locale alternate pages | `includes/head.php` | Low |
| 7 | **No CSRF protection** on contact forms | `contact-form.php`, `submit-calculator.php` | Medium |
| 8 | **Soft 404** — all 404/403/500 errors serve `index.php` with a 200 status | `.htaccess` | Medium |
| 9 | **No Composer / autoloader** — vendor JS/CSS bundled manually in `assets/vendors/` | `assets/vendors/` | Low |
| 10 | **`custom-fixes.css` is 3,700+ lines** — accumulation of ad-hoc overrides makes theming hard to maintain | `assets/css/custom-fixes.css` | Low |
| 11 | **`SMTP_LOCAL_DEV` flag** is code-level, not environment-variable-driven — risk of shipping `true` to production | `includes/smtp-config.php` | Medium |
