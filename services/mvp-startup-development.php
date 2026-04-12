<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'MVP Development Company USA | Launch Your Startup Fast — ArtisticWebServices';
$page_description = 'Launch your startup with a lean, investor-ready MVP. ArtisticWebServices builds MVPs in 8—12 weeks for USA startups using agile methodology and modern tech stacks.';
$page_keywords = 'MVP development company USA, startup app development, minimum viable product development, startup software development New York, lean MVP';
$page_breadcrumbs = [['name' => 'Services', 'url' => 'https://artisticwebservices.com/services.php'], ['name' => 'MVP Development', 'url' => 'https://artisticwebservices.com/services/mvp-startup-development.php']];
$page_service_schema = ['name' => 'MVP Development', 'description' => 'Lean, investor-ready MVP development in 8-12 weeks for USA startups using agile methodology.'];
$page_faq = [
    ['q' => 'What is an MVP and why do startups need one?', 'a' => 'An MVP (Minimum Viable Product) is a version of your product with core features needed to validate your idea with real users. It helps startups launch faster, gather feedback, and attract investors with less risk and cost.'],
    ['q' => 'How long does it take to build an MVP?', 'a' => 'ArtisticWebServices builds investor-ready MVPs in 8—12 weeks using agile sprints. This includes design, development, testing, and deployment of your core product features.'],
    ['q' => 'How much does MVP development cost?', 'a' => 'MVP development typically costs $15,000—$50,000 depending on complexity and features. Contact us for a free consultation and quote.']
];
$page_canonical = 'https://artisticwebservices.com/services/mvp-startup-development';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<style>
/* =============================================
   GLOBAL / UTILITIES
   ============================================= */
