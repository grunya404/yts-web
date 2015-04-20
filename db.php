<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db_name = 'new';
if($con = mysqli_connect($host,$user,$pass,$db_name)){
	return true;
}
else{
	echo "no connections available";
}
?>