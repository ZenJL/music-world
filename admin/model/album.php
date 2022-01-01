<?php
function get_all_category ($conn,$edit = false,$id = null) {
    if ($edit) {
        $stmt = $conn->prepare("SELECT * FROM category WHERE id != :id");
        $stmt->bindParam(":id",$id,PDO::PARAM_STR);
    } else {
        $stmt = $conn->prepare("SELECT * FROM category");
    }

    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function create_album ($conn,$album) {
    $stmt = $conn->prepare("INSERT INTO `album`(`album_name`, `category_id`, `album_date`, `album_image`, `id_artist`) VALUES (:album_name, :category_id, :album_date, :album_image, :id_artist)");
    $stmt->bindParam(':album_name',$album["album_name"],PDO::PARAM_STR);
    $stmt->bindParam(':category_id',$album["category_id"],PDO::PARAM_INT);
    $stmt->bindParam(':album_date',$album["album_date"],PDO::PARAM_STR);
    $stmt->bindParam(':album_image',$album["album_image"],PDO::PARAM_STR);
    $stmt->bindParam(':id_artist',$album["id_artist"],PDO::PARAM_INT);
    $stmt->execute();
    return $stmt;
}

function edit_album ($conn,$album) {
    $stmt = $conn->prepare("UPDATE album SET album_name= :album_name,category_id= :category_id,id_album= :id_album,album_date= :album_date,album_image= :album_image,id_artist= :id_artist WHERE id_album = :id_album");
    $stmt->bindParam(':album_name',$album["album_name"],PDO::PARAM_STR);
    $stmt->bindParam(':category_id',$album["category_id"],PDO::PARAM_INT);
    $stmt->bindParam(':album_date',$album["album_date"],PDO::PARAM_STR);
    $stmt->bindParam(':album_image',$album["album_image"],PDO::PARAM_STR);
    $stmt->bindParam(':id_artist',$album["id_artist"],PDO::PARAM_INT);
    $stmt->bindParam(':id_album',$album["id_album"],PDO::PARAM_INT);
    $stmt->execute();
    return $stmt;
}

function check_album_exist ($conn,$data,$edit = false) {
    if (!$edit) {
        $stmt = $conn->prepare("SELECT album_name FROM album WHERE album_name = :album_name");
    } else {
        $stmt = $conn->prepare("SELECT album_name FROM album WHERE album_name = :album_name AND id_album != :id_album");
        $stmt->bindParam(':id_album',$data["id_album"],PDO::PARAM_STR);
    }

    $stmt->bindParam(':album_name',$data["album_name"],PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();

    if ($count > 0) {
        return false;
    }

    return true;
}




function get_album ($conn,$id) {
    $stmt = $conn->prepare("SELECT * FROM album WHERE id_album = :id_album");
    $stmt->bindParam(":id_album",$id,PDO::PARAM_STR);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function check_album_id ($conn,$id) {
    $stmt = $conn->prepare("SELECT * FROM album WHERE id_album = :id_album");
    $stmt->bindParam(":id_album",$id,PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();

    if ($count > 0) {
        return true;
    }

    return false;
}

function delete_album ($conn,$id) {
    $stmt = $conn->prepare("DELETE FROM album WHERE id_album = :id_album");
    $stmt->bindParam(":id_album",$id,PDO::PARAM_STR);
    $stmt->execute();

    return $stmt;
}

?>