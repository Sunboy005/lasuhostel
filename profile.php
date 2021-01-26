<?php
 session_start();
include"includes/config.php";
include"includes/checklogin.php";
include"includes/my.php";

$page='Profile View';
if (!isset($mylname)){
	include 'includes/failed.php';
}else{

?>
<?php include 'includes/head.php'?>
<?php include 'includes/pages/profile_view.php';?>
<?php include 'includes/javascripts.php';?>
<?php }?>
</body>
</html>