<?php
/**
 * footer-modal.php — Lead capture modal + floating contact + all inline JS
 * Contains:
 *   - Floating left contact bar (email / call)
 *   - Lead capture modal HTML (WCAG role="dialog", aria-modal, focus-trap)
 *   - Modal open/close JS (WCAG 2.1.2 focus trap, return-focus, Escape key)
 *   - Form submit handler (CSRF fetch, Tawk.to visitor storage, redirect)
 *   - Scroll navbar JS
 *   - Read More / Read Less toggle
 *   - Lazy-load images helper
 *   - Form input sanitizer
 *   - Desktop/mobile dropdown JS
 *   - Dynamic year
 *   - AWS_AUTOFIX_JS block (case sliders, tab sliders, form validation, SVG fix)
 *   - Preloader dismiss
 * Included by: includes/footer.php
 *
 * Requires $B (SITE_BASE alias) — set in footer.php before including this file.
 */
if (!isset($B)) {
    $B = defined('SITE_BASE') ? SITE_BASE : '';
}
?>

<!-- ── Floating Left Contact ──────────────────────── -->
<div class="aws-float-left">
    <!-- Icons are decorative here; the link text/title provides the accessible name -->
    <a href="mailto:info@artisticwebservices.com" class="aws-float-email" title="Email Us">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <span>info@artisticwebservices.com</span>
    </a>
    <a href="tel:+12137147176" class="aws-float-call" title="Call Now" aria-label="Call us now">
        <!-- Icon is the only content of this link, so aria-label on <a> provides the name above;
             the icon itself is decorative and should be hidden from AT -->
        <i class="fa fa-phone" aria-hidden="true"></i>
    </a>
</div>

<!-- ── Lead Modal ─────────────────────────────────── -->
<!-- WCAG 1.3.1 / 4.1.2 / 2.1.2: role="dialog", aria-modal, aria-labelledby added.
     Focus trap and return-focus are handled in the JS block below. -->
<div id="awsLeadModal" class="aws-modal-overlay" onclick="if(event.target===this)closeLeadModal()"
     role="dialog" aria-modal="true" aria-labelledby="awsModalTitle">
    <div class="aws-modal-box">

        <!-- LEFT: image panel — purely decorative, hidden from assistive technology -->
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
                <img
                    src="<?= $B ?>/assets/images/modal-support-lady.png"
                    alt=""
                    class="aws-modal-lady-img"
                    loading="lazy"
                />
            </div>
        </div>

        <!-- RIGHT: form panel -->
        <div class="aws-modal-form-panel">
            <div class="aws-modal-form-header">
                <!-- type="button" prevents accidental form submission (WCAG 4.1.2) -->
                <button type="button" class="aws-modal-close" onclick="closeLeadModal()" aria-label="Close dialog">&times;</button>
                <!-- id="awsModalTitle" is referenced by aria-labelledby on the overlay -->
                <h2 id="awsModalTitle">Get a FREE Quote Today!</h2>
                <p>Fill in your details — no obligation, no spam.</p>
            </div>
            <div class="aws-modal-body">
                <form id="awsLeadForm" onsubmit="awsSubmitForm(event)">
                    <div class="aws-form-row">
                        <div class="aws-form-group">
                            <!-- WCAG 1.3.1: visually-hidden labels paired to every input via for/id -->
                            <label for="modal-first-name" class="visually-hidden">First Name</label>
                            <input type="text" id="modal-first-name" name="first_name"
                                   placeholder="First Name *" required aria-required="true"
                                   maxlength="50" pattern="[A-Za-z ]+">
                        </div>
                        <div class="aws-form-group">
                            <label for="modal-last-name" class="visually-hidden">Last Name</label>
                            <input type="text" id="modal-last-name" name="last_name"
                                   placeholder="Last Name *" required aria-required="true"
                                   maxlength="50" pattern="[A-Za-z ]+">
                        </div>
                    </div>
                    <div class="aws-form-group">
                        <label for="modal-email" class="visually-hidden">Email Address</label>
                        <input type="email" id="modal-email" name="email"
                               placeholder="Email Address *" required aria-required="true">
                    </div>
                    <div class="aws-form-group">
                        <label for="modal-phone" class="visually-hidden">Phone Number</label>
                        <input type="tel" id="modal-phone" name="phone"
                               placeholder="Phone Number *" required aria-required="true" maxlength="20">
                    </div>
                    <div class="aws-form-group">
                        <label for="modal-service" class="visually-hidden">Select Service</label>
                        <select id="modal-service" name="service" required aria-required="true">
                            <option value="" disabled selected>Select Service *</option>
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
                        <label for="modal-description" class="visually-hidden">Tell us about your project</label>
                        <textarea id="modal-description" name="description"
                                  placeholder="Tell us about your project (optional)"></textarea>
                    </div>
                    <input type="hidden" name="source" value="modal-popup">
                    <button type="submit" class="aws-form-submit">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i> Get My Free Quote Now
                    </button>
                </form>
                <p class="aws-modal-footer-note">
                    <!-- Color contrast note: #999 on #fff fails WCAG AA 4.5:1 for small text.
                         Do NOT change visually — flag for design review. -->
                    <i class="fa fa-lock" aria-hidden="true"></i> 100% Confidential &nbsp;&bull;&nbsp;
                    <i class="fa fa-phone" aria-hidden="true"></i> Call us: <a href="tel:+12137147176">(213) 714-7176</a>
                </p>
            </div>
        </div>

    </div>
