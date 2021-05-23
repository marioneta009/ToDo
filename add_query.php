<?php
	require_once 'conn.php';
	if(ISSET($_POST['add'])){
		if($_POST['task'] != ""){
			$task = $_POST['task'];
			$sql="INSERT INTO `task` VALUES(null, '$task', '')";
			$conn->query($sql);
			header('location:index.php');
		}
	}
?>