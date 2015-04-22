<?php
require_once('includes/config.php');

$title_id = addslashes($_POST['title_id']);
$row_id = addslashes($_POST['row_id']);
$lite_min = addslashes($_POST['lite_min']);
$lite_max = addslashes($_POST['lite_max']);
$lite_daily = addslashes($_POST['lite_daily']);
$smart_min = addslashes($_POST['smart_min']);
$smart_max = addslashes($_POST['smart_max']);
$smart_daily = addslashes($_POST['smart_daily']);


if(isset($_POST['row_id']) && !empty($_POST['row_id']))
{
$insertquery1 = mysql_query("UPDATE `limit_value` SET `id`=[value-1],`created`=[value-2],`value`=[value-3],`flag`=[value-4],`row_id`=[value-5],`col2_id`=[value-6],`title_id`=[value-7] WHERE 1 ");

$insertquery2 = mysql_query("UPDATE `limit_value` SET `id`=[value-1],`created`=[value-2],`value`=[value-3],`flag`=[value-4],`row_id`=[value-5],`col2_id`=[value-6],`title_id`=[value-7] WHERE 1 ");

$insertquery3 = mysql_query("UPDATE `limit_value` SET `id`=[value-1],`created`=[value-2],`value`=[value-3],`flag`=[value-4],`row_id`=[value-5],`col2_id`=[value-6],`title_id`=[value-7] WHERE 1 ");

$insertquery4 = mysql_query("UPDATE `limit_value` SET `id`=[value-1],`created`=[value-2],`value`=[value-3],`flag`=[value-4],`row_id`=[value-5],`col2_id`=[value-6],`title_id`=[value-7] WHERE 1 ");

$insertquery5 = mysql_query("UPDATE `limit_value` SET `id`=[value-1],`created`=[value-2],`value`=[value-3],`flag`=[value-4],`row_id`=[value-5],`col2_id`=[value-6],`title_id`=[value-7] WHERE 1");

$insertquery6 = mysql_query("UPDATE `limit_value` SET `id`=[value-1],`created`=[value-2],`value`=[value-3],`flag`=[value-4],`row_id`=[value-5],`col2_id`=[value-6],`title_id`=[value-7] WHERE 1 ");

}


if(!mysql_error())
{
echo 1;
}

?>