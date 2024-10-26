<?php
	require_once 'connect.php';
	if(ISSET($_POST['update_bursary'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$constituency = $_POST['constituency'];
		$ward = $_POST['ward'];
		$level = $_POST['level'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$conn->query("UPDATE `bursaries` SET `title` = '$title', `description` = '$description', `constituency` = '$constituency', `ward` = '$ward', `level` = '$level', `start` = '$start', `end` = '$end' WHERE `bursary_id`= '$_REQUEST[bursary_id]'") or die(mysqli_error($conn));
		header('location:home.php');
	}
?>