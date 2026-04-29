<?php
$city = [
    'name'         => 'Houston',
    'slug_full'    => 'mobile-app-development-in-houston',
    'country'      => 'USA',
    'country_code' => 'US',
    'title'        => 'Mobile App Development Company Houston TX | ArtisticWebServices',
    'description'  => 'ArtisticWebServices builds iOS, Android & enterprise mobile apps for Houston energy, healthcare, and aerospace businesses. 500+ projects. Free quote in 24 hrs.',
    'h1'           => 'Mobile App Development Company in <span>Houston, TX</span>',
    'hero_image'   => '/assets/images/houston/01.webp',
    'intro_image'  => '/assets/images/houston/02.webp',
    'intro_short'  => 'Serving Houston\'s energy, healthcare, and aerospace sectors with enterprise-grade mobile apps built for performance, security, and scale.',
    'intro_headline' => 'Houston\'s Industry Leaders Need Apps Built for Complex Environments',
    'intro_paragraphs' => [
        'Houston is the energy capital of the world and home to the Texas Medical Center — the largest medical complex on the planet — creating exceptional demand for enterprise mobile applications in energy management, HIPAA-compliant healthcare, aerospace logistics, and industrial IoT.',
        'ArtisticWebServices builds robust mobile and enterprise applications for Houston businesses operating in regulated, mission-critical environments. Our apps handle offline-first scenarios for field operations, integrate with SCADA and ERP systems, and comply with HIPAA, OSHA, and industry-specific data standards.',
        'Whether you need a field worker mobile tool for an oil & gas operation, a telemedicine platform for a Houston medical practice, or a logistics app for a port-adjacent supply chain company, our team delivers production-ready software.',
    ],
    'industries'   => ['Oil & Gas', 'Healthcare', 'Aerospace', 'Logistics & Supply Chain', 'Construction', 'Manufacturing'],
    'schema_area'  => 'Houston, TX, USA',
    'market_title' => 'Why Houston Businesses Choose ArtisticWebServices',
    'market_text'  => 'Houston\'s industrial and medical sectors have unique technical requirements — offline-capable field apps, HIPAA compliance, ERP integrations, and rugged device support. We\'ve built for these constraints since 2014.',
    'why_points'   => [
        ['icon' => 'fa-solid fa-oil-can',         'title' => 'Oil & Gas Domain Expertise',      'text' => 'Field worker apps, refinery management software, and IoT sensor dashboards for Houston energy companies.'],
        ['icon' => 'fa-solid fa-hospital',        'title' => 'HIPAA-Compliant Healthcare Apps', 'text' => 'Telemedicine, EHR integration, and patient portal apps built to HIPAA and HITECH standards for Texas Medical Center affiliates.'],
        ['icon' => 'fa-solid fa-wifi',            'title' => 'Offline-First Architecture',      'text' => 'Apps that work in low-connectivity field environments — refineries, offshore platforms, and remote job sites.'],
        ['icon' => 'fa-solid fa-gears',           'title' => 'ERP & SCADA Integration',         'text' => 'Direct integrations with SAP, Oracle, and Honeywell systems used across Houston\'s industrial sector.'],
        ['icon' => 'fa-solid fa-shield-halved',   'title' => 'Industrial-Grade Security',       'text' => 'Penetration-tested, OWASP-compliant apps built for sectors where a security breach carries operational risk.'],
        ['icon' => 'fa-solid fa-dollar-sign',     'title' => 'Flexible Engagement Models',      'text' => 'Fixed-price project, time & materials, or dedicated team — structured to match Houston\'s project procurement norms.'],
    ],
];

$page_faq = [
    ['q' => 'Do you build apps for Houston\'s energy and oil & gas sector?',
     'a' => 'Yes. We build field worker apps, refinery management platforms, IoT sensor dashboards, and supply chain tools for Houston-based energy companies. Our apps support offline-first operation for field environments with limited connectivity.'],
    ['q' => 'Are your healthcare apps HIPAA compliant for Texas Medical Center clients?',
     'a' => 'Yes. All ArtisticWebServices healthcare applications are built to HIPAA and HITECH standards, including encrypted data storage, audit logging, role-based access control, and Business Associate Agreement (BAA) signing.'],
    ['q' => 'How much does mobile app development cost in Houston?',
     'a' => 'Mobile app development for Houston businesses typically ranges from $15,000 for a basic MVP to $250,000+ for enterprise-grade industrial or healthcare platforms. Use our App Cost Calculator for a free estimate tailored to your project.'],
    ['q' => 'Can you integrate apps with SAP or Oracle ERP systems?',
     'a' => 'Yes. We have experience integrating mobile apps with SAP S/4HANA, SAP Fiori, Oracle ERP Cloud, and custom REST/SOAP APIs used by Houston\'s industrial enterprises.'],
    ['q' => 'Do you serve Houston aerospace and logistics companies?',
     'a' => 'Yes. We build fleet tracking apps, logistics coordination platforms, inventory management tools, and aerospace maintenance apps for Houston-area companies in the supply chain and aerospace sectors.'],
];

require_once dirname(__DIR__) . '/includes/city-page-template.php';
