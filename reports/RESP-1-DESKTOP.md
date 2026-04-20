# Responsive Audit — Desktop (1200px+)
**Engineer**: Responsive Engineer #1
**Date**: April 2026
**Scope**: Layout / sizing issues only — no visual design changes

---

## Issues Found & Fixed

### Issue #1 — Navbar Logo Capped at 50px by `max-height` (CRITICAL)
- **Element**: `.navbar-brand img`
- **Problem**: `custom-fixes.css` set `max-height: 50px` on `.navbar-brand img`.
  The HTML attribute and the `<style>` block inside `header.php` both set `height: 70px`
  on the same element. CSS `max-height` overrides `height` regardless of specificity or
  source order — so the logo was silently capped at 50px on desktop instead of the
  intended 70px, making it appear small and under-branded.
- **Fix Applied**: Yes
- **File**: `assets/css/custom-fixes.css` — section "2. Navbar styling"
- **Code**:
```css
/* Before */
.navbar-brand img {
    max-height: 50px;
    width: auto;
}

/* After */
.navbar-brand img {
    max-height: 70px;   /* matches header.php inline height:70px */
    width: auto;
}
@media (max-width: 991.98px) {
    .navbar-brand img {
        max-height: 52px;
    }
}
```

---

### Issue #2 — `overflow-x: hidden` on `<html>` Breaks Sticky & Clips Mega-Menus (HIGH)
- **Element**: `html, body { overflow-x: hidden }`
- **Problem**: Applying `overflow-x: hidden` to the `<html>` element is known to:
  1. Disable `position: sticky` on any descendant (the browser converts the scroll
     container from `<html>` to `<body>`, breaking sticky children).
  2. On viewports wider than the navbar container (1600px+), the mega-menu dropdowns
     (`position: absolute; width: 100vw`) can be clipped because the `<html>` element
     is the scroll ancestor.
  The `overflow-x: hidden` is only needed on `<body>` to prevent page-level horizontal
  scrollbars from animated elements sliding in from off-screen.
- **Fix Applied**: Yes
- **File**: `assets/css/custom-fixes.css` — "Global overflow guard" section (~line 1032)
- **Code**:
```css
/* Before */
html, body {
    overflow-x: hidden;
    -webkit-overflow-scrolling: touch;
}

/* After */
html {
    -webkit-overflow-scrolling: touch;
    /* overflow-x NOT set — keeps <html> as valid sticky ancestor */
}
body {
    overflow-x: hidden;   /* safe: prevents page-level horizontal scrollbars */
    -webkit-overflow-scrolling: touch;
}
```

---

### Issue #3 — No Explicit Desktop (`@media min-width: 1200px`) Container/Navbar Guard (MEDIUM)
- **Element**: `.navbar > .container`, `.navbar .dropdown-menu.w-100`
- **Problem**: At viewports wider than 1320px (e.g. 1600px, 1920px) the Bootstrap
  `.container` inside the navbar could expand beyond the comfortable reading width, and
  the mega-menu dropdowns (already using `w-100`) had no explicit `max-width: 100vw`
  cap, potentially producing a sub-pixel horizontal scrollbar edge-case on ultra-wide
  displays. There was no `@media (min-width: 1200px)` block enforcing navbar container
  width or mega-menu bounds.
- **Fix Applied**: Yes
- **File**: `assets/css/custom-fixes.css` — new "DESKTOP LAYOUT FIXES" block appended at EOF
- **Code**:
```css
@media (min-width: 1200px) {
    .navbar > .container {
        max-width: 1320px;
        margin-left: auto;
        margin-right: auto;
    }
}

@media (min-width: 992px) {
    .navbar .dropdown-menu.w-100 {
        max-width: 100vw;
        left: 0 !important;
        right: 0 !important;
    }
}
```

---

### Issue #4 — Hero Headline Capped Below 48px Recommended Minimum (MEDIUM)
- **Element**: `#carouselExampleDark .hero-video-caption .slide-h2`
- **Problem**: The hero H2 uses `clamp(2rem, 3.2vw, 2.9rem)`. At 1200px, `3.2vw = 38.4px`,
  which is well inside the clamp range. The cap of `2.9rem = 46.4px` is below the
  recommended 48px–72px desktop hero heading range. At 1400px+ the viewport is wide
  enough to render larger text but the clamp ceiling prevents it.
- **Fix Applied**: Yes — at `min-width: 1400px` the cap is lifted to `clamp(2.9rem, 3.6vw, 3.5rem)` (56px max).
- **File**: `assets/css/custom-fixes.css` — new "DESKTOP LAYOUT FIXES" block
- **Code**:
```css
@media (min-width: 1400px) {
    #carouselExampleDark .hero-video-caption .slide-h2 {
        font-size: clamp(2.9rem, 3.6vw, 3.5rem) !important;
    }
}
```

---

### Issue #5 — Missing Desktop Typography Baseline (MEDIUM)
- **Element**: `body`, `h1`, `h2`, `h3`
- **Problem**: `custom-fixes.css` had multiple mobile/tablet `max-width` blocks scaling
  headings down with `!important`, but no corresponding `min-width: 1200px` block to
  establish the desktop baseline. Without explicit desktop typography rules, the actual
  rendered sizes depended entirely on style-01.css defaults (which vary per template
  section) and could produce inconsistent heading sizes across pages at 1200px+.