.gray { background: #f2f2f2; }

/* =============================================
   HERO SECTION
   ============================================= */
.about-page {
    padding: 60px 0 50px;
}
.about-page h1.section-title__title {
    font-size: clamp(1.6rem, 3.5vw, 2.4rem);
    font-weight: 800;
    line-height: 1.25;
}
.about-page h2.section-title__title {
    font-size: clamp(1.2rem, 2.5vw, 1.75rem);
    color: #d31923;
    font-weight: 700;
}
.about-page p {
    font-size: 1rem;
    color: #555;
    line-height: 1.75;
    margin-bottom: 1.5rem;
}

/* =============================================
   WHY CHOOSE SECTION
   ============================================= */
.why-choose-one { padding: 60px 0; }
.why-choose-one__right { padding-left: 30px; }
.why-choose-one__right-text { color: #555; line-height: 1.75; margin-bottom: 1rem; }

/* =============================================
   MVP SOFTWARE SECTIONS
   ============================================= */
.mvp-software { padding: 60px 0; }

.mvp-software-headings {
    text-align: center;
    margin-bottom: 40px;
}
.mvp-software-headings h2 {
    font-size: clamp(1.4rem, 3vw, 2rem);
    font-weight: 800;
    color: #222;
    margin-bottom: 14px;
}
.mvp-software-headings p {
    color: #666;
    font-size: 1rem;
    max-width: 820px;
    margin: 0 auto;
    line-height: 1.75;
}

.mvp-software-box .row {
    row-gap: 24px;
}
.mvp-service-card {
    background: #fff;
    border: 1px solid #e8e8e8;
    border-radius: 10px;
    padding: 28px 24px;
    height: 100%;
    transition: box-shadow 0.25s, transform 0.25s;
}
.mvp-service-card:hover {
    box-shadow: 0 8px 28px rgba(0,0,0,0.1);
    transform: translateY(-4px);
}
.mvp-service-card h4 {
    font-size: 1.1rem;
    font-weight: 700;
    color: #222;
    margin-bottom: 10px;
}
.mvp-service-card h4.mvp-h4 {
    position: relative;
    padding-left: 16px;
}
.mvp-service-card h4.mvp-h4::before {
    position: absolute;
    background: #d31923;
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
}
.mvp-service-card p {
    font-size: 0.95rem;
    color: #666;
    line-height: 1.7;
    margin-bottom: 0;
}

/* =============================================
   TECHNOLOGIES SECTION
   ============================================= */
.mvp-technologies { padding: 60px 0; }
.mvp-technologies h2 {
    font-size: clamp(1.4rem, 3vw, 2rem);
    font-weight: 800;
    color: #222;
    margin-bottom: 36px;
    text-align: center;
}
.tech-card {
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    padding: 28px 26px 32px;
    height: 100%;
    display: flex;
    flex-direction: column;
    transition: box-shadow 0.3s, transform 0.3s, border-color 0.3s;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}
.tech-card:hover {
    box-shadow: 0 10px 32px rgba(211,25,35,0.10);
    transform: translateY(-5px);
    border-color: #d31923;
}
.tech-card h4 {
    font-size: 0.78rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: #d31923;
    background: #fff5f5;
    border-radius: 6px;
    padding: 10px 14px;
    margin-bottom: 18px;
    margin-left: -4px;
    margin-right: -4px;
}
.tech-card ul {
    padding: 0;
    margin: 0;
    flex: 1;
}
.tech-card ul li {
    list-style: none;
    padding: 8px 0;
    font-size: 0.93rem;
    color: #444;
    border-bottom: 1px solid #f2f2f2;
    display: flex;
    align-items: center;
    gap: 8px;
    line-height: 1.4;
}
.tech-card ul li:last-child { border-bottom: none; }
.tech-card ul li::before {
    content: '▸';
    color: #d31923;
    font-size: 0.7rem;
    flex-shrink: 0;
    margin-top: 1px;
}

/* =============================================
   INDUSTRY SLIDER SECTION
   ============================================= */
.mvp-industry { padding: 60px 0; }
.mvp-industry-heading {
    text-align: center;
    margin-bottom: 36px;
}
.mvp-industry-heading h2 {
    font-size: clamp(1.4rem, 3vw, 2rem);
    font-weight: 800;
    color: #222;
    margin-bottom: 12px;
}
.mvp-industry-heading p {
    color: #666;
    font-size: 1rem;
    max-width: 700px;
    margin: 0 auto;
}
.mvp-industry-slider { margin: 0; }
.mvp-industry .swiper-slide {
    text-align: center;
    background: #fff;
    border: 1px solid #e8e8e8;
    border-radius: 12px;
    padding: 18px 14px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.07);
    transition: transform 0.25s;
}
.mvp-industry .swiper-slide:hover { transform: translateY(-4px); }
.mvp-industry .slider-item img.slider-image {
    width: 100%;
    height: 160px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 12px;
}
.mvp-industry .slider-title {
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 8px;
    color: #222;
}
.mvp-industry .slider-text {
    font-size: 0.9rem;
    color: #666;
    line-height: 1.6;
}
.mvp-industry .swiper-button-next,
.mvp-industry .swiper-button-prev {
    color: #d31923;
}
.mvp-industry .swiper-button-next::after,
.mvp-industry .swiper-button-prev::after {
    font-size: 20px;
    font-weight: 900;
}

/* =============================================
   TABS / ACCORDION PROCESS SECTION
   ============================================= */
.mvp-tabs-custom { padding: 60px 0; }
.mvp-tabs-custom .section-heading {
    text-align: center;
    margin-bottom: 40px;
}
.mvp-tabs-custom .section-heading h2 {
    font-size: clamp(1.4rem, 3vw, 2rem);
    font-weight: 800;
    color: #222;
    margin-bottom: 12px;
}
.mvp-tabs-custom .section-heading p {
    color: #666;
    font-size: 1rem;
    max-width: 700px;
    margin: 0 auto;
}
.mvp-tabs-custom .accordion-button {
    background-color: transparent;
    border: none;
    color: #222;
    font-weight: 700;
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 0.04em;
}
.mvp-tabs-custom .accordion-button:not(.collapsed) {
    color: #d31923;
    background-color: #fff8f8;
    box-shadow: none;
}
.mvp-tabs-custom .accordion-button:focus { box-shadow: none; }
.mvp-tabs-custom .accordion-body {
    background-color: #ffffff !important;
    border: none;
    padding: 20px 24px;
}
.mvp-tabs-custom .accordion-item {
    border: 1px solid #e8e8e8;
    border-radius: 8px !important;
    margin-bottom: 12px;
    overflow: hidden;
}

.mvp-process-panel { display: none; }
.mvp-process-panel.active { display: block; }

.mvp-tab-step { margin-bottom: 28px; }
.mvp-tab-step:last-child { margin-bottom: 0; }
.mvp-step-header { display: flex; align-items: center; gap: 14px; margin-bottom: 8px; }
.mvp-tab-step .step-num {
    font-size: 1.1rem;
    font-weight: 800;
    color: #d31923;
    min-width: 44px;
    height: 44px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 0 0 2px #d3192340;
    flex-shrink: 0;
}
.mvp-tab-step h3 {
    font-size: 1rem;
    font-weight: 700;
    color: #222;
    margin: 0;
    text-transform: capitalize;
}
.mvp-tab-step p {
    font-size: 0.95rem;
    color: #555;
    line-height: 1.7;
    margin: 0;
    padding-left: 58px;
}

/* =============================================
   FAQ SECTION
   ============================================= */
.faqs-section { background: #f9f9f9; }
.faqs-section .latest-technology-title h2 {
    font-size: clamp(1.4rem, 3vw, 2rem);
    font-weight: 800;
}
.faqs-section .accordion-button {
    font-weight: 600;
    font-size: 0.95rem;
    color: #222;
}
.faqs-section .accordion-button:not(.collapsed) { color: #d31923; }
.faqs-section .accordion-button:focus { box-shadow: none; }
.faqs-section .accordion-item { border: 1px solid #e0e0e0; border-radius: 8px !important; margin-bottom: 10px; overflow: hidden; }
.faqs-section .faq-num {
    font-weight: 800;
    color: #d31923;
    min-width: 36px;
}

/* =============================================
   CONTACT / WELCOME-THREE SECTION
   ============================================= */
.welcome-three {
    position: relative;
    display: block;
    padding: 80px 0 60px;
}
.welcome-three__left { position: relative; display: block; }
.get__content h4 {
    font-size: clamp(1rem, 2.5vw, 1.4rem);
    font-weight: 800;
    padding-bottom: 10px;
    color: #555;
}
.get__content h2 {
    font-size: clamp(2.2rem, 6vw, 4rem);
    font-weight: 900;
    color: #ed1b21;
    padding-bottom: 14px;
    line-height: 1.1;
}
.get__content ul li img {
    width: 32px;
    border-radius: 3px;
    margin: 0 10px 0 0;
    vertical-align: middle;
}
.get__content h3 {
    font-size: clamp(1.1rem, 2.5vw, 1.5rem);
    font-weight: 800;
    padding-bottom: 12px;
    margin-top: 20px;
}
.get__content ul {
    padding: 0;
    margin-bottom: 0;
}
.get__content ul li {
    padding: 9px 0;
    list-style: none;
    font-size: 0.95rem;
}
.get__content ul li a {
    color: #444;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
}
.get__content ul li a:hover { color: #d31923; }
.get__content p { color: #666; line-height: 1.75; margin-bottom: 12px; }
.get__content strong { font-weight: 700; color: #222; display: block; margin-bottom: 8px; }
.welcome-three__right-zero {
    margin-left: 0 !important;
    border-radius: 12px;
    box-shadow: 0 0 20px #ccc;
    padding: 28px 28px;
    background: #fff;
}

/* =============================================
   RESPONSIVE OVERRIDES
   ============================================= */
@media (max-width: 1199px) {
    .why-choose-one__right { padding-left: 20px; }
}

@media (max-width: 991px) {
    .about-page { padding: 40px 0 30px; }
    .why-choose-one { padding: 40px 0; }
    .why-choose-one__right { padding-left: 0; margin-top: 30px; }
    .mvp-software { padding: 40px 0; }
    .mvp-technologies { padding: 40px 0; }
    .mvp-industry { padding: 40px 0; }
    .mvp-tabs-custom { padding: 40px 0; }
    .welcome-three { padding: 50px 0 40px; }
    .mvp-tab-step p { padding-left: 0; }
    .tech-card { padding: 24px 20px 28px; }
}

@media (max-width: 767px) {
    .about-page { padding: 30px 0 20px; }
    .mvp-software { padding: 30px 0; }
    .mvp-software-headings { margin-bottom: 24px; }
    .mvp-technologies { padding: 30px 0; }
    .mvp-industry { padding: 30px 0; }
    .mvp-tabs-custom { padding: 30px 0; }
    .welcome-three { padding: 36px 0 30px; }
    .welcome-three__right-zero { padding: 20px 16px; margin-top: 30px; }
    .faqs-section .row .col-1 { display: none; }
    .faqs-section .row .col-10 { flex: 0 0 auto; width: 100%; }
    .faqs-section .faq-num { min-width: 28px; font-size: 0.85rem; }
    .mvp-tab-step .step-num { min-width: 38px; height: 38px; font-size: 1rem; }
    .mvp-tab-step p { padding-left: 52px; }
}

@media (max-width: 575px) {
    .mvp-service-card { padding: 20px 16px; }
    .about-page h1.section-title__title { font-size: 1.4rem; }
    .about-page h2.section-title__title { font-size: 1.1rem; }
    .welcome-three__right-zero { padding: 16px 12px; }
    .get__content h2 { font-size: 2rem; }
    .mvp-tab-step p { padding-left: 0; }
    .mvp-step-header { gap: 10px; }
    .tech-card { padding: 20px 16px 24px; }
    .tech-card h4 { font-size: 0.75rem; padding: 8px 12px; }
}
</style>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<!-- =============================================
     HERO SECTION
     ============================================= -->
<section class="about-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 col-12">
                <div class="mt-3">
                    <h1 class="section-title__title mb-3" style="color:#000">Launch with Confidence: Expert MVP Development</h1>
                    <h2 class="section-title__title mb-3">Validate Your AI or Mobile Concept Fast</h2>
                    <p>Take advantage of professionals at ArtisticWebServices to define and validate your digital product or service (AI, mobile, or web). We handle your investment and provide a fast time to market. As an MVP software development company, ArtisticWebServices can assist you in reducing risk and validating the acceptance of your product before launch.</p>
                    <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn">Get Your Free Quote</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12 mt-4 mt-md-0">
                <div class="wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img class="img-fluid w-100" src="<?= $B ?>/assets/images/MVP.webp" alt="Best Minimum Viable Product Development services USA">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =============================================
     WHY CHOOSE US SECTION
     ============================================= -->
<section class="why-choose-one">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                <div class="why-choose-one__left">
                    <div class="why-choose-one__img">
                        <img class="img-fluid" src="<?= $B ?>/assets/images/mvp-startup-development-img2.webp" alt="Best Minimum Viable Product Development services USA">
                    </div>
                    <div class="why-choose-one-box-1"></div>
                    <div class="why-choose-one-box-2"></div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="why-choose-one__right">
                    <div class="section-title text-left">
                        <h2 class="section-title__title">Your Go-To MVP Software Development Partner for Startup Success</h2>
                    </div>
                    <p class="why-choose-one__right-text">MVP is the best strategy for validating your project idea, which must be tested with real users, gathering user insights, and increasing profitability before investing resources. ArtisticWebServices' MVP development method will assist your company in validating a marketable idea and creating a rudimentary model that can be readily scaled.</p>
                    <p class="why-choose-one__right-text">As a leading MVP software development firm, our MVP developers ensure that your dream vision gets off to the ideal start and can be constantly developed until it reaches perfection. As a result, your stakeholders and investors are astounded by the impression you leave with a flawless execution. We provide effective MVP solutions for exploring your idea's potential.</p>
                    <p class="why-choose-one__right-text">Our MVP developers collaborate closely with you to implement your ideas through prototyping and MVP agile development, allowing you to receive real-time feedback from your clients before launching a full-scale product based on useful feedback. With our MVP development for startups, your startup can determine the value of its product.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =============================================
     MVP SERVICES SECTION
     ============================================= -->
<section class="mvp-software gray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mvp-software-headings">
                    <h2>Build Your Vision with Expertly Crafted Custom MVP Software Development</h2>
                    <p>We provide custom MVP development services with over 140 projects under our supervision to meet a wide range of customer needs. ArtisticWebServices professionals advocate for proactive cooperation practices that encourage open communication and focus on the client's business needs.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="mvp-software-box">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mvp-service-card">
                                <h4>MVP Development</h4>
                                <p>We are an exceptional MVP development company that will work end-to-end on your product from just an idea to delivery, maintenance, and support. We generate an MVP that will be turned into a full-fledged product; hence, Agile methodologies allow us to work swiftly while delivering stable and flexible code.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mvp-service-card">
                                <h4>MVP Improvement</h4>
                                <p>We will develop an improvement strategy based on the data you acquired following the initial launch of your MVP software solution. We will improve the MVP, fit it to the market, optimize expenses and effort, establish measurable KPIs, and plan to transform it into a full product.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mvp-service-card">
                                <h4>Market Analysis</h4>
                                <p>Market research is an important step in every development phase of our MVP development service that helps to reduce risks. We employ qualitative and quantitative methodologies to assess market demand, conduct competition research and SWOT analyses, and give you reports and strategic recommendations.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mvp-service-card">
                                <h4>MVP Consulting</h4>
                                <p>ArtisticWebServices engineers and business analysts can help you design your idea, define the must-have functionality of your MVP, and select the best tech stack for MVP software development. We will advise on optimal practices and provide ballpark statistics as well.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mvp-service-card">
                                <h4>MVP Prototyping</h4>
                                <p>If your goal is to validate the look rather than receive specific comments on the product, we can create a prototype. This allows you to test the idea with fewer resources while presenting users and stakeholders an interactive depiction of the desired solution.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mvp-service-card">
                                <h4>Full-Scale Product</h4>
                                <p>Our business analysts and project managers work together to assist you with the move from MVP development services to software development. We help with prioritizing features that need to be addressed in the primary product while creating a development roadmap and planning project scaling.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =============================================
     ADVANCED MVP SOLUTIONS SECTION
     ============================================= -->
<section class="mvp-software">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mvp-software-headings">
                    <h2>Advanced MVP Solutions to Power Your Startup</h2>
                    <p>To give a new and wider vision to your creativity and revolutionary ideas into practice, as well as exceptional solutions, MVP software development is essential. At ArtisticWebServices, we create MVP software that validates your ideas and paves the way for future success.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="mvp-software-box">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mvp-service-card">
                                <h4 class="mvp-h4">eCommerce MVP</h4>
                                <p>ArtisticWebServices creates user-friendly eCommerce MVPs for your target audiences based on demographics and market analytics. MVP software development allows businesses to test their markets without large upfront investments, gather critical feedback, and gain a better understanding of customer needs before launch — resulting in a reduced risk of failure and a clear path to scalability.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mvp-service-card">
                                <h4 class="mvp-h4">Social Media MVP</h4>
                                <p>Social media platforms have effectively channeled people's need for connection. Our MVP development service contains engagement and community-building tools to facilitate easy and long-lasting connections. By adding interactive features like customized recommendation algorithms, multimedia content sharing, and real-time chat, we accomplish everything our experts have promised.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mvp-service-card">
                                <h4 class="mvp-h4">SaaS MVP</h4>
                                <p>ArtisticWebServices develops MVP solutions for SaaS firms focusing on customer demands, scalability, and monetization. Businesses can test with a small user group, improve features based on feedback, and achieve efficient resource use. This approach maximizes return on investment and increases customer engagement.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mvp-service-card">
                                <h4 class="mvp-h4">IoT MVP</h4>
                                <p>The Internet of Things has a wide range of applications. ArtisticWebServices provides MVP development for IoT solutions such as wearable technologies, industrial automation, and smart home apps. Our MVP method guarantees that the final product is both technologically solid and meets real market needs, encouraging long-term success.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mvp-service-card">
                                <h4 class="mvp-h4">HealthTech MVP</h4>
                                <p>We provide MVP development solutions for the healthcare sector, prioritizing patient comfort, data security, and regulatory compliance. Healthcare companies can make sure their apps are creative, practical, and helpful to end users by choosing an MVP approach. HealthTech entrepreneurs can quickly validate and improve their solutions with MVPs.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mvp-service-card">
                                <h4 class="mvp-h4">FinTech MVP</h4>
                                <p>ArtisticWebServices prioritizes scalable and safe infrastructure when creating FinTech MVPs. Our experience ensures cost-effectiveness and user relevance while helping businesses quickly implement minimum viable products. Our MVPs provide a strong foundation for future expansion in the fast-paced financial industry, enabling businesses to test new products and gather valuable user feedback.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =============================================
     TECH STACK SECTION
     ============================================= -->
<section class="mvp-technologies gray">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2>Top-Tier Tech Stack for Building MVPs</h2>
            </div>
        </div>
        <!-- Row 1: 3 cards equal height -->
        <div class="row gy-4 align-items-stretch mb-4">
            <div class="col-lg-4 col-md-6 col-12 d-flex">
                <div class="tech-card w-100">
                    <h4>Programming Languages</h4>
                    <ul>
                        <li>JavaScript</li>
                        <li>HTML / CSS</li>
                        <li>.NET</li>
                        <li>Java</li>
                        <li>PHP</li>
                        <li>Ruby</li>
                        <li>Python</li>
                        <li>Golang</li>
                        <li>and more</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 d-flex">
                <div class="tech-card w-100">
                    <h4>Frameworks &amp; Libraries</h4>
                    <ul>
                        <li>Angular</li>
                        <li>Ruby on Rails</li>
                        <li>Vue.js</li>
                        <li>Node.js</li>
                        <li>React</li>
                        <li>Ember</li>
                        <li>Next.js</li>
                        <li>and more</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 d-flex">
                <div class="tech-card w-100">
                    <h4>Data</h4>
                    <ul>
                        <li>ElasticSearch</li>
                        <li>Redis</li>
                        <li>PostgreSQL</li>
                        <li>MySQL</li>
                        <li>MongoDB</li>
                        <li>Oracle</li>
                        <li>Cassandra</li>
                        <li>Hive</li>
                        <li>HBase</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Row 2: 3 cards equal height -->
        <div class="row gy-4 align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 d-flex">
                <div class="tech-card w-100">
                    <h4>Cloud Platforms</h4>
                    <ul>
                        <li>AWS</li>
                        <li>Azure</li>
                        <li>Google Cloud</li>
                        <li>Digital Ocean</li>
                        <li>IBM Cloud</li>
                        <li>Oracle Cloud</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 d-flex">
                <div class="tech-card w-100">
                    <h4>Mobile</h4>
                    <ul>
                        <li>Java</li>
                        <li>Kotlin</li>
                        <li>Objective-C</li>
                        <li>Swift</li>
                        <li>Flutter</li>
                        <li>Apache Cordova</li>
                        <li>React Native</li>
                        <li>Xamarin</li>
                        <li>Ionic</li>
                        <li>and more</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 d-flex">
                <div class="tech-card w-100">
                    <h4>Prototyping</h4>
                    <ul>
                        <li>Figma</li>
                        <li>Adobe XD</li>
                        <li>Webflow</li>
                        <li>Miro</li>
                        <li>EPAM Display</li>
                        <li>InVision</li>
                        <li>Sketch</li>
                        <li>and more</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =============================================
     INDUSTRY SLIDER SECTION
     ============================================= -->
<section class="mvp-industry">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mvp-industry-heading">
                    <h2>Industries We Serve with MVP Development</h2>
                    <p>We build MVPs across a wide range of industries, helping startups and enterprises validate ideas and go to market faster.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="swiper mvp-industry-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slider-item">
                            <img src="<?= $B ?>/assets/images/industries/fintech.webp" alt="Insurance MVP Development" class="slider-image">
                            <h3 class="slider-title">Insurance</h3>
                            <p class="slider-text">Introducing automation techniques into your operations and improving the accuracy of your insurance procedures.</p>
                        </div>
                        <div class="swiper-slide slider-item">
                            <img src="<?= $B ?>/assets/images/industries/healthcare.webp" alt="Healthcare MVP Development" class="slider-image">
                            <h3 class="slider-title">Healthcare</h3>
                            <p class="slider-text">Supporting you in introducing cutting-edge technologies and digitalization to raise the bar for healthcare services.</p>
                        </div>
                        <div class="swiper-slide slider-item">
                            <img src="<?= $B ?>/assets/images/industries/sports.webp" alt="Fitness MVP Development" class="slider-image">
                            <h3 class="slider-title">Fitness</h3>
                            <p class="slider-text">Developing apps that enable you to introduce cutting-edge methods of fitness management and enhance your clients' involvement in sports.</p>
                        </div>
                        <div class="swiper-slide slider-item">
                            <img src="<?= $B ?>/assets/images/industries/fintech.webp" alt="FinTech MVP Development" class="slider-image">
                            <h3 class="slider-title">FinTech</h3>
                            <p class="slider-text">Take advantage of our experience to support the development and growth of financial platforms and solutions.</p>
                        </div>
                        <div class="swiper-slide slider-item">
                            <img src="<?= $B ?>/assets/images/industries/realestate.webp" alt="Real Estate MVP Development" class="slider-image">
                            <h3 class="slider-title">Real Estate</h3>
                            <p class="slider-text">Creating MVP software that streamlines the procedures for all parties engaged in the purchase and rental of real estate.</p>
                        </div>
                        <div class="swiper-slide slider-item">
                            <img src="<?= $B ?>/assets/images/industries/education.webp" alt="E-Learning MVP Development" class="slider-image">
                            <h3 class="slider-title">E-Learning</h3>
                            <p class="slider-text">Developing digital solutions to make online education accessible, efficient, and comprehensible for everyone.</p>
                        </div>
                        <div class="swiper-slide slider-item">
                            <img src="<?= $B ?>/assets/images/industries/social-networking.webp" alt="Social Media MVP Development" class="slider-image">
                            <h3 class="slider-title">Social Media</h3>
                            <p class="slider-text">Building social networking platforms that connect people and communities with seamless user experiences.</p>
                        </div>
                        <div class="swiper-slide slider-item">
                            <img src="<?= $B ?>/assets/images/industries/education.webp" alt="Banking MVP Development" class="slider-image">
                            <h3 class="slider-title">Banking</h3>
                            <p class="slider-text">Our expert team aims to level up the user experience and generate new revenue streams by offering digital financial solutions.</p>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.mvp-industry-slider', {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            0:    { slidesPerView: 1 },
            576:  { slidesPerView: 2 },
            768:  { slidesPerView: 3 },
            1024: { slidesPerView: 4 },
        },
    });
});
</script>

<!-- =============================================
     MVP PROCESS / ACCORDION SECTION
     ============================================= -->
<section class="mvp-tabs-custom gray">
    <div class="container">
        <div class="section-heading">
            <h2>Our MVP Development Process</h2>
            <p>A structured, agile approach from discovery to launch — ensuring your MVP is built right the first time.</p>
        </div>
        <div class="row align-items-start">
            <div class="col-lg-5 col-12">
                <div class="accordion accordion-flush" id="mvpProcessAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="proc-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#proc-collapseOne" aria-expanded="true"
                                aria-controls="proc-collapseOne" data-panel="panel-roadmap">
                                MVP Roadmap Planning
                            </button>
                        </h2>
                        <div id="proc-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="proc-headingOne" data-bs-parent="#mvpProcessAccordion">
                            <div class="accordion-body">Explore existing products to uncover market needs and gain a deep understanding of your audience. Use these insights to build a clear, data-driven roadmap for key features — while keeping your stakeholders aligned every step of the way.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="proc-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#proc-collapseTwo" aria-expanded="false"
                                aria-controls="proc-collapseTwo" data-panel="panel-development">
                                MVP Development
                            </button>
                        </h2>
                        <div id="proc-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="proc-headingTwo" data-bs-parent="#mvpProcessAccordion">
                            <div class="accordion-body">Our MVP development approach offers complete help for startups by providing access to talented professionals worldwide. From proof of concept to release, our team is dedicated to incorporating your feedback and bringing your idea to reality.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="proc-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#proc-collapseThree" aria-expanded="false"
                                aria-controls="proc-collapseThree" data-panel="panel-testing">
                                Testing &amp; Quality Assurance
                            </button>
                        </h2>
                        <div id="proc-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="proc-headingThree" data-bs-parent="#mvpProcessAccordion">
                            <div class="accordion-body">We conduct thorough testing at every sprint, including functional, performance, and UX testing. This ensures your MVP is stable, reliable, and delivers a seamless experience from day one.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="proc-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#proc-collapseFour" aria-expanded="false"
                                aria-controls="proc-collapseFour" data-panel="panel-launch">
                                Launch &amp; Iteration
                            </button>
                        </h2>
                        <div id="proc-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="proc-headingFour" data-bs-parent="#mvpProcessAccordion">
                            <div class="accordion-body">After a successful launch, we help you gather user feedback and iterate quickly. Our agile methodology means you can continuously improve your product based on real-world data and market demands.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12 mt-4 mt-lg-0">
                <!-- Panel: MVP Roadmap Planning -->
                <div class="mvp-process-panel active" id="panel-roadmap">
                    <div class="mvp-tab-step">
                        <div class="mvp-step-header">
                            <span class="step-num">01</span>
                            <h3>Discovery</h3>
                        </div>
                        <p>Have a detailed discussion on your product proposal and start looking for potential opportunities. Examine analytics and market research to uncover possibilities while obtaining advice from qualified MVP specialists to plan for the best results.</p>
                    </div>
                    <div class="mvp-tab-step">
                        <div class="mvp-step-header">
                            <span class="step-num">02</span>
                            <h3>MVP Template</h3>
                        </div>
                        <p>Get an initial viable product template to start the process of developing your finished product. Review the MVP software development template thoroughly to ensure it meets your requirements while offering multiple suggestions to improve approaches and accomplish your objectives.</p>
                    </div>
                    <div class="mvp-tab-step">
                        <div class="mvp-step-header">
                            <span class="step-num">03</span>
                            <h3>MVP Roadmap</h3>
                        </div>
                        <p>Collaborate with our team of professionals to finalize the MVP development roadmap, making sure that the appropriate functionalities and designs are included. Proceed with product development knowing you have a solid strategy for success.</p>
                    </div>
                </div>
                <!-- Panel: MVP Development -->
                <div class="mvp-process-panel" id="panel-development">
                    <div class="mvp-tab-step">
                        <div class="mvp-step-header">
                            <span class="step-num">01</span>
                            <h3>Proof of Concept</h3>
                        </div>
                        <p>Connect with our team to test hypotheses, conduct market research, define your target audience, and establish a proof of concept for your product idea. Receive advice from MVP professionals along the way, putting you on the path to success sooner.</p>
                    </div>
                    <div class="mvp-tab-step">
                        <div class="mvp-step-header">
                            <span class="step-num">02</span>
                            <h3>Prototype</h3>
                        </div>
                        <p>Receive wireframes outlining user journeys to ensure the finished product delivers a remarkable experience. View a clickable version of the product prototype, experiment with UX design, iterate as needed, and plan integrations.</p>
                    </div>
                    <div class="mvp-tab-step">
                        <div class="mvp-step-header">
                            <span class="step-num">03</span>
                            <h3>MVP Launch</h3>
                        </div>
                        <p>Finalize the design with our team and begin introducing your new product to the market. Connect with potential customers quickly, confirm need, assess demand, and test viability before committing to a fully functional product.</p>
                    </div>
                </div>
                <!-- Panel: Testing & QA -->
                <div class="mvp-process-panel" id="panel-testing">
                    <div class="mvp-tab-step">
                        <div class="mvp-step-header">
                            <span class="step-num">01</span>
                            <h3>Functional Testing</h3>
                        </div>
                        <p>We validate each feature against defined requirements to ensure your MVP performs as intended. Our QA engineers execute test cases covering all core user flows and edge cases.</p>
                    </div>
                    <div class="mvp-tab-step">
                        <div class="mvp-step-header">
                            <span class="step-num">02</span>
                            <h3>Performance Testing</h3>
                        </div>
                        <p>We stress-test your MVP under realistic load conditions to ensure it scales gracefully. Performance bottlenecks are identified and resolved before your product reaches real users.</p>
                    </div>
                    <div class="mvp-tab-step">
                        <div class="mvp-step-header">
                            <span class="step-num">03</span>
                            <h3>User Acceptance Testing</h3>
                        </div>
                        <p>Real users validate the MVP against business goals in a controlled environment. Their feedback is incorporated to refine the product before the official launch.</p>
                    </div>
                </div>
                <!-- Panel: Launch & Iteration -->
                <div class="mvp-process-panel" id="panel-launch">
                    <div class="mvp-tab-step">
                        <div class="mvp-step-header">
                            <span class="step-num">01</span>
                            <h3>Deployment</h3>
                        </div>
                        <p>We deploy your MVP to production environments on AWS, Azure, or Google Cloud with CI/CD pipelines, ensuring a smooth, reliable launch with zero downtime.</p>
                    </div>
                    <div class="mvp-tab-step">
                        <div class="mvp-step-header">
                            <span class="step-num">02</span>
                            <h3>Feedback Collection</h3>
                        </div>
                        <p>We set up analytics and user feedback tools to gather actionable data post-launch. This data drives informed decisions for future sprints and product iterations.</p>
                    </div>
                    <div class="mvp-tab-step">
                        <div class="mvp-step-header">
                            <span class="step-num">03</span>
                            <h3>Iterative Growth</h3>
                        </div>
                        <p>Using agile methodology, we continue developing your product sprint by sprint based on real-world feedback, helping you scale from MVP to a full-featured product efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
(function () {
    var accordionBtns = document.querySelectorAll('#mvpProcessAccordion .accordion-button');
    var panels = document.querySelectorAll('.mvp-process-panel');

    function showPanel(panelId) {
        panels.forEach(function (p) { p.classList.remove('active'); });
        var target = document.getElementById(panelId);
        if (target) target.classList.add('active');
    }

    accordionBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var panelId = this.getAttribute('data-panel');
            if (panelId) showPanel(panelId);
        });
    });
})();
</script>

