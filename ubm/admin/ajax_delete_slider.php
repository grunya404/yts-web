<?php require_once('includes/config.php');
$rel = $_POST['iid'];
//echo $rel;
$updateQuery = mysql_query("UPDATE index_slider SET `index_slider_flag` = 0 WHERE `index_slider_id` = '$rel'");

if($updateQuery)
{
	echo 1;
}
?>