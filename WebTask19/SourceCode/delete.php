<?php 
include "conn.php";

$id = $_GET['id'];

$delete = "DELETE FROM userinfo WHERE  id=$id";

$query = mysqli_query($conn , $delete);

if($query)
{
	?>
	<script>
		alert("Deleted");
		window.location.href="second_page.php";
	</script>

	<?php
}   
else
{
	echo "not deteled";
}
 ?>