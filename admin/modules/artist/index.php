
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Artist List</h3>
    </div>
    <div class="card-body">

        <table id="datatable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Artist id</th>
                    <th>Artist name</th>
                    <th>Artist details</th>
                    <th>Artist achievements</th>
                    <th>Category</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $artists = get_all_artist ($conn);
                    $cats = get_all_category($conn);
                    $artists = get_all_artist($conn);
                    foreach ($artists as $artist) {
                ?>
                <tr>
                    <td>
                        <img onerror="imgError(this);" src="../public/upload/<?php echo $artist["artist_image"] ?>" width="80px" />
                    </td>
                    <td><?php echo $artist["id_artist"] ?></td>
                    <td><?php echo $artist["artist_name"] ?></td>
                    <td><?php echo $artist["artist_details"] ?></td>
                    <td><?php echo $artist["artist_achievements"] ?></td>
                    <td><?php echo $cats[$artist["category_id"]-1]["name"] ?></td>
                    <td><a onClick="return checkDelete('Delete this artist?')" href="index.php?module=artist&action=delete&id=<?php echo $artist["id_artist"] ?>">Delete</a></td>
                    <td><a href="index.php?module=artist&action=edit&id=<?php echo $artist['id_artist'] ?>">Edit</a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Image</th>
                    <th>Artist id</th>
                    <th>Artist name</th>
                    <th>Artist details</th>
                    <th>Artist achievements</th>
                    <th>Category</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->