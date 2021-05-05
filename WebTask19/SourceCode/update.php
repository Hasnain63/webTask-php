<?php 
include "conn.php";
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<h1 style="text-align: center; ">Update Details</h1>
	<div class="container flex justify-content-center " style="width: 400px">
	<form method="POST" action="" class="form-group  ">
		<?php

		$id = $_GET['id'];

		$select = "SELECT * FROM userinfo WHERE id=$id";

		$query = mysqli_query($conn , $select);

		$result = mysqli_fetch_assoc($query);


		 ?>
		<label>First Name:</label>
		<input type="text" name="first_name" id="first_name" class="form-control" required value="<?php 
		echo $result['firstname']?>" >
		<br>

		<label>Last Name:</label>
		<input type="text" name="last_name" id="last_name" class="form-control " required value="<?php 
		echo $result['lastname']?>">
		<br>

		<label>Email Address:</label>
		<input type="email" name="email" id="email" class="form-control " required value="<?php 
		echo $result['email']?>">
		<br>

		<label>Password</label>
		<input type="password" name="password" id="password" class="form-control "  value="">
		<br>

		<label>Phone Number:</label>
		<input type="number" name="phone_number" id="phone_number" class="form-control " required value="<?php 
		echo $result['phonenumber']?>">
		<br>
		<button type="submit" name="submit" class="form-control btn btn-primary">Update Record</button>
	</form>
	</div>
</body>
</html>
<?php
					if(isset($_POST['submit']))
					{
					
					$id = $_GET['id'];
					$first_name = $_POST['first_name'];
					$last_name = $_POST['last_name'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$phone_number = $_POST['phone_number'];
					if (empty($password)) {
						$updatequery = "UPDATE userinfo SET firstname='$first_name', lastname= '$last_name', phonenumber='$phone_number', email='$email' WHERE id=$id ";
					}
					else
					{
						$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
						$updatequery = "UPDATE userinfo SET firstname='$first_name', lastname= '$last_name', phonenumber='$phone_number', email='$email' ,password='$hashedpassword' WHERE id=$id ";
					}
					

					$query = mysqli_query($conn,$updatequery);
					
					if($query)
					{
					?>
						<script>
							alert("Updated Successfully");
						</script>
						
					<?php
						header('location:second_page.php');
					}

				}
				?>