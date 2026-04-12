<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'Real Estate App Development USA | Property Tech Solutions — ArtisticWebServices';
$page_description = 'Build powerful real estate apps with ArtisticWebServices. Property search portals, virtual tours, MLS integration, and real estate CRM for USA agents and agencies.';
$page_keywords = 'real estate app development USA, property app development, real estate software company, MLS integration development, property management app';
$page_breadcrumbs = [['name' => 'Services', 'url' => 'https://artisticwebservices.com/services.php'], ['name' => 'Real Estate App Development', 'url' => 'https://artisticwebservices.com/services/real-estate-app-development.php']];
$page_service_schema = ['name' => 'Real Estate App Development', 'description' => 'Property search portals, virtual tours, MLS integration, and real estate CRM for USA agents and agencies.'];
$page_faq = [
    ['q' => 'What real estate app features can ArtisticWebServices build?', 'a' => 'We build property search portals, MLS integration, virtual property tours (360 degrees), agent management portals, mortgage calculators, real estate CRM, listing management, and rental management apps.'],
    ['q' => 'Can you integrate MLS data into a real estate app?', 'a' => 'Yes. ArtisticWebServices integrates IDX/MLS feeds, Zillow API, Realtor.com data, and other real estate data sources into custom property search apps.']
];
$page_canonical = 'https://artisticwebservices.com/services/real-estate-app-development';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->

