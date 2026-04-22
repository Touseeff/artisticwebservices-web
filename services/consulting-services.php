<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'IT Consulting Services USA | Digital Strategy & Tech Advisory — ArtisticWebServices';
$page_description = 'Strategic IT consulting from ArtisticWebServices. Technology roadmap, digital transformation, architecture review, and CTO-as-a-service for USA businesses.';
$page_keywords = 'IT consulting company USA, technology consulting New York, digital transformation consulting, CTO as a service, software architecture consulting';
$page_canonical = 'https://artisticwebservices.com/services/consulting-services';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservices-og.png';
$page_breadcrumbs = [['name' => 'Services', 'url' => 'https://artisticwebservices.com/services'], ['name' => 'IT Consulting Services', 'url' => 'https://artisticwebservices.com/services/consulting-services']];
$page_service_schema = ['name' => 'IT Consulting Services', 'description' => 'Strategic technology consulting including digital transformation roadmaps, architecture reviews, and CTO-as-a-Service for USA businesses.'];
$page_faq = [
    ['q' => 'What IT consulting services does ArtisticWebServices provide?', 'a' => 'We offer technology strategy consulting, digital transformation roadmapping, software architecture review, cloud migration planning, CTO-as-a-Service for startups and scale-ups, vendor selection advisory, and technical due diligence for M&A. Our consultants have deep expertise across web, mobile, cloud, AI/ML, and enterprise software.'],
    ['q' => 'How is CTO-as-a-Service different from hiring a full-time CTO?', 'a' => 'CTO-as-a-Service gives you senior technical leadership at a fraction of the cost of a full-time executive hire. ArtisticWebServices provides a dedicated fractional CTO who attends leadership meetings, owns technology strategy, manages your dev team, and makes architecture decisions — typically 10–40 hours per month based on your needs.'],
    ['q' => 'How long does a digital transformation engagement typically take?', 'a' => 'Digital transformation is not a single project but a phased journey. Our initial discovery and roadmap engagement is typically 4–8 weeks and produces a prioritized 12–24 month technology roadmap. Implementation phases are then executed iteratively. Most organizations see measurable ROI within 6 months of beginning execution.'],
    ['q' => 'Do you work with startups as well as established enterprises?', 'a' => 'Yes. We work with pre-seed startups needing technical co-founder support and MVP architecture, Series A/B companies scaling their engineering org, and established mid-market enterprises modernizing legacy systems. Our consulting approach and pricing models adapt to the stage and size of each client.'],
    ['q' => 'Can you help us choose between build vs. buy for new software?', 'a' => 'Absolutely. Our build-vs-buy analysis evaluates total cost of ownership, vendor risk, customization requirements, integration complexity, and long-term scalability. We provide an objective recommendation with supporting data — not influenced by any software vendor partnerships.']
];
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<section class="about-page">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div>
                                <h1 class="section-title__title mb-3" Style="color: #000">Consulting Services</h1>
                            </div>
                            
                            <p class="">We layout and execute tailor-made app growth strategies that help spread the
                                word about your application, and bring you closer to your targeted audience!</p>
                            <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn">Get Your Free Quote</a>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img class="img-fluid" src="<?= $B ?>/assets/images/consulting%20service.webp"
                                alt="Best Consulting Services usa">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Welcome Three Start-->
        <section class="welcome-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome-three__left">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">Our introductions</span> -->
                                <h2 class="section-title__title">Bridging the Gap to a Smarter, Secure, and Automated Future</h2>
                            </div>
                            <p class="welcome-three__text">We help organizations cope with new challenges and bridge the
                                course in Digital Transformation, Cloud Enablement, Information Security, Process
                                Consulting, and Automation.</p>
                            <div class="welcome-three__features">
                                <ul class="list-unstyled welcome-three__features-box">
                                    <li>
                                        <div class="icon"> <span class="icon-recruit"></span> </div>
                                        <div class="text">
                                            <p>Start development
                                                <br> with experts
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"> <span class="icon-consulting"></span> </div>
                                        <div class="text">
                                            <p>Enhance your web
                                                <br> look with us
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div> <a href="<?= $B ?>/about-us.php" class="thm-btn welcome-three__btn">Discover More</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="welcome-three__right">
                            <div class="row">
                                <?php require_once __DIR__ . '/../includes/form-quote.php'; ?>

