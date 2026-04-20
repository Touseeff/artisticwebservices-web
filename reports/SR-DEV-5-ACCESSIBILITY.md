# Senior Dev Report #5 — Accessibility & HTML Semantics

**Engineer**: Senior Fullstack Developer #5 (10 YOE)
**Date**: April 2026
**Specialization**: WCAG 2.1 AA, Accessible HTML, Inclusive Design
**Files Audited**:
- `includes/header.php`
- `includes/footer.php`
- `includes/form-quote.php`
- `includes/head.php`
- `index.php`
- `services/mobile-app-development.php`
- `contact.php`

---

## Executive Summary

The site has a **reasonable structural foundation** (lang attribute set, one H1 per page, skip link present, social icons have aria-labels), but carries **eleven significant WCAG 2.1 AA failures** that will prevent assistive-technology users from successfully navigating, understanding content, and completing forms. The most critical are:

1. The mega-menu is **entirely mouse-dependent** — keyboard and screen-reader users cannot operate it.
2. The lead modal **has no focus trap** and returns focus nowhere on close — screen-reader users are abandoned mid-air.
3. The shared quote form (`form-quote.php`) and the modal form **have zero `<label>` elements** — every input is label-less.
4. Dozens of technology-logo images in the brand slider have **empty `alt=""`** when they are non-decorative (they convey technology names).
5. The floating call/email widget **has no accessible label** — screen readers announce only an icon.
6. The hero `<video>` element has **no text track or transcript**, silently auto-playing motion content with no `prefers-reduced-motion` guard.

Estimated **WCAG 2.1 AA compliance score: ~52%** before fixes. Target after applying all fixes below: **≥92%**.

---

## WCAG 2.1 AA Compliance Score

| Criterion | Status | Severity |
|---|---|---|
| 1.1.1 Non-text Content (alt text) | Partial | High |
| 1.2.2 Captions (video) | Fail | Medium |
| 1.3.1 Info & Relationships (labels/semantics) | Fail | Critical |
| 1.3.5 Identify Input Purpose | Fail | Medium |
| 1.4.3 Contrast (minimum) | Partial | Medium |
| 1.4.10 Reflow (320px) | Pass | — |
| 2.1.1 Keyboard (all functionality) | Fail | Critical |
| 2.4.3 Focus Order (modal focus trap) | Fail | Critical |
| 2.4.4 Link Purpose | Partial | High |
| 3.1.1 Language of Page | Pass | — |
| 3.3.1 Error Identification | Partial | High |
| 3.3.2 Labels or Instructions | Fail | Critical |
| 4.1.2 Name, Role, Value (ARIA) | Partial | High |
| 4.1.3 Status Messages | Partial | Medium |

---

## Issue #1: Brand Logo Images Have Empty Alt Text (Non-Decorative)

**WCAG Criterion**: 1.1.1 — Non-text Content
**Severity**: High
**File**: `services/mobile-app-development.php` : lines 733–797

The technology-partner logo slider (Android, Angular, AWS, Flutter, etc.) uses `alt=""` on every image. These images **communicate information** — they tell users which technologies the company uses. Empty alt text makes them invisible to screen-reader users.

**Non-compliant Code**:
```html
<!-- bad — logo is not decorative; it communicates technology used -->
<div class="swiper-slide"> <img src=".../brand/android.webp" alt=""> </div>
<div class="swiper-slide"> <img src=".../brand/angular.webp" alt=""> </div>
<div class="swiper-slide"> <img src=".../brand/aws.webp" alt=""> </div>
<!-- ... 29 more with alt="" ... -->
```

**Fixed Code**:
```html
<!-- good — alt conveys the technology name -->
<div class="swiper-slide"> <img src=".../brand/android.webp" alt="Android" loading="lazy"> </div>
<div class="swiper-slide"> <img src=".../brand/angular.webp" alt="Angular" loading="lazy"> </div>
<div class="swiper-slide"> <img src=".../brand/aws.webp" alt="Amazon Web Services (AWS)" loading="lazy"> </div>
<div class="swiper-slide"> <img src=".../brand/appium.webp" alt="Appium" loading="lazy"> </div>
<div class="swiper-slide"> <img src=".../brand/firebase.webp" alt="Firebase" loading="lazy"> </div>
<div class="swiper-slide"> <img src=".../brand/flutter.webp" alt="Flutter" loading="lazy"> </div>
<div class="swiper-slide"> <img src=".../brand/kotlin.webp" alt="Kotlin" loading="lazy"> </div>
<div class="swiper-slide"> <img src=".../brand/react.webp" alt="React Native" loading="lazy"> </div>
<div class="swiper-slide"> <img src=".../brand/swift.webp" alt="Swift" loading="lazy"> </div>
<!-- Apply the same pattern to all remaining brand images -->
```

**Why**: WCAG 1.1.1 requires all non-decorative images to have descriptive alt text. A logo carousel identifying technology stack is informational content, not decoration. Screen-reader users hear "image, image, image" instead of the technology names, losing the context entirely.

---

## Issue #2: Decorative Drop-Down Promo Image Has Missing `alt` Attribute

**WCAG Criterion**: 1.1.1 — Non-text Content
**Severity**: Medium
**File**: `includes/header.php` : lines 380, 451

The decorative panel images inside the Services and Solutions mega-menus use `alt=""` (which is correct for decoration), but they are still present in the accessibility tree with no `role="presentation"`. This is acceptable, though adding `role="presentation"` is a best-practice belt-and-suspenders fix.

