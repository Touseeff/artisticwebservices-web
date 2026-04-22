<?php
require_once 'includes/config.php';
$page_title       = 'Award-Winning Software Development Company USA | AWS';
$page_keywords    = 'software development company USA, mobile app development company New York, custom software development, enterprise software development, web development company USA, app development agency New York, hire software developers USA, custom mobile app development, iOS Android app development company, software outsourcing company USA, digital transformation company, full stack development company, award winning app development company, startup software development company, best software development company USA';
$page_description = 'ArtisticWebServices is an award-winning custom software development company in New York, USA. We build high-performance mobile apps, web platforms, AI solutions, and enterprise software for startups and Fortune 500 companies. 460+ projects delivered.';
$page_breadcrumbs = [];
$page_faq = [
    ['q' => 'What services does ArtisticWebServices offer?', 'a' => 'ArtisticWebServices offers mobile app development, web development, AI & machine learning, blockchain development, cloud managed services, UI/UX design, SaaS development, IoT solutions, and digital marketing for businesses across USA and globally.'],
    ['q' => 'How much does it cost to develop a mobile app?', 'a' => 'Mobile app development costs vary based on complexity, features, and platform. A basic app starts from $10,000 while enterprise-level apps can range from $50,000 to $250,000+. Use our App Cost Calculator for a free estimate.'],
    ['q' => 'How long does it take to develop a custom software?', 'a' => 'A basic MVP takes 8–12 weeks. A full-featured mobile or web application typically takes 3–6 months. Enterprise-scale software can take 6–12 months depending on scope.'],
    ['q' => 'Does ArtisticWebServices develop apps for both iOS and Android?', 'a' => 'Yes. We build native iOS apps (Swift), native Android apps (Kotlin), and cross-platform apps using React Native and Flutter — all from our New York-based development team.'],
    ['q' => 'Is ArtisticWebServices a HIPAA compliant development company?', 'a' => 'Yes. We follow HIPAA compliance guidelines for all healthcare and medical app development projects, including telemedicine apps, EHR integrations, and patient portals.'],
    ['q' => 'Where is ArtisticWebServices located?', 'a' => 'Our headquarters is at 26 Broadway, Suite 934, New York, NY 10004, USA. We serve clients across the USA, UAE, Saudi Arabia, Qatar, Kuwait, Bahrain, and Pakistan.']
];
$page_canonical   = SITE_URL . '/';
$page_og_image    = SITE_URL . '/assets/images/resources/artisticwebservices-og.png';
require_once 'includes/head.php';
?>
   <style>
      /* ════════════════════════════════════════════════════════
         HERO VIDEO CAROUSEL  –  all screen sizes
         ════════════════════════════════════════════════════════ */

      /* 1. Body offset for fixed navbar */
      body { padding-top: 75px; }

      /* 2. Carousel wrapper – full viewport, pulled up behind navbar */
      #carouselExampleDark {
         position: relative;
         overflow: hidden;
         min-height: 100vh;
         height: auto;
         margin-top: -75px;   /* lets video sit under navbar edge-to-edge */
      }

      /* 3. Full-cover looping video */
      .hero-video-bg {
         position: absolute;
         top: 50%; left: 50%;
         min-width: 100%; min-height: 100%;
         width: auto; height: auto;
         transform: translate(-50%, -50%);
         object-fit: cover;
         z-index: 0;
      }

      /* 4. Dark overlay */
      #carouselExampleDark .carousel-overlay {
         position: absolute;
         inset: 0;
         background: rgba(0,0,0,0.52);
         z-index: 1;
         pointer-events: none;
      }

      /* 5. Inner track fills full height */
      #carouselExampleDark .carousel-inner {
         position: relative;
         z-index: 2;
         min-height: 100vh;
         height: auto;
      }

      /* 6. Each slide – flex centred so content never clips */
      #carouselExampleDark .carousel-item,
      #carouselExampleDark .carousel-item.active {
         min-height: 100vh;
         height: auto;
         position: relative !important;
         display: flex !important;
         align-items: center;
         justify-content: center;
         padding: 105px 0 48px;
         box-sizing: border-box;
      }

      /* 7. Caption: flows naturally inside the flex item */
      #carouselExampleDark .carousel-caption.hero-video-caption {
         position:  relative !important;
         top:       auto     !important;
         left:      auto     !important;
         bottom:    auto     !important;
         right:     auto     !important;
         transform: none     !important;
         width:     88%;
         max-width: 900px;
         margin:    0 auto;
         text-align: center;
         z-index:   3;
         color:     #fff;
         padding:   0 20px;
      }

      /* 8. Text sizes – desktop */
      #carouselExampleDark .hero-video-caption .slide-h2 {
         font-size: clamp(2rem, 3.2vw, 2.9rem) !important;
         font-weight: 800 !important;
         line-height: 1.2;
         margin-bottom: 14px;
         color: #fff;
      }
      #carouselExampleDark .hero-video-caption .slide-p {
         font-size: clamp(1rem, 1.4vw, 1.2rem) !important;
         line-height: 1.7;
         margin-bottom: 0;
         color: #fff;
      }

      /* Hero carousel: dots & side arrows removed in markup */

      /* 9. Slide badge pill */
      .slide-badge {
         display: inline-block;
         background: rgba(221,4,41,0.85);
         color: #fff;
         font-size: 13px;
         font-weight: 700;
         letter-spacing: 0.6px;
         padding: 6px 20px;
         border-radius: 50px;
         margin-bottom: 18px;
         backdrop-filter: blur(4px);
         border: 1px solid rgba(255,255,255,0.25);
      }

      /* 12. Trust chips row */
      .slide-trust {
         display: flex;
         justify-content: center;
         flex-wrap: wrap;
         gap: 10px;
         margin-top: 14px;
         margin-bottom: 4px;
      }
      .slide-trust span {
         background: rgba(255,255,255,0.12);
         border: 1px solid rgba(255,255,255,0.3);
         color: #fff;
         font-size: 13px;
         font-weight: 600;
         padding: 5px 16px;
         border-radius: 50px;
         backdrop-filter: blur(4px);
         white-space: nowrap;
         cursor: default;
         -webkit-tap-highlight-color: rgba(255,255,255,0.12);
         transition: background 0.2s ease, border-color 0.2s ease, transform 0.2s ease;
      }
      .slide-trust span:active {
         background: rgba(255,255,255,0.2);
         border-color: rgba(255,255,255,0.45);
      }
      @media (hover: hover) and (pointer: fine) {
         .slide-trust span:hover {
            background: rgba(255,255,255,0.2);
            border-color: rgba(255,255,255,0.5);
            transform: translateY(-1px);
         }
      }

      /* 10. Ghost secondary CTA button */
      .hero-ghost-btn {
         display: inline-flex;
         align-items: center;
         gap: 6px;
         background: transparent;
         color: #fff !important;
         border: 2px solid rgba(255,255,255,0.75);
         padding: 12px 26px;
         border-radius: 50px;
         font-size: 15px;
         font-weight: 600;
         text-decoration: none !important;
         margin-left: 12px;
         transition: background 0.25s, border-color 0.25s;
      }
      .hero-ghost-btn:hover {
         background: rgba(255,255,255,0.15);
         border-color: #fff;
         color: #fff !important;
      }
      .hero-ghost-btn:focus-visible {
         outline: 2px solid #fff;
         outline-offset: 3px;
      }
      .hero-ghost-btn:active {
         transform: scale(0.98);
         background: rgba(255,255,255,0.22);
      }
      .hero-video-caption .thm-btn {
         -webkit-tap-highlight-color: rgba(255,255,255,0.2);
         transition: transform 0.2s ease, box-shadow 0.2s ease, filter 0.2s ease;
      }
      .hero-video-caption .thm-btn:focus-visible {
         outline: 2px solid #fff;
         outline-offset: 3px;
      }
      .hero-video-caption .thm-btn:active {
         transform: scale(0.98);
      }
      @media (hover: hover) and (pointer: fine) {
         .hero-video-caption .thm-btn:hover {
            filter: brightness(1.08);
            box-shadow: 0 6px 24px rgba(0,0,0,0.25);
         }
      }
      .cta-two__right { display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 10px; }

      @media (max-width: 767px) {
         .slide-badge { font-size: 12px; padding: 6px 14px; margin-bottom: 10px; line-height: 1.35; max-width: 100%; white-space: normal; }
         .slide-trust  { gap: 8px; margin-top: 10px; justify-content: center; }
         .slide-trust span {
            font-size: 12px;
            padding: 6px 12px;
            white-space: normal;
            text-align: center;
            line-height: 1.35;
            max-width: 100%;
         }
         .hero-ghost-btn { font-size: 14px; padding: 10px 20px; margin-left: 0; }
      }
      @media (max-width: 480px) {
         .slide-badge { font-size: 11px; padding: 5px 12px; }
         .slide-trust { display: flex; margin-top: 8px; }
         .slide-trust span { font-size: 11px; padding: 5px 10px; }
         .hero-ghost-btn { display: inline-flex; width: 100%; max-width: 280px; justify-content: center; }
      }

      /* ── Slide-up text animation ───────────────────────────── */
      @keyframes slideUpIn {
         0%   { opacity: 0; transform: translateY(50px); }
         100% { opacity: 1; transform: translateY(0);    }
      }
      .slide-h2, .slide-p, .slide-btn { opacity: 0; }

      #carouselExampleDark .carousel-item.active .slide-h2 {
         animation: slideUpIn 0.8s ease forwards;
         animation-delay: 0.1s;
      }
      #carouselExampleDark .carousel-item.active .slide-p {
         animation: slideUpIn 0.8s ease forwards;
         animation-delay: 0.38s;
      }
      #carouselExampleDark .carousel-item.active .slide-btn {
         animation: slideUpIn 0.8s ease forwards;
         animation-delay: 0.65s;
      }

      /* ── Tablet (≤991px) ───────────────────────────────────────── */
      @media (max-width: 991px) {
         #carouselExampleDark .carousel-item,
         #carouselExampleDark .carousel-item.active {
            padding: 95px 0 32px;
         }
         #carouselExampleDark .carousel-caption.hero-video-caption {
            max-width: 42rem;
            padding: 0 max(20px, env(safe-area-inset-left)) 0 max(20px, env(safe-area-inset-right));
         }
         .hero-video-caption .slide-h2 {
            font-size: clamp(1.6rem, 3.5vw, 2.2rem) !important;
            font-weight: 800 !important;
            line-height: 1.22;
            word-wrap: break-word;
            overflow-wrap: break-word;
         }
         .hero-video-caption .slide-p {
            font-size: clamp(0.95rem, 2.2vw, 1.1rem) !important;
            line-height: 1.65;
            word-wrap: break-word;
            overflow-wrap: break-word;
         }
         .cta-two__right {
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
            justify-content: center;
            max-width: none;
         }
         .hero-video-caption .thm-btn,
         .hero-video-caption .hero-ghost-btn {
            width: auto;
            max-width: none;
            margin-left: 0;
         }

         /* Why Choose Us */
         .why-choose-one__right.get-unprec01 { margin-right: 0 !important; }
         .chooseus__div .choose-stick        { width: 80%; }
         .chooseus__div .center-notch,
         .chooseus__div .left-notch,
         .chooseus__div .right-notch         { display: none; }
      }

      /* ── Mobile (≤767px) ───────────────────────────────────── */
      @media (max-width: 767px) {
         body { padding-top: 65px; }
         #carouselExampleDark { margin-top: -65px; }
         #carouselExampleDark .carousel-item {
            padding: 85px 0 28px;
         }
         #carouselExampleDark .carousel-caption.hero-video-caption {
            max-width: 100%;
            padding: 0 max(18px, env(safe-area-inset-left)) 0 max(18px, env(safe-area-inset-right));
         }
         .hero-video-caption .slide-h2 {
            font-size: clamp(1.15rem, 5vw, 1.45rem) !important;
            font-weight: 800 !important;
            line-height: 1.28;
            margin-bottom: 10px;
         }
         .hero-video-caption .slide-p {
            font-size: clamp(0.82rem, 3.4vw, 0.97rem) !important;
            line-height: 1.6;
         }
         .cta-two__right {
            flex-direction: column;
            width: 100%;
            max-width: 300px;
            margin-left: auto;
            margin-right: auto;
         }
         .hero-video-caption .thm-btn,
         .hero-video-caption .hero-ghost-btn {
            width: 100%;
            max-width: 300px;
            justify-content: center;
            margin-left: 0 !important;
         }

         /* ── Why Choose Us ── */
         .chooseus__div                    { overflow: hidden; }
         .chooseus__div .choose-stick      { width: 70%; margin: -15px auto; }
         .chooseus__div .center-notch,
         .chooseus__div .left-notch,
         .chooseus__div .right-notch       { display: none; }
         .choose-card                      { min-height: 220px !important; padding: 35px 16px 20px !important; }
         .swiper-slide-active .choose-card { min-height: 240px !important; padding: 35px 16px 30px !important; }
         .choose-heading h4                { font-size: 1rem; margin-top: 15px; }
         .choose-description p             { font-size: 0.82rem; line-height: 1.45; }
         .swiper-chooseus                  { padding-bottom: 10px !important; }
      }

      /* ── Small phones (≤480px) ─────────────────────────────── */
      @media (max-width: 480px) {
         #carouselExampleDark .carousel-item {
            padding-top: 80px;
            padding-bottom: 24px;
         }
         .hero-video-caption .slide-h2 {
            font-size: clamp(1.05rem, 5.2vw, 1.3rem) !important;
            font-weight: 800 !important;
            line-height: 1.25;
         }
         .hero-video-caption .slide-p {
            font-size: clamp(0.78rem, 3.8vw, 0.9rem) !important;
            line-height: 1.58;
         }
         .choose-card { min-height: 200px !important; }
      }
      /* ════════════════════════════════════════════════════════ */

      /* ══════════════════════════════════════════════════════════
         ALL DEVICES: video always visible, text always readable
         ══════════════════════════════════════════════════════════ */

      /* Video visible on all screen sizes */
      .hero-video-bg { display: block !important; }

      /* Text always visible (no entrance animation delay issues) */
      @media (max-width: 767px) {
         .slide-h2, .slide-p, .slide-btn {
            opacity: 1 !important;
            animation: none !important;
            transform: none !important;
         }
      }
      /* ══════════════════════════════════════════════════════════ */

      /* ── Consistent section spacing ──────────────────────── */
      .services-three,
      .facilitate,
      .team-one,
      .brand-one,
      .our__clients__section,
      .chooseus__div,
      .project__two,
      .counter-one,
      .cta-twoo,
      .how-it-works             { padding: 80px 0; margin: 0 !important; }

      @media (max-width: 991px) {
         .services-three,
         .facilitate,
         .team-one,
         .brand-one,
         .our__clients__section,
         .chooseus__div,
         .project__two,
         .counter-one,
         .cta-twoo,
         .how-it-works          { padding: 60px 0; }
      }

      @media (max-width: 767px) {
         .services-three,
         .facilitate,
         .team-one,
         .brand-one,
         .our__clients__section,
         .chooseus__div,
         .project__two,
         .counter-one,
         .cta-twoo,
         .how-it-works          { padding: 50px 0; }
      }
      /* ─────────────────────────────────────────────────── */

      .col-md-3.bg-color-grey {
          background-color: #fff !important;
      }
      .our-serv-sub-mn li a {
          display: block !important;
          line-height: 18px !important;
      }
      ul.ser-ul {
          background: #fff !important;
      }
      .get-unprec {
          margin: 0px;
      }
      .why-choose-one-box-1.right-box {
          left: 0px;
      }
      .why-choose-one-box-2.right-box {
          left: 112px;
      }
      .why-choose-one-box-3.right-box {
          left: 0px;
      }
      .why-choose-one__right.get-unprec01 {
          position: relative;
          display: block;
          margin-right: 0 !important;
      }
      .why-choose-one {
          padding: 60px 0 60px;
      }
      section.app-dev-ser {
          margin-top: 60px;
      }
      p.req-a-qt-des {
          padding: 0 200px;
      }
      .why-choose-one__left:before {
          display: none;
      }
   </style>
   <style>
      @media screen and (max-width: 500px){
      .section-title__title{
      text-align: center;
      }
      .welcome-three__features{
      display: flex;
      justify-content: center;
      }
      .welcome-three__btn{
      display: table;
      margin: 0 auto;
      }
      .how-it-works__bottom-text{
      width: 100%;
      }
      .text-center-mob{
      text-align: center;
      }
      p.section-title__paragraph {
            font-size: 20px;
            width: 100%;
            margin: 0 auto;
        }
      }
   </style>