<script src="https://www.google.com/recaptcha/api.js"></script>
<!-- <script type="text/javascript">
  var validateRecaptcha = function () {
    if (checkRecaptcha()) {
      $('#submit_btn').attr('disabled', false);
    }
  }
  $('#contact').submit(function (e) {
    if (!checkRecaptcha()) {
      $("#frm-result").text("Please validate your reCAPTCHA.");
      return false;
    }
    $('#submit_btn').attr('disabled', false);
  });

  function checkRecaptcha() {
    res = $('#g-recaptcha-response').val();
    if (res == "" || res == undefined || res.length == 0) return false;
    else return true;
  }
</script> -->                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Welcome Three End-->
        <section class="why-choose-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="why-choose-one__left">
                            <div class="why-choose-one__img"> <img src="<?= $B ?>/assets/images/consulting-services-img2.webp"
                                    alt="Best Consulting Services usa"> </div>
                            <div class="why-choose-one-box-1"></div>
                            <div class="why-choose-one-box-2"></div>
                            <!-- <div class="why-choose-one-box-3"></div> -->
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-one__right">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">why choose us</span> -->
                                <h2 class="section-title__title">From Big Ideas to Bold Execution—Consulting That Drives Real Results</h2>
                            </div>
                            <p class="why-choose-one__right-text">We deliver affordable, professional consulting
                                services for entrepreneurs, startups, and growing enterprise organizations and
                                facilitate the most complex and vexing technical challenges and high-stake opportunities
                            </p>
                            </br>
                            <p>Our consulting services help you in developing revolutionary new ideas & implementing
                                them from scratch. We ensure that you are always up to speed and ahead of developing
                                industry standards.</p>
                            <a href="<?= $B ?>/about-us.php" class="thm-btn welcome-three__btn mt-3">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Project One Start-->
        <section class="project-one">
    <div class="container">
        <div class="section-title text-center"> <span class="section-title__tagline">recent projects</span>
            <h2 class="section-title__title">Work Showcase</h2>
        </div>
        <div class="row filter-layout masonary-layout">
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item photo">
                <!--Portfolio One Single-->
                <div class="project-one__single">
                    <a href="<?= $B ?>/services/case-studies#work-showcase" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/telemedicine-thumbnail.webp" alt="Rubberworx" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/services/case-studies#work-showcase">A Telemedicine Application and Integrated Features</a>
                            </h3>
                            <p class="color-white">
                                These comprehensive telemedicine experiences, enhance the patient’s care and convenience while ensuring effective communication between patients and healthcare providers.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item photo">
                <!--Portfolio One Single-->
                <div class="project-one__single">
                    <a href="<?= $B ?>/services/case-studies#work-showcase" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/medication-app%20thumbnail.webp" alt="Rubberworx" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/services/case-studies#work-showcase">Digital Medication Management App Features</a>
                            </h3>
                            <p class="color-white">
                               A digital health management app with a focus on Medication Management, consider including the following features
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item photo">
                <!--Portfolio One Single-->
                <div class="project-one__single">
                    <a href="<?= $B ?>/services/case-studies#work-showcase" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/digital-health%20management-thumbnail.webp" alt="Rubberworx" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/services/case-studies#work-showcase">A Digital Health Management</a>
                            </h3>
                            <p class="color-white">
                                We provide a comprehensive solution for monitoring and managing patient treatment remotely, enhancing both patient care and provider efficiency.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item photo">
                <!--Portfolio One Single-->
                <div class="project-one__single">
                    <a href="<?= $B ?>/services/case-studies#work-showcase" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/rubberworx/Thumbnail-Rubberworx.webp" alt="Rubberworx" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/services/case-studies#work-showcase">Rubberworx</a>
                            </h3>
                            <p class="color-white">
                                The Rubberworx Mobile App is a groundbreaking solution that blends the magic of
                                augmented truth and synthetic intelligence to redefine the way you discover rubber
                                flooring alternatives.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item photo">
                <div class="project-one__single">
                    <a href="<?= $B ?>/services/case-studies#work-showcase" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/netfusinory-thumbnail-2.webp" alt="NetFusionary" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/services/case-studies#work-showcase">NetFusionary</a>
                            </h3>
                            <p class="color-white">
                                Explore how the NetFusionary platform revolutionizes efficient event creation, user account management, connecting businesses, and creating profitable relationships with ease.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item photo">
                <!--Portfolio One Single-->
                <div class="project-one__single">
                    <a href="<?= $B ?>/services/case-studies#work-showcase" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/party/Thumbnail-Party-at-the-barn.webp" alt="Party at The Barn" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/services/case-studies#work-showcase">Party at The Barn</a>
                            </h3>
                            <p class="color-white">
                                Party at the Barn App is your remaining accomplice for an afternoon of a laugh at the
                                zoo. With a colorful splash screen, easy sign-up alternatives,
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item photo">
                <!--Portfolio One Single-->
                <div class="project-one__single">
                    <a href="<?= $B ?>/services/case-studies#work-showcase" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/questor/Thumbnail-Pro-Questor.webp" alt="Pro Questor" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/services/case-studies#work-showcase">Pro Questor</a>
                            </h3>
                            <p class="color-white">
                                Discover your dream career with the ProQuestor App! This consumer-pleasant cellular
                                application empowers experts elderly 20 to 55 to discover tailored professional paths
                                and encouraged apps based on their abilities and passions.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item photo">
                <!--Portfolio One Single-->
                <div class="project-one__single">
                    <a href="<?= $B ?>/services/case-studies#work-showcase" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/hooking/Thumbnail-Hooking-inapp-dating.webp"
                            alt="Hooking Dating" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/services/case-studies#work-showcase">Hooking Dating</a>
                            </h3>
                            <p class="color-white">
                                "Experience the future of online courting with our Hooking Dating Web App. Connect with
                                capacity partners in a modern and amusing manner while enjoying a fishing and
                                boating-themed layout.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item photo">
                <!--Portfolio One Single-->
                <div class="project-one__single">
                    <a href="<?= $B ?>/services/case-studies#work-showcase" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/priority-task-management/Thumbnail-Priority-Task-Management.webp"
                            alt="Priority Task Management" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/services/case-studies#work-showcase">Priority Task Management</a>
                            </h3>
                            <p class="color-white">
                                "Priority Task Management" is your assignment and time control partner. Organize your
                                lifestyles, set priorities, and schedule duties without difficulty.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item photo">
                <!--Portfolio One Single-->
                <div class="project-one__single">
                    <a href="<?= $B ?>/services/case-studies#work-showcase" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/wedding-bells/Thumbnail-Wedding-Bells.webp" alt="Wedding Bells" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/services/case-studies#work-showcase">Wedding Bells</a>
                            </h3>
                            <p class="color-white">
                                Seamlessly manipulate the entirety with Wedding Bells! From budgets and guest lists to
                                inspiration and seller coordination guarantees that your wedding ceremony planning is as
                                pleasing as the event itself.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item photo">
                <!--Portfolio One Single-->
                <div class="project-one__single">
                    <a href="<?= $B ?>/services/case-studies#work-showcase" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/sports-recruiting/Thumbnail-Sports.webp" alt="Sports Recruiting" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/services/case-studies#work-showcase">Sports Recruiting</a>
                            </h3>
                            <p class="color-white">
                                Experience the future of sports activities recruiting with our present-day app. Connect
                                with university recruiters nationwide, showcase your abilities, and receive actual-time
                                notifications while coaches view your profile.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 filter-item photo">
                <!--Portfolio One Single-->
                <div class="project-one__single">
                    <a href="<?= $B ?>/services/case-studies#work-showcase" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/social-squad/Thumbnail-Social-Squad.webp" alt="Social Squad" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/services/case-studies#work-showcase">Social Squad</a>
                            </h3>
                            <p class="color-white">
                                "Social Squad: Your Ultimate Social Hub! Connect with friends, percentage your stories,
                                and discover thrilling content. Create a vibrant profile, live updated along with your
                                community, experience customized messaging, or even stay.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <!--<div class="col-xl-4 col-lg-6 col-md-6 filter-item photo">-->
                <!--Portfolio One Single-->
            <!--    <div class="project-one__single">-->
            <!--        <a href="presidential-parcel-delivery" class="project-one__img">-->
            <!--            <img src="<?= $B ?>/assets/images/work/presidential-parcel-delivery/Thumbnail-Presidential-Parcel-Delivery.webp"-->
            <!--                alt="Presidential Parcel Delivery" />-->
            <!--            <div class="project-one__hover">-->
            <!--                <h3 class="project-one__title">-->
            <!--                    <a href="presidential-parcel-delivery">Presidential Parcel Delivery</a>-->
            <!--                </h3>-->
            <!--                <p class="color-white">-->
            <!--                    Our Presidential Parcel Delivery App revolutionizes delivery and receiving by way of-->
            <!--                    seamlessly connecting clients with committed shipping riders. Experience trouble-loose-->
            <!--                    deliveries like by no means before!"-->
            <!--                </p>-->
            <!--            </div>-->
            <!--        </a>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
        <div class="d-flex justify-content-center">
            <a href="<?= $B ?>/services/case-studies" class="thm-btn how-it-works__btn">See More</a>
        </div>
    </div>
