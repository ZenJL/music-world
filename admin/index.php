<?php
session_start();
ob_start();

if(($_SESSION["login"]["level"]) != 1 ) {
    header("location:login.php");
    exit();
}

include ('../config.php');
include ('../libs/connect.php');    // $conn here
include ('../libs/functions.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('blocks/head.php');?>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <?php include ('blocks/navbar.php');?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include ('blocks/aside.php');?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php include ('blocks/content-header.php');?>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->

            <?php
                // check module
                if (isset($_GET["module"])):
                    $module = $_GET["module"];
                    // check action
                    $action = null;
                    if (isset($_GET["action"])):
                        $action = $_GET["action"];
                    else:
                        $action = "index";
                    endif;

                    // check correct module & action
                    if (file_exists("modules/$module/$action.php")):
                        // include file write query
                        include ("model/$module.php");
                        // include UI of each action in each module
                        include ("modules/$module/$action.php");
                    else:
                        header('location: error.php');
                        exit();
                    endif;


                else:
                    include ('modules/dashboard/index.php');
                endif;
            ?>

            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include ('blocks/footer.php');?>

    <!-- Control Sidebar -->
    <?php include ('blocks/control-sidebar.php');?>

    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php include ('blocks/foot.php');?>

</body>
</html>

