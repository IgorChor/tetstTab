<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['id'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		
		$conn->query("UPDATE `member` set `firstname` = '$firstname', `lastname` = '$lastname', `address` = '$address' WHERE `mem_id` = '$id'");
	}
	
?>