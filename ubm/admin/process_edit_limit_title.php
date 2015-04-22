<?php
require_once('includes/config.php');

$title_id = addslashes($_POST['title_id']);
$title = addslashes($_POST['title']);

if(isset($_POST['title']) && !empty($_POST['title']))
{
$update = mysql_query("UPDATE `limit_title` SET `title`='$title' WHERE `id` = '$title_id' ");
}

if(!mysql_error())
{
echo 1;
}
?>