<div class="card">
    <div class="card-header">
        <h3 class="card-title">Event list</h3>
    </div>
    <div class="card-body">

        <table id="datatable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Event id</th>
                    <th>Category</th>
                    <th>Event name</th>
                    <th>Event date</th>
                    <th>Event place</th>
                    <th>Event description</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $events = get_all_event ($conn);
                    $cats = get_all_category($conn);
                    $artists = get_all_artist($conn);
                    foreach ($events as $event) {
                ?>
                <tr>
                    <td><?php echo $event["id_event"] ?></td>
                    <td><?php echo $cats[$event["category_id"]-1]["name"] ?></td>
                    <td><?php echo $event["event_name"] ?></td>
                    <td><?php echo $event["event_date"] ?></td>
                    <td><?php echo $event["event_place"] ?></td>
                    <td><?php echo $event["event_desc"] ?></td>
                    <td><a onClick="return checkDelete('Delete this event?')" href="index.php?module=event&action=delete&id=<?php echo $event["id_event"] ?>">Delete</a></td>
                    <td><a href="index.php?module=event&action=edit&id=<?php echo $event["id_event"] ?>">Edit</a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Event id</th>
                    <th>Category</th>
                    <th>Event name</th>
                    <th>Event date</th>
                    <th>Event place</th>
                    <th>Event description</th>
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