<?php
include('includes/config.php');
$slider_id= $_POST['slider_id'];
$title= $_POST['title'];
$point1= addslashes($_POST['point1']);
$point2= addslashes($_POST['point2']);
$point3= addslashes($_POST['point3']);
$point4= addslashes($_POST['point4']);
$slider_images = $_POST['slider_image'];

$sql= mysql_query("UPDATE `index_slider` SET `slider_images`='$slider_images',`index_slider_title`='$title',`index_slider_point1`='$point1',`index_slider_point2`='$point2',`index_slider_point3`='$point3',`index_slider_point4`='$point4' WHERE `index_slider_id` = '$slider_id' ");
if(!mysql_error())
{
echo 1;
}
?>