<?php
include("include/connection.php");
include("includes/functions.php");


	if($_POST["val"] == "Sign Up")
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone_no = $_POST['phone_no'];
		$password = $_POST['password'];
		$c_password = $_POST['c_password'];
		$user_type = $_POST['user_type'];
		$fill_date = date("Y-m-d H:i:s");
		
		$insert ="Insert into user_side(`name`,`email`,`phone_no`,`password`,`user_type`,`fill_date`)
		VALUES
		('$name','$email','$phone_no','$password','user','$fill_date')";
		
		if(mysqli_query($conn, $insert))
		{
			//echo "Registration is Success";
			header('Location: http://localhost/thecaseart/admin/login.php');
		}else{
			echo "Failed";
		}
	}
	
elseif ($_POST["val"] == "Sign In")
 {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_email_pass = "SELECT * FROM user_side WHERE email='$email' AND password='$password'";
    $check_email_pass_result = mysqli_query($conn, $check_email_pass);
    $row = mysqli_fetch_array($check_email_pass_result);
	$count=mysqli_num_rows($check_email_pass_result);

    if ($count == 1)
	{
		$_SESSION['email'] = $email;
		$_SESSION['user_id'] = $row['id'];
		$_SESSION['user_name'] = $row['name'];
		$_SESSION['user_type'] = $row['user_type'];
		header('Location: http://localhost/thecaseart/index.php');
	} else {
		$_SESSION['msg']="Please Enter Correct Email & Password";	
		header('Location: http://localhost/thecaseart/login.php');
	}
 }
?>