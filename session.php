<?php
    require_once('config.php');
    session_start();
	
	$user_check = $_SESSION['username'];
	$password = $_SESSION['password'];
	$type=$_SESSION['role'];
	
	
	$sql=mysqli_query($con,"select * from login where username = '".$user_check."'");

	$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
	$login_session=$row['username'];
	$type=$row['role'];
	if(!isset($_SESSION['username']))
	{
		header ("location:index.php");
	}
?>
