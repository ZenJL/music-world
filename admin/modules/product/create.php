<div class="card">
<div class="card-header">
    <h3 class="card-title">Add Product</h3>
</div>
<div class="card-body">
    Display Add Product
</div>
</div>
<?php
$errors = array();
$parent_category = get_all_category($conn);

if (isset($_POST["create"])){

if (empty($_POST["name"])) {
$errors[] = "Vui lòng nhập tên sảm phẩm!";
}    

if (empty($_POST["price"])) {
$errors[] = "Vui lòng nhập giá sảm phẩm!";
}

if (empty($_POST["intro"])) {
$errors[] = "Vui lòng tóm tắt sảm phẩm!";
}

if (empty($_POST["image"]["name"])) {
$errors[] = "Vui lòng nhập hình ảnh sảm phẩm!";
}

if (checkImage($_FILE["image"]["name"])) {
$errors[]="không phải là file hình";
}

if (empty($errors)) {
$file = changNameFile $_FILES["image"]["name"]
$data = array(
    'name' => $_POST["name"],
    'price' => $_POST["price"],
    'intro' =>  $_POST["intro"],
    'content' =>  $_POST["content"],
    'image' =>$file
    'status' =>  ($_POST["status"]=="on"),?1 : 0,
    "featured" => ($_POST["featured"]=="on"),?1 : 0,
    "category_id" => ($_POST["category_id"]=="on"),?1 : 0,
);
if(check_product_exist ($conn,$data)){
    create_product ($conn,$data);
    move_uploaded_file($_FILES["image"]["tmp"],'../public/'upload/'.$file);

    hearder ("location:index.php?module=product");
    exit();
}else {
    $errors[] = "Tên sản phẩm này đã tồn tại rồi";
}
}
} 

?>
<?php if (!empty($errors)): ?>
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-ban"></i> Error!</h5>
    <ul>
        <!-- show error -->
        <?php foreach ($errors as $error): ?>
        <li>
            <?php echo $error ?>
        </li>
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
<?php if (!empty($errors)): ?>
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-ban"></i> Lỗi!</h5>
    <ul>
        <!-- show error -->
        <?php foreach ($errors as $error): ?>
        <li>
            <?php echo $error ?>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<form action="enctype" method="post">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Thêm sản phẩm</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Thể loại </label>
                <select class="form-control" name="category_id">
                    <?php recursiveOption($parent_category,$_POST["category_id"],3) ?>
                </select>
            </div>

            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" placeholder="Vui lòng nhập tên sản phẩm ">
                <?php
            if(isset($_POST["name"])){
                echo 'value = "'.$_POST["name"].'"';
        }
        ?>

</div>

<div class="form-group">
    <label>GIá sản phẩm</label>
    <input type="text" name="price" class="form-control" placeholder="Vui lòng nhập giá sản phẩm ">
    <?php 
        if(isset($_POST["price"])){
            echo 'value = "'.$_POST["price"].'"';
    }
    ?>
</div>\

<div class="form-group">
    <label>Tóm tắt</label>
    <textarea class="form-control" name="intro"><?php
            if(isset($_POST["intro"])){
                echo $_POST["intro"];
        }
    ?></textarea>
    <script>
        CKEDITOR.replace( 'intro',{
filebrowserBrowseUrl: 'http://localhost/online/PhP-PROJECT/admin/publics/ckfinder/browser/browse.php',
filebrowserUploadUrl: 'http://localhost/online/PhP-PROJECT/admin/publics/ckfinder/browser/browse.php',
});


    </script>

</div>

<div class="form-group">
    <label>Nội dung</label>
    <textarea class="form-control" name="content"><?php
            if(isset($_POST["content"])){
                echo $_POST["content"];
        }
    ?> </textarea>
    <script>
        CKEDITOR.replace('content',{
            filebrowserBrowseUrl: 'http://localhost/online/PhP-PROJECT/admin/publics/ckfinder/browser/browse.php',
            filebrowserUploadUrl: 'http://localhost/online/PhP-PROJECT/admin/publics/ckfinder/browser/browse.php',
        });
    </script>


</div>
<div class="form-group">
<label>Hình ảnh</label>
<div class="custom-file">
<input type="file"name="image"class"custom-file-input"id="customFile">
<label class="custom-file-lable" for="customFile">Choose file</label>
</div>



<div class="form-group">
<label>Trạng thái</label>
<select class="form-control" name="status">
</select>
</div>
<div class="card-footer">
<button type="submit" name="create" class="btn btn-primary">Thêm </button>
<button type="reset" class="btn btn-default float-right">Xóa</button>
</div>
</div>
</form>
