
<?php

 include 'connect.php';
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	
	
	$sql="insert into operation(name,email,phone,password) values('$name','$email','$phone','$password')";

	$result=mysqli_query($con,$sql);
	
	if($result)
	{
		//echo "Data successfully inserted.";
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
    <form method="post" enctype="multipart/form-data">
	<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" autocomplete="off" name="name"> </div>
	
	<div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control"  autocomplete="off" name="email"></div>
	
  <div class="mb-3">
    <label  class="form-label">Phone</label>
    <input type="tel" class="form-control" autocomplete="off" name="phone"> </div>
 
  
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control"  autocomplete="off" name="password">
  </div>
  
  
  <button type="submit" class="btn btn-dark" name="submit">Submit</button>
</form>
  </div>
  </body>
</html>