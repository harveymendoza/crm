<?php include('dbcon.php'); ?>
<?php
$telecom = $_POST['telecom'];
$conn->query("INSERT INTO `telcom` (`id`, `telecom`) VALUES (NULL, '$telecom');");
header('location:telcom.php');
?>