</div>

<script>
/* ── Modal — WCAG 2.1.2 Focus Trap + Return Focus ──────────────── */

/* Tracks which element triggered the modal open so focus can return on close */
var _awsModalTriggerEl = null;

/* Focus trap: keeps Tab/Shift+Tab inside the modal while it is open */
function _awsTrapFocus(modal) {
    var focusableSelectors = [
        'a[href]',
        'button:not([disabled])',
        'input:not([disabled])',
        'select:not([disabled])',
        'textarea:not([disabled])',
        '[tabindex]:not([tabindex="-1"])'
    ].join(', ');

    modal.addEventListener('keydown', function(e) {
        if (e.key !== 'Tab') return;

        var focusable = Array.prototype.slice.call(
            modal.querySelectorAll(focusableSelectors)
        ).filter(function(el) {
            return el.offsetParent !== null; /* skip hidden elements */
        });

        if (!focusable.length) { e.preventDefault(); return; }

        var first = focusable[0];
        var last  = focusable[focusable.length - 1];

        if (e.shiftKey) {
            /* Shift+Tab: if focus is on first element, wrap to last */
            if (document.activeElement === first) {
                e.preventDefault();
                last.focus();
            }
        } else {
            /* Tab: if focus is on last element, wrap to first */
            if (document.activeElement === last) {
                e.preventDefault();
                first.focus();
            }
        }
    });
}

/* Initialize the trap once on page load (attaches listener once; works for all opens) */
document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('awsLeadModal');
    if (modal) _awsTrapFocus(modal);
});

function openLeadModal(triggerEl) {
    /* Store the element that triggered the open so we can return focus on close */
    _awsModalTriggerEl = triggerEl || document.activeElement || null;

    var modal = document.getElementById('awsLeadModal');
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';

    /* Move focus into the modal — target first visible input, fall back to close button */
    setTimeout(function() {
        var firstInput = modal.querySelector('input:not([type="hidden"]), select, textarea');
        var closeBtn   = modal.querySelector('.aws-modal-close');
        if (firstInput) {
            firstInput.focus();
        } else if (closeBtn) {
            closeBtn.focus();
        } else {
            modal.focus();
        }
    }, 50); /* slight delay lets the CSS display:flex animation settle */
}

