<?php
include("head.php"); 
include("header.php");
	if($_REQUEST['category_name']=='')
	{
?>
 <html>
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
        <section class="page-banner shop-full-banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <span class="round-shape"></span>
                        <h2 class="banner-title">Shop</h2>
                        <div class="bread-crumb"><a href="index.html">Home</a> / shop</div>
                        <div class="banner-img">
                            <img src="assets/images/shop/shop.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>    
		
        <!-- Banner End -->
		<?php
			$product_select = "SELECT * FROM product";
			$product_result = mysqli_query($conn, $product_select);
		?>
        <!-- Shop Section Start -->
        <section class="shop-fullwidth">
            <div class="container-fluid">
                <div class="row">
                    <!--<div class="col-md-5">
                        <div class="sort-view">
                            <a class="view-mode active" href="#"><i class="twi-th"></i></a>
                            <a class="view-mode" href="#"><i class="twi-bars"></i></a>
                            <div class="sorts">
                                <select name="sort">
                                    <option value="">Default Sorting</option>
                                    <option selected="selected" value="">low to high</option>
                                    <option value="">high to low</option>
                                    <option value="">Best Seller</option>
                                    <option value="">Popular Products</option>
                                </select>
                                <i class="twi-angle-down1"></i>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="row">
									<?php 
										if(mysqli_num_rows($product_result) > 0)
										{
											while($product_row = mysqli_fetch_assoc($product_result)){
									?>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-shop-product">
                            <div class="sp-thumb">
                                <img src="<?php echo "admin/img/product/".$product_row['image']; ?>" alt="" class="">
                            </div>
                            <div class="sp-details">
                                <h4><?php echo $product_row['product_name']; ?></h4>
                                <div class="product-price clearfix">
                                    <span class="price">
                                        <del><span><span class="woocommerce-Price-currencySymbol">₹</span><?php echo $product_row['net_price']; ?></span></del>
                                        <ins><span><span class="woocommerce-Price-currencySymbol">₹</span><?php echo $product_row['sell_price']; ?></span></ins>
                                    </span>         
                                </div>
                                <div class="sp-details-hover">
                                    <a class="sp-cart" href="product_detail.php?id=<?php echo $product_row['id']; ?>"><i class="twi-cart-plus"></i><span>Add to cart</span></a>
                                    <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php }}?>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 mt-20">
                        <div class="goru-pagination text-center clearfix">
                            <a class="prev" href="#"><i class="twi-long-arrow-alt-left"></i></a>
                            <span class="current">1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a class="next" href="#"><i class="twi-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>  
            </div>
        </section>
</html>

<?php
	}else{
$category_name=$_GET['category_name'];
$category_data= getSlugActive("category",$category_name);
$category=mysqli_fetch_array($category_data);
$cid= $category['id'];
?>

 <html>
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
        <section class="page-banner shop-full-banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <span class="round-shape"></span>
                        <h2 class="banner-title">Shop</h2>
                        <div class="bread-crumb"><a href="index.html">Home</a> / shop</div>
                        <div class="banner-img">
                            <img src="assets/images/shop/shop.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>    
		
        <!-- Banner End -->
		<?php
			//$product_select = "SELECT * FROM product";
			//$product_result = mysqli_query($conn, $product_select);
			
			$product = getProdByCategory($cid);
		?>
        <!-- Shop Section Start -->
        <section class="shop-fullwidth">
            <div class="container-fluid">
                <div class="row">
                    <!--<div class="col-md-5">
                        <div class="sort-view">
                            <a class="view-mode active" href="#"><i class="twi-th"></i></a>
                            <a class="view-mode" href="#"><i class="twi-bars"></i></a>
                            <div class="sorts">
                                <select name="sort">
                                    <option value="">Default Sorting</option>
                                    <option selected="selected" value="">low to high</option>
                                    <option value="">high to low</option>
                                    <option value="">Best Seller</option>
                                    <option value="">Popular Products</option>
                                </select>
                                <i class="twi-angle-down1"></i>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="row">
									<?php 
										if(mysqli_num_rows($product) > 0)
										{
											while($product_row = mysqli_fetch_assoc($product)){
									?>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-shop-product">
                            <div class="sp-thumb">
                                <img src="<?php echo "admin/img/product/".$product_row['image']; ?>" alt="" class="">
                            </div>
                            <div class="sp-details">
                                <h4><?php echo $product_row['product_name']; ?></h4>
                                <div class="product-price clearfix">
                                    <span class="price">
                                        <del><span><span class="woocommerce-Price-currencySymbol">₹</span><?php echo $product_row['net_price']; ?></span></del>
                                        <ins><span><span class="woocommerce-Price-currencySymbol">₹</span><?php echo $product_row['sell_price']; ?></span></ins>
                                    </span>         
                                </div>
                                <div class="sp-details-hover">
                                    <a class="sp-cart" href="product_detail.php?id=<?php echo $product_row['id']; ?>"><i class="twi-cart-plus"></i><span>Add to cart</span></a>
                                    <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php }}?>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 mt-20">
                        <div class="goru-pagination text-center clearfix">
                            <a class="prev" href="#"><i class="twi-long-arrow-alt-left"></i></a>
                            <span class="current">1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a class="next" href="#"><i class="twi-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>  
            </div>
        </section>
</html>
	<?php }?>
<?php
include("footer.php");
?>
