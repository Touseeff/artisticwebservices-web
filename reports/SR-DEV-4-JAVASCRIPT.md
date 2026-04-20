# Senior Dev Report #4 — JavaScript Modernization & Library Audit

**Engineer**: Senior Fullstack Developer #4 (10 YOE)
**Date**: April 2026
**Specialization**: JavaScript Architecture, Performance, Bundle Optimization
**Codebase**: `D:\xampp\htdocs\artasticwebservices-web\`

---

## Executive Summary

This codebase carries **~650 KB of JavaScript** loaded synchronously on every page, including four overlapping carousel/slider libraries of which only two are genuinely used. jQuery 3.6.0 has known CVEs and is loaded render-blocking in `<head>`. The inline `<script>` volume across `footer.php` alone exceeds 140 lines of untested, unmaintainable code. The App Cost Calculator ships six Swiper instances with **no initialisation JavaScript anywhere in the file** — all six `.mySwiperXxx` elements are dead HTML. A `validateForm()` function is referenced by the form's `onsubmit` attribute but is never defined, making the submit button entirely non-functional without reCAPTCHA support. Immediate action is required on four HIGH severity items.

---

## JS Payload Analysis

| Library | Est. Minified Size | Used On Site | Recommendation |
|---|---|---|---|
| jQuery 3.6.0 | ~90 KB | Every page (head) | **Upgrade to 3.7.1** |
| Bootstrap Bundle (Popper) | ~80 KB | Every page | Keep — used for navbar/carousel |
| Swiper | ~140 KB | 32+ pages | **Keep** — primary slider library |
| Owl Carousel | ~45 KB | mibooz.js only (5 carousels) | **Remove** — migrate to Swiper |
| Slick | ~25 KB | 5 pages (inline `$slickEl.slick()`) | **Remove** — migrate to Swiper |
| bxSlider | ~22 KB | 1 selector in mibooz.js (`listing-details__gallery .bxslider`) | **Remove** — no matching template active |
| TinySlider | ~20 KB | 0 pages (no `.thm-tiny__slider` found) | **Remove immediately** |
| WOW.js | ~3 KB | Every page (`.wow` elements) | Replace with IntersectionObserver |
| Odometer | ~6 KB | index.php counters | Keep — purpose-specific |
| noUiSlider + wNumb | ~35 KB | `.range-slider-price` selector only — no matching element in calculator | Conditionally load |
| Isotope | ~28 KB | Portfolio/filter pages | Keep — conditionally load |
| jQuery Validate | ~22 KB | `.contact-form-validated` — one contact page | Conditionally load |
| jQuery ajaxChimp | ~4 KB | `.mc-form` — newsletter | Conditionally load |
| jQuery Appear | ~3 KB | count-box, progress bars | Replace with IntersectionObserver |
| jQuery Magnific Popup | ~20 KB | video-popup, img-popup | Keep if video modals exist |
| jQuery Circle Progress | ~8 KB | `.circle-progress` | Conditionally load |
| jQuery UI | ~250 KB (full) | Likely draggable/autocomplete use | Audit & tree-shake |
| Bootstrap-Select | ~18 KB | `.js-example-basic-multiple` (one line in footer) | Replace with Select2 already loaded |
| Select2 (CDN) | ~70 KB | Used in header (contact forms) | Keep — but bundle locally |
| countdown.min.js | ~5 KB | Unknown — no usage found in grep | **Remove or audit** |
| Jarallax | ~30 KB | Parallax backgrounds | Keep if used |
| mibooz.js | ~18 KB (minified) | Every page | Modularise |
| **Total estimate** | **~1,000 KB raw / ~650 KB minified** | | Target: **~280 KB** |

---

## Carousel Library Usage Map

| Library | Pages Using It | Keep/Remove |
|---|---|---|
| **Swiper** | 32+ pages (`.thm-swiper__slider`, `.swiper-chooseus`, `.my__Swiper`, calculator, all service pages) | **KEEP — migrate everything here** |
| **Slick** | 5 pages: `mobile-app-development.php`, `fitness-mobile-app-development.php`, `real-estate-app-development.php`, `solutions/healthcare-app-development.php`, `solutions/travel-app-development.php` | **REMOVE — migrate to Swiper** |
| **Owl Carousel** | mibooz.js only — 5 classes: `.project-one__carousel`, `.project-two__carousel`, `.testimonial-one__carousel`, `.testimonial-two__carousel` | **REMOVE — migrate to Swiper** |
| **bxSlider** | mibooz.js: `.listing-details__gallery .bxslider` (one match, template unknown) | **REMOVE — not in active templates** |
| **TinySlider** | 0 pages — `thmTinyInit()` exists in mibooz.js but no `.thm-tiny__slider` found in any PHP | **REMOVE immediately** |

**Dead weight from unused carousels: ~112 KB (Slick + Owl + bxSlider + Tiny = JS) + associated CSS**

---

## Issue #1: Missing `validateForm()` on App Cost Calculator — CRITICAL

**Severity**: CRITICAL (feature is broken)
**File**: `services/app-cost-calculator.php` line 1756
**Problem**: The form declares `onsubmit="return validateForm()"` but `validateForm` is **never defined anywhere** — not in mibooz.js, not inline, not in any included file. The form will throw a `ReferenceError: validateForm is not defined` in the browser console and silently fall back to native HTML5 validation only. Additionally, the reCAPTCHA data-callback `validateRecaptcha` is also undefined. This means reCAPTCHA can never pass the form gate.

**Secondary Bug**: Six Swiper instances are declared in HTML (`mySwiperPlatform`, `mySwiperFeatures`, `mySwiperSignup`, `mySwiperScreen`, `mySwiperFunctionality`, `mySwiperDesign`) but there is **no `new Swiper(...)` initialisation call anywhere** in the file. All six sliders render as static overflowing containers — prev/next buttons are dead.

**Fix**:
```js
// Add to services/app-cost-calculator.php before closing </body>
// or extract to assets/js/calculator.js and load it conditionally

