<?php 
include('head.php');
include('header.php');
?>
<html>
<head>
	<style>
		<link rel="stylesheet" href="assets/css/profile.css"/>
	</style>
</head>
<body>
<?php
	$mp_currentuser = $_SESSION['email'];
	$mp_sql= "SELECT * FROM user_side WHERE email='$mp_currentuser'";
	$mp_result = mysqli_query($conn, $mp_sql);
	$mp_row = mysqli_fetch_array($mp_result);
?>
<div class="container">
		<div class="main-body">
		<form action="profile_db.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="assets/images/profile/<?php echo $mp_row['image'];?>" alt="" class="rounded-circle p-1 bg-info" width="110">
								<div class="mt-3">
									<h4><?php echo $mp_row['name']; ?></h4>
									<p class="text-secondary mb-1"><?php echo $mp_row['email']; ?></p>
									<p class="text-muted font-size-sm"><?php echo $mp_row['phone_no']; ?></p>
									<input type="file" class="btn btn-info"name="image" value="">
									<input type="hidden" name="old_image" value="<?php echo $mp_row['image'];?>"/>
									<input type="hidden" name="id" value="<?php echo $mp_row['id'];?>"/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="name" value="<?php echo $mp_row['name']; ?>" class="form-control" value="John Doe">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="email" value="<?php echo $mp_row['email']; ?>" class="form-control" value="john@example.com">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="phone_no" value="<?php echo $mp_row['phone_no']; ?>" class="form-control" value="(239) 816-9029">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<textarea type="text" name="address" class="form-control" id="Street"  placeholder="Enter Street"><?php echo $mp_row['address']; ?></textarea>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">City</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="city" class="form-control" value="<?php echo $mp_row['city']; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">State</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="state" class="form-control" value="<?php echo $mp_row['state']; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Pin Code</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="pincode" class="form-control" value="<?php echo $mp_row['pincode']; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="hidden" name="id" value="<?php echo $mp_row['id']; ?>" />
									<button type="submit" id="submit" name="val" value="update" class="btn btn-info px-4">Update</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</body>
</html>
<?php
include('footer.php');
?>