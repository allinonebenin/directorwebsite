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
        <script type="text/javascript" src="js/jquery.min.js"></script>
    		<!--[if lt IE 9]>
               <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    		<![endif]-->
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
                    <li><a href="index.php"><i class="fa fa-home"></i>Welcome</a></li>
                    <li><a href="index.php#my-service"><i class="fa fa-rocket"></i>My Service</a></li>
                    <li class="active"><a href="portfolio.php"><i class="fa fa-briefcase"></i>Portfolio</a></li>
                    <li><a href="index.php#pricing"><i class="fa fa-history"></i>Service price</a></li>
                    <li><a href="index.php#testimonials"><i class="fa fa-star"></i>Testimonials</a></li>
                    <li><a href="index.php#contact"><i class="fa fa-address-book"></i>Contact</a></li>
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

    <!-- Start Breadcrumbs -->
		<section id="breadcrumbs">
			<div class="container survol">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h2>
							<?php
                if (App::getInstance()->classe=='portfolios' || App::getInstance()->classe=='portfolio')
                echo 'Welcome to our Achievement';
		          ?>
						</h2>
						<ul class="bread-list">
							<li><a href="index.php">Home</a></li>
              <?php
                if(App::getInstance()->classe=='portfolios') echo'<li class="active">All portfolio</li>';
                elseif (App::getInstance()->classe=='portfolio') echo'
                  <li><a href="portfolio.php">All portfolio</a></li>
                  <li class="active">Porfolio</li>
                ';
               ?>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->

		<!--content-->
			<?= $content; ?>
		<!--content-->

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
