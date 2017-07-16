<?php include('dbcon.php'); ?>
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$image = $_POST['image'];
$username = $_POST['username'];
$password = $_POST['password'];
$conn->query("insert into addmember (fname,lname,image,username,password) values('$fname','$lname','$image','$username',md5('$password'))");
header('location:user.php');
