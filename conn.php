<?php
	$conn = new mysqli('testtabl.mysql.tools', 'testtabl_1', 'c1!5#6mCaK', 'testtabl_1');
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>