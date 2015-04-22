<?php 
include('includes/config.php');
$sqlData = mysql_query("SELECT * FROM index_admin WHERE `index_id` = 1 ");
$sqlSlider = mysql_query("SELECT * FROM index_slider WHERE `index_slider_flag` = 1 ");
$resultData = mysql_fetch_array($sqlData);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Union Bank Money - Home</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href="css/ubm-style.css" rel="stylesheet" media="screen"/>


<!-- jQuery library (served from Google) -->
<script src="js/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="css/bxslider.css" rel="stylesheet" />
<script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider({
	  controls:false,
	  pager:false,
	  
	  });
   
});
</script>

<script type="text/javascript">

	
	$(document).ready(function(){
  $('.mob-menu a').click(function(){
$('.nav-box').slideToggle('fast');
});


$('.bxslider2').bxSlider({
	
	pager:false,
	auto: true,
	
	
	});
	
	
	$('.nav-box ul li').hover(function(){
$(this).find('.nav-blank').stop().fadeIn('fast')	
},function(){
	
$('.nav-blank').fadeOut('fast')		
	});	


	
	});
	
	
	
</script>

</head>

<body>
<div class="mob-menu"><a href="javascript:void(0)" ><img src="images/menu.jpg" /></a></div>
<!--main conatiner start-->
<div class="main-container">
<!--inner wrapper start-->
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
<!--inner wrapper end-->

<!--responsive slider start-->
<div class="slider-box">
<ul class="bxslider">
  <li><img src="images/pic-1_05.jpg" /></li>
  <!--<li><img src="images/pic-1_05.jpg" /></li>
  <li><img src="images/pic-1_05.jpg" /></li>
  <li><img src="images/pic-1_05.jpg" /></li>-->
</ul>
</div>
<!--responsive slider end-->


<!--mid box start-->
<div class="mid-box" style="padding-top:0px;">
<div class="mid-box22">
<!--first half box-->
<div class="first-half">
<div class="first-cont">
<h2 style="color:#FFF;"><?php echo stripslashes(html_entity_decode( $resultData['index_about_title'],ENT_QUOTES)); ?></h2>

<div class="txt-box">
<p><?php echo stripslashes(html_entity_decode( $resultData['index_about_body'],ENT_QUOTES)); ?></p>
</div>

<!--<p class="txt-benifits">The key benefits are : </p>-->

</div>
<div class="clear"></div>
</div>
<!--first half box end-->
<!--second half start-->
<div class="second-half">
<div class="second-cont">
<ul class="bxslider2">
<?php while ($resultSlider = mysql_fetch_array($sqlSlider))
{
?>
  <li>
  <div class="sldr-box">
  <h2><?php echo stripslashes(html_entity_decode( $resultSlider['index_slider_title'],ENT_QUOTES)); ?> </h2>
  <div align="center" class="sldr-pic">
  <img src="images/<?php echo $resultSlider['slider_images']; ?>"/>
  </div>
  <ul class="lst-2">
  <li><?php echo stripslashes(html_entity_decode( $resultSlider['index_slider_point1'],ENT_QUOTES)); ?></li>
  <?php if($resultSlider['index_slider_point2']!='')
  {
  ?>
  <li><?php echo stripslashes(html_entity_decode( $resultSlider['index_slider_point2'],ENT_QUOTES)); ?></li>
  <?php 
  }
  ?>
  <?php if($resultSlider['index_slider_point3']!='')
  {
  ?>
  <li><?php echo stripslashes(html_entity_decode( $resultSlider['index_slider_point3'],ENT_QUOTES)); ?></li>
   <?php 
  }
  ?>
  <?php if($resultSlider['index_slider_point4']!='')
  {
  ?>
  <li><?php echo stripslashes(html_entity_decode( $resultSlider['index_slider_point4'],ENT_QUOTES)); ?></li>
     <?php 
  }
  ?>
  </ul>
  </div>
  </li>
  <?php
  }
  ?>

  
</ul>
</div>
</div>
<!--second half end-->
</div>
<div class="clear"></div>

<div class="unique-box">
<div class="mobile-pic">
<img src="images/<?php echo $resultData['feature_images']; ?>" style="width:537px; height:545"/>
</div>

<div class="ubm-desc-box">
<h2>Unique Features of Union Bank Money </h2>

<ul class="main-ubm">
<?php $sqlTitle = mysql_query("SELECT * FROM index_feature_titles WHERE `flag` = 1 ");
while($resultTitle = mysql_fetch_array($sqlTitle))
{
$title_id = $resultTitle['id'];
?>
<li><?php echo stripslashes(html_entity_decode( $resultTitle['title'],ENT_QUOTES)); ?>
<ul class="sub-lst">
<?php $sqlPoint = mysql_query("SELECT * FROM index_feature_points WHERE `title_id`=  '$title_id' AND `flag`= 1 ");
while($resultPoint = mysql_fetch_array($sqlPoint))
{
$point_id = $resultPoint['id'];
$sqlDesc = mysql_query("SELECT * FROM index_feature_descriptions WHERE `point_id`=  '$point_id' AND `flag`= 1 ");
while($resultDesc = mysql_fetch_array($sqlDesc))
{
?>
<li><span><?php echo stripslashes(html_entity_decode( $resultPoint['point'],ENT_QUOTES)); ?></span><?php echo stripslashes(html_entity_decode( $resultDesc['desc'],ENT_QUOTES)); ?></li>
<?php
}//desc
}//point
?>
</ul>
</li>
<?php
}//title
?>
<!----<li>Transactions as low as Rs. 10/- possible </li>
<li>Unique feature of ATM card and cash withdrawal </li>
<li>Self-assisted and agent-assisted option available for using services </li> --->

</ul>

</div>


</div>
<div class="clear"></div>

<div class="bottom-box">
<div class="bottom-first-box">
<div class="bottom-first-inner">
<h2><?php echo stripslashes(html_entity_decode( $resultData['index_footer_title'],ENT_QUOTES)); ?></h2>

<p><?php echo stripslashes(html_entity_decode( $resultData['index_footer_body1'],ENT_QUOTES)); ?></p>


<p class="coming-soon-txt"><?php echo stripslashes(html_entity_decode( $resultData['index_footer_body2'],ENT_QUOTES)); ?></p>

</div>
<div class="clear"></div>
</div>

<div class="bottom-second-box">
<img src="images/<?php echo $resultData['footer_images']; ?>" style="width:672px; height:554px"/>
</div>

<div class="clear"></div>
</div>

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
