<?php
include("head.php");
include("header.php");
//print_r($_SESSION);
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
                        <h2 class="banner-title">Product Detail</h2>
                        <div class="bread-crumb"><a href="index.html">Home</a> / <a href="index.html">Shop</a> / Product Detail</div>
                    </div>
                </div>
            </div>
        </section>    
        <!-- Banner End -->
		
<?php
	$p_id = $_REQUEST['id'];
	$p_sql= "SELECT * FROM product WHERE id='$p_id'";
	$p_result = mysqli_query($conn, $p_sql);
	$p_row = mysqli_fetch_array($p_result);
?>
        <!-- Shop Section Start -->

        <section class="single-product-section">
            <div class="container">
			<form id="pd-form" action="cart_db.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div id="product-slider" class="carousel slide product-slider" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="ps-img">
										<input type="hidden" value="<?php echo $p_row['image']; ?>" name="image">
                                        <img src="<?php echo"admin/img/product/".$p_row['image']; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="sin-product-details">
							<input type="hidden" name="product_name" value="<?php echo $p_row['product_name'];?>">
                            <h3><?php echo $p_row['product_name'];?></h3>
                            <div class="woocommerce-product-rating">
                                <div class="star-rating">
                                    <i class="twi-star"></i>
                                    <i class="twi-star"></i>
                                    <i class="twi-star"></i>
                                    <i class="twi-star"></i>
                                    <span>
                                        <i class="twi-star"></i>
                                    </span>
                                </div>
                                <a href="#" class="woocommerce-review-link"><span class="count">03</span> customer reviews
                                </a>
                            </div>
                            <div class="product-price clearfix">
                                <span class="price">
									<input type="hidden" name="price" value="<?php echo $p_row['sell_price'];?>">
                                    <span><span class="woocommerce-Price-currencySymbol">₹</span><?php echo $p_row['sell_price'];?></span>
                                </span>         
                            </div>
                            <div class="pro-excerp">
                                <p>
                                    <?php echo $p_row['description'];?>
                                </p>
                            </div>
                            <div class="product-cart-qty">
                                <div class="quantityd clearfix">
                                    <button class="qtyBtn btnMinus"><span>-</span></button>
                                    <input name="quantity" value="1" title="Qty" class="input-text qty text carqty" type="text">
                                    <button class="qtyBtn btnPlus">+</button>
                                </div>
								
								<input type="hidden" name="product_id" value="<?php echo $p_row['id'];?>">
								<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>">
								<input type="hidden" name="val" value="add_cart">
								<button type="submit" value="add_to_cart" class="add-to-cart-btn">Add To Cart</button>
                                <!--<a href="#" class="add-to-cart-btn">Add To Cart</a>-->
                                <a href="#" class="Whislist"><i class="twi-heart"></i></a>
                            </div>
                            <div class="pro-socila">
                                <a href="https://facebook.com/"><i class="twi-facebook"></i></a>
                                <a href="https://twitter.com/"><i class="twi-twitter-square"></i></a>
                                <a href="https://in.pinterest.com/"><i class="twi-pinterest-square"></i></a>
                            </div>
						<!--<div class="col-lg-6 col-md-6">
							<div class="product-speciality">
								<h5>Specifications</h5>
								<ul>
									<li>5.5 “ screen size</li>
									<li>170 x 80 x15 cm</li>
									<li>IOS 13 pre -installed</li>
									<li>3 Cameras Installed</li>
								</ul>
							</div>
						</div>-->
                        </div>
                    </div>
                </div>
				</form>
                <div class="row"><div class="col-lg-12"><div class="divider"></div></div></div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
           
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="related-product-area">
                            <h3>Related Products</h3>
                            <div class="related-slider owl-carousel">
                                <div class="single-shop-product">
                                    <div class="sp-thumb">
                                        <img src="assets/images/shop/b3.png" alt="" class="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Iphone 13 pro max Case</h4>
                                        <div class="product-price clearfix">
                                            <span class="price">
                                                <del><span><span class="woocommerce-Price-currencySymbol">₹</span>42.00</span></del>
                                                <ins><span><span class="woocommerce-Price-currencySymbol">₹</span>38.00</span></ins>
                                            </span>         
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-shop-product">
                                    <div class="sp-thumb">
                                        <img src="assets/images/shop/b3.png" alt="" class="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Iphone 13 pro max Case</h4>
                                        <div class="product-price clearfix">
                                            <span class="price">
                                                <del><span><span class="woocommerce-Price-currencySymbol">₹</span>42.00</span></del>
                                                <ins><span><span class="woocommerce-Price-currencySymbol">₹</span>38.00</span></ins>
                                            </span>         
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-shop-product">
                                    <div class="sp-thumb">
                                        <img src="assets/images/shop/b3.png" alt="" class="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Iphone 13 pro max Case</h4>
                                        <div class="product-price clearfix">
                                            <span class="price">
                                                <span><span class="woocommerce-Price-currencySymbol">₹</span>122.00</span>
                                            </span>         
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-shop-product">
                                    <div class="sp-thumb">
                                        <img src="assets/images/shop/b3.png" alt="" class="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Iphone 13 pro max Case</h4>
                                        <div class="product-price clearfix">
                                            <span class="price">
                                                <del><span><span class="woocommerce-Price-currencySymbol">₹</span>42.00</span></del>
                                                <ins><span><span class="woocommerce-Price-currencySymbol">₹</span>38.00</span></ins>
                                            </span>         
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-shop-product">
                                    <div class="sp-thumb">
                                        <img src="assets/images/shop/b3.png" alt="" class="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Iphone 13 pro max Case</h4>
                                        <div class="product-price clearfix">
                                            <span class="price">
                                                <del><span><span class="woocommerce-Price-currencySymbol">₹</span>42.00</span></del>
                                                <ins><span><span class="woocommerce-Price-currencySymbol">₹</span>38.00</span></ins>
                                            </span>         
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-shop-product">
                                    <div class="sp-thumb">
                                        <img src="assets/images/shop/b3.png" alt="" class="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Iphone 13 pro max Case</h4>
                                        <div class="product-price clearfix">
                                            <span class="price">
                                                <span><span class="woocommerce-Price-currencySymbol">₹</span>122.00</span>
                                            </span>         
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shop Section End -->
<?php
include("footer.php");
?>