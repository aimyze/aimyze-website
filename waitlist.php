<!DOCTYPE html>
<html lang="en">
<?php include("cookie.php"); include("sweetalert_links.php"); ?>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Aimyze</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
<?php include("head_section.php"); ?>


    <!-- =======================================================
  * Template Name: Aimyze
  * Template URL: https://bootstrapmade.com/Aimyze-bootstrap-startup-template/
  * Updated: Nov 01 2024 with Bootstrap v5.3.3
  * Author: Aimyze.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
</head>

<body class="index-page">

<?php include("header.php"); ?>

    <main class="main">



    <!-- Contact Section -->
    <section id="contact" class="contact section">
<br><br>
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">

          <p>Launching Soon!</p>
          <!--p style="font-size: 14px;">Current Queue: 58</p-->
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row gy-4">
  
            <div class="col-lg-12">
              <form action="sendemail.php" method="post">
                <div class="row gy-4">
  
                  <div class="col-md-4">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>
                  
                  <div class="col-md-4">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required="">
                  </div>
  
                  <div class="col-md-4">
                    <input type="phone" class="form-control" name="phone" placeholder="Your Phone" required="">
                  </div>
  

  
                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary" style="background-color: #20618f">Join Waitlist</button>
                  </div>
  
                </div>
              </form>
            </div><!-- End Contact Form -->
  
          </div>
  
        </div>
  
      </section><!-- /Contact Section -->
  

    </main>

<?php include("footer.php"); ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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