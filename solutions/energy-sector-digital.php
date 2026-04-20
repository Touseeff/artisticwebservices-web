<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'Energy Sector App Development USA | IoT & Digital Automation Solutions — ArtisticWebServices';
$page_description = 'ArtisticWebServices delivers smart energy sector digital solutions with IoT integration, device automation, and real-time monitoring apps for USA energy companies.';
$page_keywords = 'energy sector app development USA, IoT energy management software, digital energy solutions, smart grid app development, energy automation software, oil gas digital solutions';
$page_canonical = 'https://artisticwebservices.com/solutions/energy-sector-digital';
$page_breadcrumbs = [['name' => 'Solutions', 'url' => 'https://artisticwebservices.com/solutions/industries'], ['name' => 'Energy Sector', 'url' => 'https://artisticwebservices.com/solutions/energy-sector-digital']];
$page_service_schema = ['name' => 'Energy Sector Digital Solutions', 'description' => 'IoT-integrated mobile applications and digital automation for the energy sector in USA.'];
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservices-og.png';
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<section class="about-page energy-bg white__main">
            <div class="container">
               <div class="row">
                  <div class="col-xl-7">
                     <div class=" mt-3">
                        <div>
                           <!--  <img style=" width: 100px; height:100px;" class="img-fluid mb-2" src="<?= $B ?>/assets/images/project/vpn-port/vpn-anrid-icon.svg" alt="layout styles"> -->
                           <h1 class="section-title__title mb-3">Energy Sector Mobile App with IoT Integration and Device Automation</h1>
                           <h4 class="section-title__title mb-3">Client:</h4>
                           <h4 class="section-title__title mb-3">EnergyTech Solutions Inc.</h4>
                        </div>
                        <p class="laundry-content">A leading provider of renewable energy solutions, specializing in solar power systems, smart grid
                           technologies, and energy management services for residential and commercial sectors. 
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
                  <h2 class="section-title__title col-md-10 m-auto">Project Overview:</h2>
                  <p>EnergyTech Solutions sought to enhance the energy management experience for their clients by
                     developing a mobile application that would allow users to monitor, control, and optimize their
                     renewable energy systems (solar panels, inverters, batteries) in real-time. The goal was to integrate IoT
                     devices with a mobile platform to provide users with a seamless and automated energy management
                     system, ultimately driving energy savings, increasing system efficiency, and reducing manual
                     intervention.
                  </p>
                  <div class="chalanges-content">
                      <h4>Challenges:</h4>
                  <p><strong>Data Complexity: </strong>The solar energy systems included various IoT-enabled devices (solar panels,
                     inverters, energy storage systems, and sensors) generating large volumes of data, making realtime processing and visualization a challenge.
                  </p>
                  <p><strong>Automation:</strong> Automating energy management processes, such as adjusting power generation,
                     battery storage, and energy consumption, based on real-time data and predictive analytics, was
                     critical.
                  </p>
                  <p><strong>User Engagement:</strong> The mobile app needed to provide an intuitive user interface that allowed
                     users to interact with their devices easily, set energy preferences, and receive actionable
                     insights.
                  </p>
                  <p><strong>Security: </strong>As the platform would handle sensitive energy consumption data and remote device
                     control, robust security measures were required to protect user information and prevent
                     unauthorized access. 
                  </p>
                  </div>
               </div>
            </div>
         </section>
         <!--Services Two End-->
          <section class="about-page netfusionary-page pt-0">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-5 text-center">
                     <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                        <img width="100%" class="img-fluid"
                           src="<?= $B ?>/assets/images/case/eng-results.webp" alt=""> 
                     </div>
                  </div>
                  <div class="col-xl-7">
                     <div class=" mt-3 mb-4">
                        <div class="icon-counting mb-3">1</div>
                        <div class="wellness-content">
                           <h2>Results:</h2>
                           <p><strong>Improved Operational Efficiency:</strong> The integration of IoT and automation reduced manual
                                intervention by over 60%, allowing users to rely on the system for optimal energy management
                                without constant monitoring.</p>
                           <p>
                              <strong> Enhanced User Engagement:</strong> The mobile app's intuitive interface and personalized energy
                                recommendations increased user engagement by 45%, as users felt more in control of their
                                energy consumption and savings.
                           </p>
                           <p>
                               <strong>Cost Savings:</strong> On average, users saved 20-25% on their energy costs by optimizing their energy
                                production, consumption, and storage, thanks to automated scheduling and predictive analytics.
                           </p>
                           <p>
                               <strong>Predictive Maintenance Impact:</strong> Automated maintenance alerts and predictive diagnostics
                                decreased downtime by 30%, ensuring that the energy systems operated smoothly with minimal
                                service interruptions.
                           </p>
                           <p>
                               <strong>Scalability:</strong> The cloud-based platform enabled EnergyTech Solutions to easily scale their services
                                to new customers, adding more devices and energy sources as needed without additional
                                complexity
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="about-page netfusionary-page pt-0">
            <div class="container">
               <div class="row align-items-center">
                
                  <div class="col-xl-7">
                     <div class=" mt-3">
                        <div class="icon-counting mb-3">2</div>
                        <div class="wellness-content">
                           <h2> IoT Integration:</h2>
                           <p>We integrated various IoT devices (solar panels, inverters, battery storage units, and smart meters) into a
                              centralized cloud-based platform. The platform leveraged MQTT (Message Queuing Telemetry Transport)
                              protocol for efficient, real-time communication between the mobile app and the IoT devices. This
                              integration allowed the system to:
                           </p>
                           <ul>
                              <li>Collect data from solar panels, energy storage systems, and consumption meters in real-time.</li>
                              <li>Monitor the status of devices (e.g., battery levels, energy production, grid status) and transmit this information to the mobile app.</li>
                              <li>Enable remote control of devices, such as turning off devices for maintenance or adjusting energy settings based on user preferences.</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                    <div class="col-xl-5 text-center">
                     <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                        <img width="100%" class="img-fluid"
                           src="<?= $B ?>/assets/images/case/-eng-iot-Integration-1.webp" alt=""> 
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="about-page netfusionary-page wellness-white pt-0">
            <div class="container">
               <div class="row align-items-center">
                <div class="col-xl-5 text-center">
                     <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                        <img width="100%" class="img-fluid"
                           src="<?= $B ?>/assets/images/case/eng-mobile-application-development.webp" alt=""> 
                     </div>
                  </div>
                  <div class="col-xl-7">
                     <div class=" mt-3">
                        <div class="icon-counting mb-3">3</div>
                        <div class="wellness-content">
                           <h2>Mobile Application Development:</h2>
                           <p>We developed a cross-platform mobile application using React Native to ensure it was accessible on both iOS and Android devices. Key features of the app included:</p>
                           <ul>
                              <li><strong>Real-time Monitoring:</strong> Users could view detailed energy metrics, including real-time power
                                 generation, battery storage levels, energy consumption, and grid performance, all displayed in
                                 easy-to-understand graphs and dashboards.
                              </li>
                              <li><strong>Automation & Scheduling:</strong> Users could set up automated schedules for energy management,
                                 such as deciding when to use grid power versus stored solar energy or automatically optimizing
                                 battery charging during off-peak hours for cost savings.
                              </li>
                              <li>
                                 <strong> Push Notifications & Alerts:</strong> The app sent notifications about system health, energy usage
                                 anomalies, or upcoming maintenance requirements, ensuring users remained informed and
                                 could take timely action.
                              </li>
                              <li><strong>Energy Optimization Recommendations:</strong> Leveraging historical data and machine learning
                                 algorithms, the app provided users with smart recommendations to optimize energy
                                 consumption and enhance savings.
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               
               </div>
            </div>
         </section>
         <section class="about-page netfusionary-page pt-0">
            <div class="container">
               <div class="row align-items-center">
               
                  <div class="col-xl-7">
                     <div class=" mt-3">
                        <div class="icon-counting mb-3">4</div>
                        <div class="wellness-content">
                           <h2>Device Automation:</h2>
                           <p>The system featured a series of automated workflows designed to optimize energy use and storage. These automations included:</p>
                           <ul>
                              <li><strong>Dynamic Energy Allocation:</strong> The system automatically adjusted energy distribution based on
                                 availability, ensuring that excess solar power was stored in batteries or sent back to the grid
                                 when needed. During peak consumption periods, the system would pull energy from stored
                                 batteries to reduce reliance on the grid.
                              </li>
                              <li>
                                 <strong>Predictive Maintenance:</strong> IoT sensors on inverters and solar panels sent diagnostic data to the
                                 cloud, allowing the system to predict and schedule maintenance before issues became critical,
                                 reducing downtime and enhancing the lifespan of devices.
                              </li>
                              <li>
                                 <strong> Load Balancing:</strong> The system dynamically balanced energy loads across multiple devices and
                                 energy sources, ensuring optimal performance even during fluctuating weather conditions.
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                     <div class="col-xl-5 text-center">
                     <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                        <img width="100%" class="img-fluid"
                           src="<?= $B ?>/assets/images/case/eng-device-automation.webp" alt=""> 
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="about-page netfusionary-page wellness-white pt-0">
            <div class="container">
               <div class="row align-items-center">
                <div class="col-xl-5 text-center">
                     <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                        <img width="270px" class="img-fluid"
                           src="<?= $B ?>/assets/images/energy/4.webp" alt=""> 
                     </div>
                  </div>
                  <div class="col-xl-7">
                     <div class=" mt-3">
                        <div class="icon-counting mb-3">5</div>
                        <div class="wellness-content">
                           <h2>Cloud Integration & Data Analytics:</h2>
                           <p>We integrated the mobile app with a cloud-based backend built on AWS (Amazon Web Services). The
                              cloud infrastructure allowed for seamless data storage, processing, and advanced analytics. The system:
                           </p>
                           <ul>
                              <li>Processed vast amounts of data from IoT sensors in real-time, ensuring accurate decision-making
                                 and immediate responses to user inputs.
                              </li>
                              <li>Stored historical data for performance analysis, helping users track energy savings and
                                 consumption trends over time.
                              </li>
                              <li>
                                 Used machine learning algorithms to forecast energy production and consumption patterns,
                                 enabling predictive adjustments to system settings.
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                
               </div>
            </div>
         </section>
        
         <!--<section class="about-page netfusionary-page wellness-white pt-0">-->
         <!--   <div class="container">-->
         <!--      <div class="row align-items-center">-->
         <!--         <div class="col-xl-7">-->
         <!--            <div class=" mt-3">-->
         <!--               <div class="icon-counting mb-3">6</div>-->
         <!--               <div class="wellness-content">-->
         <!--                  <h2>Data and Security</h2>-->
         <!--                  <h4>Secure Data Storage</h4>-->
         <!--                  <p>Strong encryption and privacy controls for user data.</p>-->
         <!--                  <p>Compliance with relevant regulations (e.g., GDPR).</p>-->
         <!--                  <h4>Usage Data Export</h4>-->
         <!--                  <p>Options to download usage data for personal records or analysis.</p>-->
         <!--               </div>-->
         <!--            </div>-->
         <!--         </div>-->
         <!--         <div class="col-xl-5 text-center">-->
         <!--            <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"-->
         <!--               style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">-->
         <!--               <img width="270px" class="img-fluid"-->
         <!--                  src="<?= $B ?>/assets/images/energy/6.webp" alt=""> -->
         <!--            </div>-->
         <!--         </div>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</section>-->
         <!--<section class="about-page netfusionary-page pt-0">-->
         <!--   <div class="container">-->
         <!--      <div class="row align-items-center">-->
         <!--         <div class="col-xl-5 text-center">-->
         <!--            <div class=" wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms"-->
         <!--               style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">-->
         <!--               <img width="270px" class="img-fluid"-->
         <!--                  src="<?= $B ?>/assets/images/energy/7.webp" alt=""> -->
         <!--            </div>-->
         <!--         </div>-->
         <!--         <div class="col-xl-7">-->
         <!--            <div class=" mt-3 mb-4">-->
         <!--               <div class="icon-counting mb-3">7</div>-->
         <!--               <div class="wellness-content">-->
         <!--                  <h2>Additional Features</h2>-->
         <!--                  <h4>Interactive Maps</h4>-->
         <!--                  <p>Visual representation of energy sources, outages, or service areas.</p>-->
         <!--                  <p>Nearby renewable energy installations or charging stations.</p>-->
         <!--                  <h4>Energy News and Updates</h4>-->
         <!--                  <p>Industry news related to energy trends, technologies, and policies.</p>-->
         <!--                  <p>Educational resources on energy efficiency.</p>-->
         <!--                  <h4>Emergency Reporting</h4>-->
         <!--                  <p>Quick access to report outages or emergencies.</p>-->
         <!--                  <p>Status updates on resolution efforts.</p>-->
         <!--               </div>-->
         <!--            </div>-->
         <!--         </div>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</section>-->
         <!--Welcome Three Start-->
         <section class="welcome-three pt-5">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6">
                     <div class="welcome-three__left">
                        <div class="section-title text-left">
                           <img src="<?= $B ?>/assets/images/as.webp">
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                     style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                     <div class="welcome-three__right ">
                        <div class="row">
                           <?php require_once __DIR__ . '/../includes/form-quote.php'; ?>
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