<!-- =============================================
     FAQ SECTION
     ============================================= -->
<div class="faqs-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="latest-technology-title mb-4">
                    <h2 style="color:#ec1c22">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="accordion" id="faqAccordion">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHead1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqBody1" aria-expanded="true" aria-controls="faqBody1">
                                <span class="faq-num me-3">01</span>
                                What is an MVP, and why is it important for startups?
                            </button>
                        </h2>
                        <div id="faqBody1" class="accordion-collapse collapse show" aria-labelledby="faqHead1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                An MVP (Minimum Viable Product) is a basic version of your product with core features, designed to validate your idea, gather user feedback, and reduce development risks. It helps startups test market demand before investing heavily.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHead2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqBody2" aria-expanded="false" aria-controls="faqBody2">
                                <span class="faq-num me-3">02</span>
                                How long does it take to build an MVP?
                            </button>
                        </h2>
                        <div id="faqBody2" class="accordion-collapse collapse" aria-labelledby="faqHead2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The timeline for MVP development typically ranges from 8 to 12 weeks, depending on the project's complexity, required features, and the development team's expertise. ArtisticWebServices follows agile sprints to deliver on time.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHead3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqBody3" aria-expanded="false" aria-controls="faqBody3">
                                <span class="faq-num me-3">03</span>
                                What features should I include in my MVP?
                            </button>
                        </h2>
                        <div id="faqBody3" class="accordion-collapse collapse" aria-labelledby="faqHead3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Your MVP should focus on the core functionalities that address your target audience's primary problem or need. Prioritize features that provide value and differentiate your product in the market. Our team will help you create a feature priority matrix during discovery.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHead4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqBody4" aria-expanded="false" aria-controls="faqBody4">
                                <span class="faq-num me-3">04</span>
                                What is the cost of developing an MVP?
                            </button>
                        </h2>
                        <div id="faqBody4" class="accordion-collapse collapse" aria-labelledby="faqHead4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The cost of MVP development varies based on factors such as the project's complexity, technology stack, and design requirements. It typically ranges from $15,000–$50,000. Contact us for a free consultation and customized quote.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHead5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqBody5" aria-expanded="false" aria-controls="faqBody5">
                                <span class="faq-num me-3">05</span>
                                How do you ensure the quality of an MVP?
                            </button>
                        </h2>
                        <div id="faqBody5" class="accordion-collapse collapse" aria-labelledby="faqHead5" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We ensure quality through a robust development process, including thorough planning, iterative development, and rigorous testing. This approach minimizes bugs and ensures a seamless user experience from launch day.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHead6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqBody6" aria-expanded="false" aria-controls="faqBody6">
                                <span class="faq-num me-3">06</span>
                                What technologies do you use for MVP development?
                            </button>
                        </h2>
                        <div id="faqBody6" class="accordion-collapse collapse" aria-labelledby="faqHead6" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We utilize a wide range of technologies including modern frameworks like React, Angular, Node.js, Python, Ruby on Rails, and cloud platforms like AWS or Azure — tailored to your project's specific needs and scale.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHead7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqBody7" aria-expanded="false" aria-controls="faqBody7">
                                <span class="faq-num me-3">07</span>
                                Can my MVP be scaled into a full product later?
                            </button>
                        </h2>
                        <div id="faqBody7" class="accordion-collapse collapse" aria-labelledby="faqHead7" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely. We build all MVPs with scalability in mind from day one. The architecture, codebase, and infrastructure are designed to grow alongside your business. Our team can seamlessly transition from MVP to a full-featured product as your user base and requirements expand.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- =============================================
     CONTACT / CTA SECTION
     ============================================= -->
