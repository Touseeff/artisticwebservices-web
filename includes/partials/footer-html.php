<?php
/**
 * footer-html.php — Footer HTML partial
 * Contains: site footer columns, trust logo strip, copyright,
 *           mobile nav wrapper, and scroll-to-top anchor.
 * Included by: includes/footer.php
 *
 * Requires $B (SITE_BASE alias) — set in footer.php before including this file.
 */
if (!isset($B)) {
    $B = defined('SITE_BASE') ? SITE_BASE : '';
}
?>
<!-- Styles extracted to assets/css/custom-fixes.css (Sprint 2 CSS optimization) -->

<footer class="site-footer">
    <div class="site-footer__middle">
        <div class="container">
            <div class="site-footer__middle-inner">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 center__align wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-logo">
                           <a href="<?= $B ?>/"><img src="<?= $B ?>/assets/images/resources/artisticwebservices-og.png" alt="ArtisticWebServices logo" class="footer-logo-img" loading="lazy" /></a>
                        </div>
                        <div class="d-flex flex-column text-align-center">
                            <p>Based in New York, ArtisticWebServices has been at the forefront of technology innovation. We have established ourselves as a trusted Custom Software Development and IT Consulting Company that offers a wide array of expertise to ensure clients achieve sustainable competitive advantage by developing innovative and intelligent Products and Solutions for several industries.</p>
                            <p>Let's write the next chapter of success and technological innovation together ... <a href="<?= $B ?>/our-story" class="read__btn">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__links clearfix">
                            <h3 class="footer-widget__title">Quick Links</h3>
                            <ul class="footer-widget__links-list list-unstyled clearfix">
                                <li><a href="<?= $B ?>/">Home</a></li>
                                <li><a href="<?= $B ?>/about-us">About Us</a></li>
                                <li><a href="<?= $B ?>/services/case-studies">Case Studies</a></li>
                                <li><a href="<?= $B ?>/solutions/alliance-partners">Alliances &amp; Presence</a></li>
                                <li><a href="<?= $B ?>/solutions/consulting">Consulting</a></li>
                                <li><a href="<?= $B ?>/solutions/industries">Industries</a></li>
                                <li><a href="<?= $B ?>/services">Services</a></li>
                                <li><a href="<?= $B ?>/solutions/location">Locations</a></li>
                                <li><a href="<?= $B ?>/contact">Contact Us</a></li>
                                <li><a href="<?= $B ?>/privacy-policy">Privacy Policy</a></li>
                                <li><a href="<?= $B ?>/terms-of-use">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 wow fadeInUp" data-wow-delay="250ms">
                        <div class="footer-widget__column footer-widget__links clearfix">
                            <h3 class="footer-widget__title">Services</h3>
                            <ul class="footer-widget__links-list list-unstyled clearfix">
                                <li><a href="<?= $B ?>/services/mobile-app-development">Mobile App Development</a></li>
                                <li><a href="<?= $B ?>/services/web-development">Web Development</a></li>
                                <li><a href="<?= $B ?>/services/artificial-intelligence">AI Development</a></li>
                                <li><a href="<?= $B ?>/services/blockchain-development">Blockchain</a></li>
                                <li><a href="<?= $B ?>/services/cloud-managed-services">Cloud Services</a></li>
                                <li><a href="<?= $B ?>/services/ecommerce-app-development">eCommerce App</a></li>
                                <li><a href="<?= $B ?>/services/saas">SaaS Development</a></li>
                                <li><a href="<?= $B ?>/services/customer-experience-and-design">UI/UX Design</a></li>
                                <li><a href="<?= $B ?>/services/digital-marketing">Digital Marketing</a></li>
                                <li><a href="<?= $B ?>/services/iot-app-development">IoT Development</a></li>
                                <li><a href="<?= $B ?>/services/security-operations-services">DevOps &amp; Security</a></li>
                                <li><a href="<?= $B ?>/services/app-support">App Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__links clearfix">
                            <h3 class="footer-widget__title">Solutions</h3>
                            <ul class="footer-widget__links-list list-unstyled clearfix">
                                <li><a href="<?= $B ?>/solutions/healthcare-app-development">Healthcare</a></li>
                                <li><a href="<?= $B ?>/solutions/financial-and-banking">FinTech &amp; Banking</a></li>
                                <li><a href="<?= $B ?>/solutions/education-and-learning">Education &amp; eLearning</a></li>
                                <li><a href="<?= $B ?>/solutions/travel-app-development">Travel &amp; Tourism</a></li>
                                <li><a href="<?= $B ?>/services/fitness-mobile-app-development">Fitness &amp; Wellness</a></li>
                                <li><a href="<?= $B ?>/services/real-estate-app-development">Real Estate</a></li>
                                <li><a href="<?= $B ?>/solutions/sports">Sports</a></li>
                                <li><a href="<?= $B ?>/solutions/ecommerce-and-trading">E-Commerce &amp; Trading</a></li>
                                <li><a href="<?= $B ?>/solutions/hire-dedicated-developers">Hire Developers</a></li>
                                <li><a href="<?= $B ?>/services/mvp-startup-development">MVP &amp; Startups</a></li>
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
                                    <div class="mt-0"><i class="fa fa-envelope me-1" style="color:#dd0429;" aria-hidden="true"></i> <a href="mailto:info@artisticwebservices.com">info@artisticwebservices.com</a></div>
                                    <div class="mt-0"><i class="fa fa-phone me-1" style="color:#dd0429;" aria-hidden="true"></i> <a href="tel:+12137147176" class="nav-number nav-number-1">(213) 714-7176</a></div>
                                </div>
                                <!-- Social Media Icons -->
                                <div class="footer-social-wrap">
                                    <a href="https://www.facebook.com/artisticwebservices" target="_blank" rel="noopener noreferrer" class="footer-social-icon fb" title="Facebook" aria-label="Follow us on Facebook">
                                        <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/artisticwebservices" target="_blank" rel="noopener noreferrer" class="footer-social-icon li" title="LinkedIn" aria-label="Follow us on LinkedIn">
                                        <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.instagram.com/artisticwebservices" target="_blank" rel="noopener noreferrer" class="footer-social-icon ig" title="Instagram" aria-label="Follow us on Instagram">
                                        <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://twitter.com/artisticwebservices" target="_blank" rel="noopener noreferrer" class="footer-social-icon tw" title="X (Twitter)" aria-label="Follow us on X / Twitter">
                                        <i class="fa-brands fa-x-twitter" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- ── Scrolling Trust Logo Strip ──────────────────── -->
    <div class="footer-logo-scroll">
        <div class="footer-logo-scroll-track">
            <!-- First set -->
            <div class="footer-scroll-logo"><img src="<?= $B ?>/assets/images/clutch.webp" alt="Clutch" loading="lazy"></div>
            <div class="footer-scroll-logo"><img src="<?= $B ?>/assets/images/trustpilot.webp" alt="Trustpilot" loading="lazy"></div>
            <div class="footer-scroll-logo"><img src="<?= $B ?>/assets/images/03-designrush.webp" alt="DesignRush" loading="lazy"></div>
            <div class="footer-scroll-logo"><img src="<?= $B ?>/assets/images/glassdoor.webp" alt="Glassdoor" loading="lazy"></div>
            <div class="footer-scroll-logo"><img src="<?= $B ?>/assets/images/bark.webp" alt="Bark" loading="lazy"></div>
            <!-- Duplicate set for seamless infinite loop -->
            <div class="footer-scroll-logo"><img src="<?= $B ?>/assets/images/clutch.webp" alt="Clutch" loading="lazy"></div>
            <div class="footer-scroll-logo"><img src="<?= $B ?>/assets/images/trustpilot.webp" alt="Trustpilot" loading="lazy"></div>
            <div class="footer-scroll-logo"><img src="<?= $B ?>/assets/images/03-designrush.webp" alt="DesignRush" loading="lazy"></div>
            <div class="footer-scroll-logo"><img src="<?= $B ?>/assets/images/glassdoor.webp" alt="Glassdoor" loading="lazy"></div>
            <div class="footer-scroll-logo"><img src="<?= $B ?>/assets/images/bark.webp" alt="Bark" loading="lazy"></div>
        </div>
    </div>
    <!-- ── /Scrolling Trust Logo Strip ───────────────── -->

    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">&copy; Copyrights 2025 ArtisticWebServices. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler" role="button" tabindex="0" aria-label="Close navigation menu"><i class="fa fa-times" aria-hidden="true"></i></span>
        <div class="logo-box">
            <a href="<?= $B ?>/" aria-label="logo image"><img src="<?= $B ?>/assets/images/resources/logo-1.webp" alt="ArtisticWebServices logo" /></a>
        </div>
        <div class="mobile-nav__container"></div>
    </div>
</div>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top" aria-label="Scroll to top of page"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
