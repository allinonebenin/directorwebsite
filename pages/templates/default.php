<?php
  $app=App::getInstance();
  if (isset($_POST['contact']))
  {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];

      $email_message = "

      Name: ".$name."
      Email: ".$email."
      Message: ".$message."

      ";

      //echo $email_message;
      if (mail ("ddossou@allinone-benin.com" , "New Message", $email_message))
      {
          $result="<div class='alert alert-success' >Mail successful</div>";
      }
      else
      {
          $result="<div class='alert alert-success' >Mail unsuccessful</div>";
      }

  }
 ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
      <!-- Meta tag -->
  		<meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
  		<meta name="description" content="">
  		<meta name='copyright' content='codeglim'>
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

  		<!-- Title Tag -->
      <title><?= App::getInstance()->title?></title>
  		<!-- Favicon -->
  		<link rel="icon" type="image/png" href="images/favicon.png">
      <!-- Google Font -->
  		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
  		<!-- Animate CSS -->
      <link rel="stylesheet" href="css/animate.min.css">
  		<!-- Font Awesome CSS -->
      <link rel="stylesheet" href="css/font-awesome.min.css">
  		<!-- Fancy Box CSS -->
      <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  		<!-- Slick Nav CSS -->
      <link rel="stylesheet" href="css/slicknav.min.css">
  		<!-- Animate Text -->
     <link rel="stylesheet" href="css/animate-text.css">
  		<!-- Owl Carousel CSS -->
  		<link rel="stylesheet" href="css/owl.theme.default.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
  		<!-- Bootstrap Css -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
  		<!-- Sufia StyleShet -->
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/responsive.css">
  		<!-- Maheraj Template Color -->
  		<link rel="stylesheet" href="css/color/color7.css">
    </head>
    <body>
  		<!-- Preloader -->
  		<div class="loader">
  			<div class="loader-inner">
  				<div class="k-line k-line11-1"></div>
  				<div class="k-line k-line11-2"></div>
  				<div class="k-line k-line11-3"></div>
  				<div class="k-line k-line11-4"></div>
  				<div class="k-line k-line11-5"></div>
  			</div>
  		</div>
  		<!-- End Preloader -->

  		<!-- Start Header -->
  		<header id="header" class="sidenav active">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-12 col-sm-12 col-xs-12">
  						<!-- Logo -->
  						<div class="logo">
  							<a href="index.html"><span>R</span> Fassinou</a>
  						</div>
  						<!--/ End Logo -->
  						<div class="side-icon">
  							<a href="#header"><i class="fa fa-bars"></i></a>
  						</div>
  						<div class="mobile-nav"></div>
  					</div>
  					<div class="col-md-12 col-sm-12 col-xs-12">
  						<div class="nav-area">
  							<!-- Main Menu -->
                <nav class="mainmenu">
  								<div class="collapse navbar-collapse">
  									<ul class="nav navbar-nav menu">
  										<li class="active"><a href="#personal-area"><i class="fa fa-home"></i>Welcome</a></li>
  										<li><a href="#my-service"><i class="fa fa-rocket"></i>My Service</a></li>
  										<li><a href="#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a></li>
  										<li><a href="#pricing"><i class="fa fa-history"></i>Service price</a></li>
  										<li><a href="#testimonials"><i class="fa fa-star"></i>Testimonials</a></li>
  										<li><a href="#contact"><i class="fa fa-address-book"></i>Contact</a></li>
  									</ul>
  									<ul class="social">
  										<li><a href="https://fr-fr.facebook.com/roger.fassinou"><i class="fa fa-facebook"></i></a><li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a><li>
                      <li><a href="https://fr.linkedin.com/in/roger-fassinou-5483a07a"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="https://www.smashwords.com/profile/view/rogerfassinou"><i class="fa fa-book"></i></a></li>
  									</ul>
  								</div>
  							</nav>
  							<!--/ End Main Menu -->
  						</div>
  					</div>
  				</div>
  			</div>
  		</header>
  		<!--/ End Header -->

  		<!-- Start Personal Area -->
  		<section id="personal-area" class="particle">
  			<div id="particles-js"></div>
  			<div class="table">
  				<div class="table-cell">
  					<div class="personal-main">
  						<div class="personal-single">
  							<div class="container">
  								<div class="row">
  									<div class="col-md-12 col-sm-12 col-xs-12">
  										<!-- Personal Text -->
  										<div class="personal-text">
  											<div class="my-info">
  												<h1>Roger <span>Fassinou</span></h1>
                          <h2 class="cd-headline clip is-full-width">
                             <span class="cd-words-wrapper">
                                 <b class="is-visible">Hello I am Roger,</b>
                                 <b style="text-align: center;">currently living in Chicago, <br>United States.</b>
                                 <b style="text-align: center;">I am an Ethical Hacker</b>
                                 <b style="text-align: center;">and Web Applications <br>Penetration Tester,</b>
                                 <b style="text-align: center;">also a Professional <br>Websites Developer</b>
                                 <b style="text-align: center;">and Senior Android <br>Applications Developer.</b>
                                 <b style="text-align: center;">If you need to contact me</b>
                                 <b style="text-align: center;">click the button below.</b>
                              </span>
                          </h2>
                          <div class="button">
  													<a href="#contact" class="btn primary shine"><i class="fa fa-rocket"></i>Hire Me</a>
  													<a href="#portfolio" class="btn shine"><i class="fa fa-briefcase"></i>My Project</a>
  												</div>
  											</div>
  										</div>
  										<!--/ End Personal Text -->
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  					<div class="arrow">
  						<a href="#my-service"><i class="fa fa-angle-down"></i></a>
  					</div>
  				</div>
  			</div>
  		</section>
  		<!--/ End Personal Area -->

  		<!--content-->
  			<?= $content; ?>
  		<!--content-->


      <!-- Start Clients -->
  		<div id="clients" class="section" data-stellar-background-ratio="0.3">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-12 col-sm-12 col-xs-12">
  						<div class="portfolio-related">
  							<!-- Single Clients -->
  							<div class="single-clients col-md-6">
  								<a href="http://www.unicef.org" target="_blank"><img src="images/unicef1.png" alt="Unicef"></a>
  							</div>
  							<!--/ End Single Clients -->
  							<!-- Single Clients -->
  							<div class="single-clients col-md-6">
  								<a href="http://www.africangcc.org" target="_blank"><img src="images/agcc1.png" alt="AGCC"></a>
  							</div>
  							<!--/ End Single Clients -->
  							<!-- Single Clients -->
  							<div class="single-clients active col-md-6">
  								<a href="http://www.businessdayghana.com" target="_blank"><img src="images/businessday1.png" alt="Business day"></a>
  							</div>
  							<!--/ End Single Clients -->
  							<!-- Single Clients -->
  							<div class="single-clients col-md-6">
  								<a href="http://www.cipchicago.org" target="_blank"><img src="images/cipchicago1.png" alt="Cip chicago"></a>
  							</div>
  							<!--/ End Single Clients -->
  							<!-- Single Clients -->
  							<div class="single-clients col-md-6">
  								<a href="http://www.discoveryjourney.org" target="_blank"><img src="images/discoveryjourney1.png" alt="Discovery journey"></a>
  							</div>
  							<!--/ End Single Clients -->
  							<!-- Single Clients -->
  							<div class="single-clients col-md-6">
  								<a href="https://www.sunleafweb.com/" target="_blank"><img src="images/sunleafweb.png" alt="Sunleafweb"></a>
  							</div>
  							<!--/ End Single Clients -->
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  		<!--/ End Clients -->

  		<!-- Footer Top
  		<section id="footer-top" class="section">
  			<div class="container">
  				<div class="row">
  					<!-- Single Widget
  					<div class="col-md-12 col-sm-12 col-xs-12">
  						<div class="newslatter">
  							<h2><span>Signup</span>Newslatter</h2>
  							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio tenetur, dolores aperiam, quasi perferendis nemo mollitia labore molestias modi consequatur expedita ad voluptates dolor ex. Impedit quo temporibus, molestiae fugit?</p>
  						</div>
  						<form class="news-form">
  							<input type="email" placeholder="type your email">
  							<button type="submit" class="button primary"><i class="fa fa-paper-plane"></i></button>
  						</form>
  					</div>
  					<!--/ End Single Widget
  				</div>
  			</div>
  		</section>
  		<!--/ End footer Top -->

  		<!-- Start Footer -->
  		<footer id="footer">
  			<!-- Arrow -->
  			<div class="arrow">
  				<a href="#personal-area" class="btn"><i class="fa fa-angle-up"></i></a>
  			</div>
  			<!--/ End Arrow -->
  			<div class="container">
  				<div class="row">
  					<div class="col-md-6 col-sm-6 col-xs-12">
  						<!-- Copyright -->
  						<div class="copyright">
  							<p>&copy; Copyright 2013-2017</p>
  						</div>
  						<!--/ End Copyright -->
  					</div>
  					<div class="col-md-6 col-sm-6 col-xs-12">
  						<!-- Social -->
  						<ul class="social">
  							<li><a href="https://fr-fr.facebook.com/roger.fassinou"><i class="fa fa-facebook"></i></a><li>
                <li><a href="#"><i class="fa fa-twitter"></i></a><li>
                <li><a href="https://fr.linkedin.com/in/roger-fassinou-5483a07a"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.smashwords.com/profile/view/rogerfassinou"><i class="fa fa-book"></i></a></li>
  						</ul>
  						<!--/ End Social -->
  					</div>
  				</div>
  			</div>
  		</footer>
  		<!--/ End Footer -->

  		<!-- Jquery -->
  		<script type="text/javascript" src="js/jquery.min.js"></script>

  		<!-- Modernizr JS -->
  		<script type="text/javascript" src="js/modernizr.min.js"></script>

  		<!-- WOW JS -->
  		<script type="text/javascript" src="js/wow.min.js"></script>

  		<!-- Fancybox js -->
  		<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>

  		<!-- Animate Text JS -->
  		<script type="text/javascript" src="js/animate-text.js"></script>

  		<!-- Mobile Menu JS -->
      	<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>

  		<!-- Jquery Parallax -->
      	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>

  		<!-- Jquery Easing -->
      	<script type="text/javascript" src="js/easing.js"></script>

  		<!-- One Page Nav JS -->
      	<script type="text/javascript" src="js/jquery.nav.js"></script>

  		<!-- Slider Carousel JS -->
  		<script type="text/javascript" src="js/owl.carousel.min.js"></script>

  		<!-- Youtube Player JS -->
  		<script type="text/javascript" src="js/ytplayer.min.js"></script>

  		<!-- Particle JS -->
  		<script type="text/javascript" src="js/particles.min.js"></script>
  		<script type="text/javascript" src="js/particle-app.js"></script>

  		<!-- Counter JS -->
  		<script type="text/javascript" src="js/waypoints.min.js"></script>
  		<script type="text/javascript" src="js/jquery.counterup.min.js"></script>

  		<!-- Mixitup JS -->
  		<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>

  		<!-- Bootstrap JS -->
  		<script type="text/javascript" src="js/bootstrap.min.js"></script>

  		<!-- Main JS -->
  		<script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