<body>
   <div class="page-wrapper" onmousedown='return false;' onselectstart='return false;'>
      <!--Header-Main Start-->
      <?php require_once 'includes/header.php'; ?>
      <!--Header-Main End-->

      <div id="carouselExampleDark" class="carousel carousel-dark home__page">
         <!-- Single shared video plays behind every slide -->
         <!-- Sprint 2: id added for prefers-reduced-motion JS; aria-hidden prevents screen-reader noise -->
         <video class="hero-video-bg" id="hero-bg-video" autoplay muted loop playsinline aria-hidden="true">
            <source src="<?= $B ?>/assets/images/vecteezy_united-states-flag-waving-gently-against-a-bright-blue-sky_71755534.mp4" type="video/mp4">
         </video>
         <!-- Sprint 2 Task 6: prefers-reduced-motion guard
              Users who have requested reduced motion in their OS settings
              should not be subjected to an auto-playing looping video.
              This script runs immediately (IIFE) so the pause happens
              before the first frame is decoded, avoiding any flash of motion. -->
         <script>
         (function () {
            'use strict';
            if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
               var v = document.getElementById('hero-bg-video');
               if (v) {
                  v.pause();
                  v.removeAttribute('autoplay');
               }
            }
         })();
         </script>
         <div class="carousel-overlay"></div>

         <div class="carousel-inner" onmousedown='return false;' onselectstart='return false;'>

            <!-- Hero – Custom Software -->
            <div class="carousel-item active">
               <div class="carousel-caption d-block hero-video-caption">
                  <div class="slide-badge slide-btn">Award-Winning Software Development Company — New York, USA</div>
                  <h1 class="slide-h2" style="margin-bottom:16px;">
                     #1 <span>Custom Software Development Company</span> in New York — Mobile Apps, Web &amp; AI Solutions
                  </h1>
                  <p class="slide-p">From startups to Fortune 500 — we deliver high-performance mobile apps, web platforms, and AI solutions that cut costs, boost ROI, and scale with your ambitions. 500+ projects. 10+ years. Zero compromise.</p>
                  <div class="slide-trust slide-p">
                     <span>500+ Projects</span>
                     <span>10+ Years Experience</span>
                     <span>98% Client Satisfaction</span>
                  </div>
                  <div class="cta-two__right mt-4 slide-btn">
                     <a href="<?= $B ?>/contact.php" class="thm-btn cta-two__btn redchange">Get a Free Quote →</a>
                     <a href="<?= $B ?>/services/case-studies" class="hero-ghost-btn">View Our Work</a>
                  </div>
               </div>
            </div>

         </div>
      </div>

      <!--Services Three Start-->
      <section class="services-three">
         <div class="services-three-shape"
            style="background-image: url(<?= $B ?>/assets/images/shapes/services-three-shape.webp)"></div>
         <div class="container-fluid">
            <div class="section-title text-center">
               <h2 class="section-title__title">Services We Offer</h2>
               <p class="section-title__paragraph">We provide significant benefits for your digital transformation journey.</p>
            </div>
            <div class="services-three__top">
               <section class="custom-slider-section">
                  <div class="custom-slider">
                     <div class="custom-slider-wrapper">
                        <div class="custom-slider-item active" data-bg="url('<?= $B ?>/assets/images/services-we-offer/mobile-app-dev.webp')">
                            <a href="<?= $B ?>/services/mobile-app-development.php" class="custom-slider-text">Mobile Development</a>
                        </div>
                        <div class="custom-slider-item" data-bg="url('<?= $B ?>/assets/images/services-we-offer/artifical-intelligience.webp')">
                            <a href="<?= $B ?>/services/artificial-intelligence.php" class="custom-slider-text">Artificial Intelligence</a>
                        </div>
                        <div class="custom-slider-item" data-bg="url('<?= $B ?>/assets/images/services-we-offer/blockchain-main.webp')">
                            <a href="<?= $B ?>/services/blockchain-development.php" class="custom-slider-text">Blockchain Development</a>
                        </div>
                        <div class="custom-slider-item" data-bg="url('<?= $B ?>/assets/images/services-we-offer/web-dev.webp')">
                            <a href="<?= $B ?>/services/web-development.php" class="custom-slider-text">Web Development</a>
                        </div>
                        <div class="custom-slider-item" data-bg="url('<?= $B ?>/assets/images/services-we-offer/progreesive-web-app.webp')">
                            <a href="<?= $B ?>/services/progressive-web-apps.php" class="custom-slider-text">Progressive Web App</a>
                        </div>
                        <div class="custom-slider-item" data-bg="url('<?= $B ?>/assets/images/mvp-startup-development-img2.webp')">
                            <a href="<?= $B ?>/services/mvp-startup-development.php" class="custom-slider-text">MVP Development</a>
                        </div>
                        <div class="custom-slider-item" data-bg="url('<?= $B ?>/assets/images/services-we-offer/digital-marketing.webp')">
                            <a href="<?= $B ?>/services/digital-marketing.php" class="custom-slider-text">Digital Marketing</a>
                        </div>
                     </div>
                     <button class="custom-slider-prev">&#10094;</button>
                     <button class="custom-slider-next">&#10095;</button>
                  </div>
               </section>
            </div>
         </div>
      </section>
      <!--Services Three End-->

      <!-- Facilitate Section Start -->
