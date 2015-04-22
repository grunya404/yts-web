<?php
require_once('includes/config.php');

$title_id = $_POST['title_id'];
$point = addslashes($_POST['point']);
$desc = addslashes($_POST['desc']);


if(isset($_POST['point']) && !empty($_POST['point']))
{
$insert = mysql_query("INSERT INTO `index_feature_points`( `point`, `title_id`, `flag`) VALUES ('$point', '$title_id', '1' ) ");
 $point_id = mysql_insert_id();
}

if(isset($_POST['desc']) && !empty($_POST['desc']))
{
$insert1 = mysql_query("INSERT INTO `index_feature_descriptions`(`desc`, `title_id`, `point_id`, `flag`) VALUES ('$desc ','$title_id',' $point_id','1')  ");
}
 echo mysql_error();
if(!mysql_error())
{
echo 1;
}
?>