<section class="welcome-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-12">
                <div class="welcome-three__left">
                    <div class="get__content">
                        <h4>Collaborate with</h4>
                        <h2>Our Team</h2>
                        <p>Want to find out how MVP development can accelerate your startup's growth? Our experts are ready to help you launch fast and smart.</p>
                        <strong>Foster Innovation with a Trusted MVP Partner</strong>
                        <p>Team Up With Our Expert MVP Developers to Launch, Validate, and Grow Your Startup Globally.</p>
                        <h3>Contact Info:</h3>
                        <ul>
                            <li>
                                <a href="mailto:info@artisticwebservices.com">
                                    <img src="<?= $B ?>/assets/images/fitness/email.svg" alt="Email">
                                    info@artisticwebservices.com
                                </a>
                            </li>
                            <li>
                                <a href="tel:+12137147176" class="nav-number nav-number-1">
                                    <img src="<?= $B ?>/assets/images/fitness/USA-Flag.svg" alt="Flag">
                                    (213) 714-7176
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-12 mt-4 mt-lg-0">
                <div class="welcome-three__right welcome-three__right-zero">
                    <?php include __DIR__ . '/../includes/form-quote.php'; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
$(document).ready(function () {
    $('#submit_btn').on('click', function (e) {
        e.preventDefault();

        var first_name = $('#first_name').val().trim();
        var last_name  = $('#last_name').val().trim();
        var email      = $('#email').val().trim();
        var phone      = $('#phone').val().trim();
        var captcha    = $('#captcha').val().trim();
        var captcha_answer = $('#captcha_answer').val();
        var selectedOptions = $('.js-example-basic-multiple').val();

        function validateEmail(e) { return /\S+@\S+\.\S+/.test(e); }
        function validatePhone(p) { return /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/.test(p); }

        if (!first_name) { $('#name-valid').text('Please enter your first name'); return; }
        else $('#name-valid').text('');

        if (!last_name) { $('#name-valid2').text('Please enter your last name'); return; }
        else $('#name-valid2').text('');

        if (!email) { $('#email-valid').text('Please enter your email'); return; }
        else if (!validateEmail(email)) { $('#email-valid').text('Please enter a valid email'); return; }
        else $('#email-valid').text('');

        if (!phone) { $('#phone-valid').text('Please enter your phone'); return; }
        else if (!validatePhone(phone)) { $('#phone-valid').text('Invalid phone: (012)-345-6789'); return; }
        else $('#phone-valid').text('');

        if (!selectedOptions || selectedOptions.length === 0) { $('#project-valid').text('Please select at least one option'); return; }
        else $('#project-valid').text('');

        if (!captcha) { $('#captcha-valid').text('Please enter the captcha answer'); return; }
        else if (captcha !== captcha_answer) { $('#captcha-valid').text('Invalid captcha answer'); return; }
        else $('#captcha-valid').text('');

        $('#contact')[0].submit();
    });

    $('#phone').on('keypress', function (e) {
        var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (/^[a-zA-Z]+$/.test(key)) { e.preventDefault(); return false; }
        if (e.keyCode === 8) return;
        var val = $(this).val();
        if (val.length === 3) $(this).val('(' + val + ')-');
        if (val.length === 9) $(this).val(val + '-');
    });
});
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>
