<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin Login</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<script src="js/ajquery.js" type="text/javascript" language="javascript"></script>
<script language="javascript">


$(document).ready(function()
{
	$("#login_form").submit(function()
	{
		//alert('in');
		//remove all the class add the messagebox classes and start fading
		$("#msgbox").removeClass().addClass('messagebox').text('Validating....').fadeIn(1000);
		//check the username exists or not from ajax
		$.post("alogin.php",{ username:$('#username').val(),password:$('#password').val(),rand:Math.random() } ,function(data)
        {
		//alert(data);
		  if(data=='yes') //if correct login detail
		  {
		  	$("#msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Logging in.....').addClass('messageboxok').fadeTo(900,1,
              function()
			  { 
			  	 //redirect to secure page
				 document.location='asecure.php';
			  });
			  
			});
		  }
		  else 
		  {
			//alert('else');
		  	$("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Your login details are Invalid').addClass('messageboxerror').fadeTo(900,1);
				
			});	
			clear_form();
          }
				
        });
 		return false; //not to post the  form physically
		function clear_form()
	 {
	 	$("#username").val('');
		$("#password").val('');
		
	 }
	});
	//now call the ajax also focus move from 
	$("#password").blur(function()
	{
		$("#login_form").trigger('submit');
	});
});
</script>
<style type="text/css">
body {
font-family: Arial, Helvetica, sans-serif;
font-size:13px;
background:#999;

}
.top {
margin-bottom: 15px;
}
.buttondiv {
margin-top: 10px;
}
.messagebox{
	position:absolute;
	width:100px;
	margin-left:0px;
	margin-top: 3px;
	border:1px solid #c93;
	background:#ffc;
	padding:5px;
	font-weight:bold;
	color:#008000;
}
.messageboxok{
	position:absolute;
	width:auto;
	margin-left:0px;
	margin-top: 3px;
	border:1px solid #349534;
	background:#C9FFCA;
	padding:5px;
	font-weight:bold;
	color:#008000;
	
}
.messageboxerror{
	position:absolute;
	width:auto;
	margin-left:0px;
	margin-top: 3px;
	border:1px solid #CC0000;
	background:#F7CBCA;
	padding:5px;
	font-weight:bold;
	color:#CC0000;
}

</style>
</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<a href="index.html"><img src="images/logo_02.jpg" width="100" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
	<form method="post" action="" id="login_form">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Username</th>
			<td><input type="text"  id="username" name="username" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input name="password" type="password" id="password" value="************"  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
	
		<tr>
			<th></th>
			<td><input type="submit" class="submit-login" id="submit" />
			 <span id="msgbox" style="display:none"></span></td>
		</tr>
		</table>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	<a href="" class="forgot-pwd">Forgot Password?</a>
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		<div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Email address:</th>
			<td><input type="text" value=""   class="login-inp" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="button" class="submit-login"  /></td>
		</tr>
		</table>
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Back to login</a>
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>