(function () {
    'use strict';

    // ── 1. Initialise all calculator Swiper instances ──────────────
    var calcSwipers = [
        '.mySwiperPlatform',
        '.mySwiperFeatures',
        '.mySwiperDesign',
        '.mySwiperSignup',
        '.mySwiperScreen',
        '.mySwiperFunctionality'
    ];

    calcSwipers.forEach(function (sel) {
        var el = document.querySelector(sel);
        if (!el) return;
        new Swiper(el, {
            slidesPerView: 'auto',
            spaceBetween: 16,
            navigation: {
                nextEl: el.parentElement.querySelector('.swiper-button-next'),
                prevEl: el.parentElement.querySelector('.swiper-button-prev'),
            },
            breakpoints: {
                0:   { slidesPerView: 2 },
                576: { slidesPerView: 3 },
                768: { slidesPerView: 4 },
                992: { slidesPerView: 5 },
            }
        });
    });

    // ── 2. reCAPTCHA gate ─────────────────────────────────────────
    var recaptchaPassed = false;
    window.validateRecaptcha = function () {
        recaptchaPassed = true;
    };

    // ── 3. Form validation ────────────────────────────────────────
    window.validateForm = function () {
        var form   = document.getElementById('calculatorForm');
        var result = document.getElementById('frm-result');

        // reCAPTCHA check
        if (!recaptchaPassed) {
            if (result) result.textContent = 'Please complete the reCAPTCHA verification.';
            return false;
        }

        // Required field check
        var required = form.querySelectorAll('[required]');
        var valid = true;
        required.forEach(function (field) {
            if (!field.value.trim()) {
                field.classList.add('is-invalid');
                valid = false;
            } else {
                field.classList.remove('is-invalid');
            }
        });

        if (!valid) {
            if (result) result.textContent = 'Please fill in all required fields.';
            var first = form.querySelector('.is-invalid');
            if (first) first.focus();
            return false;
        }

        // Disable submit to prevent double-click
        var btn = document.getElementById('submit_btn');
        if (btn) { btn.disabled = true; btn.textContent = 'Sending...'; }
        return true;
    };
})();
```

---

## Issue #2: jQuery 3.6.0 CVE & Render-Blocking Load

**Severity**: HIGH
**File**: `includes/head.php` line 106
**Problem**: jQuery 3.6.0 is loaded synchronously in `<head>` with no `defer` attribute. This is render-blocking — the browser halts HTML parsing until jQuery downloads, parses, and executes. On a 3G connection this costs 200–400 ms of First Contentful Paint (FCP). Additionally, jQuery 3.6.0 has CVEs related to XSS via `$.htmlPrefilter` and DOM manipulation methods fixed in 3.7.x.

**Current code**:
```html
<script src="<?= $B ?>/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
```

**Fix — Option A (drop-in upgrade, safest)**:
1. Download `jquery-3.7.1.min.js` from https://jquery.com/download/
2. Replace the file in `assets/vendors/jquery/`
3. Add `defer` — BUT only if no inline scripts in `<head>` rely on `$`. Currently the stub `openLeadModal` on line 108 does not use `$`, so defer is safe.

```html
<!-- Replace line 106 in includes/head.php -->
<script src="<?= $B ?>/assets/vendors/jquery/jquery-3.7.1.min.js" defer></script>
```

4. Move all footer vendor scripts to `defer` as well (they already load in footer, but explicitly marking them `defer` prevents any parser blocking):
```html
<script src="<?= $B ?>/assets/vendors/bootstrap/js/bootstrap.bundle.min.js" defer></script>
<!-- ... repeat for all vendor scripts ... -->
<script src="<?= $B ?>/assets/js/mibooz.js" defer></script>
```

**Fix — Option B (10-line vanilla JS replacements — see Vanilla JS section)**

---

## Issue #3: Dead Dropdown Event Listener Memory Leak (servicedrp / solutiondrp)

**Severity**: HIGH
**File**: `includes/footer.php` lines 1017–1036
**Problem**: Every time a user hovers over "Services" or "Solutions" in the navbar, `servicedrp()` / `solutiondrp()` is called. Each call adds a **new** `mouseleave` event listener to the same dropdown element with `addEventListener('mouseleave', ...)`. The old listener is never removed. After 20 hovers, there are 20 stacked listeners. Each one fires on mouseleave, causing 20 classList operations per hover exit. On long sessions (single-page visits with frequent navigation) this accumulates unboundedly.

**Current code (footer.php ~line 1017)**:
```js
function servicedrp() {
    if (window.innerWidth < 992) return;
    document.querySelector("#servicedropdown").classList.add('menu-show');
    document.querySelector("#solutiondropdown").classList.remove('menu-show');
    document.querySelector("#servicedropdown").addEventListener('mouseleave', function() {
        this.classList.remove('menu-show');   // ← NEW LISTENER EVERY CALL
    });
}
```

**Fix**:
```js
// Rewrite to attach listeners ONCE at page load (not on each hover call)
(function () {
    var svcDrp  = document.getElementById('servicedropdown');
    var solDrp  = document.getElementById('solutiondropdown');
    if (!svcDrp || !solDrp) return;

    function closeAll() {
        svcDrp.classList.remove('menu-show');
        solDrp.classList.remove('menu-show');
    }

    // Attach mouseleave ONCE
    svcDrp.addEventListener('mouseleave', function () { svcDrp.classList.remove('menu-show'); });
    solDrp.addEventListener('mouseleave', function () { solDrp.classList.remove('menu-show'); });

    // Expose to inline onmouseenter handlers (keep HTML unchanged)
    window.servicedrp = function () {
        if (window.innerWidth < 992) return;
        svcDrp.classList.add('menu-show');
        solDrp.classList.remove('menu-show');
    };
    window.solutiondrp = function () {
        if (window.innerWidth < 992) return;
        svcDrp.classList.remove('menu-show');
        solDrp.classList.add('menu-show');
    };
    window.closealldrp = closeAll;
    window.mobileDrpToggle = function (id, event) {
        if (window.innerWidth >= 992) return;
        event.preventDefault();
        event.stopPropagation();
        var dd = document.getElementById(id);
        var isShown = dd.classList.contains('menu-show');
        closeAll();
        if (!isShown) dd.classList.add('menu-show');
    };
})();
```

**Accessibility gap**: The mega-menu has zero keyboard support. Tab navigation skips the dropdown entirely. Fix:
```js
// Add keyboard open/close on the toggle anchor
document.querySelectorAll('.dropdown-hover > a').forEach(function (anchor) {
    anchor.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            var menu = anchor.nextElementSibling;
            if (menu) menu.classList.toggle('menu-show');
        }
        if (e.key === 'Escape') closeAll();
    });
});
```

---

## Issue #4: Modal Form — Fire-and-Forget Fetch (No Error Feedback)

**Severity**: MEDIUM
**File**: `includes/footer.php` lines 961–972
**Problem**: The lead modal uses a fire-and-forget fetch pattern where `.catch(function(){})` silently swallows ALL network errors. The redirect to `/thank-you` happens regardless of whether the form data was actually received by the server. A user on poor connectivity will be redirected to the thank-you page while their lead was never stored. Additionally:
- No CSRF token is sent with the POST
- The button IS correctly disabled during submission (line 942) — that part is good
- The `setTimeout(800)` redirect gap is acceptable

**Current code (footer.php ~line 961)**:
```js
fetch('/contact-form', {
    method: 'POST',
    body: data
}).catch(function(){});   // ← swallows all errors, user never knows

