<!--============================-->
<!--=        	Banner         =-->
<!--============================-->

<section class="page-header" data-bg-image="public/media/background/8.jpg">
    <div class="tim-container">
        <div class="page-header-title text-center">
            <h2>CATEGORY</h2>
        </div>

        <div class="breadcrumbs">
            <a href="index.php">Home</a>
            <span>/</span>
            <span>CATEGORY</span>
        </div>

    </div>
    <!-- /.tim-container -->
</section>
<!-- /#page-header -->

<!--===========================-->
<!--=        	About         =-->
<!--===========================-->
<?php
$artists = get_all_artist($conn);
$albums = get_all_album($conn);
$instruments = get_all_instrument($conn);
$events = get_all_event($conn);
$instrumentcats = get_all_music_category_instrument($conn);
$typeid = NULL;
if ($_GET["typeid"] == "jazz"):
    $typeid = 2;
elseif ($_GET["typeid"] == "pop"):
    $typeid = 1;
elseif ($_GET["typeid"] == "classical"):
    $typeid = 10;
elseif ($_GET["typeid"] == "rap"):
    $typeid = 9;
elseif ($_GET["typeid"] == "rock"):
    $typeid = 11;
endif;
echo $typeid;
?>
<section id="album">
    <div class="tim-container d-flex justify-content-center">
        <div class="col-xl-12">

            <h1>Album</h1>

            <div class="tim-isotope tim-isotope-1 wow fadeInUp" data-wow-delay="0.8s">
                <ul class="tim-filter-items tim-album-items grid">
                    <li class="grid-sizer"></li>

                    <!--                    Card contents-->
                    <?php foreach($albums as $album){
                        if($album['category_id'] == $typeid) {?>

                            <li class="tim-album-item grid-item">
                                <div class="tim-isotope-grid__img effect-active">
                                    <img src="public/upload/<?php echo $album["album_image"];?>" alt="album thumb" />
                                </div>
                                <div class="album_details_wrap">
                                    <div class="album-info">
                                        <a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
                                        <h4 class="album-title"><?php echo $album["album_name"]; ?></h4>
                                        <h5 class="artist-name">By <?php echo $artists[$album["id_artist"]-1]["artist_name"];?></h5>
                                        <a href="index.php?module=album_play&id=<?php echo $album['id_album'];?>" class="tim-btn tim-btn-bgt">Play Now</a>
                                    </div>
                                </div>
                            </li>
                        <?php }} ?>

                    <!--                    End card content-->


                </ul><br>
                <h1>Artists</h1>
                <div class="tim-isotope tim-isotope-1 wow fadeInUp" data-wow-delay="0.8s">
                    <ul class="tim-filter-items tim-album-items grid">
                        <li class="grid-sizer"></li>
                        <?php foreach($artists as $artist){
                            if($artist['category_id'] == $typeid){?>
                                <li class="tim-album-item grid-item">
                                    <div class="tim-isotope-grid__img effect-active">
                                        <img src="public/media/album/justinbieber.jpg" alt="album thumb" />
                                    </div>
                                    <div class="album_details_wrap">
                                        <div class="album-info">
                                            <a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
                                            <h4 class="album-title"><?php echo $artist["artist_name"]; ?></h4>
                                            <a href="index.php?module=artist" class="tim-btn tim-btn-bgt">Find out more</a>
                                        </div>
                                    </div>
                                </li>
                            <?php }} ?>
                    </ul>
                </div><br>


                <h1>Instruments</h1>
                <div class="tim-isotope tim-isotope-1 wow fadeInUp" data-wow-delay="0.8s">
                    <ul class="tim-filter-items tim-album-items grid">
                        <li class="grid-sizer"></li>
                        <?php foreach($instrumentcats as $instrumentcat){
                            if($instrumentcat["category_id"] == $typeid){?>
                                <li class="tim-album-item grid-item">
                                    <div class="tim-isotope-grid__img effect-active">
                                        <img src="public/media/album/saxophone.jpg" alt="album thumb" />
                                    </div>
                                    <div class="album_details_wrap">
                                        <div class="album-info">
                                            <a class="popup-modal" href="public/media/album/1.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
                                            <h4 class="album-title"><?php echo $instruments[$instrumentcat["id_instrument"]-1]["instrument_name"]; ?></h4>
                                        </div>
                                    </div>
                                </li>
                            <?php }} ?>
                    </ul>
                </div><br>


                <h1>Events</h1>
                <div class="tim-isotope tim-isotope-1 wow fadeInUp" data-wow-delay="0.8s">
                    <ul class="tim-filter-items tim-album-items grid">
                        <li class="grid-sizer"></li>
                        <?php foreach($events as $event){
                            if($event['category_id'] == $typeid){?>
                                <li class="tim-album-item grid-item">
                                    <div class="tim-isotope-grid__img effect-active">
                                        <img src="public/media/album/event.jpg" alt="album thumb" />
                                    </div>
                                    <div class="album_details_wrap">
                                        <div class="album-info">
                                            <a class="popup-modal" href="public/media/album/event.jpg"><i class="iconsmind-Magnifi-Glass"></i></a>
                                            <h4 class="album-title"><?php echo $event["event_name"]; ?></h4>
                                            <h5 class="artist-name">Datetime: <?php echo $event["event_date"];?></h5>
                                            <a href="index.php?module=event" class="tim-btn tim-btn-bgt">Find out more</a>
                                        </div>
                                    </div>
                                </li>
                            <?php }} ?>
                    </ul>
                </div>


            </div>
        </div>
        <!-- /.tim-container -->
</section>
<!-- /#album -->
