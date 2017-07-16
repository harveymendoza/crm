<?php include('dbcon.php'); ?>
<?php
$target = $_POST['target'];
$conn->query("INSERT INTO `targetimplem` (`id`, `target`) VALUES (NULL, '$target');");
header('location:targetimplem.php');
?>