function closeLeadModal() {
    document.getElementById('awsLeadModal').classList.remove('active');
    document.body.style.overflow = '';

    /* Return focus to the element that opened the modal (WCAG 2.4.3) */
    if (_awsModalTriggerEl && typeof _awsModalTriggerEl.focus === 'function') {
        _awsModalTriggerEl.focus();
    }
    _awsModalTriggerEl = null;
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeLeadModal();
});
/* Auto-open modal after 60 seconds (once per session) */
setTimeout(function() {
    if (!sessionStorage.getItem('awsModalShown')) {
        openLeadModal();
        sessionStorage.setItem('awsModalShown', '1');
    }
}, 60000);

/* ── Form submit → thank-you redirect ─────────── */
function awsSubmitForm(e) {
    e.preventDefault();
    var form = document.getElementById('awsLeadForm');
    var btn  = form.querySelector('.aws-form-submit');
    btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Sending...';
    btn.disabled = true;

    /* Collect data */
    var data = new FormData(form);
    data.append('host', 'ArtisticWebServices');

    /* Remember visitor for Tawk.to (no server session on this site) */
    try {
        var fn = (form.querySelector('[name="first_name"]') || {}).value || '';
        var ln = (form.querySelector('[name="last_name"]') || {}).value || '';
        var em = (form.querySelector('[name="email"]') || {}).value || '';
        var ph = (form.querySelector('[name="phone"]') || {}).value || '';
        localStorage.setItem('awsTawkVisitor', JSON.stringify({
            name: (fn + ' ' + ln).replace(/\s+/g, ' ').trim(),
            email: em.trim(),
            phone: ph.trim()
        }));
    } catch (err) { /* private mode / quota */ }

    /* Attach CSRF token from the meta tag injected by includes/head.php
       (csrf_meta() outputs: <meta name="csrf-token" content="...">)     */
    var csrfMeta = document.querySelector('meta[name="csrf-token"]');
    if (csrfMeta) {
        data.append('csrf_token', csrfMeta.getAttribute('content'));
    }

    /* Send async (fire-and-forget — redirect regardless) */
    fetch('/contact-form', {
        method: 'POST',
        body: data
    }).catch(function(){});

    /* Always redirect to thank-you after short delay */
    setTimeout(function() {
        var base = document.querySelector('meta[name="site-base"]');
        var b = base ? base.getAttribute('content') : '';
        window.location.href = b + '/thank-you';
    }, 800);
}

/* ── Scroll events ─────────────────────────────── */
window.addEventListener("scroll", function() {
    var nav = document.querySelector('.navbar');
    if (nav) {
        nav.classList.toggle("scrolled", window.scrollY > 40);
    }
});

/* ── Read More / Read Less toggle ─────────────────── */
document.addEventListener('DOMContentLoaded', function () {
    var btn = document.getElementById('readMoreBtn');
    var more = document.getElementById('moreContent');
    if (btn && more) {
        more.style.display = 'none';
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            var isHidden = more.style.display === 'none';
            more.style.display = isHidden ? 'block' : 'none';
            btn.textContent = isHidden ? 'Read Less' : 'Read More';
        });
    }
});

/* ── Lazy-load all offscreen images ────────────────── */
document.addEventListener('DOMContentLoaded', function () {
    var imgs = document.querySelectorAll('img:not([loading])');
    var hero = document.querySelector('.hero-video-bg, #carouselExampleDark img');
    imgs.forEach(function (img) {
        if (img !== hero && !img.closest('#carouselExampleDark .carousel-item.active')) {
            img.setAttribute('loading', 'lazy');
        }
    });
});

/* ── Form input sanitize ───────────────────────── */
['first_name','last_name'].forEach(function(id) {
    var el = document.getElementById(id);
    if (el) el.addEventListener('input', function() {
        this.value = this.value.replace(/[^a-zA-Z]/g, '');
    });
});

