<?php
include('includes/config.php');
$title_id= $_POST['ids'];
$title= $_POST['title'];

$sql= mysql_query("UPDATE `basic_points` SET `point`= '$title'  WHERE `id` = '$title_id' ");


//echo mysql_error();
if(!mysql_error())
{
echo 1;
}
?>