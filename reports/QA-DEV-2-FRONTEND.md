# QA Report — Frontend, CSS & JavaScript
**Auditor**: QA Developer #2
**Date**: April 2026
**Scope**: HTML, CSS, JS, Accessibility, Performance, Responsive Design, Browser Compatibility

---

## Executive Summary

The ArtisticWebServices website carries significant frontend technical debt in three interconnected areas: a massively overweight CSS architecture (23 stylesheet HTTP requests totalling ~420 KB uncompressed, of which `custom-fixes.css` at 3,834 lines is 83% auto-generated overrides), a JavaScript layer loading 22 separate vendor scripts globally regardless of page need, and a suite of 4 competing carousel libraries simultaneously bundled while only 2–3 are actively used. Accessibility problems — including 794+ empty `alt=""` attributes across service pages, a completely unlabelled lead-capture form, and pervasive `outline:none` rules — present both WCAG compliance risk and SEO image-indexing failures. These issues are solvable through systematic consolidation: eliminating redundant carousel libraries, moving auto-generated CSS to a build pipeline, and implementing lazy/conditional JS loading.

---

## Critical Issues

### 1. `<meta charset>` Missing From Every Page
- **File**: `includes/head.php` — entire `<head>` block
- **Severity**: Critical
- **Description**: There is no `<meta charset="UTF-8">` declaration anywhere in `head.php`. The HTML5 spec requires this to appear within the first 1024 bytes of the document. Without it, browsers may misinterpret character encoding, causing garbled display of special characters (em dashes, quotes, international text), and some older browsers may invoke charset-sniffing attacks (CVE-class: UTF-7/XSS via charset confusion).
- **Fix**: Add `<meta charset="UTF-8">` as the **first** element inside `<head>`, before `<title>`.

---

### 2. Lead-Capture Modal Form Has No `<label>` Elements (WCAG 2.1 SC 1.3.1 / SC 3.3.2)
- **File**: `includes/footer.php` — lines 830–865
- **Severity**: Critical
- **Description**: The primary conversion form (`#awsLeadForm`) uses only `placeholder` attributes for all five inputs and one `<select>`. Placeholders disappear on focus, leaving screen-reader users and keyboard users with no programmatic label for each field. This fails WCAG 2.1 Level A criterion 1.3.1 (Info and Relationships) and 3.3.2 (Labels or Instructions). The form also relies on inline `onsubmit="awsSubmitForm(event)"` — a deprecated event model that conflicts with CSP if headers are later added.
- **Fix**: Add `<label for="…">` elements paired with `id=""` attributes on each input. For visual-only designs, use `.sr-only` / `visually-hidden` styling. Replace inline `onsubmit` with `addEventListener`.

---

### 3. jQuery Loaded in `<head>` — Render-Blocking on Every Page
- **File**: `includes/head.php` — line 106
- **Severity**: Critical
- **Description**: `jquery-3.6.0.min.js` (87 KB minified) is synchronously loaded inside `<head>` before any content renders. This blocks the browser's HTML parser for the duration of the network fetch + parse + execute cycle. The comment says "jQuery loaded early so inline page scripts can use `$`" — but the inline stub `openLeadModal()` does not require jQuery; it is vanilla JS. Every page on the site incurs this render-block.
- **Fix**: Move jQuery to the end of `<body>` (before other vendor scripts, which are already in `footer.php`) and replace the `openLeadModal` stub with a `DOMContentLoaded` guard. Alternatively, add `defer` attribute, but `defer` does not work on scripts that need to be available to synchronous inline scripts — so the real fix is to eliminate synchronous inline `$()` calls in `<head>`.

---

### 4. 794+ Empty `alt=""` Attributes on Content Images Across Service Pages
- **File**: All service pages under `services/` — pervasive
- **Severity**: Critical
- **Description**: Grep confirms 794 total instances of `alt=""` across 24 service-page files. Unlike decorative images where empty `alt` is correct, these are content images (technology logos, case-study screenshots, team photos, service icons). Empty alt text fails WCAG 2.1 SC 1.1.1 (Non-text Content) and also prevents Google Image Search indexing, directly damaging SEO for a company that sells itself on visual portfolio work. Example: `services/mobile-app-development.php` alone has 33 empty-alt images.
- **Fix**: Audit each `<img>` with `alt=""`. For decorative images add `role="presentation"`. For content images, write descriptive alt text (10–15 words, keyword-relevant for service pages).

