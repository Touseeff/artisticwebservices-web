<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'On-Demand App Development USA | Uber-Like Apps — ArtisticWebServices';
$page_description = 'Build powerful on-demand service apps with ArtisticWebServices. Uber-like, DoorDash-like, and TaskRabbit-like on-demand platforms for USA startups and businesses.';
$page_keywords = 'on-demand app development USA, on-demand delivery app, ride-sharing app development, service marketplace app, on-demand platform development';
$page_breadcrumbs = [['name' => 'Services', 'url' => 'https://artisticwebservices.com/services'], ['name' => 'On-Demand App Development', 'url' => 'https://artisticwebservices.com/services/on-demand-app-development']];
$page_service_schema = ['name' => 'On-Demand App Development', 'description' => 'Uber-like, DoorDash-like, and TaskRabbit-like on-demand platforms for USA startups and businesses.'];
$page_faq = [
    ['q' => 'What is on-demand mobile app development?', 'a' => 'On-demand mobile app development involves creating applications that provide services or products instantly, based on user requests, through a seamless digital experience.'],
    ['q' => 'What are the key features of an on-demand app?', 'a' => 'Key features often include real-time tracking, secure payment gateways, push notifications, user profiles, service booking, ratings and reviews, and location-based services.'],
    ['q' => 'How much does it cost to develop an on-demand mobile app?', 'a' => 'The cost of developing an on-demand app depends on factors such as complexity, features, platform (iOS/Android), design, and development time. A detailed consultation is required for an accurate estimate.'],
    ['q' => 'How long does it take to develop an on-demand mobile app?', 'a' => 'The development time varies based on the app\'s complexity and features. On average, it can take anywhere from 2 to 6 months to develop a fully functional on-demand app.']
];
$page_canonical = 'https://artisticwebservices.com/services/on-demand-app-development';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservices-og.png';
$load_slick = true; // load Slick on this page (case-study slider)
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<?php require_once __DIR__ . '/../includes/header.php'; ?>

<style>
/* ================================================
   ON-DEMAND APP DEVELOPMENT — PAGE-SPECIFIC STYLES
   ================================================ */

