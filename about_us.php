<?php
include("head.php");
include("header.php");
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
                    <div class="col-lg-12">
                        <span class="round-shape"></span>
                        <h2 class="banner-title">About Us</h2>
                        <div class="bread-crumb"><a href="index.html">Home</a> / About Us</div>
                    </div>
                </div>
            </div>
        </section>    
        <!-- Banner End -->
		<?php
			$about_select = "SELECT * FROM about_us";
			$about_result = mysqli_query($conn, $about_select);
			$about_row = mysqli_fetch_array($about_result);
		?>
        <!-- History Section Start -->
        <section class="history-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h3 class="sec-title"><?php echo $about_row['title']; ?></h3>
                        <p>
                            <?php echo $about_row['description']; ?>
                        </p>
                        <p>
                            <?php echo $about_row['description']; ?>
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <div class="history-thumb">
                            <img src="<?php echo"admin/img/about/".$about_row['image']; ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="row m-top-113">
                    <div class="col-lg-12">
                        <div class="video-banner" style="background-image: url(assets/images/about/video.jpg);">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=Zugb5j8luRA&ab_channel=UVPrintersIndia-AxisEnterprises" data-rel="lightcase"><i class="twi-play-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- History Section End -->

        <!-- Service Section Start -->
        <section class="service-section service-ab">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service">
                            <img src="assets/images/home/truck2.png" alt="">
                            <h4>100% Free Shipping</h4>
                            <p>We ship all our products for free as long as you buying within the USA.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service">
                            <img src="assets/images/home/headphone2.png" alt="">
                            <h4>24/7 Support</h4>
                            <p>Our support team is extremely active, you will get response within 2 minutes.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service">
                            <img src="assets/images/home/undo2.png" alt="">
                            <h4>30 Day Return</h4>
                            <p>Our 30 day return program is open from customers, just fill up a simple form.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Section End -->

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
<?php
include("footer.php");
?> 