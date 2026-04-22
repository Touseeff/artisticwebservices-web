<?php
require_once 'includes/config.php';
$page_title       = 'Contact ArtisticWebServices | Get a Free Quote — Software Development USA';
$page_description = 'Contact ArtisticWebServices for a free consultation on your mobile app, web, or enterprise software project. Based in New York — serving clients worldwide.';
$page_keywords    = 'contact software development company, hire app developers USA, free software development quote, get mobile app quote';
$page_canonical   = SITE_URL . '/contact';
$page_og_image    = SITE_URL . '/assets/images/resources/artisticwebservices-og.png';
require_once 'includes/head.php';
?>
<style>
/* ===== Contact Page ===== */
:root {
    --brand:     #dd0429;
    --brand-dk:  #b8001f;
    --brand-glow: rgba(221,4,41,0.12);
    --dark:      #111111;
    --dark-card: #dd0429;
    --text:      #333333;
    --muted:     #777777;
    --border:    #e0e0e0;
    --bg:        #f3f3f3;
}

/* Hero */
.contact-hero {
    background: linear-gradient(135deg, #dd0429 0%, #b8001f 60%, #8c0016 100%);
    padding: 80px 0 60px;
    position: relative;
    overflow: hidden;
}
.contact-hero::before {
    content: '';
    position: absolute;
    top: -40%;
    left: -15%;
    width: 520px;
    height: 520px;
    background: radial-gradient(circle, rgba(255,255,255,0.10) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}
.contact-hero::after {
    content: '';
    position: absolute;
    bottom: -30%;
    right: -10%;
    width: 420px;
    height: 420px;
    background: radial-gradient(circle, rgba(255,255,255,0.06) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}
.contact-hero .hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: #fff;
}
.contact-hero .hero-tagline {
    display: inline-block;
    background: rgba(255,255,255,0.18);
    border: 1px solid rgba(255,255,255,0.40);
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    padding: 6px 22px;
    border-radius: 30px;
    margin-bottom: 22px;
}
.contact-hero h1 {
    font-size: 52px;
    font-weight: 800;
    color: #fff;
    margin-bottom: 20px;
    line-height: 1.2;
}
.contact-hero h1 span {
    color: #fff;
    opacity: 0.88;
}
.contact-hero p {
    font-size: 17px;
    color: rgba(255,255,255,0.65);
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.8;
}
.contact-hero p a { color: #fff; text-decoration: underline; font-weight: 600; }
.contact-hero p a:hover { opacity: 0.85; }

/* Main section */
.contact-main-section {
    padding: 70px 0 80px;
    background: var(--bg);
}

/* Info card */
.contact-info-card {
    background: linear-gradient(160deg, #dd0429 0%, #b8001f 100%);
    border-radius: 20px;
    padding: 44px 36px;
    height: 100%;
    position: relative;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(221,4,41,0.30);
}
.contact-info-card::before {
    content: '';
    position: absolute;
    top: -60px; right: -60px;
    width: 220px; height: 220px;
    background: radial-gradient(circle, rgba(255,255,255,0.14) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}
.contact-info-card::after {
    content: '';
    position: absolute;
    bottom: -50px; left: -50px;
    width: 180px; height: 180px;
    background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}
.contact-info-card .info-title {
    font-size: 24px;
    font-weight: 800;
    color: #fff;
    margin-bottom: 8px;
    position: relative;
    z-index: 2;
}
.contact-info-card .info-subtitle {
    font-size: 14px;
    color: rgba(255,255,255,0.5);
    margin-bottom: 34px;
    line-height: 1.7;
    position: relative;
    z-index: 2;
}
.info-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 26px;
    position: relative;
    z-index: 2;
}
.info-item-icon {
    width: 46px;
    height: 46px;
    border-radius: 12px;
    background: rgba(255,255,255,0.18);
    border: 1px solid rgba(255,255,255,0.32);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: #fff;
    font-size: 17px;
    transition: all 0.3s;
}
.info-item:hover .info-item-icon {
    background: rgba(255,255,255,0.30);
    border-color: rgba(255,255,255,0.50);
    color: #fff;
    transform: scale(1.06);
}
.info-item-body h6 {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.65);
    margin-bottom: 4px;
}
.info-item-body p,
.info-item-body a {
    font-size: 15px;
    color: #fff;
    font-weight: 500;
    margin: 0;
    text-decoration: none;
    line-height: 1.5;
}
.info-item-body a:hover { color: rgba(255,255,255,0.80); }

.contact-social-row {
    display: flex;
    gap: 10px;
    margin-top: 32px;
    position: relative;
    z-index: 2;
}
.contact-social-row a {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgba(255,255,255,0.6);
    font-size: 15px;
    transition: all 0.3s;
    text-decoration: none;
}
.contact-social-row a:hover {
    background: var(--brand);
    border-color: var(--brand);
    color: #fff;
    transform: translateY(-3px);
}

/* Form card */
.contact-form-card {
    background: #fff;
    border-radius: 20px;
    padding: 48px 44px;
    box-shadow: 0 8px 40px rgba(0,0,0,0.07);
    border: 1px solid #e8e8e8;
    height: 100%;
}
.form-section-label {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--brand);
    margin-bottom: 6px;
}
.contact-form-card h3 {
    font-size: 26px;
    font-weight: 800;
    color: var(--dark);
    margin-bottom: 30px;
}

/* Fields */
.cf-field {
    margin-bottom: 20px;
}
.cf-field label {
    display: block;
    font-size: 13px;
    font-weight: 600;
    color: var(--text);
    margin-bottom: 7px;
    letter-spacing: 0.2px;
}
.cf-field label .req { color: var(--brand); margin-left: 2px; }

/* Input wrapper — icon centers perfectly inside the input */
.cf-input-wrap {
    position: relative;
}
.cf-input-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #bbb;
    font-size: 14px;
    pointer-events: none;
    transition: color 0.25s;
    line-height: 1;
}
.cf-input-wrap:focus-within .cf-input-icon { color: var(--brand); }

.cf-input {
    width: 100%;
    height: 52px;
    border: 1.5px solid var(--border);
    border-radius: 12px;
    padding: 0 16px 0 44px;
    font-size: 14px;
    color: var(--dark);
    background: #fafafa;
    transition: border-color 0.25s, box-shadow 0.25s, background 0.25s;
    outline: none;
    font-family: inherit;
    display: block;
}
.cf-input:focus {
    border-color: var(--brand);
    background: #fff;
    box-shadow: 0 0 0 4px var(--brand-glow);
}
.cf-input::placeholder { color: #bbb; }

textarea.cf-input {
    height: 130px;
    padding-top: 14px;
    resize: none;
    line-height: 1.6;
}
/* Textarea icon — align to top of text area */
.cf-input-wrap--ta .cf-input-icon {
    top: 17px;
    transform: none;
}

.cf-small {
    display: block;
    font-size: 12px;
    color: var(--brand);
    margin-top: 5px;
    min-height: 16px;
}

/* ===== Custom Select Dropdown ===== */
.cf-select-box {
    position: relative;
}
.cf-select-trigger {
    display: flex;
    align-items: center;
    min-height: 52px;
    border: 1.5px solid var(--border);
    border-radius: 12px;
    background: #fafafa;
    padding: 8px 40px 8px 44px;
    cursor: pointer;
    transition: border-color 0.25s, box-shadow 0.25s, background 0.25s;
    position: relative;
    user-select: none;
}
.cf-select-trigger.is-open,
.cf-select-trigger:focus {
    border-color: var(--brand);
    background: #fff;
    box-shadow: 0 0 0 4px var(--brand-glow);
    outline: none;
}
.cf-select-trigger .cf-sel-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #bbb;
    font-size: 14px;
    pointer-events: none;
    transition: color 0.25s;
}
.cf-select-trigger.is-open .cf-sel-icon { color: var(--brand); }
.cf-select-trigger .cf-sel-arrow {
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: #bbb;
    font-size: 12px;
    transition: transform 0.25s, color 0.25s;
    pointer-events: none;
}
.cf-select-trigger.is-open .cf-sel-arrow {
    transform: translateY(-50%) rotate(180deg);
    color: var(--brand);
}
.cf-tags-wrap {
    display: flex;
    flex-wrap: wrap;
    gap: 5px;
    align-items: center;
    flex: 1;
}
.cf-sel-placeholder {
    font-size: 14px;
    color: #bbb;
    font-family: inherit;
}
.cf-tag {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: var(--brand);
    color: #fff;
    border-radius: 6px;
    font-size: 12px;
    font-weight: 600;
    padding: 3px 8px 3px 10px;
    line-height: 1.4;
}
.cf-tag-x {
    cursor: pointer;
    opacity: 0.75;
    font-size: 10px;
    display: flex;
    align-items: center;
    transition: opacity 0.15s;
}
.cf-tag-x:hover { opacity: 1; }

.cf-select-dropdown {
    position: absolute;
    top: calc(100% + 6px);
    left: 0;
    right: 0;
    background: #fff;
    border: 1.5px solid var(--border);
    border-radius: 14px;
    box-shadow: 0 10px 36px rgba(0,0,0,0.10);
    z-index: 200;
    overflow: hidden;
    display: none;
}
.cf-select-dropdown.is-open { display: block; }

.cf-sel-option {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 13px 18px;
    cursor: pointer;
    font-size: 14px;
    color: var(--text);
    transition: background 0.15s;
    border-bottom: 1px solid #f5f5f5;
}
.cf-sel-option:last-child { border-bottom: none; }
.cf-sel-option:hover { background: #fff5f5; color: var(--brand); }
.cf-sel-option.is-checked { background: #fff5f5; color: var(--brand); font-weight: 600; }
.cf-sel-option:hover .cf-sel-opt-icon,
.cf-sel-option.is-checked .cf-sel-opt-icon { color: var(--brand); }

.cf-sel-opt-icon {
    font-size: 15px;
    color: #ccc;
    width: 18px;
    text-align: center;
    transition: color 0.2s;
    flex-shrink: 0;
}
.cf-sel-opt-label { flex: 1; }
.cf-sel-checkmark {
    width: 20px;
    height: 20px;
    border-radius: 6px;
    border: 2px solid #ddd;
    background: #fff;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
    margin-left: auto;
}
.cf-sel-option.is-checked .cf-sel-checkmark {
    background: var(--brand);
    border-color: var(--brand);
}
.cf-sel-option.is-checked .cf-sel-checkmark::after {
    content: '';
    width: 5px;
    height: 9px;
    border: 2px solid #fff;
    border-top: none;
    border-left: none;
    transform: rotate(44deg) translateY(-1px);
    display: block;
}

/* Submit button */
.cf-submit-btn {
    width: 100%;
    height: 54px;
    border-radius: 13px;
    background: linear-gradient(135deg, var(--brand) 0%, var(--brand-dk) 100%);
    border: none;
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 0.4px;
    cursor: pointer;
    transition: all 0.3s;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    font-family: inherit;
    box-shadow: 0 8px 24px rgba(221,4,41,0.32);
}
.cf-submit-btn::before {
    content: '';
    position: absolute;
    top: 0; left: -100%;
    width: 100%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.12), transparent);
    transition: left 0.55s;
}
.cf-submit-btn:hover::before { left: 100%; }
.cf-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 32px rgba(221,4,41,0.42);
}
.cf-submit-btn:active { transform: translateY(0); }

