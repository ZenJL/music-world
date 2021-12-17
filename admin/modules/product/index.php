<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách sản phẩm</h3>
    </div>
    <div class="card-body">
        <table id="datatable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Hình</th>
                    <th>Tên sản phẩm</th>
                    <th>Thể loại</th>
                    <th>Giá</th>
                    <th>Trạng thái</th>
                    <th>Nổi bật</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $products = get_all_product ($conn);
                    foreach ($products as $product) {
                ?>
                <tr>
                    <td>
                        <img onerror="imgError(this);" src="../public/upload/<?php echo $product["image"] ?>" width="80px" />
                    </td>
                    <td><?php echo $product["name"] ?></td>
                    <td><?php echo $product["cname"] ?></td>
                    <td><?php echo number_format($product["price"],0,"",".") ?></td>
                    <td>
                        <?php 
                        if ($product["status"] == 1) {
                            echo '<div class="badge badge-primary">Hiển thị</div>';
                        } else {
                            echo '<div class="badge badge-secondary">Không hiện</div>';
                        }
                        ?>
                    </td>
                    <td>
                    <?php 
                        if ($product["featured"] == 1) {
                            echo '<div class="badge badge-primary">Nổi bật</div>';
                        } else {
                            echo '<div class="badge badge-secondary">Không nổi bật</div>';
                        }
                        ?>
                    </td>
                    <td><a onClick="return checkDelete('Bạn có chắc muốn xóa sản phẩm này hay không ?')" href="index.php?module=product&action=delete&id=<?php echo $product["id"] ?>">Xóa</a></td>
                    <td><a href="index.php?module=product&action=edit&id=<?php echo $product["id"] ?>">Sửa</a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Hình</th>
                    <th>Tên sản phẩm</th>
                    <th>Thể loại</th>
                    <th>Giá</th>
                    <th>Trạng thái</th>
                    <th>Nổi bật</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->