<section class="facilitate">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="facilitate-content text-center">
                    <h2 class="section-title__title">Facilitate Successful Outcomes</h2>
                    <p class="section-title__paragraph">With hundreds of successful projects, we know what works in digital solutions.</p>
                </div>
            </div>
        </div>
        <div id="facilitiesCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="facilities-grid">
                        <div class="facilitites-images">
                            <img src="<?= $B ?>/assets/images/Healthcare.webp" class="image-001 d-block w-100" alt="Healthcare">
                        </div>
                        <div class="facilitites-texts text-001">
                            <h6>Empowering</h6>
                            <h4>Future With Tailored Healthcare Solutions</h4>
                            <p>Dive into our transformative healthcare solutions designed to elevate patient care, optimize operations, and drive innovation in the rapidly evolving healthcare landscape.</p>
                            <div class="facilities-btn">
                                <a href="<?= $B ?>/solutions/healthcare-app-development.php"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="facilitites-images">
                            <img src="<?= $B ?>/assets/images/Education.webp" class="image-002 d-block w-100" alt="Education">
                        </div>
                        <div class="facilitites-texts text-002">
                            <h6>Education</h6>
                            <h4>Intranet Portal with Generative AI</h4>
                            <p>Generative AI-based portal with DMS and CMS capabilities for a multinational company.</p>
                            <div class="facilities-btn">
                                <a href="<?= $B ?>/solutions/educations.php"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="facilities-grid">
                        <div class="facilitites-texts text-003">
                            <h6>Sports</h6>
                            <h4>Collaboration Solution that Score High</h4>
                            <p>Gear up for the future of sports recruiting with inventive technology's solutions.</p>
                            <div class="facilities-btn">
                                <a href="<?= $B ?>/solutions/sports.php"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="facilitites-images">
                            <img src="<?= $B ?>/assets/images/Sports.webp" class="image-004 d-block w-100" alt="Sports">
                        </div>
                        <div class="facilitites-texts text-004">
                            <h6>Financial &amp; Banking</h6>
                            <h4>Revolutionizing Finances With Premium Financial &amp; Banking Solutions</h4>
                            <p>Get innovative financial technology designed by ArtisticWebServices to streamline operations, enhance security, and drive sustainable growth.</p>
                            <div class="facilities-btn">
                                <a href="<?= $B ?>/solutions/financial-and-banking.php"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="facilitites-images">
                            <img src="<?= $B ?>/assets/images/Fintech.webp" class="image-003 d-block w-100" alt="Fintech">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="facilities-grid">
                        <div class="facilitites-texts text-005">
                            <h6>Travel</h6>
                            <h4>Discover Tailored Travel Solutions</h4>
                            <p>Explore personalized travel apps that enhance your journeys with seamless booking, travel assistance, and itinerary management.</p>
                            <div class="facilities-btn">
                                <a href="<?= $B ?>/solutions/travel-app-development.php"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="facilitites-images">
                            <img src="<?= $B ?>/assets/images/Travelling.webp" class="image-005 d-block w-100" alt="Travel">
                        </div>
                        <div class="facilitites-texts text-006">
                            <h6>E-commerce</h6>
                            <h4>Revolutionize Shopping with Custom E-commerce Solutions</h4>
                            <p>Empower your business with top-notch e-commerce solutions tailored to enhance user experience and maximize sales.</p>
                            <div class="facilities-btn">
                                <a href="<?= $B ?>/services/ecommerce-app-development.php"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                         <div class="facilitites-images">
                            <img src="<?= $B ?>/assets/images/e-commerce-002.webp" class="image-003 d-block w-100" alt="E-commerce">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="facilities-grid">
                        <div class="facilitites-texts text-005">
                            <h6>Real Estate</h6>
                            <h4>Modernize Your Real Estate Systems for a Competitive Edge</h4>
                            <p>Get ultimate leads, double up your customers acquisitions, escalate your annual revenue</p>
                            <div class="facilities-btn">
                                <a href="<?= $B ?>/services/mobile-app-development.php"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="facilitites-images">
                            <img src="<?= $B ?>/assets/images/realestate-002.webp" class="image-005 d-block w-100" alt="Real Estate">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="facilities-grid">
                        <div class="facilitites-texts text-005">
                            <h6>Fitness &amp; Wellness</h6>
                            <h4>Effective Collaboration for a Healthier You</h4>
                            <p>Embark on a transformative journey to a healthier life, where vibrant wellness and fitness with lasting happiness that inspires every step of your way.</p>
                            <div class="facilities-btn">
                                <a href="<?= $B ?>/services/fitness-mobile-app-development.php"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="facilitites-images">
                            <img src="<?= $B ?>/assets/images/fitness-wellness.webp" class="image-005 d-block w-100" alt="Fitness">
                        </div>
                        <div class="facilitites-texts text-001">
                            <h6>Empowering</h6>
                            <h4>Future With Tailored Healthcare Solutions</h4>
                            <p>Dive into our transformative healthcare solutions designed to elevate patient care, optimize operations, and drive innovation in the rapidly evolving healthcare landscape.</p>
                            <div class="facilities-btn">
                                <a href="<?= $B ?>/solutions/healthcare-app-development.php"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                         <div class="facilitites-images">
                            <img src="<?= $B ?>/assets/images/healthcare-0002.webp" class="image-001 d-block w-100" alt="Healthcare">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#facilitiesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#facilitiesCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- Facilitate Section End -->

      <!--Team One Start-->