---

### 5. Select2 CSS Loaded Twice — Duplicate HTTP Request on Every Page
- **File**: `includes/head.php` — line 113 AND `includes/header.php` — line 140
- **Severity**: Critical
- **Description**: The Select2 stylesheet from `cdn.jsdelivr.net` is included once in `head.php` (which loads on every page) and again inside `header.php` (also included on every page). This causes a double HTTP request, double CSS parse, and double style application. Because `header.php` is included after `head.php` closes `</head>`, the second `<link>` lands inside `<body>` — which is invalid HTML per the spec.
- **Fix**: Remove the duplicate from `includes/header.php` line 140. Keep only the canonical one in `head.php`.

---

## High Issues

### 6. 22 JavaScript Files Loaded Globally Regardless of Page Need
- **File**: `includes/footer.php` — lines 889–912; `includes/head.php` — line 106
- **Severity**: High
- **Description**: Every page of the site (including Privacy Policy, Terms of Use, About Us, etc.) downloads and executes 22 vendor JavaScript files: jQuery, Bootstrap JS, Jarallax, AjaxChimp, jQuery Appear, Circle Progress, Magnific Popup, jQuery Validate, noUiSlider, Odometer, Swiper, TinySlider, wNumb, WOW, Isotope, Countdown, Owl Carousel, bxSlider, Bootstrap Select, jQuery UI, Slick, Select2. Total uncompressed JS payload exceeds 800 KB. Most of these are only needed on specific feature pages.
- **Fix**: Implement conditional script loading — enqueue scripts per-page using a `$page_scripts` array set in each page file, then output only needed scripts in `footer.php`. At minimum, remove Isotope/Masonry (needed only on portfolio/case-study pages), noUiSlider + wNumb (only on app cost calculator), and circle-progress (used on 1 page) from the global bundle.

---

### 7. 23 CSS Stylesheets Loaded on Every Page — Extreme HTTP Request Count
- **File**: `includes/head.php` — lines 77–104; `includes/header.php` — line 138–140
- **Severity**: High
- **Description**: Every page triggers 23 separate CSS `<link>` requests (19 vendor sheets + 2 template sheets + custom-fixes + 1 CDN FontAwesome + 1 CDN Select2 = 23 total, plus the header.php duplicate). Pre-HTTP/2 this would be devastating; even with HTTP/2 multiplexing this is excessive browser overhead. The combined uncompressed CSS payload is approximately 860 KB (Bootstrap 155 KB + style-01 208 KB + mibooz-responsive 85 KB + custom-fixes 126 KB + FontAwesome 59 KB + all vendor carousel/widget CSS).
- **Fix**: Consolidate vendor CSS into a single bundled file using a CSS build step (PostCSS, Vite, or even a PHP concat-and-cache script). At minimum, the carousel libraries (Owl, Slick, bxSlider) that serve the same purpose should be reduced to one, saving ~80 KB of CSS.

---

### 8. `custom-fixes.css` — 83% Auto-Generated, Duplicates Bootstrap/Template Rules
- **File**: `assets/css/custom-fixes.css` — lines 640–3834 (3,195 lines auto-generated)
- **Severity**: High
- **Description**: The file is 3,834 lines and contains 772 `!important` declarations. Line 640 contains a comment "AUTO-GENERATED SECTION — auto_fix_all_pages.php — DO NOT EDIT". This means 83% of this file is machine-generated overrides that are re-emitted on every run and likely contain duplicated rules. Specific issues found:
  - Lines 925–950: A hand-rolled re-implementation of ~25 Tailwind utility classes (`.flex`, `.text-center`, `.rounded`, etc.) that duplicate Bootstrap 5 utilities already loaded globally.
  - Lines 254–617: Mobile responsive rules for `h1–h6` font sizes exist at 5 separate breakpoints (1199px, 991px, 767px, 575px, 399px) — all using `!important` — duplicating similar rules already in `mibooz-responsive.css`.
  - Lines 7–14: `body { padding-top: 90px; }` exists here AND is overridden by inline `<style>` in `index.php` (`body { padding-top: 75px; }`), creating specificity conflicts resolved only by cascade order.
  - 72 occurrences of hardcoded brand colours (`#dd0429`, `#d31923`, `#b8001f`, `#8b0015`) when CSS variables like `--mibooz-primary: #dd0429` already exist in `style-01.css`. Changing brand colour requires updating all 72 lines manually.
