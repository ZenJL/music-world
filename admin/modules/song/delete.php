<?php 
if (!isset($_GET["id"])) {
    header("location:index.php?module=song&action=index");
    exit();
} else {
    $id = $_GET["id"];
    
    if (!check_song_id ($conn,$id)) {
        header("location:index.php?module=song&action=index");
        exit();
    }

    $song = get_song ($conn,$id);

    if (file_exists('../public/upload/'.$song["song_image"])) {
        unlink('../public/upload/'.$song["song_image"]);
    }
    
    delete_song ($conn,$id);

    header("location:index.php?module=song&action=index");
    exit();
}
?>