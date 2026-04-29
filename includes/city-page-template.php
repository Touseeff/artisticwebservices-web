<?php
/**
 * city-page-template.php
 * Shared template for all city-specific mobile app development landing pages.
 * Called by insights/mobile-app-development-in-*.php after setting $city and $page_faq.
 *
 * Required $city keys: name, slug_full, country, country_code, hero_image,
 *   intro_headline, intro_text, market_title, market_text, industries[],
 *   schema_area, why_points[]
 */

require_once dirname(__DIR__) . '/includes/config.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';

$page_title         = $city['title'];
$page_description   = $city['description'];
$page_canonical     = SITE_URL . '/insights/' . $city['slug_full'];
$page_og_image      = SITE_URL . '/assets/images/resources/artisticwebservices-og.png';
$page_breadcrumbs   = [
    ['name' => 'Insights',                              'url' => SITE_URL . '/insights'],
    ['name' => 'Mobile App Development in ' . $city['name'], 'url' => $page_canonical],
];
$page_service_schema = [
    'name'        => 'Mobile App Development in ' . $city['name'],
    'description' => 'Custom iOS, Android, and cross-platform mobile app development for businesses in '
                      . $city['name'] . ', ' . $city['country'] . '. 500+ projects delivered.',
];

require_once dirname(__DIR__) . '/includes/head.php';

