<?php
include('includes/config.php');
$point_id= $_POST['point_id'];
$point= addslashes($_POST['point']);
$desc= addslashes($_POST['desc']);

$sql= mysql_query("UPDATE `index_feature_points` SET `point`='$point' WHERE `id` = '$point_id' ");
$sql1 = mysql_query("UPDATE `index_feature_descriptions` SET `desc`='$desc' WHERE `point_id` = '$point_id' ");
echo mysql_error();
if(!mysql_error())
{
echo 1;
}
?>