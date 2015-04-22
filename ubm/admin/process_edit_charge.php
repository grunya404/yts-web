<?php
require_once('includes/config.php');

$ids = $_POST['ids'];
$title = addslashes($_POST['title']);
$value = addslashes($_POST['value']);


if(isset($_POST['title']) && !empty($_POST['title']))
{
$update = mysql_query("UPDATE `charge` SET `title`= '$title',`value`= '$value' WHERE `id`= '$ids' ");
}

if(!mysql_error())
{
echo 1;
}
?>