<section class="about-page state-section-main" style="background-image: url('<?= $B ?>/assets/images/realstate/banner.webp'); background-size: cover; background-position: center;">
            <div class="container">
               <div class="row">
                  <div class="col-xl-7">
                     <div class=" mt-3">
                        <div>
                           <h1 class="section-title__title mb-3" style="color: #e8002d;">Unlock the Future of Real Estate with Cutting-Edge App Solutions Tailored for You</h1>
                        </div>
                        <p class="" style="color: #ffffff;">Give your real estate business a new dimension with our real estate app development services. Our team brings you a wide and innovative collection of services that will raise the interaction with customers of the real estate application development company. Achieve customer satisfaction, and let your business reach sky-high revenue with unique mobile solutions for multiple sectors including real estate. Collaborate with our top-notch real estate developers today.</p>
                        <div class="state_btns">
                           <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn btn-red-bg">Get Your Free Quote</a>
                           <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn btn-white-bg">Get Your Free Quote</a>
                        </div>
                     </div>
                  </div>
                  
                  <div class="col-xl-5">
                       <img class="img-fluid awards-img w-80" src="<?= $B ?>/assets/images/real-estate.webp" alt="softwareworld">
                     <!--<div class="left_state">-->
                     <!--   <div class="state_img">-->
                     <!--      <img src="<?= $B ?>/assets/images/testimonial/testimonial-one-img-3.webp" alt="Award-Winning Mobile App Development Company New York">-->
                     <!--   </div>-->
                     <!--   <div class="state_content">-->
                     <!--      <h4>Are You Curious To Uncover The Possibilities Offered By Our Real Estate App Development Services?</h4>-->
                     <!--      <div class="state_bookbtn">-->
                     <!--         <a href="#">Book a Call</a>-->
                     <!--      </div>-->
                     <!--      <p>Or, fill out this form to tell us about your needs.</p>-->
                     <!--      <ul>-->
                     <!--         <li><a href="#">PM 100% confidential</a></li>-->
                     <!--         <li><a href="#">PM We sign NDA</a></li>-->
                     <!--         <li><a href="#">PM Our Process</a></li>-->
                     <!--      </ul>-->
                     <!--   </div>-->
                     <!--</div>-->
                     <!--<div class="state_partners state-real-imgs">-->
                     <!--   <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/google-logo.wine.webp" alt="softwareworld">-->
                     <!--   <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/amazon-logo.wine.webp" alt="trustpilot">-->
                     <!--   <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/stripe-logo.wine.webp" alt="app futura">-->
                     <!--   <img class="img-fluid awards-img squ" src="<?= $B ?>/assets/images/Square-logo.webp" alt="clutch">-->
                     <!--</div>-->
                  </div>
               </div>
            </div>
         </section>
         <section class="companies">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-3">
                     <div class="companies_text">
                        <h4>ENDORSED BY BOTH STARTUPS AND FORTUNE 500 COMPANIES</h4>
                     </div>
                  </div>
                  <div class="col-md-9">
                     <div class="companies_img">
                        <img class="img-fluid awards-img" src="<?= $B ?>/assets/images/trusted_logos_desktop.webp" alt="softwareworld">
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="key-features">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="key-features-title">
                        <h2>Key Elements of Real Estate App Development Companies Offers</h2>
                        <p>Engaging new customers in your real estate, while keeping the previous one captivated is a real challenge for business. But, nothing is impossible with our reliable real estate mobile application development solution. Our skilled real estate developers make sure to include unique features and functionalities in it. Share your requirements with us and we will deliver a feature-rich application in hand according to your needs.</p>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="state-tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Customer Panel</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Vendor Panel</button>
                           </li>
                        </ul>
                        <div class="tab-content mt-4" id="myTabContent">
                           <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <div class="row">
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>User Registration</h4>
                                       <p>Customers can easily create personalized profiles on your real estate mobile app, unlocking exclusive access to a wide range of online properties tailored just for them.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Search properties</h4>
                                       <p>With this feature, customers can effortlessly discover nearby real estate properties and conveniently schedule visits that fit their plans.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Scheduling meeting</h4>
                                       <p>This real estate software feature encourages users and customers to schedule meetings effeciently and visits property while making their journey seamless and enjoyable.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Push notification</h4>
                                       <p>Send engaging notifications to keep your audience updated time to time on your real estate properties. Whether its about exciting deals, new projects and more and ensure they never miss a beat.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>QR Code Reader</h4>
                                       <p>The QR code reader is one of the innovative feature in real estate application that allows customers or users to effortlessly access information about the desired properties with just a scan.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Virtual Tours</h4>
                                       <p>This feature provides an immersive 360-degree view of your real estate apartments, allowing clients to explore and familiarize themselves with properties from the comfort of their own homes. Experience remote property tours like never before!</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Assistance & Support</h4>
                                       <p>Users and customers may simply contact you with any questions about your real estate web solutions via phone, chat or automated assistance while ensuring they get the help they need when they need it.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Feedback & review</h4>
                                       <p>Customers can share their valuable feedback and reviews about your real estate app development services, reflecting their experiences and helping you enhance your offerings!</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <div class="row">
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Dashboard</h4>
                                       <p>By login into the admin interface, the administrator can view all of the real estate properties in one location.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Manage Pricing</h4>
                                       <p>This function, which appears on real estate software, allows you to control the pricing of all real estate properties.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Property management</h4>
                                       <p>With this real estate application development feature, you can quickly access a real-time display of all your properties with a single click.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Lead Management</h4>
                                       <p>The administrator may monitor progress with this function, which shows all incoming leads via real estate web application development software.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Add/Delete Property</h4>
                                       <p>This functionality makes it simple for administrators to add or remove certain real estate properties as needed.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Agent management</h4>
                                       <p>For ease of tracking, all of the agents' information related to a specific real estate company is included here.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Maintenance & Support</h4>
                                       <p>This component of the real estate app is essential for monitoring client inquiries. All of the property queries are accessible to the admin in one location.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="tab-boxx">
                                       <h4>Data Analytics</h4>
                                       <p>The administrator can use this function to enhance real estate web solutions and track the real estate business's growth.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="business-model">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="key-features-title">
                        <h2>Launch a Real Estate App for Any Business Strategy</h2>
                        <p>With our innovative real estate solution, we are here to empower businesses of all sizes while helping you grow competitively in the market.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="business-model-box">
                        <img src="<?= $B ?>/assets/images/realstate/real-box-1.webp" alt="real-box-1">
                        <h2>On-Demand Retail Estate App</h2>
                        <p>Develop a real estate app that allows users to search, reserve and pay for their desired properties, and make their property journey seamless and convenient.</p>
                        <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn btn-red-bg">Get Your Free Quote</a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="business-model-box">
                        <img src="<?= $B ?>/assets/images/realstate/real-box-2.webp" alt="real-box-2">
                        <h2>Properties / Real Estate Brokers</h2>
                        <p>Create a dynamic real estate app marketplace that provides property listings, shows opening hours along with featuring menus, and organizes your staff in all in one user-friendly solution.</p>
                        <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn btn-red-bg">Get Your Free Quote</a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="business-model-box">
                        <img src="<?= $B ?>/assets/images/realstate/real-box-3.webp" alt="real-box-3">
                        <h2>Real Estate Aggregators</h2>
                        <p>To simplify property searches launch your very own real estate aggregation services and makes it effecient for the property comparisons and unlock special offers while making the home-hunting experience promising and rewarding.</p>
                        <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn btn-red-bg">Get Your Free Quote</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="services-section">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="key-features-title">
                        <h4 class="mt-4">We are the leading real estate app development company in the region</h4>
                        <h2>Our Complete Suite of Real Estate App Development Services</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4 mt-4">
                     <div class="business-model-box mb-4">
                        <img src="<?= $B ?>/assets/images/realstate/Real%20Estate%20Agent.png" alt="about-us" class="img-fluid">
                        <h2>Real Estate Management App</h2>
                        <p>Transform your real estate operations with our property management app development solution.  This app solution for the real estate allows you to easily manage property listings, track transactions, and promote easy communication between the parties like buyers, sellers and agents for an efficient experience.</p>
                     </div>
                  </div> 
                  <div class="col-md-4 mt-4">
                     <div class="business-model-box mb-4">
                       <img src="<?= $B ?>/assets/images/realstate/Real%20estate%20Marketing.png" alt="about-us" class="img-fluid">
                        <h2>Enterprising via Real Estate App Development Solutions</h2>
                        <p>Our property apps are carefully built to meet the needs of large-scale real estate firms. With our efficient and smooth software development services, we help you reach your estimates goal that drive succes to your strategic business objectives.</p>
                     </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="business-model-box mb-4">
                        <img src="<?= $B ?>/assets/images/realstate/Real%20estate%20broker.png" alt="about-us" class="img-fluid">
                        <h2>RealEstate Web App Development</h2>
                        <p>Our Real estate app developers create a dynamic yet responsive software solution either web or app, that perfectly acts as a showcase of your portfolio of the properties. Our Web3 real estate app solutions levels up user engagement and captivate potential clients while ensuring your listings stand out in a competitive market.</p>
                     </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="business-model-box mb-4">
                        <img src="<?= $B ?>/assets/images/realstate/Property%20Search.png" alt="about-us" class="img-fluid">
                       
                        <h2>Property Search Applications</h2>
                        <p>Our expert developers incorporate advanced functionalities and features such as enhanced search options, voice control, interactive maps, and more into the property management app, increasing user engagement and client loyalty.</p>
                     </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="business-model-box mb-4">
                         <img src="<?= $B ?>/assets/images/realstate/Property%20valuation.png" alt="about-us" class="img-fluid">
                         
                        <h2>Property Valuation  Application</h2>
                        <p>Let's encourage your users to accurately estimate their property's market value with the use of solution provided by real estate Android development company, ArtisticWebServices. Our app consist of list of useful features and functionalities like price details, location insights, property age, and more, providing a comprehensive valuation experience.</p>
                     </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="business-model-box mb-4">
                        <img src="<?= $B ?>/assets/images/realstate/Real%20Estate%20Agent.png" alt="about-us" class="img-fluid">
                        <h2>Real Estate Management Apps</h2>
                        <p>The process of finding your dream home has become simpler with real estate app for any platform, either iOS or Android, which enables users to look for and search a vast variety of listings.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         
         <section class="premium-features">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="premium-features-title">
                        <h5>Want to Close More Deals and 10X Your Profit?</h5>
                        <h2>Empower Your <span style="color: #d51524">Real Estate Business</span> with a Robust Tech Suite and Premium Features!</h2>
                     </div>
                  </div>
               </div>
               <!-- Tab buttons -->
               <div class="row my-5">
                  <div class="col-md-12">
                     <div class="tabs-container">
                        <div class="tab active" data-tab="tab1">
                           <h3>Real Estate Customer App</h3>
                        </div>
                        <div class="tab" data-tab="tab2">
                           <h3>Real Estate Agent App</h3>
                        </div>
                        <div class="tab" data-tab="tab3">
                           <h3>Admin Panel</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Content area with accordion and image -->
               <div class="row">
                  <!-- Accordion on hover -->
                  <div class="col-md-12">
                     <div class="tab-content active" id="tab1-content">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="accordion">
                                 <div class="accordion-item">
                                    <h4>Login & Registration</h4>
                                    <p class="accordion-content">Permit users to step into the world of real estate with secure and seamless enrollment.</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>User Profile Management</h4>
                                    <p class="accordion-content">Make your property journey unique with a personalized profile by developing apps like Zillow.</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>Ai-Chatbot Assistance</h4>
                                    <p class="accordion-content">Enhance user experience by providing AI-powered chat assistance for 24*7 customer support.</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>Filter & sort Property</h4>
                                    <p class="accordion-content">Transform property hunting by giving users the power to fine-tune their search with specific criteria.</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>List View or Map View</h4>
                                    <p class="accordion-content">A dynamic interface that provides both list and map views for a personalized property browsing experience!</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>Push Notification</h4>
                                    <p class="accordion-content">Keep your clients engaged by instant updates on property matches while ensuring timely connections.</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>Automatic Speech Recognition</h4>
                                    <p class="accordion-content">Speech SDK integration in real estate applications brings text-to-speech features and enhances user interaction with the app.</p>
                                 </div>
                              </div>
                           </div>
                          
                            <div class="col-md-6">
                              <div class="image-container">
                                  <img src="<?= $B ?>/assets/images/realstate/real-state.webp"  alt="Feature Image" id="feature-image02" class="img-fluid">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-content" id="tab2-content">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="accordion">
                                 <div class="accordion-item">
                                    <h4>Manage Leads</h4>
                                    <p class="accordion-content">With an intuitive approach to targeted clients, our real estate app provides a platform where you can easily access agents.</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>Communication With Leads</h4>
                                    <p class="accordion-content">This innovative solution allows in-app communication between the agents and their clients while viewing online residential property.</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>Monitors Project</h4>
                                    <p class="accordion-content">Keeps agents informed with the real-time tracking of the projects.</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>Property Management</h4>
                                    <p class="accordion-content">Detailed insights of agents are provided in our property management app.</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>Recent Activity</h4>
                                    <p class="accordion-content">Stay informed with a quick overview of recent activities, empowering agents to remain ahead of the game.</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>Add / Delete Properties From Listing</h4>
                                    <p class="accordion-content">Our app offers agents the flexibility to modify property listings with ease.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image-container">
                                  <img src="<?= $B ?>/assets/images/realstate/agent-app.webp" alt="Feature Image" id="feature-image" class="img-fluid">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-content" id="tab3-content">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="accordion">
                                 <div class="accordion-item">
                                    <h4>Manage Users</h4>
                                    <p class="accordion-content">Real Estate Mobile Applicaiton offers a centralized axis for user administration to control and oversight every profile.</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>Property Management</h4>
                                    <p class="accordion-content">Our real estate application makes informative decisions and permits admin to manage properties.</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>Revenue Management</h4>
                                    <p class="accordion-content">Maintain a smooth financial process by monitoring your revenue by paving the way for strategic success.</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>Offers & Discounts</h4>
                                    <p class="accordion-content">A customizable application offers to attract the audience by facilitating strategic marketing approaches.</p>
                                 </div>
                                 <div class="accordion-item">
                                    <h4>Date / Delete / Edit Subscriptions</h4>
                                    <p class="accordion-content">Mobile solution for real estate offers full control over subscription plans for adaptive subscription management.</p>
                                 </div>
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="image-container">
                                  <img src="<?= $B ?>/assets/images/realstate/admin-panel.webp" alt="Feature Image" id="feature-image-v2" class="img-fluid">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  <!-- Image section -->
               </div>
            </div>
         </section>
         
         <section class="state-case">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="state-case-title">
                             <h2>Our Real Estate App Case Studies</h2>
                         </div>
                     </div>
                 </div>

                 
                 <div class="row">
                     <div class="col-md-12">
                         <div class="case-slider-realstate">
                            <section class="case-studies-slider">
                              <div class="slider-wrapper">
                                <div class="slider">
                                  <!-- Slide 1 -->
                                  <div class="slide active">
                                    <div class="slide-image">
                                       <img src="<?= $B ?>/assets/images/realstate/01-slider.webp" alt="real-box-3">
                                    </div>
                                    <div class="slide-content">
                                       <h3>Instant Realtor</h3>
                                      <p>Discover a home you love and learn about the realtor's experience, all while receiving real-time updates. Developing a trusting relationship between the realtor and the customer</p>
                                      <div class="case-all-download">
                                          <div class="download-pera">
                                              <h3>Downloads</h3>
                                              <p>10K+</p>
                                          </div>
                                          <div class="download-pera">
                                              <h3>Country</h3>
                                              <p>USA</p>
                                          </div>
                                          <div class="download-pera">
                                              <h3>Rating</h3>
                                              <p>4.4/5</p>
                                          </div>
                                      </div>
                                      <div class="case_btn">
                                        <a href="<?= $B ?>/insights/instant-realtor-mobile.php">See More</a>
                                     </div>
                                    </div>
                                  </div>
                                  <div class="slide">
                                    <div class="slide-image">
                                     <img src="<?= $B ?>/assets/images/realstate/02-slider.webp" alt="real-box-3">
                                    </div>
                                           <div class="slide-content">
                                      <h3>Roof Contractor</h3>
                                      <p>Give your family the security and safety that they deserve under the roof constructed with love and care.</p>
                                      <div class="case-all-download">
                                          <div class="download-pera">
                                              <h3>Downloads</h3>
                                              <p>10K+</p>
                                          </div>
                                          <div class="download-pera">
                                              <h3>Country</h3>
                                              <p>Saudi Arabia</p>
                                          </div>
                                          <div class="download-pera">
                                              <h3>Rating</h3>
                                              <p>4.4/5</p>
                                          </div>
                                      </div>
                                      <div class="case_btn">
                                        <a href="<?= $B ?>/insights/roof-contracting-mobile-application.php">See More</a>
                                     </div>
                                    </div>
                                  </div>
                                  <div class="slide">
                                    <div class="slide-image">
                                      <img src="<?= $B ?>/assets/images/realstate/03-slider.webp" alt="real-box-3">
                                     
                                    </div>
                                          <div class="slide-content">
                                      <h3>Rubberworx</h3>
                                      <p>The Rubberworx Mobile App is a groundbreaking solution that blends the magic of augmented truth and synthetic intelligence to redefine the way you discover rubber flooring alternatives.</p>
                                      <div class="case-all-download">
                                          <div class="download-pera">
                                              <h3>Downloads</h3>
                                              <p>9.1K+</p>
                                          </div>
                                          <div class="download-pera">
                                              <h3>Country</h3>
                                              <p>New York</p>
                                          </div>
                                          <div class="download-pera">
                                              <h3>Rating</h3>
                                              <p>4.4/5</p>
                                          </div>
                                      </div>
                                      <div class="case_btn">
                                        <a href="<?= $B ?>/insights/rubberworx.php">See More</a>
                                     </div>
                                    </div>
                                  </div>
                                  <div class="slide">
                                    <div class="slide-image">
                                       <img src="<?= $B ?>/assets/images/realstate/04-slider.webp" alt="real-box-3">
                                    </div>
                                    <div class="slide-content">
                                       <h3>Property & Apartment Swaps</h3>
                                      <p>Property Exchange App developed by us has the most unique Property Exchange concept all over India. Users of this real estate solution only need to enter their real estate, whether residential, commercial, or land, in the exchange app.</p>
                                      <div class="case-all-download">
                                          <div class="download-pera">
                                              <h3>Downloads</h3>
                                              <p>10K+</p>
                                          </div>
                                          <div class="download-pera">
                                              <h3>Country</h3>
                                              <p>USA</p>
                                          </div>
                                          <div class="download-pera">
                                              <h3>Rating</h3>
                                              <p>4.4/5</p>
                                          </div>
                                      </div>
                                      <div class="case_btn">
                                        <a href="<?= $B ?>/insights/property-exchange-real-estate-app.php">See More</a>
                                     </div>
                                    </div>
                                  </div>
                                 
                                </div>
                            
                                <!-- Navigation controls -->
                                <button class="prev-btn"></button>
                                <button class="next-btn"></button>
                                
                                <!-- Icons under the slider -->
