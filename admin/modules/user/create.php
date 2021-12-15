<?php
$errors = array();

if (isset($_POST["create"])):

    if (empty($_POST["email"])){
        $errors[] = "Please enter an email";
    }

    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $_POST["email"])) {
        $errors[] = "Only letters and white space allowed";
    }

    if (empty($_POST["password"])){
        $errors[] = "Please enter a password";
    }

    if (($_POST["password"]) <=6){
        $errors[] = "Password must contain at least 7 characters";
    }

    if ($_POST["password"] != $_POST["password_confirmation"]){
        $errors[] = "Confirmation password does not match";
    }
    // add data to database when none error
    if (empty($errors)):
        $data = array(
                "email" => $_POST["email"],
                "password" => md5($_POST["password"]),
                "level" => $_POST["level"]

        );

        // check existed category
        if (check_user_exist($conn, $data)):
            create_user($conn, $data);
            header("location: index.php?module=user");
            exit();
        else:
            $errors[] = "This user is already existed";
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
            <h3 class="card-title">Add User</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Please enter your email"
                       <?php
                            if (isset($_POST["email"])){
                                echo 'value="'.$_POST["email"].'"';
                            }
                       ?>
                >
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
                    <option value="2">Regular user</option>
                    <option value="1">Admin</option>
                </select>
            </div>


        </div>
        <div class="card-footer">
            <button type="submit" name="create" class="btn btn-primary">Add new</button>
            <button type="reset" class="btn btn-default float-right">Delete</button>
        </div>
    </div>
</form>
