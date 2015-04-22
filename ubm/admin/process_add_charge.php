<?php
require_once('includes/config.php');

$title = addslashes($_POST['title']);
$value = addslashes($_POST['value']);


if(isset($_POST['title']) && !empty($_POST['title']))
{
$insert = mysql_query("INSERT INTO `charge`(`title`,`value`,`flag`) VALUES ('$title','$value','1') ");
}

if(!mysql_error())
{
echo 1;
}
?>