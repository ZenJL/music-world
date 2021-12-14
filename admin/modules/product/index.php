<div class="card">
    <div class="card-header">
        <h3 class="card-title">List Product</h3>
    </div>
    <div class="card-body">
        Display List Product
    </div>
</div>

<div class="card">
<div class="card-header">
<h3 class="card-title">Danh sách sản phẩm</h3>
</div>
<div class="card-body">
<table id="datatable" class="table table bordered table -striped">
<thead>
<tr>
    <th>Hinh</th>
    <th>Tên sp</th>
    <th>Thể loại</th>
    <th>giá</th>
    <th>Trạng thái</th>
    <th>Nổi bật</th>
    <th>Xóa</th>
    <th>Sữa</th>

</tr>
</thead>
<tbody>
<?<php>
$products = get-all-product ($conn);
foreach ($products as $product){
</php>
<tr>
                <td>
                    <img onerror="imgError(this);" src="../public/upload/<?php echo $" />

                </td>
                <td>
                    <?php echo $product["name"]?>
    </td>
    <td>
        <?php echo $product["cname"]?>
    </td>
    <td>
        <?php echo number_format ($product["price"],0,"",".")> ?>
    </td>
    <td>
        <?<php>
    if ($product["status"]==1){
        echo '<div class="badge badge-primary">Hiển thị </div>';
    }else {
        echo '<div class="badge badge-secondary"> Không Hiển thị </div>';
    }
</php>
</td>
<td>
    <?<php>
    if ($product["status"]==1){
        echo '<div class="badge badge-primary"> Nổi bật </div>';
    }else {
        echo '<div class="badge badge-secondary"> Không nổi bật </div>';
    }
</php>
</td>
<td><a ondblclick="return checkDelete('BANj có muốn cahwcs xóa sp này không ?')">Xóa</a>
    </td>
    <td><a href="index.php?module=product$action=delete$id=<?php echo $product[" id "] ?>">SỮa </a>
    </td>
    </tr>
    <?<php>
}
</php>
</tbody>
<tfoot>
<tr>
<th>Hinh</th>
<th>Tên sp</th>
<th>Thể loại</th>
<th>giá</th>
<th>Trạng thái</th>
<th>Nổi bật</th>
<th>Xóa</th>
<th>Sữa</th>
</tr>
</tfoot>
</table>
</div>

</div>