.cf-safe-note {
    text-align: center;
    font-size: 12px;
    color: #999;
    margin-top: 14px;
    margin-bottom: 0;
}
.cf-safe-note i { margin-right: 4px; color: var(--brand); }

/* Responsive */
@media (max-width: 991px) {
    .contact-hero h1 { font-size: 36px; }
    .contact-form-card { padding: 32px 24px; }
    .contact-info-card { margin-bottom: 30px; }
}
@media (max-width: 575px) {
    .contact-hero h1 { font-size: 28px; }
    .contact-hero { padding: 60px 0 40px; }
    .contact-form-card { padding: 24px 18px; }
}
</style>
<body>
<div class="page-wrapper">
    <?php require_once 'includes/header.php'; ?>

    <!-- ===== Hero ===== -->
    <section class="contact-hero">
        <div class="container">
            <div class="hero-content">
                <span class="hero-tagline">Get In Touch</span>
                <h1>Let's Build Something <span>Amazing Together</span></h1>
                <p>Have a project in mind? Fill out the form and our expert team will get back to you within 24 hours. Or email us at <a href="mailto:info@artisticwebservices.com">info@artisticwebservices.com</a></p>
            </div>
        </div>
    </section>

    <!-- ===== Main Contact Section ===== -->
    <section class="contact-main-section">
        <div class="container">
            <div class="row g-4 align-items-stretch">

                <!-- LEFT: Info Card -->
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <h4 class="info-title">Contact Information</h4>
                        <p class="info-subtitle">Reach out to us through any of these channels — we're here to help.</p>

                        <div class="info-item">
                            <div class="info-item-icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                            <div class="info-item-body">
                                <h6>Email Address</h6>
                                <a href="mailto:info@artisticwebservices.com">info@artisticwebservices.com</a>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-item-icon"><i class="fas fa-phone-alt" aria-hidden="true"></i></div>
                            <div class="info-item-body">
                                <h6>Phone / WhatsApp</h6>
                                <a href="tel:+12137147176">(213) 714-7176</a>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-item-icon"><i class="fas fa-clock" aria-hidden="true"></i></div>
                            <div class="info-item-body">
                                <h6>Business Hours</h6>
                                <p>Mon – Fri: 9:00 AM – 6:00 PM</p>
                            </div>
                        </div>

                        <hr style="border-color:rgba(255,255,255,0.1); margin: 24px 0;">

                        <div class="contact-social-row">
                            <!-- Social links: title provides accessible name; icon is decorative -->
                            <a href="https://www.facebook.com/artisticwebservices" target="_blank" rel="noopener" title="Facebook" aria-label="Follow us on Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/company/artisticwebservices" target="_blank" rel="noopener" title="LinkedIn" aria-label="Follow us on LinkedIn"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                            <a href="https://x.com/artisticweb87" target="_blank" rel="noopener" title="X (Twitter)" aria-label="Follow us on X / Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/artisticwebservices" target="_blank" rel="noopener" title="Instagram" aria-label="Follow us on Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Form Card -->
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <p class="form-section-label">Send a Message</p>
                        <h3>Submit an Inquiry</h3>

                        <?php
                        $err = $_GET['error'] ?? '';
                        if ($err === 'missing') {
                            echo '<div style="background:#fff5f5;border:1.5px solid #dd0429;border-radius:10px;padding:14px 18px;margin-bottom:22px;display:flex;align-items:center;gap:12px;font-size:14px;color:#c0001c;font-weight:600;">
                                    <i class="fas fa-exclamation-circle" style="font-size:18px;flex-shrink:0;"></i>
                                    Please fill in your First Name and Email Address before submitting.
                                  </div>';
                        } elseif ($err === 'invalid_email') {
                            echo '<div style="background:#fff5f5;border:1.5px solid #dd0429;border-radius:10px;padding:14px 18px;margin-bottom:22px;display:flex;align-items:center;gap:12px;font-size:14px;color:#c0001c;font-weight:600;">
                                    <i class="fas fa-exclamation-circle" style="font-size:18px;flex-shrink:0;"></i>
                                    Please enter a valid email address.
                                  </div>';
                        } elseif ($err === 'send_failed') {
                            echo '<div class="alert alert-warning text-center" role="alert">
                                    We\'re sorry — there was a temporary issue sending your message. Please try again or call us directly.
                                  </div>';
                        }
                        ?>

                        <form id="contact" action="<?= htmlspecialchars($B) ?>/contact-form" method="post">
                            <?php
                            if (!function_exists('csrf_field')) {
                                require_once __DIR__ . '/includes/csrf.php';
                            }
                            echo csrf_field();
                            ?>
                            <input type="hidden" name="host" value="ArtisticWebServices">
                            <input type="hidden" name="captcha_answer" id="captcha_answer" value="10">

                            <div class="row g-3">
                                <!-- First Name -->
                                <div class="col-md-6">
                                    <div class="cf-field">
                                        <label for="first_name">First Name <span class="req">*</span></label>
                                        <div class="cf-input-wrap">
                                            <!-- Icon is decorative; label already names the field -->
                                            <i class="fas fa-user cf-input-icon" aria-hidden="true"></i>
                                            <input class="cf-input" maxlength="20" onpaste="return false;" ondrop="return false;" autocomplete="off"
                                                placeholder="e.g. John" type="text" name="first_name" id="first_name" required aria-required="true">
                                        </div>
                                        <small class="cf-small" id="name-valid"></small>
                                    </div>
                                </div>

                                <!-- Last Name -->
                                <div class="col-md-6">
                                    <div class="cf-field">
                                        <label for="last_name">Last Name</label>
                                        <div class="cf-input-wrap">
                                            <i class="fas fa-user cf-input-icon" aria-hidden="true"></i>
                                            <input class="cf-input" maxlength="20" onpaste="return false;" ondrop="return false;" autocomplete="off"
                                                placeholder="e.g. Smith" type="text" name="last_name" id="last_name">
                                        </div>
                                        <small class="cf-small" id="name-valid1"></small>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6">
                                    <div class="cf-field">
                                        <label for="phone">Phone Number</label>
                                        <div class="cf-input-wrap">
                                            <i class="fas fa-phone cf-input-icon" aria-hidden="true"></i>
                                            <input class="cf-input" onpaste="return false;" ondrop="return false;" autocomplete="off"
                                                placeholder="e.g. +1 212 555 0100" type="tel" name="phone" id="phone" maxlength="14">
                                        </div>
                                        <small class="cf-small" id="phone-valid"></small>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <div class="cf-field">
                                        <label for="email">Email Address <span class="req">*</span></label>
                                        <div class="cf-input-wrap">
                                            <i class="fas fa-envelope cf-input-icon" aria-hidden="true"></i>
                                            <input class="cf-input" maxlength="50" onpaste="return false;" ondrop="return false;" autocomplete="off"
                                                placeholder="e.g. john@company.com" type="email" name="email" id="email" required aria-required="true">
                                        </div>
                                        <small class="cf-small" id="email-valid"></small>
                                    </div>
                                </div>

                                <!-- Services -->
                                <div class="col-12">
                                    <div class="cf-field">
                                        <!-- WCAG 1.3.1 note: this custom listbox is labelled via the visible
                                             <label> text above; aria-labelledby added to the trigger for AT -->
                                        <label id="cf-service-label">What Are You Looking For? <span class="req">*</span></label>
                                        <div class="cf-select-box" id="cf-service-box">
                                            <div class="cf-select-trigger" id="cf-service-trigger" tabindex="0" role="button"
                                                 aria-haspopup="listbox" aria-expanded="false"
                                                 aria-labelledby="cf-service-label">
                                                <i class="fas fa-th-list cf-sel-icon" aria-hidden="true"></i>
                                                <div class="cf-tags-wrap" id="cf-service-tags">
                                                    <span class="cf-sel-placeholder">Select services…</span>
                                                </div>
                                                <i class="fas fa-chevron-down cf-sel-arrow" aria-hidden="true"></i>
                                            </div>
                                            <div class="cf-select-dropdown" id="cf-service-dropdown" role="listbox">
                                                <div class="cf-sel-option" data-value="Mobile App" role="option">
                                                    <i class="fas fa-mobile-alt cf-sel-opt-icon" aria-hidden="true"></i>
                                                    <span class="cf-sel-opt-label">Mobile App</span>
                                                    <span class="cf-sel-checkmark"></span>
                                                </div>
                                                <div class="cf-sel-option" data-value="Progressive Web App" role="option">
                                                    <i class="fas fa-globe cf-sel-opt-icon" aria-hidden="true"></i>
                                                    <span class="cf-sel-opt-label">Progressive Web App</span>
                                                    <span class="cf-sel-checkmark"></span>
                                                </div>
                                                <div class="cf-sel-option" data-value="Web App" role="option">
                                                    <i class="fas fa-laptop-code cf-sel-opt-icon" aria-hidden="true"></i>
                                                    <span class="cf-sel-opt-label">Web App</span>
                                                    <span class="cf-sel-checkmark"></span>
                                                </div>
                                                <div class="cf-sel-option" data-value="Custom Software" role="option">
                                                    <i class="fas fa-cogs cf-sel-opt-icon" aria-hidden="true"></i>
                                                    <span class="cf-sel-opt-label">Custom Software</span>
                                                    <span class="cf-sel-checkmark"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Hidden inputs submitted with the form -->
                                        <div id="cf-service-inputs"></div>
                                        <small class="cf-small" id="project-valid" style="display:none;">Please select at least one service.</small>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="col-12">
                                    <div class="cf-field">
                                        <label for="description">Your Message <span class="req">*</span></label>
                                        <div class="cf-input-wrap cf-input-wrap--ta">
                                            <i class="fas fa-comment-alt cf-input-icon" aria-hidden="true"></i>
                                            <textarea class="cf-input" onpaste="return false;" ondrop="return false;" autocomplete="off"
                                                placeholder="Tell us about your project, goals, and timeline…" name="description" id="description" required aria-required="true"></textarea>
                                        </div>
                                        <small class="cf-small" id="message-valid"></small>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-12">
                                    <button type="submit" id="submit_btn" class="cf-submit-btn">
                                        <i class="fas fa-paper-plane" aria-hidden="true"></i>
                                        Send Message
                                        <i class="fas fa-arrow-right" style="font-size:13px;" aria-hidden="true"></i>
                                    </button>
                                    <p class="cf-safe-note">
                                        <!-- Color contrast note: #999 on #fff fails WCAG AA 4.5:1 for small text.
                                             Do NOT change visually — flag for design review. -->
                                        <i class="fas fa-shield-alt" aria-hidden="true"></i>Your information is safe and will never be shared.
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php require_once 'includes/social-share.php'; ?>
    <?php require_once 'includes/footer.php'; ?>
