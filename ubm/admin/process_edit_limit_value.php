<?php
require_once('includes/config.php');

$lite_min_id = $_POST['lite_min_id'];
$lite_min = addslashes($_POST['lite_min']);

$lite_max_id = $_POST['lite_max_id'];
$lite_max = addslashes($_POST['lite_max']);

$lite_daily_id = $_POST['lite_daily_id'];
$lite_daily = addslashes($_POST['lite_daily']);

$smart_min_id = $_POST['smart_min_id'];
$smart_min = addslashes($_POST['smart_min']);

$smart_max_id = $_POST['smart_max_id'];
$smart_max = addslashes($_POST['smart_max']);

$smart_daily_id = $_POST['smart_daily_id'];
$smart_daily = addslashes($_POST['smart_daily']);

if(isset($_POST['lite_min']) && !empty($_POST['lite_min']))
{
$update = mysql_query("UPDATE `limit_value` SET `value`='$lite_min' WHERE `id` = '$lite_min_id' ");
}

if(isset($_POST['lite_max']) && !empty($_POST['lite_max']))
{
$update = mysql_query("UPDATE `limit_value` SET `value`='$lite_max' WHERE `id` = '$lite_max_id' ");
}

if(isset($_POST['lite_daily']) && !empty($_POST['lite_daily']))
{
$update = mysql_query("UPDATE `limit_value` SET `value`='$lite_daily' WHERE `id` = '$lite_daily_id' ");
}

if(isset($_POST['smart_min']) && !empty($_POST['smart_min']))
{
$update = mysql_query("UPDATE `limit_value` SET `value`='$smart_min' WHERE `id` = '$smart_min_id' ");
}

if(isset($_POST['smart_max']) && !empty($_POST['smart_max']))
{
$update = mysql_query("UPDATE `limit_value` SET `value`='$smart_max' WHERE `id` = '$smart_max_id' ");
}

if(isset($_POST['smart_daily']) && !empty($_POST['smart_daily']))
{
$update = mysql_query("UPDATE `limit_value` SET `value`='$smart_daily' WHERE `id` = '$smart_daily_id' ");
}

echo mysql_error();
if(!mysql_error())
{
echo 1;
}
?>