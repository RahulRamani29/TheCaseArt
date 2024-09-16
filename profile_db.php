<?php
	include("include/connection.php");
	
if($_POST['val'] == 'update')
		{
			$id = $_POST['id'];
			$name = $_POST['name'];
			$phone_no = $_POST['phone_no'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$pincode = $_POST['pincode'];
			$old_image = $_POST["old_image"];
			
			if($_FILES['image']['name'] !== '')
			{
				unlink("assets/images/profile/".$old_image);
				
				$file_name = $_FILES['image']['name'];
				$file_tmp = $_FILES['image']['tmp_name'];
			
				move_uploaded_file($file_tmp, "assets/images/profile/".$file_name);
			}
			
			else{
				$file_name = $old_image;
			}
			
			//$email = $_SESSION['email'];
			$update = "UPDATE user_side SET
			name = '$name',
			phone_no = '$phone_no',
			address = '$address',
			city = '$city',
			state = '$state',
			pincode = '$pincode',
			image = '$file_name'
			WHERE
			id = '$id'
			";

			
			if(mysqli_query($conn, $update)){
				header('Location: http://localhost/thecaseart/profile.php');
				//echo "Data Upadate Successfully";
			}	else {
				header('Location: http://localhost/thecaseart/profile.php');
			}
		}
?>