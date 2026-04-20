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
if (!isset($load_slick)) {
    $load_slick = false;
}
?>
<!-- ── Vendor JS ────────────────────────────────────── -->
<!-- jQuery 3.7.1 (upgraded from 3.6.0, moved from head to end-of-body for render-unblocking — Sprint 2) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?= $B ?>/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= $B ?>/assets/vendors/jarallax/jarallax.min.js"></script>
<script src="<?= $B ?>/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="<?= $B ?>/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="<?= $B ?>/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="<?= $B ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= $B ?>/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="<?= $B ?>/assets/vendors/nouislider/nouislider.min.js"></script>
<script src="<?= $B ?>/assets/vendors/odometer/odometer.min.js"></script>
<script src="<?= $B ?>/assets/vendors/swiper/swiper.min.js"></script>
<!-- tiny-slider JS removed: zero .thm-tiny__slider elements on any page (Sprint 2) -->
<script src="<?= $B ?>/assets/vendors/wnumb/wNumb.min.js"></script>
<script src="<?= $B ?>/assets/vendors/wow/wow.js"></script>
<script src="<?= $B ?>/assets/vendors/isotope/isotope.js"></script>
<script src="<?= $B ?>/assets/vendors/countdown/countdown.min.js"></script>
<!-- Owl Carousel JS removed: Sprint 3 — migrated to Swiper via owl-to-swiper-migration.js shim -->
<!-- bxslider JS removed: .listing-details__gallery never rendered on any page (Sprint 2) -->
<script src="<?= $B ?>/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="<?= $B ?>/assets/vendors/jquery-ui/jquery-ui.js"></script>
<!-- Slick JS — loaded only on pages that use it (set $load_slick = true before including head.php) -->
<?php if (!empty($load_slick)): ?>
<script src="<?= $B ?>/assets/vendors/slick/slick.min.js"></script>
<?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>$('.js-example-basic-multiple').select2();</script>
<!-- Owl → Swiper migration shim (Sprint 3): intercepts .owlCarousel() calls and uses Swiper instead -->
<!-- Must be loaded AFTER swiper.min.js (above) and BEFORE mibooz.js (below) -->
<script src="<?= $B ?>/assets/js/owl-to-swiper-migration.js"></script>
<!-- Template JS -->
<script src="<?= $B ?>/assets/js/mibooz.js"></script>
