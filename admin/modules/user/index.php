<?php
session_start();
ob_start();

if(($_SESSION["login"]["level"]) != 1 ) {
    header("location:login.php");
    exit();
}

require_once "../config.php";
require_once "../libs/connect.php";
require_once "../libs/functions.php";
?>

<div class="card">
<div class="card-header">
<h3 class="card-title">List of users</h3>
</div>
<div class="card-body">
    <table id="datatable" class="table table bordered table -striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>User type</th>
            <th>Delete</th>
            <th>Edit</th>

        </tr>
    </thead>
    <tbody>
    <?php
        $users = get_all_user ($conn);
        $stt = 0;
        foreach ($users as $user){
            $stt++;
    ?>
    <tr>
        <td><?php echo $stt?></td>
        <td> <?php echo $user["email"]?></td>
        <td> <?php
            if ($user["id"] == 1) {
                echo '<b></b><span class ="text-danger">Superadmin</span></b>';
            }elseif ($user["level"] == 1){
                echo '<span class ="text-danger">Admin</span>';
            } else {
                echo '<span>Member</span>';
            }
        ?></td>
        <td><a onClick="return checkDelete('Delete this member ?')" href="index.php?module=user&action=delete&id=<?php echo $user["id"] ?>">Delete</a></td>
        <td><a href="index.php?module=user&action=delete$id=<?php echo $user["id"] ?>">Edit</a></td>
    </tr>
    <?php
    }
    ?>
</php>
</tbody>
<tfoot>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>User type</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
</tfoot>
</table>
