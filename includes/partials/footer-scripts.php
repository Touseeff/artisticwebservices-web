<?php
/**
 * footer-scripts.php — Vendor JS <script src="..."> tags
 * All third-party and local vendor script tags, loaded end-of-body
 * for render-unblocking (Sprint 2 improvement).
 * Included by: includes/footer.php (after </html>)
 *
 * Requires $B (SITE_BASE alias) and $load_slick (bool) —
 * both are set in footer.php before including this file.
 */
if (!isset($B)) {
    $B = defined('SITE_BASE') ? SITE_BASE : '';
}
if (!isset($load_slick))     { $load_slick     = false; }
if (!isset($load_jarallax))  { $load_jarallax  = false; }
if (!isset($load_isotope))   { $load_isotope   = false; }
if (!isset($load_countdown)) { $load_countdown = false; }
?>
<!-- ── Vendor JS ────────────────────────────────────── -->
<!-- jQuery 3.7.1 (upgraded from 3.6.0, moved from head to end-of-body for render-unblocking — Sprint 2) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?= $B ?>/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php if (!empty($load_jarallax)): ?>
<script src="<?= $B ?>/assets/vendors/jarallax/jarallax.min.js"></script>
<?php endif; ?>
<script src="<?= $B ?>/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="<?= $B ?>/assets/vendors/odometer/odometer.min.js"></script>
<script src="<?= $B ?>/assets/vendors/swiper/swiper.min.js"></script>
<!-- tiny-slider JS removed: zero .thm-tiny__slider elements on any page (Sprint 2) -->
<!-- ajaxchimp removed: no .mc-form newsletter element exists on any page -->
<!-- circle-progress removed: no .circle-progress element exists on any page -->
<!-- magnific-popup removed: no .video-popup or .img-popup element exists on any page -->
<!-- jquery-validate removed: no .contact-form-validated element exists on any page -->
<!-- nouislider + wNumb removed: no #range-slider-price element exists on any page -->
<!-- bootstrap-select removed: selectpicker() not called anywhere in mibooz.js -->
<!-- jquery-ui removed: not referenced anywhere in mibooz.js -->
<script src="<?= $B ?>/assets/vendors/wow/wow.js"></script>
<?php if (!empty($load_isotope)): ?>
<script src="<?= $B ?>/assets/vendors/isotope/isotope.js"></script>
<?php endif; ?>
<?php if (!empty($load_countdown)): ?>
<script src="<?= $B ?>/assets/vendors/countdown/countdown.min.js"></script>
<?php endif; ?>
<!-- Owl Carousel JS removed: Sprint 3 — migrated to Swiper via owl-to-swiper-migration.js shim -->
<!-- bxslider JS removed: .listing-details__gallery never rendered on any page (Sprint 2) -->
<!-- Slick JS — loaded only on pages that use it (set $load_slick = true before including head.php) -->
<?php if (!empty($load_slick)): ?>
<script src="<?= $B ?>/assets/vendors/slick/slick.min.js"></script>
<?php endif; ?>
<!-- select2 removed: no .js-example-basic-multiple element exists on any page -->
<!-- Owl → Swiper migration shim (Sprint 3): intercepts .owlCarousel() calls and uses Swiper instead -->
<!-- Must be loaded AFTER swiper.min.js (above) and BEFORE mibooz.js (below) -->
<script src="<?= $B ?>/assets/js/owl-to-swiper-migration.js"></script>
<!-- Template JS -->
<script src="<?= $B ?>/assets/js/mibooz.js"></script>
