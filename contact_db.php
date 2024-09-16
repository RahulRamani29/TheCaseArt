<?php
	include("include/connection.php");
	$location='Location: http://localhost/thecaseart/contact_us.php';
	$location1='Location: http://localhost/thecaseart/contact_us.php';
	
	if($_POST["val"] == "insert")
	{	
		$name =  $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$status = $_POST['status'];
		
		$insert ="INSERT INTO contact_us
		(`name`, `email`, `subject`,`message`,`status`)
		VALUES
		('$name', '$email', '$subject', '$message','pandding')
		";
		
		if(mysqli_query($conn, $insert)){
			header($location);
		} else{
			header($location1);
		}
	}
	
?>