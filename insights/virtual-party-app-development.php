<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'Virtual Party App Development | Online Event Case Study — ArtisticWebServices';
$page_description = 'Case study: Virtual Party App by ArtisticWebServices — a creative online event platform with virtual rooms, live streaming, interactive games, and real-time social features.';
$page_keywords = 'virtual party app development, online event app case study, virtual gathering platform, live streaming event app, interactive social app, virtual celebration app development';
$page_canonical = 'https://artisticwebservices.com/insights/virtual-party-app-development';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
$page_breadcrumbs = [['name' => 'Insights', 'url' => 'https://artisticwebservices.com/insights/digital-insights.php'], ['name' => 'Virtual Party App', 'url' => 'https://artisticwebservices.com/insights/virtual-party-app-development.php']];
$page_article_schema = ['type' => 'Article', 'date' => '2024-01-28'];
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<section class="about-page party-bg white__main">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class=" mt-2">
                            <div>
                                <!-- <img style=" width: 100px; height:100px;" class="img-fluid mb-2" src="<?= $B ?>/assets/images/project/virtual-party-app/logo.png" alt="layout styles"> -->
                                <h1 class="section-title__title mb-3">Party Like Never Before with The Ultimate Virtual Party Application</h1>
                            </div>
                            <p class="laundry-content">We've developed an event management app called Virtual Party that lets you
                                create real and virtual parties like Houseparty. You can also create personalized
                                invitations, guest lists, instant online video parties, and hire vendors to create the
                                perfect event.</p>
                            <div class="col-md-12 mb-4">
                                <img class="img-fluid"
                                        src="<?= $B ?>/assets/images/project/play-store.png" alt="">
                                <img class="img-fluid"
                                        src="<?= $B ?>/assets/images/project/app-store.png" alt="">
                            </div> <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn">Get Your Free Quote</a>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <!-- <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img class="img-fluid" src="<?= $B ?>/assets/images/project/virtual-party-app/top-banner.jpg" alt="">
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!--Services Two Start-->
        <section class="services-two">
            <div class="services-two-shape" style="background-image: url(<?= $B ?>/assets/images/shapes/services-two-shape.png)">
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
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/virtual-party-app/1.webp"
                                alt=""> </div>
                    </div>
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">1</div>
                            <h2 class="section-title__title mb-3">Onboarding
                            </h2>
                            <p class="">After installing the app, you can play with the app and know its features. If
                                you want to create an event, party, or invitation, you must register. To register you
                                can use a verified email id or log in via a social media account like your Facebook
                                account. </p>
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
                            <h2 class="section-title__title mb-3">Create Event
                            </h2>
                            <p class="">With this application, you can create events. You can choose from over 14 types
                                of events including baby showers, birthdays, funerals, graduations, and seasonal events.
                                All you have to do is provide a title, start date, start time, and details to create the
                                event. You can also choose whether you want to be a virtual event or not. </p>
                        </div>
                    </div>
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/virtual-party-app/2.webp"
                                alt=""> </div>
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
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/virtual-party-app/3.webp"
                                alt=""> </div>
                    </div>
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">3</div>
                            <h2 class="section-title__title mb-3">Custom Invitation
                            </h2>
                            <p class="">You can create custom invitations. Choose from over 14 event types and enter
                                event details. You can upload a link from your phone or choose from the available
                                templates to create a new invitation. You can then customize the details and even add
                                photos and text to create an invitation of your choice. </p>
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
                            <h2 class="section-title__title mb-3">Add Guests
                            </h2>
                            <p class="">Once you've created your personalized events and invitations, create a guest
                                list and send invites to friends and family. You can select guests from your phone
                                contacts by granting access to this online party app. You can also add guests to the
                                guest list by name, email address, and mobile number. </p>
                        </div>
                    </div>
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/virtual-party-app/4.webp"
                                alt=""> </div>
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
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/virtual-party-app/5.webp"
                                alt=""> </div>
                    </div>
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">5</div>
                            <h2 class="section-title__title mb-3">Instant Party
                            </h2>
                            <p class="">You can create an instant party via video chat. All you have to do is add a name
                                and choose from two views: a split view for small groups or a speaker view for large
                                gatherings. Hosts can invite other guests by contact or email address, or even broadcast
                                a party by simply entering a code in the browser. </p>
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
                            <h2 class="section-title__title mb-3">Event List</h2>
                            <p class="">The list of events is displayed on the home screen of this attendee and the
                                video-conferencing application. A list of all created events is shown along with their
                                details. You can click on it and see the "guest list". You may also see the guest's
                                response to the invitation as Yes, No, or Maybe Waiting for a response for the host to
                                follow.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/virtual-party-app/6.webp"
                                alt=""> </div>
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
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/virtual-party-app/7.webp"
                                alt=""> </div>
                    </div>
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">7</div>
                            <h2 class="section-title__title mb-3">RSVP on Invitations
                            </h2>
                            <p class="">After a host sends an invitation to someone else, they have the option to reply
                                to or respond to the invitation. The host sends the invitation via email or phone
                                number. The user receives an email or text message and can reply to it. You can choose
                                between three answers: yes, no, maybe, or not at all. </p>
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
                            <div class="icon-counting mb-3">8</div>
                            <h2 class="section-title__title mb-3">Vendors</h2>
                            <p class="">This is not only the best video party app but also an event management app. You
                                can easily search and hire suppliers based on 13 categories such as bakers, caterers,
                                cleaners, decorators, entertainment, equipment, entertainment, or photographers. You can
                                request quotes and hire the best vendors for the event.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/virtual-party-app/8.webp"
                                alt=""> </div>
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
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/virtual-party-app/9.webp"
                                alt=""> </div>
                    </div>
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">9</div>
                            <h2 class="section-title__title mb-3">In-app Chat
                            </h2>
                            <p class="">A unique feature of this party planning app is that just like Google Hangouts,
                                you can message other users through the app. The chat feature in the app allows the host
                                to speak individually to the people on the guest list to discuss anything about the
                                event or to speak with the vendor about any issues or doubts in preparing for the event.
                            </p>
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
                            <div class="icon-counting mb-3">10</div>
                            <h2 class="section-title__title mb-3">User Profile</h2>
                            <p class="">You can easily make changes to your profile. All you have to do is enter your
                                first and last name, and email address, upload a profile picture and verify your mobile
                                number. You can also protect your account by adding a password. You can also change the
                                old password to a new one if necessary.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/virtual-party-app/10.webp"
                                alt=""> </div>
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
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/virtual-party-app/11.webp"
                                alt=""> </div>
                    </div>
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div class="icon-counting mb-3">11</div>
                            <h2 class="section-title__title mb-3">Touch ID unlock</h2>
                            <p class="">Since security is a priority, we developed a touch identification unlock
                                feature. This feature allows you to use your fingerprint as a password. To open the app,
                                you need to put your finger on the sensor of the phone and it will open. This keeps the
                                app and all its data completely protected from intruders. </p>
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
                            <div class="icon-counting mb-3">12</div>
                            <h2 class="section-title__title mb-3">Archive</h2>
                            <p class="">This is a unique feature of this virtual party app. You can also save events and
                                details after the event starts and ends. When you archive an event, all the event
                                details are saved with it. You can also archive guest lists so you can invite the same
                                guests to future events if needed.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 text-center">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/virtual-party-app/12.webp"
                                alt=""> </div>
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
                                <h2 class="section-title__title">Virtual Party Application Summary</h2>
                            </div>
                            <p class="welcome-three__text">Virtual Party App is an easy-to-use event app (with social
                                distancing in mind) that lets you create and manage events. Whether it's a "board game
                                night" or a full-fledged birthday party, you can master it all with Verbo.
                                <br>
                                <br>Virtual Party App
                                < is available on Play Store and App Store. Our developers have created a virtual party
                                    planning app with lots of interesting features. You can create events with more than
                                    16 categories, design custom invitations, or upload e-invitations from your phone.
                                    There are opportunities to create instant virtual video parties for small and large
                                    gatherings. You can also manage and communicate with guests and suppliers from 13+
                                    categories such as restaurants or decorators you need for the event. <br>
                                    <br>Our client is from the USA and had this idea with his friends. The idea is to
                                    create a solution that allows users to create and manage virtual events, real
                                    events, guests, rent and communicate with vendors.
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
            <h2 class="section-title__title">What they're saying</h2> </div>
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

