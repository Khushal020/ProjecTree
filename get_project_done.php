<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HomePage</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!--<link href="/photos/img/favicon.png" rel="icon">
  <link href="/photos/img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <!--<link href="/css/style1.css" rel="stylesheet">-->
  <link href="/css/style_header.css" rel="stylesheet">
  <!--<link href="/css/style.css" rel="stylesheet">-->
  <!--<link href="/css/style_portfolio.css" rel="stylesheet">-->
  <link href="/css/style_footer.css" rel="stylesheet">
  <link href="/css/style_form.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" style="background-color: rgba(0,0,0,0.9);/*padding-top: 20px;padding-bottom: 20px;height: 72px;*/">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="index.php#hero" class="scrollto">PROJECTREE</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php#hero">Home</a></li>
          <li><a href="index.php#about">About Us</a></li>
          <li><a href="index.php#services">Services</a></li>
          <!--<li><a href="#portfolio">Portfolio</a></li>-->
          <li><a href="index.php#team">Team</a></li>
          <li class="menu-has-children menu-active"><a href="portfolio.php">project</a>
            <ul>
              <li class="menu-active-inside"><a href="portfolio.php">Project Information</a></li>
              <li><a href="upload_project.php">Upload Project</a></li>
              <li><a href="">Get Project Done</a></li>
            </ul>
          </li>
          <li><a href="index.php#contact">Contact</a></li>
          <li><a href="login.php">login/signup</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--this is a element for form-->
  <section style="padding-top: 60px;padding-bottom: 40px; ">
    <form action="" method="post" style="margin-top: 92px;">
      <div class="container">
        <header class="section-header">
              <h3 class="section-title">Get project done</h3>
        </header>
        <div class="form-group row" style="margin-top: 20px;">
          <label for="project-title" class="col-2 col-form-label">Project Title</label>
          <div class="col-10">
            <input class="form-control" type="text" value="Artisanal kale" id="project-title">
          </div>
        </div>
        <div class="form-group row">
          <label for="project-discription" class="col-2">Project Discription</label>
          <textarea class="form-control col-10" id="project-discription" rows="3" data-rule="required"></textarea>
        </div>
        <div class="form-group row">
          <label for="contact-no" class="col-2 col-form-label">Contact no.</label>
          <div class="col-10">
            <input class="form-control" type="tel" value="Artisanal kale" id="contact-no">
          </div>
        </div>
        <div class="form-group row">
          <label for="budget" class="col-2 col-form-label">Budget</label>
          <div class="col-10">
            <input class="form-control" type="number" value="Artisanal kale" id="budget">
          </div>
        </div>
        <div class="form-group row">
          <label for="area" class="col-2 col-form-label">Area</label>
          <div class="col-10">
            <input class="form-control" type="text" value="Artisanal kale" id="area">
          </div>
        </div>
        <div class="form-group row">
          <label for="city" class="col-2 col-form-label">City</label>
          <div class="col-10">
            <input class="form-control" type="text" value="Artisanal kale" id="city">
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Order</button>
          </div>
        </div>
      </div>    
    </form>
    
  </section>  
  <!--end for elemrnt related to form-->


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>BizPage</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php#hero">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php#services">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="terms_of_service.html#terms-of-service">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="terms_of_service.html#privacy-poloicy">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              85,Yamunakunj Society<br>
              L.H.Road,Surat-395006<br>
              Gujarat,India<br>
              <strong>Phone:</strong> +91 8140454404<br>
              <strong>Email:</strong> bhautikgondaliya2@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Best <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade
      </div>
    </div>
  </footer><!-- #footer -->

  <!-- JavaScript Libraries -->
  <script src="/bootstrap/js/jquery-3.2.1.min.js"></script>
  <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>


  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <!--<script src="js/custom.js"></script>-->

</body>
</html>