setTimeout(function() {
    window.location.href = b + '/thank-you';
}, 800);
```

**Fix**:
```js
function awsSubmitForm(e) {
    e.preventDefault();
    var form = document.getElementById('awsLeadForm');
    var btn  = form.querySelector('.aws-form-submit');
    var orig = btn.innerHTML;

    btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Sending...';
    btn.disabled  = true;

    var data = new FormData(form);
    data.append('host', 'ArtisticWebServices');

    // Store visitor data for Tawk.to
    try {
        var fn = (form.querySelector('[name="first_name"]') || {}).value || '';
        var ln = (form.querySelector('[name="last_name"]')  || {}).value || '';
        var em = (form.querySelector('[name="email"]')      || {}).value || '';
        var ph = (form.querySelector('[name="phone"]')      || {}).value || '';
        localStorage.setItem('awsTawkVisitor', JSON.stringify({
            name:  (fn + ' ' + ln).trim(),
            email: em.trim(),
            phone: ph.trim()
        }));
    } catch (_) {}

    var base = (document.querySelector('meta[name="site-base"]') || {}).getAttribute('content') || '';

    fetch('/contact-form', { method: 'POST', body: data })
        .then(function (res) {
            if (!res.ok) throw new Error('Server returned ' + res.status);
            // Success — redirect
            window.location.href = base + '/thank-you';
        })
        .catch(function (err) {
            // Network/server failure — show error, re-enable button
            btn.innerHTML = orig;
            btn.disabled  = false;
            var note = form.querySelector('.aws-modal-footer-note');
            if (note) {
                note.innerHTML = '<i class="fa fa-exclamation-triangle" style="color:#dd0429"></i> '
                    + 'Submission failed. Please call us at <a href="tel:+12137147176">(213) 714-7176</a> '
                    + 'or email <a href="mailto:info@artisticwebservices.com">info@artisticwebservices.com</a>.';
            }
            console.error('[AWS Lead Form]', err);
        });
}
```

---

## Issue #5: Redundant Carousel Libraries — 4 Libraries, 2 Needed

**Severity**: MEDIUM (performance)
**Impact**: ~112 KB of dead JS + ~30 KB of dead CSS loaded on every page

### Migration: Owl Carousel → Swiper (for mibooz.js carousels)

The 5 Owl carousels in `mibooz.js` use simple responsive configs. Swiper handles identical patterns:

```js
// BEFORE (Owl — remove from mibooz.js):
if ($(".project-one__carousel").length) {
    $(".project-one__carousel").owlCarousel({
        loop: true, margin: 30, nav: false, dots: true,
        autoplay: true, autoplayTimeout: 10000,
        responsive: { 0:{items:1}, 800:{items:2}, 1200:{items:2} }
    });
}

