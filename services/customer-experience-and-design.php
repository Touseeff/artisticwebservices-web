<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'UI/UX Design & Customer Experience USA | ArtisticWebServices';
$page_description = "Create exceptional user experiences with ArtisticWebServices' UI/UX design team. User research, wireframing, prototyping, and pixel-perfect UI design for apps and websites.";
$page_keywords = 'UI UX design company USA, user experience design, customer experience design New York, app UI design, website UX design';
$page_canonical = 'https://artisticwebservices.com/services/customer-experience-and-design';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
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
                                <h1 class="section-title__title mb-3" style="color: #000">Customer Experience and Design Services</h1>
                            </div>
                            <p class="">Successful businesses are made by putting ahead the needs of your potential
                                customers. ArtisticWebServices know the insight to make your clientele satisfied. We focus on the
                                customer life cycle to enhance customer experience that they haven’t witnessed before!
                            </p>
                            <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn">Get Your Free Quote</a>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img class="img-fluid" src="<?= $B ?>/assets/images/customer-service-feedback.webp"
                                alt="Customer Experience and Design Services">
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
                                <h2 class="section-title__title">Delivering world-class design while ensuring top-notch
                                    software quality</h2>
                            </div>
                            <p class="welcome-three__text">Every digital experience starts with the micro and macro
                                details of the design. Team ArtisticWebServices meet the needs of your business goals and try to
                                deliver an application that best suits your taste. To release top class user experiences, it is critical to recognize what clicks first-class with the human thoughts. Being depending on our paintings method, the scope of labor, and the design process, our team continues every detail intact and offers a very last output exactly as the clients choice!
</p>
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
                            </div>
                            <a href="<?= $B ?>/about-us.php" class="thm-btn welcome-three__btn">Discover More</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="welcome-three__right">
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
        <section class="why-choose-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="why-choose-one__left">
                            <div class="why-choose-one__img"> <img
                                    src="<?= $B ?>/assets/images/customer-experience-and-design-img2.webp"
                                    alt="Customer Experience and Design Services"> </div>
                            <div class="why-choose-one-box-1"></div>
                            <div class="why-choose-one-box-2"></div>
                            <!-- <div class="why-choose-one-box-3"></div> -->
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-one__right">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">why choose us</span> -->
                                <h2 class="section-title__title">ArtisticWebServices have the right technique to design profound apps!</h2>
                            </div>
                            <p class="why-choose-one__right-text">At ArtisticWebServices, we value our clients, which is why we are aware of the feedback and responses of our clients and amend our operating method to offer premium results. This makes things collaborative and gives liberty to our designers to expand an exquisite app to your business.
                            </p>
                            </br>
                            <p>Do you have already got the perfect idea for your application? Then, Allow ArtisticWebServices to bring your dream to existence!
