<?php
include("include/connection.php");
$location='Location: http://localhost/thecaseart/cart.php';
$location1='Location: http://localhost/thecaseart/login.php';

if($_POST['val']=="add_cart")
{
	if($_SESSION['user_id']=='')
	{
		header($location1);
	}else{
		$product_id=$_POST['product_id'];
		$product_name=$_POST['product_name'];
		$price=$_POST['price'];
		$quantity=$_POST['quantity'];
		$image=$_POST['image'];
		$user_id=$_POST['user_id'];
		
		$check_id=$_SESSION['user_id'];
		$check_product="SELECT * from product_cart WHERE product_id='$product_id' AND user_id='$check_id'";
		$check_product_result=mysqli_query($conn,$check_product);
		if(mysqli_num_rows($check_product_result)>0)
		{
			header($location);
		}else{
			$add_to_cart="INSERT INTO product_cart
			(`product_id`,`product_name`,`price`,`quantity`,`image`,`user_id`)
			VALUES
			('$product_id','$product_name','$price','$quantity','$image','$user_id')
			";
		
		if(mysqli_query($conn,$add_to_cart))
		{
			$cart_count_id = $_SESSION['user_id']; 
			$cart_count_sql = "SELECT user_id FROM product_cart WHERE user_id='$cart_count_id'";
			$cart_count_result = mysqli_query($conn, $cart_count_sql);
			$cart_count_row = mysqli_num_rows($cart_count_result);
					
			header($location);
			$myarray['cart_count'] = $cart_count_row;
		}else{
			header($location1);
		}
	}
}
}

	elseif($_POST['val'] == 'Edit')
	{	
		$cart_id = $_POST['cart_id'];
		$quantity = $_POST['quantity'];
		
		$update = "UPDATE product_cart SET
		quantity = '$quantity'
		WHERE
		cart_id = '$cart_id'
		";
		
		if(mysqli_query($conn, $update)){
				header($location);
			}
			else{
				header($location);
			}
	}
	
	elseif($_POST['val'] == 'Delete')
		{
			$cart_id = $_POST['cart_id'];
		
			$delete ="DELETE FROM product_cart WHERE cart_id='$cart_id'";
		
			if(mysqli_query($conn, $delete)){
				header($location);
			} else {
				header($location);
			}
		}
?>