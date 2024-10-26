<?php
	require_once 'connect.php';
	if(ISSET($_REQUEST['id'])){
		$conn->query("UPDATE `users` SET `status` = 'Approved' WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error($conn));
		header('location:usermanage.php');
	}

	if(ISSET($_REQUEST['rejected_id'])){
		$conn->query("UPDATE `users` SET `status` = 'Rejected' WHERE `id` = '$_REQUEST[rejected_id]'") or die(mysqli_error($conn));
		header('location:usermanage.php');
	}
?>