<!--
<section class="team-one">
  <div class="container">
    <div class="section-title text-center">
      <h2 class="section-title__title mt-3">Technologies We Work With</h2> </div>
  </div>
</section>
-->
<!--Team One End-->
<!--Brand Two Start-->
<!--
<section class="brand-one">
  <div class="container-fluid">
    <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": { "spaceBetween": 30, "slidesPerView": 2 },
            "375": { "spaceBetween": 30, "slidesPerView": 2 },
            "575": { "spaceBetween": 30, "slidesPerView": 3 },
            "767": { "spaceBetween": 50, "slidesPerView": 5 },
            "991": { "spaceBetween": 50, "slidesPerView": 6 },
            "1199": { "spaceBetween": 35, "slidesPerView": 8 }
        }}'>
      <div class="swiper-wrapper">
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/android.webp" alt="Android"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/angular.webp" alt="Angular"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/appium.webp" alt="Appium"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/aws.webp" alt="AWS"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/dc.webp" alt="DC"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/dynamodb.webp" alt="DynamoDB"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/firebase.webp" alt="Firebase"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/flutter.webp" alt="Flutter"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/gradle.webp" alt="Gradle"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/html5.webp" alt="HTML5"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt="Ionic"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/ios.webp" alt="iOS"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/java.webp" alt="Java"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/jenkins.webp" alt="Jenkins"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/kotlin.webp" alt="Kotlin"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/linode.webp" alt="Linode"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/magento.webp" alt="Magento"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/mongo.webp" alt="MongoDB"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/mssql.webp" alt="MSSQL"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/mysql.webp" alt="MySQL"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/node.webp" alt="Node.js"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/ocject.webp" alt="Objective-C"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/php.webp" alt="PHP"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/rackspace.webp" alt="Rackspace"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/react.webp" alt="React"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/redis.webp" alt="Redis"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/selenium.webp" alt="Selenium"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/shopify.webp" alt="Shopify"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/swift.webp" alt="Swift"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/ts.webp" alt="TypeScript"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/vue.webp" alt="Vue.js"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/wordpress.webp" alt="WordPress"> </div>
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/wpf.webp" alt="WPF"> </div>
      </div>
    </div>
  </div>
