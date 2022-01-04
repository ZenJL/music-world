<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:login.php');
    exit;
}
session_start();

if (!isset($_SESSION['user'])) {

    $user_name = $_POST['UsernameInput'];
    $password = $_POST['PasswordInput'];

    $db = new mysqli("localhost", "superuser", "denho123", "music_world");
    if ($db->connect_errno) {
        return 'Failed to connect to Database: (' . $db->connect_errno . ') ' . $db->connect_error;
    }
    $query = "SELECT * FROM user";
    $userData = $db->query($query);
    $userList = mysqli_fetch_all($userData);

    foreach($userList as $users)
    {
        if ($users[1] == $user_name && $users[2] == $password) {
            $_SESSION['user'] = $user_name;
            $_SESSION['password'] = $password;
            header("location:../../index.php");
            $db->close();
        }
    }
    if (!isset($_SESSION['user'])){
        header("location:login.php?msg=fail");
        $db->close();
    }

}
else{
    header("location:../../index.php");
    $db->close();
}
?>
