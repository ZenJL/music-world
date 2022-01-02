<?php 
if (!isset($_GET["id"])) {
    header("location:index.php?module=album&action=index");
    exit();
} else {
    $errors = array();
    $id = $_GET["id"];
    $parent_category = get_all_category ($conn);
    
    if (!check_album_id ($conn,$id)) {
        header("location:index.php?module=album&action=index");
        exit();
    }

    $album = get_album ($conn,$id);

    if (isset($_POST["edit"])) {

        if (empty($_POST["album_name"])) {
            $errors[] = "Enter album name";
        }

        if (empty($_POST["category_id"])) {
            $errors[] = "Please select album category";
        }

        if (empty($_POST["album_date"])) {
            $errors[] = "Please enter album release date";
        }

        if (empty($_POST["id_artist"])) {
            $errors[] = "Please select artist";
        }

        if (empty($_FILES["album_image"]["name"])) {
            $errors[] = "Please select an image";
        }

        if (empty($errors)) {

            $data = array(
                'album_name' => $_POST["album_name"],
                'album_date' => $_POST["album_date"],
                'id_artist' => $_POST["id_artist"],
                'album_image' => $file,
                "category_id" => $_POST["category_id"]
            );

            if (check_album_exist ($conn,$data,true)) {

                if (!empty($_FILES["album_image"]["name"])) {
                    if (!checkExt($_FILES["album_image"]["name"])) {
                        $errors[] = "Not in image file";
                    } else {
                        $file = changeNameFile($_FILES["album_image"]["name"]);
                        $data["album_image"] = $file;
                        move_uploaded_file($_FILES["album_image"]["tmp_name"],'../public/upload/'.$file);
                    }
                } else {
                    $data["album_image"] = $album["album_image"];
                }

                edit_album ($conn,$data);
                
                header("location:index.php?module=album");
                exit();
            } else {
                $errors[] = "This album has already existed";
            }
        }
    }
    ?>

    <?php if (!empty($errors)) { ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Error!</h5>
        <ul>
            <?php foreach ($errors as $error) { ?>
            <li><?php echo $error ?></li>
            <?php } ?>
        </ul>
    </div>
    <?php } ?>

    <form method="POST" action="" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit album</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                        <?php recursiveOption ($parent_category,$_POST["category_id"],0) ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Album name</label>
                    <input type="text" name="album_name" class="form-control" placeholder="Enter album name"
                        <?php
                        if (isset($_POST["album_name"])) {
                            echo 'value="'.$_POST["album_name"].'"';
                        } else {
                            echo 'value="'.$album["album_name"].'"';
                        }
                    ?>
                    >
                </div>

                <div class="form-group">
                    <label>Artist</label> <br>
                    <!--                <input type="text" name="id_artist" class="form-control" placeholder="Enter album's artist">-->
                    <select class="form-control" name="id_artist">
                        <?php
                        $artists = get_all_artist($conn);
                        foreach($artists as $artist){
                            ?>
                            <option value="<?php echo $artist["id_artist"] ?>"
                                <?php if($artist["id_artist"]== $album["id_artist"]){ echo "selected";}?>
                            >
                                <?php echo $artist["artist_name"]?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
                    <label>Album release date (YYYY-MM-DD)</label>
                    <input placeholder="2021-12-31" type="text" id="example" name="album_date" class="form-control"
                        <?php
                        if (isset($_POST["album_date"])) {
                            echo 'value="'.$_POST["album_date"].'"';
                        } else {
                            echo 'value="'.$album["album_date"].'"';
                        }
                        ?>>
                </div>


                <div class="form-group">
                    <label>Image</label>
                    <div class="custom-file">
                        <input type="file" name="album_image" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" name="edit" class="btn btn-info">Sửa</button>

                <button type="reset" class="btn btn-default float-right">Xóa</button>
            </div>
        </div>
    </form>
<?php } ?>