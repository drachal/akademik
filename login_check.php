<?php
include 'session.php';
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login_query = mysqli_query($connection,"SELECT*FROM sys_user WHERE userName = '$username' && userPassword = '$password'");
$row_login = mysqli_fetch_assoc($login_query);
$total_login = mysqli_num_rows($login_query);

if (empty($username) and empty ($password) ) {
	//redirect ke login.php
	header ("location : login.php");
}else {
	//chech data/query check
	if($total_login !=0){
	//buat session disini
	$_SESSION['username'] = $username;
	
	//redirect ke admin.php
	header("location: admin.php");
	}else{
	//redirect ke login.php
	header("location: login.php");
	}
}