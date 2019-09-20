<?php
session_start();

require 'dbconfig/config.php';


	if(isset($_POST['signup_btn']))
	{
		$fname= $_POST['firstname'];
		$lname= $_POST['lastname'];
		$contactno= $_POST['contact'];
		$email= $_POST['email'];
		$password= $_POST['password'];
		$cpassword= $_POST['cpassword'];
		$acc_created = date("d-m-Y");

		if($password==$cpassword)
		{
			$query= "select * from ruser WHERE email= '".$email."' ";
			$query_run1 = mysqli_query($con, $query);

			if(mysqli_num_rows($query_run1)>0)
			{
				
				$_SESSION['msg'] = "Email already exists.. Try another email";
				header("Location: register.php");

				exit(0);

			}
			else
			{
				$query2="insert into ruser (fname,lname,contactno,email,password,account_created) values('$fname','$lname','$contactno','$email','$password','$acc_created')";
				
			}


			if(mysqli_query($con, $query2))
			{
				//echo '<script type="text/javascript"> alert(User Registered.. Go to login page to login")</script>';
				$_SESSION['msg'] = "User Registered";
				header("Location: index.php");
			}
			else
			{
				//echo '<script type="text/javascript"> alert("Error!")</script>';
				$_SESSION['msg'] = mysqli_error($con);
				header("Location: register.php");

			}
		}
		else
		{
			$_SESSION['msg'] = "Error! Password did not match";
			header("Location: register.php");
		}
	}

	?>