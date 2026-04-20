# RESP-4 Cross-device Interactive Component Fixes

**Audit date:** 2026-04-16  
**Sprint:** RESP-4  
**Auditor:** Senior Frontend Engineer (Claude Sonnet 4.6)  
**Fix file:** `assets/css/custom-fixes.css` — appended under section `RESP-4`

---

## Scope

Files audited for responsive/interactive issues across 320–1199px viewports:

| File | Purpose |
|---|---|
| `includes/partials/footer-modal.php` | Lead capture modal + floating contact bar + JS |
| `services/app-cost-calculator.php` | App cost calculator with 6 Swiper instances |
| `includes/form-quote.php` | Shared quote form (included by service pages) |
| `contact.php` | Contact page form |
| `assets/css/custom-fixes.css` | Central override stylesheet |

---

## 1. Lead Modal Audit

### Component: `#awsLeadModal` / `.aws-modal-overlay`

**HTML structure (footer-modal.php):**
```
.aws-modal-overlay
  └─ .aws-modal-box (flex-row)
       ├─ .aws-modal-image-panel  (decorative left column)
       └─ .aws-modal-form-panel   (right column with form)
```

### Issues Found

#### Issue 1-A: Close button touch target below 44px (WCAG 2.5.5)

- **Before:** `width:30px; height:30px` (custom-fixes.css line ~4037)
- **Impact:** Fails WCAG 2.5.5 — minimum 44×44px for interactive targets on touch devices
- **Fix (RESP-4-1):** Override to 44×44px site-wide; `top:10px; right:10px` adjusted to prevent h2 clip

```css
/* BEFORE */
.aws-modal-close {
    width: 30px;
    height: 30px;
    /* ... */
    top: 14px;
    right: 16px;
}

/* AFTER — RESP-4-1 in custom-fixes.css */
.aws-modal-close {
    width:      44px !important;
    height:     44px !important;
    min-width:  44px !important;
    min-height: 44px !important;
    top:   10px !important;
    right: 10px !important;
    line-height: 44px !important;
}
```

#### Issue 1-B: Mobile breakpoint mismatch (641–767px still shows two-panel layout)

- **Before:** Mobile single-column layout applied only at `max-width:640px`. The "tablet" override at `641px–780px` retained the image+form two-panel box, which was too narrow for phones in landscape (641–767px range).
- **Impact:** Image panel squeezed form to ~50% width on 641–767px phones — text and fields became very tight.
- **Fix (RESP-4-2):** New `@media (min-width:641px) and (max-width:767px)` block hides the image panel and forces form-only layout.

```css
/* BEFORE — only these breakpoints existed */
@media (max-width: 640px) { /* form only */ }
@media (min-width: 641px) and (max-width: 780px) { /* two-panel, image kept at 38% */ }

/* AFTER — RESP-4-2 in custom-fixes.css */
@media (min-width: 641px) and (max-width: 767px) {
    .aws-modal-box { flex-direction: column; max-height: 96vh; width: calc(100% - 24px); max-width: 540px; }
    .aws-modal-image-panel { display: none; }
    .aws-modal-form-panel { width: 100%; border-radius: 20px; overflow: hidden; }
    .aws-modal-form-header h2 { padding-right: 48px; } /* clear 44px close btn */
    .aws-modal-body { overflow-y: auto; }
    .aws-form-row { flex-direction: column; gap: 0; }
}
```

#### Issue 1-C: Modal form inputs font-size 15px (iOS zoom triggers at <16px)

- **Before (custom-fixes.css line ~4158–4162):** Mobile form input override set `font-size:15px` — iOS Safari auto-zooms any focused input below 16px.
- **Fix (RESP-4-3):** Override to `16px !important` at `max-width:640px`.

```css
/* BEFORE */
@media (max-width: 640px) {
    .aws-form-group input, .aws-form-group select, .aws-form-group textarea {
        font-size: 15px;  /* ← triggers iOS zoom */
    }
}

/* AFTER — RESP-4-3 */
@media (max-width: 640px) {
    .aws-form-group input, .aws-form-group select, .aws-form-group textarea {
        font-size: 16px !important;
    }
}
```

#### Issue 1-D: Overlay gaps on 320px screens

- **Before (custom-fixes.css line ~4122):** `.aws-modal-overlay { padding:10px }` at `max-width:640px` left ~20px of uncovered viewport on each side on 320px devices.
- **Fix (RESP-4-4):** New `@media (max-width:400px)` bottom-sheet style: `padding:0`, `align-items:flex-end`, box `width:100%`, `border-radius:20px 20px 0 0`.

### Mobile Checklist (Post-fix)

