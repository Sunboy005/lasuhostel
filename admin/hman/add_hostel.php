<?php
session_start();
include"../includes/config.php";
include"../includes/checklogin.php";
$page="Add New Hostels";
?>
<?php include('../includes/head.php');?>
<body>

<?php include("../includes/fatalerrorhman.php");
?>
<?php include("../includes/javascripts.php");
?>
<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "../includes/check_addhost.php",
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
</body>
</html>
