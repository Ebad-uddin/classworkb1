<?php
/* connection establishment with database
requirements: mysqli_connect("ServerName", "Username", "Password", "DATABASE");
*/
$connection = mysqli_connect("localhost", "root", "", "classb1");
if(!$connection){
    echo "connection failed";
}
?>