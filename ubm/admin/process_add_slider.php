<?php
include('includes/config.php');

$slider_images = $_POST['sub_image1'];
$title = $_POST['title'];
$point1 = addslashes($_POST['point1']);
$point2 = addslashes($_POST['point2']);
$point3 = addslashes($_POST['point3']);
$point4 = addslashes($_POST['point4']);

$sql= mysql_query("INSERT INTO `index_slider`( `index_slider_flag`, `slider_images`, `index_slider_title`, `index_slider_point1`, `index_slider_point2`, `index_slider_point3`, `index_slider_point4`) VALUES ('1','$slider_images ','$title','$point1','$point2','$point3','$point4')");

//echo mysql_error();
if(!mysql_error())
{
echo 1;
}
?>