</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-choose-one01">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why-choose-one__right get-unprec">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">why choose us</span> -->
                                <h2 class="section-title__title">Quality Assurance Team</h2>
                            </div>
                            <p class="why-choose-one__right-text">The systems and programs of the cutting-edge world are more complicated. To make sure that the Application succeeds in all stages of development, it needs to be checked by a Quality Assurance Engineer.</p>
                            </br>
                            <p>ArtisticWebServices Quality Assurance Engineers are responsible for designing, creating, and enforcing software programs take a look at plans to ensure the high quality of our clients' products and try to improve their best functionality, consistency, and usability. Our team follows a systematic process to affirm that the advanced services or products meet clients' unique requirements. We make sure that every web or mobile app or website we develop goes through a thorough screening process prior to being published or launched.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="why-choose-one__right get-unprec01">
                            <div class="why-choose-one__img"> <img
                                    src="<?= $B ?>/assets/images/customer-experience-and-design-img3.webp"
                                    alt="Customer Experience and Design Services"> </div>
                            <div class="why-choose-one-box-1 right-box"></div>
                            <div class="why-choose-one-box-2 right-box"></div>
                            <!-- <div class="why-choose-one-box-3 right-box"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Two Start-->
        <section class="services-two">
            <div class="services-two-shape" style="background-image: url(<?= $B ?>/assets/images/shapes/services-two-shape.webp)">
            </div>
            <div class="container">
                <div class=" text-center">
                    <h2 class="section-title__title col-md-12 m-auto mb-3">Our satisfactory assurance provider</h2>
                    <p>At ArtisticWebServices, verifying the apps and websites is a need to test the easy operation of the product throughout all identified platforms. Thus, every product we developed is checked, including:</p>
                    <p>● Unit Testing ● Regression Testing ● Usability Testing ● Stress Testing ● Load Testing</p>
                    <!-- <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn">Get Started Now!</a> -->
                </div>
            </div>
        </section>
        <!--Services Two End-->
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
                    <a href="<?= $B ?>/insights/a-telemedicine-application-and-integrated-features.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/telemedicine-thumbnail.webp" alt="Rubberworx" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/insights/a-telemedicine-application-and-integrated-features.php">A Telemedicine Application and Integrated Features</a>
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
                    <a href="<?= $B ?>/insights/digital-medication-management-app-features.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/medication-app%20thumbnail.webp" alt="Rubberworx" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/insights/digital-medication-management-app-features.php">Digital Medication Management App Features</a>
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
                    <a href="<?= $B ?>/insights/a-digital-health-management.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/digital-health%20management-thumbnail.webp" alt="Rubberworx" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/insights/a-digital-health-management.php">A Digital Health Management</a>
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
                    <a href="<?= $B ?>/insights/rubberworx.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/rubberworx/Thumbnail-Rubberworx.webp" alt="Rubberworx" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/insights/rubberworx.php">Rubberworx</a>
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
                    <a href="<?= $B ?>/insights/netfusionary.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/netfusinory-thumbnail-2.webp" alt="NetFusionary" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/insights/netfusionary.php">NetFusionary</a>
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
                    <a href="<?= $B ?>/insights/party-at-the-barn.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/party/Thumbnail-Party-at-the-barn.webp" alt="Party at The Barn" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/insights/party-at-the-barn.php">Party at The Barn</a>
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
                    <a href="<?= $B ?>/insights/pro-questor.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/questor/Thumbnail-Pro-Questor.webp" alt="Pro Questor" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/insights/pro-questor.php">Pro Questor</a>
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
                    <a href="<?= $B ?>/insights/hooking-dating.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/hooking/Thumbnail-Hooking-inapp-dating.webp"
                            alt="Hooking Dating" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/insights/hooking-dating.php">Hooking Dating</a>
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
                    <a href="<?= $B ?>/insights/priority-task-management-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/priority-task-management/Thumbnail-Priority-Task-Management.webp"
                            alt="Priority Task Management" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/insights/priority-task-management-app.php">Priority Task Management</a>
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
                    <a href="<?= $B ?>/insights/wedding-bells-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/wedding-bells/Thumbnail-Wedding-Bells.webp" alt="Wedding Bells" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/insights/wedding-bells-app.php">Wedding Bells</a>
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
                    <a href="<?= $B ?>/insights/sports-recruiting-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/sports-recruiting/Thumbnail-Sports.webp" alt="Sports Recruiting" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/insights/sports-recruiting-app.php">Sports Recruiting</a>
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
                    <a href="<?= $B ?>/insights/social-squads-app.php" class="project-one__img">
                        <img src="<?= $B ?>/assets/images/work/social-squad/Thumbnail-Social-Squad.webp" alt="Social Squad" />
                        <div class="project-one__hover">
                            <h3 class="project-one__title">
                                <a href="<?= $B ?>/insights/social-squads-app.php">Social Squad</a>
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
            <a href="<?= $B ?>/insights/case-studies.php" class="thm-btn how-it-works__btn">See More</a>
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