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
                        <h2 class="banner-title">Contact Us</h2>
                        <div class="bread-crumb"><a href="index.html">Home</a> / Contact Us</div>
                    </div>
                </div>
            </div>
        </section>    
        <!-- Banner End -->

        <!-- History Section Start -->
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <h3 class="sec-title">Our Store</h3>
                        <div class="info-contact">
                            <h5>Address: <p> Lal Park Society, near D-mart,Ahir Chowk, Rajkot</p></h5>
                            <h5>Phone: <p> +91 97148 xxxxx</p></h5>
                            <h5>Email: <p> rahul@gamil.com</p></h5>
                            <h5>Social: 
                                <a href="https://www.facebook.com/"><i class="twi-facebook"></i></a>
                                <a href="https://twitter.com/"><i class="twi-twitter-square"></i></a>
                                <a href="https://in.pinterest.com/"><i class="twi-pinterest-square"></i></a>
                            </h5>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="contact-thumb">
                            <img src="assets/images/2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row mar-top-bottom">
                    <div class="col-lg-12">
                        <div class="goru_map grayscale">
                            <iframe src="https://maps.google.com/maps?width=720&amp;height=600&amp;hl=en&amp;coord=39.966528,-75.158284&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(My%20Business%20Name)&amp;ie=UTF8&amp;t=p&amp;z=16&amp;iwloc=B&amp;output=embed"  scrolling="no"></iframe>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="sec-title">Get In Touch With Us</h2>
                        <p class="sec-desc">
                            We can help.Our team of experts is on hand to answer your qustions. 
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-form text-center">
                            <form action="contact_db.php" method="post"  class="row">
                                <div class="col-lg-4 col-md-4">
                                    <input type="text" name="name" class="required" placeholder="Enter your name">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <input type="email" name="email" class="required" placeholder="Your Email">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <textarea name="message"  placeholder="Your message here"></textarea>
                                </div>
                                                            <div class="place-order">
                                    <button type="submit" name="val" value="insert" class="button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- History Section End -->
<?php
include("footer.php");
?>