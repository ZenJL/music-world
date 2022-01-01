<?php
session_start();
ob_start();

    include ('config.php');
    include ('libs/connect.php');
    include ('libs/functions.php');
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


    <!--=============================-->
    <!--=        Main content        =-->
    <!--=============================-->

    <?php
    // check module
    if (isset($_GET["module"])):
        $module = $_GET["module"];
        // check action

        // check correct module & action
        if (file_exists("modules/$module.php")):
            // include UI of each action in each module
            include ("modules/$module.php");
        else:
            header('location: modules/home.php');
            exit();
        endif;


    else:
        include('modules/home.php');
    endif;
    ?>

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