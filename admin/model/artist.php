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

function create_artist ($conn,$artist) {
    $stmt = $conn->prepare("INSERT INTO `artist`(`artist_name`, `category_id`, `artist_details`, `artist_achievements`, `image`) VALUES (:artist_name, :category_id, :artist_details :artist_achievement, :image)");
    $stmt->bindParam(':artist_name',$artist["artist_name"],PDO::PARAM_STR);
    $stmt->bindParam(':category_id',$artist["category_id"],PDO::PARAM_INT);
    $stmt->bindParam(':artist_details',$artist["artist_details"],PDO::PARAM_STR);
    $stmt->bindParam(':artist_achievements',$artist["artist_achievements"],PDO::PARAM_STR);
    $stmt->bindParam(':image',$artist["image"],PDO::PARAM_STR);
    $stmt->execute();
    return $stmt;
}

function edit_artist ($conn,$artist) {
    $stmt = $conn->prepare("UPDATE artist SET artist_name= :artist_name,category_id= :category_id,artist_achievements= :artist_achievement,artist_details= :artist_details,image= :image, id_artist= :id_artist WHERE id = :id");
    $stmt->bindParam(':artist_name',$artist["artist_name"],PDO::PARAM_STR);
    $stmt->bindParam(':category_id',$artist["category_id"],PDO::PARAM_INT);
    $stmt->bindParam(':artist_details',$artist["artist_details"],PDO::PARAM_STR);
    $stmt->bindParam(':artist_achievements',$artist["artist_achievements"],PDO::PARAM_STR);
    $stmt->bindParam(':id_artist',$artist["category_id"],PDO::PARAM_INT);
    $stmt->bindParam(':image',$artist["image"],PDO::PARAM_STR);
    $stmt->bindParam(':id',$artist["id"],PDO::PARAM_INT);
    $stmt->execute();
    return $stmt;
}

function check_artist_exist ($conn,$data,$edit = false) {
    if (!$edit) {
        $stmt = $conn->prepare("SELECT artist_name FROM artist WHERE artist_name = :artist_name");
    } else {
        $stmt = $conn->prepare("SELECT artist_name FROM artist WHERE artist_name = :artist_name AND id != :id");
        $stmt->bindParam(':id',$data["id"],PDO::PARAM_STR);
    }
    
    $stmt->bindParam(':artist_name',$data["artist_name"],PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();

    if ($count > 0) {
        return false;
    }

    return true;
}

function get_all_artist ($conn) {
//    $stmt = $conn->prepare("SELECT p.*, artist_name as cartist_name FROM artist as p, category as c WHERE p.category_id = c.id ORDER BY p.id DESC");
    $stmt = $conn->prepare("SELECT * FROM artist ORDER BY id_artist ASC");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}


function get_artist ($conn,$id) {
    $stmt = $conn->prepare("SELECT * FROM artist WHERE id = :id");
    $stmt->bindParam(":id",$id,PDO::PARAM_STR);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function check_artist_id ($conn,$id) {
    $stmt = $conn->prepare("SELECT * FROM artist WHERE id = :id");
    $stmt->bindParam(":id",$id,PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();

    if ($count > 0) {
        return true;
    }

    return false;
}

function delete_artist ($conn,$id) {
    $stmt = $conn->prepare("DELETE FROM artist WHERE id = :id");
    $stmt->bindParam(":id",$id,PDO::PARAM_STR);
    $stmt->execute();

    return $stmt;
}

?>