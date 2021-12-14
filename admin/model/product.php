<?php
function get_all_product ($conn){
    $stmt =$conn->prepare("SELECT p.*,c.name as cname FROM product as p, category as c WHERE p.category_id = c.id ORDER BY p.id DESC");
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function get_product ($conn,$id){
    $stmt =$conn->prepare("SELECT * FROM product where id = :id");
    $stmt->bindParam(":id",$id,PDO::PARAM_STR);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}


function check_product_id ($conn, $id) {
    $stmt = $conn->prepare("SELECT * FROM product  WHERE id = :id");
    $stmt->bindParam(":id", $id,PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();

    if($count >0){
        return True;
    }
    return false;
}

