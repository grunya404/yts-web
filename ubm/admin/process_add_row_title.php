<?php
require_once('includes/config.php');

$row_title = addslashes($_POST['row_title']);
$title_id = addslashes($_POST['title_id']);

if(isset($_POST['row_title']) && !empty($_POST['row_title']))
{
$insert = mysql_query("INSERT INTO `limit_row`(`row_title`, `flag`, `title_id`) VALUES ('$row_title' , '1', '$title_id') ");
$row_id = mysql_insert_id();

$insertquery1 = mysql_query("INSERT INTO `limit_value`(`value`, `flag`, `row_id`, `col2_id`, `title_id`) VALUES ('NA', '1', '$row_id','2', '$title_id' ) ");

$insertquery2 = mysql_query("INSERT INTO `limit_value`(`value`, `flag`, `row_id`, `col2_id`, `title_id`) VALUES ('NA', '1', '$row_id','3', '$title_id' ) ");

$insertquery3 = mysql_query("INSERT INTO `limit_value`(`value`, `flag`, `row_id`, `col2_id`, `title_id`) VALUES ('NA', '1', '$row_id','4', '$title_id' ) ");

$insertquery4 = mysql_query("INSERT INTO `limit_value`(`value`, `flag`, `row_id`, `col2_id`, `title_id`) VALUES ('NA', '1', '$row_id','5', '$title_id' ) ");

$insertquery5 = mysql_query("INSERT INTO `limit_value`(`value`, `flag`, `row_id`, `col2_id`, `title_id`) VALUES ('NA', '1', '$row_id','6', '$title_id' ) ");

$insertquery6 = mysql_query("INSERT INTO `limit_value`(`value`, `flag`, `row_id`, `col2_id`, `title_id`) VALUES ('NA', '1', '$row_id','7', '$title_id' ) ");

}
if(!mysql_error())
{
echo 1;
}
?>