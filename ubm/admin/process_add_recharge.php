<?php
require_once('includes/config.php');

$operator = addslashes($_POST['operator']);
$code = addslashes($_POST['code']);
$account = addslashes($_POST['account']);


if(isset($_POST['operator']) && !empty($_POST['operator']))
{
$insert = mysql_query("INSERT INTO `recharge`(`flag`, `operator`, `code`, `account_id`) VALUES ('1','$operator','$code','$account')");
}

if(!mysql_error())
{
echo 1;
}
?>