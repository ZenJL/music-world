<?php
    function recursiveOption($data, $selected, $parent = 0, $str = "") {
        foreach ($data as $key => $value):
            if ($value["parent"] == $parent):
                $selected_option = '';

                if ($value['id'] == $selected):
                    $selected_option = "selected";
                endif;

                echo '<option value="'. $value['id'].'" '.$selected_option.'>'.$str.$value['name'].'</option>';

                unset($data[$key]);

                recursiveOption($data, $selected, $value['id'], $str."---| ");

            endif;
        endforeach;
    }

    function recursiveTable($data, $parent = 0, $str='') {
        foreach ($data as $key => $value):
            if ($value["parent"] == $parent):
                echo '
                     <tr>
                        <td>'.$str.$value["name"].'</td>
                        <td>
                            <a
                                onclick="return checkDelete(\'Are you sure you want to delete this category?\')" 
                                href="index.php?module=category&action=delete&id='.$value["id"].'"
                            >
                               Delete</a></td>
                        <td><a href="index.php?module=category&action=edit&id='.$value["id"].'">Edit</a></td>
                     </tr>  
                ';
                unset($data[$key]);

                recursiveTable($data, $value['id'], $str.'---| ');
            endif;
        endforeach;
    }
    function checkExt ($filename) {
        $pos = strrpos($filename,".") + 1;
        $ext = substr($filename,$pos);
        if ($ext != "png" && $ext != "jpeg" && $ext != "jpg" && $ext != "gif" && $ext != "jfif") {
            return false;
        } else {
            return true;
        }
    }

    function changeNameFile ($filename) {
        $filename = trim($filename);
        $filename = mb_strtolower($filename);
        $filename = preg_replace('!\s+!', ' ', $filename);
        $filename = str_replace(" ","-",$filename);
        $filename = time()."-".$filename;
        return $filename;
    }
    function get_all_artist ($conn) {
        $stmt = $conn->prepare("SELECT * FROM artist ORDER BY id_artist ASC");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    function get_all_album ($conn) {
        $stmt = $conn->prepare("SELECT * FROM album ORDER BY id_album ASC");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    function get_all_instrument ($conn) {
        $stmt = $conn->prepare("SELECT * FROM instrument ORDER BY id_instrument ASC");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
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

?>