- **Fix Applied**: Yes
- **File**: `assets/css/custom-fixes.css` — new "DESKTOP LAYOUT FIXES" block
- **Code**:
```css
@media (min-width: 1200px) {
    body { font-size: 16px; line-height: 1.7; }
    h1   { font-size: 52px; line-height: 1.15; }
    h2   { font-size: 36px; line-height: 1.25; }
    h3   { font-size: 26px; line-height: 1.3; }
}
```

---

### Issue #6 — Missing Desktop Footer Column Guard (LOW)
- **Element**: `.site-footer__middle-inner .row > .col-xl-3 / .col-xl-2`
- **Problem**: The footer HTML correctly uses Bootstrap `col-xl-3` and `col-xl-2` classes
  for a 5-column (3+2+2+2+3 = 12) desktop grid. However, there was no explicit CSS
  fallback to prevent any future `!important` theme override from collapsing columns.
- **Fix Applied**: Yes — defensive `@media (min-width: 1200px)` block added to reinforce
  the 5-column footer layout.
- **File**: `assets/css/custom-fixes.css` — new "DESKTOP LAYOUT FIXES" block

---

## Issues Found But Need Design Decision

### Decision #1 — Navbar `body { padding-top }` Conflict
- **Element**: `body { padding-top }`
- **Problem**: `custom-fixes.css` sets `body { padding-top: 90px }` as the base rule.
  `index.php` overrides this with an inline `<style>` block setting `body { padding-top: 75px }`.
  The carousel then does `margin-top: -75px` to pull the hero under the navbar.
  This means the homepage hero and all other pages have different `padding-top` values.
  On inner pages the 90px rule applies; on the homepage the 75px inline rule wins.
  This is inconsistent but functional — fixing it would require aligning all pages to
  a single value and updating the carousel's `margin-top` accordingly.
- **Recommendation**: Standardize to `padding-top: 90px` on all pages and update
  `index.php` carousel `margin-top: -90px` to match, then remove the homepage inline override.

### Decision #2 — Mega-Menu Dropdown Inner Container Width
- **Element**: `.dropdown-menu .container` (inside mega-menu)
- **Problem**: The mega-menu uses `.container` inside `.dropdown-menu.w-100`. At 1400px+
  viewports the mega-menu spans full viewport width but the inner `.container` is
  constrained by Bootstrap/theme max-width, creating empty side gutters. This is by
  design but the gutters may look uneven against the full-bleed dropdown background.
- **Recommendation**: Design team to decide if mega-menu inner container should match
  the navbar container width (1320px) or remain at Bootstrap default (1140px/1320px xl).

---

## Passed Checks

| Check | Result |
|---|---|
| Viewport meta tag (`width=device-width, initial-scale=1`) | PASS — present in head.php line 34 |
| CSS load order (Bootstrap → style-01 → custom-fixes) | PASS — correct blocking order in head.php |
| Navbar z-index on desktop | PASS — Bootstrap `.fixed-top` sets 1030; reinforced in new desktop block |
| Hero background video coverage (`object-fit: cover`) | PASS — `.hero-video-bg { object-fit: cover }` in index.php |
| Hero min-height for desktop | PASS — `min-height: 100vh` set on carousel wrapper |
| CTA button size on desktop | PASS — `.thm-btn { padding: 14px 36px; font-size: 15px }` |
| Bootstrap container present in navbar | PASS — `<div class="container">` inside `<nav>` |
| Service card columns (`col-lg-3` = 4-up on desktop) | PASS — Bootstrap grid handles correctly |
| Footer 5-column grid on desktop | PASS — col-xl-3+2+2+2+3 = 12 columns |
| Footer content max-width | PASS — wrapped in `.container` |
| Sticky header overlap fix (`body padding-top`) | PASS — 90px base + page-specific overrides |
| Mega-menu hover open on desktop | PASS — `.dropdown:hover > .dropdown-menu { display: block }` at min-width:992px |
| Mega-menu keyboard accessibility | PASS — WCAG 2.1.1 keyboard JS present in header.php |
| Section overflow-x on mobile | PASS — scoped to `max-width: 767px` breakpoints |

---

## Summary

| Severity | Count | Fixed |
|---|---|---|
| Critical | 1 | 1 |
| High | 1 | 1 |
| Medium | 3 | 3 |
| Low | 1 | 1 |
| Need Design Decision | 2 | — |
| **Total** | **6** | **6** |

### Files Modified
- `assets/css/custom-fixes.css` — 3 targeted edits + 1 desktop block appended

### Changes Made
1. `.navbar-brand img { max-height }` raised from 50px → 70px (desktop) / 52px (mobile)
2. `html, body { overflow-x: hidden }` split — removed from `<html>`, kept on `<body>`
3. New `@media (min-width: 1200px)` and `@media (min-width: 992px)` desktop guard block added at EOF containing: navbar container max-width cap (1320px), mega-menu overflow guard, hero carousel min-height reinforcement, hero headline size lift at 1400px+, footer 5-column reinforcement, and desktop typography baseline.
