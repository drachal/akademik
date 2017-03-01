<?php
include 'session.php';
unset($_SESSION);
session_destroy();
//redirect ke login php
header("location: login.php");
?>