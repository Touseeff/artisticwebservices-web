<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Our Story | ArtisticWebServices — Founded in New York, Built for Innovation';
$page_description = 'Discover the story behind ArtisticWebServices — how we grew from a startup in New York to a global software development company trusted by enterprises worldwide.';
$page_keywords = 'ArtisticWebServices story, software company history New York, tech company founding story USA';
$page_canonical = 'https://artisticwebservices.com/our-story';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
require_once __DIR__ . '/includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<style>
        .our__stories-bg {
            background-image: url(<?= $B ?>/assets/images/address-banner.webp)!important;
        }
    </style>
<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/includes/header.php'; ?>
<!--Header-Main End-->

<section class="about-page our__stories-bg white__main allience__partners">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class=" mt-3">
                            <div>
                                <!--  <img style=" width: 100px; height:100px;" class="img-fluid mb-2" src="<?= $B ?>/assets/images/project/vpn-port/vpn-anrid-icon.svg" alt="layout styles"> -->
                                <h1 class="section-title__title mb-3">Our Story</h1>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>
        <!--Services Two Start-->
        <section class="alience-content">
            <div class="container">
                <div class="section-title text-center mb-0">
                    <h2 class="section-title__title col-md-10 m-auto">Turning Ideas into Apps that Matter</h2>
                </div>
            </div>
        </section>
        <!--Services Two End-->
        
        <!--alience content start-->
        <section class="our-stories">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="section-title mt-2">
                        <p>We specialize in developing technology-driven solutions for Startups, Entrepreneurs, Growing Businesses, and Government Agencies. Our core focus areas are Enterprise Mobility (Mobile & Web Apps), IoT, Artificial Intelligence, and Blockchain platforms, and have a very transparent and easygoing process that enables our customers to accomplish their objectives and transform their ideas into reality in the form of a desired solution within a justified cost and timeframe.</p>
                        <p>Over the last decade, ArtisticWebServices has emerged as a trusted technology partner, and leveraging a deep technical acumen & highly refined development processes we have successfully consulted and developed over 460+ Applications, for our customers in the United States, Canada, Europe, and the Middle East. </p>
                        <p>Let's write the next chapter of success and technological innovation together!</p>
                </div>
                    </div>
                    <div class="col-lg-3">
                         <img src="<?= $B ?>/assets/images/our-profile-02.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </section>
        <!--alience content end-->
        <!--alience content start-->
        <section class="our-stories">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mt-2">
                        <h4>Our mission</h4>
                        <p>Our mission is to deliver IT solutions that Maximize Value, Productivity, and Return on Investment (POI) for our clients, and to be recognized and dominate as a leader in Custom Build Digital Solutions.</p>
                        <h4>Value Proposition</h4>
                        <p>At ArtisticWebServices, we help our users or customers to achieve time to market by facilitating the implementation of exceptionally quick and affordable solutions. Our knowledge, efficient processes, and large code repository position our clients for success. Our comprehensive services minimize technical overhead, increase efficiency, and maximize return on investment to guarantee optimal growth and competitive advantage.</p>
                        <h4>Our Featured Clients</h4>
                        <p>We place a high value on collaborating closely with our clients to develop compelling experiences.  Our mission is to help our clients achieve extraordinary results, boost their visibility and conquer business challenges. All of this is possible in the creative city of New York.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--alience content end-->

        <!--Why Chose section start-->
        <div class="location-chooseus my-5">
            <div class="container">
                <!--<img src="<?= $B ?>/assets/images/location-chooseus.webp" alt="man" class="img-fluid d-block w-50 mx-auto">-->
                <div class="choose-container text-center d-flex flex-column align-items-center">
                    <h2>Why Choose ArtisticWebServices?</h2>
                    <p class="my-4">Founded in 2014 and headquartered in New York, ArtisticWebServices has established itself as a leading app development company, and provider of advanced software application development services. With a strong foundation in the ever-evolving tech landscape, we specialize in delivering high-performance solutions in Mobile and Web App Development, AI Development, IoT Development, and Blockchain Application Development.</p>
                    <p>Our expertise spans diverse industries, enabling us to create custom applications that cater to specific business needs, enhance user experiences, and drive innovation. Over the years, we have worked with a wide range of clients, from startups to established enterprises, earning their trust and satisfaction by delivering results that exceed expectations.</p>
                    <p>ArtisticWebServices, the ultimate app development company, takes pride in our team of skilled developers, engineers, and strategists who combine their technical expertise with creativity to bring forward-thinking solutions to life. Our services empower businesses to stay ahead of the curve by leveraging the latest in mobile, web, AI, IoT, and blockchain technologies.</p>
                    <p>With a large and growing base of satisfied clients across the United States, we remain committed to our core values of quality, innovation, and customer success. As a trusted app development company in digital transformation, we are dedicated to helping businesses unlock their full potential and achieve sustained growth in a fast-paced digital world.</p>
                    <a href="<?= $B ?>/contact.php" style="background: #DD0429" class="btn btn-light rounded-2 text-white">Discover
                        More</a>
                </div>
            </div>
        </div>
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
</section>        <section class="testimonial-two">
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
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>
