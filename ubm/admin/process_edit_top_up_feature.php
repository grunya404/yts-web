<?php
require_once('includes/config.php');

$ids = $_POST['ids'];
$feature = addslashes($_POST['feature']);
$desc = addslashes($_POST['desc']);
$sms = htmlentities($_POST['sms'],ENT_QUOTES);
$example = addslashes($_POST['example']);


if(isset($_POST['ids']) && !empty($_POST['ids']))
{
$update = mysql_query("UPDATE `top_up_feature` SET `feature`='$feature',`desc`='$desc',`sms`='$sms',`example`='$example' WHERE `id` = '$ids' ");
}

if(!mysql_error())
{
echo 1;
}
?>