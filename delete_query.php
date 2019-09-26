<?php
	require_once 'conn.php';
	
	$id = $_POST['id'];
	
	$conn->query("DELETE FROM `member` WHERE `mem_id` = '$id'");
	
?>