/* ── All other city pages (for the related-cities strip) ─────── */
$all_cities = [
    ['name' => 'New York',      'slug' => 'mobile-app-development-in-newyork'],
    ['name' => 'Dubai',         'slug' => 'mobile-app-development-in-dubai'],
    ['name' => 'Saudi Arabia',  'slug' => 'mobile-app-development-company-in-saudi-arabia'],
    ['name' => 'Houston',       'slug' => 'mobile-app-development-in-houston'],
    ['name' => 'San Francisco', 'slug' => 'mobile-app-development-in-san-francisco'],
    ['name' => 'Qatar',         'slug' => 'mobile-app-development-in-qatar'],
    ['name' => 'Kuwait',        'slug' => 'mobile-app-development-in-kuwait'],
    ['name' => 'Bahrain',       'slug' => 'mobile-app-development-in-bahrain'],
    ['name' => 'Karachi',       'slug' => 'mobile-app-development-in-karachi'],
];
$related_cities = array_filter($all_cities, fn($c) => $c['slug'] !== $city['slug_full']);
?>
<style>
/* ── City Page Styles ─────────────────────────────────────── */
.city-hero {
    position: relative;
    min-height: 520px;
    display: flex;
    align-items: center;
    background-size: cover;
    background-position: center;
    overflow: hidden;
}
.city-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(17,17,17,0.78) 0%, rgba(180,0,30,0.60) 100%);
    z-index: 1;
}
.city-hero .city-hero-inner {
    position: relative;
    z-index: 2;
    color: #fff;
    padding: 100px 0 60px;
}
.city-hero h1 {
    font-size: clamp(1.8rem, 3.5vw, 2.9rem);
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 18px;
    color: #fff;
}
.city-hero h1 span { color: #ff4d6d; }
.city-hero .city-hero-sub {
    font-size: 1.05rem;
    color: rgba(255,255,255,0.82);
    max-width: 600px;
    line-height: 1.75;
    margin-bottom: 28px;
}
.city-hero-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 32px;
}
.city-hero-badges span {
    background: rgba(255,255,255,0.12);
    border: 1px solid rgba(255,255,255,0.3);
    color: #fff;
    font-size: 13px;
    font-weight: 600;
    padding: 6px 16px;
    border-radius: 50px;
}
/* Stats bar */
.city-stats { background: #17161a; padding: 40px 0; }
.city-stats .stat-item { text-align: center; color: #fff; }
.city-stats .stat-num { font-size: 2.4rem; font-weight: 800; color: #dd0429; line-height: 1; }
.city-stats .stat-lbl { font-size: 14px; color: rgba(255,255,255,0.7); margin-top: 6px; }
/* Intro */
.city-intro { padding: 80px 0; }
.city-intro h2 { font-size: clamp(1.5rem, 2.5vw, 2rem); font-weight: 800; margin-bottom: 20px; }
.city-intro p { font-size: 16px; line-height: 1.8; color: #555; margin-bottom: 16px; }
.city-intro-img { border-radius: 16px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.12); }
.city-intro-img img { width: 100%; height: 380px; object-fit: cover; display: block; }
/* Industries pills */
.city-industries { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 24px; }
.city-industries span {
    background: #fff5f5;
    border: 1px solid #f5c6cb;
    color: #dd0429;
    font-size: 13px;
    font-weight: 600;
    padding: 6px 16px;
    border-radius: 50px;
}
/* Services */
.city-services { padding: 70px 0; background: #f9f9f9; }
.city-services h2 { font-size: clamp(1.4rem, 2.5vw, 1.9rem); font-weight: 800; margin-bottom: 40px; }
.city-svc-card {
    background: #fff;
    border-radius: 14px;
    padding: 28px 22px;
    border: 1px solid #eee;
    height: 100%;
    transition: box-shadow 0.25s, transform 0.25s;
    text-decoration: none;
    color: #333;
    display: block;
}
.city-svc-card:hover { box-shadow: 0 12px 40px rgba(221,4,41,0.10); transform: translateY(-3px); color: #333; }
.city-svc-card i { font-size: 28px; color: #dd0429; margin-bottom: 14px; display: block; }
.city-svc-card strong { font-size: 15px; font-weight: 700; display: block; margin-bottom: 8px; }
.city-svc-card p { font-size: 13px; color: #777; line-height: 1.55; margin: 0; }
/* Why choose */
.city-why { padding: 70px 0; }
.city-why h2 { font-size: clamp(1.4rem, 2.5vw, 1.9rem); font-weight: 800; margin-bottom: 16px; }
.city-why-intro { font-size: 16px; color: #555; line-height: 1.8; margin-bottom: 36px; max-width: 720px; }
.city-why-point {
    display: flex;
    gap: 16px;
    align-items: flex-start;
    margin-bottom: 22px;
    padding: 20px;
    background: #fff;
    border-radius: 12px;
    border: 1px solid #f0f0f0;
    box-shadow: 0 2px 16px rgba(0,0,0,0.04);
}
.city-why-point .why-icon {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    background: #fff5f5;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: #dd0429;
    font-size: 18px;
}
.city-why-point h4 { font-size: 15px; font-weight: 700; margin-bottom: 4px; }
.city-why-point p { font-size: 14px; color: #666; line-height: 1.55; margin: 0; }
/* FAQ */
.city-faq { padding: 70px 0; background: #f9f9f9; }
.city-faq h2 { font-size: clamp(1.4rem, 2.5vw, 1.9rem); font-weight: 800; margin-bottom: 36px; }
.city-faq .accordion-button { font-weight: 600; font-size: 15px; color: #111; }
.city-faq .accordion-button:not(.collapsed) { color: #dd0429; background: #fff5f5; box-shadow: none; }
.city-faq .accordion-button::after { filter: none; }
.city-faq .accordion-body { font-size: 15px; color: #555; line-height: 1.7; }
/* CTA */
.city-cta { background: linear-gradient(135deg, #dd0429 0%, #8c0016 100%); padding: 70px 0; text-align: center; }
.city-cta h2 { font-size: clamp(1.6rem, 2.8vw, 2.4rem); font-weight: 800; color: #fff; margin-bottom: 16px; }
.city-cta p { color: rgba(255,255,255,0.82); font-size: 17px; max-width: 560px; margin: 0 auto 32px; line-height: 1.7; }
/* Related cities */
.city-related { padding: 60px 0; }
.city-related h2 { font-size: 1.4rem; font-weight: 800; margin-bottom: 28px; }
.city-rel-link {
    display: block;
    text-align: center;
    padding: 16px 10px;
    background: #fff;
    border: 1px solid #eee;
    border-radius: 10px;
    text-decoration: none;
    color: #333;
    font-size: 13px;
    font-weight: 600;
    transition: box-shadow 0.2s, border-color 0.2s, color 0.2s;
}
.city-rel-link:hover { box-shadow: 0 6px 20px rgba(221,4,41,0.1); border-color: #dd0429; color: #dd0429; }
.city-rel-link i { color: #dd0429; display: block; font-size: 18px; margin-bottom: 7px; }
@media (max-width: 767px) {
    .city-hero .city-hero-inner { padding: 90px 0 50px; }
    .city-intro, .city-services, .city-why, .city-faq, .city-related { padding: 50px 0; }
    .city-cta { padding: 50px 0; }
    .city-stats .stat-num { font-size: 2rem; }
}
</style>
<body>
<div class="page-wrapper">

<?php require_once dirname(__DIR__) . '/includes/header.php'; ?>

<!-- ── City Hero ──────────────────────────────────────── -->
<section class="city-hero"
         style="background-image: url('<?= $B . htmlspecialchars($city['hero_image']) ?>');">
    <div class="container">
        <div class="row city-hero-inner">
            <div class="col-lg-8">
                <h1><?= htmlspecialchars($city['h1']) ?></h1>
                <p class="city-hero-sub"><?= htmlspecialchars($city['intro_short']) ?></p>
                <div class="city-hero-badges">
                    <span>500+ Projects Delivered</span>
                    <span>10+ Years Experience</span>
                    <span>iOS · Android · Cross-Platform</span>
                    <span><?= htmlspecialchars($city['country']) ?> Market Expertise</span>
                </div>
                <div class="d-flex flex-wrap gap-3">
                    <a href="<?= $B ?>/contact" class="thm-btn redchange">Get a Free Quote →</a>
                    <a href="<?= $B ?>/services/mobile-app-development"
                       style="display:inline-flex;align-items:center;gap:6px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.7);padding:12px 26px;border-radius:50px;font-size:15px;font-weight:600;text-decoration:none;">
                        View All Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── Stats Bar ──────────────────────────────────────── -->
<section class="city-stats">
    <div class="container">
        <div class="row g-4">
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <div class="stat-num">500+</div>
                    <div class="stat-lbl">Projects Delivered</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <div class="stat-num">10+</div>
                    <div class="stat-lbl">Years of Experience</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <div class="stat-num">98%</div>
                    <div class="stat-lbl">Client Satisfaction</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <div class="stat-num">80+</div>
                    <div class="stat-lbl">Expert Developers</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── City Intro ────────────────────────────────────── -->
<section class="city-intro">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2><?= htmlspecialchars($city['intro_headline']) ?></h2>
                <?php foreach ($city['intro_paragraphs'] as $para): ?>
                <p><?= htmlspecialchars($para) ?></p>
                <?php endforeach; ?>
                <div class="city-industries">
                    <?php foreach ($city['industries'] as $ind): ?>
                    <span><?= htmlspecialchars($ind) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="city-intro-img">
                    <img src="<?= $B . htmlspecialchars($city['intro_image']) ?>"
                         alt="Mobile app development in <?= htmlspecialchars($city['name']) ?>"
                         width="600" height="380" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── Services ──────────────────────────────────────── -->
<section class="city-services">
    <div class="container">
        <h2 class="text-center">Mobile App Development Services in <?= htmlspecialchars($city['name']) ?></h2>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <a href="<?= $B ?>/services/mobile-app-development" class="city-svc-card">
                    <i class="fa-solid fa-mobile-button" aria-hidden="true"></i>
                    <strong>iOS &amp; Android Apps</strong>
                    <p>Native Swift &amp; Kotlin apps built for performance, security, and App Store approval.</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?= $B ?>/services/mobile-app-development" class="city-svc-card">
                    <i class="fa-brands fa-react" aria-hidden="true"></i>
                    <strong>React Native &amp; Flutter</strong>
                    <p>Single codebase cross-platform apps — 40% faster to build, 100% native feel.</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?= $B ?>/services/artificial-intelligence" class="city-svc-card">
                    <i class="fa-solid fa-robot" aria-hidden="true"></i>
                    <strong>AI-Powered Apps</strong>
                    <p>Machine learning, NLP, computer vision, and generative AI integrated into your app.</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?= $B ?>/services/mvp-startup-development" class="city-svc-card">
                    <i class="fa-solid fa-lightbulb" aria-hidden="true"></i>
                    <strong>MVP Development</strong>
                    <p>Ship a testable MVP in 8–12 weeks. Validate before you scale.</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?= $B ?>/services/ecommerce-app-development" class="city-svc-card">
                    <i class="fa-solid fa-cart-shopping" aria-hidden="true"></i>
                    <strong>E-Commerce Apps</strong>
                    <p>Full-featured mobile commerce apps with payments, inventory, and CRM integrations.</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?= $B ?>/services/healthcare-medical-app" class="city-svc-card">
                    <i class="fa-solid fa-heart-pulse" aria-hidden="true"></i>
                    <strong>Healthcare Apps</strong>
                    <p>HIPAA-compliant telemedicine, patient portal, and EHR integration apps.</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?= $B ?>/services/saas" class="city-svc-card">
                    <i class="fa-solid fa-cloud" aria-hidden="true"></i>
                    <strong>SaaS Platforms</strong>
                    <p>Multi-tenant SaaS products built on AWS with auto-scaling and 99.9% uptime.</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?= $B ?>/services/app-support" class="city-svc-card">
                    <i class="fa-solid fa-headset" aria-hidden="true"></i>
                    <strong>App Maintenance</strong>
                    <p>Lifetime bug-free warranty. OS updates, performance tuning, and 24/7 monitoring.</p>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ── Why ArtisticWebServices ───────────────────────── -->
<section class="city-why">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h2><?= htmlspecialchars($city['market_title']) ?></h2>
                <p class="city-why-intro"><?= htmlspecialchars($city['market_text']) ?></p>
            </div>
        </div>
        <div class="row g-3">
            <?php foreach ($city['why_points'] as $pt): ?>
            <div class="col-lg-6">
                <div class="city-why-point">
                    <div class="why-icon">
                        <i class="<?= htmlspecialchars($pt['icon']) ?>" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h4><?= htmlspecialchars($pt['title']) ?></h4>
                        <p><?= htmlspecialchars($pt['text']) ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── FAQ ───────────────────────────────────────────── -->
<section class="city-faq">
    <div class="container">
        <h2 class="text-center">Frequently Asked Questions — <?= htmlspecialchars($city['name']) ?></h2>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="cityFaqAccordion">
                    <?php foreach ($page_faq as $i => $faq): ?>
                    <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="faq-head-<?= $i ?>">
                            <button class="accordion-button <?= $i > 0 ? 'collapsed' : '' ?>"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-body-<?= $i ?>"
                                    aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>"
                                    aria-controls="faq-body-<?= $i ?>">
                                <?= htmlspecialchars($faq['q']) ?>
                            </button>
                        </h3>
                        <div id="faq-body-<?= $i ?>"
                             class="accordion-collapse collapse <?= $i === 0 ? 'show' : '' ?>"
                             aria-labelledby="faq-head-<?= $i ?>"
                             data-bs-parent="#cityFaqAccordion">
                            <div class="accordion-body bg-white">
                                <?= htmlspecialchars($faq['a']) ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── CTA ───────────────────────────────────────────── -->
<section class="city-cta">
    <div class="container">
        <h2>Ready to Build Your App in <?= htmlspecialchars($city['name']) ?>?</h2>
        <p>Tell us your idea. We'll send a free project estimate within 24 hours — no commitment required.</p>
        <div class="d-flex justify-content-center flex-wrap gap-3">
            <a href="<?= $B ?>/contact" class="thm-btn redchange" style="background:#fff;color:#dd0429;border:none;">
                Get a Free Quote →
            </a>
            <a href="<?= $B ?>/services/app-cost-calculator"
               style="display:inline-flex;align-items:center;gap:6px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.7);padding:12px 26px;border-radius:50px;font-size:15px;font-weight:600;text-decoration:none;">
                Try Our App Cost Calculator
            </a>
        </div>
    </div>
</section>

<!-- ── Related City Pages ────────────────────────────── -->
<section class="city-related">
    <div class="container">
        <h2>We Also Serve These Markets</h2>
        <div class="row g-3">
            <?php foreach ($related_cities as $rc): ?>
            <div class="col-lg-2 col-md-3 col-4">
                <a href="<?= $B ?>/insights/<?= htmlspecialchars($rc['slug']) ?>" class="city-rel-link">
                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    <?= htmlspecialchars($rc['name']) ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── Local Schema ──────────────────────────────────── -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Mobile App Development in <?= addslashes($city['name']) ?>",
    "description": "Custom iOS, Android, and cross-platform mobile app development services for businesses in <?= addslashes($city['name']) ?>, <?= addslashes($city['country']) ?>.",
    "provider": {
        "@type": "Organization",
        "name": "ArtisticWebServices",
        "url": "https://artisticwebservices.com",
        "telephone": "+12137147176",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "26 Broadway, Suite 934",
            "addressLocality": "New York",
            "addressRegion": "NY",
            "postalCode": "10004",
            "addressCountry": "US"
        }
    },
    "areaServed": {
        "@type": "Place",
        "name": "<?= addslashes($city['schema_area']) ?>"
    },
    "url": "https://artisticwebservices.com/insights/<?= addslashes($city['slug_full']) ?>"
}
</script>

<?php require_once dirname(__DIR__) . '/includes/social-share.php'; ?>
<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>
