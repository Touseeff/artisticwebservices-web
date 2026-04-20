# QA Report — Infrastructure, Routing & Architecture
**Auditor**: QA Developer #3
**Date**: April 2026
**Scope**: .htaccess, Routing, File Structure, Template Pattern, Config

---

## Executive Summary

The site infrastructure is generally well-structured with strong security-header coverage, clean URL rewriting, and a consistent PHP template pattern across all content pages. However, five issues require immediate attention: the `logs/` directory is publicly web-accessible with no `.htaccess` block, the `fintness-mobile-app-development.php` redirect chain perpetuates a misspelled slug, `composer.json` declares PHPMailer as a dependency while the codebase uses a hand-rolled SMTP socket mailer with TLS certificate verification disabled, and both `submit-calculator.php` and `mailer-admin-aws7749.php` are missing from `robots.txt`. The sitemap also lacks `<lastmod>` timestamps throughout.

---

## Critical Issues

### 1. `logs/` Directory Has No Web-Access Block
- **File**: `D:/xampp/htdocs/artasticwebservices-web/.htaccess` — no rule present; `logs/` directory exists at root
- **Severity**: Critical
- **Description**: The `.htaccess` RewriteRule blocks `includes/`, `prompt/`, and `vendor/` but there is no block for `logs/`. The `includes/mailer.php` writes form-submission data (name, email, phone, service, message) to `logs/mail-dev.log` on localhost. If this directory is ever non-empty on a production clone, or if `SMTP_LOCAL_DEV` ever evaluates `true` in a staging environment reachable from the internet, those log files would be directly downloadable by anyone. Even with the directory currently empty on production, the gap should be closed defensively.
- **Fix**: Add `RewriteRule ^logs/.*$ - [F,L]` to the sensitive-files block in `.htaccess`. Confirm the `logs/` path is also covered in `robots.txt` with `Disallow: /logs/`.

### 2. Broken Redirect Chain — `fintness-mobile-app-development.php` (Root) Redirects to `.php` Extension URL
- **File**: `D:/xampp/htdocs/artasticwebservices-web/fintness-mobile-app-development.php` line 1
- **Severity**: Critical
- **Description**: The root-level redirect stub sends visitors and crawlers to `/services/fintness-mobile-app-development.php` (with the `.php` extension), which then triggers the `.htaccess` strip-extension 301 redirect. This creates a double-301 chain, wasting link equity and causing two round-trips. Worse, the destination slug still contains the typo `fintness` — it should be `fitness`. The correct canonical target is `/services/fitness-mobile-app-development`.
- **Fix**: Change the root stub to: `<?php header('Location: /services/fitness-mobile-app-development', true, 301); exit; ?>`. Separately evaluate whether `services/fintness-mobile-app-development.php` should also be renamed or redirected.

---

## High Issues

### 3. `composer.json` Declares PHPMailer — Dependency Is Not Used
- **File**: `D:/xampp/htdocs/artasticwebservices-web/composer.json` lines 4–6
- **Severity**: High
- **Description**: `composer.json` requires `phpmailer/phpmailer: ^6.9`. The actual mailer implementation in `includes/mailer.php` explicitly documents "no Composer / no PHPMailer" and uses a raw PHP SSL socket. There is no `vendor/` directory present. The declared dependency is unused, creating confusion: a developer or deploy pipeline running `composer install` would pull PHPMailer into a `vendor/` directory that is not required anywhere, and the `vendor/` directory would then be unprotected (or only protected by `.htaccess` if the mod_rewrite block fires correctly). The mismatch is a maintenance and security liability.
- **Fix**: Either (a) remove the `require` block from `composer.json` and delete `composer.json` entirely (since there are no other declared dependencies), or (b) replace the hand-rolled SMTP socket with PHPMailer and remove the raw socket code. Option (a) is simpler given the current implementation.

