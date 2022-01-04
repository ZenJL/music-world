<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Music World</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/app.css" />
</head>
<body>
<div id="intro">
    <h1>Log In</h1>

</div>
<form class="needs-validation" action="checkLogIn.php" method="POST">
    <?php
    if (isset($_GET["msg"]) && $_GET["msg"] == 'fail') {
        echo "<script type='text/javascript'>alert('Wrong Username / Password or Account does not exist');</script>";
    }
    ?>
    <div class="form-group col-md-4" >
        <label for="UsernameInput">Enter email: </label>
        <input type="email" class="form-control" name="UsernameInput" id="UsernameInput" required>
    </div>
    <br>
    <div class="form-group col-md-4">
        <label for="PasswordInput">Password: </label>
        <input type="text" class="form-control" name="PasswordInput" id="PasswordInput" required>

    </div>
    <div class="form-group col-md-4 customLink">
        <a href="register.php" class="link-primary"> Register for an account here</a>
    </div>
    <div class="col-md-12 text-center">
        <input class="btn btn-primary btn-lg customSubmit" type="submit" name="submit" value="Log In">
    </div>

</form>

</body>
</html>