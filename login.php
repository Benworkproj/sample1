<?php
session_start();
include "config.php";
if(isset($_POST["submit"])){
	$Email = $_POST["email"];
	$Password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE Email = '$Email'");
	$row = mysqli_fetch_assoc($result);
	if($row > 0){
		if($Password == $row["Password"]){
 		$_SESSION["login"] = true;
 		$_SESSION["id"] = $row["id"];
 		header("Location:Homepage.php");
	}
	else{
		echo 
		"<script> alert('Wrong Password'); </script>";
	}
}	
	else{
	echo 
		"<script> alert('User Not Registered'); </script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body style="background-color:rgb(30, 30, 30);">



<div class="container">
	<div class="login-acc">
	<h1>Login!</h1>
	
	</div>
	<div class="welcome">
		<h1>Welcome</h1>
	</div>
	
	<div class="back">
		<h1>back!</h1>
	</div>
</div>


<form action="" method="POST">
	<div class="login">
	    <div>
			<input class="email"  type="email" name="email" required placeholder="Email">
		</div>
		 <br>
		<div >
			 <input class="pass"type="password" name="password" required placeholder="Password">
		</div>

		<div>
			<input class="checkbox" type="checkbox" name="checkbox">
			<p class="rem">Remember me</p>
			<a  class="fpass" href="changepass.php">Forgot password?</a>
			
		</div>	

			<div class="create">
			<p class="dont-acc">Don't have account?</p>
			</div>

		<div  class="signup">
		  <a class="xsign"href="signup.php">Sign up</a>	
		</div>
		

		<div>
		<input class="sub-btn" type="submit" name="submit" value="Login">
		</div>
		

		
	
	</div>
</form>
			
</body>
</html>