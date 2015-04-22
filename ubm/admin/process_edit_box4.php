<?php
include('includes/config.php');
$title_id= $_POST['ids'];
$title = htmlentities($_POST['title'], ENT_QUOTES);


$sql= mysql_query("UPDATE `box4` SET `title`='$title' WHERE `id` = '$title_id' ");
if(!mysql_error())
{
echo 1;
}
?>