</section>
-->
<!--Brand Two End-->

<section class="services-three our__clients__section">
    <div class="services-three-shape" style="background-image: url(<?= $B ?>/assets/images/shapes/solutions-section-shape.webp)"></div>
    <div class="container-fluid">
       <div class="section-title text-center">
          <h2 class="section-title__title">Industries</h2>
          <p class="section-title__paragraph">Catering to Diverse Industries with Tailored Solutions</p>
       </div>
       <div class="services-three__top">
          <section class="custom-slider-section solutions-slider-section">
             <div class="custom-slider solutions-slider">
                <div class="custom-slider-wrapper solutions-slider-wrapper">
                    <div class="custom-slider-item solutions-slider-item active" data-bg="url('<?= $B ?>/assets/images/industries-one/01-healcare.webp')">
                        <a href="<?= $B ?>/solutions/healthcare-app-development.php" class="custom-slider-text">Healthcare</a>
                    </div>
                    <div class="custom-slider-item solutions-slider-item" data-bg="url('<?= $B ?>/assets/images/industries-one/education.webp')">
                        <a href="<?= $B ?>/solutions/education-and-learning.php" class="custom-slider-text">Education</a>
                    </div>
                    <div class="custom-slider-item solutions-slider-item" data-bg="url('<?= $B ?>/assets/images/industries-one/2.%20Fintech.webp')">
                        <a href="<?= $B ?>/solutions/financial-and-banking.php" class="custom-slider-text">Financial &amp; Banking</a>
                    </div>
                    <div class="custom-slider-item solutions-slider-item" data-bg="url('<?= $B ?>/assets/images/industries-one/oil-gas.webp')">
                        <a href="<?= $B ?>/solutions/oil-and-gas-refinery-management-software.php" class="custom-slider-text">Oil &amp; Gas</a>
                    </div>
                    <div class="custom-slider-item solutions-slider-item" data-bg="url('<?= $B ?>/assets/images/industries-one/05-ecommerce.webp')">
                        <a href="<?= $B ?>/services/ecommerce-app-development.php" class="custom-slider-text">Ecommerce</a>
                    </div>
                    <div class="custom-slider-item solutions-slider-item" data-bg="url('<?= $B ?>/assets/images/industries-one/fitness-and-wellness.webp')">
                        <a href="<?= $B ?>/services/fitness-mobile-app-development.php" class="custom-slider-text">Fitness &amp; Wellness</a>
                    </div>
                </div>
                <button class="custom-slider-prev solutions-slider-prev">&#10094;</button>
                <button class="custom-slider-next solutions-slider-next">&#10095;</button>
             </div>
          </section>
       </div>
    </div>
