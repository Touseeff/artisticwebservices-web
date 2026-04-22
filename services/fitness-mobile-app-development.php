<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'Fitness App Development Company USA | Health &amp; Wellness Apps — ArtisticWebServices';
$page_description = 'Build feature-rich fitness and wellness apps with ArtisticWebServices. Workout trackers, diet planners, personal training apps, and wearable integrations for USA market.';
$page_keywords = 'fitness app development USA, workout app development, health tracking app, wellness app development company, personal trainer app';
$page_breadcrumbs = [['name' => 'Services', 'url' => 'https://artisticwebservices.com/services'], ['name' => 'Fitness App Development', 'url' => 'https://artisticwebservices.com/services/fitness-mobile-app-development']];
$page_service_schema = ['name' => 'Fitness App Development', 'description' => 'Feature-rich fitness and wellness apps with workout tracking, nutrition planning, and wearable integration for USA market.'];
$page_faq = [
    ['q' => 'What features can be included in a fitness app?', 'a' => 'Our fitness apps can include workout tracking, meal planner, calorie counter, wearable integration (Apple Watch, Fitbit), live streaming workouts, personal trainer dashboard, in-app purchases, and social challenges.'],
    ['q' => 'Can you integrate wearable devices into a fitness app?', 'a' => 'Yes. ArtisticWebServices integrates Apple HealthKit, Google Fit, Fitbit, Garmin, and other wearable APIs into fitness and wellness mobile apps.']
];
$page_canonical = 'https://artisticwebservices.com/services/fitness-mobile-app-development';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservices-og.png';
$load_slick = true; // Sprint 2: load Slick only on pages that need it
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
   FITNESS APP DEVELOPMENT -- PAGE-SPECIFIC STYLES
   ================================================ */

