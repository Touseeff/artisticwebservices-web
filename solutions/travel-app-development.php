<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'Travel App Development Company USA | Booking & Tourism Apps — ArtisticWebServices';
$page_description = 'Launch your travel app with ArtisticWebServices. Hotel booking, flight search, tour management, and travel marketplace development for USA travel companies.';
$page_keywords = 'travel app development USA, hotel booking app development, flight booking app, tourism app development company, travel software USA';
$page_canonical = 'https://artisticwebservices.com/solutions/travel-app-development';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<section class="about-page state-section-main" style="background-image: url('<?= $B ?>/assets/images/travel/travel-hero.webp'); background-size: cover; background-position: center;">
            <div class="container">
               <div class="row">
                  <div class="col-xl-7">
                     <div class=" mt-3">
                        <div>
                           <h1 class="section-title__title mb-3">Explore New Horizons with Innovative Travel App Solutions Tailored for Your Journey</h1>
                        </div>
                        <p class="">ArtisticWebServices introduces an unbeatable travel app that will completely change your perception towards the digital world. Our specialty is developing user-friendly travel solution that make exploring easier and remarkable. We help travel agencies and other businesses to get connected with their regular passengers by offering easy planning and idea guidance to real-time navigation with our professional services. We are here to help your guests and make the most of their trip by reserving tickets and discovering hidden places around the globe.</p>
                        <ul>
                           <li>User-Centric Design</li>
                           <li>Secure Payments</li>
                           <li>Interactive Features</li>
                           <li>Fully Customizable Solution</li>
                        </ul>
                     </div>
                     <div class="state_partners mt-5">
                        <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/google-logo.wine.webp" alt="softwareworld">
                        <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/amazon-logo.wine.webp" alt="trustpilot">
                        <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/stripe-logo.wine.webp" alt="app futura">
                        <img class="img-fluid awards-img squ" src="<?= $B ?>/assets/images/Square-logo.webp" alt="clutch">
                     </div>
                     <div class="hero-cta-btns mt-4">
                        <button type="button" class="btn-cta-modal btn-get-touch" data-bs-toggle="modal" data-bs-target="#contactModal">Get In Touch</button>
                        <a href="tel:+12137147176" class="btn-cta-modal btn-call-now">&#128222; Call Now</a>
                     </div>
                  </div>
                  <!--<div class="col-xl-5">-->
                  <!--   <div class="left_state">-->
                  <!--      <div class="state_img">-->
                  <!--         <img src="<?= $B ?>/assets/images/testimonial/testimonial-one-img-3.webp" alt="Award-Winning Mobile App Development Company New York">-->
                  <!--      </div>-->
                  <!--      <div class="state_content">-->
                  <!--         <h4>Are You Curious To Uncover The Possibilities Offered By Our Real Estate App Development Services?</h4>-->
                  <!--         <div class="state_bookbtn">-->
                  <!--            <a href="#">Book a Call</a>-->
                  <!--         </div>-->
                  <!--         <p>Or, fill out this form to tell us about your needs.</p>-->
                  <!--         <ul>-->
                  <!--            <li><a href="#">PM 100% confidential</a></li>-->
                  <!--            <li><a href="#">PM We sign NDA</a></li>-->
                  <!--            <li><a href="#">PM Our Process</a></li>-->
                  <!--         </ul>-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</div>-->
               </div>
            </div>
         </section>
         <section class="heading__section">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="eco_title">
                        <h5>Chosen by Enterprises and Startups for Exceptional Results</h5>
                     </div>
                  </div>
               </div>
            </div>
         </section>
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
         <section class="travel-experience">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="experience-ttitle">
                        <h2>Travel App Development</h2>
                        <h4>Journeys for an Effortless Experience</h4>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="experience-ttitle">
                        <p>We create exciting travel mobile experiences that provide travelers with easy access to all of the tools they need for successful trip planning.</p>
                     </div>
                  </div>
               </div>
               <div class="row mt-5">
                  <div class="col-md-4">
                     <div class="experiene-details">
                        <h3>Travel Guide Application <span>Development</span></h3>
                        <p>Bring the world to your clients with a travel guide app designed for exploration. From hidden treasures to must-see landmarks, fond travellers of several agencies are now free to discover new destination and learn insider tips no matter where they go.</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="experiene-details">
                        <h3>Flight Booking Application <span>Development</span></h3>
                        <p>Now booking flights have become a easy-beezy for keened travellers with an exceptioanal app solution, so plan your trip right away. Passenger can simply browse and secure their flights, all while benefiting from secure payment technology and up-to-date flight information for complete peace of mind.</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="experiene-details">
                        <h3>Hotel Booking Application <span>Development</span></h3>
                        <p>Our well designed travel software allows users to easily schedule rooms for themselves while also providing information on the best restaurants and other attractions in their area.</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="experiene-details">
                        <h3>Transportation Application <span>Development</span></h3>
                        <p>Whether it's organizing trips on-demand, navigating in real time or offering smart transportation options, your travel app got your back with improved travel experience for both regular users and agancies looking for efficient solutions.</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="experiene-details">
                        <h3>Trip Planning Application <span>Development</span></h3>
                        <p>Using this customized all-in-one app, you can easily plan your next staycation and get up-to-date information on flights, lodgings and other adventurous activities so you can concentrate on what matters most, enjoying your trip.</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="experiene-details">
                        <h3>Travel Marketplace Application <span>Development</span></h3>
                        <p>We build comprehensive travel marketplace platforms that connect travelers with multiple service providers — from airlines and hotels to local tour operators — all within a single, unified booking experience.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-cta-btns">
                        <button type="button" class="btn-cta-modal btn-get-touch" data-bs-toggle="modal" data-bs-target="#contactModal">Get In Touch</button>
                        <a href="tel:+12137147176" class="btn-cta-modal btn-call-now">&#128222; Call Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="ecommerce-services">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="ecommerce-services-title">
                        <h2>Travel Mobile App Development  <span>Services in the USA</span></h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="ecommerce-services-box box-1">
                        <div class="services-ser-icon">
                           <img src="<?= $B ?>/assets/images/ecomerceapp/e-commerce-ios-development.svg">
                        </div>
                        <div class="ser-box-texts">
                           <h4>Custom Travel App Development</h4>
                           <p>Our US-based travel app development firm is renowned for its exceptional IT expertise in creating unique applications. Clients rely on us to transform innovative concepts into a workable framework!</p>
                           <p>As a flourishing group of travel app developers, we embrace any fresh concept that could add a little more enjoyment to roaming for everyone!</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="ecommerce-services-box box-2">
                        <div class="services-ser-icon">
                           <img src="<?= $B ?>/assets/images/ecomerceapp/e-commerce-android-development.svg">
                        </div>
                        <div class="ser-box-texts">
                           <h4>Flight Deals App Development</h4>
                           <p>US is a home to thousands of tourist destinations and hundreds of airlines. In order to create flight deal applications for frequent travelers across the country, we provide travel app development services.</p>
                           <p>Your expectations and our knowledge of well-known travel portals guide the creation of our mobile application for flights and airline bargains.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="ecommerce-services-box box-3">
                        <div class="services-ser-icon">
                           <img src="<?= $B ?>/assets/images/ecomerceapp/e-commerce-web-app-development.svg">
                        </div>
                        <div class="ser-box-texts">
                           <h4>Hotel Booking App Development</h4>
                           <p>According to recent travel survey reports, 30% of travelers postponed their vacations because they are unable to locate a best hotel in their desired location that is both pocket-friendly and incredibly convenient. With our solutions, we attempt to address this problem.</p>
                           <p>We can get you in touch with the top travel application developerfrom our resources for your portal if you're searching for a hotel booking mobile app development company.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="ecommerce-services-box box-4">
                        <div class="services-ser-icon">
                           <img src="<?= $B ?>/assets/images/ecomerceapp/app-web-ui-ux.svg">
                        </div>
                        <div class="ser-box-texts">
                           <h4>Local Tourism App Development</h4>
                           <p>Want to make it easy for tourists from all over the world to take vacations in your city? If so, we can assist in creating excellent regional attraction portals with our local tourism and travel app development services in the USA!</p>
                           <p>Our developers create excellent travel apps that allow users to discover restaurants, several other advanterous tours and much more.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="ecommerce-services-box box-5">
                        <div class="services-ser-icon">
                           <img src="<?= $B ?>/assets/images/ecomerceapp/multiple-platform-development-services.svg">
                        </div>
                        <div class="ser-box-texts">
                           <h4>Check-In Mobile App Development</h4>
                           <p>Travelers can avoid the hassle of standing in long lines for three to four hours by using a check-in gateway designed by our travel mobile app development company in the USA.</p>
                           <p>As one of the leading travel mobile app development companies, ArtisticWebServices is highly knowledgeable about the finest tools and technologies for integrating seamless check-in platforms.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="ecommerce-services-box box-6">
                        <div class="services-ser-icon">
                           <img src="<?= $B ?>/assets/images/ecomerceapp/maintainance-support.svg">
                        </div>
                        <div class="ser-box-texts">
                           <h4>Travel CRM Portal Development</h4>
                           <p>Beside the proficiency in travel CRM software solutions, we also create PC, iPhone, and Android portals for B2B travel agencies in addition to mainstreaming travel companies.</p>
                           <p>We have expertise creating CRMs that help internal teams and travel brands manage consumer relationships, automate follow-ups, track leads, and maximize conversions — all from a single, easy-to-use portal.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-cta-btns">
                        <button type="button" class="btn-cta-modal btn-get-touch" data-bs-toggle="modal" data-bs-target="#contactModal">Get In Touch</button>
                        <a href="tel:+12137147176" class="btn-cta-modal btn-call-now">&#128222; Call Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="key-features">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="key-features-title">
                        <h2>Essential Features That Make On-Demand Travel Apps Stand Out</h2>
                        <p>Intuitive features and functionalities are the most important components that make a travel application effective and capture the attention of your target audience. Our travel app developers understand this and incorporate the most powerful, distinctive features into every platform they produce.</p>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="state-tabs">
                        <ul class="nav nav-tabs" id="travelFeatTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="traveler-tab" data-bs-toggle="tab" data-bs-target="#travelerPanel" type="button" role="tab" aria-controls="travelerPanel" aria-selected="true">Traveler Panel</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="vendor-tab" data-bs-toggle="tab" data-bs-target="#vendorPanel" type="button" role="tab" aria-controls="vendorPanel" aria-selected="false">Vendor / Partner Panel</button>
                           </li>
                        </ul>
                        <div class="tab-content mt-4" id="travelFeatTabContent">
                           <div class="tab-pane fade show active" id="travelerPanel" role="tabpanel" aria-labelledby="traveler-tab">
                              <div class="row">
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Smart Booking Engine</h4>
                                       <p>One-tap booking for flights, hotels, car rentals, and tours with real-time availability checks and instant confirmation.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Real-Time GPS Tracking</h4>
                                       <p>Track rides, airport transfers, and delivery services live on an interactive map for full journey transparency.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Multi-Payment Gateway</h4>
                                       <p>Pay securely via credit/debit cards, digital wallets, net banking, UPI, or accumulated travel reward credits.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Instant Push Notifications</h4>
                                       <p>Receive real-time alerts for booking confirmations, flight delays, gate changes, exclusive deals, and trip reminders.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Itinerary Management</h4>
                                       <p>View and manage all reservations, tickets, hotel confirmations, and travel documents in one organized hub.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>AI-Powered Recommendations</h4>
                                       <p>Get personalized destination, hotel, and activity suggestions based on travel history, preferences, and trending patterns.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Loyalty & Rewards</h4>
                                       <p>Earn points on every booking and redeem rewards for free upgrades, discounts, and exclusive perks on future trips.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>In-App Chat Support</h4>
                                       <p>Connect instantly with 24/7 support agents or an AI chatbot for queries, cancellations, and travel assistance on the go.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="vendorPanel" role="tabpanel" aria-labelledby="vendor-tab">
                              <div class="row">
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Partner Dashboard</h4>
                                       <p>Access real-time bookings, revenue statistics, occupancy rates, and performance insights from a single control center.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Inventory Management</h4>
                                       <p>List and manage room availability, seat inventory, tour slots, and service offerings with real-time sync across all channels.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Dynamic Pricing</h4>
                                       <p>Set flexible pricing rules, seasonal rates, surge pricing, and promotional discounts that update automatically across the platform.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Booking Management</h4>
                                       <p>Accept, modify, or cancel reservations, manage waitlists, and communicate directly with travelers through the vendor panel.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Analytics & Reports</h4>
                                       <p>Access detailed reports on revenue, booking trends, customer demographics, and peak seasons to make data-driven decisions.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Commission Tracking</h4>
                                       <p>Monitor earnings, platform commissions, and payout history with complete financial transparency and downloadable statements.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Promotions & Coupons</h4>
                                       <p>Create and manage flash deals, seasonal discounts, and exclusive coupon campaigns to attract and retain more travelers.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Customer Feedback</h4>
                                       <p>View and respond to traveler reviews and star ratings to continuously improve service quality and build platform credibility.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-cta-btns">
                        <button type="button" class="btn-cta-modal btn-get-touch" data-bs-toggle="modal" data-bs-target="#contactModal">Get In Touch</button>
                        <a href="tel:+12137147176" class="btn-cta-modal btn-call-now">&#128222; Call Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="future-tabs">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="future__title trending-technologies-title">
                        <h2>Next-Level Travel with <span>Features Designed for You</span></h2>
                        <p>To meet the demands of uses, agents and administrators, our provided travel solutions is combined with multiple features and functionalities. All you have to do is, examine the key components of each panel to see how our solutions improve the journey for all participants.</p>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="future__tabs">
                        <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">User Panel</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Agent Panel</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Admin Panel</button>
                           </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                           <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Easy Registration</h4>
                                       <p>Process of onboarding has never been smoothen than now, users just have to sign up fast by using their social network or email addresses.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Profile Management</h4>
                                       <p>The app makes it simple for users to manage their saved payment methods, travel preferences, and personal data.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Search & Filters</h4>
                                       <p>Users can find travel service according totheir needs by using a filter function which includes date, location and price, all this has become possible with the help of search tool.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Booking Management</h4>
                                       <p>Users are now able to reserve their travel arrangements with easy access to their travel arrangements in one location.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Real-Time Notifications</h4>
                                       <p>Also, real-time notifications is also served about trip updates, special deals, cancellations and confirmations of reservations.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Secure Payments</h4>
                                       <p>Secure gateways handle different payment methods, such as bank transfer, e-wallet, and credit or debit card.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Reviews & Ratings</h4>
                                       <p>To assist other traveller to make informed travel decision, users can provide reviews based on their experience.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Wishlist</h4>
                                       <p>Users can make their trip wishlist plan ready just by adding their preffered travel locations, lodging options and adventurous activities for later.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Customer Support</h4>
                                       <p>Use the app to get 24/7 customer service for any questions or problems pertaining to travel.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Agent Dashboard</h4>
                                       <p>A detailed dashboard that shows performance indicators, client interactions, and reservations.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Client Management</h4>
                                       <p>Briefly maintain client profiles that include contact details, preferences, and travel history.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Booking Assistance</h4>
                                       <p>Through the app, agents may help customers make, change, and cancel reservations.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Commission Tracking</h4>
                                       <p>Keep an eye on and record commissions and profits from reservations and other services rendered.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Real-Time Availability</h4>
                                       <p>Verify the current availability of lodging, airlines, and other travel-related services to give customers accurate information.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Custom Packages</h4>
                                       <p>Make and provide customized travel packages according to the needs and interests of your clients.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Notifications & Alerts</h4>
                                       <p>Get real-time notifications on client request, booking statuses, and significant changes.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Secure Transactions</h4>
                                       <p>Make sure that customer payment information is safeguarded by handling all financial transactions securely.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Performance Analytics</h4>
                                       <p>To enhance service offerings and customer happiness, monitor and evaluate performance measures.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Admin Dashboard</h4>
                                       <p>Control panel for analysing the travel app's functionality, including financial statistic and user activity.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> User Management</h4>
                                       <p>Keep an eye on user profile, registrations, and activity to make that app rules are being followed.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Agent Management</h4>
                                       <p>Oversee travel agents, keep an eye on their activities, and make sure they fulfill performance requirements.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Booking Management</h4>
                                       <p>Keep track of and handle every reservation made through the app while including changes and cancellations.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Payment Processing</h4>
                                       <p>Supervise all financial transactions and make sure they are handled effectively and safely.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Promotions & Discounts</h4>
                                       <p>To draw in and keep users, develop and oversee promotional deals and discounts.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Analytics & Reporting</h4>
                                       <p>Create thorough reports on app revenue, usage, and other important indicators to help guide business choices.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Content Management</h4>
                                       <p>Update and review the content of the application which includes user-generated material, blog entries, and trip recommendations.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="future-content-box">
                                       <h4><img src="<?= $B ?>/assets/images/new-dating-error-tabs.svg"> Security Controls</h4>
                                       <p>Put security measures and keep an eye on them to safeguard user information and guarantee the app runs safely.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-cta-btns">
                        <button type="button" class="btn-cta-modal btn-get-touch" data-bs-toggle="modal" data-bs-target="#contactModal">Get In Touch</button>
                        <a href="tel:+12137147176" class="btn-cta-modal btn-call-now">&#128222; Call Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="trending-technologies">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="trending-technologies-title">
                        <h2>Trending Travel App Development Technologies</h2>
                        <p>The technological advancements such as virtual reality, augmented reality, blockchain, artificial intelligence and more, are being incorporated into travel and tour management applications to enhance the user experience. These technologies increase the convenience as well as merriment of travel by allowing users to quickly access information, customize their experiences and conduct secure payment transactions.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="future-content-box">
                        <img src="<?= $B ?>/assets/images/travel/tt-1.svg">
                        <h4>Blockchain</h4>
                        <p>Our development in travel apps with blockchain integration is done for transparent and secure transactions with decentralized data management. Our solution is trustworthy for both clients and service providers while offering reliability and efficiency.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="future-content-box">
                        <img src="<?= $B ?>/assets/images/travel/tt-2.svg">
                        <h4>Internet of Things</h4>
                        <p>We develop travel applications with the integration of the advanced technology as internet of things (IoT). It gives your journey experience a five star review just by automation, personalized recommendations and real-time data analytics. Travelers can conveniently have full access to information and services from any location by using travel app.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="future-content-box">
                        <img src="<?= $B ?>/assets/images/travel/tt-3.svg">
                        <h4>Artificial Intelligence</h4>
                        <p>These travel apps at ArtisticWebServices are created with the top technologies that users have never experience it before. To enhance booking, planning and suggestions, developers of the hub, ArtisticWebServices, have integrated artificial intelligence in the application. Also, these travel app is capable of increasing travel industry productivity and efficiency by fetching users data.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="future-content-box">
                        <img src="<?= $B ?>/assets/images/travel/tt-4.svg">
                        <h4>Cloud Computing</h4>
                        <p>Our company provides a smooth integration of cloud computing technologies with the creation of travel apps to fulfill the needs of your enterprise. Utilize cloud-based infrastructure to boost your travel app's performance immediately.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-cta-btns">
                        <button type="button" class="btn-cta-modal btn-get-touch" data-bs-toggle="modal" data-bs-target="#contactModal">Get In Touch</button>
                        <a href="tel:+12137147176" class="btn-cta-modal btn-call-now">&#128222; Call Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="hi-tech">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="trending-technologies-title">
                        <h2>The Latest in Travel App Development: High-Tech Tools & Solutions</h2>
                        <p>To give users a tates of our salt, we build and test our travel applications robustly by using the technology and tools to assure the meeting of the business demands effortlessly.</p>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="hi-tech-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> Travel app Development Tools</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Travel app Design Tools</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"> Travel app Development Languages</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="Travel-tab" data-bs-toggle="tab" data-bs-target="#Travel" type="button" role="tab" aria-controls="Travel" aria-selected="false">Travel app Testing Tools</button>
                           </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="hi-tech-imgs">
                                       <img src="<?= $B ?>/assets/images/travel/visual-studio.webp">
                                       <img src="<?= $B ?>/assets/images/travel/netbeans.webp">
                                       <img src="<?= $B ?>/assets/images/travel/android-studio.webp">
                                       <img src="<?= $B ?>/assets/images/travel/zend.webp">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="hi-tech-imgs">
                                       <img src="<?= $B ?>/assets/images/travel/adobe-ps01.jpg">
                                       <img src="<?= $B ?>/assets/images/travel/figma.webp">
                                       <img src="<?= $B ?>/assets/images/travel/adobe-xd.webp">
                                       <img src="<?= $B ?>/assets/images/travel/sketch.webp">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="hi-tech-imgs">
                                       <img src="<?= $B ?>/assets/images/travel/js.webp">
                                       <img src="<?= $B ?>/assets/images/travel/angularjs.webp">
                                       <img src="<?= $B ?>/assets/images/travel/html-5.webp">
                                       <img src="<?= $B ?>/assets/images/travel/css.webp">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="Travel" role="tabpanel" aria-labelledby="Travel-tab">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="hi-tech-imgs">
                                       <img src="<?= $B ?>/assets/images/travel/storyplayer.webp">
                                       <img src="<?= $B ?>/assets/images/travel/se.webp">
                                       <img src="<?= $B ?>/assets/images/travel/phpunit.webp">
                                       <img src="<?= $B ?>/assets/images/travel/codeception.webp">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-cta-btns">
                        <button type="button" class="btn-cta-modal btn-get-touch" data-bs-toggle="modal" data-bs-target="#contactModal">Get In Touch</button>
                        <a href="tel:+12137147176" class="btn-cta-modal btn-call-now">&#128222; Call Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="state-case">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="state-case-title">
                        <h2>Our Travel App Case Studies</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="case-slider-realstate">
                        <section class="case-studies-slider">
                           <div class="slider-wrapper">
                              <div class="slider">
                                 <!-- Slide 1 -->
                                 <div class="slide active">
                                    <div class="slide-image">
                                       <img src="<?= $B ?>/assets/images/realstate/01-slider.webp" alt="real-box-3">
                                    </div>
                                    <div class="slide-content">
                                       <h3>Instant Realtor</h3>
                                       <p>Discover a home you love and learn about the realtor's experience, all while receiving real-time updates. Developing a trusting relationship between the realtor and the customer</p>
                                       <div class="case-all-download">
                                          <div class="download-pera">
                                             <h3>Downloads</h3>
                                             <p>10K+</p>
                                          </div>
                                          <div class="download-pera">
                                             <h3>Country</h3>
                                             <p>USA</p>
                                          </div>
                                          <div class="download-pera">
                                             <h3>Rating</h3>
                                             <p>4.4/5</p>
                                          </div>
                                       </div>
                                       <div class="case_btn">
                                          <a href="<?= $B ?>/insights/instant-realtor-mobile.php">See More</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="slide">
                                    <div class="slide-image">
                                       <img src="<?= $B ?>/assets/images/realstate/02-slider.webp" alt="real-box-3">
                                    </div>
                                    <div class="slide-content">
                                       <h3>Roof Contractor</h3>
                                       <p>Give your family the security and safety that they deserve under the roof constructed with love and care.</p>
                                       <div class="case-all-download">
                                          <div class="download-pera">
                                             <h3>Downloads</h3>
                                             <p>10K+</p>
                                          </div>
                                          <div class="download-pera">
                                             <h3>Country</h3>
                                             <p>Saudi Arabia</p>
                                          </div>
                                          <div class="download-pera">
                                             <h3>Rating</h3>
                                             <p>4.4/5</p>
                                          </div>
                                       </div>
                                       <div class="case_btn">
                                          <a href="<?= $B ?>/insights/roof-contracting-mobile-application.php">See More</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="slide">
                                    <div class="slide-image">
                                       <img src="<?= $B ?>/assets/images/realstate/03-slider.webp" alt="real-box-3">
                                    </div>
                                    <div class="slide-content">
                                       <h3>Rubberworx</h3>
                                       <p>The Rubberworx Mobile App is a groundbreaking solution that blends the magic of augmented truth and synthetic intelligence to redefine the way you discover rubber flooring alternatives.</p>
                                       <div class="case-all-download">
                                          <div class="download-pera">
                                             <h3>Downloads</h3>
                                             <p>9.1K+</p>
                                          </div>
                                          <div class="download-pera">
                                             <h3>Country</h3>
                                             <p>New York</p>
                                          </div>
                                          <div class="download-pera">
                                             <h3>Rating</h3>
                                             <p>4.4/5</p>
                                          </div>
                                       </div>
                                       <div class="case_btn">
                                          <a href="<?= $B ?>/insights/rubberworx.php">See More</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="slide">
                                    <div class="slide-image">
                                       <img src="<?= $B ?>/assets/images/realstate/04-slider.webp" alt="real-box-3">
                                    </div>
                                    <div class="slide-content">
                                       <h3>Property & Apartment Swaps</h3>
                                       <p>Property Exchange App developed by us has the most unique Property Exchange concept all over India. Users of this real estate solution only need to enter their real estate, whether residential, commercial, or land, in the exchange app.</p>
                                       <div class="case-all-download">
                                          <div class="download-pera">
                                             <h3>Downloads</h3>
                                             <p>10K+</p>
                                          </div>
                                          <div class="download-pera">
                                             <h3>Country</h3>
                                             <p>USA</p>
                                          </div>
                                          <div class="download-pera">
                                             <h3>Rating</h3>
                                             <p>4.4/5</p>
                                          </div>
                                       </div>
                                       <div class="case_btn">
                                          <a href="<?= $B ?>/insights/property-exchange-real-estate-app.php">See More</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="slide">
                                    <div class="slide-image">
                                       <img src="<?= $B ?>/assets/images/realstate/02-slider.webp" alt="real-box-3">
                                    </div>
                                    <div class="slide-content">
                                       <h3>Roof Contractor</h3>
                                       <p>Give your family the security and safety that they deserve under the roof constructed with love and care.</p>
                                       <div class="case-all-download">
                                          <div class="download-pera">
                                             <h3>Downloads</h3>
                                             <p>10K+</p>
                                          </div>
                                          <div class="download-pera">
                                             <h3>Country</h3>
                                             <p>Saudi Arabia</p>
                                          </div>
                                          <div class="download-pera">
                                             <h3>Rating</h3>
                                             <p>4.4/5</p>
                                          </div>
                                       </div>
                                       <div class="case_btn">
                                          <a href="<?= $B ?>/insights/roof-contracting-mobile-application.php">See More</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="slide">
                                    <div class="slide-image">
                                       <img src="<?= $B ?>/assets/images/realstate/03-slider.webp" alt="real-box-3">
                                    </div>
                                    <div class="slide-content">
                                       <h3>Rubberworx</h3>
                                       <p>The Rubberworx Mobile App is a groundbreaking solution that blends the magic of augmented truth and synthetic intelligence to redefine the way you discover rubber flooring alternatives.</p>
                                       <div class="case-all-download">
                                          <div class="download-pera">
                                             <h3>Downloads</h3>
                                             <p>9.1K+</p>
                                          </div>
                                          <div class="download-pera">
                                             <h3>Country</h3>
                                             <p>New York</p>
                                          </div>
                                          <div class="download-pera">
                                             <h3>Rating</h3>
                                             <p>4.4/5</p>
                                          </div>
                                       </div>
                                       <div class="case_btn">
                                          <a href="<?= $B ?>/insights/rubberworx.php">See More</a>
                                       </div>
                                    </div>
                                 </div>
                                 <!--<div class="slide">-->
                                 <!--  <div class="slide-image">-->
                                 <!--     <img src="<?= $B ?>/assets/images/realstate/makani_img.webp" alt="real-box-3">-->
                                 <!--  </div>-->
                                 <!--         <div class="slide-content">-->
                                 <!--    <h3>Ejare</h3>-->
                                 <!--    <p>The app specializes in documenting unified lease contracts in the Kingdom of Saudi Arabia. The app is based on the "rental" platform of the "sakani" program between the owner and the tenant.</p>-->
                                 <!--    <div class="case-all-download">-->
                                 <!--        <div class="download-pera">-->
                                 <!--            <h3>Downloads</h3>-->
                                 <!--            <p>10K+</p>-->
                                 <!--        </div>-->
                                 <!--        <div class="download-pera">-->
                                 <!--            <h3>Country</h3>-->
                                 <!--            <p>Saudi Arabia</p>-->
                                 <!--        </div>-->
                                 <!--        <div class="download-pera">-->
                                 <!--            <h3>Rating</h3>-->
                                 <!--            <p>4.4/5</p>-->
                                 <!--        </div>-->
                                 <!--    </div>-->
                                 <!--    <div class="case_btn">-->
                                 <!--      <a href="#">See More</a>-->
                                 <!--   </div>-->
                                 <!--  </div>-->
                                 <!--</div>-->
                                 <!--<div class="slide">-->
                                 <!--  <div class="slide-image">-->
                                 <!--   <img src="<?= $B ?>/assets/images/realstate/rental_disputer.webp" alt="real-box-3">-->
                                 <!--  </div>-->
                                 <!--         <div class="slide-content">-->
                                 <!--    <h3>Ejare</h3>-->
                                 <!--    <p>The app specializes in documenting unified lease contracts in the Kingdom of Saudi Arabia. The app is based on the "rental" platform of the "sakani" program between the owner and the tenant.</p>-->
                                 <!--    <div class="case-all-download">-->
                                 <!--        <div class="download-pera">-->
                                 <!--            <h3>Downloads</h3>-->
                                 <!--            <p>10K+</p>-->
                                 <!--        </div>-->
                                 <!--        <div class="download-pera">-->
                                 <!--            <h3>Country</h3>-->
                                 <!--            <p>Saudi Arabia</p>-->
                                 <!--        </div>-->
                                 <!--        <div class="download-pera">-->
                                 <!--            <h3>Rating</h3>-->
                                 <!--            <p>4.4/5</p>-->
                                 <!--        </div>-->
                                 <!--    </div>-->
                                 <!--    <div class="case_btn">-->
                                 <!--      <a href="#">See More</a>-->
                                 <!--   </div>-->
                                 <!--  </div>-->
                                 <!--</div>-->
                              </div>
                              <!-- Navigation controls -->
                              <button class="prev-btn"></button>
                              <button class="next-btn"></button>
                              <!-- Icons under the slider -->
                              <div class="slider-icons">
                                 <span class="icon active" data-slide="0">
                                 <img src="<?= $B ?>/assets/images/realstate/Instant-Realtor-logo.webp" alt="real-box-3">
                                 </span>
                                 <span class="icon" data-slide="1">
                                 <img src="<?= $B ?>/assets/images/realstate/Horizon%20Roofing-logo.webp" alt="real-box-3">
                                 </span>
                                 <span class="icon" data-slide="2">
                                 <img src="<?= $B ?>/assets/images/realstate/Rubberwork-logo.webp" alt="real-box-3">
                                 </span>
                                 <span class="icon" data-slide="3">
                                 <img src="<?= $B ?>/assets/images/realstate/HouseSigma.webp" alt="real-box-3">
                                 </span>
                                 <!--<span class="icon" data-slide="1">-->
                                 <!--    <img src="<?= $B ?>/assets/images/realstate/Horizon Roofing-logo.webp" alt="real-box-3">-->
                                 <!--</span>-->
                                 <!--<span class="icon" data-slide="2">-->
                                 <!--    <img src="<?= $B ?>/assets/images/realstate/Rubberwork-logo.webp" alt="real-box-3">-->
                                 <!--</span>-->
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-cta-btns">
                        <button type="button" class="btn-cta-modal btn-get-touch" data-bs-toggle="modal" data-bs-target="#contactModal">Get In Touch</button>
                        <a href="tel:+12137147176" class="btn-cta-modal btn-call-now">&#128222; Call Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="trending-technologies whychose-tranding">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="trending-technologies-title">
                        <h2>Why is ArtisticWebServices Your Trusted Partner for Travel Software Development?</h2>
                        <p>Choosing a professional mobile app development company like ArtisticWebServices for travel app development involves a commitment to quality and serve in the shape of app solution that is personalized and reliable to your requirements and is helpful for your travel business in many ways;</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="future-content-box">
                        <h4>Expertise in Travel Design</h4>
                        <p>At ArtisticWebServices, we take actions by coming all the developers together who have a thorough understanding of the travel industry domains and help in providing excellent solution that hold fast on to rules and guidelines.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="future-content-box">
                        <h4>Ensure Security and Compliance</h4>
                        <p>We take care of the security, because users data and information is our priority at ArtisticWebServices, and to hold on to travel laws and guidelines our developers ensure to put safeguards in place to protect user data and their confidence in the company.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="future-content-box">
                        <h4>End-to-End Services</h4>
                        <p>End-to-ends service of the travel app devleopment is provided that includes design, development, and post-launch maintainance and support. Cut to short, we are your one-stop shop for all of your digital solution requirements for your travel business success.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="future-content-box">
                        <h4>Flexible Engagement Models</h4>
                        <p>To maintain long-term relationship with our clients we offer freedom to select engagement models and alternate between them in response to their evolving demands, rather than operating under unwelcome, strict and rigid limitations.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="future-content-box">
                        <h4>On-Time Delivery</h4>
                        <p>We manage the project and provide the solution inside the pre-determined timeframe while guaranteeing its excellent quality by adhering to agile best practices and project planning with intelligent productivity tools.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="future-content-box">
                        <h4>Transparency</h4>
                        <p>By regularly providing all updates and taking your suggestions into consideration to make the project better, we uphold total transparency. Our customers own every single line of code and creative.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-cta-btns">
                        <button type="button" class="btn-cta-modal btn-get-touch" data-bs-toggle="modal" data-bs-target="#contactModal">Get In Touch</button>
                        <a href="tel:+12137147176" class="btn-cta-modal btn-call-now">&#128222; Call Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="our-process">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="trending-technologies-title">
                        <h2>Our Proven Process for Crafting Authentic Travel Apps</h2>
                        <p>ArtisticWebServices develop distinctive websites and mobile travel apps that highlight the real spirit of your company. Our travel app is developed using a rigorous methodology that guarantees we will satisfy your need throughout the entire process. You can come to us to let us help you accomplish your company objectives and improve your market presence when you work with us.</p>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="process-main">
                        <div class="process-box">
                           <img src="<?= $B ?>/assets/images/travel/process-1.svg">
                           <span>01</span>
                           <h4>Project Analysis</h4>
                           <p>Analyze the scope of the project accurately and make a plan.</p>
                        </div>
                        <div class="process-box">
                           <img src="<?= $B ?>/assets/images/travel/process-2.svg">
                           <span>02</span>
                           <h4>UX/UI Designing</h4>
                           <p>Provide distinctive and intuitive designs for each app.</p>
                        </div>
                        <div class="process-box">
                           <img src="<?= $B ?>/assets/images/travel/process-3.svg">
                           <span>03</span>
                           <h4>Development</h4>
                           <p>Use documentation to begin the actual development process.</p>
                        </div>
                        <div class="process-box">
                           <img src="<?= $B ?>/assets/images/travel/process-4.svg">
                           <span>04</span>
                           <h4>In-depth Testing</h4>
                           <p>Before launching, do extensive testing to get rid of any issues.</p>
                        </div>
                        <div class="process-box">
                           <img src="<?= $B ?>/assets/images/travel/process-5.svg">
                           <span>05</span>
                           <h4>Project Launch</h4>
                           <p>Open the program on the preferred operating system (iOS or Android).</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-cta-btns">
                        <button type="button" class="btn-cta-modal btn-get-touch" data-bs-toggle="modal" data-bs-target="#contactModal">Get In Touch</button>
                        <a href="tel:+12137147176" class="btn-cta-modal btn-call-now">&#128222; Call Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
               <section class="welcome-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome-three__left">
                           <div class="get__content">
                               <h4>Collaborate with   </h4>
                               <h2>
                                   Our Team
                               </h2>
                               <p>Want to find out how travel app development can transform your business? We'd love to hear about your project and help you get started.</p>
                               <strong>
                                   Foster Innovation with Integration
                               </strong>
                               <p>Team Up With Our Expert Travel App Developers to Launch, Scale, and Grow Your Travel Business Globally.</p>
                               <h3>Contact Info:</h3>
                               <ul>
                                   <li><a href="https://artisticwebservices.com/mailto:info@artisticwebservices.com"> <img src="<?= $B ?>/assets/images/fitness/email.svg" > info@artisticwebservices.com</a></li>
                                   <li> <a href="tel:+12137147176" class="nav-number nav-number-1"><img src="<?= $B ?>/assets/images/fitness/USA-Flag.svg" > (213) 714-7176</a></li>
                               </ul>
                               
                              
                           </div>
                        </div>
                    </div>
                     <div class="col-xl-6">
                        <div class="welcome-three__right welcome-three__right-zero">
                            <div class="row">
                                <?php include __DIR__ . '/../includes/form-quote.php'; ?><script>
         var $st = $('.pagination');
         var $slickEl = $('.center');
         
         // Update pagination on slider change
         $slickEl.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
         var i = (currentSlide ? currentSlide : 0) + 1;
         $st.text(i + ' of ' + slick.slideCount);
         });
         
         // Initialize slick slider
         $slickEl.slick({
         centerMode: true,
         centerPadding: '100px',
         slidesToShow: 1,
         focusOnSelect: true,
         dots: false,
         infinite: true,
         responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
         ]
         });
         
         // Next and Previous buttons functionality
         $('.next').click(function() {
         $slickEl.slick('slickNext');
         });
         
         $('.prev').click(function() {
         $slickEl.slick('slickPrev');
         });
         
      </script>

