<html>
<head>
	<title>Message</title>
</head>
<body>
	<!-- Send Mail -->
	<?php
		$name =  $_POST['Name'];
		$email = $_POST['Email'];
		$msg = $_POST['Msg'];
		$type = $_POST['type'];
		
		/* check for the concerned receiver*/
		if($type == "Partner" ){
			$to = "partner@yts.net.in";
		}
		else{
			$to = "marketing@yts.net.in";
		}

		$subject = "Dhanax : Thanks for connecting";
		$txt = $msg;
		
		/* set sender of the mail*/
		$headers = "From: $email";

		mail($to,$subject,$txt,$headers);
	?>
	<!-- end of send mail -->

	<p>Hi <?php echo $name?>, your request has been submitted. We will get back to you shortly.</p>
</body>
</html>