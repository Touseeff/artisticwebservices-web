<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'Mobile App Development Company USA | iOS & Android Apps &mdash; ArtisticWebServices';
$page_description = 'Top-rated mobile app development company in the USA. We build high-performance iOS, Android & cross-platform apps for startups and enterprises. 500+ apps delivered.';
$page_keywords = 'mobile app development company USA, iOS app development, Android app development, cross-platform app development, mobile app developers New York';
$page_breadcrumbs = [['name' => 'Services', 'url' => 'https://artisticwebservices.com/services.php'], ['name' => 'Mobile App Development', 'url' => 'https://artisticwebservices.com/services/mobile-app-development.php']];
$page_service_schema = ['name' => 'Mobile App Development', 'description' => 'Top-rated iOS, Android, and cross-platform mobile app development for startups and enterprises in USA.'];
$page_faq = [
    ['q' => 'How much does it cost to develop a mobile app in the USA?', 'a' => 'Mobile app development costs in the USA range from $10,000 for a basic app to $250,000+ for complex enterprise apps. Factors include features, platforms (iOS/Android), and team size. Use our free App Cost Calculator for a precise estimate.'],
    ['q' => 'How long does mobile app development take?', 'a' => 'A basic mobile app takes 8–12 weeks. A mid-complexity app takes 3–5 months. Complex apps with advanced features can take 6–12 months. ArtisticWebServices follows agile sprints for on-time delivery.'],
    ['q' => 'Do you develop apps for both iOS and Android?', 'a' => 'Yes. ArtisticWebServices develops native iOS apps (Swift/Objective-C), native Android apps (Kotlin/Java), and cross-platform apps using React Native and Flutter.'],
    ['q' => 'Will I own the source code of my app?', 'a' => 'Absolutely. ArtisticWebServices transfers complete source code ownership to you upon project completion at no additional charge.'],
    ['q' => 'Do you provide post-launch app support?', 'a' => 'Yes. We offer 24/7 app support and maintenance services including bug fixes, performance optimization, iOS/Android updates, and feature enhancements.']
];
$page_canonical = 'https://artisticwebservices.com/services/mobile-app-development';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<style>
/* ================================================
   MOBILE APP DEVELOPMENT &mdash; PAGE-SPECIFIC STYLES
   ================================================ */