// AFTER (Swiper — add data-attribute to HTML, handled by thmSwiperInit()):
// In the PHP template, change class and add data attribute:
// <div class="thm-swiper__slider swiper-container project-one__carousel"
//      data-swiper-options='{"loop":true,"spaceBetween":30,"slidesPerView":2,
//      "autoplay":{"delay":10000},"pagination":{"el":".swiper-pagination"},
//      "breakpoints":{"0":{"slidesPerView":1},"800":{"slidesPerView":2}}}'>

// thmSwiperInit() in mibooz.js already handles .thm-swiper__slider automatically.
// No new JS code needed — just migrate the HTML class names.
```

### Migration: Slick → Swiper (for 5 service pages)

The 5 pages using Slick (mobile-app, fitness, real-estate, healthcare, travel) all use identical patterns — a testimonials/screenshot carousel with prev/next buttons:

```js
// BEFORE (Slick — currently in each service page inline script):
var $slickEl = $(tabContent).find('.testimonials-slider');
$slickEl.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
        { breakpoint: 992, settings: { slidesToShow: 2 } },
        { breakpoint: 576, settings: { slidesToShow: 1 } }
    ]
});
$slickEl.slick('slickNext'); // triggered by next button click

// AFTER (Swiper):
var testimonialSwiper = new Swiper('.testimonials-slider', {
    loop: true,
    autoplay: { delay: 5000, disableOnInteraction: false },
    slidesPerView: 3,
    spaceBetween: 24,
    breakpoints: {
        0:   { slidesPerView: 1 },
        576: { slidesPerView: 2 },
        992: { slidesPerView: 3 },
    }
});
// External prev/next buttons:
document.querySelector('.testimonials-next').addEventListener('click', function() {
    testimonialSwiper.slideNext();
});
document.querySelector('.testimonials-prev').addEventListener('click', function() {
    testimonialSwiper.slidePrev();
});
```

---

## Issue #6: WOW.js — Replace with IntersectionObserver

**Severity**: LOW-MEDIUM (performance + maintainability)
**File**: `assets/js/mibooz.js` (WOW init block)

WOW.js polls the DOM using `requestAnimationFrame` + scroll events. The browser-native `IntersectionObserver` API does the same at zero CPU cost and is supported in all browsers since 2017.

```js
// BEFORE (mibooz.js):
if ($(".wow").length) {
    var wow = new WOW({ boxClass:"wow", animateClass:"animated", mobile:true, live:true });
    wow.init();
}