/* -- Hero -- */
.location-hero { position: relative; padding: 100px 0 80px; background: #0a1628; overflow: hidden; }
.location-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(10,22,40,0.92) 0%, rgba(211,25,35,0.18) 100%); z-index: 1; }
.location-hero .container { position: relative; z-index: 2; }
.fintness__contents h1 { font-size: 42px; font-weight: 800; color: #fff; line-height: 1.25; margin-bottom: 18px; }
.fintness__contents p { font-size: 16px; color: rgba(255,255,255,0.85); line-height: 1.8; margin-bottom: 20px; }
.fintness__contents ul { list-style: none; padding: 0; margin: 0 0 28px; }
.fintness__contents ul li { color: rgba(255,255,255,0.9); font-size: 15px; padding: 6px 0; display: flex; align-items: center; gap: 10px; }
.fintness__contents ul li i { color: #d31923; font-size: 18px; }
.banner-image-container { position: relative; }
.animated-img { max-height: 480px; object-fit: contain; animation: floatUp 3s ease-in-out infinite alternate; }
@keyframes floatUp { from { transform: translateY(0); } to { transform: translateY(-14px); } }
.fitnes__text { position: absolute; bottom: 30px; left: 0; right: 0; display: flex; justify-content: center; gap: 24px; }
.left__fitness, .right__fitness { background: rgba(255,255,255,0.12); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); border-radius: 12px; padding: 12px 20px; text-align: center; min-width: 110px; }
.left__fitness p, .right__fitness p { color: #fff; font-size: 13px; font-weight: 600; margin: 0 0 6px; }
.awards-img { max-height: 28px; object-fit: contain; }

/* â”€â”€ Achievements Strip â”€â”€ */
.our-achievements { background: #fff; box-shadow: 0 4px 20px rgba(0,0,0,0.07); }
.achievements-title h2 { font-size: 22px; font-weight: 700; color: #0a1628; text-align: center; }
.achievements-boxs { display: flex; justify-content: center; flex-wrap: wrap; gap: 0; border-top: 1px solid #f0f0f0; }
.achivement__box { display: flex; flex-direction: column; align-items: center; padding: 20px 30px; border-right: 1px solid #f0f0f0; min-width: 180px; }
.achivement__box:last-child { border-right: none; }
.achivment_img img { max-height: 36px; object-fit: contain; margin-bottom: 8px; }
.achivement__box .rating { display: flex; align-items: center; gap: 4px; margin-bottom: 6px; }
.achivement__box .rating .fa-star.checked { color: #f5a623; }
.achivement__box .rating .fa-star { color: #ddd; }
.achivement__box .rating span:last-child { font-size: 15px; font-weight: 700; color: #333; margin-left: 4px; }
.achivement__box > p { font-size: 12px; color: #777; margin: 0; text-align: center; }

/* â”€â”€ Market Stats â”€â”€ */
.our-achievements .achivement_box { padding: 40px 20px; text-align: center; border-right: 1px solid #f0f0f0; height: 100%; }
.our-achievements .col-md-4:last-child .achivement_box { border-right: none; }
.achivement_box h2 { font-size: 30px; font-weight: 800; color: #d31923; margin-bottom: 12px; line-height: 1.2; }
.achivement_box p { font-size: 15px; color: #555; line-height: 1.7; margin: 0; }

/* â”€â”€ Services Section â”€â”€ */
.servicess { padding: 80px 0; background: #f8f9fc; }
.servicess__content { text-align: center; margin-bottom: 50px; }
.servicess__content h2 { font-size: 36px; font-weight: 800; line-height: 1.3; margin-bottom: 16px; }
.servicess__content p { font-size: 16px; color: #555; line-height: 1.8; max-width: 780px; margin: 0 auto; }
.serv_box { background: #fff; border-radius: 16px; padding: 32px 28px; margin-bottom: 24px; box-shadow: 0 4px 20px rgba(0,0,0,0.07); border-left: 4px solid #d31923; height: calc(100% - 24px); transition: transform 0.3s, box-shadow 0.3s; }
.serv_box:hover { transform: translateY(-6px); box-shadow: 0 10px 35px rgba(0,0,0,0.12); }
.serv_box h2 { font-size: 20px; font-weight: 700; color: #0a1628; margin-bottom: 12px; }
.serv_box p { font-size: 15px; color: #666; line-height: 1.7; margin: 0; }

/* â”€â”€ Tabs Section â”€â”€ */
.custtom-tabs { padding: 80px 0; background: #fff; }
.tab__title { text-align: center; margin-bottom: 40px; }
.tab__title h2 { font-size: 34px; font-weight: 800; color: #0a1628; line-height: 1.3; margin-bottom: 14px; }
.tab__title p { font-size: 16px; color: #555; max-width: 720px; margin: 0 auto; line-height: 1.8; }
#hoverTabs { border: none; justify-content: center; flex-wrap: wrap; gap: 8px; margin-bottom: 36px; }
#hoverTabs .nav-link { border: 2px solid #e0e0e0; border-radius: 50px; padding: 10px 24px; color: #555; font-weight: 600; font-size: 15px; transition: all 0.3s; background: #fff; }
#hoverTabs .nav-link.active, #hoverTabs .nav-link:hover { background: #d31923; border-color: #d31923; color: #fff; }
.tab__text { margin-bottom: 24px; }
.tab__text h2 { font-size: 26px; font-weight: 700; color: #0a1628; margin-bottom: 10px; }
.tab__text p { font-size: 15px; color: #666; line-height: 1.7; }
.tab__content { display: flex; align-items: flex-start; gap: 16px; padding: 16px 0; border-bottom: 1px solid #f0f0f0; }
.tab__content:last-child { border-bottom: none; }
.left-icon img { width: 44px; height: 44px; object-fit: contain; flex-shrink: 0; }
.right-text h4 { font-size: 16px; font-weight: 700; color: #0a1628; margin: 0 0 6px; }
.right-text p { font-size: 14px; color: #666; line-height: 1.6; margin: 0; }
.tab__img img { width: 100%; border-radius: 16px; box-shadow: 0 8px 40px rgba(0,0,0,0.12); }
.custtom_scroll { max-height: 520px; overflow-y: auto; padding-right: 12px; scrollbar-width: thin; }
.custtom_scroll::-webkit-scrollbar { width: 4px; }
.custtom_scroll::-webkit-scrollbar-thumb { background: #d31923; border-radius: 4px; }

/* â”€â”€ Dynamic Features Section â”€â”€ */
.dynamic-image-section { padding: 80px 0; background: #f8f9fc; }
.latest-technology-title { text-align: center; margin-bottom: 50px; }
.latest-technology-title h2 { font-size: 34px; font-weight: 800; color: #0a1628; line-height: 1.3; margin-bottom: 14px; }
.latest-technology-title p { font-size: 16px; color: #555; max-width: 720px; margin: 0 auto; line-height: 1.8; }
.left-items, .right-items { display: flex; flex-direction: column; gap: 16px; }
.left-item, .right-item { display: flex; align-items: center; gap: 14px; background: #fff; border-radius: 12px; padding: 16px 18px; box-shadow: 0 2px 12px rgba(0,0,0,0.07); cursor: pointer; transition: box-shadow 0.3s, transform 0.2s; border: 2px solid transparent; }
.left-item:hover, .right-item:hover, .left-item.active, .right-item.active { border-color: #d31923; box-shadow: 0 6px 24px rgba(211,25,35,0.15); transform: scale(1.02); }
.left-item { flex-direction: row-reverse; }
.text-left, .text-right { flex: 1; }
.text-left h4, .text-right h4 { font-size: 15px; font-weight: 700; color: #0a1628; margin: 0 0 4px; }
.text-left p, .text-right p { font-size: 13px; color: #666; line-height: 1.5; margin: 0; }
.text-left { text-align: right; }
.icon-left, .icon-right { width: 48px; height: 48px; flex-shrink: 0; }
.icon-left img, .icon-right img { width: 100%; height: 100%; object-fit: contain; }
.center-image-container { text-align: center; padding: 20px; }
#centerImage { max-height: 420px; width: auto; margin: 0 auto; filter: drop-shadow(0 20px 40px rgba(0,0,0,0.15)); transition: all 0.5s ease; }

/* â”€â”€ Latest Technology â”€â”€ */
.latest-technology { padding: 80px 0; background: #0a1628; }
.latest-technology .latest-technology-title h2 { color: #fff; }
.latest-technology .latest-technology-title p { color: rgba(255,255,255,0.75); }
.latest-technology-box { background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.12); border-radius: 16px; padding: 30px 24px; height: 100%; transition: background 0.3s, transform 0.3s; display: flex; flex-direction: column; }
.latest-technology-box:hover { background: rgba(255,255,255,0.14); transform: translateY(-6px); }
.latest-technology-box h4 { font-size: 20px; font-weight: 700; color: #fff; margin-bottom: 12px; }
.latest-technology-box p { font-size: 15px; color: rgba(255,255,255,0.75); line-height: 1.7; flex: 1; margin-bottom: 20px; }
.latest-technology-box img { width: 80px; height: 80px; object-fit: contain; margin-top: auto; }

/* â”€â”€ Best Choice Section â”€â”€ */
.best-choice { padding: 80px 0; background: #fff; }
.best-choice-title { text-align: center; margin-bottom: 50px; }
.best-choice-title h2 { font-size: 34px; font-weight: 800; color: #0a1628; line-height: 1.3; margin-bottom: 14px; }
.best-choice-title p { font-size: 16px; color: #555; max-width: 780px; margin: 0 auto; line-height: 1.8; }
.linee { width: 50px; height: 4px; background: #d31923; border-radius: 2px; margin-bottom: 24px; }
.choice-content { margin-bottom: 28px; padding-left: 16px; border-left: 3px solid #f0f0f0; transition: border-color 0.3s; }
.choice-content:hover { border-color: #d31923; }
.choice-content h4 { font-size: 18px; font-weight: 700; color: #0a1628; margin-bottom: 8px; }
.choice-content p { font-size: 15px; color: #666; line-height: 1.7; margin: 0; }

/* â”€â”€ Trust / Rely Section â”€â”€ */
.trust { padding: 80px 0; background: #f8f9fc; }
.trust-img img { width: 100%; max-height: 440px; object-fit: contain; }
.trust-content h2 { font-size: 34px; font-weight: 800; color: #0a1628; line-height: 1.3; margin-bottom: 16px; }
.trust-content p { font-size: 16px; color: #555; line-height: 1.8; margin-bottom: 24px; }
.clr_bg_tag { list-style: none; padding: 0; margin: 0; display: flex; flex-wrap: wrap; gap: 12px; }
.clr_bg_tag li { background: #0a1628; color: #fff; border-radius: 50px; padding: 8px 20px; font-size: 14px; font-weight: 600; transition: background 0.3s; }
.clr_bg_tag li:hover { background: #d31923; }
.d_flx { display: flex; }

/* â”€â”€ Tech Stack Tabs â”€â”€ */
.technologies-tabs { padding: 80px 0; background: #fff; }
.technologies-tabs-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
.technologies-tabs-container .tab__title { text-align: center; margin-bottom: 36px; }
.technologies-tabs-container .tab__title h2 { font-size: 34px; font-weight: 800; color: #0a1628; margin-bottom: 14px; }
.technologies-tabs-container .tab__title p { font-size: 16px; color: #555; max-width: 700px; margin: 0 auto; }
.technologies-tabs { display: flex; justify-content: center; flex-wrap: wrap; gap: 8px; margin-bottom: 36px; }
.technologies-tabs .tab { padding: 10px 22px; border: 2px solid #e0e0e0; border-radius: 50px; font-size: 14px; font-weight: 600; color: #555; cursor: pointer; transition: all 0.3s; }
.technologies-tabs .tab.active, .technologies-tabs .tab:hover { background: #d31923; border-color: #d31923; color: #fff; }
.slider-container .slider { display: none; overflow: hidden; }
.slider-container .slider.active { display: block; }
.marquee-content { display: flex; gap: 40px; animation: marqueeScroll 20s linear infinite; width: max-content; align-items: center; padding: 20px 0; }
@keyframes marqueeScroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
.marquee-content img { height: 52px; max-width: 120px; object-fit: contain; filter: grayscale(40%); transition: filter 0.3s; }
.marquee-content img:hover { filter: grayscale(0%); }

/* â”€â”€ Case Studies Slider â”€â”€ */
.custom_slider_section { padding: 80px 0; background: #f8f9fc; }
.custom_slider_section .best-choice-title { margin-bottom: 50px; }
.custtom___slide { padding: 40px; border-radius: 20px; }
.cl-yellow { background: linear-gradient(135deg, #fff8e1, #fff3cd); }
.cl-blue { background: linear-gradient(135deg, #e3f2fd, #bbdefb); }
.cl-red { background: linear-gradient(135deg, #fce4ec, #f8bbd0); }
.cus_slide_text { margin-bottom: 16px; }
.cus_slide_text h2 { font-size: 26px; font-weight: 800; color: #0a1628; display: flex; align-items: center; gap: 12px; }
.cus_slide_text h2 img { max-height: 32px; object-fit: contain; }
.custtom___slide > p, .custtom___slide .col-md-8 > p { font-size: 15px; color: #444; line-height: 1.8; margin-bottom: 24px; }
.cus_btns ul { list-style: none; padding: 0; margin: 0 0 24px; display: flex; gap: 30px; }
.cus_btns ul li span { font-size: 12px; font-weight: 600; color: #888; display: block; margin-bottom: 4px; text-transform: uppercase; letter-spacing: 0.5px; }
.cus_btns ul li p { font-size: 17px; font-weight: 700; color: #0a1628; margin: 0; display: flex; align-items: center; gap: 6px; }
.cus_btns ul li p img { height: 18px; width: auto; }
.social-anch ul { list-style: none; padding: 0; margin: 0; display: flex; gap: 12px; }
.social-anch ul li a img { height: 36px; width: auto; transition: opacity 0.3s; }
.social-anch ul li a:hover img { opacity: 0.7; }
.cus_slide_img img { width: 100%; max-height: 300px; object-fit: contain; border-radius: 12px; }
.slider.center .slick-slide { padding: 0 15px; }
.slick-prev:before, .slick-next:before { color: #d31923; font-size: 24px; }

/* â”€â”€ FAQ Section â”€â”€ */
.faqs-section { padding: 80px 0; background: #fff; }
.faqs-section .latest-technology-title h2 { font-size: 34px; }
.accordion-item { border: none; border-bottom: 1px solid #f0f0f0; margin-bottom: 0; }
.accordion-item:last-child { border-bottom: none; }
.accordion-button { font-size: 16px; font-weight: 600; color: #0a1628; background: #fff; padding: 20px 24px; box-shadow: none !important; }
.accordion-button:not(.collapsed) { color: #d31923; background: #fff5f5; }
.accordion-button::after { filter: none; }
.accordion-button:not(.collapsed)::after { filter: none; }
.accordion-body { font-size: 15px; color: #555; line-height: 1.8; padding: 0 24px 20px; }
.accordion-body .col-1 { color: #d31923; font-weight: 700; font-size: 16px; }

/* â”€â”€ Contact Section â”€â”€ */
.welcome-three { padding: 80px 0; background: linear-gradient(135deg, #0a1628 0%, #1a2e4a 100%); }
.welcome-three__left .get__content h4 { font-size: 16px; font-weight: 600; color: #d31923; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px; }
.welcome-three__left .get__content h2 { font-size: 46px; font-weight: 800; color: #fff; line-height: 1.15; margin-bottom: 20px; }
.welcome-three__left .get__content p { font-size: 16px; color: rgba(255,255,255,0.8); line-height: 1.8; margin-bottom: 16px; }
.welcome-three__left .get__content strong { font-size: 17px; color: #fff; font-weight: 700; display: block; margin-bottom: 10px; }
.welcome-three__left .get__content h3 { font-size: 20px; font-weight: 700; color: #fff; margin-bottom: 14px; margin-top: 20px; }
.get__content ul { list-style: none; padding: 0; margin: 0; }
.get__content ul li { margin-bottom: 12px; }
.get__content ul li a { display: flex; align-items: center; gap: 12px; color: rgba(255,255,255,0.9); text-decoration: none; font-size: 15px; transition: color 0.3s; }
.get__content ul li a:hover { color: #fff; }
.get__content ul li a img { width: 22px; height: 22px; object-fit: contain; flex-shrink: 0; }
.welcome-three__right { background: rgba(255,255,255,0.06); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.15); border-radius: 20px; padding: 40px 36px; }

/* â”€â”€ Responsive â”€â”€ */
@media (max-width: 991px) {
    .fintness__contents h1 { font-size: 32px; }
    .location-hero { padding: 70px 0 60px; }
    .servicess__content h2, .tab__title h2, .latest-technology-title h2, .best-choice-title h2, .trust-content h2, .technologies-tabs-container .tab__title h2 { font-size: 28px; }
    .achivement__box { padding: 16px 20px; min-width: 140px; }
    .welcome-three__left .get__content h2 { font-size: 36px; }
    .custtom___slide { padding: 28px; }
}
@media (max-width: 767px) {
    .fintness__contents h1 { font-size: 26px; }
    .fitnes__text { position: static; margin-top: 20px; }
    .achievements-boxs { flex-direction: column; }
    .achivement__box { border-right: none; border-bottom: 1px solid #f0f0f0; }
    .our-achievements .achivement_box { border-right: none; border-bottom: 1px solid #f0f0f0; }
    .left-items, .right-items { display: none; }
    .center-image-container { padding: 10px; }
    .servicess__content h2, .tab__title h2, .latest-technology-title h2, .best-choice-title h2, .trust-content h2 { font-size: 24px; }
    .linee { margin: 0 auto 24px; }
    #hoverTabs { justify-content: flex-start; overflow-x: auto; flex-wrap: nowrap; padding-bottom: 8px; }
    .technologies-tabs { overflow-x: auto; flex-wrap: nowrap; justify-content: flex-start; }
    .cus_btns ul { flex-wrap: wrap; gap: 16px; }
    .welcome-three__left .get__content h2 { font-size: 28px; }
    .welcome-three { padding: 50px 0; }
    .welcome-three__right { padding: 24px 20px; margin-top: 32px; }
}
@media (max-width: 575px) {
    .fintness__contents h1 { font-size: 22px; }
    .serv_box { padding: 22px 18px; }
    .tab__content { flex-direction: column; }
}
</style>

<div class="location-hero" style="background-image: url('<?= $B ?>/assets/images/fitness/1-head-images.webp'); background-size: cover; background-position: center;">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-7">
                     <div class="fintness__contents">
                        <h1>
                       Transform Your Fitness Journey with Custom Mobile App Solutions Tailored for Success
                     </h1>
                        <p class="my-3">Transform your fitness journey into a powerful mobile solution with Fitness App Development. Our expert team brings you user-friendly apps crafted for personal trainers and several fitness and wellness brands. We have combined high-level technology with a deep knowledge of fitness trends to develop solutions that motivate users. Let us help you elevate your brand and how your clients connect with their fitness journeys.</p>
                        <ul>
                           <li><span><i class="fa-solid fa-circle-check"></i></span>Custom Fitness & Workout Solutions</li>
                           <li><span><i class="fa-solid fa-circle-check"></i></span>Activity Tracking & Integrating with Health APIs</li>
                           <li><span><i class="fa-solid fa-circle-check"></i></span>BLE, Serial & Wearable Integration</li>
                        </ul>
                        <a href="<?= $B ?>/contact.php" class="btn btn-light rounded-2 color-primary mt-3">Discover More</a>
                     </div>
                  </div>
                  <div class="col-lg-5 d-flex justify-content-center banner-image-container">
                     <img src="<?= $B ?>/assets/images/fitness/19-fitness.webp" class="img-fluid animated-img w-80" alt="Mobile app">
                     <div class="fitnes__text">
                        <div class="left__fitness">
                           <p>5/5 Stars</p>
                           <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/awards/clutch-logo-2D745B01F0-seeklogo.com.webp" alt="clutch">
                        </div>
                        <div class="right__fitness">
                           <p>Top Rated</p>
                           <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/awards/trustpilot-logo.webp" alt="trustpilot">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Counter Stats -->
         <section style="background:#fff;padding:50px 0;box-shadow:0 2px 20px rgba(0,0,0,0.06);">
            <div class="container">
               <div class="row text-center g-4">
                  <div class="col-6 col-md-3">
                     <div style="padding:20px;">
                        <h3 class="counter" data-count="10" style="font-size:48px;font-weight:800;color:#d31923;margin:0 0 8px;line-height:1;">0</h3>
                        <p style="font-size:15px;color:#555;margin:0;">Years of Experience</p>
                     </div>
                  </div>
                  <div class="col-6 col-md-3">
                     <div style="padding:20px;border-left:1px solid #f0f0f0;">
                        <h3 class="counter" data-count="500" style="font-size:48px;font-weight:800;color:#d31923;margin:0 0 8px;line-height:1;">0</h3>
                        <p style="font-size:15px;color:#555;margin:0;">Fitness Apps Delivered</p>
                     </div>
                  </div>
                  <div class="col-6 col-md-3">
                     <div style="padding:20px;border-left:1px solid #f0f0f0;">
                        <h3 class="counter" data-count="250" style="font-size:48px;font-weight:800;color:#d31923;margin:0 0 8px;line-height:1;">0</h3>
                        <p style="font-size:15px;color:#555;margin:0;">Tech Enthusiasts</p>
                     </div>
                  </div>
                  <div class="col-6 col-md-3">
                     <div style="padding:20px;border-left:1px solid #f0f0f0;">
                        <h3 class="counter" data-count="98" style="font-size:48px;font-weight:800;color:#d31923;margin:0 0 8px;line-height:1;">0</h3>
                        <p style="font-size:15px;color:#555;margin:0;">% Client Satisfaction</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="our-achievements">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="achievements-title py-3">
                        <h2>Our Achievements</h2>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="achievements-boxs">
                        <div class="achivement__box">
                           <div class="achivment_img">
                              <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/01-clutch.webp" alt="Clutch">
                           </div>
                           <div class="rating">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span>4.9</span>
                           </div>
                           <p>Top Fitness App Company</p>
                        </div>
                        <div class="achivement__box">
                           <div class="achivment_img">
                              <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/02-goodfirm.webp" alt="GoodFirms">
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
                        <div class="achivement__box">
                           <div class="achivment_img">
                              <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/03-designrush.webp" alt="DesignRush">
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
                        <div class="achivement__box">
                           <div class="achivment_img">
                              <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/04-top-developers.webp" alt="TopDevelopers">
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

         <!-- Market Stats -->
         <section class="our-achievements" style="background:#f8f9fc; border-top:1px solid #eee;">
            <div class="container">
               <div class="row g-0">
                  <div class="col-md-4">
                     <div class="achivement_box">
                        <h2>$1.7 Billion</h2>
                        <p>The global fitness app market generated $1.7 billion in revenue, showcasing incredible growth and global resilience.</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="achivement_box">
                        <h2>17.6% CAGR</h2>
                        <p>The fitness app market is projected to grow at a 17.6% annual growth rate from 2023 to 2030, reaching new heights.</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="achivement_box" style="border-right:none;">
                        <h2>$33.04 Billion</h2>
                        <p>By 2027, fitness app revenue is projected to reach a market volume of $33.04 billion globally.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      <section class="servicess">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="servicess__content">
                     <h2>Fitness App Development <span style="color:#d31923;">Services We Provide</span></h2>
                     <p>Our team focuses on user-friendly UI/UX design, seamless integration of innovative features, and creating captivating apps that focus on user experience. We help fitness brands touch sky-high success through technology-driven solutions.</p>
                  </div>
               </div>
            </div>
            <div class="row g-4">
               <div class="col-md-6 col-lg-4">
                  <div class="serv_box">
                     <div class="mb-3" style="width:52px;height:52px;background:#d31923;border-radius:12px;display:flex;align-items:center;justify-content:center;">
                        <i class="fa-solid fa-palette" style="color:#fff;font-size:22px;"></i>
                     </div>
                     <h2>Fitness App UI/UX Design</h2>
                     <p>To design an intuitive fitness mobile application, our designers clearly understand user needs, preferences, and the latest UI/UX trends to deliver seamless fitness app experiences.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="serv_box">
                     <div class="mb-3" style="width:52px;height:52px;background:#d31923;border-radius:12px;display:flex;align-items:center;justify-content:center;">
                        <i class="fa-solid fa-mobile-screen" style="color:#fff;font-size:22px;"></i>
                     </div>
                     <h2>Custom Fitness App Development</h2>
                     <p>Our professional fitness app developers cater to diverse client preferences, building feature-rich apps that engage users and promote healthy lifestyles through continuous progress tracking.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="serv_box">
                     <div class="mb-3" style="width:52px;height:52px;background:#d31923;border-radius:12px;display:flex;align-items:center;justify-content:center;">
                        <i class="fa-solid fa-watch" style="color:#fff;font-size:22px;"></i>
                     </div>
                     <h2>Wearables App Development</h2>
                     <p>Track heart rate, activities, calories, and more. Our expert team is your ultimate wearable app development partner, delivering seamless integrations with smartwatches and fitness bands.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="serv_box">
                     <div class="mb-3" style="width:52px;height:52px;background:#d31923;border-radius:12px;display:flex;align-items:center;justify-content:center;">
                        <i class="fa-solid fa-plug" style="color:#fff;font-size:22px;"></i>
                     </div>
                     <h2>Fitness App Integration</h2>
                     <p>Need third-party API integrations for your core fitness app? Our developers deliver unique fitness app integrations tailored precisely to your requirements and technology stack.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="serv_box">
                     <div class="mb-3" style="width:52px;height:52px;background:#d31923;border-radius:12px;display:flex;align-items:center;justify-content:center;">
                        <i class="fa-solid fa-wrench" style="color:#fff;font-size:22px;"></i>
                     </div>
                     <h2>Fitness App Support &amp; Maintenance</h2>
                     <p>Keep your fitness app in peak condition with advanced maintenance strategies. We deliver bug-free experiences and continuously integrate the latest industry trends and technologies.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="serv_box">
                     <div class="mb-3" style="width:52px;height:52px;background:#d31923;border-radius:12px;display:flex;align-items:center;justify-content:center;">
                        <i class="fa-solid fa-comments" style="color:#fff;font-size:22px;"></i>
                     </div>
                     <h2>Fitness App Consulting</h2>
                     <p>Discuss your ideas with our fitness app experts. We explore all possibilities and craft a bespoke fitness app solution that aligns perfectly with your business goals and vision.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="custtom-tabs">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="container mt-5">
                     <div class="tab__title">
                        <h2>Create Your Ideal Fitness App with an Industry-Leading  <span style="color: #ec1c22">Health and Fitness App Development </span> Team</h2>
                        <p>With the right fitness app development services, ensure to craft the perfect app solution that delivers successful solutions for gym enthusiast, trainer, and athletes as well.</p>
                     </div>
                     <ul class="nav nav-tabs" id="hoverTabs">
                        <li class="nav-item">
                           <a class="nav-link active" href="#tab1" data-bs-toggle="tab">Customer App</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#tab2" data-bs-toggle="tab">Business Website</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#tab3" data-bs-toggle="tab">Admin Panel</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#tab4" data-bs-toggle="tab">Gym App</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#tab5" data-bs-toggle="tab">Trainer App</a>
                        </li>
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                           <div class="row">
                              <div class="col-md-7 custtom_scroll">
                                 <div class="tab__text">
                                    <h2>Custom Fitness App</h2>
                                    <p>Grasp your user's attention and keep them captivated in the business for a long time by leveraging our team is expert in creating user-friendly mobile solution.</p>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>User Registration</h4>
                                       <p>Let users set up their profiles with all the personal details, mention fitness goals, and their preferences.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Workout Plans</h4>
                                       <p>Integrated plans in the app analyzes fitness level of the user and offers a variety of workout plans accordingly. Some of the basic workout it would suggest includes cardio, strength training and flexibility exercises.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Exercise Demonstrations</h4>
                                       <p>For users ease and focusing on their convinience, the fitness app consists of detailed videos and descriptions of exercises for the correctness of their excercise and avoid injuries.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Progress Tracking</h4>
                                       <p>Permits users to analyze their health progress, track weight, measurements, and visualize their improvements over time.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Nutrition Tracking</h4>
                                       <p>Based on their goals, enable users to track calorie intake, and receive nutrition suggestions.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Integration with Wearables</h4>
                                       <p>To log activity data automatically, sync the app with fitness trackers and smartwatches.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Social Features</h4>
                                       <p>Share their progress and achievement by connecting with friends, join fitness communities.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>In-App Purchases</h4>
                                       <p>Moreover, through in-app purchases, the app offers premium content or a personalized coaching plan as well.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-5">
                                 <div class="tab__img">
                                    <img src="<?= $B ?>/assets/images/fitness/2-custom-fitness-app.webp"
                                       alt="2-custom-fitness-app" class="img-fluid">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="tab2">
                           <div class="row">
                              <div class="col-md-7 custtom_scroll">
                                 <div class="tab__text">
                                    <h2>Fitness Website Development</h2>
                                    <p>To complete registration and payment, multiple users are hopping onto the website these days. Thus, we also provide fitness website developers not to leave any chance to not getting in interaction with your user.</p>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Homepage</h4>
                                       <p>Enhance the brand awareness by providing an informative homepage which includes brands services, testimonials, and several highlights related to fitness.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Membership Management</h4>
                                       <p>View pricing and multiple payment options as well, while allowing users to sign up for membership.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Schedule Management</h4>
                                       <p>In case of changes in class schedules, the app provides notification.  Also, enables online booking and fitness class timings.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Trainer Profiles</h4>
                                       <p>View profile trainers profile with the showcase of their qualifications, availability and experience for private sessions.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Blog and Content</h4>
                                       <p>To engage and educate the audience, blogs with the fitness article, workout tips, and nutritional advice are maintained on the website.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Contact and Support</h4>
                                       <p>For users query, we have offered contact forms, chat support, or a FAQ section as well.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Analytics and Reporting</h4>
                                       <p>Monitor website traffic, customer sign-ups, and other key performance metrics.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-5">
                                 <div class="tab__img">
                                    <img src="<?= $B ?>/assets/images/fitness/3-fitness-web.webp"
                                       alt="2-custom-fitness-app" class="img-fluid">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="tab3">
                           <div class="row">
                              <div class="col-md-7 custtom_scroll">
                                 <div class="tab__text">
                                    <h2>Admin panel </h2>
                                    <p>Monitor website traffic, customer sign-ups, and other key performance metrics.</p>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>User Management</h4>
                                       <p>For staff members, control their accounts, access levels and permission.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Content Management</h4>
                                       <p>Create or edit workout plans, update exercise libraries, manage app content, and nutritions guides.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Financial Management</h4>
                                       <p>Monitors membership, transactions and generates official reports.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Customer Support</h4>
                                       <p>Support customer queries, and support tickets.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Analytics and Insights</h4>
                                       <p>Access detailed analytics on app usage, revenue trends.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Marketing Tools</h4>
                                       <p>Useful marketing tools for email marketing, promotional campaigns and push notifications.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-5">
                                 <div class="tab__img">
                                    <img src="<?= $B ?>/assets/images/fitness/4-admin-panel.webp"
                                       alt="2-custom-fitness-app" class="img-fluid">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="tab4">
                           <div class="row">
                              <div class="col-md-7 custtom_scroll">
                                 <div class="tab__text">
                                    <h2>Check-In and Access Control</h2>
                                    <p>To manage their attendance and the gym access, enables members to check in by using an application.</p>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Equipment Booking</h4>
                                       <p>Track gym equipment which the user is using at the time of workout, and allow users to reserve it in advance.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Workout Logging</h4>
                                       <p>Platform for the user to track their fitness progress and log their workout</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Class Schedules</h4>
                                       <p>Gym classes schedules, and allow users to opt for the class right in the gym without accessing their phones.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Facility Information</h4>
                                       <p>Provide detailed information about the gym and its rules and regulations.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-5">
                                 <div class="tab__img">
                                    <img src="<?= $B ?>/assets/images/fitness/5-gym-app.webp"
                                       alt="2-custom-fitness-app" class="img-fluid">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="tab5">
                           <div class="row">
                              <div class="col-md-7 custtom_scroll">
                                 <div class="tab__text">
                                    <h2>Trainers App</h2>
                                    <p>With our personal training app solution, empower your gym trainers or your personal trainers to streamline appointment scheduling and client details management.</p>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Profile Management</h4>
                                       <p>Let trainers create their professional profile along with the showcase of their expertise and services.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Appointment Scheduling</h4>
                                       <p>Let them look into their scheduled training and manage their schedules accordingly.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Client management</h4>
                                       <p>With client management tools, keep track of clients information, their fitness progress, and communication history as well to provide the best personalized training experience to their clients.</p>
                                    </div>
                                 </div>
                                 <div class="tab__content">
                                    <div class="left-icon">
                                       <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="">
                                    </div>
                                    <div class="right-text">
                                       <h4>Payment Tracking</h4>
                                       <p>Provide trainers and gym owners with their insights of their earnings effortlessly.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-5">
                                 <div class="tab__img">
                                    <img src="<?= $B ?>/assets/images/fitness/6-fitnees-trainer-app.webp"
                                       alt="2-custom-fitness-app" class="img-fluid">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="dynamic-image-section">
         <div class="container">
            <div class="row justify-content-center align-items-center">
               <div class="col-md-12">
                  <div class="latest-technology-title">
                     <h2>Compelling Features That Will Make Your <span style="color:#d31923;">Fitness App Unforgettable</span></h2>
                     <p>With our fitness app solution offering exceptional features and functionalities, engage &amp; retain the highest number of fitness enthusiasts today!</p>
                  </div>
               </div>
               <!-- Left side with icons and text -->
               <div class="col-md-4">
                  <div class="left-items">
                     <!-- First left item -->
                     <div class="left-item" data-image="assets/images/fitness/7-consultation.webp"  alt="2-custom-fitness-app" class="img-fluid" >
                        <div class="text-left">
                           <h4>1:1 Expert Consultation</h4>
                           <p>To keep the discussion transparent and smooth, lets users & fitness trainers connect through text, audio or video chats.</p>
                        </div>
                        <div class="icon-left">
                           <img src="<?= $B ?>/assets/images/fitness/1-consulting.webp" alt="Icon 1" class="icon-left">
                        </div>
                     </div>
                     <!-- Repeat for more items -->
                     <div class="left-item" data-image="assets/images/fitness/8-video-toturial.webp"  alt="2-custom-fitness-app" class="img-fluid" >
                        <div class="text-left">
                           <h4>Video & tutorial</h4>
                           <p>Sharing right postures about the exercise through the videos & tutorials.</p>
                        </div>
                        <div class="icon-left">
                           <img src="<?= $B ?>/assets/images/fitness/2-video-toturial.webp" alt="Icon 1" class="icon-left">
                        </div>
                     </div>
                     <div class="left-item" data-image="assets/images/fitness/9-push-notification.webp"  alt="2-custom-fitness-app" class="img-fluid" >
                        <div class="text-left">
                           <h4>Push Notification</h4>
                           <p>Let your users be punctual about their healthy routine by sending them notifications in case they miss out any of the activity.</p>
                        </div>
                        <div class="icon-left">
                           <img src="<?= $B ?>/assets/images/fitness/3-push-notification.webp" alt="Icon 1" class="icon-left">
                        </div>
                     </div>
                     <div class="left-item" data-image="assets/images/fitness/10-geolocation.webp"  alt="2-custom-fitness-app" class="img-fluid" >
                        <div class="text-left">
                           <h4>Geolocation</h4>
                           <p>Enables users to track routes for tracking, jogging or even hiking etc with an in-app navigation.</p>
                        </div>
                        <div class="icon-left">
                           <img src="<?= $B ?>/assets/images/fitness/4-geo-location.webp" alt="Icon 1" class="icon-left">
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Center image that changes -->
               <div class="col-md-4">
                  <div class="center-image-container">
                     <img src="<?= $B ?>/assets/images/fitness/7-consultation.webp" alt="Main Image" id="centerImage" class="img-fluid">
                  </div>
               </div>
               <!-- Right side with icons and text -->
               <div class="col-md-4">
                  <div class="right-items">
                     <!-- First right item -->
                     <div class="right-item" data-image="assets/images/fitness/11-workout-and-meal-plan.webp"  alt="2-custom-fitness-app" class="img-fluid" >
                        <div class="icon-right">
                           <img src="<?= $B ?>/assets/images/fitness/5-workout-dietplan.webp" alt="Icon 5" class="icon-right">
                        </div>
                        <div class="text-right">
                           <h4>Workout/Diet Plans</h4>
                           <p>Permits a trainer to plan a client's diet and workout that goes along with the user's requirement and schedule.</p>
                        </div>
                     </div>
                     <!-- Repeat for more items -->
                     <div class="right-item" data-image="assets/images/fitness/12-activity-tracking-app.webp"  alt="2-custom-fitness-app" class="img-fluid" >
                        <div class="icon-right">
                           <img src="<?= $B ?>/assets/images/fitness/6-activity-tracking.webp" alt="Icon 5" class="icon-right">
                        </div>
                        <div class="text-right">
                           <h4>Activity Tracking</h4>
                           <p>Entertain users to analyze their metrics by themselves, such as covered distance, walking distance, running speed and more.</p>
                        </div>
                     </div>
                     <div class="right-item" data-image="assets/images/fitness/13-altimeter.webp"  alt="2-custom-fitness-app" class="img-fluid" >
                        <div class="icon-right">
                           <img src="<?= $B ?>/assets/images/fitness/7-altimeter.webp" alt="Icon 5" class="icon-right">
                        </div>
                        <div class="text-right">
                           <h4>Altimeter</h4>
                           <p>This smart in-app feature calculates altitude, for example height from the sea level. Barometric pressure etc.</p>
                        </div>
                     </div>
                     <div class="right-item" data-image="assets/images/fitness/14-wearabale-tracking.webp"  alt="2-custom-fitness-app" class="img-fluid" >
                        <div class="icon-right">
                           <img src="<?= $B ?>/assets/images/fitness/8-smartwatch.webp" alt="Icon 5" class="icon-right">
                        </div>
                        <div class="text-right">
                           <h4>Wearable Connections </h4>
                           <p>Devices such as smartwatches,armbands and whatnot can be connected for seamless activity tracking.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <section class="latest-technology">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="latest-technology-title">
                     <h2>Elevating Fitness Apps with <span style="color:#d31923;">Latest Technology</span></h2>
                     <p>Our expert fitness app developers leverage cutting-edge technologies to make your business successful and help your app stand out in the competitive market.</p>
                  </div>
               </div>
            </div>
            <div class="row g-4">
               <div class="col-md-6 col-lg-3">
                  <div class="latest-technology-box">
                     <div style="width:54px;height:54px;background:rgba(211,25,35,0.2);border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:18px;">
                        <i class="fa-solid fa-brain" style="color:#d31923;font-size:22px;"></i>
                     </div>
                     <h4>AI &amp; Machine Learning</h4>
                     <p>We exploit the power of AI and machine learning to create personalized fitness experiences, smart workout recommendations, and predictive health analytics.</p>
                     <img src="<?= $B ?>/assets/images/001-chat.webp" alt="AI Machine Learning">
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="latest-technology-box">
                     <div style="width:54px;height:54px;background:rgba(211,25,35,0.2);border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:18px;">
                        <i class="fa-solid fa-robot" style="color:#d31923;font-size:22px;"></i>
                     </div>
                     <h4>AI Chatbot</h4>
                     <p>Integrate advanced fitness chatbots that act as personal coaches and guides, keeping users engaged, enhancing lead generation, and maximizing your ROI.</p>
                     <img src="<?= $B ?>/assets/images/002-chat.webp" alt="AI Chatbot">
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="latest-technology-box">
                     <div style="width:54px;height:54px;background:rgba(211,25,35,0.2);border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:18px;">
                        <i class="fa-solid fa-link" style="color:#d31923;font-size:22px;"></i>
                     </div>
                     <h4>Blockchain</h4>
                     <p>Blockchain-enabled fitness solutions ensure greater transparency and security for users' personal health information â€” a top priority for leading software agencies.</p>
                     <img src="<?= $B ?>/assets/images/003-chat.webp" alt="Blockchain">
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="latest-technology-box">
                     <div style="width:54px;height:54px;background:rgba(211,25,35,0.2);border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:18px;">
                        <i class="fa-solid fa-vr-cardboard" style="color:#d31923;font-size:22px;"></i>
                     </div>
                     <h4>AR / VR</h4>
                     <p>Utilize AR and VR to deliver immersive virtual fitness and health experiences, enhancing coaching consultations, workout guidance, and measurable results.</p>
                     <img src="<?= $B ?>/assets/images/004-chat.webp" alt="AR VR">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="best-choice">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="best-choice-title">
                     <h2>Why Choose Our <span style="color:#d31923;">Fitness Mobile App Development</span> Services?</h2>
                     <p>Choosing the right fitness app development company is critical. Our professional team delivers customized solutions powered by the latest technologies, giving your fitness vision the innovative structure it deserves.</p>
                  </div>
               </div>
            </div>
            <div class="row g-4">
               <div class="col-md-6 col-lg-4">
                  <div style="background:#fff;border-radius:16px;padding:32px 28px;box-shadow:0 4px 20px rgba(0,0,0,0.07);height:100%;border-top:4px solid #d31923;">
                     <div style="width:54px;height:54px;background:#fff5f5;border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                        <i class="fa-solid fa-medal" style="color:#d31923;font-size:22px;"></i>
                     </div>
                     <h4 style="font-size:18px;font-weight:700;color:#0a1628;margin-bottom:10px;">Top Industry Expertise</h4>
                     <p style="font-size:15px;color:#666;line-height:1.7;margin:0;">Our developers and designers combine extensive industry knowledge with best practices to deliver high-quality, impactful fitness apps.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div style="background:#fff;border-radius:16px;padding:32px 28px;box-shadow:0 4px 20px rgba(0,0,0,0.07);height:100%;border-top:4px solid #d31923;">
                     <div style="width:54px;height:54px;background:#fff5f5;border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                        <i class="fa-solid fa-shield-halved" style="color:#d31923;font-size:22px;"></i>
                     </div>
                     <h4 style="font-size:18px;font-weight:700;color:#0a1628;margin-bottom:10px;">100% Transparency, No Hidden Charges</h4>
                     <p style="font-size:15px;color:#666;line-height:1.7;margin:0;">We offer clear fitness app pricing from the beginning â€” no hidden fees, no surprises. Full transparency throughout the project lifecycle.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div style="background:#fff;border-radius:16px;padding:32px 28px;box-shadow:0 4px 20px rgba(0,0,0,0.07);height:100%;border-top:4px solid #d31923;">
                     <div style="width:54px;height:54px;background:#fff5f5;border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                        <i class="fa-solid fa-clock" style="color:#d31923;font-size:22px;"></i>
                     </div>
                     <h4 style="font-size:18px;font-weight:700;color:#0a1628;margin-bottom:10px;">On-Time Delivery</h4>
                     <p style="font-size:15px;color:#666;line-height:1.7;margin:0;">We deliver your fitness app on time, every time, so you can launch without delays and start engaging your users immediately.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div style="background:#fff;border-radius:16px;padding:32px 28px;box-shadow:0 4px 20px rgba(0,0,0,0.07);height:100%;border-top:4px solid #d31923;">
                     <div style="width:54px;height:54px;background:#fff5f5;border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                        <i class="fa-solid fa-microchip" style="color:#d31923;font-size:22px;"></i>
                     </div>
                     <h4 style="font-size:18px;font-weight:700;color:#0a1628;margin-bottom:10px;">AI, AR/VR &amp; Advanced Technologies</h4>
                     <p style="font-size:15px;color:#666;line-height:1.7;margin:0;">We integrate cutting-edge technologies including AI, AR/VR, and wearable integrations to deliver a singular, unique user experience.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div style="background:#fff;border-radius:16px;padding:32px 28px;box-shadow:0 4px 20px rgba(0,0,0,0.07);height:100%;border-top:4px solid #d31923;">
                     <div style="width:54px;height:54px;background:#fff5f5;border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                        <i class="fa-solid fa-headset" style="color:#d31923;font-size:22px;"></i>
                     </div>
                     <h4 style="font-size:18px;font-weight:700;color:#0a1628;margin-bottom:10px;">Ongoing Support &amp; Maintenance</h4>
                     <p style="font-size:15px;color:#666;line-height:1.7;margin:0;">We're committed to your app's long-term success â€” tackling issues, providing updates, and ensuring optimal performance at every stage.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div style="background:#fff;border-radius:16px;padding:32px 28px;box-shadow:0 4px 20px rgba(0,0,0,0.07);height:100%;border-top:4px solid #d31923;">
                     <div style="width:54px;height:54px;background:#fff5f5;border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                        <i class="fa-solid fa-expand" style="color:#d31923;font-size:22px;"></i>
                     </div>
                     <h4 style="font-size:18px;font-weight:700;color:#0a1628;margin-bottom:10px;">Scalable Solutions</h4>
                     <p style="font-size:15px;color:#666;line-height:1.7;margin:0;">Easily implement updates and add new features as your user base grows, ensuring your app remains relevant and engaging over time.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="trust">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="trust-img">
                     <img src="<?= $B ?>/assets/images/fitness/19-fitness.webp" alt="mobilize-your-vision-transformative-mobile-application-development" class="img-fluid w-80">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="trust-content">
                     <h2>Why You Can Rely on Us for 
                        <span style="color: #ec1c22">Fitness App Solutions</span>
                     </h2>
                     <p>Trust our technical team to provide the best fitness application development services. Our fitness app developers are a step ahead at crafting innovative, custom-made fitness app solutions.</p>
                     <ul class="clr_bg_tag d_flx">
                        <li>Flexible Engagement Models</li>
                        <li>Timely Delivery</li>
                        <li>100% Expectation Fulfillment</li>
                        <li>Competitive Pricing</li>
                        <li>Over 250 Tech Enthusiasts</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="technologies-tabs">
         <div class="technologies-tabs-container">
            <div class="tab__title">
               <h2>Our Powerful Tech Stack for <span style="color: #ec1c22">Building Exceptional Fitness Apps</span></h2>
               <p>Our fitness app developers understand your unique business needs and guide you in selecting the perfect technology to bring your creative idea to life.</p>
            </div>
            <!-- Tabs -->
            <div class="technologies-tabs">
               <div class="tab" data-tab="programming">Programming Languages</div>
               <div class="tab" data-tab="frameworks">Frameworks</div>
               <div class="tab" data-tab="databases">Databases</div>
               <div class="tab" data-tab="devops">DevOps</div>
               <div class="tab" data-tab="payment">Payment Gateways</div>
               <div class="tab" data-tab="cloud">Clouds</div>
            </div>
            <!-- Slider Container -->
            <div class="slider-container">
               <div id="programming" class="slider swiper marquee">
                  <div class="marquee-content">
                     <img src="<?= $B ?>/assets/images/techslide/javascript-1.webp" alt="javascript logo"> 
                     <img src="<?= $B ?>/assets/images/techslide/Java.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Kotlin.webp" alt="javascript logo"> 
                     <img src="<?= $B ?>/assets/images/techslide/Swift.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Python.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/objC.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/c-3.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/c-2.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/javascript-1.webp" alt="javascript logo"> 
                     <img src="<?= $B ?>/assets/images/techslide/Java.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Kotlin.webp" alt="javascript logo"> 
                     <img src="<?= $B ?>/assets/images/techslide/Swift.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Python.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/objC.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/c-3.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/c-2.webp" alt="javascript logo">
                  </div>
               </div>
               <div id="frameworks" class="slider swiper">
                  <div class="marquee-content">
                     <img src="<?= $B ?>/assets/images/techslide/Appcelerator_logo.webp" alt="javascript logo"> 
                     <img src="<?= $B ?>/assets/images/techslide/flutter-logo.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Lonic.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Node.JS_.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Phonegap.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/xamarin.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Oracle.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Appcelerator_logo.webp" alt="javascript logo"> 
                     <img src="<?= $B ?>/assets/images/techslide/flutter-logo.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Lonic.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Node.JS_.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Phonegap.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/xamarin.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Oracle.webp" alt="javascript logo">
                  </div>
               </div>
               <div id="databases" class="slider swiper active">
                  <div class="marquee-content">
                     <!-- /.swiper-slide -->
                     <img src="<?= $B ?>/assets/images/techslide/Oracle.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/PostgreSQL.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/SQL-Server.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Apache-Haase.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Apache-nifi.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Cassandra.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Hive.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/MongoDB.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Oracle.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/PostgreSQL.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/SQL-Server.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Apache-Haase.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Apache-nifi.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Cassandra.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Hive.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/MongoDB.webp" alt="javascript logo">
                     <!-- /.swiper-slide -->
                  </div>
               </div>
               <div id="devops" class="slider swiper">
                  <div class="marquee-content">
                     <!-- /.swiper-slide -->
                     <img src="<?= $B ?>/assets/images/techslide/openshift.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Puppet.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Saltstack.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/SQL-Server-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Terraform.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Ansible.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Chef.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Docker.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Kubernet.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/openshift.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Puppet.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Saltstack.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/SQL-Server-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Terraform.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Ansible.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Chef.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Docker.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Kubernet.webp" alt="javascript logo">
                  </div>
               </div>
               <div id="payment" class="slider swiper">
                  <div class="marquee-content">
                     <img src="<?= $B ?>/assets/images/techslide/Adyen.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Alipay.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/paypal.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Square.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Stripe.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Adyen.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Alipay.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/paypal.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Square.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Stripe.webp" alt="javascript logo">
                  </div>
               </div>
               <div id="cloud" class="slider swiper marquee">
                  <div class="marquee-content">
                     <img src="<?= $B ?>/assets/images/techslide/Google-Cloud-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/AWS-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Azure-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Digital-Ocean-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Google-Cloud-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/AWS-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Azure-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Digital-Ocean-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Google-Cloud-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/AWS-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Azure-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Digital-Ocean-1.webp" alt="javascript logo">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="custom_slider_section">
         <div class="container">
            <div class="best-choice-title">
               <h2>Explore How Our <span style="color: #ec1c22">Fitness App Development Company</span> Has Empowered Businesses</h2>
               <p>Our diverse client highlights our dedication to developing outstanding fitness mobile apps which is crafted to meet the unique requirements and preferences of various industries and clients.</p>
            </div>
            <div class="slider center">
               <div class="slide">
                  <div class="cl cl-yellow">
                     <div class="custtom___slide">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="cus_slide_text">
                                 <h2><img src="<?= $B ?>/assets/images/yogi_logo.webp" alt="Yogi App"> â€” Yogi</h2>
                              </div>
                              <p>Change the meaning of yoga right away at your fingertips. Find balance, enhance your yoga postures, and add new asanas to maintain your lifestyle with a yoga app. Download the yoga app today to start your wellness journey!</p>
                              <div class="cus_btns">
                                 <ul>
                                    <li>
                                       <span>Download</span>
                                       <p>200</p>
                                    </li>
                                    <li>
                                       <span>Country</span>
                                       <p><img src="<?= $B ?>/assets/images/uk_flag.webp"> UK</p>
                                    </li>
                                    <li>
                                       <span>Platform</span>
                                       <p>iOS Android</p>
                                    </li>
                                 </ul>
                              </div>
                              <div class="social-anch">
                                 <ul>
                                    <li><a href="#"><img src="<?= $B ?>/assets/images/gogle.svg"></a></li>
                                    <li><a href="#"><img src="<?= $B ?>/assets/images/playstore.svg"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="cus_slide_img">
                                 <img src="<?= $B ?>/assets/images/000-1.webp" class="img-fluid" alt="Mobile app">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="slide">
                  <div class="cl cl-blue">
                     <div class="custtom___slide">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="cus_slide_text">
                                 <h2><img src="<?= $B ?>/assets/images/lazy.svg" alt="Lazy Workout"> â€” Lazy Workout</h2>
                              </div>
                              <p>JustFir brings you the platform with a selection of workout plans, personalized advice, and records to gain muscles or lose weight or multiple exercises that will keep you busy and maintained at home.</p>
                              <div class="cus_btns">
                                 <ul>
                                    <li>
                                       <span>Download</span>
                                       <p>200</p>
                                    </li>
                                    <li>
                                       <span>Country</span>
                                       <p><img src="<?= $B ?>/assets/images/uk_flag.webp"> UK</p>
                                    </li>
                                    <li>
                                       <span>Platform</span>
                                       <p>iOS Android</p>
                                    </li>
                                 </ul>
                              </div>
                              <div class="social-anch">
                                 <ul>
                                    <li><a href="#"><img src="<?= $B ?>/assets/images/gogle.svg"></a></li>
                                    <li><a href="#"><img src="<?= $B ?>/assets/images/playstore.svg"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="cus_slide_img">
                                 <img src="<?= $B ?>/assets/images/000-2.webp" class="img-fluid" alt="Mobile app">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="slide">
                  <div class="cl cl-red">
                     <div class="custtom___slide">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="cus_slide_text">
                                 <h2><img src="<?= $B ?>/assets/images/Gymshark.svg" alt="Gymshark"> â€” Fitness App</h2>
                              </div>
                              <p>Change the meaning of yoga right away at your fingertips. Find balance, enhance your yoga postures, and add new asanas to maintain your lifestyle with a yoga app. Download the yoga app today to start your wellness journey!</p>
                              <div class="cus_btns">
                                 <ul>
                                    <li>
                                       <span>Download</span>
                                       <p>200</p>
                                    </li>
                                    <li>
                                       <span>Country</span>
                                       <p><img src="<?= $B ?>/assets/images/uk_flag.webp"> UK</p>
                                    </li>
                                    <li>
                                       <span>Platform</span>
                                       <p>iOS Android</p>
                                    </li>
                                 </ul>
                              </div>
                              <div class="social-anch">
                                 <ul>
                                    <li><a href="#"><img src="<?= $B ?>/assets/images/gogle.svg"></a></li>
                                    <li><a href="#"><img src="<?= $B ?>/assets/images/playstore.svg"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="cus_slide_img">
                                 <img src="<?= $B ?>/assets/images/000-3.webp" class="img-fluid" alt="Mobile app">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="slide">
                  <div class="cl cl-yellow">
                     <div class="custtom___slide">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="cus_slide_text">
                                 <h2><img src="<?= $B ?>/assets/images/fitness-app-logo.svg" alt="Fitness App"> â€” Fitness App</h2>
                              </div>
                              <p>Change the meaning of yoga right away at your fingertips. Find balance, enhance your yoga postures, and add new asanas to maintain your lifestyle with a yoga app. Download the yoga app today to start your wellness journey!</p>
                              <div class="cus_btns">
                                 <ul>
                                    <li>
                                       <span>Download</span>
                                       <p>200</p>
                                    </li>
                                    <li>
                                       <span>Country</span>
                                       <p><img src="<?= $B ?>/assets/images/uk_flag.webp"> UK</p>
                                    </li>
                                    <li>
                                       <span>Platform</span>
                                       <p>iOS Android</p>
                                    </li>
                                 </ul>
                              </div>
                              <div class="social-anch">
                                 <ul>
                                    <li><a href="#"><img src="<?= $B ?>/assets/images/gogle.svg"></a></li>
                                    <li><a href="#"><img src="<?= $B ?>/assets/images/playstore.svg"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="cus_slide_img">
                                 <img src="<?= $B ?>/assets/images/000-4.webp" class="img-fluid" alt="Mobile app">
                              </div>
                           </div>
                        </div>
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
                  <div class="latest-technology-title" style="text-align:center;margin-bottom:40px;">
                     <h2>Fitness App Development <span style="color:#d31923;">FAQ</span></h2>
                     <p style="font-size:16px;color:#555;max-width:650px;margin:0 auto;">Get answers to the most common questions about building your fitness app with our expert team.</p>
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
                              <div class="col-11">What features should I include in my fitness app?
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
                                 Essential features may include workout tracking, nutrition planning, user profiles, progress monitoring, and community engagement.
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
                              <div class="col-11">How long does it take to develop a fitness app?
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
                                 The timeline varies based on complexity, but it typically ranges from a few months to over a year.
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
                              <div class="col-11">What platforms should I target for my fitness app?
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
                                 It's advisable to develop for both iOS and Android to reach a wider audience.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           <div class="row w-100">
                              <div class="col-1">04</div>
                              <div class="col-11">How much does it cost to develop a fitness app?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 Costs can vary significantly based on features, design, and development complexity, generally ranging from a few thousand to several hundred thousand dollars.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                           <div class="row w-100">
                              <div class="col-1">05</div>
                              <div class="col-11">Can I integrate wearable technology with my fitness app?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 Yes, many fitness apps support integration with wearables like smartwatches and fitness trackers.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                           <div class="row w-100">
                              <div class="col-1">06</div>
                              <div class="col-11">How can I ensure my fitness app is user-friendly?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 Focus on intuitive design, simple navigation, and clear instructions to enhance the user experience.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                           <div class="row w-100">
                              <div class="col-1">07</div>
                              <div class="col-11">What technology stack is best for fitness app development?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 Common technologies include React Native, Flutter, and backend solutions like Node.js or Python, along with cloud services for data storage.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                           <div class="row w-100">
                              <div class="col-1">08</div>
                              <div class="col-11">How do I promote my fitness app after launch?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 Utilize social media marketing, influencer partnerships, content marketing, and app store optimization (ASO) strategies.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                           <div class="row w-100">
                              <div class="col-1">09</div>
                              <div class="col-11">What security measures should I implement in my fitness app?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 Ensure data encryption, secure user authentication, and compliance with privacy regulations like GDPR.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                           <div class="row w-100">
                              <div class="col-1">10</div>
                              <div class="col-11">Can I update my app after launch?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 Yes, regular updates are essential for adding new features, fixing bugs, and improving user experience.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingElev">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseElev" aria-expanded="true" aria-controls="collapseElev">
                           <div class="row w-100">
                              <div class="col-1">11</div>
                              <div class="col-11">Do I need a separate website for my fitness app?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseElev" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 While not mandatory, having a website can help with marketing, user engagement, and providing information about your app.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwe">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseTwe" aria-expanded="true" aria-controls="collapseTwe">
                           <div class="row w-100">
                              <div class="col-1">12</div>
                              <div class="col-11">What kind of support can I expect after the app is launched?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseTwe" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 Look for ongoing maintenance, updates, bug fixes, and customer support to ensure long-term success.
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
                               <p>Want to find out how ArtisticWebServices can help your organization? We'd love to hear from you.</p>
                               <strong>
                                   Integrate Towards Innovation
                               </strong>
                               <p>Become an ArtisticWebServices Partner to Launch, Run and Grow Your Business Globally.</p>
                               <h3>Contact Info:</h3>
                               <ul>
                                   <li><a href="mailto:info@artisticwebservices.com"> <img src="<?= $B ?>/assets/images/fitness/email.svg" alt="email"> info@artisticwebservices.com</a></li>
                                   <li> <a href="tel:+12137147176" class="nav-number nav-number-1"><img src="<?= $B ?>/assets/images/fitness/USA-Flag.svg" > (213) 714-7176</a></li>
                               </ul>
                               
                              
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                  <div class="welcome-three__right welcome-three__right-zero">
                     <div class="row">
                        <?php require_once __DIR__ . '/../includes/form-quote.php'; ?><script>
                           $(document).ready(function () {
                           var $st = $('.pagination');
                           var $slickEl = $('.center');
                           
                           if ($slickEl.length) {
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
                           }
                           });
                        </script>
                        <script>
                        /* Counter animation */
                        $(document).ready(function(){
                           function animateCounters(){
                              $('.counter').each(function(){
                                 var $this=$(this), countTo=parseInt($this.data('count')||0);
                                 $({count:0}).animate({count:countTo},{duration:2000,easing:'swing',step:function(){$this.text(Math.floor(this.count))},complete:function(){$this.text(countTo);}});
                              });
                           }
                           var countersRun=false;
                           $(window).on('scroll',function(){
                              var counterTop=$('.counter').first().offset();
                              if(counterTop && counterTop.top < $(window).scrollTop()+$(window).height() && !countersRun){
                                 countersRun=true; animateCounters();
                              }
                           });
                        });
                        /* Tech stack tab switching */
                        $(document).ready(function(){
                           var firstTab = $('.technologies-tabs .tab:first');
                           firstTab.addClass('active');
                           var firstId = firstTab.data('tab');
                           $('#'+firstId).addClass('active');
                           $('.technologies-tabs .tab').on('click',function(){
                              var tabId=$(this).data('tab');
                              $('.technologies-tabs .tab').removeClass('active');
                              $(this).addClass('active');
                              $('.slider-container .slider').removeClass('active');
                              $('#'+tabId).addClass('active');
                           });
                        });
                        /* Dynamic feature image switcher */
                        $(document).ready(function(){
                           function setFeatureImage(src){
                              if(src){ $('#centerImage').fadeOut(200,function(){ $(this).attr('src', src).fadeIn(200); }); }
                           }
                           $('.left-item, .right-item').on('mouseenter',function(){
                              $('.left-item,.right-item').removeClass('active');
                              $(this).addClass('active');
                              var img=$(this).data('image');
                              if(img) setFeatureImage(img);
                           });
                           // Set first item active
                           var first=$('.left-item:first');
                           first.addClass('active');
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

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>


