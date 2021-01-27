<?php if(!isset($_SESSION['user'])){
	include ('failed.php');
}else{
	if ($page=="Add New Hostels"){
		include('pages/hman/add_hostelsp.php');
	}elseif($page=="DashBoard"){
		include('pages/hman/dashboardp.php');
	}elseif($page=="Manage Hostels"){
		include('pages/hman/manage_hostelp.php');
	}elseif($page=="Hostel Statistics"){
		include('pages/hman/hostel_statp.php');
	}elseif($page=="Access Log"){
		include('pages/hman/access_logp.php');
	}else{
		include('../failed.php');
	}
		
}?>