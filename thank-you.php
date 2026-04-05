<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Thank You — ArtisticWebServices';
$page_description = 'Thank you for contacting ArtisticWebServices. We will get back to you within 24 hours.';
$page_canonical = SITE_URL . '/thank-you';
require_once __DIR__ . '/includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>
<body>
<div class="page-wrapper">
<?php require_once 'includes/header.php'; ?>

<section style="min-height:70vh;display:flex;align-items:center;justify-content:center;padding:60px 20px;background:linear-gradient(135deg,#fff5f5 0%,#fff 60%);">
    <div style="max-width:560px;width:100%;text-align:center;">
        <div style="width:90px;height:90px;background:#dd0429;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 28px;box-shadow:0 12px 40px rgba(221,4,41,0.25);">
            <i class="fa fa-check" style="color:#fff;font-size:38px;"></i>
        </div>
        <h1 style="font-size:34px;font-weight:800;color:#111;margin-bottom:14px;">Thank You!</h1>
        <p style="font-size:17px;color:#555;line-height:1.7;margin-bottom:32px;">
            Your message has been received.<br>
            Our team will get back to you within <strong style="color:#dd0429;">24 hours</strong>.
        </p>
        <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
            <a href="<?= $B ?>/" class="thm-btn" style="background:#dd0429;color:#fff;padding:14px 32px;border-radius:50px;text-decoration:none;font-weight:700;">Back to Home</a>
            <a href="<?= $B ?>/services.php" style="background:#fff;color:#dd0429;padding:14px 32px;border-radius:50px;text-decoration:none;font-weight:700;border:2px solid #dd0429;">View Services</a>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
</div>
</body>
</html>