<script>
  $(document).ready(function () {
    $('#name-validF').delay(5000).fadeOut('slow');
    $('#name-valid2L').delay(5000).fadeOut('slow');
    $('#email-validE').delay(5000).fadeOut('slow');
    $('#phone-validP').delay(5000).fadeOut('slow');

    $('#submit_btn').on('click', function (e) {

      e.preventDefault(false);

      let first_name = $('#first_name').val();
      let last_name = $('#last_name').val();
      let email = $('#email').val();
      let phone = $('#phone').val();
      let captcha = $('#captcha').val();
      let captcha_answer = $('#captcha_answer').val();

      function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        if (re.test(email)) {
          return true
        }
      }

      function validatePhoneNumber(phone) {
        var re = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
        if (re.test(phone)) {
          return true;
        }
      }

      if (first_name.trim() == "") {
        $('#name-valid').text("Please enter your first name");
        // alert('Please enter your name');
        return false;
      }
      else {
        $('#name-valid').text("");

      }

      if (last_name.trim() == "") {
        $('#name-valid2').text("Please enter your last name");
        // alert('Please enter your name');
        return false;
      }
      else {
        $('#name-valid2').text("");

      }

      if (email.trim() == "") {
        // alert('Please enter your email');
        $('#email-valid').text("Please enter your email");
        return false;
      }
      else {
        $('#email-valid').text("");
      }

      if (validateEmail(email) !== true) {
        // alert('Please enter your email');
        $('#email-valid').text("Please enter your valid email");
        return false;
      }
      else {
        $('#email-valid').text("");

      }

      if (phone.trim() == "") {
        // alert('Please enter your phone');
        $('#phone-valid').text("Please enter your phone");
        return false;
      }

      else if (validatePhoneNumber(phone) !== true) {
        $('#phone-valid').text("Invalid phone number: (012)-345-6789");
        return false;
      }
      else {
        $('#phone-valid').text("");
      }

      if (captcha.trim() == "") {
        $('#captcha-valid').text("Please validate your captcha");
        return false;
      } else if (captcha != null) {
        if (captcha != captcha_answer) {
          $('#captcha-valid').text("Invalid captcha");
          return false;
        } else {
          $('#captcha-valid').text("");
        }
      } else {
        $('#captcha-valid').text("");
      }

      $("#contact")[0].submit();
      return false;
    });
  });

  $('#phone').on("keypress", function (e) {

    var regex = new RegExp("^[a-zA-Z]+$");
    var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(key)) {
      e.preventDefault();
      return false;
    }

    if (e.keyCode == 8)
      return;
    let val = $(this).val()
    if (val.length == 3) {
      $('#phone').val("(" + $('#phone').val() + ")-")
    }
    if (val.length == 9) {
      $('#phone').val($('#phone').val() + "-")
    }
  });

