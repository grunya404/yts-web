<?php
require_once('includes/config.php');

$ids = $_POST['ids'];
$operator = htmlentities($_POST['operator'],ENT_QUOTES);
$code = htmlentities($_POST['code'],ENT_QUOTES);
$account = addslashes($_POST['account']);



if(isset($_POST['ids']) && !empty($_POST['ids']))
{
$update = mysql_query("UPDATE `recharge` SET `operator`= '$operator',`code`= '$code',`account_id`= '$account'  WHERE `id` = '$ids' ");
}

if(!mysql_error())
{
echo 1;
}
?>