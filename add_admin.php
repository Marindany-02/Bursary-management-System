<?php
	require_once 'connect.php';
	if(ISSET($_POST['save_admin'])){
		$adm=$_POST['adm'];
		$email = $_POST['email'];
		$phone =$_POST['phone'];
		$gender=$_POST['$gender'];
		$password = $_POST['password'];
		$firstname = $_POST['firstName'];
		$lastname = $_POST['lastName'];
		
		$a_query = $conn->query("SELECT * FROM `users` WHERE `email` = '$email'") or die(mysqli_error($conn));
		$a_valid = $a_query->num_rows;
		if($a_valid > 0){
			echo "<script>alert('Email already taken')</script>";
			echo "<script>window.location = 'adminAcc.php'</script>";
		}else{
			$conn->query("INSERT INTO `users` (`id`,`adm`,`email`,`phone`,`gender`,`password`,`firstname`,`lastname`,`status`) VALUES('','$adm','$email','$phone', '$gender','$password','$firstname', '$lastname','1')") or die(mysqli_error($conn));
			header('location:adminAcc.php');
		}
	}	
?>