<?php
include('includes/config.php');
$title_id= $_POST['title_id'];
$title= $_POST['title'];


$sql= mysql_query("UPDATE `index_feature_titles` SET `title`='$title' WHERE `id` = '$title_id' ");
if(!mysql_error())
{
echo 1;
}
?>