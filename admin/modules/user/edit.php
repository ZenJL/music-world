<?php 
if (!isset($_GET["id"])) {
    header("location:index.php?module=user&action=index");
    exit();
} else {
    $errors = array();
    $id = $_GET["id"];
    
    if (!check_user_id ($conn,$id)) {
        header("location:index.php?module=user&action=index");
        exit();
    }
    $user = get_user ($conn,$id);

    $edit_myself = null;
    if ($_SESSION["login"]["id"] == $id) {
        $edit_myself = true;
    } else {
        $edit_myself = false;
    }

    if ($_SESSION["login"]["id"] != 1 && ($_GET["id"] == 1 || ($user["level"] == 1 && $edit_myself == false))) {
        echo '<script>
            alert("Bạn không đủ quyền hạn để sửa thành viên này")
            window.location.href="index.php?module=user&action=index"
        </script>';
        exit();
    }

    if (isset($_POST["edit"])) {

        $data = array(
            "id" => $id
        );

        if (!$edit_myself) {
            $data["level"] = $_POST["level"];
        }

        if (empty($_POST["password"])) {
            $data["password"] = $user["password"];
        } else {
            if (strlen($_POST["password"]) <= 6) {
                $errors[] = "Mật khẩu ít nhất phải có 7 ký tự";
            } elseif ($_POST["password"] != $_POST["password_confirmation"]) {
                $errors[] = "Hai mật khẩu không trùng khớp";
            } else {
                $data["password"] = md5($_POST["password"]);
            }
        }

        if (empty($errors)) {
            edit_user ($conn,$data);

            header("location:index.php?module=user");
            exit();
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
                <h3 class="card-title">Sửa thành viên</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $user["email"] ?>" disabled />
                </div>

                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" name="password" class="form-control" placeholder="Vui lòng nhập mật khẩu" />
                </div>

                <div class="form-group">
                    <label>Xác nhận mật khẩu</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Vui lòng nhập xác nhận mật khẩu" />
                </div>

                <?php if (!$edit_myself) { ?>
                <div class="form-group">
                    <label>Qyền hạn</label>
                    <select name="level" class="form-control">
                        <option value="2" <?php 
                            if ($user["level"] == 2) {
                                echo 'selected';
                            }
                        ?>>Thành viên</option>
                        <option value="1"<?php 
                            if ($user["level"] == 1) {
                                echo 'selected';
                            }
                        ?>>Quản trị viên</option>
                    </select>
                </div>
                <?php } ?>
            </div>
            <div class="card-footer">
                <button type="submit" name="edit" class="btn btn-info">Sửa</button>

                <button type="reset" class="btn btn-default float-right">Xóa</button>
            </div>
        </div>
    </form>
<?php } ?>