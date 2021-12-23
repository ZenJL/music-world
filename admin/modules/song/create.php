<?php

$errors = array();
$parent_category = get_all_category ($conn);

if (isset($_POST["create"])) {

    if (empty($_POST["song_name"])) {
        $errors[] = "Enter song name";
    }

    if (empty($_POST["category"])) {
        $errors[] = "Vui lòng nhập giá sản phẩm";
    }

    if (!is_numeric($_POST["price"])) {
        $errors[] = "Giá sản phẩm phải là số";
    }

    if (empty($_POST["intro"])) {
        $errors[] = "Vui lòng nhập tóm tắt";
    }

    if (empty($_FILES["image"]["name"])) {
        $errors[] = "Vui lòng nhập hình";
    }

    if (!checkExt($_FILES["image"]["name"])) {
        $errors[] = "Không phải là file hình";
    }

    if (empty($errors)) {
        $file = changeNameFile($_FILES["image"]["name"]);

        $data = array(
            'name' => $_POST["name"],
            'price' => $_POST["price"],
            'intro' => $_POST["intro"],
            'content' => $_POST["content"],
            'image' => $file,
            'status' => $_POST["status"],
            "featured" => $_POST["featured"],
            "category_id" => $_POST["category_id"]
        );

        if (check_song_exist ($conn,$data)) {
            create_song ($conn,$data);
            move_uploaded_file($_FILES["image"]["tmp_name"],'../public/upload/'.$file);

            header("location:index.php?module=song");
            exit();
        } else {
            $errors[] = "Tên sản phẩm này đã tồn tại rồi";
        }
    }
}
?>

<?php if (!empty($errors)) { ?>
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-ban"></i> Thông báo lỗi!</h5>
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
            <h3 class="card-title">Add song</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id">
                    <?php recursiveOption ($parent_category,$_POST["category_id"],3) ?>
                </select>
            </div>

            <div class="form-group">
                <label>Song name</label>
                <input type="text" name="song_name" class="form-control" placeholder="Enter song name"
                    <?php 
                        if (isset($_POST["song_name"])) {
                            echo 'value="'.$_POST["song_name"].'"';
                        }
                    ?>
                >
            </div>

            <div class="form-group">
                <label>Artist</label> <br>
<!--                <input type="text" name="id_artist" class="form-control" placeholder="Enter song's artist">-->
                <select class="form-control" name="id_artist">
                    <?php
                    $artists = get_all_artist($conn);
                    foreach($artists as $artist){
                    ?>
                        <option value="<?php echo $artist["id_artist"] ?>" >
                            <?php echo $artist["artist_name"]?>
                        </option>
                    <?php } ?>
                </select>
            </div>


            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
                <label>Song release date (YYYY-MM-DD)</label>
                <input placeholder="2021-12-31" type="text" id="example" name="song_date" class="form-control">
            </div>

            <div class="form-group">
                <label>Song lyric</label>
             <textarea class="form-control" name="content"><?php
                    if (isset($_POST["song_lyric"])) {
                        echo $_POST["song_lyric"];
                    }
                ?></textarea>
                <script>
                    CKEDITOR.replace('content',{
                        filebrowserBrowseUrl: 'http://localhost/Online/PHP-PROJECT/admin/public/plugins/ckfinder/ckfinder.html',
                        filebrowserUploadUrl: 'http://localhost/Online/PHP-PROJECT/admin/public/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    });
                </script>
            </div>

            <div class="form-group">
                <label>Image</label>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" name="create" class="btn btn-info">Add</button>

            <button type="reset" class="btn btn-default float-right">Delete</button>
        </div>
    </div>
</form>