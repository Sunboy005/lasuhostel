<?php
session_start();
include"includes/config.php";
include"includes/checklogin.php";
	// it will never let you open index(login) page if session is set
	if ( !isset($_SESSION['hid'])) {
		header("Location: login.php");
		exit;
	}else{
		
include"includes/my.php";
include"includes/functionbooking.php";
include"includes/book1.php";
$page="Book A Hostel";

if (!isset($mylname)){
	include 'includes/failed.php';
}else{
?>
<?php include 'includes/head.php';?>
<script>
function getDetails(val) {
$.ajax({
type: "POST",
url: "includes/get_details.php",
data:'hosteladd1='+val,
success: function(data){
//alert(data);
$('#blockno').val(data);
}
});

$.ajax({
type: "POST",
url: "includes/get_details.php",
data:'hosteladd2='+val,
success: function(data){
//alert(data);
$('#flatno').val(data);
}
});

$.ajax({
type: "POST",
url: "includes/get_details.php",
data:'hosteladd3='+val,
success: function(data){
//alert(data);
$('#roomno').val(data);
}
});

$.ajax({
type: "POST",
url: "includes/get_details.php",
data:'hosteladd4='+val,
success: function(data){
//alert(data);
$('#block_type').val(data);
}
});
$.ajax({
type: "POST",
url: "includes/get_details.php",
data:'hosteladd5='+val,
success: function(data){
//alert(data);
$('#sex').val(data);
}
});
$.ajax({
type: "POST",
url: "includes/get_details.php",
data:'hosteladd6='+val,
success: function(data){
//alert(data);
$('#status').val(data);
}
});
$.ajax({
type: "POST",
url: "includes/get_details.php",
data:'hosteladd7='+val,
success: function(data){
//alert(data);
$('#seater').val(data);
}
});
$.ajax({
type: "POST",
url: "includes/get_details.php",
data:'hosteladd8='+val,
success: function(data){
//alert(data);
$('#fees').val(data);
}
});
}
</script>

<br/>
<?php include 'includes/pages/book.php';?>
<?php include 'includes/javascripts.php';?>
<?php }?>
<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "room_availability.php",
data:'hosteladd='+$("#hosteladd").val(),
type: "POST",
success:function(data){
$("#room-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<script>
function checkBookavailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "room_bookavailability.php",
data:'hosteladd='+$("#hosteladd").val(),
type: "POST",
success:function(data){
$("#room-bookavailability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
</body>
	<?php }?>
</html>