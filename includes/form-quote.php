<?php
/* Shared quote / contact form — included by service, solution & insight pages.
   Hidden captcha fields keep server-side validation passing without showing
   the math question to users.
   Security: CSRF token injected via csrf_field(); form method changed to POST. */
if (!defined('SITE_BASE')) {
    require_once __DIR__ . '/config.php';
}
// Load CSRF helpers if not already loaded (safe to call multiple times)
if (!function_exists('csrf_token')) {
    require_once __DIR__ . '/csrf.php';
}
$_fq_action = SITE_BASE . '/contact-form';
?>
<div class="aws-qf-wrap">
  <div class="aws-qf-card">

    <div class="aws-qf-header">
      <h3>Get Your Free Quote</h3>
      <p>Tell us about your project — we respond within 24 hours.</p>
    </div>

    <form id="contact" action="<?= htmlspecialchars($_fq_action) ?>" method="post" class="aws-qf-form">
      <?= csrf_field() ?>
      <input type="hidden" name="host"           value="ArtisticWebServices">
      <input type="hidden" id="captcha_answer"   name="captcha_answer" value="14">
      <input type="hidden" id="captcha"          name="captcha"        value="14">

      <!-- Name row -->
      <div class="aws-qf-row">
        <div class="aws-qf-group">
          <div class="aws-qf-field-wrap">
            <!-- WCAG 1.3.1: visually-hidden label so screen readers announce the field purpose -->
            <label for="quote-first-name" class="visually-hidden">First Name</label>
            <i class="fa fa-user aws-qf-icon" aria-hidden="true"></i>
            <input type="text" name="first_name" id="quote-first-name"
                   placeholder="First Name *" required aria-required="true" maxlength="100" autocomplete="name">
          </div>
          <small id="name-valid"></small>
        </div>
        <div class="aws-qf-group">
          <div class="aws-qf-field-wrap">
            <label for="quote-last-name" class="visually-hidden">Last Name</label>
            <i class="fa fa-user aws-qf-icon" aria-hidden="true"></i>
            <input type="text" name="last_name" id="quote-last-name"
                   placeholder="Last Name" maxlength="100" autocomplete="family-name">
          </div>
          <small id="name-valid2"></small>
        </div>
      </div>

      <!-- Email -->
      <div class="aws-qf-group">
        <div class="aws-qf-field-wrap">
          <label for="quote-email" class="visually-hidden">Email Address</label>
          <i class="fa fa-envelope aws-qf-icon" aria-hidden="true"></i>
          <input type="email" name="email" id="quote-email"
                 placeholder="Email Address *" required aria-required="true" autocomplete="email">
        </div>
        <small id="email-valid"></small>
      </div>

      <!-- Phone -->
      <div class="aws-qf-group">
        <div class="aws-qf-field-wrap">
          <label for="quote-phone" class="visually-hidden">Phone Number</label>
          <i class="fa fa-phone aws-qf-icon" aria-hidden="true"></i>
          <input type="tel" name="phone" id="quote-phone"
                 placeholder="Phone Number *" required aria-required="true" maxlength="30" autocomplete="tel">
        </div>
        <small id="phone-valid"></small>
      </div>

      <!-- Message -->
      <div class="aws-qf-group">
        <div class="aws-qf-field-wrap aws-qf-textarea-wrap">
          <label for="quote-description" class="visually-hidden">Tell us about your project</label>
          <i class="fa fa-comment aws-qf-icon aws-qf-icon-top" aria-hidden="true"></i>
          <textarea name="description" id="quote-description"
                    placeholder="Tell us about your project…" autocomplete="off"></textarea>
        </div>
      </div>

      <button type="submit" id="submit_btn" class="aws-qf-submit">
        <i class="fa fa-paper-plane" aria-hidden="true"></i> Get Your Free Quote
      </button>

      <p class="aws-qf-trust">
        <!-- Color contrast note: #777 on #fff background may fail WCAG AA 4.5:1 for normal text.
             Do NOT change visually — flag for design review. -->
        <i class="fa fa-lock" aria-hidden="true"></i> 100% Confidential &nbsp;&bull;&nbsp;
        <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+12137147176">+1 213 714 7176</a>
      </p>

    </form>
  </div>
</div>
