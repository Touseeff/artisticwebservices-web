<?php
$city = [
    'name'         => 'Dubai',
    'slug_full'    => 'mobile-app-development-in-dubai',
    'country'      => 'UAE',
    'country_code' => 'AE',
    'title'        => 'Mobile App Development Company Dubai UAE | ArtisticWebServices',
    'description'  => 'ArtisticWebServices builds iOS, Android & enterprise apps for Dubai startups and enterprises. Expert mobile app developers serving the UAE market since 2014.',
    'h1'           => 'Mobile App Development Company in <span>Dubai, UAE</span>',
    'hero_image'   => '/assets/images/dubai/app_dev_dubai.webp',
    'intro_image'  => '/assets/images/dubai/build-mobile-app.webp',
    'intro_short'  => 'Serving Dubai businesses from our New York HQ — we build Arabic-ready, scalable mobile apps aligned with UAE\'s digital economy vision.',
    'intro_headline' => 'Dubai\'s Smart City Vision Demands Apps Built for Scale',
    'intro_paragraphs' => [
        'Dubai\'s smartphone penetration exceeds 97% and the UAE\'s digital economy is projected to contribute $140 billion to GDP by 2031. The emirate\'s smart government agenda — from Dubai Now to the Smart Dubai platform — has set a benchmark that private enterprises must match.',
        'ArtisticWebServices partners with Dubai-based startups, government-linked corporations, hospitality brands, and retail enterprises to build mobile applications that work seamlessly in the UAE market — including full Arabic RTL support, UAE data residency requirements, and local payment gateway integrations.',
        'Our New York team operates in a time-zone overlap with Dubai clients during morning UAE hours, ensuring responsive communication across project milestones.',
    ],
    'industries'   => ['Real Estate', 'FinTech', 'Tourism & Hospitality', 'Retail', 'Logistics', 'Government'],
    'schema_area'  => 'Dubai, United Arab Emirates',
    'market_title' => 'Why Dubai Businesses Trust ArtisticWebServices',
    'market_text'  => 'We have delivered mobile applications for clients across the UAE who required Arabic localization, UAE Central Bank compliant payment flows, and integration with local APIs such as UAE PASS and DubaiNow.',
    'why_points'   => [
        ['icon' => 'fa-solid fa-language',        'title' => 'Full Arabic RTL Support',         'text' => 'Native Arabic interfaces, right-to-left layout, and Arabic font optimization — not an afterthought, built in from day one.'],
        ['icon' => 'fa-solid fa-money-bill-wave', 'title' => 'UAE Payment Integrations',        'text' => 'PayTabs, Telr, Network International, and UAE Central Bank-compliant payment flows built into your app.'],
        ['icon' => 'fa-solid fa-building',        'title' => 'UAE Data Residency',              'text' => 'We design cloud architectures that meet UAE data protection and UAE PDPL requirements where applicable.'],
        ['icon' => 'fa-solid fa-rocket',          'title' => 'Proven Dubai Portfolio',          'text' => 'Fintech, real estate, hospitality, and e-commerce apps delivered for UAE enterprises and smart city initiatives.'],
        ['icon' => 'fa-solid fa-clock',           'title' => 'Timezone-Aligned Communication', 'text' => 'Our project managers are available during morning UAE business hours for daily standups and milestone reviews.'],
        ['icon' => 'fa-solid fa-star',            'title' => 'Award-Winning Quality',           'text' => 'Clutch-rated top development company. Every app ships with full source code ownership and lifetime bug warranty.'],
    ],
];

$page_faq = [
    ['q' => 'Do you develop apps for businesses in Dubai?',
     'a' => 'Yes. ArtisticWebServices has delivered iOS, Android, and cross-platform apps for Dubai-based startups, enterprises, and government-linked entities across fintech, real estate, hospitality, and e-commerce.'],
    ['q' => 'How much does mobile app development cost in Dubai?',
     'a' => 'App development for Dubai clients typically ranges from AED 50,000 for a basic MVP to AED 900,000+ for complex enterprise platforms. Pricing depends on features, platform, and integrations. Contact us for a free estimate.'],
    ['q' => 'Do you build Arabic-language mobile apps?',
     'a' => 'Yes. We build fully localized Arabic RTL apps — including right-to-left layout, Arabic typography, and Arabic content management. Our apps are tested on UAE-market devices to ensure native quality.'],
    ['q' => 'Can you meet with our team in Dubai?',
     'a' => 'While our headquarters is in New York, we conduct regular client visits to the UAE. For large engagements, we can schedule in-person discovery workshops in Dubai. Virtual meetings are available daily during UAE business hours.'],
    ['q' => 'Do your apps work with UAE payment gateways?',
     'a' => 'Yes. We integrate UAE-local payment gateways including PayTabs, Telr, Network International, and Magnati, as well as international gateways like Stripe and PayPal where permitted.'],
];

require_once dirname(__DIR__) . '/includes/city-page-template.php';
