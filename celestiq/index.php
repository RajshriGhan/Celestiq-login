<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #696969">
	<div id="main-wrapper">
		<center><h2> Login Form</h2></center>
	<center><img src="imgs/images.png" class="log"></center>
	<?php
	if(isset($_SESSION['msg'])){
		echo '<center><h3 style="color:red">'.$_SESSION['msg'].'</h3></center>';
		unset($_SESSION['msg']);
	}
	?>
	<form class="myform" autocomplete="off" action="login_process.php" method="post">
		<label><b>Email:</b></label><br>
		<input type="text" class="inputvalues" name="email" placeholder="Type your email id"/><br><br>

		<label><b>Password:</b></label><br>
		<input type="password" class="inputvalues" name="password" placeholder="Type your password"/><br><br>

		<input type="submit" id="login_btn" name="login_btn" value="Login"/><br>

		<a href="register.php" id="register_btn">Register</a>

		


	</form>
	</div>
	
</body>
</html>