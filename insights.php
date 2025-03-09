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
<style>
        .card {
            height: 450px; /* Reduce card height */
        }
        .image-container {
            max-height: 35%;
            overflow: hidden;
        }
        .card-img-top {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .card-body {
            font-size: 14px; /* Smaller text */
        }
    </style>
</head>

<body class="index-page">

<?php include("header.php"); ?>

    <main class="main">
        <section id="hero" class="hero section" style="background: transparent;">


            <!--<div class="container" data-aos="fade-up">-->
            <!--    <div class="row gx-0">-->

            <!--        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"-->
            <!--            data-aos-delay="200">-->
            <!--            <div class="content">-->
            <!--                <h3></h3>-->
            <!--                <h2>About Aimyze</h2>-->
            <!--                <p>-->
            <!--                    Aimyze is an AI-powered CRM platform designed to help businesses improve customer-->
            <!--                    engagement and-->
            <!--                    streamline operations. By leveraging cutting-edge automation and actionable insights, we-->
            <!--                    enable-->
            <!--                    organizations to optimize workflows, personalize interactions, and make data-driven-->
            <!--                    decisions with ease.-->
            <!--                </p>-->
            <!--            </div>-->
            <!--        </div>-->

            <!--        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">-->
            <!--            <img src="assets/img/features-2.png" class="img-fluid" alt="">-->
            <!--        </div>-->

            <!--    </div>-->
            <!--</div>-->

<div class="container">
    
            <div id="rss-feed" class="row justify-content-center">Loading...</div>
        </div>

        </section><!-- /About Section -->

    </main>
    <script>
        fetch('rss/rss.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('rss-feed').innerHTML = data;
            })
            .catch(error => console.error("Error loading RSS feed:", error));
    </script>

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