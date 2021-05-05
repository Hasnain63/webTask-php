<?php
	include "dbcon.php";
			if(isset($_POST['submit'])){
			$id = $_GET['id'];
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$phone_number = $_POST['phone_number'];
			if (empty($password)){
				$updatequery = "UPDATE userinfo SET firstname='$first_name', lastname= '$last_name',phonenumber='$phone_number', email='$email' WHERE id=$id ";
			}
			else{	
				$updatequery = "UPDATE userinfo SET firstname='$first_name', lastname= '$last_name', phonenumber='$phone_number', email='$email' ,password='$password' , 
					updated=CURRENT_TIME() WHERE id=$id ";
			}
			$query = mysqli_query($conn,$updatequery);
			if($query){
			?>
				<script>
					alert("Updated Successfully");
				</script>
			<?php
				header('location:dashboard.php');
			}
		}
		?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Update Record</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<form class="form-group col-md-4 col-sm-12" method="POST">
			<?php
			$id = $_GET['id'];
			$select = "SELECT * FROM userinfo WHERE id='$id'"; 
			$query = $query = mysqli_query($conn , $select);
			$result = mysqli_fetch_assoc($query);
			?>
			<h1 class="text-center">Update Record</h1>
			<div>
			<label>First Name:</label>
			<input type="text" name="first_name" id="first_name" class="form-control" required value="<?=
			$result['firstname']?>" >
			</div>
			<div>
			<label>Last Name:</label>
			<input type="text" name="last_name" id="last_name" class="form-control " required value="<?=
			$result['lastname']?>">
			</div>
			<label>Email Address:</label>
			<input type="email" name="email" id="email" class="form-control " required value="<?=
			$result['email']?>">
			<div>
			<label>Password</label>
			<input type="password" name="password" id="password" class="form-control "  value="">
			</div>
			<div>
			<label>Phone Number:</label>
			<input type="number" name="phone_number" id="phone_number" class="form-control " required value="<?=
			$result['phonenumber']?>">
			</div>
			<div class="mt-3">
			<button type="submit" name="submit" class="form-control btn btn-primary">Update Record</button>
			</div>
		</form>
	</div>
</div>
</body>
</html>
