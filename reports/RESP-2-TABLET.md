# RESP-2 — Tablet Layout Audit Report (768px–1199px)

**Date:** 2026-04-16
**Auditor:** Senior Frontend Engineer (Responsive Design)
**Scope:** Layout and sizing fixes for the 768px–1199px tablet breakpoint range
**Files read:** mibooz-responsive.css, custom-fixes.css, header.php, footer.php, footer-html.php, index.php (first 200 lines)
**Fixes applied to:** `assets/css/custom-fixes.css` (appended under `/* RESP-2 Tablet Fixes */`)

---

## 1. Breakpoint Map

| Range | Bootstrap tier | Nav state | Key behaviour |
|---|---|---|---|
| 1200px+ | xl | Desktop nav (hover mega-menu) | Full 5-col layout |
| 992px–1199px | lg | Desktop nav (hover mega-menu) | lg tablet — mega-menu cramped, footer wraps |
| 768px–991px | md | Hamburger (`.navbar-expand-lg` collapses at 992px) | 2-col grid, footer 2-col |
| < 768px | sm/xs | Hamburger | Full mobile — covered by RESP-3-MOBILE |

**Collapse breakpoint confirmed:** 992px (Bootstrap `.navbar-expand-lg`). Between 768px–991px the hamburger toggler is shown — correct Bootstrap default behaviour. The desktop nav is NOT shown at 768px–991px; the full mobile accordion dropdown applies.

---

## 2. Navigation Audit (768px–1199px)

### 768px–991px (hamburger range)

- **Hamburger shown:** Yes — `.navbar-expand-lg` collapses at 992px. Correct.
- **Full desktop nav visible at 768px:** No. Hamburger only.
- **Nav items clipped:** No — the collapsed nav uses `max-height: 80vh; overflow-y: auto`, which handles overflow.
- **Mega-menu at mobile:** Works correctly. `mobileDrpToggle()` + accordion CSS (`position:static`, left red border, `menu-show` animation) all apply.
- **Issue found (T1):** `custom-fixes.css` global `navbar-brand img { max-height: 50px }` (line 77) conflicts with `header.php` inline `height:52px` for ≤991px. The 50px cap clips the logo by 2px. **Fixed.**
- **Issue found (T8):** Inside the collapsed nav at tablet, `.aws-call-now-btn` does not stretch to fill its container, appearing left-aligned and narrow. **Fixed** — set `width:100%; justify-content:center`.

### 992px–1199px (desktop nav, lg tablet)

- **Mega-menu:** Desktop hover dropdowns active. 4-column layout inside dropdown.
- **Issue found (T7):** At ~992px the 4-column mega-menu with full Bootstrap padding is cramped — `list-group-item` items with 16px padding overflow or wrap awkwardly. **Fixed** — reduced to 13px font, 8px/10px padding, 8px column gutters.
- **Mega-menu overflow:** Confirmed `.dropdown-menu.w-100` can cause horizontal scroll at exactly 992px if inner content exceeds viewport. **Fixed** — added `overflow-x: hidden`.

---

## 3. Grid Columns at Tablet

### col-md-* / col-lg-* natural stacking

- Bootstrap's responsive grid handles most stacking correctly:
  - `col-md-6` → 2-col at 768px+ (service cards). Correct.
  - `col-lg-4` → 3-col at 992px+, fallback to full-width at 768px–991px. Observed in footer.

### Issue: col-xl-4 nuclear override (T14)

**Custom-fixes.css Fix 11** (line 850) forces `.col-xl-4 { flex: 0 0 50%; max-width: 50% }` at `≤1199px`. This is overly broad — it collapses any 3-column grid using `col-xl-4` (service cards, feature grids) to 2-col at 992px–1199px when those grids should stay 3-col.

**Fixed (T14):** At `min-width:992px` and `max-width:1199px`, `.row .col-xl-4` is restored to `33.333%` with an exception for `.case-content .col-xl-4` (which legitimately uses 2-col).

### Issue: col-xl-6 flattened at 768px–991px (T15)

The `≤991px` block at line 1427 forces `[class*="col-xl-"]` to `100%`. At 768px–991px, col-xl-6 column pairs (e.g., service feature splits) should remain 2-across (equivalent to col-md-6). **Fixed (T15):** Restored `.row .col-xl-6` to 50% at 768–991px, with hero/banner exceptions staying full-width.

### 3-column service grids → 2-column at tablet

- `mibooz-responsive.css` 768–991 block: `.services-two__single { width: 50% }` — correct.
- `feature-one__single { width: 50%; margin-bottom: 20px }` — correct.
- `how-it-works__process-single { width: 50% }` — correct.
- No action needed for these elements.

---

## 4. Hero at 768px–1199px

### Hero height / min-height

- `#carouselExampleDark` uses `min-height: 100vh` — appropriate for all screen sizes.
- No separate height constraint broken at tablet.

### Hero text

