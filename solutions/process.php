<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'Our Software Development Process | Agile 6-Step Methodology — ArtisticWebServices';
$page_description = 'Discover ArtisticWebServices agile software development process. From discovery and design to development, QA, and deployment — transparent 6-step SDLC for on-time delivery.';
$page_keywords = 'software development process USA, agile development methodology, SDLC process, app development process, iterative software development, agile sprint process USA';
$page_canonical = 'https://artisticwebservices.com/solutions/process';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
$page_breadcrumbs = [['name' => 'About', 'url' => 'https://artisticwebservices.com/about-us.php'], ['name' => 'Our Process', 'url' => 'https://artisticwebservices.com/solutions/process.php']];
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<section class="about-page process__section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class=" mt-3">
                            <div>
                                <h1 class="section-title__title mb-3">Our Process</h1>
                            </div>
                            <p class="">As trite as it may sound, all great applications were used to be the "ideas"
                                that were brought to life! If app development is a new process, it’s normal for your
                                brain to instinctively ask us questions about our app development approach. For your
                                ease, here is everything you need to know about our app development process!</p>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="about-page__left"></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="pb-5">
            <div class="container">
                <img src="<?= $B ?>/assets/images/process.webp" alt="process" class="img-fluid d-none d-md-block">
                <img src="<?= $B ?>/assets/images/process-mobile.webp" alt="process" class="img-fluid d-block d-md-none">
            </div>
        </div>
        <!-- <section class="services-one">
            <div class="services-one-shape" style="background-image: url(<?= $B ?>/assets/images/shapes/services-one-shape.webp)">
            </div>
            <div class="container">
                <div class="services-one__top pt-5">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="services-one__top-left">
                                <div class="section-title text-center">
                                    <h2 class="section-title__title">We Start Here</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-one__bottom">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 wow fadeInUp animated" data-wow-delay="100ms"
                            style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                            <div class="services-one__single">
                                <h3 class="services-one__title mb-3">IP Protection</h3>
                                <p>It’s our top priority. We start every project with an NDA, to make sure that your
                                    crucial information and Intellectual Property are always safe and secure.</p>
                                <div class="services-one__count"></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp animated" data-wow-delay="200ms"
                            style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                            <div class="services-one__single">
                                <h3 class="services-one__title mb-3">Consultation & Project Discovery</h3>
                                <p>It’s our top priority. We start every project with an NDA, to make sure that your
                                    crucial information and Intellectual Property are always safe and secure.</p>
                                <div class="services-one__count"></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp animated" data-wow-delay="300ms"
                            style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                            <div class="services-one__single">
                                <h3 class="services-one__title mb-3">RAPID STRATEGY WORKSHOP</h3>
                                <p>Then, we will identify the best way to cook your idea ready for development, review
                                    commercial & technical risks and create a level of effort (LOE) document for you to
                                    review.</p>
                                <div class="services-one__count"></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp animated" data-wow-delay="400ms"
                            style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                            <div class="services-one__single">
                                <h3 class="services-one__title mb-3">USER INTERFACES & EXPERIENCES</h3>
                                <p>Then, our team of talented UI/UX engineers ensures that whenever we build a
                                    particular screen, an experience, the transition, an icon, or any other element, it
                                    always looks and feels like it came from ArtisticWebServices.</p>
                                <div class="services-one__count"></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp animated" data-wow-delay="500ms"
                            style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                            <div class="services-one__single">
                                <h3 class="services-one__title mb-3">AGILE DEVELOPMENT</h3>
                                <p>Our agile-based development runs in two-week sprints that result in a new,
                                    incremental build at the end of each fortnight, allowing you to regularly review and
                                    assess what we’re building.</p>
                                <div class="services-one__count"></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp animated" data-wow-delay="600ms"
                            style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                            <div class="services-one__single">
                                <h3 class="services-one__title mb-3">TESTING & INCREMENTAL QUALITY ASSURANCE</h3>
                                <p>To avoid future challenges we make sure that you are building great software from the
                                    very start. Our Incremental testing & quality assurance approach ensures that there
                                    are no surprises at the end.</p>
                                <div class="services-one__count"></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp animated" data-wow-delay="700ms"
                            style="visibility: visible; animation-delay: 700ms; animation-name: fadeInUp;">
                            <div class="services-one__single">
                                <h3 class="services-one__title mb-3">SUPPORT & MAINTENANCE</h3>
                                <p>After we’ve gone live, we offer maintenance packages that cover everything from the
                                    occasional checkup to ongoing feature expansions and whole new versions.</p>
                                <div class="services-one__count"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>