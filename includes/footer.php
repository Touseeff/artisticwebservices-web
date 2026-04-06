<?php $B = defined("SITE_BASE") ? SITE_BASE : ""; ?>
<style>
/* Footer-scoped link hover only */
.site-footer a:hover {
    color: #dd0429 !important;
}
/* ── Lead Modal ───────────────────────────────────── */
.aws-modal-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(10,10,30,0.75);
    z-index: 99999;
    align-items: center;
    justify-content: center;
    padding: 16px;
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
}
.aws-modal-overlay.active { display: flex; animation: awsFadeIn 0.3s ease; }
@keyframes awsFadeIn { from{opacity:0} to{opacity:1} }

/* ── Two-column modal box ── */
.aws-modal-box {
    background: #fff;
    border-radius: 20px;
    max-width: 860px;
    width: 100%;
    overflow: hidden;
    position: relative;
    display: flex;
    flex-direction: row;
    animation: awsScaleIn 0.38s cubic-bezier(0.34,1.56,0.64,1);
    box-shadow: 0 32px 80px rgba(0,0,0,0.35);
    max-height: 92vh;
}
@keyframes awsScaleIn { from{opacity:0;transform:scale(0.8) translateY(20px)} to{opacity:1;transform:scale(1) translateY(0)} }

/* ── Left image panel ── */
.aws-modal-image-panel {
    width: 42%;
    flex-shrink: 0;
    background: linear-gradient(160deg, #8b0015 0%, #b8001f 40%, #dd0429 75%, #ff2244 100%);
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    overflow: hidden;
    padding: 0;
}
.aws-modal-image-panel::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse at 50% 105%, rgba(255,80,80,0.45) 0%, transparent 60%),
        radial-gradient(ellipse at 85% 15%, rgba(255,255,255,0.12) 0%, transparent 50%);
    z-index: 0;
}
.aws-modal-left-content {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: 100%;
    padding: 28px 20px 0;
}
.aws-modal-left-badge {
    background: rgba(255,255,255,0.15);
    border: 1px solid rgba(255,255,255,0.35);
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.6px;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 50px;
    margin-bottom: 16px;
}
.aws-modal-left-heading {
    color: #fff;
    font-size: 24px;
    font-weight: 800;
    text-align: center;
    line-height: 1.3;
    margin: 0 0 8px;
}
.aws-modal-left-heading span { color: #ffd700; }
.aws-modal-left-sub {
    color: rgba(255,255,255,0.85);
    font-size: 14px;
    text-align: center;
    margin: 0 0 20px;
    line-height: 1.6;
}
.aws-modal-stats {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}
.aws-modal-stats > div {
    text-align: center;
    background: rgba(255,255,255,0.15);
    border: 1px solid rgba(255,255,255,0.28);
    border-radius: 12px;
    padding: 8px 14px;
    min-width: 66px;
}
.aws-modal-stats strong {
    display: block;
    font-size: 20px;
    font-weight: 800;
    color: #ffd700;
    line-height: 1.1;
}
.aws-modal-stats span {
    font-size: 11px;
    color: rgba(255,255,255,0.82);
    white-space: nowrap;
    font-weight: 500;
}
.aws-modal-lady-img {
    display: block;
    width: 100%;
    max-width: 260px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
    object-fit: contain;
    object-position: bottom;
    flex: 1;
    min-height: 0;
}

/* ── Right form panel ── */
.aws-modal-form-panel {
    flex: 1;
    min-width: 0;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    padding: 0;
    min-height: 0;
}
.aws-modal-form-header {
    background: linear-gradient(135deg, #dd0429 0%, #950018 100%);
    padding: 24px 32px 20px;
    position: relative;
}
.aws-modal-form-header h2 {
    color: #fff;
    font-size: 23px;
    font-weight: 800;
    margin: 0 0 6px;
    padding-right: 38px;
    line-height: 1.25;
}
.aws-modal-form-header p {
    color: rgba(255,255,255,0.88);
    font-size: 14px;
    margin: 0;
}
.aws-modal-close {
    position: absolute;
    top: 14px;
    right: 16px;
    background: rgba(255,255,255,0.2);
    border: none;
    color: #fff;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    font-size: 16px;
    cursor: pointer;
    line-height: 30px;
    text-align: center;
    transition: background 0.2s;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
}
.aws-modal-close:hover { background: rgba(255,255,255,0.38); }

/* Form area */
.aws-modal-body { padding: 22px 32px 26px; flex: 1; overflow-y: auto; min-height: 0; }
.aws-form-row { display: flex; gap: 10px; margin-bottom: 0; }
.aws-form-row .aws-form-group { flex: 1; }
.aws-form-group { margin-bottom: 12px; }
.aws-form-group input,
.aws-form-group select,
.aws-form-group textarea {
    width: 100%;
    border: 1.5px solid #e5e5e5;
    border-radius: 10px;
    padding: 12px 16px;
    font-size: 15px;
    color: #333;
    background: #f8f9fb;
    transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
    outline: none;
    box-sizing: border-box;
}
.aws-form-group input:focus,
.aws-form-group select:focus,
.aws-form-group textarea:focus {
    border-color: #dd0429;
    box-shadow: 0 0 0 3px rgba(221,4,41,0.1);
    background: #fff;
}
.aws-form-group textarea { resize: none; min-height: 72px; }
.aws-form-group select { appearance: none; cursor: pointer; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath fill='%23999' d='M1 1l5 5 5-5'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 14px center; padding-right: 36px; }

.aws-form-submit {
    width: 100%;
    background: linear-gradient(135deg, #dd0429 0%, #950018 100%);
    color: #fff;
    border: none;
    padding: 15px;
    border-radius: 50px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: transform 0.2s, box-shadow 0.2s;
    box-shadow: 0 6px 20px rgba(221,4,41,0.35);
    margin-top: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    letter-spacing: 0.4px;
}
.aws-form-submit:hover { transform: translateY(-2px); box-shadow: 0 10px 28px rgba(221,4,41,0.45); }
.aws-form-submit:active { transform: translateY(0); }

.aws-modal-footer-note {
    text-align: center;
    font-size: 13px;
    color: #999;
    margin-top: 12px;
    line-height: 1.6;
}
.aws-modal-footer-note i { color: #dd0429; margin-right: 3px; }
.aws-modal-footer-note a { color: #dd0429; text-decoration: none; font-weight: 600; }

/* ── Responsive: mobile — form only, no image ── */
@media (max-width: 640px) {
    .aws-modal-overlay {
        padding: 10px;
        align-items: flex-end;
    }
    .aws-modal-box {
        flex-direction: column;
        max-height: 96vh;
        border-radius: 20px 20px 16px 16px;
        width: 100%;
        max-width: 100%;
    }
    .aws-modal-image-panel {
        display: none;
    }
    .aws-modal-form-panel {
        width: 100%;
        border-radius: 20px 20px 16px 16px;
        overflow: hidden;
    }
    .aws-modal-form-header {
        padding: 22px 22px 16px;
        background: linear-gradient(135deg, #dd0429 0%, #8b0015 100%);
    }
    .aws-modal-form-header h2 {
        font-size: 20px;
        padding-right: 36px;
    }
    .aws-modal-form-header p { font-size: 13px; }
    .aws-modal-body {
        padding: 18px 18px 22px;
        overflow-y: auto;
    }
    .aws-form-row { flex-direction: column; gap: 0; }
    .aws-form-group { margin-bottom: 10px; }
    .aws-form-group input,
    .aws-form-group select,
    .aws-form-group textarea {
        font-size: 15px;
        padding: 12px 14px;
        border-radius: 10px;
    }
    .aws-form-group textarea { min-height: 60px; }
    .aws-form-submit {
        padding: 14px;
        font-size: 16px;
        border-radius: 50px;
    }
    .aws-modal-footer-note { font-size: 12px; }
}

/* ── Tablet: narrow two-column ── */
@media (min-width: 641px) and (max-width: 780px) {
    .aws-modal-box { max-width: 680px; }
    .aws-modal-image-panel { width: 38%; }
    .aws-modal-left-heading { font-size: 18px; }
    .aws-modal-lady-img { max-width: 210px; }
    .aws-modal-form-header { padding: 20px 24px 16px; }
    .aws-modal-form-header h2 { font-size: 20px; }
    .aws-modal-body { padding: 18px 24px 22px; overflow-y: auto; min-height: 0; }
}

/* ── Footer Social Icons ─────────────────────────────── */
.footer-social-wrap {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin-top: 16px;
    align-items: center;
}
.footer-social-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    min-width: 40px;
    min-height: 40px;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
    border: 1.5px solid rgba(255,255,255,0.22);
    color: #fff !important;
    font-size: 16px;
    line-height: 1;
    text-decoration: none !important;
    transition: background 0.25s, transform 0.25s, border-color 0.25s, box-shadow 0.25s;
    flex-shrink: 0;
    overflow: hidden;
    box-sizing: border-box;
}
.footer-social-icon i {
    font-size: 16px;
    line-height: 1;
    display: block;
    width: auto;
    height: auto;
}
.footer-social-icon:hover {
    color: #fff !important;
    transform: translateY(-3px);
    box-shadow: 0 6px 18px rgba(0,0,0,0.25);
}
.footer-social-icon.fb:hover  { background: #1877f2; border-color: #1877f2; }
.footer-social-icon.li:hover  { background: #0a66c2; border-color: #0a66c2; }
.footer-social-icon.ig:hover  { background: linear-gradient(45deg,#f09433,#e6683c,#dc2743,#cc2366,#bc1888); border-color: #e1306c; }
.footer-social-icon.tw:hover  { background: #000;    border-color: #000; }

/* Mobile social icon fix */
@media (max-width: 767px) {
    .footer-social-wrap {
        gap: 8px;
        margin-top: 14px;
    }
    .footer-social-icon {
        width: 38px;
        height: 38px;
        min-width: 38px;
        min-height: 38px;
        font-size: 15px;
    }
    .footer-social-icon i {
        font-size: 15px;
    }
}

/* ── Footer Trust Badges ─────────────────────────────── */
.footer-trust-section {
    border-top: 1px solid rgba(255,255,255,0.12);
    margin-top: 36px;
    padding-top: 28px;
    padding-bottom: 4px;
}
.footer-trust-label {
    font-size: 12px;
    font-weight: 700;
    color: rgba(255,255,255,0.45);
    text-transform: uppercase;
    letter-spacing: 1.4px;
    text-align: center;
    margin-bottom: 18px;
}
.footer-trust-badges {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}
.footer-trust-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(255,255,255,0.13);
    border-radius: 10px;
    padding: 10px 22px;
    transition: background 0.22s, transform 0.22s, border-color 0.22s;
    text-decoration: none !important;
}
.footer-trust-badge:hover {
    background: rgba(255,255,255,0.15);
    border-color: rgba(255,255,255,0.32);
    transform: translateY(-3px);
}
.footer-trust-badge img {
    height: 34px;
    width: auto;
    max-width: 120px;
    object-fit: contain;
    filter: brightness(0) invert(1);
    opacity: 0.80;
    transition: opacity 0.22s;
}
.footer-trust-badge:hover img { opacity: 1; }

@media (max-width: 991px) {
    .footer-trust-badges { gap: 14px; }
    .footer-trust-badge  { padding: 9px 18px; }
    .footer-trust-badge img { height: 30px; }
}
@media (max-width: 575px) {
    .footer-social-wrap { gap: 8px; }
    .footer-social-icon {
        width: 36px;
        height: 36px;
        min-width: 36px;
        min-height: 36px;
        font-size: 14px;
    }
    .footer-social-icon i { font-size: 14px; }
    .footer-trust-section { margin-top: 24px; padding-top: 22px; }
    .footer-trust-badges { gap: 10px; }
    .footer-trust-badge  { padding: 8px 14px; border-radius: 8px; }
    .footer-trust-badge img { height: 26px; max-width: 90px; }
}

/* CTA buttons (used in sticky bar) */
.aws-btn-call {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #dd0429;
    color: #fff !important;
    padding: 12px 26px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 700;
    text-decoration: none !important;
    transition: background 0.2s, transform 0.2s;
    box-shadow: 0 4px 16px rgba(221,4,41,0.3);
    border: none;
    cursor: pointer;
}
.aws-btn-call:hover { background:#b8001f; color:#fff !important; transform:translateY(-2px); }
.aws-btn-contact {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #fff;
    color: #dd0429 !important;
    padding: 11px 26px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 700;
    text-decoration: none !important;
    border: 2px solid #dd0429;
    transition: all 0.2s;
}
.aws-btn-contact:hover { background:#dd0429; color:#fff !important; transform:translateY(-2px); }

/* ── Floating Left Contact ────────────────────────── */
.aws-float-left {
    position: fixed;
    left: 0;
    bottom: 120px;
    z-index: 9990;
    display: flex;
    flex-direction: column;
    gap: 0;
}
.aws-float-email {
    display: flex;
    align-items: center;
    background: #333;
    color: #fff !important;
    text-decoration: none !important;
    height: 44px;
    padding: 0 14px 0 12px;
    border-radius: 0 8px 0 0;
    overflow: hidden;
    max-width: 44px;
    transition: max-width 0.35s ease, background 0.2s;
    white-space: nowrap;
    gap: 10px;
}
.aws-float-email:hover {
    max-width: 280px;
    background: #222;
    color: #fff !important;
}
.aws-float-email i {
    font-size: 18px;
    flex-shrink: 0;
}
.aws-float-email span {
    font-size: 13px;
    font-weight: 500;
    opacity: 0;
    transition: opacity 0.2s 0.1s;
}
.aws-float-email:hover span {
    opacity: 1;
}
.aws-float-call {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #dd0429;
    color: #fff !important;
    text-decoration: none !important;
    width: 44px;
    height: 44px;
    border-radius: 0 0 8px 0;
    font-size: 18px;
    position: relative;
    transition: background 0.2s;
}
.aws-float-call:hover { background: #b8001f; color: #fff !important; }
.aws-float-call::before {
    content: '';
    position: absolute;
    inset: -4px;
    border-radius: 0 0 12px 0;
    border: 2px solid #dd0429;
    animation: awsPulse 1.8s infinite;
    opacity: 0;
}
@keyframes awsPulse {
    0%   { transform: scale(0.95); opacity: 0.7; }
    70%  { transform: scale(1.15); opacity: 0; }
    100% { opacity: 0; }
}

/* ── Call Now nav button ──────────────────────────── */
.aws-call-now-btn {
    background: #dd0429;
    color: #fff !important;
    border: none;
    padding: 10px 22px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 700;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 7px;
    transition: background 0.2s, transform 0.2s;
    box-shadow: 0 4px 14px rgba(221,4,41,0.3);
}
.aws-call-now-btn:hover {
    background: #b8001f;
    transform: translateY(-1px);
}
</style>

<footer class="site-footer">
    <div class="site-footer__middle">
        <div class="container">
            <div class="site-footer__middle-inner">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 center__align wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-logo">
                           <a href="<?= $B ?>/"><img src="<?= $B ?>/assets/images/resources/artisticwebservice%20w.png" alt="ArtisticWebServices logo" class="footer-logo-img" loading="lazy" /></a>
                        </div>
                        <div class="d-flex flex-column text-align-center">
                            <p>Based in New York, ArtisticWebServices has been at the forefront of technology innovation since 2014. We have established ourselves as a trusted Custom Software Development and IT Consulting Company that offers a wide array of expertise to ensure clients achieve sustainable competitive advantage by developing innovative and intelligent Products and Solutions for several industries.</p>
                            <p>Let's write the next chapter of success and technological innovation together ... <a href="<?= $B ?>/our-story.php" class="read__btn">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__links clearfix">
                            <h3 class="footer-widget__title">Quick Links</h3>
                            <ul class="footer-widget__links-list list-unstyled clearfix">
                                <li><a href="<?= $B ?>/">Home</a></li>
                                <li><a href="<?= $B ?>/about-us.php">About Us</a></li>
                                <li><a href="<?= $B ?>/insights/case-studies.php">Case Studies</a></li>
                                <li><a href="<?= $B ?>/solutions/alliance-partners.php">Alliances &amp; Presence</a></li>
                                <li><a href="<?= $B ?>/solutions/consulting.php">Consulting</a></li>
                                <li><a href="<?= $B ?>/solutions/industries.php">Industries</a></li>
                                <li><a href="<?= $B ?>/services.php">Services</a></li>
                                <li><a href="<?= $B ?>/solutions/location.php">Locations</a></li>
                                <li><a href="<?= $B ?>/contact.php">Contact Us</a></li>
                                <li><a href="<?= $B ?>/privacy-policy.php">Privacy Policy</a></li>
                                <li><a href="<?= $B ?>/terms-of-use.php">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 wow fadeInUp" data-wow-delay="250ms">
                        <div class="footer-widget__column footer-widget__links clearfix">
                            <h3 class="footer-widget__title">Services</h3>
                            <ul class="footer-widget__links-list list-unstyled clearfix">
                                <li><a href="<?= $B ?>/services/mobile-app-development.php">Mobile App Development</a></li>
                                <li><a href="<?= $B ?>/services/web-development.php">Web Development</a></li>
                                <li><a href="<?= $B ?>/services/artificial-intelligence.php">AI Development</a></li>
                                <li><a href="<?= $B ?>/services/blockchain-development.php">Blockchain</a></li>
                                <li><a href="<?= $B ?>/services/cloud-managed-services.php">Cloud Services</a></li>
                                <li><a href="<?= $B ?>/services/ecommerce-app-development.php">eCommerce App</a></li>
                                <li><a href="<?= $B ?>/services/saas.php">SaaS Development</a></li>
                                <li><a href="<?= $B ?>/services/customer-experience-and-design.php">UI/UX Design</a></li>
                                <li><a href="<?= $B ?>/services/digital-marketing.php">Digital Marketing</a></li>
                                <li><a href="<?= $B ?>/services/iot-app-development.php">IoT Development</a></li>
                                <li><a href="<?= $B ?>/services/security-operations-services.php">DevOps &amp; Security</a></li>
                                <li><a href="<?= $B ?>/services/app-support.php">App Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__links clearfix">
                            <h3 class="footer-widget__title">Solutions</h3>
                            <ul class="footer-widget__links-list list-unstyled clearfix">
                                <li><a href="<?= $B ?>/solutions/healthcare-app-development.php">Healthcare</a></li>
                                <li><a href="<?= $B ?>/solutions/financial-and-banking.php">FinTech &amp; Banking</a></li>
                                <li><a href="<?= $B ?>/solutions/education-and-learning.php">Education &amp; eLearning</a></li>
                                <li><a href="<?= $B ?>/solutions/travel-app-development.php">Travel &amp; Tourism</a></li>
                                <li><a href="<?= $B ?>/services/fitness-mobile-app-development.php">Fitness &amp; Wellness</a></li>
                                <li><a href="<?= $B ?>/services/real-estate-app-development.php">Real Estate</a></li>
                                <li><a href="<?= $B ?>/solutions/sports.php">Sports</a></li>
                                <li><a href="<?= $B ?>/solutions/ecommerce-and-trading.php">E-Commerce &amp; Trading</a></li>
                                <li><a href="<?= $B ?>/solutions/hire-dedicated-developers.php">Hire Developers</a></li>
                                <li><a href="<?= $B ?>/services/mvp-startup-development.php">MVP &amp; Startups</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 loactions__footer__new wow fadeInUp" data-wow-delay="350ms">
                        <div class="d-flex flex-column w-100 min-w-0 footer-connect-inner">
                            <!-- ═══ MAP & ADDRESS COMMENTED OUT ═══
                            <a href="https://maps.app.goo.gl/YSFamADS1SptATJS7" target="_blank" rel="noopener noreferrer" class="map__anchor text-white text-decoration-none d-block w-100 min-w-0">
                                <div class="footer-widget__column footer-widget__links clearfix">
                                    <h3 class="footer-widget__title">Connect With Us</h3>
                                    <div class="footer-map-block">
                                        <div class="footer-map-visual" aria-hidden="true">
                                            <span class="footer-map-pin"><i class="fa-solid fa-location-dot"></i></span>
                                        </div>
                                        <div class="footer-location-text">
                                            <h5 class="color-white mt-0 mb-0">USA</h5>
                                            <p class="footer-widget__contact-text mt-2 mb-0" style="font-weight: 600; line-height: 18px;">26 Broadway, Suite 934,<br> New York, NY 10004</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="footer-widget__column footer-widget__links clearfix address__footers w-100 min-w-0">
                                <div class="three__tabs">
                                    <div class="mt-0">Email: <a href="mailto:info@artisticwebservices.com">info@artisticwebservices.com</a></div>
                                    <div class="mt-0">Phone: <a href="tel:+12137147176" class="nav-number nav-number-1">(213) 714-7176</a></div>
                                </div>
                            </div>
                            ═══ END MAP & ADDRESS ═══ -->

                            <!-- Contact info (map & street address commented out above) -->
                            <div class="footer-widget__column footer-widget__links clearfix w-100 min-w-0">
                                <h3 class="footer-widget__title">Connect With Us</h3>
                                <div class="three__tabs footer-contact-inline">
                                    <div class="mt-0"><i class="fa fa-envelope me-1" style="color:#dd0429;"></i> <a href="mailto:info@artisticwebservices.com">info@artisticwebservices.com</a></div>
                                    <div class="mt-0"><i class="fa fa-phone me-1" style="color:#dd0429;"></i> <a href="tel:+12137147176" class="nav-number nav-number-1">(213) 714-7176</a></div>
                                </div>
                                <!-- Social Media Icons -->
                                <div class="footer-social-wrap">
                                    <a href="https://www.facebook.com/artisticwebservices" target="_blank" rel="noopener noreferrer" class="footer-social-icon fb" title="Facebook" aria-label="Follow us on Facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/artisticwebservices" target="_blank" rel="noopener noreferrer" class="footer-social-icon li" title="LinkedIn" aria-label="Follow us on LinkedIn">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://www.instagram.com/artisticwebservices" target="_blank" rel="noopener noreferrer" class="footer-social-icon ig" title="Instagram" aria-label="Follow us on Instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://twitter.com/artisticwebservices" target="_blank" rel="noopener noreferrer" class="footer-social-icon tw" title="X (Twitter)" aria-label="Follow us on X / Twitter">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ── Trust / Review Badges ─────────────────────── -->
                <div class="footer-trust-section">
                    <div class="footer-trust-label">Trusted &amp; Featured On</div>
                    <div class="footer-trust-badges">
                        <a href="https://www.bark.com/en/us/company/artistic-web-services/" target="_blank" rel="noopener noreferrer" class="footer-trust-badge" title="Bark" aria-label="View our Bark profile">
                            <img src="<?= $B ?>/assets/images/bark.webp" alt="Bark" loading="lazy" width="100" height="34">
                        </a>
                        <a href="https://www.trustpilot.com/review/artisticwebservices.com" target="_blank" rel="noopener noreferrer" class="footer-trust-badge" title="Trustpilot" aria-label="View our Trustpilot reviews">
                            <img src="<?= $B ?>/assets/images/trustpilot.webp" alt="Trustpilot" loading="lazy" width="110" height="34">
                        </a>
                        <a href="https://www.goodfirms.co/company/artistic-web-services" target="_blank" rel="noopener noreferrer" class="footer-trust-badge" title="GoodFirms" aria-label="View our GoodFirms profile">
                            <img src="<?= $B ?>/assets/images/goodfirms.webp" alt="GoodFirms" loading="lazy" width="110" height="34">
                        </a>
                    </div>
                </div>
                <!-- ── /Trust Badges ──────────────────────────────── -->

            </div>
        </div>
    </div>

    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">&copy; Copyrights <span class="dynamic-year"></span> ArtisticWebServices. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
        <div class="logo-box">
            <a href="<?= $B ?>/" aria-label="logo image"><img src="<?= $B ?>/assets/images/resources/logo-1.webp" alt="ArtisticWebServices logo" /></a>
        </div>
        <div class="mobile-nav__container"></div>
    </div>
</div>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<!-- ── Lead Modal ─────────────────────────────────── -->
<div id="awsLeadModal" class="aws-modal-overlay" onclick="if(event.target===this)closeLeadModal()">
    <div class="aws-modal-box">

        <!-- LEFT: image panel -->
        <div class="aws-modal-image-panel">
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
                    alt="Our friendly support team"
                    class="aws-modal-lady-img"
                    loading="lazy"
                />
            </div>
        </div>

        <!-- RIGHT: form panel -->
        <div class="aws-modal-form-panel">
            <div class="aws-modal-form-header">
                <button class="aws-modal-close" onclick="closeLeadModal()" aria-label="Close">&times;</button>
                <h2>Get a FREE Quote Today!</h2>
                <p>Fill in your details — no obligation, no spam.</p>
            </div>
            <div class="aws-modal-body">
                <form id="awsLeadForm" onsubmit="awsSubmitForm(event)">
                    <div class="aws-form-row">
                        <div class="aws-form-group">
                            <input type="text" name="first_name" placeholder="First Name *" required maxlength="50" pattern="[A-Za-z ]+">
                        </div>
                        <div class="aws-form-group">
                            <input type="text" name="last_name" placeholder="Last Name *" required maxlength="50" pattern="[A-Za-z ]+">
                        </div>
                    </div>
                    <div class="aws-form-group">
                        <input type="email" name="email" placeholder="Email Address *" required>
                    </div>
                    <div class="aws-form-group">
                        <input type="tel" name="phone" placeholder="Phone Number *" required maxlength="20">
                    </div>
                    <div class="aws-form-group">
                        <select name="service" required>
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
                        <textarea name="description" placeholder="Tell us about your project (optional)"></textarea>
                    </div>
                    <input type="hidden" name="source" value="modal-popup">
                    <button type="submit" class="aws-form-submit">
                        <i class="fa fa-paper-plane"></i> Get My Free Quote Now
                    </button>
                </form>
                <p class="aws-modal-footer-note">
                    <i class="fa fa-lock"></i> 100% Confidential &nbsp;&bull;&nbsp;
                    <i class="fa fa-phone"></i> Call us: <a href="tel:+12137147176">(213) 714-7176</a>
                </p>
            </div>
        </div>

    </div>
</div>

<!-- ── Floating Left Contact ──────────────────────── -->
<div class="aws-float-left">
    <a href="mailto:info@artisticwebservices.com" class="aws-float-email" title="Email Us">
        <i class="fa fa-envelope"></i>
        <span>info@artisticwebservices.com</span>
    </a>
    <a href="tel:+12137147176" class="aws-float-call" title="Call Now">
        <i class="fa fa-phone"></i>
    </a>
</div>


<!-- ── Vendor JS (jQuery loaded in head.php) ──────── -->
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
<script src="<?= $B ?>/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="<?= $B ?>/assets/vendors/wnumb/wNumb.min.js"></script>
<script src="<?= $B ?>/assets/vendors/wow/wow.js"></script>
<script src="<?= $B ?>/assets/vendors/isotope/isotope.js"></script>
<script src="<?= $B ?>/assets/vendors/countdown/countdown.min.js"></script>
<script src="<?= $B ?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= $B ?>/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="<?= $B ?>/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="<?= $B ?>/assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="<?= $B ?>/assets/vendors/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>$('.js-example-basic-multiple').select2();</script>
<!-- Template JS -->
<script src="<?= $B ?>/assets/js/mibooz.js"></script>

<script>
/* ── Modal ─────────────────────────────────────── */
function openLeadModal() {
    document.getElementById('awsLeadModal').classList.add('active');
    document.body.style.overflow = 'hidden';
}
function closeLeadModal() {
    document.getElementById('awsLeadModal').classList.remove('active');
    document.body.style.overflow = '';
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

<!-- Dynamic BreadcrumbList + WebPage + Service JSON-LD -->
<?php
$__uri      = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$__uri      = str_replace(rtrim(defined('SITE_BASE') ? parse_url(SITE_BASE, PHP_URL_PATH) : '', '/'), '', $__uri);
$__segments = array_values(array_filter(explode('/', trim($__uri, '/'))));
$__folder_labels = ['services' => 'Services', 'solutions' => 'Solutions', 'insights' => 'Insights'];

/* Build breadcrumb items */
$__crumbs   = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => SITE_URL . '/']];
$__pos      = 2;
$__path_so_far = '';
foreach ($__segments as $__seg) {
    $__path_so_far .= '/' . $__seg;
    if (isset($__folder_labels[$__seg])) {
        $__label = $__folder_labels[$__seg];
    } elseif (!empty($page_title) && $__seg === end($__segments)) {
        /* Use the actual page title for the final crumb */
        $__label = strip_tags(explode('|', $page_title)[0]);
        $__label = trim(explode('—', $__label)[0]);
    } else {
        $__label = ucwords(str_replace(['.php', '-'], ['', ' '], $__seg));
    }
    $__crumbs[] = ['@type' => 'ListItem', 'position' => $__pos++, 'name' => trim($__label), 'item' => SITE_URL . $__path_so_far];
}

/* Determine if this is a service page */
$__is_service  = count($__segments) >= 1 && ($__segments[0] === 'services' || (count($__segments) === 1 && !in_array($__segments[0], ['solutions','insights',''])));
$__is_solution = count($__segments) >= 1 && $__segments[0] === 'solutions';

$__canonical   = !empty($page_canonical) ? $page_canonical : SITE_URL . $__uri;
$__desc        = !empty($page_description) ? $page_description : '';
$__title_clean = !empty($page_title) ? trim(strip_tags(explode('|', $page_title)[0])) : 'ArtisticWebServices';
?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": <?= json_encode($__crumbs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
}
</script>

<?php if ($__is_service): ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": <?= json_encode($__title_clean) ?>,
    "description": <?= json_encode(trim($__desc)) ?>,
    "url": <?= json_encode($__canonical) ?>,
    "provider": {
        "@type": "Organization",
        "name": "ArtisticWebServices",
        "url": "https://artisticwebservices.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "26 Broadway, Suite 934",
            "addressLocality": "New York",
            "addressRegion": "NY",
            "postalCode": "10004",
            "addressCountry": "US"
        }
    },
    "areaServed": {
        "@type": "Country",
        "name": "United States"
    },
    "serviceType": <?= json_encode($__title_clean) ?>
}
</script>
<?php elseif ($__is_solution): ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": <?= json_encode($__title_clean) ?>,
    "description": <?= json_encode(trim($__desc)) ?>,
    "url": <?= json_encode($__canonical) ?>,
    "provider": {
        "@type": "Organization",
        "name": "ArtisticWebServices",
        "url": "https://artisticwebservices.com"
    },
    "areaServed": {
        "@type": "Country",
        "name": "United States"
    }
}
</script>
<?php endif; ?>




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

<!--Start of Tawk.to Script-->
<style>
/* ── Tawk.to: left-side widget, visible on all screens ─── */
.tawk-min-container {
    left: 0 !important;
    right: auto !important;
}
.tawk-min-container .tawk-button,
.tawk-min-container .tawk-button-circle {
    border-radius: 0 50% 50% 0 !important;
}
@media (max-width: 767px) {
    .tawk-min-container {
        left: 0 !important;
        right: auto !important;
        bottom: 16px !important;
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
    }
}
</style>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
Tawk_API.onLoad=function(){
    Tawk_API.showWidget();
    /* Move widget to left side via API */
    var frames=document.querySelectorAll('iframe[title*="chat" i],iframe[title*="tawk" i]');
    frames.forEach(function(f){
        var p=f.parentElement;
        if(p){p.style.left='0';p.style.right='auto';}
    });
};
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69d18563e360ca1c3ce30384/1jld723b2';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- ── Preloader dismiss ──────────────────────────────── -->
<script>
(function () {
    function dismissPreloader() {
        var el = document.getElementById('aws-preloader');
        if (!el) return;
        el.classList.add('aws-loaded');
        setTimeout(function () { el.style.display = 'none'; }, 600);
    }
    if (document.readyState === 'complete') {
        dismissPreloader();
    } else {
        window.addEventListener('load', dismissPreloader);
        /* safety: always dismiss after 4 s even if assets are slow */
        setTimeout(dismissPreloader, 4000);
    }
})();
</script>
<!-- ── /Preloader dismiss ─────────────────────────────── -->