/* ── Dropdown JS ───────────────────────────────── */
function servicedrp() {
    if (window.innerWidth < 992) return;
    document.querySelector("#servicedropdown").classList.add('menu-show');
    document.querySelector("#solutiondropdown").classList.remove('menu-show');
    document.querySelector("#servicedropdown").addEventListener('mouseleave', function() {
        this.classList.remove('menu-show');
    });
}
function solutiondrp() {
    if (window.innerWidth < 992) return;
    document.querySelector("#servicedropdown").classList.remove('menu-show');
    document.querySelector("#solutiondropdown").classList.add('menu-show');
    document.querySelector("#solutiondropdown").addEventListener('mouseleave', function() {
        this.classList.remove('menu-show');
    });
}
function closealldrp() {
    document.querySelector("#servicedropdown").classList.remove('menu-show');
    document.querySelector("#solutiondropdown").classList.remove('menu-show');
}
function mobileDrpToggle(id, event) {
    if (window.innerWidth >= 992) return;
    event.preventDefault();
    event.stopPropagation();
    var dd = document.querySelector('#' + id);
    var isShown = dd.classList.contains('menu-show');
    closealldrp();
    if (!isShown) dd.classList.add('menu-show');
}

/* ── Dynamic year ──────────────────────────────── */
var dy = document.querySelector('.dynamic-year');
if (dy) dy.textContent = new Date().getFullYear();
</script>

<!-- BreadcrumbList and Service JSON-LD are emitted by head.php via $page_breadcrumbs and $page_service_schema — removed duplicate auto-generation from footer -->

