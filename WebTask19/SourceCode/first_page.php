<!DOCTYPE html>
<html>

<head>
    <title>First Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h1 style="text-align: center; ">Enter Your Details</h1>
    <div class="container flex justify-content-center " style="width: 400px">
        <form method="POST" action="second_page.php" class="form-group  ">
            <label>First Name:</label>
            <input type="text" name="first_name" id="first_name" class="form-control" required>
            <br>

            <label>Last Name:</label>
            <input type="text" name="last_name" id="last_name" class="form-control " required>
            <br>

            <label>Email Address:</label>
            <input type="email" name="email" id="email" class="form-control " required>
            <br>

            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control " required>
            <br>

            <label>Phone Number:</label>
            <input type="number" name="phone_number" id="phone_number" class="form-control " required>
            <br>
            <button type="submit" name="submit" class="form-control btn btn-primary">Add Record</button>
        </form>
    </div>
</body>
</htm