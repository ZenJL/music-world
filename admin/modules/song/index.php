<div class="card">
    <div class="card-header">
        <h3 class="card-title">Song List</h3>
    </div>
    <div class="card-body">
        <table id="datatable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Song id</th>
                    <th>Image</th>
                    <th>Song name</th>
                    <th>Artist</th>
                    <th>Song lyric</th>
                    <th>Release date</th>
                    <th>Category</th>
                    <th>Song download count</th>

                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $songs = get_all_song ($conn);
                    foreach ($songs as $song) {
                ?>
                <tr>
                    <td>
                        <img onerror="imgError(this);" src="../public/upload/<?php echo $song["image"] ?>" width="80px" />
                    </td>
                    <td><?php echo $song["name"] ?></td>
                    <td><?php echo $song["cname"] ?></td>
                    <td><?php echo number_format($song["price"],0,"",".") ?></td>

                    <td><a onClick="return checkDelete('Delete this song?')" href="index.php?module=song&action=delete&id=<?php echo $song["id_song"] ?>">Delete</a></td>
                    <td><a href="index.php?module=song&action=edit&id=<?php echo $song["id"] ?>">Edit</a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Song id</th>
                    <th>Image</th>
                    <th>Song name</th>
                    <th>Artist</th>
                    <th>Song lyric</th>
                    <th>Release date</th>
                    <th>Category</th>
                    <th>Song download count</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->