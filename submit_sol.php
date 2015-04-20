<?php
include("/var/www/yts/db.php");
?>
<html>
<head>
	<title>Submit</title>
</head>
<body>
	<!-- Send Mail -->
	<?php
		$name =  $_POST['name'];
		$to = $_POST['email'];
		$sol = $_POST['solution'];
		$company = $_POST['company'];

		$sql = "INSERT INTO `yts`(`name`, `email`, `company`) VALUES ('A','d@gmail.com','abcd')";
		// die($sql);
		if($id = mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}

		if($sol == 'YTS Wallet Solution '){
			$link = "https://www.slideshare.net/secret/AE9ZWKGX5qH0Jy";
		}else if($sol == 'YTS Tez '){
			$link = "https://www.slideshare.net/secret/Jjv15OYp9XTrEn";
		}else if($sol == 'YTS eKash '){
			$link ="https://www.slideshare.net/secret/ssTFlP1DoV5ICv";
		}else if($sol == 'YTS Welfare'){
			$link = "NA";
		}else if($sol == 'YTS MoSa Pay '){
			$link = "https://www.slideshare.net/secret/LuFjTpm51szFxd";
		}else if($sol == 'YTS Loans '){
			$link = "NA";
		}else if($sol == 'YTS PhatSe '){
			$link = "https://www.slideshare.net/secret/1iHWomkQtcLSIk";
		}
		
		

		$subject = "Dhanax : Thanks for connecting";
		$txt = $sol;
		
		$from = "no-reply@yts.net.in";
		/* set sender of the mail*/
		$headers = "From: $from";

		mail($to,$subject,$txt,$headers);

	?>
	<!-- end of send mail -->
		<p>Hi <?php echo $name?>, the link to your solution is <?php if($link !="NA") echo $link; ?>.</p>


</body>
</html>