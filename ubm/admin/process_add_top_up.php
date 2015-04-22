<?php
require_once('includes/config.php');

$operator = addslashes($_POST['operator']);
$code = addslashes($_POST['code']);
$column = addslashes($_POST['column']);


if(isset($_POST['operator']) && !empty($_POST['operator']))
{
$insert = mysql_query("INSERT INTO `top_up`(`flag`, `operator`, `code`, `column`) VALUES ('1','$operator','$code','$column')");
}

if(!mysql_error())
{
echo 1;
}
?>