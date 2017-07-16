<?php include('dbcon.php'); ?>
<?php
$percent = $_POST['percent'];
$conn->query("INSERT INTO `statpercent` (`id`, `percent`) VALUES (NULL, '$percent');");
header('location:statpercent.php');
?>