- **Fix**: (a) Stop committing auto-generated CSS — run the generator at deploy time only. (b) Remove the Tailwind utility block — Bootstrap 5 provides all these. (c) Replace all hardcoded `#dd0429` with `var(--mibooz-primary)`. (d) Audit and remove duplicated responsive rules.

---

### 9. Inline Style `onmousedown="return false;" onselectstart="return false;"` — Right-Click/Selection Disabled
- **File**: `services/mobile-app-development.php` — line 22; `services/web-development.php` — line 20; and 51 other service/solution pages
- **Severity**: High
- **Description**: The `<div class="page-wrapper">` on virtually every service page globally disables mouse-down events and text selection via inline event handlers. This breaks user experience for: copy/pasting contact details or app names; selecting text to search it; assistive technology that relies on selection; keyboard-driven text selection via Shift+Arrow. It also has no actual security value — source code, images, and text are freely accessible via browser developer tools.
- **Fix**: Remove both attributes from all page wrappers. If image protection is a business requirement, use `pointer-events: none` on specific images only, not the entire page.

---

### 10. Swiper v5.4.5 and Other Libraries Are Severely Outdated
- **File**: `assets/vendors/swiper/swiper.min.js`; `assets/vendors/owl-carousel/owl.carousel.min.js`; `assets/vendors/bxslider/jquery.bxslider.min.js`
- **Severity**: High
- **Description**: Swiper is at v5.4.5 (2020); current stable is v11.x. Owl Carousel 2.3.4 was last released in 2018 and is unmaintained — it has known accessibility bugs and is incompatible with modern touch event APIs. bxSlider 4.1.2 was released in 2014 and has not been maintained since. These outdated libraries introduce security risk, browser-compatibility bugs (especially on iOS 17+ which dropped some legacy touch APIs), and accessibility issues.
- **Fix**: Update Swiper to v11.x (breaking API changes between v5→v11 require updating `data-swiper-options` syntax). Consolidate to one carousel library — Swiper is the most capable and actively maintained. Remove Owl Carousel and bxSlider entirely if Swiper and Slick cover all use cases.

---

### 11. `href="javascript:void(0)"` on Navigation Dropdown Anchors
- **File**: `includes/header.php` — lines 370, 441
- **Severity**: High
- **Description**: The Services and Solutions mega-menu trigger links use `href="javascript:void(0)"`. This is a 1990s anti-pattern that: (1) breaks middle-click/Ctrl+click to open in new tab, (2) shows "javascript:void(0)" in the browser status bar, (3) creates poor UX on mobile when JavaScript is slow to load, and (4) is flagged by accessibility scanners as a non-navigable link. The dropdown already has `data-bs-toggle="dropdown"` and `onclick` handlers.
- **Fix**: Use `href="#"` combined with `e.preventDefault()` in the click handler, or better, use a `<button>` element for toggle-only controls that don't navigate anywhere.

---

### 12. Lead Modal Form — No ARIA Live Region for Success/Error State
- **File**: `includes/footer.php` — lines 830–875
- **Severity**: High
- **Description**: The form submission (`awsSubmitForm`) changes the button text to "Sending…" and redirects after 800ms, but there is no `aria-live` region to announce this state change to screen-reader users. Additionally, the redirect is a fire-and-forget `fetch()` — if the server returns an error, the user is still redirected to `/thank-you`, creating a false success message. There is also no CSRF token on the form.
- **Fix**: Add `role="status"` and `aria-live="polite"` to a status element. Surface server errors to the user before redirecting. Add a CSRF token (coordinate with backend team — see QA-DEV-1-BACKEND).

---

## Medium Issues

### 13. Missing Lazy Loading on Content Images in Service Pages
- **File**: `services/mobile-app-development.php` and all service pages
- **Severity**: Medium
- **Description**: Grep finds zero `loading="lazy"` attributes in `services/mobile-app-development.php`. The footer JavaScript attempts to patch this at runtime (`document.querySelectorAll('img:not([loading])')`), but this approach is JS-dependent and fires after images have already begun fetching — it does not prevent eager loading of below-the-fold images during initial render. The hero image at the top correctly uses `loading="eager"`, but all subsequent content images should declare `loading="lazy"` in HTML.
- **Fix**: Add `loading="lazy"` to all non-hero `<img>` tags in HTML source. This is a one-time find-and-replace per file and takes priority over the JS runtime patch (which should remain as a safety net only).

