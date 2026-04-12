<!-- ── Page Preloader ────────────────────────────────────── -->
<style>
#aws-preloader {
    position: fixed;
    inset: 0;
    z-index: 999999;
    background: #17161a;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.65s cubic-bezier(0.4,0,0.2,1), visibility 0.65s ease;
}
#aws-preloader.aws-loaded {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
}

/* ── Main circle wrapper ── */
.aws-pre-wrap {
    position: relative;
    width: 180px;
    height: 180px;
    opacity: 0;
    animation: awsPreIn 0.55s cubic-bezier(0.22,1,0.36,1) 0.1s forwards;
}
@keyframes awsPreIn {
    from { opacity: 0; transform: scale(0.82); }
    to   { opacity: 1; transform: scale(1); }
}

/* ── 3 SVG rings (each on its own layer) ── */
.aws-pre-rings {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    overflow: visible;   /* prevent mobile browsers clipping the outer stroke */
}

/* ── Mobile: scale wrap so outer ring never touches edges ── */
@media (max-width: 400px) {
    .aws-pre-wrap {
        width: 140px;
        height: 140px;
    }
    .aws-pre-icon img {
        width: 60px;
        height: 60px;
    }
}

/* shared arc style */
.aws-arc { fill: none; stroke-linecap: round; transform-origin: 50% 50%; }

/* Ring 1 — outermost, red, fastest */
.aws-arc-1 {
    stroke: #dd0429;
    stroke-width: 3.5;
    stroke-dasharray: 439.8;   /* 2π × 70 */
    stroke-dashoffset: 330;
    animation: awsSpin1 1.2s linear infinite;
}
/* Ring 2 — middle, lighter red, medium speed, opposite direction */
.aws-arc-2 {
    stroke: rgba(221,4,41,0.55);
    stroke-width: 2.5;
    stroke-dasharray: 376.9;   /* 2π × 60 */
    stroke-dashoffset: 280;
    animation: awsSpin2 1.9s linear infinite;
}
/* Ring 3 — innermost, faint, slowest */
.aws-arc-3 {
    stroke: rgba(221,4,41,0.28);
    stroke-width: 2;
    stroke-dasharray: 314.1;   /* 2π × 50 */
    stroke-dashoffset: 235;
    animation: awsSpin3 2.8s linear infinite;
}

@keyframes awsSpin1 { to { transform: rotate(360deg); } }
@keyframes awsSpin2 { to { transform: rotate(-360deg); } }
@keyframes awsSpin3 { to { transform: rotate(360deg); } }