### 4. SMTP TLS Certificate Verification Disabled in Mailer
- **File**: `D:/xampp/htdocs/artasticwebservices-web/includes/mailer.php` lines 55–59
- **Severity**: High
- **Description**: The SSL stream context for SMTP connections sets `verify_peer => false`, `verify_peer_name => false`, and `allow_self_signed => true`. This disables TLS certificate validation entirely, making the SMTP connection vulnerable to man-in-the-middle attacks. An attacker positioned between the web server and smtp.hostinger.com could intercept or alter outgoing form submissions.
- **Fix**: Remove the three disabling flags. Hostinger's `smtp.hostinger.com` on port 465 uses a valid CA-signed certificate. If the host's CA bundle is incomplete, install or reference the correct `cafile` path rather than disabling validation.

### 5. `mailer-admin-aws7749.php` Not Blocked in `robots.txt`
- **File**: `D:/xampp/htdocs/artasticwebservices-web/robots.txt`
- **Severity**: High
- **Description**: The SMTP admin panel at `/mailer-admin-aws7749` is a password-protected diagnostic interface that exposes SMTP send/test capabilities. It is not listed in `Disallow` directives in `robots.txt`. While security-through-obscurity is not a substitute for authentication, crawlers (including aggressive SEO bots) can still index the URL and surface it in search results, revealing the panel's existence and secret path to potential attackers.
- **Fix**: Add `Disallow: /mailer-admin-aws7749` to `robots.txt`.

### 6. `submit-calculator.php` Not Blocked in `robots.txt`
- **File**: `D:/xampp/htdocs/artasticwebservices-web/robots.txt`
- **Severity**: High
- **Description**: `submit-calculator.php` is a GET-based form handler. Being crawlable means a bot could accidentally trigger form submissions or index query-string URLs with partial data. It is also not disallowed in `robots.txt`, unlike `contact-form.php` which is correctly blocked.
- **Fix**: Add `Disallow: /submit-calculator.php` to `robots.txt`.

---

## Medium Issues

### 7. Sitemap Missing `<lastmod>` Timestamps on All URLs
- **File**: `D:/xampp/htdocs/artasticwebservices-web/sitemap.xml` — all 60+ `<url>` entries
- **Severity**: Medium
- **Description**: No `<url>` entry in the sitemap includes a `<lastmod>` element. Google uses `<lastmod>` to prioritize re-crawling of recently changed pages. Without it, the crawl budget is used less efficiently, and updated pages may not be re-indexed promptly. The sitemap file itself was last modified April 13 2026 according to the filesystem.
- **Fix**: Add `<lastmod>YYYY-MM-DD</lastmod>` to each URL. Automate this via the existing `generate_sitemap.py` script (blocked from web access correctly) so the sitemap stays current on deploy.

### 8. Sitemap Lists Two Redundant and Redirect-Only Slugs (`/solutions/startup` and `/solutions/startups`)
- **File**: `D:/xampp/htdocs/artasticwebservices-web/sitemap.xml` lines 256–264
- **Severity**: Medium
- **Description**: Both `/solutions/startup` and `/solutions/startups` are listed in the sitemap. Both files (`solutions/startup.php`, `solutions/startups.php`) are 301-redirect stubs that point to `/services/mvp-startup-development.php`. Sitemap entries should point to canonical, indexable URLs — not to redirect hops. This wastes crawl budget and can confuse Googlebot's canonicalization logic.
- **Fix**: Remove both entries from the sitemap. If a solutions-level startup/startups page is desired, create a real page and list that instead.

### 9. Soft 404 Behavior — All Errors Map to `index.php` Returning HTTP 200
- **File**: `D:/xampp/htdocs/artasticwebservices-web/.htaccess` lines 102–104
- **Severity**: Medium
- **Description**: All `ErrorDocument` directives (404, 403, 500) map to `/index.php`. Apache will serve the home page content with the original error HTTP status code (the `ErrorDocument` directive does not override the status code). However, the intent appears to be "show the home page for errors," which means users hitting broken links see the home page rather than a clear 404. This is a soft-404 pattern: Googlebot receiving a 404 status but HTML content from the home page will correctly treat it as a 404. The UX concern is that users get no indication a page was not found. A dedicated 404 page with navigation links would improve user experience and reduce bounce rate. The 500 mapping to the home page is additionally risky — a PHP fatal error showing the home page could mask serious backend failures.
- **Fix**: Create a dedicated `404.php` and `500.php` error page. Update `ErrorDocument 404 /404.php` and `ErrorDocument 500 /500.php`. Keep `ErrorDocument 403 /index.php` or redirect to home as it is less critical.