</script>
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
         <div class="faqs-section py-5">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="latest-technology-title">
                        <h2 style="color: #ec1c22">Frequently Asked Questions</h2>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 mt-4">
                     <div class="accordion" id="accordionExample">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <div class="row w-100">
                                 <div class="col-1">01</div>
                                 <div class="col-11">What features should I include in my travel mobile app?
                                 </div>
                              </div>
                           </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="row">
                                 <div class="col-1"></div>
                                 <div class="col-10">
                                    Essential features include flight and hotel search &amp; booking, real-time notifications, secure payment gateways, itinerary management, GPS &amp; map integration, multi-currency support, offline access, user reviews &amp; ratings, and a 24/7 customer support chat.
                                 </div>
                                 <div class="col-1"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                              <div class="row w-100">
                                 <div class="col-1">02</div>
                                 <div class="col-11">How long does it take to develop a travel mobile app?
                                 </div>
                              </div>
                           </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="row">
                                 <div class="col-1"></div>
                                 <div class="col-10">
                                    The timeline depends on the app's complexity and feature set. A basic travel app typically takes 3–4 months, while a feature-rich platform with booking integrations, AI recommendations, and multi-panel support can take 6–9 months or more.
                                 </div>
                                 <div class="col-1"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                              <div class="row w-100">
                                 <div class="col-1">03</div>
                                 <div class="col-11">What platforms should I target for my travel app?
                                 </div>
                              </div>
                           </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="row">
                                 <div class="col-1"></div>
                                 <div class="col-10">
                                    We recommend targeting both iOS and Android to maximize your reach. Cross-platform frameworks like Flutter or React Native allow you to launch on both platforms simultaneously while keeping development costs efficient.
                                 </div>
                                 <div class="col-1"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                              <div class="row w-100">
                                 <div class="col-1">04</div>
                                 <div class="col-11">How much does it cost to develop a travel mobile app?
                                 </div>
                              </div>
                           </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="row">
                                 <div class="col-1"></div>
                                 <div class="col-10">
                                    The cost varies based on app complexity, platform, design requirements, and the technologies involved. A standard travel app can range from $25,000 to $80,000, while an enterprise-grade platform with advanced integrations may exceed $150,000. Contact us for a free custom quote.
                                 </div>
                                 <div class="col-1"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                              <div class="row w-100">
                                 <div class="col-1">05</div>
                                 <div class="col-11">Can I integrate third-party APIs into my travel app?
                                 </div>
                              </div>
                           </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="row">
                                 <div class="col-1"></div>
                                 <div class="col-10">
                                    Absolutely. We integrate leading travel APIs such as Amadeus, Sabre, Skyscanner, Google Maps, Stripe, PayPal, and many others to power flight searches, hotel listings, payment processing, and real-time travel data in your application.
                                 </div>
                                 <div class="col-1"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                              <div class="row w-100">
                                 <div class="col-1">06</div>
                                 <div class="col-11">How do I ensure my travel app is user-friendly?
                                 </div>
                              </div>
                           </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="row">
                                 <div class="col-1"></div>
                                 <div class="col-10">
                                    Our UX/UI team conducts in-depth research, wireframing, and usability testing before development begins. We focus on intuitive navigation, fast load times, accessible design, and seamless booking flows so travelers can plan and book with minimal effort.
                                 </div>
                                 <div class="col-1"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                              <div class="row w-100">
                                 <div class="col-1">07</div>
                                 <div class="col-11">What kind of post-launch support do you offer for travel apps?
                                 </div>
                              </div>
                           </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="row">
                                 <div class="col-1"></div>
                                 <div class="col-10">
                                    We provide comprehensive post-launch maintenance including regular updates, bug fixes, performance monitoring, security patches, and feature enhancements. Our dedicated support team ensures your travel app stays reliable, secure, and up to date with industry standards.
                                 </div>
                                 <div class="col-1"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-12">
                     <div class="section-cta-btns">
                        <button type="button" class="btn-cta-modal btn-get-touch" data-bs-toggle="modal" data-bs-target="#contactModal">Get In Touch</button>
                        <a href="tel:+12137147176" class="btn-cta-modal btn-call-now">&#128222; Call Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <script>
            // Get the tabs and content elements
                const tabs = document.querySelectorAll('.tab');
                const tabContents = document.querySelectorAll('.tab-content');
                const accordionItems = document.querySelectorAll('.accordion-item');
                
                // Set up hover event listeners for each tab
                tabs.forEach(tab => {
                    tab.addEventListener('mouseover', function() {
                        // Remove the 'active' class from all tabs
                        tabs.forEach(t => t.classList.remove('active'));
                
                        // Hide all tab content
                        tabContents.forEach(content => content.classList.remove('active'));
                
                        // Add the 'active' class to the hovered tab
                        tab.classList.add('active');
                
                        // Show the relevant tab content
                        const targetTab = tab.getAttribute('data-tab');
                        document.getElementById(`${targetTab}-content`).classList.add('active');
                    });
                });
                
                // Add event listener for accordion item hover to toggle content
                accordionItems.forEach(item => {
                    item.addEventListener('mouseover', function() {
                        // Remove active class and hide content from all accordion items
                        accordionItems.forEach(acc => acc.classList.remove('active'));
                
                        // Add the 'active' class and show content for the hovered accordion item
                        item.classList.add('active');
                    });
                });
            
            
         </script>

