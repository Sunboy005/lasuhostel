<?php
session_start();
include"includes/config.php";
include"includes/my.php";
include"includes/checklogin.php";
include"includes/updatehostelreg.php";

	
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Continue With Hostel Registration:: Lagos State University Hostels</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
</head>
<body>
<?php 
	include ("includes/header.php");
	?>
	

	<div class="ts-main-content">

	<nav class="ts-sidebar">
		<?php 
	include ("includes/sidebar.php");
	?>
	</nav>
<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
					
					<div class="panel panel-primary">
				<center><h3 class="page-title">
						<!-- Page Title-->
					Continue Hostel Registration
						</h3></center>

						<div class="row">
							<div class="col-md-12">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-heading">
									<!--  Notice-->
									Notice: This doesn't guarrantee you to have your pre booked hostel.
										</div>
									</div>
									<div class="hr-dashed"></div>
									<div class="panel-body">
									<!--  Main Page-->
<?php 
if ($bookingcount<1){ 
include('includes/periodover.php');
}elseif($myhhid==""){
include('includes/make_payment.php');
}elseif($mylevel!=""){
include('includes/useterms.php');
}else{?>
									
									
								<form method="post" class="form-horizontal">
											

<div class="form-group">
<label class="col-sm-8 control-label"><h4 style="color: blue" align="left">Room Related Information </h4> </label>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Hostel Add.(eg: 140101)</label>
<div class="col-sm-4">
<input type="text" class="form-control"  value="<?php echo $bkhosteladd;?>" disabled>
<input type="hidden" name="hosteladd" id="hosteladd" value="<?php echo $bkhosteladd;?>" >
<span id="room-availability-status" style="font-size:12px;"></span>
</div>

<label class="col-sm-2 control-label">Seater</label>
<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $bkseater;?>" disabled>
<input type="hidden" name="seater" id="seater" value="<?php echo $bkseater;?>">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Block Number</label>
<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $bkblockno;?>" disabled>
</div>

<label class="col-sm-2 control-label">Flat Number </label>
<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $bkflatno;?>" disabled>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Room No </label>
<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $bkroomno;?>" disabled>
</div>

<label class="col-sm-2 control-label">Block Type</label>
<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $bkblocktype;?>" disabled>
<input type="hidden" class="form-control" name="block_type" id="block_type" value="<?php echo $bkblocktype;?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Hostel Condition</label>
<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $bkstatus;?>" disabled>
</div>
<label class="col-sm-2 control-label">Level</label>
<div class="col-sm-4">
<select name="level" id="level" class="form-control">
<option value="PDS">PDS(not Applicable)</option>
<option value="200">200 Level</option>
<option value="300">300 Level</option>
<option value="400">400 Level</option>
<option value="500">500 Level</option>
<option value="Extra Year">Extra Year</option>
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-8 control-label"><h4 style="color: blue" align="left">HOSTELS MATERIALS</h4></label>
</div>
<div class="form-group">
<div class="col-sm-2">
</div>
<div class="col-sm-10">
<label class="col-sm-2 control-label"><input type="checkbox" name="item1" value="Chair">&nbsp;&nbsp;&nbsp;Chair</label>
<label class="col-sm-2 control-label"><input type="checkbox" name="item2" value="Table">&nbsp;&nbsp;&nbsp;Table</label>
<label class="col-sm-2 control-label"><input type="checkbox" name="item3" value="Wardrobe">&nbsp;&nbsp;&nbsp;Wardrobe</label> 
<label class="col-sm-2 control-label"><input type="checkbox" name="item4" value="Matress">&nbsp;&nbsp;&nbsp;Matress</label>
</div>
</div>

<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="update" value="Confirm Hostel Registration" class="btn btn-primary">
</div>
</form>
									</div>
								</div>
							</div>
							
<?php }?>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>

<?php include "includes/footer.php";?>
</html>