<?php

function create_event ($conn,$event) {
    $stmt = $conn->prepare("INSERT INTO `event`(`event_name`, `category_id`, `event_date`, `event_place`,  `event_desc`) VALUES (:event_name, :category_id, :event_date, :event_place, :event_desc)");
    $stmt->bindParam(':event_name',$event["event_name"],PDO::PARAM_STR);
    $stmt->bindParam(':category_id',$event["category_id"],PDO::PARAM_INT);
    $stmt->bindParam(':event_date',$event["event_date"],PDO::PARAM_STR);
    $stmt->bindParam(':event_place',$event["event_place"],PDO::PARAM_STR);
    $stmt->bindParam(':event_desc',$event["event_desc"],PDO::PARAM_STR);
    $stmt->execute();
    return $stmt;
}

function edit_event ($conn,$event) {
    $stmt = $conn->prepare("UPDATE event SET event_name= :event_name,category_id= :category_id,event_date= :event_date,event_place= :event_place,event_desc= :event_desc WHERE id_event = :id_event");
    $stmt->bindParam(':event_name',$event["event_name"],PDO::PARAM_STR);
    $stmt->bindParam(':category_id',$event["category_id"],PDO::PARAM_INT);
    $stmt->bindParam(':event_date',$event["event_date"],PDO::PARAM_STR);
    $stmt->bindParam(':event_place',$event["event_place"],PDO::PARAM_STR);
    $stmt->bindParam(':event_desc',$event["event_desc"],PDO::PARAM_STR);
    $stmt->bindParam(':id_event',$event["id_event"],PDO::PARAM_INT);
    $stmt->execute();
    return $stmt;
}

function check_event_exist ($conn,$data,$edit = false) {
    if (!$edit) {
        $stmt = $conn->prepare("SELECT event_name FROM event WHERE event_name = :event_name");
    } else {
        $stmt = $conn->prepare("SELECT event_name FROM event WHERE event_name = :event_name AND id_event != :id_event");
        $stmt->bindParam(':id_event',$data["id_event"],PDO::PARAM_STR);
    }

    $stmt->bindParam(':event_name',$data["event_name"],PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();

    if ($count > 0) {
        return false;
    }

    return true;
}

function get_event ($conn,$id) {
    $stmt = $conn->prepare("SELECT * FROM event WHERE id_event = :id_event");
    $stmt->bindParam(":id_event",$id,PDO::PARAM_STR);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function check_event_id ($conn,$id) {
    $stmt = $conn->prepare("SELECT * FROM event WHERE id_event = :id_event");
    $stmt->bindParam(":id_event",$id,PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();

    if ($count > 0) {
        return true;
    }

    return false;
}

function delete_event ($conn,$id) {
    $stmt = $conn->prepare("DELETE FROM event WHERE id_event = :id_event");
    $stmt->bindParam(":id_event",$id,PDO::PARAM_STR);
    $stmt->execute();

    return $stmt;
}

?>