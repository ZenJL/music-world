<div class="card">
    <div class="card-header">
        <h3 class="card-title">Song List</h3>
    </div>
    <div class="card-body">

        <table id="datatable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Song id</th>
                    <th>Song name</th>
                    <th>Artist</th>
                    <th>Song lyric</th>
                    <th>Album id</th>
                    <th>Category</th>
                    <th>Song download count</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $songs = get_all_song ($conn);
                    $cats = get_all_category($conn);
                    $artists = get_all_artist($conn);
                    foreach ($songs as $song) {
                ?>
                <tr>
                    <td><?php echo $song["id_song"] ?></td>
                    <td><?php echo $song["song_name"] ?></td>
                    <td><?php echo $artists[$song["id_artist"]-1]["artist_name"] ?></td>
                    <td><?php echo $song["song_lyric"] ?></td>
                    <td><?php echo $song["id_album"] ?></td>
                    <td><?php echo $cats[$song["category_id"]-1]["name"] ?></td>
                    <td><?php echo $song["song_download_count"] ?></td>
                    <td><a onClick="return checkDelete('Delete this song?')" href="index.php?module=song&action=delete&id=<?php echo $song["id_song"] ?>">Delete</a></td>
                    <td><a href="index.php?module=song&action=edit&id=<?php echo $song["id_song"] ?>">Edit</a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Song id</th>
                    <th>Song name</th>
                    <th>Artist</th>
                    <th>Song lyric</th>
                    <th>Album id</th>
                    <th>Category</th>
                    <th>Song download count</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->