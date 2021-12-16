<?php 
$errors = array();
$parent_category = get_all_category ($conn);

if (isset($_POST["create"])) {

    if (empty($_POST["name"])) {
        $errors[] = "Vui lòng nhập tên sản phẩm";
    }

    if (empty($_POST["price"])) {
        $errors[] = "Vui lòng nhập giá sản phẩm";
    }

    if (!is_numeric($_POST["price"])) {
        $errors[] = "Giá sản phẩm phải là số";
    }

    if (empty($_POST["intro"])) {
        $errors[] = "Vui lòng nhập tóm tắt";
    }

    if (empty($_FILES["image"]["name"])) {
        $errors[] = "Vui lòng nhập hình";
    }

    if (!checkExt($_FILES["image"]["name"])) {
        $errors[] = "Không phải là file hình";
    }

    if (empty($errors)) {
        $file = changeNameFile($_FILES["image"]["name"]);

        $data = array(
            'name' => $_POST["name"],
            'price' => $_POST["price"],
            'intro' => $_POST["intro"],
            'content' => $_POST["content"],
            'image' => $file,
            'status' => $_POST["status"],
            "featured" => $_POST["featured"],
            "category_id" => $_POST["category_id"]
        );

        if (check_product_exist ($conn,$data)) {
            create_product ($conn,$data);
            move_uploaded_file($_FILES["image"]["tmp_name"],'../public/upload/'.$file);

            header("location:index.php?module=product");
            exit();
        } else {
            $errors[] = "Tên sản phẩm này đã tồn tại rồi";
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
            <h3 class="card-title">Thêm sản phẩm</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Thể loại</label>
                <select class="form-control" name="category_id">
                    <?php recursiveOption ($parent_category,$_POST["category_id"],3) ?>
                </select>
            </div>

            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" placeholder="Vui lòng nhập tên sản phẩm"
                    <?php 
                        if (isset($_POST["name"])) {
                            echo 'value="'.$_POST["name"].'"';
                        }
                    ?>
                >
            </div>

            <div class="form-group">
                <label>Giá</label>
                <input type="text" name="price" class="form-control" placeholder="Vui lòng nhập giá sản phẩm"
                    <?php 
                        if (isset($_POST["price"])) {
                            echo 'value="'.$_POST["price"].'"';
                        }
                    ?>
                >
            </div>

            <div class="form-group">
                <label>Tóm tắt</label>
                <textarea class="form-control" name="intro"><?php 
                    if (isset($_POST["intro"])) {
                        echo $_POST["intro"];
                    }
                ?></textarea>
                <script>
                    CKEDITOR.replace('intro',{
                        filebrowserBrowseUrl: 'http://localhost/Online/PHP-PROJECT/admin/public/plugins/ckfinder/ckfinder.html',
                        filebrowserUploadUrl: 'http://localhost/Online/PHP-PROJECT/admin/public/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    });
                </script>
            </div>

            <div class="form-group">
                <label>Nội dung</label>
                <textarea class="form-control" name="content"><?php 
                    if (isset($_POST["content"])) {
                        echo $_POST["content"];
                    }
                ?></textarea>
                <script>
                    CKEDITOR.replace('content',{
                        filebrowserBrowseUrl: 'http://localhost/Online/PHP-PROJECT/admin/public/plugins/ckfinder/ckfinder.html',
                        filebrowserUploadUrl: 'http://localhost/Online/PHP-PROJECT/admin/public/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    });
                </script>
            </div>

            <div class="form-group">
                <label>Hình ảnh</label>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>

            <div class="form-group">
                <label>Trạng thái</label>
                <select class="form-control" name="status">
                    <option value="1">Hiển thị</option>
                    <option value="0">Ẩn</option>
                </select>
            </div>

            <div class="form-group">
                <label>Nổi bật</label>
                <select class="form-control" name="featured">
                    <option value="0">Ẩn</option>
                    <option value="1">Hiển thị</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="create" class="btn btn-info">Thêm</button>

            <button type="reset" class="btn btn-default float-right">Xóa</button>
        </div>
    </div>
</form>