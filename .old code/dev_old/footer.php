  <footer id="footer" class="footer">
<?php if(basename($_SERVER['PHP_SELF']) == "index.php")
{
    ?>

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4></h4>
            <p></p>
            <form action="sendemail.php" method="post">
              <div class="newsletter-form">
                <input type="email" name="email" placeholder="email@example.com">
                <input type="submit" value="Join Waitlist!">
              </div>
              <div><input class="form-check-input" type="checkbox" value="" id="privacy">
                <label class="form-check-label" for="privacy">
                  I have read the Privacy Policy.
                </label>
                <input class="form-check-input" checked type="checkbox" value="" id="marketing">
                <label class="form-check-label" for="marketing">
                  I agree to recieve marketing updates.
                </label>
              </div>
              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
}
?>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="d-flex align-items-center">
            <span class="sitename">Aimyze</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Spacelance #677, 1st Floor, 27th Main, 13th Cross</p>
            <p>HSR Layout, Sector 1, Bangalore</p>
            <p>Karnataka, India 560102</p>

            <p class="mt-3"><strong>Phone:</strong> <span>+91 9380354409</span></p>
            <p><strong>Website:</strong> <span>www.apexitconnect.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li> <a href="#">Home</a></li>
            <li> <a href="#">About us</a></li>
            <li> <a href="#">Services</a></li>
            <li> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li> <a href="#">Service 1</a></li>
            <li> <a href="#">Service 2</a></li>
            <li> <a href="#">Service 3</a></li>
            <li> <a href="#">Service 4</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p></p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Aimyze</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->

      </div>
    </div>

  </footer>