</section><style>
    .swiper-chooseus .swiper-slide{ padding: 10px 2px; }
    .chooseus__div{ overflow: hidden; }
    .choose-stick{ width: 90%; margin: -25px auto; display: block; position: relative; z-index: 5; }
    .choose-card{ background: #fff; box-shadow: 0 0 30px #d5d5d5; border-radius: 20px; padding: 50px 20px 5px 20px; text-align: center; min-height: 280px }
    .choose-heading h4{ font-weight: bold; margin-bottom: 10px; margin-top: 25px; }
    .choose-description{ margin-bottom: 0; font-size: 14px; line-height: 20px; }
    .swiper-slide-active .choose-card{ background: #17161a; color: #fff; padding: 50px 20px 30px 20px; min-height: 310px; }
    .swiper-slide-active .choose-card h4{ color: #fff; }
    .swiper-slide-active .choose-card p{ color: rgba(255,255,255,0.85); }
    .chooseus-div{ position: relative; }
    .center-notch{ position: absolute; transform: translate(-50%, -50%); height: 30px; left: 50%; width: 50px; border-radius: 0px 0px 150px 150px; background-color: #fff; z-index: 3; top: 143px; }
    .left-notch{ position: absolute; transform: translate(-50%, -50%); height: 26px; left: 7%; width: 50px; border-radius: 0px 0px 150px 150px; background-color: #ededed; z-index: 3; top: 143px; }
    .right-notch{ position: absolute; transform: translate(-50%, -50%); height: 26px; right: 3%; width: 50px; border-radius: 0px 0px 150px 150px; background-color: #ededed; z-index: 3; top: 143px; }

    /* ── Active card DARK – targets both real and loop-clone active slides ── */
    section.chooseus__div .swiper-slide-active .choose-card,
    section.chooseus__div .swiper-slide-duplicate-active .choose-card {
        background-color: #17161a !important;
        color: #fff !important;
        padding: 50px 20px 30px !important;
        min-height: 310px !important;
        box-shadow: 0 8px 40px rgba(0,0,0,0.25) !important;
    }
    section.chooseus__div .swiper-slide-active .choose-card h4,
    section.chooseus__div .swiper-slide-duplicate-active .choose-card h4 {
        color: #fff !important;
    }
    section.chooseus__div .swiper-slide-active .choose-card p,
    section.chooseus__div .swiper-slide-duplicate-active .choose-card p {
        color: rgba(255,255,255,0.85) !important;
    }
    /* ── Non-active cards stay white ── */
    section.chooseus__div .swiper-slide:not(.swiper-slide-active):not(.swiper-slide-duplicate-active) .choose-card {
        background-color: #fff !important;
        color: #333 !important;
    }
    /* ── Swiper: grab cursor for desktop drag ── */
    .swiper-chooseus { cursor: grab; }
    .swiper-chooseus:active { cursor: grabbing; }
    .chooseus__div { overflow: hidden; }
</style>

<style>
    /* ── Facilitate section: images fill containers consistently ── */
    .facilities-grid { align-items: stretch; }
    .facilitites-images {
        overflow: hidden;
        display: flex;
    }
    .facilitites-images img {
        width: 100% !important;
        height: 100% !important;
        min-height: 200px;
        object-fit: cover !important;
        object-position: center top;
        display: block;
    }
    img.image-004 {
        margin-top: 0 !important;
        height: 100% !important;
        min-height: 200px;
        object-fit: cover !important;
    }
    /* ── Facilitate carousel controls: always centered vertically ── */
    .facilitate .carousel-control-prev,
    .facilitate .carousel-control-next {
        margin: auto;
        top: 0;
        bottom: 0;
        height: 50px;
        width: 40px;
    }
</style>
<section class="chooseus__div">
    <div class="container chooseus-div">
    <h2 class="section-title__title text-center">Why Choose Us</h2>
    <img src="<?= $B ?>/assets/images/choose-us-stick.webp" alt="chooseus stick" class="img-fluid mt-4 choose-stick">
    <div class="center-notch"></div>
    <div class="left-notch"></div>
    <div class="right-notch"></div>
    <div class="swiper swiper-chooseus">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="choose-card">
                    <div class="choose-heading"><h4>Focused Business <br> Approach</h4></div>
                    <div class="choose-description"><p>With our focused approach to Mobile App Development, we are the best in business when it comes to App development for mobile, tablet &amp; web platforms.</p></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="choose-card">
                    <div class="choose-heading"><h4>Professional <br> Team</h4></div>
                    <div class="choose-description"><p>Our team is highly skilled in Native, Hybrid, and Web Application development on all major mobile, tablet, and web platforms including iOS, Android, Windows &amp; Web.</p></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="choose-card">
                    <div class="choose-heading"><h4>Flexible Payment <br> Terms</h4></div>
                    <div class="choose-description"><p>Develop your application at the best price and pay with our flexible payment terms as your project progresses. Award-winning custom software development companies value your feedback.</p></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="choose-card">
                    <div class="choose-heading"><h4>Life time Bug <br> Free Warranty</h4></div>
                    <div class="choose-description"><p>Enjoying a lifetime error-free guarantee, our customers keep their apps smooth and save time and money on fixing minor bugs. And we believe that a commitment to excellence at every stage.</p></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="choose-card">
                    <div class="choose-heading"><h4>Source Code <br> Ownership</h4></div>
                    <div class="choose-description"><p>Upon development completion &amp; after product launch, we deliver complete source code with ownership without any additional fee and also give you the flexibility.</p></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="choose-card">
                    <div class="choose-heading"><h4>No 3rd Party <br> Involvement</h4></div>
                    <div class="choose-description"><p>Award-winning custom software development company proficient developers and the entire app development team handle all projects and customer service.</p></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section><script>
    window.addEventListener('load', function() {
        function applyChooseCardStyles(swiper) {
            swiper.el.querySelectorAll('.choose-card').forEach(function(card) {
                card.style.backgroundColor = '#fff';
                card.style.color = '#333';
                card.style.boxShadow = '0 0 30px #d5d5d5';
                card.style.minHeight = '280px';
                card.querySelectorAll('h4').forEach(function(h) { h.style.color = ''; });
                card.querySelectorAll('p').forEach(function(p)  { p.style.color = ''; });
            });
            swiper.el.querySelectorAll('.swiper-slide-active, .swiper-slide-duplicate-active').forEach(function(slide) {
                var card = slide.querySelector('.choose-card');
                if (!card) return;
                card.style.backgroundColor = '#17161a';
                card.style.color = '#fff';
                card.style.boxShadow = '0 8px 40px rgba(0,0,0,0.25)';
                card.style.minHeight = '310px';
                card.querySelectorAll('h4').forEach(function(h) { h.style.color = '#fff'; });
                card.querySelectorAll('p').forEach(function(p)  { p.style.color = 'rgba(255,255,255,0.85)'; });
            });
        }

        var swiperChoose = new Swiper(".swiper-chooseus", {
            spaceBetween: 20,
            autoplay: { delay: 3000, disableOnInteraction: false },
            loop: true,
            centeredSlides: true,
            grabCursor: true,
            allowTouchMove: true,
            touchRatio: 1,
            touchAngle: 45,
            simulateTouch: true,
            slidesPerView: 1,
            breakpoints: {
                480: { slidesPerView: 1, spaceBetween: 16 },
                768: { slidesPerView: 2, spaceBetween: 20 },
                980: { slidesPerView: 3, spaceBetween: 24 },
            },
            on: {
                init:          function() { applyChooseCardStyles(this); },
                slideChange:   function() { applyChooseCardStyles(this); },
                transitionEnd: function() { applyChooseCardStyles(this); },
            }
        });
    });
</script>

      <!--Project One Start-->
<section class="project__two">
   <div class="container">
      <div class="section-title text-center">
         <span class="section-title__tagline">recent projects</span>
         <h2 class="section-title__title">Work Showcase</h2>
      </div>
      <div class="case_studies">
         <div class="swiper my__Swiper">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
               <div class="slider-items">
                  <div class="case-content">
                     <h3>Transform Your Fitness Journey with Custom Mobile App Solutions Tailored for Success</h3>
                     <p>Transform your fitness journey into a powerful mobile solution with Fitness App Development. Our expert team brings you user-friendly apps crafted for personal trainers and several fitness and wellness brands.</p>
                     <div class="case_btn"><a href="<?= $B ?>/services/fitness-mobile-app-development.php">See More</a></div>
                  </div>
                  <div class="case-imgs"><img src="<?= $B ?>/assets/images/fitness/2-custom-fitness-app.webp" alt="Custom Fitness App" /></div>
               </div>
               </div>
               <div class="swiper-slide">
               <div class="slider-items">
                  <div class="case-content">
                     <h3>Empowering Healthcare with Seamless Telemedicine Apps and Advanced Integrated Features</h3>
                     <p>These comprehensive telemedicine experiences, enhance the patient's care and convenience while ensuring effective communication between patients and healthcare providers.</p>
                     <div class="case_btn"><a href="<?= $B ?>/services/case-studies#work-showcase">See More</a></div>
                  </div>
                  <div class="case-imgs"><img src="<?= $B ?>/assets/images/showcase/telehome.webp" alt="Telemedicine App" /></div>
               </div>
               </div>
               <div class="swiper-slide">
               <div class="slider-items">
                  <div class="case-content">
                     <h3>Revolutionizing Finances With Premium Financial &amp; Banking Solutions</h3>
                     <p>ArtisticWebServices got it covered for you. From blockchain technology and AI-driven analytics to personalized financial products, our expert team provides advanced solutions that foster growth and enhance customer experience.</p>
                     <div class="case_btn"><a href="<?= $B ?>/solutions/financial-and-banking.php">See More</a></div>
                  </div>
                  <div class="case-imgs"><img src="<?= $B ?>/assets/images/finance/06.webp" alt="Financial Banking" /></div>
               </div>
               </div>
               <div class="swiper-slide">
                  <div class="slider-items">
                  <div class="case-content">
                     <h3>Revolutionizing Healthcare: Seamless, Accessible Solutions from the Leading App Development Company</h3>
                     <p>Since 2018, we have been helping health sectors, with our innovative technologies we deliver the best telemedicine features while keeping patient comfort and care in mind with custom healthcare app development while simplifying patients care like never before.</p>
                     <div class="case_btn"><a href="<?= $B ?>/solutions/healthcare-app-development.php">See More</a></div>
                  </div>
                  <div class="case-imgs"><img src="<?= $B ?>/assets/images/health/1-digital-health-m,anagement.webp" alt="Healthcare App" /></div>
               </div>
               </div>
               <div class="swiper-slide">
               <div class="slider-items">
                  <div class="case-content">
                     <h3>Unlock the Future of Real Estate with Cutting-Edge App Solutions Tailored for You</h3>
                     <p>Achieve customer satisfaction, and let your business reach sky-high revenue with unique mobile solutions for multiple sectors including real estate. Collaborate with our top-notch real estate developers today.</p>
                     <div class="case_btn"><a href="<?= $B ?>/services/mobile-app-development.php">See More</a></div>
                  </div>
                  <div class="case-imgs"><img src="<?= $B ?>/assets/images/realstate/admin-panel.webp" alt="Real Estate App" /></div>
               </div>
               </div>
               <div class="swiper-slide">
               <div class="slider-items">
                  <div class="case-content">
                     <h3>Transform Connections and Empower Your Community with Next-Gen Social Networking Solutions</h3>
                     <p>Businesses are looking for innovation since the social networking landscape is evolving rapidly and companies are facing new exceptions daily while targeting their desired audiences effectively.</p>
                     <div class="case_btn"><a href="<?= $B ?>/services/social-networking-solution.php">See More</a></div>
                  </div>
                  <div class="case-imgs"><img src="<?= $B ?>/assets/images/social/01.webp" alt="Social Networking" /></div>
               </div>
               </div>
               <div class="swiper-slide">
               <div class="slider-items">
                  <div class="case-content">
                     <h3>Explore New Horizons with Innovative Travel App Solutions Tailored for Your Journey</h3>
                     <p>ArtisticWebServices is a dedicated app development company, providing top-notch and user-focused travel apps that will change your perception towards the digital world.</p>
                     <div class="case_btn"><a href="<?= $B ?>/solutions/travel-app-development.php">See More</a></div>
                  </div>
                  <div class="case-imgs"><img src="<?= $B ?>/assets/images/travel-app-development-company.webp" alt="Travel App" /></div>
               </div>
               </div>
               <div class="swiper-slide">
               <div class="slider-items">
                  <div class="case-content">
                     <h3>Revolutionizing Healthcare with Smart Apps for a Healthier, Connected World</h3>
                     <p>Medical App is a cloud-based on-demand application for doctors, designed and developed by our mobile app developers. Do you want to create a software-based doctor-on-demand application or solution?</p>
                     <div class="case_btn"><a href="<?= $B ?>/services/healthcare-medical-app.php">See More</a></div>
                  </div>
                  <div class="case-imgs"><img src="<?= $B ?>/assets/images/Healthcare.webp" alt="Healthcare Medical App" /></div>
               </div>
               </div>
               <div class="swiper-slide">
               <div class="slider-items">
                  <div class="case-content">
                     <h3>Score Big with Innovative Sports Collaboration Solutions for Seamless Teamwork</h3>
                     <p>Sports Drive (Mobile App &amp; Web Software) features collectively enhance the user experience, making sports apps more engaging and informative for fans.</p>
                     <div class="case_btn"><a href="<?= $B ?>/solutions/sports.php">See More</a></div>
                  </div>
                  <div class="case-imgs"><img src="<?= $B ?>/assets/images/sports-main.webp" alt="Sports App" /></div>
               </div>
               </div>
               <div class="swiper-slide">
               <div class="slider-items">
                  <div class="case-content">
                     <h3>Streamline Operations and Maximize Efficiency with Advanced Oil &amp; Gas Refinery Management Software</h3>
                     <p>Kick off a journey of transformation and efficiency with our next-gen refinery management software, crafted to meet the evolving needs of the oil and gas industry.</p>
                     <div class="case_btn"><a href="<?= $B ?>/solutions/oil-and-gas-refinery-management-software.php">See More</a></div>
                  </div>
                  <div class="case-imgs"><img src="<?= $B ?>/assets/images/oilgas/main-image.webp" alt="Oil Gas Software" /></div>
               </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script>
    window.addEventListener('load', function() {
        new Swiper(".my__Swiper", {
            loop: true,
            autoplay: { delay: 6000 },
        });
    });
    </script>
</section>
      <!--Project One End-->

      <!--Counter One Start-->
      <section class="counter-one">
    <div class="counter-one__inner">
        <div class="counter-one-pattern" style="background-image: url(<?= $B ?>/assets/images/shapes/counter-one-pattern.webp)"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="list-unstyled counter-one__list">
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="counter-one__icon"> <span class="icon-recommend"></span> </div>
                            <h3 class="odometer" data-count="460">00</h3><span class="plus-sign">+</span>
                            <p class="counter-one__text">Projects Completed</p>
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="counter-one__icon"> <span class="icon-recruit"></span> </div>
                            <h3 class="odometer" data-count="45">00</h3><span class="plus-sign">+</span>
                            <p class="counter-one__text">Active Clients</p>
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="counter-one__icon"> <span class="icon-customer"></span> </div>
                            <h3 class="odometer" data-count="300">00</h3><span class="plus-sign">+</span>
                            <p class="counter-one__text">Satisfied Clients</p>
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="400ms">
                            <div class="counter-one__icon"> <span class="icon-graphic-designer"></span> </div>
                            <h3 class="odometer" data-count="80">00</h3><span class="plus-sign">+</span>
                            <p class="counter-one__text">Expert Teams</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
      <!--Counter One End-->

        <section class="cta-twoo">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-two__inner">
                    <div class="cta-two__left">
                        <div class="cta-two__icon">
                            <span class="icon-consulting"></span>
                        </div>
                        <div class="cta-two__title-box">
                            <h2 class="cta-two__title">Estimate The Cost Of Your <br> Future Application</h2>
                        </div>
                    </div>
                    <div class="cta-two__right">
                        <a href="<?= $B ?>/services/app-cost-calculator.php" class="thm-btn cta-two__btn redchange">Calculate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

      <!--How It Works Start-->
      <section class="how-it-works">
    <div class="container">
        <div class="section-title text-center"> <span class="section-title__tagline">easy 6 steps</span>
            <h2 class="section-title__title">Our Process</h2>
        </div>
        <img src="<?= $B ?>/assets/images/process.webp" alt="process" class="img-fluid d-none d-md-block">
        <img src="<?= $B ?>/assets/images/process-mobile.webp" alt="process" class="img-fluid d-block d-md-none">
        <div class="how-it-works__bottom wow fadeInUp animated" data-wow-delay="900ms"
            style="visibility: visible; animation-delay: 900ms; animation-name: fadeInUp;">
            <div class="row">
                <div class="col-xl-12">
                    <div class="how-it-works__bottom-inner">
                        <p class="how-it-works__bottom-text">Our flexible app development team is always ready to take
                            on challenging projects. Our cost-effective solutions catered precisely to making your
                            business grow! </p> <a href="<?= $B ?>/contact.php" class="thm-btn how-it-works__btn">get a free quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
      <!--How It Works End-->

      <!--Site Footer Start-->
      <?php require_once 'includes/social-share.php'; ?>
      <?php require_once 'includes/footer.php'; ?>
      <!--Site Footer End-->

      <script>
        document.addEventListener('DOMContentLoaded', () => {
            function initializeSlider(sliderWrapperSelector, prevButtonSelector, nextButtonSelector, sectionSelector) {
                const sliderWrapper = document.querySelector(sliderWrapperSelector);
                if (!sliderWrapper) return;
                const items = sliderWrapper.querySelectorAll('.custom-slider-item');
                const prevButton = document.querySelector(prevButtonSelector);
                const nextButton = document.querySelector(nextButtonSelector);
                const section = document.querySelector(sectionSelector);
                let index = 0;
                const totalItems = items.length;
                let visibleItems = 4;

                function updateVisibleItems() {
                    visibleItems = window.innerWidth <= 991 ? 1 : 4;
                }

                function updateSlider() {
                    sliderWrapper.style.transform = `translateX(${-index * (100 / visibleItems)}%)`;
                }

                /* Apply each item's own background image from data-bg */
                function applyItemBackgrounds() {
                    items.forEach((item) => {
                        const bg = item.getAttribute('data-bg');
                        if (bg) item.style.backgroundImage = bg;
                    });
                }

                if (nextButton) nextButton.addEventListener('click', () => {
                    index = index < totalItems - visibleItems ? index + 1 : 0;
                    updateSlider();
                });

                if (prevButton) prevButton.addEventListener('click', () => {
                    index = index > 0 ? index - 1 : totalItems - visibleItems;
                    updateSlider();
                });

                window.addEventListener('resize', () => { updateVisibleItems(); updateSlider(); });
                updateVisibleItems(); updateSlider(); applyItemBackgrounds();
            }

            initializeSlider('.custom-slider-wrapper', '.custom-slider-prev', '.custom-slider-next', '.custom-slider-section');
            initializeSlider('.solutions-slider-wrapper', '.solutions-slider-prev', '.solutions-slider-next', '.solutions-slider-section');
        });
      </script>

   </div>
   <!-- /.page-wrapper -->
</body>
</html>
