<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Registration Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #696969">
	<div id="main-wrapper">
		<center><h2> Registration Form</h2></center>
	<center><img src="imgs/images.png" class="log"></center>
	<?php
	if(isset($_SESSION['msg'])){
		echo '<center><h3 style="color:red">'.$_SESSION['msg'].'</h3></center>';
		unset($_SESSION['msg']);
	}
	?>
	<form class="myform" autocomplete="off" action="register_process.php" method="post">

		<label><b>First Name:</b></label><br>
		<input required name="firstname" type="text" class="inputvalues" placeholder="Enter your first name"/><br>

		<label><b>Last Name:</b></label><br>
		<input required name="lastname" type="text" class="inputvalues" placeholder="Enter your last name"/><br>

		<label><b>Contact:</b></label><br>
		<input required name="contact" type="text" class="inputvalues" placeholder="Enter your contact no"/><br>

		<label><b>Email:</b></label><br>
		<input required name="email" type="text" class="inputvalues" placeholder="Enter your email id"/><br>

		<label><b>Password:</b></label><br>
		<input required name="password" type="password" class="inputvalues" placeholder="Enter your password"/><br>

		<label><b>Confirm Password:</b></label><br>
		<input required name="cpassword" type="password" class="inputvalues" placeholder="Enter your password again"/><br>

		<input name="signup_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
		<br>
	</div>
	
</body>
</html>