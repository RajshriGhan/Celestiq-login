<?php
session_start();
if(!isset($_SESSION['user_login']) || $_SESSION['user_login']=="no"){
	header("Location: index.php");
	exit(0);
}

$first_name = $_SESSION['fname'];
$last_name = $_SESSION['lname'];

?>
<!DOCTYPE html>
<html>
<head>
	<title> Home Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #696969">
	<div id="main-wrapper">
		<center>
			<h2> Home Page </h2>
			<h3> Welcome <?=$first_name;?> </h3>
		</center>
	<center><img src="imgs/images.png" class="log"></center>

	<form class="myform" action="logout.php" method="post">
		
		<input type="submit" id="logout_btn" value="Log Out"/><br>
		


	</form>
	</div>
	
</body>
</html>