/* ── Icon inside ── */
.aws-pre-icon {
    position: absolute;
    inset: 28px;
    border-radius: 50%;
    background: #1e1d23;
    box-shadow:
        0 0 0 1.5px rgba(221,4,41,0.25),
        0 0 28px rgba(221,4,41,0.12),
        0 8px 32px rgba(0,0,0,0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.aws-pre-icon img {
    width: 80px;
    height: 80px;
    object-fit: contain;
    border-radius: 50%;
    animation: awsIconBreath 2.6s ease-in-out infinite;
}
@keyframes awsIconBreath {
    0%,100% { transform: scale(1);    }
    50%      { transform: scale(1.07); }
}

</style>

<div id="aws-preloader" aria-hidden="true" role="status">
    <div class="aws-pre-wrap">

        <!-- 3 concentric spinning arcs -->
        <svg class="aws-pre-rings" viewBox="0 0 180 180" xmlns="http://www.w3.org/2000/svg">
            <!-- faint full tracks -->
            <circle cx="90" cy="90" r="70" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="3.5"/>
            <circle cx="90" cy="90" r="60" fill="none" stroke="rgba(255,255,255,0.04)" stroke-width="2.5"/>
            <circle cx="90" cy="90" r="50" fill="none" stroke="rgba(255,255,255,0.03)" stroke-width="2"/>
            <!-- animated arcs -->
            <circle class="aws-arc aws-arc-1" cx="90" cy="90" r="70"/>
            <circle class="aws-arc aws-arc-2" cx="90" cy="90" r="60"/>
            <circle class="aws-arc aws-arc-3" cx="90" cy="90" r="50"/>
        </svg>

        <!-- Favicon centered inside -->
        <div class="aws-pre-icon">
            <img src="<?= $B ?>/assets/images/favicons/apple-touch-icon.png"
                 alt="Artastic Web Services" width="80" height="80">
        </div>

    </div>
</div>
<!-- ── /Page Preloader ─────────────────────────────────── -->
<link rel="stylesheet" href="<?= $B ?>/assets/css/style-01.css@v=1.1.css" />
<link rel="stylesheet" href="<?= $B ?>/assets/css/mibooz-responsive.css@v=1.1.css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- Font Awesome 6 loaded in head.php -->
<style>
   .navbar {
   box-shadow: 5px 5px 15px #efe9e9;
   background-color: #fff;
   }
   .nav-link {
   color: #000;
   padding: 0;
   }
   .navbar>.container {
   align-items: center;
   }
   .header-logo {
      display: flex;
      align-items: center;
      flex: 1 1 auto;
   }
   @media (min-width: 992px) {
      .header-logo {
         flex: 0 0 auto;
      }
   }
   .navbar-brand img {
      height: 70px;
      width: auto;
      max-width: 220px;
      object-fit: contain;
      display: block;
   }
   @media (max-width: 991px) {
      .navbar-brand img {
         height: 52px;
         max-width: 170px;
      }
   }
   .dropdown-item {
   padding: .25rem 2rem;
   }
   .navbar-expand-lg .navbar-nav .dropdown-menu {
   left: 0;
   }
   /* Desktop-only hover dropdowns */
   @media (min-width: 992px) {
      .dropdown:hover>.dropdown-menu {
         display: block;
      }
   }
   .menu-show{
   display: block;
   }
   /* Dropdown background & shadow */
   .dropdown-menu {
      background-color: #fff !important;
      box-shadow: 0 12px 40px rgba(0,0,0,0.13);
      border: 1px solid rgba(0,0,0,0.07);
   }
   /* Mobile nav collapse scrollable */
   .select2-container--default .select2-selection--multiple{
        min-height: 68px;
        width: 100%;
        border: none;
        background-color: var(--mibooz-extra);
        padding-left: 0px;
        padding-right: 0px;
        margin-top: 20px;
        border-radius: 0;
        outline: 0;
        font-size: 16px;
        color: var(--mibooz-gray);
        display: block;
    }
    .select2-container--default.select2-container--focus .select2-selection--multiple{
        border: none;
    }
   @media screen and (max-width: 768px){
   .navbar-collapse.collapse.show{
   height: 100vh;
   overflow-y: scroll;
   }
   }

   /* ── Mobile Call Now button ─────────────────────────────── */
   .aws-mobile-icons {
      margin-right: 8px;
   }
   .aws-mob-callnow {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 7px 14px;
      border-radius: 50px;
      background: #dd0429;
      color: #fff;
      font-size: 13px;
      font-weight: 600;
      border: none;
      cursor: pointer;
      white-space: nowrap;
      transition: background 0.2s, transform 0.15s;
   }
   .aws-mob-callnow:hover,
   .aws-mob-callnow:active {
      background: #b8021f;
      transform: scale(1.04);
   }

   /* ── Mobile dropdown styles (< 992px) ──────────────────── */
   @media (max-width: 991px) {
      /* Nav items – even spacing & dividers */
      #navbarNav .nav-item {
         border-bottom: 1px solid #f0f0f0;
      }
      #navbarNav .nav-link {
         padding: 13px 6px !important;
         font-size: 15px;
         font-weight: 500;
      }

      /* Dropdown panel – accordion style, left red accent */
      #navbarNav .dropdown-menu {
         position: static !important;
         float: none;
         width: 100% !important;
         box-shadow: none !important;
         border: none !important;
         border-left: 3px solid #e63012 !important;
         border-radius: 0 !important;
         background: #fafafa !important;
         padding: 0 0 6px 0 !important;
         margin: 0 !important;
         display: none;
      }
      #navbarNav .dropdown-menu.menu-show {
         display: block;
         animation: mbDropIn 0.2s ease;
      }
      @keyframes mbDropIn {
         from { opacity: 0; transform: translateY(-5px); }
         to   { opacity: 1; transform: translateY(0); }
      }

      /* Hide decorative image/text first column */
      #navbarNav .dropdown-menu .col-lg-3.cs-border:first-child,
      #navbarNav .dropdown-menu .services-header-img {
         display: none !important;
      }

      /* Collapse row padding */
      #navbarNav .dropdown-menu .row { margin: 0 !important; }
      #navbarNav .dropdown-menu .my-4 { margin: 0 !important; }
      #navbarNav .dropdown-menu .col-lg-3,
      #navbarNav .dropdown-menu .col-lg-12 {
         padding: 0 !important;
         border: none !important;
      }

      /* Section headings (Consulting, Industries, etc.) */
      #navbarNav .dropdown-menu h3 {
         font-size: 10px;
         font-weight: 700;
         letter-spacing: 1px;
         text-transform: uppercase;
         color: #999;
         margin: 0;
         padding: 10px 14px 5px;
         background: #efefef;
      }

      /* List items */
      #navbarNav .dropdown-menu .list-group-item {
         background: transparent;
         border: none;
         border-bottom: 1px solid #ebebeb;
         padding: 10px 14px;
         font-size: 13.5px;
         color: #333;
         transition: background 0.15s, color 0.15s;
      }
      #navbarNav .dropdown-menu .list-group-item:last-child {
         border-bottom: none;
      }
      #navbarNav .dropdown-menu .list-group-item:active,
      #navbarNav .dropdown-menu .list-group-item:hover {
         background: #fff0ee;
         color: #e63012;
      }
      #navbarNav .dropdown-menu .list-group-item .red-icon {
         color: #e63012;
         font-size: 14px;
         min-width: 18px;
      }
      #navbarNav .dropdown-menu .list-group-item img.red-icon {
         width: 16px;
         height: 16px;
         min-width: 16px;
      }
      /* Hide mt-4 spacers inside dropdowns */
      #navbarNav .dropdown-menu .mt-4 { margin-top: 0 !important; }
   }
