<?php
include('header.php');
require('config.php');

$retrieveData = "SELECT * from `user-registration`";
$sqlquery = mysqli_query($connection, $retrieveData);
if($sqlquery){
    // print_r($sqlquery);
    if(mysqli_num_rows($sqlquery) > 0){
        
        
           
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>

<div class="container mt-5 text-center table-bordered">
<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    while($row = mysqli_fetch_assoc($sqlquery)){
    ?>
    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><a class="btn btn-primary" href="update.php?id=<?php echo $row['id'] ?>"> Update </a></td>
      <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>"> Delete </a></td>
      
    </tr>
    
    <?php
      }
       
    }
    }
    ?>
  </tbody>
</table>
</div>








</body>
</html>