| Check | Status |
|---|---|
| Modal full-width on mobile (320–767px) | PASS — `width:calc(100% - 24px)` on 641–767px; `width:100%` on ≤400px |
| Scrollable if content exceeds viewport | PASS — `.aws-modal-body` has `overflow-y:auto`; `.aws-modal-box` has `max-height:96vh` |
| Close button ≥44×44px | FIXED (was 30×30px) |
| Left image panel hidden on mobile | FIXED for 641–767px gap; already hidden ≤640px |
| Form inputs ≥16px font-size | FIXED (was 15px on mobile) |
| Backdrop covers full viewport | FIXED on ≤400px (was 20px short) |

### Tablet Checklist (641–1199px, Post-fix)

| Check | Status |
|---|---|
| Modal width 600–700px on tablet | PASS — `max-width:680px` at 641–780px; 860px desktop |
| Two-panel (image+form) on tablet (≥768px) | PASS — two-panel applies ≥768px |

---

## 2. App Cost Calculator Audit

### Component: `services/app-cost-calculator.php`

#### Swiper Configuration (Sprint 1 IMPL-2 verification)

Confirmed at line ~2556 of `app-cost-calculator.php`:

```js
var swiperConfig = {
    slidesPerView: 3,
    breakpoints: {
        320:  { slidesPerView: 1 },   // ✓ correct
        768:  { slidesPerView: 2 },   // ✓ correct
        1024: { slidesPerView: 3 }    // ✓ correct
    }
};
```

All 6 Swiper instances (`mySwiperPlatform`, `mySwiperProject`, `mySwiperUi`, `mySwiperSignup`, `mySwiperScreen`, `mySwiperFunctionality`) use this shared config — PASS.

#### noUISlider

No noUISlider is used in `app-cost-calculator.php` — the file uses checkbox tiles and radio tiles for option selection. No noUISlider fix needed.

#### Issue 2-A: `.swiper-wrapper` width:90% causes right-side gap

- **Before (app-cost-calculator.php line ~246):** `<style>` block in the page sets `.swiper-wrapper { width:90% !important; margin:0 auto !important; }` globally. This leaves a 10% empty gap on the right edge of every swiper at every breakpoint, most noticeably on mobile.
- **Fix (RESP-4-6):** Override to `width:100% !important` for the six named calculator Swiper instances at `max-width:767px`.

```css
/* BEFORE — in services/app-cost-calculator.php inline <style> */
.swiper-wrapper {
    width: 90% !important;   /* ← 10% gap on right */
    margin: 0 auto !important;
}

/* AFTER — RESP-4-6 in custom-fixes.css */
@media (max-width: 767px) {
    .mySwiperPlatform .swiper-wrapper,
    .mySwiperProject .swiper-wrapper,
    /* ... (all 6) ... */
    .mySwiperFunctionality .swiper-wrapper {
        width: 100% !important;
    }
}
```

#### Issue 2-B: Checkbox negative margin causes horizontal overflow on 320px

- **Before (app-cost-calculator.php line ~257–261):** `.checkbox-wrapper-16 { margin-left:-50px }` at `max-width:550px` pushed the checkbox grid 50px left, causing a horizontal scrollbar on 320px devices.
- **Fix (RESP-4-5):** Override to `margin-left:0 !important; justify-content:center !important` at `max-width:550px`.

```css
/* BEFORE — in services/app-cost-calculator.php inline <style> */
@media screen and (max-width: 550px) {
    .checkbox-wrapper-16 {
        display: flex;
        justify-content: center;
        margin-left: -50px;   /* ← overflows 320px viewport */
    }
}

/* AFTER — RESP-4-5 in custom-fixes.css */
@media (max-width: 550px) {
    .checkbox-wrapper-16 {
        margin-left: 0 !important;
        justify-content: center !important;
    }
}
```

#### Issue 2-C: Submit button not full-width or tappable on mobile

- **Before:** `#submit_btn.btn` was styled only via inline style (`background-color:#dd0429; color:#fff`) — no size rules. Result: auto-width button ~30px tall on mobile.
- **Fix (RESP-4-7):** `width:100%`, `min-height:50px`, `font-size:16px` at `max-width:767px`.

```css
/* AFTER — RESP-4-7 in custom-fixes.css */
@media (max-width: 767px) {
    #submit_btn.btn {
        width: 100% !important;
        min-height: 50px !important;
        font-size: 16px !important;
        padding: 14px 20px !important;
        display: block !important;
        box-sizing: border-box !important;
    }
}
```

### Calculator Checklist (Post-fix)

