<?php
 session_start();
include"includes/config.php";
include"includes/checklogin.php";
include"includes/my.php";
include"includes/functionprebook.php";
include"includes/pre_book.php";

$_SESSION['hosteladd']=$_POST['hosteladd'];
$_SESSION['blockno']=$_POST['blockno'];
$_SESSION['flatno']=$_POST['flatno'];
$_SESSION['roomno']=$_POST['roomno'];
$_SESSION['block_type']=$_POST['block_type'];
$_SESSION['hostsex']=$_POST['hostsex'];
$_SESSION['status']=$_POST['status'];

$reghosteladd=$_SESSION['hosteladd'];
$regblockno=$_SESSION['blockno'];
$regflatno=$_SESSION['flatno'];
$regroomno=$_SESSION['roomno'];
$regblock_type=$_SESSION['block_type'];
$hostsex=$_SESSION['hostsex'];
$regstatus=$_SESSION['status'];

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
	<title> Pre Booking A Hostel :: Lagos State University Hostels</title>
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
<script>
function getFees(val) {
$.ajax({
type: "POST",
url: "includes/get_details.php",
data:'seater='+val,
success: function(data){
//alert(data);
$('#fees').val(data);
}
});
}
</script>
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
					<center><h2 class="page-title">Prebook A Hostel</h2></center>

						<div class="row">
							<div class="col-md-12">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-heading">
									<!--  Notice-->
									Notice: This doesn't guarantee you to have your pre-booked hostel. This exercise is to help us in preparing Students per hostel.
										</div>
									</div>
									<div class="hr-dashed"></div>
									<div class="panel-body">
									<!--  Main Page-->
																		<?php 			
echo $gender .'='.$hostsex;					?>	<br /><?php 			
echo $gender .'='.$_SESSION['hostsex'];			?><br/>

									<?php 								
									if ($prebookcount<1){ 
										echo "<span style='color:blue'>Sorry, Prebooking period is over.";
									}elseif($bkhosteladd!=""){
										echo "<span style='color:blue'>Sorry, You can only book once. If you have error in your booking, contact the Students Affairs</span>";
									}elseif($gender!=$hostsex){
										echo " You can't register Opposite sex hostels";
									}elseif($regblocktype=='PDS halls' and $myprogram!='PDS'){
										echo " You can't register PDS hostels";
									}elseif ($regstatus!="Good"){
										echo " You can't register Damaged/Official Hostels";
									}else{					?>
								<form method="post" class="form-horizontal">
											
										
<div class="form-group">
<label class="col-sm-8 control-label"><h4 style="color: green" align="left">Room Related info </h4> </label>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Hostel Add.</label>
<div class="col-sm-6">
<input type="text" class="form-control" value="<?php echo $reghosteladd;?>" disabled >
<input type="hidden" class="form-control" name="hosteladd" value="<?php echo $reghosteladd;?>" >
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">Block Number</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="blockno" value="<?php echo $regblockno;?>" disabled>
</div>
</div>
<?php if ($regblocktype=="Old Hostels"){?>
<div class="form-group">
<label class="col-sm-3 control-label">Flat Number </label>
<div class="col-sm-4">
<input type="text" class="form-control" name="flatno" value="<?php echo $regflatno;?>" disabled>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">Room No </label>
<div class="col-sm-4">
<input type="text" class="form-control" name="roomno" value="<?php echo $regroomno;?>" disabled>
</div>
</div>
<?php }else{?>

<div class="form-group">
<label class="col-sm-3 control-label">Flat Number </label>
<div class="col-sm-4">
<input type="text" class="form-control" name="flatno" value="<?php echo $regflatno;?>" disabled>
</div>
</div>
<?php }?>

<div class="form-group">
<label class="col-sm-3 control-label">Block Type</label>
<div class="col-sm-4">
<input type="text" class="form-control" value="<?php echo $regblocktype;?>" disabled>
<input type="hidden" class="form-control" name="block_type" value="<?php echo $regblocktype;?>">
</div>
</div>


<?php	

$ret="select * from hostel where hosteladd=$reghosteladd";
$result=mysqli_query($mysqli,$ret);
while ($rowd=mysqli_fetch_array($result))
{												
			if ($rowd["block_type"]=="New Hostels"){
					echo '<div class="form-group">';
					echo '<label class="col-sm-3 control-label">Seater </label>';
					echo '<div class="col-sm-4">';
					echo '<select name="seater" id="seater"  onChange="getFees(this.value);" class="form-control">';
					echo '<option>Select Seater</option>';
					echo "<option value='3'>3</option>";
					echo "<option value='4'>4</option>";
					echo '</select>';

					echo '</div>';
					echo '</div>';
					}
				
			else{
					echo '<div class="form-group">';
					echo '<label class="col-sm-3 control-label">Seater </label>';
					echo '<div class="col-sm-4">';
					echo '<select name="seater" id="seater"  onChange="getFees(this.value);" class="form-control">';
					echo '<option>Select Seater</option>';
					echo "<option value='1'>1</option>";
					echo "<option value='2'>2</option>";
					echo '</select>';

					echo '</div>';
					echo '</div>';
					}
	
}	?>
<div class="form-group">
<label class="col-sm-3 control-label">Fees</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="fees" id="fees" >
</div>
</div>

<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" value="Submit" class="btn btn-primary">
</div>
</form>
<?php }?>
									</div>
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