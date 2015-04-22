<?php
require_once('includes/config.php');

$title = htmlentities($_POST['title'], ENT_QUOTES);


if(isset($_POST['title']) && !empty($_POST['title']))
{
$insert = mysql_query("INSERT INTO `box2`(`title`,`flag`) VALUES ('$title','1') ");
}

if(!mysql_error())
{
echo 1;
}
?>