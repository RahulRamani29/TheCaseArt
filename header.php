<?php
	include("include/connection.php");
	include("include/functions.php");
		if($_SESSION['user_id'] == "")
	{
	}else{
	$count_id = $_SESSION['user_id'];
	$count_sql = "SELECT user_id FROM product_cart WHERE user_id='$count_id'";
	$count_result = mysqli_query($conn, $count_sql);
	if($count_result)
	{
		$count_row = mysqli_num_rows($count_result);
        //mysqli_free_result($count_result);
	}
	}
?>
<header class="header-01 inner-header fix-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/The Case Art.png" alt="Goru"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <nav class="mainmenu mobile-menu">
                            <div class="mobile-btn">
                                <a href="javascript: void(0);"><span>Menu</span><i class="twi-bars"></i></a>
                            </div>
                            <ul>
                                <li class="active menu-item-has-children">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop.php">Shop</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about_us.php">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact_us.php">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="header-cogs">
                            <a class="search search-toggles" href="javascript:void(0);"><i class="twi-search"></i></a>
                            <a class="user-login" href="profile.php"><i class="twi-user-circle"></i><span>Account</span></a>
                            <a class="carts" href="cart.php"><span><?php echo $count_row; ?></span><img src="assets/images/cart.png" alt=""></a>
							<a class="" href="login.php"><img src="assets/images/login.png" alt=""></a>
							<a class="" href="logout.php"><img src="assets/images/logout.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->