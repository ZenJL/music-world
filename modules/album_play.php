<?php
// check module
if (isset($_GET["id"])):
    $albumid2 = $_GET["id"];

else:
    header('location: index.php');
endif;
?>
<!--============================-->
<!--=        	Banner         =-->
<!--============================-->

<section class="page-header" data-bg-image="public/media/background/8.jpg">
    <div class="tim-container">
        <div class="page-header-title text-center">
            <h3>Product List</h3>
            <h2>& Album</h2>
        </div>

        <div class="breadcrumbs">
            <a href="#">Home</a>
            <span>/</span>
            <span>Album</span>
        </div>

    </div>
    <!-- /.tim-container -->
</section>
<!-- /#page-header -->

<!--==================================-->
<!--=        	Tabs Single          =-->
<!--==================================-->
<?php $albums = get_all_album($conn);
$cats = get_all_category($conn);
$artists = get_all_artist($conn)?>

<section class="section-padding album-info-wrapper">
    <div class="container">
        <div class="row single-album-info">

            <div class="col-md-6 padding-remove">
                <div class="single-album-image">
                    <img src="public/media/album/17.jpg" alt="">
                </div>
            </div>
            <!-- /.col-lg-6 -->

            <div class="col-md-6 padding-remove">
                <div class="single-album-details">
                    <div class="details-top">
                        <h1><?php echo $albums[$albumid2-1]["album_name"]?></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>

                    <ul>
                        <li>Type <span>Album</span></li>
                        <li>Artist<span><?php echo $artists[$albums[$albumid2-1]["id_artist"]-1]["artist_name"];?></span></li>
                        <li>Release Day <span><?php echo $albums[$albumid2-1]["album_date"];?></span></li>
                        <li>Genre <span><?php echo $cats[$albums[$albumid2-1]["category_id"]-1]["name"];?></span></li>
                    </ul>

                    <div class="single-album-description">
                        <h6>Album Description</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>

                </div>
            </div>
            <!-- /.col-lg-6 -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.tim-container-two -->
</section>
<!-- /.album-info  -->


<section class="single-album-player section-padding">
    <div class="container">
        <div class="row">
            <div class="header_player">
                <!-- Audio Player -->
                <div class="player-container">
                    <div class="current-tracks">
                        <div id="main_player" class="jp-jplayer"><audio id="jp_audio_0" preload="metadata" src="http://localhost:4726/public/media/audio/happy_life.mp3" title="Happy Life"></audio></div>
                        <div id="nowPlaying">
                            <h3 class="track-name">Happy Life</h3>
                            <span class="artist-name">Derwood Spinks</span>
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
                                        <li class="jp-playlist-current">
                                            <div><a href="javascript:;" class="jp-playlist-item-remove">×</a><a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">Happy Life 02 sdfsf<span class="jp-artist">by Derwood Spinks</span></a></div>
                                        </li>

                                        <li>
                                            <div><a href="javascript:;" class="jp-playlist-item-remove">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">King Magici zsadf sdf ans 03<span class="jp-artist">by Dan Mustaine</span></a></div>
                                        </li>

                                        <li>
                                            <div><a href="javascript:;" class="jp-playlist-item-remove">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Leavi sdafsdfng it Behind 02<span class="jp-artist">by RZ Project</span></a></div>
                                        </li>

                                        <li>
                                            <div><a href="javascript:;" class="jp-playlist-item-remove">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">Bloodborne <span class="jp-artist">by Chestersdf sadf  Ray Banton</span></a></div>
                                        </li>

                                        <li>
                                            <div><a href="javascript:;" class="jp-playlist-item-remove">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">When Spells <span class="jp-artist">by Dan Mustaine</span></a></div>
                                        </li>

                                        <li>
                                            <div><a href="javascript:;" class="jp-playlist-item-remove">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">When Spells <span class="jp-artist">by Derwoafa afod Spinks</span></a></div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container  -->
</section>
<!-- /.single-album-player  -->


<section class="related-album-single">
    <div class="container">
        <div class="section-title">
            <h2>RELATED <span>ALBUM</span></h2>
        </div>
        <div class="swiper-container  columns-4 row" data-swiper-config='{ "loop": true, "speed": 700, "autoplay": false, "slidesPerView": 5, "grabCursor": true,"breakpoints": { "1190": { "slidesPerView": 4 }, "900": { "slidesPerView": 3 }, "700": { "slidesPerView": 2 }, "500": { "slidesPerView": 1 }}}'>


            <ul class=" swiper-wrapper related-album-wrapper">


                <li class=" clearfix swiper-slide ">
                    <div class="single-related-album">
                        <a href="#">
                    <img src="public/media/album/ra1.jpg" alt="">
                </a>
                        <div class="single-related-prod-bottom">
                            <div class="left">
                                <a href="#">Funny Litle World</a>
                                <p>6 Tracks</p>
                            </div>
                            <a href="#" class="play-bottom"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </li>

                <li class=" clearfix swiper-slide ">
                    <div class="single-related-album">
                        <a href="#">
                    <img src="public/media/album/ra1.jpg" alt="">
                </a>
                        <div class="single-related-prod-bottom">
                            <div class="left">
                                <a href="#">Funny Litle World</a>
                                <p>6 Tracks</p>
                            </div>

                            <a href="#" class="play-bottom"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </li>

                <li class=" clearfix swiper-slide ">
                    <div class="single-related-album">
                        <a href="#">
                    <img src="public/media/album/ra2.jpg" alt="">
                </a>
                        <div class="single-related-prod-bottom">
                            <div class="left">
                                <a href="#">Funny Litle World</a>
                                <p>6 Tracks</p>
                            </div>

                            <a href="#" class="play-bottom"><i class="fa fa-play"></i></a>

                        </div>
                    </div>

                </li>

                <li class=" clearfix swiper-slide ">
                    <div class="single-related-album">
                        <a href="#">
                    <img src="public/media/album/ra3.jpg" alt="">
                </a>
                        <div class="single-related-prod-bottom">
                            <div class="left">
                                <a href="#">Funny Litle World</a>
                                <p>6 Tracks</p>
                            </div>

                            <a href="#" class="play-bottom"><i class="fa fa-play"></i></a>

                        </div>
                    </div>

                </li>

                <li class=" clearfix swiper-slide ">
                    <div class="single-related-album">
                        <a href="#">
                    <img src="public/media/album/ra4.jpg" alt="">
                </a>
                        <div class="single-related-prod-bottom">
                            <div class="left">
                                <a href="#">Funny Litle World</a>
                                <p>6 Tracks</p>
                            </div>

                            <a href="#" class="play-bottom"><i class="fa fa-play"></i></a>

                        </div>
                    </div>

                </li>


            </ul>
        </div>
    </div>
    <!-- /.container  -->
</section>
<!-- /.related-album-single  -->

<!--=================================-->
<!--=        	Logo Carousel       =-->
<!--=================================-->
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
