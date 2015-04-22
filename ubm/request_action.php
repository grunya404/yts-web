<?php include "classes/class.phpmailer.php"; // include the class file name
include "classes/class.smtp.php"; ?>
<?php 

if(($_POST['name']=='') && ($_POST['email']=='') && $_POST['phone']=='' && $_POST['address']=='')
{
	echo "empty";
}
else
{

		
		
		
		$to      = 'marketing@yts.net.in';
	
	//$to      = 'abhishek@digitalvibe.in';

$subject = 'Contact details from the website - Union Bank Money';
 $message = "

<table width=\"100%\" border=\"1\" cellspacing=\"0\" cellpadding=\"5\" summary=\"Request Information\">

  <tr style=\"background:#e4e4e4;\">

  	<th style=\"text-align:center;\"colspan=\"2\"><h2>Contact details from the website</h2></th>

  </tr>
  
  
  <tr>

    <th style=\"text-align:left;padding-left:10px;\" width=\"25%\" scope=\"row\">Name</th>

    <td style=\"text-align:left;padding-left:10px;\">".htmlentities($_POST['name'],ENT_QUOTES)."</td>

  </tr> 

  <tr>

    <th style=\"text-align:left;padding-left:10px;\" width=\"25%\" scope=\"row\">Phone Number</th>

    <td style=\"text-align:left;padding-left:10px;\">".htmlentities($_POST['phone'],ENT_QUOTES)."</td>

  </tr> 
    <tr>

    <th style=\"text-align:left;padding-left:10px;\" width=\"25%\" scope=\"row\">Email</th>

    <td style=\"text-align:left;padding-left:10px;\">".htmlentities($_POST['email'],ENT_QUOTES)."</td>

  </tr> 
  
    <tr>

    <th style=\"text-align:left;padding-left:10px;\" width=\"25%\" scope=\"row\">Address</th>

    <td style=\"text-align:left;padding-left:10px;\">".htmlentities($_POST['address'],ENT_QUOTES)."</td>

  </tr>


    <tr>

    <th style=\"text-align:left;padding-left:10px;\" width=\"25%\" scope=\"row\">Feedback Type</th>

    <td style=\"text-align:left;padding-left:10px;\">".htmlentities($_POST['feedback_type'],ENT_QUOTES)."</td>

  </tr>
  <tr>

    <th style=\"text-align:left;padding-left:10px;\" width=\"25%\" scope=\"row\">Feedback</th>

    <td style=\"text-align:left;padding-left:10px;\">".htmlentities($_POST['feedback'],ENT_QUOTES)."</td>

  </tr>
  
</table>

";

//$headers = 'From: customercare@yts.net.in' . "\r\n" .
    //'X-Mailer: PHP/' . phpversion();
	//$headers .= "MIME-Version: 1.0\r\n";

//$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
	//$mail= mail($to,$subject,$message,$headers);	
		
		
		/* $Mail = new PHPMailer();
  $Mail->IsSMTP(); // Use SMTP
  $Mail->Host        = "205.251.129.30"; // Sets SMTP server
  $Mail->Port        = 25; // set the SMTP port
 $Mail->Priority    = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
 $Mail->SMTPDebug  = 1;
  $Mail->CharSet     = 'UTF-8';
  $Mail->Encoding    = '8bit';
  $Mail->Subject     = $subject;
  $Mail->ContentType = 'text/html; charset=utf-8\r\n';
  $Mail->From        = 'customercare@yts.net.in';
  $Mail->FromName    = 'Union Bank Money';
 $Mail->AddAddress( $to ); // To:
  $Mail->isHTML( TRUE );
  $Mail->Body    = $message;
  $Mail->AltBody = $message;
  $Mail->Send();
  $Mail->SmtpClose();
  
  if(!$Mail ->Send){
   echo $Mail ->ErrorInfo;     //No error is printed here
   echo "Fail";                  //Fail prints
}else{
    echo "Sent";
}
*/

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From:noreply@yts.net.in";
		
	$mail= mail($to,$subject,$message,$headers);	
//////////////////////////////////////////

		
			$email=$_POST['email'];
			$name=$_POST['name'];
		
		$subject1="Union Bank Money - Contact Details Received";
$message1 = '<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td align="center" style="font-family: "Arial";color:#707070;font-size: 12px;">
                    <table style="width:650px;border:1px solid #081d5f;padding-bottom: 30px;background-color: #F7F5EE;" cellspacing="0" cellpadding="0">
                       <tr>
                            <td style="background-color: #fff;"><a href="http://www.yts.net.in/ubm/"><img src="http://www.yts.net.in/ubm/images/logo_02.jpg" style="border:none;width:200px;"/></a></td>
                        </tr>
						
                        <tr>
                            <td align="center">
                               
                                            <table style="width:570px;border:0px solid #081d5f;background-color: #fff;
padding: 10px;margin-top: 30px;" cellspacing="0" cellpadding="0">
                       
					
								<tr>
                                   <td>Dear '.$name.',<br /> <br />
								   </td>

								<tr>
                                   <td>Thanks for contacting with us<br />
								   </td>
                               </tr>

									<tr>
                                   <td><p>We will contact you within 7 days.<br/>
								   You can also connect with us on our customer care number 186030004500 from 9.00 AM to 8.00 PM, Mon to Sat.<br/> 
								   Thanks for connecting with us. This is a System Generated Mail. Do not reply.</p>
								   <p>Thanks & Regards,<br/>
								   Team YTS<br/>
								   </p><br/>
								   </td>
                               </tr>							   


                        </tr>
                 
                    </table>
                                
                            </td>
                        </tr>
                  
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>';

$subject1 = 'Thanks for connecting with us. This is a System Generated Mail. Do not reply';
$result1 = mail($email,$subject1,$message1,$headers);


	if($mail)
	{
		echo 1;// submitted 
		}

	else{
		echo 0;
	}

//$mail= mail($email,$subject1,$message1,$headers);


//////////////////////////////////////////


	}

	echo 1;


?>

