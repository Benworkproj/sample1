<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body style="background-color:rgb(30, 30, 30);">

<div class="create-acc">
	<h1>Create an account!</h1>
</div>

<form action="signup_confirm.php" method="POST">
<div class="signup">
	<div class="left-form">

		<input class="Fullname"  type="text" name="FullName" id= "Fullname" required value= "" required placeholder= "Full name"> <br>
		<input class="StudentID" type="number" name="StudentID" id= "StudentID" required value= "" required placeholder= "Student ID"> <br>
		<input class="Sports" type="text" name="Sports" id= "Sports" required value= "" required placeholder="Sports"> <br>
		<input class="year" type="text" name="YearSec"  id= "YearSec" required value= ""required placeholder= "Year & Section"> <br>
		<input class="birth" type="date" name="Bday" id= "Bday" required value= "" required placeholder= "Birthday"> <br>
	 
	 </div>	

	 <div class="right-form">
	    
	 	<input class="right" type="email" name="Email" id= "Email" required value= "" required placeholder="Email"> <br>
    	<input class="right" type="password" name="Password" id= "Password" required value= "" required placeholder="Password"> <br>  
		<input class="right" type="password" name="ConfirmPass" id= "ConfirmPass" required value= "" required placeholder="Confirm Pass"> <br>
		

	</div>


	<div class="al-acc2">
		<p class="al-acc">Already have account?</p>
	</div>

	<div class="login">
		<a class= "login2"href="login.php">Log in</a>
	</div>

	<div >
		<input class="sub-btn" type="submit" name="submit" value="Sign up">
	</div>

	
</div>	
</form>

</body>
</html>