---

### 14. Preload Declarations Don't Match Actual Load Order
- **File**: `includes/head.php` — lines 64–65
- **Severity**: Medium
- **Description**: Two `<link rel="preload">` tags exist (Bootstrap CSS and style-01.css). However, Bootstrap is loaded immediately below as a regular stylesheet anyway, making the preload redundant. Meanwhile, `custom-fixes.css` — the last CSS file loaded, which applies critical layout overrides — is not preloaded. The render-critical path is: Bootstrap → style-01 → (16 other sheets) → custom-fixes, meaning the overrides don't apply until all 22 sheets before it have been parsed.
- **Fix**: Preload only truly render-critical resources: the combined/bundled CSS file and the custom web font. Remove the individual vendor preloads.

---

### 15. Hardcoded Brand Colour Values Inconsistency (`#dd0429` vs `#d31923`)
- **File**: `services/mobile-app-development.php` (inline styles); `services/web-development.php`; `assets/css/custom-fixes.css`; `includes/footer.php`; and 50+ other files
- **Severity**: Medium
- **Description**: The brand red appears in two different hex values throughout the codebase: `#dd0429` (the CSS variable value in style-01.css `:root`) and `#d31923` (used in inline styles on multiple pages). These are visually close but not identical — `#dd0429` is slightly more orange-red, `#d31923` is slightly darker. This inconsistency means the brand colour is not unified, and any future rebrand requires hunting through 50+ files.
- **Fix**: Standardise on `#dd0429` (matching `--mibooz-primary`). Replace all `#d31923` occurrences with `var(--mibooz-primary)`. Add a CSS linting rule to flag raw hex values that match brand colours.

---

### 16. CSS File Naming Contains `@` and `=` Characters — Server Compatibility Risk
- **File**: `assets/css/style-01.css@v=1.1.css` and `assets/css/mibooz-responsive.css@v=1.1.css`
- **Severity**: Medium
- **Description**: File names containing `@` and `=` characters are valid on some servers but may be rejected or misrouted by NGINX, Apache with strict URL filtering, WAFs, or CDNs that treat `@` as a user-info separator in URL syntax (RFC 3986). Note: `mibooz-responsive.css` exists as both `mibooz-responsive.css` (without version suffix, 85KB) and `mibooz-responsive.css@v=1.1.css` (identical size, 85KB) — indicating the original file is still present alongside the versioned copy, creating dual-file ambiguity.
- **Fix**: Rename files to standard format: `style-01.v1.1.css`. Use query-string versioning (`style-01.css?v=1.1`) for cache-busting instead of embedding version in filename. Remove the duplicate unversioned `mibooz-responsive.css`.

---

### 17. Dual Mobile Navigation Systems — Redundant DOM
- **File**: `includes/footer.php` — lines 785–794; `includes/header.php` — lines 343–510
- **Severity**: Medium
- **Description**: The site has two navigation systems: (1) The Bootstrap 5 `navbar-collapse` in `header.php` (the visible nav), and (2) a separate `<div class="mobile-nav__wrapper">` in `footer.php` (the legacy theme mobile nav with `mobile-nav__toggler` and `mobile-nav__container`). The `mibooz.js` code populates `.mobile-nav__container` by cloning `.main-menu__list` — but the Bootstrap nav **does not have** a `.main-menu__list` element. This means the mobile nav container is always empty, the togglers (`.mobile-nav__toggler`) have no visible effect, and the `<div class="mobile-nav__wrapper">` is dead DOM weight on every page.
- **Fix**: Remove the legacy mobile nav wrapper from `footer.php` if Bootstrap's responsive nav is the canonical mobile menu. Or, if the legacy nav is still needed for some use case, ensure the content is properly populated.

---

### 18. WOW.js Animation Library Loaded on All Pages — Including Static Content Pages
- **File**: `includes/footer.php` — line 901
- **Severity**: Medium
- **Description**: WOW.js (scroll-triggered animation) is initialised globally via `mibooz.js` (`if($(".wow").length){...wow.init()}`). The check `$(".wow").length` is a guard — but loading WOW.js, running the DOM query, and checking the condition still happens on every page. Privacy Policy, Terms of Use, and About Us pages have minimal `.wow` usage but still download the library.
- **Fix**: Move WOW.js to conditional loading. Alternatively, use the Intersection Observer API as a native replacement (no library needed), which is supported by all modern browsers.

