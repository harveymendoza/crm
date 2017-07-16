<?php include('dbcon.php'); ?>
<?php
$id = $_GET['id'];
$date = $_POST['date'];
$assigned = $_POST['assigned'];
$companyname = $_POST['companyname'];
$pointperson = $_POST['pointperson'];
$position = $_POST['position'];
$contactnumber = $_POST['contactnumber'];
$emailadd = $_POST['emailadd'];
$meetingdate = $_POST['meetingdate'];
$reccuringdate = $_POST['reccuringdate'];
$statuspercentage = $_POST['statuspercentage'];
$remarks = $_POST['remarks'];
$specialrequest = $_POST['specialrequest'];
$budget = $_POST['budget'];
$numuser = $_POST['numuser'];
$targetimplementation = $_POST['targetimplementation'];
$device = $_POST['device'];
$telco = $_POST['telco'];
$comname = $_POST['comname'];
$signeddate = $_POST['signeddate'];
$exdate = $_POST['exdate'];

$conn->query("UPDATE `newoppurtunity` SET `reccuringdate` = '$reccuringdate', `statuspercentage` = '$statuspercentage', `remarks` = '$remarks', `comname` = '$comname', `signeddate` = '$signeddate', `exdate` = '$exdate' WHERE `newoppurtunity`.`id` = $id;");
header('Location:oppurtunity.php');
?>