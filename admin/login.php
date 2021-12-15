<?php
ob_start();
include "../config.php";
include "../libs/connect.php";
include "../libs/functions.php";

if(isset($_POST["login"])) {
    if (empty($_POST["email"])) {
        $errors[] = "Please enter your email";
    } elseif(empty($_POST["password"])) {
        $errors[] = "Please enter your password";
    } elseif (empty($errors)){
        $data = array(
            "email" => $_POST["email"],
            "password" => md5($_POST["password"]),
            "level" => 1
        );
        $result = login($conn, $data);

        if($result){
            $data = get_user($conn, $data);
            $_SESSION["login"]["id"] = $data["id"];
            $_SESSION["login"]["email"] = $data["email"];
            $_SESSION["login"]["level"] = $data["level"];
            header("location:index.php");
            exit();
        } else{
            $errors[]= "User does not exist";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><strong>SUM ACADEMY</strong>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in</p>
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> Error!</h5>
                <ul>
                    <!-- show error -->
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
      </form>


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/dist/js/adminlte.min.js"></script>
</body>
</html>
