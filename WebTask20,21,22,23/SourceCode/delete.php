<?php
include "dbcon.php";



$id = $_GET['id'];
$delete = "DELETE FROM userinfo WHERE id = $id";
$query = mysqli_query($conn , $delete );
if($query)
{
	echo "
	<script>
		alert('Data Has deleted successfully');
		window.location.href='dashboard.php';
	</script>
	";
	// header("location:dashboard.php");
}


 ?>