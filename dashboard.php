<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
include('includes/pdoconfig.php');
include('includes/my.php');


if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from notifications where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Notification Deleted');</script>" ;
}
$page='DashBoard';
if (!isset($mylname)){
	include 'includes/failed.php';
}else{
?>

<?php include 'includes/head.php';?>
<?php include 'includes/pages/dashboards.php';?>
<?php include 'includes/javascripts.php';?>
<?php }?>
</body>
</html>