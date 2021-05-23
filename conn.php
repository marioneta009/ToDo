<?php
	$conn = new mysqli("localhost", "root", "", "Task");
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>