<div class="slider-icons-wrapper">
  <div class="slider-icons" style="display: flex; scroll-behavior: smooth;">
    <span class="icon active" data-slide="0">
      <img src="<?= $B ?>/assets/images/realstate/Instant-Realtor-logo.webp" alt="real-box-3">
    </span>
    <span class="icon" data-slide="1">
      <img src="<?= $B ?>/assets/images/realstate/Horizon%20Roofing-logo.webp" alt="real-box-3">
    </span>
    <span class="icon" data-slide="2">
      <img src="<?= $B ?>/assets/images/realstate/Rubberwork-logo.webp" alt="real-box-3">
    </span>
    <span class="icon" data-slide="3">
      <img src="<?= $B ?>/assets/images/realstate/HouseSigma.webp" alt="real-box-3">
    </span>
  </div>
</div>

                                  <!--<span class="icon" data-slide="1">-->
                                  <!--    <img src="<?= $B ?>/assets/images/realstate/Horizon Roofing-logo.webp" alt="real-box-3">-->
                                  <!--</span>-->
                                  <!--<span class="icon" data-slide="2">-->
                                  <!--    <img src="<?= $B ?>/assets/images/realstate/Rubberwork-logo.webp" alt="real-box-3">-->
                                      
                                  <!--</span>-->
                                  
                                </div>
                              </div>
                            </section>

                         </div>
                     </div>
                 </div>
             </div>
         </section>
         
         <section class="cutting-edge-solutions">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="cutting-edge-solutions-title">
                             <h2>Transforming Real Estate with Our Innovative Solutions</h2>
                             <p>By promoting technological innovation, our exceptional team of developers offer top-trending innovative solutions for the real estate industry.</p>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-4">
                         <div class="cutting-edge-box">
                            <div class="edge-box-icon">
                                 <img src="<?= $B ?>/assets/images/realstate/Icon_01.webp" alt="real-box-3">
                            </div>
                             <a href="#">3D Visualiztion <i class="fa-solid fa-arrow-right"></i></a>
                             <p>Tap into our expertise to craft captivating virtual property tours, giving users the ability to explore every angle of your listings.</p>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="cutting-edge-box">
                            <div class="edge-box-icon">
                                <img src="<?= $B ?>/assets/images/realstate/Icon_02.webp" alt="real-box-3">
                            </div>
                             <a href="#">Internet of Things (IOT) <i class="fa-solid fa-arrow-right"></i></a>
                             <p>We develop IoT-driven software solutions that empower property buyers to take full control of their smart home features.</p>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="cutting-edge-box">
                            <div class="edge-box-icon">
                                 <img src="<?= $B ?>/assets/images/realstate/Icon_03.webp" alt="real-box-3">
                            </div>
                             <a href="#">AR/VR <i class="fa-solid fa-arrow-right"></i></a>
                             <p>Harness our AR/VR services to create stunning virtual property tours, providing users with an immersive viewing experience that feels like a live walkthrough!</p>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="cutting-edge-box">
                            <div class="edge-box-icon">
                                 <img src="<?= $B ?>/assets/images/realstate/Icon_04.webp" alt="real-box-3">
                            </div>
                             <a href="#">Big Data Analytics <i class="fa-solid fa-arrow-right"></i></a>
                             <p>Tap into your rich data to provide a customized user experience while gaining insights into market trends and property values</p>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="cutting-edge-box">
                            <div class="edge-box-icon">
                                 <img src="<?= $B ?>/assets/images/realstate/Icon_05.webp" alt="real-box-3">
                            </div>
                             <a href="#">AI/ML <i class="fa-solid fa-arrow-right"></i></a>
                             <p>Developing AI-powered chatbots streamlines customer inquiries, offers personalized property suggestions, and enhances the experience with virtual property tours</p>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="cutting-edge-box">
                            <div class="edge-box-icon">
                                 <img src="<?= $B ?>/assets/images/realstate/Icon_06.webp" alt="real-box-3">
                            </div>
                             <a href="#">Blockchain <i class="fa-solid fa-arrow-right"></i></a>
                             <p>Smart contracts automate property verifications, transactions, and more, revolutionizing blockchain-powered applications like ArtisticWebServices real estate app development company!</p>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         
         <section class="popular-tech-stacks">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="premium-features-title">
                            <h2>Top Tech Stacks for <span style="color: #d51524">Real Estate Mobile App</span> Development Company</h2>
                            <p>Every successful application is built on a powerful tech stack. Our real estate <a href="<?= $B ?>/services/mobile-app-development.php">mobile app development company's</a> team opt for the latest technologies to ensure a smooth user experience and enhance business growth.</p>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-4">
                         <div class="platform-box">
                            <div class="platform-heading">
                                <h4>Blockchain Platforms</h4>
                            </div>
                            <div class="platform-imgs">
                                 <ul>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/bp-tech-img-1.webp" alt="real-box-3">
                                         <p>Ethereum</p>
                                     </li>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/bp-tech-img-2.webp" alt="real-box-3">
                                         <p>Multichain</p>
                                     </li>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/bp-tech-img-3.webp" alt="real-box-3">
                                         <p>Wax</p>
                                     </li>
                                     <li>
                                          <img src="<?= $B ?>/assets/images/realstate/bp-tech-img-4.webp" alt="real-box-3">
                                         <p>Cortana</p>
                                     </li>
                                 </ul>
                            </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="platform-box">
                            <div class="platform-heading">
                                <h4>Front-end frameworks</h4>
                            </div>
                            <div class="platform-imgs">
                                 <ul>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/ff-tech-img-1.webp" alt="real-box-3">
                                         <p>React</p>
                                     </li>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/ff-tech-img-2.webp" alt="real-box-3">
                                         <p>Angular</p>
                                     </li>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/ff-tech-img-3.webp" alt="real-box-3">
                                         <p>Vue.js</p>
                                     </li>
                                     <li>
                                          <img src="<?= $B ?>/assets/images/realstate/ff-tech-img-4.webp" alt="real-box-3">
                                         <p>VanillaJs</p>
                                     </li>
                                 </ul>
                            </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="platform-box">
                            <div class="platform-heading">
                                <h4>Programming Languages</h4>
                            </div>
                            <div class="platform-imgs">
                                 <ul>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/pl-tech-img-1.webp" alt="real-box-3">
                                         <p>Golang</p>
                                     </li>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/pl-tech-img-2.webp" alt="real-box-3">
                                         <p>C++</p>
                                     </li>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/pl-tech-img-3.webp" alt="real-box-3">
                                         <p>Python</p>
                                     </li>
                                     <li>
                                          <img src="<?= $B ?>/assets/images/realstate/pl-tech-img-4.webp" alt="real-box-3">
                                         <p>Php</p>
                                     </li>
                                 </ul>
                            </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="platform-box">
                            <div class="platform-heading">
                                <h4>NFT Standards</h4>
                            </div>
                            <div class="platform-imgs">
                                 <ul>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/ns-tech-img-1.webp" alt="real-box-3">
                                         <p>Ethereum</p>
                                     </li>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/ns-tech-img-2.webp" alt="real-box-3">
                                         <p>dGoods</p>
                                     </li>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/ns-tech-img-3.webp" alt="real-box-3">
                                         <p>TRC-721</p>
                                     </li>
                                     <li>
                                          <img src="<?= $B ?>/assets/images/realstate/ns-tech-img-4.webp" alt="real-box-3">
                                         <p>BEP-20</p>
                                     </li>
                                 </ul>
                            </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="platform-box">
                            <div class="platform-heading">
                                <h4>Cloud Platforms</h4>
                            </div>
                            <div class="platform-imgs">
                                 <ul>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/cp-tech-img-1.webp" alt="real-box-3">
                                         <p>AWS</p>
                                     </li>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/cp-tech-img-2.webp" alt="real-box-3">
                                         <p>IBM Bluemix</p>
                                     </li>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/cp-tech-img-3.webp" alt="real-box-3">
                                         <p>ETH BAAS</p>
                                     </li>
                                     <li>
                                          <img src="<?= $B ?>/assets/images/realstate/cp-tech-img-4.webp" alt="real-box-3">
                                         <p>Kaleido Insights</p>
                                     </li>
                                 </ul>
                            </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="platform-box">
                            <div class="platform-heading">
                                <h4>Storage Platforms</h4>
                            </div>
                            <div class="platform-imgs">
                                 <ul>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/sp-tech-img-1.webp" alt="real-box-3">
                                         <p>IPFS</p>
                                     </li>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/sp-tech-img-2.webp" alt="real-box-3">
                                         <p>Filecoin</p>
                                     </li>
                                     <li>
                                         <img src="<?= $B ?>/assets/images/realstate/sp-tech-img-3.webp" alt="real-box-3">
                                         <p>MongoDB</p>
                                     </li>
                                     <li>
                                          <img src="<?= $B ?>/assets/images/realstate/sp-tech-img-4.webp" alt="real-box-3">
                                         <p>CouchDB</p>
                                     </li>
                                 </ul>
                            </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         
         <section class="why-choose-us-realstate">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-md-3">
                         <div class="chose-left">
                             <h2>Why Choose Us?</h2>
                                 <p>Boost your real estate profitability by creating a powerful listing of property within application by utilizing our expert development services.</p>
                         </div>
                     </div>
                     
                     <div class="col-md-9">
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="main-chose">
                                     <div class="chose-leftt">
                                         <div class="leftt-ico">
                                             <span><img src="<?= $B ?>/assets/images/realstate/yello-01.webp" alt="real-box-3"></span>
                                         </div>
                                         <div class="leftt-text">
                                             <h4>Scalable & Robust Solution</h4>
                                         </div>
                                     </div>
                                     <div class="chose-rightt">
                                        <p>Let's develop a highly scalable robust real estate app solution to support your growing customer base effortlessly.</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="main-chose">
                                     <div class="chose-leftt">
                                         <div class="leftt-ico">
                                             <span><img src="<?= $B ?>/assets/images/realstate/yello-02.webp" alt="real-box-3"></span>
                                         </div>
                                         <div class="leftt-text">
                                             <h4>Source Code IP rights</h4>
                                         </div>
                                     </div>
                                     <div class="chose-rightt">
                                        <p>Now own the complete source code  IP rights and enjoy ease to upgrade your real estate app with changing market needs.</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="main-chose">
                                     <div class="chose-leftt">
                                         <div class="leftt-ico">
                                             <span><img src="<?= $B ?>/assets/images/realstate/yellow-03.webp" alt="real-box-3"></span>
                                         </div>
                                         <div class="leftt-text">
                                            <h4>24/7 Dedicated Support</h4>
                                         </div>
                                     </div>
                                     <div class="chose-rightt">
                                        <p>Have a dedicated team to support you 24/7 with an end-to-end solution that helps you grow your real estate platform.</p>
                                     </div>
                                 </div>
                             </div>
                             
                             <div class="col-md-6">
                                 <div class="main-chose">
                                     <div class="chose-leftt">
                                         <div class="leftt-ico">
                                              <span><img src="<?= $B ?>/assets/images/realstate/yello-04.webp" alt="real-box-3"></span>
                                         </div>
                                         <div class="leftt-text">
                                             <h4>Get Started In No Time</h4>
                                         </div>
                                     </div>
                                     <div class="chose-rightt">
                                       <p>Leverage our real estate mobile app development experience to get your business market-ready in a few weeks.</p>
                                     </div>
                                 </div>
                             </div>
                            
                         </div>
                     </div>
                 </div>
                 <hr>
                 <div class="row">
                     <div class="col-md-12">
                         <div class="chose-bottom">
                             <h2>Transform Your Real Estate App Development Vision with Innovative Technology</h2>
                                <a href="<?= $B ?>/contact.php" class="thm-btn abut-page__btn btn-red-bg mt-4">Get Your Free Quote</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         
         <section class="shadule-metting">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-md-7">
                         <div class="planing-content">
                             <h3>Want to Bring Your Real Estate Project Operations into the Digital Age?</h3>
                             <p>As a top real estate app development company, our team can craft a real estate solution that sets you apart in today's competitive landscape.</p>
                         </div>
                     </div>
                     <div class="col-md-5">
                         <div class="planing-img">
                             <img src="<?= $B ?>/assets/images/realstate/man-with-phone.webp" alt="real-box-3">
                            <div class="planing-boxs">
                             <ul>
                                 <li>100% NDA-protected contract</li>
                                 <li>100% resource substitution*</li>
                                 <li>Flexible hiring models</li>
                                 <li>100% refund policy*</li>
                             </ul>
                         </div>
                         </div>
                      
                     </div>
                 </div>
             </div>
         </section>
         <!--<section class="process-sec">-->
         <!--    <div class="container">-->
         <!--        <div class="row align-items-center">-->
         <!--            <div class="col-md-12">-->
         <!--                <h2>Process we Followed</h2>-->
         <!--            </div>-->
         <!--            <div class="col-md-3">-->
         <!--               <div class="process_box">-->
         <!--                   <div class="process-head">-->
         <!--                       <span>icon</span>-->
         <!--                       <h5>01</h5>-->
         <!--                   </div>-->
         <!--                   <h2>Requirement Gethring</h2>-->
         <!--                   <p>Every successful application is built on a powerful tech stack.</p>-->
         <!--               </div>-->
         <!--            </div>-->
         <!--        </div>-->
         <!--    </div>-->
         <!--</section>-->
         
        <div class="faqs-section py-5">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="latest-technology-title">
                     <h2 style="color: #ec1c22">Frequently Asked Questions</h2>
                  </div>
               </div>
            </div>
            <div class="col-md-12 mt-4">
               <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           <div class="row w-100">
                              <div class="col-1">01</div>
                              <div class="col-11">What features should I include in my real estate mobile app?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                Key features may include property listings, advanced search options, user profiles, booking appointments, in-app messaging, payment processing, and map integration.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                           <div class="row w-100">
                              <div class="col-1">02</div>
                              <div class="col-11">How long does it take to develop a real estate mobile app?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 Development time can vary based on complexity and features, but it typically ranges from a few months to six months.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                           <div class="row w-100">
                              <div class="col-1">03</div>
                              <div class="col-11">What platforms should I target for my real estate app?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 It's recommended to develop for both iOS and Android to reach a wider audience, but your target market may influence this decision.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           <div class="row w-100">
                              <div class="col-1">04</div>
                              <div class="col-11">How much does it cost to develop a real estate mobile app?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 Costs can vary widely based on functionality, design, and the development team's expertise, but a typical range is between $20,000 and $100,000.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                           <div class="row w-100">
                              <div class="col-1">05</div>
                              <div class="col-11">Can I integrate third-party services into my real estate app?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                Yes, many third-party services can be integrated, including payment gateways, CRM systems, mapping services, and social media platforms.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                           <div class="row w-100">
                              <div class="col-1">06</div>
                              <div class="col-11">How do I ensure my app is user-friendly?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                 Focus on intuitive design, clear navigation, and thorough user testing to ensure a smooth and enjoyable user experience.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                           <div class="row w-100">
                              <div class="col-1">07</div>
                              <div class="col-11">What kind of maintenance does a real estate app require?
                              </div>
                           </div>
                        </button>
                     </h2>
                     <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="row">
                              <div class="col-1"></div>
                              <div class="col-10">
                                Regular updates, bug fixes, performance optimization, and adapting to user feedback are essential for maintaining the app's functionality and relevance.
                              </div>
                              <div class="col-1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <section class="welcome-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome-three__left">
                           <div class="get__content">
                               <h4>Collaborate with   </h4>
                               <h2>
                                   Our Team
                               </h2>
                               <p>Want to find out how real estate mobile app development New York can be helpful for your business? Looking forward to hearing from you.</p>
                               <strong>
                                   Foster Innovation with Integration
                               </strong>
                               <p>Team Up With Our Expert Real-Estate Mobile App Developers to Launch, and Grow Your Business Globally.</p>
                               <h3>Contact Info:</h3>
                               <ul>
                                   <li><a href="mailto:info@artisticwebservices.com"> <img src="<?= $B ?>/assets/images/fitness/email.svg" > info@artisticwebservices.com</a></li>
                                   <li> <a href="tel:+12137147176" class="nav-number nav-number-1"><img src="<?= $B ?>/assets/images/fitness/USA-Flag.svg" > (213) 714-7176</a></li>
                               </ul>
                               
                              
                           </div>
                        </div>
                    </div>
                     <div class="col-xl-6">
                        <div class="welcome-three__right welcome-three__right-zero">
                            <?php include __DIR__ . '/../includes/form-quote.php'; ?><script>
         var $st = $('.pagination');
         var $slickEl = $('.center');
         
         // Update pagination on slider change
         $slickEl.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
         var i = (currentSlide ? currentSlide : 0) + 1;
         $st.text(i + ' of ' + slick.slideCount);
         });
         
         // Initialize slick slider
         $slickEl.slick({
         centerMode: true,
         centerPadding: '100px',
         slidesToShow: 1,
         focusOnSelect: true,
         dots: false,
         infinite: true,
         responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
         ]
         });
         
         // Next and Previous buttons functionality
         $('.next').click(function() {
         $slickEl.slick('slickNext');
         });
         
         $('.prev').click(function() {
         $slickEl.slick('slickPrev');
         });
         
      </script>

