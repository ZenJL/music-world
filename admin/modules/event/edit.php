<?php 
if (!isset($_GET["id"])) {
    header("location:index.php?module=event&action=index");
    exit();
} else {
    $errors = array();
    $id = $_GET["id"];
    $parent_category = get_all_category ($conn);
    
    if (!check_event_id ($conn,$id)) {
        header("location:index.php?module=event&action=index");
        exit();
    }

    $event = get_event ($conn,$id);

    if (isset($_POST["edit"])) {

        if (empty($_POST["event_name"])) {
            $errors[] = "Enter event name";
        }

        if (empty($_POST["category_id"])) {
            $errors[] = "Please enter event category";
        }

        if (empty($_POST["event_place"])) {
            $errors[] = "Please enter event place";
        }

        if (empty($_POST["event_date"])) {
            $errors[] = "Please enter event date and time";
        }

        if (empty($_POST["event_desc"])) {
            $errors[] = "Please enter event description";
        }

        if (empty($errors)) {

            $data = array(
                'event_name' => $_POST["event_name"],
                'event_date' => $_POST["event_date"],
                'event_place' => $_POST["event_place"],
                'event_desc' => $_POST["event_desc"],
                "category_id" => $_POST["category_id"]
            );

            if (check_event_exist ($conn,$data,true)) {

                edit_event ($conn,$data);
                
                header("location:index.php?module=event");
                exit();
            } else {
                $errors[] = "This event has already existed.";
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
                <h3 class="card-title">Edit event</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category_id">
                        <?php recursiveOption ($parent_category,$_POST["category_id"],0) ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Event name</label>
                    <input type="text" name="event_name" class="form-control" placeholder="Enter event name"
                        <?php
                        if (isset($_POST["event_name"])) {
                            echo 'value="'.$_POST["event_name"].'"';
                        } else {
                            echo 'value="'.$event["event_name"].'"';
                        }
                        ?>
                    >
                </div>

                <div class="form-group">
                    <label>Event date</label>
                    <input class="form-control" name="event_date" placeholder="Enter event datetime" <?php
                    if (isset($_POST["event_date"])) {
                        echo 'value="'.$_POST["event_date"].'"';
                    } else {
                        echo 'value="'.$event["event_date"].'"';
                    }
                    ?>
                    >
                </div>

                <div class="form-group">
                    <label>Event place</label>
                    <input class="form-control" name="event_place" placeholder="Enter event place" <?php
                    if (isset($_POST["event_place"])) {
                        echo 'value="'.$_POST["event_place"].'"';
                    } else {
                        echo 'value="'.$event["event_place"].'"';
                    }
                    ?>
                    >
                </div>

                <div class="form-group">
                    <label>Event description</label>
                    <textarea class="form-control" name="event_desc"><?php
                        if (isset($_POST["event_desc"])) {
                            echo $_POST["event_desc"];
                        } else {
                            echo $event["event_desc"];
                        }
                        ?></textarea>
                    <script>
                        CKEDITOR.replace('event_desc',{
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