<?php
include 'session.php';
	//jika session tidak ada berikan nilai kosong 
	$username='';
	if (!empty($_SESSION['username'])){
		$username= $_SESSION['username'];
	}
?>
<h2>WELCOME, <?php echo $username?></h2>
<h3>
	<a href="admin.php">HOME</a> |
	<a href="menu.php">MENU</a> |
	<a href="logout.php">LOGOUT</a>
</h3>
