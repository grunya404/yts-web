<?php
require_once('includes/config.php');

$index_about_body = addslashes($_POST['index_about_body']);
$index_about_title = addslashes($_POST['index_about_title']);
$index_footer_title = addslashes($_POST['index_footer_title']);
$index_footer_body1 = addslashes($_POST['index_footer_body1']);
$index_footer_body2 = addslashes($_POST['index_footer_body2']);

if(isset($_POST['index_about_body']) && !empty($_POST['index_about_body']))
{
$updatequery = mysql_query("UPDATE index_admin SET `index_about_body` = '$index_about_body' ");
}

if(isset($_POST['index_about_title']) && !empty($_POST['index_about_title']))
{
$updatequery = mysql_query("UPDATE index_admin SET `index_about_title` = '$index_about_title' ");
}

if(isset($_POST['index_footer_title']) && !empty($_POST['index_footer_title']))
{
$updatequery = mysql_query("UPDATE index_admin SET `index_footer_title` = '$index_footer_title' ");
}

if(isset($_POST['index_footer_body1']) && !empty($_POST['index_footer_body1']))
{
$updatequery = mysql_query("UPDATE index_admin SET `index_footer_body1` = '$index_footer_body1' ");
}

if(isset($_POST['index_footer_body2']) && !empty($_POST['index_footer_body2']))
{
$updatequery = mysql_query("UPDATE index_admin SET `index_footer_body2` = '$index_footer_body2' ");
}


if(!mysql_error())
{
echo 1;
}

?>