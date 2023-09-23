<?php
include('header.php');
include("config.php");

if(isset($_POST['submit'])){
    $log_email = $_POST['login_email'];
    $log_pass = $_POST['login_pass'];

    $fetch_db_info = "SELECT * from `userdetails` where email = '$log_email'";

    $run_query = mysqli_query($connection, $fetch_db_info);

    if($run_query){
        if(mysqli_num_rows($run_query) > 0){
            $data = mysqli_fetch_assoc($run_query);

            $db_pass = $data['password'];
            
            $pass_decrypt = password_verify($log_pass, $db_pass);
            if($pass_decrypt){
                echo "<script> alert ('login successful')</script>";
            }
            else{
                echo "<script> alert ('login failed')</script>";
            }
        }else{
            echo "<script> alert ('Invalid email/password')</script>";        }
    }else{
        echo "query failed". mysqli_connect_error();
    }

}
                
                




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-3">
        <h1> Login Form </h1>
    
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="form-group">

<label for="email"> Email </label>
<input type="email" name="login_email" required class="form-control">
<br>
<label for="pass"> Password </label>
<input type="password" name="login_pass" required class="form-control">
<br>
<input class="btn btn-primary" type="submit" name="submit" value="Login">
</form>


</div>

</body>
</html>