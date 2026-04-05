<?php
require_once 'includes/config.php';
$page_title = 'About ArtisticWebServices | Top Software Development Company New York USA';
$page_description = 'Learn about ArtisticWebServices — a leading NYC-based custom software & mobile app development firm with 10+ years experience delivering award-winning digital solutions.';
$page_keywords = 'about ArtisticWebServices, software company New York, top rated app development company USA, award winning software company';
$page_canonical   = SITE_URL . '/about-us';
$page_og_image    = SITE_URL . '/assets/images/resources/artisticwebservice w.png';
require_once 'includes/head.php';
?>
   <style>
      .why-choose-one__right.get-unprec01 {
          position: relative;
          display: block;
          margin-right: -374px !important;
      }
      .why-choose-one {
          padding: 60px 0 60px;
      }
      .why-choose-one__left:before {
          display: none;
      }
   </style>
<body>
   <div class="page-wrapper">
      <!--Header-Main Start-->
      <?php require_once 'includes/header.php'; ?>
      <!--Header-Main End-->

        <section class="about-page"
            style="background-image: url(<?= $B ?>/assets/images/page-header-about.webp); background-size: cover; background-position: center top; height: 550px;">
            <div class="container"></div>
        </section>
        <!--Welcome Three Start-->
        <section class="welcome-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome-three__left">
                            <div class="section-title text-left">
                                <h1 class="section-title__title" style="color:#000">About ArtisticWebServices</h1>
                            </div>
                            <p class="welcome-three__text">ArtisticWebServices, founded in 2014 and headquartered in New York, has emerged as a major app development business and provider of innovative software development services. With a solid basis in the evolving landscape, we provide high-performance solutions in software development for mobile and web, AI development, IoT development and Blockchain application development.</p>
                            <br>
                            <p>ArtisticWebServices is the ultimate app development company, we take pride in our developers team, engineers and strategists who are experts in combining their technical expertise with creativity to give a new dimension to forward-thinking solutions. Our services encourage businesses of all sizes to stay ahead of the curve by taking advantage of the latest in mobile, web, AI, IoT and blockchain technologies.</p>
                            <p>We also provide collaborative services, working with our client's teams/employees to jointly analyze, design, develop, and implement integrated solutions and services across multiple platforms.</p>
                            <div class="welcome-three__features">
                                <ul class="list-unstyled welcome-three__features-box">
                                    <li>
                                        <div class="icon"> <span class="icon-recruit"></span> </div>
                                        <div class="text">
                                            <p>Start development<br> with experts</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"> <span class="icon-consulting"></span> </div>
                                        <div class="text">
                                            <p>Enhance your web<br> look with us</p>
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
                                <?php include __DIR__ . '/includes/form-quote.php'; ?>
                            </div>
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
                            <div class="why-choose-one__img"> <img src="<?= $B ?>/assets/images/about-us-img2.webp"
                                    alt="Award-Winning Mobile App Development Company New York"> </div>
                            <div class="why-choose-one-box-1"></div>
                            <div class="why-choose-one-box-2"></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-one__right">
                            <div class="section-title text-left">
                                <h2 class="section-title__title">Where Commitment Meets Innovation &ndash; ArtisticWebServices</h2>
                            </div>
                            <p class="why-choose-one__right-text">At ArtisticWebServices, we don't just build solutions but our main motive is to build trust. Our commitment to excellence is high in global best practices which recognized standards while ensuring every deliverable meets the highest standards of quality and performance.</p>
                            <br>
                            <p>We believe in ethical innovation, which means our mission goes beyond technology. As being a responsible partner, we work fair in business, transparent in collaboration and deeply committed to Corporate Social Responsibility (CSR). Whether it's about taking care of talent and supporting communities, at the core of all we do is integrity.</p>
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
                                <h2 class="section-title__title">What Sets ArtisticWebServices Apart</h2>
                            </div>
                            <p class="why-choose-one__right-text">ArtisticWebServices is more than just a technology company; we are a team dedicated to innovation. We specialize in providing custom software development and consulting services that hold fast to globally recognized standards and best practices. Our strategic approach ensures that all solutions are functional.
                            </p>
                            <br>
                            <p>What truly sets us apart is our creative problem-solving mindset. We don't just follow on-going market trends, we set the trend. By combining progressive technology with deep business insight, we create custom made solutions that exceeds the bar of customers's or client's expectations in quality, security and performance.</p>
                            <p>At ArtisticWebServices, we don't just build apps, we believe in building lasting impression.</p>
                        </div>
                    </div>

                    <div class="col-xl-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="why-choose-one__right get-unprec01">
                            <div class="why-choose-one__img"> <img src="<?= $B ?>/assets/images/about-us-img3.webp"
                                    alt="Award-Winning Mobile App Development Company New York"> </div>
                            <div class="why-choose-one-box-1 right-box"></div>
                            <div class="why-choose-one-box-2 right-box"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <!--Site Footer Start-->
      <?php require_once 'includes/social-share.php'; ?>
      <?php require_once 'includes/footer.php'; ?>
      <!--Site Footer End-->
   </div>
   <!-- /.page-wrapper -->
</body>
</html>
