<?php
session_start();
include"../../includes/config.php";
include"../includes/myaddy.php";
//
if(isset($_POST['submit'])){
$status=$_POST['status'];
$seater=$_POST['seater'];
$fees=$_POST['fees'];

$id=$_GET['id'];
$query="UPDATE hostel SET   seater=?, fees=?, status=? WHERE id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('iisi',$seater,$fees,$status,$id);
$stmt->execute();
  header("location: manage_hostel.php");
echo"<script>alert('Room Details has been updated successfully');</script>";
}
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
	<title> Edit A Hostel :: Lagos State University Hostels</title>
	<link rel="stylesheet" href="../../css/font-awesome.min.css">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../../css/bootstrap-social.css">
	<link rel="stylesheet" href="../../css/bootstrap-select.css">
	<link rel="stylesheet" href="../../css/fileinput.min.css">
	<link rel="stylesheet" href="../../css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="../../css/style.css">
<script type="text/javascript" src="../../js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="../../js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script>
function getFees(val) {
$.ajax({
type: "POST",
url: "../../includes/get_details.php",
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
	include ("../includes/header.php");
	?>
	<div class="ts-main-content">
		<?php 
	include ("../includes/sidebarhman.php");
	?>
<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
					
					<div class="panel panel-primary">
					<center><h2 class="page-title">Edit A Hostel</h2></center>

						<div class="row">
							<div class="col-md-12">
													<?php if($designation!='hman'){
						include '../includes/warning.php';
					}else{
					?>
									<div class="panel-body">
									<form method="post" class="form-horizontal">
												<?php	
	$id=$_GET['id'];
	$ret="select * from hostel where id=?";
		$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
									<!--  Main Page-->
<div class="form-group">
<label class="col-sm-3 control-label">Hostel Add</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="hosteladd" id="hosteladd" value="<?php echo $row->hosteladd;?>" disabled>
<span class="help-block m-b-none">	Hostel Address can't be changed.</span>

</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Block Number</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="blockno" id="blockno" value="<?php echo $row->blockno;?>" disabled>
<span class="help-block m-b-none">	Block Number can't be changed.</span>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">Flat Number </label>
<div class="col-sm-4">
<input type="text" class="form-control" name="flatno" id="flatno" value="<?php echo $row->flatno;?>" disabled>
<span class="help-block m-b-none">	Flat Number can't be changed.</span>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">Room No </label>
<div class="col-sm-4">
<input type="text" class="form-control" name="roomno" id="roomno" value="<?php echo $row->roomno;?>" disabled>
<span class="help-block m-b-none">	Room Number can't be changed.</span>
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label">Status </label>
<div class="col-sm-4"><select name="status" value="" class="form-control" required>
<option value="<?php echo $row->status;?>"><?php echo $row->status;?></option>
<option value="Official">Official Use</option>
<option value="Damaged">Damaged</option>
<option value="Good">Good</option>
</select>
</div>
</div>

<?php	

$ret="select * from hostel where id=$id";
$result=mysqli_query($mysqli,$ret);
while ($rowd=mysqli_fetch_array($result))
{
	$block_type=$rowd['block_type'];
}
			if ($block_type=="PDS Halls"){
					echo '<div class="form-group">';
					echo '<label class="col-sm-3 control-label">Seater </label>';
					echo '<div class="col-sm-4">';
					echo '<select name="seater" id="seater" class="form-control">';
					echo "<option value='4'>4</option>";
					echo '</select>';

					echo '</div>';
					echo '</div>';
					}
				
			elseif ($block_type=="New Hostels"){
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
<?php if ($block_type=="PDS Halls"){
	?>
<div class="form-group">
<label class="col-sm-3 control-label">Fees</label>
<div class="col-sm-4">
<?php $ret="Select * from hostelcat where blocktype='PDS Halls'";
$result=mysqli_query($mysqli,$ret);
while ($rowm=mysqli_fetch_array($result))
{
	$tpd=$rowm['fees'];
}?>
<input type="text" class="form-control" name="fees" value="<?php echo $tpd;?>">
</div>
</div>
<?php }else{?>

<div class="form-group">
<label class="col-sm-3 control-label">Fees</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="fees" id="fees" >
</div>
</div>
<?php }?>
<div class="col-sm-8 col-sm-offset-4">
<input class="btn btn-primary" type="submit" name="submit" value="Submit ">
												</div>

											</form>
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
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap-select.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.dataTables.min.js"></script>
	<script src="../js/dataTables.bootstrap.min.js"></script>
	<script src="../js/Chart.min.js"></script>
	<script src="../js/fileinput.js"></script>
	<script src="../js/chartData.js"></script>
	<script src="../js/main.js"></script>
</body>
<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_addhost.php",
data:'hosteladd='+$("#hosteladd").val(),
type: "POST",
success:function(data){
$("#room-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

<?php include "../../includes/footer.php";?>
</html>