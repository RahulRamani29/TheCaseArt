<?php
	include('include/connection.php');	
	include('include/functions.php');
	
	session_unset();
	//setcookie('email','',time()-3600);
	//setcookie('password','',time()-3600);
	$_SESSION["user_email"] = "";
	$_SESSION["user_id"] = "";
	$_POST = "";
	session_destroy();
	header('Location: http://localhost/thecaseart/login.php');
?>