<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'Mobile App Development Company in Bahrain | ArtisticWebServices';
$page_description = 'ArtisticWebServices is a top mobile app development company in Bahrain. We build scalable iOS, Android, and cross-platform apps tailored to Bahrain business goals.';
$page_keywords = 'mobile app development company Bahrain, app development Bahrain, iOS Android app Bahrain, software development Manama, tech company Bahrain, cross-platform app Bahrain';
$page_canonical = 'https://artisticwebservices.com/insights/mobile-app-development-in-bahrain';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
$page_breadcrumbs = [['name' => 'Insights', 'url' => 'https://artisticwebservices.com/insights/digital-insights.php'], ['name' => 'App Development Bahrain', 'url' => 'https://artisticwebservices.com/insights/mobile-app-development-in-bahrain.php']];
$page_article_schema = ['type' => 'WebPage', 'date' => '2024-04-01'];
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<div class="location-hero mob-app" style="background-image: url('<?= $B ?>/assets/images/bahrain/bahrain-01.webp'); background-size: cover; background-position: center;">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-12">
                     <div class="link_tags">
                        <ul>
                           <li><a href="index.php">Home <i class="fa-solid fa-arrow-right"></i></a></li>
                           <li><a href="<?= $B ?>/solutions/location.php">Location <i class="fa-solid fa-arrow-right"></i></a></li>
                           <li><a href="<?= $B ?>/insights/mobile-app-development-in-bahrain.php">Mobile App Development Company Bahrain <i class="fa-solid fa-arrow-right"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <div class="fintness__contents">
                        <h1>Build Your Winning App with <span> #1 Ranked Mobile App Development</span> Company in Bahrain</h1>
                        <p class="my-3">ArtisticWebServices is the leading mobile app development company in Bahrain, delivering next-gen mobile app solutions tailored for Bahrain-based clients. We have empowered 300+ clients in Bahrain by transforming their ideas into custom-built mobile apps and expertly guiding them in architecting and scaling their digital solutions.</p>
                        <a href="<?= $B ?>/contact.php" class="btn btn-light rounded-2 color-primary mt-3">Discover More</a>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <div class="location-form">
                        <h2 class="text-center mb-3">Get in Touch</h2>
                        <form id="contact" action="https://artisticwebservices.com/contact-form.php" method="get" novalidate="novalidate">
                           <input type="hidden" name="host" value="ArtisticWebServices">
                           <input type="text" class="form-control mb-3" placeholder="First Name" name="first_name"
                              id="first_name">
                                                      <input type="text" class="form-control mb-3" placeholder="Last Name" name="last_name"
                              id="last_name">
                           <small id="name-valid1"></small>
                                                      <input type="email" class="form-control mb-3" placeholder="Email Address *" name="email" id="email" required autocomplete="email">
                           <small id="name-valid1-v2"></small>
                                                      <input type="tel" class="form-control mb-3" placeholder="Phone Number *" name="phone" id="phone"
                              maxlength="14" autocomplete="tel">
                           <small id="phone-valid"></small>
                                                      <textarea class="form-control" placeholder="Write Message" rows="4" name="description"></textarea>
                           <p id="frm-result" class="text-danger" style="margin: 8px 0 0 8px;"></p>
                           <button type="submit" id="submit_btn" class="btn">Get a free quote</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <section class="heading__section mt-4">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="eco_title">
                        <h5>Trusted by the Top Brands</h5>
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
         <section class="premium">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="premium-content">
                        <h2>Our Full-Spectrum  <span style="color: #d31923;">Mobile App Development</span> Services in Bahrain That Generates Revenue</h2>
                        <p>We have the best mobile app developers in Bahrain. Our top-level app development services leverage the latest tech stacks to deliver future-ready mobile apps. With a high focus on scalability, user experience, and seamless performance, our team delivers apps that stand out and help your business succeed in the long run.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container py-5">
               <div class="row g-4">
                  <!-- Card 1 -->
                  <div class="col-md-4">
                     <div class="service-card" style="background-image: url('<?= $B ?>/assets/images/dubai/service-01.webp');">
                        <div class="card-content">
                           <h5>
                              <svg xmlns="http://www.w3.org/2000/svg" width="47" height="56" fill="none" viewBox="0 0 47 56">
                                 <g clip-path="url(#cpmobileappdevel1)">
                                    <path fill="#9FC32C" d="M38.34 17.948q-10.195.024-20.392.042c-2.951 0-5.903-.025-8.855-.042l-.257-.224.042-.943c.03-.02.087-.05.084-.06a1 1 0 0 0-.07-.166c.447-4.461 2.79-7.723 6.46-10.054.88-.559.986-.917.44-1.744-.617-.943-1.104-1.975-1.638-2.972-.152-.28-.316-.603.077-.804.35-.177.583.057.747.354.602 1.096 1.238 2.175 1.793 3.3.3.605.6.768 1.264.513a15.4 15.4 0 0 1 11.383 0c.674.26.96.068 1.255-.525.538-1.085 1.17-2.122 1.741-3.187.178-.325.386-.67.8-.448.455.236.183.604.022.903-.555 1.032-1.068 2.093-1.7 3.076-.444.688-.346.987.358 1.414 3.554 2.14 5.787 5.258 6.606 9.368q.054.406.05.816c-.029.02-.083.054-.078.063a1 1 0 0 0 .089.158q.02.47.037.943zm-8.936-6.804c.037.827.468 1.327 1.227 1.327a1.18 1.18 0 0 0 .91-.362 1.2 1.2 0 0 0 .33-.927 1.14 1.14 0 0 0-.708-1.129 1.1 1.1 0 0 0-.462-.08c-.81-.022-1.218.421-1.304 1.17zM16.85 9.965c-.815.04-1.292.472-1.285 1.247a1.19 1.19 0 0 0 .345.92 1.17 1.17 0 0 0 .918.336 1.14 1.14 0 0 0 .855-.34 1.16 1.16 0 0 0 .332-.862c.014-.8-.405-1.23-1.172-1.303z">
                                    </path>
                                    <path fill="#9DC11F" d="M8.882 16.566a1 1 0 0 1 .07.165c0 .012-.054.04-.084.062a.3.3 0 0 1 .014-.227M38.55 16.788a1 1 0 0 1-.09-.158l.078-.064a.27.27 0 0 1 .012.222M8.828 17.73l.258.224c-.155.012-.265-.044-.258-.224M38.344 17.948l.252-.221c.008.186-.105.238-.252.221">
                                    </path>
                                    <path fill="#9FC32C" d="M46.708 22.415c.038-.47-.035-.941-.213-1.377l-.204-.471-.194-.333c-.815-1.6-2.294-1.72-3.731-1.43-1.344.27-2.163 1.294-2.367 2.72a.27.27 0 0 0 0 .216v14.613a.27.27 0 0 0 0 .217c.527 2.307 2.182 3.3 4.43 2.656a.52.52 0 0 0 .486-.236.53.53 0 0 0 .445-.283c.335-.189.599-.485.749-.841l.187-.34.204-.47c.176-.437.25-.908.213-1.377q-.008-6.635-.005-13.265M38.637 41.186q-.016-10.777-.042-21.558c0-.082-.016-.165-.023-.235-.253-.377-.64-.205-.962-.205q-13.897-.016-27.796 0c-.321 0-.703-.172-.963.205l-.02.235q-.015 10.896-.026 21.792.017.173.068.341a.26.26 0 0 0 .023.224c.571 1.751 1.638 2.593 3.387 2.692q.643.052 1.285 0c.883-.104 1.236.167 1.194 1.145-.08 1.959-.033 3.922-.021 5.892.014 2.267 1.404 3.863 3.354 3.889s3.373-1.58 3.387-3.844c0-2.041.028-4.082-.014-6.128-.014-.707.157-1.004.906-.943.857.066 1.718.066 2.575 0 .859-.07 1.034.293 1.016 1.08-.05 1.999-.024 4.007-.014 6 .014 2.272 1.423 3.858 3.389 3.84 1.966-.02 3.335-1.622 3.35-3.884.014-1.886.081-3.771-.024-5.657-.066-1.178.325-1.558 1.43-1.386q.525.055 1.049 0c1.758-.096 2.809-.942 3.392-2.689a.28.28 0 0 0 .023-.235q.06-.283.077-.57M7.425 36.35V21.738a.26.26 0 0 0 0-.214c-.533-2.282-1.524-2.873-4.424-2.647a.5.5 0 0 0-.484.236.5.5 0 0 0-.46.268l-.467.46-.3.426.073.02-.073-.017-.168.29-.204.471c-.178.436-.25.907-.213 1.376V35.67c-.038.47.035.941.213 1.377l.204.471.187.34c.145.361.41.662.749.85a.51.51 0 0 0 .442.288.53.53 0 0 0 .485.236c2.268.624 3.895-.354 4.43-2.661a.28.28 0 0 0 .01-.22">
                                    </path>
                                    <path fill="#FBFCF9" d="M29.398 11.144c.087-.75.494-1.202 1.295-1.178a1.12 1.12 0 0 1 .851.343 1.14 1.14 0 0 1 .32.866 1.2 1.2 0 0 1-.331.927 1.19 1.19 0 0 1-.91.362c-.752.007-1.175-.493-1.225-1.32">
                                    </path>
                                    <path fill="#FCFCF9" d="M16.846 9.965c.767.073 1.186.502 1.17 1.3a1.16 1.16 0 0 1-.724 1.123 1.1 1.1 0 0 1-.463.08 1.16 1.16 0 0 1-.918-.336 1.18 1.18 0 0 1-.346-.92c-.011-.766.466-1.207 1.28-1.247">
                                    </path>
                                 </g>
                                 <defs>
                                    <clipPath id="cpmobileappdevel1">
                                       <path fill="#fff" d="M.71.926h46v54.667h-46z"></path>
                                    </clipPath>
                                 </defs>
                              </svg>
                             Android Mobile App Development Bahrain  <i class="fa-solid fa-arrow-right"></i>
                           </h5>
                           <p>Android is dominating with 3+ billion users worldwide, and the demand for smart, engaging apps keeps on rising. Our Bahrain-based team delivers Android app solutions that are not just premium but built to compete in a highly competitive space.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Card 2 -->
                  <div class="col-md-4">
                    <div class="service-card" style="background-image: url('<?= $B ?>/assets/images/dubai/service-2.webp');">
                        <div class="card-content">
                           <h5>
                             <svg xmlns="http://www.w3.org/2000/svg" width="42" height="49" fill="none" viewBox="0 0 42 49">
                                    <g fill="#000" clip-path="url(#cpmobileappdevel2)">
                                        <path d="M.711 26.797c-.016-3.278.614-6.398 2.507-9.127 2.54-3.662 6.04-5.578 10.557-5.415 1.498.055 2.888.646 4.288 1.139 3.616 1.27 2.898 1.168 6.415-.033 1.665-.57 3.32-1.196 5.102-1.248 3.146-.094 6.01.73 8.48 2.749.585.478 1.068 1.048 1.548 1.627.322.388.24.588-.162.854-1.835 1.219-3.363 2.725-4.155 4.839-1.464 3.898-.721 8.737 2.891 11.755.792.66 1.612 1.271 2.561 1.682.389.169.451.375.308.77a29.3 29.3 0 0 1-5.917 9.756c-2.31 2.542-4.86 3.166-8.1 1.98-1.082-.398-2.137-.873-3.284-1.075-2.14-.377-4.191-.057-6.186.758-.524.214-1.065.391-1.602.576-2.538.87-4.72.252-6.598-1.597-2.808-2.762-4.918-5.994-6.424-9.623C1.56 33.84.733 30.403.711 26.797">
                                        </path>
                                        <path d="M20.86 11.09c.07-2.116.803-3.998 2.025-5.707 1.82-2.546 4.327-3.99 7.367-4.56.799-.15.856-.092.867.711.04 2.75-.973 5.106-2.758 7.148-1.257 1.441-2.705 2.624-4.564 3.216a7.2 7.2 0 0 1-2.102.365c-.76.009-.82-.05-.835-.792z">
                                        </path>
                                    </g>
                                    <defs>
                                        <clipPath id="cpmobileappdevel2">
                                            <path fill="#fff" d="M.71.758h40.406v48H.71z"></path>
                                        </clipPath>
                                    </defs>
                                </svg>
                             iOS App Development Bahrain<i class="fa-solid fa-arrow-right"></i>
                           </h5>
                           <p>With nearly 2 million apps on the App Store, standing out takes more than just a good idea. Our iOS app development team in Bahrain has launched 100+ smooth, user-friendly apps across iPhone, iPad, and Apple Watch.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Card 3 -->
                  <div class="col-md-4">
                     <div class="service-card" style="background-image: url('<?= $B ?>/assets/images/dubai/service-3.webp');">
                        <div class="card-content">
                           <h5>
                              <svg xmlns="http://www.w3.org/2000/svg" width="37" height="46" fill="none" viewBox="0 0 37 46">
                                    <g clip-path="url(#cpmobileappdevel3)">
                                        <path fill="#40C3FE" d="M36.414.803c-.072.248-.245.353-.377.485a53747 53747 0 0 0-28.329 28.35c-.31.312-.456.31-.763 0a524 524 0 0 0-6.003-6.004c-.317-.318-.301-.483.007-.788Q11.847 11.962 22.729 1.07c.177-.178.346-.317.634-.317q6.432.015 12.867.01.093.011.184.039M17.352 26.737l5.498-5.53a.67.67 0 0 1 .519-.194q6.43.007 12.86 0 .09.011.18.036c-.06.228-.246.34-.385.48q-5.666 5.674-11.333 11.34c-.16.159-.356.29-.44.515l-.164.02a1.3 1.3 0 0 0-.145-.211q-3.12-3.126-6.245-6.25c-.09-.1-.187-.21-.345-.206">
                                        </path>
                                        <path fill="#02579B" d="m27.463 36.652 8.987 9.02c-.189.125-.367.071-.528.072-4.124 0-8.254 0-12.38.01a1.06 1.06 0 0 1-.824-.35c-1.735-1.74-3.483-3.468-5.224-5.203-.033-.033-.038-.094-.056-.143l.225-.133c.163.196.328.037.478-.012q4.408-1.462 8.814-2.936c.19-.065.4-.114.508-.325">
                                        </path>
                                        <path fill="#03A8F3" d="m17.65 39.926-.225.134c-.529-.511-1.065-1.015-1.586-1.535-1.606-1.598-3.202-3.209-4.814-4.802-.242-.24-.31-.383-.028-.662 2.127-2.098 4.235-4.213 6.35-6.323.158 0 .251.106.35.205l6.244 6.25q.083.098.145.21L20.533 37q-1.443 1.463-2.883 2.927">
                                        </path>
                                        <path fill="#0A4B95" d="M17.656 39.927a2850 2850 0 0 1 6.435-6.52l.164-.02 3.21 3.268c-.107.211-.318.258-.517.325l-8.813 2.936c-.15.048-.317.208-.479.011">
                                        </path>
                                    </g>
                                    <defs>
                                        <clipPath id="cpmobileappdevel3">
                                            <path fill="#fff" d="M.71.758h35.736v45H.71z"></path>
                                        </clipPath>
                                    </defs>
                                </svg>
                             Flutter App Development<i class="fa-solid fa-arrow-right"></i>
                           </h5>
                           <p>Looking for app developers in Bahrain who deliver real results? Our expert team specializes in Flutter, an open-source framework trusted by over 2 million developers worldwide. With Flutter, we build cutting-edge iOS and Android apps from a single codebase that runs faster, smoother, and more efficiently.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Card 4 -->
                  <div class="col-md-4">
                     <div class="service-card" style="background-image: url('<?= $B ?>/assets/images/dubai/service-4.webp');">
                        <div class="card-content">
                           <h5>
                              <svg xmlns="http://www.w3.org/2000/svg" width="55" height="49" fill="none" viewBox="0 0 55 49">
                                    <g fill="#61DAFB" clip-path="url(#cpmobileappdevel4)">
                                        <path d="M54.612 24.763c0-3.57-4.471-6.954-11.327-9.053 1.582-6.987.879-12.546-2.22-14.326-.713-.417-1.548-.615-2.46-.615v2.45c.505 0 .912.098 1.252.286 1.494.857 2.142 4.12 1.637 8.317a34 34 0 0 1-.56 3.23 53 53 0 0 0-6.977-1.198 53.5 53.5 0 0 0-4.57-5.493c3.582-3.329 6.944-5.153 9.229-5.153V.758c-3.022 0-6.977 2.153-10.976 5.889C23.64 2.933 19.686.802 16.663.802v2.45c2.275 0 5.647 1.813 9.229 5.12a52 52 0 0 0-4.538 5.482c-2.483.264-4.833.67-6.987 1.209a33 33 0 0 1-.571-3.186c-.516-4.197.12-7.46 1.604-8.328.33-.198.758-.286 1.263-.286V.813c-.923 0-1.758.198-2.483.616-3.087 1.779-3.779 7.327-2.186 14.293C5.16 17.83.71 21.204.71 24.763c0 3.571 4.471 6.955 11.327 9.053-1.582 6.988-.879 12.546 2.22 14.327.714.417 1.548.615 2.471.615 3.021 0 6.977-2.154 10.976-5.889 3.999 3.714 7.954 5.845 10.975 5.845.923 0 1.758-.196 2.483-.615 3.087-1.78 3.78-7.328 2.187-14.293 6.811-2.099 11.26-5.483 11.26-9.043zm-14.306-7.328a50 50 0 0 1-1.483 4.34 54 54 0 0 0-1.437-2.637 61 61 0 0 0-1.583-2.57c1.56.23 3.066.516 4.505.867zm-5.031 11.701a59 59 0 0 1-2.646 4.197c-1.638.143-3.296.22-4.967.22-1.659 0-3.317-.077-4.944-.21a61 61 0 0 1-2.658-4.174 57 57 0 0 1-2.285-4.372 59.095 59.095 0 0 1 4.92-8.58 57 57 0 0 1 4.966-.221c1.66 0 3.319.077 4.944.209a61 61 0 0 1 2.66 4.175 57 57 0 0 1 2.284 4.372 62 62 0 0 1-2.275 4.384m3.549-1.428a47 47 0 0 1 1.516 4.372c-1.44.352-2.955.649-4.527.88a59 59 0 0 0 3.01-5.251zM27.683 39.43a45 45 0 0 1-3.055-3.516c.99.044 2 .077 3.022.077 1.032 0 2.054-.022 3.054-.077a43 43 0 0 1-3.021 3.516m-8.174-6.472a50 50 0 0 1-4.505-.868 50 50 0 0 1 1.484-4.34c.45.88.923 1.758 1.437 2.637a70 70 0 0 0 1.584 2.571m8.119-22.863a45 45 0 0 1 3.054 3.516c-.989-.044-2-.077-3.021-.077-1.033 0-2.055.022-3.054.077a43 43 0 0 1 3.02-3.516m-8.13 6.471a59 59 0 0 0-1.582 2.604c-.505.88-.978 1.758-1.428 2.637a47 47 0 0 1-1.516-4.372c1.439-.34 2.955-.638 4.526-.869M9.555 30.322c-3.888-1.659-6.404-3.834-6.404-5.56 0-1.724 2.516-3.91 6.404-5.558.945-.407 1.978-.769 3.043-1.11a53 53 0 0 0 2.472 6.69 52 52 0 0 0-2.439 6.658 34 34 0 0 1-3.076-1.12m5.91 15.7c-1.493-.857-2.142-4.12-1.636-8.317.12-1.032.318-2.12.56-3.23 2.154.528 4.505.934 6.977 1.198a54 54 0 0 0 4.57 5.493c-3.581 3.329-6.944 5.153-9.229 5.153-.494-.01-.911-.11-1.241-.297m26.06-8.372c.517 4.197-.12 7.46-1.603 8.328-.33.196-.758.286-1.264.286-2.274 0-5.647-1.813-9.228-5.12a52 52 0 0 0 4.537-5.482c2.483-.264 4.836-.67 6.987-1.21.253 1.112.45 2.176.572 3.198m4.23-7.328c-.944.407-1.977.77-3.043 1.111a53 53 0 0 0-2.472-6.69 52 52 0 0 0 2.44-6.658c1.087.34 2.12.714 3.087 1.12 3.887 1.66 6.403 3.834 6.403 5.56-.01 1.724-2.527 3.91-6.416 5.559z">
                                        </path>
                                        <path d="M27.654 29.784a5.02 5.02 0 1 0 0-10.04 5.02 5.02 0 0 0 0 10.04"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="cpmobileappdevel4">
                                            <path fill="#fff" d="M.71.758h53.9v48H.71z"></path>
                                        </clipPath>
                                    </defs>
                                </svg>
                              React Native App Development <i class="fa-solid fa-arrow-right"></i>
                           </h5>
                           <p>23% of today's mobile developers are choosing React Native for its speed and flexibility. With our premium React Native development services, you can launch cross-platform apps that look and feel like native apps.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Card 5 -->
                  <div class="col-md-4">
                     <div class="service-card" style="background-image: url('<?= $B ?>/assets/images/dubai/service-5.webp');">
                        <div class="card-content">
                           <h5>
                              <svg xmlns="http://www.w3.org/2000/svg" width="39" height="51" fill="none" viewBox="0 0 39 51">
                                    <g fill="#F47A1F" stroke="#F47A1F" stroke-width="0.5" clip-path="url(#cpmobileappdevel5)">
                                        <path d="M33.803 25.79c-1.245 0-2.495.007-3.733 0a.66.66 0 0 0-.642.341c-1.707 2.779-3.984 5.06-6.338 7.272a67 67 0 0 1-3.26 2.838c-.22.18-.394.248-.637.04-3.304-2.8-6.547-5.673-8.999-9.28-.656-.956-1.292-1.278-2.401-1.232-2.158.09-4.323.014-6.484.034-.45 0-.607-.14-.598-.588.027-1.29-.11-1.135 1.128-1.139 2.047 0 4.094-.011 6.141 0 .447 0 .552-.072.426-.546-1.118-4.18 2.147-8.413 6.41-8.308 1.707.042 3.175.73 4.38 1.942.224.228.334.255.576.023 1.864-1.789 4.054-2.487 6.536-1.622 2.6.906 4.03 2.844 4.451 5.556.13.827.064 1.673-.191 2.47-.121.386-.024.485.366.484 2.161-.013 4.323-.008 6.484 0 .649 0 .67.02.67.657 0 1.25.061 1.05-1.042 1.06-1.08.006-2.164-.002-3.243-.002Zm-6.735-1.718c.377 0 .754-.01 1.13 0 .29.011.443-.11.546-.38a5 5 0 0 0 .27-2.648c-.31-1.876-1.858-3.57-3.699-3.978-1.89-.42-3.775.365-4.882 2.051-.262.394-.487.814-.72 1.226-.16.279-.283.263-.438-.009a14 14 0 0 0-.806-1.344c-.968-1.367-2.306-2.121-3.977-2.028-3.677.206-5.309 4.088-4.327 6.508.186.457.394.664.887.61q.466-.043.932 0c.337.025.54-.12.726-.394.9-1.313 1.816-2.605 2.727-3.906.333-.474.344-.473.623.042q1.483 2.742 2.97 5.483c.283.526.291.518.656.077.65-.801 1.302-1.601 1.944-2.407.214-.27.358-.279.525.043.332.64.688 1.266 1.027 1.901.553 1.039.585 1.073 1.382.187.688-.766 1.405-1.322 2.504-1.034ZM11.443 25.79q.048.127.113.246c2.165 3.08 4.869 5.647 7.709 8.082.2.171.34.11.51-.036.517-.453 1.05-.885 1.562-1.346 2.144-1.934 4.182-3.967 5.868-6.325.131-.176.302-.34.319-.567-.775-.186-1.37 0-1.893.605-.594.696-1.294 1.298-1.93 1.96-.274.286-.438.317-.636-.079-.376-.745-.805-1.462-1.182-2.208-.172-.34-.28-.423-.549-.075-.631.815-1.293 1.607-1.944 2.408-.351.432-.384.428-.657-.07l-2.8-5.187c-.35-.649-.347-.65-.787-.025-.526.752-1.057 1.498-1.576 2.258a.72.72 0 0 1-.69.365c-.442-.022-.9-.006-1.436-.006z">
                                        </path>
                                        <path d="M19.512 42.63h12.974c.643 0 .644 0 .644-.656V28.017c0-.713 0-.715.701-.714 1.138 0 1.021-.097 1.021 1.036v18.233c0 2.073-1.334 3.715-3.319 4.118q-.388.068-.781.059H8.245c-2.334 0-4.104-1.772-4.106-4.111q-.012-9.338 0-18.675c0-.656.008-.663.656-.656 1.19 0 1.066-.11 1.068 1.04v13.612c0 .67 0 .671.677.671zm0 1.716h-5.601c-2.495 0-4.98.01-7.47-.007-.455 0-.606.144-.582.593.033.604 0 1.21.012 1.817a2.286 2.286 0 0 0 2.29 2.28q11.326.015 22.65 0c1.296 0 2.287-1.014 2.321-2.313.016-.573 0-1.146 0-1.72 0-.647 0-.648-.656-.648zM19.48 8.883H6.51c-.646 0-.648 0-.648.65v12.381c0 .701-.007.705-.717.706-1.158 0-1.005.045-1.006-1.003V4.865A4.05 4.05 0 0 1 7.465.815q.391-.066.788-.056h22.502c2.298 0 4.092 1.766 4.1 4.07.017 5.732 0 11.465.015 17.202 0 .462-.167.596-.602.59-1.352-.019-1.125.069-1.127-1.131-.01-3.98 0-7.959 0-11.938 0-.664 0-.665-.68-.665q-6.495-.006-12.98-.004Zm-.03-1.717c4.357 0 8.713 0 13.07.009.459 0 .656-.114.62-.604-.038-.57 0-1.145-.01-1.719-.024-1.355-1.014-2.363-2.364-2.37q-11.275-.012-22.551 0c-1.372 0-2.332.991-2.35 2.373-.007.54 0 1.08 0 1.621 0 .688 0 .69.715.69z">
                                        </path>
                                        <path d="M19.548 45.811h1.182c.163 0 .368 0 .406.197.086.45.086.912 0 1.362-.037.195-.242.198-.405.2H18.23c-.281 0-.418-.124-.415-.417.013-1.586-.183-1.325 1.247-1.35h.49zM19.457 5.706c-1.424 0-2.847-.01-4.27 0-.44 0-.618-.143-.608-.596.026-1.3-.112-1.181 1.148-1.181h7.952c.677 0 .686 0 .677.688-.015 1.146.2 1.078-1.07 1.08-1.272.003-2.553.01-3.83.01ZM13.129 4.88c-.062.229.156.632-.19.753a2.47 2.47 0 0 1-1.4 0c-.107-.028-.118-.147-.122-.246q-.011-.196-.007-.394c.024-1.11-.22-1.05 1.089-1.067.454 0 .686.131.631.616a3 3 0 0 0-.001.337Z">
                                        </path>
                                    </g>
                                    <defs>
                                        <clipPath id="cpmobileappdevel5">
                                            <path fill="#fff" d="M.71.758H38.09v50H.71z"></path>
                                        </clipPath>
                                    </defs>
                                </svg>
                              Healthcare App Development Bahrain <i class="fa-solid fa-arrow-right"></i>
                           </h5>
                           <p>With 7 in 10 healthcare professionals facing workflow and communication issues, it's clear that the system must be upgraded. Our Bahrain-based app developers create healthcare apps that streamline operations and improve coordination at every step.</p>
                        </div>
                     </div>
                  </div>
                  <!-- Card 6 -->
                  <div class="col-md-4">
                     <div class="service-card" style="background-image: url('<?= $B ?>/assets/images/dubai/service-6.webp');">
                        <div class="card-content">
                           <h5>
                              <svg xmlns="http://www.w3.org/2000/svg" width="33" height="49" fill="none" viewBox="0 0 33 49">
                                    <g fill="#F47A1F" clip-path="url(#cpmobileappdevel6)">
                                        <path d="M15.36 48.75H9.665c-2.471 0-4.109-1.61-4.109-4.041 0-.953-.014-1.905 0-2.857.008-.37-.096-.585-.489-.684C2.83 40.602.676 38.243.711 35.221q.124-10.5 0-21.002c-.03-2.925 2.084-5.28 4.32-5.86.412-.106.523-.319.524-.714 0-1.198-.112-2.395.055-3.58C5.877 2.158 7.39.8 9.34.781q6.007-.056 12.013 0c2.162.02 3.769 1.68 3.805 3.82q.028 1.539 0 3.079c-.009.388.137.554.507.672 2.74.876 4.307 3.012 4.313 5.848 0 .939-.087.899.93.913 1.065.014 1.53.466 1.543 1.512.015 1.439.018 2.876 0 4.313-.015 1.048-.483 1.482-1.552 1.497-.152 0-.305.01-.457 0-.342-.023-.48.129-.467.464.017.45 0 .898 0 1.347v11.145c0 2.738-1.625 4.94-4.275 5.761-.428.134-.556.34-.545.76.026.987.02 1.978 0 2.968-.032 2.217-1.685 3.847-3.94 3.868-1.937.012-3.899.001-5.855.001M27.421 24.8V14.269c0-.545-.025-1.081-.27-1.587-.733-1.506-1.966-2.217-3.643-2.217-5.448 0-10.897.017-16.345-.009a3.9 3.9 0 0 0-1.491.274 3.9 3.9 0 0 0-1.267.82c-.363.354-.65.775-.846 1.24a3.7 3.7 0 0 0-.292 1.464q.096 10.503 0 21.006c-.015 1.86 1.412 3.813 3.88 3.811q8.203-.009 16.404 0a3.9 3.9 0 0 0 1.51-.269c.48-.19.915-.473 1.28-.834.364-.36.65-.79.84-1.263s.28-.979.264-1.487c-.088-3.477-.024-6.952-.024-10.424zM15.36 7.947h6.658c.434 0 .609-.125.598-.574-.027-.899 0-1.797-.012-2.695-.02-.968-.419-1.388-1.388-1.392q-5.86-.018-11.718 0c-.965 0-1.37.437-1.384 1.394-.01.877.025 1.754-.012 2.63-.021.506.177.636.66.631 2.197-.01 4.397 0 6.598 0zm0 33.639H8.704c-.429 0-.62.114-.609.57.03.898 0 1.797.014 2.686.018.988.426 1.396 1.438 1.4q5.806.015 11.61 0c1.031 0 1.43-.418 1.445-1.451.012-.858-.023-1.717.012-2.573.021-.503-.169-.64-.656-.635-2.196.007-4.396-.008-6.597-.008z">
                                        </path>
                                        <path d="M22.689 22.372v5.766c0 .949-.443 1.462-1.246 1.464-.804.001-1.294-.52-1.303-1.45-.018-2.246-.008-4.478-.008-6.717 0-1.027-.027-2.054.01-3.078.022-.55-.133-.748-.727-.74-2.541.03-5.083.016-7.626.011-.777 0-1.217-.355-1.336-1.025-.062-.306 0-.623.172-.885.172-.261.441-.447.75-.516q.418-.09.845-.084 4.38-.009 8.763 0c1.32 0 1.706.38 1.706 1.66z">
                                        </path>
                                    </g>
                                    <defs>
                                        <clipPath id="cpmobileappdevel6">
                                            <path fill="#fff" d="M.71.758h31.755v48H.71z"></path>
                                        </clipPath>
                                    </defs>
                                </svg>
                              Wearable App Development Bahrain <i class="fa-solid fa-arrow-right"></i>
                           </h5>
                           <p>Delayed data and limited patient monitoring remain major challenges in healthcare. As wearable tech is set to reach $800 million by 2024, our best app development team in Bahrain builds custom apps that help providers track patient health in real time and respond faster.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="d-counter">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <div class="counter-box">
                        <div class="counter-icon">
                           <img src="<?= $B ?>/assets/images/dubai/app_dev_dubai.webp">
                        </div>
                        <div class="counter-text">
                           <h4>15+</h4>
                           <p>Years of Experience</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="counter-box">
                        <div class="counter-icon">
                           <img src="<?= $B ?>/assets/images/dubai/live_apps_dubai.webp">
                        </div>
                        <div class="counter-text">
                           <h4>500+</h4>
                           <p>Successful Apps Created</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="counter-box">
                        <div class="counter-icon">
                           <img src="<?= $B ?>/assets/images/dubai/industry_dubai.webp">
                        </div>
                        <div class="counter-text">
                           <h4>90%</h4>
                           <p>Client Retention Rate</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="counter-box">
                        <div class="counter-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="85" height="85" fill="none" viewBox="0 0 85 85">
                              <mask id="mask0_6913_2672" width="85" height="85" x="0" y="0" maskUnits="userSpaceOnUse" style="mask-type: alpha;">
                                 <path fill="url(#pattern0_6913_2672)" d="M0 0H85V85H0z"></path>
                              </mask>
                              <g mask="url(#mask0_6913_2672)">
                                 <path fill="#F47A1F" d="M-4.648 -4.648H89.649V89.649H-4.648z"></path>
                              </g>
                              <defs>
                                 <pattern id="pattern0_6913_2672" width="1" height="1" patternContentUnits="objectBoundingBox">
                                    <use transform="scale(.00781)" xlink:href="#image0_6913_2672"></use>
                                 </pattern>
                                 <image id="image0_6913_2672" width="128" height="128" xlink:href="data:image/png;base64,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">
                                 </image>
                              </defs>
                           </svg>
                        </div>
                        <div class="counter-text">
                           <h4>12+</h4>
                           <p>Industries </br> Served</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
      </section>
      <section class="dubia-hero">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="dubia-hero-img">
                     <img src="<?= $B ?>/assets/images/bahrain/best.webp">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="dubia-hero-content">
                     <h2>Best <span> Mobile App Developers</span> in Bahrain for a Reason</h2>
                     <p>We're recognized as the #1 mobile app development company in Bahrain, known for delivering creative, custom app solutions to all sorts of businesses, whether big enterprises or small startups.</p>
                     <p>Our developers and UI/UX designers collaborate to create apps that deliver real results, helping clients grow their businesses and engage their audiences. From concept to deployment, we offer full-cycle app development tailored to your needs. We focus on creating seamless user experiences that drive engagement and increase retention. Our team uses the latest tech stacks to build scalable, high-performance apps that stand out in the market. We're committed to delivering not just functional, but also visually compelling solutions that align with your business goals and requirements.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bahrain-ino bahrain-inofo">
        <div class="overlay"></div>
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-12">
                  <div class="innovations-content">
                     <h2><span> Bahrain's </span> Tech Industry on Fire<span>  with Mobile App Advancements</span></h2>
                     <p>With 94% smartphone usage and strong backing from Vision 2030, Bahrain is rapidly evolving into a mobile-first economy. From AI-driven apps to seamless cross-platform experiences, businesses that prioritize mobile app development in Bahrain are setting the pace for innovation, growth, and long-term success.</p>
                  </div>
               </div>
            </div>
            <div class="row align-items-center">
               <div class="col-md-3">
                  <div class="innovations-count">
                     <img src="<?= $B ?>/assets/images/dubai/uae-market-1new.webp">
                     <p>Projected value of Bahrain's mobile app market by the end of 2030, as more businesses go mobile-first to meet user demand.</p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="innovations-count">
                     <img src="<?= $B ?>/assets/images/dubai/uae-market-2.webp">
                     <p>Growing demand for seamless, app-based experiences for Bahrain's mobile-first users.</p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="innovations-count">
                     <img src="<?= $B ?>/assets/images/dubai/uae-market-3.webp">
                     <p>CAGR of Bahrain's mobile app market by 2030, powered by digital innovation and demand.</p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="innovations-count">
                     <img src="<?= $B ?>/assets/images/dubai/uae-market-4.webp">
                     <p>Expected Increase in User Engagement. Over 70% of Bahraini users are expected to actively use mobile apps for daily services like banking, travelling, and yes, shopping too, driven by the rise of M-commerce.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="result-driven-bahrain">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="result-driven-content">
                     <h2>Scale Your Business with Our  <span>Custom Mobile App Development</span> Company Bahrain</h2>
                     <p>Whether you're a startup looking to establish your presence or an established company seeking to expand, we offer scalable app development services that boost growth. Our team of expert developers and UI/UX designers works closely with you to understand your goals and deliver intuitive, high-performance mobile apps.</p>
                     <p>We bring the best to the table with our top-quality cross-platform experiences and AI-powered features, ensuring your app is optimized for efficiency, security, and user engagement. Let us help you turn your vision into reality. Scale your business and take it to the next level with a success-driven mobile app development company Bahrain.</p>
                     <div class="dubai-btns">
                        <a href="contact-us.php">Talk to Our Experts</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <section class="winning-apps">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="winning-apps-content">
                     <h2>Our App Development  <span>Life Cycle</span></h2>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="winning-apps-content">
                     <p>We used this revenue-driven app development process in building 300+ apps for our clients in Bahrain</p>
                  </div>
               </div>
            </div>
            <div class="row align-items-center">
               <div class="col-md-12">
                  <div class="winning-tabs">
                     <div class="d-flex align-items-start">
                        <div class="tab-buttons">
                           <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                              Research and Planning Phase
                              </button>
                              <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                              Wireframing and Prototyping Phase
                              </button>
                              <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                             UI/UX Design Phase
                              </button>
                              <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                             Development Phase
                              </button>
                              <button class="nav-link" id="v-pills-Development-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Development" type="button" role="tab" aria-controls="v-pills-Development" aria-selected="false">
                             Testing Phase
                              </button>
                              <button class="nav-link" id="v-pills-Quality-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Quality" type="button" role="tab" aria-controls="v-pills-Quality" aria-selected="false">
                             Launch Phase
                              </button>
                              <!--<button class="nav-link" id="v-pills-Feedback-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Feedback" type="button" role="tab" aria-controls="v-pills-Feedback" aria-selected="false">-->
                              <!--07. Feedback Phase-->
                              <!--</button>-->
                              <!--<button class="nav-link" id="v-pills-Launch-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Launch" type="button" role="tab" aria-controls="v-pills-Launch" aria-selected="false">-->
                              <!--08. Launch and Deployment Phase-->
                              <!--</button>-->
                           </div>
                        </div>
                        <div class="tabs_content">
                           <div class="tab-content" id="v-pills-tabContent">
                              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                 <div class="tabs__content">
                                    <h4>Research and Planning Phase</h4>
                                    <p>In this phase, we dive into your vision and goals through discovery sessions, defining scope, technical needs, and developing a clear strategy.</p>
                                    <!--<ul class="check-list">-->
                                    <!--   <li><i class="fas fa-check"></i> Market analysis completed to gather strategic insights</li>-->
                                    <!--   <li><i class="fas fa-check"></i> Client requirements documented with precision and clarity</li>-->
                                    <!--   <li><i class="fas fa-check"></i> Project feasibility assessed through detailed thorough evaluation</li>-->
                                    <!--   <li><i class="fas fa-check"></i> Tailored solution proposed with clear actionable direction</li>-->
                                    <!--   <li><i class="fas fa-check"></i> Development roadmap finalized to ensure smooth execution</li>-->
                                    <!--</ul>-->
                                    <!--<a href="#">Book My Strategy Session</a>-->
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                 <div class="tabs__content">
                                    <h4>Wireframing and Prototyping Phase</h4>
                                    <p>We start by creating wireframes and basic prototypes to map out your app's layout and user flow, giving you a clear visual before design and development start.</p>
                                    <!--<ul class="check-list">-->
                                    <!--   <li><i class="fas fa-check"></i> Market analysis completed to gather strategic insights</li>-->
                                    <!--   <li><i class="fas fa-check"></i> Client requirements documented with precision and clarity</li>-->
                                    <!--   <li><i class="fas fa-check"></i> Project feasibility assessed through detailed thorough evaluation</li>-->
                                    <!--   <li><i class="fas fa-check"></i> Tailored solution proposed with clear actionable direction</li>-->
                                    <!--   <li><i class="fas fa-check"></i> Development roadmap finalized to ensure smooth execution</li>-->
                                    <!--</ul>-->
                                    <!--<a href="#">Book My Strategy Session</a>-->
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                 <div class="tabs__content">
                                    <h4>UI/UX Design Phase</h4>
                                    <p>Our Bahrain-based team designs creative, user-friendly interfaces, tailored to the mobile experience that Bahraini users want.</p>
                                   
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                 <div class="tabs__content">
                                    <h4>Development Phase</h4>
                                    <p>Once the design's good to go, our full-stack dev team builds your app using modern frameworks, Agile Scrum, and CI/CD pipelines, perfecting everything from frontend to backend.</p>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-Development" role="tabpanel" aria-labelledby="v-pills-Development-tab">
                                 <div class="tabs__content">
                                    <h4>Testing Phase</h4>
                                    <p>Before launch, we rigorously test your app for bugs, performance issues, and compatibility across devices. We run both manual and automated tests to ensure a smooth, error-free user experience.</p>
                                    
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-Quality" role="tabpanel" aria-labelledby="v-pills-Quality-tab">
                                 <div class="tabs__content">
                                    <h4>Launch Phase</h4>
                                    <p>Once everything is polished and approved, we deploy your app to the App Store and Google Play. We also provide post-launch support to ensure a successful rollout and user adoption.</p>
                                   
                                 </div>
                              </div>
                         
                          
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="custom_slider_section">
         <div class="container">
            <div class="best-choice-title">
               <h2>Discover How Our <span style="color: #ec1c22">Award-Winning Mobile App Development Company</span> Maximized Profits for Bahraini Businesses</h2>
               <p>We build apps that do more than just work, they help Bahraini businesses grow, save time, and make more dinars. From smooth user experiences to smart features, we turn your ideas into apps that actually deliver real results.</p>
            </div>
            <div class="slider center">
               <div class="slide">
                  <div class="cl cl-yellow">
                     <div class="custtom___slide">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="cus_slide_text">
                                 <img src="mobile-app-development-in-bahrain.html">
                                 <h2><img src="<?= $B ?>/assets/images/yogi_logo.webp"> Al-Muharraq Banking</h2>
                              </div>
                              <p>Al-Muharraq Banking's mobile banking app uses biometric login, AI-powered budgeting, and seamless transfers to make money management easier and safer. The app doubled engagement and attracted new customers rapidly.</p>
                              <div class="cus_btns">
                                 <ul>
                                    <li>
                                       <span>Download</span>
                                       <p>160K+</p>
                                    </li>
                                    <li>
                                       <span>Country</span>
                                       <p><img src="<?= $B ?>/assets/images/uk_flag.webp">Bahrain</p>
                                    </li>
                                    <li>
                                       <span>Platform</span>
                                       <p>iOS Android</p>
                                    </li>
                                 </ul>
                              </div>
                              <div class="social-anch">
                                 <ul>
                                    <li><a href="mobile-app-development-in-bahrain.html#"><img src="<?= $B ?>/assets/images/gogle.svg"></a></li>
                                    <li><a href="mobile-app-development-in-bahrain.html#"><img src="<?= $B ?>/assets/images/playstore.svg"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="cus_slide_img">
                                 <img src="<?= $B ?>/assets/images/000-1.webp" class="img-fluid" alt="Mobile app">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="slide">
                  <div class="cl cl-blue">
                     <div class="custtom___slide">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="cus_slide_text">
                                 <img src="mobile-app-development-in-bahrain.html">
                                 <h2><img src="<?= $B ?>/assets/images/lazy.svg"> - EduSpark</h2>
                              </div>
                              <p>EduSpark's gamified e-learning app transforms education through interactive lessons, real-time performance tracking, and personalized learning paths. This dynamic approach not only boosts engagement but has also driven remarkable growth in user acquisition.</p>
                              <div class="cus_btns">
                                 <ul>
                                    <li>
                                       <span>Download</span>
                                       <p>20K+</p>
                                    </li>
                                    <li>
                                       <span>Country</span>
                                       <p><img src="<?= $B ?>/assets/images/uk_flag.webp"> Bahrain</p>
                                    </li>
                                    <li>
                                       <span>Platform</span>
                                       <p>iOS Android</p>
                                    </li>
                                 </ul>
                              </div>
                              <div class="social-anch">
                                 <ul>
                                    <li><a href="mobile-app-development-in-bahrain.html#"><img src="<?= $B ?>/assets/images/gogle.svg"></a></li>
                                    <li><a href="mobile-app-development-in-bahrain.html#"><img src="<?= $B ?>/assets/images/playstore.svg"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="cus_slide_img">
                                 <img src="<?= $B ?>/assets/images/000-2.webp" class="img-fluid" alt="Mobile app">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="slide">
                  <div class="cl cl-red">
                     <div class="custtom___slide">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="cus_slide_text">
                                 <img src="mobile-app-development-in-bahrain.html">
                                 <h2><img src="<?= $B ?>/assets/images/Gymshark.svg"> - HomeVista</h2>
                              </div>
                              <p>HomeVista's real estate mobile app revolutionized house hunting by making it easier, faster, and more immersive. We developed a feature-rich platform with advanced search filters, real-time agent messaging, and 360Â° virtual tours that let users explore properties as if they were there, all from their smartphones.</p>
                              <div class="cus_btns">
                                 <ul>
                                    <li>
                                       <span>Download</span>
                                       <p>6K+</p>
                                    </li>
                                    <li>
                                       <span>Country</span>
                                       <p><img src="<?= $B ?>/assets/images/uk_flag.webp"> Bahrain</p>
                                    </li>
                                    <li>
                                       <span>Platform</span>
                                       <p>iOS Android</p>
                                    </li>
                                 </ul>
                              </div>
                              <div class="social-anch">
                                 <ul>
                                    <li><a href="mobile-app-development-in-bahrain.html#"><img src="<?= $B ?>/assets/images/gogle.svg"></a></li>
                                    <li><a href="mobile-app-development-in-bahrain.html#"><img src="<?= $B ?>/assets/images/playstore.svg"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="cus_slide_img">
                                 <img src="<?= $B ?>/assets/images/000-3.webp" class="img-fluid" alt="Mobile app">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="slide">
                  <div class="cl cl-yellow">
                     <div class="custtom___slide">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="cus_slide_text">
                                 <img src="mobile-app-development-in-bahrain.html">
                                 <h2><img src="<?= $B ?>/assets/images/fitness-app-logo.svg"> - CareLink</h2>
                              </div>
                              <p>We helped CareLink bring their telehealth vision to life with a custom-built app offering secure video consultations, digital prescriptions, and automated reminders. The result? Improved access to healthcare services and a noticeable drop in missed appointments.</p>
                              <div class="cus_btns">
                                 <ul>
                                    <li>
                                       <span>Download</span>
                                       <p>160K+</p>
                                    </li>
                                    <li>
                                       <span>Country</span>
                                       <p><img src="<?= $B ?>/assets/images/uk_flag.webp"> Bahrain</p>
                                    </li>
                                    <li>
                                       <span>Platform</span>
                                       <p>iOS Android</p>
                                    </li>
                                 </ul>
                              </div>
                              <div class="social-anch">
                                 <ul>
                                    <li><a href="mobile-app-development-in-bahrain.html#"><img src="<?= $B ?>/assets/images/gogle.svg"></a></li>
                                    <li><a href="mobile-app-development-in-bahrain.html#"><img src="<?= $B ?>/assets/images/playstore.svg"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="cus_slide_img">
                                 <img src="<?= $B ?>/assets/images/000-4.webp" class="img-fluid" alt="Mobile app">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="innovations post-lounch">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-12">
                  <div class="innovations-content">
                     <h2>Reshaping Bahrain' <span> Mobile Future </span> with Cutting-Edge Mobile App Services</h2>
                     <p>In 2025, a mobile app is a must thing for your business because it gives your business a direct line to your customers. It not only enhances user experience, but also boosts brand visibility, and streamlines operations. With features like push notifications and personalized content, apps help keep users engaged. They also offer valuable data insights to guide smarter decisions. Simply put, a mobile app is a powerful tool for growth and connection in today's digital era..</p>
                  </div>
               </div>
            </div>
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="innovations-count responsive">
                     <img src="<?= $B ?>/assets/images/bahrain/mobile-future.webp">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="accordion" id="accordionExample">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <div class="row w-100">
                                 <!--<div class="col-1">01</div>-->
                                 <div class="col-11">Requirement Analysis</div>
                              </div>
                           </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="row">
                                 <!--<div class="col-1"></div>-->
                                 <div class="col-12">
                                    We review your goals and objectives, target audience, and app specifications. Our skilled developers undertake extensive market research and competitive analysis to identify opportunities and ensure that your app stands out in the healthcare app development landscape.
                                 </div>
                                 <!--<div class="col-1"></div>-->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                              <div class="row w-100">
                                 <!--<div class="col-1">02</div>-->
                                 <div class="col-11">Strategy and Planning
                                 </div>
                              </div>
                           </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="row">
                                 <!--<div class="col-1"></div>-->
                                 <div class="col-12">
                                    We provide a strategic plan for your app's success with detailed information. Our professional strategists design the development roadmap, specify milestones, and set firm dates, all while ensuring seamless system integration and scalability. Furthermore, focusing on project scope, budget, and objectives helps us maintain our reputation as a reliable app development agency in NYC.
                                 </div>
                                 <!--<div class="col-1"></div>-->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                              <div class="row w-100">
                                 <!--<div class="col-1">03</div>-->
                                 <div class="col-11">User Experience (UX) Design
                                 </div>
                              </div>
                           </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="row">
                                 <!--<div class="col-1"></div>-->
                                 <div class="col-12">
                                    We prioritize user experience (UX) when designing healthcare mobile apps. Our expert mobile app developers NYC and UX designers use wireframes and prototypes to turn your ideas into usable interfaces. We are committed to using the best mobile app design standards to create a visually appealing and user-friendly experience targeted to healthcare needs.
                                 </div>
                                 <!--<div class="col-1"></div>-->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                              <div class="row w-100">
                                 <!--<div class="col-1">04</div>-->
                                 <div class="col-11">App Development
                                 </div>
                              </div>
                           </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="row">
                                 <!--<div class="col-1"></div>-->
                                 <div class="col-12">
                                    Our professional nyc app developers use high-end technology which also includes programming languages to bring your idea to life. We use an agile development approach which is mainly based on sprints, clean and efficient coding, and continuous communication just to ensure your mobile app scalibility and delivery on time.
                                 </div>
                                 <!--<div class="col-1"></div>-->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                              <div class="row w-100">
                                 <!--<div class="col-1">05</div>-->
                                 <div class="col-11">Testing and Quality Assurance
                                 </div>
                              </div>
                           </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="row">
                                 <!--<div class="col-1"></div>-->
                                 <div class="col-12">
                                    Out team at Appicodres, top priotity is the quality in mobile app development, and to keep the functionality of the application flawless, our dedicated QA team meticulously checks with each development iteration release. We guarantee a responsive application with high security measures and user-friendliness across multiple devices and operating systems thanks to extensive testing, performance of capabilities and features, compatibility, and security testing.
                                 </div>
                                 <!--<div class="col-1"></div>-->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                              <div class="row w-100">
                                 <!--<div class="col-1">06</div>-->
                                 <div class="col-11">Deployment and Support
                                 </div>
                              </div>
                           </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                           data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <div class="row">
                                 <!--<div class="col-1"></div>-->
                                 <div class="col-12">
                                    We will assist you with submitting your app to the appropriate app stores, such as the Apple App Store and Google Play. Our continual support and maintenance services address any post-launch issues and ensure that upgrades are implemented for optimal performance and compliance.
                                 </div>
                                 <!--<div class="col-1"></div>-->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="result-driven">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="result-driven-content">
                     <h2>How Mobile Apps Give You a <span>Competitive Edge </span>in Bahrain?</h2>
                     <p>In 2025, a mobile app is a must thing for your business because it gives your business a direct line to your customers. It not only enhances user experience, but also boosts brand visibility, and streamlines operations. With features like push notifications and personalized content, apps help keep users engaged. They also offer valuable data insights to guide smarter decisions. Simply put, a mobile app is a powerful tool for growth and connection in today's digital era.</p>
                     <div class="dubai-btns">
                        <a href="contact-us.php">Claim Your Competitive Edge Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="premium-technologies">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="premium-technologies-content">
                     <h2>Technologies Utilized in Our Premium <span>Mobile App Services</span> in UAE</h2>
                     <p>At ArtisticWebServices, we use advanced mobile app technologies to deliver top-quality and customized mobile app development services that are reshaping the industry's face through innovation.</p>
                     <p>We are dedicated to catering to multiple industries with guaranteed user experiences and continuous growth.</p>
                     <div class="premium-btn mt-4">
                        <a href="contact-us.php">Hire Top App Developers</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="premium-right">
                     <div class="robust-box">
                        <div class="robust-content">
                           <div class="robust-flex">
                              <svg width="58" height="54" viewBox="0 0 58 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M57.9965 20.4968C57.5236 21.8938 56.674 22.9042 55.1999 23.2923C54.7386 23.3953 54.2641 23.4242 53.7938 23.3779C53.294 23.3465 53.1467 23.5206 53.1481 24.0244C53.1679 27.4593 53.158 30.8941 53.158 34.329C53.158 35.6504 52.6568 36.7393 51.5877 37.5127C50.4548 38.3304 49.2003 38.4474 47.9358 37.8994C46.6458 37.3386 45.8726 36.314 45.7324 34.8913C45.5413 32.9619 45.6772 31.024 45.6531 29.0904C45.6347 27.4207 45.6305 25.7497 45.6531 24.08C45.663 23.5249 45.4733 23.3408 44.9352 23.3808C43.6608 23.4778 42.5422 23.0954 41.701 22.0879C40.7098 20.9063 40.496 19.562 41.1091 18.155C41.7223 16.7479 42.8438 15.9374 44.3801 15.9188C47.738 15.876 51.0958 15.876 54.4537 15.9188C56.0439 15.9402 57.1257 16.8264 57.7771 18.2606C57.8549 18.4333 57.9187 18.6116 57.9895 18.7872L57.9965 20.4968ZM48.0632 28.2969V29.323C48.0632 31.0126 48.0547 32.7036 48.0632 34.3932C48.0595 34.7199 48.1671 35.0381 48.3681 35.2944C48.5692 35.5508 48.8514 35.7298 49.1677 35.8017C49.6746 35.9201 50.3005 35.6005 50.5922 35.0882C50.7706 34.7714 50.7338 34.4246 50.7338 34.0893C50.7338 30.3875 50.7338 26.6849 50.7338 22.9812C50.7269 22.7345 50.7364 22.4875 50.7621 22.242C50.8726 21.4158 51.2889 21.0447 52.1243 21.0333C52.8224 21.0233 53.5219 21.0504 54.2186 21.0205C55.0172 20.9862 55.6488 20.374 55.6573 19.6776C55.6658 18.9812 55.122 18.409 54.3192 18.3277C53.0207 18.1978 51.7165 18.282 50.4138 18.2734C48.5262 18.2592 46.6387 18.2535 44.7497 18.2806C43.7585 18.2948 43.151 18.8828 43.1794 19.7076C43.2063 20.4925 43.8378 21.0176 44.7908 21.0319C45.3954 21.0419 46.0001 21.0319 46.6033 21.0319C47.6157 21.039 48.0476 21.4686 48.0504 22.4917C48.066 24.424 48.0618 26.3633 48.0632 28.2969Z" fill="#314252"></path>
                                 <path d="M0 19.1293C0.412061 17.952 1.03936 16.9588 2.17642 16.338C4.92207 14.8382 8.35733 16.7833 8.40689 19.9285C8.45786 23.2306 8.42246 26.5328 8.42388 29.8364C8.42388 31.202 8.43238 32.5691 8.42388 33.9348C8.40264 36.0525 6.92432 37.8306 4.92774 38.1631C2.80371 38.517 0.859524 37.3183 0.15718 35.222C0.1147 35.0964 0.0580592 34.9765 0.00708267 34.8538L0 19.1293ZM2.30527 27.0522C2.30527 29.1771 2.30527 31.3005 2.30527 33.4254C2.30519 33.728 2.33364 34.03 2.39024 34.3272C2.46829 34.7565 2.69559 35.1437 3.03135 35.4193C3.3671 35.6949 3.78934 35.841 4.22227 35.8312C4.65521 35.8214 5.07052 35.6564 5.39366 35.3659C5.71681 35.0753 5.92664 34.6783 5.9855 34.2459C6.03645 33.9087 6.06201 33.5681 6.06196 33.227C6.06763 29.1866 6.06763 25.1471 6.06196 21.1086C6.05938 20.6726 6.03196 20.2371 5.97984 19.8043C5.93513 19.4049 5.7563 19.0329 5.47299 18.75C5.18969 18.4671 4.81893 18.2902 4.42222 18.2488C3.49756 18.1632 2.69185 18.6641 2.4398 19.4989C2.33875 19.8454 2.291 20.2053 2.29819 20.5663C2.30811 22.7283 2.30527 24.8903 2.30527 27.0522Z" fill="#314252"></path>
                                 <path d="M35.2889 27.0825C35.1884 32.6479 30.81 36.9105 25.2862 36.8163C19.9605 36.7249 15.687 32.1656 15.8399 26.6415C15.9212 24.1 16.9863 21.6915 18.8072 19.9313C20.6282 18.1711 23.0604 17.199 25.5835 17.2231C31.0409 17.2416 35.3866 21.7225 35.2889 27.0825ZM18.2415 27.0054C18.2317 27.9766 18.414 28.9399 18.778 29.8392C19.1419 30.7385 19.6801 31.5556 20.3611 32.2428C21.0421 32.93 21.8522 33.4735 22.744 33.8415C23.6359 34.2095 24.5915 34.3946 25.5552 34.386C27.5005 34.3936 29.3692 33.6229 30.7511 32.2431C32.133 30.8633 32.9151 28.9872 32.9256 27.0268C32.9383 22.9855 29.5979 19.6191 25.5764 19.6191C24.6135 19.618 23.6598 19.8082 22.7699 20.179C21.88 20.5497 21.0714 21.0937 20.3904 21.7798C19.7093 22.4659 19.1692 23.2806 18.801 24.1772C18.4327 25.0739 18.2436 26.035 18.2443 27.0054H18.2415Z" fill="#314252"></path>
                                 <path d="M25.6678 47.8833C21.5798 47.9133 17.8231 46.7831 14.3652 44.6012C13.8837 44.2986 13.5453 43.9062 13.6303 43.3026C13.7067 42.7632 14.0551 42.4207 14.5776 42.2922C15.0463 42.1781 15.4272 42.4264 15.7883 42.659C17.3924 43.702 19.1621 44.4603 21.0205 44.9009C27.4194 46.355 33.1231 44.9779 38.0622 40.5755C38.3064 40.339 38.5692 40.1228 38.8481 39.9291C39.0719 39.7821 39.3405 39.7206 39.6053 39.7557C39.8702 39.7908 40.1139 39.9201 40.2924 40.1203C40.4724 40.3168 40.5816 40.5686 40.6024 40.8352C40.6232 41.1018 40.5544 41.3677 40.4071 41.5901C40.1338 42.0082 39.726 42.3036 39.3607 42.6219C36.3578 45.3205 32.6352 47.072 28.6542 47.6593C27.6668 47.8188 26.6678 47.8937 25.6678 47.8833Z" fill="#314252"></path>
                                 <path d="M25.4552 6.11556C29.4412 6.20689 32.9742 7.14873 36.231 9.08379C36.8244 9.43627 37.0807 9.94001 36.9391 10.498C36.8881 10.7329 36.7648 10.9456 36.5868 11.1058C36.4088 11.2659 36.1852 11.3654 35.9478 11.3899C35.5514 11.4541 35.2101 11.2729 34.883 11.0802C32.8965 9.8967 30.7022 9.11032 28.4203 8.76413C23.4237 8.02398 18.8693 9.13326 14.7572 12.092C13.9869 12.6442 13.3086 13.3064 12.5907 13.9214C11.7906 14.6093 10.7654 14.2811 10.57 13.3135C10.4737 12.8326 10.689 12.4659 11.0132 12.1476C14.1745 8.98549 18.273 6.94885 22.6869 6.34674C23.1895 6.27396 23.7007 6.26397 24.2048 6.20403C24.6186 6.14134 25.0367 6.11176 25.4552 6.11556Z" fill="#314252"></path>
                                 <path d="M25.4379 42.3981C21.4731 42.3068 17.8906 40.9011 14.9014 38.0214C14.342 37.482 14.2741 36.7585 14.73 36.2461C15.186 35.7338 15.894 35.691 16.4944 36.2461C17.6252 37.312 18.9154 38.1918 20.3176 38.8533C24.737 40.9111 30.4195 40.0649 34.053 36.7841C34.3005 36.5504 34.56 36.3299 34.8304 36.1234C35.3812 35.7196 35.9887 35.7681 36.4163 36.2247C36.5226 36.334 36.6064 36.4633 36.6628 36.6053C36.7192 36.7473 36.7472 36.8992 36.7451 37.0522C36.743 37.2051 36.7109 37.3562 36.6505 37.4966C36.5902 37.637 36.5029 37.7639 36.3937 37.8701C35.6873 38.6117 34.8964 39.2665 34.0374 39.8209C31.473 41.5205 28.6495 42.3481 25.4379 42.3981Z" fill="#314252"></path>
                                 <path d="M26.8528 11.6799C29.7231 11.717 33.2645 13.1711 36.2481 16.0138C36.8145 16.5589 36.8923 17.2596 36.435 17.7833C35.9776 18.307 35.271 18.3541 34.6749 17.8033C33.5868 16.775 32.3503 15.919 31.0074 15.2646C26.4251 13.104 20.8036 13.926 17.0384 17.3181C16.8132 17.5207 16.5895 17.7276 16.3474 17.9074C15.7895 18.3213 15.1466 18.2642 14.719 17.7804C14.2913 17.2967 14.3097 16.6388 14.7982 16.1351C15.5092 15.3983 16.3017 14.7461 17.1602 14.1914C19.7274 12.5218 22.541 11.6656 26.8528 11.6799Z" fill="#314252"></path>
                                 <path d="M12.9344 40.9566C12.9278 41.271 12.802 41.5709 12.5829 41.7948C12.3639 42.0188 12.0681 42.1498 11.7563 42.161C11.1276 42.161 10.5187 41.536 10.5314 40.9166C10.5494 40.6123 10.677 40.325 10.8903 40.1088C11.1036 39.8925 11.3879 39.7622 11.6897 39.7422C12.0109 39.7493 12.3175 39.8783 12.5483 40.1035C12.7791 40.3286 12.917 40.6333 12.9344 40.9566Z" fill="#314252"></path>
                                 <path d="M40.593 13.1291C40.595 13.281 40.5665 13.4318 40.5092 13.5723C40.4519 13.7129 40.367 13.8403 40.2596 13.9469C40.1522 14.0535 40.0245 14.1372 39.8842 14.1928C39.7439 14.2485 39.5939 14.275 39.4432 14.2707C39.2879 14.2744 39.1335 14.2465 38.989 14.1888C38.8446 14.131 38.7132 14.0446 38.6027 13.9346C38.4921 13.8246 38.4046 13.6934 38.3454 13.5486C38.2862 13.4039 38.2565 13.2486 38.258 13.092C38.2551 12.9351 38.2838 12.7793 38.3425 12.634C38.4013 12.4886 38.4887 12.3569 38.5996 12.2467C38.7105 12.1366 38.8425 12.0503 38.9875 11.9933C39.1326 11.9362 39.2876 11.9095 39.4432 11.9147C39.5986 11.9157 39.7522 11.9483 39.8949 12.0104C40.0376 12.0725 40.1664 12.1629 40.2737 12.2762C40.381 12.3895 40.4645 12.5234 40.5194 12.6699C40.5743 12.8165 40.5993 12.9726 40.593 13.1291Z" fill="#314252"></path>
                                 <path d="M25.5602 31.2837C23.2351 31.2837 21.2923 29.3186 21.3206 26.9883C21.3405 25.8631 21.7958 24.7903 22.5894 23.9985C23.3829 23.2068 24.452 22.7588 25.5687 22.75C27.8513 22.75 29.804 24.6993 29.8167 26.9969C29.8122 28.1329 29.3622 29.2211 28.5649 30.0241C27.7675 30.8271 26.6874 31.2799 25.5602 31.2837ZM25.5927 25.1874C25.3472 25.1777 25.1022 25.2185 24.8728 25.3073C24.6433 25.3961 24.4343 25.5311 24.2583 25.704C24.0824 25.8769 23.9432 26.0842 23.8493 26.3131C23.7554 26.542 23.7088 26.7877 23.7123 27.0354C23.7241 27.5236 23.9219 27.9886 24.2646 28.3339C24.6072 28.6793 25.0686 28.8786 25.5531 28.8905C25.7947 28.8926 26.0343 28.8463 26.258 28.7544C26.4817 28.6624 26.6851 28.5266 26.8563 28.3548C27.0276 28.1831 27.1633 27.9787 27.2555 27.7537C27.3478 27.5287 27.3949 27.2874 27.3939 27.0439C27.3967 25.978 26.6363 25.1945 25.5927 25.1874Z" fill="#314252"></path>
                              </svg>
                              <h4>IoT</h4>
                           </div>
                           <p>Screen your business operations with a more secure and high-tech infrastructure that IoT
                              supports for optimal performance.
                           </p>
                        </div>
                        <div class="robust-content">
                           <div class="robust-flex">
                              <svg width="58" height="57" viewBox="0 0 58 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#cpmobileappdevel7)">
                                    <path d="M0 36.2245C3.19233 34.3759 6.38354 32.5251 9.57363 30.672C9.94611 30.4539 10.1329 30.5401 10.3208 30.8879C11.0166 32.1966 11.1329 31.8488 9.87341 32.5825C7.34773 34.059 4.81236 35.5195 2.26729 36.9639C1.86462 37.1932 1.69683 37.4504 1.70019 37.9281C1.72107 41.2837 1.72107 44.6393 1.70019 47.995C1.70019 48.4536 1.85791 48.6997 2.24269 48.9189C5.19192 50.5975 8.13071 52.2943 11.0591 54.0094C11.4371 54.2331 11.7045 54.2174 12.0713 54.0038C14.9796 52.3036 17.9135 50.6325 20.824 48.929C21.2535 48.6773 21.4794 48.6672 21.7311 49.1437C22.3799 50.3741 22.438 50.0799 21.3184 50.7321C18.2603 52.5083 15.1831 54.2599 12.1262 56.0451C11.7224 56.2823 11.4136 56.2991 11.0076 56.0608C7.5774 54.0616 4.14198 52.0747 0.701328 50.1001C0.477619 49.9703 0.234895 49.8764 0.00111878 49.7589L0 36.2245Z" fill="#314252"></path>
                                    <path d="M57.2677 49.7592C53.6213 51.8632 49.9703 53.9593 46.3339 56.079C45.8966 56.3329 45.5711 56.3575 45.117 56.0924C42.0152 54.2748 38.8934 52.4918 35.7805 50.6943C35.1395 50.324 35.1395 50.3173 35.5031 49.6943C36.0881 48.6876 35.8867 48.672 36.9695 49.295C39.6976 50.8609 42.428 52.4269 45.1438 54.0242C45.57 54.2736 45.8809 54.2647 46.3082 54.013C49.2164 52.3054 52.1351 50.6171 55.0642 48.9482C55.4143 48.748 55.5586 48.5176 55.5564 48.1082C55.5422 44.6989 55.5422 41.2895 55.5564 37.8802C55.5564 37.4943 55.4244 37.2729 55.0922 37.0827C52.3763 35.5279 49.6762 33.9508 46.9525 32.4038C46.4693 32.1298 46.4436 31.8994 46.7131 31.4564C47.2881 30.5101 47.2724 30.4978 48.2041 31.037C51.0736 32.6939 53.9456 34.3486 56.8203 36.0011C56.9646 36.085 57.1201 36.1487 57.2677 36.2248V49.7592Z" fill="#314252"></path>
                                    <path d="M14.8582 34.3871C14.337 34.1925 14.0752 34.5325 13.8303 34.9889C13.4746 35.66 13.0685 36.3144 12.705 36.9855C12.5294 37.3087 12.3437 37.3412 12.0339 37.1555C10.6704 36.3356 10.8236 36.6891 11.5294 35.3916C11.8147 34.867 12.1099 34.3491 12.4243 33.839C12.5909 33.5661 12.5809 33.3513 12.3929 33.0784C11.5809 31.9006 11.5753 30.6847 12.2867 29.4543C12.5294 29.0349 12.7677 28.6132 13.0126 28.1948C13.7453 26.9432 14.8336 26.3761 16.2788 26.5226C16.4678 26.5416 16.6031 26.5226 16.7061 26.3548C16.809 26.187 16.8492 26.0293 16.7061 25.8448C15.668 24.4846 15.8112 23.1178 16.6882 21.7453C16.9387 21.3527 17.1445 20.9299 17.4051 20.5451C18.1154 19.4959 19.1344 19.0395 20.3782 19.1357C20.7283 19.1626 20.8905 19.0485 21.0404 18.78C21.4487 18.0485 21.8804 17.3259 22.2798 16.591C22.461 16.2555 22.6522 16.1828 22.9878 16.3875C24.3088 17.1939 24.1992 16.8349 23.499 18.1089C23.2026 18.6469 22.9006 19.1838 22.5784 19.7073C22.4207 19.9646 22.4218 20.1547 22.6053 20.4086C23.4486 21.5954 23.4587 22.828 22.7294 24.0763C22.4576 24.5439 22.2071 25.0249 21.9118 25.4768C21.1892 26.5841 20.1691 27.1199 18.8324 26.9969C18.6188 26.9767 18.4309 26.9734 18.2989 27.1915C18.1669 27.4096 18.2485 27.5707 18.376 27.7508C19.2496 28.9812 19.2396 30.2418 18.4722 31.5203C18.2027 31.9677 17.9622 32.4319 17.6814 32.8704C17.0383 33.877 16.1132 34.3793 14.8582 34.3871ZM17.8928 24.1088C18.4085 23.5797 18.4085 23.5797 18.734 23.7497C19.7765 24.2911 19.7765 24.2911 19.6288 25.0774C20.442 24.8459 21.5986 22.7833 21.3324 22.0406C20.7865 22.6468 20.8044 22.6166 19.7485 22.016C19.1546 21.6804 19.6456 21.3717 19.7004 21.0428C18.8492 21.2375 17.6792 23.2441 17.8928 24.1088ZM17.1222 29.3167C16.8705 29.6389 16.7586 30.1243 16.1658 29.7541C15.2374 29.1758 15.2106 29.2183 15.4253 28.423C14.5942 28.6467 13.4008 30.7563 13.7061 31.5337C13.9399 31.1053 14.1692 30.8525 14.6971 31.1981C15.5808 31.7719 15.6054 31.7328 15.3772 32.4554C16.2005 32.2496 17.3157 30.2888 17.1222 29.3167Z" fill="#314252"></path>
                                    <path d="M41.3084 23.8005C41.3408 24.5253 41.0947 25.1428 40.7099 25.7021C40.5802 25.8933 40.4672 26.0689 40.5981 26.315C40.7413 26.5891 40.9583 26.4996 41.1797 26.485C42.2759 26.4079 43.2211 26.7736 43.9045 27.6215C44.5346 28.4089 45.0328 29.2932 45.3799 30.24C45.7412 31.2142 45.5622 32.165 44.9638 32.9983C44.7099 33.3507 44.7266 33.5912 44.9425 33.9357C45.3776 34.6292 45.7579 35.3562 46.1729 36.0609C46.353 36.3629 46.3139 36.5419 46.0029 36.732C44.8844 37.4345 44.8844 37.4457 44.2132 36.2902C43.9056 35.7589 43.5924 35.2298 43.3005 34.6885C43.2481 34.5697 43.1573 34.4721 43.0426 34.4112C42.928 34.3503 42.7962 34.3298 42.6685 34.3529C41.1574 34.4782 40.0959 33.7936 39.3923 32.4916C39.1529 32.0442 38.8901 31.6192 38.6597 31.1729C38.0679 30.0264 38.1597 28.9134 38.8543 27.8396C38.9807 27.6427 39.1898 27.4805 39.0131 27.1942C38.8364 26.9078 38.6183 26.9973 38.3755 27.0085C37.1451 27.0689 36.1496 26.6092 35.4673 25.579C35.0756 24.9889 34.7222 24.3743 34.4092 23.739C33.8644 22.6328 33.9338 21.5299 34.6251 20.5064C34.8633 20.1541 34.8555 19.8901 34.6452 19.5478C34.2358 18.8767 33.8734 18.1865 33.4674 17.5188C33.2649 17.1832 33.2515 16.9774 33.6419 16.7682C34.9841 16.049 34.6485 15.9685 35.3767 17.2156C35.6877 17.7458 35.9942 18.2783 36.2917 18.8163C36.4337 19.0724 36.5971 19.1653 36.9192 19.1295C37.965 19.0176 38.8923 19.3442 39.578 20.1362C40.2636 20.9281 40.7368 21.8666 41.1495 22.8207C41.2822 23.1293 41.3368 23.4658 41.3084 23.8005ZM43.6405 31.5062C43.8173 30.5476 42.6596 28.5868 41.8509 28.4224C41.8587 28.7333 42.3811 29.0208 41.8207 29.3631C40.7894 29.9917 40.805 30.0174 40.1932 29.4257C39.946 30.1785 41.1361 32.2623 41.9146 32.4402C41.7178 31.6337 41.7334 31.6516 42.8464 31.0767C43.3598 30.8093 43.3497 31.3384 43.6405 31.5062ZM37.625 21.0254C37.9236 21.8017 37.9046 21.7715 37.1049 22.2815C36.587 22.6171 36.2358 22.6171 36.0031 21.9337C35.7794 22.8934 36.8756 24.8676 37.6809 25.0589C37.5131 24.2703 37.5691 24.2323 38.6261 23.7055C39.1731 23.4348 39.1496 23.9985 39.4024 24.1529C39.6149 23.2222 38.4952 21.2603 37.625 21.0254Z" fill="#314252"></path>
                                    <path d="M24.8665 42.1338C25.4548 42.1036 26.1595 42.1238 26.8295 42.409C27.5776 42.7213 28.1754 43.3115 28.4973 44.0555C28.5912 44.2647 28.6751 44.466 28.9671 44.4515C29.2299 44.4392 29.2914 44.2423 29.3809 44.0577C30.004 42.7781 31.0263 42.1282 32.4524 42.1227C32.9748 42.1227 33.4961 42.1104 34.0184 42.1227C35.3204 42.1529 36.3148 42.7222 36.9076 43.8911C37.0989 44.268 37.3293 44.3967 37.7331 44.3844C38.4959 44.3597 39.261 44.3911 40.0239 44.3698C40.4713 44.3564 40.6626 44.4984 40.6514 44.9749C40.6189 46.3787 40.7934 46.1919 39.4333 46.2053C38.8181 46.2132 38.2029 46.2188 37.5888 46.2053C37.2902 46.1986 37.1213 46.3027 36.9904 46.5845C36.4725 47.7031 35.5956 48.3608 34.3629 48.4861C33.5481 48.5797 32.725 48.5759 31.9111 48.4749C30.7489 48.3205 29.929 47.6829 29.41 46.6416C29.3138 46.4481 29.2747 46.2154 28.9704 46.2098C28.6449 46.2098 28.5823 46.4458 28.4783 46.6572C27.872 47.9111 26.8385 48.5062 25.4794 48.5319C24.7199 48.5465 23.9537 48.6192 23.1954 48.4615C22.201 48.2534 21.4493 47.7053 21.0064 46.8027C20.7972 46.3765 20.5276 46.2534 20.088 46.268C19.3252 46.2948 18.5601 46.268 17.7961 46.2848C17.3812 46.2937 17.1888 46.1539 17.1955 45.7042C17.2179 44.2568 17.0836 44.4738 18.4024 44.4593C19.0355 44.4503 19.6686 44.4526 20.3039 44.4593C20.5388 44.4593 20.7368 44.438 20.8498 44.1785C21.541 42.5947 22.8285 42.0533 24.466 42.1249C24.5566 42.1383 24.6495 42.1338 24.8665 42.1338ZM26.5365 46.2479C26.079 46.2098 25.6729 46.2937 25.683 45.6629C25.7009 44.5588 25.6606 44.5577 26.457 44.3955C25.9459 43.7636 23.4895 43.7658 22.8922 44.3955C23.6674 44.5488 23.6294 44.5521 23.7155 45.4257C23.7815 46.0968 23.4683 46.3049 22.8206 46.2534C23.5432 46.9078 25.881 46.9044 26.5365 46.2479ZM34.9826 46.2747C34.6862 46.1293 34.2332 46.3866 34.2063 45.8642C34.1884 45.5119 34.2119 45.1573 34.1963 44.8049C34.1694 44.2457 34.7197 44.4996 34.9613 44.2982C34.2589 43.7826 31.9469 43.8105 31.4939 44.3139C32.165 44.5163 32.1146 44.5186 32.165 45.5946C32.1963 46.2467 31.7858 46.2221 31.335 46.2557C32.052 46.9 34.3428 46.8977 34.9826 46.2747Z" fill="#314252"></path>
                                    <path d="M40.287 12.5707C40.287 14.2665 40.2713 15.9622 40.296 17.6579C40.3038 18.1802 40.1517 18.3905 39.6013 18.3715C38.353 18.3301 38.4548 18.489 38.4537 17.225C38.4537 14.3168 38.4425 11.4086 38.4627 8.50035C38.4627 8.02609 38.3005 7.76435 37.8944 7.53281C35.031 5.89899 32.1757 4.25025 29.3286 2.5866C28.8633 2.31367 28.5121 2.27676 28.0132 2.57094C25.1274 4.27784 22.218 5.94447 19.3053 7.6044C18.9507 7.80573 18.8154 8.0328 18.8176 8.43995C18.8322 11.4958 18.8266 14.5517 18.8243 17.612C18.8243 18.3547 18.8243 18.3547 18.0816 18.3592C17.0078 18.3659 17.0078 18.3659 17.0078 17.3055C17.0078 14.0618 17.0145 10.818 17 7.5742C17 7.07644 17.1398 6.76549 17.5995 6.50263C21.0954 4.51013 24.58 2.49674 28.0535 0.462481C28.4919 0.206334 28.823 0.204097 29.2704 0.462481C32.7447 2.49376 36.2293 4.50714 39.7244 6.50263C40.1304 6.73529 40.3027 7.00038 40.296 7.47465C40.2725 9.17931 40.287 10.875 40.287 12.5707Z" fill="#314252"></path>
                                    <path d="M45.7013 52.8846C44.8165 52.8846 44.8154 52.8846 44.8154 51.9898C44.8154 49.3634 44.8053 46.7326 44.8243 44.1085C44.8243 43.6779 44.6823 43.443 44.3075 43.2316C41.9429 41.8893 39.5973 40.5124 37.2316 39.1712C36.8211 38.9375 36.7708 38.7305 37.0135 38.3435C37.7696 37.14 37.4609 37.225 38.6276 37.8961C40.7931 39.1366 42.9597 40.377 45.1095 41.6444C45.5335 41.8938 45.8623 41.9039 46.2874 41.6544C48.5826 40.3021 50.9003 38.9878 53.1933 37.6277C53.6597 37.3514 53.8991 37.4118 54.1384 37.8883C54.6753 38.9565 54.88 38.7518 53.747 39.405C51.5691 40.6623 49.3992 41.9329 47.2113 43.1723C46.7806 43.4161 46.6229 43.7058 46.6274 44.1969C46.6498 46.7863 46.6397 49.3757 46.6397 51.9663C46.6397 52.8913 46.6397 52.8913 45.7013 52.8846Z" fill="#314252"></path>
                                    <path d="M10.6228 48.0685C10.6228 46.7822 10.597 45.4959 10.6351 44.2118C10.6519 43.6525 10.4706 43.3393 9.97849 43.0631C7.7056 41.7857 5.46292 40.4546 3.19227 39.1728C2.71465 38.9032 2.59161 38.6772 2.91375 38.1884C3.58488 37.1739 3.29406 37.1415 4.42379 37.7925C6.63515 39.0654 8.84987 40.3327 11.0501 41.6268C11.4214 41.845 11.6943 41.8438 12.0646 41.6268C14.3766 40.27 16.711 38.9423 19.0219 37.5855C19.4693 37.3227 19.7042 37.3148 19.9716 37.8092C20.6293 39.0318 20.6617 38.713 19.532 39.3752C17.3486 40.6578 15.154 41.9225 12.9482 43.1693C12.5735 43.383 12.4359 43.6369 12.4393 44.0642C12.4561 46.7274 12.4482 49.3918 12.4471 52.0562C12.4471 52.7966 12.4393 52.8 11.6977 52.8056C10.6239 52.8134 10.6239 52.8134 10.6228 51.7564V48.0685Z" fill="#314252"></path>
                                    <path d="M27.732 18.6626C27.732 17.3584 27.7141 16.0531 27.7421 14.7477C27.7521 14.2645 27.6145 13.9748 27.1727 13.7254C24.8517 12.4167 22.5587 11.0565 20.2377 9.74447C19.778 9.48497 19.7321 9.25343 20.0017 8.83174C20.7075 7.72997 20.3831 7.74675 21.5375 8.40445C23.7075 9.63486 25.8786 10.8764 28.025 12.1594C28.5262 12.4592 28.8785 12.4111 29.3405 12.1393C31.572 10.8239 33.8146 9.53419 36.0618 8.23779C36.7419 7.84518 36.7463 7.8463 37.1412 8.54092C37.6792 9.48833 37.7911 9.3239 36.7609 9.92344C34.5171 11.2198 32.2766 12.5207 30.0239 13.7992C29.6581 14.0061 29.5597 14.2645 29.5608 14.6571C29.5731 17.3226 29.5686 19.9881 29.5664 22.6547C29.5664 23.393 29.5608 23.3941 28.8125 23.3974C27.7376 23.4042 27.7376 23.4042 27.7365 22.3527L27.732 18.6626Z" fill="#314252"></path>
                                    <path d="M33.2514 24.031C33.2927 24.2973 33.1462 24.3666 33.0209 24.4393C31.6675 25.2245 30.3133 26.0075 28.9584 26.7883C28.8743 26.8466 28.7749 26.8788 28.6726 26.8808C28.5703 26.8827 28.4697 26.8545 28.3834 26.7994C27.0143 26.0064 25.6094 25.267 24.2817 24.4091C23.6207 23.983 24.4238 23.6149 24.5368 23.2212C24.6162 22.9405 24.7672 22.6083 25.2191 22.8857C26.19 23.4751 27.1888 24.0187 28.1597 24.6082C28.5031 24.8163 28.776 24.8319 29.1273 24.6194C30.0657 24.0467 31.0288 23.5243 31.974 22.9584C32.3453 22.7347 32.5769 22.7727 32.767 23.1731C32.918 23.4908 33.1115 23.7883 33.2514 24.031Z" fill="#314252"></path>
                                    <path d="M23.1839 38.6292C23.1839 39.2813 23.1716 39.9334 23.1839 40.5855C23.1951 40.9793 23.0586 41.1515 22.6414 41.1672C21.3472 41.2175 21.3483 41.2309 21.3472 39.9368C21.3472 39.2108 21.3327 38.4827 21.3472 37.759C21.3573 37.3954 21.2197 37.1807 20.8998 37.0051C19.9714 36.4917 19.0654 35.9357 18.1359 35.4234C17.7723 35.2232 17.7276 35.0331 17.9401 34.6774C18.7231 33.3698 18.4222 33.5297 19.6235 34.1953C20.6504 34.7635 21.6481 35.3821 22.6772 35.9458C23.0575 36.155 23.1995 36.4167 23.1783 36.8406C23.1626 37.4368 23.185 38.0341 23.1839 38.6292Z" fill="#314252"></path>
                                    <path d="M34.0857 38.5489C34.0857 38.1776 34.1338 37.7973 34.0756 37.4304C33.9414 36.5904 34.2803 36.1094 35.0331 35.7324C36.1449 35.1732 37.2064 34.5166 38.2769 33.879C38.6124 33.6754 38.8238 33.6721 39.0274 34.0546C39.7623 35.436 39.8238 35.0333 38.58 35.7884C37.8652 36.2224 37.1427 36.6463 36.4044 37.04C36.0476 37.2302 35.8966 37.4651 35.91 37.8744C35.9369 38.6921 35.9033 39.5109 35.9246 40.3285C35.9357 40.776 35.7724 40.9594 35.3082 40.9516C33.9201 40.9281 34.1013 41.0433 34.0879 39.7715C34.0823 39.3677 34.0857 38.9583 34.0857 38.5489Z" fill="#314252"></path>
                                    <path d="M3.77648 46.1654C4.11204 46.1486 4.5863 46.0848 4.53709 46.8029C4.51919 47.058 4.79324 47.1441 4.98451 47.2504C6.4196 48.0781 7.8491 48.9159 9.29538 49.7212C9.71036 49.9528 9.8088 50.1541 9.54594 50.5881C8.93521 51.5948 8.95534 51.6082 7.92964 51.0176C6.38045 50.1228 4.8391 49.2279 3.27649 48.3566C2.8794 48.1329 2.69373 47.8734 2.75301 47.4282C2.7614 47.2982 2.7614 47.1678 2.75301 47.0378C2.75525 46.1642 2.75525 46.1642 3.77648 46.1654Z" fill="#314252"></path>
                                    <path d="M34.1703 6.60371C34.1837 6.82742 33.5148 7.99742 33.4052 8.04552C33.1938 8.13948 33.0517 7.97729 32.8985 7.89004C31.6379 7.1697 30.3829 6.43593 29.1223 5.72118C28.982 5.63261 28.8293 5.5655 28.6693 5.52208C28.4881 5.48181 28.2688 5.75362 28.11 5.50418C27.8639 5.11045 27.6491 4.69771 27.4288 4.28944C27.4147 4.23613 27.4223 4.1794 27.45 4.13172C27.6201 3.76484 28.7073 3.4002 29.0552 3.5993C30.6532 4.518 32.2493 5.43781 33.8436 6.35875C33.9812 6.44264 34.1591 6.49633 34.1703 6.60371Z" fill="#314252"></path>
                                    <path d="M54.5023 47.3614C54.6365 47.9206 54.3658 48.2126 53.8994 48.471C52.4028 49.3032 50.924 50.1678 49.452 51.0436C49.0762 51.2673 48.857 51.2864 48.6187 50.8557C47.9029 49.5548 47.9017 49.8669 49.0393 49.1902C50.112 48.5537 51.1992 47.9419 52.2764 47.3144C52.4256 47.2403 52.5614 47.1416 52.6779 47.0225C52.8077 46.8681 52.7204 46.5493 53.0392 46.5314C53.4665 46.5068 53.9117 46.4196 54.3121 46.5728C54.6768 46.7093 54.443 47.1008 54.5023 47.3614Z" fill="#314252"></path>
                                    <path d="M54.5107 41.833C54.5107 42.7423 54.5107 42.7423 53.5913 42.7423C52.6719 42.7423 52.6875 42.7423 52.6875 41.805C52.6875 40.9191 52.6942 40.9102 53.5947 40.9102C54.4951 40.9102 54.5107 40.9113 54.5107 41.833Z" fill="#314252"></path>
                                    <path d="M54.5063 44.6129C54.5063 45.5424 54.5063 45.5424 53.4996 45.5435C52.6943 45.5435 52.6864 45.5334 52.6876 44.5648C52.6876 43.7158 52.6954 43.7102 53.6305 43.7113C54.5052 43.708 54.5052 43.708 54.5063 44.6129Z" fill="#314252"></path>
                                    <path d="M25.8919 7.00774C25.7331 7.00774 25.6794 6.90259 25.6111 6.81535C24.7633 5.72141 24.8058 5.56705 26.0004 4.89928C26.3438 4.70801 26.5037 4.7617 26.7028 5.09167C27.4019 6.25384 27.3482 6.44063 26.0765 6.93839C26.0082 6.96523 25.9389 6.98984 25.8919 7.00774Z" fill="#314252"></path>
                                    <path d="M23.4108 8.41403C23.3581 8.3894 23.3091 8.35739 23.2654 8.31895C23.2071 8.24672 23.1551 8.16963 23.1099 8.08853C22.3884 6.91965 22.4321 6.78655 23.7117 6.23846C23.8515 6.17806 24.0025 6.09528 24.1077 6.26418C24.3437 6.64337 24.5651 7.03039 24.7788 7.41964C24.8045 7.48699 24.8045 7.56146 24.7788 7.62881C24.7452 7.75073 23.5898 8.4241 23.4108 8.41403Z" fill="#314252"></path>
                                    <path d="M2.75781 41.5082C2.75781 40.5664 2.75781 40.5664 3.6437 40.5664C4.52959 40.5664 4.51728 40.5664 4.51728 41.4612C4.51728 42.3997 4.51728 42.3997 3.6314 42.3997C2.74551 42.3997 2.75893 42.4031 2.75781 41.5082Z" fill="#314252"></path>
                                    <path d="M2.75781 44.2659C2.75781 43.3711 2.75781 43.3711 3.62804 43.3711C4.52288 43.3711 4.52288 43.3711 4.51728 44.3084C4.51728 45.2033 4.51728 45.2033 3.59113 45.2033C2.75781 45.1966 2.75781 45.1966 2.75781 44.2659Z" fill="#314252"></path>
                                 </g>
                                 <defs>
                                    <clipPath id="cpmobileappdevel7">
                                       <rect width="57.2695" height="56" fill="white" transform="translate(0 0.28125)"></rect>
                                    </clipPath>
                                 </defs>
                              </svg>
                              <h4>Blockchain</h4>
                           </div>
                           <p>Protect your business with a decentralized ecosystem using our blockchain
                              technology-enabled application services.
                           </p>
                        </div>
                        <div class="robust-content">
                           <div class="robust-flex">
                              <svg width="51" height="54" viewBox="0 0 51 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#cpmobileappdevel8)">
                                    <path d="M10.3079 53.2806C8.56386 52.638 7.89639 51.6761 7.89639 49.8036C7.89639 46.6487 7.8881 43.4937 7.90468 40.3401C7.90468 39.8993 7.77754 39.6671 7.3519 39.4875C5.14081 38.5505 2.9532 37.5735 0.749016 36.6255C0.222498 36.3975 -0.00137558 36.0506 6.35636e-06 35.4688C0.0165896 31.6242 0.0165896 27.7802 6.35636e-06 23.9365C6.35636e-06 23.3022 0.255665 22.9623 0.818113 22.7218C3.02921 21.7793 5.21405 20.8009 7.41962 19.8571C7.77892 19.7037 7.90053 19.5019 7.89915 19.1191C7.88533 15.8785 7.88948 12.6378 7.89224 9.39719C7.89224 7.32429 9.19817 6.00316 11.289 5.99901C16.5404 5.98888 21.7918 5.98657 27.0431 5.9921C27.8128 5.9921 27.8032 5.9921 27.817 5.22236C27.8308 4.45262 27.7603 3.70223 27.8875 2.95184C28.0059 2.21027 28.3843 1.53502 28.955 1.04688C29.5257 0.558742 30.2514 0.289554 31.0024 0.287469C36.5817 0.279177 42.1606 0.279177 47.739 0.287469C48.1502 0.28362 48.5581 0.36152 48.9389 0.516644C49.3197 0.671768 49.6659 0.901023 49.9574 1.19109C50.2489 1.48116 50.4798 1.82626 50.6368 2.20634C50.7938 2.58642 50.8737 2.9939 50.8718 3.40512C50.8829 6.49144 50.8829 9.57776 50.8718 12.6641C50.8718 14.5808 49.4982 15.9572 47.5718 15.9628C43.6167 15.9738 39.6616 15.9628 35.7065 15.9628C34.9049 15.9628 34.9036 15.9628 34.9036 16.7394V40.6842C34.9036 41.4581 34.9036 41.4595 35.7051 41.4595H44.5135C44.7032 41.4497 44.8934 41.458 45.0815 41.4844C45.4961 41.5714 45.7725 41.8119 45.7849 42.2582C45.8051 42.4593 45.7476 42.6604 45.6243 42.8205C45.501 42.9805 45.3211 43.0874 45.1216 43.1192C44.9181 43.1578 44.7107 43.1722 44.5039 43.162C41.5161 43.162 38.5284 43.1731 35.5406 43.1537C35.0459 43.1537 34.8856 43.2919 34.8925 43.795C34.9188 45.7421 34.9036 47.6906 34.9036 49.6392C34.9036 51.6609 34.3508 52.4956 32.4907 53.2792L10.3079 53.2806ZM21.514 36.9461C22.5408 38.4206 23.5261 39.8329 24.5073 41.2494C24.6454 41.4512 24.8431 41.4636 25.06 41.4636C27.6 41.4636 30.1386 41.4553 32.6773 41.4636C33.0849 41.4636 33.2162 41.3254 33.2162 40.9219C33.207 32.9758 33.2019 25.0296 33.201 17.0835C33.201 16.9453 33.2743 16.7367 33.0918 16.6689C32.9536 16.6206 32.8514 16.7809 32.7491 16.8666C31.6684 17.7796 30.5887 18.6939 29.5099 19.6097C29.1823 19.8861 28.8714 20.2233 28.3698 19.9911C27.8681 19.7589 27.8432 19.3112 27.8308 18.8524C27.8308 18.681 27.8308 18.5083 27.8308 18.3356C27.8308 14.9926 27.8239 11.6484 27.8377 8.30408C27.8377 7.84113 27.7092 7.67806 27.2214 7.67944C21.9534 7.69603 16.6869 7.68912 11.4189 7.69326C10.1227 7.69326 9.62243 8.21563 9.61413 9.52433C9.61413 12.3343 9.61413 15.1442 9.61413 17.9541C9.61413 18.8786 9.64177 18.9215 10.4336 18.4696C11.2255 18.0177 11.9538 17.9845 12.7055 18.4917C13.1008 18.757 13.2445 19.1495 13.0648 19.5599C12.9882 19.7555 12.8377 19.9131 12.6458 19.9987C12.454 20.0843 12.2362 20.091 12.0394 20.0174C11.0873 19.7133 10.4696 20.4402 9.71778 20.7456C9.57959 20.8009 9.61966 20.993 9.61966 21.1284C9.61966 22.8172 9.61966 24.5059 9.61966 26.1946C9.60943 26.3146 9.64138 26.4343 9.71 26.5332C9.77862 26.6321 9.87961 26.7039 9.99555 26.7363C10.3645 26.8842 10.7294 27.0404 11.0859 27.2173C11.5516 27.4467 11.7299 27.8958 11.5544 28.3366C11.3789 28.7775 10.9228 28.9447 10.4309 28.7775C10.3493 28.7498 10.2706 28.7139 10.1904 28.6821C9.62795 28.4582 9.62381 28.4582 9.62381 29.0538C9.62381 31.8122 9.62381 34.5701 9.62381 37.3275C9.62381 38.6403 9.62381 38.6376 10.8054 39.153C11.278 39.3589 11.7105 39.5828 12.2744 39.3244C12.6572 39.1489 13.0248 39.4018 13.1989 39.7873C13.3633 40.1508 13.3136 40.5336 12.9695 40.7616C12.3573 41.1762 11.7147 41.5106 10.9532 41.0643C10.6879 40.9095 10.3783 40.8279 10.1047 40.6828C9.70396 40.4714 9.61137 40.6027 9.6169 41.0173C9.63486 42.6037 9.6473 44.1957 9.6169 45.7753C9.60584 46.3128 9.78549 46.4386 10.2982 46.4358C14.0626 46.4165 17.827 46.4262 21.5928 46.4262H32.5239C33.2342 46.4262 33.2356 46.4262 33.2369 45.7006C33.2369 45.0802 33.2093 44.4569 33.2466 43.8392C33.277 43.3251 33.1084 43.1482 32.575 43.1551C29.9839 43.18 27.3927 43.1468 24.803 43.1786C24.1023 43.1883 23.6422 42.9589 23.2566 42.3757C22.3238 40.9675 21.3219 39.6022 20.3863 38.1967C20.1251 37.8056 19.8847 37.7531 19.4977 37.9646C19.1925 38.1251 18.8761 38.2637 18.5511 38.3792C18.0661 38.5616 17.6349 38.3791 17.4359 37.9314C17.2507 37.5168 17.4069 37.0912 17.8505 36.8452C18.1099 36.7085 18.3776 36.588 18.652 36.4845C18.9643 36.3615 18.9837 36.1971 18.7902 35.9317C18.4641 35.4868 18.1393 35.039 17.8546 34.5678C17.7442 34.3881 17.7076 34.1727 17.7524 33.9666C17.7972 33.7605 17.92 33.5798 18.0951 33.4622C18.1779 33.3983 18.2728 33.352 18.3741 33.3259C18.4754 33.2998 18.5809 33.2945 18.6843 33.3104C18.7876 33.3263 18.8867 33.363 18.9755 33.4183C19.0642 33.4736 19.1408 33.5464 19.2006 33.6322C19.5834 34.1186 19.9192 34.6424 20.2771 35.1523C20.4499 35.3969 20.624 35.6388 20.8299 35.9207C20.9634 35.645 21.1669 35.4091 21.42 35.2366C21.6964 35.0611 21.6038 34.6963 21.7738 34.4558C21.9673 34.1794 22.2174 34.0136 22.5573 34.0509C22.714 34.0629 22.8638 34.1199 22.9889 34.215C23.1139 34.3101 23.2088 34.4393 23.2621 34.5871C23.6214 35.4798 23.276 36.2924 22.3915 36.6808C22.1069 36.7934 21.8133 36.8821 21.514 36.9461ZM29.5223 17.523C30.1566 16.9854 30.8075 16.4824 31.4031 15.9213C32.604 14.7909 34.0219 14.3514 35.6553 14.3625C39.5911 14.3915 43.5324 14.3722 47.464 14.3625C48.6953 14.3625 49.2812 13.789 49.284 12.566C49.2904 9.60218 49.2904 6.63839 49.284 3.67459C49.284 2.41565 48.7091 1.85458 47.4377 1.85458C42.0684 1.85458 36.6992 1.85458 31.3299 1.85458C29.9949 1.85458 29.409 2.44605 29.409 3.781C29.409 8.15897 29.409 12.5351 29.409 16.9094C29.4159 17.1084 29.3551 17.3046 29.5223 17.523ZM21.4242 48.119H10.388C10.2332 48.119 10.0771 48.119 9.92231 48.1273C9.76753 48.1356 9.62933 48.1881 9.62933 48.3553C9.62933 49.1278 9.49114 49.9128 9.70672 50.6673C9.90849 51.3583 10.4046 51.6195 11.3471 51.6195H31.5012C31.6394 51.6195 31.7776 51.6195 31.9158 51.6084C32.6538 51.5518 33.1596 51.0446 33.1969 50.3053C33.219 49.8064 33.2065 49.3047 33.2052 48.8059C33.2052 48.1149 33.2052 48.1149 32.5142 48.1149L21.4242 48.119ZM1.73019 30.0654C1.73019 31.5994 1.73019 33.1333 1.73019 34.6673C1.73019 34.9893 1.78961 35.2117 2.12819 35.3582C3.90536 36.1155 5.67746 36.8867 7.44449 37.6716C7.76372 37.8098 7.90882 37.8098 7.90744 37.4021C7.89915 34.2992 7.89915 31.1972 7.90744 28.0962C7.92148 27.9683 7.89053 27.8396 7.8199 27.7322C7.74928 27.6247 7.6434 27.5453 7.5205 27.5075C5.72398 26.735 3.94129 25.9583 2.15997 25.1582C1.77994 24.9896 1.72743 25.1139 1.73019 25.4622C1.73572 26.9989 1.73019 28.5329 1.73019 30.0654ZM2.96011 23.6519C4.59771 24.3691 6.09711 25.0227 7.59236 25.6833C7.8342 25.7897 7.9033 25.6999 7.9033 25.4691C7.9033 24.2788 7.9033 23.0899 7.9033 21.9023C7.9033 21.6467 7.81071 21.5499 7.55505 21.6605C6.07085 22.3059 4.58527 22.9485 2.96011 23.6519Z" fill="#314252"></path>
                                    <path d="M42.6047 37.6921C41.9137 37.6921 41.2227 37.7004 40.5318 37.6921C39.9306 37.6824 39.5506 37.348 39.5547 36.8546C39.5547 36.3834 39.9251 36.0117 40.482 36.0047C41.9146 35.9854 43.3477 35.9854 44.7812 36.0047C45.3575 36.0117 45.7569 36.4193 45.7375 36.885C45.7168 37.3798 45.3436 37.6866 44.7273 37.6935C44.0211 37.7004 43.3136 37.6921 42.6047 37.6921Z" fill="#314252"></path>
                                    <path d="M39.9251 35.0019C39.2175 35.0019 38.51 35.0019 37.8038 35.0019C37.2276 34.9937 36.853 34.6786 36.8365 34.2115C36.8199 33.7444 37.1971 33.3243 37.7748 33.316C39.2231 33.2957 40.6718 33.2957 42.121 33.316C42.6862 33.3243 43.0137 33.6946 42.9971 34.1949C42.9806 34.6952 42.6378 34.9923 42.0533 35.0006C41.3402 35.0102 40.6326 35.0019 39.9251 35.0019Z" fill="#314252"></path>
                                    <path d="M39.8932 40.3823C39.1857 40.3823 38.4795 40.3906 37.772 40.3823C37.2192 40.374 36.8668 40.0728 36.8295 39.6209C36.8229 39.5036 36.8404 39.3862 36.8808 39.2759C36.9213 39.1656 36.9839 39.0648 37.0648 38.9796C37.1457 38.8944 37.2432 38.8267 37.3513 38.7806C37.4594 38.7345 37.5757 38.711 37.6932 38.7116C39.1746 38.6821 40.657 38.6821 42.1403 38.7116C42.711 38.724 43.015 39.1109 42.9846 39.6167C42.957 40.099 42.6391 40.3726 42.0656 40.3809C41.3415 40.3906 40.6174 40.3823 39.8932 40.3823Z" fill="#314252"></path>
                                    <path d="M44.5105 35.0144C44.3296 35.008 44.1497 34.9853 43.9729 34.9467C43.8354 34.9082 43.7104 34.8345 43.6102 34.7328C43.5101 34.6311 43.4383 34.505 43.4019 34.367C43.3656 34.2289 43.366 34.0838 43.4032 33.946C43.4403 33.8081 43.5128 33.6824 43.6136 33.5813C44.0005 33.1833 45.0867 33.1792 45.4847 33.5813C45.5892 33.6839 45.6643 33.8126 45.7022 33.954C45.7401 34.0955 45.7394 34.2445 45.7001 34.3856C45.6609 34.5266 45.5846 34.6546 45.4792 34.7562C45.3737 34.8578 45.243 34.9293 45.1005 34.9632C44.9055 34.9962 44.7082 35.0133 44.5105 35.0144Z" fill="#314252"></path>
                                    <path d="M44.5291 40.3887C44.3743 40.3907 44.2196 40.3815 44.0661 40.3611C43.8842 40.3358 43.7169 40.2476 43.5932 40.1118C43.4695 39.976 43.3973 39.8011 43.389 39.6176C43.3668 39.4448 43.4048 39.2697 43.4967 39.1216C43.5886 38.9736 43.7287 38.8618 43.8934 38.805C44.2972 38.6403 44.7471 38.628 45.1593 38.7705C45.3459 38.82 45.508 38.9359 45.6151 39.0964C45.7222 39.257 45.767 39.4512 45.7411 39.6425C45.6968 40.064 45.4232 40.3183 44.9948 40.3749C44.8402 40.3846 44.6851 40.3846 44.5305 40.3749L44.5291 40.3887Z" fill="#314252"></path>
                                    <path d="M37.9902 37.6833C37.8522 37.6931 37.7136 37.6931 37.5756 37.6833C37.1486 37.6225 36.8846 37.3682 36.8349 36.9453C36.8108 36.7633 36.8516 36.5786 36.9501 36.4237C37.0487 36.2687 37.1987 36.1535 37.3738 36.0982C37.7975 35.9357 38.2673 35.9416 38.6867 36.1148C38.8516 36.1732 38.9911 36.2872 39.0811 36.4373C39.1712 36.5873 39.2061 36.764 39.18 36.937C39.1721 37.1205 39.0997 37.2952 38.9756 37.4304C38.8515 37.5657 38.6836 37.6528 38.5015 37.6764C38.331 37.6974 38.1592 37.7067 37.9874 37.704L37.9902 37.6833Z" fill="#314252"></path>
                                    <path d="M21.2212 10.6738C20.4639 10.6738 19.7011 10.6835 18.9479 10.6738C18.5029 10.6655 18.1312 10.5038 17.9888 10.0381C17.8299 9.52264 18.2182 8.99751 18.818 8.9906C20.421 8.96987 22.0227 8.97401 23.6244 8.9906C24.1495 8.9906 24.513 9.35681 24.5171 9.80594C24.5157 10.0339 24.4242 10.2521 24.2628 10.4131C24.1013 10.5741 23.8828 10.6648 23.6548 10.6655C22.95 10.7014 22.2424 10.6807 21.5363 10.6849H21.2253L21.2212 10.6738Z" fill="#314252"></path>
                                    <path d="M23.3498 24.1063C23.3381 24.2661 23.3178 24.4253 23.289 24.583C23.166 25.1551 22.6243 25.4481 22.1061 25.1828C21.9837 25.1057 21.8449 25.0584 21.7009 25.0447C21.5569 25.0311 21.4117 25.0514 21.2769 25.104C20.796 25.2809 20.3621 25.104 20.1894 24.6894C20.0934 24.5017 20.0753 24.2838 20.1389 24.0828C20.2026 23.8818 20.3428 23.714 20.5293 23.6157C20.7162 23.4959 20.8491 23.3081 20.8997 23.0919C21.0876 22.5184 21.5077 22.3263 22.0757 22.5253C23.1481 22.8984 23.3526 23.1417 23.3498 24.1063Z" fill="#314252"></path>
                                    <path d="M19.4022 25.391C19.4027 25.5476 19.3583 25.7011 19.2743 25.8333C19.1903 25.9656 19.0702 26.071 18.9282 26.1372C18.4128 26.3763 17.8973 26.6181 17.3667 26.8199C17.2633 26.8644 17.1519 26.8874 17.0394 26.8875C16.9269 26.8875 16.8155 26.8647 16.7121 26.8204C16.6086 26.776 16.5153 26.7111 16.4378 26.6295C16.3602 26.5479 16.3001 26.4514 16.2611 26.3459C16.2194 26.2505 16.1971 26.1478 16.1954 26.0437C16.1937 25.9397 16.2127 25.8363 16.2513 25.7397C16.2899 25.643 16.3472 25.5549 16.4201 25.4806C16.4929 25.4063 16.5798 25.3472 16.6757 25.3067C17.1961 25.0387 17.7329 24.8038 18.2829 24.6033C18.4092 24.5561 18.5451 24.5404 18.6788 24.5575C18.8125 24.5747 18.9401 24.6243 19.0503 24.7018C19.1606 24.7794 19.2503 24.8828 19.3116 25.0028C19.3729 25.1229 19.404 25.2561 19.4022 25.391Z" fill="#314252"></path>
                                    <path d="M13.2563 28.5905C12.7754 28.5628 12.4935 28.3845 12.3636 28.0266C12.2872 27.8585 12.276 27.6679 12.3322 27.492C12.3883 27.316 12.5079 27.1672 12.6676 27.0745C13.2276 26.7356 13.8279 26.4682 14.4544 26.2785C14.6297 26.2192 14.8205 26.2257 14.9913 26.2966C15.1621 26.3675 15.3014 26.4981 15.3831 26.664C15.5766 26.9957 15.589 27.3702 15.2974 27.6134C14.6811 28.1261 13.9058 28.3348 13.2563 28.5905Z" fill="#314252"></path>
                                    <path d="M23.3535 31.6707C23.3767 31.9976 23.3525 32.3263 23.2816 32.6463C23.2428 32.8263 23.142 32.987 22.9967 33.1001C22.8515 33.2133 22.671 33.2718 22.487 33.2654C22.0724 33.2779 21.767 33.0761 21.6786 32.6781C21.5238 32.0037 21.5238 31.3031 21.6786 30.6287C21.7725 30.2335 22.0849 30.0386 22.4981 30.058C22.6821 30.0561 22.861 30.1186 23.0039 30.2346C23.1467 30.3507 23.2445 30.5131 23.2802 30.6936C23.3502 31.0143 23.3749 31.3432 23.3535 31.6707Z" fill="#314252"></path>
                                    <path d="M21.5859 27.5247C21.5894 27.2604 21.612 26.9967 21.6537 26.7356C21.7435 26.2989 22.0378 26.0446 22.4953 26.0571C22.9527 26.0695 23.2277 26.3335 23.2982 26.7826C23.3931 27.3777 23.3931 27.984 23.2982 28.5791C23.2794 28.7709 23.1904 28.9489 23.0483 29.079C22.9062 29.2091 22.7211 29.2821 22.5284 29.2839C22.0821 29.3115 21.7863 29.0586 21.6537 28.6316C21.5542 28.3096 21.6108 27.9807 21.5859 27.5247Z" fill="#314252"></path>
                                    <path d="M20.356 22.2982C20.356 22.869 19.8129 23.3236 19.2988 23.1509C18.7451 22.9602 18.2061 22.7293 17.6861 22.4599C17.4998 22.3643 17.3583 22.1996 17.2917 22.0011C17.2251 21.8026 17.2387 21.5859 17.3296 21.3972C17.3708 21.2977 17.4314 21.2073 17.5077 21.1313C17.584 21.0552 17.6745 20.995 17.7742 20.954C17.8738 20.9131 17.9806 20.8922 18.0883 20.8926C18.196 20.893 18.3026 20.9147 18.402 20.9564C18.8842 21.1374 19.3555 21.3488 19.8267 21.5589C19.9754 21.6201 20.1039 21.7218 20.1975 21.8526C20.2911 21.9833 20.346 22.1377 20.356 22.2982Z" fill="#314252"></path>
                                    <path d="M14.574 19.3203C15.1973 19.5469 15.8979 19.7529 16.4769 20.1909C16.7906 20.4286 16.8473 20.8114 16.6414 21.1707C16.4355 21.53 16.1232 21.7042 15.7307 21.5922C15.1342 21.4268 14.5632 21.1803 14.0337 20.8598C13.8716 20.7725 13.7475 20.6285 13.685 20.4553C13.6225 20.2822 13.6261 20.0921 13.6951 19.9215C13.8264 19.54 14.1097 19.3507 14.574 19.3203Z" fill="#314252"></path>
                                    <path d="M14.6947 40.0198C14.2303 39.9894 13.9457 39.8111 13.8296 39.4449C13.7135 39.0787 13.766 38.7304 14.0949 38.5204C14.6331 38.177 15.2208 37.9184 15.8375 37.7534C16.0071 37.707 16.1876 37.7211 16.348 37.7932C16.5083 37.8653 16.6386 37.991 16.7164 38.1486C16.9154 38.4858 16.8906 38.8479 16.6073 39.0966C16.0407 39.5955 15.3083 39.7724 14.6947 40.0198Z" fill="#314252"></path>
                                    <path d="M40.4472 8.11635C40.4472 6.98039 40.4472 5.84444 40.4472 4.70711C40.4472 3.86966 40.7236 3.60156 41.5735 3.60156C42.1083 3.60156 42.6431 3.60156 43.1779 3.60156C44.4119 3.61538 45.4166 4.30635 45.816 5.41052C46.2568 6.628 45.9473 8.11082 45.0062 8.80869C44.5253 9.16662 44.5667 9.42919 44.868 9.84238C45.1692 10.2556 45.4498 10.7379 45.7331 11.1898C46.0799 11.7425 46.0413 12.1889 45.6322 12.4653C45.2231 12.7417 44.7685 12.5897 44.3995 12.0106C43.9849 11.357 43.5703 10.6964 43.1558 10.0414C43.0785 9.90753 42.9883 9.78162 42.8863 9.6655C42.7094 9.4817 42.4717 9.50657 42.2534 9.55356C41.9977 9.60746 42.0378 9.82995 42.0364 10.0151C42.0295 10.5679 42.0364 11.1207 42.0281 11.6734C42.0143 12.2663 41.6964 12.6173 41.2155 12.6049C40.7346 12.5924 40.4499 12.2525 40.443 11.6845C40.4306 10.496 40.443 9.30758 40.443 8.11911L40.4472 8.11635ZM42.9098 5.19079C42.0419 5.19079 42.0419 5.19079 42.0419 6.06417V6.83806C42.0419 7.96019 42.4233 8.21999 43.5427 7.87451C43.9573 7.74737 44.2682 7.49862 44.347 7.07713C44.5432 6.04206 44.3055 5.08714 42.9098 5.19079Z" fill="#314252"></path>
                                    <path d="M38.8612 12.5355C38.5116 12.4982 38.2794 12.2674 38.1412 11.9233C37.9505 11.4437 37.7501 10.967 37.5884 10.4791C37.482 10.1737 37.3121 10.0397 36.9804 10.0494C36.3599 10.066 35.7366 10.0673 35.1175 10.0494C34.7624 10.0383 34.5896 10.1986 34.4805 10.5178C34.3188 10.9905 34.1322 11.4534 33.9401 11.915C33.719 12.447 33.3224 12.6502 32.8926 12.4678C32.4628 12.2853 32.2887 11.8666 32.4891 11.3498C33.4026 8.9908 34.3257 6.63598 35.2419 4.27702C35.3898 3.89699 35.6123 3.60125 36.0586 3.60955C36.505 3.61784 36.7206 3.91633 36.8671 4.30051C37.7612 6.61111 38.6636 8.91894 39.5522 11.2323C39.8189 11.9426 39.5093 12.5493 38.8612 12.5355ZM36.0393 6.54201C35.7933 7.16527 35.6026 7.64065 35.4202 8.11742C35.3787 8.22383 35.3055 8.39381 35.4672 8.42421C35.8557 8.49331 36.2533 8.49331 36.6418 8.42421C36.7703 8.40072 36.7164 8.24732 36.6819 8.1575C36.4912 7.66276 36.2908 7.17356 36.0393 6.54201Z" fill="#314252"></path>
                                    <path d="M21.238 50.7207C20.4793 50.7207 19.7178 50.729 18.9605 50.7207C18.358 50.7124 17.9766 50.389 17.9614 49.8984C17.9462 49.4079 18.3207 49.0389 18.9177 49.032C20.4701 49.0154 22.022 49.0154 23.5734 49.032C24.1677 49.0389 24.5408 49.4161 24.5214 49.9054C24.5021 50.3946 24.1221 50.7124 23.514 50.7193C22.7553 50.729 21.9966 50.7221 21.238 50.7207Z" fill="#314252"></path>
                                 </g>
                                 <defs>
                                    <clipPath id="cpmobileappdevel8">
                                       <rect width="50.8677" height="53" fill="white" transform="translate(0 0.28125)"></rect>
                                    </clipPath>
                                 </defs>
                              </svg>
                              <h4>AR/VR/MR</h4>
                           </div>
                           <p>We are here to take your experiences from augmented reality to virtual reality and
                              addition of mixed-reality applications.
                           </p>
                        </div>
                        <div class="robust-content">
                           <div class="robust-flex">
                              <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#cpmobileappdevel9)">
                                    <path d="M52.0403 25.5981V27.0185C51.1309 29.5217 48.0584 29.5353 47.0663 27.4955C46.9606 27.2787 46.7627 27.2502 46.55 27.2502C45.093 27.2502 43.6374 27.2502 42.1805 27.2502C41.8322 27.2502 41.6953 27.3993 41.6994 27.7395C41.7102 28.4836 41.7197 29.2303 41.6994 29.9703C41.6858 30.4135 41.8579 30.5694 42.2943 30.5639C43.6496 30.5477 45.0049 30.5639 46.3602 30.5639C46.6142 30.5482 46.869 30.5757 47.1138 30.6453C47.304 30.6983 47.4706 30.8146 47.5859 30.975C47.7012 31.1354 47.7584 31.3303 47.748 31.5276C47.7539 31.7253 47.6904 31.9188 47.5687 32.0748C47.4469 32.2307 47.2745 32.3391 47.0812 32.3814C46.8834 32.4254 46.6807 32.4436 46.4781 32.4356C45.089 32.4356 43.6998 32.4532 42.3119 32.4356C41.839 32.4275 41.6506 32.5969 41.7048 33.0563C41.7143 33.1404 41.7048 33.2257 41.7048 33.3098C41.7725 34.0931 41.3619 35.092 41.8823 35.6043C42.3797 36.0935 43.3731 35.7398 44.1416 35.7601C45.3763 35.8035 46.615 35.7019 47.8483 35.8144C48.7333 35.8957 49.3012 36.4364 49.4747 37.3052C49.5723 37.808 49.5303 38.3176 49.5194 38.8231C49.5113 39.2134 49.6156 39.4682 49.9775 39.6878C50.4791 39.9803 50.866 40.4352 51.0742 40.9773C51.2825 41.5194 51.2996 42.1163 51.1227 42.6694C50.9572 43.212 50.6226 43.6875 50.1678 44.0264C49.7129 44.3654 49.1616 44.5501 48.5944 44.5536C48.0271 44.5571 47.4736 44.3792 47.0146 44.0458C46.5557 43.7125 46.2152 43.2411 46.0431 42.7006C45.8629 42.1488 45.8745 41.5522 46.076 41.0078C46.2775 40.4633 46.6571 40.003 47.1531 39.7013C47.5447 39.4628 47.6952 39.1945 47.6491 38.7608C47.6295 38.5756 47.6295 38.3889 47.6491 38.2037C47.6925 37.7619 47.5027 37.6101 47.0623 37.6155C45.4702 37.6345 43.8782 37.6345 42.2862 37.6155C41.8322 37.6155 41.7102 37.7863 41.7034 38.2146C41.6668 40.5064 40.2397 41.9349 37.9425 41.966C37.46 41.966 37.3353 42.1517 37.3421 42.6003C37.3624 43.9868 37.3421 45.3733 37.3502 46.7584C37.3502 48.0215 37.2066 47.8792 38.49 47.909C38.9251 47.9185 39.1975 47.8033 39.4387 47.4076C39.9022 46.6323 40.6368 46.2244 41.5421 46.1878C42.1661 46.1607 42.7796 46.355 43.2743 46.7363C43.769 47.1176 44.1131 47.6614 44.2459 48.2717C44.3787 48.882 44.2916 49.5196 43.9999 50.072C43.7083 50.6243 43.231 51.0559 42.6521 51.2905C42.0857 51.5336 41.4508 51.5649 40.8633 51.3785C40.2757 51.1921 39.7749 50.8006 39.4523 50.2754C39.211 49.8864 38.9413 49.7441 38.5036 49.7766C38.1312 49.7997 37.7578 49.7997 37.3854 49.7766C36.2904 49.721 35.633 49.099 35.526 48.0147C35.5002 47.7437 35.4948 47.4726 35.4935 47.2016C35.4935 45.6809 35.4826 44.1589 35.4935 42.6383C35.4935 42.1748 35.3579 41.9511 34.8565 41.9742C34.1463 42.0053 33.4334 41.9972 32.7219 41.9742C32.3085 41.962 32.1486 42.1097 32.154 42.5339C32.1703 43.8892 32.154 45.2445 32.154 46.5903C32.154 46.7597 32.154 46.9291 32.1459 47.0972C32.0998 47.6393 31.7298 48.008 31.2405 48.0174C30.777 48.0269 30.3989 47.6962 30.3122 47.1785C30.2839 46.9779 30.2725 46.7752 30.2783 46.5727C30.2783 45.2174 30.2688 43.8621 30.2783 42.5149C30.2783 42.1273 30.1319 41.966 29.7362 41.9728C29.0084 41.9891 28.2792 41.9945 27.5514 41.9728C27.115 41.9593 26.947 42.1083 26.9537 42.5583C26.9727 43.8933 26.9754 45.2296 26.9537 46.5646C26.9338 46.7545 26.9717 46.946 27.0623 47.114C27.153 47.2821 27.2923 47.4189 27.462 47.5065C27.8624 47.7359 28.1895 48.0741 28.4054 48.4819C28.6213 48.8897 28.7171 49.3504 28.6817 49.8105C28.6248 50.8514 28.0962 51.6252 27.153 52.0996C27.0174 52.1687 26.8819 52.2351 26.7396 52.2934H25.307C22.8675 51.1278 22.6602 48.9282 24.83 47.3357C24.9128 47.2783 24.9791 47.2001 25.0221 47.109C25.0652 47.0179 25.0835 46.9171 25.0753 46.8166C25.0753 45.3624 25.0753 43.9095 25.0753 42.4553C25.0753 42.1097 24.9316 41.9688 24.5874 41.9728C23.842 41.9837 23.0966 41.9932 22.3525 41.9728C21.912 41.9593 21.7494 42.1246 21.7548 42.5637C21.7711 43.9326 21.7548 45.3014 21.7548 46.6716C21.77 46.9254 21.7369 47.1797 21.6572 47.4211C21.6026 47.5688 21.5104 47.6997 21.3899 47.801C21.2693 47.9023 21.1245 47.9705 20.9697 47.9989C20.8148 48.0273 20.6552 48.015 20.5065 47.9631C20.3579 47.9113 20.2252 47.8216 20.1217 47.703C19.9062 47.455 19.8764 47.1609 19.8764 46.8465C19.8764 45.4099 19.8669 43.9732 19.8832 42.5366C19.8832 42.1178 19.7354 41.9606 19.318 41.9742C18.6756 41.9945 18.0305 41.9742 17.3881 41.9742C16.5518 41.9742 16.5532 41.9742 16.5491 42.8294C16.5396 44.5519 16.5654 46.2772 16.5044 47.9998C16.4651 49.0841 15.7495 49.7116 14.6571 49.7617C14.268 49.782 13.878 49.782 13.4889 49.7617C13.3146 49.7382 13.1373 49.7698 12.9818 49.8519C12.8263 49.934 12.7003 50.0626 12.6215 50.2198C12.392 50.6193 12.0568 50.9477 11.6527 51.1689C11.2485 51.3901 10.7912 51.4955 10.331 51.4734C9.71888 51.4585 9.13072 51.2325 8.66616 50.8336C8.20159 50.4347 7.88919 49.8874 7.78186 49.2846C7.67453 48.6818 7.77887 48.0603 8.0772 47.5256C8.37554 46.9909 8.84954 46.5757 9.41891 46.3504C9.98781 46.1118 10.6235 46.0853 11.2102 46.2759C11.797 46.4664 12.2959 46.8613 12.6161 47.3886C12.8587 47.7735 13.127 47.9307 13.5648 47.8833C13.7499 47.8629 13.9367 47.8629 14.1218 47.8833C14.5717 47.9266 14.71 47.7247 14.7059 47.291C14.6869 45.7189 14.6869 44.1467 14.7059 42.5746C14.7059 42.1192 14.5704 41.9525 14.1001 41.9457C11.8042 41.9159 10.3785 40.4901 10.3473 38.1902C10.3405 37.7063 10.1535 37.5884 9.70759 37.5952C8.31977 37.6155 6.93059 37.5952 5.54141 37.6033C4.27827 37.6033 4.42329 37.461 4.39212 38.7445C4.38263 39.1796 4.50325 39.4479 4.89629 39.6837C5.67423 40.1472 6.07946 40.8805 6.11605 41.7844C6.13894 42.3992 5.94786 43.0028 5.57541 43.4924C5.20295 43.982 4.67218 44.3273 4.07362 44.4693C3.45824 44.6114 2.81241 44.5307 2.25088 44.2416C1.68935 43.9525 1.24848 43.4738 1.00659 42.8904C0.766633 42.3238 0.737495 41.69 0.924449 41.1037C1.1114 40.5175 1.50209 40.0176 2.02577 39.6946C2.36053 39.4845 2.55705 39.2731 2.52587 38.8556C2.49742 38.4337 2.49742 38.0104 2.52587 37.5884C2.5828 36.6506 3.15744 35.954 3.98688 35.8266C4.32214 35.7782 4.66059 35.7556 4.99929 35.7588C6.54026 35.752 8.08123 35.7588 9.62221 35.7588C10.2822 35.7588 10.3256 35.7127 10.3297 35.0811C10.3297 34.4035 10.308 33.7258 10.3297 33.0482C10.35 32.586 10.186 32.4207 9.71572 32.4288C8.34416 32.4519 6.9726 32.437 5.60104 32.4288C4.72823 32.4288 4.2864 32.1225 4.27285 31.5181C4.2593 30.9136 4.73636 30.5599 5.61866 30.5572C7.00784 30.5572 8.39702 30.5477 9.78484 30.5572C10.1738 30.5572 10.3364 30.4121 10.327 30.015C10.3107 29.2886 10.3053 28.5608 10.327 27.8344C10.3405 27.3993 10.1914 27.2313 9.74012 27.238C8.38482 27.257 7.02952 27.257 5.67423 27.238C5.50046 27.2202 5.32532 27.2546 5.17126 27.337C5.0172 27.4193 4.89125 27.5458 4.80955 27.7002C4.52722 28.1788 4.09685 28.5525 3.58342 28.765C3.06999 28.9774 2.50138 29.0171 1.96343 28.8779C0.946955 28.6326 0.349269 27.9428 -0.0234375 27.0144V25.5981C0.873769 23.1085 3.9408 23.0705 4.9505 25.1197C5.05757 25.3366 5.25273 25.3677 5.46551 25.3677C6.92246 25.3677 8.3794 25.3677 9.83634 25.3677C10.1847 25.3677 10.3215 25.2187 10.3175 24.8785C10.3066 24.1344 10.2971 23.3876 10.3175 22.6463C10.331 22.2045 10.1589 22.0486 9.7225 22.054C8.3672 22.0703 7.01191 22.054 5.65661 22.054C5.40264 22.0698 5.14784 22.0423 4.90306 21.9727C4.71264 21.9202 4.54584 21.8043 4.43026 21.6441C4.31468 21.4839 4.25724 21.289 4.26743 21.0918C4.26181 20.8939 4.32531 20.7003 4.44701 20.5442C4.5687 20.3882 4.741 20.2794 4.93424 20.2366C5.14088 20.1934 5.35248 20.1788 5.56309 20.1932C6.95092 20.1932 8.3401 20.1756 9.72927 20.1932C10.2009 20.2013 10.3676 20.0333 10.3419 19.5725C10.3134 19.067 10.3419 18.5587 10.3419 18.0505C10.3337 16.7819 10.4923 16.8727 9.1221 16.8605C7.47948 16.8456 5.83415 16.9324 4.1956 16.8117C3.31195 16.7467 2.73866 16.187 2.56924 15.3209C2.49749 14.8355 2.48384 14.3432 2.52859 13.8545C2.54891 13.4154 2.39983 13.1524 2.01899 12.9126C1.53184 12.6122 1.15923 12.1575 0.96052 11.6208C0.761813 11.0841 0.74845 10.4964 0.92256 9.95124C1.08895 9.41378 1.42137 8.94286 1.87208 8.60611C2.3228 8.26935 2.86863 8.08407 3.43121 8.07687C4.00337 8.06848 4.56297 8.24489 5.02688 8.57988C5.49079 8.91487 5.83426 9.39058 6.00628 9.93633C6.18442 10.4802 6.17538 11.0681 5.9806 11.6063C5.78582 12.1444 5.41651 12.6019 4.93153 12.9058C4.51003 13.1768 4.33655 13.4642 4.40025 13.9345C4.40636 14.0356 4.40636 14.1369 4.40025 14.238C4.40025 15.0078 4.40025 15.0092 5.14837 15.0092H9.56935C10.3215 15.0092 10.3215 15.0092 10.3364 14.2529C10.369 12.613 11.3529 11.2713 12.86 10.8213C13.2995 10.6914 13.7575 10.6355 14.2153 10.656C14.5175 10.6668 14.6991 10.5652 14.6978 10.2264C14.6978 8.53496 14.6978 6.83812 14.6978 5.15485C14.6978 4.97595 14.668 4.77536 14.462 4.76317C14.0068 4.73109 13.55 4.72883 13.0945 4.75639C12.7746 4.77943 12.7204 5.11961 12.5673 5.32968C12.2429 5.79562 11.7774 6.14504 11.2394 6.32647C10.7015 6.50789 10.1195 6.51172 9.57915 6.33739C9.03885 6.16306 8.56882 5.81979 8.23833 5.35816C7.90785 4.89654 7.73437 4.34096 7.74348 3.7733C7.75259 3.20563 7.94379 2.65591 8.28891 2.20511C8.63403 1.75432 9.11482 1.4263 9.66045 1.26939C10.2061 1.11248 10.7877 1.13498 11.3195 1.33356C11.8514 1.53215 12.3054 1.89632 12.6147 2.37242C12.8492 2.73022 13.0958 2.91454 13.5173 2.85762C13.6694 2.84881 13.8219 2.84881 13.9741 2.85762C16.007 2.85762 16.5573 3.416 16.56 5.45843C16.56 6.84535 16.56 8.23137 16.56 9.61648C16.56 9.75201 16.5708 9.88754 16.56 10.0231C16.5139 10.5083 16.7294 10.6872 17.2132 10.6655C17.8732 10.637 18.5346 10.6655 19.1947 10.6587C19.8547 10.6519 19.8886 10.6424 19.8886 9.98105C19.8886 8.6628 19.8886 7.34455 19.8886 6.0263C19.8886 5.87315 19.8886 5.72136 19.8886 5.56957C19.9279 5.02745 20.2721 4.64932 20.7641 4.62086C21.2561 4.5924 21.641 4.93393 21.7277 5.47741C21.754 5.67821 21.7639 5.88081 21.7575 6.08322C21.7575 7.41955 21.7684 8.75451 21.7575 10.0895C21.7575 10.4961 21.8931 10.6763 22.32 10.6628C22.9976 10.6411 23.6753 10.6628 24.3529 10.6628C25.0645 10.6628 25.0739 10.6519 25.0753 9.96208C25.0753 8.71114 25.059 7.45885 25.0848 6.20927C25.0943 5.71187 24.9845 5.3866 24.5196 5.08979C23.3622 4.35251 23.0383 2.89692 23.6766 1.69206C23.9775 1.12474 24.4749 0.686548 25.0757 0.459529C25.6764 0.232511 26.3393 0.232232 26.9402 0.458746C27.9702 0.849071 28.5543 1.63379 28.6614 2.7126C28.7658 3.76025 28.3158 4.59782 27.4267 5.15214C27.2716 5.23215 27.1436 5.35633 27.0589 5.50901C26.9742 5.6617 26.9367 5.83604 26.951 6.01004C26.9718 7.36534 26.9718 8.71747 26.951 10.0664C26.951 10.4974 27.0866 10.6817 27.5365 10.6655C28.2291 10.6397 28.9243 10.6655 29.6196 10.6573C30.2336 10.6573 30.2688 10.6208 30.2701 9.9797C30.2701 8.64519 30.2701 7.30977 30.2701 5.97345C30.2541 5.71952 30.2858 5.46483 30.3637 5.22261C30.4273 5.0465 30.5437 4.89428 30.697 4.78669C30.8502 4.67911 31.0329 4.62138 31.2202 4.62138C31.4075 4.62138 31.5902 4.67911 31.7435 4.78669C31.8967 4.89428 32.0131 5.0465 32.0768 5.22261C32.1408 5.43312 32.1643 5.65388 32.1459 5.87315C32.1459 7.27588 32.1567 8.67997 32.1459 10.0827C32.1459 10.4893 32.2814 10.6682 32.7015 10.6546C33.3955 10.633 34.0907 10.6546 34.7846 10.6546C35.4284 10.6546 35.4772 10.6072 35.4785 9.96073C35.4785 8.43873 35.4785 6.91673 35.4785 5.39609C35.4785 5.09185 35.4948 4.78783 35.5273 4.48533C35.5573 4.10252 35.7141 3.74064 35.9728 3.4569C36.2315 3.17315 36.5774 2.98374 36.9558 2.91861C37.4979 2.8007 38.0401 2.8522 38.5822 2.86169C38.7471 2.87713 38.9128 2.84261 39.0578 2.76261C39.2029 2.6826 39.3205 2.56081 39.3954 2.41308C39.6262 2.00342 39.9679 1.66712 40.3812 1.44275C40.7944 1.21838 41.2626 1.11502 41.7319 1.14453C42.3434 1.16637 42.9285 1.39885 43.3882 1.80261C43.848 2.20637 44.1541 2.75659 44.2547 3.36013C44.3553 3.96367 44.2443 4.58343 43.9404 5.1145C43.6365 5.64556 43.1584 6.05529 42.5871 6.27432C42.0147 6.50245 41.3796 6.51856 40.7964 6.31976C40.2131 6.12096 39.7201 5.72032 39.4062 5.19008C39.188 4.835 38.9468 4.6832 38.5483 4.72793C38.3802 4.74555 38.2095 4.72793 38.0401 4.72793C37.3624 4.72793 37.3461 4.74148 37.3461 5.40558C37.3461 6.89369 37.3461 8.38136 37.3461 9.86857C37.3461 10.6397 37.3461 10.6397 38.1322 10.6573C39.783 10.6953 41.1396 11.7199 41.5638 13.2527C41.6787 13.6778 41.7281 14.1179 41.7102 14.5579C41.7007 14.8398 41.8064 15.0092 42.1168 15.0078C43.8272 15.0078 45.538 15.0078 47.2493 15.0078C47.435 15.0078 47.6125 14.9523 47.6206 14.7449C47.6518 14.2904 47.6478 13.8341 47.6084 13.3801C47.5719 13.0603 47.2019 13.0047 46.9782 12.838C46.6891 12.6226 46.4473 12.35 46.2679 12.0372C46.0884 11.7244 45.9752 11.3781 45.9352 11.0197C45.8951 10.6614 45.9292 10.2986 46.0352 9.95392C46.1412 9.60925 46.3168 9.29004 46.5513 9.01608C46.7865 8.74361 47.0743 8.52143 47.3974 8.36284C47.7205 8.20425 48.0723 8.11253 48.4317 8.09317C48.7911 8.07381 49.1507 8.1272 49.489 8.25016C49.8273 8.37311 50.1373 8.5631 50.4004 8.80872C51.5158 9.86721 51.5808 11.6928 50.357 12.6144C49.5912 13.1918 49.4367 13.803 49.514 14.6257C49.5298 14.81 49.5248 14.9954 49.4991 15.1786C49.3717 16.1436 48.7713 16.7277 47.7995 16.8294C47.5131 16.8569 47.2254 16.8696 46.9376 16.8673C45.4129 16.8673 43.8895 16.8795 42.3648 16.8673C41.9013 16.8673 41.6763 17.0028 41.6994 17.5029C41.7319 18.2118 41.7224 18.9233 41.6994 19.6335C41.6872 20.0401 41.8349 20.2054 42.2604 20.2C43.5981 20.1837 44.9358 20.2 46.2748 20.2C46.4442 20.2 46.6137 20.2 46.7817 20.2C47.3564 20.2352 47.7453 20.5998 47.7548 21.1053C47.763 21.5865 47.4119 21.9646 46.8644 22.0432C46.6623 22.0649 46.459 22.0731 46.2559 22.0676C44.9182 22.0676 43.5792 22.0757 42.2415 22.0676C41.8525 22.0676 41.6912 22.214 41.6994 22.6097C41.7156 23.3375 41.721 24.0639 41.6994 24.7904C41.6858 25.2268 41.843 25.3921 42.2876 25.3867C43.6252 25.3677 44.9643 25.365 46.3019 25.3867C46.7397 25.3948 46.9986 25.258 47.2425 24.8785C47.4916 24.4878 47.8395 24.1698 48.2509 23.9567C48.6624 23.7436 49.1228 23.6429 49.5857 23.665C50.0485 23.687 50.4973 23.8308 50.8867 24.082C51.2761 24.3332 51.5922 24.6827 51.8031 25.0953C51.8858 25.2607 51.9603 25.4314 52.0403 25.5981ZM25.9915 40.0822H37.8788C39.2097 40.0822 39.8182 39.4845 39.8182 38.1753C39.8182 30.2658 39.8182 22.3558 39.8182 14.4454C39.8182 13.1335 39.211 12.5358 37.8828 12.5358H14.157C12.8085 12.5358 12.219 13.1321 12.219 14.4915C12.219 22.3685 12.219 30.245 12.219 38.1211C12.219 39.5021 12.8072 40.0808 14.2045 40.0822H25.9915ZM26.7979 2.94707C26.7979 2.74039 26.7158 2.54217 26.5696 2.39602C26.4235 2.24988 26.2253 2.16777 26.0186 2.16777C25.8119 2.16777 25.6137 2.24988 25.4675 2.39602C25.3214 2.54217 25.2393 2.74039 25.2393 2.94707C25.2393 3.15375 25.3214 3.35197 25.4675 3.49811C25.6137 3.64426 25.8119 3.72636 26.0186 3.72636C26.2253 3.72636 26.4235 3.64426 26.5696 3.49811C26.7158 3.35197 26.7979 3.15375 26.7979 2.94707ZM2.6736 25.5358C2.57331 25.5236 2.47159 25.532 2.37467 25.5606C2.27776 25.5891 2.1877 25.6371 2.11003 25.7017C2.03235 25.7663 1.9687 25.8461 1.92298 25.9362C1.87726 26.0263 1.85044 26.1248 1.84416 26.2256C1.82827 26.3296 1.83444 26.4358 1.86227 26.5372C1.8901 26.6386 1.93897 26.7331 2.0057 26.8144C2.07243 26.8957 2.15553 26.962 2.24958 27.0091C2.34364 27.0562 2.44655 27.0829 2.55163 27.0876C2.76359 27.1029 2.97299 27.0337 3.13401 26.895C3.29504 26.7563 3.39459 26.5595 3.41088 26.3476C3.41196 26.1432 3.33599 25.9458 3.19811 25.7949C3.06022 25.6439 2.87053 25.5505 2.66683 25.5331L2.6736 25.5358ZM50.2093 26.3327C50.2168 26.2321 50.2038 26.1309 50.171 26.0355C50.1382 25.9401 50.0863 25.8523 50.0184 25.7776C49.9506 25.7029 49.8682 25.6428 49.7763 25.601C49.6845 25.5592 49.5851 25.5365 49.4842 25.5344C49.3779 25.5244 49.2708 25.5362 49.1693 25.5693C49.0678 25.6023 48.9742 25.6558 48.8943 25.7265C48.8144 25.7972 48.7498 25.8836 48.7046 25.9803C48.6594 26.0769 48.6346 26.1818 48.6316 26.2885C48.6286 26.3952 48.6476 26.5013 48.6873 26.6004C48.7271 26.6994 48.7867 26.7892 48.8626 26.8643C48.9384 26.9393 49.0289 26.998 49.1284 27.0366C49.2278 27.0753 49.3342 27.0931 49.4408 27.089C49.5414 27.0917 49.6414 27.074 49.7349 27.0369C49.8284 26.9998 49.9134 26.944 49.9846 26.873C50.0559 26.802 50.1119 26.7173 50.1494 26.6239C50.1869 26.5306 50.2049 26.4306 50.2025 26.33L50.2093 26.3327ZM25.9969 48.8794C25.7851 48.891 25.5865 48.9861 25.4447 49.1439C25.303 49.3016 25.2296 49.5092 25.2406 49.721C25.2529 49.9274 25.3465 50.1204 25.5011 50.2576C25.6556 50.3949 25.8583 50.4651 26.0647 50.4529C26.271 50.4407 26.464 50.347 26.6013 50.1925C26.7385 50.0379 26.8087 49.8352 26.7965 49.6289C26.7807 49.4268 26.6899 49.2379 26.5419 49.0992C26.394 48.9606 26.1996 48.8822 25.9969 48.8794ZM11.17 3.77651C11.1707 3.67472 11.1509 3.57381 11.1117 3.47987C11.0725 3.38593 11.0147 3.30089 10.9418 3.22986C10.8689 3.15883 10.7823 3.10329 10.6874 3.06657C10.5924 3.02985 10.491 3.01271 10.3893 3.01619C10.185 3.02554 9.9913 3.11019 9.84566 3.25383C9.70002 3.39747 9.6127 3.58993 9.60052 3.79413C9.60274 3.90009 9.62622 4.00453 9.66956 4.10124C9.7129 4.19796 9.77522 4.28499 9.85283 4.35716C9.93044 4.42934 10.0218 4.48519 10.1214 4.52141C10.221 4.55763 10.3268 4.57347 10.4327 4.568C10.5343 4.56848 10.6349 4.54791 10.7282 4.50758C10.8214 4.46726 10.9054 4.40805 10.9746 4.3337C11.0439 4.25934 11.097 4.17145 11.1306 4.07555C11.1642 3.97966 11.1776 3.87784 11.17 3.77651ZM41.6546 4.57071C41.8598 4.56797 42.0559 4.4858 42.2017 4.34149C42.3475 4.19717 42.4317 4.00195 42.4366 3.79684C42.4244 3.58365 42.3303 3.38343 42.174 3.23796C42.0177 3.0925 41.8112 3.01304 41.5977 3.01619C41.4956 3.01957 41.3952 3.04353 41.3026 3.08663C41.21 3.12973 41.127 3.19109 41.0587 3.26702C40.9904 3.34295 40.9381 3.43189 40.9049 3.52852C40.8718 3.62515 40.8585 3.72748 40.8659 3.82937C40.865 3.93102 40.8853 4.03174 40.9252 4.12521C40.9652 4.21867 41.0241 4.30286 41.0982 4.37248C41.1723 4.4421 41.2599 4.49565 41.3557 4.52976C41.4514 4.56388 41.5532 4.57782 41.6546 4.57071ZM3.46103 9.92278C3.25724 9.93419 3.06484 10.0205 2.92077 10.165C2.77669 10.3096 2.69108 10.5023 2.68038 10.7061C2.67745 10.8121 2.69677 10.9175 2.73708 11.0156C2.77738 11.1137 2.83779 11.2022 2.9144 11.2755C2.99101 11.3488 3.08213 11.4052 3.18188 11.4411C3.28163 11.4771 3.38781 11.4917 3.49356 11.4841C3.59412 11.4848 3.69377 11.4649 3.78632 11.4255C3.87887 11.3862 3.96236 11.3282 4.03161 11.2553C4.10085 11.1824 4.15439 11.096 4.18889 11.0015C4.2234 10.9071 4.23813 10.8065 4.23219 10.7061C4.23049 10.501 4.14908 10.3046 4.00516 10.1584C3.86125 10.0122 3.66611 9.9277 3.46103 9.92278ZM48.5924 9.92278C48.3871 9.92342 48.1902 10.004 48.0434 10.1475C47.8967 10.291 47.8116 10.486 47.8063 10.6912C47.7975 10.7928 47.8099 10.8951 47.8427 10.9916C47.8756 11.0881 47.9282 11.1768 47.9971 11.2518C48.0661 11.3269 48.1499 11.3868 48.2433 11.4277C48.3367 11.4687 48.4376 11.4897 48.5395 11.4895C48.6411 11.4978 48.7433 11.4857 48.8401 11.4538C48.9368 11.422 49.0263 11.3711 49.1031 11.3042C49.1799 11.2372 49.2425 11.1556 49.2872 11.064C49.332 10.9725 49.3579 10.8729 49.3636 10.7712C49.3692 10.5565 49.2912 10.348 49.1461 10.1897C49.001 10.0314 48.8 9.93571 48.5856 9.92278H48.5924ZM2.67902 41.8779C2.68318 42.0829 2.76274 42.2792 2.90251 42.4292C3.04228 42.5793 3.23244 42.6725 3.43663 42.6911C3.54258 42.6924 3.64771 42.6724 3.74581 42.6324C3.84391 42.5924 3.93299 42.5331 4.00779 42.458C4.08258 42.383 4.14158 42.2937 4.18129 42.1955C4.22099 42.0972 4.24061 41.992 4.23897 41.8861C4.24245 41.7843 4.22481 41.6829 4.18716 41.5883C4.14951 41.4937 4.09267 41.4079 4.02022 41.3363C3.94777 41.2648 3.86128 41.209 3.7662 41.1725C3.67113 41.136 3.56953 41.1197 3.46781 41.1244C3.36606 41.1202 3.26452 41.1366 3.16925 41.1725C3.07397 41.2085 2.98692 41.2632 2.91329 41.3336C2.83966 41.4039 2.78097 41.4884 2.74072 41.5819C2.70047 41.6754 2.67948 41.7761 2.67902 41.8779ZM49.3568 41.8983C49.3592 41.7966 49.341 41.6954 49.3034 41.6009C49.2658 41.5064 49.2095 41.4204 49.1378 41.3482C49.0662 41.2759 48.9808 41.2189 48.8866 41.1804C48.7924 41.142 48.6914 41.1229 48.5897 41.1244C48.4881 41.1167 48.386 41.1302 48.2899 41.1641C48.1938 41.1979 48.1058 41.2514 48.0314 41.3212C47.9571 41.3909 47.8981 41.4753 47.8582 41.5691C47.8183 41.6628 47.7983 41.7639 47.7995 41.8658C47.7948 41.9716 47.8114 42.0774 47.8484 42.1767C47.8854 42.2761 47.942 42.367 48.0148 42.444C48.0877 42.521 48.1753 42.5826 48.2724 42.625C48.3695 42.6675 48.4742 42.69 48.5802 42.6911C48.7855 42.6799 48.9793 42.5929 49.124 42.4469C49.2688 42.3009 49.3541 42.1064 49.3636 41.901L49.3568 41.8983ZM11.17 48.8103C11.1753 48.7085 11.1594 48.6067 11.1232 48.5113C11.0871 48.416 11.0314 48.3292 10.9599 48.2566C10.8884 48.1839 10.8025 48.1269 10.7078 48.0893C10.6131 48.0516 10.5115 48.0341 10.4096 48.0378C10.2036 48.0321 10.0035 48.107 9.8517 48.2464C9.69991 48.3858 9.60836 48.5788 9.59646 48.7845C9.60062 48.9989 9.68763 49.2033 9.83924 49.3549C9.99084 49.5065 10.1953 49.5936 10.4096 49.5977C10.5112 49.5981 10.6118 49.5781 10.7055 49.5388C10.7992 49.4996 10.884 49.4419 10.9549 49.3692C11.0259 49.2965 11.0814 49.2103 11.1184 49.1156C11.1553 49.021 11.1729 48.9199 11.17 48.8184V48.8103ZM41.6492 48.0391C41.5475 48.0323 41.4454 48.0468 41.3495 48.0816C41.2537 48.1164 41.1661 48.1708 41.0924 48.2413C41.0187 48.3118 40.9605 48.3969 40.9215 48.4911C40.8825 48.5853 40.8636 48.6866 40.8659 48.7886C40.8596 48.8902 40.8739 48.9919 40.9078 49.0879C40.9417 49.1838 40.9946 49.272 41.0632 49.3471C41.1319 49.4222 41.2149 49.4827 41.3074 49.5251C41.4 49.5674 41.5001 49.5907 41.6018 49.5936C41.8156 49.5953 42.0218 49.5143 42.1774 49.3676C42.3329 49.2209 42.4258 49.0198 42.4366 48.8062C42.4286 48.6026 42.3422 48.4099 42.1955 48.2685C42.0487 48.1271 41.853 48.0478 41.6492 48.0473V48.0391Z" fill="#314252"></path>
                                    <path d="M16.4381 33.0491C16.621 32.2224 16.8284 31.2872 17.0385 30.3385C17.8209 26.8292 18.6043 23.3199 19.3886 19.8106C19.6339 18.7101 20.504 18.1924 21.3944 18.599C21.8864 18.8226 22.1113 19.2346 22.2238 19.7401C22.7831 22.2628 23.3465 24.7845 23.9139 27.3054C24.3078 29.07 24.7018 30.8319 25.0957 32.591C25.2922 33.4706 25.0957 33.9748 24.4858 34.1198C23.8759 34.2648 23.4775 33.8772 23.2796 32.999C23.0235 31.8619 22.7605 30.7261 22.5288 29.5836C22.4407 29.154 22.2686 28.9372 21.7901 28.9643C21.1315 29.0008 20.4687 28.99 19.8087 28.9643C19.4021 28.9493 19.2029 29.0998 19.1189 29.5131C18.8708 30.7329 18.5767 31.9527 18.3057 33.1724C18.2135 33.5858 18.0522 33.9477 17.6077 34.094C17.0087 34.3028 16.4164 33.8325 16.4381 33.0491ZM20.8726 22.1986L20.7628 22.1715C20.424 23.6994 20.0861 25.2268 19.7491 26.7538C19.6962 26.9923 19.8046 27.0994 20.0459 27.098C20.5202 27.098 20.9946 27.098 21.4676 27.098C21.8322 27.098 21.9392 26.9625 21.8538 26.5925C21.515 25.1315 21.1979 23.6637 20.8726 22.1986Z" fill="#314252"></path>
                                    <path d="M31.3111 26.311C31.3111 28.0864 31.3205 29.8605 31.3111 31.6359C31.3111 32.1089 31.4656 32.3244 31.9575 32.2946C32.3124 32.2711 32.6686 32.2815 33.0214 32.3258C33.5636 32.3976 33.9065 32.7947 33.8821 33.2745C33.8768 33.3938 33.8481 33.511 33.7976 33.6192C33.7471 33.7275 33.6758 33.8247 33.5877 33.9054C33.4996 33.9861 33.3965 34.0486 33.2842 34.0894C33.1719 34.1302 33.0527 34.1485 32.9334 34.1432C31.223 34.1586 29.5126 34.1586 27.8022 34.1432C27.5614 34.1525 27.3265 34.0673 27.1477 33.9057C26.9689 33.7442 26.8604 33.5191 26.8454 33.2785C26.8169 32.8069 27.1679 32.3881 27.7073 32.3217C28.1127 32.2829 28.5201 32.2707 28.9271 32.2851C29.2795 32.2851 29.4543 32.1645 29.4543 31.7837C29.4471 28.1325 29.4471 24.4813 29.4543 20.8302C29.4543 20.4507 29.2835 20.3219 28.9285 20.3273C28.5392 20.3409 28.1494 20.3301 27.7615 20.2948C27.1842 20.2311 26.8196 19.8245 26.8481 19.3326C26.8765 18.8406 27.275 18.4692 27.8551 18.4652C29.532 18.4543 31.209 18.4543 32.8859 18.4652C33.4687 18.4652 33.859 18.8324 33.8834 19.3366C33.9078 19.8408 33.5541 20.2338 32.974 20.2989C32.6202 20.3359 32.264 20.3445 31.9087 20.3246C31.4656 20.3043 31.3111 20.5022 31.3151 20.9304C31.3178 22.7276 31.3111 24.5193 31.3111 26.311Z" fill="#314252"></path>
                                 </g>
                                 <defs>
                                    <clipPath id="cpmobileappdevel9">
                                       <rect width="52.0434" height="52" fill="white" transform="translate(0 0.28125)"></rect>
                                    </clipPath>
                                 </defs>
                              </svg>
                              <h4>AI/ML</h4>
                           </div>
                           <p>Now you can fully automate your business processes using our latest app technologies
                              equipped with artificial intelligence and related technologies like machine learning.
                           </p>
                        </div>
                        <div class="robust-content">
                           <div class="robust-flex">
                              <svg width="54" height="55" viewBox="0 0 54 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#cpmobileappdevel10)">
                                    <path d="M35.1141 27.342C35.1141 29.6262 35.0772 31.9113 35.1298 34.1937C35.1566 35.3713 34.6379 36.1502 33.6901 36.7252C32.5983 37.3878 31.3902 37.7072 30.1442 37.901C27.4678 38.3172 24.8144 38.2544 22.1997 37.4884C21.442 37.266 20.7184 36.9679 20.0862 36.4732C19.4051 35.9472 19.0553 35.2919 19.0553 34.4041C19.0738 29.7425 19.0895 25.0828 19.047 20.4203C19.036 19.1863 19.5888 18.4065 20.5855 17.8361C21.7595 17.1633 23.0544 16.8505 24.3741 16.677C26.5559 16.3909 28.7405 16.4195 30.9001 16.8865C32.0196 17.1283 33.1105 17.4651 34.05 18.1619C34.7376 18.6714 35.1252 19.3146 35.1169 20.208C35.0966 22.5854 35.1141 24.9628 35.1141 27.342ZM21.035 33.5024C21.0285 34.9117 21.1541 35.0843 22.5024 35.5263C22.5384 35.5383 22.5754 35.5439 22.6114 35.555C24.6999 36.225 26.8429 36.2804 28.997 36.0699C30.1507 35.9573 31.2877 35.7202 32.3546 35.2227C32.8964 34.9698 33.2415 34.6422 33.1585 33.9786C33.1222 33.5682 33.12 33.1555 33.152 32.7447C33.1723 32.2731 33.0034 32.2131 32.5816 32.3756C31.0828 32.9533 29.5157 33.1932 27.9154 33.2403C25.693 33.3049 23.501 33.1545 21.4069 32.3174C21.167 32.2251 21.0433 32.2953 21.0378 32.5481C21.0295 32.8656 21.035 33.184 21.035 33.5024ZM27.2001 31.2791C28.6868 31.3137 30.1691 31.1035 31.5877 30.6571C33.0413 30.1874 33.1566 30.024 33.1437 28.5224C33.1437 28.1533 33.32 27.6632 33.045 27.4556C32.7948 27.271 32.4137 27.6623 32.0657 27.7167C31.9919 27.7287 31.9208 27.7527 31.8479 27.7721C28.3408 28.7006 24.866 28.7006 21.4272 27.4703C21.1107 27.3568 21.0202 27.4205 21.0267 27.7352C21.0359 28.1468 21.0775 28.5658 21.0184 28.9682C20.8984 29.7803 21.3276 30.168 22.0004 30.4448C23.6229 31.1093 25.321 31.2893 27.2001 31.2791ZM27.2693 26.4441C27.8498 26.4874 28.6343 26.4044 29.4114 26.2982C30.5254 26.145 31.6264 25.9097 32.6195 25.3412C32.901 25.1806 33.1548 24.9988 33.1474 24.6139C33.1372 24.0334 33.1419 23.452 33.1474 22.8715C33.1474 22.5891 33.0551 22.4977 32.7727 22.6094C31.4575 23.1345 30.0805 23.3809 28.6749 23.4981C26.2218 23.7012 23.8121 23.5166 21.4872 22.6537C21.143 22.5254 21.0055 22.542 21.0258 22.9416C21.0461 23.3413 21.0738 23.7344 21.0202 24.1202C20.9141 24.8917 21.2833 25.2932 21.9515 25.571C23.5906 26.2521 25.3081 26.4413 27.2693 26.4441ZM26.9242 18.4905C26.1288 18.4728 25.3333 18.5209 24.5458 18.6344C23.4909 18.8043 22.4452 19.0184 21.5002 19.5573C20.8597 19.9265 20.8624 20.1305 21.5094 20.5098C21.8996 20.733 22.3151 20.9087 22.747 21.0331C24.5264 21.5702 26.3547 21.6856 28.1922 21.572C29.5351 21.4881 30.877 21.3053 32.1202 20.7276C32.4672 20.5652 33.0016 20.4636 33.0136 20.0566C33.0274 19.6035 32.4847 19.4854 32.1193 19.3303C30.5042 18.6418 28.7977 18.4822 26.9242 18.4905Z" fill="#314252"></path>
                                    <path d="M21.0829 2.56469C23.4498 3.58445 25.7333 4.7879 27.9125 6.16401C27.9955 5.95544 27.8451 5.85576 27.7796 5.73671C27.6522 5.50875 27.6873 5.35555 27.9217 5.2328C28.5677 4.89441 29.2119 4.55139 29.8543 4.20377C30.1044 4.0681 30.2788 4.11148 30.3896 4.38004C30.3976 4.39683 30.4065 4.41316 30.4163 4.42895C31.1658 5.73579 31.1658 5.73579 29.8174 6.44734C29.0218 6.86726 29.0218 6.86819 29.7601 7.37025C32.9119 9.51415 35.7914 11.9848 38.5519 14.6077C38.9617 14.9962 38.921 15.2177 38.5362 15.5804C37.6133 16.4599 37.6299 16.4756 36.7319 15.6136C32.456 11.5049 27.7713 7.96091 22.4229 5.34078C21.3597 4.82303 20.2725 4.37635 19.1789 3.9352C18.7774 3.77369 18.6768 3.8586 18.7866 4.27668C18.9103 4.74643 18.998 5.22634 19.0977 5.70164C19.1327 5.86684 19.2232 6.05603 19.1761 6.19539C18.9518 6.8525 18.2938 6.56455 17.8517 6.75559C17.6238 6.85434 17.3524 6.88572 17.2767 6.53502C16.9768 5.15066 16.6584 3.75985 16.3981 2.3635C16.304 1.86051 16.6528 1.42306 17.1992 1.29847C18.6574 0.964375 20.1249 0.669969 21.5868 0.351567C22.1451 0.230667 22.1405 0.699502 22.1295 0.972681C22.1119 1.40091 22.7681 1.93158 21.9873 2.26475C21.7215 2.37642 21.3994 2.32381 21.0829 2.56469Z" fill="#314252"></path>
                                    <path d="M34.4836 52.0135C33.5201 51.6065 32.6147 51.253 31.7342 50.846C26.062 48.2287 21.093 44.5961 16.5679 40.3249C15.6893 39.4943 15.6921 39.4943 16.5384 38.636C17.0635 38.1035 17.0663 38.0998 17.5896 38.5991C21.7612 42.5777 26.3324 46.0008 31.5137 48.5794C33.0066 49.3193 34.5484 49.9564 36.1283 50.4861C36.2464 50.5258 36.3839 50.6365 36.4974 50.535C36.6368 50.4095 36.5103 50.2507 36.4753 50.1169C36.3267 49.5558 36.1689 48.9974 35.9972 48.4428C35.8975 48.1225 35.9972 47.9518 36.3165 47.8641C38.1042 47.3787 37.6594 47.2476 38.1374 48.787C38.4143 49.6988 38.6709 50.6199 38.9275 51.54C39.1582 52.3707 38.9441 52.8026 38.1393 53.0453C36.7771 53.4569 35.4056 53.8344 34.0406 54.2368C33.7047 54.3355 33.4998 54.2672 33.4315 53.8981C33.3475 53.4421 32.9599 52.9576 33.1638 52.5598C33.3678 52.1621 34.0055 52.2839 34.4836 52.0135Z" fill="#314252"></path>
                                    <path d="M51.7133 19.8362C50.5698 22.9012 49.1116 25.6994 47.4208 28.3823C45.478 31.4657 43.2289 34.3092 40.7813 37.0022C40.366 37.4637 39.9387 37.9058 39.527 38.3663C39.3166 38.6016 39.1376 38.6007 38.9198 38.3755C37.6471 37.0604 37.6092 37.5292 38.8173 36.2372C42.6253 32.1644 45.8878 27.7095 48.3723 22.7065C49.1584 21.1274 49.817 19.488 50.3418 17.804C49.5841 17.8963 48.9353 18.1307 48.2874 18.3356C47.8259 18.4823 47.6478 18.3458 47.5361 17.9101C47.1236 16.3071 46.9778 16.7021 48.4249 16.2489C49.3894 15.949 50.363 15.6841 51.3395 15.4183C52.0686 15.218 52.5467 15.4663 52.7654 16.1926C53.1807 17.5714 53.5637 18.9613 53.9652 20.3457C54.052 20.6466 54.0104 20.8505 53.6542 20.9179C53.1835 21.0102 52.6805 21.4079 52.2698 21.1948C51.8803 20.9862 51.9828 20.3411 51.7133 19.8362Z" fill="#314252"></path>
                                    <path d="M2.2619 33.3262C2.51386 32.7549 2.73074 32.2252 2.97808 31.7093C5.84929 25.7187 9.76523 20.4757 14.4075 15.7523C14.713 15.4422 14.9087 15.4256 15.2252 15.7393C16.1998 16.7084 16.2109 16.6955 15.2843 17.6636C11.349 21.7696 7.94062 26.2604 5.34999 31.342C4.71568 32.5741 4.156 33.8432 3.67397 35.1425C3.62413 35.2781 3.50323 35.4304 3.60198 35.5624C3.71365 35.7128 3.87885 35.5845 4.01822 35.5568C4.58766 35.4443 5.15617 35.3289 5.721 35.1988C6.03756 35.1268 6.19354 35.2237 6.28675 35.5467C6.70299 36.9864 6.71129 36.9855 5.23093 37.3085C4.28032 37.5162 3.33064 37.7248 2.37727 37.9195C1.59001 38.081 1.15901 37.8097 0.979965 37.0178C0.670788 35.6491 0.391143 34.274 0.0856565 32.9044C-0.00109789 32.5159 0.0801195 32.2962 0.512969 32.2529C0.945818 32.2095 1.42943 31.8791 1.81428 32.0969C2.17699 32.3018 2.00256 32.8924 2.2619 33.3262Z" fill="#314252"></path>
                                    <path d="M53.4197 11.4013C53.4337 12.2583 53.3682 13.1147 53.224 13.9596C53.2065 14.0704 53.224 14.2291 53.1539 14.2817C52.626 14.6933 52.0962 14.2817 51.5665 14.2531C51.2204 14.2337 51.2536 13.9633 51.2896 13.6994C51.5201 12.1237 51.5002 10.5214 51.2305 8.95194C50.6611 5.68486 48.1018 3.24194 44.8172 2.75649C41.0932 2.20275 37.6184 3.11273 34.187 4.39834C34.0511 4.46147 33.9119 4.51693 33.7698 4.56446C33.4182 4.65213 33.0223 5.09236 32.75 4.82564C32.3808 4.46202 32.2267 3.88797 32.067 3.3693C32.0015 3.15334 32.211 3.09243 32.3624 3.0269C35.6941 1.6167 39.1292 0.584898 42.784 0.609817C45.4798 0.628275 48.0178 1.266 50.111 3.10996C52.0667 4.83118 52.9979 7.06829 53.3099 9.60259C53.3911 10.2329 53.464 10.866 53.4197 11.4013Z" fill="#314252"></path>
                                    <path d="M43.1079 53.698C42.1655 53.7056 41.224 53.6393 40.292 53.4996C39.9552 53.4488 39.8361 53.2929 39.8989 52.9698C40.2533 51.1609 39.837 51.5458 41.5841 51.6778C43.3764 51.8116 45.1475 51.7405 46.8448 51.0908C49.8387 49.9418 51.2822 47.6253 51.6772 44.5474C52.0307 41.7907 51.4806 39.1438 50.6804 36.5311C50.3742 35.5061 50.0012 34.5023 49.5637 33.5261C49.3976 33.1625 49.4622 32.9585 49.8553 32.7961C51.4372 32.1427 51.0828 32.0439 51.6707 33.4938C52.9111 36.5514 53.7722 39.7059 53.7454 43.0339C53.7224 45.8229 53.0569 48.4125 51.1087 50.538C49.6034 52.1826 47.7059 53.0741 45.5425 53.4608C44.6787 53.6214 43.8065 53.7377 43.1079 53.698Z" fill="#314252"></path>
                                    <path d="M2.28296 11.2089C2.28296 12.392 2.28296 12.392 1.10623 12.452C0.367899 12.4899 0.343903 12.4852 0.326368 11.7525C0.268224 9.33814 0.617088 7.0115 1.88241 4.89805C3.41261 2.34438 5.75036 1.01355 8.60864 0.486576C10.377 0.158945 12.148 0.276154 13.9173 0.494882C14.3104 0.543796 14.4784 0.715456 14.3917 1.12892C14.0585 2.69785 14.4009 2.48466 12.8375 2.35638C11.0636 2.21056 9.28884 2.18841 7.56021 2.77076C4.68347 3.73704 3.11266 5.80804 2.51922 8.70042C2.3445 9.52473 2.26522 10.3664 2.28296 11.2089Z" fill="#314252"></path>
                                    <path d="M10.5055 54.0393C8.54249 53.9858 6.49638 53.6129 4.64593 52.5017C2.08298 50.9623 0.713367 48.6255 0.200224 45.7369C-0.113569 43.9667 -0.018507 42.1984 0.2113 40.4283C0.262983 40.0315 0.427262 39.8976 0.849036 39.9733C2.18635 40.2124 2.16881 40.1948 2.06544 41.5229C1.94916 43.0152 1.90116 44.5066 2.25003 45.986C3.06589 49.4008 5.62607 51.6158 9.12301 51.9618C9.92257 52.0479 10.7271 52.0787 11.5309 52.0541C11.9047 52.0384 12.1013 52.1732 12.1197 52.5442C12.2148 54.2912 12.4769 53.9858 10.5055 54.0393Z" fill="#314252"></path>
                                    <path d="M24.8834 49.5251C24.8889 49.7447 24.7662 49.8121 24.6526 49.8693C23.8017 50.3 22.9495 50.7283 22.0961 51.154C22.0463 51.1789 21.9835 51.2223 21.9411 51.2094C21.3061 51.0248 21.415 50.3446 21.1105 49.9339C20.961 49.7318 20.9748 49.5159 21.2489 49.3802C22.0878 48.9667 22.9212 48.5496 23.7583 48.1297C23.8571 48.0817 23.9835 48.0189 24.0721 48.1223C24.4431 48.5533 24.6323 49.0867 24.8834 49.5251Z" fill="#314252"></path>
                                    <path d="M25.2524 9.01308C25.2054 9.25488 25.0752 9.33517 24.9552 9.42192C24.2612 9.92491 23.5607 10.4196 22.8731 10.9309C22.6175 11.1219 22.4523 11.1302 22.2271 10.857C21.2543 9.67295 21.2451 9.68034 22.4827 8.79343C22.9516 8.45564 23.4241 8.1234 23.8837 7.77823C24.1292 7.59365 24.3064 7.60196 24.479 7.87052C24.7384 8.26553 25.0152 8.66053 25.2524 9.01308Z" fill="#314252"></path>
                                    <path d="M42.4685 18.873C42.4833 19.0576 42.367 19.1361 42.2784 19.2284C41.2235 20.3358 41.2225 20.3358 40.1852 19.2007C39.8059 18.7872 39.4469 18.3571 39.05 17.9566C38.8054 17.7083 38.8193 17.5164 39.0786 17.3106C39.1663 17.2413 39.2401 17.1537 39.3223 17.078C40.2969 16.1754 40.0034 16.1099 40.9835 17.1601C41.4173 17.6216 41.8335 18.107 42.2544 18.5842C42.3384 18.6792 42.4067 18.79 42.4685 18.873Z" fill="#314252"></path>
                                    <path d="M15.5115 36.6559C15.4746 36.8525 15.314 36.9623 15.1839 37.0915C14.2361 38.0476 14.2324 38.0476 13.3362 37.0832C12.9172 36.6337 12.5204 36.1603 12.0903 35.7228C11.8291 35.457 11.8494 35.2669 12.129 35.0399C13.519 33.9112 12.9975 33.865 14.213 35.1322C14.5739 35.5087 14.9227 35.8982 15.2744 36.2821C15.3722 36.3919 15.4875 36.4925 15.5115 36.6559Z" fill="#314252"></path>
                                    <path d="M35.0793 42.4779C34.9021 42.4474 34.8154 42.2933 34.7102 42.1659C33.6027 40.8896 33.6451 41.2827 34.8025 40.2066C35.2132 39.8245 35.6331 39.4535 36.0355 39.0604C36.2939 38.8057 36.4969 38.8232 36.7341 39.0871C37.9339 40.4134 37.9081 39.9953 36.7055 41.1175C36.281 41.5116 35.8481 41.8983 35.4181 42.2859C35.3211 42.3681 35.2353 42.4779 35.0793 42.4779Z" fill="#314252"></path>
                                    <path d="M6.27958 24.1782C6.2873 24.2407 6.27457 24.3039 6.24328 24.3585C6.212 24.4131 6.16385 24.456 6.10607 24.4809C5.7369 24.6923 5.35481 24.8981 4.98011 25.1085C4.74568 25.2405 4.59709 25.1556 4.48634 24.9331C4.06365 24.0804 3.64095 23.2267 3.21179 22.3767C3.08074 22.1164 3.15549 21.9522 3.41299 21.847C3.44714 21.8331 3.48221 21.8193 3.51636 21.8036C4.80014 21.1769 4.79737 21.1788 5.42311 22.4588C5.65199 22.9286 5.89656 23.391 6.13191 23.858C6.19005 23.9696 6.23989 24.0896 6.27958 24.1782Z" fill="#314252"></path>
                                    <path d="M44.565 21.7143C44.6313 21.6961 44.7018 21.7002 44.7655 21.7261C44.8292 21.7519 44.8827 21.7981 44.9175 21.8574C45.4888 22.6446 46.0555 23.4346 46.6277 24.2209C46.7846 24.4359 46.7375 24.5901 46.5243 24.7322C44.9166 25.7889 45.4427 25.8618 44.4016 24.4839C44.0648 24.0363 43.75 23.5703 43.4132 23.1217C43.2286 22.8781 43.2443 22.6944 43.4981 22.5126C43.882 22.2431 44.2512 21.9561 44.565 21.7143Z" fill="#314252"></path>
                                    <path d="M32.3338 44.5871C32.355 44.8409 32.2147 44.924 32.0994 45.0098C31.361 45.5561 30.6162 46.0905 29.8844 46.6406C29.6222 46.8362 29.47 46.7541 29.2854 46.5215C28.3449 45.3383 28.3394 45.342 29.5623 44.4477C30.0154 44.1164 30.4787 43.7962 30.9171 43.4455C31.1691 43.2443 31.3398 43.2784 31.5207 43.523C31.7957 43.8977 32.0855 44.2641 32.3338 44.5871Z" fill="#314252"></path>
                                    <path d="M18.6029 11.883C18.7728 11.8775 18.8401 11.9753 18.9204 12.0501C20.0621 13.1271 20.0621 13.1493 18.9075 14.1857C18.4756 14.5733 18.0427 14.9591 17.6154 15.3541C17.4253 15.5304 17.261 15.5387 17.0912 15.3384C17.0792 15.3245 17.0654 15.3116 17.0524 15.2987C15.7751 13.9374 15.789 14.3952 17.0681 13.2203C17.4834 12.8401 17.9003 12.4635 18.3187 12.0907C18.4096 12.0163 18.5045 11.947 18.6029 11.883Z" fill="#314252"></path>
                                    <path d="M8.94795 28.8203C9.19899 28.8277 9.27743 28.9643 9.36419 29.0824C9.88379 29.7912 10.3942 30.5065 10.9212 31.2097C11.0864 31.4303 11.0854 31.5789 10.8713 31.7764C9.7149 32.8645 9.69644 32.8691 8.77537 31.6093C8.42189 31.1266 8.07764 30.6366 7.72047 30.1576C7.55527 29.9361 7.54604 29.7635 7.79615 29.6039C8.20131 29.3371 8.59817 29.0603 8.94795 28.8203Z" fill="#314252"></path>
                                    <path d="M15.893 53.3698C15.6715 53.3901 15.5598 53.3938 15.5238 53.296C15.3279 52.7934 15.207 52.2648 15.1648 51.7271C15.151 51.5471 15.3337 51.4973 15.4749 51.4548C16.1708 51.2499 16.8685 51.0515 17.5662 50.8494C17.7988 50.7811 17.9354 50.8494 18.0471 51.0838C18.7079 52.4617 18.6664 52.5808 17.2294 53.0154C16.7476 53.1566 16.2575 53.2711 15.893 53.3698Z" fill="#314252"></path>
                                    <path d="M2.38849 15.4536C2.7835 15.4046 2.85918 15.5818 2.91363 15.7655C3.11944 16.4632 3.3151 17.1637 3.52368 17.8605C3.59844 18.1097 3.52368 18.2555 3.27357 18.3219C3.23757 18.3321 3.20435 18.3515 3.16928 18.3625C1.43142 18.9163 1.90211 19.0649 1.35482 17.4969C1.20715 17.076 1.11209 16.6358 1.00411 16.2048C0.958887 16.0202 0.911818 15.8172 1.173 15.7507C1.62431 15.6326 2.07839 15.5292 2.38849 15.4536Z" fill="#314252"></path>
                                    <path d="M50.2152 30.2824C50.2447 30.4596 50.2004 30.5454 50.1137 30.5897C49.666 30.8177 49.2212 31.0511 48.7616 31.256C48.5539 31.3483 48.4718 31.1407 48.3924 30.9985C48.0897 30.4448 47.8018 29.8763 47.4917 29.3235C47.3403 29.054 47.3864 28.886 47.6596 28.7374C49.2987 27.8459 48.8179 27.7425 49.6799 29.2543C49.8848 29.6096 50.0629 29.9806 50.2152 30.2824Z" fill="#314252"></path>
                                 </g>
                                 <defs>
                                    <clipPath id="cpmobileappdevel10">
                                       <rect width="54" height="54" fill="white" transform="translate(0 0.28125)">
                                       </rect>
                                    </clipPath>
                                 </defs>
                              </svg>
                              <h4>Data Science and Analytics</h4>
                           </div>
                           <p>Make use of big data analytics and gain deeper insights into your business through
                              enhanced big data analytics and business intelligence technologies.
                           </p>
                        </div>
                        <div class="robust-content">
                           <div class="robust-flex">
                              <svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#cpmobileappdevel11)">
                                    <path d="M14.2517 46.2917C12.4188 46.2917 10.586 46.3134 8.7532 46.2784C8.21335 46.2684 7.95176 46.445 7.72849 46.9349C6.98703 48.5828 5.40746 49.4342 3.56298 49.2676C1.94009 49.1176 0.518823 47.8463 0.11227 46.1834C-0.119065 45.2229 0.00973713 44.2108 0.474301 43.3388C0.938864 42.4668 1.70696 41.7953 2.63324 41.4514C4.53771 40.73 6.76042 41.5347 7.63185 43.3776C7.95676 44.0707 8.33998 44.2306 9.04812 44.2223C12.1306 44.1823 15.2131 44.1907 18.2955 44.2223C18.8854 44.2223 19.0537 44.0374 19.027 43.4742C18.9854 42.6028 19.007 41.728 19.027 40.8549C19.027 40.5217 18.9454 40.3551 18.5655 40.2718C16.8993 39.9152 16.0328 38.8138 16.0245 37.1326C16.0245 36.3845 16.0062 35.633 16.0245 34.8882C16.0378 34.45 15.8696 34.3067 15.4397 34.3134C14.1917 34.3317 12.9404 34.3251 11.6924 34.3134C6.10727 34.2718 0.995358 29.8363 0.163922 24.3162C-0.8358 17.728 3.19974 11.8963 9.70794 10.4867C10.6691 10.2963 11.6508 10.2308 12.6288 10.2917C13.0753 10.3117 13.3319 10.1734 13.5735 9.77356C16.8143 4.38672 21.5596 1.22927 27.8046 0.427822C36.5805 -0.696866 45.0714 4.58333 48.0123 12.906C48.1789 13.3692 48.1556 14.0207 48.5671 14.239C48.9337 14.4373 49.4969 14.2673 49.9751 14.2706C53.8707 14.2956 56.8248 16.0152 58.786 19.3342C62.285 25.2459 58.5893 33.0354 51.8046 34.1801C50.355 34.4234 48.8954 34.2718 47.4408 34.3084C46.5444 34.3301 45.6479 34.3384 44.7549 34.3084C44.22 34.2867 44.0651 34.49 44.0884 34.9949C44.1217 35.7213 44.1 36.4495 44.0884 37.1776C44.0767 38.7722 43.177 39.9302 41.6241 40.2534C41.2042 40.3417 41.0726 40.4934 41.0826 40.9016C41.1059 41.8147 41.1075 42.7344 41.0826 43.6441C41.0709 44.0874 41.2492 44.2157 41.6707 44.214C44.9615 44.2023 48.2522 44.1957 51.543 44.214C52.0345 44.214 52.1711 43.9607 52.3378 43.6025C53.5824 40.9366 56.9898 40.3434 58.9926 42.4745C60.1373 43.6941 60.4038 45.1521 59.8157 46.6983C59.2275 48.2445 58.0612 49.1226 56.4183 49.2659C54.6771 49.4175 53.2808 48.7261 52.4977 47.1615C52.1345 46.435 51.7246 46.2668 50.9781 46.2751C47.4591 46.3117 43.9401 46.2917 40.4194 46.2901C39.303 46.2901 38.9998 45.9935 38.9981 44.8988C38.9981 43.5658 38.9815 42.2329 38.9981 40.9082C39.0065 40.445 38.8498 40.2867 38.3866 40.2984C36.8471 40.3334 37.092 40.1318 37.082 41.5797C37.0687 43.5792 37.092 45.5703 37.0703 47.5647C37.0703 48.0646 37.2236 48.2129 37.7152 48.2079C40.0062 48.1879 42.2972 48.1979 44.5882 48.1995C45.8112 48.1995 46.0745 48.4695 46.0762 49.7125C46.0762 50.3156 46.1111 50.9205 46.0662 51.5203C46.0262 52.0501 46.1995 52.3251 46.7043 52.5533C48.9404 53.5631 49.7485 56.164 48.5371 58.2834C48.2212 58.8235 47.7847 59.2833 47.2617 59.6268C46.7388 59.9703 46.1434 60.1882 45.5223 60.2635C44.9011 60.3389 44.2709 60.2696 43.681 60.0611C43.0911 59.8526 42.5573 59.5105 42.1214 59.0616C41.6856 58.6126 41.3594 58.069 41.1684 57.4732C40.9774 56.8773 40.9267 56.2454 41.0204 55.6267C41.114 55.0081 41.3494 54.4194 41.7082 53.9068C42.067 53.3942 42.5395 52.9715 43.0887 52.6716C43.3886 52.505 43.8784 52.505 43.9517 52.1335C44.0279 51.6198 44.0375 51.0984 43.9801 50.5822C43.9534 50.174 43.5885 50.2873 43.3419 50.2873C41.0509 50.279 38.7599 50.2873 36.4688 50.2873C35.2825 50.2873 35.0042 50.0074 35.0042 48.8127C35.0042 46.2151 34.9909 43.6175 35.0142 41.0199C35.0142 40.4867 34.8859 40.2718 34.3178 40.2984C33.4247 40.3417 32.5266 40.3234 31.6318 40.2984C31.222 40.2884 31.0853 40.4467 31.087 40.8466C31.0992 43.8458 31.0992 46.8394 31.087 49.8274C31.087 50.2706 31.3536 50.3689 31.6652 50.5122C33.9195 51.5469 34.7676 54.0846 33.583 56.2223C33.1695 56.9531 32.5396 57.5378 31.7801 57.8958C31.0206 58.2538 30.1688 58.3675 29.3419 58.2213C28.5151 58.0752 27.7539 57.6762 27.1632 57.0795C26.5724 56.4828 26.1812 55.7176 26.0434 54.8894C25.7651 53.1582 26.5899 51.3903 28.1578 50.6772C28.8759 50.3439 29.0359 49.9391 29.0259 49.2143C28.9826 46.5117 29.0092 43.8091 29.0076 41.1082C29.0076 40.3017 29.0076 40.3017 28.1745 40.3001C27.3414 40.2984 26.5499 40.3234 25.7385 40.3001C25.2486 40.2801 25.0887 40.4484 25.092 40.9416C25.112 43.5808 25.102 46.2201 25.1003 48.861C25.1003 49.9974 24.8054 50.284 23.6474 50.2856C21.3564 50.2856 19.0653 50.299 16.776 50.2856C16.2644 50.2856 16.0312 50.4323 16.1095 50.9521C16.1202 51.0539 16.1158 51.1566 16.0962 51.257C15.9762 51.9652 16.2395 52.3434 16.9293 52.6666C18.7088 53.4997 19.5235 55.5942 18.9187 57.477C18.6156 58.394 17.9974 59.1739 17.1738 59.6784C16.3502 60.1829 15.3746 60.3794 14.42 60.2329C13.4749 60.0849 12.6133 59.6056 11.9894 58.8806C11.3654 58.1555 11.0197 57.2322 11.0142 56.2756C11.0142 54.5111 11.8473 53.2615 13.4286 52.5317C13.8834 52.3217 14.0467 52.0818 14.0217 51.5953C13.9817 50.8705 14.0051 50.1407 14.0217 49.4142C14.0317 48.5578 14.3833 48.2045 15.2447 48.2029C17.5991 48.2029 19.9518 48.1862 22.3044 48.2029C22.8376 48.2029 23.0359 48.0762 23.0292 47.5097C22.9992 45.327 23.0026 43.1443 23.0292 40.9616C23.0292 40.4434 22.8626 40.2734 22.3494 40.2951C20.9148 40.3367 21.1198 40.1468 21.1098 41.5181C21.0998 42.7027 21.1098 43.8874 21.1098 45.0721C21.1098 45.9285 20.7482 46.2851 19.8901 46.2884C18.0006 46.2967 16.1262 46.2901 14.2517 46.2917ZM30.044 14.2756C33.7096 14.2756 37.3752 14.2756 41.0409 14.2756C42.7937 14.2756 44.0734 15.5603 44.0884 17.3048C44.1 18.5728 44.0784 19.8408 44.0984 21.1087C44.1313 21.7351 43.9751 22.3568 43.6502 22.8932C43.5629 23.0089 43.5156 23.1499 43.5156 23.2948C43.5156 23.4397 43.5629 23.5807 43.6502 23.6964C43.9757 24.2326 44.1319 24.8545 44.0984 25.4809C44.0784 26.5622 44.075 27.6469 44.0984 28.7233C44.115 29.5281 44.0284 30.2862 43.5985 30.9993C43.3286 31.4442 43.7968 32.2307 44.32 32.2223C46.526 32.1907 48.7371 32.3889 50.9348 32.124C53.989 31.7658 56.1717 30.1246 57.3414 27.3187C58.5544 24.4078 58.1211 21.6136 56.08 19.2059C54.0389 16.7983 51.3397 15.9435 48.2156 16.605C47.6907 16.7166 47.2158 16.7433 46.8526 16.2867C46.6227 16.0018 46.581 15.6419 46.4977 15.2987C44.3866 6.66776 35.859 1.06931 27.1298 2.67386C21.6729 3.67359 17.6141 6.68775 15.0115 11.5914C14.6482 12.2745 14.2 12.5678 13.4252 12.4961C12.6613 12.4113 11.8914 12.3923 11.1242 12.4395C6.07395 12.8327 1.62685 17.4914 2.19169 23.2448C2.39568 25.3621 3.27625 27.3574 4.70296 28.9351C6.12968 30.5127 8.02664 31.5889 10.1128 32.0041C11.9307 32.3623 13.7635 32.204 15.5963 32.2307C16.3777 32.2423 16.7993 31.5258 16.4294 30.841C16.1463 30.3321 16.0037 29.7571 16.0162 29.1748C16.0362 27.8869 16.0328 26.5972 16.0162 25.3092C15.9926 24.7867 16.1261 24.269 16.3994 23.823C16.6327 23.4664 16.6543 23.1565 16.4094 22.7983C16.1221 22.3363 15.9847 21.7968 16.0162 21.2537C16.0312 20.0057 16.0162 18.7544 16.0162 17.5131C16.0162 15.5136 17.2375 14.284 19.242 14.2806C22.841 14.2718 26.4416 14.2701 30.044 14.2756ZM30.1023 16.3584C26.5477 16.3584 22.9898 16.3584 19.4286 16.3584C18.4672 16.3584 18.1089 16.7216 18.0956 17.6797C18.0878 18.7594 18.0878 19.8391 18.0956 20.9188C18.0956 21.8835 18.4572 22.2518 19.4119 22.2518C26.5077 22.2518 33.6035 22.2518 40.6993 22.2518C41.6207 22.2518 41.9856 21.8802 41.9956 20.9621C42.0056 19.9241 41.9956 18.886 41.9956 17.8463C41.9956 16.68 41.6774 16.3584 40.521 16.3584C37.0498 16.3562 33.5769 16.3562 30.1023 16.3584ZM30.0523 30.2395C33.5902 30.2395 37.1275 30.2395 40.6643 30.2395C41.6307 30.2395 41.9973 29.8796 41.9973 28.9266C42.0073 27.8269 42.009 26.7255 41.9973 25.6242C41.9873 24.7144 41.6174 24.3478 40.691 24.3478C33.5952 24.3478 26.4994 24.3478 19.4036 24.3478C18.4572 24.3478 18.1056 24.7194 18.0989 25.6908C18.0989 26.7072 18.0989 27.7252 18.0989 28.7433C18.0989 29.9363 18.4122 30.2429 19.6268 30.2429L30.0523 30.2395ZM30.0706 32.324C26.5338 32.324 22.9965 32.324 19.4586 32.324C18.4588 32.324 18.1073 32.6789 18.1006 33.6769C18.0928 34.7566 18.0928 35.8363 18.1006 36.916C18.1006 37.8391 18.4705 38.2157 19.3869 38.2157C26.5016 38.2157 33.6174 38.2157 40.7343 38.2157C41.6191 38.2157 41.9873 37.8391 41.999 36.9577C42.0123 35.9196 41.999 34.8816 41.999 33.8419C41.999 32.6339 41.6907 32.3223 40.4994 32.3223L30.0706 32.324ZM5.99563 45.2587C5.97397 44.1923 5.0509 43.2826 4.03285 43.3226C2.97647 43.3626 2.09005 44.2856 2.12005 45.322C2.15144 45.8244 2.37114 46.2964 2.73529 46.6439C3.09944 46.9913 3.58123 47.1887 4.0845 47.1965C5.06589 47.1848 6.01396 46.2268 5.99563 45.2587ZM56.0501 47.1882C57.0265 47.2048 57.9845 46.2568 57.9812 45.277C57.9731 44.7722 57.7684 44.2905 57.4106 43.9344C57.0528 43.5783 56.5701 43.3759 56.0653 43.3702C55.5605 43.3646 55.0734 43.5561 54.7077 43.9042C54.342 44.2522 54.1266 44.7292 54.1073 45.2337C54.0673 46.2434 54.9854 47.1648 56.0501 47.1832V47.1882ZM31.9884 54.1896C31.9884 53.2065 31.0137 52.2668 30.0423 52.2951C28.9959 52.3284 28.1145 53.1965 28.1128 54.2012C28.1229 54.7152 28.3306 55.2055 28.6926 55.5703C29.0547 55.9352 29.5434 56.1466 30.0573 56.1607C31.0653 56.1773 31.9984 55.2243 31.9884 54.1896ZM16.9926 56.2157C17.0076 55.2409 16.0545 54.2845 15.0764 54.2895C14.5735 54.2987 14.0925 54.497 13.7293 54.8451C13.3662 55.1931 13.1475 55.6652 13.117 56.1673C13.0887 57.1987 13.9718 58.1151 15.0315 58.1568C16.0328 58.1951 16.9759 57.2554 16.9926 56.2157ZM46.9842 56.2157C46.9992 55.2426 46.0478 54.2845 45.0698 54.2895C44.5666 54.2982 44.0851 54.4964 43.7216 54.8445C43.3581 55.1926 43.1392 55.665 43.1086 56.1673C43.0803 57.197 43.9634 58.1135 45.0231 58.1568C46.0245 58.1951 46.9676 57.2554 46.9842 56.2157Z" fill="#314252"></path>
                                    <path d="M26.1142 18.2661C27.8837 18.2661 29.6515 18.2811 31.421 18.2578C31.9359 18.2578 32.1125 18.4244 32.0992 18.9376C32.0575 20.5905 32.2791 20.3389 30.7279 20.3456C27.4188 20.3589 24.1114 20.3339 20.8023 20.3622C20.1708 20.3622 19.9692 20.1839 19.9942 19.5525C20.0525 18.0762 19.8393 18.2795 21.3089 18.2695C22.9101 18.2661 24.513 18.2661 26.1142 18.2661Z" fill="#314252"></path>
                                    <path d="M35.0593 18.2656C36.094 18.2656 36.094 18.2656 36.094 19.317C36.094 20.3684 36.094 20.3501 34.9793 20.3484C34.0063 20.3484 34.0063 20.3484 34.0079 19.2987C34.0096 18.249 34.0079 18.2656 35.0593 18.2656Z" fill="#314252"></path>
                                    <path d="M39.056 18.2656C40.094 18.2656 40.094 18.2656 40.094 19.312C40.094 20.3584 40.094 20.35 38.9843 20.3484C38.0063 20.3484 38.0063 20.3484 38.0079 19.2404C38.0079 18.2656 38.0079 18.2656 39.056 18.2656Z" fill="#314252"></path>
                                    <path d="M26.0062 28.3327C24.2583 28.3327 22.5072 28.316 20.7626 28.3427C20.2145 28.3427 19.9812 28.2127 20.0012 27.6162C20.0545 26.0283 19.8346 26.2583 21.3591 26.2533C24.6682 26.2416 27.9756 26.2616 31.2847 26.2383C31.8895 26.2383 32.1378 26.3716 32.1178 27.0281C32.0562 28.5193 32.2744 28.3194 30.8198 28.3294C29.2103 28.341 27.6074 28.3327 26.0062 28.3327Z" fill="#314252"></path>
                                    <path d="M35.0943 26.2501C36.094 26.2501 36.094 26.2501 36.094 27.3332C36.094 28.3329 36.094 28.3329 34.9477 28.3329C34.0063 28.3329 34.0063 28.3329 34.0079 27.1882C34.0113 26.2485 34.0113 26.2485 35.0943 26.2501Z" fill="#314252"></path>
                                    <path d="M39.081 26.2501C40.0957 26.2501 40.0974 26.2501 40.094 27.3215C40.094 28.4512 40.174 28.3212 38.9593 28.3312C38.0063 28.3312 38.0063 28.3312 38.0079 27.1982C38.0079 26.2485 38.0079 26.2485 39.081 26.2501Z" fill="#314252"></path>
                                    <path d="M25.9874 36.3129C24.2178 36.3129 22.45 36.2979 20.6822 36.3229C20.1673 36.3229 19.9874 36.1563 20.0007 35.6447C20.0423 33.9885 19.8207 34.2401 21.3703 34.2351C24.6794 34.2218 27.9868 34.2451 31.2959 34.2168C31.924 34.2168 32.129 34.3834 32.1057 35.0249C32.0473 36.5028 32.2606 36.3012 30.7927 36.3112C29.1915 36.3229 27.5919 36.3145 25.9874 36.3129Z" fill="#314252"></path>
                                    <path d="M35.027 36.3146C34.0072 36.3146 34.0056 36.3145 34.0089 35.2465C34.0089 34.1118 33.9289 34.2385 35.1403 34.2318C36.0967 34.2318 36.0967 34.2318 36.095 35.3598C36.0933 36.3145 36.0933 36.3146 35.027 36.3146Z" fill="#314252"></path>
                                    <path d="M39.0726 34.2305C40.0957 34.2305 40.0974 34.2305 40.094 35.2935C40.094 36.4315 40.1723 36.3066 38.9677 36.3132C38.0063 36.3132 38.0063 36.3132 38.0079 35.1902C38.0079 34.2305 38.0079 34.2305 39.0726 34.2305Z" fill="#314252"></path>
                                 </g>
                                 <defs>
                                    <clipPath id="cpmobileappdevel11">
                                       <rect width="60.12" height="60" fill="white" transform="translate(0 0.28125)"></rect>
                                    </clipPath>
                                 </defs>
                              </svg>
                              <h4>Cloud</h4>
                           </div>
                           <p>You can make your business more secure and innovative by moving to the cloud.</p>
                        </div>
                        <div class="robust-content">
                           <div class="robust-flex">
                              <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#cpmobileappdevel12)">
                                    <path d="M4.37792 15.6504C6.16242 13.8825 8.1906 12.3788 10.4009 11.1852C10.6608 11.04 10.8696 10.8181 10.9988 10.5498C12.1995 8.34346 13.7374 6.33808 15.5568 4.60614C15.328 4.69733 15.2055 4.73619 15.0919 4.7915C13.9217 5.37953 12.8027 6.06407 11.7463 6.83802C11.1573 7.26257 10.6146 7.2252 10.2618 6.75729C9.90904 6.28939 10.066 5.69891 10.649 5.27585C14.5507 2.449 18.8889 0.762755 23.7054 0.384546C32.1307 -0.286663 39.3032 2.44302 45.1228 8.53622C48.9483 12.541 51.1936 17.3561 51.8917 22.8603C52.7528 29.6472 51.24 35.8839 47.2262 41.4359C43.0285 47.2421 37.3449 50.797 30.2501 51.9211C22.5903 53.135 15.6509 51.3052 9.62053 46.4319C4.27179 42.1101 1.1325 36.4758 0.235564 29.6606C-0.6539 22.7916 0.983012 16.5294 5.01923 10.8967C5.18517 10.6664 5.35858 10.4392 5.64709 10.366C6.05819 10.2613 6.43191 10.3271 6.69352 10.6919C6.9925 11.0925 6.94765 11.4961 6.66362 11.8878C5.90912 12.9055 5.23536 13.9806 4.6485 15.1033C4.55582 15.2827 4.46762 15.4666 4.37792 15.6504ZM23.2271 9.42718C20.309 9.51687 15.0231 10.9221 12.4982 12.2451C12.1439 12.4304 12.0124 12.7399 11.8644 13.0583C10.3545 16.3246 9.52784 19.7674 9.20495 23.3402C9.18103 23.6018 9.24082 23.7588 9.47253 23.8828C11.3456 24.9009 11.2978 27.6993 9.44413 28.659C9.35085 28.7002 9.27479 28.7725 9.22897 28.8636C9.18315 28.9547 9.17043 29.0589 9.19299 29.1583C9.52934 32.6893 10.3291 36.0991 11.7986 39.3431C11.9023 39.5984 12.0553 39.8307 12.249 40.0267C12.4427 40.2226 12.6732 40.3785 12.9272 40.4852C16.1786 41.9517 19.5915 42.7574 23.1299 43.0938C23.2376 43.1192 23.3507 43.1064 23.45 43.0576C23.5493 43.0088 23.6285 42.927 23.6741 42.8262C24.7011 40.9411 27.507 41.0069 28.4577 42.8486C28.4989 42.9418 28.5713 43.0177 28.6625 43.0633C28.7536 43.1088 28.8578 43.1212 28.957 43.0982C32.5537 42.7589 36.0204 41.9352 39.3167 40.4313C39.7437 40.247 40.0825 39.9039 40.2614 39.4746C41.7563 36.2008 42.5815 32.758 42.9223 29.1882C42.9508 28.8892 42.8327 28.7622 42.6054 28.6157C40.7876 27.4512 40.7996 25.0847 42.6264 23.8993C42.8342 23.7662 42.9522 23.6466 42.9253 23.3716C42.5845 19.7838 41.7563 16.3216 40.251 13.0314C40.0659 12.6046 39.7224 12.2664 39.2927 12.0881C36.0129 10.5932 32.5657 9.76652 28.9869 9.43465C28.7253 9.41073 28.5684 9.47053 28.4428 9.70075C27.4128 11.5918 24.6039 11.517 23.6591 9.68131C23.5664 9.50342 23.4409 9.37785 23.2271 9.42718ZM42.8401 14.2288C42.8626 14.3125 42.879 14.4007 42.9089 14.4829C43.9476 17.3004 44.589 20.2487 44.8149 23.243C44.8201 23.3626 44.8581 23.4785 44.9248 23.5779C44.9916 23.6773 45.0844 23.7565 45.1931 23.8066C47.262 25.0324 47.277 27.5109 45.217 28.7069C45.0939 28.7677 44.9904 28.8619 44.9182 28.9787C44.846 29.0955 44.8082 29.2303 44.8089 29.3676C44.6579 31.4121 44.3023 33.4364 43.7475 35.41C43.474 36.3847 43.1496 37.3534 42.8506 38.3549C47.0513 35.7015 50.3894 31.1286 50.21 25.9996C50.0231 20.7151 47.0348 17.084 42.8401 14.2288ZM13.9886 43.0295C13.9512 43.2223 14.0858 43.3195 14.168 43.4331C15.4506 45.227 16.9425 46.8041 18.7828 48.0284C22.5947 50.5697 26.6489 51.1363 30.9198 49.3529C33.9575 48.0837 36.2357 45.8788 38.1028 43.2238C38.1417 43.1655 38.191 43.0938 38.1028 43.028C38.0659 43.0302 38.0293 43.0362 37.9937 43.0459C35.1191 44.1077 32.1101 44.7618 29.0542 44.9893C28.7672 45.0102 28.6386 45.1732 28.5086 45.3944C27.3246 47.42 24.7893 47.4305 23.6247 45.4094C23.5675 45.2842 23.4761 45.1777 23.3611 45.1021C23.246 45.0265 23.1121 44.9848 22.9744 44.9818C20.9073 44.8338 18.8606 44.4751 16.8663 43.9115C15.9021 43.6394 14.9513 43.3255 13.9886 43.0295ZM38.2583 9.58414C38.1088 9.33001 38.0415 9.2164 37.9668 9.11325C36.6737 7.3104 35.1653 5.71684 33.3102 4.47907C29.7643 2.11564 25.9583 1.47283 21.8981 2.90345C19.0578 3.90503 16.8155 5.76618 14.9379 8.08775C14.5851 8.52576 14.1904 8.94283 13.9363 9.52883C14.0297 9.51032 14.122 9.48687 14.2129 9.45857C17.0537 8.41207 20.0269 7.76801 23.0462 7.5451C23.3616 7.52268 23.4947 7.34329 23.6292 7.1056C24.7788 5.1144 27.341 5.10992 28.4846 7.1056C28.5452 7.23921 28.643 7.35255 28.7662 7.43208C28.8895 7.51161 29.0331 7.55396 29.1798 7.55407C30.4085 7.63572 31.6302 7.80154 32.8363 8.05038C34.6833 8.40924 36.497 8.92229 38.2583 9.58414ZM9.29016 14.2363C9.24007 14.2139 9.18418 14.2079 9.13048 14.2191C9.07678 14.2304 9.02802 14.2584 8.99118 14.299C7.16142 15.5832 5.54843 17.096 4.28375 18.9542C2.07578 22.1951 1.30442 25.7201 2.37327 29.535C3.44212 33.35 5.94607 36.0946 9.12422 38.3086C9.15711 38.331 9.2184 38.3086 9.27371 38.3086C9.27092 38.2621 9.26341 38.216 9.25129 38.1711C8.18681 35.3035 7.53256 32.3 7.30792 29.2495C7.28699 28.961 7.12255 28.8339 6.89982 28.7054C4.86675 27.5199 4.85629 24.9965 6.88337 23.832C7.00907 23.776 7.11628 23.6854 7.19249 23.5708C7.26871 23.4562 7.31082 23.3223 7.3139 23.1847C7.46971 21.1218 7.82669 19.079 8.37976 17.0855C8.63539 16.1228 8.94932 15.1736 9.29016 14.2363ZM36.6886 4.65397C38.317 6.25182 39.7129 8.07043 40.8355 10.0565C41.1663 10.6764 41.6735 11.1841 42.293 11.5156C44.292 12.6336 46.1191 14.0343 47.718 15.6744C45.2873 10.7551 41.6108 7.08168 36.6886 4.65397ZM4.40633 36.8705C6.846 41.7768 10.5269 45.4467 15.4491 47.8804C13.6153 46.0767 12.0672 44.0039 10.8583 41.7334C10.7447 41.5211 10.5429 41.4269 10.347 41.3193C8.16216 40.1314 6.16109 38.6328 4.40633 36.8705ZM36.6692 47.8685C41.1031 45.943 46.8046 40.2071 47.6911 36.8167C45.9434 38.6424 43.9164 40.1784 41.6861 41.3672C41.4861 41.4648 41.3207 41.6213 41.2122 41.8156C40.0143 44.0524 38.4823 46.0934 36.6692 47.8685ZM26.8896 8.35534C26.889 8.19112 26.8397 8.03077 26.7479 7.8946C26.6561 7.75843 26.526 7.65257 26.3739 7.59041C26.2219 7.52825 26.0549 7.5126 25.894 7.54544C25.7331 7.57828 25.5856 7.65812 25.4701 7.77487C25.3546 7.89162 25.2764 8.04001 25.2453 8.20126C25.2142 8.36251 25.2316 8.52936 25.2954 8.68068C25.3592 8.832 25.4665 8.96098 25.6036 9.05129C25.7408 9.1416 25.9017 9.18918 26.0659 9.188C26.2815 9.17468 26.4847 9.08242 26.6366 8.92884C26.7886 8.77525 26.8786 8.5711 26.8896 8.35534ZM8.11517 27.0924C8.33481 27.094 8.54609 27.0082 8.70252 26.854C8.85896 26.6998 8.94773 26.4898 8.94932 26.2702C8.9509 26.0505 8.86517 25.8393 8.71098 25.6828C8.55679 25.5264 8.34677 25.4376 8.12713 25.436C8.01837 25.4352 7.91052 25.4559 7.80974 25.4968C7.70896 25.5377 7.61723 25.598 7.53977 25.6744C7.38333 25.8286 7.29456 26.0386 7.29297 26.2582C7.29139 26.4779 7.37712 26.6892 7.53131 26.8456C7.6855 27.002 7.89552 27.0908 8.11517 27.0924ZM44.8269 26.3046C44.8349 26.1407 44.7942 25.9781 44.7099 25.8374C44.6256 25.6966 44.5014 25.584 44.3531 25.5138C44.2048 25.4436 44.0391 25.419 43.8768 25.443C43.7145 25.467 43.5629 25.5386 43.4413 25.6487C43.3197 25.7589 43.2334 25.9026 43.1935 26.0617C43.1535 26.2208 43.1617 26.3882 43.2168 26.5428C43.272 26.6973 43.3718 26.832 43.5035 26.9298C43.6352 27.0276 43.793 27.0842 43.9568 27.0924C44.1733 27.091 44.3818 27.0099 44.5422 26.8646C44.7027 26.7193 44.8041 26.5199 44.8269 26.3046ZM26.0584 43.3464C25.8947 43.347 25.7348 43.3961 25.599 43.4875C25.4631 43.579 25.3575 43.7086 25.2953 43.8601C25.2331 44.0115 25.2172 44.178 25.2496 44.3385C25.282 44.499 25.3613 44.6463 25.4774 44.7617C25.5935 44.8772 25.7412 44.9557 25.9019 44.9872C26.0625 45.0188 26.2289 45.002 26.3801 44.939C26.5312 44.876 26.6603 44.7696 26.7509 44.6333C26.8416 44.4969 26.8899 44.3368 26.8896 44.1731C26.8788 43.956 26.7878 43.7507 26.6342 43.5968C26.4807 43.443 26.2755 43.3516 26.0584 43.3404V43.3464Z" fill="#314252"></path>
                                    <path d="M9.25668 8.5472C9.24371 8.80105 9.13414 9.04034 8.95041 9.216C8.76669 9.39166 8.52274 9.4904 8.26856 9.49198C8.1437 9.48746 8.02096 9.4584 7.90734 9.40645C7.79371 9.35449 7.69144 9.28067 7.60634 9.18919C7.43449 9.00444 7.34307 8.75899 7.35218 8.50684C7.3567 8.38198 7.38576 8.25924 7.43771 8.14562C7.48967 8.03199 7.56349 7.92972 7.65497 7.84462C7.83972 7.67277 8.08517 7.58135 8.33732 7.59047C8.58079 7.61063 8.80852 7.71895 8.97779 7.8951C9.14706 8.07126 9.24623 8.30312 9.25668 8.5472Z" fill="#314252"></path>
                                    <path d="M14.3634 26.2482C14.3634 23.955 14.3753 21.6618 14.3544 19.3716C14.3544 18.7737 14.5786 18.3955 15.1018 18.1324C18.5291 16.4322 21.9529 14.7235 25.3733 13.0064C25.5861 12.8905 25.8249 12.8305 26.0673 12.8321C26.3097 12.8336 26.5477 12.8967 26.759 13.0153C30.1624 14.7225 33.5698 16.4227 36.9811 18.1159C37.5298 18.388 37.766 18.7737 37.763 19.397C37.747 23.9814 37.747 28.5657 37.763 33.1501C37.763 33.7735 37.5343 34.1606 36.9841 34.4327C33.5728 36.1269 30.1649 37.8266 26.7605 39.5318C26.5398 39.6522 26.2919 39.7141 26.0405 39.7117C25.7891 39.7094 25.5424 39.6428 25.3239 39.5184C21.9355 37.8172 18.5441 36.1259 15.1497 34.4447C14.5771 34.1606 14.3364 33.7705 14.3439 33.1247C14.3798 30.8315 14.3634 28.5383 14.3634 26.2482ZM25.1266 31.1484C25.1266 29.3217 25.1161 27.4934 25.1266 25.6666C25.1266 25.2645 25.016 25.0268 24.6378 24.84C22.0068 23.5444 19.3837 22.2368 16.7686 20.9174C16.383 20.717 16.2335 20.717 16.2335 21.2283C16.2474 24.9376 16.2474 28.647 16.2335 32.3563C16.2214 32.5032 16.2574 32.6501 16.3362 32.7747C16.4149 32.8993 16.5321 32.9948 16.67 33.0469C19.313 34.355 21.95 35.6765 24.5929 36.989C25.1027 37.2446 25.1296 37.2237 25.1311 36.6257C25.1301 34.799 25.1286 32.9722 25.1266 31.1454V31.1484ZM26.9982 31.138C26.9982 32.9647 26.9982 34.7915 26.9982 36.6183C26.9982 37.2356 27.0236 37.2521 27.5767 36.977C30.1838 35.678 32.785 34.3699 35.3966 33.0903C35.7718 32.9064 35.8973 32.6762 35.8958 32.2681C35.8824 28.6146 35.8958 24.961 35.8869 21.3075C35.8869 20.6856 35.8674 20.6737 35.3113 20.9517C32.7057 22.2493 30.1031 23.5573 27.4915 24.8385C27.3312 24.9004 27.1957 25.0135 27.1063 25.1603C27.0168 25.3071 26.9783 25.4793 26.9967 25.6502C27.0102 27.4799 26.9967 29.3082 26.9967 31.135L26.9982 31.138ZM26.0833 23.3645C26.2553 23.2912 26.4122 23.2344 26.5617 23.1597C29.0672 21.912 31.5716 20.6617 34.0751 19.409C34.2246 19.3357 34.4443 19.3073 34.4593 19.1235C34.4742 18.9396 34.238 18.8992 34.0975 18.8245C31.5786 17.5598 29.0537 16.3071 26.5378 15.0379C26.3931 14.9556 26.2296 14.9123 26.0632 14.9123C25.8967 14.9123 25.7332 14.9556 25.5885 15.0379C23.0711 16.3056 20.5462 17.5568 18.0258 18.82C17.8868 18.8903 17.6566 18.9097 17.6656 19.119C17.6656 19.2804 17.8734 19.3133 18.0019 19.3776C20.5393 20.6463 23.0776 21.913 25.6169 23.1776C25.7649 23.2584 25.9264 23.3032 26.0833 23.363V23.3645Z" fill="#314252"></path>
                                 </g>
                                 <defs>
                                    <clipPath id="cpmobileappdevel12">
                                       <rect width="52.1166" height="52" fill="white" transform="translate(0 0.28125)"></rect>
                                    </clipPath>
                                 </defs>
                              </svg>
                              <h4>Metaverse</h4>
                           </div>
                           <p>You can easily create a multi-dimensional space for your business that quickly stimulates
                              your business operations and improves your overall strategies in a metaverse world.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="result-driven-sec why-chose-bg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-7">
                  <div class="result-driven-content">
                     <h2>Why Clients Choose ArtisticWebServices as Their <span>#1 Mobile App Development</span> Partner in Bahrain?</h2>
                     <p>Our expert team crafts high-performance, user-centric apps that align with your business goals. Whether it's iOS, Android, or cross-platform solutions like Flutter and React Native, we build future-ready mobile experiences that grow with you.</p>
                     <div class="dubai-btns mt-4 mb-4">
                        <a href="contact-us.php">Talk to Our Experts</a>
                     </div>
                  </div>
                  <div class="row align-items-center mt-4">
                     <div class="col-md-6">
                        <div class="innovations-count trusted-dubai-box">
                           <!--<img src="<?= $B ?>/assets/images/dubai/uae-market-1new.webp">-->
                           <h5>Transparency</h5>
                           <p>We provide complete clarity on timelines, budgets, and progress updates, with no hidden surprises.</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="innovations-count trusted-dubai-box">
                           <!--<img src="<?= $B ?>/assets/images/dubai/uae-market-1new.webp">-->
                           <h5>Skilled Team</h5>
                           <p>Our pro Bahrain-based developers, designers, and strategists bring deep domain knowledge and technical excellence to every project.</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="innovations-count trusted-dubai-box">
                           <!--<img src="<?= $B ?>/assets/images/dubai/uae-market-1new.webp">-->
                           <h5>Quality Assurance</h5>
                           <p>Each app undergoes extensive testing to ensure it's secure, smooth, and ready for launch.</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="innovations-count trusted-dubai-box">
                           <!--<img src="<?= $B ?>/assets/images/dubai/uae-market-1new.webp">-->
                           <h5>24/7 Support</h5>
                           <p>Day or night, our support team is here to assist you, resolve your queries, and keep your app running seamlessly.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="cost-build-dubai p-100">
         <div class="container">
            <div class="row">
               <div class="m-auto text-center col-xxl-7 col-xl-7 col-lg-12 col-md-12 col-12">
                  <h2>Cost of Mobile <span style="color: #ec1c22">App Development</span> Bahrain</h2>
                  <p>Need a powerful mobile app for your Bahrain-based business? Find out what it takes and costs to create a top-notch, user-friendly app in Bahrain.
                  </p>
                  <p>As a trusted mobile app development company in Bahrain, we tailor every project to fit your budget. Generally, your project cost could be as low as 1K BHD or as high as 20K BHD. depending upon the project scope and features. Below are key factors that influence your app development cost. Also, you can reach us out and get a custom app cost estimate aligned with your goals for free!</p>
               </div>
            </div>
            <div class="mt-3 mt-md-5 row">
              <div class="mb-4 mb-md-0 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-12">
                  <div class="cost-build-box">
                     <div class="num">SIMPLE APP</div>
                     <h5>1K BHD - 10K BHD</h5>
                     <p>This plan includes all the essential features to get you started, a user-friendly interface, core functionality, and cross-platform compatibility. It also covers basic UI/UX design and integration with third-party services.</p>
                  </div>
               </div>
               <div class="mb-4 mb-md-0 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-12">
                  <div class="cost-build-box">
                     <div class="num">MID-TIER APP</div>
                     <h5>11K BHD - 15K BHD</h5>
                     <p>This plan builds on all the features of the Simple Apps package, adding advanced user engagement tools, in-depth app analytics, and seamless integration with leading social media platforms.</p>
                  </div>
               </div>
               <div class="mb-4 mb-md-0 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-12">
                  <div class="cost-build-box">
                     <div class="num">COMPLEX APP</div>
                     <h5>16K BHD - 20K BHD</h5>
                     <p>This plan includes all the features from the Simple and Standard App packages, plus custom design, detailed analytics, advanced AI integration, AR/VR functionality for immersive user experiences.</p>
                  </div>
               </div>
               <!--<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-12">-->
               <!--   <div class="cost-build-box">-->
               <!--      <div class="num">04</div>-->
               <!--      <h5>Third-Party Integrations</h5>-->
               <!--      <p>APIs, payment gateways, and CRM systems add complexity and expenses.</p>-->
               <!--   </div>-->
               <!--</div>-->
            </div>
            <div class="mt-3 mt-md-5 row premium-btn">
               <div class="m-auto text-center col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12"><a class="border_btn" aria-label="ArtisticWebServices Contact" href="https://www.ArtisticWebServices.com/contact">Talk to Our Experts</a></div>
            </div>
         </div>
      </section>
      <div class="tekstack_dark_bg tabing_section web_tabs_sec p-100" style="background: rgb(5, 24, 39);">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 col-md-6">
                  <h3 class="h3_head">Latest Tech Stacks We Use For Tailored  <span>Mobile App Development</span> in Bahrain</h3>
               </div>
               <div class="col-xs-12 col-md-6">
                  <p>Being the #1 mobile app development company in Bahrain means mastering the latest technologies and frameworks. We leverage modern stacks, proven methodologies, and scalable architectures to build robust digital solutions. From native apps to cross-platform builds using Flutter, React Native, Node.js, and TypeScript, we craft high-performance, future-ready apps built to scale and adapt for the future.
                  </p>
               </div>
            </div>
            <section class="technologies-tabs">
         <div class="technologies-tabs-container">
         
            <!-- Tabs -->
            <div class="technologies-tabs">
               <div class="tab" data-tab="programming">Programming Languages</div>
               <div class="tab" data-tab="frameworks">Frameworks</div>
               <div class="tab" data-tab="databases">Databases</div>
               <div class="tab" data-tab="devops">DevOps</div>
               <div class="tab" data-tab="payment">Payment Gateways</div>
               <div class="tab" data-tab="cloud">Clouds</div>
            </div>
            <!-- Slider Container -->
            <div class="slider-container">
               <div id="programming" class="slider swiper marquee">
                  <div class="marquee-content">
                     <img src="<?= $B ?>/assets/images/techslide/javascript-1.webp" alt="javascript logo"> 
                     <img src="<?= $B ?>/assets/images/techslide/Java.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Kotlin.webp" alt="javascript logo"> 
                     <img src="<?= $B ?>/assets/images/techslide/Swift.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Python.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/objC.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/c-3.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/c-2.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/javascript-1.webp" alt="javascript logo"> 
                     <img src="<?= $B ?>/assets/images/techslide/Java.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Kotlin.webp" alt="javascript logo"> 
                     <img src="<?= $B ?>/assets/images/techslide/Swift.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Python.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/objC.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/c-3.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/c-2.webp" alt="javascript logo">
                  </div>
               </div>
               <div id="frameworks" class="slider swiper">
                  <div class="marquee-content">
                     <img src="<?= $B ?>/assets/images/techslide/Appcelerator_logo.webp" alt="javascript logo"> 
                     <img src="<?= $B ?>/assets/images/techslide/flutter-logo.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Lonic.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Node.JS_.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Phonegap.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/xamarin.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Oracle.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Appcelerator_logo.webp" alt="javascript logo"> 
                     <img src="<?= $B ?>/assets/images/techslide/flutter-logo.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Lonic.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Node.JS_.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Phonegap.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/xamarin.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Oracle.webp" alt="javascript logo">
                  </div>
               </div>
               <div id="databases" class="slider swiper active">
                  <div class="marquee-content">
                     <!-- /.swiper-slide -->
                     <img src="<?= $B ?>/assets/images/techslide/Oracle.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/PostgreSQL.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/SQL-Server.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Apache-Haase.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Apache-nifi.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Cassandra.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Hive.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/MongoDB.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Oracle.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/PostgreSQL.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/SQL-Server.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Apache-Haase.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Apache-nifi.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Cassandra.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Hive.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/MongoDB.webp" alt="javascript logo">
                     <!-- /.swiper-slide -->
                  </div>
               </div>
               <div id="devops" class="slider swiper">
                  <div class="marquee-content">
                     <!-- /.swiper-slide -->
                     <img src="<?= $B ?>/assets/images/techslide/openshift.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Puppet.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Saltstack.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/SQL-Server-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Terraform.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Ansible.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Chef.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Docker.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Kubernet.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/openshift.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Puppet.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Saltstack.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/SQL-Server-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Terraform.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Ansible.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Chef.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Docker.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Kubernet.webp" alt="javascript logo">
                  </div>
               </div>
               <div id="payment" class="slider swiper">
                  <div class="marquee-content">
                     <img src="<?= $B ?>/assets/images/techslide/Adyen.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Alipay.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/paypal.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Square.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Stripe.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Adyen.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Alipay.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/paypal.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Square.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Stripe.webp" alt="javascript logo">
                  </div>
               </div>
               <div id="cloud" class="slider swiper marquee">
                  <div class="marquee-content">
                     <img src="<?= $B ?>/assets/images/techslide/Google-Cloud-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/AWS-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Azure-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Digital-Ocean-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Google-Cloud-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/AWS-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Azure-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Digital-Ocean-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Google-Cloud-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/AWS-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Azure-1.webp" alt="javascript logo">
                     <img src="<?= $B ?>/assets/images/techslide/Digital-Ocean-1.webp" alt="javascript logo">
                  </div>
               </div>
            </div>
         </div>
      </section>
            
           
         </div>
      </div>
      <section class="industry_uk_app p-100">
         <div class="container">
            <div class="row">
               <div class="m-auto text-center col-xxl-9 col-xl-9 col-lg-12 col-md-12 col-12">
                  <h2>Industries We Serve As A Leading <span> Mobile App Development Company</span> in Bahrain</h2>
                  <p>Whether you're launching the next big delivery app or meeting Bahrain's evolving tech-driven future, we've got you covered. For 6+ years, we've been the go-to app development crew for 12+ industries
                  </p>
               </div>
            </div>
            <div class="mt-3 row">
               <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12">
                  <div class="industy_uk_main">
                     <div class="industy_uk_item">
                        <div class="industry_uk_icon">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="90" height="89" fill="none" viewBox="0 0 90 89">
                              <mask id="mask0_7364_1960" width="90" height="89" x="0" y="0" maskUnits="userSpaceOnUse" style="mask-type: alpha;">
                                 <path fill="url(#pattern0_7364_1960)" d="M0 0H90V89H0z"></path>
                              </mask>
                              <g mask="url(#mask0_7364_1960)">
                                 <path fill="#F47A1F" d="M0 -1H90V89H0z"></path>
                              </g>
                              <defs>
                                 <pattern id="pattern0_7364_1960" width="1" height="1" patternContentUnits="objectBoundingBox">
                                    <use transform="matrix(.00781 0 0 .0079 0 -.006)" xlink:href="#image0_7364_1960"></use>
                                 </pattern>
                                 <image id="image0_7364_1960" width="128" height="128" xlink:href="data:image/png;base64,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">
                                 </image>
                              </defs>
                           </svg>
                        </div>
                        <div class="industry_uk_content">
                           <h5>E-commerce</h5>
                        </div>
                     </div>
                     <div class="industy_uk_item">
                        <div class="industry_uk_icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="89" height="89" fill="none" viewBox="0 0 89 89">
                              <mask id="mask0_7364_1966" width="89" height="89" x="0" y="0" maskUnits="userSpaceOnUse" style="mask-type: alpha;">
                                 <path fill="url(#pattern0_7364_1966)" d="M0 0H89V89H0z"></path>
                              </mask>
                              <g mask="url(#mask0_7364_1966)">
                                 <path fill="#F47A1F" d="M0 -1H90V89H0z"></path>
                              </g>
                              <defs>
                                 <pattern id="pattern0_7364_1966" width="1" height="1" patternContentUnits="objectBoundingBox">
                                    <use transform="scale(.00781)" xlink:href="#image0_7364_1966"></use>
                                 </pattern>
                                 <image id="image0_7364_1966" width="128" height="128" xlink:href="data:image/png;base64,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">
                                 </image>
                              </defs>
                           </svg>
                        </div>
                        <div class="industry_uk_content">
                           <h5>Taxi Booking</h5>
                        </div>
                     </div>
                     <div class="industy_uk_item">
                        <div class="industry_uk_icon">
                           <img width="90" height="89" src="<?= $B ?>/assets/images/dubai/tourism.webp" alt="ArtisticWebServices">
                        </div>
                        <div class="industry_uk_content">
                           <h5>Tourism</h5>
                        </div>
                     </div>
                     <div class="industy_uk_item">
                        <div class="industry_uk_icon">
                           <img width="90" height="89" src="<?= $B ?>/assets/images/dubai/healthcare.webp" alt="ArtisticWebServices">
                        </div>
                        <div class="industry_uk_content">
                           <h5>Healthcare </h5>
                        </div>
                     </div>
                     <div class="industy_uk_item">
                        <div class="industry_uk_icon">
                           <img width="90" height="89" src="<?= $B ?>/assets/images/dubai/retail.webp" alt="ArtisticWebServices">
                        </div>
                        <div class="industry_uk_content">
                           <h5>Retail</h5>
                        </div>
                     </div>
                     <div class="industy_uk_item">
                        <div class="industry_uk_icon">
                           <img width="90" height="89" src="<?= $B ?>/assets/images/dubai/real_estate.webp" alt="ArtisticWebServices">
                        </div>
                        <div class="industry_uk_content">
                           <h5>Real Estate</h5>
                        </div>
                     </div>
                     <div class="industy_uk_item">
                        <div class="industry_uk_icon">
                           <img width="90" height="89" src="<?= $B ?>/assets/images/dubai/metaverse.webp" alt="ArtisticWebServices">
                        </div>
                        <div class="industry_uk_content">
                           <h5>Metaverse</h5>
                        </div>
                     </div>
                     <div class="industy_uk_item">
                        <div class="industry_uk_icon">
                           <img width="90" height="89" src="<?= $B ?>/assets/images/dubai/oil.webp" alt="ArtisticWebServices">
                        </div>
                        <div class="industry_uk_content">
                           <h5>Oil &amp; Gas</h5>
                        </div>
                     </div>
                     <div class="industy_uk_item">
                        <div class="industry_uk_icon">
                           <img width="90" height="89" src="<?= $B ?>/assets/images/dubai/banking.webp" alt="ArtisticWebServices">
                        </div>
                        <div class="industry_uk_content">
                           <h5>Banking</h5>
                        </div>
                     </div>
                     <div class="industy_uk_item">
                        <div class="industry_uk_icon">
                           <img width="90" height="89" src="<?= $B ?>/assets/images/dubai/manufacturing.webp" alt="ArtisticWebServices">
                        </div>
                        <div class="industry_uk_content">
                           <h5>Manufacturing</h5>
                        </div>
                     </div>
                     <div class="industy_uk_item">
                        <div class="industry_uk_icon">
                           <img width="90" height="89" src="<?= $B ?>/assets/images/dubai/Logistics.webp" alt="ArtisticWebServices">
                        </div>
                        <div class="industry_uk_content">
                           <h5>Logistics</h5>
                        </div>
                     </div>
                     <div class="industy_uk_item">
                        <div class="industry_uk_icon">
                           <img width="90" height="89" src="<?= $B ?>/assets/images/dubai/finTech.webp" alt="ArtisticWebServices">
                        </div>
                        <div class="industry_uk_content">
                           <h5>FinTech</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mt-4 row">
               <div class="m-auto text-center col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 premium-btn"><a class="border_btn" aria-label="ArtisticWebServices Contact" href="https://www.ArtisticWebServices.com/contact">Get Industry Specific App Development</a>
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
                        <h4>Build your Hi-Tech Mobile App with Our Experts Today</h4>
                        <h2>
                           Our </br> Experts
                        </h2>
                        <p>We'd love to hear from you! Fill out the form below, and one of our experts will be in touch with you as soon as possible.</p>
                        <strong>
                        Turn your vision into a digital product
                        </strong>
                        <p>Have a brilliant app idea? Let's bring it to life. Team up with one of the top app developers in Bahrain to transform your concepts into scalable, user-centric digital products with real-world impact.</p>
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
                               let selectedOptions = $('.js-example-basic-multiple').val();
                           
                           
                           
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
                           
                               if (!selectedOptions || selectedOptions.length === 0) {
                                 $('#project-valid').text("Please select at least one option");
                                 return false;
                               } else {
                                 $('#project-valid').text("");
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
                           </script> -->                            
                     </div>
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
                     <h2 style="color: #ec1c22">Mobile App Development FAQ</h2>
                  </div>
               </div>
            </div>
            <div class="col-md-12 mt-4">
               <div class="accordion" id="accordionExample-v2">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne-v2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           <div class="row w-100">
                              <div class="col-1">01</div>
                              <div class="col-11"> What are the benefits of a mobile app for my business?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseOne-v2" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                <p>A mobile app increases customer interaction, generates brand visibility, and offers a hassle-free shopping or service experience. It enables you to engage with your users directly through notifications, simplify transactions, and deliver differentiated value-added services, resulting in enhanced customer loyalty and increased revenue.</p>
                                <p>If you're searching for top mobile app development companies in Bahrain, partner with Brand Name today to make your mark.</p>
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwo-v2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                           <div class="row w-100">
                              <div class="col-1">02</div>
                              <div class="col-11">How long does it take to create a mobile app?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseTwo-v2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 <p>The time taken to create a mobile app varies based on complexity, design needs, and the platform (iOS, Android, or both). On average, simple applications can be done in 2-3 months, while complex ones could take 6 months or more. We collaborate with you to establish milestones and deliver your app on schedule.</p>
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree-v2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                           <div class="row w-100">
                              <div class="col-1">03</div>
                              <div class="col-11">Can your app development company in Bahrain build cross-platform apps? 
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseThree-v2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                <p>Absolutely. As a leading mobile app development company in Bahrain, we specialize in building cross-platform apps using frameworks like Flutter and React Native. These apps run seamlessly on both iOS and Android, saving time and cost while ensuring consistency in user experience.</p>
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingFour-v2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           <div class="row w-100">
                              <div class="col-1">04</div>
                              <div class="col-11">What does mobile app development cost?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseFour-v2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                <p>The cost of mobile app development can vary widely depending on several factors, including the complexity of the app, the platforms you choose (iOS, Android, or both), the features required, and the development team's expertise. On average, a simple app with basic features can range from $10,000 to $50,000, while more complex apps with advanced functionalities can cost upwards of $100,000 or more.</p>
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingFive-v2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                           <div class="row w-100">
                              <div class="col-1">05</div>
                              <div class="col-11"> How do I find the best app developers in Bahrain for my project?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseFive-v2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                <p>Start by researching app developers in Bahrain with a proven track record, client testimonials, and a vast portfolio. Choose a partner that understands your industry and offers end-to-end services, from design to deployment. [Brand Name] is recognized as one of the top app developers Bahrain businesses trust for scalable and results-driven mobile apps.</p>
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingSix-v2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                           <div class="row w-100">
                              <div class="col-1">06</div>
                              <div class="col-11">What industries do your app developers in Bahrain serve?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseSix-v2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 <p>Our best mobile app developers in Bahrain have worked with clients across 15+ industries, including healthcare, E-commerce, logistics, fintech, education, and more. Whether you're a startup or an enterprise, we customize the development process to suit your specific industry challenges and goals.</p>
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
                              <div class="col-11"> Do you offer ongoing app maintenance and updates?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                               <p>Yes, we provide extensive post-launch support, such as frequent updates, bug patches, and feature additions. We aim to keep your app updated and running at its best, ensuring that you have a smooth user experience. If you're looking for a mobile app development company in Bahrain, you need to partner with a reputable and credible agency.</p>
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>
