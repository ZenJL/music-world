<?php
    include ('config.php');
    include ('libs/connect.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Music World</title>

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
    <section id="banner-one">
        <div class="swiper-container banner-slider-two" data-swiper-config='{"loop": true, "effect": "slide", "prevButton":"#banner-nav-prev", "nextButton": "#banner-nav-next", "speed": 700, "autoplay": 500000, "paginationClickable": true}'>

            <div class="swiper-wrapper">

                <div class="swiper-slide" data-bg-image="public/media/banner/4.jpg" data-parallax="image">

                    <div class="slider-content-two text-left" data-animate="fadeIn">
                        <img src="public/media/banner/1.png" alt="Music">
                        <h3 data-animate="fadeInUp">Jazz With</h3>
                        <h2 data-animate="fadeInUp" data-delay="0.5s">
                            Spanish Make<br> your Feel
                        </h2>


                        <p data-animate="fadeInUp" data-delay="0.9s">
                            There are many variations of passages of Lorem Ipsum available but the majority have to an suffered<br> alteration in some form by injected humour.
                        </p>
                        <a href="#" class="tim-btn" data-animate="fadeInLeft" data-delay="0.9s">
                            Read More
                        </a>

                        <a href="https://www.youtube.com/watch?v=0I8GmbDU7c4" class="video-btn-two popup-video-btn" data-animate="fadeInRight" data-delay="0.9s">
                            <i class="fa fa-play"></i>
                            Watch video
                        </a>

                    </div>
                    <!-- /.slider-content -->

                </div>

                <div class="swiper-slide" data-bg-image="public/media/banner/3.jpg" data-parallax="image">

                    <div class="slider-content-two text-left" data-animate="fadeIn">
                        <img src="public/media/banner/2.png" alt="Music">
                        <h3 data-animate="fadeInUp">Jazz With</h3>
                        <h2 data-animate="fadeInUp" data-delay="0.5s">
                            Spanish Make<br> your Feel
                        </h2>


                        <p data-animate="fadeInUp" data-delay="0.9s">
                            There are many variations of passages of Lorem Ipsum available but the majority have to an suffered<br> alteration in some form by injected humour.
                        </p>
                        <a href="#" class="tim-btn" data-animate="fadeInLeft" data-delay="0.9s">
                            Read More
                        </a>

                        <a href="#" class="video-btn-two" data-animate="fadeInRight" data-delay="0.9s">
                            <i class="fa fa-play"></i>
                            Watch video
                        </a>

                    </div>
                    <!-- /.slider-content -->
                </div>
            </div>


            <div class="header_player">
                <div class="tim-container ">
                    <!-- Audio Player -->
                    <div class="player-container">
                        <div class="current-tracks">
                            <div id="main_player" class="jp-jplayer">

                            </div>
                            <div id="nowPlaying">
                                <h3 class="track-name"></h3>
                                <span class="artist-name"></span>
                            </div>
                            <!-- #nowPlaying -->
                        </div>
                        <!-- /.current-tracks -->

                        <div id="header_player" class="jp-audio" role="application" aria-label="public/media player">
                            <div class="jp-type-playlist clearfix">
                                <div class="jp-gui jp-interface">
                                    <div class="jp-controls">
                                        <button class="jp-previous" tabindex="0"><i class="fa fa-backward"></i></button>
                                        <button class="jp-play" tabindex="0"><i class="fa fa-play"></i></button>
                                        <button class="jp-next" tabindex="0"><i class="fa fa-forward"></i></button>
                                    </div>
                                    <!-- Display the track inside player -->

                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div class="jp-play-bar"></div>
                                        </div>
                                    </div>

                                    <div class="jp-duration" role="timer" aria-label="duration"></div>

                                    <div class="vel-wrap">
                                        <button class="jp-mute" tabindex="0"><i class="fa fa-volume-up"></i></button>

                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value"></div>
                                        </div>

                                    </div>
                                    <!-- /.vel-wrap -->

                                    <button id="playlist-toggle" class=""><i class="fa fa-list"></i></button>

                                    <!-- Playlist -->
                                    <div class="jp-playlist">
                                        <ul>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.header_player -->
        </div>
    </section>
    <!-- /#banner-one -->

    <!--============================-->
    <!--=        	Banner         =-->
    <!--============================-->
    <div class="app-footer app-player grey bg">
        <div class="playlist"></div>
    </div>


    <!--===========================-->
    <!--=        	Album         =-->
    <!--===========================-->
    <section id="tranding-album-two">
        <div class="tim-container">

            <div class="section-title text-center">
                <h2>Trending Albums <span>Hightlights</span></h2>
                <p>
                    There are many variations of passages of Lorem Ipsum available but the majority have suffered<br> alteration in some injected humour.
                </p>
            </div>
            <!-- /.section-title -->

            <div class="album-boxs d-flex justify-content-center">
                <div class="col-xl-10">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-md-6">
                            <div class="album-box album-box-two">
                                <div class="box-thumb">
                                    <img src="public/media/tranding-album/7.jpg" alt="album">
                                    <div class="icon float-right">
                                        <i class="tim-headphones"></i>
                                    </div>
                                </div>

                                <div class="album-details clearfix">
                                    <div class="content">
                                        <h3 class="album-name"><a href="#">Under the bus</a></h3>
                                        <p>Song Artist Name</p>
                                    </div>

                                </div>
                                <!-- /.album-details clearfix -->
                            </div>
                            <!-- /.album-box -->
                        </div>
                        <!-- /.col-xl-3 col-lg-4 col-sm-6 -->

                        <div class="col-xl-3 col-lg-4 col-sm-6 col-md-6">
                            <div class="album-box album-box-two">
                                <div class="box-thumb">
                                    <img src="public/media/tranding-album/8.jpg" alt="album">
                                    <div class="icon float-right">
                                        <i class="tim-headphones"></i>
                                    </div>
                                </div>

                                <div class="album-details clearfix">
                                    <div class="content">
                                        <h3 class="album-name"><a href="#">Your graciousness</a></h3>
                                        <p>Song Artist Name</p>
                                    </div>
                                </div>
                                <!-- /.album-details clearfix -->
                            </div>
                            <!-- /.album-box -->
                        </div>
                        <!-- /.col-xl-3 col-lg-4 col-sm-6 -->

                        <div class="col-xl-3 col-lg-4 col-sm-6 col-md-6">
                            <div class="album-box album-box-two">
                                <div class="box-thumb">
                                    <img src="public/media/tranding-album/9.jpg" alt="album">
                                    <div class="icon float-right">
                                        <i class="tim-headphones"></i>
                                    </div>
                                </div>

                                <div class="album-details clearfix">
                                    <div class="content">
                                        <h3 class="album-name"><a href="#">Curiosity's death</a></h3>
                                        <p>Song Artist Name</p>
                                    </div>
                                </div>
                                <!-- /.album-details clearfix -->
                            </div>
                            <!-- /.album-box -->
                        </div>
                        <!-- /.col-xl-3 col-lg-4 col-sm-6 -->

                        <div class="col-xl-3 col-lg-4 col-sm-6 col-md-6">
                            <div class="album-box album-box-two">
                                <div class="box-thumb">
                                    <img src="public/media/tranding-album/10.jpg" alt="album">
                                    <div class="icon float-right">
                                        <i class="tim-headphones"></i>
                                    </div>
                                </div>

                                <div class="album-details clearfix">
                                    <div class="content">
                                        <h3 class="album-name"><a href="#">Beyond infinity world</a></h3>
                                        <p>Song Artist Name</p>
                                    </div>
                                </div>
                                <!-- /.album-details clearfix -->
                            </div>
                            <!-- /.album-box -->
                        </div>
                        <!-- /.col-xl-3 col-lg-4 col-sm-6 -->

                        <div class="col-xl-3 col-lg-4 col-sm-6 col-md-6">
                            <div class="album-box album-box-two">
                                <div class="box-thumb">
                                    <img src="public/media/tranding-album/11.jpg" alt="album">
                                    <div class="icon float-right">
                                        <i class="tim-headphones"></i>
                                    </div>
                                </div>

                                <div class="album-details clearfix">
                                    <div class="content">
                                        <h3 class="album-name"><a href="#">Battleborn No basis</a></h3>
                                        <p>Song Artist Name</p>
                                    </div>
                                </div>
                                <!-- /.album-details clearfix -->
                            </div>
                            <!-- /.album-box -->
                        </div>
                        <!-- /.col-xl-3 col-lg-4 col-sm-6 -->

                        <div class="col-xl-3 col-lg-4 col-sm-6 col-md-6">
                            <div class="album-box album-box-two">
                                <div class="box-thumb">
                                    <img src="public/media/tranding-album/12.jpg" alt="album">
                                    <div class="icon float-right">
                                        <i class="tim-headphones"></i>
                                    </div>
                                </div>

                                <div class="album-details clearfix">
                                    <div class="content">
                                        <h3 class="album-name"><a href="#">Your graciousness life</a></h3>
                                        <p>Song Artist Name</p>
                                    </div>
                                </div>
                                <!-- /.album-details clearfix -->
                            </div>
                            <!-- /.album-box -->
                        </div>
                        <!-- /.col-xl-3 col-lg-4 col-sm-6 -->

                        <div class="col-xl-3 col-lg-4 col-sm-6 col-md-6">
                            <div class="album-box album-box-two">
                                <div class="box-thumb">
                                    <img src="public/media/tranding-album/13.jpg" alt="album">
                                    <div class="icon float-right">
                                        <i class="tim-headphones"></i>
                                    </div>
                                </div>

                                <div class="album-details clearfix">
                                    <div class="content">
                                        <h3 class="album-name"><a href="#">Under the bus</a></h3>
                                        <p>Song Artist Name</p>
                                    </div>
                                </div>
                                <!-- /.album-details clearfix -->
                            </div>
                            <!-- /.album-box -->
                        </div>
                        <!-- /.col-xl-3 col-lg-4 col-sm-6 -->

                        <div class="col-xl-3 col-lg-4 col-sm-6 col-md-6">
                            <div class="album-box album-box-two">
                                <div class="box-thumb">
                                    <img src="public/media/tranding-album/14.jpg" alt="album">
                                    <div class="icon float-right">
                                        <i class="tim-headphones"></i>
                                    </div>
                                </div>

                                <div class="album-details clearfix">
                                    <div class="content">
                                        <h3 class="album-name"><a href="#">Beyond infinity world</a></h3>
                                        <p>Song Artist Name</p>
                                    </div>
                                </div>
                                <!-- /.album-details clearfix -->
                            </div>
                            <!-- /.album-box -->
                        </div>
                        <!-- /.col-xl-3 col-lg-4 col-sm-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-xl-10 -->
            </div>
            <!-- /.album-boxs -->
        </div>
        <!-- /.tim-container -->
    </section>
    <!-- /#tranding-album -->

    <!--=============================-->
    <!--=        	Artitst         =-->
    <!--=============================-->
    <section id="artist" class="section-padding section-dark" data-parallax="image" data-bg-image="public/media/background/1.jpg">
        <div class="container">
            <div class="section-title text-center">
                <h2>Artist BiO History</h2>
                <p>
                    There are many variations of passages of Lorem Ipsum available but the majority have suffered<br> alteration in some injected humour.
                </p>
            </div>
            <!-- /.section-title -->

            <div class="row">
                <div class="col-lg-6 col-md-6 col-full-width">
                    <div class="artist-image">
                        <img src="public/media/artist/1.jpg" alt="artist">
                    </div>
                    <!-- /.artist-image -->
                </div>
                <!-- /.col-lg-6 col-md-6 col-full-width -->

                <div class="col-lg-6 col-md-6 col-full-width">
                    <div class="artist-details">
                        <h3 class="artist-name">It’s james robinson</h3>
                        <h4 class="band-name">Band Name Here</h4>

                        <div class="details">
                            <h3>About Me</h3>

                            <p>
                                There are many variations of passages of Lorem Ipsum availabe, but the majority have suffered alteration in some form by injected humour our randomiswords which don't look even slightlyassages of Lorem Ipsum availabe, but the majority have suffered alteration
                                in some form by injected humour.
                            </p>

                            <p>
                                There are many variations of passages of Lorem Ipsum availabe, but the majority have suffered alteration in some form by injected humour
                            </p>

                            <img src="public/media/artist/2.png" alt="Artist- Sing" class="sng">
                        </div>
                    </div>
                    <!-- /.artist-details -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.tim-container -->
    </section>
    <!-- /#artist -->

    <!--==============================-->
    <!--=        	Upcoming         =-->
    <!--==============================-->
    <section id="upcoming-concerts-two" class="section-padding" data-bg-image="public/media/background/6.jpg">
        <div class="tim-container">
            <div class="section-title text-center">
                <h2>Trending Albums <span>Hightlights</span></h2>
                <p>
                    There are many variations of passages of Lorem Ipsum available but the majority have suffered<br> alteration in some injected humour.
                </p>
            </div>
            <!-- /.section-title -->

            <div class="concerts-wrapper">
                <div class="concerts concerts-two">

                    <div class="concert-details">
                        <img src="public/media/concerts/1.jpg" alt="Concerts">
                        <div class="content">
                            <h3>26-29 Augest 2018, BERLIN</h3>
                            <h2>INTERNATIONAL CONFERENCE IN 2018</h2>
                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.concert-details -->

                    <div class="ticket">
                        <a href="#" class="tic-btn">Buy Ticket</a>
                        <a href="#" class="tic-btn tic-btn-bg">See Details</a>
                    </div>
                    <!-- /.ticket -->

                    <div class="concerts-count">
                        <div class="countdown" data-count-year="2020" data-count-month="12" data-count-day="20">

                        </div>
                        <!-- /.concerts-count -->
                    </div>


                </div>
                <!-- /.concerts -->

                <div class="concerts concerts-two">
                    <div class="concert-details">
                        <img src="public/media/concerts/2.jpg" alt="Concerts">
                        <div class="content">
                            <h3>26-29 September 2019, MANCHASTER</h3>
                            <h2>ROCK n ROLL CONCERT IN MANCHASTER</h2>
                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.concert-details -->

                    <div class="ticket">
                        <a href="#" class="tic-btn">Buy Ticket</a>
                        <a href="#" class="tic-btn tic-btn-bg">See Details</a>
                    </div>
                    <!-- /.ticket -->

                    <div class="concerts-count">
                        <div class="countdown" data-count-year="2020" data-count-month="9" data-count-day="30">

                        </div>
                        <!-- /.concerts-count -->
                    </div>
                </div>
                <!-- /.concerts -->

                <div class="concerts concerts-two">
                    <div class="concert-details">
                        <img src="public/media/concerts/3.jpg" alt="Concerts">
                        <div class="content">
                            <h3>26-29 Augest 2018, ROMANIA</h3>
                            <h2>SPANISH GUITER SOLO IN ROMANIA</h2>
                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.concert-details -->

                    <div class="ticket">
                        <a href="#" class="tic-btn">Buy Ticket</a>
                        <a href="#" class="tic-btn tic-btn-bg">See Details</a>
                    </div>
                    <!-- /.ticket -->

                    <div class="concerts-count">
                        <div class="countdown" data-count-year="2020" data-count-month="11" data-count-day="30">

                        </div>
                        <!-- /.concerts-count -->
                    </div>
                </div>
                <!-- /.concerts -->

                <div class="concerts concerts-two">
                    <div class="concert-details">
                        <img src="public/media/concerts/4.jpg" alt="Concerts">
                        <div class="content">
                            <h3>26-29 June 2018, PARIS</h3>
                            <h2>METALIA CONCERT IN PARIS</h2>
                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.concert-details -->

                    <div class="ticket">
                        <a href="#" class="tic-btn">Buy Ticket</a>
                        <a href="#" class="tic-btn tic-btn-bg">See Details</a>
                    </div>
                    <!-- /.ticket -->

                    <div class="concerts-count">
                        <div class="countdown" data-count-year="2020" data-count-month="12" data-count-day="30">

                        </div>
                        <!-- /.concerts-count -->
                    </div>
                </div>
                <!-- /.concerts -->
            </div>
            <!-- /.concerts-wrapper -->
        </div>
        <!-- /.tim-container -->
    </section>
    <!-- /#upcoming-concerts -->

    <!--==============================-->
    <!--=        	Ticket         	 =-->
    <!--==============================-->
    <section id="ticket" class="parallax" data-speed="0.-3" data-height="700px" data-bg-image="public/media/background/2.jpg">
        <div class="tim-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="live-ticket">
                        <h2>
                            Metallia concert<br> get your live ticket
                        </h2>

                        <h4>COMING TO YOU LIVE NOVEMBER 27TH</h4>

                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered<br> alteration in some form, by injected humour, or randomised words which don't look even slightly<br> believable.
                        </p>

                        <div class="live-ticket-count">
                            <div class="countdown" data-count-year="2020" data-count-month="7" data-count-day="30">
                            </div>
                        </div>
                        <!-- /.live-ticket-count -->

                        <a href="#" class="tim-btn">Book Now</a>
                    </div>
                    <!-- /.live-ticket -->
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.tim-container -->
    </section>
    <!-- /#ticket -->

    <!--==================================-->
    <!--=        	Product         	 =-->
    <!--==================================-->
    <section id="product" class="section-padding site-main">
        <div class="tim-container">
            <div class="section-title text-center">
                <h2>Buy Your <span>Products</span></h2>
                <p>
                    There are many variations of passages of Lorem Ipsum available but the majority have suffered<br> alteration in some injected humour.
                </p>
            </div>
            <!-- /.section-title -->


            <div class="swiper-container woocommerce columns-4 row" data-swiper-config='{ "loop": true, "speed": 700, "autoplay": 3000, "slidesPerView": 4, "grabCursor": true,"breakpoints": { "1300": { "slidesPerView": 3 }, "767": { "slidesPerView": 2 }, "500": { "slidesPerView": 1 }}}'>
                <ul class="products product-two tim-product-view swiper-wrapper">
                    <li class="product product-two clearfix swiper-slide">
                        <div class="product-thumb">
                            <a href="shop-single.php"><img src="public/media/product/1.jpg" class="attachment-shop_catalog" alt="Product"></a>
                            <span class="new">New!</span>

                            <div class="product-details">
                                <a href="javascript:void(0);" class="btn-quickview trigger"><i class="tim-view"></i></a>
                                <a href="#" class="blr"><i class="tim-heart-outline"></i></a>
                                <a href="#"><i class="tim-shopping-cart-1"></i></a>
                            </div>
                        </div>

                        <div class="product-details-content">
                            <h2 class="woocommerce-loop-product__title">
                                <a href="#">Rocking Guitar</a>
                            </h2>

                            <span class="price">
							<ins>
								<span class="woocommerce-Price-amount amount">
									<span class="woocommerce-Price-currencySymbol">$</span> 600
								</span>
								</ins>
								</span>

                            <div class="product-description">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ratione unde, possimus aliquid ab minima optio, reprehenderit iusto, magnam recusandae obcaecati distinctio quis? Earum harum iste illo obcaecati laborum suscipit.Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Quos ratione unde, possimus aliquid ab minima optio, reprehenderit iusto, magnam recusandae obcaecati distinctio quis? Earum harum iste illo obcaecati laborum suscipit.
                                </p>

                                <a href="#" class="add_to_cart_button"><i class="tim-shopping-cart-1"></i> Add To Cart</a>
                            </div>
                            <!-- /.product-description -->
                        </div>
                        <!-- /.product-details-content -->
                    </li>

                    <li class="product product-two clearfix swiper-slide">
                        <div class="product-thumb">
                            <a href="shop-single.php"><img src="public/media/product/2.jpg" class="attachment-shop_catalog" alt="Product"></a>

                            <div class="product-details">
                                <a href="javascript:void(0);" class="btn-quickview trigger"><i class="tim-view"></i></a>
                                <a href="#" class="blr"><i class="tim-heart-outline"></i></a>
                                <a href="#"><i class="tim-shopping-cart-1"></i></a>
                            </div>
                        </div>
                        <div class="product-details-content">
                            <h2 class="woocommerce-loop-product__title">
                                <a href="shop-single.php">Drums & Percussion</a>
                            </h2>

                            <span class="price">
							<ins>
								<span class="woocommerce-Price-amount amount">
									<span class="woocommerce-Price-currencySymbol">$</span> 600
								</span>
								</ins>
								</span>

                            <div class="product-description">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ratione unde, possimus aliquid ab minima optio, reprehenderit iusto, magnam recusandae obcaecati distinctio quis? Earum harum iste illo obcaecati laborum suscipit.Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Quos ratione unde, possimus aliquid ab minima optio, reprehenderit iusto, magnam recusandae obcaecati distinctio quis? Earum harum iste illo obcaecati laborum suscipit.
                                </p>

                                <a href="#" class="add_to_cart_button"><i class="tim-shopping-cart-1"></i> Add To Cart</a>
                            </div>
                            <!-- /.product-description -->
                        </div>
                        <!-- /.product-details-content -->
                    </li>

                    <li class="product product-two clearfix swiper-slide">
                        <div class="product-thumb">
                            <a href="shop-single.php"><img src="public/media/product/3.jpg" class="attachment-shop_catalog" alt="Product"></a>

                            <div class="product-details">
                                <a href="javascript:void(0);" class="btn-quickview trigger"><i class="tim-view"></i></a>
                                <a href="#" class="blr"><i class="tim-heart-outline"></i></a>
                                <a href="#"><i class="tim-shopping-cart-1"></i></a>
                            </div>
                        </div>
                        <div class="product-details-content">
                            <h2 class="woocommerce-loop-product__title">
                                <a href="shop-single.php">Exclusive Headphones</a>
                            </h2>

                            <span class="price">
							<ins>
								<span class="woocommerce-Price-amount amount">
									<span class="woocommerce-Price-currencySymbol">$</span> 600
								</span>
								</ins>
								</span>

                            <div class="product-description">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ratione unde, possimus aliquid ab minima optio, reprehenderit iusto, magnam recusandae obcaecati distinctio quis? Earum harum iste illo obcaecati laborum suscipit.Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Quos ratione unde, possimus aliquid ab minima optio, reprehenderit iusto, magnam recusandae obcaecati distinctio quis? Earum harum iste illo obcaecati laborum suscipit.
                                </p>

                                <a href="#" class="add_to_cart_button"><i class="tim-shopping-cart-1"></i> Add To Cart</a>
                            </div>
                            <!-- /.product-description -->
                        </div>
                        <!-- /.product-details-content -->
                    </li>

                    <li class="product product-two clearfix swiper-slide">
                        <div class="product-thumb">
                            <a href="shop-single.php"><img src="public/media/product/4.jpg" class="attachment-shop_catalog" alt="Product"></a>
                            <span class="new sale">Sale!</span>
                            <div class="product-details">
                                <a href="javascript:void(0);" class="btn-quickview trigger"><i class="tim-view"></i></a>
                                <a href="#" class="blr"><i class="tim-heart-outline"></i></a>
                                <a href="#"><i class="tim-shopping-cart-1"></i></a>
                            </div>
                        </div>
                        <div class="product-details-content">
                            <h2 class="woocommerce-loop-product__title">
                                <a href="shop-single.php">Acoustic Guitar</a>
                            </h2>

                            <span class="price">
							<ins>
								<span class="woocommerce-Price-amount amount">
									<span class="woocommerce-Price-currencySymbol">$</span> 600
								</span>
								</ins>
								</span>

                            <div class="product-description">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ratione unde, possimus aliquid ab minima optio, reprehenderit iusto, magnam recusandae obcaecati distinctio quis? Earum harum iste illo obcaecati laborum suscipit.Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Quos ratione unde, possimus aliquid ab minima optio, reprehenderit iusto, magnam recusandae obcaecati distinctio quis? Earum harum iste illo obcaecati laborum suscipit.
                                </p>

                                <a href="#" class="add_to_cart_button"><i class="tim-shopping-cart-1"></i> Add To Cart</a>
                            </div>
                            <!-- /.product-description -->
                        </div>
                        <!-- /.product-details-content -->
                    </li>

                </ul>
            </div>
        </div>
        <!-- /.tim-container -->

        <!-- Quick View -->
        <!-- Quick View -->
        <div class="modal quickview-wrapper">
            <div class="quickview">
                <div class="quickview-content">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">

                            <div class="quickview-slider">
                                <div class="slider-for1">
                                    <div class="slick-slide">
                                        <img src="public/media/product/3.jpg" alt="Thumb">
                                    </div>
                                    <div class="slick-slide">
                                        <img src="public/media/product/4.jpg" alt="thumb">
                                    </div>
                                    <div class="slick-slide">
                                        <img src="public/media/product/5.jpg" alt="thumb">
                                    </div>
                                </div>

                                <div class="slider-nav1">
                                    <div class="slick-slide">
                                        <div class="slide-img">
                                            <img src="public/media/product/10.jpg" alt="Thumb">
                                        </div>
                                    </div>
                                    <div class="slick-slide">
                                        <img src="public/media/product/11.jpg" alt="thumb">
                                    </div>
                                    <div class="slick-slide">
                                        <img src="public/media/product/13.jpg" alt="thumb">
                                    </div>
                                </div>
                            </div>
                            <!-- /.quickview-slider -->
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-md-6 col-sm-6">
                            <div class="product-details">
									<span class="close-menu">
								<i class="tim-cross-out"></i>
							</span>
                                <h2 class="product-title">Exclusive Headphone</h2>

                                <p class="price">
                                    <ins>
									<span class="woocommerce-Price-amount amount">
										<span class="woocommerce-Price-currencySymbol">$</span>450
									</span>
                                    </ins>

                                    <del>
									<span class="woocommerce-Price-amount amount">
										<span class="woocommerce-Price-currencySymbol">$</span>680
									</span>
                                    </del>
                                </p>

                                <div class="woocommerce-product-details__short-description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum esse iusto neque reprehenderit rerum, et rem quos veritatis molestias.
                                    </p>
                                </div>

                                <div class="color-checkboxes">
                                    <h4>Choose Color:</h4>
                                    <input class="color-checkbox__input" type="radio" id="col-Blue" name="colour" />
                                    <label class="color-checkbox col-Blue-label" for="col-Blue"></label>
                                    <span></span>

                                    <input class="color-checkbox__input" type="radio" id="col-Green" value="#8bc34a" name="colour" />
                                    <label class="color-checkbox col-Green-label" for="col-Green"></label>
                                    <span></span>

                                    <input class="color-checkbox__input" type="radio" id="col-Yellow" value="#fdd835" name="colour" />
                                    <label class="color-checkbox col-Yellow-label" for="col-Yellow"></label>
                                    <span></span>

                                    <input class="color-checkbox__input" type="radio" id="col-Orange" value="#ff9800" name="colour" />
                                    <label class="color-checkbox col-Orange-label" for="col-Orange"></label>
                                    <span></span>

                                    <input class="color-checkbox__input" type="radio" id="col-Red" value="#f44336" name="colour" />
                                    <label class="color-checkbox col-Red-label" for="col-Red"></label>
                                    <span></span>
                                </div>

                                <div class="options__item">
                                    <h4 class="option-title">Size:</h4>

                                    <span>S</span>
                                    <span class="active">M</span>
                                    <span>L</span>
                                    <span>XL</span>
                                </div>

                                <form action="#" class="product-cart" method="post">

                                    <div class="quantity">
                                        <span class="minus"><i class="fa fa-minus"></i></span>
                                        <input name="quantity" value="1">
                                        <span class="plus"><i class="fa fa-plus"></i></span>
                                    </div>

                                    <button type="submit" name="add-to-cart" value="0" class="tim-cart-btn">
                                        <i class="fa fa-cart-plus"></i>Add to cart
                                    </button>
                                </form>

                                <div class="share-wrap">
                                    <h3>Share:</h3>
                                    <ul class="product-share-link">
                                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" class="pinterest-bg"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-5 -->
                    </div>
                    <!-- /.row -->

                </div>
            </div>
        </div>

    </section>
    <!-- /#product -->

    <!--======================================-->
    <!--=        	Intro Video         	 =-->
    <!--======================================-->
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

    <!--==============================-->
    <!--=        	Lesson         	 =-->
    <!--==============================-->
    <section id="lesson">
        <div class="tim-container">
            <div class="section-title text-center">
                <h2>weekly top lesson <span>Started</span></h2>
                <p>
                    There are many variations of passages of Lorem Ipsum available but the majority have suffered<br> alteration in some injected humour.
                </p>
            </div>
            <!-- /.section-title -->

            <div class="lesson d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-full-width">
                            <div class="lesson-box">
                                <img src="public/media/lesson/1.jpg" alt="lesson">
                                <i class="tim-guitar"></i>
                                <div class="content">
                                    <h3><a href="#">Guiter</a></h3>
                                    <p>Mominul Islam</p>
                                </div>
                            </div>
                            <!-- /.lesson-box -->
                        </div>
                        <!-- /.col-xl-3 col-lg-4 col-md-6 col-sm-6 col-full-width -->

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-full-width">
                            <div class="lesson-box">
                                <img src="public/media/lesson/2.jpg" alt="lesson">
                                <i class="tim-drum-set-cartoon-variant"></i>

                                <div class="content">
                                    <h3><a href="#">Drum</a></h3>
                                    <p>Mominul Islam</p>
                                </div>
                            </div>
                            <!-- /.lesson-box -->
                        </div>
                        <!-- /.col-xl-3 col-lg-4 col-md-6 col-sm-6 col-full-width -->

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-full-width">
                            <div class="lesson-box">
                                <img src="public/media/lesson/3.jpg" alt="lesson">
                                <i class="tim-piano-keys"></i>

                                <div class="content">
                                    <h3><a href="#">Piano</a></h3>
                                    <p>Mominul Islam</p>
                                </div>
                            </div>
                            <!-- /.lesson-box -->
                        </div>
                        <!-- /.col-xl-3 col-lg-4 col-md-6 col-sm-6 col-full-width -->

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-full-width">
                            <div class="lesson-box">
                                <img src="public/media/lesson/4.jpg" alt="lesson">
                                <i class="tim-woofer-speaker"></i>

                                <div class="content">
                                    <h3><a href="#">Bass</a></h3>
                                    <p>Mominul Islam</p>
                                </div>
                            </div>
                            <!-- /.lesson-box -->
                        </div>
                        <!-- /.col-xl-3 col-lg-4 col-md-6 col-sm-6 col-full-width -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.lesson d-flex justify-content-center -->
        </div>
        <!-- /.tim-container -->
    </section>
    <!-- /#lesson -->

    <!--==================================-->
    <!--=        	Blog Grid         	 =-->
    <!--==================================-->
    <section id="blog-grid" class="section-padding">
        <div class="tim-container">
            <div class="section-title text-center">
                <h2>Latest News Update</h2>
                <p>
                    There are many variations of passages of Lorem Ipsum available but the majority have suffered<br> alteration in some injected humour.
                </p>
            </div>
            <!-- /.section-title -->

            <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <article class="blog-post-grid">

                        <div class="feature-image">
                            <a href="blog-single.php">
                                <img src="public/media/blog/1.jpg" alt="thumb">
                            </a>
                        </div>

                        <div class="entry-content">

                            <header class="entry-header">
                                <h2 class="alpha entry-title"><a href="blog-single.php">Fusion make you happy.</a></h2>
                            </header>
                            <!-- .entry-header -->

                            <p>
                                There are many variations of passages of Lorem Ipsum available, but te maity the have suffered alterat.
                            </p>

                            <a href="blog-single.php" class="read-btn">Read More</a>
                        </div>
                        <!-- .entry-content -->
                        <aside class="entry-meta">
                            <a href="#" class="author">	<span>By</span> John Smith</a>

                            <a href="#" class="comments">
                                <i class="fa fa-comments-o"></i>
                                34
                            </a>

                        </aside>

                    </article>
                </div>
                <!-- /.col-xl-3 col-lg-4 col-sm-6 -->

                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <article class="blog-post-grid">

                        <div class="feature-image">
                            <a href="blog-single.php">
                                <img src="public/media/blog/2.jpg" alt="thumb">
                            </a>
                        </div>


                        <div class="entry-content">

                            <header class="entry-header">
                                <h2 class="alpha entry-title"><a href="blog-single.php">Makes you rythem of life.</a></h2>
                            </header>
                            <!-- .entry-header -->

                            <p>
                                There are many variations of passages of Lorem Ipsum available, but te maity the have suffered alterat.
                            </p>

                            <a href="blog-single.php" class="read-btn">Read More</a>
                        </div>
                        <!-- .entry-content -->
                        <aside class="entry-meta">
                            <a href="#" class="author">	<span>By</span> John Smith</a>

                            <a href="#" class="comments">
                                <i class="fa fa-comments-o"></i>
                                34
                            </a>

                        </aside>

                    </article>
                </div>
                <!-- /.col-xl-3 col-lg-4 col-sm-6 -->

                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <article class="blog-post-grid">

                        <div class="feature-image">
                            <a href="blog-single.php">
                                <img src="public/media/blog/3.jpg" alt="thumb">
                            </a>
                        </div>

                        <div class="entry-content">

                            <header class="entry-header">
                                <h2 class="alpha entry-title"><a href="blog-single.php">Rockee Make the Rock.</a></h2>
                            </header>
                            <!-- .entry-header -->

                            <p>
                                There are many variations of passages of Lorem Ipsum available, but te maity the have suffered alterat.
                            </p>

                            <a href="blog-single.php" class="read-btn">Read More</a>
                        </div>
                        <!-- .entry-content -->
                        <aside class="entry-meta">
                            <a href="#" class="author">	<span>By</span> John Smith</a>

                            <a href="#" class="comments">
                                <i class="fa fa-comments-o"></i>
                                34
                            </a>

                        </aside>

                    </article>
                </div>
                <!-- /.col-xl-3 col-lg-4 col-sm-6 -->

                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <article class="blog-post-grid">

                        <div class="feature-image">
                            <a href="#">
                                <img src="public/media/blog/4.jpg" alt="thumb">
                            </a>
                        </div>

                        <div class="entry-content">

                            <header class="entry-header">
                                <h2 class="alpha entry-title"><a href="blog-single.php">Makes you rythem of life.</a></h2>
                            </header>
                            <!-- .entry-header -->

                            <p>
                                There are many variations of passages of Lorem Ipsum available, but te maity the have suffered alterat.
                            </p>

                            <a href="blog-single.php" class="read-btn">Read More</a>
                        </div>
                        <!-- .entry-content -->
                        <aside class="entry-meta">
                            <a href="#" class="author">	<span>By</span> John Smith</a>

                            <a href="#" class="comments">
                                <i class="fa fa-comments-o"></i>
                                34
                            </a>

                        </aside>

                    </article>
                </div>
                <!-- /.col-xl-3 col-lg-4 col-sm-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.tim-container -->
    </section>
    <!-- /#blog-grid -->

    <!--======================================-->
    <!--=        	Logo Carousel         	 =-->
    <!--======================================-->
    <section id="logo-carousel">
        <div class="tim-container">
            <div class="swiper-container tim-logo-carousel" data-swiper-config='{"loop": true, "speed": 700, "spaceBetween": 50, "autoplay": 3000, "pagination":"#brand-swiper-pagination", "slidesPerView": 5, "grabCursor": true, "paginationClickable": true, "breakpoints": { "1024": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 }, "500": { "slidesPerView": 2 }}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-logo">
                            <img src="public/media/logo/1.png" alt="Brand Logo">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brand-logo">
                            <img src="public/media/logo/2.png" alt="Brand Logo">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brand-logo">
                            <img src="public/media/logo/3.png" alt="Brand Logo">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="brand-logo">
                            <img src="public/media/logo/4.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-logo">
                            <img src="public/media/logo/5.png" alt="Brand Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.tim-container -->
    </section>
    <!-- /#logo-carousel -->

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
<!--<script src='../../../cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>-->
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


<!--<a href='https://www.freepik.com/photos/background'>Background photo created by pvproductions - www.freepik.com</a>-->
<!--<a href='https://www.freepik.com/photos/music'>Music photo created by wirestock - www.freepik.com</a>-->