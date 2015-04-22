<?php
require_once('includes/config.php');

$desc = addslashes($_POST['desc']);
$title_id = addslashes($_POST['title_id']);
$point_id = addslashes($_POST['point_id']);

//echo $desc;
if(isset($_POST['desc']) && !empty($_POST['desc']))
{
$insert = mysql_query("INSERT INTO `basic_descriptions`(`desc`,`flag`,`title_id`,`point_id`) VALUES ('$desc','1','$title_id','$point_id') ");
//echo "INSERT INTO `basic_descriptions`(`desc`,`flag`,`title_id`,`point_id`) VALUES ('$desc','1','$title_id','$point_id') ";
}

//echo mysql_error();
if(!mysql_error())
{
echo 1;
}
?>