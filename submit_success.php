<html>
<head>
	<title>Application Submit Success</title>
</head>
<body>
	<!-- Send Mail -->
	<?php
		$name =  $_POST['Name'];
		$email = $_POST['Email'];
		$contact = $_POST['Contact'];
		$ref = $_POST['Ref'];
		$loc = $_POST['Loc'];

		/* upload the file on server*/
		$path = '/uploads/'; 
    	$tempFile = $_FILES['file']['tmp_name'];   
	    $targetPath = dirname( __FILE__ ) .'/' . $path . '/'; 

	    $targetFile =  $targetPath. $_FILES['file']['name'];  
	    $storePath = $path.$_FILES['file']['name'];
	    $val = $_FILES['file']['name'];

	    move_uploaded_file($tempFile,$targetFile); 
	    chmod($targetFile, 0777);
		/* end of upload */

		$to = "careers@yts.net.in ";
		$subject = "Application Submitted";
		$txt = "Thanks for applying at YTS. We will get back to you shortly";
		
		/* set sender of the mail*/
		$headers = "From: $email";

		mail($to,$subject,$txt,$headers);
	?>
	<!-- end of send mail -->

	<p>Hi <?php echo $name?>, your application has been submitted. We will get back to you shortly.</p>
</body>
</html>