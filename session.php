<?php
session_start();
//check variabel session
if(empty($_SESSION ['username'])){
	//redirect ke login.php
	header("location : login.php");
}
?>
