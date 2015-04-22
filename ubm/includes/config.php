<?php
/*
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "ubm";
$prefix = "";
*/

$mysql_hostname = "localhost";
$mysql_user = "ytsnet_ubm";
$mysql_password = "zxcvbnm54321";
$mysql_database = "ytsnet_ubm";
$prefix = "";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

?>