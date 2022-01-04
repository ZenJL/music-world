<!--============================-->
<!--=        	Banner         =-->
<!--============================-->
<section class="page-header" data-bg-image="public/media/background/7.jpg">
    <div class="tim-container">
        <div class="page-header-title text-center">
            <h3>ALBUM</h3>
            <h2>REVIEWS</h2>
        </div>

        <div class="breadcrumbs">
            <a href="index.php">Home</a>
            <span>/</span>
            <span>REVIEW</span>
        </div>

    </div>
    <!-- /.tim-container -->
</section>
<!-- /#page-header -->
<?php
$artists = get_all_artist($conn);
$albums = get_all_album($conn);
$cats = get_all_category($conn);
?>
<!--===========================-->
<!--=        	Tabs          =-->
<!--===========================-->
<section id="music-tabs" class="section-padding">
    <div class="container">
        <div class="tab-filter-wraper">

            <div class="tab-details">
                <ul class="details">
                    <li>Album name</li>
                    <li>Album Title</li>
                    <li>Genre</li>
                    <li>Rating</li>
                    <li>Published</li>
                    <li>Album download count</li>
                </ul>
            </div>
            <!-- /.tab-details -->

            <div class="tim-isotope tim-isotope-3">
                <ul class="tim-filter-items tabs-filter grid">
                    <li class="grid-sizer"></li>
                    <?php foreach($albums as $album){?>
                    <li class="tim-songs-items grid-item">
                        <ul class="songs-details">
                            <li><?php echo $artists[$album['id_artist']-1]['artist_name'] ?></a></li>
                            <li><?php echo  $album["album_name"];?></li>
                            <li><?php echo $cats[$album["category_id"]-1]["name"];?></li>
                            <li>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-o"></span>
                                <span class="fa fa-star-o"></span>
                            </li>
                            <li><?php echo $album["album_date"]?></li>
                            <li><i class="fa fa-eye"></i><?php echo $album["album_download_count"]?></li>
                        </ul>
                    </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
        <!-- /.tab-filter-wraper -->

        <nav class="posts-navigation text-center clearfix">
            <ul>
                <li><a href="#">Next</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">Previous</a></li>
            </ul>
        </nav>
    </div>
    <!-- /.tim-container -->
</section>
<!-- /#music-tabs -->
