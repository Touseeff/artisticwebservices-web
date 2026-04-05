<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'Digital Health Management App | Remote Patient Monitoring — ArtisticWebServices';
$page_description = 'Case study: ArtisticWebServices built a digital health management app with real-time tracking, medication reminders, secure consultations, and EHR integration for remote patient care.';
$page_keywords = 'digital health management app, remote patient monitoring app, healthcare app case study, medication reminder app, EHR integration app, telehealth app development';
$page_canonical = 'https://artisticwebservices.com/insights/a-digital-health-management';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
$page_breadcrumbs = [['name' => 'Insights', 'url' => 'https://artisticwebservices.com/insights/digital-insights.php'], ['name' => 'Digital Health Management', 'url' => 'https://artisticwebservices.com/insights/a-digital-health-management.php']];
$page_article_schema = ['type' => 'Article', 'date' => '2024-03-01'];
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<style>
        .white__main .section-title__title {
            font-size: 32px !important;
        }
    </style>
<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<section class="about-page digitalhealth-bg white__main">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div>
                                <!--  <img style=" width: 100px; height:100px;" class="img-fluid mb-2" src="<?= $B ?>/assets/images/project/vpn-port/vpn-anrid-icon.svg" alt="layout styles"> -->
                                <h1 class="section-title__title mb-3">A Digital Health Management Remote Treatment Monitoring Application</h1>
                            </div>
                            <p class="laundry-content">A Digital Health Management Remote Treatment Monitoring Application focuses on enabling healthcare professionals to monitor and manage patients' treatments and health conditions remotely.</p>
                            <p class="laundry-content">We provide a comprehensive solution for monitoring and managing patient treatment remotely, enhancing both patient care and provider efficiency.</p>
                            <div class="col-md-12 mb-4">
                                <img class="img-fluid"
                                        src="<?= $B ?>/assets/images/project/play-store.webp" alt="play store image">
                                <img class="img-fluid"
                                        src="<?= $B ?>/assets/images/project/app-store.webp" alt="app store image">
                            </div> <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn">Get Your Free Quote</a>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <!-- <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img class="img-fluid" src="<?= $B ?>/assets/images/work/rubberworx/Main.webp" alt="">
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
                    <h2 class="section-title__title col-md-10 m-auto">Abstract for A Digital Health Management Remote Treatment Monitoring Application</h2>
                    <p>The Digital Health Management Remote Treatment Monitoring Application provides a strong and enhanced solution for remote patient care, improving both patient outcomes and healthcare efficiency. This application provides real-time monitoring of vital signs and health data via connected devices, allowing healthcare providers to continuously monitor patient health. It doubles treatment loyalty by automating drug reminders, tracking and allowing for secure video consultations and text-based communication with their desired doctors.</p>
                    <p>The software effortlessly interacts with Electronic Health Records (EHRs), providing a larger picture of patient data. The program ensures management of patient health by providing features such as appointment reminders and patients dashboards. It prioritizes data security through encrypted transmission and access controls, as well as compliance with healthcare legislation like HIPAA. The software also offers features for remote diagnostics, patient education, and reviews, as well as powerful analytics for health pattern. Emergency capabilities guarantee quick reactions in critical situations while making this software an essential tool for modern and effective remote healthcare administration.</p>
                </div>
            </div>
        </section>
        <!--Services Two End-->
        <section class="about-page netfusionary-page pt-0 mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 text-center">
                        <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                            <img width="100%" class="img-fluid"
                                src="<?= $B ?>/assets/images/work/digital/remote-monitoring.webp" alt="Remote Monitoring"> </div>
                    </div>
                    <div class="col-xl-6">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">1</div>
                            <h2 class="section-title__title mb-3">Remote Monitoring</h2>
                            <p class=""><b>Vital Signs Tracking</b> Real-time monitoring of vital signs such as heart rate, blood pressure, oxygen saturation, and glucose levels through connected devices.</p>
                            <p class=""><b>Health Metrics Tracking</b> Track other relevant health metrics based on the patient's condition, such as weight, sleep patterns, and activity levels.</p>
                            <strong>Treatment Adherence Monitoring</strong>
                            <p><b>Medication Reminders</b> Automated reminders for medication schedules and dosages.</p>
                            <p><b>Medication Tracking</b> Record and track medication adherence and any missed doses.</p>
                            <strong>Telehealth Capabilities</strong>
                            <p><b>Virtual Consultations</b> Secure video calls with healthcare providers for consultations and follow-ups.</p>
                            <p><b>Chat Functionality</b> Text-based communication for quick questions and support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page netfusionary-page pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">2</div>
                            <h2 class="section-title__title mb-3">Data Integration</h2>
                            <p class=""><b>Integration with Wearables</b> Sync data from fitness trackers, smartwatches, and medical devices.</p>
                            <p class=""><b>Electronic Health Records (EHR) </b> Integration with EHR systems to access and update patient records.</p>
                            <strong>Alerts and Notifications</strong>
                            <p><b>Health Alerts</b> Notifications for abnormal readings or deviations from expected health metrics.</p>
                            <p><b>Appointment Reminders</b> Reminders for upcoming appointments or necessary follow-ups.</p>
                            <strong>Patient Engagement</strong>
                            <p><b>Educational Resources</b> Access to educational materials related to the patient’s condition and treatment.</p>
                            <p><b>Goal Setting</b> Tools for setting and tracking health goals and treatment milestones.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 text-center">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img width="100%" class="img-fluid"
                                src="<?= $B ?>/assets/images/work/digital/data-integration.webp" alt="Data Integration"> </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page netfusionary-page pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 text-center">
                        <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                            <img width="100%" class="img-fluid"
                                src="<?= $B ?>/assets/images/work/digital/data-privacy-and-security.webp" alt="Data Privacy"> </div>
                    </div>
                    <div class="col-xl-6">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">3</div>
                            <h2 class="section-title__title mb-3">Data Privacy and Security</h2>
                            <p class=""><b>Secure Data Transmission</b> Encryption and secure protocols for transmitting sensitive health information.</p>
                            <p class=""><b>Access Controls</b> Granular permissions to control who can access and view patient data.</p>
                            <strong>Compliance and Reporting</strong>
                            <p><b>Regulatory Compliance</b> Adherence to healthcare regulations and standards (e.g., HIPAA).</p>
                            <p><b>Reporting Tools</b> Generate reports on treatment adherence, health metrics, and patient progress.</p>
                            <strong>Customizable Dashboards</strong>
                            <p><b>Provider Dashboards</b> Customizable dashboards for healthcare providers to monitor multiple patients and track treatment progress.</p>
                            <p><b>Patient Dashboards</b> Personalized dashboards for patients to view their health data and progress.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page netfusionary-page pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">4</div>
                            <h2 class="section-title__title mb-3">Remote Diagnostics</h2>
                            <p class=""><b>Symptom Reporting</b> Tools for patients to report symptoms and side effects.</p>
                            <p class=""><b>Diagnostic Tools</b> Access to diagnostic tools and questionnaires to assist in remote assessments.</p>
                            <strong>Interoperability</strong>
                            <p><b>Cross-Platform Integration</b> Compatibility with other health management systems and platforms.</p>
                            <p><b>API Access</b> APIs for integrating with third-party applications and systems.</p>
                            <strong>Feedback and Support</strong>
                            <p><b>Patient Feedback</b> Mechanisms for patients to provide feedback on their treatment and app experience.</p>
                            <p><b>Technical Support</b> Access to customer support for technical issues or app-related questions.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 text-center">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img width="100%" class="img-fluid"
                                src="<?= $B ?>/assets/images/work/digital/remote-diagnostics.webp" alt="Remote Diagnostics"> </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page netfusionary-page pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 text-center">
                        <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                            <img width="100%" class="img-fluid"
                                src="<?= $B ?>/assets/images/work/digital/analytics-and-insights.webp" alt="Analytics"> </div>
                    </div>
                    <div class="col-xl-6">
                        <div class=" mt-3 mb-4">
                            <div class="icon-counting mb-3">5</div>
                            <h2 class="section-title__title mb-3">Analytics and Insights</h2>
                            <p class=""><b>Health Trends Analysis</b> Tools to analyze and visualize health trends over time.</p>
                            <p class=""><b>Predictive Analytics</b> Use of data analytics to predict potential health issues and treatment outcomes.</p>
                            <strong>Emergency Features</strong>
                            <p><b>Emergency Alerts</b> Ability to alert healthcare providers or emergency contacts in case of critical health issues.</p>
                            <p><b>Emergency Contacts</b> Integration with emergency contact lists for quick notifications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Welcome Three Start-->
        <section class="welcome-three pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome-three__left">
                            <div class="section-title text-left">
                               <img src="<?= $B ?>/assets/images/as.webp" alt="As">
                            </div>
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