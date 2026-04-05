<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'DoorDrop Rentals App | On-Demand Rental Management — ArtisticWebServices';
$page_description = 'Case study: DoorDrop Rentals app by ArtisticWebServices — an on-demand rental management platform simplifying property rentals, bookings, and tenant management.';
$page_keywords = 'rental management app development, on-demand rental app, DoorDrop app case study, property rental platform, rental booking app development, tenant management app';
$page_canonical = 'https://artisticwebservices.com/insights/doordrop-rentals';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
$page_breadcrumbs = [['name' => 'Insights', 'url' => 'https://artisticwebservices.com/insights/digital-insights.php'], ['name' => 'DoorDrop Rentals', 'url' => 'https://artisticwebservices.com/insights/doordrop-rentals.php']];
$page_article_schema = ['type' => 'Article', 'date' => '2024-02-15'];
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
                <div class="row">
                    <div class="col-xl-7">
                        <div class=" mt-3">
                            <div>
                                <h1 class="section-title__title mb-3">DoorDrop Rentals
                                </h1>
                            </div>
                            <p class="">DoorDrop Rentals's goals are to create a continuing, steady, and user-friendly platform that unites students, parents, educators, and drivers in a safe, community-based transportation ecosystem.</p>
                            <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn">Get Your Free Quote</a>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                            style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                            <img class="img-fluid" src="<?= $B ?>/assets/images/transportation/Main-Image.webp"
                                alt="On Demand Delivery Solution Mobile Application development services">
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
                                <h2 class="section-title__title">Enhancing Safety in School Transportation </h2>
                            </div>
                            <p class="welcome-three__text">DoorDrop Rentals is dedicated to revolutionizing the way students trip to school. We prioritize protection principally, making sure that each experience is steady and reliable. Our modern functions, consisting of run-time area tracking, emergency reaction, and community groups, offer peace of thought for mothers, fathers, and guardians. By connecting with proven drivers and fellow riders, DoorDrop Rentals provides a complete solution for college kids' transportation desires, even emphasizing protection as a top priority.</p>
                            </br>
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
        <!--Iphone Col 2 Start-->
        <section class="why-choose-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="">
                            <div class="why-choose-one__img"> <img src="<?= $B ?>/assets/images/transportation/Web-app.webp"
                                    alt="On Demand Delivery Solution Mobile Application development services"> </div>
                            <div class="why-choose-one-box-1"></div>
                            <div class="why-choose-one-box-2"></div>
                            <!-- <div class="why-choose-one-box-3"></div> -->
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-one__right">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">why choose us</span> -->
                                <h2 class="section-title__title">Seamlessly Connecting Riders and Drivers </h2>
                            </div>
                            <p>DoorDrop Rentals collectively brings students, parents, educators, and drivers through a user-friendly platform. Our app gives a sincere booking procedure for riders, permitting them to pick tested drivers for their journeys. Parents and instructors can book rides for students, and bills may be dealt with via the app. With features like trip sharing and journey scheduling, DoorDrop Rentals ensures that everyone's transportation wishes are met successfully and easily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-choose-one01 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why-choose-one__right get-unprec">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">why choose us</span> -->
                                <h2 class="section-title__title">Fostering Community Engagement</h2>
                            </div>
                            <p>At DoorDrop Rentals, we recognize the significance of network involvement. Our app consists of network groups managed through the app admin through a web-based total admin panel, in which customers can live up to date and acquire alert notifications. This characteristic promotes communication and engagement among college students, parents, educators, and drivers. With the capacity to send pal invites, chat with friends, and take part in organization discussions, DoorDrop Rentals encourages a feeling of belonging inside the community.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="">
                            <div class="why-choose-one__img"> <img src="<?= $B ?>/assets/images/transportation/Mobile01.webp"
                                    alt="On Demand Delivery Solution Mobile Application development services"> </div>
                            <div class="why-choose-one-box-1 right-box"></div>
                            <div class="why-choose-one-box-2 right-box"></div>
                            <!-- <div class="why-choose-one-box-3 right-box"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-choose-one01 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="why-choose-one__right get-unprec">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">why choose us</span> -->
                                <h2 class="section-title__title">Simplifying Payments and Support</h2>
                            </div>
                            <p>DoorDrop Rentals streamlines price processes for both riders and drivers. Users can securely pay via debit and credit playing cards, and drivers can install their Stripe money owed for bills. Our app ensures that bills are processed transparently, and drivers obtain their income promptly. Additionally, our customer support and question decision gadget permits users to reach out to the admin for any assistance they require. DoorDrop Rentals is dedicated to making complete transportation enjoyable, handy, and problem-free for all users.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>