<?php
    $errors = array();

    // query select * category
    $parent_category = get_all_category($conn);

    if (isset($_POST["create"])):
        // check input category empty when hit btn add new
        if (empty($_POST["name"])):
            $errors[] = "Please enter category name!";
        endif;

        // add data to database when none error
        if (empty($errors)):
            $data = array(
                    // keyname copy exactly like column name at category table on database
                    'name' => $_POST["name"],
                'parent' => $_POST["parent"],
//                'parent' => 0
            );

            // check existed category
            if (check_category_exist($conn, $data)):
                create_category($conn, $data);
                header("location: index.php?module=category");
                exit();
            else:
                $errors[] = "This category already existed";
            endif;
        endif;
    endif;
?>

<!-- show alert if has error(s)-->
<?php if (!empty($errors)): ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Error!</h5>
        <ul>
<!-- show error -->
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form action="" method="post">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Add Category</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Parent category</label>
                <select class="form-control" name="parent">
                    <option value="0">---ROOT---</option>
                    <?php
                        recursiveOption($parent_category,$_POST["parent"]);
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label>Category name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter new category">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="create" class="btn btn-primary">Add new</button>
            <button type="reset" class="btn btn-default float-right">Delete</button>
        </div>
    </div>
</form>
