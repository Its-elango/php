<?php 
 
 include 'connect.php';


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
img
{
	width:100px;
}
</style>
    <title>CRUD op</title>
  </head>
  <body>
	<div class="container">
	<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a></button>
	</div>
	<div class="container">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
	  <th scope="col">Password</th>

      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
      <?php 
	$sql="select * from operation";
	
	$result=mysqli_query($con,$sql);
	
	if($result)
	{
	while($row=mysqli_fetch_assoc($result))
	{
		$id=$row['id']; 
		$name=$row['name'];
		$email=$row['email'];
		$phone=$row['phone'];
		$password=$row['password'];
		
		
		echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$phone.'</td>
	  <td>'.$password.'</td>
	   
	   <td><button class="btn btn-primary "><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
			<button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
		</td>
    </tr>';
		}
			
		
	}
	
	
	?>
	
  </tbody>
</table>
  </div>
  </body>
</html>