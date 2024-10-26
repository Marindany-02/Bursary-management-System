<?php
    session_start();
	require_once 'connect.php';
	if(ISSET($_POST['save_bursary'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$constituency = $_POST['constituency'];
		$ward = $_POST['ward'];
		$level = $_POST['level'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$conn->query("INSERT INTO `bursaries` VALUES('', '$title', '$description','$start', '$end', '$constituency', '$ward', '$level')") or die(mysqli_error($conn));
		header('location: home.php');
	}
?>