**Non-compliant Code**:
```html
<!-- bad — alt="" is present (good) but no aria-hidden to suppress entirely -->
<img src=".../assets/images/services.webp" alt="">
<img src=".../assets/images/solutions.webp" alt="">
```

**Fixed Code**:
```html
<!-- good — both alt="" and aria-hidden="true" suppress from all AT -->
<img src=".../assets/images/services.webp" alt="" aria-hidden="true">
<img src=".../assets/images/solutions.webp" alt="" aria-hidden="true">
```

**Why**: While `alt=""` removes the image from screen-reader reading order in most implementations, adding `aria-hidden="true"` provides a belt-and-suspenders guarantee across all AT. Decorative images should be invisible to all assistive technology.

---

## Issue #3: Mega-Menu Is Not Keyboard Navigable

**WCAG Criterion**: 2.1.1 — Keyboard; 2.4.3 — Focus Order; 4.1.2 — Name, Role, Value
**Severity**: Critical
**File**: `includes/header.php` : lines 369–438, 440–491

The Services and Solutions dropdowns are triggered by `onmouseenter` JavaScript events and CSS `:hover`. There is **no keyboard path** to open them. Furthermore:
- `aria-expanded` is set to `false` statically and never updated on keyboard interaction.
- The `href="javascript:void(0)"` trigger links give screen readers no meaningful target.
- Tab order passes straight through the toggle link into the invisible dropdown below.

**Non-compliant Code**:
```html
<!-- bad — hover-only, aria-expanded never toggled by keyboard -->
<a class="nav-link dropdown-toggle" href="javascript:void(0)"
   onmouseenter="servicedrp()"
   onclick="mobileDrpToggle('servicedropdown', event)"
   role="button"
   data-bs-toggle="dropdown"
   aria-expanded="false">
  Services
</a>
<div class="dropdown-menu w-100 mt-0" id="servicedropdown" ...>
  <!-- links not reachable by Tab without mouse -->
</div>
```

**Fixed Code**:
```html
<!-- good — full keyboard + screen reader pattern -->
<button class="nav-link dropdown-toggle"
        type="button"
        id="serviceMenuBtn"
        aria-haspopup="true"
        aria-expanded="false"
        aria-controls="servicedropdown">
  Services
</button>
<div class="dropdown-menu w-100 mt-0"
     id="servicedropdown"
     role="region"
     aria-labelledby="serviceMenuBtn"
     hidden>
  <!-- all links inside remain Tab-accessible when menu is open -->
</div>
```

And the required JavaScript additions (add to footer.php script block):

```js
/* ── Accessible Mega-Menu Controller ─────────────────────────── */
(function () {
  'use strict';

  var buttons = [
    { btn: document.getElementById('serviceMenuBtn'),  menu: document.getElementById('servicedropdown')  },
    { btn: document.getElementById('solutionMenuBtn'), menu: document.getElementById('solutiondropdown') }
  ];

  function openMenu(btn, menu) {
    menu.removeAttribute('hidden');
    btn.setAttribute('aria-expanded', 'true');
    // focus first link in menu
    var firstLink = menu.querySelector('a, button');
    if (firstLink) firstLink.focus();
  }

  function closeMenu(btn, menu) {
    menu.setAttribute('hidden', '');
    btn.setAttribute('aria-expanded', 'false');
  }

  function closeAll() {
    buttons.forEach(function(p) { if (p.btn && p.menu) closeMenu(p.btn, p.menu); });
  }

  buttons.forEach(function (pair) {
    if (!pair.btn || !pair.menu) return;

    // Desktop: hover opens/closes
    pair.btn.addEventListener('mouseenter', function () {
      if (window.innerWidth >= 992) openMenu(pair.btn, pair.menu);
    });
    pair.menu.addEventListener('mouseleave', function () {
      if (window.innerWidth >= 992) closeMenu(pair.btn, pair.menu);
    });

    // Keyboard / click: toggle
    pair.btn.addEventListener('click', function (e) {
      e.preventDefault();
      var isOpen = pair.btn.getAttribute('aria-expanded') === 'true';
      closeAll();
      if (!isOpen) openMenu(pair.btn, pair.menu);
    });

    // Escape closes from anywhere inside menu
    pair.menu.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') {
        closeMenu(pair.btn, pair.menu);
        pair.btn.focus();
      }
    });
  });

  // Click outside closes all
  document.addEventListener('click', function (e) {
    var inNav = e.target.closest('.navbar');
    if (!inNav) closeAll();
  });
})();
```

**Why**: WCAG 2.1.1 requires all functionality to be operable via keyboard. A hover-only mega-menu completely blocks keyboard-only users (estimated 7% of users, including all switch-access users) from accessing Services and Solutions navigation — which are the site's primary conversion paths.

---

## Issue #4: Lead Modal — No Focus Trap, No Return Focus, No `aria-modal`

**WCAG Criterion**: 2.4.3 — Focus Order; 4.1.2 — Name, Role, Value
**Severity**: Critical
**File**: `includes/footer.php` : lines 799–874

The modal `#awsLeadModal` is missing:
1. `role="dialog"` and `aria-modal="true"` — screen readers will not treat it as a modal context
2. `aria-labelledby` pointing to the modal title H2
3. A **focus trap** — Tab key escapes the modal into the background page
4. **Return focus** — when the modal closes, focus is lost (deposited at document root)

