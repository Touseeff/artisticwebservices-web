<?php
// Start output buffering to prevent header-already-sent errors.
// Required because head.php outputs HTML; any stray whitespace or BOM
// before <?php in config.php or the calling page would otherwise send
// headers prematurely, breaking setcookie() / header() calls.
if (!ob_get_level()) {
    ob_start();
}

// Ensure config is loaded
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}

// Defaults
if (!isset($page_canonical)) $page_canonical = '';
if (!isset($page_og_image)) $page_og_image = SITE_URL . '/assets/images/resources/artisticwebservices-og.png';
if (!isset($page_title)) $page_title = 'ArtisticWebServices: Custom Award Winning Software Development Company';
if (!isset($page_description)) $page_description = 'ArtisticWebServices delivers high-quality custom software, web, and mobile app development services tailored to your business needs.';

// Short alias for base URL (works on localhost subfolder AND production)
$B = SITE_BASE;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <link rel="icon" type="image/x-icon" href="<?= $B ?>/assets/images/favicons/favicon.ico" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <meta name="site-base" content="<?= $B ?>"><?php // used by modal JS for redirect ?>
    <?php
    if (empty($page_canonical)) {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $page_canonical = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?');
    }
    ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($page_canonical, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <!-- Open Graph -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="<?php echo (strpos($_SERVER['REQUEST_URI'], '/insights/') !== false) ? 'article' : 'website'; ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($page_canonical); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($page_og_image); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="ArtisticWebServices">
    <!-- Twitter Card -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@artisticwebsvc">
    <meta property="twitter:url" content="<?php echo htmlspecialchars($page_canonical); ?>">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="twitter:image" content="<?php echo htmlspecialchars($page_og_image); ?>">
    <!-- Hreflang: x-default only — no regional variants exist yet -->
    <link rel="alternate" hreflang="x-default" href="<?php echo htmlspecialchars($page_canonical); ?>" />

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $B ?>/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= $B ?>/assets/images/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $B ?>/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $B ?>/assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?= $B ?>/assets/images/favicons/site.webmanifest">

    <!-- ═══════════════════════════════════════════════════════════
         LCP / Resource Hints
         If the page sets $page_hero_poster, preload it as the LCP image.
         The hero video is NOT preloaded globally — it is not a valid LCP
         element and preloading it blocks bandwidth for actual LCP resources.
         ═══════════════════════════════════════════════════════════ -->
    <?php if (!empty($page_hero_poster)): ?>
    <link rel="preload" as="image"
          href="<?= htmlspecialchars($page_hero_poster) ?>"
          fetchpriority="high">
    <?php else: ?>
    <!-- Navbar logo is the LCP candidate on non-hero pages — preload it -->
    <link rel="preload" as="image"
          href="<?= $B ?>/assets/images/navbar_logo_optimized.jpeg"
          fetchpriority="high">
    <?php endif; ?>

    <!-- Preload critical CSS for performance -->
    <link rel="preload" href="<?= $B ?>/assets/vendors/bootstrap/css/bootstrap.min.css" as="style">
    <link rel="preload" href="<?= $B ?>/assets/css/style-01.css@v=1.1.css" as="style">
    <link rel="preload" href="<?= $B ?>/assets/css/mibooz-responsive.css@v=1.1.css" as="style">
    <!-- DNS prefetch for third-party origins -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://embed.tawk.to">
    <!-- Sprint 2: preconnect for Font Awesome CDN (Task 7) -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <!-- Google Fonts — deferred to avoid render-blocking (display=swap prevents FOIT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload"
          href="https://fonts.googleapis.com/css2?family=Federo&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Federo&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"></noscript>

    <!-- ═══════════════════════════════════════════════════════════
         Sprint 2 — CSS Loading Strategy
         CRITICAL (blocking): Bootstrap layout + main theme + custom fixes
           → These control above-the-fold rendering; must block.
         NON-CRITICAL (deferred): All vendor plugin CSS (animations,
           carousels, sliders, popups, range-sliders, odometers, etc.)
           → Loaded asynchronously via rel=preload hack; noscript fallback
             ensures they load even when JS is disabled.
         ═══════════════════════════════════════════════════════════ -->

    <!-- CRITICAL: Bootstrap layout framework — BLOCKING (above-fold dependency) -->
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/bootstrap/css/bootstrap.min.css" />

    <!-- CRITICAL: Main theme styles — BLOCKING (hero section, navbar, layout) -->
    <link rel="stylesheet" href="<?= $B ?>/assets/css/style-01.css@v=1.1.css" />
    <!-- CRITICAL: Responsive overrides — BLOCKING (must apply in same render pass as style-01) -->
    <link rel="stylesheet" href="<?= $B ?>/assets/css/mibooz-responsive.css@v=1.1.css" />

    <!-- CRITICAL (inlined): Navbar + dropdown + body-padding overrides that affect above-fold rendering.
         Inlining prevents layout shift from custom-fixes.css deferred load below. -->
    <style>
:root{--color-brand-red:#dd0429;--color-brand-red-dark:#d31923;--color-brand-red-accent:#ec1c22;--color-brand-red-hover:#b8021f;--color-text-primary:#222222;--color-text-secondary:#666666;--color-text-light:#999999;--color-text-white:#ffffff;--color-bg-light:#f8f9fa;--color-bg-dark:#1a1a2e;--spacing-xs:8px;--spacing-sm:16px;--spacing-md:24px;--spacing-lg:48px;--spacing-xl:80px;--radius-sm:4px;--radius-md:8px;--radius-lg:16px;--transition-base:0.3s ease}
body{padding-top:68px}
@media(max-width:991.98px){body{padding-top:60px}}
.page-header,.banner-one,.main-slider,.hero-section,.slider-one,[class*="banner-"],[class*="page-header"]{margin-top:0!important}
.navbar{background-color:#fff!important;box-shadow:0 2px 20px rgba(0,0,0,.08)!important;transition:box-shadow .3s ease}
.navbar.scrolled{box-shadow:0 4px 25px rgba(0,0,0,.14)!important}
.navbar-brand img{max-height:50px;width:auto}
@media(max-width:991.98px){.navbar-brand img{max-height:42px}}
.navbar .nav-link{font-size:14px;font-weight:500;color:#222!important;border-radius:4px;transition:color .2s ease,background .2s ease;position:relative;white-space:nowrap}
@media(min-width:1200px){.navbar .nav-link{padding:0 12px;line-height:50px}}
@media(min-width:992px)and (max-width:1199px){.navbar .nav-link{padding:0 7px;font-size:13px;line-height:50px}.main-menu-wrapper__call .aws-call-now-btn{padding:7px 14px;font-size:12.5px}}
@media(max-width:991.98px){.navbar .nav-link{padding:10px 6px}}
.navbar .nav-link:hover,.navbar .nav-link:focus{color:#dd0429!important;background:rgba(221,4,41,.05)}
.navbar .nav-link.dropdown-toggle::after{vertical-align:middle}
.navbar .main-menu-wrapper__call{margin-right:0!important;margin-left:12px!important}
@media(min-width:992px){.navbar-collapse{min-width:0}.navbar-expand-lg .navbar-nav{flex-shrink:1}}
.navbar.aws-site-nav{transition:transform .32s cubic-bezier(.4,0,.2,1),box-shadow .32s ease;will-change:transform}
.navbar.aws-site-nav.aws-nav--hidden{transform:translateY(-102%);box-shadow:none;pointer-events:none}
.dropdown-menu{background-color:#fff!important;border:none!important;box-shadow:0 15px 50px rgba(0,0,0,.13)!important;border-radius:0 0 10px 10px!important;margin-top:0!important;animation:dropFadeIn .18s ease forwards}
@keyframes dropFadeIn{from{opacity:0;transform:translateY(-8px)}to{opacity:1;transform:translateY(0)}}
.dropdown-item{font-size:14px;font-weight:400;color:#333!important;padding:8px 20px!important;transition:background .15s ease,color .15s ease,padding-left .15s ease}
.dropdown-item:hover{background-color:rgba(221,4,41,.06)!important;color:#dd0429!important;padding-left:26px!important}
.dropdown-menu .list-group-item{border:none!important;border-bottom:1px solid #f0f0f0!important;background:transparent!important;color:#333;font-size:14px;padding:10px 12px;transition:background .15s ease,color .15s ease,padding-left .15s ease}
.dropdown-menu .list-group-item:hover{background-color:rgba(221,4,41,.06)!important;color:#dd0429!important;padding-left:20px}
.dropdown-menu .red-icon{color:#dd0429;font-size:16px;width:20px;flex-shrink:0}
.dropdown-menu h3{font-size:14px;font-weight:700;color:#111;text-transform:uppercase;letter-spacing:.5px;margin-bottom:8px!important;padding-bottom:6px;border-bottom:2px solid #dd0429;display:inline-block}
.navbar-toggler{border:none!important;outline:none!important;box-shadow:none!important;padding:6px 10px;background:rgba(221,4,41,.08);border-radius:6px}
.navbar-toggler:focus{box-shadow:0 0 0 3px rgba(221,4,41,.2)!important}
.navbar-toggler .fa-bars{font-size:20px;color:#dd0429}
@media(max-width:991.98px){#awsSiteNav.navbar .navbar-toggler{position:relative!important;top:auto!important;right:auto!important;left:auto!important;flex-shrink:0}#awsSiteNav #navbarNav.navbar-collapse{background:#fff;border-top:none;padding:16px;max-height:min(80vh,calc(100vh - 72px));overflow-y:auto;border-radius:0 0 10px 10px;box-shadow:0 10px 30px rgba(0,0,0,.12);-webkit-overflow-scrolling:touch}#awsSiteNav #navbarNav.navbar-collapse.collapse.show{height:auto!important}.navbar-nav .nav-item{border-bottom:1px solid #f0f0f0}.navbar-nav .nav-item:last-child{border-bottom:none}.navbar-nav .nav-link{padding:12px 8px!important;font-size:15px}.navbar-nav .dropdown-toggle::after{float:right;margin-top:8px}#awsSiteNav #navbarNav .dropdown-menu{box-shadow:none!important;border:none!important;border-left:none!important;border-bottom:none!important;border-radius:0!important;margin-left:0;padding:8px 0;background:#fafafa!important}#awsSiteNav #navbarNav .dropdown-menu h3{border-bottom:none!important}#awsSiteNav #navbarNav .dropdown-menu .list-group-item{font-size:13px;padding:8px 16px}#awsSiteNav #navbarNav .dropdown-menu .col-lg-3:first-child .services-header-img,#awsSiteNav #navbarNav .dropdown-menu .col-lg-3:first-child p{display:none}.main-menu-wrapper__call{margin-top:16px;padding-top:16px;border-top:1px solid #f0f0f0}}
@media(min-width:992px){#awsSiteNav #navbarNav.navbar-collapse{border:none!important;box-shadow:none!important;background:transparent!important;padding:0!important;max-height:none!important;overflow:visible!important;border-radius:0!important}}
.main-menu-wrapper__call{display:flex;align-items:center;gap:10px}
.main-menu-wrapper__call-icon img{width:38px;height:38px;object-fit:contain}
.main-menu-wrapper__call-number h5{margin:0;font-size:14px}
.nav-number{color:#dd0429!important;font-weight:600;text-decoration:none;transition:color .2s}
.nav-number:hover{color:#b8001f!important}
main>section:first-child,.page-body>section:first-child,section.banner-one,section.page-header{position:relative;z-index:1}
section{position:relative}
img{max-width:100%;height:auto}
    </style>

    <!-- NON-CRITICAL: Full custom overrides — deferred (critical sections inlined above) -->
    <link rel="preload" href="<?= $B ?>/assets/css/custom-fixes.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= $B ?>/assets/css/custom-fixes.css"></noscript>

    <!-- ─── NON-CRITICAL: Vendor plugin CSS — DEFERRED (below-fold only) ───── -->

    <!-- Sprint 2 Task 7: Font Awesome — deferred (icons appear in navbar but
         navbar has no layout-breaking fallback; FA is 102 KB and fully non-layout) -->
    <link rel="preload"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          as="style"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"></noscript>

    <!-- Animate.css — below-fold scroll animations -->
    <link rel="preload" href="<?= $B ?>/assets/vendors/animate/animate.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= $B ?>/assets/vendors/animate/animate.min.css"></noscript>

    <link rel="preload" href="<?= $B ?>/assets/vendors/animate/custom-animate.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= $B ?>/assets/vendors/animate/custom-animate.css"></noscript>

    <!-- Jarallax — parallax plugin, below-fold -->
    <link rel="preload" href="<?= $B ?>/assets/vendors/jarallax/jarallax.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= $B ?>/assets/vendors/jarallax/jarallax.css"></noscript>

    <!-- magnific-popup CSS removed: no .video-popup or .img-popup element exists on any page -->
    <!-- nouislider CSS removed: no #range-slider-price element exists on any page -->

    <!-- Odometer — counter animations, below-fold -->
    <link rel="preload" href="<?= $B ?>/assets/vendors/odometer/odometer.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= $B ?>/assets/vendors/odometer/odometer.min.css"></noscript>

    <!-- Swiper — carousels, below-fold -->
    <link rel="preload" href="<?= $B ?>/assets/vendors/swiper/swiper.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= $B ?>/assets/vendors/swiper/swiper.min.css"></noscript>

    <!-- Mibooz icons — icon font for decorative icons (below-fold usage) -->
    <link rel="preload" href="<?= $B ?>/assets/vendors/mibooz-icons/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= $B ?>/assets/vendors/mibooz-icons/style.css"></noscript>

    <!-- tiny-slider CSS removed: zero .thm-tiny__slider elements exist on any page (Sprint 2) -->

    <!-- The Sayinistic decorative font — below-fold headings only -->
    <link rel="preload" href="<?= $B ?>/assets/vendors/the-sayinistic-font/stylesheet.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= $B ?>/assets/vendors/the-sayinistic-font/stylesheet.css"></noscript>

    <!-- Owl Carousel CSS removed: Sprint 3 — migrated to Swiper (owl-to-swiper-migration.js shim) -->

    <!-- bxslider CSS removed: .listing-details__gallery never rendered on any page (Sprint 2) -->

    <!-- bootstrap-select CSS removed: selectpicker() not called in mibooz.js -->
    <!-- jquery-ui CSS removed: not referenced in mibooz.js -->

    <!-- mibooz-responsive.css moved to blocking load above (right after style-01) to prevent cascade break -->

    <!-- Slick Carousel — loaded only on pages that use it (set $load_slick = true before including head.php) -->
    <?php if (!empty($load_slick)): ?>
    <link rel="preload" href="<?= $B ?>/assets/vendors/slick/slick.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= $B ?>/assets/vendors/slick/slick.min.css"></noscript>
    <link rel="preload" href="<?= $B ?>/assets/vendors/slick/slick-theme.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= $B ?>/assets/vendors/slick/slick-theme.min.css"></noscript>
    <?php endif; ?>

    <!-- select2 CSS removed: no .js-example-basic-multiple element exists on any page -->

    <!-- jQuery 3.7.1 moved to footer.php (end of body) for render-unblocking (Sprint 2) -->
    <!-- Stub so openLeadModal() is safe before footer.php loads -->
    <script>function openLeadModal(){var m=document.getElementById('awsLeadModal');if(m){m.classList.add('active');document.body.style.overflow='hidden';}}</script>

    <!-- Font Awesome 6.7.2 via CDN — supports both FA5 (fas/far/fab) and FA6 (fa-solid/fa-regular/fa-brands) syntax -->

    <!-- Organization + LocalBusiness Structured Data JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": ["Organization", "LocalBusiness", "ProfessionalService"],
        "name": "ArtisticWebServices",
        "legalName": "ArtisticWebServices LLC",
        "url": "https://artisticwebservices.com",
        "logo": {
            "@type": "ImageObject",
            "url": "https://artisticwebservices.com/assets/images/resources/artisticwebservices-og.png",
            "width": 300,
            "height": 80
        },
        "image": "https://artisticwebservices.com/assets/images/resources/artisticwebservices-og.png",
        "description": "ArtisticWebServices is an award-winning custom software development company in New York, USA. We build mobile apps, web platforms, AI solutions, and enterprise software for startups and Fortune 500 companies.",
        "foundingDate": "2014",
        "numberOfEmployees": {"@type": "QuantitativeValue", "value": 80},
        "priceRange": "$$",
        "telephone": "+12137147176",
        "email": "info@artisticwebservices.com",
        "contactPoint": [
            {
                "@type": "ContactPoint",
                "telephone": "+12137147176",
                "contactType": "customer service",
                "email": "info@artisticwebservices.com",
                "areaServed": ["US", "AE", "SA", "PK", "QA", "KW", "BH"],
                "availableLanguage": ["en"],
                "hoursAvailable": {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
                    "opens": "09:00",
                    "closes": "18:00"
                }
            },
            {
                "@type": "ContactPoint",
                "contactType": "sales",
                "email": "info@artisticwebservices.com",
                "areaServed": "US"
            }
        ],
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "26 Broadway, Suite 934",
            "addressLocality": "New York",
            "addressRegion": "NY",
            "postalCode": "10004",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 40.7074,
            "longitude": -74.0113
        },
        "areaServed": [
            {"@type": "Country", "name": "United States"},
            {"@type": "Country", "name": "United Arab Emirates"},
            {"@type": "Country", "name": "Saudi Arabia"},
            {"@type": "Country", "name": "Pakistan"},
            {"@type": "Country", "name": "Qatar"},
            {"@type": "Country", "name": "Kuwait"}
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Software Development Services",
            "itemListElement": [
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Mobile App Development"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Web Development"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "AI Development"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Blockchain Development"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Cloud Managed Services"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "UI/UX Design"}}
            ]
        },
        "sameAs": [
            "https://www.facebook.com/artisticwebservices",
            "https://www.linkedin.com/company/artisticwebservices",
            "https://x.com/artisticweb87",
            "https://clutch.co/profile/artisticwebservices",
            "https://www.goodfirms.co/company/artisticwebservices",
            "https://www.upwork.com/ag/artisticwebservices",
            "https://www.instagram.com/artisticwebservices",
            "https://www.youtube.com/@artisticwebservices",
            "https://github.com/artisticwebservices",
            "https://www.glassdoor.com/Overview/Working-at-ArtisticWebServices",
            "https://www.crunchbase.com/organization/artisticwebservices"
        ]
    }
    </script>

    <!-- Dynamic WebPage + BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "<?php echo addslashes(htmlspecialchars_decode($page_title)); ?>",
        "description": "<?php echo addslashes(htmlspecialchars_decode($page_description)); ?>",
        "url": "<?php echo htmlspecialchars($page_canonical); ?>",
        "inLanguage": "en-US",
        "isPartOf": {
            "@type": "WebSite",
            "name": "ArtisticWebServices",
            "url": "https://artisticwebservices.com"
        },
        "publisher": {
            "@type": "Organization",
            "name": "ArtisticWebServices",
            "logo": {
                "@type": "ImageObject",
                "url": "https://artisticwebservices.com/assets/images/resources/artisticwebservices-og.png"
            }
        }
    }
    </script>

    <?php if (!empty($page_breadcrumbs)): ?>
    <!-- BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://artisticwebservices.com/"},
            <?php foreach ($page_breadcrumbs as $i => $bc): ?>
            {"@type": "ListItem", "position": <?php echo $i + 2; ?>, "name": "<?php echo addslashes($bc['name']); ?>", "item": "<?php echo $bc['url']; ?>"}<?php echo ($i < count($page_breadcrumbs) - 1) ? ',' : ''; ?>
            <?php endforeach; ?>
        ]
    }
    </script>
    <?php endif; ?>

    <?php if (!empty($page_faq)): ?>
    <!-- FAQ Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            <?php foreach ($page_faq as $i => $faq): ?>
            {
                "@type": "Question",
                "name": "<?php echo addslashes($faq['q']); ?>",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<?php echo addslashes($faq['a']); ?>"
                }
            }<?php echo ($i < count($page_faq) - 1) ? ',' : ''; ?>
            <?php endforeach; ?>
        ]
    }
    </script>
    <?php endif; ?>

    <?php if (!empty($page_service_schema)): ?>
    <!-- Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "<?php echo addslashes($page_service_schema['name']); ?>",
        "description": "<?php echo addslashes($page_service_schema['description']); ?>",
        "provider": {
            "@type": "Organization",
            "name": "ArtisticWebServices",
            "url": "https://artisticwebservices.com"
        },
        "areaServed": [
            {"@type": "Country", "name": "United States"},
            {"@type": "Country", "name": "United Arab Emirates"},
            {"@type": "Country", "name": "Saudi Arabia"},
            {"@type": "Country", "name": "Pakistan"},
            {"@type": "Country", "name": "Qatar"},
            {"@type": "Country", "name": "Kuwait"},
            {"@type": "Country", "name": "Bahrain"}
        ],
        "url": "<?php echo htmlspecialchars($page_canonical); ?>"
    }
    </script>
    <?php endif; ?>

    <?php if (!empty($page_article_schema)): ?>
    <!-- Article / Case Study Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "<?php echo isset($page_article_schema['type']) ? $page_article_schema['type'] : 'Article'; ?>",
        "headline": "<?php echo addslashes($page_title); ?>",
        "description": "<?php echo addslashes($page_description); ?>",
        "image": "<?php echo htmlspecialchars($page_og_image); ?>",
        "author": {
            "@type": "Person",
            "name": "ArtisticWebServices Editorial Team",
            "url": "https://artisticwebservices.com/about-us",
            "worksFor": {
                "@type": "Organization",
                "name": "ArtisticWebServices"
            }
        },
        "publisher": {
            "@type": "Organization",
            "name": "ArtisticWebServices",
            "logo": {
                "@type": "ImageObject",
                "url": "https://artisticwebservices.com/assets/images/resources/artisticwebservices-og.png"
            }
        },
        "url": "<?php echo htmlspecialchars($page_canonical); ?>",
        "datePublished": "<?php echo isset($page_article_schema['date']) ? $page_article_schema['date'] : date('Y-m-d', filemtime($_SERVER['SCRIPT_FILENAME'])); ?>",
        "dateModified": "<?php echo date('Y-m-d', filemtime($_SERVER['SCRIPT_FILENAME'])); ?>"
    }
    </script>
    <?php endif; ?>

    <?php
    // ── CSRF meta tag for fetch()-based modal forms ───────────────────────────
    // Outputs <meta name="csrf-token" content="..."> so JavaScript modal
    // forms can read the token via:
    //   document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    // csrf_meta() is defined in includes/csrf.php — safe to require here.
    if (!function_exists('csrf_meta')) {
        require_once __DIR__ . '/csrf.php';
    }
    echo csrf_meta();
    ?>
    <style>
    .skip-to-main{position:absolute;left:-9999px;top:0;z-index:999999;background:#dd0429;color:#fff;padding:10px 20px;font-size:14px;font-weight:700;text-decoration:none;border-radius:0 0 6px 0;}
    .skip-to-main:focus{left:0;}
    </style>
</head>

