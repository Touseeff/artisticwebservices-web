# FINAL PRODUCTION READINESS REPORT
## Artastic Web Services — artasticwebservices.com
**PM Sign-off**: Project Manager (Final Review)
**Date**: April 2026
**Reports Reviewed**: PM-REPORT.md + SEO-REPORT.md + prompt.md + SR-DEV-4-JAVASCRIPT.md (late addition)
**Total Agents in Pipeline**: 11 (6 SR Devs + 3 QA Devs + PM + SEO Specialist)

---

## PRODUCTION GO / NO-GO DECISION

> **VERDICT**: NO-GO
> **Reason**: The site has zero CSRF protection on all public forms, SSL certificate verification disabled on SMTP, PII transmitted via GET parameters (active GDPR violation), a fully non-functional app cost calculator (missing `validateForm()` and all 6 Swiper initialisations), duplicate JSON-LD suppressing rich results, a fake captcha providing zero bot protection, and an admin panel with no rate limiting or IP restriction — any one of these alone would block paid traffic; all seven exist simultaneously.

---

## SITE HEALTH DASHBOARD

| Metric | Current | Target | Status |
|---|---|---|---|
| SEO Health Score | 54/100 | 90/100 | FAIL |
| WCAG Accessibility | 52% | 92% | FAIL |
| Security (OWASP) | Multiple Critical Fails | Pass | FAIL |
| PageSpeed Mobile | ~30–40 (estimated) | 90+ | FAIL |
| PageSpeed Desktop | ~55–65 (estimated) | 95+ | FAIL |
| Forms Functional | Partial (calculator fully broken) | 100% | FAIL |
| GDPR Compliance | FAIL — PII in GET params | Pass | FAIL |
| Email Deliverability | Unknown — SPF/DKIM/DMARC unverified | Pass | UNVERIFIED |

---

## BLOCKER ISSUES (Must fix before go-live / paid traffic)