</style>
<a class="skip-to-main" href="#main-content">Skip to main content</a>
<nav class="navbar navbar-expand-lg pb-3 fixed-top">
   <div class="container">
      <div class="header-logo">
         <a class="navbar-brand" href="<?= $B ?>/"><img src="<?= $B ?>/assets/images/artistic%20web%20service%20w-01.png"
         alt="ArtisticWebServices" width="220" height="70" style="height:70px;width:auto;max-width:220px;object-fit:contain;" loading="eager"></a>

         <!-- Mobile-only Call Now button (hidden on desktop) -->
         <div class="aws-mobile-icons d-flex d-lg-none align-items-center">
            <button class="aws-mob-callnow" onclick="openLeadModal()" aria-label="Call Now">
               <i class="fa fa-phone"></i> Call Now
            </button>
         </div>

         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <i class="fa-solid fa-bars"></i>
         </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="<?= $B ?>/services/mvp-startup-development.php" onmouseenter="closealldrp()">Startups</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= $B ?>/services/enterprise-development.php" onmouseenter="closealldrp()">Enterprise</a>
            </li>
            <li class="nav-item dropdown dropdown-hover position-static">
               <a class="nav-link dropdown-toggle" href="javascript:void(0)" onmouseenter="servicedrp()" onclick="mobileDrpToggle('servicedropdown', event)" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
               Services
               </a>
               <div class="dropdown-menu w-100 mt-0" id="servicedropdown"
                  style="border-top-left-radius: 0; border-top-right-radius: 0;">
                  <div class="container">
                     <div class="row my-4">
                        <div class="col-lg-3 mb-3 mb-lg-0 cs-border">
                           <div class="services-header-img mt-4">
                              <img src="<?= $B ?>/assets/images/services.webp" alt="">
                           </div>
                           <p class=" mb-0 mt-4" style="font-size: 24px; font-weight: 600">Our Services</p>
                           <p class="">Using cutting-edge technology to develop industry-leading digital
                              products.
                           </p>
                        </div>
                        <div class="col-lg-3 mb-3 mb-lg-0 cs-border">
                           <div class="list-group list-group-flush">
                              <a href="<?= $B ?>/services/mobile-app-development.php" class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-mobile-button"></i> Mobile Application Development</a>
                              <a href="<?= $B ?>/services/progressive-web-apps.php"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-window-maximize"></i> Progressive Web App</a>
                              <a href="<?= $B ?>/services/web-development.php"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-globe"></i> Web Development</a>
                              <a href="<?= $B ?>/services/ecommerce-app-development.php"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-cart-shopping"></i> Ecommerce App</a>
                              <a href="<?= $B ?>/services/augmented-reality.php"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-vr-cardboard"></i> Augmented Reality</a>
                              <a href="<?= $B ?>/services/custom-crm-development-services.php"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-display"></i> Custom CRM</a>
                              <a href="<?= $B ?>/services/mvp-startup-development.php"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-lightbulb"></i> MVP Development</a>
                              <a href="<?= $B ?>/services/digital-marketing.php"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-computer"></i>Digital Marketing</a>
                           </div>
                        </div>
                        <div class="col-lg-3 mb-3 mb-lg-0 cs-border">
                           <div class="list-group list-group-flush">
                              <a href="<?= $B ?>/services/security-operations-services.php" class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-shield-halved"></i> DevOps &amp; Security</a>
                              <a href="<?= $B ?>/services/iot-app-development.php" class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-cloud-arrow-up"></i> IoT Development</a>
                              <a href="<?= $B ?>/services/blockchain-development.php"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-brands fa-hive"></i> Blockchain</a>
                              <a href="<?= $B ?>/services/sharepoint-development.php"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-display"></i> SharePoint </a>
                              <a href="<?= $B ?>/services/business-intelligence.php"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-person-chalkboard"></i> Business Intelligence</a>
                              <a href="<?= $B ?>/services/consulting-services.php"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-person-arrow-up-from-line"></i> Consulting Services</a>
                              <a href="<?= $B ?>/services/artificial-intelligence.php"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-robot"></i> Artificial Intelligence</a>
                           </div>
                        </div>
                        <div class="col-lg-3 mb-3 mb-lg-0">
                           <div class="d-flex align-items-center list-group list-group-flush">
                              <a href="<?= $B ?>/services/legacy-application-modernization-services.php" class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-brands fa-codepen"></i> Legacy Modernization</a>
                              <a href="<?= $B ?>/services/microservices-development.php" class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-microchip"></i> Microservices Development</a>
                              <a href="<?= $B ?>/services/enterprise-development.php"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-chart-column"></i> ERP System Development</a>
                              <a href="<?= $B ?>/services/app-support.php" class="d-flex align-items-center list-group-item list-group-item-action"><i class="d-block me-3 red-icon fa-solid fa-headset"></i> App
                              Support & Maintenance</a>
                              <a href="<?= $B ?>/services/customer-experience-and-design.php"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="d-block me-3 red-icon fa-brands fa-uikit"></i> Customer Experience &
                              Design</a>
                              <a href="<?= $B ?>/services/cloud-managed-services.php" class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-cloud"></i> Cloud Managed Services</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li class="nav-item dropdown dropdown-hover position-static">
               <a class="nav-link dropdown-toggle" href="javascript:void(0)" onmouseenter="solutiondrp()" onclick="mobileDrpToggle('solutiondropdown', event)" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
               Solutions
               </a>
               <div class="dropdown-menu w-100 mt-0" id="solutiondropdown"
                  style="border-top-left-radius: 0; border-top-right-radius: 0;">
                  <div class="container">
                     <div class="row my-4">
                        <div class="col-lg-3 mb-3 mb-lg-0 cs-border">
                           <div class="services-header-img">
                              <img src="<?= $B ?>/assets/images/solutions.webp" alt="">
                           </div>
                           <p class=" mb-0 mt-4" style="font-size: 24px; font-weight: 600">Our Solutions</p>
                           <p class="">Personalized digital solutions that help customers increase their
                              competitive advantage.
                           </p>
                        </div>
                        <div class="col-lg-3 mb-3 mb-lg-0 cs-border">
                           <div class="list-group list-group-flush">
                              <h3 class=" mb-3">Consulting</h3>
                              <a href="<?= $B ?>/solutions/full-cycle-development.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/material-symbols_cycle.svg" class="red-icon me-3 d-block" alt=""> Full Cycle Product Development</a>
                              <a href="<?= $B ?>/solutions/product-management.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/dashicons_networking.svg" class="red-icon me-3 d-block" alt="">Product Management</a>
                              <a href="<?= $B ?>/solutions/ui-ux.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/bi_ui-radios.svg" class="red-icon me-3 d-block" alt=""> UI/UX</a>
                              <a href="<?= $B ?>/services/mvp-startup-development.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/streamline_startup.svg" class="red-icon me-3 d-block" alt=""> Startup</a>
                              <a href="<?= $B ?>/services/enterprise-development.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/carbon_network-enterprise.svg" class="red-icon me-3 d-block" alt=""> Enterprise</a>
                              <a href="<?= $B ?>/solutions/hire-dedicated-developers.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/iconoir_developer.svg" class="red-icon me-3 d-block" alt=""> Hire Dedicated Developer</a>
                           </div>
                        </div>
                        <div class="col-lg-3 mb-3 mb-lg-0 cs-border">
                           <div class="list-group list-group-flush">
                              <h3 class=" mb-3">Industries</h3>
                              <a href="<?= $B ?>/solutions/healthcare-app-development.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/pajamas_status-health.svg" class="red-icon me-3 d-block" alt=""> Healthcare &amp; Medicine</a>
                              <a href="<?= $B ?>/solutions/education-and-learning.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/eos-icons_machine-learning-outlined.svg" class="red-icon me-3 d-block" alt=""> Education &amp; Learning</a>
                              <a href="<?= $B ?>/solutions/financial-and-banking.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/icon-park-solid_setting-web.svg" class="red-icon me-3 d-block" alt="">Financial &amp; Banking</a>
                              <a href="<?= $B ?>/solutions/travel-app-development.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/material-symbols_travel.svg" class="red-icon me-3 d-block" alt="">Travel &amp; Transportation</a>
                              <a href="<?= $B ?>/solutions/oil-and-gas-refinery-management-software.php" class="list-group-item list-group-item-action d-flex align-items-center"><i class="red-icon me-3 d-block fa-solid fa-oil-can me-3 d-block" style="font-size: 20px;"></i> Oil &amp; Gas</a>
                           </div>
                        </div>
                        <div class="col-lg-3 mb-3 mb-md-0">
                           <div class="list-group list-group-flush mt-4">
                              <a href="<?= $B ?>/services/fitness-mobile-app-development.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/streamline_good-health-and-well-being-solid.svg" class="red-icon me-3 d-block" alt=""> Fitness &amp; Wellness</a>
                              <a href="<?= $B ?>/solutions/sports.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/flat-color-icons_sports-mode.svg" class="red-icon me-3 d-block" alt=""> Sports</a>
                              <a href="<?= $B ?>/services/social-networking-app.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/carbon_network-enterprise.svg" class="red-icon me-3 d-block" alt=""> Social Networking</a>
                              <a href="<?= $B ?>/services/real-estate-app-development.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/material-symbols_real-estate-agent.svg" class="red-icon me-3 d-block" alt=""> Real Estate</a>
                              <a href="<?= $B ?>/solutions/ecommerce-and-trading.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/mdi_shopping.svg" class="red-icon me-3 d-block" alt="">E-Commerce &amp; Trading</a>
                              <a href="<?= $B ?>/services/on-demand-app-development.php" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/lets-icons_paper-fill.svg" class="red-icon me-3 d-block" alt=""> On - Demand</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= $B ?>/insights/case-studies.php" onmouseenter="closealldrp()">Case Studies</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= $B ?>/about-us.php" onmouseenter="closealldrp()">About Us</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= $B ?>/contact.php" onmouseenter="closealldrp()">Contact Us</a>
            </li>
         </ul>
         <div class="main-menu-wrapper__call">
            <button class="aws-call-now-btn" onclick="openLeadModal()">
               <i class="fa fa-phone"></i> Call Now
            </button>
         </div>
      </div>
   </div>
</nav>
<div id="main-content" tabindex="-1" style="outline:none;"></div>
