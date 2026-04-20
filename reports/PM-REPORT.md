# Project Manager Report — Artastic Web Services
**PM**: Project Manager
**Date**: April 2026
**Input Reports**: 8 agent reports (QA x3, SR Dev x5) + SR-DEV-4-JAVASCRIPT.md (PENDING — not yet available)
**Total Unique Issues Found**: 63
**Duplicates Merged**: 19

---

## Executive Summary

The ArtisticWebServices website is functional and has a solid structural foundation (HTTPS enforcement, clean URL routing, security headers, schema markup, and consistent template patterns), but carries an unacceptably high number of critical and high-severity issues that make it unsafe and legally non-compliant in its current state. The three most urgent risks are: (1) zero CSRF protection on all public forms, exposing the company to spam-flooding and forged lead submissions; (2) SSL certificate verification disabled on the SMTP connection, meaning email credentials are transmitted without encryption validation; and (3) PII (names, emails, phone numbers) transmitted via GET parameters, which constitutes a GDPR/CCPA data exposure violation. Beyond security, the site carries ~825 KB of render-blocking CSS and 22 globally loaded JavaScript libraries regardless of page need, with an estimated 0.8–1.4 second LCP penalty, and a WCAG 2.1 AA compliance score of approximately 52% — meaning nearly half of accessibility requirements currently fail. The immediate recommendation is to execute Sprint 1 before any further production traffic is driven to the site, and to hold off on any paid marketing campaigns until Sprint 2 accessibility and performance fixes are in place.

---

## Issue Master List

