<?php
// Ensure config is loaded
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}

// Defaults
if (!isset($page_canonical)) $page_canonical = SITE_URL . '/';
if (!isset($page_og_image)) $page_og_image = SITE_URL . '/assets/images/resources/artisticwebservice w.png';
if (!isset($page_title)) $page_title = 'ArtisticWebServices: Custom Award Winning Software Development Company';
if (!isset($page_description)) $page_description = 'ArtisticWebServices delivers high-quality custom software, web, and mobile app development services tailored to your business needs.';

// Short alias for base URL (works on localhost subfolder AND production)
$B = SITE_BASE;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <link rel="icon" type="image/x-icon" href="<?= $B ?>/assets/images/favicons/favicon.ico" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <meta name="title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>" />
    <?php if (isset($page_keywords)): ?><meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>"><?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <meta name="site-base" content="<?= $B ?>"><?php // used by modal JS for redirect ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($page_canonical); ?>" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <!-- Open Graph -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website">
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
    <!-- Hreflang: regional targeting -->
    <link rel="alternate" hreflang="en-us" href="<?php echo htmlspecialchars($page_canonical); ?>" />
    <link rel="alternate" hreflang="en-ae" href="<?php echo htmlspecialchars($page_canonical); ?>" />
    <link rel="alternate" hreflang="en-sa" href="<?php echo htmlspecialchars($page_canonical); ?>" />
    <link rel="alternate" hreflang="en-pk" href="<?php echo htmlspecialchars($page_canonical); ?>" />
    <link rel="alternate" hreflang="en-qa" href="<?php echo htmlspecialchars($page_canonical); ?>" />
    <link rel="alternate" hreflang="en-kw" href="<?php echo htmlspecialchars($page_canonical); ?>" />
    <link rel="alternate" hreflang="en-bh" href="<?php echo htmlspecialchars($page_canonical); ?>" />
    <link rel="alternate" hreflang="x-default" href="<?php echo htmlspecialchars($page_canonical); ?>" />

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $B ?>/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= $B ?>/assets/images/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $B ?>/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $B ?>/assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?= $B ?>/assets/images/favicons/site.webmanifest">

    <!-- Preload critical CSS for performance -->
    <link rel="preload" href="<?= $B ?>/assets/vendors/bootstrap/css/bootstrap.min.css" as="style">
    <link rel="preload" href="<?= $B ?>/assets/css/style-01.css@v=1.1.css" as="style">
    <!-- DNS prefetch for third-party origins -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://embed.tawk.to">

    <!-- Google Fonts — single combined request for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Federo&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/mibooz-icons/style.css">
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/the-sayinistic-font/stylesheet.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/jquery-ui/jquery-ui.css" />

    <!-- Template styles -->
    <link rel="stylesheet" href="<?= $B ?>/assets/css/style-01.css@v=1.1.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/css/mibooz-responsive.css@v=1.1.css" />
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/slick/slick.min.css" />
    <link rel="stylesheet" href="<?= $B ?>/assets/vendors/slick/slick-theme.min.css" />
    <!-- Custom fixes: navbar overlap, dropdowns, responsive -->
    <link rel="stylesheet" href="<?= $B ?>/assets/css/custom-fixes.css" />
    <!-- jQuery loaded early so inline page scripts can use $ -->
    <script src="<?= $B ?>/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <!-- Stub so openLeadModal() is safe before footer.php loads -->
    <script>function openLeadModal(){var m=document.getElementById('awsLeadModal');if(m){m.classList.add('active');document.body.style.overflow='hidden';}}</script>

    <!-- Font Awesome 6.7.2 via CDN — supports both FA5 (fas/far/fab) and FA6 (fa-solid/fa-regular/fa-brands) syntax -->

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
            "url": "https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png",
            "width": 300,
            "height": 80
        },
        "image": "https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png",
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
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "300",
            "bestRating": "5",
            "worstRating": "1"
        },
        "sameAs": [
            "https://www.facebook.com/artisticwebservices",
            "https://www.linkedin.com/company/artisticwebservices",
            "https://twitter.com/artisticwebsvc",
            "https://clutch.co/profile/artisticwebservices",
            "https://www.goodfirms.co/company/artisticwebservices",
            "https://www.upwork.com/ag/artisticwebservices",
            "https://www.instagram.com/artisticwebservices",
            "https://www.youtube.com/@artisticwebservices",
            "https://github.com/artisticwebservices",
            "https://www.glassdoor.com/Overview/Working-at-ArtisticWebServices"
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
            "url": "https://artisticwebservices.com",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://artisticwebservices.com/?s={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        },
        "publisher": {
            "@type": "Organization",
            "name": "ArtisticWebServices",
            "logo": {
                "@type": "ImageObject",
                "url": "https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png"
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
        "areaServed": {"@type": "Country", "name": "United States"},
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
            "@type": "Organization",
            "name": "ArtisticWebServices"
        },
        "publisher": {
            "@type": "Organization",
            "name": "ArtisticWebServices",
            "logo": {
                "@type": "ImageObject",
                "url": "https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png"
            }
        },
        "url": "<?php echo htmlspecialchars($page_canonical); ?>",
        "datePublished": "<?php echo isset($page_article_schema['date']) ? $page_article_schema['date'] : '2024-01-01'; ?>",
        "dateModified": "2026-04-03"
    }
    </script>
    <?php endif; ?>
</head>

