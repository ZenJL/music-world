<?php

$errors = array();
$parent_category = get_all_category ($conn);

if (isset($_POST["create"])) {

    if (empty($_POST["artist_name"])) {
        $errors[] = "Enter artist name";
    }

    if (empty($_POST["category_id"])) {
        $errors[] = "Please enter artist category";
    }

    if (empty($_POST["artist_details"])) {
        $errors[] = "Please enter artist details";
    }

    if (empty($_POST["artist_achievements"])) {
        $errors[] = "Please enter artist achievements";
    }


    if (empty($_FILES["image"]["name"])) {
        $errors[] = "Please select an image";
    }

    if (!checkExt($_FILES["image"]["name"])) {
        $errors[] = "Not in image file";
    }

    if (empty($errors)) {
        $file = changeNameFile($_FILES["image"]["name"]);

        $data = array(
            'artist_name' => $_POST["artist_name"],
            'artist_lyric' => $_POST["artist_details"],
            'artist_date' => $_POST["artist_achievements"],
            'image' => $file,
            "category_id" => $_POST["category_id"]
        );

        if (check_artist_exist ($conn,$data)) {
            create_artist ($conn,$data);
            move_uploaded_file($_FILES["image"]["tmp_name"],'../public/upload/'.$file);

            header("location:index.php?module=artist");
            exit();
        } else {
            $errors[] = "This artist has already existed.";
        }
    }
}
?>

<?php if (!empty($errors)) { ?>
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-ban"></i> Error! </h5>
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
            <h3 class="card-title">Add artist</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id">
                    <?php recursiveOption ($parent_category,$_POST["category_id"],0) ?>
                </select>
            </div>

            <div class="form-group">
                <label>artist name</label>
                <input type="text" name="artist_name" class="form-control" placeholder="Enter artist name"
                    <?php 
                        if (isset($_POST["artist_name"])) {
                            echo 'value="'.$_POST["artist_name"].'"';
                        }
                    ?>
                >
            </div>

            <div class="form-group">
                <label>artist lyric</label>
             <textarea class="form-control" name="artist_details"><?php
                    if (isset($_POST["artist_details"])) {
                        echo $_POST["artist_details"];
                    }
                ?></textarea>
                <script>
                    CKEDITOR.replace('artist_details',{
                        filebrowserBrowseUrl: 'http://localhost/Online/PHP-PROJECT/admin/public/plugins/ckfinder/ckfinder.html',
                        filebrowserUploadUrl: 'http://localhost/Online/PHP-PROJECT/admin/public/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    });
                </script>
            </div>

            <div class="form-group">
                <label>artist lyric</label>
                <textarea class="form-control" name="artist_achievements"><?php
                    if (isset($_POST["artist_achievements"])) {
                        echo $_POST["artist_achievements"];
                    }
                    ?></textarea>
                <script>
                    CKEDITOR.replace('artist_achievements',{
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