/* ── Hero ── */
.od-hero { position: relative; padding: 100px 0 80px; background: #0a1628; overflow: hidden; }
.od-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(10,22,40,0.92) 0%, rgba(211,25,35,0.18) 100%); z-index: 1; }
.od-hero .container { position: relative; z-index: 2; }
.od-hero__content h1 { font-size: 42px; font-weight: 800; color: #fff; line-height: 1.25; margin-bottom: 18px; }
.od-hero__content p { font-size: 16px; color: rgba(255,255,255,0.85); line-height: 1.8; margin-bottom: 20px; }
.od-hero__content ul { list-style: none; padding: 0; margin: 0 0 28px; }
.od-hero__content ul li { color: rgba(255,255,255,0.9); font-size: 15px; padding: 6px 0; display: flex; align-items: center; gap: 10px; }
.od-hero__content ul li i { color: #d31923; font-size: 18px; }
.od-hero__img { position: relative; }
.od-hero__img img { max-height: 460px; object-fit: contain; animation: odFloat 3s ease-in-out infinite alternate; }
@keyframes odFloat { from { transform: translateY(0); } to { transform: translateY(-14px); } }
.od-badge-row { position: absolute; bottom: 24px; left: 0; right: 0; display: flex; justify-content: center; gap: 20px; }
.od-badge { background: rgba(255,255,255,0.12); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); border-radius: 12px; padding: 12px 20px; text-align: center; min-width: 110px; }
.od-badge p { color: #fff; font-size: 13px; font-weight: 600; margin: 0 0 6px; }
.od-badge img { max-height: 26px; object-fit: contain; }

/* ── Achievements Strip ── */
.od-achievements { background: #fff; box-shadow: 0 4px 20px rgba(0,0,0,0.07); }
.od-achievements-title h2 { font-size: 22px; font-weight: 700; color: #0a1628; text-align: center; }
.od-achievements-row { display: flex; justify-content: center; flex-wrap: wrap; gap: 0; border-top: 1px solid #f0f0f0; }
.od-achv-box { display: flex; flex-direction: column; align-items: center; padding: 20px 30px; border-right: 1px solid #f0f0f0; min-width: 180px; }
.od-achv-box:last-child { border-right: none; }
.od-achv-box .achivment_img img { max-height: 36px; object-fit: contain; margin-bottom: 8px; }
.od-achv-box .rating { display: flex; align-items: center; gap: 4px; margin-bottom: 6px; }
.od-achv-box .rating .fa-star.checked { color: #f5a623; }
.od-achv-box .rating .fa-star { color: #ddd; }
.od-achv-box .rating span:last-child { font-size: 15px; font-weight: 700; color: #333; margin-left: 4px; }
.od-achv-box > p { font-size: 12px; color: #777; margin: 0; text-align: center; }

/* ── Market Stats ── */
.od-stats { background: #f8f9fc; border-top: 1px solid #eee; }
.od-stat-box { padding: 40px 20px; text-align: center; border-right: 1px solid #f0f0f0; height: 100%; }
.col-md-4:last-child .od-stat-box { border-right: none; }
.od-stat-box h2 { font-size: 30px; font-weight: 800; color: #d31923; margin-bottom: 12px; line-height: 1.2; }
.od-stat-box p { font-size: 15px; color: #555; line-height: 1.7; margin: 0; }

/* ── Services Grid ── */
.od-services { padding: 80px 0; background: #fff; }
.od-services-head { text-align: center; margin-bottom: 50px; }
.od-services-head h2 { font-size: 36px; font-weight: 800; line-height: 1.3; margin-bottom: 16px; }
.od-services-head p { font-size: 16px; color: #555; line-height: 1.8; max-width: 780px; margin: 0 auto; }
.od-serv-card { background: #f8f9fc; border-radius: 16px; padding: 28px 24px; margin-bottom: 24px; border-left: 4px solid #d31923; height: calc(100% - 24px); transition: transform 0.3s, box-shadow 0.3s, background 0.3s; }
.od-serv-card:hover { transform: translateY(-6px); box-shadow: 0 10px 35px rgba(0,0,0,0.1); background: #fff; }
.od-serv-card .od-icon { width: 52px; height: 52px; background: #d31923; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; }
.od-serv-card .od-icon i { color: #fff; font-size: 22px; }
.od-serv-card h4 { font-size: 18px; font-weight: 700; color: #0a1628; margin-bottom: 10px; }
.od-serv-card p { font-size: 15px; color: #666; line-height: 1.7; margin: 0; }

/* ── Why On Demand ── */
.od-why { padding: 80px 0; background: #f8f9fc; }
.od-why-img img { width: 100%; max-height: 440px; object-fit: contain; border-radius: 16px; }
.od-why-content h2 { font-size: 34px; font-weight: 800; color: #0a1628; line-height: 1.3; margin-bottom: 16px; }
.od-why-content p { font-size: 16px; color: #555; line-height: 1.8; margin-bottom: 20px; }
.od-why-content h3 { font-size: 24px; font-weight: 700; color: #0a1628; margin-bottom: 16px; }

/* ── Innovative Solutions ── */
.od-solutions { padding: 80px 0; background: #fff; }
.od-solutions-head { text-align: center; margin-bottom: 50px; }
.od-solutions-head h2 { font-size: 36px; font-weight: 800; color: #0a1628; line-height: 1.3; margin-bottom: 14px; }
.od-solutions-head p { font-size: 16px; color: #555; line-height: 1.8; max-width: 780px; margin: 0 auto; }
.od-sol-card { background: #f8f9fc; border-radius: 14px; padding: 28px 24px; height: 100%; border-top: 4px solid #d31923; transition: transform 0.3s, box-shadow 0.3s; }
.od-sol-card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.08); }
.od-sol-card h4 { font-size: 19px; font-weight: 700; color: #0a1628; margin-bottom: 12px; }
.od-sol-card p { font-size: 15px; color: #666; line-height: 1.7; margin: 0; }

/* ── Features Tabs ── */
.od-features { padding: 80px 0; background: #0a1628; }
.od-features-head { text-align: center; margin-bottom: 46px; }
.od-features-head h2 { font-size: 34px; font-weight: 800; color: #fff; line-height: 1.3; margin-bottom: 14px; }
.od-features-head p { font-size: 16px; color: rgba(255,255,255,0.75); max-width: 740px; margin: 0 auto; }
.od-tabs-nav { border: none; justify-content: center; gap: 10px; margin-bottom: 36px; flex-wrap: wrap; }
.od-tabs-nav .nav-link { border: 2px solid rgba(255,255,255,0.2); border-radius: 50px; padding: 10px 28px; color: rgba(255,255,255,0.75); font-weight: 600; font-size: 15px; transition: all 0.3s; background: transparent; }
.od-tabs-nav .nav-link.active, .od-tabs-nav .nav-link:hover { background: #d31923; border-color: #d31923; color: #fff; }
.od-feat-card { background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.12); border-radius: 14px; padding: 24px 20px; height: 100%; margin-bottom: 20px; transition: background 0.3s, transform 0.3s; }
.od-feat-card:hover { background: rgba(255,255,255,0.13); transform: translateY(-4px); }
.od-feat-card h4 { font-size: 16px; font-weight: 700; color: #fff; margin-bottom: 8px; }
.od-feat-card p { font-size: 14px; color: rgba(255,255,255,0.72); line-height: 1.65; margin: 0; }
.od-feat-card .od-feat-icon { width: 44px; height: 44px; background: rgba(211,25,35,0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 14px; }
.od-feat-card .od-feat-icon i { color: #d31923; font-size: 18px; }

/* ── Accordion + Image ── */
.od-accordion { padding: 80px 0; background: #f8f9fc; }
.od-accordion-head { text-align: center; margin-bottom: 50px; }
.od-accordion-head h2 { font-size: 34px; font-weight: 800; color: #0a1628; line-height: 1.3; margin-bottom: 14px; }
.od-accordion-head p { font-size: 16px; color: #555; max-width: 720px; margin: 0 auto; }
.od-acc-img img { width: 100%; border-radius: 16px; box-shadow: 0 8px 40px rgba(0,0,0,0.12); }
.od-accordion .accordion-item { border: none; border-bottom: 1px solid #e8e8e8; background: transparent; }
.od-accordion .accordion-item:last-child { border-bottom: none; }
.od-accordion .accordion-button { font-size: 16px; font-weight: 600; color: #0a1628; background: transparent; padding: 18px 20px; box-shadow: none !important; }
.od-accordion .accordion-button:not(.collapsed) { color: #d31923; background: #fff5f5; border-radius: 8px; }
.od-accordion .accordion-body { font-size: 15px; color: #555; line-height: 1.8; padding: 0 20px 18px; }

/* ── Case Studies ── */
.od-case { padding: 80px 0; background: #fff; }
.od-case-head { text-align: center; margin-bottom: 50px; }
.od-case-head h2 { font-size: 34px; font-weight: 800; color: #0a1628; margin-bottom: 14px; }
.od-case-head p { font-size: 16px; color: #555; max-width: 720px; margin: 0 auto; }

/* ── Tech Stack ── */
.od-tech { padding: 80px 0; background: #f8f9fc; }
.od-tech-head { text-align: center; margin-bottom: 50px; }
.od-tech-head h2 { font-size: 34px; font-weight: 800; color: #0a1628; line-height: 1.3; margin-bottom: 14px; }
.od-tech-head p { font-size: 16px; color: #555; max-width: 720px; margin: 0 auto; }
.od-platform-box { background: #fff; border-radius: 16px; padding: 28px 24px; margin-bottom: 24px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border-top: 4px solid #d31923; }
.od-platform-box h4 { font-size: 18px; font-weight: 700; color: #0a1628; margin-bottom: 20px; }
.od-platform-box ul { list-style: none; padding: 0; margin: 0; display: flex; flex-wrap: wrap; gap: 16px; }
.od-platform-box ul li { display: flex; flex-direction: column; align-items: center; gap: 8px; min-width: 70px; }
.od-platform-box ul li img { height: 42px; max-width: 70px; object-fit: contain; }
.od-platform-box ul li p { font-size: 13px; color: #555; margin: 0; text-align: center; font-weight: 500; }

/* ── Why Us ── */
.od-why-us { padding: 80px 0; background: #fff; }
.od-why-us-head { text-align: center; margin-bottom: 50px; }
.od-why-us-head h2 { font-size: 34px; font-weight: 800; color: #0a1628; line-height: 1.3; margin-bottom: 14px; }
.od-why-us-head p { font-size: 16px; color: #555; max-width: 780px; margin: 0 auto; }
.od-choice-card { background: #f8f9fc; border-radius: 14px; padding: 30px 24px; margin-bottom: 24px; height: calc(100% - 24px); border-left: 4px solid #d31923; transition: transform 0.3s, box-shadow 0.3s; }
.od-choice-card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.08); }
.od-choice-card .od-choice-icon { width: 50px; height: 50px; background: rgba(211,25,35,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; }
.od-choice-card .od-choice-icon i { color: #d31923; font-size: 20px; }
.od-choice-card h4 { font-size: 18px; font-weight: 700; color: #0a1628; margin-bottom: 10px; }
.od-choice-card p { font-size: 15px; color: #666; line-height: 1.7; margin: 0; }

/* ── How It Works ── */
.od-steps { padding: 80px 0; background: #0a1628; }
.od-steps-head { text-align: center; margin-bottom: 50px; }
.od-steps-head h2 { font-size: 34px; font-weight: 800; color: #fff; line-height: 1.3; margin-bottom: 14px; }
.od-steps-head p { font-size: 16px; color: rgba(255,255,255,0.75); max-width: 720px; margin: 0 auto; }
.od-step-card { background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.12); border-radius: 16px; padding: 36px 28px; text-align: center; height: 100%; transition: background 0.3s, transform 0.3s; }
.od-step-card:hover { background: rgba(255,255,255,0.13); transform: translateY(-5px); }
.od-step-num { width: 60px; height: 60px; background: #d31923; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; }
.od-step-num span { font-size: 22px; font-weight: 800; color: #fff; }
.od-step-card p { font-size: 15px; color: rgba(255,255,255,0.8); line-height: 1.75; margin: 0; }

/* ── FAQ ── */
.od-faq { padding: 80px 0; background: #f8f9fc; }
.od-faq-head { text-align: center; margin-bottom: 50px; }
.od-faq-head h2 { font-size: 34px; font-weight: 800; color: #0a1628; }
.od-faq .accordion-item { border: none; border-bottom: 1px solid #e8e8e8; background: transparent; }
.od-faq .accordion-item:last-child { border-bottom: none; }
.od-faq .accordion-button { font-size: 16px; font-weight: 600; color: #0a1628; background: #fff; padding: 20px 24px; box-shadow: none !important; border-radius: 0; }
.od-faq .accordion-button:not(.collapsed) { color: #d31923; background: #fff5f5; }
.od-faq .accordion-body { font-size: 15px; color: #555; line-height: 1.8; padding: 0 24px 20px; background: #fff; }

/* ── Contact CTA ── */
.od-contact { padding: 80px 0; background: linear-gradient(135deg, #0a1628 0%, #1a2e4a 100%); }
.od-contact-left h4 { font-size: 15px; font-weight: 600; color: #d31923; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px; }
.od-contact-left h2 { font-size: 42px; font-weight: 800; color: #fff; line-height: 1.15; margin-bottom: 20px; }
.od-contact-left p { font-size: 16px; color: rgba(255,255,255,0.8); line-height: 1.8; margin-bottom: 16px; }
.od-contact-left strong { font-size: 17px; color: #fff; font-weight: 700; display: block; margin-bottom: 10px; }
.od-contact-left h3 { font-size: 20px; font-weight: 700; color: #fff; margin-bottom: 14px; margin-top: 20px; }
.od-contact-left ul { list-style: none; padding: 0; margin: 0; }
.od-contact-left ul li { margin-bottom: 12px; }
.od-contact-left ul li a { display: flex; align-items: center; gap: 12px; color: rgba(255,255,255,0.9); text-decoration: none; font-size: 15px; transition: color 0.3s; }
.od-contact-left ul li a:hover { color: #fff; }
.od-contact-left ul li a img { width: 22px; height: 22px; object-fit: contain; flex-shrink: 0; }
.od-contact-form { background: rgba(255,255,255,0.06); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.15); border-radius: 20px; padding: 40px 36px; }

/* ── Trusted Logos Strip ── */
.od-trusted { padding: 36px 0; background: #fff; border-bottom: 1px solid #f0f0f0; }
.od-trusted-label h4 { font-size: 14px; font-weight: 700; color: #555; text-transform: uppercase; letter-spacing: 1px; margin: 0; line-height: 1.5; }
.od-trusted img { max-height: 48px; object-fit: contain; }

/* ── Responsive ── */
@media (max-width: 991px) {
    .od-hero__content h1 { font-size: 32px; }
    .od-hero { padding: 70px 0 60px; }
    .od-services-head h2, .od-solutions-head h2, .od-features-head h2, .od-accordion-head h2,
    .od-tech-head h2, .od-why-us-head h2, .od-steps-head h2, .od-faq-head h2 { font-size: 28px; }
    .od-contact-left h2 { font-size: 34px; }
    .od-achv-box { padding: 16px 20px; min-width: 140px; }
}
@media (max-width: 767px) {
    .od-hero__content h1 { font-size: 26px; }
    .od-badge-row { position: static; margin-top: 20px; }
    .od-achievements-row { flex-direction: column; }
    .od-achv-box { border-right: none; border-bottom: 1px solid #f0f0f0; }
    .od-services-head h2, .od-solutions-head h2, .od-features-head h2, .od-accordion-head h2,
    .od-tech-head h2, .od-why-us-head h2, .od-steps-head h2, .od-faq-head h2 { font-size: 24px; }
    .od-contact-left h2 { font-size: 28px; }
    .od-contact { padding: 50px 0; }
    .od-contact-form { padding: 24px 20px; margin-top: 32px; }
    .od-stat-box { border-right: none; border-bottom: 1px solid #f0f0f0; }
}
@media (max-width: 575px) {
    .od-hero__content h1 { font-size: 22px; }
    .od-serv-card { padding: 22px 18px; }
}
</style>

<!-- ═══════════════════ HERO ═══════════════════ -->
<section class="od-hero" style="background-image: url('<?= $B ?>/assets/images/ondemand/banner-demand.webp'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="od-hero__content">
                    <h1>On Demand App Development Company</h1>
                    <p>ArtisticWebServices, a top-tier development company which offers on demand app development services to help you turn your ideas into reality. We offer apps that are distinctive, scalable, and feature-rich, tailored to your specific company requirements.</p>
                    <ul>
                        <li><i class="fa-solid fa-circle-check"></i> Custom On-Demand Platform Development</li>
                        <li><i class="fa-solid fa-circle-check"></i> Real-Time Tracking &amp; Payment Integration</li>
                        <li><i class="fa-solid fa-circle-check"></i> B2B &amp; B2C On-Demand Solutions for Any Industry</li>
                    </ul>
                    <a href="<?= $B ?>/contact.php" class="btn btn-danger rounded-2 me-3 mt-2 px-4 py-2 fw-bold">Get Your Free Quote</a>
                    <a href="<?= $B ?>/contact.php" class="btn btn-outline-light rounded-2 mt-2 px-4 py-2 fw-bold">Book a Call</a>
                </div>
            </div>
            <div class="col-lg-5 d-flex justify-content-center od-hero__img mt-4 mt-lg-0">
                <img src="<?= $B ?>/assets/images/mobile-app/on-demand.webp" class="img-fluid" alt="On Demand App Development">
                <div class="od-badge-row">
                    <div class="od-badge">
                        <p>5/5 Stars</p>
                        <img class="img-fluid" src="<?= $B ?>/assets/images/awards/clutch-logo-2D745B01F0-seeklogo.com.webp" alt="clutch">
                    </div>
                    <div class="od-badge">
                        <p>Top Rated</p>
                        <img class="img-fluid" src="<?= $B ?>/assets/images/awards/trustpilot-logo.webp" alt="trustpilot">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════ ACHIEVEMENTS STRIP ═══════════════════ -->
<section class="od-achievements">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="od-achievements-title py-3">
                    <h2>Our Achievements</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="od-achievements-row">
                    <div class="od-achv-box">
                        <div class="achivment_img">
                            <img class="img-fluid" src="<?= $B ?>/assets/images/01-clutch.webp" alt="Clutch">
                        </div>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span>4.9</span>
                        </div>
                        <p>Top On-Demand App Company</p>
                    </div>
                    <div class="od-achv-box">
                        <div class="achivment_img">
                            <img class="img-fluid" src="<?= $B ?>/assets/images/02-goodfirm.webp" alt="GoodFirms">
                        </div>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span>4.8</span>
                        </div>
                        <p>Top Mobile App Developer</p>
                    </div>
                    <div class="od-achv-box">
                        <div class="achivment_img">
                            <img class="img-fluid" src="<?= $B ?>/assets/images/03-designrush.webp" alt="DesignRush">
                        </div>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span>4.7</span>
                        </div>
                        <p>Best App Dev Agency</p>
                    </div>
                    <div class="od-achv-box">
                        <div class="achivment_img">
                            <img class="img-fluid" src="<?= $B ?>/assets/images/04-top-developers.webp" alt="TopDevelopers">
                        </div>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span>4.9</span>
                        </div>
                        <p>Top Mobile Developers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════ TRUSTED LOGOS ═══════════════════ -->
<section class="od-trusted">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="od-trusted-label">
                    <h4>TRUSTED BY LEADERS FOR ON DEMAND APP DEVELOPMENT</h4>
                </div>
            </div>
            <div class="col-md-9 text-center">
                <img class="img-fluid" src="<?= $B ?>/assets/images/trusted_logos_desktop.webp" alt="Trusted partners">
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════ MARKET STATS ═══════════════════ -->
<section class="od-stats">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-4">
                <div class="od-stat-box">
                    <h2>$335 Billion</h2>
                    <p>The global on-demand economy is valued at over $335 billion, growing rapidly as consumers demand instant, seamless service delivery.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="od-stat-box">
                    <h2>49% CAGR</h2>
                    <p>On-demand services are projected to grow at a 49% compound annual growth rate, presenting massive opportunities for businesses.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="od-stat-box">
                    <h2>22.4 Million</h2>
                    <p>Over 22.4 million people use on-demand economy services every year in the US alone, driving unprecedented demand for mobile apps.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════ ON-DEMAND SERVICES ═══════════════════ -->
<section class="od-services">
    <div class="container">
        <div class="od-services-head">
            <h2>Transforming Ideas into <span style="color:#d31923;">On-Demand Apps</span> with ArtisticWebServices</h2>
            <p>ArtisticWebServices allows you to seek solutions for your business in any industry sector. Our team of professional on demand app developers can assist you in creating an app that meets your client's expectations — whether B2B or B2C.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-taxi"></i></div>
                    <h4>On-Demand Taxi Service</h4>
                    <p>We provide taxi booking apps that are easy for clients to use, similar to Uber with tracking, customer support, and multiple payment options.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-utensils"></i></div>
                    <h4>On-Demand Food Service</h4>
                    <p>Our skilled app developers can help you take your business to the next level by building an on-demand food or grocery delivery app.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-user-md"></i></div>
                    <h4>Doctor On-Demand Service</h4>
                    <p>On-demand doctor appointment booking apps facilitate greater communication between patients and doctors, handling appointments and medical consultations.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-home"></i></div>
                    <h4>On-Demand Home Services</h4>
                    <p>High-demand home services apps allow homeowners to hire specialists. If you are a home service provider, consider creating an app similar to TaskRabbit.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-tshirt"></i></div>
                    <h4>Laundry On Demand</h4>
                    <p>Customers can use laundry apps to have their clothes washed or dry cleaned. Capitalize on this trend by creating an on-demand washing application.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-shipping-fast"></i></div>
                    <h4>Courier On Demand</h4>
                    <p>Run your courier business seamlessly with a courier on demand application. Use the app to easily track all of your activities and develop a profitable business.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-shopping-basket"></i></div>
                    <h4>On Demand Grocery Delivery</h4>
                    <p>Our grocery on demand app developers can assist you in starting an online grocery business and help customers find and order items they require instantly.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-car"></i></div>
                    <h4>On Demand Car Wash</h4>
                    <p>The on-demand car wash business is fast expanding. Create an app for your startup and offer a range of services including personalization options.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <h4>On Demand Tutor App</h4>
                    <p>The education industry is evolving with advanced techniques. Innovative mobile app solutions allow tutors and students to exchange knowledge seamlessly.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-video"></i></div>
                    <h4>On Demand Video Streaming</h4>
                    <p>The on-demand video streaming sector is one of the largest segments of the mobile app development industry. A video streaming app is the greatest solution for a startup.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-seedling"></i></div>
                    <h4>On Demand Flower Delivery</h4>
                    <p>Take your connected business to the next level with significant on demand app development. Get a custom flower delivery app built to your specifications.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-pills"></i></div>
                    <h4>On Demand Medicine Delivery</h4>
                    <p>Pharmaceutical delivery apps let users get fast medical consultations and obtain drugs. Create an on demand medicine delivery app to grow your medical practice.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-dumbbell"></i></div>
                    <h4>On Demand Fitness</h4>
                    <p>Whether a fitness coach or business owner, an on-demand fitness app can help you build strong relationships with your students and clients effectively.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-heart"></i></div>
                    <h4>On Demand Dating</h4>
                    <p>Dating apps like Tinder and Bumble are widely used by millions. On-demand dating applications are a profitable industry — we can build one for you.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-wallet"></i></div>
                    <h4>On Demand eWallet</h4>
                    <p>An eWallet app with high-end features and technology can improve the user experience. We create and incorporate it into the current system based on your specifications.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-serv-card">
                    <div class="od-icon"><i class="fas fa-thumbs-up"></i></div>
                    <h4>On Demand Social Media</h4>
                    <p>A lot of people utilize social networking apps to share their ideas, photos, and videos. By releasing a custom social media app from ArtisticWebServices, you can grow your reach.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════ WHY ON DEMAND ═══════════════════ -->
<section class="od-why">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-5">
                <div class="od-why-img">
                    <img src="<?= $B ?>/assets/images/ondemand/demand-02.webp" class="img-fluid" alt="Why On Demand App Development Drives Innovation">
                </div>
            </div>
            <div class="col-md-7">
                <div class="od-why-content">
                    <h2>Why On Demand App Development Drives Business Innovation?</h2>
                    <p>Apps have effectively conquered many company divisions and continue to inspire others. ArtisticWebServices, an on demand app development company, is here to give a simple solution for all business sectors. The apps are designed to meet all of the company's requirements for remaining in the race and contributing more to the economy.</p>
                    <p>Our on demand app developers build solutions that connect your business with millions of potential customers across the world — delivering convenience, speed, and reliability.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════ INNOVATIVE SOLUTIONS ═══════════════════ -->
<section class="od-solutions">
    <div class="container">
        <div class="od-solutions-head">
            <h2>Innovative On-Demand Software Solutions <span style="color:#d31923;">Tailored for You</span></h2>
            <p>Explore your on demand application solution with our well-versed team of experts, who provide top-notch on demand app development services ranging from design to delivery of trustworthy and user-friendly apps appropriate for the continuous trending on-demand market.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="od-sol-card">
                    <h4>On-Demand App Development</h4>
                    <p>With sophisticated apps on demand designed by dedicated developers, you can stay ahead of the competition. Our top-tier solutions are scalable and provide great application performance in a continually changing market.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-sol-card">
                    <h4>On-Demand Software Development</h4>
                    <p>Scale your business with the greatest on demand app development company in the United States. Our complete services handle all technical requirements while maintaining reliability and user-centric design.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-sol-card">
                    <h4>On-Demand Web Development</h4>
                    <p>For web solutions, contact a respected on-demand app development company. We specialize in creating high-performing, scalable websites for the global on-demand services business.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-sol-card">
                    <h4>UI/UX Design Support</h4>
                    <p>Explore our popular design experience, known as one of the top custom on demand app development companies in the United States. Our skilled designers produce user-centered UI and UX designs to improve performance.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-sol-card">
                    <h4>On-Demand Consulting</h4>
                    <p>We offer best-in-class on-demand solution consulting from inception to launch and take top advantage of our expertise to create scalable and successful products for clients globally.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-sol-card">
                    <h4>Maintenance and Support</h4>
                    <p>At ArtisticWebServices, building on-demand solutions is not it — we also provide comprehensive support and maintenance to help you take your business to the next level in this competitive market.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════ ESSENTIAL FEATURES (TABS) ═══════════════════ -->
<section class="od-features">
    <div class="container">
        <div class="od-features-head">
            <h2>Essential Features That Make On-Demand Mobile Apps Stand Out</h2>
            <p>Intuitive features and functionalities are the most important components that make an application effective and capture the attention of your targeted audience. Our on demand app developers incorporate the greatest and most distinctive features into each mobile app.</p>
        </div>
        <ul class="nav od-tabs-nav" id="featTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="cp-tab" data-bs-toggle="tab" data-bs-target="#cpPanel" type="button" role="tab">Customer Panel</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="vp-tab" data-bs-toggle="tab" data-bs-target="#vpPanel" type="button" role="tab">Vendor Panel</button>
            </li>
        </ul>
        <div class="tab-content" id="featTabsContent">
            <!-- Customer Panel -->
            <div class="tab-pane fade show active" id="cpPanel" role="tabpanel">
                <div class="row g-3">
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-user-plus"></i></div>
                            <h4>User Registration</h4>
                            <p>Users can easily sign-up and create their profile by adding their name, address, phone number and other details.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-bell"></i></div>
                            <h4>Push Notifications</h4>
                            <p>This tool keeps consumers informed and updated on current deals, discounts, and other services in real time.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-credit-card"></i></div>
                            <h4>Multiple Payment Options</h4>
                            <p>Giving users multiple payment options into on-demand mobile apps simplifies and streamlines online transactions.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <h4>Geo Location</h4>
                            <p>An on-demand mobile app's geo-location feature, when properly activated, assists users in locating local services.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-tags"></i></div>
                            <h4>Offers &amp; Deals</h4>
                            <p>An attention-grabbing element of a mobile app that can help businesses capture and retain their customers' attention.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-shopping-cart"></i></div>
                            <h4>Place Order</h4>
                            <p>After selecting a product or item, users may easily place an order and receive online assistance promptly.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-headset"></i></div>
                            <h4>Assistance &amp; Support</h4>
                            <p>This tool allows customers to receive expert guidance and support in the event of a payment-related query, among other things.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-star"></i></div>
                            <h4>Feedback &amp; Review</h4>
                            <p>Users can provide useful feedback based on their experience with on-demand mobile app services, helping businesses thrive.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vendor Panel -->
            <div class="tab-pane fade" id="vpPanel" role="tabpanel">
                <div class="row g-3">
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-tachometer-alt"></i></div>
                            <h4>Dashboard</h4>
                            <p>Logging into the dashboard allows users to access all on-demand app operations from both the user and vendor sides.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-map"></i></div>
                            <h4>Real-Time Tracking</h4>
                            <p>This functionality allows the administrator to track and control deliverables in real time while maintaining smooth online services.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-dollar-sign"></i></div>
                            <h4>Manage Pricing</h4>
                            <p>Control all of your online pricing, and any changes will be instantly reflected in the user panel across all devices.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-chart-bar"></i></div>
                            <h4>Advanced-Data Analytics</h4>
                            <p>This functionality allows the administrator to identify consumer behaviour, monitor dispatches, and manage daily orders.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-route"></i></div>
                            <h4>Track Activities</h4>
                            <p>The administrator can use this function to keep track of all drivers and other online actions at once, in real time.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-money-check-alt"></i></div>
                            <h4>Manage Payments</h4>
                            <p>Incorporating this capability into a mobile app allows administrators to manage all payments digitally and efficiently.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-history"></i></div>
                            <h4>Order History</h4>
                            <p>This feature allows the administrator to keep track of all prior and upcoming orders for further planning and preparation.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="od-feat-card">
                            <div class="od-feat-icon"><i class="fas fa-life-ring"></i></div>
                            <h4>Assistance &amp; Support</h4>
                            <p>This feature is essential for resolving any client inquiries and issues, and it can be automated or handled manually.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════ ACCORDION + IMAGE ═══════════════════ -->
<section class="od-accordion">
    <div class="container">
        <div class="od-accordion-head">
            <h2>Key Capabilities of Our On-Demand App Platform</h2>
            <p>From scheduling appointments to real-time tracking and payments, our on-demand apps are packed with powerful capabilities that drive engagement and business growth.</p>
        </div>
        <div class="row align-items-center g-5">
            <div class="col-md-4">
                <div class="od-acc-img">
                    <img id="tabImage" src="<?= $B ?>/assets/images/ondemand/03_appointment-1.webp" class="img-fluid" alt="On Demand App Features">
                </div>
            </div>
            <div class="col-md-8">
                <div class="accordion" id="odAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#odCollapse1" aria-expanded="true">
                                <i class="fas fa-calendar-check me-3" style="color:#d31923;"></i> Scheduling &amp; Managing Appointments
                            </button>
                        </h2>
                        <div id="odCollapse1" class="accordion-collapse collapse show" data-bs-parent="#odAccordion">
                            <div class="accordion-body">Allow your users to book or organize a service with only a few clicks. App users can save a lot of time and effort by booking a cab or ordering food instantly.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#odCollapse2">
                                <i class="fas fa-map-marked-alt me-3" style="color:#d31923;"></i> Order Tracking
                            </button>
                        </h2>
                        <div id="odCollapse2" class="accordion-collapse collapse" data-bs-parent="#odAccordion">
                            <div class="accordion-body">We offer apps with an easy-to-use interface that allows your customers to explore the digital menu, place orders fast, and track them using picture-in-picture functionality.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#odCollapse3">
                                <i class="fas fa-percent me-3" style="color:#d31923;"></i> Promotions &amp; Discounts
                            </button>
                        </h2>
                        <div id="odCollapse3" class="accordion-collapse collapse" data-bs-parent="#odAccordion">
                            <div class="accordion-body">Keep your consumers informed about the most recent discounts, intriguing deals, order status, and new products. We offer a push notification option to tell clients about promotions on time.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#odCollapse4">
                                <i class="fas fa-location-arrow me-3" style="color:#d31923;"></i> Geolocation
                            </button>
                        </h2>
                        <div id="odCollapse4" class="accordion-collapse collapse" data-bs-parent="#odAccordion">
                            <div class="accordion-body">This function brings zero communication bridge between the user and the on-demand companion while allowing them to swiftly discover one another on maps and in their respective places.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#odCollapse5">
                                <i class="fas fa-credit-card me-3" style="color:#d31923;"></i> In-app Payments &amp; POS Integrations
                            </button>
                        </h2>
                        <div id="odCollapse5" class="accordion-collapse collapse" data-bs-parent="#odAccordion">
                            <div class="accordion-body">We create apps that accept a variety of payment methods, including debit/credit cards, PayPal, iOS wallet, Stripe, online banking, and other COD options with a safe payment experience.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#odCollapse6">
                                <i class="fas fa-star me-3" style="color:#d31923;"></i> Ratings and Reviews System
                            </button>
                        </h2>
                        <div id="odCollapse6" class="accordion-collapse collapse" data-bs-parent="#odAccordion">
                            <div class="accordion-body">Interactive reviews and rating systems encourage client participation while also helping business owners evaluate consumer behavior and make required changes.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#odCollapse7">
                                <i class="fas fa-bell me-3" style="color:#d31923;"></i> Real-time Email &amp; Push Notifications
                            </button>
                        </h2>
                        <div id="odCollapse7" class="accordion-collapse collapse" data-bs-parent="#odAccordion">
                            <div class="accordion-body">Users can easily track and manage deliveries by using real-time tracking of the location for their individual orders. Users will be notified about unique discounts and offers to encourage app usage.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#odCollapse8">
                                <i class="fas fa-chart-line me-3" style="color:#d31923;"></i> Advanced Analytics &amp; Reports
                            </button>
                        </h2>
                        <div id="odCollapse8" class="accordion-collapse collapse" data-bs-parent="#odAccordion">
                            <div class="accordion-body">Get a eagle's eye perspective of user activity including number of bookings, commissions made, most visited locations and more. Check advanced reports to learn about areas that need to be improved.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#odCollapse9">
                                <i class="fas fa-share-alt me-3" style="color:#d31923;"></i> Social Media Integration
                            </button>
                        </h2>
                        <div id="odCollapse9" class="accordion-collapse collapse" data-bs-parent="#odAccordion">
                            <div class="accordion-body">Connect multiple social media platforms with loyalty, discount, and referral programs to increase traction and allow existing customers to earn points and prizes.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════ CASE STUDIES ═══════════════════ -->
<section class="od-case">
    <div class="container">
        <div class="od-case-head">
            <h2>Our Featured <span style="color:#d31923;">Case Studies</span></h2>
            <p>Explore real-world on-demand solutions we have built for our clients across various industries and geographies.</p>
        </div>
        <div class="case-slider-realstate">
            <section class="case-studies-slider">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="slide active">
                            <div class="slide-image">
                                <img src="<?= $B ?>/assets/images/realstate/01-slider.webp" alt="Instant Realtor">
                            </div>
                            <div class="slide-content">
                                <h3>Instant Realtor</h3>
                                <p>Discover a home you love and learn about the realtor's experience, all while receiving real-time updates. Developing a trusting relationship between the realtor and the customer.</p>
                                <div class="case-all-download">
                                    <div class="download-pera"><h3>Downloads</h3><p>10K+</p></div>
                                    <div class="download-pera"><h3>Country</h3><p>USA</p></div>
                                    <div class="download-pera"><h3>Rating</h3><p>4.4/5</p></div>
                                </div>
                                <div class="case_btn"><a href="<?= $B ?>/services/case-studies#work-showcase">See More</a></div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-image">
                                <img src="<?= $B ?>/assets/images/realstate/02-slider.webp" alt="Roof Contractor">
                            </div>
                            <div class="slide-content">
                                <h3>Roof Contractor</h3>
                                <p>Give your family the security and safety that they deserve under the roof constructed with love and care.</p>
                                <div class="case-all-download">
                                    <div class="download-pera"><h3>Downloads</h3><p>10K+</p></div>
                                    <div class="download-pera"><h3>Country</h3><p>Saudi Arabia</p></div>
                                    <div class="download-pera"><h3>Rating</h3><p>4.4/5</p></div>
                                </div>
                                <div class="case_btn"><a href="<?= $B ?>/services/case-studies#work-showcase">See More</a></div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-image">
                                <img src="<?= $B ?>/assets/images/realstate/03-slider.webp" alt="Rubberworx">
                            </div>
                            <div class="slide-content">
                                <h3>Rubberworx</h3>
                                <p>The Rubberworx Mobile App is a groundbreaking solution that blends the magic of augmented truth and synthetic intelligence to redefine the way you discover rubber flooring alternatives.</p>
                                <div class="case-all-download">
                                    <div class="download-pera"><h3>Downloads</h3><p>9.1K+</p></div>
                                    <div class="download-pera"><h3>Country</h3><p>New York</p></div>
                                    <div class="download-pera"><h3>Rating</h3><p>4.4/5</p></div>
                                </div>
                                <div class="case_btn"><a href="<?= $B ?>/services/case-studies#work-showcase">See More</a></div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-image">
                                <img src="<?= $B ?>/assets/images/realstate/04-slider.webp" alt="Property & Apartment Swaps">
                            </div>
                            <div class="slide-content">
                                <h3>Property &amp; Apartment Swaps</h3>
                                <p>Property Exchange App developed by us has the most unique Property Exchange concept all over India. Users only need to enter their real estate — residential, commercial, or land — in the exchange app.</p>
                                <div class="case-all-download">
                                    <div class="download-pera"><h3>Downloads</h3><p>10K+</p></div>
                                    <div class="download-pera"><h3>Country</h3><p>USA</p></div>
                                    <div class="download-pera"><h3>Rating</h3><p>4.4/5</p></div>
                                </div>
                                <div class="case_btn"><a href="<?= $B ?>/services/case-studies#work-showcase">See More</a></div>
                            </div>
                        </div>
                    </div>
                    <button class="prev-btn" aria-label="Previous slide"></button>
                    <button class="next-btn" aria-label="Next slide"></button>
                    <div class="slider-icons-wrapper">
                        <div class="slider-icons" style="display: flex; scroll-behavior: smooth;">
                            <span class="icon active" data-slide="0"><img src="<?= $B ?>/assets/images/realstate/Instant-Realtor-logo.webp" alt="Instant Realtor"></span>
                            <span class="icon" data-slide="1"><img src="<?= $B ?>/assets/images/realstate/Horizon%20Roofing-logo.webp" alt="Roof Contractor"></span>
                            <span class="icon" data-slide="2"><img src="<?= $B ?>/assets/images/realstate/Rubberwork-logo.webp" alt="Rubberworx"></span>
                            <span class="icon" data-slide="3"><img src="<?= $B ?>/assets/images/realstate/HouseSigma.webp" alt="Property Swaps"></span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<!-- ═══════════════════ TECH STACK ═══════════════════ -->
<section class="od-tech">
    <div class="container">
        <div class="od-tech-head">
            <h2>Powerful Tech Stacks <span style="color:#d31923;">Driving On Demand</span> App Development</h2>
            <p>Every successful on-demand app is backed by a strong technical stack. At ArtisticWebServices, our talented team combines cutting-edge technology to deliver seamless user experiences and accelerate corporate success.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="od-platform-box">
                    <h4>Blockchain Platforms</h4>
                    <ul>
                        <li><img src="<?= $B ?>/assets/images/realstate/bp-tech-img-1.webp" alt="Ethereum"><p>Ethereum</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/bp-tech-img-2.webp" alt="Multichain"><p>Multichain</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/bp-tech-img-3.webp" alt="Wax"><p>Wax</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/bp-tech-img-4.webp" alt="Cortana"><p>Cortana</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-platform-box">
                    <h4>Front-end Frameworks</h4>
                    <ul>
                        <li><img src="<?= $B ?>/assets/images/realstate/ff-tech-img-1.webp" alt="React"><p>React</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/ff-tech-img-2.webp" alt="Angular"><p>Angular</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/ff-tech-img-3.webp" alt="Vue.js"><p>Vue.js</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/ff-tech-img-4.webp" alt="VanillaJs"><p>VanillaJs</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-platform-box">
                    <h4>Programming Languages</h4>
                    <ul>
                        <li><img src="<?= $B ?>/assets/images/realstate/pl-tech-img-1.webp" alt="Golang"><p>Golang</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/pl-tech-img-2.webp" alt="C++"><p>C++</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/pl-tech-img-3.webp" alt="Python"><p>Python</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/pl-tech-img-4.webp" alt="Php"><p>PHP</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-platform-box">
                    <h4>NFT Standards</h4>
                    <ul>
                        <li><img src="<?= $B ?>/assets/images/realstate/ns-tech-img-1.webp" alt="Ethereum"><p>Ethereum</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/ns-tech-img-2.webp" alt="dGoods"><p>dGoods</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/ns-tech-img-3.webp" alt="TRC-721"><p>TRC-721</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/ns-tech-img-4.webp" alt="BEP-20"><p>BEP-20</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-platform-box">
                    <h4>Cloud Platforms</h4>
                    <ul>
                        <li><img src="<?= $B ?>/assets/images/realstate/cp-tech-img-1.webp" alt="AWS"><p>AWS</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/cp-tech-img-2.webp" alt="IBM Bluemix"><p>IBM Bluemix</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/cp-tech-img-3.webp" alt="ETH BAAS"><p>ETH BAAS</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/cp-tech-img-4.webp" alt="Kaleido"><p>Kaleido</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-platform-box">
                    <h4>Storage Platforms</h4>
                    <ul>
                        <li><img src="<?= $B ?>/assets/images/realstate/sp-tech-img-1.webp" alt="IPFS"><p>IPFS</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/sp-tech-img-2.webp" alt="Filecoin"><p>Filecoin</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/sp-tech-img-3.webp" alt="MongoDB"><p>MongoDB</p></li>
                        <li><img src="<?= $B ?>/assets/images/realstate/sp-tech-img-4.webp" alt="CouchDB"><p>CouchDB</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════ WHY US ═══════════════════ -->
<section class="od-why-us">
    <div class="container">
        <div class="od-why-us-head">
            <h2>Why ArtisticWebServices is Your <span style="color:#d31923;">Ultimate Choice</span> for Custom On Demand App Development?</h2>
            <p>ArtisticWebServices specializes in providing unparalleled on demand app development services that help on-demand businesses get connected with their millions of potential customers across the world.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="od-choice-card">
                    <div class="od-choice-icon"><i class="fas fa-rocket"></i></div>
                    <h4>Seamless App Launch</h4>
                    <p>Simply launch your personalized app on major app stores. No technological expertise is required, just rapid deployment and results.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-choice-card">
                    <div class="od-choice-icon"><i class="fas fa-users"></i></div>
                    <h4>Drive Customer Engagement</h4>
                    <p>Keep customers engaged with innovative push notifications. A streamlined engagement strategy can increase sales while decreasing stress.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-choice-card">
                    <div class="od-choice-icon"><i class="fas fa-life-ring"></i></div>
                    <h4>Rescue Lost Opportunities</h4>
                    <p>Dumped carts can be recovered and missed sales by targeting reminders and offers to turn potential losses into profits.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-choice-card">
                    <div class="od-choice-icon"><i class="fas fa-award"></i></div>
                    <h4>Boost Brand Loyalty</h4>
                    <p>Loyal customers are rewarded with benefits, motivating them to purchase more often and develop never-ending relationships with your brand.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-choice-card">
                    <div class="od-choice-icon"><i class="fas fa-globe-americas"></i></div>
                    <h4>Tap into New Markets</h4>
                    <p>Use on-demand apps solutions to enter new markets and industrial areas. Reach a larger audience by localizing what you are offering.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="od-choice-card">
                    <div class="od-choice-icon"><i class="fas fa-lightbulb"></i></div>
                    <h4>Innovate for Growth</h4>
                    <p>Create one-of-a-kind experiences by developing on-demand apps continuously and solve challenges, open up new revenue streams to fuel growth.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════ HOW IT WORKS ═══════════════════ -->
<section class="od-steps">
    <div class="container">
        <div class="od-steps-head">
            <h2>How Our On-Demand App Development Platform Powers Your Business?</h2>
            <p>The on demand app development platform provides a streamlined method that allows you to respond to all customer demands while providing convenient and immediate services.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="od-step-card">
                    <div class="od-step-num"><span>01</span></div>
                    <p>Customers will use the app to explore orders or service requests and select the ones they want.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="od-step-card">
                    <div class="od-step-num"><span>02</span></div>
                    <p>Additionally, they must check out and pay using the platform's accessible payment methods.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="od-step-card">
                    <div class="od-step-num"><span>03</span></div>
                    <p>The request will be received by the respective outlet/dispatcher, who will then assign providers to complete the work.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="od-step-card">
                    <div class="od-step-num"><span>04</span></div>
                    <p>On the app, providers will receive a request to accomplish the allocated task within the specified time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════ FAQ ═══════════════════ -->
<section class="od-faq">
    <div class="container">
        <div class="od-faq-head">
            <h2>Frequently Asked <span style="color:#d31923;">Questions</span></h2>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="accordion" id="odFaqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">
                                <div class="row w-100"><div class="col-1" style="color:#d31923;font-weight:800;">01</div><div class="col-11">What is on-demand mobile app development?</div></div>
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#odFaqAccordion">
                            <div class="accordion-body"><div class="row"><div class="col-1"></div><div class="col-10">On-demand mobile app development involves creating applications that provide services or products instantly, based on user requests, through a seamless digital experience.</div></div></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                <div class="row w-100"><div class="col-1" style="color:#d31923;font-weight:800;">02</div><div class="col-11">What are the key features of an on-demand app?</div></div>
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#odFaqAccordion">
                            <div class="accordion-body"><div class="row"><div class="col-1"></div><div class="col-10">Key features often include real-time tracking, secure payment gateways, push notifications, user profiles, service booking, ratings and reviews, and location-based services.</div></div></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                <div class="row w-100"><div class="col-1" style="color:#d31923;font-weight:800;">03</div><div class="col-11">How much does it cost to develop an on-demand mobile app?</div></div>
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#odFaqAccordion">
                            <div class="accordion-body"><div class="row"><div class="col-1"></div><div class="col-10">The cost of developing an on-demand app depends on factors such as complexity, features, platform (iOS/Android), design, and development time. A detailed consultation is required for an accurate estimate.</div></div></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                <div class="row w-100"><div class="col-1" style="color:#d31923;font-weight:800;">04</div><div class="col-11">How long does it take to develop an on-demand mobile app?</div></div>
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#odFaqAccordion">
                            <div class="accordion-body"><div class="row"><div class="col-1"></div><div class="col-10">The development time varies based on the app's complexity and features. On average, it can take anywhere from 2 to 6 months to develop a fully functional on-demand app.</div></div></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                <div class="row w-100"><div class="col-1" style="color:#d31923;font-weight:800;">05</div><div class="col-11">What industries can benefit from on-demand app development?</div></div>
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#odFaqAccordion">
                            <div class="accordion-body"><div class="row"><div class="col-1"></div><div class="col-10">On-demand apps can benefit industries such as transportation (ride-sharing), food delivery, healthcare, beauty services, home services, logistics, and many others.</div></div></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                <div class="row w-100"><div class="col-1" style="color:#d31923;font-weight:800;">06</div><div class="col-11">How can I ensure the security of my on-demand app?</div></div>
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#odFaqAccordion">
                            <div class="accordion-body"><div class="row"><div class="col-1"></div><div class="col-10">Ensuring app security involves integrating SSL encryption, secure payment gateways, user data protection, two-factor authentication, and regular security updates.</div></div></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                                <div class="row w-100"><div class="col-1" style="color:#d31923;font-weight:800;">07</div><div class="col-11">Can I scale my on-demand app as my business grows?</div></div>
                            </button>
                        </h2>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#odFaqAccordion">
                            <div class="accordion-body"><div class="row"><div class="col-1"></div><div class="col-10">Yes, on-demand apps can be easily scaled by adding new features, expanding to additional platforms, and integrating with third-party services to meet growing business demands.</div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════ CONTACT CTA ═══════════════════ -->
<section class="od-contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-4 mb-xl-0">
                <div class="od-contact-left">
                    <p class="fw-semibold text-muted mb-1" style="font-size:15px;letter-spacing:0.5px;">Collaborate with</p>
                    <h2>Our Team</h2>
                    <p>Want to find out how on-demand app development can be helpful for your business? Looking forward to hearing from you.</p>
                    <strong>Foster Innovation with Integration</strong>
                    <p>Team Up With Our Expert On-Demand App Developers to Launch, and Grow Your Business Globally.</p>
                    <h3>Contact Info:</h3>
                    <ul>
                        <li><a href="mailto:info@artisticwebservices.com"><img src="<?= $B ?>/assets/images/fitness/email.svg" alt="email"> info@artisticwebservices.com</a></li>
                        <li><a href="tel:+12137147176"><img src="<?= $B ?>/assets/images/fitness/USA-Flag.svg" alt="USA"> (213) 714-7176</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="od-contact-form">
                    <div class="row">
                        <?php require_once __DIR__ . '/../includes/form-quote.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
            return re.test(email);
        }

        function validatePhoneNumber(phone) {
            var re = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
            return re.test(phone);
        }

        if (first_name.trim() == "") { $('#name-valid').text("Please enter your first name"); return false; } else { $('#name-valid').text(""); }
        if (last_name.trim() == "") { $('#name-valid2').text("Please enter your last name"); return false; } else { $('#name-valid2').text(""); }
        if (email.trim() == "") { $('#email-valid').text("Please enter your email"); return false; } else { $('#email-valid').text(""); }
        if (!validateEmail(email)) { $('#email-valid').text("Please enter your valid email"); return false; } else { $('#email-valid').text(""); }
        if (phone.trim() == "") { $('#phone-valid').text("Please enter your phone"); return false; }
        else if (!validatePhoneNumber(phone)) { $('#phone-valid').text("Invalid phone number: (012)-345-6789"); return false; }
        else { $('#phone-valid').text(""); }
        if (!selectedOptions || selectedOptions.length === 0) { $('#project-valid').text("Please select at least one option"); return false; } else { $('#project-valid').text(""); }
        if (captcha.trim() == "") { $('#captcha-valid').text("Please validate your captcha"); return false; }
        else if (captcha != captcha_answer) { $('#captcha-valid').text("Invalid captcha"); return false; }
        else { $('#captcha-valid').text(""); }

        $("#contact")[0].submit();
        return false;
    });
});

$('#phone').on("keypress", function (e) {
    var regex = new RegExp("^[a-zA-Z]+$");
    var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(key)) { e.preventDefault(); return false; }
    if (e.keyCode == 8) return;
    let val = $(this).val();
    if (val.length == 3) { $('#phone').val("(" + $('#phone').val() + ")-"); }
    if (val.length == 9) { $('#phone').val($('#phone').val() + "-"); }
});
</script>
<script src="https://www.google.com/recaptcha/api.js"></script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>
