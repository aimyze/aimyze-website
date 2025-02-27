<!DOCTYPE html>
<html lang="en">
<?php include("cookie.php");
include("sweetalert_links.php"); ?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Aimyze</title>
<?php include("head_section.php"); ?>

<style>
    .faq-align{
        top: 23px;
    }
    .text-center_1
    {
        min-height:2px;
        padding:120px 0px 20px 0px;
        height:10px;
        background: #111827;
        color: white;
    }
    @media (max-width: 768px) {
        .text-center_1
    {
        min-height:2px;
        padding:120px 0px 40px 0px;
        height:10px;
        background: #111827;
        color: white;
    }
    }
    
</style>
<script>
    // Converting string to required date format 
    let deadline = new Date("Feb 28, 2025 23:59:59")
        .getTime();

    // To call defined fuction every second
    let x = setInterval(function () {

        // Getting current time in required format
        let now = new Date().getTime();

        // Calculating the difference
        let t = deadline - now;

        // Getting value of days, hours, minutes, seconds
        let days = Math.floor(t / (1000 * 60 * 60 * 24));
        let hours = Math.floor(
            (t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor(
            (t % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor(
            (t % (1000 * 60)) / 1000);

        // Output the remaining time
        document.getElementById("timer").innerHTML ="<u>Time to Launch:</u> "+
            days + "d " + hours + "h " +
            minutes + "m " + seconds + "s "+"&#128640;";

        // Output for over time
        if (t < 0) {
            clearInterval(x);
            document.getElementById("timer")
                .innerHTML = "";
        }
    }, 1000);
</script>
</head>

<body class="index-page">

<?php include("header.php"); ?>

  <main class="main">
      <!-- Hero Section -->
    <section id="hero" class="hero section text-center_1" style="">

      <div class="container text-center">
        <center>
            <font id="timer"></font> &nbsp;&nbsp; <a href="waitlist.php" style="color:white;"><button class="btn btn-link" style="color:white">Join the Waitlist</button></a>
        </center>
      </div>

    </section><!-- /Hero Section -->

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2 data-aos="fade-up">Redefine relationships across industries and departments with AI-powered intelligent CRM.</h2>
            <p data-aos="fade-up" data-aos-delay="100">The advanced CRM powered by AI & GEN AI</p>
            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
              <a href="waitlist.php" class="btn-get-started">Get&nbsp;Demo<!--i class="bi bi-arrow-right"></i--></a>
              <!--a href="waitlist.php" class="btn btn-success d-flex align-items-center justify-content-center  ms-0 ms-md-4 mt-4 mt-md-0">Get&nbsp;started&nbsp;for&nbsp;free <!--i class="bi bi-arrow-right"></i--></a-->
              <a href="waitlist.php" class="btn-get-started ms-0 ms-md-4 mt-4 mt-md-0" style="background-color:#198754;border-color:#198754">Get&nbsp;started&nbsp;for&nbsp;free <!--i class="bi bi-arrow-right"></i--></a>
              <!--a class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i class="bi bi-play-circle"></i><span>Video Comming Soon</span></a-->
              <a class=" btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i class="bi bi-play-circle"></i><span>Coming&nbsp;Soon</span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->
    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p>Our Advanced Features<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/features.png" class="img-fluid" alt="">
          </div>

          <div class="col-xl-6 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Easy to setup</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Easy to use Dashboard</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Customize without code</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Regular updates</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Super fast performance</h3>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Outstanding support</h3>
                </div>
              </div><!-- End Feature Item -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Values Section -->
    <section id="values" class="values section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Why Choose Aimyze?<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Boost Productivity</h3>
              <p>Automate repetitive tasks, eliminate inefficiencies, and empower your teams to focus on what matters most—building stronger customer connections.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Drive Engagement</h3>
              <p>Enhance relationships with advanced AI-driven insights, personalized experiences, and seamless collaboration across every department.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Scale Without Limits</h3>
              <p>Whether you're a growing startup or an enterprise leader, Aimyze evolves with your business, offering robust, flexible solutions tailored to your needs.</p>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>

    </section><!-- /Values Section -->

    <!-- Stats Section -->
    <!--
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Stats Section -->
    <!--Second Section-->
    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3></h3>
              <h2>What Makes Aimyze Unique?</h2>
              <p>
                Aimyze is an AI-powered CRM platform designed to help businesses improve customer engagement and
                streamline operations. By leveraging cutting-edge automation and actionable insights, we enable
                organizations to optimize workflows, personalize interactions, and make data-driven decisions with ease.
              </p>
              <div class="text-center text-lg-start">
                <a href="waitlist.php" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center" style="background-color:#198754;border-color:#198754">
                  <span>Get started for free</span>
                  <!--i class="bi bi-arrow-right"></i-->
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Alt Features Section -->
    <section id="alt-features" class="alt-features section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-7 d-flex order-2 order-xl-1" data-aos="fade-up" data-aos-delay="200">

            <div class="row align-self-center gy-5">

              <div class="col-md-6 icon-box">
                <i class="bi bi-award"></i>
                <div>
                  <h4>Intelligent Automation</h4>
                  <p>Simplify repetitive tasks and focus on meaningful customer interactions.</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="bi bi-card-checklist"></i>
                <div>
                  <h4>Workflow Optimization</h4>
                  <p>Ensure smooth operations with efficient task management and tracking.</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="bi bi-dribbble"></i>
                <div>
                  <h4>Personalized Customer Interactions</h4>
                  <p>Leverage AI insights to create tailored experiences for every customer.</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="bi bi-filter-circle"></i>
                <div>
                  <h4>Email Marketing</h4>
                  <p>Create, track, and optimize campaigns directly from the platform.</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="bi bi-lightning-charge"></i>
                <div>
                  <h4>Campaign Management</h4>
                  <p>Plan and execute marketing strategies with data-driven precision.</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="bi bi-patch-check"></i>
                <div>
                  <h4>Leverage AI & GEN AI</h4>
                  <p>Transform customer interactions with intelligent insights, personalized experiences, and automation for unparalleled engagement.</p>
                </div>
              </div><!-- End Feature Item -->

            </div>

          </div>

          <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/alt-features.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>

    </section><!-- /Alt Features Section -->

<!--
    <section id="clients" class="clients section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Clients</h2>
        <p>We work with best clients<br></p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Clients Section -->


    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>F.A.Q</h2>
        <p>Frequently Asked Questions</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>What is Aimyze, and how does it stand out from other CRM solutions?</h3>
                <div class="faq-content">
                  <p>Aimyze is a next-generation CRM solution designed to simplify customer relationship management through advanced AI, generative AI functionalities, low-code/no-code customization, workflow automation, and intelligent chatbot capabilities. Unlike traditional CRMs, Aimyze empowers businesses with predictive insights, seamless automation, and unmatched flexibility tailored to your specific needs.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right " style="top:23px;"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Who can benefit from Aimyze CRM?</h3>
                <div class="faq-content">
                  <p>Aimyze is designed for businesses of all sizes across industries looking to improve customer engagement, streamline sales and support processes, and boost productivity. Whether you’re a startup, SMB, or enterprise, Aimyze adapts to your workflows, helping you achieve measurable outcomes faster.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right " style="top:23px;"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Does Aimyze require technical expertise for setup and customization?</h3>
                <div class="faq-content">
                  <p>Not at all! Aimyze features a low-code/no-code interface that allows even non-technical users to design workflows, customize dashboards, and automate processes effortlessly. For advanced needs, our team provides support to ensure seamless integration and customization.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right " style="top:23px;"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">

              <div class="faq-item">
                <h3>Is Aimyze secure and scalable for growing businesses?</h3>
                <div class="faq-content">
                  <p>Absolutely! Aimyze is built on a robust, secure architecture that adheres to the latest data protection standards. The platform is fully scalable, allowing businesses to grow and adapt without disruption, ensuring your data and processes remain safe and efficient at all times.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right " style="top:23px;"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>What are the key features of Aimyze?</h3>
                <div class="faq-content">
                  <p>
                      <ul>
                          <li>Generative AI: Automates responses, drafts emails, and predicts customer behavior.</li>
                          <li>Low-Code/No-Code Customization: Enables easy tailoring of the platform to your business.</li>
                          <li>Workflow Automation: Simplifies repetitive tasks and enhances productivity.</li>
                          <li>Chatbot Capabilities: Provides 24/7 intelligent support to your customers.</li>
                          <li>Actionable Analytics: Offers real-time insights for smarter decision-making.</li>
                      </ul>
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right " style="top:23px;"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Testimonials Section -->
    <!--
    <section id="testimonials" class="testimonials section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>What they are saying about us<br></p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                  quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                  quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                  tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                  minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                  labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Clients Section -->


  </main>

<?php include("footer.php"); ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>