<?php
// Must set 404 status BEFORE any output
http_response_code(404);

$page_title = "Page Not Found — Artastic Web Services";
$page_description = "The page you're looking for doesn't exist. Browse our services or contact us.";
$page_canonical = ''; // No canonical for 404 pages

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-header" style="background:#dd0429; padding:80px 0;">
  <div class="container text-center">
    <h1 style="color:#fff; font-size:80px; font-weight:800; margin:0;">404</h1>
    <h2 style="color:#fff; font-size:28px; margin:10px 0 20px;">Page Not Found</h2>
    <p style="color:rgba(255,255,255,0.85); font-size:16px; max-width:500px; margin:0 auto 30px;">
      The page you're looking for doesn't exist or has been moved.
    </p>
    <a href="<?php echo $B; ?>" class="btn" style="background:#fff; color:#dd0429; padding:14px 36px; border-radius:4px; font-weight:600; text-decoration:none; display:inline-block;">
      Back to Home
    </a>
    &nbsp;
    <a href="<?php echo $B; ?>contact" class="btn" style="background:transparent; color:#fff; padding:14px 36px; border-radius:4px; font-weight:600; text-decoration:none; display:inline-block; border:2px solid rgba(255,255,255,0.7);">
      Contact Us
    </a>
  </div>
</section>

<section style="padding:60px 0;">
  <div class="container text-center">
    <h3 style="font-size:22px; margin-bottom:30px;">Popular Services</h3>
    <div class="row justify-content-center">
      <div class="col-md-3 col-6 mb-3">
        <a href="<?php echo $B; ?>services/mobile-app-development" style="display:block; padding:20px; border:1px solid #eee; border-radius:8px; text-decoration:none; color:#333;">
          <i class="fas fa-mobile-alt fa-2x" style="color:#dd0429; margin-bottom:10px;" aria-hidden="true"></i>
          <p style="margin:0; font-size:14px; font-weight:600;">Mobile App Development</p>
        </a>
      </div>
      <div class="col-md-3 col-6 mb-3">
        <a href="<?php echo $B; ?>services/web-development" style="display:block; padding:20px; border:1px solid #eee; border-radius:8px; text-decoration:none; color:#333;">
          <i class="fas fa-globe fa-2x" style="color:#dd0429; margin-bottom:10px;" aria-hidden="true"></i>
          <p style="margin:0; font-size:14px; font-weight:600;">Web Development</p>
        </a>
      </div>
      <div class="col-md-3 col-6 mb-3">
        <a href="<?php echo $B; ?>services/ai" style="display:block; padding:20px; border:1px solid #eee; border-radius:8px; text-decoration:none; color:#333;">
          <i class="fas fa-brain fa-2x" style="color:#dd0429; margin-bottom:10px;" aria-hidden="true"></i>
          <p style="margin:0; font-size:14px; font-weight:600;">AI Development</p>
        </a>
      </div>
      <div class="col-md-3 col-6 mb-3">
        <a href="<?php echo $B; ?>contact" style="display:block; padding:20px; border:1px solid #eee; border-radius:8px; text-decoration:none; color:#333;">
          <i class="fas fa-envelope fa-2x" style="color:#dd0429; margin-bottom:10px;" aria-hidden="true"></i>
          <p style="margin:0; font-size:14px; font-weight:600;">Contact Us</p>
        </a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
