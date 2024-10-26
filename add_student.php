<?php

    session_start();
	require_once 'connect.php';
	if(ISSET($_POST['save_student'])){	
		$userName = mysqli_real_escape_string($conn,$_POST['userName']);
		$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
		$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
		$userPass = mysqli_real_escape_string($conn,$_POST['userPass']);
		$userEmail = mysqli_real_escape_string($conn,$_POST['userEmail']);
		$userGender = mysqli_real_escape_string($conn,$_POST['userGender']);

		$a_query = $conn->query("SELECT * FROM `studen` WHERE `user_name` = '$userName'") or die(mysqli_error());
		$a_valid = $a_query->num_rows;
		if($a_valid > 0){
			echo "<script>alert('Username already taken')</script>";
			echo "<script>window.location = 'students_details.php'</script>";
		}else{
			$conn->query("INSERT INTO `students` VALUES('', '$userName', '$firstName', '$lastName', '$userPass', '$userEmail', '$userGender', '$_SESSION[admin_id]')") or die(mysqli_error());
			header('location:students_details.php');
		}
	}	
?>