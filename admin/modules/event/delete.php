<?php 
if (!isset($_GET["id"])) {
    header("location:index.php?module=event&action=index");
    exit();
} else {
    $id = $_GET["id"];
    
    if (!check_event_id ($conn,$id)) {
        header("location:index.php?module=event&action=index");
        exit();
    }

    $event = get_event ($conn,$id);

    if (file_exists('../public/upload/'.$event["event_image"])) {
        unlink('../public/upload/'.$event["event_image"]);
    }
    
    delete_event ($conn,$id);

    header("location:index.php?module=event&action=index");
    exit();
}
?>