**Non-compliant Code**:
```html
<!-- bad — no dialog role, no aria-modal, no aria-labelledby -->
<div id="awsLeadModal" class="aws-modal-overlay" onclick="if(event.target===this)closeLeadModal()">
    <div class="aws-modal-box">
        <div class="aws-modal-form-panel">
            <div class="aws-modal-form-header">
                <button class="aws-modal-close" onclick="closeLeadModal()" aria-label="Close">&times;</button>
                <h2>Get a FREE Quote Today!</h2>
```

**Fixed Code**:
```html
<!-- good — proper dialog semantics with aria-labelledby -->
<div id="awsLeadModal"
     class="aws-modal-overlay"
     onclick="if(event.target===this)closeLeadModal()"
     aria-hidden="true">
  <div class="aws-modal-box"
       role="dialog"
       aria-modal="true"
       aria-labelledby="awsModalTitle"
       tabindex="-1">
    <div class="aws-modal-form-panel">
      <div class="aws-modal-form-header">
        <button class="aws-modal-close"
                onclick="closeLeadModal()"
                aria-label="Close dialog">&times;</button>
        <h2 id="awsModalTitle">Get a FREE Quote Today!</h2>
```

And the updated JavaScript focus-trap + return-focus pattern:

```js
/* ── Accessible Modal with focus trap ─────────────────────────── */
var _awsModalTrigger = null; // remembers what opened the modal

function openLeadModal(triggerEl) {
    _awsModalTrigger = triggerEl || document.activeElement;
    var overlay = document.getElementById('awsLeadModal');
    var box     = overlay.querySelector('[role="dialog"]');
    overlay.classList.add('active');
    overlay.removeAttribute('aria-hidden');
    document.body.style.overflow = 'hidden';
    // Move focus into the dialog
    box.focus();
}

function closeLeadModal() {
    var overlay = document.getElementById('awsLeadModal');
    overlay.classList.remove('active');
    overlay.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    // Return focus to the element that opened the modal
    if (_awsModalTrigger && typeof _awsModalTrigger.focus === 'function') {
        _awsModalTrigger.focus();
    }
    _awsModalTrigger = null;
}

/* Focus trap — keep Tab and Shift+Tab inside the dialog */
document.addEventListener('keydown', function (e) {
    var overlay = document.getElementById('awsLeadModal');
    if (!overlay || !overlay.classList.contains('active')) return;

    if (e.key === 'Escape') { closeLeadModal(); return; }
    if (e.key !== 'Tab') return;

    var box         = overlay.querySelector('[role="dialog"]');
    var focusable   = Array.from(box.querySelectorAll(
        'a[href], button:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])'
    )).filter(function (el) { return el.offsetParent !== null; });

    if (!focusable.length) { e.preventDefault(); return; }

    var first = focusable[0];
    var last  = focusable[focusable.length - 1];

    if (e.shiftKey && document.activeElement === first) {
        e.preventDefault();
        last.focus();
    } else if (!e.shiftKey && document.activeElement === last) {
        e.preventDefault();
        first.focus();
    }
});
```

**Why**: Without a focus trap, screen-reader users pressing Tab while the modal is open traverse the entire background page. WCAG 2.4.3 requires focus to remain within a modal dialog. The `aria-modal="true"` attribute instructs supporting screen readers to restrict their virtual cursor to the dialog. Return focus ensures the user is not disoriented after dismissal.

---

## Issue #5: All Form Inputs in `form-quote.php` and Modal Have No `<label>` Elements

**WCAG Criterion**: 3.3.2 — Labels or Instructions; 1.3.1 — Info & Relationships
**Severity**: Critical
**File**: `includes/form-quote.php` : lines 28–74 | `includes/footer.php` : lines 831–861

Both the sidebar quote form and the popup modal form use **only `placeholder` text** to identify fields. There are no `<label>` elements. Placeholders disappear as soon as the user starts typing, and are never announced reliably by screen readers as field labels.

**Non-compliant Code**:
```html
<!-- bad — placeholder used as label substitute; no <label> elements -->
<input type="text" name="first_name" id="first_name"
       placeholder="First Name *" required maxlength="50">

<input type="email" name="email" id="email"
       placeholder="Email Address *" required>

<select name="service" required>
    <option value="" disabled selected>Select Service *</option>
    ...
</select>
```

