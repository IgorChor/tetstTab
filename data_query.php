<?php
	require_once 'conn.php';
	if(ISSET($_POST['res'])){
		$query = $conn->query("SELECT * FROM `member`");
		while($fetch = $query->fetch_array()){
			echo
				"
					<tr>
						<td>".$fetch['firstname']."</td> 
						<td>".$fetch['lastname']."</td>
						<td>".$fetch['address']."</td>
						<td><center><button class='btn btn-warning edit' name='".$fetch['mem_id']."'><span class='glyphicon glyphicon-edit'></span> Edit</button> | <button class='btn btn-danger delete' name='".$fetch['mem_id']."'><span class='glyphicon glyphicon-trash'></span> Delete</button></center></td>
					</tr>
				";
			
		}
	}
	
?>