- **Desktop:** `font-size: clamp(2rem, 3.2vw, 2.9rem)` — at 992px this evaluates to ~30px (3.2vw × 992 = 31.7px → clamped to 2.9rem = 46.4px). Appropriate.
- **At ≤1199px (Fix 11):** overrides to `2rem` (32px) — acceptable.
- **At ≤991px:** drops to `1.75rem` (28px) — bottom of the 36–48px tablet target range. The mibooz-responsive.css rule for 768–991px was not setting `.slide-h2` specifically.
- **Fixed (T2):** Added `clamp(2rem, 4vw, 2.5rem)` for the full 768–1199px range, giving ~32–40px — sits within the 36–48px target range at most tablet sizes.

### Hero padding issue (T2)

- `carousel-item` inline style `padding: 105px 0 48px` is set in `index.php` for desktop. At tablet (768–1199px) this 105px top-padding pushes content far down, wasting vertical space, especially on shorter tablet viewports.
- **Fixed (T2):** Reduced to `padding-top: 90px` at 768–1199px.

### Hero CTA buttons (T13)

- `thm-btn` + `hero-ghost-btn` side-by-side with `margin-left: 12px` on the ghost btn.
- At 768px the total button width + margin can be near the caption width limit.
- **Fixed (T13):** Added `margin-bottom: 8px` on both buttons to allow graceful wrapping if needed. Trust-chip pills scaled from 13px → 12px at tablet.

---

## 5. Service Cards / Feature Sections

| Section | Desktop | Tablet expected | Actual | Status |
|---|---|---|---|---|
| services-two__single | 3-col | 2-col (768–991) / 3-col (992–1199) | Width:50% at 768–991 (mibooz) | Correct |
| feature-one__single | 4-col | 2-col | Width:50% (mibooz) | Correct |
| how-it-works__process | 4-col | 2-col | Width:50% (mibooz) | Correct |
| mvp-services grid | repeat(4,1fr) | repeat(2,1fr) at ≤991 | Handled in custom-fixes | Correct |
| col-xl-4 grids | 3-col | Should be 3-col at 992–1199 | Broken by Fix 11 override | Fixed (T14) |
| col-xl-6 pairs | 2-col | Should be 2-col at 768–991 | Broken by col-xl-* 100% rule | Fixed (T15) |

---

## 6. Footer at Tablet

### Footer HTML columns

```
col-xl-3  — About / Logo        (1)
col-xl-2  — Quick Links         (2)
col-xl-2  — Services            (3)
col-xl-2  — Solutions           (4)
col-xl-3  — Connect With Us     (5)
```

The `col-lg-4` classes on each column mean Bootstrap renders them 3-across at 992px+, causing columns 4 and 5 to wrap to a second row unexpectedly.

**Fixes applied:**

- **T4 (992–1199px):** 40% / 30% / 30% for first three cols; 50% / 50% for cols 4+5 on a second row.
- **T5 (768–991px):** Col 1 = 100% (full-width about section); Cols 2–5 = 50% each (2-across link grid).

### Footer link spacing (T5)

Added `padding-right: 16px` on `.footer-widget__links` at 768–991px to prevent link text touching the adjacent column.

### Footer contact inline (T6)

`.three__tabs` uses `flex-direction: row; gap: 30px` — at 768px with a long email address (`info@artisticwebservices.com`) this can overflow the column. **Fixed:** Added `flex-wrap: wrap; gap: 12px` for `.footer-contact-inline.three__tabs` at tablet.

### Footer social icons (T4/T5 range)

Already handled by existing `@media (max-width: 991.98px)` block (line 3323) — `footer-social-wrap` centers at tablet. No action needed.

---

## 7. Typography at Tablet

| Element | Desktop | 768–991px target | Actual before fix | Fix applied |
|---|---|---|---|---|
| H1 | ~2.5–3rem | 2rem | 2rem (Fix 11 ≤991px) | Correct |
| H2 | ~2rem | 1.75rem | 1.75rem (Fix 11 ≤991px) | Correct |
| H3 | ~1.5rem | 1.35rem | 1.35rem (Fix 11 ≤991px) | Correct |
| `.section-title__title` | 2rem global | 30px | 34px (mibooz) vs 28px (h2 override) — conflict | Fixed T3: 30px |
| `p.section-title__paragraph` | 16px | 16px | 20px (mibooz) — too large | Fixed T3: 16px |
| body / p | 16px | 15px | Not set for tablet range | Fixed T10: 15px |

---

## 8. Conflicting Rules Found

| Conflict | Location | Resolution |
|---|---|---|
| `navbar-brand img max-height:50px` vs inline `height:52px` | custom-fixes.css line 77 vs header.php | T1: force 52px at tablet |
| `.section-title__title` 34px (mibooz) vs 28px h2 override (Fix 11) | mibooz-responsive.css line 174 vs custom-fixes.css line 865 | T3: explicit 30px bridges gap |
| `.col-xl-4` → 50% (Fix 11) breaks 3-col service grids at 992–1199px | custom-fixes.css line 850 | T14: restore 33.333% for `.row .col-xl-4` |
| `[class*="col-xl-"]` → 100% (line 1428) collapses valid 2-col pairs at 768–991px | custom-fixes.css line 1427 | T15: restore `.row .col-xl-6` to 50% |
| Footer col-lg-4 → 3-across wraps col 4+5 at 992–1199px | footer-html.php col classes | T4: explicit flex widths |
| Nested `@media` inside `@media` in mibooz-responsive.css | lines 876–1004 | T11: duplicate rules at top level as fallback |

