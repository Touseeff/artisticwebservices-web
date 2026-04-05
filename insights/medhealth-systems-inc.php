<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'MedHealth Systems Healthcare Platform | Case Study — ArtisticWebServices';
$page_description = 'Case study: MedHealth Systems Inc. — a comprehensive healthcare management platform by ArtisticWebServices with patient management, appointment scheduling, and medical records.';
$page_keywords = 'healthcare management platform case study, medical records app development, patient management system, appointment scheduling app, hospital management software, health IT solutions';
$page_canonical = 'https://artisticwebservices.com/insights/medhealth-systems-inc';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
$page_breadcrumbs = [['name' => 'Insights', 'url' => 'https://artisticwebservices.com/insights/digital-insights.php'], ['name' => 'MedHealth Systems', 'url' => 'https://artisticwebservices.com/insights/medhealth-systems-inc.php']];
$page_article_schema = ['type' => 'Article', 'date' => '2024-01-25'];
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<section class="about-page medmedical-app white__main">
            <div class="container">
               <div class="row">
                  <div class="col-xl-7">
                     <div class=" mt-2">
                        <div>
                           <!-- <img style=" width: 100px; height:100px;" class="img-fluid mb-2" src="<?= $B ?>/assets/images/project/healthcare/logo.webp" alt="layout styles"> -->
                           <h4 class="section-title__title mb-3">Client:</h4>
                           <h1 class="section-title__title mb-3">MedHealth Systems Inc.</h1>
                        </div>
                        <p class="laundry-content">A leading healthcare provider offering remote patient monitoring, chronic disease management, and
                           healthcare analytics. MedHealth Systems specializes in providing integrated care through digital health
                           platforms that improve patient outcomes and reduce operational costs.
                        </p>
                        <div class="col-md-12 mb-4">
                           <img class="img-fluid"
                              src="<?= $B ?>/assets/images/project/play-store.webp" alt="">
                           <img class="img-fluid"
                              src="<?= $B ?>/assets/images/project/app-store.webp" alt="">
                        </div>
                        <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn">Get Your Free Quote</a>
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
         <div class="section-title mb-0">
         <h2 class="section-title__title col-md-12 m-auto">Project Overview:</h2>
         <p>MedHealth Systems wanted to develop a comprehensive healthcare management platform that would
         enable real-time patient monitoring, automate healthcare workflows, and integrate medical devices
         seamlessly with both web and mobile applications. The primary goals were to:</p>
         <p>Improve patient engagement by offering them access to their health data and care plans.</p>
         <p>Enable healthcare providers to remotely monitor patients’ vitals and health conditions.</p>
         <p>Automate processes for scheduling, notifications, alerts, and data analysis</p>
         <p>Provide an intuitive and user-friendly experience for both healthcare providers and patients.</p>
         <p>Ensure that the platform supports a wide range of medical IoT devices like heart rate monitors, glucose meters, and blood pressure cuffs.</p>
         <div class="chalanges-content">
         <h4>Challenges:</h4>
         <p><strong>Device Interoperability:</strong> Integrating various medical IoT devices with different communication
         protocols (Bluetooth, Wi-Fi, Zigbee) and ensuring that data was accurately captured and
         transferred to the platform.
         </p>
         <p><strong>Real-time Data Processing:</strong> Ensuring that patient data was processed and displayed in real-time
         on the mobile and web interfaces for both patients and healthcare providers
         </p>
         <p><strong>Automation of Health Alerts & Workflow:</strong> Developing automated workflows that would trigger
         alerts, notifications, and care plan updates based on the patient’s data, as well as automating
         routine administrative tasks for healthcare providers.
         </p>
         <p><strong>Data Privacy & Compliance:</strong> Ensuring that patient data was securely stored and transmitted
         while complying with healthcare regulations such as HIPAA (Health Insurance Portability and
         Accountability Act) and GDPR (General Data Protection Regulation).
         </p>
         <p><strong>User Experience:</strong> Designing a platform that would be simple enough for patients of all ages and
         technical skill levels to use while providing healthcare professionals with powerful tools for
         patient management.
         </p>
         </div>
         </div>
         </div>
         </div>
         </section>
         <!--Services Two End-->
          <section class="about-page pt-0">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-5 text-center">
                     <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                        <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/med-results.webp" alt="">
                     </div>
                  </div>
                  <div class="col-xl-7">
                     <div class=" mt-3">
                        <div class="icon-counting mb-3">1</div>
                        <h2 class="section-title__title mb-3">Results:</h2>
                        <p>Improved Patient Engagement: By offering patients easy access to their health data and
                           enabling real-time feedback through notifications and alerts, patient engagement increased by
                           40%. Patients reported feeling more in control of their health and had better adherence to their
                           care plans.
                        </p>
                        <p>Increased Operational Efficiency: Automation of tasks like scheduling, follow-ups, and alerts
                           reduced administrative overhead by over 50%, allowing healthcare providers to spend more
                           time on direct patient care rather than administrative duties.
                        </p>
                        <p>Proactive Healthcare: Predictive analytics and real-time monitoring enabled healthcare
                           providers to intervene early, reducing hospital readmission rates by 30% for patients with
                           chronic conditions.
                        </p>
                        <p>Enhanced Remote Monitoring: With the ability to monitor patients remotely, the platform
                           reduced the need for in-person visits, which was especially valuable during the COVID-19
                           pandemic. This allowed for continuous care, even during lockdowns and travel restrictions.
                        </p>
                        <p>Cost Savings: By automating workflows and reducing in-person visits, MedHealth Systems saw a
                           20% reduction in operational costs, while improving patient outcomes and satisfaction.
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
                        <div class="icon-counting mb-3">2</div>
                        <h2 class="section-title__title mb-3">Web and Mobile Application Development:</h2>
                        <p class="">We developed an integrated web-based platform and cross-platform mobile application (using React
                           Native) to provide healthcare professionals and patients with access to the same core features:
                        </p>
                        <p>Patient Dashboard: Patients could access their real-time health data, including heart rate, blood
                           pressure, glucose levels, and more, directly from their mobile devices. They could also view
                           trends over time and receive insights about their health.
                        </p>
                        <p>Provider Dashboard: Healthcare providers had access to a consolidated dashboard that allowed
                           them to monitor multiple patients at once, set health goals, schedule follow-ups, and track
                           progress.
                        </p>
                        <p>Video Consultations: Patients and healthcare providers could engage in remote consultations via
                           built-in video conferencing, ensuring continuous care, especially for patients with mobility issues
                           or in remote locations.
                        </p>
                        <p>Task Automation: Routine tasks such as appointment scheduling, billing, reminders for
                           medication, and follow-ups were automated, reducing administrative workload and improving
                           operational efficiency
                        </p>
                     </div>
                  </div>
                  <div class="col-xl-5 text-center">
                     <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                        <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/med-mobile-application-features.webp" alt="">
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
                        <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/med-augmented.webp" alt="">
                     </div>
                  </div>
                  <div class="col-xl-7">
                     <div class=" mt-3">
                        <div class="icon-counting mb-3">3</div>
                        <h2 class="section-title__title mb-3">Device Automation:</h2>
                        <p class="">The automation of medical device data collection, processing, and response systems was key to
                           enhancing patient care and minimizing manual interventions:
                        </p>
                        <p>Automated Alerts and Notifications: The system automatically triggered alerts to healthcare
                           providers when a patient’s readings exceeded pre-defined thresholds (e.g., dangerously high
                           blood pressure or abnormal glucose levels). These alerts were sent via the mobile app, email,
                           and SMS.
                        </p>
                        <p>Remote Adjustments and Recommendations: In some cases, automated decisions were made
                           based on the data — for example, adjusting a patient’s care plan or medication based on
                           changes in vitals. For example, if a patient's heart rate spikes, the system would suggest a
                           possible emergency care step, or trigger an immediate video call with a doctor
                        </p>
                        <p>Predictive Analytics: We implemented machine learning algorithms to predict potential health
                           risks by analyzing historical health data. This proactive approach allowed healthcare providers to
                           intervene before a condition became critical, improving patient outcomes.
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
                        <div class="icon-counting mb-3">4</div>
                        <h2 class="section-title__title mb-3">Cloud Integration and Data Analytics:</h2>
                        <p class="">The cloud infrastructure powered by AWS allowed for secure data storage, real-time data processing,
                           and advanced analytics:
                        </p>
                        <p>Data Aggregation: Patient data from various devices was aggregated in real-time, stored
                           securely, and made accessible on both the web and mobile apps.
                        </p>
                        <p>Data Security & Compliance: All patient data was encrypted both in transit and at rest to ensure
                           HIPAA and GDPR compliance. The platform also provided role-based access, ensuring that only
                           authorized healthcare providers could view sensitive patient data.
                        </p>
                        <p>Health Insights & Reporting: The system generated detailed reports and analytics that helped
                           healthcare providers make data-driven decisions about patient care. This included predictive
                           analytics for chronic disease management, medication adherence, and preventive care.
                        </p>
                     </div>
                  </div>
                  <div class="col-xl-5 text-center">
                     <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                        <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/med-Iot-integration-02.webp" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="about-page pt-0 mt-5">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-5 text-center">
                     <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                        <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/med-iot-integration.webp" alt="">
                     </div>
                  </div>
                  <div class="col-xl-7">
                     <div class=" mt-3">
                        <div class="icon-counting mb-3">5</div>
                        <h2 class="section-title__title mb-3">IoT Integration:</h2>
                        <p class="">We integrated a variety of medical IoT devices such as blood pressure monitors, glucose meters, smart
                           thermometers, ECG devices, and wearable health trackers into the healthcare platform. Key elements of
                           the integration included:
                        </p>
                        <p>Real-time Data Streaming: Devices were connected using Bluetooth and Wi-Fi, sending data to
                           the central cloud platform in real-time, which was then synced with both the mobile app and the
                           web dashboard.
                        </p>
                        <p>Data Normalization: Data from different devices were standardized and processed through the
                           cloud platform to ensure that the values were comparable and accurate for clinical decisionmaking.
                        </p>
                        <p>Device Health Monitoring: IoT sensors provided real-time diagnostics of the devices themselves, alerting healthcare providers when a device needed calibration or maintenance.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
        
         <!--<section class="about-page pt-0">-->
         <!--   <div class="container">-->
         <!--      <div class="row align-items-center">-->
         <!--         <div class="col-xl-7">-->
         <!--            <div class=" mt-3">-->
         <!--               <div class="icon-counting mb-3">6</div>-->
         <!--               <h2 class="section-title__title mb-3">Contact Patient</h2>-->
         <!--               <p class="">If patients want to see a doctor online, they can mention it. The doctor can-->
         <!--                  then decide whether to make a video call, audio call, add a note to the request, or send-->
         <!--                  a text message to the patient. All these services assist doctors in providing emergency-->
         <!--                  care to patients.-->
         <!--               </p>-->
         <!--            </div>-->
         <!--         </div>-->
         <!--         <div class="col-xl-5 text-center">-->
         <!--            <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"-->
         <!--               style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">-->
         <!--               <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/project/healthcare/6.webp" alt="">-->
         <!--            </div>-->
         <!--         </div>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</section>-->
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
</script> -->                        </div>
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
<!--Brand Two End-->         <!--Testimonial Two End-->

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>