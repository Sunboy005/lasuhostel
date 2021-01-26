<?php
 session_start();
include"includes/config.php";
include"includes/checklogin.php";
include"includes/my.php";

if(isset($_POST['save']))
{//-------------------------------------------------------------------------------------------------------------------------------

$hid=$_SESSION['hid'];
$dob=$_POST['dob'];
$hadd=$_POST['hadd'];
$hcity=$_POST['hcity'];
$hstate=$_POST['hstate'];
$matricno=$_POST['matricno'];
$dept=$_POST['dept'];
$faculty=$_POST['fac'];
$gurname=$_POST['gurname'];
$gurrel=$_POST['gurrel'];
$gurname=$_POST['gurname'];
$gurphone=$_POST['gurphone'];
$guradd=$_POST['guradd'];
$gurcity=$_POST['gurcity'];
$gurstate=$_POST['gurstate'];
$cid=$_POST['cid'];

		
	
$write =mysqli_query($mysqli,"INSERT INTO  registration(`hid`,`dob`,`hadd`,`hcity`,`hstate`,`matricno`,`dept`,`faculty`,`gurname`,`gurrel`,`gurphone`,`guradd`,`gurcity`,`gurstate`,`cid`) VALUES
	 ('$hid','$dob','$hadd','$hcity','$hstate','$matricno','$dept','$faculty','$gurname','$gurrel','$gurphone','$guradd','$gurcity','$gurstate','$cid')") or die(mysqli_error($mysqli));
      //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
     echo " <script>setTimeout(\"location.href='photo.php';\",150);</script>";
}
$page="Complete Your Profile";
if ($mylname=""){
	include 'includes/failed.php';
}else{
?>

<?php include 'includes/head.php'?>
<?php include 'includes/pages/complete_profile.php';?>

<script>
function getFac(val) {
$.ajax({
type: "POST",
url: "includes/get_details.php",
data:'dept='+val,
success: function(data){
//alert(data);
$('#fac').val(data);
}
});
}
</script>
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
<?php include 'includes/javascripts.php';?>
<?php }?>
</body>
</html>