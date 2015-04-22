<?php 
include('includes/config.php');
include('includes/session.php');
$sqlData = mysql_query("SELECT * FROM faq WHERE `flag` = 1 ");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin-Money Transfer</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<link href="css/ubm-style.css" rel="stylesheet" media="screen"/>
 <link rel="stylesheet" type="text/css" href="css/acc.css" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
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


<!----------script start-------------->
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

<!----------script end ------------->


</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<a href=""><img src="images/logo_02.jpg" width="103" alt="" /></a>
	</div>
	<!-- end logo -->
	
	
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<?php include('includes/admin_nav.php'); ?>
<!--  start nav-outer-repeat................................................... END -->

  <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div class="managebtn1 "><a href="manage_faq.php">Manage FAQ</a></div>
	<!-- end page-heading -->

	<div class="inner-second-half">
<div class="second-cont-spacing">

<div id="st-accordion" class="st-accordion">
                    
                    <ul>
                    
                 
                        <?php
						while($result = mysql_fetch_array($sqlData))
						{
						if($result['link']!='')
						{
						?>
                         <li>
                     <a href="#"><b class="no">&nbsp;</b><?php echo $result['question'] ; ?> <span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
                       
                       <p><a href="../<?php echo $result['question'] ; ?>" target="_blank"><strong>click here</strong></a> <?php echo $result['answer'] ; ?><p>  
                               
                       </div>
                        </li>
                        <?php
						}
						else
						{
						?>
						<li>
                     <a href="#"><b class="no">&nbsp;</b><?php echo $result['question'] ; ?> <span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
                       
                       <p><a href="" ></a> <?php echo $result['answer'] ; ?><p>  
                               
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
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<div id="footer">
<!-- <div id="footer-pad">&nbsp;</div> -->
	<!--  start footer-left -->
	<div id="footer-left">
	Admin &copy; Copyright Union Bank Money  <a href="">www.yts.net.in/ubm</a></div>
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>
</html>