| # | Issue | Domain | Severity | Owner | Effort | Sprint | Source Reports |
|---|---|---|---|---|---|---|---|
| 1 | No CSRF protection on any form (quote, contact, calculator, modal) | Security | Critical | Backend Dev | M | 1 | QA-DEV-1, SR-DEV-2 |
| 2 | SSL certificate verification disabled in SMTP (verify_peer=false) | Security | Critical | Backend Dev | S | 1 | QA-DEV-1, QA-DEV-3, SR-DEV-2, SR-DEV-6 |
| 3 | PII transmitted via GET parameters (forms use method="get") | Security | Critical | Backend Dev | S | 1 | QA-DEV-1, SR-DEV-2, SR-DEV-5 |
| 4 | Silent SMTP failure — user redirected to thank-you page even when email never sent | DevOps | Critical | Backend Dev | S | 1 | SR-DEV-6 |
| 5 | Duplicate JSON-LD structured data (BreadcrumbList + Service emitted twice per page) | Architecture | Critical | Backend Dev | S | 1 | SR-DEV-1 |
| 6 | Missing `<meta charset="UTF-8">` on every page | Frontend | Critical | Frontend Dev | XS | 1 | QA-DEV-2 |
| 7 | logs/ directory has no web-access block in .htaccess | Security | Critical | Backend Dev | XS | 1 | QA-DEV-1, QA-DEV-3, SR-DEV-6 |
| 8 | Admin panel has no rate limiting or lockout (sleep(2) bypass) | Security | High | Backend Dev | M | 1 | QA-DEV-1, SR-DEV-2 |
| 9 | Admin panel session token is date-derived and predictable (no session_regenerate_id) | Security | High | Backend Dev | S | 1 | QA-DEV-1 |
| 10 | Admin panel publicly accessible at guessable URL with no IP restriction | Security | High | Backend Dev | S | 1 | QA-DEV-1, SR-DEV-2, QA-DEV-3 |
| 11 | Email header injection via reply_to and subject fields (CRLF not stripped) | Security | High | Backend Dev | S | 1 | QA-DEV-1 |
| 12 | Open redirect via HTTP_HOST in SITE_BASE / thank-you.php | Security | High | Backend Dev | S | 1 | QA-DEV-1 |
| 13 | Mega-menu is not keyboard navigable (hover-only, aria-expanded never toggled) | Accessibility | Critical | Frontend Dev | M | 1 | SR-DEV-5 |
| 14 | Lead modal has no focus trap, no aria-modal, no return focus on close | Accessibility | Critical | Frontend Dev | M | 1 | SR-DEV-5, QA-DEV-2 |
| 15 | All form inputs (quote form + modal) have no label elements (WCAG 3.3.2) | Accessibility | Critical | Frontend Dev | M | 1 | SR-DEV-5, QA-DEV-2 |
| 16 | No SMTP retry logic — single transient failure permanently loses the lead | DevOps | High | Backend Dev | M | 1 | SR-DEV-6 |
| 17 | PHPMailer declared in composer.json but not installed or used — phantom dependency | Architecture | High | Backend Dev | XS | 1 | QA-DEV-3, SR-DEV-6 |
| 18 | Broken redirect chain — fintness-mobile-app-development.php double-301 with typo slug | Architecture | Critical | Backend Dev | XS | 1 | QA-DEV-3 |
| 19 | No production error logging — failed payloads disappear silently | DevOps | High | Backend Dev | S | 1 | SR-DEV-6 |
| 20 | submit-calculator.php and mailer-admin-aws7749.php not blocked in robots.txt | DevOps | High | DevOps | XS | 1 | QA-DEV-3, SR-DEV-6 |
| 21 | No rate limiting on form submission endpoints | Security | Medium | Backend Dev | M | 2 | QA-DEV-1, SR-DEV-2 |
| 22 | SMTP_LOCAL_DEV detected via spoofable HTTP_HOST header | Security | Medium | Backend Dev | S | 2 | QA-DEV-1, SR-DEV-2, SR-DEV-6 |
| 23 | No input length limits server-side (HTML maxlength bypassed by raw requests) | Security | Medium | Backend Dev | S | 2 | QA-DEV-1 |
| 24 | Fake/hardcoded captcha values (value=14) — zero bot protection | Security | Medium | Backend Dev | M | 2 | QA-DEV-1, SR-DEV-2 |
| 25 | SMTP credentials in tracked PHP file (smtp-config.php) — no .env separation | Security | Medium | Backend Dev | M | 2 | QA-DEV-1, SR-DEV-6 |
| 26 | Missing session_start() in form handlers (blocks CSRF implementation) | Security | Medium | Backend Dev | XS | 1 | QA-DEV-1 |
| 27 | thank-you.php outputs unescaped $B (HTTP_HOST XSS vector) | Security | Medium | Backend Dev | XS | 1 | QA-DEV-1 |
| 28 | CSP contains 'unsafe-inline' and 'unsafe-eval' — XSS protection negated | Security | Medium | DevOps/Backend | L | 3 | QA-DEV-1, QA-DEV-3, SR-DEV-2 |
| 29 | jQuery loaded synchronously in head — render-blocking on every page | Performance | Critical | Frontend Dev | M | 2 | QA-DEV-2, SR-DEV-3 |
| 30 | 23 CSS stylesheets loaded on every page — extreme HTTP request count (~825KB) | Performance | High | Frontend Dev | L | 2 | QA-DEV-2, SR-DEV-3 |
| 31 | 22 JavaScript files loaded globally regardless of page need | Performance | High | Frontend Dev | L | 2 | QA-DEV-2, SR-DEV-3 |
| 32 | Select2 CSS loaded twice — duplicate HTTP request (head.php + header.php) | Performance | Critical | Frontend Dev | XS | 1 | QA-DEV-2, SR-DEV-1 |
| 33 | 3 CSS stylesheets loaded twice per page (style-01, mibooz-responsive, Select2) | Performance | High | Frontend Dev | XS | 1 | SR-DEV-1, QA-DEV-2 |
| 34 | custom-fixes.css — 3,834 lines, 772 !important, 83% auto-generated | Performance | High | Frontend Dev | XL | 3 | QA-DEV-2, SR-DEV-3 |
| 35 | No critical CSS inlining — all 15+ CSS files render-blocking on first paint | Performance | Critical | Frontend Dev | M | 2 | SR-DEV-3 |
| 36 | Font Awesome full bundle (102KB) for ~20 icons used | Performance | High | Frontend Dev | M | 2 | SR-DEV-3 |
| 37 | 5 carousel/slider libraries loaded simultaneously (Swiper, Owl, Slick, TinySlider, bxSlider) | Performance | Medium | Frontend Dev | L | 2 | QA-DEV-2, SR-DEV-3 |
| 38 | Swiper v5.4.5 and other libraries severely outdated (Owl unmaintained since 2018) | Performance | High | Frontend Dev | L | 2 | QA-DEV-2 |
| 39 | bxSlider loaded globally but never initialized on any page | Performance | Low | Frontend Dev | XS | 3 | QA-DEV-2 |
| 40 | 794+ empty alt="" attributes on non-decorative content images | Accessibility | Critical | Frontend Dev | L | 2 | QA-DEV-2, SR-DEV-5 |
| 41 | onmousedown/onselectstart disables right-click and text selection globally on 53+ pages | Accessibility | High | Frontend Dev | S | 2 | QA-DEV-2 |
| 42 | Error messages not programmatically associated with form fields (no aria-describedby) | Accessibility | High | Frontend Dev | S | 2 | SR-DEV-5 |
| 43 | Custom multi-select widget on contact page has no keyboard arrow navigation | Accessibility | High | Frontend Dev | M | 2 | SR-DEV-5 |
| 44 | Floating call/email widget has no accessible label (icon-only links) | Accessibility | High | Frontend Dev | XS | 2 | SR-DEV-5, QA-DEV-2 |
| 45 | Placeholder contrast fails WCAG 1.4.3 (#bbb on white = 2.3:1, need 4.5:1) | Accessibility | Medium | Frontend Dev | XS | 2 | SR-DEV-5 |
| 46 | rgba(255,255,255,0.65) text on red backgrounds fails contrast | Accessibility | Medium | Frontend Dev | XS | 2 | SR-DEV-5 |
| 47 | Hero video has no prefers-reduced-motion guard and no caption track | Accessibility | Medium | Frontend Dev | S | 2 | SR-DEV-5 |
| 48 | href="javascript:void(0)" on navigation dropdown anchors | Accessibility | High | Frontend Dev | S | 3 | QA-DEV-2 |
| 49 | Duplicate JSON-LD structured data (already counted as Issue #5) | Architecture | — | — | — | — | Merged |
| 50 | footer.php is 1,364-line unmaintainable monolith | Architecture | Medium | Backend Dev | L | 3 | SR-DEV-1 |
| 51 | No page variable contract — silent SEO failures on missing $page_canonical | Architecture | High | Backend Dev | M | 3 | SR-DEV-1 |
| 52 | include instead of require_once for form-quote.php across 28 pages | Architecture | High | Backend Dev | S | 3 | SR-DEV-1 |
| 53 | Relative require_once paths in index.php (CWD-dependent, not __DIR__ anchored) | Architecture | Medium | Backend Dev | XS | 3 | SR-DEV-1 |
| 54 | No output buffering — header-already-sent risk from whitespace/BOM in includes | Architecture | Medium | Backend Dev | XS | 3 | SR-DEV-1 |
| 55 | UTF-8 BOM in mobile-app-development.php breaks doctype detection | Architecture | Medium | Backend Dev | XS | 2 | QA-DEV-2 |
| 56 | Dual mobile navigation systems — Bootstrap nav + legacy nav (dead DOM) | Frontend | Medium | Frontend Dev | M | 3 | QA-DEV-2 |
| 57 | CSS nuclear override [class*="col-lg-"] forces all columns to full-width at 991px | Performance | Medium | Frontend Dev | M | 3 | SR-DEV-3 |
| 58 | Hardcoded brand colour inconsistency (#dd0429 vs #d31923 vs #ec1c22, 78+ occurrences) | Frontend | Medium | Frontend Dev | M | 3 | QA-DEV-2, SR-DEV-3 |
| 59 | CSS file naming contains @ and = characters — CDN/WAF compatibility risk | DevOps | Medium | DevOps | S | 3 | QA-DEV-2 |
| 60 | Cache-Control immutable applied without content-hash filenames | DevOps | Medium | DevOps | M | 3 | QA-DEV-3, SR-DEV-6 |
| 61 | ETags not disabled — causes cache invalidation conflicts on shared hosting | DevOps | Medium | DevOps | XS | 3 | SR-DEV-6 |
| 62 | Gzip compression missing key MIME types (woff, webp, manifest+json, etc.) | DevOps | Medium | DevOps | XS | 3 | SR-DEV-6 |
| 63 | Sitemap missing lastmod on all 60+ URLs, contains redirect-only slug entries | DevOps | Medium | DevOps | S | 3 | QA-DEV-3, SR-DEV-6 |

**Low severity issues** (tracked but not sprint-planned — address opportunistically):

| # | Issue | Owner | Source |
|---|---|---|---|
| L-1 | SMTP AUTH LOGIN intermediate responses not validated | Backend Dev | QA-DEV-1 |
| L-2 | @ error suppression on stream_socket_client | Backend Dev | QA-DEV-1 |
| L-3 | gethostname() in EHLO may expose internal hostname | Backend Dev | QA-DEV-1 |
| L-4 | Plaintext PII in dev log file | Backend Dev | QA-DEV-1 |
| L-5 | No IP logging for form submissions | Backend Dev | QA-DEV-1 |
| L-6 | SMTP credentials concentrated in single file | Backend Dev | QA-DEV-1 |
| L-7 | Scroll-to-top link has no aria-label | Frontend Dev | QA-DEV-2 |
| L-8 | Buttons missing type="button" attribute | Frontend Dev | QA-DEV-2, SR-DEV-5 |
| L-9 | Copyright year hardcoded as 2025 | Frontend Dev | QA-DEV-2 |
| L-10 | target="_blank" links missing rel="noopener noreferrer" | Frontend Dev | QA-DEV-2 |
| L-11 | Preloader timeout 4 seconds — too long | Frontend Dev | QA-DEV-2 |
| L-12 | viewport meta unnecessary minimum-scale and shrink-to-fit | Frontend Dev | QA-DEV-2 |
| L-13 | Inline onmouseenter handlers on nav links | Frontend Dev | QA-DEV-2 |
| L-14 | Isotope and WOW.js loaded as non-minified files | Frontend Dev | QA-DEV-2 |
| L-15 | robots.txt Disallow: /*.py$ uses regex $ anchor (not standard glob) | DevOps | QA-DEV-3, SR-DEV-6 |
| L-16 | Legacy bootstrap/4.0.0/ directory — empty, vestigial | DevOps | QA-DEV-3 |
| L-17 | .gitignore does not exclude composer.lock or vendor/ | DevOps | QA-DEV-3, SR-DEV-6 |
| L-18 | font-display: swap missing on self-hosted custom font | Frontend Dev | SR-DEV-3 |
| L-19 | font-display: swap DNS prefetch/preconnect order incorrect | Frontend Dev | SR-DEV-3 |
| L-20 | Duplicate mobile centering block in custom-fixes.css (~700 lines redundant) | Frontend Dev | SR-DEV-3 |
| L-21 | Inline style="" attributes extensively used for brand styling (42+ per page) | Frontend Dev | QA-DEV-2 |
| L-22 | X-Powered-By PHP header not suppressed | DevOps | QA-DEV-3 |
| L-23 | X-Robots-Tag missing on form handler endpoints | DevOps | SR-DEV-6 |
| L-24 | Hero video autoplay with no aria-hidden (already partially covered in #47) | Accessibility | SR-DEV-5 |
| L-25 | Decorative dropdown images missing aria-hidden="true" | Accessibility | SR-DEV-5 |
| L-26 | Decorative icon <i> elements not marked aria-hidden globally | Accessibility | SR-DEV-5 |
| L-27 | Soft 404 — all errors map to index.php returning HTTP 200 homepage | Architecture | QA-DEV-3 |
| L-28 | Preload declarations don't match actual load order | Performance | QA-DEV-2 |

---

## Severity Breakdown

| Severity | Count | % of Total |
|---|---|---|
| Critical | 14 | 22% |
| High | 20 | 32% |
| Medium | 29 | 46% |
| Low | 28 | — (tracked separately, not sprint-planned) |
| **Total (sprint-planned)** | **63** | **100%** |

---

## Domain Breakdown

| Domain | Issue Count | Highest Severity | Notes |
|---|---|---|---|
| Security | 16 | Critical | Most urgent — forms are fully open to CSRF, MITM on SMTP, PII in GET params |
| Performance | 12 | Critical | ~825KB CSS, 22 global JS files, render-blocking jQuery; estimated -0.8 to -1.4s LCP |
| Accessibility | 12 | Critical | WCAG AA compliance ~52%; mega-menu unreachable by keyboard; all forms label-less |
| Architecture | 8 | Critical | Duplicate JSON-LD harms SEO rankings; monolithic footer; fragile include patterns |
| DevOps | 10 | Critical | Silent SMTP failure loses leads; no CI/CD; missing robots.txt entries |
| Frontend/UI | 5 | Medium | Brand colour inconsistency; dead nav; file naming risks |

---

## Sprint 1 — Critical & Security (Week 1)
**Goal**: Make the site safe to keep online. Block zero-day exploits, fix data leakage, restore SMTP reliability.
**Total Issues**: 20 | **Total Effort**: ~7–9 days

---

### 1. Implement CSRF Protection on All Forms
- **Severity**: Critical
- **Owner**: Backend Dev
- **Effort**: M (half day)
- **Why Sprint 1**: Any authenticated browser can be weaponized to forge form submissions. The hardcoded captcha (value=14) provides zero protection. This is the widest-open attack surface on the site.
- **Fix Reference**: SR-DEV-2-SECURITY.md (full csrf.php implementation), QA-DEV-1-BACKEND.md (C-1)
- **Files**: Create `includes/csrf.php`, update `includes/form-quote.php`, `contact-form.php`, `submit-calculator.php`, `includes/footer.php` (modal fetch JS)

---

### 2. Enable SSL Certificate Verification on SMTP Connection
- **Severity**: Critical
- **Owner**: Backend Dev
- **Effort**: S (1–4hr)
- **Why Sprint 1**: verify_peer=false makes the SMTP handshake readable by any network-level attacker. SMTP_PASSWORD is transmitted as base64 (not encrypted) and is fully exposed. This is not a theoretical risk on shared hosting.
- **Fix Reference**: SR-DEV-2-SECURITY.md, QA-DEV-1-BACKEND.md (C-2), SR-DEV-6-DEVOPS.md
- **Files**: `includes/mailer.php` lines 54–60 — remove three disabling flags, add cafile lookup

---

### 3. Switch All Forms from GET to POST
- **Severity**: Critical
- **Owner**: Backend Dev
- **Effort**: S (1–4hr)
- **Why Sprint 1**: Full names, emails, and phone numbers currently appear in server access logs, browser history, and referrer headers on every contact/calculator submission. This is a GDPR/CCPA violation.
- **Fix Reference**: QA-DEV-1-BACKEND.md (C-3), SR-DEV-2-SECURITY.md, SR-DEV-5-ACCESSIBILITY.md
- **Files**: `includes/form-quote.php` method="get" → "post"; `submit-calculator.php` $_GET → $_POST; `contact-form.php` remove GET fallback

---

### 4. Fix Silent SMTP Failure (Check sendMail() Return Value)
- **Severity**: Critical
- **Owner**: Backend Dev
- **Effort**: S (1–4hr)
- **Why Sprint 1**: Every form submission where SMTP fails silently redirects to the thank-you page. Business leads are permanently lost with no record. This is an active revenue risk.
- **Fix Reference**: SR-DEV-6-DEVOPS.md (Issue #1), includes full retry logic and failed-email queue implementation
- **Files**: `contact-form.php` lines 56–64, `submit-calculator.php` lines 58–67, `includes/mailer.php` (add retry loop + _mailer_queue_failed())

---

### 5. Block logs/ Directory from Web Access
- **Severity**: Critical
- **Owner**: Backend Dev
- **Effort**: XS (<1hr)
- **Why Sprint 1**: If SMTP_LOCAL_DEV is ever true on a staging/production server (including via HTTP_HOST spoofing), all submitted PII is written to a publicly downloadable log file. Even defensively, the gap must be closed now.
- **Fix Reference**: QA-DEV-1-BACKEND.md (M-2), QA-DEV-3-INFRASTRUCTURE.md (Issue #1), SR-DEV-6-DEVOPS.md
- **Files**: `.htaccess` — add `RewriteRule ^logs/.*$ - [F,L]`; also add `Disallow: /logs/` to `robots.txt`

---

### 6. Implement Admin Panel Brute-Force Lockout and IP Restriction
- **Severity**: High (Security)
- **Owner**: Backend Dev
- **Effort**: M (half day)
- **Why Sprint 1**: The admin panel has no lockout after N failed attempts. Hydra/Burp can bypass sleep(2) with parallel threads and brute-force SMTP_ADMIN_PASS. A compromised admin panel gives an attacker SMTP send capability and credential exposure.
- **Fix Reference**: SR-DEV-2-SECURITY.md (Layer 2 + Layer 3 lockout code), QA-DEV-1-BACKEND.md (H-1, H-2)
- **Files**: `mailer-admin-aws7749.php` (add session-based lockout counter); `.htaccess` (add `<Files>` IP restriction block)

---

### 7. Fix Admin Session Token — Replace Date-Based Token with Random Token
- **Severity**: High (Security)
- **Owner**: Backend Dev
- **Effort**: S (1–4hr)
- **Why Sprint 1**: The daily date-based token is deterministic and allows a 24-hour session fixation window. session_regenerate_id(true) is missing after login. This is a chain vulnerability with the brute-force issue above.
- **Fix Reference**: QA-DEV-1-BACKEND.md (H-3)
- **Files**: `mailer-admin-aws7749.php` lines 16, 29, 40–41

---

### 8. Fix Email Header Injection (Strip CRLF from reply_to and Subject)
- **Severity**: High (Security)
- **Owner**: Backend Dev
- **Effort**: S (1–4hr)
- **Why Sprint 1**: An attacker can inject a Bcc: header into outgoing emails, enabling silent spam relay through the company's SMTP account. The fix is a one-line str_replace.
- **Fix Reference**: QA-DEV-1-BACKEND.md (H-5)
- **Files**: `includes/mailer.php` sendMail() function — strip \r and \n from $replyTo and $subject before header construction

---

### 9. Fix Open Redirect via HTTP_HOST / thank-you.php XSS
- **Severity**: High (Security)
- **Owner**: Backend Dev
- **Effort**: S (1–4hr)
- **Why Sprint 1**: HTTP_HOST is user-controlled. SITE_BASE is built from it without allowlist validation, creating both an open redirect (location to evil.com) and an XSS vector in thank-you.php. These are related fixes that should be done together.
- **Fix Reference**: QA-DEV-1-BACKEND.md (H-4, M-8)
- **Files**: `includes/config.php` (add $allowed_hosts allowlist); `thank-you.php` (add htmlspecialchars() to $B)

---

### 10. Add session_start() to Form Handlers
- **Severity**: Medium (prerequisite for CSRF)
- **Owner**: Backend Dev
- **Effort**: XS (<1hr)
- **Why Sprint 1**: This is a hard prerequisite for Issue #1 (CSRF implementation). Without session_start(), CSRF token validation cannot function.
- **Fix Reference**: QA-DEV-1-BACKEND.md (M-7)
- **Files**: `contact-form.php`, `submit-calculator.php` — add session_start() at top

---

### 11. Fix Broken Double-301 Redirect Chain (fintness typo)
- **Severity**: Critical (Architecture/SEO)
- **Owner**: Backend Dev
- **Effort**: XS (<1hr)
- **Why Sprint 1**: The /fintness-mobile-app-development.php root stub redirects to the .php extension URL, which then triggers a second .htaccess 301. Double-301 chains waste link equity. The target also contains a typo ("fintness" → "fitness"). This is a live SEO damage issue.
- **Fix Reference**: QA-DEV-3-INFRASTRUCTURE.md (Issue #2, #15)
- **Files**: `fintness-mobile-app-development.php` (root) — change redirect target

---

### 12. Remove PHPMailer Phantom Dependency from composer.json
- **Severity**: High (Architecture)
- **Owner**: Backend Dev
- **Effort**: XS (<1hr)
- **Why Sprint 1**: Any developer running `composer install` pulls ~500KB of unused library code. No PHPMailer autoload exists. Confusing and wasteful. Clean this up before CI/CD is established.
- **Fix Reference**: QA-DEV-3-INFRASTRUCTURE.md (Issue #3), SR-DEV-6-DEVOPS.md (Issue #4)
- **Files**: `composer.json` — remove require block

---

### 13. Block Admin Panel and Calculator in robots.txt
- **Severity**: High (DevOps/Security)
- **Owner**: DevOps
- **Effort**: XS (<1hr)
- **Why Sprint 1**: The admin panel URL is not blocked in robots.txt. SEO bots can surface it in search results and reveal the panel's existence. submit-calculator.php as a GET handler is also indexable as a URL.
- **Fix Reference**: QA-DEV-3-INFRASTRUCTURE.md (Issue #5, #6), SR-DEV-6-DEVOPS.md (Issue #8)
- **Files**: `robots.txt` — add Disallow entries per SR-DEV-6 recommended robots.txt

---

### 14. Add SMTP Retry Logic and Failed-Email Queue
- **Severity**: High (DevOps)
- **Owner**: Backend Dev
- **Effort**: M (half day)
- **Why Sprint 1**: Hostinger shared hosting SMTP has transient hiccups. Without retry, a momentary queue backlog permanently loses leads. The failed-email queue ensures no inquiry is ever silently dropped.
- **Fix Reference**: SR-DEV-6-DEVOPS.md (Issue #2, #3) — full updated mailer.php provided
- **Files**: `includes/mailer.php` — full replacement with retry loop and _mailer_queue_failed()

---

### 15. Fix Duplicate JSON-LD Structured Data
- **Severity**: Critical (Architecture/SEO)
- **Owner**: Backend Dev
- **Effort**: S (1–4hr)
- **Why Sprint 1**: Google's Rich Results Test suppresses duplicate schema types. Both BreadcrumbList and Service schemas are emitted twice on every service/solution page (once from head.php, once from footer.php). This actively harms SEO ranking for the pages that generate the most revenue.
- **Fix Reference**: SR-DEV-1-PHP-ARCHITECTURE.md (Issue #1)
- **Files**: `includes/head.php` (remove BreadcrumbList + Service blocks lines 243–298), `includes/footer.php` (add homepage guard to schema output)

---

### 16. Fix Missing meta charset on Every Page
- **Severity**: Critical (Frontend)
- **Owner**: Frontend Dev
- **Effort**: XS (<1hr)
- **Why Sprint 1**: The HTML5 spec requires charset to appear within the first 1024 bytes. Without it, browsers may misinterpret encoding and older browsers are vulnerable to charset-confusion XSS attacks.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #1)
- **Files**: `includes/head.php` — add `<meta charset="UTF-8">` as first element inside `<head>`

---

### 17. Remove Duplicate CSS Link Tags from header.php
- **Severity**: High (Performance — duplicated HTTP requests on first paint)
- **Owner**: Frontend Dev
- **Effort**: XS (<1hr)
- **Why Sprint 1**: Three stylesheets (style-01, mibooz-responsive, Select2) are loaded twice per page — once in head.php and again in header.php (inside body). The in-body `<link>` also causes FOUC and is invalid HTML5. This is a 3-line deletion.
- **Fix Reference**: SR-DEV-1-PHP-ARCHITECTURE.md (Issue #2), QA-DEV-2-FRONTEND.md (Issue #5)
- **Files**: `includes/header.php` — delete lines 138–140

---

### 18. Implement Accessible Keyboard-Navigable Mega-Menu
- **Severity**: Critical (Accessibility — WCAG 2.1.1)
- **Owner**: Frontend Dev
- **Effort**: M (half day)
- **Why Sprint 1**: The Services and Solutions menus are the primary conversion navigation paths. They are completely unreachable by keyboard-only users. Estimated 7% of users — including all switch-access users — cannot access these menus at all.
- **Fix Reference**: SR-DEV-5-ACCESSIBILITY.md (Issue #3) — full button-based HTML and JS implementation provided
- **Files**: `includes/header.php` (change anchor to button trigger, add aria attributes), `includes/footer.php` (add accessible mega-menu JS controller)

---

### 19. Implement Accessible Lead Modal (Focus Trap + aria-modal + Return Focus)
- **Severity**: Critical (Accessibility — WCAG 2.4.3)
- **Owner**: Frontend Dev
- **Effort**: M (half day)
- **Why Sprint 1**: Without a focus trap, Tab key escapes the modal and lets screen-reader users traverse the background page. Without return focus, users are abandoned at document root after modal close. The modal is the primary lead-capture mechanism on the site.
- **Fix Reference**: SR-DEV-5-ACCESSIBILITY.md (Issue #4) — full accessible modal HTML + focus-trap JS provided
- **Files**: `includes/footer.php` (modal HTML + openLeadModal/closeLeadModal JS)

---

### 20. Add Label Elements to All Form Inputs
- **Severity**: Critical (Accessibility — WCAG 3.3.2)
- **Owner**: Frontend Dev
- **Effort**: M (half day)
- **Why Sprint 1**: Every form on the site uses placeholder-only field identification. Placeholders disappear on focus, are not reliably announced by screen readers, and fail WCAG 3.3.2. This affects every user who submits a form on the site.
- **Fix Reference**: SR-DEV-5-ACCESSIBILITY.md (Issue #5) — full labeled form HTML provided for both quote form and modal
- **Files**: `includes/form-quote.php`, `includes/footer.php` (modal form section)

---

## Sprint 2 — Performance & Accessibility (Week 2)
**Goal**: Make the site fast and usable for all users. Eliminate the LCP penalty. Fix remaining WCAG failures.
**Total Issues**: 19 | **Total Effort**: ~8–11 days

---

### P2-01. Defer jQuery / Eliminate Render-Blocking JavaScript in Head
- **Severity**: Critical (Performance)
- **Owner**: Frontend Dev
- **Effort**: M
- **Why Sprint 2**: jQuery (87KB) synchronously blocks HTML parsing on every page. The comment "loaded early so inline scripts can use $" is the root cause — those inline scripts must be restructured to use DOMContentLoaded, not a render-blocking head script.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #3), SR-DEV-3-CSS-PERFORMANCE.md (Issue #3)
- **Estimated LCP improvement**: -0.1 to -0.2s

---

### P2-02. Inline Critical CSS / Async-Load Non-Critical Vendor CSS
- **Severity**: Critical (Performance)
- **Owner**: Frontend Dev
- **Effort**: M
- **Why Sprint 2**: All 15+ CSS files render-block first paint. Inlining ~1.5KB of critical above-the-fold CSS (navbar shell, body reset) and async-loading non-critical vendor CSS via the media=print trick eliminates the render-block for decorative/animation libraries.
- **Fix Reference**: SR-DEV-3-CSS-PERFORMANCE.md (Issue #1)
- **Estimated LCP improvement**: -0.4 to -0.8s

---

### P2-03. Implement Conditional JavaScript Loading Per Page
- **Severity**: High (Performance)
- **Owner**: Frontend Dev
- **Effort**: L
- **Why Sprint 2**: 22 vendor JS files download on every page including Privacy Policy and Terms of Use. Isotope, noUiSlider, circle-progress, and WOW.js are all needed on fewer than 5 pages. Conditional loading reduces the global JS payload by ~200KB+.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #6), SR-DEV-3-CSS-PERFORMANCE.md (Issue #7)

---

### P2-04. Reduce CSS Stylesheet Count (Consolidate + Remove Duplicates)
- **Severity**: High (Performance)
- **Owner**: Frontend Dev
- **Effort**: L
- **Why Sprint 2**: 23 separate CSS HTTP requests on every page. At minimum, the three redundant carousel libraries (Owl, Slick, bxSlider) should be collapsed into Swiper-only, saving ~80KB CSS. Conditional carousel CSS loading removes the rest per page.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #7), SR-DEV-3-CSS-PERFORMANCE.md (Issue #7)

---

### P2-05. Subset Font Awesome (102KB → ~15KB for 20 icons used)
- **Severity**: High (Performance)
- **Owner**: Frontend Dev
- **Effort**: M
- **Why Sprint 2**: The full Font Awesome 6.7.2 bundle (all 2,000+ icons) loads on every page for ~20 icons used. Subsetting saves ~85KB raw / ~18KB gzip.
- **Fix Reference**: SR-DEV-3-CSS-PERFORMANCE.md (Issue #2)
- **Estimated LCP improvement**: -0.2 to -0.4s

---

### P2-06. Update / Consolidate Outdated Carousel Libraries
- **Severity**: High (Performance + Reliability)
- **Owner**: Frontend Dev
- **Effort**: L
- **Why Sprint 2**: Owl Carousel is unmaintained since 2018 and has known iOS 17+ touch API breakage. Swiper v5.4.5 is 4 years behind current. bxSlider is from 2014 and unused. Consolidation to Swiper v11.x eliminates 3 of 5 slider libraries.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #10)

---

### P2-07. Add loading="lazy" to All Non-Hero Content Images
- **Severity**: Medium (Performance)
- **Owner**: Frontend Dev
- **Effort**: M
- **Why Sprint 2**: 794+ images across service pages have no lazy loading. The JS runtime patch in footer.php fires after images have already begun fetching. Native HTML lazy loading is the correct fix.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #13)

---

### P2-08. Fix 794+ Empty Alt Attributes on Content Images
- **Severity**: Critical (Accessibility — WCAG 1.1.1 + SEO)
- **Owner**: Frontend Dev
- **Effort**: L
- **Why Sprint 2**: Empty alt on non-decorative content images (technology logos, case study screenshots, service icons) fails WCAG 1.1.1 and prevents Google Image Search indexing — direct damage to SEO for a company selling visual portfolio work.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #4), SR-DEV-5-ACCESSIBILITY.md (Issue #1)

---

### P2-09. Fix Placeholder Contrast Failures (WCAG 1.4.3)
- **Severity**: Medium (Accessibility)
- **Owner**: Frontend Dev
- **Effort**: XS
- **Why Sprint 2**: #bbb placeholder text on white backgrounds provides 2.3:1 contrast ratio. WCAG requires 4.5:1 for normal text. Use #767676 minimum.
- **Fix Reference**: SR-DEV-5-ACCESSIBILITY.md (Color & Contrast Notes)

---

### P2-10. Fix rgba(255,255,255,0.65) Text on Red Backgrounds
- **Severity**: Medium (Accessibility)
- **Owner**: Frontend Dev
- **Effort**: XS
- **Why Sprint 2**: Semi-transparent white on the brand red background fails WCAG 1.4.3 contrast minimum (~2.0:1). Two quick CSS fixes resolve this for contact card and hero subtext.
- **Fix Reference**: SR-DEV-5-ACCESSIBILITY.md (Color & Contrast Notes)

---

### P2-11. Remove Global onmousedown/onselectstart Disabled Text Selection
- **Severity**: High (Accessibility)
- **Owner**: Frontend Dev
- **Effort**: S
- **Why Sprint 2**: Disabling text selection on the entire page wrapper breaks screen-reader text selection, keyboard Shift+Arrow selection, and copy/paste of contact details. Affects 53+ service pages.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #9)

---

### P2-12. Add aria-describedby + role="alert" on All Form Error Messages
- **Severity**: High (Accessibility — WCAG 3.3.1)
- **Owner**: Frontend Dev
- **Effort**: S
- **Why Sprint 2**: Error messages are injected into <small> elements adjacent to inputs but not programmatically linked. Screen readers will not associate the error with the field.
- **Fix Reference**: SR-DEV-5-ACCESSIBILITY.md (Issue #7)

---

### P2-13. Implement Keyboard Arrow Navigation in Custom Multi-Select (Contact Page)
- **Severity**: High (Accessibility — WCAG 2.1.1)
- **Owner**: Frontend Dev
- **Effort**: M
- **Why Sprint 2**: The "What Are You Looking For?" custom multi-select can be opened by keyboard but options cannot be navigated with arrow keys, making form submission impossible for keyboard-only users on the contact page.
- **Fix Reference**: SR-DEV-5-ACCESSIBILITY.md (Issue #11)

---

### P2-14. Add Accessible Labels to Floating Call/Email Widget
- **Severity**: High (Accessibility — WCAG 4.1.2)
- **Owner**: Frontend Dev
- **Effort**: XS
- **Why Sprint 2**: The floating contact buttons on every page are icon-only with no aria-label. Screen readers announce only an empty link. These are persistent conversion elements.
- **Fix Reference**: SR-DEV-5-ACCESSIBILITY.md (Issue #8), QA-DEV-2-FRONTEND.md (Issue #24)

---

### P2-15. Add prefers-reduced-motion Guard for Hero Video
- **Severity**: Medium (Accessibility)
- **Owner**: Frontend Dev
- **Effort**: S
- **Why Sprint 2**: The autoplay looping hero video triggers vestibular disorders. The fix is a small media query + JS listener. Simple, high-impact for affected users.
- **Fix Reference**: SR-DEV-5-ACCESSIBILITY.md (Issue #9)

---

### P2-16. Implement Server-Side Rate Limiting on Form Endpoints
- **Severity**: Medium (Security)
- **Owner**: Backend Dev
- **Effort**: M
- **Why Sprint 2**: No rate limiting means a bot can spam thousands of form submissions per minute, exhausting Hostinger's SMTP quota and blacklisting the sending domain. A session/file-based rate limiter is provided in the security report.
- **Fix Reference**: QA-DEV-1-BACKEND.md (M-6), SR-DEV-2-SECURITY.md (Medium issues)

---

### P2-17. Fix SMTP_LOCAL_DEV Spoofable via HTTP_HOST
- **Severity**: Medium (Security)
- **Owner**: Backend Dev
- **Effort**: S
- **Why Sprint 2**: A request with Host: localhost sent to the live server sets SMTP_LOCAL_DEV=true, silently writing emails to a log file instead of sending. Replace with environment-variable detection.
- **Fix Reference**: QA-DEV-1-BACKEND.md (M-1), SR-DEV-2-SECURITY.md (Medium issues)

---

### P2-18. Implement .env File for SMTP Credentials
- **Severity**: Medium (Security/DevOps)
- **Owner**: Backend Dev + DevOps
- **Effort**: M
- **Why Sprint 2**: smtp-config.php is tracked in git. One accidental commit with real credentials exposes the production email account. The .env approach (outside webroot, gitignored, loaded at runtime) is the correct solution.
- **Fix Reference**: SR-DEV-2-SECURITY.md (Medium issues), SR-DEV-6-DEVOPS.md (.env Implementation Plan)

---

### P2-19. Fix UTF-8 BOM in Service Pages
- **Severity**: Medium (Architecture)
- **Owner**: Backend Dev
- **Effort**: XS
- **Why Sprint 2**: The BOM in mobile-app-development.php causes PHP to emit a byte-order mark before <!DOCTYPE html>, breaking doctype detection and potentially causing header() failures.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #19)

---

## Sprint 3 — Architecture & Tech Debt (Week 3)
**Goal**: Make the codebase maintainable and future-proof. Resolve technical debt, improve DevOps posture.
**Total Issues**: 24 | **Total Effort**: ~12–16 days

---

### P3-01. Fix Weak CSP (Remove unsafe-eval; Plan Nonce-Based Migration)
- **Severity**: Medium (Security)
- **Owner**: Backend Dev + DevOps
- **Effort**: L
- **Why Sprint 3**: unsafe-eval and unsafe-inline negate XSS protection. Remove unsafe-eval immediately (not needed by any current code). Plan nonce-based CSP migration as a phased refactor.
- **Fix Reference**: QA-DEV-1-BACKEND.md (L-7), SR-DEV-2-SECURITY.md (Low issues), QA-DEV-3-INFRASTRUCTURE.md (Issue #12)

---

### P3-02. Refactor custom-fixes.css — Remove Duplicates, Stop Auto-Generating
- **Severity**: High (Performance/Architecture)
- **Owner**: Frontend Dev
- **Effort**: XL
- **Why Sprint 3**: 3,834 lines with 772 !important and 83% auto-generated content. Duplicate ~700-line mobile centering block. Nuclear col-lg override breaking all tablet layouts. Tailwind utility polyfills duplicating Bootstrap 5. This file is causing the specificity war driving the !important count.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #8), SR-DEV-3-CSS-PERFORMANCE.md (Issues #4, #9, #10, #11)

---

### P3-03. Refactor footer.php — Split 1,364-Line Monolith into Partials
- **Severity**: Medium (Architecture)
- **Owner**: Backend Dev
- **Effort**: L
- **Why Sprint 3**: footer.php mixes PHP logic, 600 lines of inline CSS, HTML, vendor JS, JSON-LD, and Tawk.to into a single file. Independent partials (footer-styles.php, footer-html.php, modal-lead.php, footer-scripts.php, footer-schema.php, tawk-chat.php) will make diffs meaningful and editing safe.
- **Fix Reference**: SR-DEV-1-PHP-ARCHITECTURE.md (Issue #5)

---

### P3-04. Implement Page Variable Contract Validator
- **Severity**: High (Architecture)
- **Owner**: Backend Dev
- **Effort**: M
- **Why Sprint 3**: $page_canonical defaults to the homepage URL on all pages that forget to set it — a silent SEO disaster with no warning. The dev-mode validator surfaces missing variables as visible UI warnings at zero production cost.
- **Fix Reference**: SR-DEV-1-PHP-ARCHITECTURE.md (Issue #4)

---

### P3-05. Change include → require_once for form-quote.php (28 pages)
- **Severity**: High (Architecture)
- **Owner**: Backend Dev
- **Effort**: S
- **Why Sprint 3**: A missing or broken form-quote.php silently renders pages without the quote form. require_once turns silent failures into detectable fatal errors that surface in staging before production.
- **Fix Reference**: SR-DEV-1-PHP-ARCHITECTURE.md (Issue #3)

---

### P3-06. Fix Relative require_once Paths in index.php
- **Severity**: Medium (Architecture)
- **Owner**: Backend Dev
- **Effort**: XS
- **Why Sprint 3**: Relative path includes in index.php are CWD-dependent and would break under symlinks, cron jobs, or CLI execution. __DIR__-anchored paths are the standard.
- **Fix Reference**: SR-DEV-1-PHP-ARCHITECTURE.md (Issue #6)

---

### P3-07. Add Output Buffering to config.php
- **Severity**: Medium (Architecture)
- **Owner**: Backend Dev
- **Effort**: XS
- **Why Sprint 3**: Without ob_start(), any whitespace before <?php in any include causes "headers already sent" failures. The BOM found in Sprint 2 is an example of this class of bug.
- **Fix Reference**: SR-DEV-1-PHP-ARCHITECTURE.md (Issue #7)

---

### P3-08. Implement GitHub Actions CI/CD Deploy Workflow
- **Severity**: Medium (DevOps)
- **Owner**: DevOps
- **Effort**: M
- **Why Sprint 3**: Manual FTP deployment is error-prone and inconsistent. The full workflow YAML is provided in the DevOps report — it generates .env from GitHub Secrets on each deploy, excludes sensitive files, and supports manual triggers.
- **Fix Reference**: SR-DEV-6-DEVOPS.md (GitHub Actions Deployment Workflow)

---

### P3-09. Fix Cache-Control immutable Without Content-Hash Filenames
- **Severity**: Medium (DevOps)
- **Owner**: DevOps
- **Effort**: M
- **Why Sprint 3**: immutable tells browsers to never revalidate CSS/JS within the 1-month max-age, even on hard refresh. Without cache-busting filenames, a CSS update will remain stale for 30 days for returning visitors.
- **Fix Reference**: QA-DEV-3-INFRASTRUCTURE.md (Issue #10), SR-DEV-6-DEVOPS.md (Issue #9)

---

### P3-10. Disable ETags / Fix ETag Conflicts on Shared Hosting
- **Severity**: Medium (DevOps)
- **Owner**: DevOps
- **Effort**: XS
- **Why Sprint 3**: Shared hosting inode-based ETags from multiple server nodes cause unnecessary cache revalidation, defeating the Cache-Control headers. FileETag None is a 2-line fix.
- **Fix Reference**: SR-DEV-6-DEVOPS.md (Issue #7)

---

### P3-11. Complete Gzip MIME Type Coverage
- **Severity**: Medium (DevOps)
- **Owner**: DevOps
- **Effort**: XS
- **Why Sprint 3**: Several MIME types (woff, webp, manifest+json, vnd.ms-fontobject) are in the Expires block but missing from mod_deflate. Small fix, consistent compression coverage.
- **Fix Reference**: SR-DEV-6-DEVOPS.md (Issue #6)

---

### P3-12. Add lastmod to sitemap.xml / Remove Redirect-Only Slug Entries
- **Severity**: Medium (DevOps/SEO)
- **Owner**: DevOps
- **Effort**: S
- **Why Sprint 3**: Sitemap lastmod enables Google to prioritize re-crawling updated pages. Redirect-only entries (/solutions/startup and /solutions/startups pointing to /services/mvp-startup-development) waste crawl budget and confuse canonicalization.
- **Fix Reference**: QA-DEV-3-INFRASTRUCTURE.md (Issues #7, #8), SR-DEV-6-DEVOPS.md (sitemap audit)

---

### P3-13. Set Up Dedicated 404/500 Error Pages
- **Severity**: Medium (Architecture/UX)
- **Owner**: Backend Dev + Frontend Dev
- **Effort**: S
- **Why Sprint 3**: All errors currently serve the home page with a visible wrong-URL, giving users no indication the page wasn't found. A proper 404.php with navigation links significantly reduces bounce on broken links.
- **Fix Reference**: QA-DEV-3-INFRASTRUCTURE.md (Issue #9)

---

### P3-14. Standardize Brand Color — Replace #d31923 and #ec1c22 with CSS Variable
- **Severity**: Medium (Frontend)
- **Owner**: Frontend Dev
- **Effort**: M
- **Why Sprint 3**: Three competing red values (#dd0429, #d31923, #ec1c22) appear across 50+ files. Standardizing on var(--color-primary) makes rebranding a one-line change instead of a 50-file search-and-replace.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #15), SR-DEV-3-CSS-PERFORMANCE.md (CSS custom properties system)

---

### P3-15. Remove Dead Dual Mobile Navigation System
- **Severity**: Medium (Frontend)
- **Owner**: Frontend Dev
- **Effort**: M
- **Why Sprint 3**: The legacy .mobile-nav__wrapper in footer.php is always empty (it tries to clone .main-menu__list which doesn't exist in the Bootstrap nav). Removing it eliminates dead DOM on every page load.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #17)

---

### P3-16. Implement Conditional Carousel CSS/JS Loading Per Page
- **Severity**: Medium (Performance)
- **Owner**: Frontend Dev
- **Effort**: L
- **Why Sprint 3**: Loading 5 carousel libraries on every page (including text-only pages) adds ~60KB CSS and ~180KB JS globally. A $page_sliders array pattern in each page file enables targeted loading.
- **Fix Reference**: SR-DEV-3-CSS-PERFORMANCE.md (Issue #7)

---

### P3-17. Fix Nuclear [class*="col-lg-"] Bootstrap Grid Override
- **Severity**: Medium (Performance/Layout)
- **Owner**: Frontend Dev
- **Effort**: M
- **Why Sprint 3**: This single CSS rule forces every col-lg-* and col-xl-* column to full-width at 991px, breaking all intended multi-column tablet layouts and requiring individual counter-overrides throughout the codebase.
- **Fix Reference**: SR-DEV-3-CSS-PERFORMANCE.md (Issue #10)

---

### P3-18. Externalize Inline Style Blocks from footer.php and index.php
- **Severity**: Medium (Performance)
- **Owner**: Frontend Dev
- **Effort**: L
- **Why Sprint 3**: ~900 lines of inline CSS in footer.php and index.php cannot be browser-cached. Extracting to external component files (modal-lead.css, hero-carousel.css) makes them cacheable and preloadable.
- **Fix Reference**: SR-DEV-3-CSS-PERFORMANCE.md (Issue #5)

---

### P3-19. Rename CSS Files with @ Characters / Remove Duplicate Versioned Files
- **Severity**: Medium (DevOps)
- **Owner**: DevOps
- **Effort**: S
- **Why Sprint 3**: Filenames containing @ and = may be rejected by WAFs, CDNs, or NGINX proxies. The mibooz-responsive.css file exists in both versioned and unversioned copies with identical content.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #16)

---

### P3-20. Add X-Powered-By Suppression + X-Robots-Tag on Form Handlers
- **Severity**: Medium (Security/DevOps)
- **Owner**: DevOps
- **Effort**: XS
- **Why Sprint 3**: PHP version fingerprinting via X-Powered-By aids targeted attacks. X-Robots-Tag on form handlers prevents indexing even if external links to them appear.
- **Fix Reference**: QA-DEV-3-INFRASTRUCTURE.md (Issue #11), SR-DEV-6-DEVOPS.md (Issue #10)

---

### P3-21. Verify and Enable SPF / DKIM / DMARC DNS Records
- **Severity**: High (DevOps — Email Deliverability)
- **Owner**: DevOps
- **Effort**: M
- **Why Sprint 3**: Email deliverability depends on proper SPF/DKIM/DMARC configuration. Without DMARC, phishing emails can be sent "from" the company's domain. Verify via MXToolbox after DNS propagation.
- **Fix Reference**: SR-DEV-6-DEVOPS.md (Email Deliverability section)

---

### P3-22. Fix href="javascript:void(0)" on Navigation Dropdown Triggers
- **Severity**: High (Accessibility)
- **Owner**: Frontend Dev
- **Effort**: S
- **Why Sprint 3**: javascript:void(0) breaks middle-click, shows garbage in status bar, and creates poor UX on mobile. Already partially addressed by the accessible mega-menu fix in Sprint 1 — this is the cleanup.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #11)

---

### P3-23. Add aria-live Region for Modal Success/Error State
- **Severity**: High (Accessibility)
- **Owner**: Frontend Dev
- **Effort**: S
- **Why Sprint 3**: The modal submit changes button text to "Sending..." with no ARIA live announcement. Screen readers don't know the state changed. Also: server errors must be surfaced before redirecting to /thank-you.
- **Fix Reference**: QA-DEV-2-FRONTEND.md (Issue #12)

---

### P3-24. Centralize JSON-LD in Schema Registry (schema.php)
- **Severity**: Medium (Architecture — Refactor)
- **Owner**: Backend Dev
- **Effort**: M
- **Why Sprint 3**: Building on the Sprint 1 duplicate JSON-LD fix, centralizing all schema emission in a single includes/schema.php registry is the architectural end-state. Makes schema changes a single-file edit.
- **Fix Reference**: SR-DEV-1-PHP-ARCHITECTURE.md (Recommended Refactor R1)

---

## Duplicate / Cross-Report Issues

| Issue | Reports That Flagged It | Times Reported |
|---|---|---|
| No CSRF protection on forms | QA-DEV-1, SR-DEV-2 | 2 |
| SSL verify_peer=false in SMTP | QA-DEV-1, QA-DEV-3, SR-DEV-2, SR-DEV-6 | 4 |
| PII via GET parameters / form method="get" | QA-DEV-1, SR-DEV-2, SR-DEV-5 | 3 |
| logs/ directory not blocked from web access | QA-DEV-1, QA-DEV-3, SR-DEV-6 | 3 |
| Admin panel no rate limiting / IP restriction | QA-DEV-1, SR-DEV-2, QA-DEV-3 | 3 |
| Select2 CSS loaded twice | QA-DEV-2, SR-DEV-1 | 2 |
| style-01 + mibooz-responsive loaded twice | SR-DEV-1, QA-DEV-2 | 2 |
| jQuery render-blocking in head | QA-DEV-2, SR-DEV-3 | 2 |
| custom-fixes.css monolith bloat | QA-DEV-2, SR-DEV-3 | 2 |
| 22+ JS files loaded globally | QA-DEV-2, SR-DEV-3 | 2 |
| 23 CSS files loaded on every page | QA-DEV-2, SR-DEV-3 | 2 |
| Brand colour inconsistency #dd0429 vs #d31923 | QA-DEV-2, SR-DEV-3 | 2 |
| Empty alt="" on content images (794+ instances) | QA-DEV-2, SR-DEV-5 | 2 |
| Form labels missing (placeholder only) | QA-DEV-2, SR-DEV-5 | 2 |
| Floating contact widget no accessible label | QA-DEV-2, SR-DEV-5 | 2 |
| PHPMailer phantom composer.json dependency | QA-DEV-3, SR-DEV-6 | 2 |
| submit-calculator.php not in robots.txt | QA-DEV-3, SR-DEV-6 | 2 |
| Sitemap missing lastmod / duplicate slugs | QA-DEV-3, SR-DEV-6 | 2 |
| CSP unsafe-inline / unsafe-eval | QA-DEV-1, QA-DEV-3, SR-DEV-2 | 3 |

**Total merges**: 19 cross-report duplicates collapsed into single issues

---

## Risk Register

| Risk | Likelihood | Impact | Mitigation |
|---|---|---|---|
| CSRF attack floods business email, forged leads submitted | High | High — spam, phishing, SMTP quota exhaustion | Sprint 1 Issue #1 — implement csrf.php immediately |
| SMTP credentials stolen via MITM on verify_peer=false connection | Medium | Critical — full email account compromise | Sprint 1 Issue #2 — enable SSL verification |
| Production SMTP failure causes silent lead loss for hours | High | High — direct revenue loss | Sprint 1 Issue #4 — check sendMail() return value + retry |
| PII log file accidentally exposed in staging/production | Medium | Critical — GDPR violation, legal liability | Sprint 1 Issue #7 — block logs/ in .htaccess immediately |
| Admin password brute-forced (sleep(2) insufficient) | Medium | High — SMTP send capability compromised | Sprint 1 Issue #8 — session lockout + IP restriction |
| SEO rankings suppressed by duplicate JSON-LD schemas | High (already occurring) | High — revenue impact on all service pages | Sprint 1 Issue #15 — remove duplicate schemas |
| Keyboard-only users cannot access Services/Solutions navigation | High | High — 7% of users excluded from primary conversion paths | Sprint 1 Issue #18 — accessible mega-menu |
| WCAG non-compliance triggers legal complaint (ADA, AODA, EAA) | Medium | High — legal liability, reputational damage | Sprint 1 Issues #18–20, Sprint 2 Issues #8–#14 |
| Marketing spend wasted: LCP penalty reduces Google Ads Quality Score | High (active) | High — higher CPC, lower conversion | Sprint 2 Issues #1–#6 |
| SMTP_LOCAL_DEV spoofed on production — emails silently drop | Low | High — all leads lost without notice | Sprint 2 Issue #17 |
| CSS deployment causes stale styles for 30 days (immutable cache) | Medium | Medium — UI broken for returning visitors after updates | Sprint 3 Issue #9 |
| Developer accidentally commits real SMTP password | Medium | Critical — full email compromise | Sprint 2 Issue #18 — implement .env |
| JavaScript report (SR-DEV-4) pending — unknown JS security/quality issues | Unknown | Unknown | Follow up as soon as SR-DEV-4 is available |

---

## Definition of Done

### Sprint 1 Closes When:
- [ ] All public forms return 403 on missing/invalid CSRF token
- [ ] SSL verify_peer=true confirmed working on Hostinger (test SMTP send after deploy)
- [ ] No form uses method="get" — confirmed by grep across all .php files
- [ ] sendMail() return value checked in both handlers; failed send redirects to error page
- [ ] logs/ directory returns 403 from browser on production URL
- [ ] Admin panel login locks out after 5 failed attempts (test manually)
- [ ] Admin panel blocked at .htaccess level by IP (verify from non-whitelisted IP)
- [ ] Reply-To and Subject headers confirmed CRLF-free (unit test with injected \r\n)
- [ ] No double-301 on /fintness-mobile-app-development (confirm via curl -I)
- [ ] JSON-LD passes Google Rich Results Test with zero duplicate-schema errors
- [ ] `<meta charset="UTF-8">` present as first element in every page's `<head>`
- [ ] Duplicate CSS link tags removed from header.php (verify 0 duplicate requests in DevTools)
- [ ] Mega-menu operable by Tab, Enter, Escape keyboard — confirmed with screen reader
- [ ] Lead modal has focus trap (Tab cycles inside modal only) — confirmed
- [ ] All form inputs have associated `<label>` elements — axe-core scan reports 0 violations

### Sprint 2 Closes When:
- [ ] Lighthouse Performance score improves by >= 15 points on mobile
- [ ] LCP measurement < 3.0s on mobile (measured via PageSpeed Insights)
- [ ] 0 render-blocking JS resources in head (jQuery moved or deferred)
- [ ] Total page CSS request count <= 10 on homepage
- [ ] Font Awesome subset confirmed: only solid + brands icons present
- [ ] 0 empty alt="" on non-decorative images (axe-core scan passes 1.1.1)
- [ ] Placeholder contrast passes WCAG AA (4.5:1 minimum — verify in DevTools)
- [ ] Text selection re-enabled on all pages (onmousedown removed)
- [ ] Arrow key navigation functional in contact page multi-select
- [ ] Floating call/email links announced correctly by VoiceOver and NVDA
- [ ] Rate limiter tested: 6th submission within 60 seconds returns 429
- [ ] SMTP_LOCAL_DEV tested: Host: localhost header on production returns email send (not log write)
- [ ] WCAG 2.1 AA compliance score >= 85% (axe-core automated scan)

### Sprint 3 Closes When:
- [ ] unsafe-eval removed from CSP; no JS errors in console after removal
- [ ] custom-fixes.css !important count reduced by >= 50%
- [ ] footer.php split into partials; no single template file exceeds 400 lines
- [ ] Page variable contract validator active in dev mode; $page_canonical validated
- [ ] GitHub Actions deploy workflow runs successfully on push to main
- [ ] No immutable Cache-Control on CSS/JS without cache-busting filenames
- [ ] ETags disabled; confirm with `curl -I` showing no ETag header
- [ ] sitemap.xml has lastmod on all entries; redirect-only slugs removed
- [ ] Dedicated 404.php and 500.php in place; test with curl for correct status codes
- [ ] SPF/DKIM/DMARC all verified green in MXToolbox
- [ ] SR-DEV-4-JAVASCRIPT.md reviewed and any resulting issues triaged into backlog

---

## PM Notes & Recommendations

### 1. Security Must Gate All Other Work
The CSRF, SSL, and GET-based form issues are not cosmetic. The site is currently processing form submissions with no forgery protection and no SMTP encryption validation. Before any paid traffic is sent to this site (Google Ads, LinkedIn, etc.), Sprint 1 must be fully closed. No exceptions.

### 2. SR-DEV-4-JAVASCRIPT.md Is Pending
The JavaScript architecture report was not available at consolidation time. Given that the site loads 22 vendor JS files globally and has inline event handlers across 50+ pages, this report is likely to surface additional issues. Reserve 2–3 story points of capacity in Sprint 3 backlog to absorb any Critical/High items from that report.

### 3. Team Structure Recommendation
Based on the issue distribution, the optimal team for this remediation is:
- **1 Backend Developer** — full Sprint 1 + backend items in Sprint 2 and 3 (security, PHP architecture, SMTP, config)
- **1 Frontend Developer** — accessibility items in Sprint 1 + all of Sprint 2 performance and accessibility work
- **1 DevOps Engineer (part-time, ~40% allocation)** — Sprint 1 robots.txt/htaccess, Sprint 3 CI/CD and DNS setup

A solo developer executing all three streams should plan for 5–6 weeks (Sprints are estimates, not fixed containers).

### 4. Accessibility Has Legal Risk — Prioritize Visibility
The WCAG compliance score of ~52% is below the threshold where legal exposure is manageable. In the US (ADA), EU (European Accessibility Act effective June 2025), and Canada (AODA), a non-compliant website from a B2B services company is actionable. The lead modal, mega-menu, and form label issues in Sprint 1 cover the most egregious failures and are the correct first priority.

### 5. Performance and SEO Are Revenue Issues
The estimated 0.8–1.4 second LCP penalty from CSS architecture affects Google's Core Web Vitals score, which directly influences organic ranking and Google Ads Quality Score (and therefore CPC). The duplicate JSON-LD issue is actively suppressing schema-rich results in SERP. These are current-quarter revenue impacts, not long-term technical debt.

### 6. CSS Architecture is Multi-Sprint Work
The full CSS refactor (SR-DEV-3) is a Sprint 4–6 initiative — the modular folder structure, @layer cascade control, and PurgeCSS pipeline represent approximately 60–80 hours of frontend work. Sprint 3 addresses the worst acute issues (nuclear col-lg override, duplicate centering block, immutable cache). Do not underestimate the effort of the full CSS refactor and do not rush it — an incomplete refactor leaves the codebase worse than before.

### 7. Email Deliverability is an Overlooked Risk
SPF, DKIM, and DMARC configuration (Sprint 3 Issue #21) is not glamorous work, but an unconfigured DMARC record means anyone can send phishing emails that appear to come from info@artisticwebservices.com. This is a brand trust and client relationship risk, not just a technical issue.

### 8. Build Process Investment
The site currently has no build pipeline — CSS is concatenated manually, JS is served from individual vendor files, and deployment is via manual FTP. The GitHub Actions workflow (Sprint 3) is the foundation, but a longer-term investment in a CSS build step (PostCSS + PurgeCSS) and JS bundling (Vite or similar) would reduce the total CSS payload by an estimated 40–60% and give the team cache-busting filenames for safe immutable caching. Budget this as a Sprint 4–5 initiative.

---

*This report is the single source of truth for all engineering work on artasticwebservices.com.*
*Generated: April 2026 | Based on: QA-DEV-1, QA-DEV-2, QA-DEV-3, SR-DEV-1, SR-DEV-2, SR-DEV-3, SR-DEV-5, SR-DEV-6*
*SR-DEV-4-JAVASCRIPT.md: PENDING — triage results into Sprint 3 backlog when available*
