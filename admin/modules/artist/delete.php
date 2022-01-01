<?php 
if (!isset($_GET["id"])) {
    header("location:index.php?module=artist&action=index");
    exit();
} else {
    $id = $_GET["id"];
    
    if (!check_artist_id ($conn,$id)) {
        header("location:index.php?module=artist&action=index");
        exit();
    }

    $artist = get_artist ($conn,$id);

    if (file_exists('../public/upload/'.$artist["image"])) {
        unlink('../public/upload/'.$artist["image"]);
    }
    
    delete_artist ($conn,$id);

    header("location:index.php?module=artist&action=index");
    exit();
}
?>