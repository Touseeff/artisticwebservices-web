# Senior Dev Report #3 — CSS Architecture & Performance
**Engineer**: Senior Fullstack Developer #3 (10 YOE)
**Date**: April 2026
**Specialization**: CSS Architecture, Frontend Performance, Core Web Vitals

---

## Executive Summary

The site's CSS layer is the single largest performance liability on the frontend. A cumulative ~500KB+ of render-blocking stylesheets loads on every page request, with no critical-path inlining, no code splitting, and no meaningful elimination of unused rules. The primary offender is `custom-fixes.css` (3,834 lines), which has grown organically into a monolithic catch-all: it contains global layout, navbar, footer, component styles for individual service pages (healthcare, mobile-app-development, etc.), auto-generated responsive blocks, Tailwind-utility polyfills, and repeated `@media` queries for the same breakpoints scattered across 107 `@media` blocks. Simultaneously, `footer.php` embeds ~600 lines of component-scoped CSS inline in a `<style>` block, and `index.php` embeds another ~300+ lines of hero-specific CSS inline. The brand color `#dd0429` appears as a hardcoded hex value at least 78 times across the CSS files, with three competing red variants (`#d31923`, `#ec1c22`) used inconsistently. There are 772 `!important` declarations in `custom-fixes.css` alone.

**Priority**: Immediate action required. Estimated LCP improvement potential: 0.8–1.4 seconds.

---

## CSS Bundle Analysis

| File | Lines | Est. Size (raw) | Purpose | Bloat Level |
|---|---|---|---|---|
| `assets/vendors/bootstrap/css/bootstrap.min.css` | ~11,000 | ~210KB min | Layout framework | High (most is unused) |
| `assets/css/style-01.css@v=1.1.css` | ~9,000 | ~207KB | Theme template base | High (global template, not all pages use all components) |
| `assets/css/mibooz-responsive.css@v=1.1.css` | ~2,500 | ~85KB | Template responsive layer | Medium |
| `assets/css/custom-fixes.css` | 3,834 | ~126KB | Fixes, overrides, components | Critical — bloated monolith |
| `assets/vendors/font-awesome/css/all.min.css` (CDN) | ~9,000 | ~102KB | Icons | High (full FA6 loaded; subset of icons used) |
| `assets/vendors/owl-carousel/owl.carousel.min.css` | ~400 | ~8KB | Carousel | Low |
| `assets/vendors/swiper/swiper.min.css` | ~500 | ~14KB | Swiper slider | Low |
| `assets/vendors/slick/slick.min.css` + theme | ~500 | ~6KB | Slick slider | Low (3rd slider lib loaded alongside Swiper & Owl) |
| Other vendor CSS (animate, jarallax, magnific, etc.) | ~3,000 | ~40KB | Misc utilities | Medium |
| `<style>` in `footer.php` | ~600 lines inline | ~18KB | Modal, social, CTA | Medium (should be in external file) |
| `<style>` in `index.php` | ~300+ lines inline | ~9KB | Hero carousel | Should be extracted |
| `<style>` in `services/mobile-app-development.php` | ~200+ lines inline | ~6KB | Page-specific | Should be in page-scoped file |
| **Total (estimated)** | | **~825KB raw / ~500KB gzip est.** | | |

---

## Issue #1: Render-Blocking CSS Chain — No Critical Inlining
**Severity**: Critical  
**File**: `includes/head.php` lines 78–104  
**Problem**: All 15+ CSS files load as render-blocking `<link>` resources in `<head>`. The browser cannot paint a single pixel until every file is downloaded and parsed. Two `<link rel="preload">` hints exist for Bootstrap and `style-01.css`, but they immediately follow with `<link rel="stylesheet">` for those same files — the preload benefit is negated because the browser still blocks on them before the viewport can paint.

Additionally, Font Awesome (102KB) is loaded from CDN on every page, unconditionally. jQuery is also loaded in `<head>` (before `</body>`) — a well-known anti-pattern that blocks HTML parsing.

