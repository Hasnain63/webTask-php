<!DOCTYPE html>
<html>

<head>
    <title>User Submission Form via AJAX</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php

	include "conn.php";
	// Check connection
	if (isset($_POST["submit"])) {
		if (isset($_POST["first_name"])) {
			$first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
		} else {
			$first_name = "";
		}
		if (isset($_POST["last_name"])) {
			$last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
		} else {
			$last_name = "";
		}
		if (isset($_POST["email"])) {
			$email = mysqli_real_escape_string($conn, $_POST["email"]);
		} else {
			$email = "";
		}
		if (isset($_POST["password"])) {
			$password = mysqli_real_escape_string($conn, $_POST["password"]);
			$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
		} else {
			$password = "";
		}
		if (isset($_POST["phone_number"])) {
			$phone_number = mysqli_real_escape_string($conn, $_POST["phone_number"]);
		} else {
			$phone_number = "";
		}

		$sql = "INSERT INTO userinfo(firstname, lastname, email, password, phonenumber) VALUES (
		'" . $first_name . "','" . $last_name . "','" . $email . "','" . $hashedpassword . "','" . $phone_number . "')";

		$query = mysqli_query($conn, $sql);

		if ($query) {
	?>
    <script>
    alert("Data Inserted Successfully");
    </script>
    <?php
		} else {
			echo "Data has not inserted";
		}
	}




	?>

    <table class="table table-bordered">
        <thead style="text-align: center;">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Phone Numbers</th>
                <th colspan="2">operations</th>
            </tr>
        </thead>
        <tbody style="text-align: center;">
            <?php

			$selectquery = "SELECT * FROM userinfo";

			$query = mysqli_query($conn, $selectquery);


			while ($result = mysqli_fetch_assoc($query)) {
			?>
            <tr>
                <td><?php echo $result['id']; ?></td>
                <td><?php echo $result['firstname']; ?></td>
                <td><?php echo $result['lastname']; ?></td>
                <td><?php echo $result['email']; ?></td>
                <td><?php echo $result['phonenumber']; ?></td>
                <!-- <td><a href="update.php?id=<?php //echo $result['id']; 
													?>">Update</a></td> -->
                <td><a href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>
            </tr>
            <?php
			}
			$conn->close();
			?>
            <a href="first_page.php" class="btn btn-primary">Go to SignUp page</a>
        </tbody>

    </table>
</body>

</html>