/* Counter Section */
.counter__section { background: #fff; }
.counter__section .counter-box {
    display: block;
    text-align: center;
    padding: 30px 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    border-radius: 12px;
    background: #fff;
}
.counter__section .counter-box h3 {
    font-size: 52px;
    font-weight: 800;
    color: #d31923;
    margin: 0 0 8px;
    line-height: 1;
}
.counter__section .counter-box p {
    font-size: 16px;
    color: #555;
    margin: 0;
}

/* Heading / Eco Title */
.heading__section { padding: 20px 0 0; }
.eco_title h5 { font-size: 17px; font-weight: 600; color: #555; text-align: center; padding: 10px; }

/* Seamless Mobile Solutions */
.seamless-mobile-solutions { padding: 80px 0; min-height: 380px; position: relative; }
.seamless-mobile-solutions-content { max-width: 90%; }
.seamless-mobile-solutions-content h2 { font-size: 34px; font-weight: 700; line-height: 1.3; margin-bottom: 20px; }
.seamless-mobile-solutions-content p { font-size: 16px; line-height: 1.8; margin-bottom: 20px; }

/* Premium Technologies / Services */
.premium-technologies .robust-box { display: flex; flex-direction: column; }
.robust-content { padding: 18px 0; border-bottom: 1px solid #eee; }
.robust-content:last-child { border-bottom: none; }
.robust-flex h4 { font-size: 17px; font-weight: 700; color: #000; margin-bottom: 8px; }
.robust-content p { font-size: 15px; color: #555; line-height: 1.6; margin: 0; }

/* Schedule Meeting */
.shadule-metting { padding: 60px 0; background: #0a2740; }
.shadule-metting .planing-content h3 { font-size: 28px; font-weight: 700; color: #fff; margin-bottom: 20px; line-height: 1.3; }
.shadule-metting .planing-content p { color: rgba(255,255,255,0.85); font-size: 16px; margin-bottom: 24px; }
.planing-img { position: relative; }
.planing-img img { width: 100%; border-radius: 12px; }
.planing-boxs { background: rgba(255,255,255,0.1); border-radius: 10px; padding: 20px 24px; margin-top: 20px; }
.planing-boxs ul { list-style: none; padding: 0; margin: 0; }
.planing-boxs ul li { color: #fff; padding: 6px 0 6px 24px; position: relative; font-size: 15px; }
.planing-boxs ul li::before { content: "\2713"; position: absolute; left: 0; color: #d31923; font-weight: 700; }

/* Results Section */
.shadule-result { padding: 60px 0; background: #f8f8f8; }
.shadule-result .planing-content h3 { font-size: 32px; font-weight: 700; line-height: 1.3; }
.shadule-result p { font-size: 16px; color: #555; line-height: 1.7; }

/* Case Study Slider */
.case-study-slider { padding: 50px 0; background: #fff; }
.slider-wrapper { position: relative; }
.case-slider .case-slide { display: none; }
.case-slider .case-slide.active { display: block; }
.case-content {
    display: flex;
    gap: 40px;
    align-items: center;
    background: #fff;
    border-radius: 16px;
    padding: 40px;
    box-shadow: 0 4px 30px rgba(0,0,0,0.1);
}
.case-left { flex: 0 0 40%; max-width: 40%; }
.case-left img { width: 100%; border-radius: 12px; max-height: 300px; object-fit: contain; }
.case-right { flex: 1; }
.case-right h2 { font-size: 30px; font-weight: 800; margin-bottom: 16px; }
.case-right p { color: #555; font-size: 16px; line-height: 1.7; margin-bottom: 20px; }
.metrics { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 24px; }
.metrics div { background: #f5f5f5; padding: 14px 10px; border-radius: 10px; text-align: center; border-left: 3px solid #d31923; }
.metrics strong { display: block; font-size: 22px; color: #d31923; font-weight: 800; margin-bottom: 4px; }
.metrics span { font-size: 12px; color: #666; font-weight: 500; }
.view-btn {
    display: inline-block;
    padding: 12px 28px;
    background: #d31923;
    color: #fff !important;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.3s;
}
.view-btn:hover { background: #a50000; color: #fff !important; }
.custom-nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 24px;
    margin-top: 32px;
}
.custom-prev, .custom-next {
    background: #d31923;
    color: #fff;
    border: none;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    font-size: 22px;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
}
.custom-prev:hover, .custom-next:hover { background: #a50000; transform: scale(1.1); }
.slide-indicator { font-size: 18px; font-weight: 600; color: #333; }

/* Testimonials */
.testimonial-section { padding: 60px 0; background: #f8f8f8; }
.testimonial-box {
    background: #fff;
    border-radius: 20px;
    padding: 40px 48px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.08);
    max-width: 760px;
    margin: 0 auto;
}
.testimonial-quote {
    font-size: 17px;
    color: #444;
    line-height: 1.8;
    font-style: italic;
    margin-bottom: 24px;
}
.testimonial-box h5 { font-size: 20px; font-weight: 700; margin: 0 0 4px; }
.client-role { color: #d31923; font-size: 14px; font-weight: 600; }
#testimonialCarousel .carousel-control-prev,
#testimonialCarousel .carousel-control-next {
    width: 48px;
    height: 48px;
    background: #d31923;
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
    opacity: 1;
}

/* Rating Section */
.rating__mobile { padding: 60px 0; }
.rating__mobile .latest-technology-title h2 { font-size: 32px; font-weight: 700; margin-bottom: 16px; }
.rating__mobile .latest-technology-title p { font-size: 16px; color: #555; line-height: 1.7; margin-bottom: 24px; }
.rating-box { display: flex; align-items: center; gap: 16px; margin: 16px 0; }
.stars { font-size: 28px; color: #f5a623; letter-spacing: 2px; }
.review-rating { display: flex; gap: 20px; }
.reviews, .rating { font-size: 18px; font-weight: 600; color: #333; }
.rating-box-main { display: flex; gap: 20px; flex-wrap: wrap; margin: 20px 0; }
.rate-box {
    flex: 1;
    min-width: 170px;
    text-align: center;
    padding: 24px 16px;
    border: 1px solid #eee;
    border-radius: 12px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
    background: #fff;
    transition: transform 0.3s;
}
.rate-box:hover { transform: translateY(-4px); }
.rate-box .awards-img { max-height: 60px; margin-bottom: 12px; }
.rate-box h4 { font-size: 15px; font-weight: 700; margin: 0 0 8px; }
.rate-box p { font-size: 13px; color: #666; margin: 0; line-height: 1.5; }

/* Brand Names / Partnerships */
.brand__names { padding: 60px 0; background: #f8f8f8; }
.brand__names .latest-technology-title h2 { font-size: 32px; font-weight: 700; margin-bottom: 12px; }
.brand__names .latest-technology-title p { font-size: 16px; color: #555; margin-bottom: 32px; }
.brand-logo-box {
    background: #fff;
    padding: 24px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.08);
    height: 120px;
    transition: transform 0.3s, box-shadow 0.3s;
}
.brand-logo-box:hover { transform: scale(1.04); box-shadow: 0 4px 20px rgba(0,0,0,0.14); }
.brand-logo-box img { max-height: 70px; max-width: 100%; object-fit: contain; }

/* Industries / Services Section */
.us-services-section { padding: 60px 0; }
.us-ser-heading h2 { font-size: 32px; font-weight: 700; line-height: 1.3; }
.us-ser-pera p { font-size: 16px; color: #555; line-height: 1.7; }
.us-ser-box { margin-top: 30px; }

/* Industry Cards Grid — match screenshot layout */
.us-services-section .facilities-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 10px;
    margin-bottom: 10px;
}
.us-services-section .facilitites-images {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    aspect-ratio: 3 / 4;
    background: #111;
    cursor: pointer;
    width: auto !important;
    height: auto !important;
}
.us-services-section .facilitites-images img.image-001 {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
}
.us-services-section .facilitites-images:hover img.image-001 {
    transform: scale(1.06);
}
.us-services-section .facilitites-images .industries_main {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    margin: 0;
    padding: 40px 16px 14px;
    background: linear-gradient(to top, rgba(0,0,0,0.82) 0%, rgba(0,0,0,0) 100%);
    z-index: 2;
}
.us-services-section .facilitites-images .industries_main .headingss h4 {
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    margin: 0;
    line-height: 1.3;
    text-shadow: 0 1px 4px rgba(0,0,0,0.5);
}
@media (max-width: 1199px) {
    .us-services-section .facilities-grid { grid-template-columns: repeat(4, 1fr); }
}
@media (max-width: 991px) {
    .us-services-section .facilities-grid { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 767px) {
    .us-services-section .facilities-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 479px) {
    .us-services-section .facilities-grid { grid-template-columns: 1fr 1fr; gap: 8px; }
}

/* MVP / Tech-Driven Section */
.mvp-section { padding: 60px; background: #0a2740; text-align: center; }
.mvp-header { font-size: 34px; font-weight: 800; color: #fff; margin-bottom: 12px; }
.mvp-pera { font-size: 16px; color: rgba(255,255,255,0.8); max-width: 700px; margin: 0 auto 40px; }
.mvp-services {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    text-align: left;
}
.mvp-service {
    background: rgba(255,255,255,0.07);
    border-radius: 14px;
    padding: 26px 22px;
    border: 1px solid rgba(255,255,255,0.12);
    transition: background 0.3s, transform 0.3s;
}
.mvp-service:hover { background: rgba(255,255,255,0.14); transform: translateY(-4px); }
.mvp-service-header { font-size: 19px; font-weight: 700; color: #fff; margin: 0 0 10px; }
.mvp-service-description { color: rgba(255,255,255,0.7); font-size: 14px; line-height: 1.6; margin: 0; }

/* Modern Tech Stack Buttons */
.modern-btn { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 24px; }
.modern-btn a {
    padding: 10px 24px;
    border: 2px solid #d31923;
    border-radius: 50px;
    color: #d31923;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s;
    font-size: 15px;
}
.modern-btn a:hover { background: #d31923; color: #fff; }

/* Why Choose Section */
.chose-box {
    background: #fff;
    border-radius: 16px;
    padding: 32px 28px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    height: 100%;
    transition: transform 0.3s, box-shadow 0.3s;
}
.chose-box:hover { transform: translateY(-6px); box-shadow: 0 8px 30px rgba(0,0,0,0.14); }
.icon-circle {
    width: 64px;
    height: 64px;
    background: #d31923;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
}
.icon-circle i { color: #fff; font-size: 26px; }
.chose-box h4 { font-size: 19px; font-weight: 700; margin-bottom: 10px; }
.chose-box p { color: #666; font-size: 15px; line-height: 1.6; margin: 0; }

/* Report / Market Growth Section */
.reposrt-section { padding: 60px 0; }
.report-content h2 { font-size: 32px; font-weight: 700; line-height: 1.3; margin-bottom: 20px; }
.report-content p { font-size: 16px; color: #555; line-height: 1.7; margin-bottom: 24px; }
.report-img img { width: 100%; border-radius: 12px; }

/* Benefits Section */
.types { padding: 60px 0; background: #f8f8f8; }
.types__content .section-icon {
    width: 72px;
    height: 72px;
    background: #d31923;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
}
.types__content .section-icon i { color: #fff; font-size: 30px; }
.insurance-title { font-size: 34px; font-weight: 700; margin-bottom: 12px; }
.insurance-description { font-size: 16px; color: #555; line-height: 1.7; max-width: 700px; margin: 0 auto 12px; }
.benefit-box {
    background: #fff;
    border-radius: 16px;
    padding: 28px 22px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    height: 100%;
    text-align: center;
    transition: transform 0.3s;
}
.benefit-box:hover { transform: translateY(-6px); }
.benefit-icon {
    width: 60px;
    height: 60px;
    background: #d31923;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
}
.benefit-icon i { color: #fff; font-size: 24px; }
.benefit-box h4 { font-size: 17px; font-weight: 700; margin-bottom: 10px; }
.benefit-box p { font-size: 14px; color: #666; line-height: 1.6; margin: 0; }

/* Lifecycle / Dev Process */
.lifecycle { padding: 60px 0; background: #fff; }
.lifecycle .title--black { font-size: 34px; font-weight: 700; text-align: center; margin-bottom: 16px; }
.lifecycle .description { font-size: 16px; color: #555; text-align: center; max-width: 720px; margin: 0 auto 20px; }

/* Pricing Section */
.app-pricing-section { padding: 60px 0; background: #f8f8f8; }
.glass-effect { background: rgba(255,255,255,0.95); backdrop-filter: blur(10px); }
.price-tier { border-radius: 20px !important; transition: transform 0.3s, box-shadow 0.3s; }
.price-tier:hover { transform: translateY(-6px); box-shadow: 0 10px 40px rgba(0,0,0,0.14) !important; }
.price-tier.featured {
    border: 2px solid #d31923 !important;
    transform: scale(1.03);
    box-shadow: 0 8px 40px rgba(211,25,35,0.15) !important;
}
.price-range { font-size: 26px !important; font-weight: 800 !important; }
.price-tier .card-body ul li {
    padding: 8px 0;
    border-bottom: 1px solid #f0f0f0;
    font-size: 15px;
    list-style: none;
}
.price-tier .card-body ul li:last-child { border-bottom: none; }

/* ── Contact section icon fix ── */
.get__content ul { list-style: none; padding: 0; margin: 0; }
.get__content ul li { margin-bottom: 10px; }
.get__content ul li a { display: flex; align-items: center; gap: 10px; color: #333; text-decoration: none; font-size: 15px; }
.get__content ul li a img { width: 22px; height: 22px; object-fit: contain; flex-shrink: 0; }

/* ── Custom nav button size fix ── */
.custom-prev i, .custom-next i { font-size: 16px; line-height: 1; }

/* ════════════════════════════════
   RESPONSIVE — All Devices
   ════════════════════════════════ */

/* Tablet landscape: 992px - 1199px */
@media (max-width: 1199px) {
    .mvp-services { grid-template-columns: repeat(4, 1fr); gap: 16px; }
    .case-content { padding: 30px; gap: 28px; }
    .seamless-mobile-solutions-content h2 { font-size: 28px; }
    .rating-box-main { gap: 14px; }
}

/* Tablet portrait: 768px - 991px */
@media (max-width: 991px) {
    /* Counter */
    .counter__section .counter-box h3 { font-size: 42px; }

    /* MVP grid */
    .mvp-services { grid-template-columns: repeat(2, 1fr); gap: 16px; }
    .mvp-section { padding: 50px 24px; }
    .mvp-header { font-size: 28px; }

    /* Case study slider */
    .case-content { flex-direction: column; gap: 24px; padding: 28px; }
    .case-left { max-width: 100%; flex: unset; width: 100%; }
    .case-left img { max-height: 220px; margin: 0 auto; display: block; }
    .case-right h2 { font-size: 26px; }

    /* Seamless sections */
    .seamless-mobile-solutions { padding: 50px 0; }
    .seamless-mobile-solutions-content { max-width: 100%; }
    .seamless-mobile-solutions-content h2 { font-size: 26px; }

    /* Schedule */
    .shadule-metting .planing-content h3 { font-size: 24px; }

    /* Rating */
    .rating-box-main { gap: 12px; }
    .rate-box { min-width: 140px; }

    /* Brand logos */
    .brand-logo-box { height: 100px; }

    /* Sections padding */
    .reposrt-section,
    .types,
    .lifecycle,
    .app-pricing-section,
    .testimonial-section,
    .rating__mobile,
    .brand__names,
    .us-services-section { padding: 50px 0; }

    /* Pricing */
    .price-tier.featured { transform: none; }
}

/* Mobile landscape / small tablet: 576px - 767px */
@media (max-width: 767px) {
    /* Counter */
    .counter__section .counter-box h3 { font-size: 38px; }
    .counter__section .counter-box p { font-size: 14px; }

    /* MVP */
    .mvp-section { padding: 40px 16px; }
    .mvp-services { grid-template-columns: 1fr 1fr; gap: 12px; }
    .mvp-service { padding: 20px 16px; }
    .mvp-header { font-size: 26px; }
    .mvp-pera { font-size: 15px; }

    /* Case study */
    .case-content { padding: 20px; gap: 18px; }
    .case-right h2 { font-size: 22px; }
    .metrics { grid-template-columns: 1fr 1fr; gap: 10px; }
    .metrics strong { font-size: 20px; }
    .metrics span { font-size: 11px; }
    .metrics div { padding: 10px 8px; }
    .view-btn { padding: 10px 20px; font-size: 14px; }
    .custom-nav { gap: 16px; margin-top: 24px; }
    .custom-prev, .custom-next { width: 44px; height: 44px; font-size: 18px; }

    /* Testimonials */
    .testimonial-box { padding: 28px 20px; }
    .testimonial-quote { font-size: 15px; }
    .testimonial-box h5 { font-size: 17px; }

    /* Rating */
    .rating-box-main { flex-direction: column; gap: 12px; }
    .rate-box { width: 100%; min-width: unset; }
    .stars { font-size: 22px; }

    /* Modern tech buttons */
    .modern-btn { gap: 8px; }
    .modern-btn a { padding: 8px 16px; font-size: 13px; }

    /* Why Choose */
    .chose-box { padding: 24px 20px; }

    /* Benefits */
    .benefit-box { padding: 24px 16px; }
    .insurance-title { font-size: 26px; }

    /* Lifecycle */
    .lifecycle .title--black { font-size: 26px; }
    .life-cycle .col-md-6:last-child { display: none; }

    /* Pricing */
    .price-tier.featured { transform: none; }
    .price-range { font-size: 22px !important; }

    /* Report */
    .report-content h2 { font-size: 26px; }
    .report-img { margin-top: 24px; }

    /* Schedule */
    .shadule-metting { padding: 40px 0; }
    .shadule-metting .planing-content h3 { font-size: 22px; }
    .shadule-result { padding: 40px 0; }
    .shadule-result .planing-content h3 { font-size: 24px; }

    /* Brand logos */
    .brand-logo-box { height: 90px; padding: 16px; }
    .brand-logo-box img { max-height: 55px; }

    /* Us services heading */
    .us-ser-heading h2 { font-size: 26px; }

    /* Seamless */
    .seamless-mobile-solutions { padding: 40px 0; }
    .seamless-mobile-solutions-content h2 { font-size: 22px; }
    .seamless-mobile-solutions-content p { font-size: 14px; }

    /* All sections padding reduction */
    .reposrt-section,
    .types,
    .lifecycle,
    .app-pricing-section,
    .testimonial-section,
    .rating__mobile,
    .brand__names,
    .us-services-section { padding: 40px 0; }
}

/* Mobile portrait: up to 575px */
@media (max-width: 575px) {
    /* Counter */
    .counter__section .counter-box h3 { font-size: 34px; }
    .counter__section { padding: 30px 0 !important; }

    /* MVP */
    .mvp-services { grid-template-columns: 1fr; gap: 10px; }
    .mvp-section { padding: 36px 12px; }
    .mvp-header { font-size: 22px; }
    .mvp-pera { font-size: 14px; margin-bottom: 24px; }

    /* Case study */
    .slider-wrapper { padding: 0; }
    .case-content { padding: 16px; border-radius: 12px; }
    .case-right h2 { font-size: 20px; }
    .case-right p { font-size: 14px; }
    .metrics { grid-template-columns: 1fr 1fr; gap: 8px; }
    .metrics strong { font-size: 17px; }
    .slide-indicator { font-size: 15px; }
    .custom-prev, .custom-next { width: 40px; height: 40px; font-size: 15px; }
    .custom-nav { gap: 12px; }

    /* Testimonial */
    .testimonial-box { padding: 22px 16px; }
    .testimonial-quote { font-size: 14px; line-height: 1.7; }

    /* Rating */
    .stars { font-size: 20px; }
    .reviews, .rating { font-size: 15px; }
    .rate-box { padding: 18px 12px; }
    .rate-box h4 { font-size: 14px; }

    /* Brand */
    .brand-logo-box { height: 80px; padding: 12px; }

    /* Benefit */
    .insurance-title { font-size: 22px; }
    .insurance-description { font-size: 14px; }
    .benefit-box { padding: 20px 14px; }
    .benefit-icon { width: 50px; height: 50px; }
    .benefit-icon i { font-size: 20px; }
    .benefit-box h4 { font-size: 16px; }

    /* Choose */
    .chose-box { padding: 20px 16px; }
    .icon-circle { width: 54px; height: 54px; }
    .icon-circle i { font-size: 22px; }
    .chose-box h4 { font-size: 17px; }

    /* Pricing */
    .price-range { font-size: 20px !important; }
    .price-tier .card-body ul li { font-size: 14px; }

    /* Lifecycle */
    .lifecycle .title--black { font-size: 22px; }
    .lifecycle .description { font-size: 14px; }

    /* Report */
    .report-content h2 { font-size: 22px; }
    .report-content p { font-size: 14px; }

    /* Headings general */
    .us-ser-heading h2 { font-size: 22px; }
    .shadule-result .planing-content h3 { font-size: 20px; }
    .shadule-metting .planing-content h3 { font-size: 20px; }

    /* Sections padding */
    .reposrt-section,
    .types,
    .lifecycle,
    .app-pricing-section,
    .testimonial-section,
    .rating__mobile,
    .brand__names,
    .us-services-section,
    .mvp-section,
    .shadule-metting,
    .shadule-result,
    .case-study-slider { padding: 36px 0; }
}
</style>

<div class="location-hero mob-app" style="background-image: url('<?= $B ?>/assets/images/mobile-app/newyork.webp'); background-size: cover; background-position: center;">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-8 col-md-12">
                     <div class="fintness__contents">
                        <h1>Award-Winning Mobile App <span style="color: #d31923">Development Company</span> in USA</h1>
                        <p class="my-3">ArtisticWebServices is a leading mobile app development company in USA, known for delivering innovative, scalable, and user-friendly solutions for every business need. Our app developers in the United States specialize in building mobile applications for iOS, Android, and cross-platform environments. From startups to large enterprises, businesses trust us to turn their ideas into high-performing apps that drive growth and boost user engagement.</p>
                        <a href="<?= $B ?>/contact.php" class="btn btn-light rounded-2 color-primary mt-3">Discover More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <section class="counter__section">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-3 col-sm-6 mb-4">
                <div class="counter-box">
                  <h3 class="counter" data-count="10">0</h3>
                  <p>Years of Experience</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 mb-4">
                <div class="counter-box">
                  <h3 class="counter" data-count="200">0</h3>
                  <p>Mobile App Developers</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 mb-4">
                <div class="counter-box">
                  <h3 class="counter" data-count="99">0</h3>
                  <p>Client Retention Rate</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 mb-4">
                <div class="counter-box">
                  <h3 class="counter" data-count="500">0</h3>
                  <p>App Projects Completed</p>
                </div>
              </div>
            </div>
          </div>
        </section>

         
         
         
        <section class="heading__section">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="eco_title">
                        <h5>Recognized by Startups, Mid-Sized Businesses, and Fortune 500 Companies</h5>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="brand-one">
            <div class="container-fluid">
               <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                  "0": {
                  "spaceBetween": 30,
                  "slidesPerView": 2
                  },
                  "375": {
                  "spaceBetween": 30,
                  "slidesPerView": 2
                  },
                  "575": {
                  "spaceBetween": 30,
                  "slidesPerView": 3
                  },
                  "767": {
                  "spaceBetween": 50,
                  "slidesPerView": 5
                  },
                  "991": {
                  "spaceBetween": 50,
                  "slidesPerView": 6
                  },
                  "1199": {
                  "spaceBetween": 35,
                  "slidesPerView": 8
                  }
                  }}'>
                  <div class="swiper-wrapper">
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/android.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/angular.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/appium.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/aws.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/dc.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/dynamodb.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/firebase.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/flutter.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/gradle.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/html5.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/ios.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/java.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/jenkins.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/kotlin.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/linode.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/magento.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/mongo.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/mssql.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/mysql.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/node.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/ocject.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/php.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/rackspace.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/react.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/redis.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/selenium.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/shopify.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/swift.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/ts.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/vue.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/wordpress.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                     <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/wpf.webp" alt=""> </div>
                     <!-- /.swiper-slide -->
                  </div>
               </div>
            </div>
         </section>
         
         
        <section class="seamless-mobile-solutions" style="background-image: url('<?= $B ?>/assets/images/usa/leading-mobile-app-developers-redefining-mobile-experiences.webp'); background-size: cover; background-position: center;">
             <div class="container">
                 <div class="row">
                     <div class="col-md-5">
                         <div class="seamless-mobile-solutions-content">
                             <h2 style="color: #fff">Trusted  <span style="color: #d31923">Mobile App Developers</span> USA</h2>
                             <p style="color: #fff">The US mobile app market is a driving force in the global tech economy, marked by constant growth and innovation. With a highly competitive landscape, companies are investing heavily in apps to improve customer engagement, streamline business processes, and introduce new digital services. The presence of leading tech hubs, top-tier universities, and access to venture capital make the US an ideal environment for mobile app development. As consumers increasingly rely on apps for everything from shopping to banking, the US continues to set global benchmarks for app design, performance, and scalability.</p>
                              <a href="<?= $B ?>/contact.php" class="btn btn-light rounded-2 color-primary mt-3">GET A FREE QUOTE</a>
                         </div>
                     </div>
                     <div class="col-md-7">
                         <div class="seamless-mobile-solutions-img"></div>
                     </div>
                 </div>
             </div>
         </section>

        <section class="premium-technologies">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="premium-technologies-content">
                     <h2>Our All-Inclusive <span>Mobile App Development</span> Services in USA</h2>
                     <p>We offer top-tier <a href="<?= $B ?>/services/mobile-app-development.php">mobile app development services in USA</a> help brands address digital disruption and accelerate growth. Whether you're a startup bringing a fresh idea to market or an enterprise looking to enhance customer experiences, our focus is on creating apps that drive results and add real value to your business.</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="premium-right">
                     <div class="robust-box">
                        <div class="robust-content">
                           <div class="robust-flex">
                              <h4>Android App Development</h4>
                           </div>
                           <p>We help you launch robust, scalable Android apps that power business growth. With over 70% of global smartphone users on Android, tapping into this platform is crucial. We ensure your app is performance-optimized, user-friendly, and fully aligned with your business goals.
                           </p>
                        </div>
                        <div class="robust-content">
                           <div class="robust-flex">
                            
                              <h4>iOS App Development</h4>
                           </div>
                           <p>Ever wondered how your ideas could come to life as flawless, high-performance iOS apps? As a proficient iOS development company, our app developers specialize in turning your concepts into premium iPhone, iPad, and Mac apps.
                           </p>
                        </div>
                        <div class="robust-content">
                           <div class="robust-flex">
                              <h4>React Native App Development</h4>
                           </div>
                           <p>React Native is used by over 38% of developers worldwide and powers major apps like Facebook, Walmart, and Skype. We develop high-performing apps using React Native, allowing businesses to launch faster on both Android and iOS.</p>
                        </div>
                        <div class="robust-content">
                           <div class="robust-flex">
                              <h4>Flutter App Development</h4>
                           </div>
                           <p>Using Flutter, we help you deploy beautiful, high-performance apps across platforms with a single codebase. Flutter reduces time-to-market by 40%, and our designs are known to boost engagement through fluid UI/UX. Clients love the flexibility, speed, and pixel-perfect rendering we deliver.
                           </p>
                        </div>
                        <div class="robust-content">
                           <div class="robust-flex">
                             
                              <h4>Wearables and Embedded Software</h4>
                           </div>
                           <p>We develop intelligent software for wearables and embedded systems that integrate effortlessly with devices. With the wearable tech market projected to surpass $100 billion, our solutions support real-time data processing, Bluetooth connectivity, and long-term device compatibility.
                           </p>
                        </div>
                        <div class="robust-content">
                           <div class="robust-flex">
                              
                              <h4>Mobile Game App Development</h4>
                           </div>
                           <p>We create immersive and engaging mobile games with compelling gameplay and stunning visuals. As mobile games generate more than 50% of total gaming revenue worldwide, investing in mobile game development opens doors to a massive and growing user base.</p>
                        </div>
                        <div class="robust-content">
                           <div class="robust-flex">
                            
                              <h4>UI/UX Design</h4>
                           </div>
                           <p>We deliver intuitive UI/UX designs that enhance user engagement and brand perception. According to Forrester, every $1 invested in UX returns $100 in revenue. Our design process focuses on usability, accessibility, and aesthetics to ensure every interaction delivers value.
                           </p>
                        </div>
                        <div class="robust-content">
                           <div class="robust-flex">
                            
                              <h4>Progressive Web App Development</h4>
                           </div>
                           <p>With 60% of all web traffic coming from mobile devices, PWAs are the ideal solution for businesses looking to expand their reach. Our Progressive Web App development services deliver seamless, responsive apps that work flawlessly across all devices, such as desktop, tablet, and mobile.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

  
         <section class="shadule-metting">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-md-7">
                         <div class="planing-content">
                             <h3>Power Your Vision with Our Custom Mobile App Development in USA</h3>
                             <p>Our team of expert developers, designers, analysts, and strategists is on hand to create solutions that drive business success, and are in tune with your audience and market.</p>
                             <a href="<?= $B ?>/contact.php" class="btn btn-light rounded-2 color-primary mt-3">Schedule Your Free Consultation Today!</a>
                         </div>
                     </div>
                     <div class="col-md-5">
                         <div class="planing-img">
                             <img src="<?= $B ?>/assets/images/realstate/man-with-phone.webp" alt="real-box-3">
                            <div class="planing-boxs">
                             <ul>
                                 <li>100% Confidentiality with NDA</li>
                                 <li>Expert Team of 200+ Developers</li>
                                 <li>Proven Track Record</li>
                                 <li>Client-First Policy with Full Refund Guarantee</li>
                             </ul>
                         </div>
                         </div>
                      
                     </div>
                 </div>
             </div>
         </section>
         
         
         <section class="shadule-result">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-md-6">
                         <div class="planing-content">
                             <h3 style="color: #000">See the Results - Our <span style="color: #d31923">Mobile App</span> Success Stories</h3>
                            
                         </div>
                     </div>
                     <div class="col-md-6">
                         <p>For over a decade, we've delivered leading-edge mobile applications that fuel growth, elevate brands, and delight consumers in all industries. Learn how our intelligent solutions have derived innovative ideas into market-leading products.</p>
                     </div>
                 </div>
             </div>
         </section>
         
         
         
         <section class="case-study-slider">
              <div class="container">
                <div class="slider-wrapper">
                  <div class="case-slider">
                    <!-- Slide 1 -->
                    <div class="case-slide">
                      <div class="case-content">
                        <div class="case-left">
                          <!--<img src="<?= $B ?>/assets/images/click-n-collect-img.webp" alt="Case Image">-->
                           <img src="<?= $B ?>/assets/images/usa/zenbenk.webp" class="img-fluid" alt="Mobile app">
                        </div>
                        <div class="case-right">
                          <h2>ZenBank</h2>
                          <p>ZenBank's mobile banking app uses biometric login, AI-powered budgeting, and seamless transfers to make money management easier and safer. The app doubled engagement and attracted new customers rapidly.</p>
                          <div class="metrics">
                            <div><strong>2X </strong><span>Engagement & Retention</span></div>
                            <div><strong>3X </strong><span>Daily Transactions</span></div>
                            <div><strong>25% </strong><span>Drop in Customer Churn</span></div>
                            <div><strong>$12 M+ </strong><span>Deposits in 12 Months</span></div>
                          </div>
                          <a href="mobile-app-development.html#" class="view-btn">View Full Case Study</a>
                        </div>
                      </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="case-slide">
                      <div class="case-content">
                        <div class="case-left">
                          <!--<img src="<?= $B ?>/assets/images/click-n-collect-img.webp" alt="Case Image">-->
                           <img src="<?= $B ?>/assets/images/usa/eduspark-removebg-preview.webp" class="img-fluid" alt="Mobile app">
                        </div>
                        <div class="case-right">
                          <h2>EduSpark</h2>
                          <p>EduSpark's gamified e-learning app delivers interactive lessons and real-time performance tracking. Personalized learning journeys helped drive massive growth.</p>
                          <div class="metrics">
                            <div><strong>60% </strong><span>Retention Increase</span></div>
                            <div><strong>3X </strong><span>Daily Active Users</span></div>
                            <div><strong>4.2 </strong><span>Average Rating</span></div>
                            <div><strong>$1.8 M+ </strong><span>Annual Revenue</span></div>
                          </div>
                          <a href="mobile-app-development.html#" class="view-btn">View Full Case Study</a>
                        </div>
                      </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="case-slide">
                      <div class="case-content">
                        <div class="case-left">
                          <!--<img src="<?= $B ?>/assets/images/click-n-collect-img.webp" alt="Case Image">-->
                          <img src="<?= $B ?>/assets/images/usa/homevista-removebg-preview.webp" class="img-fluid" alt="Mobile app">
                        </div>
                        <div class="case-right">
                          <h2>HomeVista</h2>
                          <p>HomeVista's real estate mobile app made house hunting easier and more immersive. We delivered a powerful app with smart features like search filters, instant agent messaging, and 360&deg; virtual property tours that gave users a &ldquo;walkthrough&rdquo; experience from their phones.</p>
                          <div class="metrics">
                            <div><strong>35% </strong><span>Faster Deal Closures</span></div>
                            <div><strong>3X </strong><span>Listings Viewed</span></div>
                            <div><strong>2.5X </strong><span>App Engagement</span></div>
                            <div><strong>$4.2 M+ </strong><span>Property Transactions</span></div>
                          </div>
                          <a href="mobile-app-development.html#" class="view-btn">View Full Case Study</a>
                        </div>
                      </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="case-slide">
                      <div class="case-content">
                        <div class="case-left">
                          <!--<img src="<?= $B ?>/assets/images/click-n-collect-img.webp" alt="Case Image">-->
                          <img src="<?= $B ?>/assets/images/usa/carelink.webp" class="img-fluid" alt="Mobile app">
                        </div>
                        <div class="case-right">
                          <h2>CareLink</h2>
                          <p>CareLink's telehealth app delivers secure video consultations, digital prescriptions, and auto-reminders, improving patient access and reducing no-show appointments.</p>
                          <div class="metrics">
                            <div><strong>35% </strong><span>No-show Reduction</span></div>
                            <div><strong>2X </strong><span>Appointments Booked</span></div>
                            <div><strong>4X </strong><span>Patient Reach </span></div>
                            <div><strong>$950K+ </strong><span>Annual Cost Saved </span></div>
                          </div>
                          <a href="mobile-app-development.html#" class="view-btn">View Full Case Study</a>
                        </div>
                      </div>
                    </div>
                    <!-- Slide 5 -->
                    <div class="case-slide">
                      <div class="case-content">
                        <div class="case-left">
                          <!--<img src="<?= $B ?>/assets/images/click-n-collect-img.webp" alt="Case Image">-->
                          <img src="<?= $B ?>/assets/images/usa/shoping.webp" class="img-fluid" alt="Mobile app">
                        </div>
                        <div class="case-right">
                          <h2>ShopNova</h2>
                          <p>ShopNova wanted a mobile shopping experience that felt personal and fast. We built them a next-gen e-commerce app with AI product recommendations, one-tap checkout, and real-time inventory updates, leading to a significant increase in revenue and customer satisfaction.</p>
                          <div class="metrics">
                            <div><strong>25% </strong><span>Conversion Boost</span></div>
                            <div><strong>3X </strong><span>Repeat Orders</span></div>
                            <div><strong>18% </strong><span>Increase in Order Value</span></div>
                            <div><strong>$3.1M+ </strong><span>Revenue in 6 Months</span></div>
                          </div>
                          <a href="mobile-app-development.html#" class="view-btn">View Full Case Study</a>
                        </div>
                      </div>
                    </div>
                    <!-- Slide 5 -->
                    <div class="case-slide">
                      <div class="case-content">
                        <div class="case-left">
                          <!--<img src="<?= $B ?>/assets/images/click-n-collect-img.webp" alt="Case Image">-->
                           <img src="<?= $B ?>/assets/images/usa/zenbenk.webp" class="img-fluid" alt="Mobile app">
                        </div>
                        <div class="case-right">
                          <h2>RoutePilot</h2>
                          <p>RoutePilot needed help optimizing their delivery routes and reducing fuel costs. We developed a mobile fleet tracking app with real-time GPS, route optimization using traffic data, and live delivery updates.</p>
                          <div class="metrics">
                            <div><strong>28% </strong><span>Faster Deliveries</span></div>
                            <div><strong>20% </strong><span>Cost Reduction</span></div>
                            <div><strong>4X </strong><span>Delivery Accuracy</span></div>
                            <div><strong>$2.6 M+ </strong><span>Annual Savings</span></div>
                          </div>
                          <a href="mobile-app-development.html#" class="view-btn">View Full Case Study</a>
                        </div>
                      </div>
                    </div>
                    <!-- Slide 7 -->
                    <div class="case-slide">
                      <div class="case-content">
                        <div class="case-left">
                          <!--<img src="<?= $B ?>/assets/images/click-n-collect-img.webp" alt="Case Image">-->
                          <!--<img src="<?= $B ?>/assets/images/girl.png" alt="Girl" class="case-girl">-->
                          <img src="<?= $B ?>/assets/images/usa/zenbenk.webp" class="img-fluid" alt="Mobile app">
                        </div>
                        <div class="case-right">
                          <h2>StayEase</h2>
                          <p>StayEase's hospitality app gives a better experience to hotel guests, from booking to checkout. With features like real-time room service requests, digital check-ins, in-app chat, and a built-in loyalty program, guests received smoother service and more convenience than ever before.</p>
                          <div class="metrics">
                            <div><strong>45% </strong><span>Boost in Guest Satisfaction</span></div>
                            <div><strong>38% </strong><span>Repeat Bookings</span></div>
                            <div><strong>2X </strong><span>Upsells via In-App Services</span></div>
                            <div><strong>$5.4 M+ </strong><span>Mobile Bookings</span></div>
                          </div>
                          <a href="mobile-app-development.html#" class="view-btn">View Full Case Study</a>
                        </div>
                      </div>
                    </div>
                    <!-- Duplicate Slide Items -->
            
                  </div>
            
                  <!-- Custom Navigation -->
                  <div class="custom-nav">
                    <button class="custom-prev"><i class="fa fa-chevron-left"></i></button>
                    <div class="slide-indicator"><span class="current-slide">1</span> / <span class="total-slides">7</span></div>
                    <button class="custom-next"><i class="fa fa-chevron-right"></i></button>
                  </div>
                </div>
              </div>
            </section>

        <section class="seamless-mobile-solutions" style="background-image: url('<?= $B ?>/assets/images/usa/best-mobile-tech.webp'); background-size: cover; background-position: center;">
             <div class="container">
                 <div class="row">
                   
                     <div class="col-md-6">
                         <div class="seamless-mobile-solutions-img"></div>
                     </div>
                       <div class="col-md-6">
                         <div class="seamless-mobile-solutions-content">
                             <h2 style="color: #fff">How We Use the <span style="color: #d31923">Best Mobile Tech</span> to Build 500+ Successful Apps</h2>
                             <p style="color: #fff">As a leading mobile app development company in USA, we use the most advanced technologies to create secure, scalable apps that grow and adapt over time. Our team uses a highly Agile methodology for rapid, iterative, and results-driven development processes. We have highly skilled developers to work with the latest technologies and frameworks like React Native, Flutter, Kotlin, Swift, and many more. We can build fast and responsive apps to run on Android and iOS. Whatever the project is, big or small, our pro mobile app developers in USA have a deep knowledge of tools and technologies and ensure that every detail is spot-on.</p>
                              <a href="<?= $B ?>/contact.php" class="btn btn-light rounded-2 color-primary mt-3">GET A FREE QUOTE</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <section class="testimonial-section">
          <div class="container">
            <h2 class="text-center mb-5">What Our Clients <span style="color: #d31923">Love</span> About Us</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
        
                <!-- Testimonial 1 -->
                <div class="carousel-item active">
                  <div class="testimonial-box text-center">
                    <p class="testimonial-quote">"ArtisticWebServices delivered exactly what we envisioned — and then some. Their team was proactive, creative, and always a step ahead. Communication was flawless, every milestone was hit on time, and the final product blew our investors away. I wouldn't trust anyone else with our next build."</p>
                    <h5>Michael Thompson</h5>
                    <small class="client-role">Startup Founder, New York NY</small>
                  </div>
                </div>
        
                <!-- Testimonial 2 -->
                <div class="carousel-item">
                  <div class="testimonial-box text-center">
                    <p class="testimonial-quote">"The entire journey from wireframe to App Store launch was handled with incredible care. ArtisticWebServices understood our brand, our customers, and our goals — and built an app that reflects all three perfectly. Their post-launch support is what really sets them apart. Highly recommended!"</p>
                    <h5>Jennifer Miller</h5>
                    <small class="client-role">eCommerce Business Owner, Los Angeles CA</small>
                  </div>
                </div>
        
                <!-- Testimonial 3 -->
                <div class="carousel-item">
                  <div class="testimonial-box text-center">
                    <p class="testimonial-quote">"I came with just an idea and ArtisticWebServices turned it into a fully featured, beautiful app my clients use every single day. Their suggestions were spot-on, the design is stunning, and the whole experience felt truly collaborative."</p>
                    <h5>Amanda Collins</h5>
                    <small class="client-role">Health & Wellness Coach, Denver CO</small>
                  </div>
                </div>
        
                <!-- Testimonial 4 -->
                <div class="carousel-item">
                  <div class="testimonial-box text-center">
                    <p class="testimonial-quote">"I had doubts about outsourcing development, but ArtisticWebServices erased them fast. They tackled complex logistics requirements with impressive expertise and built an app our operations team relies on daily. Professional, fast, and absolutely reliable."</p>
                    <h5>Robert Harris</h5>
                    <small class="client-role">Logistics Manager, Dallas TX</small>
                  </div>
                </div>
        
                <!-- Testimonial 5 -->
                <div class="carousel-item">
                  <div class="testimonial-box text-center">
                    <p class="testimonial-quote">"ArtisticWebServices grasped our EdTech model faster than any agency I've worked with. They brought innovative ideas we hadn't considered and built a platform that both teachers and students genuinely enjoy using. We're already scoping out Phase 2 together!"</p>
                    <h5>Lisa Kennedy</h5>
                    <small class="client-role">EdTech Entrepreneur, Boston MA</small>
                  </div>
                </div>
        
              </div>
        
              <!-- Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon custom-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon custom-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </section>

        <section class="rating__mobile">
            <div class="container">
                <div class="row">
                    <div class="latest-technology-title">
                     <h2>Honored to Be the  <span style="color: #ec1c22">Top Mobile App Development Company in USA</span></h2>
                     <p>We are the top mobile app development company in USA shaped by the digital era and recognized as one of the fastest-growing names in application development. Innovation, creativity, and technical excellence are at the heart of everything we do. Our client-first approach drives us to deliver apps that are not only high-performing but also thoughtfully tailored to meet each client's unique needs. This dedication to quality and innovation has earned us industry recognition, nominations, and awards.</p>
                    
                       <div class="rating-box">
                            <div class="stars">
                                &#9733;&#9733;&#9733;&#9733;&#9733;
                            </div>
                            <div class="review-rating">
                               <div class="reviews">
                                    77 reviews
                                </div>
                                <div class="rating">
                                    4.8 rating
                                </div>
                            </div>
                        </div>
                       <div class="rating-box-main">
                           <div class="rate-box">
                               <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/mobile-app/goodfirms.webp" alt="goodfirms">
                               <h4>GoodFirms</h4>
                               <p>Goodfirms has recognized us as a top mobile app development business in Houston.</p>
                           </div>
                           <div class="rate-box">
                               <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/mobile-app/clutch.webp" alt="Clutch">
                               <h4>Clutch </h4>
                               <p>Clutch recognizes us as a top iPhone development business in Houston.</p>
                           </div>
                           <div class="rate-box">
                                <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/mobile-app/expertise.webp" alt="Expertise">
                               <h4>Expertise</h4>
                               <p>We are highlighted as the best mobile app developers in Houston by Expertise.com.</p>
                           </div>
                        </div>
                       <div class="rating-box-main">
                           <div class="rate-box">
                                <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/mobile-app/logo-2.webp" alt="dotCOMM Awards">
                               <h4>dotCOMM Awards</h4>
                               <p>Our organization received the platinum medal from the dotCOMM Awards for excellence in online production and design.</p>
                           </div>
                           <div class="rate-box">
                                <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/mobile-app/logo-4.webp" alt="TopDevelopers">
                               <h4>TopDevelopers</h4>
                               <p>TopDevelopers recognizes us as a prominent mobile app development company in USA that creates top game-changing apps.</p>
                           </div>
                           <div class="rate-box">
                               <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/mobile-app/logo-6.webp" alt="SoftwareWorld">
                               <h4>SoftwareWorld</h4>
                               <p>SoftwareWorld ranks us as a top NYC app development company for next-generation products.</p>
                           </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
      
      

        <section class="brand__names">
            <div class="container">
                <div class="row">
                    <div class="latest-technology-title">
                     <h2>ArtisticWebServices's Powerful Partnerships to <span style="color: #ec1c22">Achieve Shared Success</span></h2>
                     <p>As the leading mobile app development agency in USA, we redefine goals through powerful partnerships that bring together two or more companies, all while maintaining our unique value and identity. We excel at strategic positioning, and some of the most renowned companies choose to collaborate with us, which reflects our credibility and trust in the industry.</p>
                    
                    
                    </div>
                    <div class="col-md-3">
                        <div class="brand-logo-box">
                             <img src="<?= $B ?>/assets/images/oracle-6-1-1.webp" alt="real-box-3">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="brand-logo-box">
                             <img src="<?= $B ?>/assets/images/google-1-1.webp" alt="real-box-3">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="brand-logo-box">
                             <img src="<?= $B ?>/assets/images/aws-2-1-4.webp" alt="real-box-3">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="brand-logo-box">
                             <img src="<?= $B ?>/assets/images/meta-1-1-1.webp" alt="real-box-3">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="brand-logo-box">
                             <img src="<?= $B ?>/assets/images/microsoft-svgrepo-com-1-1.webp" alt="real-box-3">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="brand-logo-box">
                             <img src="<?= $B ?>/assets/images/ibm-svgrepo-com-1-1.webp" alt="real-box-3">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="brand-logo-box">
                             <img src="<?= $B ?>/assets/images/salesforca-seeklogo.com-1-2.webp" alt="real-box-3">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="brand-logo-box">
                             <img src="<?= $B ?>/assets/images/Group-15.webp" alt="real-box-3">
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
      
      
        <section class="us-services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="us-ser-heading">
                            <h2>Next-Gen <span style="color: #d31923">Mobile App Solution</span> Across Various Industries</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="us-ser-pera">
                            <p>Being known as the best mobile app developers in USA, we bring deep domain expertise, cutting-edge technology, and agile development to every project. From startups to enterprises, we serve businesses across a wide range of industries with smart, scalable mobile app solutions. Our development process is guided by your industry's best practices, compliance standards, and user expectations.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="us-ser-box">
                                <div class="facilities-grid">
                         <div class="facilitites-images">
                              <img src="<?= $B ?>/assets/images/services/1.mobile-app-dev.webp" class="image-001 d-block w-100" alt="...">
                            <div class="industries_main">
                                <div class="headingss">
                                  <h4>Mobile Application Development</h4>
                                  
                                </div>
                           
                            </div>
                         </div>
                         <div class="facilitites-images">
                               <img src="<?= $B ?>/assets/images/services/2.progrssive-web-app.webp" class="image-001 d-block w-100" alt="...">
                               <div class="industries_main">
                                <div class="headingss">
                                  <h4>Progressive Web App</h4>
                                 
                                </div>
                              
                            </div>
                         </div>
                         <div class="facilitites-images">
                              <img src="<?= $B ?>/assets/images/services/3.services.webp" class="image-001 d-block w-100" alt="...">
                                <div class="industries_main">
                                <div class="headingss">
                                  <h4>Web Development</h4>
                                  
                                </div>
                           
                            </div>
                         </div>
                 
                         <div class="facilitites-images">
                                <img src="<?= $B ?>/assets/images/services/4.Ecommerce%20App.webp" class="image-001 d-block w-100" alt="...">
                                <div class="industries_main">
                                <div class="headingss">
                                  <h4>Ecommerce App</h4>
                                  
                                </div>
                             
                            </div>
                         </div>
                        <div class="facilitites-images">
                              <img src="<?= $B ?>/assets/images/services/5.Augmented%20Reality.webp" class="image-001 d-block w-100" alt="...">
                                <div class="industries_main">
                                <div class="headingss">
                                  <h4>Augmented Reality</h4>
             
                                </div>
                              
                            </div>
                         </div>

                 </div>
            
                 <div class="facilities-grid">
                  
                 
                         <div class="facilitites-images">
                               <img src="<?= $B ?>/assets/images/services/6.CRM.webp" class="image-001 d-block w-100" alt="...">
                                <div class="industries_main">
                                <div class="headingss">
                                  <h4>Custom CRM</h4>
                                 
                                </div>
                              
                            </div>
                         </div>
                           <div class="facilitites-images">
                             <img src="<?= $B ?>/assets/images/services/7.mvp.webp" class="image-001 d-block w-100" alt="...">
                                <div class="industries_main">
                                <div class="headingss">
                                  <h4>MVP Development</h4>
                                  
                                </div>
                           
                            </div>
                         </div>
                 
                         <div class="facilitites-images">
                               <img src="<?= $B ?>/assets/images/services/8.%20digital-marketing.webp" class="image-001 d-block w-100" alt="...">
                                <div class="industries_main">
                                <div class="headingss">
                                  <h4>Digital Marketing</h4>
                                  
                                </div>
                              
                            </div>
                         </div>
                             <div class="facilitites-images">
                               <img src="<?= $B ?>/assets/images/services/9.%20dev-opps.webp" class="image-001 d-block w-100" alt="...">
                                <div class="industries_main">
                                <div class="headingss">
                                  <h4>DevOps</h4>
                                 
                                </div>
                               
                            </div>
                         </div>
                         
                         <div class="facilitites-images">
                                <img src="<?= $B ?>/assets/images/services/10.IoT%20Development.webp" class="image-001 d-block w-100" alt="...">
                                <div class="industries_main">
                                <div class="headingss">
                                  <h4>IoT Development</h4>
                                  
                                </div>
                          
                            </div>
                         </div>
                 
                 </div>
               
      
                        </div>
                    </div>
             
                </div>
            </div>
        </section>

        <section class="mvp-section mvp-" id="mobile-app-develop">
          <h2 class="mvp-header">Tech-Driven <span style="color: #d31923">Mobile Development</span> Solutions</h2>
          <p class="mvp-pera">We utilize the newest technologies to offer powerful, scalable mobile app development services. Our experience allows us to make every app we develop innovative and efficient. Here's what we do with these technologies:</p>
          <div class="mvp-services">
            <div class="mvp-service">
              <h3 class="mvp-service-header">Big Data</h3>
              <p class="mvp-service-description">We turn massive amounts of data into useful insights, so your app can make smarter decisions, deliver faster results, and keep getting better over time to user behavior.</p>
            </div>
            <div class="mvp-service">
              <h3 class="mvp-service-header">IoT</h3>
              <p class="mvp-service-description">We connect your app with smart devices like sensors, trackers, and wearables to automate tasks and provide users with real-time updates and control.</p>
            </div>
            <div class="mvp-service">
              <h3 class="mvp-service-header">Data Science</h3>
              <p class="mvp-service-description">Using analytics and machine learning, we fine-tune your app to match user behavior, delivering more personalized features and a smoother overall experience.</p>
            </div>
            <div class="mvp-service">
              <h3 class="mvp-service-header">AR</h3>
              <p class="mvp-service-description">We add digital layers to the real world, perfect for virtual try-ons, interactive games, or hands-on learning experiences.</p>
            </div>
            <div class="mvp-service">
              <h3 class="mvp-service-header">VR</h3>
              <p class="mvp-service-description">We build fully immersive virtual spaces for things like training, simulations, or rich, 360&deg; experiences that feel almost real.</p>
            </div>
            <div class="mvp-service">
              <h3 class="mvp-service-header">AI</h3>
              <p class="mvp-service-description">From smart chatbots to personalized suggestions, we integrate AI into your app so it feels intelligent, helpful, and always a step ahead.</p>
            </div>
            <div class="mvp-service">
              <h3 class="mvp-service-header">Image Recognition</h3>
              <p class="mvp-service-description">Your app can &ldquo;see&rdquo; and understand images, detecting faces, scanning barcodes, or recognizing objects to create a more interactive and intelligent experience.</p>
            </div>
            <div class="mvp-service">
              <h3 class="mvp-service-header">Blockchain</h3>
              <p class="mvp-service-description">We use blockchain to add security, transparency, and data integrity to your app, making it ideal for industries like finance, healthcare, and identity verification.</p>
            </div>
          </div>
        </section>

    
       <section class="us-services-section">
          <div class="container">
            <div class="row align-items-center mb-5">
              <div class="col-md-6">
                <div class="us-ser-heading">
                  <h2 class="section-title">Our Modern <span style="color: #d31923">Tech Stack</span></h2>
                </div>
              </div>
              <div class="col-md-6">
                <div class="us-ser-pera">
                  <p class="section-description">
                    We use modern technologies to build powerful, reliable, and future-ready solutions that keep your business ahead of the curve. With modern technology at its core, we deliver solutions that are scalable, efficient, and designed to grow with your business.
                  </p>
                </div>
              </div>
              <div class="col-md-12">
                  <div class="modern-btn">
                      <a href="mobile-app-development.html#">Platforms</a>
                      <a href="mobile-app-development.html#">Programming Language</a>
                      <a href="mobile-app-development.html#">Database and Reporting</a>
                  </div>
              </div>
            </div>
        
          </div>
        </section>
        

    
       <section class="us-services-section">
          <div class="container">
            <div class="row align-items-center mb-5">
              <div class="col-md-6">
                <div class="us-ser-heading">
                  <h2 class="section-title">Why Choose <span style="color: #d31923">ArtisticWebServices</span> for Mobile App Development?</h2>
                </div>
              </div>
              <div class="col-md-6">
                <div class="us-ser-pera">
                  <p class="section-description">
                    Our top mobile app developers have 15+ years of experience in creating mobile apps using the latest tech stack. We highly focus on design and performance to build apps that keep users engaged and support your business goals.
                  </p>
                </div>
              </div>
            </div>
        
            <div class="row gy-4">
              <div class="col-md-4">
                <div class="chose-box">
                  <div class="icon-circle"><i class="fas fa-eye"></i></div>
                  <h4>Transparency</h4>
                  <p>From timelines and costs to development updates, we keep you informed at every stage so there are no surprises.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="chose-box">
                  <div class="icon-circle"><i class="fas fa-users-cog"></i></div>
                  <h4>Skilled Team</h4>
                  <p>Our developers, designers, and strategists bring years of experience and deep technical expertise to every project.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="chose-box">
                  <div class="icon-circle"><i class="fas fa-shield-alt"></i></div>
                  <h4>Quality Assurance</h4>
                  <p>Every app goes through rigorous testing to ensure flawless performance, security, and usability before launch.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="chose-box">
                  <div class="icon-circle"><i class="fas fa-headset"></i></div>
                  <h4>24/7 Support</h4>
                  <p>We're available around the clock to resolve issues, answer questions, and keep your app running smoothly.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="chose-box">
                  <div class="icon-circle"><i class="fas fa-lock"></i></div>
                  <h4>Robust Data Protection</h4>
                  <p>We ensure end-to-end encryption and security layers to protect all sensitive data.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="chose-box">
                  <div class="icon-circle"><i class="fas fa-expand-arrows-alt"></i></div>
                  <h4>Scalability</h4>
                  <p>Our apps are built to grow with your business, making it easy to add features and expand across platforms.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        

        
       <section class="reposrt-section">
           <div class="container">
               <div class="row">
                   <div class="col-md-6">
                       <div class="report-content">
                           <h2><span style="color: #d31923">Mobile App Development</span> - Trends & Market Growth (2020&ndash;2026)</h2>
                           <p>The mobile app industry is set to reach <a href="https://www.statista.com/outlook/amo/app/worldwide">$781.70 billion</a> by 2029, with mobile games leading the charge. The market is projected to grow at a CAGR of 22%, driven by the increasing reliance on mobile technology across sectors like gaming, e-commerce, and healthcare.
                            </br> This rapid growth emphasizes the role of mobile apps in business transformation and revenue generation. Now is the perfect time to leverage mobile apps to stay ahead in a competitive digital world.
                            </p>
                            <a href="<?= $B ?>/contact.php" class="btn btn-light rounded-2 color-primary mt-3">GET IN TOUCH NOW!</a>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="report-img">
                           <img src="<?= $B ?>/assets/images/usa/trade-market.webp" class="image-001 d-block w-100" alt="...">
                       </div>
                   </div>
               </div>
           </div>
       </section>

        
       <section class="types">
          <div class="container">
            <div class="types__content text-center mb-5">
              <div class="section-icon mb-3">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <h2 class="insurance-title">Benefits of Building a <span style="color: #d31923">Mobile App</span></h2>
              <p class="insurance-description">
                Mobile apps provide a convenient, accessible, and user-friendly way for customers to engage with your brand and purchase products or services on the go. Some other benefits are as follows:
              </p>
            </div>
            <div class="row g-4">
              <div class="col-md-4">
                <div class="benefit-box">
                  <div class="benefit-icon"><i class="fas fa-bullseye"></i></div>
                  <h4>Establishing Brand Top-of-Mind</h4>
                  <p>Keep your brand in consumers' minds daily through notifications, deals, and tailored content.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="benefit-box">
                  <div class="benefit-icon"><i class="fas fa-gift"></i></div>
                  <h4>Value Addition to Customers</h4>
                  <p>Apps offer convenience for buying, customer service, and loyalty schemes via push alerts and updates.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="benefit-box">
                  <div class="benefit-icon"><i class="fas fa-handshake"></i></div>
                  <h4>Enhancing Customer Engagement</h4>
                  <p>Push notifications, in-app reviews, and offers boost sales and strengthen relationships.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="benefit-box">
                  <div class="benefit-icon"><i class="fas fa-headset"></i></div>
                  <h4>Improved Customer Service</h4>
                  <p>In-app messaging, FAQs, and self-service features improve response time and satisfaction.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="benefit-box">
                  <div class="benefit-icon"><i class="fas fa-sync-alt"></i></div>
                  <h4>Refining Product or Service</h4>
                  <p>Use customer data from the app to refine products, services, and marketing strategies.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="benefit-box">
                  <div class="benefit-icon"><i class="fas fa-chart-line"></i></div>
                  <h4>Revenue Boost</h4>
                  <p>Location-based offers and extended in-app use increase traffic and purchases.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        
       <section class="lifecycle">
            <div class="container">
                <h2 class="title title--black">Key Phases in Our <span style="color: #d31923">Mobile App Development</span> Process</h2>
                <p class="description">We deliver dynamic mobile app solutions on time through a lifecycle that blends creativity with strategic execution. Each project moves through key stages to create apps that are built to perform and built to last. </p>
        
          <div class="life-cycle py-5">
              <div class="container">
                <div class="row align-items-center">
                  <!-- Accordion (Left Side) -->
                  <div class="col-md-6">
                    <div class="accordion" id="developmentAccordion">
            
                      <div class="accordion-item">
                        <h6 class="accordion-header" id="devHeadingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#devCollapseOne">
                            Planning and Strategy
                          </button>
                        </h6>
                        <div id="devCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#developmentAccordion">
                          <div class="accordion-body">
                            We kick off with in-depth market analysis, user persona development, and a thorough feature roadmap to align your app's objectives with user expectations. This strategic foundation ensures the app delivers measurable value and optimizes time-to-market.
                          </div>
                        </div>
                      </div>
            
                      <div class="accordion-item">
                        <h6 class="accordion-header" id="devHeadingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#devCollapseTwo">
                            UI/UX Design
                          </button>
                        </h6>
                        <div id="devCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#developmentAccordion">
                          <div class="accordion-body">
                            Focusing on intuitive user interfaces and seamless user flows, we design responsive, adaptive layouts that ensure accessibility and engagement across all devices. Wireframes and high-fidelity prototypes are crafted to align with your brand's vision.
                          </div>
                        </div>
                      </div>
            
                      <div class="accordion-item">
                        <h6 class="accordion-header" id="devHeadingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#devCollapseThree">
                            Development
                          </button>
                        </h6>
                        <div id="devCollapseThree" class="accordion-collapse collapse" data-bs-parent="#developmentAccordion">
                          <div class="accordion-body">
                            Using agile methodologies and modern frameworks, our mobile app developer comes in to build scalable backends and feature-rich frontends that seamlessly integrate with third-party services and APIs. Every line of code is optimized for performance, security, and scalability.
                          </div>
                        </div>
                      </div>
            
                      <div class="accordion-item">
                        <h6 class="accordion-header" id="devHeadingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#devCollapseFour">
                            Testing
                          </button>
                        </h6>
                        <div id="devCollapseFour" class="accordion-collapse collapse" data-bs-parent="#developmentAccordion">
                          <div class="accordion-body">
                            Through automated and manual testing, we conduct rigorous quality assurance cycles to validate app functionality, usability, and security. Performance benchmarks are set to ensure stability across a wide range of devices and networks.
                          </div>
                        </div>
                      </div>
            
                      <div class="accordion-item">
                        <h6 class="accordion-header" id="devHeadingFive">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#devCollapseFive">
                            Deployment and Maintenance
                          </button>
                        </h6>
                        <div id="devCollapseFive" class="accordion-collapse collapse" data-bs-parent="#developmentAccordion">
                          <div class="accordion-body">
                            We handle the deployment process with cloud-based CI/CD pipelines to ensure smooth releases. Post-launch, the app is continuously monitored for performance, and regular updates are deployed to adapt to user feedback and OS upgrades.
                          </div>
                        </div>
                      </div>
            
                    </div>
                  </div>
            
                  <!-- Image (Right Side) -->
                  <div class="col-md-6 text-center">
                    <img src="<?= $B ?>/assets/images/services/1.mobile-app-dev.webp" class="image-001 d-block w-100" alt="...">
                  </div>
                </div>
              </div>
            </div>   
            </div>
        </section>
       
       

      <section class="app-pricing-section">
          <div class="container">
            <div class="text-center mb-5">
              <h2 class="fw-bold display-6">Our <span style="color: #d31923">Mobile App Development</span> Pricing Plans</h2>
              <p class="text-muted mx-auto" style="max-width: 700px;">
                At <strong>ArtisticWebServices</strong>, we offer flexible pricing plans tailored for startups to enterprises. Whether it's a simple app or a feature-packed solution, we've got you covered!
              </p>
            </div>
        
            <div class="row g-4">
              <!-- Simple Apps -->
              <div class="col-md-4">
                <div class="card price-tier glass-effect border-0 shadow-sm h-100">
                  <div class="card-header bg-transparent border-0 text-center">
                    <h4 class="fw-bold">Simple Apps</h4>
                    <p class="price-range text-primary fs-5 mb-1">$5K - $20K</p>
                    <small class="text-muted">For Startups & Small Projects</small>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled mb-0">
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> Custom Design Prototypes</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> Basic Features & Functionality</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> Fast Turnaround Time</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> Cross-Platform Compatibility</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> Simple Integrations</li>
                    </ul>
                  </div>
                </div>
              </div>
        
              <!-- Mid-Tier Apps -->
              <div class="col-md-4">
                <div class="card price-tier glass-effect featured border-0 shadow-lg h-100">
                  <div class="card-header bg-transparent border-0 text-center">
                    <h4 class="fw-bold">Mid-Tier Apps</h4>
                    <p class="price-range text-success fs-5 mb-1">$25K - $60K</p>
                    <small class="text-muted">For Growing Businesses</small>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled mb-0">
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> Everything in Simple Apps</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> Push Notifications & Social Media</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> Custom UI/UX Design</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> API Integration</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> Admin Panel & Backend</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> 24/7 Support</li>
                    </ul>
                  </div>
                </div>
              </div>
        
              <!-- Complex Apps -->
              <div class="col-md-4">
                <div class="card price-tier glass-effect border-0 shadow-sm h-100">
                  <div class="card-header bg-transparent border-0 text-center">
                    <h4 class="fw-bold">Complex Apps</h4>
                    <p class="price-range text-danger fs-5 mb-1">$65K - $100K+</p>
                    <small class="text-muted">For Large-Scale Solutions</small>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled mb-0">
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> All in Simple + Mid-Tier Plans</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> AI, Real-Time Updates</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> Multi-Level User Roles</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> Complete Architecture</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> Cloud Integration</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> Priority Support</li>
                      <li><i class="fa fa-check-circle" style="color:#d31923;margin-right:6px;"></i> Advanced Analytics</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="welcome-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome-three__left">
                           <div class="get__content">
                               <h4>Get in Touch with</h4>
                               <h2>
                                   Our </br> Experts
                               </h2>
                               <p>Want to find out how mobile app development New York can be helpful for your business? Looking forward to hearing from you.</p>
                               <strong>
                                   Foster Innovation with Integration
                               </strong>
                               <p>Team Up With Our Expert Mobile App Developers to Launch, and Grow Your Business Globally.</p>
                               <h3>Contact Info:</h3>
                               <ul>
                                   <li><a href="mailto:info@artisticwebservices.com"> <img src="<?= $B ?>/assets/images/fitness/email.svg" style="width:22px;height:22px;object-fit:contain;vertical-align:middle;margin-right:8px;"> info@artisticwebservices.com</a></li>
                                   <li> <a href="tel:+12137147176" class="nav-number nav-number-1"><img src="<?= $B ?>/assets/images/fitness/USA-Flag.svg" style="width:22px;height:16px;object-fit:contain;vertical-align:middle;margin-right:8px;"> (213) 714-7176</a></li>
                               </ul>
                               
                              
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                  <div class="welcome-three__right welcome-three__right-zero">
                     <div class="row">
                        <?php include __DIR__ . '/../includes/form-quote.php'; ?><script>
                           var $st = $('.pagination');
                           var $slickEl = $('.center');
                           
                           // Update pagination on slider change
                           $slickEl.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
                           var i = (currentSlide ? currentSlide : 0) + 1;
                           $st.text(i + ' of ' + slick.slideCount);
                           });
                           
                           // Initialize slick slider
                           $slickEl.slick({
                           centerMode: true,
                           centerPadding: '100px',
                           slidesToShow: 1,
                           focusOnSelect: true,
                           dots: false,
                           infinite: true,
                           responsive: [
                            {
                              breakpoint: 768,
                              settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 1
                              }
                            },
                            {
                              breakpoint: 480,
                              settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '40px',
                                slidesToShow: 1
                              }
                            }
                           ]
                           });
                           
                           // Next and Previous buttons functionality
                           $('.next').click(function() {
                           $slickEl.slick('slickNext');
                           });
                           
                           $('.prev').click(function() {
                           $slickEl.slick('slickPrev');
                           });
                           
                        </script>
                        <script>
                           $(document).ready(function () {
                             $('#name-validF').delay(5000).fadeOut('slow');
                             $('#name-valid2L').delay(5000).fadeOut('slow');
                             $('#email-validE').delay(5000).fadeOut('slow');
                             $('#phone-validP').delay(5000).fadeOut('slow');
                           
                           
                           
                           
                           
                             $('#submit_btn').on('click', function (e) {
                           
                               e.preventDefault(false);
                           
                           
                               let first_name = $('#first_name').val();
                               let last_name = $('#last_name').val();
                               let email = $('#email').val();
                               let phone = $('#phone').val();
                               let captcha = $('#captcha').val();
                               let captcha_answer = $('#captcha_answer').val();
                               let selectedOptions = $('.js-example-basic-multiple').val();
                           
                           
                           
                               function validateEmail(email) {
                                 var re = /\S+@\S+\.\S+/;
                                 if (re.test(email)) {
                                   return true
                                 }
                               }
                           
                               function validatePhoneNumber(phone) {
                                 var re = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
                                 if (re.test(phone)) {
                                   return true;
                                 }
                               }
                           
                           
                               if (first_name.trim() == "") {
                                 $('#name-valid').text("Please enter your first name");
                                 // alert('Please enter your name');
                                 return false;
                               }
                               else {
                                 $('#name-valid').text("");
                           
                               }
                           
                               if (last_name.trim() == "") {
                                 $('#name-valid2').text("Please enter your last name");
                                 // alert('Please enter your name');
                                 return false;
                               }
                               else {
                                 $('#name-valid2').text("");
                           
                               }
                           
                               if (email.trim() == "") {
                                 // alert('Please enter your email');
                                 $('#email-valid').text("Please enter your email");
                                 return false;
                               }
                               else {
                                 $('#email-valid').text("");
                               }
                           
                           
                           
                               if (validateEmail(email) !== true) {
                                 // alert('Please enter your email');
                                 $('#email-valid').text("Please enter your valid email");
                                 return false;
                               }
                               else {
                                 $('#email-valid').text("");
                           
                               }
                           
                           
                           
                               if (phone.trim() == "") {
                                 // alert('Please enter your phone');
                                 $('#phone-valid').text("Please enter your phone");
                                 return false;
                               }
                           
                               else if (validatePhoneNumber(phone) !== true) {
                                 $('#phone-valid').text("Invalid phone number: (012)-345-6789");
                                 return false;
                               }
                               else {
                                 $('#phone-valid').text("");
                               }
                           
                               if (!selectedOptions || selectedOptions.length === 0) {
                                 $('#project-valid').text("Please select at least one option");
                                 return false;
                               } else {
                                 $('#project-valid').text("");
                               }
                           
                               if (captcha.trim() == "") {
                                 $('#captcha-valid').text("Please validate your captcha");
                                 return false;
                               } else if (captcha != null) {
                                 if (captcha != captcha_answer) {
                                   $('#captcha-valid').text("Invalid captcha");
                                   return false;
                                 } else {
                                   $('#captcha-valid').text("");
                                 }
                               } else {
                                 $('#captcha-valid').text("");
                               }
                           
                               $("#contact")[0].submit();
                               return false;
                             });
                           });
                           
                           
                           $('#phone').on("keypress", function (e) {
                           
                             var regex = new RegExp("^[a-zA-Z]+$");
                             var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                             if (regex.test(key)) {
                               e.preventDefault();
                               return false;
                             }
                           
                             if (e.keyCode == 8)
                               return;
                             let val = $(this).val()
                             if (val.length == 3) {
                               $('#phone').val("(" + $('#phone').val() + ")-")
                             }
                             if (val.length == 9) {
                               $('#phone').val($('#phone').val() + "-")
                             }
                           });
                           
                           
                        </script>
                        <script src="https://www.google.com/recaptcha/api.js"></script>
                        <!-- <script type="text/javascript">
                           var validateRecaptcha = function () {
                             if (checkRecaptcha()) {
                               $('#submit_btn').attr('disabled', false);
                             }
                           }
                           $('#contact').submit(function (e) {
                             if (!checkRecaptcha()) {
                               $("#frm-result").text("Please validate your reCAPTCHA.");
                               return false;
                             }
                             $('#submit_btn').attr('disabled', false);
                           });
                           
                           function checkRecaptcha() {
                             res = $('#g-recaptcha-response').val();
                             if (res == "" || res == undefined || res.length == 0) return false;
                             else return true;
                           }
                           </script> -->                            
                     </div>
                  </div>
               </div>
                </div>
            </div>
        </section>

          <div class="faqs-section py-5">
             <div class="container">
                <div class="row">
                   <div class="col-md-12">
                      <div class="latest-technology-title">
                         <h2 style="color: #ec1c22">Mobile App Development FAQ</h2>
                      </div>
                   </div>
                </div>
                <div class="col-md-12 mt-4">
                   <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                         <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                               data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <div class="row w-100">
                                  <div class="col-1">01</div>
                                  <div class="col-11">What are the benefits of a mobile app for my business?
                                  </div>
                               </div>
                            </button>
                         </h2>
                         <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               <div class="row">
                                  <div class="col-1"></div>
                                  <div class="col-10">
                                   <p>A mobile app increases customer interaction, generates brand visibility, and offers a hassle-free shopping or service experience. It enables you to engage with your users directly through notifications, simplify transactions, and deliver differentiated value-added services, resulting in enhanced customer loyalty and increased revenue.</p> 
                                   <p>If you're searching for top mobile app development companies in USA, partner with ArtisticWebServices today to make your mark.</p> 
                                   
                                  </div>
                                  <div class="col-1"></div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="accordion-item">
                         <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                               data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                               <div class="row w-100">
                                  <div class="col-1">02</div>
                                  <div class="col-11">How long does it take to create a mobile app?
                                  </div>
                               </div>
                            </button>
                         </h2>
                         <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               <div class="row">
                                  <div class="col-1"></div>
                                  <div class="col-10">
                                     <p>The time taken to create a mobile app varies based on complexity, design needs, and the platform (iOS, Android, or both). On average, simple applications can be done in 2-3 months, while complex ones could take 6 months or more. We collaborate with you to establish milestones and deliver your app on schedule.</p>
                                  </div>
                                  <div class="col-1"></div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="accordion-item">
                         <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                               data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                               <div class="row w-100">
                                  <div class="col-1">03</div>
                                  <div class="col-11">What does mobile app development cost?
                                  </div>
                               </div>
                            </button>
                         </h2>
                         <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               <div class="row">
                                  <div class="col-1"></div>
                                  <div class="col-10">
                                    <p>The cost of mobile app development can vary widely depending on several factors, including the complexity of the app, the platforms you choose (iOS, Android, or both), the features required, and the development team's expertise. On average, a simple app with basic features can range from $10,000 to $50,000, while more complex apps with advanced functionalities can cost upwards of $100,000 or more.</p>
                                  </div>
                                  <div class="col-1"></div>
                               </div>
                            </div>
                         </div>
                      </div>
                     
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                 <div class="row w-100">
                                    <div class="col-1">04</div>
                                    <div class="col-11">Do you offer ongoing app maintenance and updates?</div>
                                 </div>
                              </button>
                           </h2>
                           <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="row">
                                    <div class="col-1"></div>
                                    <div class="col-10">
                                       <p>Yes, we provide extensive post-launch support, such as frequent updates, bug patches, and feature additions. Our aim is to keep your app updated and running at its best, ensuring that you have a smooth user experience. If you're looking for a mobile app development company in USA, you need to partner with an agency that is reputable and credible.</p>
                                    </div>
                                    <div class="col-1"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <!-- New FAQ 05 -->
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingFive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                 <div class="row w-100">
                                    <div class="col-1">05</div>
                                    <div class="col-11">Will my app be scalable to handle growth and future updates?</div>
                                 </div>
                              </button>
                           </h2>
                           <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="row">
                                    <div class="col-1"></div>
                                    <div class="col-10">
                                       <p>Yes, if scalability is built into the foundation of your app from the very beginning. A well-architected app should not just work for your current audience but also be ready to support future growth, whether that's more users, larger data volumes, or new features.</p>
                                       <p>When you hire a mobile app development company in USA, ask how they design the backend architecture. Do they use cloud-based solutions like AWS, Google Cloud, or Azure that allow seamless scaling? Do they follow modular coding practices so new features can be added without disrupting existing functionality?</p>
                                       <p>Scalability also goes beyond just handling traffic spikes, it's about being prepared for long-term evolution. That includes regular updates, security patches, and the flexibility to integrate new technologies as your business grows.</p>
                                    </div>
                                    <div class="col-1"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <!-- New FAQ 06 -->
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingSix">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                 <div class="row w-100">
                                    <div class="col-1">06</div>
                                    <div class="col-11">What technologies and frameworks do you use for mobile app development?</div>
                                 </div>
                              </button>
                           </h2>
                           <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="row">
                                    <div class="col-1"></div>
                                    <div class="col-10">
                                       <p>The technologies and frameworks we use depend on your project's goals, platform requirements, and scalability needs. For native app development, we typically use Swift and SwiftUI for iOS, and Kotlin or Java for Android, ensuring high performance and full access to device features.</p>
                                       <p>If your project benefits from cross-platform development, we often work with Flutter (by Google) and React Native (by Meta), which allow us to build apps for both iOS and Android from a single codebase without compromising quality.</p>
                                    </div>
                                    <div class="col-1"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <!-- New FAQ 07 -->
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingSeven">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                 <div class="row w-100">
                                    <div class="col-1">07</div>
                                    <div class="col-11">Do you assist with app store submission and launch?</div>
                                 </div>
                              </button>
                           </h2>
                           <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <div class="row">
                                    <div class="col-1"></div>
                                    <div class="col-10">
                                       <p>Yes, absolutely. We guide you through the entire submission and launch process. This includes preparing all the necessary assets such as app descriptions, screenshots, and icons, ensuring your app meets Apple App Store and Google Play Store guidelines, and handling the technical steps of submission.</p>
                                       <p>We also help with beta testing, performance checks, and final quality assurance before launch, so your app has the best chance of approval on the first attempt. Once live, we can assist with setting up analytics, crash reporting, and version updates to keep your app running smoothly.</p>
                                    </div>
                                    <div class="col-1"></div>
                                 </div>
                              </div>
                           </div>
                        </div>

                      
                   </div>
                </div>
             </div>
          </div>
          </div>

<script>
/* -- Counter Animation ------------------------------- */
(function() {
    var counters = document.querySelectorAll('.counter[data-count]');
    if (!counters.length) return;
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                entry.target.classList.add('counted');
                var target = parseInt(entry.target.getAttribute('data-count'));
                var current = 0;
                var step = Math.max(1, Math.ceil(target / 70));
                var timer = setInterval(function() {
                    current += step;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    entry.target.textContent = current;
                }, 20);
            }
        });
    }, { threshold: 0.4 });
    counters.forEach(function(c) { observer.observe(c); });
})();

/* -- Case Study Slider ------------------------------- */
(function() {
    var slides = document.querySelectorAll('.case-slider .case-slide');
    var prevBtn = document.querySelector('.custom-prev');
    var nextBtn = document.querySelector('.custom-next');
    var currentSlideEl = document.querySelector('.current-slide');
    var totalSlidesEl  = document.querySelector('.total-slides');
    if (!slides.length) return;

    var current = 0;

    function showSlide(idx) {
        slides.forEach(function(s) { s.classList.remove('active'); s.style.display = 'none'; });
        slides[idx].classList.add('active');
        slides[idx].style.display = 'block';
        if (currentSlideEl) currentSlideEl.textContent = idx + 1;
        if (totalSlidesEl)  totalSlidesEl.textContent  = slides.length;
    }

    showSlide(0);

    if (nextBtn) nextBtn.addEventListener('click', function() {
        current = (current + 1) % slides.length;
        showSlide(current);
    });
    if (prevBtn) prevBtn.addEventListener('click', function() {
        current = (current - 1 + slides.length) % slides.length;
        showSlide(current);
    });
})();
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>

