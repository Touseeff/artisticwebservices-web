<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'Healthcare & Medical App Development USA | HIPAA Solutions — ArtisticWebServices';
$page_description = 'ArtisticWebServices builds HIPAA-compliant healthcare and medical apps. Telemedicine, EHR integration, patient portals, medication management, and remote monitoring apps for USA healthcare.';
$page_keywords = 'healthcare app development USA, medical app development company, HIPAA compliant healthcare app, telemedicine app development, EHR integration app, patient portal development';
$page_canonical = 'https://artisticwebservices.com/services/healthcare-medical-app';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
$page_breadcrumbs = [['name' => 'Services', 'url' => 'https://artisticwebservices.com/services.php'], ['name' => 'Healthcare App Development', 'url' => 'https://artisticwebservices.com/services/healthcare-medical-app.php']];
$page_service_schema = ['name' => 'Healthcare & Medical App Development', 'description' => 'HIPAA-compliant healthcare and medical app development including telemedicine and EHR integration for USA healthcare providers.'];
$page_faq = [
    ['q' => 'Are your healthcare apps HIPAA compliant?', 'a' => 'Yes. ArtisticWebServices follows all HIPAA compliance guidelines including data encryption, access controls, audit trails, and secure data transmission for all healthcare and medical app development projects.'],
    ['q' => 'What types of healthcare apps do you build?', 'a' => 'We build telemedicine apps, EHR/EMR systems, patient portals, medication management apps, remote patient monitoring solutions, doctor-on-demand apps, and hospital management systems.'],
    ['q' => 'Can you integrate with existing EHR systems?', 'a' => 'Yes. We integrate with major EHR systems including Epic, Cerner, Allscripts, and HL7/FHIR APIs for seamless healthcare data exchange.']
];
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<section class="about-page hc-medical-app white__main">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class=" mt-2">
                            <div>
                                <!-- <img style=" width: 100px; height:100px;" class="img-fluid mb-2" src="<?= $B ?>/assets/images/project/healthcare/logo.webp" alt="layout styles"> -->
                                <h1 class="section-title__title mb-3">Revolutionizing Healthcare with Smart Apps for a Healthier, Connected World</h1>
                            </div>
                            <p class="laundry-content">Medical App is a cloud-based on-demand application for doctors, designed and
                                developed by our mobile app developers. Do you want to create a software-based
                                doctor-on-demand application or solution? </p>
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
                            <img class="img-fluid" src="<?= $B ?>/assets/images/project/healthcare/top-banner.webp" alt=""> </div>
                    </div> -->
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
        <section class="about-page health__height pt-0 mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/healthcare/1.webp" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">1</div>
                            <h2 class="section-title__title mb-3">Sign Up</h2>
                            <p class="">The first step for doctors is to create their profiles in the on-demand doctor
                                app. You must add personal information such as name, gender, age, number, address, and
                                educational qualifications, as well as board-certified license and medical profile
                                information of your specialty.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page health__height pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">2</div>
                            <h2 class="section-title__title mb-3">Dashboard</h2>
                            <p class="">The Physician on Demand app control panel has three sections:
                                <br> 1) Active Patients - shows you which patients are active.
                                <br> 2) Active Doctors - Indicates which doctors are active.
                                <br> 3) Recently Contacted - shows recently contacted patients.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/healthcare/2.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page health__height pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/healthcare/3.webp" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">3</div>
                            <h2 class="section-title__title mb-3">My Profile</h2>
                            <p class="">Doctors can view and edit their data such as Name, Gender, Date of Birth, Age, Mobile Number, Address, Education Level, Degree, University, Graduation Year, License Number, License Year, Doctor Profile – Medical Practice, Degree, Specialization, and Description.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page health__height pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">4</div>
                            <h2 class="section-title__title mb-3">My inquiries</h2>
                            <p class="">The doctor can see all the requests he receives from both patients and
                                colleagues. He could see in detail the patient's name and the chief complaint, whether
                                it was the flu or a mental health disorder. He can view and link patient profiles or add
                                patient records.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/healthcare/4.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page health__height pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/healthcare/5.webp" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">5</div>
                            <h2 class="section-title__title mb-3">My Network</h2>
                            <p class="">This screen consists of three parts:
                                <br> 1) Pending Requests - displays all requests not answered by other doctors.
                                <br> 2) Complete Requests - All complete requests from doctors are shown here.
                                <br> 3) Denied Requests - shows denied requests from other doctors.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-page health__height pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">6</div>
                            <h2 class="section-title__title mb-3">Contact Patient</h2>
                            <p class="">If patients want to see a doctor online, they can mention it. The doctor can
                                then decide whether to make a video call, audio call, add a note to the request, or send
                                a text message to the patient. All these services assist doctors in providing emergency
                                care to patients.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/healthcare/6.webp" alt="">
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
                                <h2 class="section-title__title">Innovative Healthcare & Medical Application Overview</h2>
                            </div>
                            <p class="welcome-three__text">We design and develop on-demand doctor apps so carrier
                                patients can see doctors thousands of miles away. Apps like Conduet-Med are very popular
                                given the COVID-19 pandemic situation.
                                <br>
                                <br>With the help of this medical app, online visits to doctors for treatment and care
                                are made easier. This app is for certified physical and mental health professionals.
                                This app allows patients to make requests by entering details and requesting medical
                                services. The doctor accepts this request and can then add notes or contact the patient
                                to discuss diagnosis and treatment.
                                <br>
                                <br>Our clients are from the United States and are entrepreneurs who are concerned about
                                health issues. Even if the patient needs urgent care, the doctor is not available around
                                the clock. He decided to create an on-demand app for doctors that connects doctors and
                                patients so that everyone has an equal opportunity to receive health care.
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