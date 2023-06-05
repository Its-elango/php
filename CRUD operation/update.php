
<?php

 include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from operation where id=$id";

$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

		$name=$row['name'];
		$email=$row['email'];
		$phone=$row['phone'];
		$password=$row['password'];
		
		
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	
	$sql="update operation set id=$id,name='$name',email='$email',phone='$phone',password='$password' where id=$id";

	$result=mysqli_query($con,$sql);
	
	if($result)
	{
		//echo "Data updated inserted.";
		header('location:display.php');
	}
	else
	{
	  die(mysqli_error($con));
	}

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"  >
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>CRUD Op</title>
  </head>
  <body>
  <div class="container my-5">
    <form method="post">
	<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" autocomplete="off" name="name" value=<?php
	echo $name; ?>> </div>
	
	<div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control"  autocomplete="off" name="email" value=<?php
	echo $email; ?>></div>
	
  <div class="mb-3">
    <label  class="form-label">Phone</label>
    <input type="tel" class="form-control" autocomplete="off" name="phone" value=<?php
	echo $phone; ?>> </div>
 
  
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control"  autocomplete="off" name="password" value=<?php
	echo $password; ?>>
  </div>
  
  
  
  <button type="submit" class="btn btn-dark" name="submit">Update</button>
</form>
  </div>
  </body>
</html>