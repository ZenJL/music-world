<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themeim.com/demo/milando/album.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Dec 2021 02:51:29 GMT -->
<head>
	<!-- Meta Data -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home — Milando - Music Portal HTML Templat</title>

	<!-- Fav Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="public/image/fav-icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="public/image/fav-icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="public/image/fav-icons/favicon-16x16.png">
	<meta name="theme-color" content="#e43a90">

	<!-- Dependency Styles -->
	<link rel="stylesheet" href="public/dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="public/dependencies/intro/css/stylesheet.css" type="text/css">
	<link rel="stylesheet" href="public/dependencies/swiper/swiper.min.css" type="text/css">
	<link rel="stylesheet" href="public/dependencies/font-awesome/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="public/dependencies/wow/css/animate.css" type="text/css">
	<link rel="stylesheet" href="public/dependencies/magnific-popup/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="public/dependencies/jquery-ui/css/jquery-ui.css" type="text/css">
	<link rel="stylesheet" href="public/dependencies/slick-carousel/css/slick.css" type="text/css">
	<link rel="stylesheet" href="public/dependencies/colornip/css/colornip.min.css" type="text/css">
	<link rel="stylesheet" href="public/dependencies/css-loader/css/css-loader.css" type="text/css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="public/css/woocommerce.css" type="text/css">
	<link rel="stylesheet" href="public/css/app.css" type="text/css">
	<link id="theme" rel="stylesheet" href="public/css/theme-color/theme-default.css" type="text/css">




</head>

