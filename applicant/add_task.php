<?php

    session_start();
	require_once '../connect.php';
	if(ISSET($_POST['save_task'])){
		$userAnswer = $_POST['userAnswer'];
		$activity_id = $_POST['activity_id'];
		$student_id = $_SESSION['student_id'];
		
		$conn->query("INSERT INTO `answer` VALUES('', '$userAnswer', '$activity_id', '$student_id')") or die(mysqli_error());
		echo '<script>window.location = "task_area.php?activity_id=" +'.$_REQUEST['activity_id'].'</script>';
	}
?>