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
<!-- Select2 CSS removed from here — already loaded correctly in head.php (Sprint 2 dedup fix) -->
<!-- Font Awesome 6 loaded in head.php -->
<style>
   /* ── Navbar base ── */
   .navbar {
      box-shadow: 5px 5px 15px #efe9e9;
      background-color: #fff;
   }
   /* ── Navbar container: logo left, nav right ── */
   .navbar > .container {
      display: flex;
      align-items: center;
      flex-wrap: nowrap;
      gap: 0;
   }
   /* ── Logo wrapper: never shrinks ── */
   .header-logo {
      display: flex;
      align-items: center;
      flex-shrink: 0;
      flex: 0 0 auto;
      gap: 10px;
   }
   .header-logo .navbar-brand {
      margin-right: 0;
      padding-top: 0;
      padding-bottom: 0;
      display: flex;
      align-items: center;
   }
   /* ── Logo image ── */
   .navbar-brand img {
      height: 50px;
      width: auto;
      max-width: 200px;
      object-fit: contain;
      display: block;
   }
   @media (max-width: 991.98px) {
      .navbar-brand img {
         height: 42px;
         max-width: 160px;
      }
   }
   /* ── Collapsed nav: flex row, right-aligned (desktop only) ── */
   @media (min-width: 992px) {
      .navbar-collapse {
         display: flex !important;
         flex: 1 1 auto;
         align-items: center;
         justify-content: flex-end;
         flex-wrap: nowrap;
         gap: 4px;
         min-width: 0;
      }
      .navbar-collapse .navbar-nav {
         display: flex;
         flex-direction: row;
         align-items: center;
         flex-wrap: nowrap;
         margin-left: 0 !important;
         margin-right: 0;
         flex-shrink: 1;
         gap: 2px;
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
<nav id="awsSiteNav" class="navbar navbar-expand-lg py-2 fixed-top aws-site-nav" aria-label="Primary">
   <div class="container">
      <div class="header-logo">
         <a class="navbar-brand" href="<?= $B ?>/"><img src="<?= $B ?>/assets/images/artistic%20web%20service%20w-01.png"
         alt="ArtisticWebServices" width="200" height="50" style="height:50px;width:auto;max-width:200px;object-fit:contain;" loading="eager"></a>

         <!-- Mobile-only Call Now button (hidden on desktop) -->
         <div class="aws-mobile-icons d-flex d-lg-none align-items-center">
            <!-- type="button" prevents accidental form submission (WCAG 4.1.2) -->
            <button type="button" class="aws-mob-callnow" onclick="openLeadModal(this)" aria-label="Call Now">
               <i class="fa fa-phone" aria-hidden="true"></i> Call Now
            </button>
         </div>

         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <!-- aria-hidden: icon is decorative; accessible name comes from aria-label on button -->
         <i class="fa-solid fa-bars" aria-hidden="true"></i>
         </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav align-items-center">
            <li class="nav-item">
               <a class="nav-link" href="<?= $B ?>/services/mvp-startup-development" onmouseenter="closealldrp()">Startups</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= $B ?>/services/enterprise-development" onmouseenter="closealldrp()">Enterprise</a>
            </li>
            <li class="nav-item dropdown dropdown-hover position-static">
               <!-- aria-haspopup="true" and aria-expanded managed by keyboard JS below (WCAG 4.1.2) -->
               <a class="nav-link dropdown-toggle" href="javascript:void(0)" onmouseenter="servicedrp()" onclick="mobileDrpToggle('servicedropdown', event)" role="button"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-aws-dropdown="servicedropdown">
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
                              <a href="<?= $B ?>/services/mobile-app-development" class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-mobile-button" aria-hidden="true"></i> Mobile Application Development</a>
                              <a href="<?= $B ?>/services/progressive-web-apps"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-window-maximize" aria-hidden="true"></i> Progressive Web App</a>
                              <a href="<?= $B ?>/services/web-development"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-globe" aria-hidden="true"></i> Web Development</a>
                              <a href="<?= $B ?>/services/ecommerce-app-development"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-cart-shopping" aria-hidden="true"></i> Ecommerce App</a>
                              <a href="<?= $B ?>/services/augmented-reality"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-vr-cardboard" aria-hidden="true"></i> Augmented Reality</a>
                              <a href="<?= $B ?>/services/custom-crm-development-services"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-display" aria-hidden="true"></i> Custom CRM</a>
                              <a href="<?= $B ?>/services/mvp-startup-development"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-lightbulb" aria-hidden="true"></i> MVP Development</a>
                              <a href="<?= $B ?>/services/digital-marketing"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-computer" aria-hidden="true"></i>Digital Marketing</a>
                           </div>
                        </div>
                        <div class="col-lg-3 mb-3 mb-lg-0 cs-border">
                           <div class="list-group list-group-flush">
                              <a href="<?= $B ?>/services/security-operations-services" class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-shield-halved" aria-hidden="true"></i> DevOps &amp; Security</a>
                              <a href="<?= $B ?>/services/iot-app-development" class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-cloud-arrow-up" aria-hidden="true"></i> IoT Development</a>
                              <a href="<?= $B ?>/services/blockchain-development"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-brands fa-hive" aria-hidden="true"></i> Blockchain</a>
                              <a href="<?= $B ?>/services/sharepoint-development"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-display" aria-hidden="true"></i> SharePoint </a>
                              <a href="<?= $B ?>/services/business-intelligence"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-person-chalkboard" aria-hidden="true"></i> Business Intelligence</a>
                              <a href="<?= $B ?>/services/consulting-services"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-person-arrow-up-from-line" aria-hidden="true"></i> Consulting Services</a>
                              <a href="<?= $B ?>/services/artificial-intelligence"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-robot" aria-hidden="true"></i> Artificial Intelligence</a>
                           </div>
                        </div>
                        <div class="col-lg-3 mb-3 mb-lg-0">
                           <div class="d-flex align-items-center list-group list-group-flush">
                              <a href="<?= $B ?>/services/legacy-application-modernization-services" class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-brands fa-codepen" aria-hidden="true"></i> Legacy Modernization</a>
                              <a href="<?= $B ?>/services/microservices-development" class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-microchip" aria-hidden="true"></i> Microservices Development</a>
                              <a href="<?= $B ?>/services/enterprise-development"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-chart-column" aria-hidden="true"></i> ERP System Development</a>
                              <a href="<?= $B ?>/services/app-support" class="d-flex align-items-center list-group-item list-group-item-action"><i class="d-block me-3 red-icon fa-solid fa-headset" aria-hidden="true"></i> App
                              Support & Maintenance</a>
                              <a href="<?= $B ?>/services/customer-experience-and-design"
                                 class="d-flex align-items-center list-group-item list-group-item-action"><i class="d-block me-3 red-icon fa-brands fa-uikit" aria-hidden="true"></i> Customer Experience &
                              Design</a>
                              <a href="<?= $B ?>/services/cloud-managed-services" class="d-flex align-items-center list-group-item list-group-item-action"><i class="me-3 d-block red-icon fa-solid fa-cloud" aria-hidden="true"></i> Cloud Managed Services</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li class="nav-item dropdown dropdown-hover position-static">
               <a class="nav-link dropdown-toggle" href="javascript:void(0)" onmouseenter="solutiondrp()" onclick="mobileDrpToggle('solutiondropdown', event)" role="button"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-aws-dropdown="solutiondropdown">
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
                              <a href="<?= $B ?>/solutions/full-cycle-development" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/material-symbols_cycle.svg" class="red-icon me-3 d-block" alt=""> Full Cycle Product Development</a>
                              <a href="<?= $B ?>/solutions/product-management" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/dashicons_networking.svg" class="red-icon me-3 d-block" alt="">Product Management</a>
                              <a href="<?= $B ?>/solutions/ui-ux" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/bi_ui-radios.svg" class="red-icon me-3 d-block" alt=""> UI/UX</a>
                              <a href="<?= $B ?>/services/mvp-startup-development" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/streamline_startup.svg" class="red-icon me-3 d-block" alt=""> Startup</a>
                              <a href="<?= $B ?>/services/enterprise-development" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/carbon_network-enterprise.svg" class="red-icon me-3 d-block" alt=""> Enterprise</a>
                              <a href="<?= $B ?>/solutions/hire-dedicated-developers" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/iconoir_developer.svg" class="red-icon me-3 d-block" alt=""> Hire Dedicated Developer</a>
                           </div>
                        </div>
                        <div class="col-lg-3 mb-3 mb-lg-0 cs-border">
                           <div class="list-group list-group-flush">
                              <h3 class=" mb-3">Industries</h3>
                              <a href="<?= $B ?>/solutions/healthcare-app-development" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/pajamas_status-health.svg" class="red-icon me-3 d-block" alt=""> Healthcare &amp; Medicine</a>
                              <a href="<?= $B ?>/solutions/education-and-learning" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/eos-icons_machine-learning-outlined.svg" class="red-icon me-3 d-block" alt=""> Education &amp; Learning</a>
                              <a href="<?= $B ?>/solutions/financial-and-banking" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/icon-park-solid_setting-web.svg" class="red-icon me-3 d-block" alt="">Financial &amp; Banking</a>
                              <a href="<?= $B ?>/solutions/travel-app-development" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/material-symbols_travel.svg" class="red-icon me-3 d-block" alt="">Travel &amp; Transportation</a>
                              <a href="<?= $B ?>/solutions/oil-and-gas-refinery-management-software" class="list-group-item list-group-item-action d-flex align-items-center"><i class="red-icon me-3 d-block fa-solid fa-oil-can me-3 d-block" style="font-size: 20px;" aria-hidden="true"></i> Oil &amp; Gas</a>
                           </div>
                        </div>
                        <div class="col-lg-3 mb-3 mb-md-0">
                           <div class="list-group list-group-flush mt-4">
                              <a href="<?= $B ?>/services/fitness-mobile-app-development" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/streamline_good-health-and-well-being-solid.svg" class="red-icon me-3 d-block" alt=""> Fitness &amp; Wellness</a>
                              <a href="<?= $B ?>/solutions/sports" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/flat-color-icons_sports-mode.svg" class="red-icon me-3 d-block" alt=""> Sports</a>
                              <a href="<?= $B ?>/services/social-networking-app" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/carbon_network-enterprise.svg" class="red-icon me-3 d-block" alt=""> Social Networking</a>
                              <a href="<?= $B ?>/services/real-estate-app-development" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/material-symbols_real-estate-agent.svg" class="red-icon me-3 d-block" alt=""> Real Estate</a>
                              <a href="<?= $B ?>/solutions/ecommerce-and-trading" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/mdi_shopping.svg" class="red-icon me-3 d-block" alt="">E-Commerce &amp; Trading</a>
                              <a href="<?= $B ?>/services/on-demand-app-development" class="list-group-item list-group-item-action d-flex align-items-center"> <img src="<?= $B ?>/assets/images/svg-icons/lets-icons_paper-fill.svg" class="red-icon me-3 d-block" alt=""> On - Demand</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= $B ?>/services/case-studies" onmouseenter="closealldrp()">Case Studies</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= $B ?>/about-us" onmouseenter="closealldrp()">About Us</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= $B ?>/contact" onmouseenter="closealldrp()">Contact Us</a>
            </li>
         </ul>
         <div class="main-menu-wrapper__call">
            <!-- type="button" prevents accidental form submission (WCAG 4.1.2) -->
            <button type="button" class="aws-call-now-btn" onclick="openLeadModal(this)">
               <i class="fa fa-phone" aria-hidden="true"></i> Call Now
            </button>
         </div>
      </div>
   </div>
</nav>
<div id="main-content" tabindex="-1" style="outline:none;"></div>
<?php if (!empty($page_breadcrumbs)): ?>
<div class="aws-breadcrumb-bar" aria-label="Breadcrumb navigation">
   <div class="container">
      <ol class="breadcrumb mb-0" itemscope itemtype="https://schema.org/BreadcrumbList">
         <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="<?= $B ?>/" itemprop="item"><span itemprop="name">Home</span></a>
            <meta itemprop="position" content="1" />
         </li>
         <?php foreach ($page_breadcrumbs as $i => $bc): ?>
            <?php $isLast = ($i === count($page_breadcrumbs) - 1); ?>
            <li class="breadcrumb-item<?= $isLast ? ' active' : '' ?>"
               itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
               <?= $isLast ? 'aria-current="page"' : '' ?>>
               <?php if (!$isLast): ?>
                  <a href="<?= htmlspecialchars($bc['url']) ?>" itemprop="item"><span itemprop="name"><?= htmlspecialchars($bc['name']) ?></span></a>
               <?php else: ?>
                  <span itemprop="name"><?= htmlspecialchars($bc['name']) ?></span>
               <?php endif; ?>
               <meta itemprop="position" content="<?= $i + 2 ?>" />
            </li>
         <?php endforeach; ?>
      </ol>
   </div>
</div>
<?php endif; ?>

<script>
/* ── Mega-menu keyboard accessibility (WCAG 2.1.1 / 4.1.2) ───────────────────
   Allows keyboard users to open Services and Solutions menus using Enter/Space,
   close them with Escape, and navigate items with Tab. aria-expanded is kept in
   sync so screen readers announce expanded/collapsed state correctly.           */
document.addEventListener('DOMContentLoaded', function () {
    /* Target only the two mega-menu triggers (identified by data-aws-dropdown) */
    var dropdownTriggers = document.querySelectorAll('[data-aws-dropdown]');

    /* Helper: close all mega-menu dropdowns and reset aria-expanded */
    function closeAllDropdowns() {
        dropdownTriggers.forEach(function (trigger) {
            trigger.setAttribute('aria-expanded', 'false');
            var ddId = trigger.getAttribute('data-aws-dropdown');
            var dd   = document.getElementById(ddId);
            if (dd) dd.classList.remove('menu-show');
        });
    }

    dropdownTriggers.forEach(function (trigger) {
        /* ── Keyboard handler ── */
        trigger.addEventListener('keydown', function (e) {
            var ddId = trigger.getAttribute('data-aws-dropdown');
            var menu = document.getElementById(ddId);
            var isOpen = trigger.getAttribute('aria-expanded') === 'true';

            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                /* Close all first, then conditionally open this one */
                closeAllDropdowns();
                if (!isOpen && menu) {
                    trigger.setAttribute('aria-expanded', 'true');
                    menu.classList.add('menu-show');
                    /* Move focus to the first focusable link inside the dropdown */
                    var firstLink = menu.querySelector('a');
                    if (firstLink) firstLink.focus();
                }
            }

            if (e.key === 'Escape') {
                e.preventDefault();
                closeAllDropdowns();
                trigger.focus(); /* return focus to the trigger */
            }
        });

        /* ── Keep aria-expanded in sync when mouse opens/closes the dropdown ── */
        /* servicedrp() / solutiondrp() add/remove menu-show; a MutationObserver
           keeps aria-expanded accurate without touching existing mouse logic.   */
        var ddId = trigger.getAttribute('data-aws-dropdown');
        var menu = document.getElementById(ddId);
        if (menu) {
            var observer = new MutationObserver(function () {
                var open = menu.classList.contains('menu-show');
                trigger.setAttribute('aria-expanded', open ? 'true' : 'false');
            });
            observer.observe(menu, { attributes: true, attributeFilter: ['class'] });
        }
    });

    /* ── Close menus when focus leaves the entire nav (keyboard Tab-away) ── */
    var nav = document.querySelector('.navbar');
    if (nav) {
        nav.addEventListener('focusout', function (e) {
            /* relatedTarget is the element receiving focus; null means focus left document */
            if (!nav.contains(e.relatedTarget)) {
                closeAllDropdowns();
            }
        });
    }

    /* ── Close menus when clicking outside (keyboard users may also use pointer) ── */
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.dropdown-hover')) {
            closeAllDropdowns();
        }
    });

    /* Fixed navbar: hide on scroll down, show on scroll up (skip while mobile menu open). */
    var siteNav = document.getElementById('awsSiteNav');
    var navCollapse = document.getElementById('navbarNav');
    if (siteNav) {
        var lastScrollY = window.scrollY || 0;
        var navTicking = false;
        function navMenuOpen() {
            return navCollapse && navCollapse.classList.contains('show');
        }
        window.addEventListener('scroll', function () {
            if (navTicking) return;
            navTicking = true;
            requestAnimationFrame(function () {
                if (navMenuOpen()) {
                    siteNav.classList.remove('aws-nav--hidden');
                } else {
                    var y = window.scrollY || 0;
                    if (y < 16) {
                        siteNav.classList.remove('aws-nav--hidden');
                    } else if (y > lastScrollY && y > 80) {
                        siteNav.classList.add('aws-nav--hidden');
                    } else if (y < lastScrollY) {
                        siteNav.classList.remove('aws-nav--hidden');
                    }
                }
                lastScrollY = window.scrollY || 0;
                navTicking = false;
            });
        }, { passive: true });
    }
});
</script>
