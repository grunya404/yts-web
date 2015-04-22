<?php 
include('includes/config.php');
$sql = mysql_query(" SELECT * FROM `charge` WHERE `flag` = 1 ");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Union Bank Money - Limits</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href="css/ubm-style.css" rel="stylesheet" media="screen"/>


<!-- jQuery library (served from Google) -->
<script src="js/jquery.min.js"></script>


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
<a href="index.php"><img src="images/home_icon2.jpg" width="14" height="14" /></a> <a href="limits.php">Limits and Charges</a> &nbsp;Charges
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
<li><a href="limits.php">Limits</a></li>
<li class="active"><a href="charges.php">Charges</a></li>
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

<div class="table-chart3">

<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <?php 
  while($result = mysql_fetch_array($sql))
  {
  ?>
  <tr>
    <td><?php echo stripslashes(html_entity_decode( $result['title'],ENT_QUOTES)); ?></td>
    <td><?php echo stripslashes(html_entity_decode( $result['value'],ENT_QUOTES)); ?> </td>
  </tr>
  <?php
  }
  ?>

</table>


</div></div>
<br />
<br />
<br />
<br />

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