**Fix — Async non-critical CSS via `media` trick + preconnect optimization:**
```css
/*
  Step 1: Extract ~1–2KB of above-the-fold critical CSS (navbar, hero shell,
  body resets) and inline it in <head>. This covers the first paint.
  
  Step 2: Load remaining CSS asynchronously.
  Replace the blocking <link> tags for non-critical vendor CSS with:
*/
```

```html
<!-- In includes/head.php — replace the blocking vendor links with: -->

<!-- CRITICAL: Inline these ~1.5KB of styles directly in <head> -->
<style>
  /* Critical CSS: navbar shell + body reset only */
  *, *::before, *::after { box-sizing: border-box; }
  html { scroll-behavior: smooth; overflow-x: hidden; }
  body { margin: 0; padding-top: 90px; font-family: 'Rubik', sans-serif; overflow-x: hidden; }
  @media (max-width: 991.98px) { body { padding-top: 70px; } }
  .navbar {
    position: fixed; top: 0; left: 0; right: 0; z-index: 1030;
    background-color: #fff; box-shadow: 0 2px 20px rgba(0,0,0,0.08);
    padding: 10px 0; transition: box-shadow 0.3s;
  }
  .navbar-brand img { max-height: 50px; width: auto; }
  /* Prevent layout shift before Bootstrap loads */
  .container { width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; }
</style>

<!-- NON-CRITICAL CSS: load asynchronously via media=print trick -->
<link rel="stylesheet" href="<?= $B ?>/assets/vendors/animate/animate.min.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="<?= $B ?>/assets/vendors/animate/custom-animate.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="<?= $B ?>/assets/vendors/jarallax/jarallax.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="<?= $B ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" media="print" onload="this.media='all'">
<!-- etc. for all non-layout vendor CSS -->
<noscript>
  <link rel="stylesheet" href="<?= $B ?>/assets/vendors/animate/animate.min.css">
  <!-- repeat for each async link -->
</noscript>

<!-- BLOCKING (must stay blocking for layout stability): -->
<link rel="stylesheet" href="<?= $B ?>/assets/vendors/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= $B ?>/assets/css/style-01.css@v=1.1.css">
```

---

## Issue #2: Font Awesome Full Bundle — 102KB for Icon Subset
**Severity**: High  
**File**: `includes/head.php` line 81  
**Problem**: The full Font Awesome 6.7.2 CDN bundle (all.min.css — ~102KB minified, ~25KB gzip) loads on every page. Based on the markup audit, the site uses only: `fa-solid` / `fas` (phone, envelope, bars, angle-up, paper-plane, lock, spinner, location-dot), `fa-brands` (facebook-f, linkedin-in, instagram, x-twitter). This is approximately 20–30 icons out of 2,000+.

**Fix — Subset Font Awesome or switch to SVG sprites:**
```html
<!-- Option A: Self-host only what you need via @font-face subset
     Download only solid + brands subset from fontawesome.com/download
     and reference locally — saves ~80KB vs full bundle -->

<!-- Option B: Use SVG sprite for the ~20 icons you actually use -->
<!-- In head.php, replace the CDN link with: -->
<link rel="stylesheet" href="<?= $B ?>/assets/vendors/font-awesome/css/fa-subset.min.css">

<!-- Option C (quickest): Lazy-load Font Awesome after first paint -->
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"></noscript>
```

---

## Issue #3: jQuery in `<head>` — Blocks HTML Parsing
**Severity**: High  
**File**: `includes/head.php` line 106  
**Problem**: `jquery-3.6.0.min.js` (~87KB) is loaded synchronously in `<head>`. This blocks HTML parsing for ~80–200ms on average connections. The comment says "jQuery loaded early so inline page scripts can use $" — this is an architectural smell. The inline scripts that need jQuery should be deferred or restructured.

**Fix:**
```html
<!-- Move jQuery to bottom of head.php, add defer — OR restructure 
     the inline scripts to wait for DOMContentLoaded -->

<!-- Option A: Keep in head but add module defer pattern -->
<script>
  // Provide a safe stub until jQuery loads
  window.$ = window.jQuery = function(fn) {
    if (typeof fn === 'function') {
      document.addEventListener('DOMContentLoaded', fn);
    }
  };
</script>
<script src="<?= $B ?>/assets/vendors/jquery/jquery-3.6.0.min.js" defer></script>

<!-- Option B (recommended): Move jQuery to footer.php BEFORE other vendor JS,
     and wrap all inline page scripts in: -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // all $ usage here
  });
</script>
```

