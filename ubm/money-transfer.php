<?php 
include('includes/config.php');

$sqlBox2 = mysql_query(" SELECT * FROM `box2` WHERE `flag` = 1 ");
$sqlBox3 = mysql_query(" SELECT * FROM `box3` WHERE `flag` = 1 ");
$sqlBox4 = mysql_query(" SELECT * FROM `box4` WHERE `flag` = 1 ");

$sqlBox3_feature = mysql_query(" SELECT * FROM `box3_feature` WHERE `flag` = 1 ");
$sqlBox4_feature = mysql_query(" SELECT * FROM `box4_feature` WHERE `flag` = 1 ");

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
<li><a href="basics.php">Basics</a></li>
<li class="active"><a href="money-transfer.php">Money Transfer</a></li>
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
                     <a href="#">UBM to UBM Wallet<span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
                       
                       <div class="contact-detail">
                       
                       <p><strong>Transfer money to another UBM customer. All you require is recipient's
mobile number. It's the cheapest option to transfer money.</strong>
</p>
                       

<p class="cal">Type '<span>SEND</span> &lt;Recipient's mobile number&gt;&lt;Amount&gt;&lt;Optional message&gt;' and send to 9686055555</p>

<p class="tele">Answer IVR call*</p>

<p class="trans">Money sent!</p>
</div>  
                               
                       </div>
                        </li>
                        
                        
                        
                        <li>
                     <a href="#">UBM to Any Mobile Number<span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
                       
                       <div class="contact-detail">
                       
                       <p><strong>Send Instant cash without a need of bank account or a digital wallet. All
you require is recipient's mobile number. Recipient can collect cash
from UBM authorized agent by producing:
</strong></p>
					   

<?php
while($resultBox2 = mysql_fetch_array($sqlBox2))
{
?>
<p class="listing"><?php echo stripslashes(html_entity_decode( $resultBox2['title'],ENT_QUOTES)); ?></p>
<?php
}
?>

<p class="cal">Type '<span>SEND</span> &lt;Recipient's mobile number&gt;&lt;Amount&gt;&lt;Optional message&gt;' and send to 9686055555</p>

<p class="tele">Answer IVR call*</p>

<p class="email">Receive OTP SMS & share it with recipient</p>

<p class="trans">Money sent!</p>

<p>To Cancel Viral Send: Type 'SENDCANCEL &lt;Trans.id&gt;' and send to 96860 5555<br />
*Customer to receive IVR Call if amount is more than Rs 500
</p>

</div>  
                               
                       </div>
                        </li>
                        
                        
                        
                        <li>
                     <a href="#">UBM to any bank account, instantly, 24X7 <span class="st-arrow">Open or Close</span></a>
         <div class="st-content">
                      
                       <div class="contact-detail">
                        
                        <p><strong>Transfer money instantly to any bank account 24x7. It's an emerging way of transferring money. All you require is recipients'</strong></p>

                       
<?php
while($resultBox3 = mysql_fetch_array($sqlBox3))
{
?>
<p class="listing"><?php echo stripslashes(html_entity_decode( $resultBox3['title'],ENT_QUOTES)); ?></p>
<?php
}
?>
                        
                        </div>
                      
                       
                       <div class="table-chart1">

<table width="100%" height= "50%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Feature </td>
    <td>Short description </td>
    <td>SMS syntax</td>
    <td>Example</td>
  </tr>
  
  <?php
while($resultBox3_feature = mysql_fetch_array($sqlBox3_feature))
{
?> 
  <tr>
    <td><?php echo stripslashes(html_entity_decode( $resultBox3_feature['feature'],ENT_QUOTES)); ?></td>
    <td><?php echo stripslashes(html_entity_decode( $resultBox3_feature['desc'],ENT_QUOTES)); ?></td>
    <td><?php echo stripslashes($resultBox3_feature['sms']); ?></td>
    <td><?php echo stripslashes(html_entity_decode( $resultBox3_feature['example'],ENT_QUOTES)); ?></td>
  </tr>
  <?php
  }
  ?>
  
</table>


</div>  
                               
                       </div>
                        </li>
                        
                        
                        <li>
                     <a href="#">UBM to any Bank Account<span class="st-arrow">Open or Close</span></a>
     <div class="st-content">
                       
                        <div class="contact-detail">
                        
                        <p><strong>Transfer money to any bank account in a day. All you require is recipients'</strong></p>

                       
 <?php
while($resultBox4 = mysql_fetch_array($sqlBox4))
{
?>
<p class="listing"><?php echo stripslashes(html_entity_decode( $resultBox4['title'],ENT_QUOTES)); ?></p>
<?php
}
?>

                        
                        </div>
                       
                       
                       <div class="table-chart4">

<table border="0" cellspacing="0" cellpadding="0"  width="100%">
  <tr>
    <td >Features </td>
    <td >Short Description </td>
    <td >SMS Syntax </td>
    <td >Example </td>
  </tr>
  <?php
while($result4_feature = mysql_fetch_array($sqlBox4_feature))
{
?> 
  <tr>
    <td width="18%"><?php echo stripslashes(html_entity_decode( $result4_feature['feature'],ENT_QUOTES)); ?></td>
    <td width="30%"><?php echo stripslashes(html_entity_decode( $result4_feature['desc'],ENT_QUOTES)); ?></td>
    <td width="30%"><?php echo stripslashes($result4_feature['sms']); ?></td>
    <td width="22%"><?php echo stripslashes(html_entity_decode( $result4_feature['example'],ENT_QUOTES)); ?></td>
  </tr>
  <?php
  }
  ?>
</table>

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
