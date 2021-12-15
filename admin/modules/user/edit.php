<?php
if (!isset($_GET["id"])) {
    header ("location:index.php?module=user&action=index");
    exit();
}else {
    $errors = array();
    $id = $_GET["id"];


    if (!check_user_id($conn, $id)) {
        header("location:index.php?module=user&action=index");
        exit();
    }

    $user = get_user($conn, $id);

    $errors = array();

    if (isset($_POST["create"])){

        if (empty($_POST["password"])) {
            $errors[] = "Please enter a password";
        }

        $data = array(
            "level" => $_POST["level"],
            "id" => $id

        );
        if (empty($_POST["password"])) {
            $data["password"] = $user["password"];
        } else {
            if (($_POST["password"]) <= 6) {
                $errors[] = "Password must contain at least 7 characters";
            } elseif ($_POST["password"] != $_POST["password_confirmation"]) {
                $errors[] = "Confirmation password does not match";
            } else {
                $data["password"] = md5($_POST["password"]);
            }


        }
        if (empty($errors)) {
            edit_user($conn, $data);
            header("location: index.php?module=user");
            exit();
        }
    }
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
                <h3 class="card-title">Edit User</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $user["email"]?>" disabled>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Please enter your password">
                </div>
                <div class="form-group">
                    <label>Confirm password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Please confirm your password">
                </div>

                <div class="form-group">
                    <label>User level</label>
                    <select name="level" class="form-control">
                        <option value="2" <?php
                            if ($user["level"] == 2) {
                                echo 'selected';
                            }
                        ?>
                        >Regular user</option>
                        <option value="1"<?php
                        if ($user["level"] == 1) {
                            echo 'selected';
                        }
                        ?>>Admin</option>
                    </select>
                </div>


            </div>
            <div class="card-footer">
                <button type="submit" name="edit" class="btn btn-primary">Edit new</button>
                <button type="reset" class="btn btn-default float-right">Delete</button>
            </div>
        </div>
    </form>
<?php } ?>