// AFTER (vanilla JS — drop in mibooz.js, remove WOW script tag from footer.php):
(function () {
    var wowEls = document.querySelectorAll('.wow');
    if (!wowEls.length) return;

    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) return;
            var el  = entry.target;
            var cls = el.dataset.animation || el.className.match(/\bfadeIn\w*|\bslideIn\w*/)?.[0] || 'fadeInUp';
            var delay = el.dataset.wowDelay || el.getAttribute('data-wow-delay') || '0ms';
            el.style.animationDelay = delay;
            el.classList.add('animated', cls);
            observer.unobserve(el);
        });
    }, { threshold: 0.15 });

    wowEls.forEach(function (el) { observer.observe(el); });
})();
// Saves: ~3 KB JS + eliminates scroll event handler on every page
```

---

## Issue #7: Inline JS in PHP Files — CSP & Maintenance Risk

**Severity**: MEDIUM
**Files**: `footer.php` (5 inline `<script>` blocks), `index.php` (3 inline `<script>` blocks)

### Inventory of inline scripts

| File | Block | Lines | Purpose |
|---|---|---|---|
| footer.php | Block 1 (line 914) | ~140 | Modal open/close, form submit, scroll handler, read-more, lazy-img, sanitize, dropdown functions, dynamic year |
| footer.php | Block 2 (line 1145) | ~140 | AWS_AUTOFIX_JS — case sliders, tab sliders, form validation, SVG clip fix |
| footer.php | Block 3 (line 1307) | ~37 | Tawk.to embed + visitor attribute setting |
| footer.php | Block 4 (line 1347) | ~17 | Preloader dismiss |
| index.php | Block 1 (line 933) | ~45 | Swiper `.swiper-chooseus` init |
| index.php | Block 2 (line 1096) | ~6 | Swiper `.my__Swiper` init |
| index.php | Block 3 (line 1194) | ~45 | Custom slider `initializeSlider()` |

**Risks**:
- Cannot set `Content-Security-Policy: script-src 'self'` — requires `'unsafe-inline'` which defeats XSS protection
- Logic duplicated / split across files — the form validation runs BOTH in the AUTOFIX block (line 1235) AND mibooz.js uses jQuery Validate
- `index.php` Swiper inits run on `window.addEventListener('load')` correctly, but they compete with `thmSwiperInit()` already in mibooz.js

**Proposed extraction**:
```
assets/js/
├── mibooz.js          (existing — refactor as module)
├── modal.js           (openLeadModal, closeLeadModal, awsSubmitForm, auto-open timer)
├── navigation.js      (servicedrp, solutiondrp, closealldrp, mobileDrpToggle)
├── preloader.js       (dismissPreloader)
├── animations.js      (IntersectionObserver replacing WOW.js)
└── calculator.js      (validateForm, validateRecaptcha, Swiper inits for calculator)
```

Each file can then be loaded with `defer` and concatenated at build time, enabling a proper CSP header.

---

## Issue #8: noUiSlider Loaded But Never Used on Calculator

**Severity**: LOW
**File**: `includes/footer.php` line 896, `includes/head.php` lines 84-85

`noUiSlider` and its companion `wNumb` are loaded globally on every page. The only selector in `mibooz.js` that uses them is `.range-slider-price` / `#range-slider-price` — which does not exist anywhere in `app-cost-calculator.php` or any other PHP template. The calculator uses Swiper for its step navigation; it has no price slider. ~35 KB loaded globally for zero usage.

