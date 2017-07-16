<?php include('dbcon.php'); ?>
<?php
$tablet = $_POST['tablet'];
$conn->query("INSERT INTO `dev` (`id`, `tablet`) VALUES (NULL, '$tablet');");
header('location:dev.php');
?>