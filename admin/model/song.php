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

function create_song ($conn,$song) {
    $stmt = $conn->prepare("INSERT INTO `song`(`song_name`, `category_id`, `id_album`, `song_lyric`,  `id_artist`) VALUES (:song_name, :category_id, :id_album, :song_lyric, :id_artist)");
    $stmt->bindParam(':song_name',$song["song_name"],PDO::PARAM_STR);
    $stmt->bindParam(':category_id',$song["category_id"],PDO::PARAM_INT);
    $stmt->bindParam(':id_album',$song["id_album"],PDO::PARAM_INT);
    $stmt->bindParam(':song_lyric',$song["song_lyric"],PDO::PARAM_STR);
    $stmt->bindParam(':id_artist',$song["id_artist"],PDO::PARAM_INT);
    $stmt->execute();
    return $stmt;
}

function edit_song ($conn,$song) {
    $stmt = $conn->prepare("UPDATE song SET song_name= :song_name,category_id= :category_id,id_album= :id_album,song_lyric= :song_lyric,id_artist= :id_artist WHERE id_song = :id_song");
    $stmt->bindParam(':song_name',$song["song_name"],PDO::PARAM_STR);
    $stmt->bindParam(':category_id',$song["category_id"],PDO::PARAM_INT);
    $stmt->bindParam(':id_album',$song["id_album"],PDO::PARAM_INT);
    $stmt->bindParam(':song_lyric',$song["song_lyric"],PDO::PARAM_STR);
    $stmt->bindParam(':id_artist',$song["id_artist"],PDO::PARAM_INT);
    $stmt->bindParam(':id_song',$song["id_song"],PDO::PARAM_INT);
    $stmt->execute();
    return $stmt;
}

function check_song_exist ($conn,$data,$edit = false) {
    if (!$edit) {
        $stmt = $conn->prepare("SELECT song_name FROM song WHERE song_name = :song_name");
    } else {
        $stmt = $conn->prepare("SELECT song_name FROM song WHERE song_name = :song_name AND id_song != :id_song");
        $stmt->bindParam(':id_song',$data["id_song"],PDO::PARAM_STR);
    }
    
    $stmt->bindParam(':song_name',$data["song_name"],PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();

    if ($count > 0) {
        return false;
    }

    return true;
}

function get_all_song ($conn) {
//    $stmt = $conn->prepare("SELECT p.*, song_name as csong_name FROM song as p, category as c WHERE p.category_id = c.id ORDER BY p.id DESC");
    $stmt = $conn->prepare("SELECT * FROM song ORDER BY id_song ASC");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}


function get_song ($conn,$id) {
    $stmt = $conn->prepare("SELECT * FROM song WHERE id_song = :id_song");
    $stmt->bindParam(":id_song",$id,PDO::PARAM_STR);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function check_song_id ($conn,$id) {
    $stmt = $conn->prepare("SELECT * FROM song WHERE id_song = :id_song");
    $stmt->bindParam(":id_song",$id,PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();

    if ($count > 0) {
        return true;
    }

    return false;
}

function delete_song ($conn,$id) {
    $stmt = $conn->prepare("DELETE FROM song WHERE id_song = :id_song");
    $stmt->bindParam(":id_song",$id,PDO::PARAM_STR);
    $stmt->execute();

    return $stmt;
}

?>