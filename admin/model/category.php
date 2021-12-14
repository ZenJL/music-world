<?php
    function create_category($conn, $category) {
        $stmt = $conn->prepare("INSERT INTO category (name, parent) VALUES (:name, :parent)");
        $stmt->bindParam(':name', $category["name"], PDO::PARAM_STR);
        $stmt->bindParam(':parent', $category["parent"], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt;
    }

    function edit_category($conn, $category) {
        $stmt = $conn->prepare("UPDATE category SET name = :name, parent = :parent WHERE id = :id");
        $stmt->bindParam(':name', $category["name"], PDO::PARAM_STR);
        $stmt->bindParam(':parent', $category["parent"], PDO::PARAM_STR);
        $stmt->bindParam(':id', $category["id"], PDO::PARAM_INT);

        $stmt->execute();
        return $stmt;
    }

    function check_catergory_exist($conn, $data, $edit = false) {
        if (!$edit):
            $stmt = $conn->prepare("SELECT name FROM category WHERE name = :name");

        else:
            $stmt = $conn->prepare("SELECT name FROM category WHERE name = :name AND id != :id");
            $stmt->bindParam(':id', $data["id"], PDO::PARAM_STR);

        endif;
        $stmt->bindParam(':name', $data["name"], PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count > 0):
            return false;
        endif;
        return true;
    }

    function get_all_category($conn, $id = null, $edit = false) {
        if ($edit):
            $stmt = $conn->prepare("SELECT * FROM category WHERE id != :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);

        else:
                $stmt = $conn->prepare("SELECT * FROM category");

        endif;

        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function get_category($conn, $id) {
        $stmt = $conn->prepare("SELECT * FROM category WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    function check_category_id($conn, $id) {
        $stmt = $conn->prepare("SELECT * FROM category WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        $stmt->execute();

        $count = $stmt->rowCount();
        if ($count > 0):
            return true;
        endif;

        return false;
    }

    function check_category_child($conn, $id) {
        $stmt = $conn->prepare("SELECT * FROM category WHERE parent = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();

        if ($count > 0):
            return false;
        endif;

        return true;
    }

    function delete_category($conn, $id) {
        $stmt = $conn->prepare("DELETE FROM category WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt;
    }
?>