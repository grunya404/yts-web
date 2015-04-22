<?php session_start();

// if session is not set redirect the user
if(empty($_SESSION['u_name']))
	header("Location:admin_login.php");	

//if logout then destroy the session and redirect the user
if(isset($_GET['logout']))
{
	session_destroy();
	header("Location:admin_login.php");
}	

header("Location:dashboard.php");

?>