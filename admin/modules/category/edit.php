<?php
// check only edit when have id
if (!isset($_GET['id'])):
    header('location: index.php?module=category&action=index');
    exit();

else:

    $errors = array();
    // get id url
    $id = $_GET["id"];

    // query select * category
    $parent_category = get_all_category($conn,true, $id);

    // check id url
    if (!check_category_id($conn, $id)):
        header('location: index.php?module=category&action=index');
        exit();
    endif;

    // show data need to edit
    $category = get_category($conn, $id);

    if (isset($_POST["edit"])):
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
                'id' => $id,
            );

            // check existed category
            if (check_catergory_exist($conn, $data, true)):
                edit_category($conn, $data);
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
                        recursiveOption($parent_category,$category["parent"]);
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Category name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $category["name"] ?>" placeholder="Enter new category">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                <button type="reset" class="btn btn-default float-right">Delete</button>
            </div>
        </div>
    </form>

<?php endif; ?>