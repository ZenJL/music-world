<?php
    function create_category($conn, $category) {
        $stmt = $conn->prepare("INSERT INTO category (name, parent) VALUES (:name, :parent)");
        $stmt->bindParam(':name', $category["name"], PDO::PARAM_STR);
        $stmt->bindParam(':parent', $category["parent"], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt;
    }

    function check_catergory_exist($conn, $name) {
        $stmt = $conn->prepare("SELECT name FROM category WHERE name = :name");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count > 0):
            return false;
        endif;
        return true;
    }

    function get_all_category($conn) {
        $stmt = $conn->prepare("SELECT * FROM category");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
?>