<?php

if (!isset($_GET["id"])) {
    header("location: index.php?module=user&action=index");
    exit();
} else {
    $id = $_GET["id"];

    if (!check_user_id($conn, $id)) {
        header("location: index.php?module=user&action=index");
        exit();
    }
    $user = get_user($conn, $id);
    if(($_GET["id"] == 1) || ($_SESSION["login"]["id"] != 1 && $user["level"] == 1)) {

    }

    delete_user($conn, $id);

    header("location: index.php?module=category&action=index");
    exit();
}

?>