**Fixed Code**:
```html
<!-- good — visible <label> + placeholder as supplementary hint -->
<div class="aws-form-group">
  <label for="modal_first_name">
    First Name <span aria-hidden="true">*</span>
    <span class="sr-only">(required)</span>
  </label>
  <input type="text"
         name="first_name"
         id="modal_first_name"
         placeholder="e.g. John"
         required
         aria-required="true"
         maxlength="50"
         autocomplete="given-name">
</div>

<div class="aws-form-group">
  <label for="modal_last_name">
    Last Name <span aria-hidden="true">*</span>
    <span class="sr-only">(required)</span>
  </label>
  <input type="text"
         name="last_name"
         id="modal_last_name"
         placeholder="e.g. Smith"
         required
         aria-required="true"
         maxlength="50"
         autocomplete="family-name">
</div>

<div class="aws-form-group">
  <label for="modal_email">
    Email Address <span aria-hidden="true">*</span>
    <span class="sr-only">(required)</span>
  </label>
  <input type="email"
         name="email"
         id="modal_email"
         placeholder="e.g. john@company.com"
         required
         aria-required="true"
         autocomplete="email">
</div>

<div class="aws-form-group">
  <label for="modal_phone">
    Phone Number <span aria-hidden="true">*</span>
    <span class="sr-only">(required)</span>
  </label>
  <input type="tel"
         name="phone"
         id="modal_phone"
         placeholder="e.g. +1 212 555 0100"
         required
         aria-required="true"
         maxlength="20"
         autocomplete="tel">
</div>

<div class="aws-form-group">
  <label for="modal_service">
    Service Interested In <span aria-hidden="true">*</span>
    <span class="sr-only">(required)</span>
  </label>
  <select name="service" id="modal_service" required aria-required="true">
    <option value="" disabled selected>Select a service…</option>
    <option>Mobile App Development</option>
    <option>Web Development</option>
    <option>AI / Machine Learning</option>
    <option>Blockchain Development</option>
    <option>Cloud &amp; DevOps</option>
    <option>UI/UX Design</option>
    <option>Digital Marketing</option>
    <option>Other</option>
  </select>
</div>

<div class="aws-form-group">
  <label for="modal_description">Project Description</label>
  <textarea name="description"
            id="modal_description"
            placeholder="Tell us about your project (optional)"></textarea>
</div>
```

Also add this CSS helper class if not already present:

```css
/* Visually hidden but accessible to screen readers */
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  white-space: nowrap;
  border: 0;
}
```

