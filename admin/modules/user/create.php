<?php
include '../../model/user.php';
include '../../libs/connect.php';
$errors = array();


if (isset($_POST["create"])) {

    if (empty($_POST["email"])) {
        $errors[] = "Vui lòng nhập email";
    }

    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$_POST["email"])) {
        $errors[] = "Không đúng định dạng email";
    }

    if (empty($_POST["password"])) {
        $errors[] = "Vui lòng nhập mật khẩu";
    }

    if (strlen($_POST["password"]) <= 6) {
        $errors[] = "Mật khẩu ít nhất phải có 7 ký tự";
    }


    if ($_POST["password"] != $_POST["password_confirmation"]) {
        $errors[] = "Hai mật khẩu không trùng khớp";
    }

    if (empty($errors)) {
        $data = array(
            "email" => $_POST["email"],
            "password" => md5($_POST["password"]),
            "level" => $_POST["level"]
        );

        if (check_user_exist ($conn,$data)) {
            create_user ($conn,$data);

            header("location:index.php?module=user");
            exit();
        } else {
            $errors[] = "Thành viên này đã tồn tại rồi";
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
            <h3 class="card-title">Thêm thành viên</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Vui lòng nhập email"
                    <?php 
                        if (isset($_POST["email"])) {
                            echo 'value="'.$_POST["email"].'"';
                        }
                    ?>
                >
            </div>

            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" name="password" class="form-control" placeholder="Vui lòng nhập mật khẩu" />
            </div>

            <div class="form-group">
                <label>Xác nhận mật khẩu</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Vui lòng nhập xác nhận mật khẩu" />
            </div>

            <div class="form-group">
                <label>Qyền hạn</label>
                <select name="level" class="form-control">
                    <option value="2">Thành viên</option>
                    <option value="1">Quản trị viên</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="create" class="btn btn-info">Thêm</button>

            <button type="reset" class="btn btn-default float-right">Xóa</button>
        </div>
    </div>
</form>