---

## 9. Issues Found and Fixed (Summary)

| ID | Category | Description | Fix |
|---|---|---|---|
| T1 | Navigation | Navbar logo 2px height conflict at tablet | Force `height:52px; max-height:52px` at 768–991px |
| T2 | Hero | Carousel padding 105px too tall at tablet; slide-h2 size smoothed | Reduce to 90px top; clamp(2rem,4vw,2.5rem) |
| T3 | Typography | section-title__title conflict: 34px vs 28px at 768–991px | Explicit 30px, paragraph 16px |
| T4 | Footer | 5 columns wrap to 2 rows at 992–1199px (col-lg-4 3-across) | 40/30/30 + 50/50 layout |
| T5 | Footer | All 5 cols stack individually at 768–991px | About = 100%; cols 2–5 = 50% (2-across) |
| T6 | Footer | .three__tabs email overflow at 768px | `flex-wrap:wrap; gap:12px` |
| T7 | Navigation | Mega-menu 4-col cramped at 992px; items overflow/wrap | 13px font, 8/10px padding, 8px col gutters |
| T8 | Navigation | Call Now btn inside collapsed nav not stretched | `width:100%; justify-content:center` |
| T9 | Spacing | Inline `padding:120px+` sections not caught by Fix 11 `section` selector | Added attribute selectors for inline padding overrides |
| T10 | Typography | No explicit body/p font-size for 768–991px range | Set 15px / line-height:1.7 |
| T11 | CSS Bug | Nested `@media` in mibooz-responsive.css may be silently dropped | Duplicate critical rules at top level |
| T12 | Images | No `max-width:100%; height:auto` for img at 768–1199px | Added safety rule for tablet range |
| T13 | Hero | Button pair (thm-btn + ghost-btn) tight at 768px | `margin-bottom:8px`; compact trust pills |
| T14 | Grid | `.col-xl-4 → 50%` Fix 11 breaks 3-col service grids at 992–1199px | Restore 33.333% for `.row .col-xl-4` |
| T15 | Grid | `[class*="col-xl-"] → 100%` collapses valid 2-col pairs at tablet | Restore `.row .col-xl-6 → 50%` at 768–991px |

---

## 10. Remaining Items Needing Design Decision

| Item | Location | Decision needed |
|---|---|---|
| **Hero video height at lg tablet (992–1199px)** | `#carouselExampleDark` | `min-height: 100vh` on a landscape tablet iPad Pro (1024×1366px portrait = 1366px height) means the hero is very tall. Design team to decide if 80vh is better for landscape tablet. |
| **Footer: Services + Solutions cols hidden at ≤767px** | custom-fixes.css line 582 | Currently Services (col 3) and Solutions (col 4) are hidden on mobile. Should they be hidden on tablet too, or shown in the 2-across grid? The RESP-2-T5 fix shows them at 768–991px. Confirm with design. |
| **Mega-menu at 992px: decorative image column** | header.php `.col-lg-3.cs-border:first-child` | At 992px the image column is shown (desktop nav active) but takes 25% of the dropdown width, leaving only 75% for 3 link columns. Consider hiding at 992–1100px as a design choice. |
| **mibooz-responsive.css nested @media** | mibooz-responsive.css lines 868–1004 | The nested @media blocks inside the 1200–1475px media query are a CSS authoring error. The source file should be corrected to un-nest them. T11 provides a fallback but the underlying file should be cleaned up. |
| **section-title__title at 992–1199px** | mibooz-responsive.css line 0 | No explicit rule exists for the lg tablet tier in mibooz-responsive.css — it falls through to desktop size (2rem global). At 992px a 32px section title is fine but 47px (from services-one__top-left override) may feel large. Design to confirm. |
| **Body padding-top: 90px desktop vs 70px tablet** | custom-fixes.css line 44 | Navbar renders at ~75px height (logo 70px + padding). The 90px desktop body offset creates a 15px gap below the fixed navbar. At tablet 70px is accurate. Desktop value may need revisiting in RESP-1. |

---

## 11. Files Modified

- `D:\xampp\htdocs\artasticwebservices-web\assets\css\custom-fixes.css` — 15 new rules appended under `/* RESP-2 Tablet Fixes */` comment block at end of file.

## 12. Files NOT Modified (read-only)

- `mibooz-responsive.css` — existing breakpoints audited; nested @media bug noted; not modified (no direct edit mandate; fallback added via custom-fixes.css).
- `header.php`, `footer.php`, `footer-html.php`, `index.php` — HTML structure reviewed; no HTML changes required.
