<!--=============================-->
<!--=        Mobile Nav         =-->
<!--=============================-->
<header id="mobile-nav-wrap">
    <div class="mob-header-inner d-flex justify-content-between">
        <div id="mobile-logo" class="d-flex justify-content-start">
            <a href="index.php"><img src="public/image/logo.png" alt="Site Logo"></a>
        </div>

        <ul class="user-link nav justify-content-end">
            <li><a href="admin/login.php"><i class="fa fa-user"></i>Login</a></li>
            <!--                <li><a href="#"><i class="fa fa-sign-in"></i>Sign Up</a></li>-->
        </ul>

        <div id="nav-toggle" class="nav-toggle hidden-md">
            <div class="toggle-inner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /.mob-header-inner -->
</header>
<!-- /#mobile-header -->

<div class="mobile-menu-inner">

    <div class="mobile-nav-top-wrap">
        <div class="mob-header-inner clearfix">
            <div class="d-flex justify-content-start mobile-logo">
                <a href="index.php">
                    <img src="public/image/logo-dark.png" alt="Site Logo">
                </a>
            </div>

            <div class="close-menu">
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
        <!-- /.mob-header-inner -->

        <div class="close-menu">
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
    <!-- /.mobile-nav-top-wrap -->

    <nav id="accordian">
        <ul class="accordion-menu">
            <li>
                <a href="index.php" class="dropdownlink">Home</a>
            </li>
            <li>
                <a href="#0" class="dropdownlink">Artist</a>

            </li>
            <li>
                <a href="album.php" data-filter=".branding">AAlbum</a>
            </li>
            <li>
                <a href="#0" class="dropdownlink">Events</a>
                <ul class="submenuItems">
                    <li><a href="event.php">Events</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </li>
            <li>
                <a href="tabs.php">Tabs</a>

            </li>
            <li>
                <a href="#0" class="dropdownlink">Blog</a>
                <ul class="submenuItems">
                    <li><a href="blog-list-right.php">Blog Standard</a></li>
                    <li><a href="blog-grid-right.php">Blog Grid</a></li>
                    <li><a href="blog-single.php">Blog Single</a></li>
                </ul>
            </li>

            <li>
                <a href="gallery.php">Gallery</a>
            </li>
            <li>
                <a href="#0" class="dropdownlink">Shop</a>
                <ul class="submenuItems">
                    <li><a href="shop-right.php">Shop Right</a></li>
                    <li><a href="shop-left.php">Shop Left</a></li>
                    <li><a href="shop-single.php">Shop Details</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<!-- /.mobile-menu-inner -->