</section>        <!--Project One End-->
        <!--Our process Start-->
        <section class="how-it-works my-4">
    <div class="container">
        <div class="section-title text-center"> <span class="section-title__tagline">easy 6 steps</span>
            <h2 class="section-title__title">Our Process</h2>
        </div>
        <img src="<?= $B ?>/assets/images/process.webp" alt="process" class="img-fluid d-none d-md-block">
        <img src="<?= $B ?>/assets/images/process-mobile.webp" alt="process" class="img-fluid d-block d-md-none">
        <div class="how-it-works__bottom wow fadeInUp animated" data-wow-delay="900ms"
            style="visibility: visible; animation-delay: 900ms; animation-name: fadeInUp;">
            <div class="row">
                <div class="col-xl-12">
                    <div class="how-it-works__bottom-inner">
                        <p class="how-it-works__bottom-text">Our flexible app development team is always ready to take
                            on challenging projects. Our cost-effective solutions catered precisely to making your
                            business grow! </p> <a href="<?= $B ?>/contact.php" class="thm-btn how-it-works__btn">get a free quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>        <!--Our process End-->
        <!--Testimonial Two Start-->
        <section class="testimonial-two">
  <div class="testimonial-two-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"> <img src="<?= $B ?>/assets/images/shapes/testimonial-two-shape.webp" alt="Award-Winning Mobile App Development Company New York"> </div>
  <div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="client_heading">
                <h2>Client Success</h2>    
            </div>
        </div>
      <div class="col-xl-5">
        <div class="testimonial-two__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
          <div class="testimonial-two__img"> <img src="<?= $B ?>/assets/images/testimonial/testimonial-two-img.webp" alt="Award-Winning Mobile App Development Company New York">
            <!-- <div class="testimonial-two__content"><h3 class="testimonial-two__title">#Happy <span>Customers</span></h3></div> -->
            <div class="testimonial-two__box-1"></div>
            <div class="testimonial-two__box-2"></div>
          </div>
        </div>
      </div>
      <div class="col-xl-7">
        <div class="testimonial-two__right">
          <div class="section-title text-left"> <span class="section-title__tagline">our customer feedbacks</span>
            <h2 class="section-title__title">What they’re saying</h2> </div>
          <div class="testimonial-two__carousel owl-theme owl-carousel">
            <!--Testimonial Two Single-->
            <div class="testimonial-two__single">
              <p class="testimonial-two__text">Working with ArtisticWebServices was one of the best investments we made for our company. They delivered a polished, scalable app right on schedule, and the whole process was transparent from day one. Their developers genuinely cared about our product's success — not just writing code. I've already referred them to two of my business partners.</p>
              <div class="testimonial-two__client-info">
                <div class="testimonial-two__client-img"> <i class="fas fa-user-circle" style="font-size:56px;color:#d31923;"></i> </div>
                <div class="testimonial-two__client-details">
                  <h4 class="testimonial-two__client-name">Matthew Johnson</h4>
                  <p class="testimonial-two__client-title">Startup Founder, Austin TX</p>
                </div>
              </div>
            </div>
            <!--Testimonial Two Single-->
            <div class="testimonial-two__single">
              <p class="testimonial-two__text">ArtisticWebServices transformed our outdated platform into a sleek, high-performance application that our users love. Their project manager was communicative throughout, and the post-launch support was outstanding. The team treats every project as if it's their own — that dedication is rare and genuinely appreciated.</p>
              <div class="testimonial-two__client-info">
                <div class="testimonial-two__client-img"> <i class="fas fa-user-circle" style="font-size:56px;color:#d31923;"></i> </div>
                <div class="testimonial-two__client-details">
                  <h4 class="testimonial-two__client-name">Ashley Williams</h4>
                  <p class="testimonial-two__client-title">eCommerce Owner, Chicago IL</p>
                </div>
              </div>
            </div>
            <!--Testimonial Two Single-->
            <div class="testimonial-two__single">
              <p class="testimonial-two__text">From the first discovery call, I knew I was working with a top-tier team. ArtisticWebServices took the time to truly understand my business goals and built a solution that exceeded every expectation. Since launch, our customer retention improved by 40%. They're not just developers — they're strategic partners who invest in your growth.</p>
              <div class="testimonial-two__client-info">
                <div class="testimonial-two__client-img"> <i class="fas fa-user-circle" style="font-size:56px;color:#d31923;"></i> </div>
                <div class="testimonial-two__client-details">
                  <h4 class="testimonial-two__client-name">Jennifer Davis</h4>
                  <p class="testimonial-two__client-title">Wellness Coach, Seattle WA</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>        <!--Testimonial Two End-->
        <!--Testimonial Two Start-->
        <!--Team One Start-->
