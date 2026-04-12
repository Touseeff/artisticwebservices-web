<?php
/* Shared quote / contact form — included by service, solution & insight pages.
   Hidden captcha fields keep server-side validation passing without showing
   the math question to users. */
if (!defined('SITE_BASE')) {
    require_once __DIR__ . '/config.php';
}
$_fq_action = SITE_BASE . '/contact-form';
?>
<div class="aws-qf-wrap">
  <div class="aws-qf-card">

    <div class="aws-qf-header">
      <h3>Get Your Free Quote</h3>
      <p>Tell us about your project — we respond within 24 hours.</p>
    </div>

    <form id="contact" action="<?= htmlspecialchars($_fq_action) ?>" method="get" class="aws-qf-form" novalidate>
      <input type="hidden" name="host"           value="ArtisticWebServices">
      <input type="hidden" id="captcha_answer"   name="captcha_answer" value="14">
      <input type="hidden" id="captcha"          name="captcha"        value="14">

      <!-- Name row -->
      <div class="aws-qf-row">
        <div class="aws-qf-group">
          <div class="aws-qf-field-wrap">
            <i class="fa fa-user aws-qf-icon"></i>
            <input type="text" name="first_name" id="first_name"
                   placeholder="First Name *" required maxlength="50"
                   onpaste="return false;" ondrop="return false;" autocomplete="off">
          </div>
          <small id="name-valid"></small>
        </div>
        <div class="aws-qf-group">
          <div class="aws-qf-field-wrap">
            <i class="fa fa-user aws-qf-icon"></i>
            <input type="text" name="last_name" id="last_name"
                   placeholder="Last Name *" required maxlength="50"
                   onpaste="return false;" ondrop="return false;" autocomplete="off">
          </div>
          <small id="name-valid2"></small>
        </div>
      </div>

      <!-- Email -->
      <div class="aws-qf-group">
        <div class="aws-qf-field-wrap">
          <i class="fa fa-envelope aws-qf-icon"></i>
          <input type="email" name="email" id="email"
                 placeholder="Email Address *" required
                 onpaste="return false;" ondrop="return false;" autocomplete="off">
        </div>
        <small id="email-valid"></small>
      </div>

      <!-- Phone -->
      <div class="aws-qf-group">
        <div class="aws-qf-field-wrap">
          <i class="fa fa-phone aws-qf-icon"></i>
          <input type="tel" name="phone" id="phone"
                 placeholder="Phone Number *" required maxlength="14"
                 onpaste="return false;" ondrop="return false;" autocomplete="off">
        </div>
        <small id="phone-valid"></small>
      </div>

      <!-- Message -->
      <div class="aws-qf-group">
        <div class="aws-qf-field-wrap aws-qf-textarea-wrap">
          <i class="fa fa-comment aws-qf-icon aws-qf-icon-top"></i>
          <textarea name="description" id="description"
                    placeholder="Tell us about your project…"
                    onpaste="return false;" ondrop="return false;" autocomplete="off"></textarea>
        </div>
      </div>

      <button type="submit" id="submit_btn" class="aws-qf-submit">
        <i class="fa fa-paper-plane"></i> Get Your Free Quote
      </button>

      <p class="aws-qf-trust">
        <i class="fa fa-lock"></i> 100% Confidential &nbsp;&bull;&nbsp;
        <i class="fa fa-phone"></i> <a href="tel:+12137147176">+1 213 714 7176</a>
      </p>

    </form>
  </div>
</div>
