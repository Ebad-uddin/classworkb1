<?php

include('config.php');

$user_id = $_GET['id'];

$update = "UPDATE  `user-registration` SET `status` = '0' where id = '$user_id'";

$update_run = mysqli_query($connection, $update);

if($update_run){
    echo "<script>alert('data added to trash')</script>";
    header('location:trashdata.php');
}else{
    echo "query failed";
}




?>