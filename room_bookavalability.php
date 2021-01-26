<?php
include('includes/config.php');
if(!empty($_POST["hosteladd"])) 
{
$hosteladd=$_POST["hosteladd"];
$result ="SELECT count(*) FROM bookings WHERE hosteladd=?";
$stmt =$mysqli->prepare($result);
$stmt->bind_param('s',$hosteladd);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();

if($count>0)
echo "<span style='color:blue'>$count. Seats already full.</span>";
else
	echo "<span style='color:blue'>All Seats are Available</span>";
}
?>
