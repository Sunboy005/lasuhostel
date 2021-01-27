 <?php
include('configs.php');

// $conn = new mysqli('localhost', 'root', '');
// mysqli_select_db($conn, 'hms');

/*$setSql = "SELECT `ur_Id`,`ur_username`,`ur_password` FROM `tbl_user`";
$setRec = mysqli_query($conn,$setSql);*/

$query=mysql_query("SELECT `hid`,`hosteladd`,`block_type`,`seater`,`fees`,`date` FROM hostelreg")or die (mysql_error($db_connect));
$numrows=mysql_num_rows($query)or die (mysql_error($db_connect));


$columnHeader ='';
$columnHeader = "Hostel ID"."\t"."Hostel Address"."\t"."Block Type"."\t"."Students/Hostel"."\t"."Fees"."\t"."Date Registered"."\t";


$setData='';

while($rec =mysql_fetch_assoc($query))
{
  $rowData = '';
  foreach($rec as $value)
  {
    $value = '"' . $value . '"' . "\t";
    $rowData .= $value;
  }
  $setData .= trim($rowData)."\n";
}

$date=date('jmy');
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=All Hostels Reg. List".$date.".xls");
header("Pragma: no-cache");
header("Expires: 0");

echo ucwords($columnHeader)."\n".$setData."\n";

?>
