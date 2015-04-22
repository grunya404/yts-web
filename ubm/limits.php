<?php 
include('includes/config.php');
$sqlTitle = mysql_query("SELECT * FROM limit_title");
$sqlRow = mysql_query("SELECT * FROM limit_row WHERE `flag` = 1 ");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Union Bank Money - Limits</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href="css/ubm-style.css" rel="stylesheet" media="screen"/>
<!--  <link rel="stylesheet" href="css/website.css" type="text/css" media="screen"/>-->



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
<a href="index.php"><img src="images/home_icon2.jpg" width="14" height="14" /></a> <a href="limits.html">Limits and Charges</a> &nbsp;Limits
</div>
<div class="clear"></div>
<div class="inner-title-con">
<div class="icon"><img src="images/limits_icon.jpg" /></div>
<div class="first-cont2"><h2 class="title-spasing">Limits and Charges</h2></div>
</div>
<div class="clear"></div>
<div class="middle-con">

<!--first half box-->
<div class="inner-first-half">
<div class="first-cont2">
<div class="left-nav-con">
<ul>
<li class="active"><a href="limits.php">Limits</a></li>
<li><a href="charges.php">Charges</a></li>
</ul>
</div>

</div>

<div class="clear"></div>
</div>

<!-- second -->
<div class="inner-second-half">
<div class="second-cont-spacing">
<div class="page-title"><h1>Transaction Limits for Services</h1></div>

<div class="scroll-con">

<div class="table-chart1">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Wallet Type</td>
    <td colspan="3">UBM Lite</td>
    <td colspan="3">UBM Smart</td>
    </tr>
  <tr>
    <td>Services</td>
    <td>Min. per<br />Transaction
</td>
    <td>Max. per<br />Transaction
</td>
    <td>Daily</td>
    <td>Min. per<br />Transaction
</td>
    <td>Max. per<br />Transaction</td>
    <td>Daily</td>
  </tr>
  </table>


</div> 


<div class="table-chart2">

<table width="100%" border="0" cellspacing="0" cellpadding="0" >
  <?php
  $sqlTitle = mysql_query("SELECT * FROM limit_title WHERE `flag` = 1 ");
  //echo "SELECT * FROM limit_title WHERE `flag` = 1";
  while($resultTitle = mysql_fetch_array($sqlTitle))
  {
  $title_id = $resultTitle['id'];
  ?>
  <tr>
    <td colspan="7" ><?php echo stripslashes(html_entity_decode( $resultTitle['title'],ENT_QUOTES)); ?> </td>
  </tr>
  <?php 

  $sqlRow = mysql_query("SELECT * FROM limit_row WHERE `flag` = 1 AND `title_id` = '$title_id'  ");
  while($resultRow = mysql_fetch_array($sqlRow))
  {
  $row_id = $resultRow['id'];
  ?>
  <tr>
    <td width="19%"><?php echo stripslashes(html_entity_decode( $resultRow['row_title'],ENT_QUOTES)); ?> </td>
	
	<?php 
	 $sqlCol = mysql_query("SELECT * FROM limit_column2 ");
  while($resultCol = mysql_fetch_array($sqlCol))
  {
  $col_id = $resultCol['id'];
	$sqlValue = mysql_query("SELECT * FROM limit_value WHERE `flag` = 1 AND `row_id` = '$row_id' AND `col2_id` = '$col_id' ");
	while($resultValue = mysql_fetch_array($sqlValue))
	{
	?>
	<?php
	if($resultValue['col2_id']=='2' || $resultValue['col2_id']=='3'||$resultValue['col2_id']=='5'||$resultValue['col2_id']=='6')
	{
	?>
    <td width="16%"><?php echo stripslashes(html_entity_decode( $resultValue['value'],ENT_QUOTES)); ?> </td>
	<?php
	}
	else
	{
	?>
	<td width="9%"><?php echo stripslashes(html_entity_decode( $resultValue['value'],ENT_QUOTES)); ?> </td>
	<?php
	}
	?>
	
  <?php
  } //end value ?>
 
  <?php } //end col
  ?>
  
  <!-----------taking values ------------------->
	
  </tr>
  
  <?php
  } //end row
  }  //end title
  ?>

</table>

</div>       


<div class="table-notes">
<p>* Maximum wallet balance</p>
<p>** Two transactions allowed in a month</p>
<p>** Two transactions allowed in a month</p>
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

</body>
</html>
