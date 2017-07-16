<?php
		include('dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$_SESSION['last_login_timestamp'] = time();  


		$resultFilms = $conn->prepare("SELECT * FROM users WHERE username= :hjhjhjh AND password= :asas")or die(mysql_error());
		$resultFilms->bindParam(':hjhjhjh', $username);
		$resultFilms->bindParam(':asas', $password);
		$resultFilms->execute();
		$num_row = $resultFilms->rowcount();
		$row = $resultFilms->fetch();
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['user_id'];
		header('location:save_activity_login.php');	
		 } else{ 
		header('location:index.php');
		}	
		?>