<?php
include('config.php');

$user_id = $_GET['id'];

$delete = "DELETE from `user-registration` where id = '$user_id'";
$delrun = mysqli_query($connection, $delete);
if($delrun){
    echo "data deleted";
}

?>