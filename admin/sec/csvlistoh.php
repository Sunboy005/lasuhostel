 <?php
include('includes/configs.php');


$query=mysql_query("SELECT `hid`,`hosteladd`,`seater`,`fees` FROM hostelreg WHERE block_type='Old Hostels'") or die (mysql_error());
$numrows=mysql_num_rows($query)or die (mysql_error());
$data=mysql_fetch_all($query);
function mysql_fetch_all($query) {
    $all = array();
    while ($all[] = mysql_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//print_r($row1); exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>

<?php
 $date=date('jmy');
//The name of the CSV file that will be downloaded by the user.
$fileName = $date."reglist.csv";
 
//Set the Content-Type and Content-Disposition headers.
header('Content-Type: application/excel');
header('Content-Disposition: attachment; filename="' . $fileName . '"');
 
//A multi-dimensional array containing our CSV data.
//$data = array(
 //     //Our header (optional).
 //array("id", "hid", "hosteladd", "block_type", "seater", "fees"));
   //Our data
// array($data['id'], $data['hid'], $data['hosteladd'], $data['block_type'], $data['seater'], $data['fees']);
//     array("Lisa", "2011-09-29"),
//     array("Harry", "2013-12-12")
// );
 
//Open up a PHP output stream using the function fopen.
$fp = fopen('php://output', 'w');
//Loop through the array containing our CSV data.
foreach ($data as $row)
 {

    //fputcsv formats the array into a CSV format.
    //It then writes the result to our output stream.
    fputcsv($fp, $row);
}
 
//Close the file handle.
fclose($fp);