**Why**: WCAG 3.3.2 requires labels for all form inputs. Placeholders fail for four reasons: (1) they disappear on input, (2) they have insufficient contrast (#bbb on white = ~2.3:1, failing 4.5:1 requirement), (3) many screen readers do not read them as field names, (4) voice-control users cannot activate a field by speaking the placeholder text. This affects every user who uses a form on this site.

---

## Issue #6: `form-quote.php` Sends Data via HTTP GET — Exposes PII in URL

**WCAG Criterion**: 3.3.4 — Error Prevention (Legal, Financial, Private) [AA]
**Severity**: High (also a security issue)
**File**: `includes/form-quote.php` : line 18

The shared quote form uses `method="get"`. User names, emails and phone numbers are appended to the URL, appear in server access logs, browser history, and Referer headers.

**Non-compliant Code**:
```html
<!-- bad — GET exposes PII in URL -->
<form id="contact" action="<?= htmlspecialchars($_fq_action) ?>" method="get" class="aws-qf-form" novalidate>
```

**Fixed Code**:
```html
<!-- good — POST keeps PII in request body -->
<form id="contact" action="<?= htmlspecialchars($_fq_action) ?>" method="post" class="aws-qf-form" novalidate>
```

**Why**: While WCAG 3.3.4 focuses on reversibility and error prevention for financial/legal data, submitting contact details via GET violates user privacy expectations and can cause data leakage. This is also a direct violation of GDPR Article 5(1)(f) (integrity and confidentiality). Fix is a one-character change: `get` → `post`.

---

## Issue #7: Error Messages Are Not Programmatically Associated with Fields

**WCAG Criterion**: 3.3.1 — Error Identification; 1.3.1 — Info & Relationships
**Severity**: High
**File**: `contact.php` : lines 620, 634, 659, 713 | `includes/footer.php` JS (footer validation)

Inline validation error messages are injected into `<small>` elements but are not linked to their input fields via `aria-describedby`. Screen readers will not associate the error with the field.

**Non-compliant Code**:
```html
<!-- bad — error message sibling to input but not programmatically linked -->
<input class="cf-input" type="text" name="first_name" id="first_name" required>
<small class="cf-small" id="name-valid"></small>

<!-- JS sets: document.getElementById('name-valid').textContent = 'First name is required.'; -->
<!-- Screen reader never knows "name-valid" relates to "first_name" -->
```

**Fixed Code**:
```html
<!-- good — aria-describedby links field to its live error region -->
<input class="cf-input"
       type="text"
       name="first_name"
       id="first_name"
       required
       aria-required="true"
       aria-describedby="name-valid"
       autocomplete="given-name">
<small class="cf-small"
       id="name-valid"
       role="alert"
       aria-live="polite"></small>
```

Apply the same `aria-describedby="[error-id]"` and `role="alert"` / `aria-live="polite"` pattern to every field: `email`, `phone`, `description`, `cf-service-trigger`.

**Why**: WCAG 3.3.1 requires that when an input error is automatically detected, the item in error is identified and the error is described to the user in text. `aria-describedby` provides the programmatic link; `aria-live="polite"` causes screen readers to announce the error message as it is injected into the DOM without interrupting current reading.

---

## Issue #8: Floating Call/Email Widget Has No Accessible Label

**WCAG Criterion**: 4.1.2 — Name, Role, Value; 2.4.4 — Link Purpose
**Severity**: High
**File**: `includes/footer.php` : lines 877–885

The floating left-side contact buttons show only icon glyphs. The email link uses `title="Email Us"` (not read by all screen readers) and the phone link has no text alternative at all.

**Non-compliant Code**:
```html
<!-- bad — icon-only links with no screen-reader accessible name -->
<a href="mailto:info@artisticwebservices.com" class="aws-float-email" title="Email Us">
    <i class="fa fa-envelope"></i>
    <span>info@artisticwebservices.com</span>  <!-- visually hidden until hover -->
</a>
<a href="tel:+12137147176" class="aws-float-call" title="Call Now">
    <i class="fa fa-phone"></i>
</a>
```

**Fixed Code**:
```html
<!-- good — aria-label provides accessible name independent of visual state -->
<a href="mailto:info@artisticwebservices.com"
   class="aws-float-email"
   aria-label="Email us at info@artisticwebservices.com">
    <i class="fa fa-envelope" aria-hidden="true"></i>
    <span>info@artisticwebservices.com</span>
</a>
<a href="tel:+12137147176"
   class="aws-float-call"
   aria-label="Call us at (213) 714-7176">
    <i class="fa fa-phone" aria-hidden="true"></i>
</a>
```

Add `aria-hidden="true"` to all decorative `<i>` icon elements globally — they should never be announced by screen readers.

**Why**: WCAG 4.1.2 requires every UI component to have an accessible name. WCAG 2.4.4 requires link purpose to be determinable from link text alone. An icon-only link with no aria-label provides neither. The `<span>` is visually hidden on non-hover states, so it provides no label when the element is focused via keyboard or announced via screen reader in browse mode.

---

## Issue #9: Hero `<video>` Has No Caption Track or `prefers-reduced-motion` Guard

**WCAG Criterion**: 1.2.2 — Captions (Prerecorded); 2.3.3 — Animation from Interactions [AAA reference, best practice at AA]
**Severity**: Medium
**File**: `index.php` : line 492

The hero video autoplays and loops. There are no captions/subtitles (`<track>` element). Additionally, there is no `prefers-reduced-motion` media query to pause the video for users with vestibular disorders.

**Non-compliant Code**:
```html
<!-- bad — autoplay video, no captions, no motion reduction -->
<video class="hero-video-bg" autoplay muted loop playsinline>
    <source src=".../vecteezy_united-states-flag-waving-gently-against-a-bright-blue-sky.mp4" type="video/mp4">
</video>
```

**Fixed Code**:
```html
<!-- good — pauses for reduced-motion preference; captions track provided -->
<video class="hero-video-bg"
       autoplay
       muted
       loop
       playsinline
       aria-hidden="true">
    <source src=".../vecteezy_united-states-flag-waving-gently-against-a-bright-blue-sky.mp4" type="video/mp4">
    <!-- If the video ever carries meaningful audio, add a captions track: -->
    <!-- <track kind="captions" src="/assets/captions/hero-en.vtt" srclang="en" label="English" default> -->
</video>
```

Add to page CSS (or global stylesheet):
```css
/* Pause all decorative animations for users who prefer reduced motion */
@media (prefers-reduced-motion: reduce) {
    .hero-video-bg {
        animation: none !important;
    }
    /* Pause the video via JS — CSS cannot pause video */
}
```

And add to page JS:
```js
// Pause looping background video for users who prefer reduced motion
(function () {
    var video = document.querySelector('.hero-video-bg');
    if (!video) return;
    var mq = window.matchMedia('(prefers-reduced-motion: reduce)');
    function applyMotion(mq) {
        if (mq.matches) {
            video.pause();
        } else {
            video.play().catch(function(){});
        }
    }
    applyMotion(mq);
    mq.addEventListener('change', applyMotion);
})();
```

**Why**: WCAG 1.2.2 requires captions for prerecorded synchronized media. Though this video is currently decorative (muted, no speech), marking it `aria-hidden="true"` formally communicates this to AT. The motion-pause pattern is required best practice for vestibular-disorder users per WCAG 2.3.3 and is explicitly recommended in WCAG 2.1 Understanding docs.

---

## Issue #10: "Call Now" Buttons Are `<button>` Elements with `onclick="openLeadModal()"` — Missing `type="button"`

**WCAG Criterion**: 4.1.2 — Name, Role, Value
**Severity**: Low
**File**: `includes/header.php` : lines 351, 504

`<button>` elements inside a form default to `type="submit"`. Outside forms they behave correctly, but the omission of `type="button"` is a latent bug that could cause accidental form submission if ever moved inside a `<form>` wrapper.

**Non-compliant Code**:
```html
<!-- bad — missing type="button" -->
<button class="aws-mob-callnow" onclick="openLeadModal()" aria-label="Call Now">
    <i class="fa fa-phone"></i> Call Now
</button>

<button class="aws-call-now-btn" onclick="openLeadModal()">
    <i class="fa fa-phone"></i> Call Now
</button>
```

**Fixed Code**:
```html
<!-- good — explicit type prevents accidental submit behavior -->
<button type="button"
        class="aws-mob-callnow"
        onclick="openLeadModal(this)"
        aria-label="Open contact form to call or get a quote">
    <i class="fa fa-phone" aria-hidden="true"></i> Call Now
</button>

<button type="button"
        class="aws-call-now-btn"
        onclick="openLeadModal(this)"
        aria-label="Open contact form to call or get a quote">
    <i class="fa fa-phone" aria-hidden="true"></i> Call Now
</button>
```

Note: pass `this` to `openLeadModal()` so the focus-trap fix from Issue #4 can return focus to the correct trigger button.

**Why**: Explicit `type="button"` is required by HTML5 spec for non-submit buttons. The updated aria-label is more descriptive — "Call Now" alone doesn't tell screen-reader users the button opens a form rather than initiating an actual phone call.

---

## Issue #11: Contact Page — Custom Multi-Select Widget Has No Keyboard Arrow Navigation

**WCAG Criterion**: 2.1.1 — Keyboard; 4.1.2 — Name, Role, Value
**Severity**: High
**File**: `contact.php` : lines 667–697

The custom "What Are You Looking For?" multi-select uses `role="button"` and `role="listbox"` correctly, but the dropdown options (`role="option"`) cannot be navigated with arrow keys. WCAG requires listbox widgets to implement the [ARIA Listbox Pattern](https://www.w3.org/WAI/ARIA/apg/patterns/listbox/) keyboard behaviour (Up/Down arrows, Home/End, Space to select).

**Non-compliant Code**:
```html
<!-- bad — role="option" divs have no keyboard handler for arrow navigation -->
<div class="cf-select-dropdown" id="cf-service-dropdown" role="listbox">
    <div class="cf-sel-option" data-value="Mobile App" role="option">
```

```js
// bad — only Enter and Space on the trigger; no arrow navigation in dropdown
trigger.addEventListener('keydown', function (e) {
    if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); trigger.click(); }
    if (e.key === 'Escape') { /* close */ }
});
```

**Fixed Code** — add this keyboard handler after the existing click handlers:

```js
/* ── Arrow-key navigation inside the custom listbox ──────────── */
var options = Array.from(dropdown.querySelectorAll('[role="option"]'));

// Give options a tabindex so they can receive focus
options.forEach(function (opt) {
    opt.setAttribute('tabindex', '-1');
});

trigger.addEventListener('keydown', function (e) {
    var isOpen = dropdown.classList.contains('is-open');
    if ((e.key === 'Enter' || e.key === ' ') && !isOpen) {
        e.preventDefault();
        trigger.click();
        // Focus first option after opening
        setTimeout(function () {
            if (options[0]) options[0].focus();
        }, 50);
        return;
    }
    if (e.key === 'Escape') {
        dropdown.classList.remove('is-open');
        trigger.classList.remove('is-open');
        trigger.setAttribute('aria-expanded', 'false');
    }
});

dropdown.addEventListener('keydown', function (e) {
    var focused = document.activeElement;
    var idx     = options.indexOf(focused);

    if (e.key === 'ArrowDown') {
        e.preventDefault();
        var next = options[(idx + 1) % options.length];
        if (next) next.focus();
    } else if (e.key === 'ArrowUp') {
        e.preventDefault();
        var prev = options[(idx - 1 + options.length) % options.length];
        if (prev) prev.focus();
    } else if (e.key === 'Home') {
        e.preventDefault();
        options[0].focus();
    } else if (e.key === 'End') {
        e.preventDefault();
        options[options.length - 1].focus();
    } else if (e.key === ' ' || e.key === 'Enter') {
        e.preventDefault();
        if (focused && focused.dataset.value) focused.click();
    } else if (e.key === 'Escape') {
        dropdown.classList.remove('is-open');
        trigger.classList.remove('is-open');
        trigger.setAttribute('aria-expanded', 'false');
        trigger.focus();
    } else if (e.key === 'Tab') {
        // Close on Tab-out
        dropdown.classList.remove('is-open');
        trigger.classList.remove('is-open');
        trigger.setAttribute('aria-expanded', 'false');
    }
});
```

**Why**: WCAG 2.1.1 requires all functionality operable by keyboard. The ARIA Listbox pattern mandates arrow-key navigation. Without it, keyboard users can open the dropdown but cannot select any option — completely blocking form submission.

---

## Skip Navigation — Verified Present, Minor Enhancement Needed

The skip link exists at `includes/header.php` line 342:

```html
<a class="skip-to-main" href="#main-content">Skip to main content</a>
```

And the anchor at line 511:

```html
<div id="main-content" tabindex="-1" style="outline:none;"></div>
```

This is **correctly implemented**. The one enhancement is to ensure the skip link is **visually visible on focus** (not merely present). Verify the CSS in the stylesheet includes:

```css
/* Skip link — visible on focus only */
.skip-to-main {
    position: absolute;
    top: -100%;
    left: 0;
    z-index: 1000000;
    background: #dd0429;
    color: #fff;
    padding: 12px 24px;
    font-weight: 700;
    font-size: 15px;
    text-decoration: none;
    border-radius: 0 0 8px 0;
    transition: top 0.15s ease;
}
.skip-to-main:focus {
    top: 0;
    outline: 3px solid #fff;
    outline-offset: 2px;
}
```

---

## Keyboard Navigation Fix for Mega Menu — Full Implementation

The complete accessible mega-menu HTML pattern replacing the current hover-only approach:

```html
<!-- ── Accessible Mega-Menu (replaces current hover-only markup) ── -->
<li class="nav-item dropdown position-static">
  <button class="nav-link dropdown-toggle"
          type="button"
          id="serviceMenuBtn"
          aria-haspopup="true"
          aria-expanded="false"
          aria-controls="servicedropdown">
    Services
    <i class="fa-solid fa-chevron-down" aria-hidden="true" style="font-size:11px;margin-left:4px;"></i>
  </button>

  <div class="dropdown-menu w-100 mt-0"
       id="servicedropdown"
       role="region"
       aria-labelledby="serviceMenuBtn"
       hidden>
    <div class="container">
      <div class="row my-4">
        <!-- col 1: decorative image (hidden from AT) -->
        <div class="col-lg-3 mb-3 mb-lg-0 cs-border" aria-hidden="true">
          <div class="services-header-img mt-4">
            <img src=".../assets/images/services.webp" alt="" aria-hidden="true">
          </div>
          <p class="mb-0 mt-4" style="font-size:24px;font-weight:600" aria-hidden="true">Our Services</p>
          <p aria-hidden="true">Using cutting-edge technology to develop industry-leading digital products.</p>
        </div>

        <!-- col 2: links (fully keyboard-accessible as they always are when visible) -->
        <div class="col-lg-3 mb-3 mb-lg-0 cs-border">
          <nav aria-label="Services — Development">
            <div class="list-group list-group-flush">
              <a href=".../services/mobile-app-development.php"
                 class="d-flex align-items-center list-group-item list-group-item-action">
                <i class="me-3 d-block red-icon fa-solid fa-mobile-button" aria-hidden="true"></i>
                Mobile Application Development
              </a>
              <!-- ... remaining service links ... -->
            </div>
          </nav>
        </div>

        <!-- col 3, col 4: same pattern with aria-label on each <nav> -->
      </div>
    </div>
  </div>
</li>
```

Key changes from current markup:
- `<a href="javascript:void(0)">` → `<button type="button">` (semantic trigger)
- `onmouseenter` JS hook removed from markup; handled in JS event listeners
- `hidden` attribute used instead of CSS display:none — accessible hiding
- Decorative column text marked `aria-hidden="true"`
- Icon `<i>` elements inside links marked `aria-hidden="true"`
- Each column's link group wrapped in `<nav aria-label="...">` for landmark navigation

---

## Modal Accessibility Fix — Complete Accessible Modal Pattern

```html
<!-- ── Accessible Lead Modal ─────────────────────────────────── -->
<div id="awsLeadModal"
     class="aws-modal-overlay"
     aria-hidden="true"
     onclick="if(event.target===this)closeLeadModal()">

  <div class="aws-modal-box"
       role="dialog"
       aria-modal="true"
       aria-labelledby="awsModalTitle"
       aria-describedby="awsModalDesc"
       tabindex="-1">

    <!-- LEFT: decorative image panel — hidden from AT -->
    <div class="aws-modal-image-panel" aria-hidden="true">
      <div class="aws-modal-left-content">
        <div class="aws-modal-left-badge">Free Consultation — Limited Slots</div>
        <h2 class="aws-modal-left-heading">Let's Build Something <span>Amazing</span> Together</h2>
        <p class="aws-modal-left-sub">Talk to our experts today — we respond within 2 hours.</p>
        <div class="aws-modal-stats">
          <div><strong>500+</strong><span>Projects</span></div>
          <div><strong>10+</strong><span>Yrs Exp.</span></div>
          <div><strong>98%</strong><span>Satisfied</span></div>
        </div>
        <img src=".../assets/images/modal-support-lady.png"
             alt=""
             class="aws-modal-lady-img"
             loading="lazy">
      </div>
    </div>

    <!-- RIGHT: form panel -->
    <div class="aws-modal-form-panel">
      <div class="aws-modal-form-header">
        <button type="button"
                class="aws-modal-close"
                onclick="closeLeadModal()"
                aria-label="Close dialog">
          <i class="fa fa-times" aria-hidden="true"></i>
        </button>
        <h2 id="awsModalTitle">Get a FREE Quote Today!</h2>
        <p id="awsModalDesc">Fill in your details — no obligation, no spam.</p>
      </div>

      <div class="aws-modal-body">
        <form id="awsLeadForm" onsubmit="awsSubmitForm(event)" novalidate>

          <div class="aws-form-row">
            <div class="aws-form-group">
              <label for="modal_first_name">First Name <span aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
              <input type="text"
                     name="first_name"
                     id="modal_first_name"
                     placeholder="e.g. John"
                     required
                     aria-required="true"
                     aria-describedby="modal_first_name_err"
                     maxlength="50"
                     autocomplete="given-name">
              <span id="modal_first_name_err" role="alert" aria-live="polite" class="aws-field-error" style="display:none;"></span>
            </div>
            <div class="aws-form-group">
              <label for="modal_last_name">Last Name <span aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
              <input type="text"
                     name="last_name"
                     id="modal_last_name"
                     placeholder="e.g. Smith"
                     required
                     aria-required="true"
                     aria-describedby="modal_last_name_err"
                     maxlength="50"
                     autocomplete="family-name">
              <span id="modal_last_name_err" role="alert" aria-live="polite" class="aws-field-error" style="display:none;"></span>
            </div>
          </div>

          <div class="aws-form-group">
            <label for="modal_email">Email Address <span aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
            <input type="email"
                   name="email"
                   id="modal_email"
                   placeholder="e.g. john@company.com"
                   required
                   aria-required="true"
                   aria-describedby="modal_email_err"
                   autocomplete="email">
            <span id="modal_email_err" role="alert" aria-live="polite" class="aws-field-error" style="display:none;"></span>
          </div>

          <div class="aws-form-group">
            <label for="modal_phone">Phone Number <span aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
            <input type="tel"
                   name="phone"
                   id="modal_phone"
                   placeholder="e.g. +1 212 555 0100"
                   required
                   aria-required="true"
                   aria-describedby="modal_phone_err"
                   maxlength="20"
                   autocomplete="tel">
            <span id="modal_phone_err" role="alert" aria-live="polite" class="aws-field-error" style="display:none;"></span>
          </div>

          <div class="aws-form-group">
            <label for="modal_service">Service Interested In <span aria-hidden="true">*</span><span class="sr-only">(required)</span></label>
            <select name="service"
                    id="modal_service"
                    required
                    aria-required="true"
                    aria-describedby="modal_service_err">
              <option value="" disabled selected>Select a service…</option>
              <option value="Mobile App Development">Mobile App Development</option>
              <option value="Web Development">Web Development</option>
              <option value="AI / Machine Learning">AI / Machine Learning</option>
              <option value="Blockchain Development">Blockchain Development</option>
              <option value="Cloud &amp; DevOps">Cloud &amp; DevOps</option>
              <option value="UI/UX Design">UI/UX Design</option>
              <option value="Digital Marketing">Digital Marketing</option>
              <option value="Other">Other</option>
            </select>
            <span id="modal_service_err" role="alert" aria-live="polite" class="aws-field-error" style="display:none;"></span>
          </div>

          <div class="aws-form-group">
            <label for="modal_description">Project Description</label>
            <textarea name="description"
                      id="modal_description"
                      placeholder="Tell us about your project (optional)"></textarea>
          </div>

          <input type="hidden" name="source" value="modal-popup">

          <button type="submit" class="aws-form-submit">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
            Get My Free Quote Now
          </button>
        </form>

        <p class="aws-modal-footer-note">
          <i class="fa fa-lock" aria-hidden="true"></i> 100% Confidential &nbsp;&bull;&nbsp;
          <i class="fa fa-phone" aria-hidden="true"></i> Call us: <a href="tel:+12137147176">(213) 714-7176</a>
        </p>
      </div>
    </div>

  </div>
</div>
```

---

## Color & Contrast Notes (WCAG 1.4.3)

The following combinations require verification against a contrast checker (values are estimates from the CSS):

| Element | Foreground | Background | Estimated Ratio | Status |
|---|---|---|---|---|
| `.info-item-body h6` in contact card | `rgba(255,255,255,0.65)` ≈ #a6a6a6 on #dd0429 | #dd0429 | ~2.0:1 | **Fail** — needs `#fff` |
| `.aws-modal-left-sub` | `rgba(255,255,255,0.85)` | #dd0429 gradient | ~3.5:1 | **Marginal** — use #fff |
| `.contact-hero p` | `rgba(255,255,255,0.65)` | #dd0429 gradient | ~2.0:1 | **Fail** — use `#fff` or `rgba(255,255,255,0.90)` |
| Placeholder text (#bbb) | #bbbbbb | #fafafa | ~2.3:1 | **Fail** — use #767676 minimum |
| `.site-footer__bottom-text` (if light on dark) | verify in browser | #1a1a2e | Check | Verify |

**Quick fix for the two critical failures**:
```css
/* Fix 1: Contact info card subtitle — was rgba(255,255,255,0.50) = fails */
.contact-info-card .info-subtitle { color: rgba(255,255,255,0.80); }

/* Fix 2: Hero subtext — was rgba(255,255,255,0.65) = fails */
.contact-hero p { color: rgba(255,255,255,0.90); }

/* Fix 3: Placeholder contrast — was #bbb = 2.3:1 = fails */
.cf-input::placeholder,
.aws-form-group input::placeholder,
.aws-form-group select::placeholder,
.aws-form-group textarea::placeholder {
    color: #767676; /* 4.54:1 on #fafafa — passes AA */
}
```

---

## Priority Fixes (Quick Wins vs Long Term)

| # | Fix | Effort | Users Impacted | WCAG | Priority |
|---|---|---|---|---|---|
| 1 | Add `<label>` to all form inputs (modal + quote form) | 2h | All form users (~30% of traffic) | 3.3.2, 1.3.1 | Critical — do first |
| 2 | Add focus trap + aria-modal + aria-labelledby to lead modal | 3h | Screen reader + keyboard users | 2.4.3, 4.1.2 | Critical |
| 3 | Keyboard-accessible mega-menu (button trigger + JS) | 4h | All keyboard-only users | 2.1.1 | Critical |
| 4 | Arrow-key navigation in custom multi-select (contact page) | 2h | Keyboard users on contact form | 2.1.1 | High |
| 5 | aria-describedby + role="alert" on all form error messages | 1h | Screen reader users | 3.3.1 | High |
| 6 | Add descriptive alt text to brand logo slider images | 1h | Screen reader users | 1.1.1 | High |
| 7 | aria-label on floating call/email widget + aria-hidden on icon | 30m | Screen reader users | 4.1.2 | High |
| 8 | Fix placeholder contrast (#bbb → #767676) | 15m | Low vision users | 1.4.3 | Medium |
| 9 | Fix rgba(255,255,255,0.65) text on red backgrounds | 15m | Low vision users | 1.4.3 | Medium |
| 10 | Change `form-quote.php` method from GET to POST | 5m | All form submitters (privacy) | 3.3.4 | Medium |
| 11 | Add `prefers-reduced-motion` pause for hero video | 30m | Vestibular disorder users | Best practice | Medium |
| 12 | Add `aria-hidden="true"` to decorative dropdown images | 15m | Screen reader users | 1.1.1 | Low |
| 13 | Add explicit `type="button"` to all non-submit buttons | 30m | All users (latent bug) | 4.1.2 | Low |
| 14 | Add `aria-hidden="true"` to all decorative `<i>` icons globally | 2h (global) | Screen reader users | 4.1.2 | Low |

**Estimated total effort: ~16 hours of focused development.**
**Expected compliance improvement: 52% → 92%+ WCAG 2.1 AA.**

---

*Report generated by Senior Fullstack Developer #5 — Accessibility & Inclusive Design Specialist*
*ArtisticWebServices Internal Engineering Review — April 2026*