<!-- ===== CTA MODAL STYLES ===== -->
<style>
.btn-cta-modal {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 13px 30px;
    border-radius: 50px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid transparent;
    line-height: 1.4;
}
.btn-get-touch {
    background: #ec1c22;
    color: #fff !important;
    border-color: #ec1c22;
}
.btn-get-touch:hover {
    background: #c41118;
    border-color: #c41118;
    color: #fff !important;
}
.btn-call-now {
    background: transparent;
    color: #ec1c22 !important;
    border-color: #ec1c22;
    margin-left: 14px;
}
.btn-call-now:hover {
    background: #ec1c22;
    color: #fff !important;
}
.section-cta-btns {
    padding: 36px 0 10px;
    text-align: center;
}
.hero-cta-btns {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
}
/* Modal */
#contactModal .modal-header {
    background: linear-gradient(135deg, #ec1c22 0%, #a50d11 100%);
    padding: 22px 28px;
    border-bottom: none;
}
#contactModal .modal-title {
    color: #fff;
    font-size: 21px;
    font-weight: 700;
    margin-bottom: 3px;
}
#contactModal .modal-subtitle {
    color: rgba(255,255,255,0.82);
    font-size: 13px;
    margin: 0;
}
#contactModal .btn-close {
    filter: brightness(0) invert(1);
    opacity: 0.9;
}
#contactModal .modal-body {
    padding: 28px 30px;
}
#contactModal .modal-contact-bar {
    background: #f7f8fa;
    border-radius: 8px;
    padding: 16px 20px;
    margin-bottom: 22px;
    display: flex;
    gap: 24px;
    flex-wrap: wrap;
}
#contactModal .modal-contact-bar a {
    color: #333;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: color 0.2s;
}
#contactModal .modal-contact-bar a:hover { color: #ec1c22; }
#contactModal .modal-contact-bar span.cbar-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 30px;
    height: 30px;
    background: #ec1c22;
    border-radius: 50%;
    color: #fff;
    font-size: 13px;
}
#contactModal .mf-label {
    font-size: 12px;
    color: #777;
    margin-bottom: 4px;
    font-weight: 500;
    display: block;
}
#contactModal .mf-input {
    width: 100%;
    border: 1.5px solid #e2e2e2;
    border-radius: 7px;
    padding: 11px 14px;
    font-size: 14px;
    color: #333;
    outline: none;
    transition: border-color 0.2s;
    background: #fff;
    margin-bottom: 2px;
}
#contactModal .mf-input:focus {
    border-color: #ec1c22;
    box-shadow: 0 0 0 3px rgba(236,28,34,0.1);
}
#contactModal textarea.mf-input { resize: vertical; min-height: 80px; }
.mf-error {
    color: #ec1c22;
    font-size: 11.5px;
    margin-top: 2px;
    display: block;
    min-height: 14px;
}
#contactModal .mf-submit {
    width: 100%;
    padding: 14px;
    background: #ec1c22;
    color: #fff;
    border: none;
    border-radius: 50px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    margin-top: 6px;
    transition: background 0.3s;
    letter-spacing: 0.3px;
}
#contactModal .mf-submit:hover { background: #c41118; }
#contactModal .mf-privacy {
    text-align: center;
    font-size: 12px;
    color: #999;
    margin-top: 10px;
}
</style>

