<?php
session_start();
include"../includes/config.php";
include"../includes/checklogin.php";
$page="Manage Hostels";
if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from hostel where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Data Deleted');</script>" ;
}
?>
<?php include('../includes/head.php');?>
<body>

<?php include("../includes/fatalerrorhman.php");
?>
<?php include("../includes/javascripts.php");
?>

</body>
</html>