### 10. Cache-Control `immutable` Applied to All Static Assets Without Versioned Filenames
- **File**: `D:/xampp/htdocs/artasticwebservices-web/.htaccess` lines 49–51
- **Severity**: Medium
- **Description**: The `FilesMatch` block sets `Cache-Control: public, max-age=31536000, immutable` for all `.webp`, `.png`, `.jpg`, `.jpeg`, `.gif`, `.svg`, `.ico`, `.woff`, `.woff2`, `.css`, and `.js` files. The `immutable` directive tells browsers they should never revalidate the file within the `max-age` window, even on hard refresh. This is only safe when filenames include a content hash (e.g., `style.abc123.css`). The observed CSS filenames use a static version suffix (`style-01.css@v=1.1.css`) that must be manually updated — if forgotten, cached users would receive stale CSS for up to a year. The `@v=1.1` suffix pattern is also unusual and may not work correctly on some CDN or proxy configurations.
- **Fix**: Implement true content-hashed filenames for CSS and JS assets, or remove `immutable` from the Cache-Control header and rely on `max-age` with `ETag` for revalidation.

### 11. `X-Powered-By` Header Not Suppressed
- **File**: `D:/xampp/htdocs/artasticwebservices-web/.htaccess`
- **Severity**: Medium
- **Description**: While `ServerSignature Off` removes the Apache server banner, `Header always unset X-Powered-By` is not present. PHP emits `X-Powered-By: PHP/x.x.x` by default, revealing the PHP version to any HTTP observer. This aids targeted attacks against known PHP version vulnerabilities.
- **Fix**: Add `Header always unset X-Powered-By` inside the `<IfModule mod_headers.c>` block. Also set `expose_php = Off` in `php.ini` as the definitive solution.

### 12. CSP `script-src` and `style-src` Include `unsafe-inline` and `unsafe-eval`
- **File**: `D:/xampp/htdocs/artasticwebservices-web/.htaccess` line 47
- **Severity**: Medium
- **Description**: The Content-Security-Policy header allows `'unsafe-inline'` and `'unsafe-eval'` in `script-src`. While common on sites that use inline scripts and `eval()`-based libraries, this substantially weakens the XSS protection that CSP is intended to provide. An attacker who achieves any form of HTML injection can execute arbitrary JavaScript. Similarly `'unsafe-inline'` in `style-src` allows CSS injection which can be used for clickjacking or data exfiltration.
- **Fix**: Audit all inline scripts and move them to external `.js` files. Replace `unsafe-eval` with specific nonces or hashes. If third-party libraries (jQuery plugins, Swiper, etc.) require `eval`, isolate them and use `strict-dynamic` with a nonce for first-party scripts.

---

## Low Issues

### 13. `bootstrap/4.0.0/` Directory — Legacy, Empty, and Unused
- **File**: `D:/xampp/htdocs/artasticwebservices-web/bootstrap/4.0.0/js/` (directory is empty)
- **Severity**: Low
- **Description**: The `bootstrap/4.0.0/` directory exists in the repository root but contains only an empty `js/` subdirectory. No PHP or HTML file references this path — the site loads Bootstrap from `assets/vendors/bootstrap/`. The directory is a vestigial artifact and is not blocked from directory listing by the `.htaccess` `Options -Indexes` directive (which does cover it globally). It adds noise to the directory structure and could confuse future developers.
- **Fix**: Delete the `bootstrap/` directory from the repository. Confirm no external links reference `/bootstrap/4.0.0/`.

