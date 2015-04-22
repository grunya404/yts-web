<?php session_start();

require_once('includes/config.php');

//get the posted values
$username=htmlspecialchars($_POST['username'],ENT_QUOTES);
$pass=md5($_POST['password']);

//echo $pass;
//now validating the username and password
$sql="SELECT username, password FROM admin_login WHERE username='".$username."'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

//echo mysql_error();
//if username exists
if(mysql_num_rows($result)>0)
{
	//compare the password
	if(strcmp($row['password'],$pass)==0)
	{
		echo "yes";
		//now set the session from here if needed
	
		$_SESSION['u_name']=$username; 
	}
	else
		echo "no"; 
}
else
	echo "no"; //Invalid Login


?>