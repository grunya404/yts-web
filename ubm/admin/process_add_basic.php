<?php
require_once('includes/config.php');

$title = addslashes($_POST['title']);
$title_id = addslashes($_POST['title_id']);


if(isset($_POST['title']) && !empty($_POST['title']))
{
$insert = mysql_query("INSERT INTO `basic_points`(`point`,`flag`,`title_id`) VALUES ('$title','1','$title_id') ");
}

if(!mysql_error())
{
echo 1;
}
?>