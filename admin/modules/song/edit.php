<?php 
if (!isset($_GET["id"])) {
    header("location:index.php?module=song&action=index");
    exit();
} else {
    $errors = array();
    $id = $_GET["id"];
    $parent_category = get_all_category ($conn);
    
    if (!check_song_id ($conn,$id)) {
        header("location:index.php?module=song&action=index");
        exit();
    }

    $song = get_song ($conn,$id);

    if (isset($_POST["edit"])) {

        if (empty($_POST["song_name"])) {
            $errors[] = "Enter song name";
        }

        if (empty($_POST["category_id"])) {
            $errors[] = "Please enter song category";
        }

        if (empty($_POST["song_lyric"])) {
            $errors[] = "Please enter song lyric";
        }

        if (empty($_POST["id_album"])) {
            $errors[] = "Please enter album id";
        }

        if (empty($errors)) {

            $data = array(
                'song_name' => $_POST["song_name"],
                'id_artist' => $_POST["id_artist"],
                'song_lyric' => $_POST["song_lyric"],
                'id_album' => $_POST["id_album"],
                "category_id" => $_POST["category_id"]
            );

            if (check_song_exist ($conn,$data,true)) {

                edit_song ($conn,$data);
                
                header("location:index.php?module=song");
                exit();
            } else {
                $errors[] = "This song has already existed.";
            }
        }
    }
    ?>

    <?php if (!empty($errors)) { ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Error</h5>
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
                <h3 class="card-title">Edit song</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                        <?php recursiveOption ($parent_category,$_POST["category_id"],0) ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Song name</label>
                    <input type="text" name="song_name" class="form-control" placeholder="Enter song name"
                        <?php
                        if (isset($_POST["song_name"])) {
                            echo 'value="'.$_POST["song_name"].'"';
                        } else {
                            echo 'value="'.$song["song_name"].'"';
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
                            <option value="<?php echo $artist["id_artist"]; ?>"
                                <?php if($artist["id_artist"]== $song["id_artist"]){ echo "selected";}?>
                            >
                                <?php echo $artist["artist_name"];?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Album</label> <br>
                    <!--                <input type="text" name="id_artist" class="form-control" placeholder="Enter song's artist">-->
                    <select class="form-control" name="id_album">
                        <?php
                        $albums = get_all_album($conn);
                        foreach($albums as $album){
                            ?>
                            <option value="<?php echo $album["id_album"] ?>
                             <?php if($album["id_album"]== $song["id_album"]){ echo "selected";}?>>
                                <?php echo $album["album_name"]?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Song lyric</label>
                    <textarea class="form-control" name="song_lyric"><?php
                        if (isset($_POST["song_lyric"])) {
                            echo $_POST["song_lyric"];
                        } else {
                            echo $song["song_lyric"];
                        }
                        ?></textarea>
                    <script>
                        CKEDITOR.replace('song_lyric',{
                            filebrowserBrowseUrl: 'http://localhost/Online/PHP-PROJECT/admin/public/plugins/ckfinder/ckfinder.html',
                            filebrowserUploadUrl: 'http://localhost/Online/PHP-PROJECT/admin/public/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        });
                    </script>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" name="edit" class="btn btn-info">Sửa</button>

                <button type="reset" class="btn btn-default float-right">Xóa</button>
            </div>
        </div>
    </form>
<?php } ?>