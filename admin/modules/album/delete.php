<?php 
if (!isset($_GET["id"])) {
    header("location:index.php?module=album&action=index");
    exit();
} else {
    $id = $_GET["id"];
    
    if (!check_album_id ($conn,$id)) {
        header("location:index.php?module=album&action=index");
        exit();
    }

    $album = get_album ($conn,$id);

    if (file_exists('../public/upload/'.$album["album_image"])) {
        unlink('../public/upload/'.$album["album_image"]);
    }
    
    delete_album ($conn,$id);

    header("location:index.php?module=album&action=index");
    exit();
}
?>