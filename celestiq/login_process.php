<?php
session_start();

require 'dbconfig/config.php';


	if(isset($_POST['login_btn']))
	{
		$email= $_POST['email'];
		$password= $_POST['password'];
		$last_login = date("d-m-Y h:i:s");

		$query= "select * from ruser WHERE email= '".$email."' ";
		$query_run1 = mysqli_query($con, $query);

		if(mysqli_num_rows($query_run1)>0)
		{
			$result =  mysqli_fetch_assoc($query_run1);
			$id = $result['ruser_id'];
			if($result['password']==$password){
				$_SESSION['user_id'] = $result['ruser_id'];
				$_SESSION['fname'] = $result['fname'];
				$_SESSION['lname'] = $result['lname'];
				$_SESSION['email'] = $result['email'];
				$_SESSION['contactno'] = $result['contactno'];

				$_SESSION['user_login'] = "yes";

				$query2 = "update ruser set last_login= '".$last_login."' where ruser_id= '".$id."'";

				mysqli_query($con, $query2);

				header("Location: homepage.php");
			}
			else
			{
				$_SESSION['msg'] = "Invalid credentials. Try again!";
				$_SESSION['user_login'] = "no";
				header("Location: index.php");
			}
			
			
		}
		else
		{
			$_SESSION['msg'] = "Account with the entered email not found. Please create your account first.";
			header("Location: register.php");
		}
	}

	?>