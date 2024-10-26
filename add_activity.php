<?php

    session_start();
	require_once 'connect.php';
	if(ISSET($_POST['save_activity'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$constituency = $_POST['constituency'];
		$ward = $_POST['ward'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$conn->query("INSERT INTO `activity` VALUES('', '$title', '$description','$constituency','$ward' ,'$start', '$end',") or die(mysqli_error($conn));
		header('location: activity.php');
	}
?>