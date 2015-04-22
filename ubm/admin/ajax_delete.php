<?php require_once('includes/config.php');
$rel = $_POST['iid'];
//echo $rel;
$updateQuery = mysql_query("UPDATE `basic_points` SET `flag`= 0 WHERE `id` = '$rel'");
//echo mysql_error();
if($updateQuery)
{
	echo 1;
}
?>