| Check | Status |
|---|---|
| Swiper `slidesPerView:1` on mobile (320px) | PASS — confirmed in JS config |
| No horizontal scrollbar on 320px | FIXED (checkbox margin-left:-50px removed) |
| Swiper slides no right-side gap | FIXED (90% → 100% override) |
| Submit button full-width + tappable | FIXED (100% width, 50px height) |
| Calculator form full-width | PASS — Bootstrap `.col-12` and `form-control width:100%` |

---

## 3. Quote Form Audit

### Component: `includes/form-quote.php`

Form structure: `.aws-qf-wrap > .aws-qf-card > .aws-qf-form`. Name fields use `.aws-qf-row` (flexbox, two columns). All other fields are single-column `.aws-qf-group`.

#### Existing responsive rules (pre-audit)

At `max-width:575px`: `.aws-qf-row { flex-direction:column }` — name fields stack correctly.  
`.aws-qf-card { padding:26px 18px }` — adequate but slightly wide for 320px.

#### Issue 3-A: No breakpoint for 576–767px padding range

- **Before:** `.aws-qf-card` had padding rules only at `≤575px` and `576–767px`. The 576–767px rule only tightened padding to `30px 22px` — still generous. On the tightest side (576px), `30px` horizontal padding left very little space for form fields.
- **Fix (RESP-4-8):** New rule at `max-width:767px` sets `padding:24px 16px` ensuring consistent comfortable field widths across all mobile/small-tablet widths.

#### Issue 3-B: Submit button consistency across iOS Safari

- **Before:** `.aws-qf-submit` has `width:100%` globally, but iOS Safari can collapse flex children when a parent has implicit `overflow:hidden`. No explicit padding/font in the 576–767px range.
- **Fix (RESP-4-8):** Explicit `width:100% !important; min-height:50px; padding:15px; font-size:16px` at `max-width:767px`.

```css
/* BEFORE — only at ≤575px */
@media (max-width: 575px) {
    .aws-qf-card { padding: 26px 18px; border-radius: 14px; }
    .aws-qf-row { flex-direction: column; gap: 0; }
}
@media (min-width: 576px) and (max-width: 767px) {
    .aws-qf-card { padding: 30px 22px; }
}

/* AFTER — RESP-4-8 in custom-fixes.css */
@media (max-width: 767px) {
    .aws-qf-card { padding: 24px 16px !important; }
    .aws-qf-submit {
        width: 100% !important;
        min-height: 50px !important;
        padding: 15px !important;
        font-size: 16px !important;
    }
}
```

### Quote Form Checklist (Post-fix)

| Check | Status |
|---|---|
| Inputs full-width on mobile | PASS — `width:100%` in existing rules |
| Single-column layout on mobile | PASS — `.aws-qf-row` stacks at ≤575px |
| Submit button full-width | FIXED for 576–767px range |
| Form inputs ≥16px font-size | PASS — RESP-3-1 (existing) covers this |
| Adequate card padding on mobile | FIXED — unified 24px 16px at ≤767px |
| Visually-hidden labels (no layout issues) | PASS — `.visually-hidden` class used correctly |

---

## 4. Floating Contact Bar Audit

### Component: `.aws-float-left` (footer-modal.php lines 27–38)

**Structure:** Fixed left-side bar with `.aws-float-email` (icon + email text) and `.aws-float-call` (phone icon only).

**Existing mobile behaviour (custom-fixes.css line ~1700):**
- At `≤575px`: switches to vertical column layout, email span hidden (icon-only), `bottom:90px`
- Email link: `42×40px`; Call link: `42×40px`

#### Issue 4-A: Touch targets below 44×44px minimum

- **Before:** `.aws-float-email { max-width:42px; height:40px }` and `.aws-float-call { width:42px; height:40px }` at `≤575px`. Both are 2–4px below WCAG 2.5.5.
- **Fix (RESP-4-9):** Override to `44×44px` with `min-height:44px`.

#### Issue 4-B: Floating bar too close to Tawk.to widget

- **Before:** `.aws-float-left` at `bottom:90px`; Tawk.to at `bottom:16px`. The gap between the top of Tawk.to and the bottom of the floating bar was approximately 74px, which is acceptable but thin. After raising the float icons to 44px, the gap closes to ~70px — still fine, but the bar position should be raised slightly to maintain visual separation.
- **Fix (RESP-4-9):** `.aws-float-left { bottom:110px !important }` at `≤575px`.

