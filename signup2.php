<?php
session_start();
include('includes/config.php');
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['hid'])!="" ) {
		header("Location: dashboard.php");
		exit;
	}
	
	$error = false;
	

if(isset($_POST['submit']))
{
$hid=$_POST['hid'];
$fname=$_POST['fname'];
$oname=$_POST['oname'];
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$program=$_POST['program'];

 $sql="INSERT INTO userreg (hid,fname,oname,lname,sex,phone,email,password,programme) 
		VALUES ('$hid','$fname','$oname','$lname','$sex','$phone','$email','$password','$program')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  header("location: login.php");
  echo "<script>alert('Student Succssfully register');</script>";
}
 mysqli_close($mysqli);

$page="New Student's Registration";
?>
<?php include 'includes/head.php';?>
<?php include 'includes/pages/sign_up.php';?>
<?php include 'includes/javascripts.php';?>
<script type="text/javascript">
function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>
<script type="text/javascript">
	$(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $('#guradd').val( $('#hadd').val() );
                $('#gurstate').val( $('#state').val() );
            } 
            
        });
    });
</script>
<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function ()
{
event.preventDefault();
alert('error');
}
});
}
</script>

</html>