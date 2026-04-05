<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'Hotel Booking App Development | Travel Tech Case Study — ArtisticWebServices';
$page_description = 'Case study: ArtisticWebServices built a hotel booking app with real-time availability, room comparison, secure payment gateway, loyalty rewards, and multi-language support.';
$page_keywords = 'hotel booking app development, travel booking app case study, accommodation booking platform, hotel reservation app, OTA app development, hospitality app development USA';
$page_canonical = 'https://artisticwebservices.com/insights/hotel-booking-app';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
$page_breadcrumbs = [['name' => 'Insights', 'url' => 'https://artisticwebservices.com/insights/digital-insights.php'], ['name' => 'Hotel Booking App', 'url' => 'https://artisticwebservices.com/insights/hotel-booking-app.php']];
$page_article_schema = ['type' => 'Article', 'date' => '2024-02-05'];
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<section class="about-page t-and-b white__main">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class=" mt-2">
                            <div> 
                                <!-- <img style=" width: 100px; height:100px;" class="img-fluid mb-2"
                                    src="<?= $B ?>/assets/images/project/hotel-booking/logo.webp" alt="layout styles"> -->
                                <h1 class="section-title__title mb-3">Simplified Hotel Reservations at Your Fingertips with Hotel Booking Mobile </h1>
                            </div>
                            <p class="laundry-content">This app, like Airbnb (or some sort of Airbnb clone), is a hotel booking app.
                                Available in two versions - Need for Guest and Need for Hosts. It offers more than one
                                view; It offers VR experience in the hotel's mobile booking app. </p>
                            <div class="col-md-12 mb-4">
                                <img class="img-fluid"
                                        src="<?= $B ?>/assets/images/project/play-store.webp" alt="">
                                <img class="img-fluid"
                                        src="<?= $B ?>/assets/images/project/app-store.webp" alt="">
                            </div> <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn">Get Your Free Quote</a>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <!-- <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img class="img-fluid" src="<?= $B ?>/assets/images/project/hotel-booking/top-banner.webp" alt="">
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!--Services Two Start-->
        <section class="services-two">
            <div class="services-two-shape" style="background-image: url(<?= $B ?>/assets/images/shapes/services-two-shape.webp)">
            </div>
            <div class="container">
                <div class="section-title text-center mb-0">
                    <h2 class="section-title__title col-md-10 m-auto">Key Features of this App</h2>
                </div>
            </div>
        </section>
        <!--Services Two End-->
        <section class="about-page pt-0 mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                            <img width="270px" class="img-fluid" src="<?= $B ?>/assets/images/project/hotel-booking/1.webp" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">1</div>
                            <h2 class="section-title__title mb-3">Login</h2>
                            <p class="">Unlike some travel apps, this travel app allows the user to log in as a guest and explore the cabin. The user can download the app via Google Play Store and then users can register themselves. Users can also log in at any time when they want to confirm the online ordering service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">2</div>
                            <h2 class="section-title__title mb-3">360 Degree VR tour</h2>
                            <p class="">Unique value proposition or offering features a 360-degree VR tour. Imagine
                                sitting at home and wanting to explore a chalet or hotel room online with a VR tour
                                before booking. Guess and check all the details the host claims to make the right
                                choice. </p>
                        </div>
                    </div>
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img width="270px" class="img-fluid" src="<?= $B ?>/assets/images/project/hotel-booking/2.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                            <img width="270px" class="img-fluid" src="<?= $B ?>/assets/images/project/hotel-booking/3.webp" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">3</div>
                            <h2 class="section-title__title mb-3">Pricing on Map</h2>
                            <p class="">This hotel booking mobile app has similar functionality to Airbnb. The price is
                                set on the card itself. Consumers are introduced to different types of hotels and
                                choosing accommodations that suit their budget makes it a journey. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">4</div>
                            <h2 class="section-title__title mb-3">Search Filter</h2>
                            <p class="">This hotel booking mobile app has similar functionality to Airbnb. The price is
                                set on the card itself. Consumers are introduced to different types of hotels and
                                choosing accommodations that suit their budget makes it a journey.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img width="270px" class="img-fluid" src="<?= $B ?>/assets/images/project/hotel-booking/4.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                            <img width="270px" class="img-fluid" src="<?= $B ?>/assets/images/project/hotel-booking/5.webp" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">5</div>
                            <h2 class="section-title__title mb-3">Facilities and Amenities</h2>
                            <p class="">This hotel booking mobile app shows various hotels with their amenities and
                                amenities. This mobile app offers complete freedom to choose from a wide range of
                                options.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">6</div>
                            <h2 class="section-title__title mb-3">Payment Options</h2>
                            <p class="">With payment gateway integration, hotel reservation applications offer cards and
                                e-wallet as payment options. For bank payments, simply upload an image of the original
                                receipt in the ordering app.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img width="270px" class="img-fluid" src="<?= $B ?>/assets/images/project/hotel-booking/6.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Welcome Three Start-->
        <section class="welcome-three pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome-three__left">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">Our introductions</span> -->
                                <h2 class="section-title__title">Hotel Booking Mobile Application Overview</h2>
                            </div>
                            <p class="welcome-three__text">This app, like Airbnb (or some sort of Airbnb clone), is a
                                hotel booking app. Available in two versions - Need for Guest and Need for Hosts. Guests
                                can browse, book, and check the availability of chalets, restaurants, hotels, resorts,
                                and even camps for their holidays. Hosts, on the other hand, can showcase their
                                properties like luxury villas, hotels, and resorts. Do you have a similar idea to
                                develop a hotel reservation application?
                                <br>
                                <br> Some of the best hotel booking apps provide an overview of their rooms and hotels
                                via images, but Nuzhah is not just a simple hotel booking app. It offers more than one
                                view; It offers a VR experience in the hotel's mobile booking app. Users can choose a
                                hotel VR tour.
                                <br>
                                <br>We, as a leading app development company like Airbnb, integrated almost all the key
                                features into this hotel booking app which makes it work seamlessly on both iOS and
                                Android platforms.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                        <div class="welcome-three__right ">
                            <div class="row">
                                <?php include __DIR__ . '/../includes/form-quote.php'; ?>
<script>
  $(document).ready(function () {
    $('#name-validF').delay(5000).fadeOut('slow');
    $('#name-valid2L').delay(5000).fadeOut('slow');
    $('#email-validE').delay(5000).fadeOut('slow');
    $('#phone-validP').delay(5000).fadeOut('slow');

    // $('#phone').on('input', function() {
    //    let val=$("#phone").val();
    //    if(val.length==3)
    //    {
    //        $("#phone").val("("+$("#phone").val()+")-")
    //    }
    //    if(val.length==9)
    //    {
    //        $("#phone").val($("#phone").val() +"-")
    //    }
    // });

    $('#submit_btn').on('click', function (e) {

      e.preventDefault(false);

      // var validateRecaptcha = function () {
      //   if (checkRecaptcha()) {
      //     $('#submit_btn').attr('disabled', false);
      //   }
      // }
      // if (!checkRecaptcha()) {
      //   $("#frm-result").text("Please validate your reCAPTCHA.");
      //   return false;
      // }
      // $('#submit_btn').attr('disabled', false);

      // function checkRecaptcha() {
      //   res = $('#g-recaptcha-response').val();
      //   if (res == "" || res == undefined || res.length == 0) return false;
      //   else return true;
      // }
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
</script> -->                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Welcome Three End-->
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
</section>        <!--Counter One End-->
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