```css
/* BEFORE (custom-fixes.css ~1707) */
@media (max-width: 575px) {
    .aws-float-email {
        max-width: 42px !important;
        height: 40px !important;    /* ← 4px short of 44px */
    }
    .aws-float-call {
        width: 42px !important;
        height: 40px !important;    /* ← 4px short of 44px */
    }
    .aws-float-left {
        bottom: 90px;               /* ← retained from earlier rule */
    }
}

/* AFTER — RESP-4-9 in custom-fixes.css */
@media (max-width: 575px) {
    .aws-float-email {
        max-width:  44px !important;
        height:     44px !important;
        min-height: 44px !important;
        padding: 0 12px !important;
    }
    .aws-float-call {
        width:      44px !important;
        height:     44px !important;
        min-height: 44px !important;
    }
    .aws-float-left {
        bottom: 110px !important;   /* clears Tawk.to at 16px + 44px height + gap */
    }
}
```

### Floating Bar Checklist (Post-fix)

| Check | Status |
|---|---|
| Visible but icon-only on mobile | PASS — email span hidden, icon shown |
| Touch targets ≥44×44px | FIXED (was 42×40px) |
| Does not overlap content | PASS — fixed position left side |
| Does not overlap Tawk.to widget | FIXED — 110px bottom clears chat button |
| Correct on 320px screens | PASS — 44px width fits within 320px |

---

## 5. Tawk.to Widget Audit

### Component: Tawk.to chat (CSS in custom-fixes.css lines ~4487–4505)

**Existing rules:**
- `.tawk-min-container { left:0; right:auto }` — pins to left side (global)
- `@media (max-width:767px)`: bottom:16px, visibility/display enforced

#### Issue 5-A: Tawk.to full chat iframe had no bottom positioning rule

- **Before:** Only `.tawk-min-container` had `bottom:16px`. The actual iframe element (`iframe[src*="tawk.to"]`) had no bottom offset. On some mobile browsers this caused the chat window to render below or overlapping the floating bar.
- **Fix (RESP-4-10):** Added `iframe[title*="chat" i], iframe[src*="tawk.to"] { bottom:16px !important }` at `≤575px`. Combined with `.aws-float-left { bottom:110px }` (RESP-4-9), this leaves 94px of vertical clearance between the Tawk.to chat button and the floating contact bar.

```css
/* BEFORE — no iframe bottom rule */
@media (max-width: 767px) {
    .tawk-min-container {
        bottom: 16px !important;
        /* iframe had no bottom constraint */
    }
}

/* AFTER — RESP-4-10 in custom-fixes.css */
@media (max-width: 575px) {
    iframe[title*="chat" i],
    iframe[src*="tawk.to"] {
        bottom: 16px !important;
    }
}
/* .aws-float-left raised to bottom:110px by RESP-4-9 */
/* Gap: 110px - 16px - (44px chat button height) = ~50px clear space */
```

---

## 6. Summary of All Fixes Applied

All 10 fixes appended to `assets/css/custom-fixes.css` under section `RESP-4`.

| Fix ID | Component | Issue | Rule Location |
|---|---|---|---|
| RESP-4-1 | Lead Modal close button | 30px → 44px touch target | `.aws-modal-close` global |
| RESP-4-2 | Lead Modal 641–767px | Two-panel persisted; form squeezed | `@media (min-width:641px) and (max-width:767px)` |
| RESP-4-3 | Lead Modal inputs | font-size:15px → 16px (iOS zoom) | `@media (max-width:640px)` |
| RESP-4-4 | Lead Modal overlay | padding:10px gap on 320px | `@media (max-width:400px)` |
| RESP-4-5 | Calculator checkbox | margin-left:-50px horizontal overflow | `@media (max-width:550px)` |
| RESP-4-6 | Calculator Swiper wrappers | width:90% caused right-side gap | `@media (max-width:767px)` |
| RESP-4-7 | Calculator submit button | Auto-width, ~30px tall on mobile | `@media (max-width:767px)` |
| RESP-4-8 | Quote Form card + submit | Padding gap 576–767px; submit inconsistency | `@media (max-width:767px)` |
| RESP-4-9 | Floating contact bar | 42×40px → 44×44px; bar raised 90px→110px | `@media (max-width:575px)` |
| RESP-4-10 | Tawk.to iframe | No bottom offset on chat iframe | `@media (max-width:575px)` |

---

## 7. What Was NOT Changed

- Visual design, colors, typography, animations — unchanged
- Desktop layouts (≥1200px) — unchanged
- noUISlider — not present in the calculator; no fix needed
- Contact page (`contact.php`) — already has responsive styles inline; existing `@media (max-width:991px)` and `@media (max-width:575px)` blocks handle padding correctly; no issues found
- The Swiper JS `breakpoints` configuration in `app-cost-calculator.php` — already correct per Sprint 1 IMPL-2 spec; no change needed

---

*RESP-4 fixes written to: `assets/css/custom-fixes.css` (appended after line 4935)*  
*Report written to: `reports/RESP-4-CROSSDEVICE.md`*
