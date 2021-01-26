<?php
session_start();
include"includes/config.php";
//

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
									<form method="post" action="test2.php "class="form-horizontal">
			
									<!--  Main Page-->
<div class="slideBox"><input id="frmGeneralSettings_dashboardHotkeys" value="1" checked="checked" type="checkbox" name="dashboardHotkeys"><label for="frmGeneralSettings_dashboardHotkeys"></label></div>
<span class='win'>hi</span>
<span class="loose">passed</span>
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