---

### 19. `body` Tag Placed Outside `<head>` Enclosure in Service Pages — BOM Character Present
- **File**: `services/mobile-app-development.php` — line 1 (BOM) and line 21; `services/web-development.php` — line 19
- **Severity**: Medium
- **Description**: Service pages include `head.php` (which outputs `<!DOCTYPE html>`, `<html>`, `<head>`, `</head>`), then the page file itself opens `<body>`. This structure is technically correct, **but** the file `mobile-app-development.php` begins with a UTF-8 BOM (`\xEF\xBB\xBF`) — visible as `﻿` in the raw source. The BOM causes the PHP engine to emit it before the `<?php` tag, which can break `header()` calls and causes a visible whitespace character before `<!DOCTYPE html>` in the rendered source, invalidating doctype detection.
- **Fix**: Resave the file without BOM. In most editors: "Save As → UTF-8 without BOM". Add a Git attribute `.gitattributes` rule: `*.php text eol=lf` and configure editors to not add BOM.

---

### 20. Isotope.js Loaded as Non-Minified File
- **File**: `includes/footer.php` — line 902; `assets/vendors/isotope/isotope.js`
- **Severity**: Medium
- **Description**: Isotope is loaded as the development (non-minified) version `isotope.js` rather than `isotope.pkgd.min.js`. This adds unnecessary bytes to every page load. The same pattern exists for `wow.js` (non-minified).
- **Fix**: Use minified versions: `isotope.pkgd.min.js` and `wow.min.js`.

---

### 21. Inline Style Attributes Used Extensively for Brand Styling
- **File**: `services/mobile-app-development.php` (42 instances); `services/web-development.php`; other service pages
- **Severity**: Medium
- **Description**: 42 `style=""` attributes are used in `mobile-app-development.php` alone, with patterns like `style="color: #d31923"` and `style="font-size: 24px; font-weight: 600"`. Inline styles have the highest CSS specificity (short of `!important`), making them impossible to override from stylesheets — this is why `custom-fixes.css` resorts to `!important` on almost everything. Inline styles also cannot be updated globally and break theming.
- **Fix**: Extract repeated inline styles to named CSS classes in a page-specific `<style>` block or the relevant stylesheet.

---

## Low Issues

### 22. `<a href="#">` Scroll-to-Top Link Is Not Keyboard-Announced
- **File**: `includes/footer.php` — line 796
- **Severity**: Low
- **Description**: The scroll-to-top control `<a href="#" data-target="html" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>` contains only an icon with no accessible text, no `aria-label`, and no `title` that assistive technology would use. Screen-reader users encounter an empty link.
- **Fix**: Add `aria-label="Scroll to top"` to the anchor element.

---

### 23. `<button>` Mobile Call Now Missing Explicit `type` Attribute
- **File**: `includes/header.php` — line 351
- **Severity**: Low
- **Description**: `<button class="aws-mob-callnow" onclick="openLeadModal()">` lacks `type="button"`. Buttons inside or adjacent to forms without explicit type default to `type="submit"`, which can cause unexpected form submissions.
- **Fix**: Add `type="button"` to all CTA buttons that are not form submit controls.

---

### 24. Floating Contact Panel Lacks `aria-label` and Role
- **File**: `includes/footer.php` — lines 877–885
- **Severity**: Low
- **Description**: The fixed floating left panel (email + phone buttons) is a `<div>` with no semantic landmark role. Screen-reader users navigating by landmark will skip it. The email link has no `aria-label` (only a `title`); `title` is not reliably announced.
- **Fix**: Wrap in `<nav aria-label="Quick contact">` or add `role="complementary"` and `aria-label="Contact shortcuts"`. Replace `title=""` with `aria-label=""` on icon-only links.

---

### 25. Copyright Year Is Hardcoded as 2025
- **File**: `includes/footer.php` — line 777
- **Severity**: Low
- **Description**: `&copy; Copyrights 2025 ArtisticWebServices.` is a static string. The footer JavaScript sets a `.dynamic-year` class element — but the copyright line does not use this class; it is hardcoded. The current year is 2026.
- **Fix**: Replace the year text with `<span class="dynamic-year"></span>` to use the existing JS-driven year updater, or use PHP: `<?php echo date('Y'); ?>`.

