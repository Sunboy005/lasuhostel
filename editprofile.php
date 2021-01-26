<?php
session_start();
include"includes/config.php";
include('includes/checklogin.php');
include('includes/my.php');
if(isset($_POST['update']))
{
$hadd=$_POST['hadd'];
$hcity=$_POST['hcity'];
$hstate=$_POST['hstate'];
$gurname=$_POST['gurname'];
$gurrel=$_POST['gurrel'];
$gurphone=$_POST['gurphone'];
$guradd=$_POST['guradd'];
$gurcity=$_POST['gurcity'];
$gurstate=$_POST['gurstate'];
$cid=$_POST['cid'];
$query="update  registration set hadd=?,hcity=?,hstate=?,gurname=?,gurrel=?,gurphone=?,guradd=?,gurcity=?,gurstate=?,cid=? where hid=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssssssssi',$hadd,$hcity,$hstate,$gurname,$gurrel,$gurphone,$guradd,$gurcity,$gurstate,$cid,$myhid);
$stmt->execute();

echo"<script>alert('Profile Updated Successfully');</script>";
 header("location: dashboard.php");
}
$page='Update Profile';
if (!isset($mylname)){
	include 'includes/failed.php';
}else{
?>
<?php include'includes/head.php';?>
<?php include 'includes/pages/update_profile.php';?>
<?php include 'includes/javascripts.php';?>
<?php }?>
	
<script type="text/javascript">
	$(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $('#guradd').val( $('#hadd').val() );
                $('#gurcity').val( $('#hcity').val() );
                $('#gurstate').val( $('#hstate').val() );
              } 
            
        });
    });
</script>
</body>
</html>

