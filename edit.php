<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['id'])){
		$id = $_POST['id'];
		
		$query = $conn->query("SELECT * FROM `member` WHERE `mem_id` ='$id'");
		$fetch = $query->fetch_array();
		
		$array = array(
			'mem_id' => $fetch['mem_id'],
			'firstname' => $fetch['firstname'],
			'lastname' => $fetch['lastname'],
			'address' => $fetch['address']
		);
		
		echo json_encode($array);
	}
?>