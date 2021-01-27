<?php if(!isset($_SESSION['user'])){
	include ('failed.php');
}else{
	if ($page=="Add Admin"){
		include('pages/admin/add_adminp.php');
	}elseif($page=="Turn Features ON/OFF"){
		include('pages/admin/turn_onp.php');
	}elseif($page=="Administrators List"){
		include('pages/admin/admin_listp.php');
	}elseif($page=="Update Session and Signature"){
		include('pages/admin/admin_signp.php');
	}elseif($page=="Dashboard"){
		include('pages/admin/dashboardp.php');
	}elseif($page=="Hostel Statistics"){
		include('pages/admin/admin_hostelstatp.php');
	}elseif($page=="Payment Statistics"){
		include('pages/admin/admin_paymentstatp.php');
	}elseif($page=="Access Log"){
		include('pages/admin/access_logp.php');
	}else{
		include('../includes/failed.php');
	}
		
}?>