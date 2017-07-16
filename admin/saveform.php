<?php include('dbcon.php'); ?>
<?php
$date = $_POST['date'];
$assigned = $_POST['assigned'];
$companyname = $_POST['companyname'];
$pointperson = $_POST['pointperson'];
$position = $_POST['position'];
$contact = $_POST['contact'];
$emailaddress = $_POST['emailaddress'];
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


$conn->query("INSERT INTO `newoppurtunity` (`id`, `date`, `assigned`, `companyname`, `pointperson`, `position`, `contactnumber`, `emailadd`, `meetingdate`, `reccuringdate`, `statuspercentage`, `remarks`, `specialrequest`, `budget`, `numuser`, `targetimplementation`, `device`, `telco`, `comname`, `signeddate`, `exdate`) VALUES (NULL, '$date', '$assigned', '$companyname', '$pointperson', '$position', '$contact', '$emailaddress', '$meetingdate', '$reccuringdate', '$statuspercentage', '$remarks', '$specialrequest', '$budget', '$numuser', '$targetimplementation', '$device', '$telco', '$comname', '$signeddate', '$exdate');");
?>
	 				  <script type="text/javascript"> 
                      alert('You are Successfully saved the information. Thank You'); 
                      window.location="newoppurtunity.php"; 
                      </script> 