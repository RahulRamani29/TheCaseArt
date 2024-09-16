<?php 
include("head.php");
include("header.php");

	if($_SESSION['user_id'] == "")
	{
	}else{
	$count_id = $_SESSION['user_id'];
	$count_sql = "SELECT user_id FROM product_cart WHERE user_id='$count_id'";
	$count_result = mysqli_query($conn, $count_sql);
	if($count_result)
	{
		$count_row = mysqli_num_rows($count_result);
        mysqli_free_result($count_result);
	}
	}
?>
<!-- Popup Search -->
        <section class="popup-search-sec">
            <div class="popup-search-overlay"></div>
            <div class="overlay-popup">
                <a href="javascript:void(0);" class="search-closer">x</a><!-- Close Popup Btn -->
                <div class="middle-search">
                    <div class="popup-search-form"><!-- Search Form Start -->
                        <form method="get" action="#">
                            <input type="search" name="s" id="s" placeholder="Search...">
                            <button type="submit"><i class="twi-search"></i></button>
                        </form><!-- Search Form End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Popup Search -->

        <!-- Banner Start -->
        <section class="page-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="round-shape"></span>
                        <h2 class="banner-title">Checkout</h2>
                        <div class="bread-crumb"><a href="index.html">Home</a> / Checkout</div>
                    </div>
                </div>
            </div>
        </section>    
        <!-- Banner End -->
<?php
	if($_SESSION['user_id'] == "")
		{
		}else{
			$checkout_id = $_SESSION['user_id'];
			$checkout_select = "SELECT * FROM product_cart WHERE user_id='$checkout_id'";
			$checkout_result = mysqli_query($conn, $checkout_select);	
		}
?>
        <!-- Checkout Section Start -->
        <section class="checkout-section">
            <div class="container">
                <div class="row">
				
                    <div class="col-md-6">
					<form action="checkout_db.php" method="post">
                        <div class="customer-login">
                            Returning customer ? <a href="login.php">Click here to login</a>
                        </div>
                       <!-- <div class="customer-coupon">
                            Have a Coupon ? <a href="#">Click here to enter your code</a>
                        </div>-->
						<?php
							$biling_currentuser = $_SESSION['email'];
							$biling_sql= "SELECT * FROM user_side WHERE email='$biling_currentuser'";
							$biling_result = mysqli_query($conn, $biling_sql);
							$biling_row = mysqli_fetch_array($biling_result);
						?>
                        <div class="woocommerce-billing-fields">
                            <h3>Billing Info</h3>
                            <div class="row">
                                <p class="col-lg-12">
                                    <label>Full Name</label>
                                    <input placeholder="" value="<?php echo $biling_row['billing_name'];?>" name="billing_name" type="text">
                                </p>
                                <p class="col-lg-12">
                                    <label>Email</label>
                                    <input placeholder=""name="billing_email" value="<?php echo $biling_row['billing_email'];?>" type="text">
                                </p>
                                <p class="col-lg-12">
                                    <label>Phone No</label>
                                    <input placeholder="" name="billing_phone_no" value="<?php echo $biling_row['billing_phone_no'];?>" type="text">
                                </p>
								<p class="col-lg-12">
                                    <label>Address</label>
                                    <input placeholder="" name="billing_address" value="<?php echo $biling_row['billing_address'];?>" type="text">
                                </p>
                                <p class="col-lg-6">
								    <label>City</label>
									<input type="text" id="city" name="billing_city" value="<?php echo $biling_row['billing_city'];?>" placeholder="">
                                </p>
                                <p class="col-lg-6">
								    <label>State</label>
									<input type="text" id="State" name="billing_state" value="<?php echo $biling_row['billing_state'];?>" placeholder="">
                                </p>
                                <p class="col-lg-12">
                                    <label>Pin Code</label>
                                    <input placeholder="" name="billing_pincode" value="<?php echo $biling_row['billing_pincode'];?>" type="text">
                                </p>
                            </div>
                        </div>
						<div class="text-center">
							<input type="hidden" name="id" value="<?php echo $biling_row['id'];?>"/>
							<button type="submit" name="val" value="update" class="btn btn-success">Submit Detail</button>
						</div>
					</form>
                    </div>

                    <div class="col-md-6">
						<form action="checkout_db.php" method="post" enctype="multipart/form-data">
                        <div class="woocommerce-checkout-review-order" id="order_review">
                            <h3>Your Order</h3>
                            <table class="check-table woocommerce-checkout-review-order-table">
                                <thead>
                                    <tr>
                                        <th class="product-name">Products</th>
                                        <th class="product-total"></th>
                                    </tr>
                                </thead>
								<?php 
								if(mysqli_num_rows($checkout_result) > 0)
								{
									$product_id = array();
									$product_name = array();
									$grand_total_array = array();
									while($checkout_row = mysqli_fetch_array($checkout_result)){	
								?>
                                <tbody>
                                    <tr class="cart-item">
                                        <td class="product-name"><?php echo $checkout_row['product_name'];?></td>
                                        <td class="product-total">
                                            <div class="product-price clearfix">
                                                <span class="price">
                                                    <span><span class="woocommerce-Price-currencySymbol">₹</span><?php echo $sub_total = ($checkout_row["quantity"] * $checkout_row["price"]); ?></span>
                                                </span>           
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
								<?php
									$product_id[] = $checkout_row['product_id'];
									$product_name[] = $checkout_row['product_name'];
									$grand_total_array[] = $sub_total;
								?>
								<?php }}?>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td>
                                            <div class="product-price clearfix">
                                                <span class="price">
                                                    <span><span class="woocommerce-Price-currencySymbol">₹</span><?php echo array_sum($grand_total_array); ?></span>
                                                </span>           
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <th>Shipping</th>
                                        <td>
                                            <div class="product-price clearfix">
                                                <span class="price">
                                                    <span><span class="woocommerce-Price-currencySymbol">₹</span>0</span>
                                                </span>           
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <div class="product-price clearfix">
                                                <span class="price">
                                                    <span><span class="woocommerce-Price-currencySymbol">₹</span><?php echo array_sum($grand_total_array); ?></span>
                                                </span>   
												<?php 
													$p_id = implode(',', $product_id);
													$p_name = implode(',', $product_name);
												?>												
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="woocommerce-checkout-payment" id="payment">
                                <ul class="wc_payment_methods payment_methods methods">
                                    <li class="wc_payment_method payment_method_bacs">
                                        <input name="payment_type" checked="checked" value="Cash on Delivery (COD)" name="payment_method" class="input-radio" id="payment_method_bacs" type="radio">
                                        <label for="payment_method_bacs">Cash on Delivery (COD)</label>
                                        <div class="payment_box payment_method_bacs visibales">
                                            <p>
                                                Cash on delivery (COD) is a type of transaction where the recipient pays for a good at the time of delivery rather than using credit.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="place-order">
								<input type="hidden" name="order_price" value="<?php echo array_sum($grand_total_array);?>"/>
								<input type="hidden" name="product_id" value="<?php echo $p_id;?>"/>
								<input type="hidden" name="product_name" value="<?php echo $p_name;?>"/>
								<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>"/>
								<input type="hidden" name="user_name" value="<?php echo $_SESSION['user_name'];?>"/>
                                <button type="submit" name="val" value="order" class="button">Place Order</button>
                            </div>
                        </div>
						</form>
                    </div>

                </div>
            </div>
        </section>
        <!-- Checkout Section End -->
<?php include("footer.php");?>