---

## Issue #4: `custom-fixes.css` Monolith — 3,834 Lines, 772 `!important` Declarations
**Severity**: High  
**File**: `assets/css/custom-fixes.css`  
**Problem**: This file is a catch-all that has grown to combine at least 8 distinct concerns:

| Section | Approx Lines | Category |
|---|---|---|
| Navbar/dropdown fixes | 1–211 | Layout override |
| Footer enhancements | 264–444 | Component |
| Global responsive (5 breakpoints) | 806–923 | Responsive override |
| Auto-generated global pattern library | 640–800 | Component library |
| Mobile visibility overrides | 785–805 | Specificity war |
| Healthcare page-specific styles | 1752–2660 | Page component |
| Mobile app dev page-specific styles | 1940–2660 | Page component |
| Global mobile centering (~767px) | 2663–3158 | Responsive override |
| Section spacing normalization | 3250–3393 | Responsive override |
| Quote form styles | 3395–3607 | Component |
| Brand logo slider sizing | 3609–3673 | Component |
| Final global centering block (duplicate) | 3675–3834 | DUPLICATE of 2663–3158 |

The final `@media (max-width: 767px)` block (lines 3675–3834) is a near-duplicate of the block at lines 2663–3158. Combined they account for ~700 lines of repeated mobile centering declarations, with many selectors listed twice.

**772 `!important` declarations** indicates the file is locked in a specificity war against `style-01.css`. Every time an override fails, another `!important` is added rather than fixing root specificity.

Three different red brand colors are used interchangeably:
- `#dd0429` — primary brand red (majority)
- `#d31923` — used in healthcare/mobile-app page sections
- `#ec1c22` — used in the quote form section

This inconsistency is a design-system failure.

---

## Issue #5: Inline CSS in `footer.php`, `index.php`, and Service Pages
**Severity**: Medium  
**Files**: `includes/footer.php` lines 22–626; `index.php` lines 19–~380; `services/mobile-app-development.php` lines 27–~280  
**Problem**: Significant component-scoped CSS is written as inline `<style>` blocks in PHP templates:
- `footer.php`: ~600 lines — modal overlay, social icons, floating CTA, logo strip, CTA buttons, Tawk.to overrides
- `index.php`: ~300+ lines — hero video carousel, slide animations, badge pills, ghost button
- `mobile-app-development.php`: ~200+ lines — counter section, seamless solutions, schedule meeting, case study slider