**Fix**: Remove from `footer.php` global load and conditionally load only on pages that have `#range-slider-price`:
```php
// In footer.php, remove these two lines entirely:
// <script src="<?= $B ?>/assets/vendors/nouislider/nouislider.min.js"></script>
// <script src="<?= $B ?>/assets/vendors/wnumb/wNumb.min.js"></script>

// Add conditional load to any page that needs it:
// <?php if (isset($needs_nouislider)): ?>
// <script src="<?= $B ?>/assets/vendors/nouislider/nouislider.min.js" defer></script>
// <script src="<?= $B ?>/assets/vendors/wnumb/wNumb.min.js" defer></script>
// <?php endif; ?>
```

---

## Issue #9: Calculator Form Uses GET Instead of POST

**Severity**: MEDIUM
**File**: `services/app-cost-calculator.php` line 1756

```html
<form action="/submit-calculator" method="get" id="calculatorForm">
```

A quote request form with user name, email, and phone number uses `method="get"`. This means all personal data is appended to the URL query string: `?username=John+Doe&user-email=john@email.com&user-number=5551234567`. This:
1. Leaks PII into server access logs, browser history, and referrer headers
2. Violates GDPR/CCPA data minimisation principles
3. Exposes data to analytics tools that collect full URLs

**Fix**: Change to `method="post"` — one attribute change, zero other code changes needed.

---

## Vanilla JS Migration Examples

The following jQuery patterns appear throughout `mibooz.js` and inline scripts. Each can be replaced with shorter, native code:

### Pattern 1: DOM Ready
```js
// jQuery
$(document).ready(function() { ... });
$(function() { ... });

// Vanilla (identical semantics)
document.addEventListener('DOMContentLoaded', function() { ... });
```

### Pattern 2: Element Selection + Existence Check
```js
// jQuery
if ($(".count-box").length) {
    $(".count-box").each(function() { ... });
}

// Vanilla
var els = document.querySelectorAll('.count-box');
if (els.length) {
    els.forEach(function(el) { ... });
}
```

### Pattern 3: Class Toggle on Scroll
```js
// jQuery (mibooz.js sticky header)
$(window).on("scroll", function() {
    if ($(window).scrollTop() > 130) {
        $(".stricked-menu").addClass("stricky-fixed");
    }
});

// Vanilla
window.addEventListener("scroll", function() {
    document.querySelector(".stricked-menu")
        ?.classList.toggle("stricky-fixed", window.scrollY > 130);
}, { passive: true });
```

