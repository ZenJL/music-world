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
?>
