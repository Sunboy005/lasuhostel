<?php
session_start();
include"includes/config.php";

if ($_POST{'hosteladd'}!=""){
$input=$_POST['hosteladd'];

include('includes/functionhostel.php');

	$bkblocktype=$mblock_type;
	$bkblockno=$mblockno;
	$bkflatno=$mflatno;
	$bkroomno=$mroomno;
	$bkstatus=$mstatus;
	$bkseater=$mseater;
	$bksex=$msex;
	$bkfees=$mfees;
}else{
	$bkblocktype="";
	$bkblockno="";
	$bkflatno="";
	$bkroomno="";
	$bkstatus="";
	$bkseater="";
	$bksex="";
	$bkfees="";
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


	<div class="ts-main-content">

<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
					
					<div class="panel panel-primary">
					<center><h2 class="page-title">Edit A Hostel</h2></center>

						<div class="row">
							<div class="col-md-12">
								
									<div class="panel-body">
									<form method="post" action="test1.php "class="form-horizontal">
			
									<!--  Main Page-->
<div class="form-group">
<label class="col-sm-3 control-label">Hostel Add</label>
<div class="col-sm-4">
<input type="text" class="form-control" name="hosteladd" >
<span class="help-block m-b-none">	Hostel Address can't be changed.</span>
<?php echo $_POST['hosteladd']."<br />";
echo $bkblockno."<br />";
echo $bkflatno."<br />";
echo $bkroomno."<br />"; ?>

</div>
</div>
<div class="col-sm-8 col-sm-offset-4">
<input class="btn btn-primary" type="submit" name="submit" value="Submit ">
												</div>
											</div>

										</form>
										
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