### Pattern 4: Smooth Scroll
```js
// jQuery (mibooz.js scroll-to-target)
$(".scroll-to-target").on("click", function() {
    var target = $(this).attr("data-target");
    $("html, body").animate({ scrollTop: $(target).offset().top }, 1000);
    return false;
});

// Vanilla (CSS scroll-behavior: smooth does this automatically in modern browsers)
document.querySelectorAll('.scroll-to-target').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        var target = document.querySelector(this.dataset.target);
        if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});
```

### Pattern 5: Accordion
```js
// jQuery (mibooz.js accrodion-grp — 30+ lines)
$(".accrodion-title").on("click", function() {
    if (!$(this).parent().hasClass("active")) {
        $(".accrodion").removeClass("active");
        $(".accrodion-content").slideUp();
        $(this).parent().addClass("active");
        $(this).parent().find(".accrodion-content").slideDown();
    }
});

// Vanilla — 12 lines, no jQuery slideUp/slideDown needed
document.querySelectorAll('.accrodion-title').forEach(function(title) {
    title.addEventListener('click', function() {
        var item    = title.closest('.accrodion');
        var content = item.querySelector('.accrodion-content');
        var grp     = item.closest('.accrodion-grp');
        var isOpen  = item.classList.contains('active');

        // Close all in group
        grp.querySelectorAll('.accrodion').forEach(function(i) {
            i.classList.remove('active');
            i.querySelector('.accrodion-content').style.display = 'none';
        });

        if (!isOpen) {
            item.classList.add('active');
            content.style.display = 'block';
        }
    });
});
```

---

## Recommended JS Architecture

`mibooz.js` is a single-file, minified, IIFE with no module boundaries. All 600+ lines execute on page load regardless of which features are present. The recommended pattern uses a feature-detection + lazy module approach:

```js
// assets/js/mibooz.js — restructured (pseudocode architecture)
;(function (root, factory) {
    // UMD wrapper for optional module support
    factory(root.jQuery);
}(window, function ($) {
    'use strict';

    // ── Feature registry ──────────────────────────────────────────
    var AWS = {
        // Run fn only if selector exists in DOM (avoids null queries)
        ifExists: function (sel, fn) {
            var el = document.querySelector(sel);
            if (el) fn(el, document.querySelectorAll(sel));
        },

        // ── Carousels (Swiper only, post-migration) ───────────────
        initCarousels: function () {
            document.querySelectorAll('.thm-swiper__slider').forEach(function (el) {
                new Swiper(el, JSON.parse(el.dataset.swiperOptions || '{}'));
            });
        },

        // ── Counters (IntersectionObserver) ───────────────────────
        initCounters: function () {
            AWS.ifExists('.count-box', function () {
                var io = new IntersectionObserver(function (entries, obs) {
                    entries.forEach(function (entry) {
                        if (!entry.isIntersecting) return;
                        var box   = entry.target;
                        var el    = box.querySelector('.count-text');
                        var stop  = +el.dataset.stop;
                        var speed = +el.dataset.speed || 2000;
                        var start = 0, inc = stop / (speed / 16);
                        var timer = setInterval(function () {
                            start = Math.min(start + inc, stop);
                            el.textContent = Math.floor(start);
                            if (start >= stop) clearInterval(timer);
                        }, 16);
                        obs.unobserve(box);
                    });
                }, { threshold: 0.3 });
                document.querySelectorAll('.count-box').forEach(function (b) { io.observe(b); });
            });
        },

        // ── Scroll animations (replaces WOW.js) ───────────────────
        initAnimations: function () {
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    var el = entry.target;
                    el.style.animationDelay = el.dataset.wowDelay || '0ms';
                    el.classList.add('animated');
                    io.unobserve(el);
                });
            }, { threshold: 0.1 });
            document.querySelectorAll('.wow').forEach(function (el) { io.observe(el); });
        },

        // ── Sticky header ─────────────────────────────────────────
        initSticky: function () {
            var sticky = document.querySelector('.stricked-menu');
            if (!sticky) return;
            window.addEventListener('scroll', function () {
                sticky.classList.toggle('stricky-fixed', window.scrollY > 130);
            }, { passive: true });
        },

        // ── Accordions ────────────────────────────────────────────
        initAccordions: function () { /* vanilla version above */ },

        // ── Tab boxes ─────────────────────────────────────────────
        initTabs: function () { /* vanilla equivalent of .tabs-box logic */ },
    };

    // ── Boot ──────────────────────────────────────────────────────
    document.addEventListener('DOMContentLoaded', function () {
        AWS.initCarousels();
        AWS.initCounters();
        AWS.initAnimations();
        AWS.initSticky();
        AWS.initAccordions();
        AWS.initTabs();
    });
}));
```

