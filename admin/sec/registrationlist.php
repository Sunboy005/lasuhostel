<?php
session_start();
include"../includes/config.php";
include"../includes/checklogin.php";
$page="List of Registered Students";
if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from hostelreg where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Data Deleted');</script>" ;
}
?><?php include('../includes/head.php');?>
<body>

<?php include("../includes/fatalerrorsec.php");
?>
<?php include("../includes/javascripts.php");
?>