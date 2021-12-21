<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sách thành viên</h3>
    </div>
    <div class="card-body">
        <table id="datatable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Email</th>
                    <th>Quyền hạn</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $users = get_all_user ($conn);
                    $stt = 0;
                    foreach ($users as $user) {
                        $stt++;
                ?>
                <tr>
                    <td><?php echo $stt ?></td>
                    <td><?php echo $user["email"] ?></td>
                    <td>
                        <?php
                            if ($user["id"] == 1) {
                                echo '<b><span class="text-danger">Superadmin</span></b>';
                            } elseif ($user["level"] == 1) {
                                echo '<span class="text-danger">Admin</span>';
                            } else {
                                echo '<span>Member</span>';
                            }
                            
                        ?>
                    </td>
                    <td><a onClick="return checkDelete('Bạn có chắc muốn xóa thành viên này hay không ?')" href="index.php?module=user&action=delete&id=<?php echo $user["id"] ?>">Xóa</a></td>
                    <td><a href="index.php?module=user&action=edit&id=<?php echo $user["id"] ?>">Sửa</a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>STT</th>
                    <th>Email</th>
                    <th>Quyền hạn</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->