These inline styles:
1. Cannot be cached by the browser (they re-parse on every page load)
2. Cannot be preloaded
3. Duplicate some rules already in `custom-fixes.css` (e.g., `.case-content`, `.robust-content`, `.eco_title`, `.heading__section`)
4. Block the render-tree construction because they are in-body `<style>` blocks (footer.php's styles come mid-document)

**Fix — Externalize into scoped files:**
```
assets/css/
  components/
    modal-lead.css          (from footer.php inline)
    footer-social.css       (from footer.php inline)
    floating-cta.css        (from footer.php inline)
    hero-carousel.css       (from index.php inline)
  pages/
    mobile-app-development.css   (from service page inline)
    healthcare.css               (from custom-fixes.css lines 1752+)
```

Then in `includes/head.php`, allow pages to inject their own stylesheet:
```php
<?php if (!empty($page_css)): ?>
  <link rel="stylesheet" href="<?= $B ?>/assets/css/pages/<?= htmlspecialchars($page_css) ?>">
<?php endif; ?>
```

And in `services/mobile-app-development.php`, before `require_once head.php`:
```php
$page_css = 'mobile-app-development.css';
```

---

## Issue #6: Inconsistent Breakpoints and Desktop-First Approach
**Severity**: Medium  
**File**: `assets/css/custom-fixes.css` (all media queries)  
**Problem**: The file uses **desktop-first** media queries (`max-width`) throughout, which conflicts with Bootstrap 5's **mobile-first** philosophy (`min-width`). This creates redundancy: Bootstrap defines mobile defaults, then `style-01.css` overrides them desktop-first, then `custom-fixes.css` fights back with desktop-first overrides, creating cascades 4 levels deep.

Breakpoints used in `custom-fixes.css` are inconsistent:

| Breakpoint | Bootstrap 5 Standard | Used in custom-fixes.css |
|---|---|---|
| sm | 576px | 575px, 575.98px, 480px |
| md | 768px | 767px, 767.98px |
| lg | 992px | 991px, 991.98px |
| xl | 1200px | 1199px |
| Custom | — | 399px, 480px |

Bootstrap 5 uses `.98px` variants intentionally for max-width to avoid overlap. The file mixes raw integers and `.98px` variants inconsistently.

**Fix — Token-based breakpoint map:**
```css
/* Define once, reference via CSS custom properties OR use SCSS variables */
/* In a _breakpoints.css reference doc (not executable but useful for team): */
:root {
  /* These are NOT used directly in media queries (CSS doesn't allow that),
     but document the canonical values for the team: */
  --bp-sm: 576px;   /* Bootstrap sm */
  --bp-md: 768px;   /* Bootstrap md */
  --bp-lg: 992px;   /* Bootstrap lg */
  --bp-xl: 1200px;  /* Bootstrap xl */
}

/* Correct max-width usage with .98px convention for precision: */
@media (max-width: 575.98px) { /* xs only */ }
@media (max-width: 767.98px) { /* sm and below */ }
@media (max-width: 991.98px) { /* md and below */ }
@media (max-width: 1199.98px) { /* lg and below */ }
```

---

## Issue #7: Three Carousel Libraries Loaded Simultaneously
**Severity**: Medium  
**File**: `includes/head.php` lines 87–101; `includes/footer.php` lines 904–908  
**Problem**: The following carousel/slider libraries are all loaded on every page:
- **Swiper** (CSS + JS) — used for brand logos, tech stacks
- **Owl Carousel** (CSS + JS) — used for testimonials
- **Slick** (CSS + theme + JS) — used for mobile-app-development page custom slider
- **Tiny Slider** (CSS + JS) — uncertain usage
- **bxSlider** (CSS + JS) — uncertain usage

Loading all 5 slider libraries costs approximately 60KB CSS + 180KB JS on every page, even on pages that use zero sliders.

**Fix — Conditional loading pattern:**
```php
// In individual page files, before require_once head.php:
$page_sliders = ['swiper', 'owl']; // only what this page needs

// In head.php:
if (!empty($page_sliders)) {
    foreach ($page_sliders as $slider) {
        switch ($slider) {
            case 'swiper':
                echo '<link rel="stylesheet" href="' . $B . '/assets/vendors/swiper/swiper.min.css">';
                break;
            case 'owl':
                echo '<link rel="stylesheet" href="' . $B . '/assets/vendors/owl-carousel/owl.carousel.min.css">';
                echo '<link rel="stylesheet" href="' . $B . '/assets/vendors/owl-carousel/owl.theme.default.min.css">';
                break;
            case 'slick':
                echo '<link rel="stylesheet" href="' . $B . '/assets/vendors/slick/slick.min.css">';
                echo '<link rel="stylesheet" href="' . $B . '/assets/vendors/slick/slick-theme.min.css">';
                break;
        }
    }
}
```

---

## Issue #8: No `font-display: swap` on Custom Font
**Severity**: Medium  
**File**: `includes/head.php` line 75  
**Problem**: Google Fonts loads Rubik (9 weights × 2 styles = 18 font files) plus Federo. The `display=swap` parameter is included in the URL, which is correct. However, the `<link>` is not preloaded with `as="font"`, and the DNS prefetch for `fonts.gstatic.com` is placed AFTER the `preconnect` rather than before it.

The self-hosted "the-sayinistic-font" stylesheet at `assets/vendors/the-sayinistic-font/stylesheet.css` almost certainly lacks `font-display: swap`.

**Fix:**
```css
/* In assets/vendors/the-sayinistic-font/stylesheet.css — 
   find every @font-face block and add font-display: swap */
@font-face {
  font-family: 'TheSayinistic'; /* replace with actual name */
  src: url('../fonts/sayinistic.woff2') format('woff2'),
       url('../fonts/sayinistic.woff') format('woff');
  font-display: swap; /* ADD THIS LINE to every @font-face */
  font-weight: normal;
  font-style: normal;
}
```

```html
<!-- In head.php — reorder to put dns-prefetch BEFORE preconnect,
     and add font preload for the primary weight used in hero: -->
<link rel="dns-prefetch" href="https://fonts.googleapis.com">
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Preload only the most-used Rubik weight (400 regular) to unblock first render -->
<link rel="preload" as="font" type="font/woff2" crossorigin
  href="https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-B4i1UA.woff2">
```

---

## Issue #9: Duplicate Mobile Centering Block (~700 Lines)
**Severity**: Medium  
**File**: `assets/css/custom-fixes.css` lines 2663–3158 and 3675–3834  
**Problem**: There are two large `@media (max-width: 767px)` blocks that both target global centering of `h1–h6`, `p`, `section`, and dozens of BEM component selectors. The second block (lines 3675–3834) re-declares many of the same selectors as the first (lines 2663–3128). The overlap adds ~200+ redundant declarations that the browser parses twice.

**Fix**: Merge both blocks into a single `@media (max-width: 767.98px)` rule at the end of the file. Remove duplicates. Estimated size savings: ~6–8KB raw.

---

## Issue #10: `[class*="col-lg-"]` Nuclear Override
**Severity**: Medium  
**File**: `assets/css/custom-fixes.css` line 826  
**Problem**: The `≤991px` responsive block contains:
```css
[class*="col-lg-"], [class*="col-xl-"] { flex: 0 0 100%; max-width: 100%; margin-bottom: 24px; }
```
This forces ALL `col-lg-*` and `col-xl-*` columns to full-width at tablet breakpoint using an attribute selector, which overrides Bootstrap's own responsive grid for every single column on every page. This is an extremely broad nuclear rule that kills all multi-column layouts at 991px and must be manually counter-overridden for every component that wants side-by-side columns at tablet size (e.g., the contact form `.col-xl-6` fix at line 1371 is a direct consequence).

**Fix — Replace with targeted overrides per component:**
```css
/* REMOVE this nuclear rule: */
/* [class*="col-lg-"], [class*="col-xl-"] { flex: 0 0 100%; max-width: 100%; } */

/* REPLACE with explicit stacking only where needed: */
@media (max-width: 991.98px) {
  /* Only stack columns in sections where content ordering matters */
  .case-content .case-left,
  .case-content .case-right {
    flex: 0 0 100%;
    max-width: 100%;
    margin-bottom: 24px;
  }
  /* Allow the grid to work normally for form layouts, footer cols, etc. */
}
```

---

## Proposed CSS Architecture

Recommended modular folder structure — migrate over 4–6 sprints without breaking production:

```
assets/css/
│
├── base/
│   ├── _reset.css          (box-sizing, html/body, overflow guards)
│   ├── _typography.css     (font-face, heading scale, body text)
│   └── _variables.css      (CSS custom properties — colors, spacing, fonts)
│
├── layout/
│   ├── _navbar.css         (navbar, dropdown, mobile hamburger)
│   ├── _footer.css         (site-footer, widget titles, links)
│   └── _grid-overrides.css (targeted Bootstrap column fixes only)
│
├── components/
│   ├── _buttons.css        (thm-btn, view-btn, hero-ghost-btn, aws-btn-*)
│   ├── _modal.css          (aws-modal-overlay, lead modal)
│   ├── _forms.css          (aws-qf-form, comment-form, contact-form focus states)
│   ├── _sliders.css        (case-slider, custom-slider, slider-controls)
│   ├── _cards.css          (healthcare-box, compliance-box, business-model-boxx)
│   ├── _accordions.css     (accrodion, compliant-faqs, development approach)
│   ├── _tabs.css           (tab-buttons, tab-btn, state-tabs, technology-stack-tabs)
│   ├── _floating-ui.css    (aws-float-left, scroll-to-top, skip-to-main)
│   ├── _social.css         (footer-social-wrap, footer-social-icon)
│   └── _logo-strip.css     (footer-logo-scroll, brand-one swiper sizing)
│
├── pages/
│   ├── _home.css           (hero carousel, slide animations, trust chips)
│   ├── _mobile-app-dev.css (counter section, key-features, tech stack tabs)
│   ├── _healthcare.css     (about-page, healthcare-box, medical-compliance)
│   └── _[page-name].css    (one file per major service/solution page)
│
├── utilities/
│   ├── _a11y.css           (focus-visible, skip-to-main)
│   ├── _print.css          (@media print rules)
│   └── _tailwind-compat.css (the Tailwind utility polyfills: .flex, .hidden, etc.)
│
├── responsive/
│   ├── _breakpoints.css    (documented canonical breakpoint values)
│   ├── _mobile-global.css  (consolidated ≤767px global centering — one block)
│   └── _section-spacing.css (section padding normalization — all breakpoints)
│
└── main.css                (imports all partials in correct order)
```

**Build step** (recommended): Use PostCSS with `postcss-import` to concatenate these into a single production bundle, then run through PurgeCSS to eliminate unused selectors (estimated 40–60% reduction on service pages).

---

## CSS Custom Properties System

Replace all hardcoded hex values with a centralized token system. Add this as the first rule in `assets/css/base/_variables.css` and reference in `includes/head.php`:

```css
/* ============================================================
   ArtisticWebServices — Design Token System
   File: assets/css/base/_variables.css
   ============================================================ */

:root {

  /* ── Brand Colors ─────────────────────────────────────────── */
  --color-primary:        #dd0429;   /* Main brand red — USE THIS EVERYWHERE */
  --color-primary-dark:   #b8001f;   /* Hover state */
  --color-primary-darker: #8b0015;   /* Active / pressed state */
  --color-primary-alpha-10: rgba(221, 4, 41, 0.10);
  --color-primary-alpha-30: rgba(221, 4, 41, 0.30);

  /* NOTE: #d31923 and #ec1c22 are off-brand — migrate to --color-primary */

  /* ── Neutrals ─────────────────────────────────────────────── */
  --color-dark:           #17161a;   /* Near-black — headings on dark backgrounds */
  --color-text:           #333333;   /* Body text */
  --color-text-muted:     #555555;   /* Secondary text / descriptions */
  --color-text-light:     #999999;   /* Placeholder / meta text */
  --color-border:         #e5e5e5;   /* Dividers, input borders */
  --color-bg-light:       #f8f8f8;   /* Section backgrounds */
  --color-bg-white:       #ffffff;
  --color-overlay:        rgba(10, 10, 30, 0.75);  /* Modal backdrop */

  /* ── Gold / Accent ─────────────────────────────────────────── */
  --color-gold:           #ffd700;   /* Modal stats highlight */

  /* ── Fonts ────────────────────────────────────────────────── */
  --font-primary:         'Rubik', sans-serif;
  --font-display:         'Federo', serif;

  /* ── Font Sizes (fluid scale) ─────────────────────────────── */
  --text-xs:   12px;
  --text-sm:   13px;
  --text-base: 15px;
  --text-md:   16px;
  --text-lg:   18px;
  --text-xl:   20px;
  --text-2xl:  24px;
  --text-3xl:  2rem;
  --text-4xl:  2.2rem;

  /* ── Spacing ──────────────────────────────────────────────── */
  --space-1:   4px;
  --space-2:   8px;
  --space-3:   12px;
  --space-4:   16px;
  --space-5:   20px;
  --space-6:   24px;
  --space-8:   32px;
  --space-10:  40px;
  --space-12:  48px;
  --space-16:  60px;
  --space-20:  80px;

  /* ── Border Radius ────────────────────────────────────────── */
  --radius-sm:   4px;
  --radius-md:   8px;
  --radius-lg:   12px;
  --radius-xl:   16px;
  --radius-2xl:  20px;
  --radius-pill: 50px;
  --radius-circle: 50%;

  /* ── Shadows ──────────────────────────────────────────────── */
  --shadow-sm:   0 2px 8px rgba(0,0,0,0.08);
  --shadow-md:   0 4px 20px rgba(0,0,0,0.10);
  --shadow-lg:   0 10px 40px rgba(0,0,0,0.14);
  --shadow-primary: 0 6px 20px rgba(221, 4, 41, 0.30);

  /* ── Transitions ──────────────────────────────────────────── */
  --transition-fast:   0.15s ease;
  --transition-base:   0.25s ease;
  --transition-slow:   0.38s ease;

  /* ── Z-index scale ────────────────────────────────────────── */
  --z-dropdown:   1000;
  --z-sticky:     1020;
  --z-fixed:      1030;
  --z-modal-back: 9990;
  --z-modal:      99999;
  --z-tawk:       100000;

  /* ── Navbar ───────────────────────────────────────────────── */
  --navbar-height-desktop: 90px;
  --navbar-height-tablet:  70px;
  --navbar-height-mobile:  65px;
}
```

**Migration example** — replacing hardcoded values in `custom-fixes.css`:
```css
/* BEFORE (current): */
.scroll-to-top {
  background: #dd0429;
  box-shadow: 0 4px 15px rgba(221, 4, 41, 0.4);
}
.scroll-to-top:hover {
  background: #b8001f;
}

/* AFTER (with tokens): */
.scroll-to-top {
  background: var(--color-primary);
  box-shadow: 0 4px 15px var(--color-primary-alpha-30);
}
.scroll-to-top:hover {
  background: var(--color-primary-dark);
}
```

---

## Issue #11: Specificity Wars — 772 `!important` Declarations
**Severity**: High  
**File**: `assets/css/custom-fixes.css`  
**Problem**: 772 `!important` flags indicate the cascade is broken. The root cause is that `style-01.css` (the third-party template) uses high-specificity selectors and inline-ish overrides, and each subsequent fix layer needs to escalate to `!important` to win. Once `!important` is normalized in a codebase, new rules also need `!important` to override existing `!important` rules, creating an arms race.

**Fix strategy — Specificity layering with `@layer`:**
```css
/* In main.css — declare explicit cascade layers so custom code
   always wins without !important */
@layer reset, vendor, theme, layout, components, utilities, overrides;

/* Then assign existing files to layers: */
@layer vendor {
  @import url('/assets/vendors/bootstrap/css/bootstrap.min.css');
  @import url('/assets/css/style-01.css@v=1.1.css');
}

@layer layout {
  @import url('/assets/css/layout/_navbar.css');
  @import url('/assets/css/layout/_footer.css');
}

@layer components {
  @import url('/assets/css/components/_buttons.css');
  /* etc. */
}

/* Rules in @layer overrides always beat vendor without !important */
@layer overrides {
  /* Put specificity fixes here — NO !important needed */
  .navbar .nav-link { color: #222; } /* beats Bootstrap without !important */
}
```
This approach alone can eliminate 80–90% of `!important` declarations.

---

## Issue #12: Inline Styles in HTML Content (inline `style=""`)
**Severity**: Low  
**Files**: Multiple PHP pages  
**Problem**: `footer.php` line 725 contains `style="color:#dd0429;"` inline on icon elements. Several pages use `style="height: 550px"` on section elements, which `custom-fixes.css` then fights with `section[style*="height: 550px"] { height: auto !important; }` — a CSS selector targeting inline style strings. This is a code smell: the correct fix is to remove the inline style and use a class instead.

**Fix:**
```html
<!-- BEFORE (footer.php line 725): -->
<i class="fa fa-envelope me-1" style="color:#dd0429;"></i>

<!-- AFTER: -->
<i class="fa fa-envelope me-1 text-primary-brand"></i>
```
```css
/* In _utilities.css: */
.text-primary-brand { color: var(--color-primary); }
```

---

## Performance Impact Estimates

| Optimization | Est. Raw Size Reduction | Est. Gzip Size Reduction | LCP Impact |
|---|---|---|---|
| Async load non-critical vendor CSS | 0KB (deferred, not removed) | — | -0.4–0.8s (unblocks paint) |
| FA icon subset (30 icons vs 2000+) | ~85KB raw | ~18KB | -0.2–0.4s |
| Remove duplicate mobile centering block | ~8KB | ~2KB | Marginal |
| Externalize + deduplicate component CSS | ~30KB | ~8KB | Marginal |
| PurgeCSS on full bundle (unused selectors) | ~180–220KB raw | ~40–60KB | -0.2–0.5s |
| jQuery defer / move to footer | ~87KB (deferred) | — | -0.1–0.2s |
| Remove 4th/5th slider library (Tiny + bx) | ~20KB JS + 5KB CSS | ~6KB | -0.05–0.1s |
| Conditional slider CSS per page | ~25KB CSS | ~6KB | -0.1–0.2s on non-slider pages |
| font-display: swap on custom font | 0KB size | — | Reduces FCP flash |
| Inline critical CSS (~1.5KB) | New addition | — | -0.3–0.6s (eliminates render-block) |
| **Total estimated savings** | **~350–430KB raw** | **~80–100KB** | **-0.8–1.4s LCP** |

---

## Priority Roadmap

| Priority | Task | Effort | Impact | Sprint |
|---|---|---|---|---|
| P0 | Inline critical CSS (~1.5KB) for first paint | 2h | Critical LCP | Sprint 1 |
| P0 | Defer jQuery to footer / restructure inline scripts | 3h | High LCP | Sprint 1 |
| P0 | Async-load non-critical vendor CSS (media print trick) | 2h | High LCP | Sprint 1 |
| P1 | FA icon subset — remove full CDN bundle | 4h | High (102KB saved) | Sprint 2 |
| P1 | Resolve 3 brand red colors → single `#dd0429` token | 3h | Design consistency | Sprint 2 |
| P1 | Add `:root` CSS custom properties file | 3h | Architecture | Sprint 2 |
| P1 | Remove duplicate mobile centering block (lines 3675–3834) | 1h | Medium | Sprint 2 |
| P2 | Fix nuclear `[class*="col-lg-"]` override | 4h | Stability | Sprint 3 |
| P2 | Externalize footer.php `<style>` block into `components/modal.css` etc. | 4h | Cacheability | Sprint 3 |
| P2 | Externalize `index.php` hero styles into `pages/home.css` | 2h | Cacheability | Sprint 3 |
| P2 | Conditional carousel CSS loading per page | 6h | Medium CSS per page | Sprint 3 |
| P3 | Migrate `custom-fixes.css` to modular folder structure | 16h | Long-term maintainability | Sprint 4–5 |
| P3 | Introduce `@layer` cascade control (eliminate `!important` arms race) | 8h | Long-term stability | Sprint 4–5 |
| P3 | Set up PurgeCSS in build pipeline | 8h | 40–60% CSS reduction | Sprint 5 |
| P3 | Page-scoped CSS for each service page (extract from monolith) | 20h | Per-page size savings | Sprint 5–6 |

---

## Appendix: Specific Code Locations for Immediate Fixes

| Issue | File | Line(s) |
|---|---|---|
| jQuery blocking in `<head>` | `includes/head.php` | 106 |
| Font Awesome full CDN bundle | `includes/head.php` | 81 |
| 3 competing red hex values | `assets/css/custom-fixes.css` | 63, 1926, 3411 |
| Nuclear col-lg override | `assets/css/custom-fixes.css` | 826 |
| Duplicate 767px centering block | `assets/css/custom-fixes.css` | 3675–3834 |
| 600 lines inline CSS in footer | `includes/footer.php` | 22–626 |
| Hero inline CSS in index.php | `index.php` | 19–380 |
| `style="color:#dd0429"` inline | `includes/footer.php` | 725 |
| `section[style*="height: 550px"]` CSS hack | `assets/css/custom-fixes.css` | 967–968 |
| Custom font missing `font-display: swap` | `assets/vendors/the-sayinistic-font/stylesheet.css` | All `@font-face` blocks |
| 5 slider libraries unconditionally loaded | `includes/head.php` | 87–95, footer.php 904–908 |