<!-- ===== GET IN TOUCH MODAL ===== -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" style="border:none; border-radius:12px; overflow:hidden;">
      <div class="modal-header">
        <div>
          <h5 class="modal-title" id="contactModalLabel">Get In Touch With Our Travel App Experts</h5>
          <p class="modal-subtitle">We respond within 24 hours &mdash; no obligations, just great ideas.</p>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="modal-contact-bar">
          <a href="mailto:info@artisticwebservices.com">
            <span class="cbar-icon">&#9993;</span>
            info@artisticwebservices.com
          </a>
          <a href="tel:+12137147176">
            <span class="cbar-icon">&#128222;</span>
            (213) 714-7176
          </a>
        </div>
        <form id="modal-contact-form" action="https://artisticwebservices.com/contact-form.php" method="get">
          <input type="hidden" name="host" value="ArtisticWebServices">
          <div class="row g-3">
            <div class="col-sm-6">
              <label class="mf-label">First Name <span style="color:#ec1c22">*</span></label>
              <input type="text" class="mf-input" id="mcf_first_name" name="first_name" placeholder="Your First Name" autocomplete="off">
              <small class="mf-error" id="mcf-err-fname"></small>
            </div>
            <div class="col-sm-6">
              <label class="mf-label">Last Name <span style="color:#ec1c22">*</span></label>
              <input type="text" class="mf-input" id="mcf_last_name" name="last_name" placeholder="Your Last Name" autocomplete="off">
              <small class="mf-error" id="mcf-err-lname"></small>
            </div>
            <div class="col-sm-6">
              <label class="mf-label">Email Address <span style="color:#ec1c22">*</span></label>
              <input type="email" class="mf-input" id="mcf_email" name="email" placeholder="your@email.com" autocomplete="off">
              <small class="mf-error" id="mcf-err-email"></small>
            </div>
            <div class="col-sm-6">
              <label class="mf-label">Phone Number <span style="color:#ec1c22">*</span></label>
              <input type="tel" class="mf-input" id="mcf_phone" name="phone" placeholder="(000)-000-0000" maxlength="14" autocomplete="off">
              <small class="mf-error" id="mcf-err-phone"></small>
            </div>
            <div class="col-12">
              <label class="mf-label">Project Details</label>
              <textarea class="mf-input" name="description" rows="3" placeholder="Tell us about your travel app idea or project requirements..."></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="mf-submit" id="mcf-submit-btn">Send My Message &rarr;</button>
              <p class="mf-privacy">&#128274; Your information is 100% confidential. We never share your data.</p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