### 14. `robots.txt` — Wildcard Pattern for Python Files Uses Regex Syntax, Not robots.txt Glob Syntax
- **File**: `D:/xampp/htdocs/artasticwebservices-web/robots.txt` line 14
- **Severity**: Low
- **Description**: The directive `Disallow: /*.py$` uses a `$` end-of-line anchor, which is a regex construct. The robots.txt specification uses a limited glob syntax where `*` matches any sequence of characters and `$` at the end of a pattern matches the end of the URI. In this case, `$` does work as intended in Google's robots.txt parser (Google treats trailing `$` as end-of-string). However, many other crawlers ignore or misinterpret it. The `.htaccess` already blocks `.py` scripts via RewriteRules, so this is belt-and-suspenders, but the pattern should be written unambiguously.
- **Fix**: Change `Disallow: /*.py$` to `Disallow: /*.py` (removing the `$`). Google's parser and most others handle this correctly without the anchor.

### 15. `fintness-mobile-app-development.php` CSS Class Name Typo Persists in Multiple Files
- **File**: `D:/xampp/htdocs/artasticwebservices-web/services/fintness-mobile-app-development.php` (filename), `services/ecommerce-app-development.php` line 61, 135–136, 459, `services/mobile-app-development.php` line 649, `assets/css/style-01.css@v=1.1.css`, `assets/css/mibooz-responsive.css`, `assets/css/mibooz-responsive.css@v=1.1.css`, `assets/css/custom-fixes.css`
- **Severity**: Low
- **Description**: The CSS class `.fintness__contents` (misspelling of "fitness") appears across multiple PHP pages and CSS files. The actual `services/fintness-mobile-app-development.php` file also has the misspelled filename. While the CSS class is cosmetic and does not break functionality, the misspelled filename (`fintness-mobile-app-development.php`) is a live URL that appears in sitemap candidates and the `.php` redirect chain. It should be renamed to `fitness-mobile-app-development.php` — which already exists as the correct file.
- **Fix**: Rename `services/fintness-mobile-app-development.php` to a properly named redirect stub pointing to `fitness-mobile-app-development`. Optionally clean up the CSS class name in a future refactor, though it is purely internal.

### 16. Sitemap Contains `/solutions/alliance-partners` — This Is a Duplicate of the Root-Level `/alliance-partners`
- **File**: `D:/xampp/htdocs/artasticwebservices-web/sitemap.xml` line 331–334
- **Severity**: Low
- **Description**: The sitemap lists `https://artisticwebservices.com/solutions/alliance-partners` as a URL. There is an `alliance-partners.php` in `solutions/` but it is a 1-line file. If it is just a redirect to the root `/alliance-partners`, having both in the sitemap creates a duplicate-content signal and wastes crawl budget.
- **Fix**: Inspect `solutions/alliance-partners.php` and if it redirects to the root, remove the `/solutions/alliance-partners` entry from the sitemap.

