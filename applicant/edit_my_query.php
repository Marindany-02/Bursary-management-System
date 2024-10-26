<?php
    session_start();
	require_once '../connect.php';
	if(ISSET($_POST['update_student'])){	
		$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
		$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
		$userEmail = mysqli_real_escape_string($conn,$_POST['userEmail']);
		$userPhone = mysqli_real_escape_string($conn,$_POST['userPhone']);
		$userGender = mysqli_real_escape_string($conn,$_POST['userGender']);
		$eduLevel = mysqli_real_escape_string($conn,$_POST['eduLevel']);
		$userSchool = mysqli_real_escape_string($conn,$_POST['userSchool']);
		$userPass = mysqli_real_escape_string($conn,$_POST['userPass']);
		$a_query = $conn->query("SELECT * FROM `users` WHERE `email` = '$userEmail'") or die(mysqli_error($conns));
		$a_valid = $a_query->num_rows;
		if($a_valid > 0){
			echo "<script>alert('Email already taken')</script>";
			echo '<script>window.location = "edit_details.php?id=" +'.$_REQUEST['id'].'</script>';
		}else{
			$conn->query("UPDATE `students` SET `firstname` = '$firstName', `lastname` = '$lastName', `email` = '$userEmail', `phone` = '$userPhone', `gender` = '$userGender', `edulevel` = '$eduLevel', `school` = '$userSchool', `password` = '$userPass' WHERE `id` = '$_REQUEST[id]' ") or die(mysqli_error());
			header('location:AppAcc.php');
		}
	}	
?>