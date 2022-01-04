<div class="card">
    <div class="card-header">
        <h3 class="card-title">Album List</h3>
    </div>
    <div class="card-body">

        <table id="datatable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Album id</th>
                    <th>Album name</th>
                    <th>Artist</th>
                    <th>Album date</th>
                    <th>Category</th>
                    <th>Album download count</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $albums = get_all_album ($conn);
                    $cats = get_all_category($conn);
                    $artists = get_all_artist($conn);
                    foreach ($albums as $album) {
                ?>
                <tr>
                    <td>
                        <img onerror="imgError(this);" src="../public/upload/<?php echo $album["album_image"] ?>" width="80px" />
                    </td>
                    <td><?php echo $album["id_album"] ?></td>
                    <td><?php echo $album["album_name"] ?></td>
                    <td><?php echo $artists[$album["id_artist"]-1]["artist_name"] ?></td>
                    <td><?php echo $album["album_date"] ?></td>
                    <td><?php echo $cats[$album["category_id"]-1]["name"] ?></td>
                    <td><?php echo $album["album_download_count"] ?></td>
                    <td><a onClick="return checkDelete('Delete this album?')" href="index.php?module=album&action=delete&id=<?php echo $album["id_album"] ?>">Delete</a></td>
                    <td><a href="index.php?module=album&action=edit&id=<?php echo $album["id_album"] ?>">Edit</a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Image</th>
                    <th>Album id</th>
                    <th>Album name</th>
                    <th>Artist</th>
                    <th>Album date</th>
                    <th>Category</th>
                    <th>Album download count</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->