<section class="team-one">
  <div class="container">
    <div class="section-title text-center">
      <h2 class="section-title__title mt-3">Technologies We Work With</h2> </div>
  </div>
</section>
<!--Team One End-->
<!--Brand Two Start-->
<section class="brand-one">
  <div class="container-fluid">
    <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "375": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "575": {
                "spaceBetween": 30,
                "slidesPerView": 3
            },
            "767": {
                "spaceBetween": 50,
                "slidesPerView": 5
            },
            "991": {
                "spaceBetween": 50,
                "slidesPerView": 6
            },
            "1199": {
                "spaceBetween": 35,
                "slidesPerView": 8
            }
        }}'>
      <div class="swiper-wrapper">
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/android.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/angular.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/appium.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/aws.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/dc.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/dynamodb.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/firebase.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/flutter.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/gradle.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/html5.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/ionic.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/ios.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/java.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/jenkins.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/kotlin.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/linode.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/magento.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/mongo.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/mssql.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/mysql.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/node.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/ocject.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/php.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/rackspace.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/react.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/redis.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/selenium.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/shopify.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/swift.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/ts.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/vue.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/wordpress.webp" alt=""> </div>
        <!-- /.swiper-slide -->
        <div class="swiper-slide"> <img src="<?= $B ?>/assets/images/brand/wpf.webp" alt=""> </div>
        <!-- /.swiper-slide -->
      </div>
    </div>
  </div>
</section>
<!--Brand Two End-->        <!--Testimonial Two End-->

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>