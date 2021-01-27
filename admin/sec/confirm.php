<?php
session_start();
include"../includes/config.php";
include"../includes/checklogin.php";
$page="Confirm Payments";

?>
<?php include('../includes/head.php');?>
<body>

<?php include("../includes/fatalerrorsec.php");
?>
<?php include("../includes/javascripts.php");
?>
<!-- Additional Java Scripts for the Page -->
<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "../check_room.php",
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
function getCDetails(val) {
$.ajax({
type: "POST",
url: "../../includes/get_confirm_details.php",
data:'hid1='+val,
success: function(data){
//alert(data);
$('#hosteladd').val(data);
}
});

$.ajax({
type: "POST",
url: "../../includes/get_confirm_details.php",
data:'hid2='+val,
success: function(data){
//alert(data);
$('#block_type').val(data);
}
});

$.ajax({
type: "POST",
url: "../../includes/get_confirm_details.php",
data:'hid3='+val,
success: function(data){
//alert(data);
$('#seater').val(data);
}
});

$.ajax({
type: "POST",
url: "../../includes/get_confirm_details.php",
data:'hid4='+val,
success: function(data){
//alert(data);
$('#fees').val(data);
}
});
}
</script>