</div>

<script>
/* ===== Custom Service Select ===== */
(function () {
    var box      = document.getElementById('cf-service-box');
    var trigger  = document.getElementById('cf-service-trigger');
    var dropdown = document.getElementById('cf-service-dropdown');
    var tagsWrap = document.getElementById('cf-service-tags');
    var hiddenEl = document.getElementById('cf-service-inputs');
    if (!trigger) return;

    var selected = [];

    function renderTags() {
        tagsWrap.innerHTML = '';
        hiddenEl.innerHTML = '';
        if (selected.length === 0) {
            tagsWrap.innerHTML = '<span class="cf-sel-placeholder">Select services\u2026</span>';
            return;
        }
        selected.forEach(function (val) {
            /* tag */
            var tag = document.createElement('span');
            tag.className = 'cf-tag';
            tag.innerHTML = val + '<span class="cf-tag-x" data-val="' + val + '"><i class="fas fa-times"></i></span>';
            tag.querySelector('.cf-tag-x').addEventListener('click', function (e) {
                e.stopPropagation();
                deselect(this.dataset.val);
            });
            tagsWrap.appendChild(tag);
            /* hidden input */
            var inp = document.createElement('input');
            inp.type  = 'hidden';
            inp.name  = 'states[]';
            inp.value = val;
            hiddenEl.appendChild(inp);
        });
    }

    function deselect(val) {
        selected = selected.filter(function (v) { return v !== val; });
        var opt = dropdown.querySelector('[data-value="' + val + '"]');
        if (opt) opt.classList.remove('is-checked');
        renderTags();
    }

    trigger.addEventListener('click', function () {
        var open = dropdown.classList.contains('is-open');
        dropdown.classList.toggle('is-open', !open);
        trigger.classList.toggle('is-open', !open);
        trigger.setAttribute('aria-expanded', String(!open));
    });

    trigger.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            trigger.click();
        }
        if (e.key === 'Escape') {
            dropdown.classList.remove('is-open');
            trigger.classList.remove('is-open');
            trigger.setAttribute('aria-expanded', 'false');
        }
    });

    dropdown.querySelectorAll('.cf-sel-option').forEach(function (opt) {
        opt.addEventListener('click', function (e) {
            if (e.target.closest('.cf-tag-x')) return;
            var val = opt.dataset.value;
            if (opt.classList.contains('is-checked')) {
                deselect(val);
            } else {
                selected.push(val);
                opt.classList.add('is-checked');
                renderTags();
            }
        });
    });

    document.addEventListener('click', function (e) {
        if (!box.contains(e.target)) {
            dropdown.classList.remove('is-open');
            trigger.classList.remove('is-open');
            trigger.setAttribute('aria-expanded', 'false');
        }
    });
})();

/* ===== Service multi-select: not a native control, so enforce “required” here only.
     All other fields use HTML required only (browser validates before submit fires). ===== */
(function () {
    var form = document.getElementById('contact');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        var serviceInputs = document.querySelectorAll('#cf-service-inputs input');
        var projValid = document.getElementById('project-valid');
        var trigger = document.getElementById('cf-service-trigger');
        if (serviceInputs.length === 0) {
            e.preventDefault();
            if (projValid) { projValid.style.display = 'block'; }
            if (trigger) { trigger.style.borderColor = '#dd0429'; }
            return;
        }
        if (projValid) { projValid.style.display = 'none'; }
        if (trigger) { trigger.style.borderColor = ''; }
    });
})();
</script>
</body>
</html>
