<?php 
include("head.php");
include("header.php");

	if($_SESSION['user_id'] == "")
		{
			header('Location: http://localhost/thecaseart/login.php');
		}	
	$user_id = $_SESSION['user_id'];
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
                        <h2 class="banner-title">Cart</h2>
                        <div class="bread-crumb"><a href="index.html">Home</a> / Cart</div>
                    </div>
                </div>
            </div>
        </section>    
        <!-- Banner End -->
	<?php
		if($_SESSION['user_id'] == "")
		{
		}else{
		$users_id = $_SESSION['user_id'];
		$cart_select = "SELECT * FROM product_cart WHERE user_id='$users_id'";
		$cart_result = mysqli_query($conn, $cart_select);	
		}
	?>
        <!-- Cart Section Start -->
        <section class="cart-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                            <table class="cart-table">
                                <thead>
                                    <tr>
                                        <th class="product-name-thumbnail">Product Name</th>
                                        <th class="product-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-total">Total</th>
                                        <th class="product-remove">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
									if(mysqli_num_rows($cart_result) > 0)
									{
										$grand_total_array = array();
										while($cart_row = mysqli_fetch_assoc($cart_result)){
											
								?>
                                    <tr class="cart-item">
                                        <td class="product-thumbnail-title">
                                            <a href="#">
                                                <img src="<?php echo "admin/img/product/". $cart_row['image'];?>" alt="">
                                            </a>
                                            <a class="product-name" href="#"><?php echo $cart_row["product_name"]; ?></a> 
                                        </td>
                                        <td class="product-unit-price">
                                            <div class="product-price clearfix">
                                                <span class="price">
                                                    <span id="item_price"><span  class="woocommerce-Price-currencySymbol">₹</span><?php echo $cart_row['price']; ?></span>
                                                </span>           
                                            </div>
                                        </td>
										<form class="" action="cart_db.php" method="post">
                                        <td class="product-quantity clearfix">
                                            <div class="quantityd clearfix">
                                                <input name="quantity" id="quantity" value="<?php echo $cart_row['quantity']; ?>" title="Qty" class="form-control form-control-lg text-center" type="number">
												<input type="hidden" name="cart_id" id="cart_id" value="<?php echo $cart_row['cart_id']; ?>" />
												<input type="hidden" id="item_price" value="<?php echo $cart_row["price"]; ?>" />
												<button type="submit" name="val" value="Edit" id="update_cart" class="button update">Update</button>
                                            </div>
                                        </td>
										</form>
                                        <td class="product-total">
                                            <div class="product-price clearfix">
                                                <span class="price">
                                                    <span id="updated_price"><span  class="woocommerce-Price-currencySymbol">₹</span><?php echo $sub_total = ($cart_row["quantity"] * $cart_row["price"]); ?></span>
                                                </span>           
                                            </div>
                                        </td>
										<form class="" action="cart_db.php" method="post">
                                        <td class="product-remove">
											<input type="hidden" name="cart_id" value="<?php echo $cart_row['cart_id']; ?>"/>
                                            <button type="submit" name="val" value="Delete" class="btn btn-block btn-danger">Remove</button>
                                        </td>
										</form>
                                    </tr>
										<?php
											$grand_total_array[] = $sub_total;
										?>
								<?php }}?>
                                    <tr>
                                        <td colspan="6" class="actions">
                                            <a href="index.php" type="submit" class="button continue-shopping">Continue Shopping</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
			
                            <div class="row">
                                <div class="col-md-6">

                                </div>
								<?php 
									if(mysqli_num_rows($cart_result) > 0)
									{ 
								?>
                                <div class="col-md-6">
                                    <div class="cart-totals">
                                        <h2>Cart Totals</h2>
                                        <table class="shop-table">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Sub Total</th>
                                                    <td data-title="Subtotal">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₹</span><?php echo array_sum($grand_total_array); ?></span>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Grand Total</th>
                                                    <td data-title="Subtotal">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₹</span><?php echo array_sum($grand_total_array); ?></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="checkout.php" class="checkout-button">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
									<?php }else{ ?>
									<div class="col-md-6">
										<div class="cart-totals">
											<h2>Cart Totals</h2>
											<table class="shop-table">
												<tbody>
													<tr class="cart-subtotal">
														<th>Sub Total</th>
														<td data-title="Subtotal">
															<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₹</span></span>
														</td>
													</tr>
													<tr class="order-total">
														<th>Grand Total</th>
														<td data-title="Subtotal">
															<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₹</span></span>
														</td>
													</tr>
												</tbody>
											</table>
											<div class="wc-proceed-to-checkout">
												<a href="checkout.php" class="checkout-button">Proceed to checkout</a>
											</div>
										</div>
									</div>
									<?php }?>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart Section End -->3
<?php include("footer.php");?>
<script>
	$(document).on("change", "#quantity", function(e) {
		e.preventDefault();
		var quantity = $(this).closest('td').find('#quantity').val();
		var item_price = $(this).closest('td').find('#item_price').val();
		
		var final_price = quantity*item_price;
		
		$(this).closest('tr').find('#updated_price').text(final_price);
	});
</script>