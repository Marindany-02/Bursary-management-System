<?php

    session_start();
	require_once 'connect.php';
	if(ISSET($_POST['update_student'])){	
		$userName = mysqli_real_escape_string($conn,$_POST['userName']);
		$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
		$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
		$userPass = mysqli_real_escape_string($conn,$_POST['userPass']);
		$userEmail = mysqli_real_escape_string($conn,$_POST['userEmail']);
		$userGender = mysqli_real_escape_string($conn,$_POST['userGender']);

		$a_query = $conn->query("SELECT * FROM `students` WHERE `user_name` = '$userName'") or die(mysqli_error($conn));
		$a_valid = $a_query->num_rows;
		if($a_valid > 0){
			echo "<script>alert('Username already taken')</script>";
			echo '<script>window.location = "edit_students.php?student_id=" +'.$_REQUEST['student_id'].'</script>';
		}else{
			$conn->query("UPDATE `students` SET `user_name` = '$userName', `first_name` = '$firstName', `last_name` = '$lastName', `password` = '$userPass', `email` = '$userEmail', `gender` = '$userGender' WHERE `id` = '$_REQUEST[student_id]' ") or die(mysqli_error($conn));
			header('location:students_details.php');
		}
	}	
?>