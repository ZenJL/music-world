<?php

$errors = array();
$parent_category = get_all_category ($conn);

if (isset($_POST["create"])) {

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

        if (check_event_exist ($conn,$data)) {
            create_event ($conn,$data);

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
            <h3 class="card-title">Add event</h3>
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
                        }
                    ?>
                >
            </div>


            <div class="form-group">
                <label>Event date (YYYY-MM-DD HH:MM:SS) (Ex: 2022-03-01 20:01:59)</label>
             <input class="form-control" name="event_date" placeholder="Enter event datetime" <?php
                    if (isset($_POST["event_date"])) {
                        echo $_POST["event_date"];
                    }
                ?>
            >

            </div>


            <div class="form-group">
                <label>Event place</label>
                <input class="form-control" name="event_place"><?php
                    if (isset($_POST["event_place"])) {
                        echo $_POST["event_place"];
                    }
                    ?>
            </div>


            <div class="form-group">
                <label>Event description</label>
                <textarea class="form-control" name="event_desc"><?php
                    if (isset($_POST["event_desc"])) {
                        echo $_POST["event_desc"];
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
            <button type="submit" name="create" class="btn btn-info">Add</button>

            <button type="reset" class="btn btn-default float-right">Delete</button>
        </div>
    </div>
</form>