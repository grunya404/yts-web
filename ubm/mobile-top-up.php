<?php 
include('includes/config.php');

$sqlLeft = mysql_query(" SELECT * FROM `top_up` WHERE `flag` = 1 AND `column` = 1 ");
$sqlRight = mysql_query(" SELECT * FROM `top_up` WHERE `flag` = 1 AND `column` = 2 ");

$sql = mysql_query(" SELECT * FROM `top_up_feature` WHERE `flag` = 1 ");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Union Bank Money - Sms Syntax - Mobile Top-Up</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href="css/ubm-style.css" rel="stylesheet" media="screen"/>


<!-- jQuery library (served from Google) -->
        <script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.slimscroll.js"></script>
        
        
        
        
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
<a href="index.php"><img src="images/home_icon2.jpg" width="14" height="14" /></a> <a href="money-transfer.php">Support</a> &nbsp;Mobile Top-Up
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
<li><a href="money-transfer.php">Money Transfer</a></li>
<li class="active"><a href="mobile-top-up.php">Mobile Top-Up</a></li>
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
<h2>&nbsp;</h2>
<div class="table-chart1">
<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td>Features</td>
    <td>Short Description</td>
    <td>SMS Syntax</td>
    <td>Example</td>
  </tr>
  <?php
while($result = mysql_fetch_array($sql))
{
?> 
  <tr>
    <td><?php echo stripslashes(html_entity_decode( $result['feature'],ENT_QUOTES)); ?></td>
    <td><?php echo stripslashes(html_entity_decode( $result['desc'],ENT_QUOTES)); ?></td>
    <td><?php echo stripslashes($result['sms']); ?></td>
    <td><?php echo stripslashes(html_entity_decode( $result['example'],ENT_QUOTES)); ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</div>

<div class="page-title" style="margin-top:20px; border-top:solid 2px #333092; padding-top:15px; margin-right:5%;"><h1>Operator Short Codes</h1></div>

<div>

<div class="table-chart4">
<table border="0" cellspacing="0" cellpadding="0" width="50%" style= "float:left">
  <tr>
    <td>Operator </td>
    <td style="border-right:solid 2px #333092">Short Code</td>
  </tr>
  <?php
  while($resultLeft = mysql_fetch_array($sqlLeft))
  {
  ?>
  <tr>
    <td><?php echo stripslashes(html_entity_decode( $resultLeft['operator'],ENT_QUOTES)); ?></td>
    <td style="border-right:solid 2px #333092"><?php echo stripslashes(html_entity_decode( $resultLeft['code'],ENT_QUOTES)); ?></td>
	
 
  </tr>
<?php
}
?>
</table>
</div>

<div class="table-chart4">
<table border="0" cellspacing="0" cellpadding="0" width="50%" style= "float:left; margin-top:-2px;">
  <tr>

    <td>Operator</td>
    <td>Short Code</td>
  </tr>
  
    <?php
  while($resultRight = mysql_fetch_array($sqlRight))
  {
  ?>
  <tr>
    <td><?php echo stripslashes(html_entity_decode( $resultRight['operator'],ENT_QUOTES)); ?></td>
    <td><?php echo stripslashes(html_entity_decode( $resultRight['code'],ENT_QUOTES)); ?></td>
		
  </tr>
<?php
}
?>
</table>


</div>
<div class="clear"></div>
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
    $(function(){
      $('#testDiv').slimScroll({
          height: 'auto'
      });

      $('#testDiv2').slimScroll({
          height: '100px',
          width: '300px'
      });

      $('#testDiv3').slimScroll();

    });
</script>

</body>
</html>
