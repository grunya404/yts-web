<?php
require_once('includes/config.php');

$ids = $_POST['ids'];
$operator = htmlentities($_POST['operator'],ENT_QUOTES);
$code = htmlentities($_POST['code'],ENT_QUOTES);
$columns = addslashes($_POST['columns']);



if(isset($_POST['ids']) && !empty($_POST['ids']))
{
$update = mysql_query("UPDATE `top_up` SET `operator`= '$operator',`code`= '$code',`column`= '$columns'  WHERE `id` = '$ids' ");
}

if(!mysql_error())
{
echo 1;
}
?>