<body id="home-version-1" class="home-version-1" data-style="default">

	<div class="loader loader-bar-ping-pong is-active"></div>
	<div id="site">


		<div class="Switcher">
			<button id="Switcher__control" class="Switcher__control"><i class="tim-cogwheel"></i></button>
			<h5>Change Color</h5>
			<ul id="colors" data-dir="public/css/theme-color/">
				<li data-scheme="theme-default" data-color="#e43a90"></li>
				<li data-scheme="theme-river" data-color="#242e8a"></li>
				<li data-scheme="theme-alizarin" data-color="#673AB7"></li>
				<li data-scheme="theme-emerald" data-color="#2196f3"></li>
				<li data-scheme="theme-seven" data-color="#7940d7"></li>
				<li data-scheme="theme-carrot" data-color="#135ee4"></li>
				<li data-scheme="theme-amethyst" data-color="#07e6a5"></li>


				<li data-scheme="theme-six" data-color="#d8c600"></li>

				<li data-scheme="theme-eight" data-color="#e8300c"></li>
				<li data-scheme="theme-nine" data-color="#26cc74"></li>
			</ul>
		</div>



		<!--=========================-->
		<!--=        Navbar         =-->
		<!--=========================-->

		<?php include 'blocks/header.php';?>
		<!-- /#header -->



		<!--=============================-->
		<!--=        Mobile Nav         =-->
		<!--=============================-->

        <?php include 'blocks/mobilenav.php';?>


		<!--============================-->
		<!--=        	Banner         =-->
		<!--============================-->

		<section class="page-header" data-bg-image="public/media/background/8.jpg">
			<div class="tim-container">
				<div class="page-header-title text-center">
					<h2>Album</h2>
				</div>

				<div class="breadcrumbs">
					<a href="index.php">Home</a>
					<span>/</span>
					<span>Album</span>
				</div>

			</div>
			<!-- /.tim-container -->
		</section>
		<!-- /#page-header -->

		<!--===========================-->
		<!--=        	About         =-->
		<!--===========================-->

		<section id="album">
			<div class="tim-container d-flex justify-content-center">
				<div class="col-xl-12">

					<ul class="tim-isotope-filter album-filter-button">
						<li>
							<a href="#" data-filter=".pop">Pop</a>
						</li>
						<li>
							<a href="#" data-filter=".classical">R&B</a>
						</li>
						<li>
							<a href="#" data-filter=".jazz">Jazz</a>
						</li>
						<li>
							<a href="#" data-filter=".rock">Rock</a>
						</li>
						<li>
							<a href="#" data-filter=".rap">Rap</a>
						</li>
					</ul>

					<div class="tim-isotope tim-isotope-1 wow fadeInUp" data-wow-delay="0.8s">
						<ul class="tim-filter-items tim-album-items grid">
							<li class="grid-sizer"></li>
							<li class="tim-album-item grid-item rock rap jazz">
								<div class="tim-isotope-grid__img effect-active">
									<img src="public/media/album/1.jpg" alt="album thumb" />
								</div>
								<div class="album_details_wrap">
									<div class="album-info">
										<a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
										<h4 class="album-title">By The Way Rain</h4>
										<h5 class="artist-name">Song Artist Name</h5>
										<a href="#" class="tim-btn tim-btn-bgt">Buy Now</a>
									</div>
								</div>
							</li>
							<li class="tim-album-item grid-item rock classical">
								<div class="tim-isotope-grid__img">
									<img src="public/media/album/2.jpg" alt="album thumb" />
								</div>
								<div class="album_details_wrap">
									<div class="album-info">
										<a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
										<h4 class="album-title">By The Way Rain</h4>
										<h5 class="artist-name">Song Artist Name</h5>
										<a href="#" class="tim-btn tim-btn-bgt">Buy Now</a>
									</div>
								</div>
							</li>
							<li class="tim-album-item grid-item rap">
								<div class="tim-isotope-grid__img">
									<img src="public/media/album/3.jpg" alt="album thumb" />
								</div>
								<div class="album_details_wrap">
									<div class="album-info">
										<a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
										<h4 class="album-title">By The Way Rain</h4>
										<h5 class="artist-name">Song Artist Name</h5>
										<a href="#" class="tim-btn tim-btn-bgt">Buy Now</a>
									</div>
								</div>
							</li>
							<li class="tim-album-item grid-item classical rock">
								<div class="tim-isotope-grid__img">
									<img src="public/media/album/4.jpg" alt="album thumb" />
								</div>
								<div class="album_details_wrap">
									<div class="album-info">
										<a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
										<h4 class="album-title">By The Way Rain</h4>
										<h5 class="artist-name">Song Artist Name</h5>
										<a href="#" class="tim-btn tim-btn-bgt">Buy Now</a>
									</div>
								</div>
							</li>
							<li class="tim-album-item grid-item classical rock">
								<div class="tim-isotope-grid__img">
									<img src="public/media/album/5.jpg" alt="album thumb" />
								</div>
								<div class="album_details_wrap">
									<div class="album-info">
										<a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
										<h4 class="album-title">By The Way Rain</h4>
										<h5 class="artist-name">Song Artist Name</h5>
										<a href="#" class="tim-btn tim-btn-bgt">Buy Now</a>
									</div>
								</div>
							</li>
							<li class="tim-album-item grid-item classical">
								<div class="tim-isotope-grid__img">
									<img src="public/media/album/6.jpg" alt="album thumb" />
								</div>
								<div class="album_details_wrap">
									<div class="album-info">
										<a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
										<h4 class="album-title">By The Way Rain</h4>
										<h5 class="artist-name">Song Artist Name</h5>
										<a href="#" class="tim-btn tim-btn-bgt">Buy Now</a>
									</div>
								</div>
							</li>
							<li class="tim-album-item grid-item jazz">
								<div class="tim-isotope-grid__img">
									<img src="public/media/album/7.jpg" alt="album thumb" />
								</div>
								<div class="album_details_wrap">
									<div class="album-info">
										<a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
										<h4 class="album-title">By The Way Rain</h4>
										<h5 class="artist-name">Song Artist Name</h5>
										<a href="#" class="tim-btn tim-btn-bgt">Buy Now</a>
									</div>
								</div>
							</li>
							<li class="tim-album-item grid-item jazz rap">
								<div class="tim-isotope-grid__img">
									<img src="public/media/album/8.jpg" alt="album thumb" />
								</div>
								<div class="album_details_wrap">
									<div class="album-info">
										<a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
										<h4 class="album-title">By The Way Rain</h4>
										<h5 class="artist-name">Song Artist Name</h5>
										<a href="#" class="tim-btn tim-btn-bgt">Buy Now</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /.tim-container -->
		</section>
		<!-- /#album -->

		<!--=================================-->
		<!--=        	Intro Video         =-->
		<!--=================================-->

		<section id="video-intro" data-bg-image="public/media/background/4.jpg">
			<div class="tim-container">
				<div class="intro-video">
					<a href="https://www.youtube.com/watch?v=0I8GmbDU7c4" class="video-btn popup-video-btn"><i class="fa fa-play"></i></a>
					<h2>NEW VIDEOS TODAY</h2>
					<h5>Your heart is just a beatbox for the song of your life!</h5>
					<p>FULL ALBUM RELEASE</p>
					<p>On 24 Dec 2017</p>
				</div>
				<!-- /.intro-video -->
			</div>
			<!-- /.tim-container -->
		</section>
		<!-- /#video-intro -->

		<!--===================================-->
		<!--=        	Featured Album        =-->
		<!--===================================-->

		<section id="feature-album">
			<div class="container">
				<div class="section-title text-center">
					<h2>Featured<span>Album</span></h2>
					<p>
						There are many variations of passages of Lorem Ipsum available but the majority have suffered<br> alteration in some injected humour.
					</p>
				</div>

				<div class="feature-albums">
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="tim-album-item">
								<div class="tim-feature-image">
									<img src="public/media/album/1.jpg" alt="album thumb" />
								</div>
								<div class="album_details_wrap">
									<div class="album-info">
										<a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
										<h4 class="album-title">By The Way Rain</h4>
										<h5 class="artist-name">Song Artist Name</h5>
										<a href="#" class="tim-btn">Buy Now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /.col-xl-3 col-lg-4 col-sm-6 -->

						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="tim-album-item">
								<div class="tim-feature-image">
									<img src="public/media/album/2.jpg" alt="album thumb" />
								</div>
								<div class="album_details_wrap">
									<div class="album-info">
										<a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
										<h4 class="album-title">By The Way Rain</h4>
										<h5 class="artist-name">Song Artist Name</h5>
										<a href="#" class="tim-btn">Buy Now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /.col-xl-3 col-lg-4 col-sm-6 -->

						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="tim-album-item">
								<div class="tim-feature-image">
									<img src="public/media/album/3.jpg" alt="album thumb" />
								</div>
								<div class="album_details_wrap">
									<div class="album-info">
										<a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
										<h4 class="album-title">By The Way Rain</h4>
										<h5 class="artist-name">Song Artist Name</h5>
										<a href="#" class="tim-btn">Buy Now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /.col-xl-3 col-lg-4 col-sm-6 -->

						<div class="col-xl-3 col-lg-6 col-sm-6">
							<div class="tim-album-item">
								<div class="tim-feature-image">
									<img src="public/media/album/4.jpg" alt="album thumb" />
								</div>
								<div class="album_details_wrap">
									<div class="album-info">
										<a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
										<h4 class="album-title">By The Way Rain</h4>
										<h5 class="artist-name">Song Artist Name</h5>
										<a href="#" class="tim-btn">Buy Now</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /.col-xl-3 col-lg-4 col-sm-6 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.feature-albums -->
			</div>
			<!-- /.tim-container -->
		</section>
		<!-- /#feature-album -->

        <!--==============================-->
        <!--=        	Footer         	 =-->
        <!--==============================-->

        <?php include 'blocks/footer.php'; ?>

	</div>
	<!-- /#site -->
	<!-- Dependency Scripts -->
	<script src="public/dependencies/jquery/jquery.min.js"></script>
	<script src="public/dependencies/jquery-ui/jquery-ui.min.js"></script>
	<script src="public/dependencies/bootstrap/js/bootstrap.min.js"></script>
	<script src="public/dependencies/swiper/js/swiper.min.js"></script>
	<script src="public/dependencies/swiperRunner/swiperRunner.min.js"></script>
	<script src="public/dependencies/wow/js/wow.min.js"></script>
	<script src="public/dependencies/jquery.countdown/jquery.countdown.min.js"></script>
	<script src="public/dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	<script src="public/dependencies/jquery.spinner/js/jquery.spinner.js"></script>
	<script src="public/dependencies/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="public/dependencies/masonry-layout/masonry.pkgd.min.js"></script>
	<script src="public/dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="public/dependencies/slick-carousel/js/slick.min.js"></script>
	<script src="public/js/headroom.js"></script>
	<script src="public/js/soundmanager2.js"></script>
	<script src="public/js/mp3-player-button.js"></script>
	<script src="public/js/smoke.js"></script>
	<script src="public/dependencies/FitText.js/js/jquery.fittext.js"></script>
	<script src="public/dependencies/gmap3/js/gmap3.min.js"></script>
<!--	<script src='../../../cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
	<script src='public/dependencies/tilt.js/js/tilt.jquery.js'></script>
	<script src='public/js/parallax.min.js'></script>
	<!-- Player -->
	<script src="public/dependencies/jPlayer/js/jquery.jplayer.min.js"></script>
	<script src="public/dependencies/jPlayer/js/jplayer.playlist.min.js"></script>
	<script src="public/js/myplaylist.js"></script>

	<!-- Remove It -->
	<script src="public/dependencies/colornip/colornip.min.js"></script>

	<!--Google map api -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBrMPsyNtpwKXPPpG54XwJXnyobfMAIc"></script>

	<!-- Site Scripts -->
	<script src="public/js/app.js"></script>


</body>


</html>