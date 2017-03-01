<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "pwebdb_5150311043";

	$connection = mysqli_connect($servername,$username,$password);
	mysqli_select_db($connection,$database);
?>