<?php

include 'connect.php';
$id=$_GET['updateid'];  

//so that it can display data to be updated each rows. 
$sql="select*from `crud` where id=$id";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result); 
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password']; 

// end

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  //unsafe way
  $sql="update `crud` set id=$id, name = '$name', email='$email', mobile='$mobile', password='$password'
  where id=$id ";  //avoids primary key error
 

  $result = mysqli_query($con, $sql);
  if($result){
    //echo "Updated successfully";
    header('location:display.php');  //to display "data inserted successfully" on display page
  }else{
    die(mysqli_error($con));
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
      <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> 

    <title>Crud Operation</title>
</head>
<body>
    <div class = "container my-5">
<form method = "post">

<div class="form-group"> 
    <label>Name</label>
    <input type="text" 
    class="form-control" 
    placeholder="Enter your name" 
    name="name" autocomplete="off" value=<?php echo $name ; ?>>
</div>

<div class="form-group"> 
    <label>Email</label>
    <input type="email" 
    class="form-control" 
    placeholder="Enter your email" 
    name="email" autocomplete="off" value=<?php echo $email ; ?>>
</div>

<div class="form-group"> 
    <label>Mobile</label>
    <input type="text" 
    class="form-control" 
    placeholder="Enter your mobile number" 
    name="mobile" value=<?php echo $mobile ; ?>>
</div>

<div class="form-group"> 
    <label>Password</label>
    <input type="password" 
    class="form-control" 
    placeholder="Enter your password" 
    name="password" value=<?php echo $password ; ?>>
</div>

<!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->

  <button type="submit" class="btn btn-primary" name="submit">Update</button>

</form>

    </div>
</body>
</html>