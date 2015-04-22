<?php
require_once('includes/config.php');

$title = addslashes($_POST['title']);

if(isset($_POST['title']) && !empty($_POST['title']))
{
$insert = mysql_query("INSERT INTO `limit_title`(`title`, `flag`) VALUES ('$title','1') ");
}

if(!mysql_error())
{
echo 1;
}
?>