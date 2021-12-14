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
                                
                            >Delete</a></td>
                        <td><a href="index.php?module=category&action=edit&id='.$value["id"].'">Edit</a></td>
                     </tr>  
                ';
                unset($data[$key]);

                recursiveTable($data, $value['id'], $str.'---| ');
            endif;
        endforeach;
    }
?>
