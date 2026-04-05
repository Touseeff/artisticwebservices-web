<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'Client Case Studies & Portfolio | ArtisticWebServices';
$page_description = 'Browse ArtisticWebServices client success stories and portfolio. 460+ projects delivered across healthcare, fintech, e-commerce, fitness, real estate, and more industries in USA.';
$page_keywords = 'software development case studies, mobile app portfolio USA, client success stories, app development portfolio, software company case study, ArtisticWebServices portfolio';
$page_canonical = 'https://artisticwebservices.com/insights/case-studies';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
$page_breadcrumbs = [['name' => 'Insights', 'url' => 'https://artisticwebservices.com/insights/digital-insights.php'], ['name' => 'Case Studies', 'url' => 'https://artisticwebservices.com/insights/case-studies.php']];
$page_article_schema = ['type' => 'WebPage', 'date' => '2024-01-01'];
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<style>
         .flex {
         display: flex;
         flex-wrap: wrap;
         justify-content: center;
         align-items: center;
         gap: 30px;
         }
         .content {
         width: 45%;
         text-align: center;
         display: none;
         }
         #loadMore {
         width: 200px;
         color: #fff;
         display: block;
         text-align: center;
         margin: 20px auto;
         padding: 10px;
         border-radius: 10px;
         border: 1px solid transparent;
         background-color: #bf1212;
         transition: .3s;
         }
         #loadMore:hover {
         color: blue;
         background-color: #fff;
         border: 1px solid #bf1212;
         text-decoration: none;
         }
         .noContent {
         color: #000 !important;
         background-color: transparent !important;
         pointer-events: none;
         }
         .work__section {
         height: 60vh;
         padding: 150px 0px 70px;
         }
         h1.section-title__title.mb-3 {
         color: #ffff;
         }
         p.work-pera {
         color: #fff;
         }
      </style>
<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<section class="about-page work-bg work__section">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12 text-center">
                     <div class="mt-3">
                        <div>
                           <h1 class="section-title__title mb-3">
                              Inspiring Client Stories of Digital Transformation
                           </h1>
                        </div>
                        <p class="work-pera">
                           Our work defines our credibility - and this is one of the
                           reason why we have managed to create quiet a fandom of our
                           own. Have a glimpse on our portfolio, and see for yourself why
                           we are the perfect fit for you!
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Project One Start-->
         <section class="project-one pt-4">
            <div class="container">
               <div class="section-title text-center">
                  <h2 class="section-title__title">Work Showcase</h2>
               </div>
            </div>
            <div class="container">
               <div class="flex">
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/a-telemedicine-application-and-integrated-features.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/telemedicine-thumbnail.webp" alt="Party at The Barn" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/digital-medication-management-app-features.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/medication-app%20thumbnail.webp" alt="Party at The Barn" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/prosport-connect-sports-and-athletes-mobile-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/case/pro-sports-thumb.webp" alt="Party at The Barn" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/solutions/energy-sector-digital.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/energy/thumbnail.webp" alt="Energy" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/solutions/construction-industry.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/case/construction-thumb.webp" alt="Party at The Barn" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/fintrack.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/case/fintech-thumb.webp" alt="Party at The Barn" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/a-digital-health-management.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/digital-health%20management-thumbnail.webp" alt="Party at The Barn" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/netfusionary.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/netfusionary-thumbnail.webp" alt="Party at The Barn" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/rubberworx.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/rubberwork.webp" alt="Rubberworx" />
                        </a>
                     </div>
                  </div>
               
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/roof-contracting-mobile-application.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/horizon-roofing-contractor.webp" alt="School Bus Tracking app" />
                        </a>
                     </div>
                  </div>
  
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/instant-realtor-mobile.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/instant-realtor-main.webp" alt="School Bus Tracking app" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/party-at-the-barn.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/party-at-the-barn.webp" alt="Party at The Barn" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/pro-questor.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/pro-questor.webp" alt="Pro Questor" />
                        </a>
                     </div>
                  </div>
                   <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/priority-task-management-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/priority-task-management.webp" alt="Priority Task Management" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/sports-recruiting-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/sports-recruiting.webp" alt="Sports Recruiting" />
                        </a>
                     </div>
                  </div>
                 
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/hooking-dating.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/hooking-dating.webp" alt="Hooking Dating" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/social-squads-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/social-squads.webp" alt="Social Squad" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/wedding-bells-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/wedding-bells.webp" alt="Wedding Bells" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/presidential-parcel-delivery.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/presidential-parcel-delivery.webp" alt="Presidential Parcel Delivery" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/healthify-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/healthfy.webp" alt="Healthfy" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/child-upbringing-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/child-upbringing.webp" alt="Child Upbringing" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/bizi-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/bizi.webp" alt="Bizi App" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/vpn-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/vpn-app.webp" alt="VPN App" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/river-island.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/river-island.webp" alt="River Island" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/services/social-networking-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/social-networking.webp" alt="Social Networking  App" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/hotel-booking-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/hotel-booking-mobile-app.webp"  alt="Hotel & Travling Booking App" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/tasty-food-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/testy-food-app.webp" alt="Food App" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/services/healthcare-medical-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/health-care.webp" alt="Healthcare & Medical App" />
                        </a>
                     </div>
                  </div>
                  <!--<div class="content">-->
                  <!--   <div class="project-one__single">-->
                  <!--      <a href="laundry-app-development" class="project-one__img">-->
                  <!--      <img src="<?= $B ?>/assets/images/work/laundry-and-dry-cleaning-service-app.webp" alt="On-demand Laundry App" />-->
                  <!--      </a>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/medhealth-systems-inc.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/case/medhealth-thumb.webp" alt="On-demand Laundry App" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/property-exchange-real-estate-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/property-&amp;-apartment-exchange-app.webp" alt="Property Exchange App" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/virtual-party-app-development.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/virtual-partry-app.webp" alt=" Party App" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/paynow-for-stripe-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/paynow-point-of-sale-app.webp" alt="PayNow For Stripe app" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/online-score-tracker-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/online-score-tracker.webp" alt="Online Score Tracker App" />
                        </a>
                     </div>
                  </div>
                  <div class="content">
                     <div class="project-one__single">
                        <a href="<?= $B ?>/insights/school-bus-tracking-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/school-bus-tracking.webp" alt="School Bus Tracking app" />
                        </a>
                     </div>
                  </div>
                  <!--<div class="content">-->
                  <!--   <div class="project-one__single">-->
                  <!--      <a href="bbq" class="project-one__img">-->
                  <!--      <img src="<?= $B ?>/assets/images/bbq-contest-main.webp" alt="bbq contest main" />-->
                  <!--      </a>-->
                  <!--   </div>-->
                  <!--</div>-->
               </div>
               <a href="case-studies.html#" id="loadMore">Load More</a>
            </div>
         </section>
         <!--Project One End-->
         <!--Counter One Start-->
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
</section>         <!--Counter One End-->
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
</section>         <!--Testimonial Two End-->
         <!--technologies Start-->
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
<!--Brand Two End-->         <!--technologies End-->

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>