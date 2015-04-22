<?php 
include('includes/config.php');
$sqlData = mysql_query("SELECT * FROM faq WHERE `flag` = 1 ");
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
        <script type="text/javascript">
            $(function() {
			
				$('#st-accordion').accordion({
					oneOpenedItem	: true
				});
				
            });
        </script>

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


$('.bxslider2').bxSlider({
	
	pager:false,
	
	
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
<a href="index.php"><img src="images/home_icon2.jpg" width="14" height="14" /></a> &nbsp;Frequently asked Questions
</div>
<div class="clear"></div>
<div class="inner-title-con">
<div class="icon"><img src="images/faq_icon.jpg" /></div>
<div class="first-cont2"><h2 class="title-spasing">Frequently asked Questions</h2></div>
</div>
<div class="clear"></div>
<div class="middle-con">

<!--first half box-->
<div class="inner-first-half hide2">
<div class="first-cont2">
<div class="left-nav-con">
<ul>
<li class="active"><a href="money-transfer.php">Frequently asked Questions</a></li>

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
                    
                 
                        <?php
						while($result = mysql_fetch_array($sqlData))
						{
						if($result['link']!='')
						{
						?>
                         <li>
                     <a href="#"><b class="no">&nbsp;</b><?php echo stripslashes(html_entity_decode( $result['question'],ENT_QUOTES)); ?> <span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
                       
                       <p><a href="../<?php echo stripslashes(html_entity_decode( $result['question'],ENT_QUOTES)); ?>" target="_blank"><strong>click here</strong></a> <?php echo stripslashes(html_entity_decode( $result['answer'],ENT_QUOTES)); ?><p>  
                               
                       </div>
                        </li>
                        <?php
						}
						else
						{
						?>
						<li>
                     <a href="#"><b class="no">&nbsp;</b><?php echo stripslashes(html_entity_decode( $result['question'],ENT_QUOTES)); ?> <span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
                       
                       <p><a href="" ></a> <?php echo stripslashes(html_entity_decode( $result['answer'],ENT_QUOTES)); ?><p>  
                               
                       </div>
                        </li>
						<?php
						}
						}
						?>
                    
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



</body>
</html>
