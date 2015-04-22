<?php require_once('includes/config.php');
$rel = $_POST['iid'];
//echo $rel;
$updateQuery = mysql_query("UPDATE index_feature_points SET `flag` = 0 WHERE `id` = '$rel'");
$updateQuery1 = mysql_query("UPDATE index_feature_descriptions SET `flag` = 0 WHERE `point_id` = '$rel'");

if($updateQuery)
{
	echo 1;
}
?>