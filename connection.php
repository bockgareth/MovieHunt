<?php
	$errors = [];
	$conn = @new mysqli("localhost", "root", "", "emotions");
	if (!$conn) {
		$errors[] = "Unable to connect to database".$conn->connect_errno;
	} 
	?>