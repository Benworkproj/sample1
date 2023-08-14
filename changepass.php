<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="changepass.css">
</head>
<body style="background-color:rgb(30, 30, 30);">

<div class="white-bg">
	<div class="cp">
		<h1 class="text-cp">Change <br>/Forgot <br> Password</h1>
	</div>	
</div>


<form action="change-p.php" method="POST">
	<div class="newpass">


		<!---Bali ito yung error na lalabas pag hindi na meet yung requirement sa new pass, then kahit lagay nalang din ng error na "Wrong password if hindi nag match yung old pass nya"--->
		<p class="error">*Your password must be between 8  and 32 characters  long, and must contain letters and either numbers or special characters.</p>
		<!----->

	    <div>
	    	<p class="text-old">Email:</p>
			<input class="oldpass"  type="text" name="Email" required>
		</div>
		 <br>
		<div >
			<p class="text-new">New Password:</p>
			 <input class="newpass"type="password" name="Password" required>
		</div>
		<br>
		<div >
			<p class="text-confirm">Confirm Password:</p>
			 <input class="cpass"type="password" name="ConfirmPass" required>
		</div>

		<br>
		<div>
		<input class="sub-btn" type="submit" name="submit" value="submit">
		</div>
	</div>
</form>
</body>
</html>