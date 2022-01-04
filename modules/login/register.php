<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header("location:../../index.php");
    exit;
}
session_start();
if(count($_POST)>0) {

    $user_name = $_POST['UsernameInput'];
    $password = $_POST['PasswordInput'];
    $level = 1;

    $db = new mysqli("localhost", "superuser", "denho123", "music_world");
    if ($db->connect_errno) {
        return 'Failed to connect to Database: (' . $db>connect_errno . ') ' . $db->connect_error;
    }
    $query1 = "INSERT INTO user(email, password, level) VALUES (?, ?, ?)";
    $stmt = $db->prepare($query1);
    $stmt->bind_param("ssi", $user_name, $password, $level);
    if (!$stmt->execute()) {
        $errormsg = $stmt->error;
        $db->close();
        echo $errormsg;
    }elseif($stmt->affected_rows>0){
        $_SESSION['user'] = $user_name;
        $_SESSION['password'] = $password;
        $db->close();
        header("location:../../index.php");
    }
}
?>

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
    <h1>Register Account</h1>

</div>
<form action="" method="POST">
    <?php
    if (isset($_GET["msg"]) && $_GET["msg"] == 'fail') {
        echo "<script type='text/javascript'>alert('Wrong Username / Password or Account does not exist');</script>";
    }
    ?>
    <div class="form-group col-md-4" >
        <label for="UsernameInput">Register email: </label>
        <input type="email" class="form-control" name="UsernameInput" id="UsernameInput" required>
    </div>
    <br>
    <div class="form-group col-md-4">
        <label for="PasswordInput">Register password: </label>
        <input class="form-control" name="PasswordInput" id="PasswordInput" required>
    </div>
    <div class="col-md-12 text-center">
        <input class="btn btn-primary btn-lg customSubmit" type="submit" name="submit" value="Register and Log in">
    </div>

</form>

</body>
</html>