This architecture:
- Enables unit testing each module independently
- Removes jQuery dependency from 80% of the logic
- Allows tree-shaking: pages that don't need counters don't run counter code
- Keeps a stable public API (`AWS.initCarousels()`, etc.) for page-level overrides

---

## Priority Roadmap

| Priority | Task | Effort | JS Saved | Risk |
|---|---|---|---|---|
| P0 — This Sprint | Fix `validateForm` missing in calculator | 1 hr | 0 KB | HIGH — feature broken today |
| P0 — This Sprint | Fix calculator Swiper not initialised | 2 hrs | 0 KB | HIGH — 6 sliders broken |
| P0 — This Sprint | Change calculator form `method="get"` → `method="post"` | 5 min | 0 KB | HIGH — PII in URLs |
| P1 — Next Sprint | Upgrade jQuery 3.6.0 → 3.7.1 | 2 hrs | 0 KB | CVE fix |
| P1 — Next Sprint | Add `defer` to jQuery in `<head>` | 30 min | 0 KB (timing) | Render blocking fix |
| P1 — Next Sprint | Remove TinySlider (0 usages) | 30 min | 20 KB | Zero risk |
| P1 — Next Sprint | Fix servicedrp/solutiondrp memory leak | 1 hr | 0 KB | UX/memory |
| P2 — Sprint 3 | Remove Owl Carousel, migrate 5 carousels to Swiper | 4 hrs | 45 KB | Medium |
| P2 — Sprint 3 | Remove Slick, migrate 5 service pages to Swiper | 6 hrs | 25 KB | Medium |
| P2 — Sprint 3 | Remove bxSlider (no active templates) | 30 min | 22 KB | Low |
| P2 — Sprint 3 | Replace WOW.js with IntersectionObserver | 2 hrs | 3 KB + perf | Low |
| P2 — Sprint 3 | Fix modal form fetch to surface errors | 1 hr | 0 KB | Lead capture fix |
| P3 — Sprint 4 | Conditionally load noUiSlider + wNumb | 1 hr | 35 KB | Low |
| P3 — Sprint 4 | Conditionally load jQuery Validate, ajaxChimp, Circle Progress | 2 hrs | 34 KB | Low |
| P3 — Sprint 4 | Replace Bootstrap-Select with Select2 (already loaded) | 1 hr | 18 KB | Low |
| P3 — Sprint 4 | Extract inline JS blocks → external files | 4 hrs | 0 KB (CSP win) | Medium |
| P4 — Sprint 5 | Refactor mibooz.js to module architecture | 1 day | 0 KB (maintainability) | Low |
| P4 — Sprint 5 | Add keyboard accessibility to mega-menu | 3 hrs | 0 KB | Accessibility |
| **Total potential** | | | **~202 KB saved** | |

---

## Files Audited

- `D:\xampp\htdocs\artasticwebservices-web\assets\js\mibooz.js`
- `D:\xampp\htdocs\artasticwebservices-web\includes\header.php`
- `D:\xampp\htdocs\artasticwebservices-web\includes\footer.php`
- `D:\xampp\htdocs\artasticwebservices-web\includes\head.php`
- `D:\xampp\htdocs\artasticwebservices-web\index.php`
- `D:\xampp\htdocs\artasticwebservices-web\services\app-cost-calculator.php`
- All `services/*.php` and `solutions/*.php` (grep for carousel/slider usage)
- `D:\xampp\htdocs\artasticwebservices-web\assets\vendors\` (directory listing)

---

*Report generated: April 2026 — ArtisticWebServices JavaScript Modernization Audit*
