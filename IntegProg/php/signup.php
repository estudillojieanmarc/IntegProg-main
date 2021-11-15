<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$user_name = $_POST[' user_name'];
	$password = $_POST[' password'];

	if(!empty($user_name) && !empty($password) && !is_numeric($user_numeric))
	    {
		//save to database
		$user_id = random_num(20);
		$query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

		mysqli_query($con,$query);

		header("Location:  admin-login.php");
		die;
	}else{
        
		echo "Please enter some valid information";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
     <!-- Required meta tags -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../php-css/signup.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<!-- LOG IN FORM -->
<body>
    <div class="loginbox">
        <img src="../img/adminlogin.png" class="avatar">
        <h2>ADMIN SIGNUP</h2>
        <form method="POST" >
            <p>Username</p>
            <input type="text" name="user_name" value="" required placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" value="" required placeholder="Enter Password"><br>

            <button id="button" type="submit" class="btn btn-danger w-25" value="login">Login</button><br><br>
            <a href="admin-login.php">Click to Login?</a>
        </form>
    </div>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>