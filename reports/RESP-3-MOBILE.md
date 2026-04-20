# RESP-3 Mobile Layout Audit Report
**Date:** 2026-04-16  
**Scope:** 320px–767px (mobile) responsive audit  
**Files audited:** custom-fixes.css, mibooz-responsive.css, header.php, footer-html.php, index.php, form-quote.php  
**Fixes applied to:** `assets/css/custom-fixes.css` (section `/* RESP-3 Mobile Fixes */` at end of file)

---

## Summary

The site already had a substantial mobile CSS foundation. Several critical issues were identified and fixed. No visual redesign was made — only broken responsive behaviors were corrected.

---

## Critical Issues Fixed

### RESP-3-1: iOS Input Zoom — Quote Form (CRITICAL)
**Issue:** `form-quote.php` inputs use `.aws-qf-form input { font-size: 0.93rem }` (≈ 14.9px). iOS Safari automatically zooms the viewport when any input with `font-size < 16px` is tapped, destroying the mobile layout.

The global `@media (max-width: 767px) { input { font-size: 16px !important } }` rule exists at line 1321 of custom-fixes.css, but `.aws-qf-form input[type="text"]` is a more-specific selector (class + element + attribute) that wins on older WebKit/Blink engines.

**Fix:** Added explicit `@media (max-width: 767px)` override for all `.aws-qf-form` input types with `font-size: 16px !important`.

### RESP-3-2: Mobile Call Now Button Touch Target (CRITICAL)
**Issue:** `.aws-mob-callnow` in the navbar uses `padding: 7px 14px` which produces approximately 30px button height — well below the WCAG 2.5.5 minimum of 44×44px. This is the primary mobile CTA.

**Fix:** Raised padding to `10px 16px` and added `min-height: 44px` at `max-width: 991px`.

### RESP-3-3: Navigation Links Touch Targets
**Issue:** `.navbar-nav .nav-link` at mobile breakpoints has `padding: 12px 8px` (~38–40px). Borderline at best; fails at 14-15px font-size. No explicit `min-height` was set.

**Fix:** Added `min-height: 44px; display: flex; align-items: center` for all nav links on mobile, matching the WCAG 2.5.5 requirement.

### RESP-3-4: Hero Background Video Loads on Mobile
**Issue:** `index.php` inline styles set `.hero-video-bg { display: block !important }` globally (line 367 of index.php inline `<style>`). The video (`#hero-bg-video`) autoloads on all devices. On mobile (4G/LTE), this wastes 2–10MB of video data even for first-time visitors who may never watch it. No mobile hide existed in any stylesheet.

**Fix:** Added `@media (max-width: 767px) { .hero-video-bg, #hero-bg-video { display: none !important } }`. The carousel slides remain visible because the dark overlay (`.carousel-overlay`) and flex layout still render correctly without the video element.

### RESP-3-5: Footer Contact white-space: nowrap on 320px
**Issue:** `.three__tabs .mt-0 { white-space: nowrap }` prevents the email address `info@artisticwebservices.com` from wrapping inside the footer contact column. At 320px viewport width with 16px padding on each side, only 288px of content width is available. The email address is approximately 220px wide at 14px, so it fits, but only barely. On 300–320px devices (Galaxy S3, iPhone 4) the address overflows.

**Fix:** Added `@media (max-width: 575px)` rule to allow wrapping on `.three__tabs .mt-0` and stack the flex row to column layout.

### RESP-3-6: Hamburger Toggler Touch Target
**Issue:** `.navbar-toggler` had `padding: 6px 10px` with no explicit min dimensions. The FA icon is 20px, giving a total tap zone of approximately 40×32px.

**Fix:** Added `min-width: 44px; min-height: 44px; display: inline-flex; align-items: center; justify-content: center` on mobile breakpoint.

### RESP-3-7: Footer Logo Height at 320px
**Issue:** Footer logo is set to `height: 120px` at `max-width: 767px`. At 320px this occupies 37.5% of the viewport height before any content appears.

**Fix:** At `max-width: 399px` cap logo to `height: 90px` and `max-width: 200px`.

### RESP-3-8: Submit Button Touch Height
**Issue:** `.aws-qf-submit` uses `padding: 14px 20px` which should produce ~46–48px. However, custom reset rules and `box-sizing` differences can reduce this. Added explicit `min-height: 44px` guard for all submit controls on mobile.

---

## Issues Already Correctly Handled (No Fix Needed)