---

### 26. Missing `rel="noopener noreferrer"` on Some External Links
- **File**: Various pages — internal page links to external sites without rel
- **Severity**: Low
- **Description**: Social and partner links in the footer correctly include `rel="noopener noreferrer"`. However, inline links in service page body content to third-party URLs (e.g., clutch.co ratings, partner sites) use `target="_blank"` without the matching `rel` attribute, exposing the opener to `window.opener` tab-napping attacks.
- **Fix**: Ensure all `target="_blank"` links have `rel="noopener noreferrer"`.

---

### 27. Preloader Fallback Timeout Set to 4 Seconds — Long Block
- **File**: `includes/footer.php` — line 1360
- **Severity**: Low
- **Description**: The preloader safety-dismiss timeout is 4 000 ms (`setTimeout(dismissPreloader, 4000)`). On slow connections, users see a blocking preloader for up to 4 seconds before content is accessible. Preloaders are generally considered anti-patterns for content sites.
- **Fix**: Reduce safety timeout to 2 000 ms. Consider removing the preloader entirely and using skeleton screens or CSS skeleton loading instead.

---

### 28. `viewport` Meta Restricts Zooming with `minimum-scale=1.0`
- **File**: `includes/head.php` — line 25
- **Severity**: Low
- **Description**: `<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">`. While `minimum-scale=1.0` does not fully disable zooming (unlike `user-scalable=no`), it prevents zoom-out on mobile. `shrink-to-fit=no` is a Safari 9 workaround that is no longer needed. These values add unnecessary complexity.
- **Fix**: Simplify to `<meta name="viewport" content="width=device-width, initial-scale=1">`.

---

### 29. Inline `onmouseenter` Event Handlers on Nav Links
- **File**: `includes/header.php` — lines 364–500 (multiple occurrences)
- **Severity**: Low
- **Description**: Nav links use `onmouseenter="closealldrp()"` and `onmouseenter="servicedrp()"` inline event attributes. These are hard to test, cannot be removed without editing HTML, and duplicate functionality already handled by CSS `:hover` for desktop. The inline handlers also fire on touch devices where there is no hover, causing unexpected dropdown closings.
- **Fix**: Replace inline event handlers with `addEventListener('mouseenter', ...)` applied in a JS module, or rely purely on Bootstrap's built-in dropdown system and CSS hover rules.

---

### 30. bxSlider Not Actually Used in Page Content
- **File**: `includes/footer.php` — line 905; `includes/head.php` — line 93
- **Severity**: Low
- **Description**: bxSlider CSS and JS are loaded globally on every page. Grep finds zero `.bxSlider()` initialisation calls in any PHP file (the only usage is in `mibooz.js` itself for `.listing-details__gallery .bxslider` — a class that does not appear in any current page). The library (24 KB on disk, last updated 2014) is dead weight.
- **Fix**: Remove bxSlider CSS and JS from `head.php` and `footer.php` entirely unless a listing-details page is confirmed to exist and use this class.

---

## Positive Findings

1. **Structured Data is thorough**: JSON-LD schemas for Organization, LocalBusiness, WebPage, BreadcrumbList, FAQPage, and Service are correctly implemented and dynamically generated per page. This is excellent for SEO.
2. **Skip-to-main-content link exists**: `<a class="skip-to-main" href="#main-content">Skip to main content</a>` is present in `header.php` — a good accessibility practice.
3. **Social icon accessibility**: Footer social links all have correct `aria-label` attributes and `rel="noopener noreferrer"`.
4. **Focus-visible ring is implemented**: `custom-fixes.css` lines 1462–1474 define a visible `3px solid #dd0429` outline for `:focus-visible`, restoring keyboard navigation indicators that the `outline:none` rules in the template would otherwise remove.
5. **CSS custom properties are defined**: `style-01.css` `:root` block defines a coherent design token set (`--mibooz-primary`, `--mibooz-black`, `--mibooz-gray`, etc.) — the foundation for a proper design system is already there.
6. **Open Graph and Twitter Card meta**: Fully implemented with proper image dimensions (`1200×630`).
7. **Preconnect for Google Fonts**: Correct `rel="preconnect"` with `crossorigin` on `fonts.gstatic.com`.
8. **Form validation exists**: Both HTML5 `required`/`pattern` attributes and a JS layer (`AWS_AUTOFIX_JS_END` block) provide client-side validation with accessible error messages.
9. **Canonical URLs are set per-page**: Each page correctly sets `$page_canonical` and outputs `<link rel="canonical">`.
10. **Tawk.to chat widget positioned on left**: CSS overrides correctly move the Tawk widget to the left side, avoiding conflict with the right-side scroll-to-top button.

