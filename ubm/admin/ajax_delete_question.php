<?php require_once('includes/config.php');
$rel = $_POST['iid'];
//echo $rel;
$updateQuery = mysql_query("UPDATE faq SET `flag` = 0 WHERE `id` = '$rel'");

if($updateQuery)
{
	echo 1;
}
?>