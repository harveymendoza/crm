<?php
include('dbcon.php');
session_start();
date_default_timezone_set('Etc/GMT+8');
$username = $_SESSION['id'];
$time = date("Y-m-d h:i:A");
$conn->query("INSERT INTO `activity_log` (`id`, `username`, `time`, `activity`, `company`) VALUES (NULL, '$username', '$time', 'logout', 'logout');");
session_destroy();
header('location:index.php');
?>