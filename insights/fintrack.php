<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'FinTrack Financial Tracking App | FinTech Case Study — ArtisticWebServices';
$page_description = 'Case study: FinTrack — a fintech application by ArtisticWebServices for personal finance tracking, expense management, budget planning, and investment monitoring.';
$page_keywords = 'fintech app development case study, financial tracking app, personal finance app development, expense management app, budget planning app, investment tracking app';
$page_canonical = 'https://artisticwebservices.com/insights/fintrack';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
$page_breadcrumbs = [['name' => 'Insights', 'url' => 'https://artisticwebservices.com/insights/digital-insights.php'], ['name' => 'FinTrack App', 'url' => 'https://artisticwebservices.com/insights/fintrack.php']];
$page_article_schema = ['type' => 'Article', 'date' => '2024-02-20'];
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<section class="about-page fintrack-app white__main">
            <div class="container">
               <div class="row">
                  <div class="col-xl-7">
                     <div class=" mt-2">
                        <div>
                           <!-- <img style=" width: 100px; height:100px;" class="img-fluid mb-2" src="<?= $B ?>/assets/images/project/healthcare/logo.webp" alt="layout styles"> -->
                           <h1 class="section-title__title mb-3">FinTrack - FinTech Application</h1>
                        </div>
                        <p class="laundry-content">FinTrack is a rapidly growing financial technology (FinTech) company that focuses on
                           simplifying personal finance management. The company’s mission is to provide innovative,
                           user-friendly solutions to help individuals track their spending, save more effectively, and
                           achieve financial goals. The client approached us with a vision to create an all-in-one personal
                           finance application that would empower users to take control of their finances through smart
                           insights, budgeting tools, and seamless integration with financial institutions.
                        </p>
                        <p class="laundry-content">The FinTrack app successfully addressed the need for a user-friendly, secure, and
                           comprehensive tool for personal finance management. By combining smart budgeting features,
                           real-time transaction tracking, and personalized financial insights, FinTrack empowered users to
                           take control of their finances with ease. Through continuous improvements and user engagement
                           strategies, the app is well-positioned to grow and meet the evolving needs of modern consumers
                           in the FinTech space.
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
         <h2 class="section-title__title col-md-12 m-auto">Objective & Goals</h2>
         <p>The primary objective of the FinTrack mobile app was to deliver a comprehensive financial
         management platform that allows users to easily manage their expenses, monitor their bank
         accounts, set savings goals, and make informed decisions about their finances.</p>
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
                        <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/fintrack-01.webp" alt="">
                     </div>
                  </div>
                  <div class="col-xl-7">
                     <div class=" mt-3">
                        <div class="icon-counting mb-3">1</div>
                        <h2 class="section-title__title mb-3">Client’s Goals:</h2>
                        <p>Personalized Budgeting: Help users set and track budgets, providing real-time insights
                           into their spending habits.
                        </p>
                        <p>Expense Categorization: Automatically categorize transactions for easy expense
                           tracking and visualization.
                        </p>
                        <p>Financial Goal Setting: Allow users to set and track financial goals (e.g., savings
                           targets, debt repayment) with progress indicators
                        </p>
                        <p>Security and Data Protection: Ensure all user data and transactions are securely handled
                           with the highest level of encryption.
                        </p>
                        <p>User-Friendly Interface: Design an easy-to-use mobile app that simplifies finance
                           management for users with varying levels of financial literacy.
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
                        <h2 class="section-title__title mb-3">Target Audience</h2>
                        <p class="">The FinTrack app was designed for the following key groups:
                        </p>
                        <p>Millennials and Gen Z: Young professionals who want to manage their finances
                           effectively but may lack financial education.
                        </p>
                        <p>Budget-Conscious Individuals: People who need help tracking their spending, setting
                           budgets, and sticking to financial goals.
                        </p>
                        <p>Freelancers and Self-Employed Professionals: Users with irregular income who need
                           assistance with managing cash flow and saving for taxes.
                        </p>
                        <p>Families and Households: People looking for tools to manage household finances, split
                           bills, and track collective spending.
                        </p>
                        <p>Financially Savvy Individuals: People who already have a good understanding of
                           finance and are looking for advanced tools for wealth management.
                        </p>
                     </div>
                  </div>
                  <div class="col-xl-5 text-center">
                     <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                        <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/fintrack-02.webp" alt="">
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
                        <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/fintrack-03.webp" alt="">
                     </div>
                  </div>
                  <div class="col-xl-7 max_height">
                     <div class=" mt-3">
                        <div class="icon-counting mb-3">3</div>
                        <h2 class="section-title__title mb-3">Features & Functionalities</h2>
                        <p class="">The FinTrack mobile app offers a suite of features aimed at providing users with a full spectrum
                           of financial tools:
                        </p>
                        <strong>Core Features:</strong>
                        <b>Account Linking and Integration:</b>
                        <p>Securely link multiple bank accounts, credit cards, and investment accounts to the
                           app for automatic transaction syncing.
                        </p>
                        <p>Integration with major financial institutions using Open Banking APIs to access
                           account balances, transaction data, and payment history.
                        </p>
                        <b>Personalized Budgeting Tools:</b>
                        <p>Automatic Categorization: Transactions are automatically categorized into
                           categories such as groceries, entertainment, utilities, etc.
                        </p>
                        <p>Monthly Budget Overview: Set monthly spending limits and track progress in
                           real-time.
                        </p>
                        <p>Spending Alerts: Receive notifications when users approach or exceed their
                           preset budget limits.
                        </p>
                        <b>Expense Tracking:</b>
                        <p>Detailed Transaction History: View detailed transaction history with the ability
                           to search and filter by category, date, or amount.
                        </p>
                        <p>Expense Reports: Visualize spending patterns over weeks, months, or years with
                           pie charts and graphs.
                        </p>
                        <b>Goal Setting & Tracking:</b>
                        <p>Savings Goals: Users can set specific savings goals (e.g., emergency fund,
                           vacation, home down payment) and track progress.
                        </p>
                        <p>Debt Repayment Plans: Users can create customized plans to pay down debt,
                           such as student loans, credit card balances, or personal loans, and monitor their
                           progress.
                        </p>
                        <b>Investment Insights:</b>
                        <p>Investment Portfolio: Track investments, including stocks, bonds, and retirement
                           accounts, in one place.
                        </p>
                        <p>Risk Assessment: Personalized risk assessment based on the user’s financial
                           profile to provide better investment suggestions.
                        </p>
                        <p>Market Insights: Real-time updates and news related to the user's investment
                           portfolio.
                        </p>
                        <b>Security Features:</b>
                        <p>Two-Factor Authentication (2FA): Secure login with two-factor authentication
                           for added protection.
                        </p>
                        <p>Encryption: All financial data is encrypted using industry-leading standards to
                           ensure data privacy.
                        </p>
                        <p>Fraud Detection: Alerts users to any suspicious activity on their linked accounts.</p>
                        <b>Tax Preparation & Filing Support:</b>
                        <p>Tax Tracking: Track deductible expenses and set aside funds for tax obligations
                           (ideal for freelancers and the self-employed).
                        </p>
                        <p>Tax Filing Integration: Integration with popular tax software for easy tax filing
                           based on tracked income and expenses.
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
                        <h2 class="section-title__title mb-3">Advanced Features:</h2>
                        <strong>AI-Powered Insights:</strong>
                        <p>The app utilizes machine learning to provide personalized financial advice, such
                           as suggesting ways to save, ways to reduce spending, and investment
                           opportunities tailored to the user’s financial goals.
                        </p>
                        <strong>Bill Splitter:</strong>
                        <p>A feature that allows users to split expenses with friends and family members,
                           tracking who has paid, how much is owed, and sending reminders for payments.
                        </p>
                        <strong>Peer-to-Peer Payments:</strong>
                        <p>Users can send and receive money securely to and from others within the app,
                           similar to mobile wallets like Venmo or CashApp.
                        </p>
                     </div>
                  </div>
                  <div class="col-xl-5 text-center">
                     <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                        <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/fintrack-04.webp" alt="">
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
                        <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/fintrack-05.webp" alt="">
                     </div>
                  </div>
                  <div class="col-xl-7 max_height">
                     <div class=" mt-3">
                        <div class="icon-counting mb-3">5</div>
                        <h2 class="section-title__title mb-3">Technology Stack</h2>
                        <p class="">To ensure performance, security, and scalability, FinTrack was built using the following
                           technology stack:
                        </p>
                        <strong>Mobile Development:</strong>
                        <p>React Native for cross-platform app development (iOS and Android).</p>
                        <p>Swift (iOS) and Kotlin (Android) for native development to ensure maximum
                           app performance.
                        </p>
                        <strong>Backend:</strong>
                        <p>Node.js with Express for handling server-side logic.</p>
                        <p>GraphQL API for efficient and flexible data queries between the mobile app and
                           server.
                        </p>
                        <strong>Database:</strong>   
                        <p>MongoDB for storing user data, transaction history, and financial records.</p>
                        <p>PostgreSQL for structured data storage related to investments, goals, and
                           budgeting.
                        </p>
                        <strong>Security:</strong>  
                        <p>OAuth2.0 for secure authentication and authorization</p>
                        <p>SSL/TLS Encryption to ensure that all data transferred between the app and
                           backend is secure.
                        </p>
                        <strong>Cloud Infrastructure:</strong>
                        <p>AWS for cloud hosting, scalability, and storage.</p>
                        <p>Amazon RDS for relational database management.</p>
                        <strong>Data Analytics:</strong>
                        <p>Apache Kafka for processing large amounts of real-time financial transaction
                           data
                        </p>
                        <p>Google Analytics for tracking app usage patterns and user behavior.</p>
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
                        <p class="">The app’s design aimed to provide a clean, intuitive user interface that was both functional and
                           visually appealing, keeping the user experience simple for both novice and experienced users.
                           Key design choices included:
                        </p>
                        <p>User Onboarding: A smooth, step-by-step onboarding process that helps users link their
                           bank accounts, set up budgets, and begin tracking spending right away.
                        </p>
                        <p>Dashboard: A central dashboard that provides a quick snapshot of the user's financial
                           status—current spending, account balances, and progress towards goals.
                        </p>
                        <p>Data Visualization: Interactive charts and graphs for users to easily see where their
                           money is going and how they are progressing toward financial goals.
                        </p>
                        <p>Personalization: The app adapts to the user’s financial habits, offering tailored
                           recommendations for saving, investing, and budgeting.
                        </p>
                     </div>
                  </div>
                  <div class="col-xl-5 text-center">
                     <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                        <img width="80%" class="img-fluid" src="<?= $B ?>/assets/images/case/fintrack-06.webp" alt="">
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
                        <img width="100%" class="img-fluid" src="<?= $B ?>/assets/images/case/fintrack-07.webp" alt="">
                     </div>
                  </div>
                  <div class="col-xl-7">
                     <div class=" mt-3">
                        <div class="icon-counting mb-3">7</div>
                        <h2 class="section-title__title mb-3">Challenges & Solutions</h2>
                        <strong>Challenge 1: Data Security and Privacy</strong>
                        <p>Solution: We implemented top-tier security protocols, including encryption and twofactor authentication to ensure user data was protected from unauthorized access. We
                           also followed GDPR compliance to ensure data privacy standards were met.
                        </p>
                        <strong>Challenge 2: Accurate Financial Data Synchronization</strong>
                        <p>Solution: We integrated the app with Open Banking APIs and other third-party financial
                           data providers to ensure real-time and accurate syncing of bank transactions, investment
                           data, and spending.
                        </p>
                        <strong>Challenge 3: Complexity in Financial Goal Setting</strong>
                        <p>Solution: We built a step-by-step goal-setting tool with simple input fields, progress
                           indicators, and actionable steps, making it easy for users to set and follow through with
                           financial goals.
                        </p>
                        <strong>Challenge 4: User Retention</strong>
                        <p>Solution: We implemented push notifications for financial reminders and milestones,
                           gamification features (e.g., rewards for reaching savings targets), and personalized
                           insights to keep users engaged with the app over time.
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
                        <p>To generate revenue, FinTrack implemented the following monetization strategies:</p>
                        <p>Premium Subscription: Users could access advanced features, such as investment
                           insights, tax filing integration, and additional savings tools, via a monthly or annual
                           subscription.
                        </p>
                        <p>. In-App Purchases: Offering additional financial tools, such as premium budgeting
                           templates, personalized financial consultations, or advanced investment features.
                        </p>
                        <p> Affiliate Marketing: Partnering with financial institutions and services (e.g., credit card
                           providers, investment platforms) to offer users financial products, earning a commission
                           for each sign-up.
                        </p>
                     </div>
                  </div>
                  <div class="col-xl-5 text-center">
                     <div class=" wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms"
                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                       <img width="270px" class="img-fluid" src="<?= $B ?>/assets/images/case/fintrack-08.webp" alt="">
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
                        <img width="370px" class="img-fluid" src="<?= $B ?>/assets/images/project/healthcare/6.webp" alt="">
                     </div>
                  </div>
                  <div class="col-xl-7">
                     <div class=" mt-3">
                        <div class="icon-counting mb-3">9</div>
                        <h2 class="section-title__title mb-3">Key Metrics for Success</h2>
                        <p>Success was measured using the following key performance indicators (KPIs):</p>
                        <p>User Acquisition: Number of app downloads and active users.</p>
                        <p>Engagement: Frequency of user interaction with key features (budgets, savings goals,
                           reports).
                        </p>
                        <p>Retention Rate: The percentage of users who continue using the app after their first
                           month.
                        </p>
                        <p>Revenue: Earnings from subscriptions, in-app purchases, and affiliate partnerships.</p>
                        <p>User Feedback: Ratings, reviews, and direct feedback to assess user satisfaction and
                           areas for improvement.
                        </p>
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