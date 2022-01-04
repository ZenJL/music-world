<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header("location:../../index.php");
    exit;
}
session_start();
unset($_SESSION["user"]);
unset($_SESSION["password"]);
header("location:../../index.php");
?>