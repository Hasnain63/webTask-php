<?php
	session_start();
	if(!isset($_SESSION['message']))  { header("location:login.php"); }
	include "dbcon.php";
	$select = "SELECT * FROM userinfo";
	$query = mysqli_query($conn , $select);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
		<div class="d-flex justify-content-end " style="margin-right: 20px; margin-top: 20px">
			<a href="logout.php" class="btn btn-danger d-flex justify-content-center">LogOut</a>
		</div>
	<div class="w-100 p-4">
	<h1 class="text-center">Welcome to Dashboard</h1>
	<h2 class="text-center">Users List</h2>
	</div>
	<div class="container">
	  <table class="table table-bordered table-dark text-center col-md-12 col-sm-12 col-s-12" >
	    <thead>
	      <tr>
	      	<th>ID</th>
	        <th>Firstname</th>
	        <th>Lastname</th>
	        <th>Email</th>
	        <th>Phone Number</th>
	        
	        <th>Updated At</th>
	        <th colspan="2">Operations</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php  while ($result = mysqli_fetch_assoc($query))  { ?>
		        <tr>
			      	<td><?=$result['id']?></td>
			        <td><?=$result['firstname']?></td>
			        <td><?=$result['lastname']?></td>
			        <td><?=$result['email']?></td>
			        <td><?=$result['phonenumber']?></td>
			        <td><?=$result['updated']?></td>
			     	<td>
			        	<a href="update.php?id=<?php echo $result['id']?>">
			        	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class	="feather feather-edit">
			        		<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
			        		</path>
			        		<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
			        		</path>
			        	</svg>
			        </a>
			    </td>
			        <td>
			        	<a href="delete.php?id=<?=$result['id']?>" onclick="return confirm('Are you sure you want  to Delete? If Yes Press OK If No press Cancel');">
			        		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
			        			<polyline points="3 6 5 6 21 6"></polyline>
			        			<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
			        			<line x1="10" y1="11" x2="10" y2="17"></line>
			        			<line x1="14" y1="11" x2="14" y2="17"></line>
			        		</svg>
			        	</a>
			        </td>
		        </tr>
	      <?php } ?>
	    </tbody>
	  </table>
	</div>
</body>
</html>
