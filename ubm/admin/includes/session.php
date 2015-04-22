<?php session_start();
if(($_SESSION['u_name']== ''))
{
$pagename = basename($_SERVER[PHP_SELF]);
echo "<div align=\"center\" style=\"margin:0 auto; padding-top:200px; font-family: arial;\">";
echo "You are not logged in. Redirecting to login page...<br>";
echo "<img src=\"../images/loading.gif\" />";
echo "<meta http-equiv=\"refresh\" content=\"2; URL=index_admin_login.php\">";
echo "</div>";
die();
}  ?>
