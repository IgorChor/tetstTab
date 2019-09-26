<?php
	require_once 'conn.php';
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	
	$conn->query("INSERT INTO `member` VALUES('', '$firstname', '$lastname', '$address')");
	
?>