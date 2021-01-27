<?php if(!isset($_SESSION['user'])){
	include ('failed.php');
}else{
	if ($page=="Confirm Payments"){
		include('pages/sec/confirmp.php');
	}elseif($page=="DashBoard"){
		include('pages/sec/dashboardp.php');
	}elseif($page=="List of Registered Students"){
		include('pages/sec/registration_listp.php');
	}elseif($page=="Printing List"){
		include('pages/sec/print_listp.php');
	}elseif($page=="Payment Statistics"){
		include('pages/sec/payment_statp.php');
	}elseif($page=="Access Log"){
		include('pages/sec/access_logp.php');
	}else{
		include('../failed.php');
	}
		
}?>