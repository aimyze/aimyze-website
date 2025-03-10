<style>

#navmenu a{
    color: #FBFFFF;
}

#header{
    
    background-color: #121313;
}

#navmenu ul{
    background-color: #121313;
}

.navmenu .listing-dropdown ul li a{
    background-color: #121313;
}

.child_a{
    background-color:black;
}

.navmenu .listing-dropdown ul li a:hover{
    background-color: #121313;
}

.mobile-nav-toggle{
    color: #FBFFFF;
}

</style>
<link rel="icon" type="image/x-icon" href="favicon.ico">  
  
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="aimyze_logo_2.png" alt="">
        <h1 class="sitename"></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Discover Aimyze<br></a></li>
          <li><a href="about.php">Why Aimyze?</a></li>
          <li class="listing-dropdown"><a href="#"><span>What We Offer</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="drop">
              <li>
                <a class="child_a">AI-Powered Insights</a>
                <a class="child_a">Low-Code/No-Code Tools</a>
                <a class="child_a">Workflow Automation</a>
              </li>
            </ul>
          </li>
          <li class="listing-dropdown"><a href="#"><span>Learn & Grow</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul class="drop">
              <li>
                <!--h5>Featured</h5-->
                <a href="#" class="child_a">Customer Success Stories</a>
                <a href="#" class="child_a">Webinars & Tutorials</a>
                <a href="#" class="child_a">Whitepapers & Guides</a>
              </li>
              <!--li>
                <h5>Learn with Us!</h5>
                <a href="#">E-Commerce</a>
                <a href="#">Digital Content</a>
                <a href="#">Marketing Automations</a>
              </li-->
            </ul>
          </li>
          <li><a href="pricing.php">Pricing</a></li>

          <li><a href="soon.php">Insights & Trends</a></li>
          <!--li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li-->

          <!--li><a href="contact.php">Get in Touch</a></li-->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      
      <a class="btn-getstarted flex-md-shrink-0" href="contact.php" style="background-color:#198754;border-color:#198754">Get in Touch</a>

      <!--a class="btn-getstarted flex-md-shrink-0" href="waitlist.php">Join waiting list</a-->

    </div>
  </header>