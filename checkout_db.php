<?php
	include("include/connection.php");
	$location='Location: http://localhost/thecaseart/confirme_order.php';
	$location1='Location: http://localhost/thecaseart/checkout.php';
	
	if($_POST["val"] == "order")
	{	
		$user_name =  $_POST["user_name"];
		$product_id = $_POST['product_id'];
		$product_name = $_POST['product_name'];
		$order_date = date("D-m-y H:i:s"); 
		$order_price =  $_POST["order_price"];
		$payment_type =  $_POST["payment_type"];
		$order_status =  $_POST["order_status"];
		$user_id =  $_POST["user_id"];
		
		$billing_detail ="INSERT INTO orders
		(`user_name`, `product_id`, `product_name`,`order_date`, `order_price`, `payment_type`, `order_status`, `user_id`)
		VALUES
		('$user_name', '$product_id', '$product_name', '$order_date', '$order_price', '$payment_type', 'Proccess', '$user_id')
		";
		
		if(mysqli_query($conn, $billing_detail)){
			$delete_cart = "DELETE FROM product_cart WHERE user_id='$user_id'";
			mysqli_query($conn, $delete_cart);
			header($location);
		} else{
			header($location1);
		}
	}
	
		elseif($_POST['val'] == 'update')
		{
			$id = $_POST['id'];
			$billing_name = $_POST['billing_name'];
			$billing_email = $_POST['billing_email'];
			$billing_phone_no = $_POST['billing_phone_no'];
			$billing_address = $_POST['billing_address'];
			$billing_city = $_POST['billing_city'];
			$billing_state = $_POST['billing_state'];
			$billing_pincode = $_POST['billing_pincode'];
			
			//$email = $_SESSION['email'];
			$update = "UPDATE user_side SET
			billing_name = '$billing_name',
			billing_email = '$billing_email',
			billing_phone_no = '$billing_phone_no',
			billing_address = '$billing_address',
			billing_city = '$billing_city',
			billing_state = '$billing_state',
			billing_pincode = '$billing_pincode'
			WHERE
			id = '$id'
			";
			
			if(mysqli_query($conn, $update)){
				header($location1);
			}	else {
				header($location1);
			}
		}
	
?>