### 17. `.gitignore` Does Not Exclude `composer.lock`
- **File**: `D:/xampp/htdocs/artasticwebservices-web/.gitignore`
- **Severity**: Low
- **Description**: The `.gitignore` excludes `logs/` and common OS files. However, it does not exclude `composer.lock`. A `composer.lock` file could be generated by running `composer install` (which `composer.json` invites), and if committed, would reveal exact dependency version details. Given that PHPMailer is not actually used, this is low-risk, but the pattern should be documented: if `composer.lock` is intentionally tracked for reproducibility, that is fine; if not, add it to `.gitignore`.
- **Fix**: If Composer is not actually used, remove `composer.json` (see Issue #3). If retained, add `vendor/` to `.gitignore` (it may be missing since no `vendor/` directory currently exists). A `composer.lock` exclusion is optional but consistent with the "no vendor in git" pattern implied by the current `.gitignore`.

---

## Positive Findings

1. **Strong Security Header Set**: `X-Content-Type-Options`, `X-Frame-Options`, `X-XSS-Protection`, `Referrer-Policy`, `Permissions-Policy`, `Strict-Transport-Security` (with `preload` and `includeSubDomains`), and a detailed CSP are all present and well-configured. HSTS `max-age=31536000` is the recommended minimum.

2. **HTTPS Enforcement with Localhost Exemption**: The rewrite rule correctly forces HTTPS in production while skipping the redirect for `localhost` and `127.0.0.1`, preventing developer environment breakage.

3. **Clean URL Architecture**: The `.htaccess` rewrite chain correctly strips `.php` extensions, redirects `.html` legacy URLs, and normalises `index.php` → `/` using permanent 301s. The order of rules (HTTPS first, then www, then extension cleanup, then internal serve) is correct.

4. **`Options -Indexes`**: Directory listing is globally disabled, protecting all directories without needing per-directory `.htaccess` files.

5. **Compression Coverage**: `mod_deflate` covers all meaningful MIME types including SVG, WOFF2, JSON, and XML.

6. **`includes/` Directory Properly Protected**: Both `.htaccess` (`RewriteRule ^(includes|...)/.*$ - [F,L]`) and `robots.txt` (`Disallow: /includes/`) block access to all config, SMTP credentials, and partial templates.

7. **SMTP Password Is a Placeholder in VCS**: `includes/smtp-config.php` contains `YOUR_EMAIL_PASSWORD_HERE` — the real credential is not committed to git. The file comment explicitly warns against committing passwords.

8. **Consistent Template Pattern**: All full content pages (index.php, services/mobile-app-development.php, solutions/healthcare-app-development.php, solutions/fitness-and-wellness.php, contact.php, services/fitness-mobile-app-development.php, services/case-studies.php) follow the same require pattern. All redirect stubs are single-line and do not mix in page logic.

9. **robots.txt Structure**: Core sensitive paths are correctly blocked. The `Googlebot` section allows asset access which is needed for proper rendering-based indexing.

10. **`mailer-admin-aws7749.php` Is Password-Protected**: The admin panel requires authentication (with brute-force delay on wrong password) and uses a time-based daily token. The secret URL adds a layer of obscurity.

11. **`logs/` Directory Is Empty on Production**: No log files with personal data were found. The git-tracked `logs/` directory itself is only the directory entry (gitignored per `.gitignore` line 13), so no log content can be committed accidentally.

---

## Template Pattern Compliance

| Page | Follows Standard Pattern | Deviations |
|---|---|---|
| `index.php` | Yes | Uses `require_once 'includes/config.php'` (relative path, no `__DIR__`) — minor inconsistency vs. subdirectory pages which use `__DIR__ . '/../includes/config.php'` |
| `services/mobile-app-development.php` | Yes | None |
| `services/fitness-mobile-app-development.php` | Yes | None |
| `services/case-studies.php` | Yes | None |
| `solutions/healthcare-app-development.php` | Yes | None |
| `solutions/fitness-and-wellness.php` | Yes | None |
| `contact.php` | Yes | Uses `require_once 'includes/config.php'` (relative path, same as index.php) — consistent with root-level pages |
| `insights/hotel-booking-app.php` | N/A — Redirect Stub | Single-line 301 redirect; no template includes needed |
| `insights/bizi-app.php` | N/A — Redirect Stub | Single-line 301 redirect; no template includes needed |
| `insights/index.php` | N/A — Redirect Stub | Single-line 301 redirect |
| `digital-insights.php` (root) | N/A — Redirect Stub | Single-line 301 redirect |
| `fintness-mobile-app-development.php` (root) | Broken | Redirects to `.php`-suffixed URL (`/services/fintness-mobile-app-development.php`) instead of clean URL — double-redirect chain; misspelled target slug |
| `blog.php` | N/A — Redirect Stub | Correct — uses `require_once` + `SITE_URL` constant for absolute URL redirect |
| `contact-us.php` | N/A — Redirect Stub | Correct — uses `require_once` + `SITE_URL` constant |
| `solutions/startup.php` | N/A — Redirect Stub | Redirects to `.php`-suffixed URL, creating double-redirect chain via `.htaccess` |
| `solutions/startups.php` | N/A — Redirect Stub | Same as above |

---

## Total Issue Count

| Severity | Count |
|---|---|
| Critical | 2 |
| High | 4 |
| Medium | 6 |
| Low | 5 |
| **Total** | **17** |
