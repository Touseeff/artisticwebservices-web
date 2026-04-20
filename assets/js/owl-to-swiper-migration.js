/**
 * Owl Carousel → Swiper Migration Shim
 * Sprint 3 JS Modernization
 *
 * Intercepts all $.fn.owlCarousel() calls made by mibooz.js and redirects
 * them to Swiper. No HTML in any page needs to change — the shim rewrites
 * the DOM at call-time.
 *
 * Load order (enforced in footer.php):
 *   1. swiper.min.js   — Swiper must already be defined
 *   2. THIS FILE       — installs the owlCarousel shim
 *   3. mibooz.js       — calls .owlCarousel(); shim intercepts
 *
 * Carousel inventory (mibooz.js):
 *   .project-one__carousel   — loop, margin:30, dots:true,  nav:false, items responsive 1/1/2/2/2
 *   .project-two__carousel   — loop, margin:30, dots:true,  nav:false, items responsive 1/1/2/2/4
 *   .testimonial-one__carousel — loop, margin:30, dots:false, nav:false, items responsive 1/1/2/2/3
 *   .testimonial-two__carousel — loop, margin:30, dots:false, nav:true,  items responsive 1/1/1/1/1
 *
 * Note: project-one/two and testimonial-one selectors currently have no
 * matching HTML in the site, but the shim handles them correctly if added.
 */
(function ($) {
    'use strict';

    // Only install the shim if:
    //   - Swiper is available (it is — loaded before this file)
    //   - owlCarousel is NOT already defined (safety guard)
    if (typeof $.fn.owlCarousel !== 'undefined') {
        console.info('[owl-to-swiper] Owl Carousel already present — shim skipped.');
        return;
    }

    if (typeof Swiper === 'undefined') {
        console.warn('[owl-to-swiper] Swiper not found — shim cannot run.');
        return;
    }

    /**
     * Map Owl Carousel options to Swiper options.
     * @param {Object} owlOpts - raw options passed to .owlCarousel()
     * @returns {Object} swiperOpts - equivalent Swiper configuration
     */
    function mapOptions(owlOpts) {
        var opts = owlOpts || {};

        // --- autoplay ---
        var autoplay = false;
        if (opts.autoplay) {
            autoplay = {
                delay: opts.autoplayTimeout || 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            };
        }

        // --- navigation (nav buttons) ---
        var navigation = false;
        if (opts.nav) {
            navigation = {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            };
        }

        // --- pagination (dots) ---
        var pagination = false;
        if (opts.dots) {
            pagination = {
                el: '.swiper-pagination',
                clickable: true
            };
        }

        // --- breakpoints from Owl responsive option ---
        var breakpoints = {};
        if (opts.responsive && typeof opts.responsive === 'object') {
            Object.keys(opts.responsive).forEach(function (bp) {
                var bpVal = opts.responsive[bp];
                breakpoints[parseInt(bp, 10)] = {
                    slidesPerView: bpVal.items || 1,
                    spaceBetween: opts.margin || 0
                };
            });
        }

        return {
            loop: opts.loop !== false,
            speed: opts.smartSpeed || 400,
            spaceBetween: opts.margin || 0,
            centeredSlides: !!opts.center,
            slidesPerView: opts.items || 1,
            autoplay: autoplay,
            navigation: navigation,
            pagination: pagination,
            breakpoints: Object.keys(breakpoints).length ? breakpoints : undefined,
            // Swiper a11y
            a11y: { enabled: true },
            // Keyboard navigation
            keyboard: { enabled: true }
        };
    }

    /**
     * Rebuild the element's inner HTML into Swiper structure.
     * Owl children can be any direct child div (e.g. .testimonial-two__single,
     * .project-one__single, .item). We preserve each child's entire HTML as-is
     * inside a swiper-slide wrapper.
     */
    function buildSwiperDOM($el, needsNav, needsDots) {
        // Collect all immediate child elements (slides)
        var $children = $el.children();

        if ($children.length === 0) {
            return; // nothing to do
        }

        // Build slide markup — keep each child's outerHTML intact inside a slide
        var slidesHTML = '';
        $children.each(function () {
            slidesHTML += '<div class="swiper-slide">' + this.outerHTML + '</div>';
        });

        // Build the complete Swiper inner structure
        var innerHTML = '<div class="swiper-wrapper">' + slidesHTML + '</div>';

        if (needsDots) {
            innerHTML += '<div class="swiper-pagination"></div>';
        }

        if (needsNav) {
            innerHTML += '<div class="swiper-button-prev"></div>';
            innerHTML += '<div class="swiper-button-next"></div>';
        }

        // Replace the element's content with the Swiper structure
        // Also add the 'swiper' class (Swiper v8+ requires it on the container)
        $el.addClass('swiper').html(innerHTML);
    }

    /**
     * The shim: installed as $.fn.owlCarousel
     * Called by mibooz.js exactly as: $(".selector").owlCarousel({ options })
     */
    $.fn.owlCarousel = function (options) {
        return this.each(function () {
            var $el = $(this);

            // Skip if already initialized as a Swiper (idempotency guard)
            if ($el.data('swiper-migrated')) {
                return;
            }
            $el.data('swiper-migrated', true);

            var opts = options || {};
            var needsNav  = !!opts.nav;
            var needsDots = !!opts.dots;

            // 1. Rewrite the DOM to Swiper structure
            buildSwiperDOM($el, needsNav, needsDots);

            // 2. Map options
            var swiperOpts = mapOptions(opts);

            // Scope navigation/pagination to THIS swiper instance
            // (prevents Swiper from picking up buttons from other instances)
            if (needsNav) {
                swiperOpts.navigation = {
                    nextEl: $el.find('.swiper-button-next')[0],
                    prevEl: $el.find('.swiper-button-prev')[0]
                };
            }
            if (needsDots) {
                swiperOpts.pagination = {
                    el: $el.find('.swiper-pagination')[0],
                    clickable: true
                };
            }

            // 3. Initialize Swiper on this element
            try {
                new Swiper($el[0], swiperOpts);
            } catch (e) {
                console.error('[owl-to-swiper] Swiper init failed on element:', $el[0], e);
            }
        });
    };

    console.info('[owl-to-swiper] Owl Carousel → Swiper shim installed successfully.');

})(jQuery);
