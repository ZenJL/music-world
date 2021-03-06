<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;" />
        <span class="brand-text font-weight-light">Music World</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION["login"]["email"] ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Member
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?module=user&action=index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List-member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?module=user&action=create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add-member</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Music-Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?module=category&action=index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List-category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?module=category&action=create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add-category</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            Artist
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?module=artist&action=index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List artists</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?module=artist&action=create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add artist</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            Album
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?module=album&action=index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List album</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?module=album&action=create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add album</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            Song
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?module=song&action=index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List songs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?module=song&action=create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add song</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            Event
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?module=event&action=index" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List events</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?module=event&action=create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add event</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