### BLOCKER #1 — Zero CSRF Protection on All Forms
- **Source**: PM-REPORT (Issue #1), SR-DEV-2, QA-DEV-1
- **Risk if live**: Any authenticated browser can be weaponised to forge lead submissions; spam-flooding exhausts Hostinger SMTP quota; fake inquiry data poisons the CRM pipeline
- **Fix**: Create `includes/csrf.php` with `csrf_token()`, `csrf_verify()`, `csrf_field()`; add tokens to all three form endpoints and the modal fetch() POST
- **Effort**: M
- **Sprint**: 1

### BLOCKER #2 — SSL Certificate Verification Disabled on SMTP
- **Source**: PM-REPORT (Issue #2), QA-DEV-1, QA-DEV-3, SR-DEV-2, SR-DEV-6
- **Risk if live**: SMTP password transmitted in base64 over an unverified TLS connection; any network-level attacker on shared hosting can intercept credentials and gain full email account access
- **Fix**: Enable `verify_peer => true` in `includes/mailer.php`; detect CA bundle path; remove three disabling flags
- **Effort**: S
- **Sprint**: 1

### BLOCKER #3 — PII Transmitted via GET Parameters (GDPR Violation)
- **Source**: PM-REPORT (Issue #3), QA-DEV-1, SR-DEV-2, SR-DEV-5
- **Risk if live**: Full names, emails, and phone numbers appear in Apache access logs, browser history, referrer headers, and CDN logs on every form submission — active GDPR/CCPA violation with legal liability
- **Fix**: Change `form-quote.php` to `method="POST"`; update `submit-calculator.php` to use `$_POST`; remove GET fallback from `contact-form.php`
- **Effort**: S
- **Sprint**: 1

### BLOCKER #4 — App Cost Calculator Completely Non-Functional
- **Source**: SR-DEV-4-JAVASCRIPT.md (Issue #1), prompt.md (Priority 1-C)
- **Risk if live**: The calculator is the highest-intent conversion tool on the site. `validateForm()` is referenced by `onsubmit` but never defined anywhere in the codebase — the form throws a `ReferenceError` and cannot submit. All 6 Swiper instances (Platform, Features, Design, Signup, Screen, Functionality) are declared in HTML but never initialised — all six sliders are dead static containers. Running paid traffic to the calculator page delivers zero leads.
- **Fix**: Write `validateForm()` and initialise all 6 Swiper instances in a conditional `calculator.js` file loaded only on `app-cost-calculator.php`
- **Effort**: M
- **Sprint**: 1

### BLOCKER #5 — Silent SMTP Failure Loses Leads Permanently
- **Source**: PM-REPORT (Issue #4), SR-DEV-6
- **Risk if live**: Both form handlers ignore the return value of `sendMail()`. Every SMTP failure (transient or permanent) silently redirects users to the thank-you page while the business receives nothing. With no retry and no queue, every failed send is an unrecoverable lost lead.
- **Fix**: Check `sendMail()` return value; redirect to error state on failure; add 2-attempt retry loop; queue failed payloads to `logs/mail-failed.log`
- **Effort**: S
- **Sprint**: 1

### BLOCKER #6 — logs/ Directory Publicly Accessible
- **Source**: PM-REPORT (Issue #7), QA-DEV-1, QA-DEV-3, SR-DEV-6
- **Risk if live**: If `SMTP_LOCAL_DEV` is ever `true` on the live server (achievable via HTTP_HOST spoofing — see Blocker #7), all submitted PII is written to a publicly downloadable log file. Even defensively, an open logs/ directory is an immediate exposure gap.
- **Fix**: Add `RewriteRule ^logs/.*$ - [F,L]` to `.htaccess`; add `Disallow: /logs/` to `robots.txt`
- **Effort**: XS
- **Sprint**: 1

### BLOCKER #7 — Admin Panel: No Lockout, Predictable Token, No IP Restriction
- **Source**: PM-REPORT (Issues #8, #9, #10), QA-DEV-1, SR-DEV-2, QA-DEV-3
- **Risk if live**: The admin panel at a guessable URL has no failed-attempt lockout (`sleep(2)` is bypassed by parallel threads), uses a date-derived session token that is deterministic across a 24-hour window, and is fully accessible from any IP. A compromised admin panel gives an attacker SMTP send capability and credential exposure.
- **Fix**: Add session-based lockout counter (5 attempts, 15-min lockout); replace date-based token with `bin2hex(random_bytes(32))`; add `<Files>` IP restriction in `.htaccess`
- **Effort**: M
- **Sprint**: 1

### BLOCKER #8 — Email Header Injection via Reply-To and Subject Fields
- **Source**: PM-REPORT (Issue #11), QA-DEV-1
- **Risk if live**: An attacker can inject a `Bcc:` header into outgoing emails, enabling silent spam relay through the company's SMTP account — leading to domain blacklisting and SMTP quota exhaustion
- **Fix**: Strip `\r` and `\n` from `$replyTo` and `$subject` in `sendMail()` before header construction
- **Effort**: S
- **Sprint**: 1

### BLOCKER #9 — Open Redirect via HTTP_HOST + XSS in thank-you.php
- **Source**: PM-REPORT (Issues #12, #27), QA-DEV-1
- **Risk if live**: `HTTP_HOST` is user-controlled; `SITE_BASE` is constructed from it without allowlist validation, enabling phishing redirects to `evil.com`. `thank-you.php` outputs unescaped `$B` (the HTTP_HOST value), creating a reflected XSS vector.
- **Fix**: Add `$allowed_hosts` allowlist in `includes/config.php`; add `htmlspecialchars()` to `$B` in `thank-you.php`
- **Effort**: S
- **Sprint**: 1

### BLOCKER #10 — Duplicate JSON-LD Actively Suppressing Rich Results
- **Source**: PM-REPORT (Issue #5), SEO-REPORT (CRITICAL-1), SR-DEV-1
- **Risk if live**: Google's Rich Results Test suppresses both instances when duplicate schema types are detected. BreadcrumbList and Service schemas are emitted twice per page (head.php + footer.php). All service and solution pages are currently ineligible for breadcrumb and service rich results — estimated 15–25% CTR loss in SERPs.
- **Fix**: Remove auto-generated BreadcrumbList + Service blocks from `footer.php` lines 1085–1140; keep head.php page-variable-driven blocks as the canonical source
- **Effort**: S
- **Sprint**: 1

### BLOCKER #11 — Soft 404 Returns HTTP 200 with Homepage Body
- **Source**: SEO-REPORT (CRITICAL-2), prompt.md (Priority 3-A), PM-REPORT (L-27)
- **Risk if live**: Google cannot discover broken internal links; at scale, Googlebot being served the homepage for every non-existent URL is treated as deceptive and can trigger de-indexing of entire URL clusters. Search Console 404 monitoring is completely blinded.
- **Fix**: Create `404.php` returning correct `header("HTTP/1.1 404 Not Found")` status; update `.htaccess` `ErrorDocument 404 /404.php`
- **Effort**: S
- **Sprint**: 1

### BLOCKER #12 — Invalid Hreflang: All 7 Regions Point to Identical URL
- **Source**: SEO-REPORT (CRITICAL-4), prompt.md (Priority 3-A)
- **Risk if live**: Google may suppress all hreflang signals sitewide. Same-URL hreflang for 7 different regions signals tag abuse. In the worst case, a quality signal downgrade affects all pages. This is an active, ongoing ranking suppressor.
- **Fix**: Remove all hreflang tags except `x-default` immediately (30-minute fix); implement true regional variants only when geo-specific content exists
- **Effort**: XS
- **Sprint**: 1

### BLOCKER #13 — Hardcoded AggregateRating on Organization Schema (Fake Review Risk)
- **Source**: SEO-REPORT (MEDIUM-2), prompt.md (Priority 5-B)
- **Risk if live**: Google's structured data policy prohibits hardcoded `AggregateRating` on Organization schema unless the review data is visible on the page via an independently verifiable widget. The hardcoded `4.9 / 300 reviews` with no visible review source is grounds for a structured data manual action, which can suppress the entire domain from rich results.
- **Fix**: Remove `aggregateRating` block from Organization schema until a visible Clutch or Google Reviews widget is implemented
- **Effort**: XS
- **Sprint**: 1

### BLOCKER #14 — Invalid SearchAction in WebPage Schema
- **Source**: SEO-REPORT (HIGH-10)
- **Risk if live**: The `potentialAction` SearchAction points to `/?s={search_term_string}` — the site has no search functionality; this URL returns the homepage for any query. Google discovering a SearchAction endpoint that returns no results is grounds for a structured data manual action.
- **Fix**: Remove the `potentialAction` block from the WebPage schema in `includes/head.php`
- **Effort**: XS
- **Sprint**: 1

### BLOCKER #15 — OG Image URL Contains Raw Space (Social Sharing Broken)
- **Source**: SEO-REPORT (MEDIUM-3), PM-REPORT (not present — new)
- **Risk if live**: `artisticwebservice w.png` with a literal space in the URL causes social sharing image rendering to fail on Facebook, LinkedIn, and Twitter. Every shared link for the homepage and service pages shows no preview image — direct conversion damage for any social traffic campaign.
- **Fix**: Rename file to `artisticwebservices-logo.png` (no space); update all references in `config.php` / `head.php` / individual pages
- **Effort**: XS
- **Sprint**: 1

---

## SEO ISSUES NOT IN PM REPORT (New from SEO Audit)

These findings from SEO-REPORT.md have no equivalent issue in PM-REPORT.md and must be added to the sprint plan:

| Issue | Severity | Sprint | Effort |
|---|---|---|---|
| SEO-1: Soft 404 — `ErrorDocument 404 /index.php` returns HTTP 200 | Critical | 1 | S |
| SEO-2: Invalid hreflang — all 7 regions point to identical URL (active ranking suppressor) | Critical | 1 | XS |
| SEO-3: Hardcoded AggregateRating on Organization schema (manual action risk) | Critical | 1 | XS |
| SEO-4: Invalid SearchAction in WebPage schema (non-functional search endpoint) | High | 1 | XS |
| SEO-5: OG image URL contains raw space — social sharing broken across all platforms | High | 1 | XS |
| SEO-6: Robots.txt Googlebot `Allow: /` overrides all Disallow rules (logic error) | High | 1 | XS |
| SEO-7: Breadcrumb schema URLs contain `.php` extension — contradicts extensionless canonical | High | 2 | M |
| SEO-8: Footer navigation links use `.php` extension — unnecessary 301 hops on all internal links | High | 2 | S |
| SEO-9: Home page title tag ~74 chars (SERP truncation) | High | 2 | XS |
| SEO-10: Consulting page title tag ~83 chars + meta description ~189 chars (both truncated in SERPs) | High | 2 | XS |
| SEO-11: Service page title ~79 chars (SERP truncation) | High | 2 | XS |
| SEO-12: Duplicate ecommerce service URLs in sitemap (`ecommerce-app-development` vs `ecommerce-app-development-company`) | High | 2 | S |
| SEO-13: Duplicate social networking URLs in sitemap (`social-networking-app` vs `social-networking-solution`) | High | 2 | S |
| SEO-14: Consulting page H1 is single word "Consulting" — no keyword value | Medium | 2 | XS |
| SEO-15: 30+ individual insights/case study pages missing from sitemap.xml | Medium | 2 | S |
| SEO-16: All 9 geo-targeting pages are pure 301 redirect stubs — zero indexed geo content | Medium | 3 | L (per city) |
| SEO-17: Service schema `areaServed` limited to US only — contradicts multi-region marketing | Medium | 3 | S |
| SEO-18: Consulting breadcrumb parent URL points to `/solutions/industries.php` not `/solutions` | Medium | 2 | XS |
| SEO-19: `og:type` hardcoded as `"website"` on article/insights pages (should be `"article"`) | Medium | 2 | XS |
| SEO-20: Article schema `dateModified` hardcoded to "2026-04-03" for all articles — inaccurate | Medium | 2 | S |
| SEO-21: `<meta name="title">` duplicates `<title>` tag on all pages — unnecessary HTTP weight | Low | 3 | XS |
| SEO-22: FAQ answers under 100 words — thin for rich result competition | Low | 3 | M |
| SEO-23: No visible HTML breadcrumb trail on service/solution pages (only schema) | Low | 3 | M |
| SEO-24: "See More" generic anchor text in case study sections — not keyword-descriptive | Low | 3 | S |
| SEO-25: `font-display: swap` missing on self-hosted custom font (FOIT during load) | Low | 2 | XS |

---

## CONFLICTS BETWEEN AGENT RECOMMENDATIONS

The following areas had conflicting or divergent recommendations across agents. Resolution is noted:

| Conflict | Agents | Resolution |
|---|---|---|
| Duplicate JSON-LD source of truth: prompt.md says keep footer.php; SEO-REPORT + SR-DEV-1 say keep head.php (page-variable-driven) | prompt.md vs SEO-REPORT + SR-DEV-1 | **Use head.php as canonical source.** The head.php blocks use real page variables (`$page_breadcrumbs`, `$page_service_schema`) and produce richer, more accurate schema. The footer.php auto-generator is a blunt URL-path heuristic that also mis-classifies non-service pages like `/about-us` as Service schema emitters (SEO-REPORT MEDIUM-9). |
| AggregateRating: prompt.md says "Add Review/AggregateRating schema (even placeholder — improves rich results)"; SEO-REPORT says the hardcoded value is a manual action risk | prompt.md vs SEO-REPORT | **Follow SEO-REPORT guidance: REMOVE the hardcoded rating.** Google's structured data policy is explicit and unambiguous. A manual action would suppress the domain from rich results entirely, far outweighing any CTR benefit from displaying a fake rating. |
| Rate limiting: PM-REPORT assigns to Sprint 2; prompt.md includes in Sprint 1 | PM-REPORT vs prompt.md | **Move rate limiting to Sprint 1.** When running paid traffic, CSRF + rate limiting must be deployed together. CSRF alone does not prevent bot flooding from a single origin. Sprint 1 is already the security hardening sprint; rate limiting belongs there. |
| `.env` implementation: PM-REPORT assigns to Sprint 2; prompt.md includes in Sprint 1 | PM-REPORT vs prompt.md | **Move .env to Sprint 1.** Credential separation must precede CI/CD setup and is a prerequisite for the GitHub Actions workflow. The risk of a developer accidentally committing real credentials is active from day one of development work. |
| Carousel consolidation: SR-DEV-4 confirms Slick is used on 5 pages; SR-DEV-3 treats all non-Swiper libraries as candidates for immediate removal | SR-DEV-3 vs SR-DEV-4 | **Follow SR-DEV-4 (more detailed usage map).** Slick must be migrated before removal, not simply deleted. Owl has 5 active initialisations in mibooz.js — migrate before remove. TinySlider and bxSlider are confirmed unused and can be removed immediately. |

---

## COMPLETE FINAL ISSUE LIST (All Unique Issues, Both Reports)

**Legend**: Issues #1–#63 from PM-REPORT | Issues #S1–#S25 from SEO-REPORT (new) | Issues #J1 from SR-DEV-4 (previously pending)

| # | Issue | Domain | Severity | Sprint | Owner | Effort |
|---|---|---|---|---|---|---|
| 1 | No CSRF protection on any form | Security | Critical | 1 | Backend Dev | M |
| 2 | SSL certificate verification disabled in SMTP | Security | Critical | 1 | Backend Dev | S |
| 3 | PII transmitted via GET parameters | Security | Critical | 1 | Backend Dev | S |
| 4 | Silent SMTP failure — user sees thank-you, lead is lost | DevOps | Critical | 1 | Backend Dev | S |
| 5 | Duplicate JSON-LD structured data (BreadcrumbList + Service emitted twice) | Architecture | Critical | 1 | Backend Dev | S |
| 6 | Missing `<meta charset="UTF-8">` on every page | Frontend | Critical | 1 | Frontend Dev | XS |
| 7 | logs/ directory has no web-access block | Security | Critical | 1 | Backend Dev | XS |
| 8 | Admin panel: no rate limiting or lockout | Security | High | 1 | Backend Dev | M |
| 9 | Admin panel: date-derived session token (predictable) | Security | High | 1 | Backend Dev | S |
| 10 | Admin panel: publicly accessible, no IP restriction | Security | High | 1 | Backend Dev | S |
| 11 | Email header injection via reply_to and subject fields | Security | High | 1 | Backend Dev | S |
| 12 | Open redirect via HTTP_HOST in SITE_BASE / thank-you.php XSS | Security | High | 1 | Backend Dev | S |
| 13 | Mega-menu not keyboard navigable (hover-only) | Accessibility | Critical | 1 | Frontend Dev | M |
| 14 | Lead modal: no focus trap, no aria-modal, no return focus | Accessibility | Critical | 1 | Frontend Dev | M |
| 15 | All form inputs have no label elements (WCAG 3.3.2) | Accessibility | Critical | 1 | Frontend Dev | M |
| 16 | No SMTP retry logic — transient failure permanently loses lead | DevOps | High | 1 | Backend Dev | M |
| 17 | PHPMailer declared in composer.json but not installed or used | Architecture | High | 1 | Backend Dev | XS |
| 18 | Broken double-301 redirect chain (fintness typo slug) | Architecture | Critical | 1 | Backend Dev | XS |
| 19 | No production error logging — failed payloads disappear silently | DevOps | High | 1 | Backend Dev | S |
| 20 | submit-calculator.php and mailer-admin not blocked in robots.txt | DevOps | High | 1 | DevOps | XS |
| 21 | No rate limiting on form submission endpoints | Security | High | 1 | Backend Dev | M |
| 22 | SMTP_LOCAL_DEV spoofable via HTTP_HOST header | Security | Medium | 2 | Backend Dev | S |
| 23 | No input length limits server-side | Security | Medium | 2 | Backend Dev | S |
| 24 | Hardcoded captcha value=14 — zero bot protection | Security | Medium | 1 | Backend Dev | M |
| 25 | SMTP credentials in tracked PHP file — no .env separation | Security | High | 1 | Backend Dev | M |
| 26 | Missing session_start() in form handlers | Security | Medium | 1 | Backend Dev | XS |
| 27 | thank-you.php outputs unescaped $B (XSS vector) | Security | Medium | 1 | Backend Dev | XS |
| 28 | CSP contains 'unsafe-inline' and 'unsafe-eval' | Security | Medium | 3 | DevOps/Backend | L |
| 29 | jQuery loaded synchronously in head — render-blocking | Performance | Critical | 2 | Frontend Dev | M |
| 30 | 23 CSS stylesheets loaded on every page (~825KB) | Performance | High | 2 | Frontend Dev | L |
| 31 | 22 JavaScript files loaded globally regardless of page need | Performance | High | 2 | Frontend Dev | L |
| 32 | Select2 CSS loaded twice (head.php + header.php) | Performance | Critical | 1 | Frontend Dev | XS |
| 33 | 3 CSS stylesheets loaded twice per page | Performance | High | 1 | Frontend Dev | XS |
| 34 | custom-fixes.css — 3,834 lines, 772 !important, 83% auto-generated | Performance | High | 3 | Frontend Dev | XL |
| 35 | No critical CSS inlining — all CSS files render-blocking on first paint | Performance | Critical | 2 | Frontend Dev | M |
| 36 | Font Awesome full bundle (102KB) for ~20 icons used | Performance | High | 2 | Frontend Dev | M |
| 37 | 5 carousel/slider libraries loaded simultaneously | Performance | Medium | 2 | Frontend Dev | L |
| 38 | Swiper v5.4.5 and libraries severely outdated (Owl unmaintained since 2018) | Performance | High | 2 | Frontend Dev | L |
| 39 | bxSlider loaded globally, never initialised (confirmed by SR-DEV-4) | Performance | Low | 2 | Frontend Dev | XS |
| 40 | 794+ empty alt="" attributes on non-decorative images | Accessibility | Critical | 2 | Frontend Dev | L |
| 41 | onmousedown/onselectstart disables right-click globally on 53+ pages | Accessibility | High | 2 | Frontend Dev | S |
| 42 | Error messages not programmatically associated with form fields | Accessibility | High | 2 | Frontend Dev | S |
| 43 | Custom multi-select widget has no keyboard arrow navigation | Accessibility | High | 2 | Frontend Dev | M |
| 44 | Floating call/email widget has no accessible label | Accessibility | High | 2 | Frontend Dev | XS |
| 45 | Placeholder contrast fails WCAG 1.4.3 (2.3:1, need 4.5:1) | Accessibility | Medium | 2 | Frontend Dev | XS |
| 46 | rgba(255,255,255,0.65) text on red backgrounds fails contrast | Accessibility | Medium | 2 | Frontend Dev | XS |
| 47 | Hero video: no prefers-reduced-motion guard, no caption track | Accessibility | Medium | 2 | Frontend Dev | S |
| 48 | href="javascript:void(0)" on navigation dropdown anchors | Accessibility | High | 3 | Frontend Dev | S |
| 50 | footer.php is 1,364-line unmaintainable monolith | Architecture | Medium | 3 | Backend Dev | L |
| 51 | No page variable contract — silent SEO failures on missing $page_canonical | Architecture | High | 3 | Backend Dev | M |
| 52 | include instead of require_once for form-quote.php (28 pages) | Architecture | High | 3 | Backend Dev | S |
| 53 | Relative require_once paths in index.php (CWD-dependent) | Architecture | Medium | 3 | Backend Dev | XS |
| 54 | No output buffering — header-already-sent risk | Architecture | Medium | 3 | Backend Dev | XS |
| 55 | UTF-8 BOM in mobile-app-development.php breaks doctype detection | Architecture | Medium | 2 | Backend Dev | XS |
| 56 | Dual mobile navigation systems — Bootstrap nav + legacy dead nav | Frontend | Medium | 3 | Frontend Dev | M |
| 57 | CSS nuclear override [class*="col-lg-"] forces all columns full-width at 991px | Performance | Medium | 3 | Frontend Dev | M |
| 58 | Hardcoded brand colour inconsistency (3 red values, 78+ occurrences) | Frontend | Medium | 3 | Frontend Dev | M |
| 59 | CSS file naming contains @ and = characters — CDN/WAF risk | DevOps | Medium | 3 | DevOps | S |
| 60 | Cache-Control immutable without content-hash filenames | DevOps | Medium | 3 | DevOps | M |
| 61 | ETags not disabled — cache invalidation conflicts on shared hosting | DevOps | Medium | 3 | DevOps | XS |
| 62 | Gzip compression missing key MIME types | DevOps | Medium | 3 | DevOps | XS |
| 63 | Sitemap missing lastmod on all 60+ URLs, contains redirect-only slugs | DevOps | Medium | 1 | DevOps | S |
| J1 | App Cost Calculator: validateForm() undefined + 6 Swiper instances uninitialised | JavaScript | Critical | 1 | Frontend Dev | M |
| S1 | Soft 404 — all 404 errors return HTTP 200 with homepage body | SEO/Architecture | Critical | 1 | Backend Dev | S |
| S2 | Invalid hreflang — all 7 regions point to identical URL | SEO | Critical | 1 | Backend Dev | XS |
| S3 | Hardcoded AggregateRating on Organization schema (manual action risk) | SEO | Critical | 1 | Backend Dev | XS |
| S4 | Invalid SearchAction in WebPage schema (non-functional search) | SEO | High | 1 | Backend Dev | XS |
| S5 | OG image URL contains raw space — social sharing broken | SEO/Frontend | High | 1 | Frontend Dev | XS |
| S6 | Robots.txt Googlebot Allow:/ overrides all Disallow rules | SEO/DevOps | High | 1 | DevOps | XS |
| S7 | Breadcrumb schema URLs contain .php extension (canonical mismatch) | SEO | High | 2 | Backend Dev | M |
| S8 | Footer navigation links use .php extension (unnecessary 301 hops) | SEO | High | 2 | Frontend Dev | S |
| S9 | Home page title ~74 chars — SERP truncation | SEO | High | 2 | Content | XS |
| S10 | Consulting page title ~83 chars + description ~189 chars | SEO | High | 2 | Content | XS |
| S11 | Service page title ~79 chars — SERP truncation | SEO | High | 2 | Content | XS |
| S12 | Duplicate ecommerce service URLs in sitemap | SEO | High | 2 | DevOps | S |
| S13 | Duplicate social networking URLs in sitemap | SEO | High | 2 | DevOps | S |
| S14 | Consulting H1 is single word "Consulting" — no keyword value | SEO | Medium | 2 | Content | XS |
| S15 | 30+ individual insights/case study pages missing from sitemap | SEO | Medium | 2 | DevOps | S |
| S16 | All 9 geo-targeting pages are pure 301 redirect stubs — no content | SEO | Medium | 3 | Backend + Content | L |
| S17 | Service schema areaServed limited to US only (multi-region site) | SEO | Medium | 3 | Backend Dev | S |
| S18 | Consulting breadcrumb parent URL incorrect (points to industries.php) | SEO | Medium | 2 | Backend Dev | XS |
| S19 | og:type hardcoded as "website" on insights/article pages | SEO | Medium | 2 | Backend Dev | XS |
| S20 | Article schema dateModified hardcoded to "2026-04-03" for all articles | SEO | Medium | 2 | Backend Dev | S |
| S21 | `<meta name="title">` duplicates `<title>` tag sitewide | SEO | Low | 3 | Backend Dev | XS |
| S22 | FAQ answers under 100 words — thin for rich result competition | SEO | Low | 3 | Content | M |
| S23 | No visible HTML breadcrumb trail (only schema breadcrumbs) | SEO | Low | 3 | Frontend Dev | M |
| S24 | "See More" generic anchor text in case study sections | SEO | Low | 3 | Content | S |
| S25 | font-display: swap missing on self-hosted custom font (FOIT) | SEO/Performance | Low | 2 | Frontend Dev | XS |

**Total unique issues: 88** (63 PM-REPORT + 1 SR-DEV-4 late addition + 24 new from SEO-REPORT)

---

## SPRINT PLAN (FINAL — Incorporating SEO Findings)

### Sprint 1 — Security, Broken Features & Critical SEO (Week 1)
**Goal**: Site safe to keep online + all forms working + no active ranking damage from structural errors
**Issues**: 29 | **Effort**: ~10–13 days

| # | Issue | Owner | Effort |
|---|---|---|---|
| #1 | CSRF protection on all forms | Backend Dev | M |
| #2 | SSL verify_peer enabled in mailer.php | Backend Dev | S |
| #3 | Switch all forms from GET to POST | Backend Dev | S |
| #4 | Fix silent SMTP failure (check sendMail return value) | Backend Dev | S |
| #5 | Remove duplicate JSON-LD from footer.php (keep head.php as source) | Backend Dev | S |
| #6 | Add `<meta charset="UTF-8">` as first element in head.php | Frontend Dev | XS |
| #7 | Block logs/ directory in .htaccess and robots.txt | Backend Dev | XS |
| #8 | Admin panel: session-based lockout (5 attempts, 15-min) | Backend Dev | M |
| #9 | Admin panel: replace date-based token with random_bytes token | Backend Dev | S |
| #10 | Admin panel: .htaccess IP restriction | Backend Dev | S |
| #11 | Strip CRLF from reply_to and subject (email header injection) | Backend Dev | S |
| #12 | Fix open redirect via HTTP_HOST + XSS in thank-you.php | Backend Dev | S |
| #16 | Add SMTP retry logic and failed-email queue | Backend Dev | M |
| #17 | Remove PHPMailer phantom dependency from composer.json | Backend Dev | XS |
| #18 | Fix broken double-301 redirect chain (fintness typo) | Backend Dev | XS |
| #19 | Add production error logging for failed payloads | Backend Dev | S |
| #20 | Block admin panel and calculator in robots.txt | DevOps | XS |
| #21 | Rate limiting on all form endpoints (5 req/60s per IP) | Backend Dev | M |
| #24 | Remove hardcoded captcha — implement honeypot + rate limiting | Backend Dev | M |
| #25 | Implement .env file for SMTP credentials | Backend Dev | M |
| #26 | Add session_start() to all form handlers | Backend Dev | XS |
| #27 | Fix unescaped $B output in thank-you.php | Backend Dev | XS |
| #32 | Remove duplicate Select2 CSS link from header.php | Frontend Dev | XS |
| #33 | Remove duplicate style-01 and mibooz-responsive CSS links | Frontend Dev | XS |
| #63 | Add lastmod to sitemap.xml; remove redirect-only slug entries | DevOps | S |
| #J1 | Write validateForm() + initialise 6 Swiper instances on calculator | Frontend Dev | M |
| #S1 | Fix soft 404 — create 404.php with correct HTTP 404 status | Backend Dev | S |
| #S2 | Remove all hreflang tags except x-default (or all) | Backend Dev | XS |
| #S3 | Remove hardcoded AggregateRating from Organization schema | Backend Dev | XS |
| #S4 | Remove invalid SearchAction from WebPage schema | Backend Dev | XS |
| #S5 | Fix OG image filename space (rename file + update all references) | Frontend Dev | XS |
| #S6 | Fix robots.txt Googlebot Allow:/ override logic | DevOps | XS |
| #13 | Accessible keyboard-navigable mega-menu | Frontend Dev | M |
| #14 | Accessible lead modal (focus trap + aria-modal + return focus) | Frontend Dev | M |
| #15 | Add label elements to all form inputs | Frontend Dev | M |

---

### Sprint 2 — Performance, Accessibility & High SEO (Week 2)
**Goal**: Fast, accessible, high-converting — ready for paid traffic
**Issues**: 30 | **Effort**: ~10–13 days

| # | Issue | Owner | Effort |
|---|---|---|---|
| #29 | Defer jQuery / eliminate render-blocking JS in head | Frontend Dev | M |
| #35 | Inline critical CSS / async-load non-critical vendor CSS | Frontend Dev | M |
| #31 | Conditional JavaScript loading per page | Frontend Dev | L |
| #30 | Reduce CSS stylesheet count (consolidate + remove duplicates) | Frontend Dev | L |
| #36 | Subset Font Awesome (102KB → ~15KB for ~20 icons) | Frontend Dev | M |
| #38 | Update / consolidate outdated carousel libraries (Swiper v11.x) | Frontend Dev | L |
| #37 | Consolidate 5 carousel libraries → Swiper only (remove TinySlider, bxSlider immediately) | Frontend Dev | L |
| #39 | Remove bxSlider (confirmed zero usages) | Frontend Dev | XS |
| #40 | Fix 794+ empty alt="" on content images | Frontend Dev | L |
| #41 | Remove global onmousedown/onselectstart | Frontend Dev | S |
| #42 | Add aria-describedby + role="alert" on form error messages | Frontend Dev | S |
| #43 | Keyboard arrow navigation in custom multi-select (contact page) | Frontend Dev | M |
| #44 | Add accessible labels to floating call/email widget | Frontend Dev | XS |
| #45 | Fix placeholder contrast (#bbb → #767676 minimum) | Frontend Dev | XS |
| #46 | Fix rgba(255,255,255,0.65) on red backgrounds | Frontend Dev | XS |
| #47 | Add prefers-reduced-motion guard + caption track to hero video | Frontend Dev | S |
| #22 | Fix SMTP_LOCAL_DEV detection (replace HTTP_HOST with env variable) | Backend Dev | S |
| #23 | Add server-side input length limits | Backend Dev | S |
| #55 | Fix UTF-8 BOM in service pages | Backend Dev | XS |
| #S7 | Fix breadcrumb schema URLs — remove .php extension from all pages | Backend Dev | M |
| #S8 | Strip .php from all footer navigation href attributes | Frontend Dev | S |
| #S9 | Shorten home page title to under 60 characters | Content | XS |
| #S10 | Shorten consulting page title + meta description | Content | XS |
| #S11 | Shorten service page titles to under 60 characters | Content | XS |
| #S12 | Resolve duplicate ecommerce service URLs in sitemap | DevOps | S |
| #S13 | Resolve duplicate social networking URLs in sitemap | DevOps | S |
| #S14 | Update consulting H1 to keyword-targeted copy | Content | XS |
| #S15 | Add 30+ insights/case study pages to sitemap.xml | DevOps | S |
| #S18 | Fix consulting breadcrumb parent URL | Backend Dev | XS |
| #S19 | Fix og:type to "article" on insights pages | Backend Dev | XS |
| #S20 | Fix Article schema dateModified to use actual file modification dates | Backend Dev | S |
| #S25 | Add font-display: swap to self-hosted custom font | Frontend Dev | XS |

---

### Sprint 3 — Architecture, DevOps & Content SEO (Week 3)
**Goal**: Maintainable, deployable, AI-search-ready, internationally relevant
**Issues**: 29 | **Effort**: ~13–17 days

| # | Issue | Owner | Effort |
|---|---|---|---|
| #28 | Fix weak CSP — remove unsafe-eval; plan nonce migration | Backend Dev + DevOps | L |
| #34 | Refactor custom-fixes.css — remove duplicates, stop auto-generating | Frontend Dev | XL |
| #50 | Refactor footer.php — split 1,364-line monolith into partials | Backend Dev | L |
| #51 | Implement page variable contract validator (dev mode) | Backend Dev | M |
| #52 | Change include → require_once for form-quote.php (28 pages) | Backend Dev | S |
| #53 | Fix relative require_once paths → __DIR__-anchored | Backend Dev | XS |
| #54 | Add output buffering to config.php | Backend Dev | XS |
| #56 | Remove dead dual mobile navigation system | Frontend Dev | M |
| #57 | Fix nuclear [class*="col-lg-"] Bootstrap grid override | Frontend Dev | M |
| #58 | Standardise brand colour — CSS variable system | Frontend Dev | M |
| #59 | Rename CSS files with @ characters | DevOps | S |
| #60 | Fix Cache-Control immutable without content-hash filenames | DevOps | M |
| #61 | Disable ETags (FileETag None) | DevOps | XS |
| #62 | Complete gzip MIME type coverage | DevOps | XS |
| #48 | Fix href="javascript:void(0)" on navigation dropdown triggers | Frontend Dev | S |
| P3-08 | Implement GitHub Actions CI/CD deploy workflow | DevOps | M |
| P3-21 | Verify and enable SPF / DKIM / DMARC DNS records | DevOps | M |
| P3-22 | Add aria-live region for modal success/error state | Frontend Dev | S |
| P3-24 | Centralise JSON-LD in schema registry (schema.php) | Backend Dev | M |
| #S16 | Build real geo-targeted content pages (5 priority cities: Dubai, New York, Houston, Karachi, Riyadh) | Backend + Content | L (per city) |
| #S17 | Expand Service schema areaServed to include Gulf countries | Backend Dev | S |
| #S21 | Remove redundant `<meta name="title">` tags sitewide | Backend Dev | XS |
| #S22 | Expand FAQ answers to 150–300 words (schema + visible HTML in sync) | Content | M |
| #S23 | Add visible HTML breadcrumb trail to service/solution pages | Frontend Dev | M |
| #S24 | Replace generic "See More" anchor text with descriptive copy | Content | S |

---

## QUICK WINS (Complete within 1 Hour Each, High ROI)

| Quick Win | Time | Impact | Who |
|---|---|---|---|
| Add `<meta charset="UTF-8">` as first element in head.php | 10 min | Encoding compliance; required HTML5; international snippet integrity | Backend Dev |
| Remove duplicate BreadcrumbList + Service from footer.php lines 1085–1140 | 15 min | Immediate restoration of rich result eligibility across all service pages | Backend Dev |
| Remove all hreflang tags except x-default | 10 min | Stops invalid multi-region signals that may be suppressing all hreflang sitewide | Backend Dev |
| Fix robots.txt `/.py$` → `/.py` (remove invalid regex anchor) | 5 min | Python file disallow rule now actually functions | DevOps |
| Add `/mailer-admin-aws7749`, `/logs/`, `/submit-calculator`, `/thank-you` to robots.txt | 10 min | Admin panel no longer indexable; PII log directory protected from crawlers | DevOps |
| Fix robots.txt Googlebot block (move Allow:/ to prevent Disallow override) | 15 min | Disallow rules now actually apply to Googlebot | DevOps |
| Remove redirect-only geo URLs from sitemap.xml (9 location page entries) | 20 min | Cleaner sitemap; crawl budget directed only at indexable pages | DevOps |
| Remove invalid SearchAction from WebPage schema in head.php | 10 min | Eliminates structured data violation risk; prevents potential manual action | Backend Dev |
| Remove hardcoded AggregateRating from Organization schema | 10 min | Eliminates fake review manual action risk immediately | Backend Dev |
| Fix OG image URL — rename `artisticwebservice w.png` to `artasticwebservices-logo.png` | 10 min | Social sharing images render correctly on Facebook, LinkedIn, Twitter for all pages | Frontend Dev |
| Fix consulting.php breadcrumb URL (remove .php, fix parent to /solutions) | 5 min | Schema canonical consistency on consulting page | Backend Dev |
| Add session_start() to form handlers (contact-form.php, submit-calculator.php) | 5 min | Prerequisite for CSRF implementation; currently blocking Sprint 1 item #1 | Backend Dev |
| Remove duplicate Select2 CSS link from header.php (3-line deletion) | 5 min | Eliminates invalid in-body `<link>` tag + extra network request per page | Frontend Dev |

---

## RISK REGISTER (Final)

| Risk | Likelihood | Business Impact | Mitigation | Owner |
|---|---|---|---|---|
| CSRF attack forges lead submissions / floods SMTP quota | High | High — spam, phishing, blacklist risk | Sprint 1 #1 — implement csrf.php immediately | Backend Dev |
| SMTP credentials stolen via MITM on verify_peer=false | Medium | Critical — full email account compromise | Sprint 1 #2 — enable SSL verification | Backend Dev |
| Calculator paid traffic delivers zero conversions (form broken) | Confirmed | Critical — wasted ad spend, zero leads from highest-intent page | Sprint 1 #J1 — write validateForm() + init Swiper | Frontend Dev |
| Silent SMTP failure loses leads for hours undetected | High | High — direct revenue loss | Sprint 1 #4 — check sendMail() return + retry | Backend Dev |
| PII log file exposed via logs/ directory | Medium | Critical — GDPR violation, legal liability | Sprint 1 #7 — block logs/ in .htaccess immediately | Backend Dev |
| Admin panel brute-forced (sleep(2) bypassed by parallel requests) | Medium | High — SMTP send capability compromised | Sprint 1 #8–#10 — lockout + token fix + IP restriction | Backend Dev |
| Google structured data manual action (fake AggregateRating) | Medium | High — domain-wide rich result suppression | Sprint 1 #S3 — remove hardcoded rating | Backend Dev |
| Structured data manual action (invalid SearchAction) | Low | High — rich result suppression | Sprint 1 #S4 — remove SearchAction | Backend Dev |
| Hreflang abuse triggers quality signal downgrade across all pages | Medium | High — organic ranking suppression | Sprint 1 #S2 — remove invalid hreflang tags | Backend Dev |
| Soft 404 causes de-indexing of URL clusters | Medium | High — pages removed from Google index | Sprint 1 #S1 — create real 404.php | Backend Dev |
| Marketing spend wasted: LCP 4.5–6.0s mobile reduces Quality Score and raises CPC | High (active) | High — higher CPC, lower conversion | Sprint 2 #29, #35, #36 — defer jQuery, inline critical CSS, subset FA | Frontend Dev |
| WCAG non-compliance triggers ADA/EAA legal complaint | Medium | High — legal liability, reputational damage | Sprint 1 #13–#15 + Sprint 2 accessibility items | Frontend Dev |
| Developer accidentally commits real SMTP password | Medium | Critical — full email account compromise | Sprint 1 #25 — implement .env immediately | Backend Dev |
| CSS deployment causes stale styles for 30 days (immutable cache) | Medium | Medium — UI broken for returning visitors after updates | Sprint 3 — cache-busting filenames | DevOps |
| SPF/DKIM/DMARC unconfigured — domain used for phishing | Low | High — brand trust damage, client relationship risk | Sprint 3 — verify DNS records via MXToolbox | DevOps |
| SR-DEV-4 JavaScript report findings absorbed (report now available) | Confirmed | High — calculator fully non-functional | Sprint 1 #J1 — addressed above | Frontend Dev |

---

## AGENT PIPELINE SUMMARY

| Agent | Role | Issues Found | Key Finding |
|---|---|---|---|
| SR Dev #1 | PHP Architecture | 8 | Duplicate JSON-LD on every page actively suppresses rich results; footer.php 1,364-line monolith; no page variable contract |
| SR Dev #2 | Security | 12 | CSRF zero-day across all forms; SSL verification disabled; admin panel has no meaningful protection |
| SR Dev #3 | CSS Performance | 11 | 23 stylesheet HTTP requests (~825KB); custom-fixes.css has 772 !important and near-duplicate 700-line mobile blocks; nuclear Bootstrap column override |
| SR Dev #4 | JavaScript | 8 | Calculator fully non-functional (validateForm undefined + 6 Swiper initialisations missing); ~650KB JS loaded synchronously; TinySlider confirmed zero usages |
| SR Dev #5 | Accessibility | 12 | WCAG 2.1 AA compliance ~52%; mega-menu unreachable by keyboard; all forms label-less; 794+ images with empty alt |
| SR Dev #6 | DevOps | 10 | Silent SMTP failure loses leads permanently; no CI/CD; SPF/DKIM/DMARC unverified; sitemap has no lastmod |
| QA Dev #1 | Backend PHP QA | 18 | CSRF, SSL, PII via GET, email header injection, open redirect, fake captcha — confirmed across all form endpoints |
| QA Dev #2 | Frontend QA | 20 | 22 global JS files; Select2 loaded twice; onmousedown disabling text selection on 53 pages; UTF-8 BOM in PHP |
| QA Dev #3 | Infrastructure QA | 12 | logs/ publicly accessible; double-301 redirect chain; PHPMailer phantom dependency; soft 404 identified |
| PM | Consolidation | 63 unique | Cross-referenced 8 reports; merged 19 duplicates; produced sprint-ready issue list with severity and effort |
| SEO Specialist | SEO Audit | 25 new (net) | 54/100 score; invalid hreflang on all pages; OG image broken; hardcoded fake rating; soft 404; geo pages are empty redirect stubs |

**Pipeline total: 88 unique issues** (63 PM + 1 JS late addition + 24 new SEO)

---

## PM SIGN-OFF NOTES

### 1. The No-Go is Firm and Non-Negotiable for Paid Traffic
The combination of a completely non-functional calculator (the site's highest-intent conversion tool), zero CSRF protection, and active GDPR violations means any paid Google Ads or LinkedIn campaign spend before Sprint 1 completion is money burned with legal exposure attached. There is no "soft launch" path available.

### 2. Sprint 1 is 29 Issues — Resource it Accordingly
The SEO audit added 8 Sprint 1 items (S1–S6, S3, S4, S5) that are all fast XS/S effort but must not be deprioritised. With a backend developer and frontend developer in parallel, Sprint 1 should complete in 5–6 working days. A solo developer should budget 8–10 days and prioritise in this exact order: (1) CSRF + SSL + GET→POST, (2) calculator fix, (3) SMTP failure detection, (4) SEO quick wins.

### 3. SEO Quick Wins are Disproportionately High ROI
Six of the twelve quick wins directly affect Google's Rich Results eligibility, crawl budget, and ranking signal quality. None of them require more than 20 minutes. These should be committed and deployed before any other Sprint 1 work is reviewed — they carry zero risk and immediate upside.

### 4. The AggregateRating Issue is a Silent Bomb
The prompt.md spec actually instructs agents to add `AggregateRating` schema ("even placeholder — improves rich results"). This is directly contradicted by Google's structured data policies. The SEO specialist's finding takes precedence over the prompt spec here. A structured data manual action can suppress all rich results across the entire domain. Remove the hardcoded rating immediately.

### 5. Hreflang Removal is the Right Call
The instinct behind the hreflang implementation (target UAE, Saudi Arabia, Pakistan) is sound business logic. The execution (pointing all 7 regions to the same URL) is the worst possible implementation — worse than no hreflang at all. Remove all region-specific tags now; reimplement properly when geo-specific content pages exist (Sprint 3 geo work).

### 6. The JavaScript Report Was Not Pending — It Was Available
SR-DEV-4-JAVASCRIPT.md exists in the reports directory. The PM Report flagged it as "PENDING — not yet available" which was incorrect at consolidation time. This report confirms the calculator is completely non-functional (validateForm undefined, 6 Swiper instances dead) — this must be treated as a Sprint 1 Critical blocker, not a Sprint 3 backlog item as the original PM report structurally implied by its pending status.

### 7. Geo Page Strategy Needs a Business Decision
The 9 geo-targeting pages (Dubai, New York, Houston, Karachi, Riyadh, etc.) are currently pure 301 redirect stubs consuming crawl budget and delivering zero SEO value. Sprint 3 includes rebuilding 5 priority cities with real content. This is the highest untapped organic ranking opportunity on the site — "mobile app development in Dubai" is a high-intent keyword with moderate competition. A properly built geo page can rank within 3–6 months.

### 8. Performance and SEO are Joined at the Hip
The estimated LCP of 4.5–6.0s on mobile is not just a UX problem — it directly affects Google's Core Web Vitals ranking signal and Google Ads Quality Score. A Quality Score improvement from 4 to 7 on Google Ads can reduce CPC by 40–50%. Sprint 2 performance work has a direct and calculable ROI when combined with any paid traffic programme.

---

## DEFINITION OF DONE — SPRINT 1 EXIT CRITERIA

This checklist must pass before Sprint 1 is considered complete and before any paid traffic campaign is launched:

- [ ] CSRF tokens implemented and verified on all 3 form endpoints (contact, quote, calculator) and modal fetch() POST
- [ ] All forms use POST — confirmed by grep across all .php files: `grep -r 'method="get"' --include="*.php"` returns zero results
- [ ] validateForm() defined and app-cost-calculator.php form submits successfully (no ReferenceError in console)
- [ ] All 6 Swiper instances on calculator (Platform, Features, Design, Signup, Screen, Functionality) initialised and functional — prev/next buttons advance slides
- [ ] sendMail() return value checked in both handlers — SMTP failure redirects to error state, NOT to thank-you page
- [ ] SSL verify_peer enabled in mailer.php — confirmed working SMTP send after deploy on Hostinger
- [ ] .env file implemented — no credentials in tracked PHP files — confirmed by `git grep SMTP_PASS` returning zero results in committed files
- [ ] logs/ directory returns 403 from browser on production URL
- [ ] Duplicate JSON-LD removed from footer.php — Google Rich Results Test returns zero duplicate-schema errors on any service page
- [ ] robots.txt updated: `/mailer-admin-aws7749`, `/logs/`, `/submit-calculator`, `/thank-you`, `/contact-form` all disallowed
- [ ] robots.txt Googlebot Allow:/ override logic fixed — Disallow rules verified effective for Googlebot via Google Search Console URL inspection
- [ ] OG image filename space fixed — social sharing image renders in Facebook Sharing Debugger and LinkedIn Post Inspector
- [ ] Hardcoded AggregateRating removed from Organization schema — confirmed via Google Rich Results Test
- [ ] Invalid SearchAction removed from WebPage schema — confirmed via Google Rich Results Test
- [ ] Invalid hreflang region tags removed (only x-default or none remaining) — confirmed via hreflang checker
- [ ] Soft 404 fixed — curl -I on a non-existent URL returns HTTP 404, not HTTP 200
- [ ] Rate limiting active on all form endpoints — 6th submission within 60 seconds returns HTTP 429
- [ ] Admin panel lockout active — manual test of 6 consecutive failed logins triggers lockout; verify from non-whitelisted IP
- [ ] Email header injection blocked — unit test with `\r\nBcc:` in subject field; confirm not present in outgoing email headers
- [ ] Double-301 on /fintness-mobile-app-development confirmed resolved via `curl -IL` — single 301 to correct fitness target
- [ ] `<meta charset="UTF-8">` present as first element in every page `<head>` — confirmed by view-source on 3 representative pages
- [ ] Duplicate CSS link tags removed from header.php — DevTools Network tab shows zero duplicate stylesheet requests
- [ ] .env file in .gitignore — confirmed `git status` does not show .env as tracked
- [ ] Mega-menu operable by Tab, Enter, Escape keyboard — confirmed with NVDA or VoiceOver screen reader
- [ ] Lead modal has focus trap (Tab cycles inside modal only) — confirmed with keyboard-only navigation
- [ ] All form inputs have associated `<label>` elements — axe-core automated scan reports zero WCAG 3.3.2 violations
- [ ] sitemap.xml: all redirect-only URLs removed; lastmod added to remaining entries; validated as well-formed XML

---

*This document is the single source of truth for production readiness and engineering execution order.*
*Generated: April 2026*
*Based on: PM-REPORT.md + SEO-REPORT.md + SR-DEV-4-JAVASCRIPT.md + prompt.md*
*Pipeline: SR-DEV-1, SR-DEV-2, SR-DEV-3, SR-DEV-4, SR-DEV-5, SR-DEV-6 + QA-DEV-1, QA-DEV-2, QA-DEV-3 + PM + SEO Specialist*