<script>
  $(document).ready(function () {
    $('#name-validF').delay(5000).fadeOut('slow');
    $('#name-valid2L').delay(5000).fadeOut('slow');
    $('#email-validE').delay(5000).fadeOut('slow');
    $('#phone-validP').delay(5000).fadeOut('slow');

    $('#submit_btn').on('click', function (e) {

      e.preventDefault(false);

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
         
         <script>
            // Get the tabs and content elements
                const tabs = document.querySelectorAll('.tab');
                const tabContents = document.querySelectorAll('.premium-features .tab-content');
                const accordionItems = document.querySelectorAll('.premium-features .accordion-item');
                
                // Set up hover event listeners for each tab
                tabs.forEach(tab => {
                    tab.addEventListener('mouseover', function() {
                        // Remove the 'active' class from all tabs
                        tabs.forEach(t => t.classList.remove('active'));
                
                        // Hide all tab content
                        tabContents.forEach(content => content.classList.remove('active'));
                
                        // Add the 'active' class to the hovered tab
                        tab.classList.add('active');
                
                        // Show the relevant tab content
                        const targetTab = tab.getAttribute('data-tab');
                        document.getElementById(`${targetTab}-content`).classList.add('active');
                    });
                });
                
                // Add event listener for accordion item hover to toggle content
                accordionItems.forEach(item => {
                    item.addEventListener('mouseover', function() {
                        // Remove active class and hide content from all accordion items
                        accordionItems.forEach(acc => acc.classList.remove('active'));
                
                        // Add the 'active' class and show content for the hovered accordion item
                        item.classList.add('active');
                    });
                });

            
         </script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>

