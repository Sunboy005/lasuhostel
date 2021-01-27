<?php
session_start();
include"../includes/config.php";
include('../includes/myaddy.php');
include"includes/regpaystat.php";
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
	<title>Registration and Payments  Statistics:: Lagos State University Hostels</title>
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-social.css">
	<link rel="stylesheet" href="../css/bootstrap-select.css">
	<link rel="stylesheet" href="../css/fileinput.min.css">
	<link rel="stylesheet" href="../css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="../css/style.css">
<script type="text/javascript" src="../js/chart.js"></script>
<script type="text/javascript" src="../js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="../js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
</head>
<body>
	<?php 
	include ("includes/header.php");
	?>

	<div class="ts-main-content">
		<?php 
	include ("includes/sidebar.php");
	?>
<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
					
					<div class="panel panel-primary">
						<div class="row">
							<div class="col-md-12">
								
									<div class="panel-body">
								<div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hostel Registration Statistics</h3>

              <div class="box-tools">
               </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tbody><tr>
                  <th style="width: 10px;">#</th>
                  <th>Hostel </th>
                  <th>No</th>
				</tr>
                <tr>
                  <td>1.</td>
                  <td>PDS Hostels</td>
                  <td>
					<?php echo $pdsbkcount;?>
				  </td>
				 </tr>
                <tr>
                  <td>2.</td>
                  <td>New Hostels</td>
                  <td>
                    <?php echo $nhbkcount;?>
                  </td>
                   </tr>
                <tr>
                  <td>3.</td>
                  <td>Old  Hostels</td>
                  <td> <?php echo $ohbkcount;?>
                  </td>
                </tr>
                 <tr>
				  <td><?php $ttlreg=$pdsbkcount+$ohbkcount+$nhbkcount?></td>
                  <td>TOTAL</td>
                  <td> <?php echo $ttlreg;?>
                  </td>
                </tr>
				</tbody></table>

              <h3 class="box-title">Hostel Cash Inflow Statistics</h3>

              <div class="box-tools">
               </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tbody><tr>
                  <th style="width: 10px;">#</th>
                  <th>Hostel </th>
                  <th>No</th>
				</tr>
                <tr>
                  <td>1.</td>
                  <td>PDS Hostels</td>
                  <td>
					<?php echo $pdssum;?>
				  </td>
				 </tr>
                <tr>
                  <td>2.</td>
                  <td>New Hostels</td>
                  <td>
                    <?php echo $nhsum;?>
                  </td>
                   </tr>
                <tr>
                  <td>3.</td>
                  <td>Old  Hostels</td>
                  <td> <?php echo $ohsum;?>
                  </td>
                </tr>
                 <tr>
				  <td></td>
                  <td>TOTAL</td>
                  <td> <?php echo $totalcash;?>
                  </td>
                </tr>
				</tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
		 </div>
<!--  Main Page-->
										
								</div>
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
	

<?php include "../includes/footer.php";?>
</html>