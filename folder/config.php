<?php
/* connection establishment with database
requirements: mysqli_connect("ServerName", "Username", "Password", "DATABASE");
*/
$connection = mysqli_connect("localhost", "root", "", "adminb1");
if(!$connection){
    echo "connection failed";
}
?>