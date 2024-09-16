<?php
include("include/connection.php");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>The Case Art</title>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="assets/css/login.css"/>
	<link rel="icon" type="image/png" href="assets/images/fav1.png">
</head>

<body>
<?php
if(isset($_SESSION['msg']))
{
?>
    <div class="alert error" style="padding-left: 39%; margin-bottom: 1%;">
        <span class="closebtn"></span>
        <strong>Danger!</strong> <?php echo $_SESSION['msg'];?>
    </div>
<?php
	unset($_SESSION['msg']);
}
?>
	<img class="img" src="assets/images/The Case Art.png" alt="The Case Art"/>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="register_db.php" method="post">
        <div class="group">
          <label for="user" class="label">Email</label>
          <input id="email" name="email" value="" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" value="" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" name="val" value="Sign In" class="button">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
	  
	  
      <form class="sign-up-htm" action="register_db.php" method="POST">
        <div class="group">
          <label for="user" class="label">Full Name</label>
          <input id="username" name="name" type="text" class="input">
        </div>
		<div class="group">
          <label for="user" class="label">Email</label>
          <input id="email" name="email" type="text" class="input">
        </div>
		<div class="group">
          <label for="user" class="label">Phone No</label>
          <input id="mobile_no" name="phone_no" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" name="c_password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input type="submit" name="val" class="button" value="Sign Up">
        </div>
        <!--<div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>-->
      </form>
    </div>
  </div>
</div>
  
</body>
</html>
<?php mysqli_close($conn);?>