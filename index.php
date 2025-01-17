<!DOCTYPE html>
<html lang="en">
    <?php include("head.php");?>
	<body>
        <!-- Header Start -->
        <?php include("header.php")?>
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
		<?php
			$banner_select = "SELECT * FROM banner";
			$banner_result = mysqli_query($conn, $banner_select);
		?>

        <!-- Slider Start -->
        <section class="slider-01">

            <!-- Scroll Btn -->
            <div class="scroll-down"><a href="#coupone">scroll to explore</a></div>
            <!-- Scroll Btn -->
					<?php 
						if(mysqli_num_rows($banner_result) > 0)
							{
							while($banner_row = mysqli_fetch_assoc($banner_result)){
					?>

            <div class="rev_slider_wrapper">
                <div id="rev_slider_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        <li data-index="rs-3045" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-rotate="0" class="rev-slidebg">
                            <div class="tp-caption tp-resizeme textRes title-1"
                                 data-x="['left','left','center','center']" 
                                 data-hoffset="['0']" 

                                 data-y="['middle']" 
                                 data-voffset="['-132','-110','-60','-70']" 

                                 data-fontsize="['60','45','40','30']"
                                 data-fontweight="700"
                                 data-lineheight="['72','50','52','42']"
                                 data-width="['570','500','500','320']"
                                 data-height="['auto']"
                                 data-whitesapce="['normal']"
                                 data-color="['#000000']"

                                 data-type="text" 
                                 data-responsive_offset="off" 

                                 data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'


                                 data-textAlign="['left','left','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 5; white-space: normal;"><?php echo $banner_row['heading']; ?></div>
                            <div class="tp-caption tp-resizeme textRes"
                                 data-x="['left','left','center','center']" 
                                 data-hoffset="['0']" 

                                 data-y="['middle']" 
                                 data-voffset="['17','17','50','40']" 

                                 data-fontsize="['24','20','18','16']"
                                 data-fontweight="400"
                                 data-lineheight="['36','32','30','28']"
                                 data-width="['570','500','500','320']"
                                 data-height="['auto']"
                                 data-whitesapce="['normal']"
                                 data-color="['#666666']"

                                 data-type="text" 
                                 data-responsive_offset="off" 

                                 data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                 data-textAlign="['left','left','center','center']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 5; white-space: normal;"><?php echo $banner_row['description']; ?>
                            </div>
                            <div class="tp-caption tp-resizeme textRes"
                                 data-x="['left','left','center','center']" 
                                 data-hoffset="['0']" 

                                 data-y="['middle']" 
                                 data-voffset="['145','145','150','145']" 

                                 data-fontsize="14"
                                 data-fontweight="700"
                                 data-lineheight=".8"
                                 data-width="['auto']"
                                 data-height="['auto']"
                                 data-whitesapce="['normal']"
                                 data-color="['#FFF']"

                                 data-type="text" 
                                 data-responsive_offset="off" 

                                 data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                                 {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                 data-textAlign="center"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 style="z-index: 5;"><a href="shop.php" class="goru-btn">view collection</a>
                            </div>
                            <div class="tp-caption tp-resizeme slider-image"
                                 data-x="['right','right','center','center']" 
                                 data-hoffset="['-50','50','0','0']" 

                                 data-y="['middle']" 
                                 data-voffset="['0']" 
                                 data-width="['auto','350','auto','auto']"
                                 data-height="['auto']"


                                 data-type="image" 
                                 data-responsive_offset="off" 

                                 data-frames='[{"delay":3500,"speed":2500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'


                                 data-textAlign="center"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,25]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,25]"

                                 style="z-index: 5;"><img src="<?php echo "admin/img/banner/".$banner_row['image']; ?>" alt="">
                            </div>
                        </li>
                    
                    </ul>
                </div>
            </div>
			<?php }}?>
        </section>    
		
        <!-- Slider End -->
		<?php
			$category_select = "SELECT * FROM category";
			$category_result = mysqli_query($conn, $category_select);
		?>
        <!-- Categories Section Start -->
        <section class="categorie-section">

            <!-- Section Heading -->
            <div class="sec-heading rotate-rl">Product <span> Categories</span></div>
            <!-- Section Heading -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sec-title">Product Categories</h2>
                        <p class="sec-desc">
                            Perfection has to do with the end product,<br> but excellence has to do with the process.
                        </p>
                    </div>
                </div>

                <div class="row">
					<?php 
						if(mysqli_num_rows($category_result) > 0)
							{
							while($category_row = mysqli_fetch_assoc($category_result)){
					?>
                    <div class="col-lg-3 col-md-4">
                        <a href="shop.php?category_name=<?php echo $category_row['category_name']; ?>" class="single-cate">
                            <img src="<?php echo "admin/img/category/".$category_row['image']; ?>" alt="Redmi">
                        </a>
                    </div>
				<?php }}?>
                </div>

            </div>
        </section>
        <!-- Categories Section End -->

        <!-- Service Section Start -->
        <section class="service-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service">
                            <img src="assets/images/home/truck.png" alt="">
                            <h4>100% Free Shipping</h4>
                            <p>We ship all our products for free as long as you buying within the USA.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service">
                            <img src="assets/images/home/headphone.png" alt="">
                            <h4>24/7 Support</h4>
                            <p>Our support team is extremely active, you will get response within 2 minutes.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service">
                            <img src="assets/images/home/undo.png" alt="">
                            <h4>30 Day Return</h4>
                            <p>Our 30 day return program is open from customers, just fill up a simple form.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Section End -->
		<?php
			$product_select = "SELECT * FROM product";
			$product_result = mysqli_query($conn, $product_select);
		?>
        <!-- Popular Section Start -->
        <section class="popular-section">
            <!-- Section Heading -->
            <div class="sec-heading rotate-rl">Most <span>Popular</span></div>
            <!-- Section Heading -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sec-title">Most Popular</h2>
                       <!-- <ul class="product-tab-title nav nav-tabs">
                            <li><a class="active" href="#all" data-toggle="tab">All</a></li>
                            <li><a href="#smartphones" data-toggle="tab">Smartphones</a></li>
                            <li><a href="#camera" data-toggle="tab">Camera</a></li>
                            <li><a href="#gadgets" data-toggle="tab">Gadgets</a></li>
                            <li><a href="#others" data-toggle="tab">Others</a></li>
                        </ul>-->
                        <div class="tab-content">
                            <div class="tab-pane fade show in active" id="all" role="tabpanel">

                                <div class="popular-tab-slider owl-carousel">
									<?php 
										if(mysqli_num_rows($product_result) > 0)
										{
											while($product_row = mysqli_fetch_assoc($product_result)){
									?>
                                    <div class="pp-single-slider">
                                        <div class="single-popular-product">
                                            <div class="sp-thumb">
                                                <img src="<?php echo "admin/img/product/".$product_row['image']; ?>" alt="">
                                                <div class="pro-badge">
                                                    <p class="sale">Sale</p>
                                                </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Popular Section End -->

        <!-- Client Section Start -->
        <section class="client-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="client-logo owl-carousel">
                            <a href="#"><img src="assets/images/home/client-logo/1.png" alt=""></a>
                            <a href="#"><img src="assets/images/home/client-logo/2.png" alt=""></a>
                            <a href="#"><img src="assets/images/home/client-logo/3.png" alt=""></a>
                            <a href="#"><img src="assets/images/home/client-logo/4.png" alt=""></a>
                            <a href="#"><img src="assets/images/home/client-logo/5.png" alt=""></a>
                            <a href="#"><img src="assets/images/home/client-logo/1.png" alt=""></a>
                            <a href="#"><img src="assets/images/home/client-logo/2.png" alt=""></a>
                            <a href="#"><img src="assets/images/home/client-logo/3.png" alt=""></a>
                            <a href="#"><img src="assets/images/home/client-logo/4.png" alt=""></a>
                            <a href="#"><img src="assets/images/home/client-logo/5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Section End -->
		<?php include("footer.php");?>
    </body>

<!-- Mirrored from html.themexplosion.com/goru/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 13:00:29 GMT -->
</html>