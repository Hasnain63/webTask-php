<?php
session_start();
if (isset($_SESSION['message'])) {
	header("location:dashboard.php");
}
if ($_POST) {
	if ($_POST['uname'] == 'husnain' && $_POST['psw'] == '123') {
		$_SESSION['message'] = true;
		header("location:dashboard.php");
	} else {
		$error = true;
	}
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="text-center">Admin Login</h1>
                <form action="" method="POST" class="form-group">
                    <?php if (isset($error)) {
						echo "<div class='alert alert-danger'>Email or Password is incorrect.</div>";
					} ?>
                    <div>
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required class="form-control">
                    </div>
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required class="form-control">
                    <br>
                    <button type="submit" name="submit" class="form-control btn btn-primary">Login</button>
                    <div style="margin-top: 20px;">
                        <button type="reset" class="btn btn-primary form-control">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>