<?php
include('includes/config.php');
$point_id= $_POST['ids'];
$point= $_POST['point'];


$sql= mysql_query("UPDATE `basic_descriptions` SET `desc`= '$point' WHERE `id` = '$point_id' ");
if(!mysql_error())
{
echo 1;
}
?>