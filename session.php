<?php
//Start session

    if(!isset($_SESSION)) 
    { 
        session_start(); 
        
    } 

if (!isset($_SESSION['id']) || ($_SESSION['id'] == '')) {
    header("location: index.php");
    exit();
}
$session_id=$_SESSION['id'];
$user_query = $conn->query("select * from addmember where user_id = '$session_id'");
$user_row = $user_query->fetch();
$name = $user_row['fname']." ".$user_row['lname'];
?>	