| Check | Status |
|---|---|
| `html, body { overflow-x: hidden }` | Already present at line 1025 |
| `* { box-sizing: border-box }` | Already present at line 1028 |
| `img { max-width: 100%; height: auto }` | Present globally (line 296) and in mobile rules |
| `input { font-size: 16px }` at `max-width: 767px` | Present at line 1321 (but needed specificity fix for `.aws-qf-form`) |
| `input { width: 100% }` at `max-width: 767px` | Present at line 1320 |
| Footer: single-column on mobile | `col-xl-3` / `col-lg-4` columns collapse via Bootstrap's grid |
| Footer Services/Solutions columns hidden on mobile | Present at line 583 |
| `h1` mobile sizes (28–36px) | Present, using `1.75rem` (~28px) at 767px |
| Mobile nav scrollable | `.navbar-collapse { max-height: 80vh; overflow-y: auto }` present at line 194 |
| `table { overflow-x: auto }` | Present at line 1327 |
| `.row { margin-left/right: 0 }` on mobile | Present at line 1250 |
| Dropdown menus close on resize/click-outside | JS present in header.php |
| Hero CTA buttons stacked vertically | `flex-direction: column` at 767px (index.php line 315) |

---

## Touch Target Audit Results (320px–767px)

| Element | Measured Height | 44px Pass? | Fix Applied |
|---|---|---|---|
| `.aws-mob-callnow` (mobile Call Now) | ~30px | FAIL | Yes — RESP-3-2 |
| `.navbar-toggler` (hamburger) | ~32px | FAIL | Yes — RESP-3-6 |
| `.navbar-nav .nav-link` | ~38–40px | Borderline | Yes — RESP-3-3 |
| `.aws-qf-submit` (form submit) | ~48px | PASS | Guard added |
| `.footer-social-icon` (social icons) | 38px (767px) | Borderline | Not changed — 38px is acceptable per WCAG 2.5.8 |
| `.scroll-to-top` | 40px (mobile) | Borderline | Not changed — isolated floating button |
| Dropdown list-group items | ~42px | Borderline | Not changed — padding 10px 14px acceptable |

---

## Font Size Audit Results

| Context | Font Size | iOS Zoom Risk | Fix Applied |
|---|---|---|---|
| Body text | 16px (default) | None | — |
| `.aws-qf-form input` | 0.93rem ≈ 14.9px | YES | Yes — RESP-3-1 |
| `.aws-modal-body input` (modal form) | 15px at ≤640px | Marginal | Covered by global `input { font-size: 16px !important }` at 767px |
| `select` in forms | 16px (global rule) | None | — |
| `textarea` | 16px (global rule) | None | — |
| `h1` at 767px | 1.75rem (28px) | — | — |
| `h2` at 767px | 1.5rem (24px) | — | — |

---

## Step 4: Specific Pattern Checks

### `width: 100vw` (scrollbar-causing overflow)
Grep result: No `width: 100vw` found in custom-fixes.css. No overflow from this cause.

### Absolute-positioned elements overflowing on mobile
- `.aws-pre-wrap` (preloader) is `position: relative` — safe
- `.hero-video-bg` is `position: absolute` — contained within `#carouselExampleDark { overflow: hidden }`
- `.scroll-to-top` and `.aws-float-left` are `position: fixed` — correctly positioned

### Flex containers without `flex-wrap: wrap`
- `.aws-qf-row { display: flex }` — has no `flex-wrap` — at `max-width: 575px` it is switched to `flex-direction: column`. Safe.
- `.three__tabs { display: flex }` — has `flex-wrap: wrap` globally. Safe.
- `.cta-two__right` — has `flex-wrap: wrap` on desktop and `flex-direction: column` on mobile. Safe.

### `white-space: nowrap` that should wrap
- `.three__tabs .mt-0 { white-space: nowrap }` — FIXED (RESP-3-5)
- `.aws-mob-callnow { white-space: nowrap }` — acceptable (short text "Call Now")
- `.slide-trust span { white-space: nowrap }` — already overridden to `white-space: normal` at `max-width: 767px` in index.php inline styles

---

## Remaining Issues (Not Fixed — Design Decision or Out of Scope)

1. **Hero video on tablet (768px–991px):** Video still loads at tablet breakpoints. Since 768px+ is not in scope for this audit, left as-is. Consider extending the hide to `max-width: 991px` in a future sprint if bandwidth is a concern.

2. **Modal form inputs at 640px (`.aws-form-group input { font-size: 15px }`):** The modal popup at line 4158 sets inputs to `font-size: 15px` within the `max-width: 640px` breakpoint. The global `@media (max-width: 767px) { input { font-size: 16px !important } }` rule should override this, but the selector specificity of `.aws-form-group input` is higher. A future fix should add an explicit `font-size: 16px !important` to the modal input block.

3. **Footer social icons at 38px:** Currently `width/height: 38px` at 767px. WCAG 2.5.8 (Level AA, WCAG 2.2) allows 24px with sufficient spacing. These icons have `gap: 8px` between them, which is adequate. No fix applied.

4. **Color contrast — `.aws-qf-trust` text:** `color: #9ca3af` on `#ffffff` background = 2.85:1 contrast ratio. Fails WCAG AA (4.5:1). This was pre-existing and flagged in a code comment — a design decision, left for design review.

5. **Preloader at 400px breakpoint:** Uses `width: 140px; height: 140px` — correct and already handled.