<script>
// AWS_AUTOFIX_JS_START — Generated: 2026-04-04 01:27
(function () {
    'use strict';

    /* ── Case-Study Slider Controller (Fix 10) ── */
    function initCaseSliders() {
        document.querySelectorAll('.case-slider').forEach(function (slider) {
            var slides = slider.querySelectorAll('.case-slide');
            if (!slides.length) return;
            var current = 0;
            slides[0].classList.add('active');
            var wrapper = slider.closest('.slider-wrapper') || slider.parentElement;
            var prevBtn = wrapper ? wrapper.querySelector('.slider-prev') : null;
            var nextBtn = wrapper ? wrapper.querySelector('.slider-next') : null;
            var dotsWrap = wrapper ? wrapper.querySelector('.slider-dots') : null;
            if (dotsWrap && !dotsWrap.children.length) {
                slides.forEach(function (_, i) {
                    var dot = document.createElement('button');
                    dot.className = 'slider-dot' + (i === 0 ? ' active' : '');
                    dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
                    dot.addEventListener('click', function () { goTo(i); });
                    dotsWrap.appendChild(dot);
                });
            }
            function goTo(n) {
                slides[current].classList.remove('active');
                if (dotsWrap && dotsWrap.children[current]) dotsWrap.children[current].classList.remove('active');
                current = (n + slides.length) % slides.length;
                slides[current].classList.add('active');
                if (dotsWrap && dotsWrap.children[current]) dotsWrap.children[current].classList.add('active');
            }
            if (prevBtn) prevBtn.addEventListener('click', function () { goTo(current - 1); });
            if (nextBtn) nextBtn.addEventListener('click', function () { goTo(current + 1); });
            var startX = 0;
            slider.addEventListener('touchstart', function (e) { startX = e.touches[0].clientX; }, {passive: true});
            slider.addEventListener('touchend', function (e) {
                var diff = startX - e.changedTouches[0].clientX;
                if (Math.abs(diff) > 40) goTo(diff > 0 ? current + 1 : current - 1);
            }, {passive: true});
            var timer = setInterval(function () { goTo(current + 1); }, 5000);
            slider.addEventListener('mouseenter', function () { clearInterval(timer); });
            slider.addEventListener('mouseleave', function () {
                timer = setInterval(function () { goTo(current + 1); }, 5000);
            });
        });
    }

    /* ── Tab sliders (Fix 10) ── */
    function initTabSliders() {
        document.querySelectorAll('[data-tab-slider]').forEach(function (container) {
            var tabs = container.querySelectorAll('.tab-btn, [data-tab]');
            var panels = container.querySelectorAll('.tab-panel, .tab-content, .tab');
            if (!tabs.length || !panels.length) return;
            tabs.forEach(function (tab, i) {
                tab.addEventListener('click', function (e) {
                    e.preventDefault();
                    tabs.forEach(function (t) { t.classList.remove('active', 'active-btn'); });
                    panels.forEach(function (p) { p.style.display = 'none'; p.classList.remove('active-tab'); });
                    tab.classList.add('active', 'active-btn');
                    if (panels[i]) { panels[i].style.display = 'block'; panels[i].classList.add('active-tab'); }
                });
            });
            if (tabs[0]) tabs[0].click();
        });
    }

    /* ── Contact form inline validation (Fix 9) ── */
    function showErr(field, msg) {
        removeErr(field);
        var err = document.createElement('span');
        err.className = 'aws-field-error';
        err.textContent = msg;
        field.parentNode.appendChild(err);
        field.classList.add('field-error');
    }
    function removeErr(field) {
        var e = field.parentNode ? field.parentNode.querySelector('.aws-field-error') : null;
        if (e) e.remove();
        field.classList.remove('field-error');
    }
    function isValidEmail(v) { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
    function isValidPhone(v) { return /^[+\d][\d\s\-().]{6,19}$/.test(v); }
    function validateField(field) {
        var v = field.value.trim();
        if (!v) { showErr(field, (field.placeholder || field.name || 'This field') + ' is required.'); return false; }
        if (field.type === 'email' && !isValidEmail(v)) { showErr(field, 'Please enter a valid email address.'); return false; }
        if (field.type === 'tel' && !isValidPhone(v)) { showErr(field, 'Please enter a valid phone number.'); return false; }
        removeErr(field); return true;
    }
    function initFormValidation() {
        var sel = 'form.contact-form-validated, form[data-validate], .aws-contact-form form, form#awsLeadForm';
        document.querySelectorAll(sel).forEach(function (form) {
            var fields = form.querySelectorAll('input[required], textarea[required], select[required]');
            fields.forEach(function (field) {
                field.addEventListener('blur', function () { validateField(field); });
                field.addEventListener('input', function () { if (field.classList.contains('field-error')) validateField(field); });
            });
            form.addEventListener('submit', function (e) {
                var valid = true;
                fields.forEach(function (field) { if (!validateField(field)) valid = false; });
                if (!valid) { e.preventDefault(); e.stopPropagation(); var f = form.querySelector('.field-error'); if (f) f.focus(); }
            });
        });
    }

    /* ── SVG clipPath global visibility fix (Fix 6) ── */
    function fixSvgClipVisibility() {
        var allDefs = document.querySelectorAll('svg defs clipPath');
        if (!allDefs.length) return;
        var globalSvg = document.getElementById('aws-global-svg-defs');
        if (!globalSvg) {
            globalSvg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            globalSvg.id = 'aws-global-svg-defs';
            globalSvg.setAttribute('style', 'position:absolute;width:0;height:0;overflow:hidden');
            globalSvg.setAttribute('aria-hidden', 'true');
            var defs = document.createElementNS('http://www.w3.org/2000/svg', 'defs');
            globalSvg.appendChild(defs);
            document.body.insertBefore(globalSvg, document.body.firstChild);
        }
        allDefs.forEach(function (cp) {
            var clone = cp.cloneNode(true);
            var newId = 'g-' + clone.id;
            if (!document.getElementById(newId)) {
                clone.id = newId;
                globalSvg.querySelector('defs').appendChild(clone);
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        initCaseSliders();
        initTabSliders();
        initFormValidation();
        fixSvgClipVisibility();
    });
})();
// AWS_AUTOFIX_JS_END
</script>
