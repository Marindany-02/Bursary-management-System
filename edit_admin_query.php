<?php
	require_once 'connect.php';
	if(ISSET($_POST['update_admin'])){
		$adm=$_POST['adm'];
		$email = $_POST['email'];
		$phone=$_POST['phone'];
		$gender=$_POST['gender'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$q_admin = $conn->query("SELECT * FROM `users` WHERE `email` = '$email'") or die(mysqli_error($conn));
		$v_admin = $q_admin->num_rows;
		if($v_admin > 0){
			echo '<script>alert("Email already taken");</script>';
			echo '<script>window.location = "edit_admin.php?id=" +'.$_REQUEST['id'].'</script>';
		}else{
			$conn->query("UPDATE `users` SET `email` = '$email',`adm`='$adm',`phone`='$phone',`gender`='$gender',`password` = '$password', `firstname` = '$firstname', `lastname` = '$lastname' WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error($conn));
			header('location:adminAcc.php');
		}
	}
?>+