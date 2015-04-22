<?php
require_once('includes/config.php');

$feature = addslashes($_POST['feature']);
$desc = htmlentities($_POST['desc'],ENT_QUOTES);
$sms = htmlentities($_POST['sms'],ENT_QUOTES);
$example = addslashes($_POST['example']);


if(isset($_POST['feature']) && !empty($_POST['feature']))
{
$insert = mysql_query("INSERT INTO `box4_feature`( `flag`, `feature`, `desc`, `sms`, `example`) VALUES ('1','$feature','$desc','$sms','$example')");
}

if(!mysql_error())
{
echo 1;
}
?>