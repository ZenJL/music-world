<header class="header">
    <div class="top-header">
        <div class="tim-container clearfix">
            <ul class="site-social-link">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <!-- /.site-social-link -->

            <ul class="user-login float-right">
                <li><a href="#">Sign Up</a></li>
                <li><a href="admin/login.php">Sign In</a></li>
            </ul>
        </div>
        <!-- /.tim-container -->
    </div>
    <!-- /.top-header -->

    <div class="header-inner">
        <div class="tim-container clearfix">
            <div id="site-logo" class="float-left">
                <a href="index.php" class="logo-main">
                    <img src="public/image/logo.png" alt="logo">
                </a>

                <a href="index.php" class="logo-stickky">
                    <img src="public/image/logo-sticky.png" alt="logo">
                </a>
            </div>

            <div class="nav float-right">

                <ul id="main-header-menu">
                    <li class="menu-item-has-children">
                        <a href="index.php">Home</a>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="index.php?module=artist">Artist</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="index.php?module=category">category</a>
                        <ul class="sub-menu">
                            <li><a href="index.php?module=category&typeid=jazz">Jazz</a></li>
                            <li><a href="index.php?module=category&typeid=rap">Rap</a></li>
                            <li><a href="index.php?module=category&typeid=rock">Rock</a></li>
                            <li><a href="index.php?module=category&typeid=pop">Pop</a></li>
                            <li><a href="index.php?module=category&typeid=classical">Classical</a></li>
                        </ul>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="index.php?module=event">Events&nbsp</a>
                    </li>

                </ul>
                <ul>
                    <li>
                        <form action="" method="GET">
                            <div class="form-row">
                                <input class="form-control mr-sm-2 mt-4" style="width:200px" type="search"  name="search" id="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-light mr-sm-2 mt-4" style="width:80px" type="submit">Search</button>
                            </div>
                        </form>
                    </li>
                </ul>


            </div>



            <!-- /.nav -->
        </div>
        <!-- /.tim-container -->
    </div>
    <!-- /.header-inner -->
</header>