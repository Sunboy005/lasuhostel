<?php
include('config.php');

$result ="SELECT count(*) FROM admin";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($admincount);
$stmt->fetch();
$stmt->close();


$result ="SELECT count(*) FROM userreg";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($stucount);
$stmt->fetch();
$stmt->close();

$result ="SELECT count(*) FROM hostelreg ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($hregcount);
$stmt->fetch();
$stmt->close();

$blktyp="PDS halls";
$result ="SELECT count(*) FROM hostelreg WHERE block_type=? ";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('s',$blktyp);
$stmt->execute();
$stmt->bind_result($pdsregcount);
$stmt->fetch();
$stmt->close();

$blktyp="New Hostels";
$result ="SELECT count(*) FROM hostelreg WHERE block_type=? ";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('s',$blktyp);
$stmt->execute();
$stmt->bind_result($nhregcount);
$stmt->fetch();
$stmt->close();

$blktyp="Old Hostels";
$result ="SELECT count(*) FROM hostelreg WHERE block_type=? ";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('s',$blktyp);
$stmt->execute();
$stmt->bind_result($ohregcount);
$stmt->fetch();
$stmt->close();

$qry="SELECT SUM(fees) as count FROM hostelreg";
$res=$mysqli->query($qry);
$totalfees=0;
$rec=$row=$res->fetch_assoc();
$totalfees=$rec['count'];

$qry="SELECT SUM(fees) as count FROM hostelreg WHERE block_type='Old Hostels'";
$res=$mysqli->query($qry);
$totalohfees=0;
$rec=$row=$res->fetch_assoc();
$totalohfees=$rec['count'];

$qry="SELECT SUM(fees) as count FROM hostelreg WHERE block_type='New Hostels'";
$res=$mysqli->query($qry);
$totalnhfees=0;
$rec=$row=$res->fetch_assoc();
$totalnhfees=$rec['count'];

$qry="SELECT SUM(fees) as count FROM hostelreg WHERE block_type='PDS Halls'";
$res=$mysqli->query($qry);
$totalpdsfees=0;
$rec=$row=$res->fetch_assoc();
$totalpdsfees=$rec['count'];

$seater=1;
$result ="SELECT count(*) FROM hostelreg WHERE seater=?";
$stmt =$mysqli->prepare($result);
$stmt->bind_param('i',$seater);
$stmt->execute();
$stmt->bind_result($seater1count);
$stmt->fetch();
$stmt->close();

$seater=2;
$result ="SELECT count(*) FROM hostelreg WHERE seater=?";
$stmt =$mysqli->prepare($result);
$stmt->bind_param('i',$seater);
$stmt->execute();
$stmt->bind_result($seater2count);
$stmt->fetch();
$stmt->close();

$seater=3;
$result ="SELECT count(*) FROM hostelreg WHERE seater=?";
$stmt =$mysqli->prepare($result);
$stmt->bind_param('i',$seater);
$stmt->execute();
$stmt->bind_result($seater3count);
$stmt->fetch();
$stmt->close();

$seater=4;
$result ="SELECT count(*) FROM hostelreg WHERE seater=?";
$stmt =$mysqli->prepare($result);
$stmt->bind_param('i',$seater);
$stmt->execute();
$stmt->bind_result($seater4count);
$stmt->fetch();
$stmt->close();


$result ="SELECT count(*) FROM operational_links WHERE operational_code='10001'";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($studentsreg);
$stmt->fetch();
$stmt->close();
 
 if ($studentsreg>0){
 $studentregstatus='ON';
 } else {
	 $studentregstatus='OFF';
 }


$result ="SELECT count(*) FROM operational_links WHERE operational_code='10002'";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($prebook);
$stmt->fetch();
$stmt->close();
 
 if ($prebook>0){
 $prebookstatus='ON';
 } else {
	 $prebookstatus='OFF';
 }
 

$result ="SELECT count(*) FROM operational_links WHERE operational_code='10003'";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($book);
$stmt->fetch();
$stmt->close();
 
 if ($book>0){
 $bookstatus='ON';
 } else {
	 $bookstatus='OFF';
 }
 
 


?>