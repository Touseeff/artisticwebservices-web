<?php
$city = [
    'name'         => 'New York',
    'slug_full'    => 'mobile-app-development-in-newyork',
    'country'      => 'USA',
    'country_code' => 'US',
    'title'        => 'Mobile App Development Company New York | ArtisticWebServices',
    'description'  => 'ArtisticWebServices builds iOS, Android & enterprise mobile apps for NYC startups and Fortune 500 companies. Based at 26 Broadway, New York. 500+ apps delivered.',
    'h1'           => 'Mobile App Development Company in <span>New York, NY</span>',
    'hero_image'   => '/assets/images/mobile-app/newyork.webp',
    'intro_image'  => '/assets/images/mobile-app/newyork.webp',
    'intro_short'  => 'Headquartered at 26 Broadway, NYC — we build high-performance mobile apps for New York startups, enterprises, and Fortune 500 companies.',
    'intro_headline' => 'New York\'s Trusted Mobile App Development Partner Since 2014',
    'intro_paragraphs' => [
        'New York City is home to more Fortune 500 headquarters than any other metro in the world and hosts one of the fastest-growing startup ecosystems across fintech, healthtech, real estate, and media. Competing here demands apps built to enterprise standards on day one.',
        'ArtisticWebServices has operated from 26 Broadway, Suite 934, New York since 2014. Our team has delivered 500+ mobile applications for NYC clients ranging from seed-stage startups to publicly listed enterprises — on time, on budget, and to specification.',
        'Whether you need a native iOS app, an Android platform, a cross-platform React Native build, or a full-stack SaaS product, our New York-based development team handles the entire lifecycle from discovery to App Store launch and beyond.',
    ],
    'industries'   => ['FinTech', 'HealthTech', 'Real Estate', 'Media & Publishing', 'Retail & E-Commerce', 'Legal Tech'],
    'schema_area'  => 'New York, NY, USA',
    'market_title' => 'Why New York Businesses Choose ArtisticWebServices',
    'market_text'  => 'NYC clients demand faster timelines, tighter security, and higher production quality than almost any other market. After 10+ years serving New York businesses, we have built the processes — and the team — to meet that bar consistently.',
    'why_points'   => [
        ['icon' => 'fa-solid fa-location-dot',    'title' => 'NYC Headquarters',               'text' => 'We work from 26 Broadway, New York — same time zone, available for in-person meetings across Manhattan.'],
        ['icon' => 'fa-solid fa-shield-halved',   'title' => 'Enterprise-Grade Security',      'text' => 'SOC 2-aligned development practices, HIPAA-compliant data handling, and full source code ownership on delivery.'],
        ['icon' => 'fa-solid fa-rocket',          'title' => 'Rapid MVP Delivery',             'text' => 'NYC investors expect velocity. Our agile sprints deliver a testable MVP in 8–12 weeks without cutting corners.'],
        ['icon' => 'fa-solid fa-dollar-sign',     'title' => 'Competitive NYC Pricing',        'text' => 'Senior NYC developer talent at boutique agency rates — not Big-4 consulting markups. Flexible milestone-based payment.'],
        ['icon' => 'fa-solid fa-code-branch',     'title' => 'Full Source Code Ownership',     'text' => 'You own every line of code on delivery. No vendor lock-in, no licensing fees, no hidden costs.'],
        ['icon' => 'fa-solid fa-headset',         'title' => 'Lifetime Bug-Free Warranty',     'text' => 'Post-launch issues are fixed at no charge. We stand behind every app we ship.'],
    ],
];

$page_faq = [
    ['q' => 'How much does mobile app development cost in New York?',
     'a' => 'Mobile app development in New York typically ranges from $15,000 for a basic MVP to $250,000+ for complex enterprise platforms. Costs depend on platform (iOS/Android/cross-platform), feature complexity, and integrations. ArtisticWebServices offers milestone-based pricing — use our free App Cost Calculator for a precise estimate.'],
    ['q' => 'Does ArtisticWebServices have an office in New York City?',
     'a' => 'Yes. ArtisticWebServices is headquartered at 26 Broadway, Suite 934, New York, NY 10004. We serve NYC clients from our Manhattan office and are available for in-person meetings.'],
    ['q' => 'Which NYC industries do you specialize in?',
     'a' => 'We have deep project experience in New York\'s core verticals: fintech and banking, healthcare and telemedicine, real estate technology, media and digital publishing, legal tech, and retail e-commerce.'],
    ['q' => 'How long does app development take for a NYC startup?',
     'a' => 'A basic MVP takes 8–12 weeks. A full-featured app with backend integrations typically takes 3–5 months. We use 2-week agile sprints with regular demos so you see progress — and can redirect — throughout the build.'],
    ['q' => 'Do you sign NDAs for New York clients?',
     'a' => 'Yes. We sign NDAs before any discovery call involving proprietary business information. All intellectual property created is transferred to you in full upon project completion.'],
];

require_once dirname(__DIR__) . '/includes/city-page-template.php';
