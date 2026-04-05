<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'ProSport Connect Sports & Athletes App | Case Study — ArtisticWebServices';
$page_description = 'Case study: ProSport Connect — a sports and athletes mobile app by ArtisticWebServices with athlete profiles, team management, recruiting tools, and performance tracking.';
$page_keywords = 'sports athlete app development, ProSport Connect case study, sports recruiting platform, athlete profile app, team management app, sports performance tracking app';
$page_canonical = 'https://artisticwebservices.com/insights/prosport-connect-sports-and-athletes-mobile-app';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
$page_breadcrumbs = [['name' => 'Insights', 'url' => 'https://artisticwebservices.com/insights/digital-insights.php'], ['name' => 'ProSport Connect App', 'url' => 'https://artisticwebservices.com/insights/prosport-connect-sports-and-athletes-mobile-app.php']];
$page_article_schema = ['type' => 'Article', 'date' => '2024-02-16'];
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<section class="about-page prosport-app white__main">
            <div class="container">
               <div class="row">
                  <div class="col-xl-7">
                     <div class="mt-2">
                        <div>
                           <h1 class="section-title__title mb-3">ProSport Connect - Sports and Athletes Mobile App</h1>
                        </div>
                        <p class="laundry-content">
                           ProSport Connect is a growing tech startup aimed at transforming the sports industry by
                           providing athletes, coaches, and fans with a centralized platform to engage with real-time sports
                           data, track performance, and connect with their favorite teams and players. The company
                           recognized the need for a mobile solution that could deliver live scores, detailed player statistics,
                           and analytics for athletes, while also keeping fans engaged through interactive features. The
                           company wanted to create a mobile app that would cater to these diverse needs and provide a
                           seamless experience for all users.
                        </p>
                        <p class="laundry-content2" style="display: none;">
                           By combining live scores, personalized athlete insights, and fan interaction, ProSport Connect
                           created a comprehensive sports ecosystem that enhanced the experience for all involved. With its
                           sleek design, real-time data capabilities, and scalable infrastructure, the app is positioned to grow
                           alongside the sports industry and maintain its place as a leading platform in the mobile sports app
                           market.
                        </p>
                        <button class="thm-btn abut-page__btn" id="readMoreBtn">Read More</button>
                     </div>
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
                  <h2 class="section-title__title col-md-12 m-auto">Objective & Goals</h2>
                  <p>The primary objective of the ProSport Connect Mobile App was to bridge the gap between
                     athletes, coaches, and fans, providing them with a unified platform to access sports data, track
                     performance, and stay engaged with their favorite sports.
                  </p>
                  <div class="chalanges-content">
                     <h4>Client's Goals:</h4>
                     <p>Real-time Scores & Updates: Provide users with up-to-the-minute live scores and match statistics for various sports. </p>
                     <p>Performance Analytics: Empower athletes to track and analyze their personal performance metrics.</p>
                     <p>Fan Engagement: Create a vibrant space for sports fans to engage with their favorite teams, athletes, and other fans</p>
                     <p>Team and Coach Insights: Offer tools for coaches and teams to track player development, game tactics, and overall team performance.</p>
                     <p>Scalable Platform: Ensure the app could scale to handle millions of active users during major sports events. </p>
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
                     <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/target-audience.webp" alt="">
                  </div>
               </div>
               <div class="col-xl-7">
                  <div class=" mt-3">
                     <div class="icon-counting mb-3">1</div>
                     <h2 class="section-title__title mb-3">Target Audience</h2>
                     <p>The ProSport Connect Mobile App was designed with the following key audiences in mind:</p>
                     <p>Sports Fans: Individuals who are passionate about staying up-to-date with scores, match statistics, and news from their favorite teams, players, or sports leagues. </p>
                     <p>Athletes: Both amateur and professional athletes looking to monitor their performance, track progress, and improve their skills over time.</p>
                     <p>Coaches & Teams: Coaches and team management personnel who need detailed player stats and insights for better decision-making and game strategy</p>
                     <p>Event Organizers: Sports event organizers who need to manage and track various aspects of sports events, from player registration to live results.</p>
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
                     <h2 class="section-title__title mb-3">Features & Functionalities</h2>
                     <p class="">The ProSport Connect Mobile App provides a variety of features tailored to its diverse user base:
                     </p>
                     <strong>
                     For Fans:
                     </strong>
                     <ul>
                        <li>Live Scores & Match Updates: Real-time score updates for major sports leagues and
                           events, with easy access to team and individual player statistics.
                        </li>
                        <li>Match Highlights: Clips of key moments, goals, and highlights from ongoing games.</li>
                        <li>Fan Engagement Tools: A social feed where fans can interact, comment, share opinions,
                           and participate in polls or voting for "Player of the Match."
                        </li>
                        <li>. Personalized Notifications: Fans can opt in for push notifications based on their favorite
                           teams, players, or sports events. 
                        </li>
                        <li>Sports News: Regular updates on sports-related news, including transfers, injuries, and
                           major event previews.
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-xl-5 text-center">
                  <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                     style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                     <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/features-&amp;-functionalities.webp" alt="">
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
                     <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/for-athletes.webp" alt="">
                  </div>
               </div>
               <div class="col-xl-7">
                  <div class=" mt-3">
                     <div class="icon-counting mb-3">3</div>
                     <h2 class="section-title__title mb-3">For Athletes:</h2>
                     <p class="">Detailed Performance Metrics: Track key performance indicators like speed,
                        endurance, accuracy, and overall stats for each game or training session. 
                     </p>
                     <p>Progress Reports: Visual charts to represent an athlete’s performance over time,
                        allowing them to see areas of improvement and identify weaknesses.
                     </p>
                     <p>Training Logs: A feature to log training sessions, set goals, and track workouts,
                        including intensity, duration, and results.
                     </p>
                     <p>Health Integration: Connect with wearable devices to track health data such as sleep,
                        recovery time, and injury management.
                     </p>
                     <p>Event Registration: Athletes can sign up for upcoming events and track their
                        performance post-event.
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
                     <h2 class="section-title__title mb-3">For Coaches and Teams:</h2>
                     <p class="">Team Analytics Dashboard: Coaches and team managers can review detailed analytics
                        of team and player performance.
                     </p>
                     <p>Tactical Insights: Historical performance data to assist in developing strategies and
                        understanding opponent tactics.
                     </p>
                     <p>Scheduling and Planning: Tools for organizing practices, team meetings, and match
                        schedules.
                     </p>
                     <p>Communication Hub: Private messaging systems to communicate with team members
                        and staff. 
                     </p>
                     <p>Player Development Tracking: Track the growth and progression of athletes through
                        training, matches, and feedback.
                     </p>
                  </div>
               </div>
               <div class="col-xl-5 text-center">
                  <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                     style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                     <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/for-coaches-and-teams.webp" alt="">
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
                     <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/technology-stack.webp" alt="">
                  </div>
               </div>
               <div class="col-xl-7">
                  <div class=" mt-3">
                     <div class="icon-counting mb-3">5</div>
                     <h2 class="section-title__title mb-3">Technology Stack</h2>
                     <p class="">To ensure scalability, security, and performance, ProSport Connect used the following
                        technologies: 
                     </p>
                     <strong>Mobile Development: </strong>
                     <ul>
                        <li>React Native for cross-platform support (iOS and Android). </li>
                        <li>Swift (iOS) and Kotlin (Android) for platform-specific development when
                           needed.
                        </li>
                     </ul>
                     <strong>Backend:</strong>
                     <ul>
                        <li>Node.js with Express for handling server-side logic.</li>
                        <li>GraphQL API for efficient querying of live sports data.
                           needed.
                        </li>
                     </ul>
                     <strong>Database:</strong>
                     <ul>
                        <li>PostgreSQL for structured relational data (e.g., user profiles, teams, event
                           results). 
                        </li>
                        <li>MongoDB for non-relational data (e.g., performance logs, training sessions).</li>
                     </ul>
                     <strong>Real-Time Data Handling:</strong>
                     <ul>
                        <li>WebSockets for live score updates and real-time data sync </li>
                     </ul>
                     <strong>Cloud Infrastructure:</strong>
                     <ul>
                        <li>Amazon Web Services (AWS) for scalable cloud hosting and storage. </li>
                        <li>CloudFront for content delivery and fast access to data worldwide.</li>
                     </ul>
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
                     <h2 class="section-title__title mb-3">Design Considerations</h2>
                     <p class="">The design of ProSport Connect aimed to provide an intuitive, user-friendly experience with a
                        clean interface. Key design decisions included:
                     </p>
                     <p>Fans: The home screen for fans featured real-time scorecards, upcoming games, and a
                        personalized news feed. Fans could also interact with others via live chats, polls, and user
                        comments.
                     </p>
                     <p>Athletes: The design for athletes focused on clear, digestible charts and graphs to make it
                        easy for athletes to track their progress. Features like progress bars and performance
                        goals made the app visually appealing and motivating.
                     </p>
                     <p>Coaches and Teams: A professional dashboard with visualized team stats, player
                        insights, and match analysis, ensuring that all key information was easy to access at a
                        glance.
                     </p>
                  </div>
               </div>
               <div class="col-xl-5 text-center">
                  <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                     style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                     <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/design-considerations.webp" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="about-page pt-0">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-5 text-center">
                  <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                     style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                     <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/challenges-&amp;-solutions.webp" alt="">
                  </div>
               </div>
               <div class="col-xl-7">
                  <div class=" mt-3">
                     <div class="icon-counting mb-3">7</div>
                     <h2 class="section-title__title mb-3">Challenges & Solutions</h2>
                     <strong>Challenge 1: Real-Time Data Synchronization</strong>
                     <p class="">
                        Solution: ProSport Connect implemented WebSockets to ensure real-time data
                        synchronization, ensuring that scores, stats, and notifications were delivered instantly,
                        keeping the app responsive and engaging during live events.
                     </p>
                     <strong>Challenge 2: Data Accuracy for Athlete Performance</strong>
                     <p class="">
                        Solution: The app partnered with official sports data providers and integrated with
                        wearable fitness devices (e.g., Fitbit, Garmin) to provide accurate performance metrics
                        for athletes.
                     </p>
                     <strong>Challenge 3: User Engagement & Retention</strong>
                     <p class="">
                        Solution: By introducing interactive features like social sharing, in-app polls, fan
                        voting, and personalized notifications, the app kept users engaged and encouraged them
                        to return for updates on their favorite teams and athletes.
                     </p>
                     <strong>Challenge 4: Scalability for Large Audiences</strong>
                     <p class="">
                        Solution: To support millions of users, ProSport Connect utilized cloud infrastructure
                        (AWS) to scale the backend and ensure the app could handle high traffic, particularly
                        during large events like championships and finals.
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
                     <div class="icon-counting mb-3">8</div>
                     <h2 class="section-title__title mb-3">Monetization Strategies</h2>
                     <p class="">To ensure the sustainability of ProSport Connect, several monetization strategies were
                        implemented:
                     </p>
                     <p>In-app Purchases: Premium features like advanced analytics, player insights, and adfree experiences were offered through in-app purchases.</p>
                     <p>Subscription Model: Users could subscribe to a premium plan to access exclusive
                        content, enhanced performance tracking, and early access to event registrations.
                     </p>
                     <p>Ad Revenue: Display ads within non-premium sections, such as news feeds, with the
                        option for users to purchase an ad-free experience.
                     </p>
                     <p>Sponsorships & Partnerships: ProSport Connect explored partnerships with sports
                        brands, fitness companies, and event organizers for sponsored content and affiliate
                        marketing
                     </p>
                  </div>
               </div>
               <div class="col-xl-5 text-center">
                  <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                     style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                     <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/monetization-strategies.webp" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="about-page pt-0">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-5 text-center">
                  <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                     style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                     <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/key-metrics-for-success.webp" alt="">
                  </div>
               </div>
               <div class="col-xl-7">
                  <div class=" mt-3">
                     <div class="icon-counting mb-3">9</div>
                     <h2 class="section-title__title mb-3">Key Metrics for Success </h2>
                     <p class="">The app’s success was measured using the following key metrics:
                     </p>
                     <p>User Acquisition: The number of downloads and active users</p>
                     <p>Engagement Rate: How frequently users interacted with app features like live scores,
                        notifications, and fan polls.
                     </p>
                     <p>Revenue: Income generated through in-app purchases, subscriptions, and ad revenue.</p>
                     <p>Retention Rate: The percentage of users who return to the app after their first use.</p>
                     <p>User Feedback: Collecting and analyzing user reviews to refine app features and
                        improve the user experience.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>

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
</script> -->                     </div>
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
</section>      <!--Counter One End-->
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
</section>      <!--Testimonial Two End-->
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
<!--Brand Two End-->      <!--Testimonial Two End-->

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>