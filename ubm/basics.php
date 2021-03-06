<?php 
include('includes/config.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Union Bank Money - Sms Syntax - Money Transfer</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href="css/ubm-style.css" rel="stylesheet" media="screen"/>
 <link rel="stylesheet" type="text/css" href="css/acc.css" />

<!-- jQuery library (served from Google) -->
<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.accordion.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<noscript>
			<style>
				.st-accordion ul li{
					height:auto;
				}
				.st-accordion ul li > a span{
					visibility:hidden;
				}
			</style>
		</noscript>



<script type="text/javascript">

	
	$(document).ready(function(){
  $('.mob-menu a').click(function(){
$('.nav-box').slideToggle('fast');
});

	$('.nav-box ul li').hover(function(){
$(this).find('.nav-blank').stop().fadeIn('fast')	
},function(){
	
$('.nav-blank').fadeOut('fast')		
	});	


	
	});
	
	
	
</script>

</head>

<body class="grey-color">
<div class="mob-menu"><a href="javascript:void(0)" ><img src="images/menu.jpg" /></a></div>
<!--main conatiner start-->
<div class="main-container">
<!--inner wrapper start-->
<div class="header-fixed">
<div class="inner-wrapper">
<!--header main start-->
<div class="header-main">
<!--logo box start-->
<div class="logo-box">
<a href="index.php">
<img src="images/logo_02.jpg"/>
</a>
</div>
<!--logo box end-->

<!--nav start-->
<?php include('includes/nav_header.php') ; ?>
<!--nav end-->

<div class="clear"></div>
</div>
<!--header main end-->
</div>
</div>
<!--inner wrapper end-->

<!--mid box start-->

<div class="mid-box">
<div class="clear"></div>
<div class="bread-crumb-con2">
<a href="index.php"><img src="images/home_icon2.jpg" width="14" height="14" /></a> <a href="money-transfer.php">Support</a> &nbsp;Money Transfer
</div>
<div class="clear"></div>
<div class="inner-title-con">
<div class="icon"><img src="images/contact_icon.jpg" /></div>
<div class="first-cont2"><h2 class="title-spasing">Sms Syntax</h2></div>
</div>
<div class="clear"></div>
<div class="middle-con">

<!--first half box-->
<div class="inner-first-half">
<div class="first-cont2">
<div class="left-nav-con">
<ul>
<li class="active"><a href="basics.php">Basics</a></li>
<li><a href="money-transfer.php">Money Transfer</a></li>
<li><a href="mobile-top-up.php">Mobile Top-Up</a></li>
<li><a href="dth-recharge.php">DTH Recharge</a></li>
<li><a href="bill-payment.php">Bill Payment</a></li>
<li><a href="other-services.php">Other Services</a></li>
</ul>
</div>

</div>

<div class="clear"></div>
</div>

<!-- second -->
<div class="inner-second-half">
<div class="second-cont-spacing">

<div class="scroll-con">

<div id="st-accordion" class="st-accordion">
                    
                    <ul>
                    
                    <li>
                     <a href="#">Wallet Activation<span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
                       
            <div class="contact-detail">
                     <p>
                     	Wallet is auto-activated once an Agent registers a new customer in the system<br><br>
Customer will receive Two SMSs:<br>
•	1st SMS - “Dear < First Name > , Welcome to YTS Union Bank Money! Your mobile account is active. Balance is Rs. < XXX >. First Time pin is < YYYY >. You may transact now”<br>
•	2nd SMS - “Your ATM card no. is XXXX < Last 4 digits of ATM card >. Transact for Rs.10 or above and get immediate cash back of Rs.25. Call us on 180030004300”<br><br>

ATM Card Activation – It will be auto activated along with the wallet<br><br>
Please Note - Customer has to change its “First Time PIN” in the given scenarios<br><br>
Scenario 1: Transaction amount is Rs. 500 or Above<br>
•	Customer would receive an IVR prompt to change its PIN<br>
•	Customer to enter its “First Time PIN” received in ‘1st SMS’ and then sets its new PIN and finish the transaction.<br>
•	Thereafter, the new PIN will be used for all transactions and ATM cash withdrawals<br><br>

Scenario 2: Transaction amount is below Rs. 500<br><br>

If PIN is not changed during First transaction and for the Second transaction amount was below 500, customer has to change its PIN in Third transaction<br>
•	During 3rd transaction:  Customer would receive an IVR prompt to change its PIN<br>
•	Customer to enter its “First Time PIN” received in ‘1st SMS’ and then sets its new PIN and finish the transaction<br>
•	Thereafter, the new PIN will be used for all transactions and ATM cash withdrawals<br>


                     </p>
                      <div class="table-notes"><strong>Note:</strong> Union Bank of India takes minimum 5 working days to verify and activate a
UBM wallet</div>
                      
					  
					
                      </div>  
                               
                       </div>
                        </li>
                        
                        
                        
                        <li>
                     <a href="#">Wallet Cash-In<span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
                       
                       <div class="contact-detail">
                       <p><strong>Approach nearby authorized UBM Agent and Cash-in your wallet</strong></p>

<p style="padding-left:20%;">OR</p>
<?php
					   $sqlCash = mysql_query("SELECT * FROM `basic_points` WHERE `title_id` = 2 AND `flag` = 1 ");
					   while($resultCash = mysql_fetch_array($sqlCash))
					   {
					   $point_id = $resultCash['id'] ;
					   ?>
                       <p><strong><?php echo stripslashes(html_entity_decode( $resultCash['point'],ENT_QUOTES)); ?></strong> </p>
					   <?php
					   $sqlCash1 = mysql_query(" SELECT * FROM `basic_descriptions` WHERE `point_id` = '$point_id' AND `flag` = 1 ");
					   while($resultCash1 = mysql_fetch_array($sqlCash1))
					   {
					   ?>
                      
                      <p class="listing"><?php echo stripslashes(html_entity_decode( $resultCash1['desc'],ENT_QUOTES)); ?></p>


  <?php
					  } //desc
					  }// point
					  ?>


<div class="table-chart4">


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Feature </td>
    <td>Short description </td>
    <td>SMS syntax</td>
    <td>Example</td>
  </tr>
  
  <?php
  $sql_table = mysql_query(" SELECT * FROM `basic_cash` WHERE `flag` = 1 " );
  while($result_table = mysql_fetch_array($sql_table))
  {
  ?>
  <tr>
    <td><?php echo stripslashes(html_entity_decode( $result_table['feature'],ENT_QUOTES)); ?></td>
    <td><?php echo stripslashes(html_entity_decode( $result_table['desc'],ENT_QUOTES)); ?></td>
    <td><?php echo stripslashes($result_table['sms']); ?></td>
    <td><?php echo stripslashes(html_entity_decode( $result_table['example'],ENT_QUOTES)); ?></td>
  </tr>
  
  <?php
  }
  ?>

</table>


</div>  
<p><strong>You will receive a confirmation SMS with cash-in details of the amount.</strong></p>
</div> 



                               
                       </div>
                        </li>
                        
                        
                        
                        <li>
                     <a href="#">Check Balance <span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
                      
                          <div class="contact-detail">
                       

					    <?php
					   $sqlBalance = mysql_query("SELECT * FROM `basic_points` WHERE `title_id` = 3 AND `flag` = 1 ");
					   while($resultBalance = mysql_fetch_array($sqlBalance))
					   {
					   $point_id = $resultBalance['id'] ;
					   ?>
                       <p><strong><?php echo stripslashes(html_entity_decode( $resultBalance['point'],ENT_QUOTES)); ?></strong> </p>
					   <?php
					   $sqlBalance1 = mysql_query(" SELECT * FROM `basic_descriptions` WHERE `point_id` = '$point_id' AND `flag` = 1 ");
					   while($resultBalance1 = mysql_fetch_array($sqlBalance1))
					   {
					   ?>
					   
					   <p class="listing"><?php echo stripslashes(html_entity_decode( $resultBalance1['desc'],ENT_QUOTES)); ?></p>
           
					   
					     <?php
					  } //desc
					  }// point
					  ?>
					   
                        </div>
                      
                       
                         
                               
                       </div>
                        </li>
                        
                        
                        <li>
                     <a href="#">Withdraw Cash<span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
                       
                         <div class="contact-detail">
                       

					    <?php
					   $sqlBalance = mysql_query("SELECT * FROM `basic_points` WHERE `title_id` = 4 AND `flag` = 1 ");
					   while($resultBalance = mysql_fetch_array($sqlBalance))
					   {
					   $point_id = $resultBalance['id'] ;
					   ?>
                       <p><strong><?php echo stripslashes(html_entity_decode( $resultBalance['point'],ENT_QUOTES)); ?></strong> </p>
					   <?php
					   $sqlBalance1 = mysql_query(" SELECT * FROM `basic_descriptions` WHERE `point_id` = '$point_id' AND `flag` = 1 ");
					   while($resultBalance1 = mysql_fetch_array($sqlBalance1))
					   {
					   ?>
					   
					   <p class="listing"><?php echo stripslashes(html_entity_decode( $resultBalance1['desc'],ENT_QUOTES)); ?></p>
           
					   
					     <?php
					  } //desc
					  }// point
					  ?>
					   <div class="table-notes">* ATMs of all banks connected with National Financial Switch (NFS)</div>
                        </div>
   
                       </div>
                        </li>
                        
                        
                        <li>
                     <a href="#">Manage mPIN<span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
                       
             <div class="contact-detail">
                        
                      <p>In case you forget the mPIN please follow these steps.<br>
Call Customer Care 1800 3000 4300   and raise your request for setting the mPIN<br>
After the account verification, Customer Care team would reset the new mPIN<br>
Receive the SMS with 4 digit temporary PIN (Valid for 24 hours)<br>
Type 'RESET' and send the SMS on 96860 555 55<br>
Receive an IVR call and select option to reset the mPIN<br>
Enter temporary pin (Received through SMS), create and then confirm the new mPIN</p>
                       </div>  
                       </div>
                        </li>
                        
                        
                    
                    </ul>
                    
                </div>

</div>            

</div>
</div>
<!-- end -->

</div>
<div class="clear"></div>

<!--first half box end-->
<!--second half start-->
<!---->
<!--second half end-->
<div class="clear"></div>

</div>

<!--mid box end-->
<div class="clear"></div>
<div class="footer-main">
<?php include('includes/footer.php'); ?>
<div class="clear"></div>
</div>

</div>
<!--main container end-->

  <script type="text/javascript">
            $(function() {
			
				$('#st-accordion').accordion({
					oneOpenedItem	: true
				});
				
            });
        </script>

</body>
</html>