(function () {
  var form   = document.getElementById('modal-contact-form');
  var btn    = document.getElementById('mcf-submit-btn');
  var phoneEl = document.getElementById('mcf_phone');

  btn.addEventListener('click', function (e) {
    e.preventDefault();
    var fn    = document.getElementById('mcf_first_name').value.trim();
    var ln    = document.getElementById('mcf_last_name').value.trim();
    var em    = document.getElementById('mcf_email').value.trim();
    var ph    = document.getElementById('mcf_phone').value.trim();
    var emailRe = /\S+@\S+\.\S+/;
    var phoneRe = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
    var ok = true;

    document.getElementById('mcf-err-fname').textContent  = fn  ? '' : 'Please enter your first name';
    document.getElementById('mcf-err-lname').textContent  = ln  ? '' : 'Please enter your last name';

    if (!fn) ok = false;
    if (!ln) ok = false;

    if (!em) {
      document.getElementById('mcf-err-email').textContent = 'Please enter your email';
      ok = false;
    } else if (!emailRe.test(em)) {
      document.getElementById('mcf-err-email').textContent = 'Please enter a valid email address';
      ok = false;
    } else {
      document.getElementById('mcf-err-email').textContent = '';
    }

    if (!ph) {
      document.getElementById('mcf-err-phone').textContent = 'Please enter your phone number';
      ok = false;
    } else if (!phoneRe.test(ph)) {
      document.getElementById('mcf-err-phone').textContent = 'Format: (012)-345-6789';
      ok = false;
    } else {
      document.getElementById('mcf-err-phone').textContent = '';
    }

    if (ok) form.submit();
  });

  if (phoneEl) {
    phoneEl.addEventListener('keypress', function (e) {
      var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
      if (/^[a-zA-Z]+$/.test(key)) { e.preventDefault(); return false; }
      if (e.keyCode === 8) return;
      var v = this.value;
      if (v.length === 3) this.value = '(' + v + ')-';
      if (v.length === 9) this.value = v + '-';
    });
  }
})();
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>