---

## Redundant Library Analysis

| Library | In vendors/ | Actually Used | Recommendation |
|---|---|---|---|
| **jQuery 3.6.0** | Yes | Yes — site-wide (mibooz.js + page scripts) | Keep. Consider upgrading to 3.7.x for minor CVE patches. |
| **Bootstrap 5** | Yes | Yes — grid, navbar, dropdowns, collapse | Keep. |
| **Swiper 5.4.5** | Yes | Yes — 35 pages use `thm-swiper__slider` or `new Swiper()` | Keep but **upgrade to v11.x** — v5 is 4 years outdated. |
| **Owl Carousel 2.3.4** | Yes | Yes — 37 pages use `.owlCarousel()` | **Consolidate into Swiper**. Owl is unmaintained since 2018. |
| **Slick Carousel** | Yes | Yes — 6 pages use `.slick()` | **Consolidate into Swiper**. Redundant with Owl and Swiper. |
| **bxSlider 4.1.2** | Yes | No — zero page initializations found | **Remove entirely**. Last updated 2014. |
| **Tiny Slider** | Yes | Minimal — only 2 files reference `tns()` | **Evaluate removal**. Swiper can replace. |
| **noUiSlider** | Yes | Minimal — only app cost calculator page | **Conditional load only** — remove from global bundle. |
| **Bootstrap Select** | Yes | Not found in page content | **Remove or conditional load**. Select2 covers this use case. |
| **Select2** | Yes (CDN) | Yes — 32 files reference it | Keep but load once (currently loaded twice — see Issue #5). |
| **Isotope** | Yes (non-minified) | Yes — case-study/portfolio pages | Keep but **use minified version** and **conditional load**. |
| **Magnific Popup** | Yes | Minimal — 2 references to `.video-popup` | **Evaluate removal**. Native `<dialog>` or a lighter solution works. |
| **jQuery Circle Progress** | Yes | Minimal — 1 reference | **Conditional load only**. |
| **Countdown** | Yes | Not confirmed in page content | **Evaluate removal** if not used. |
| **jQuery UI** | Yes | Not confirmed in page content | **Remove or conditional load**. Heavy library (~250 KB) if unused. |
| **Jarallax** | Yes | Confirmed — parallax backgrounds on several pages | Keep but **conditional load** (not needed on text-only pages). |
| **WOW.js** | Yes (non-minified) | Yes — `.wow` classes on most pages | Keep but **use minified version**. Consider replacing with CSS `animation` + Intersection Observer. |
| **jQuery AjaxChimp** | Yes | Present — `.mc-form` mailchimp integration | Evaluate — only needed on newsletter pages. |
| **Animate.css** | Yes | Yes — `animated` classes used with WOW | Keep but may be reducible to only used animation classes. |
| **Odometer** | Yes | Yes — counter sections on multiple pages | Keep. |
| **FontAwesome 6.7.2** | Local in vendors/ (unused) + CDN | CDN version used exclusively | **Remove local `vendors/fontawesome/` directory** — it is never linked and wastes ~60 KB on disk. |

---

## Total Issue Count

| Severity | Count |
|---|---|
| Critical | 5 |
| High | 7 |
| Medium | 9 |
| Low | 8 |
| **Total** | **29** |

---

## Priority Fix Order

1. **Immediate (within 1 sprint)**: Issues #1 (charset), #5 (duplicate Select2), #2 (form labels), #3 (jQuery render-blocking), #25 (copyright year)
2. **Short-term (1–2 sprints)**: Issues #4 (alt texts), #9 (onmousedown), #6 (global JS loading), #7 (CSS count), #15 (colour inconsistency), #19 (BOM)
3. **Medium-term (backlog)**: Issues #8 (custom-fixes refactor), #10 (outdated libraries), #16 (file naming), #17 (dead mobile nav), #13 (lazy loading)
4. **Long-term (technical debt)**: Consolidate 4 carousel libraries → 1, implement CSS build pipeline, adopt CSS custom properties throughout, migrate inline styles to classes.
