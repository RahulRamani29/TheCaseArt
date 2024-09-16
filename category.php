<?php
	include("header.php");
	include("sidebar.php");

	$err = isset($_REQUEST["err"]) ? strtolower(trim($_REQUEST["err"])) : "";
	$errfld = isset($_REQUEST["errfld"]) ? $_REQUEST["errfld"] : "";
	
	if(strlen($err) > 0)
	{
		if($err == "add")
		{
			$mymsg="Data insert Successfully";
			$err_cls = "alert-success";
			unset($_POST);
		}
		elseif($err == "update")
		{
			$mymsg ="Data Update Successfully";
			$err_cls = "alert-success";
		}
		elseif($err == "name")
		{
			$mymsg = "Enter Name";
			$err_cls = "alert-danger";
		}
		elseif($err == "image")
		{
			$mymsg ="Choose Image";
			$err_cls = "alert-danger";
		}
	}
	
	if($_POST['val']=='Edit')
	{
		$id = $_POST['id'];
		
		$edit_fetch ="SELECT * FROM category WHERE id='$id'";
		$edit_result = mysqli_query($conn, $edit_fetch);
		$edit_row = mysqli_fetch_assoc($edit_result);
	
?>
<html>
<head>
	<title>Category</title>
</head>
<body>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Category</h1>
        </div>

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
          </ol>
        </div>
				
				<div class="col-12 mt-3" >
				<?php //print_r($_POST); ?>
					<?php
						if(strlen($mymsg)>0){
							echo '<div style="letter-spacing: 1px;font: 15px Helvetica,Arial,sans-serif;" class="alert '.$err_cls.' alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								'.$mymsg.'
								</div>';
						}
					?>
				</div>
      </div>
			 <form class="form-horizontal" action="<?php echo SITE_URL; ?>category_db.php" method="post" enctype="multipart/form-data">
				<div class="card-body">
					<div class="form-group row">
						<label  class="col-sm-2 col-form-label">Category Name</label>
							<div class="col-sm-10">
								<input type="text" name="name" value="<?php echo $edit_row['name']; ?>" class="form-control" placeholder="Name">
							</div>
					</div>
					<div class="form-group row">
						<label  class="col-sm-2 col-form-label">Category Image</label>
					<div class="col-sm-10">
						<input type="file" name="image"/>
						<img src="img/<?php echo $edit_row['image'];?>" width="100" height="100"/>
						<input type="hidden" name="old_image" value="<?php echo $edit_row['image'];?>"/>
						<input type="hidden" name="id" value="<?php echo $edit_row['id'];?>"/>
					</div>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" name="val" value="Edit" class="btn btn-info">Edit</button>
					<a href="<?php echo SITE_URL; ?>category_list.php" class="btn btn-primary ml-3">Go back</a>
				</div>
			</form>
		</div>
	</div>
</div>

<?php }else{ ?>
								
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Category</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Category</li>
						</ol>
					</div>
					<div class="col-12 mt-3" >
					<?php //print_r($_POST); ?>
					<?php
						if(strlen($mymsg)>0){
							echo '<div style="letter-spacing: 1px;font: 15px Helvetica,Arial,sans-serif;" class="alert '.$err_cls.' alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								'.$mymsg.'
								</div>';
						}
					?>
				</div>
				</div>
				
					<form class="form-horizontal" action="category_db.php" method="post" enctype="multipart/form-data">
						<div class="card-body">
              <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Category Name</label>
							<div class="col-sm-10">
                <input type="text" name="name" value="<?php echo $_POST['name'];?>" class="form-control" placeholder="Name">
							</div>
						</div>
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Category Image</label>
						<div class="col-sm-10">
              <input type="file" name="image"/>
            </div>
					</div>
        </div>
        <div class="card-footer">
          <button type="submit" name="val" value="insert" class="btn btn-info">Insert</button>
					<a href="<?php echo SITE_URL; ?>category_list.php" class="btn btn-primary ml-3">Go back</a>
        </div>
      </form>
		</div>
	</div>
</div>

	<?php } ?>
</body>
</html>
<?php include('footer.php'); ?>
<?php mysqli_close($conn); ?>


