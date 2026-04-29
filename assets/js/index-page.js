/* index-page.js — homepage-specific JS (extracted from inline scripts for CSP compliance) */

/* ── Choose Us Swiper ──────────────────────────────────────────────── */
window.addEventListener('load', function () {
    function applyChooseCardStyles(swiper) {
        swiper.el.querySelectorAll('.choose-card').forEach(function (card) {
            card.style.backgroundColor = '#fff';
            card.style.color = '#333';
            card.style.boxShadow = '0 0 30px #d5d5d5';
            card.style.minHeight = '280px';
            card.querySelectorAll('h4').forEach(function (h) { h.style.color = ''; });
            card.querySelectorAll('p').forEach(function (p) { p.style.color = ''; });
        });
        swiper.el.querySelectorAll('.swiper-slide-active, .swiper-slide-duplicate-active').forEach(function (slide) {
            var card = slide.querySelector('.choose-card');
            if (!card) return;
            card.style.backgroundColor = '#17161a';
            card.style.color = '#fff';
            card.style.boxShadow = '0 8px 40px rgba(0,0,0,0.25)';
            card.style.minHeight = '310px';
            card.querySelectorAll('h4').forEach(function (h) { h.style.color = '#fff'; });
            card.querySelectorAll('p').forEach(function (p) { p.style.color = 'rgba(255,255,255,0.85)'; });
        });
    }

    new Swiper('.swiper-chooseus', {
        spaceBetween: 20,
        autoplay: { delay: 3000, disableOnInteraction: false },
        loop: true,
        centeredSlides: true,
        grabCursor: true,
        allowTouchMove: true,
        touchRatio: 1,
        touchAngle: 45,
        simulateTouch: true,
        slidesPerView: 1,
        breakpoints: {
            480: { slidesPerView: 1, spaceBetween: 16 },
            768: { slidesPerView: 2, spaceBetween: 20 },
            980: { slidesPerView: 3, spaceBetween: 24 },
        },
        on: {
            init:          function () { applyChooseCardStyles(this); },
            slideChange:   function () { applyChooseCardStyles(this); },
            transitionEnd: function () { applyChooseCardStyles(this); },
        }
    });

    /* ── Work Showcase Swiper ──────────────────────────────────────── */
    new Swiper('.my__Swiper', {
        loop: true,
        autoplay: { delay: 6000 },
    });
});

/* ── Services & Industries custom sliders ─────────────────────────── */
document.addEventListener('DOMContentLoaded', function () {
    function initializeSlider(sliderWrapperSelector, prevButtonSelector, nextButtonSelector) {
        var sliderWrapper = document.querySelector(sliderWrapperSelector);
        if (!sliderWrapper) return;
        var items = sliderWrapper.querySelectorAll('.custom-slider-item');
        var prevButton = document.querySelector(prevButtonSelector);
        var nextButton = document.querySelector(nextButtonSelector);
        var index = 0;
        var totalItems = items.length;
        var visibleItems = 4;

        function updateVisibleItems() {
            visibleItems = window.innerWidth <= 991 ? 1 : 4;
        }

        function updateSlider() {
            sliderWrapper.style.transform = 'translateX(' + (-index * (100 / visibleItems)) + '%)';
        }

        function applyItemBackgrounds() {
            items.forEach(function (item) {
                var bg = item.getAttribute('data-bg');
                if (bg) item.style.backgroundImage = bg;
            });
        }

        if (nextButton) nextButton.addEventListener('click', function () {
            index = index < totalItems - visibleItems ? index + 1 : 0;
            updateSlider();
        });

        if (prevButton) prevButton.addEventListener('click', function () {
            index = index > 0 ? index - 1 : totalItems - visibleItems;
            updateSlider();
        });

        window.addEventListener('resize', function () { updateVisibleItems(); updateSlider(); });
        updateVisibleItems(); updateSlider(); applyItemBackgrounds();
    }

    initializeSlider('.custom-slider-wrapper', '.custom-slider-prev', '.custom-slider-next');
    initializeSlider('.solutions-slider-wrapper', '.solutions-slider-prev', '.solutions-slider-next');
});
