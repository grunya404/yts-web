<?php 
include('includes/config.php');
include('includes/session.php');
$sqlData = mysql_query("SELECT * FROM index_admin WHERE `index_id` = 1 ");
$sqlSlider = mysql_query("SELECT * FROM index_slider WHERE `index_slider_flag` = 1 ");
$resultData = mysql_fetch_array($sqlData);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin-Home</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<link href="css/ubm-style.css" rel="stylesheet" media="screen"/>
 <link rel="stylesheet" type="text/css" href="css/acc.css" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery.min.js"></script>

<!----------script start-------------->
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

		<!----- Uploadify ----->
		
	<link href="uploadify/uploadify.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="uploadify/swfobject.js"></script>
	<script type="text/javascript" src="uploadify/jquery.uploadify.v2.1.4.min.js"></script>
		   <!---------- colorbox ---->
<style>
			body{font:12px/1.2 Verdana, sans-serif; padding:0 10px;}
			a:link, a:visited{text-decoration:none; color:#000;}
			h2{font-size:13px; margin:15px 0 0 0;}
		</style>
		<link rel="stylesheet" href="css/colorbox.css" />
		<script src="js/jquery.colorbox.js"></script>
	
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

				
				$(".inline1").colorbox({inline:true, width:"50%"});
				$(".inline2").colorbox({inline:true, width:"50%"});
	<!--------upploadify------------>
				
	 $('#file_upload1').uploadify({
    'uploader'  : 'uploadify/uploadify.swf',
    'script'    : 'uploadify/uploadify.php',
    'cancelImg' : 'uploadify/cancel.png',
    'folder'    : '../images',
		'fileExt'   : '*.jpeg;*.jpg;*.png;*.gif',
	'fileDesc'    : 'Image Files',
	'queueID'   : 'fileQueue',
    'auto'      : true,
	'onProgress'  : function(event,ID,fileObj,data) {
		$('#progress1').html('<span style="color:#f00">Upload in progress...</span>');
	},
	'onComplete'  	 : function(event, queueID, fileObj, response, data) {
		//$('#img_progress1').css("color","#8cc501");
		$('#progress1').html('<span style="color:#8cc501">Image Upload Successfully</span>');
		$('#sub_image1').val(fileObj['name']);
				//$('#prev_img').html('<span style="color:#8cc501">Your uploaded File is  : </span>'+fileObj['name']);
				//alert(fileObj['name']);
	}
	  });
	  
	  $('#file_upload2').uploadify({
    'uploader'  : 'uploadify/uploadify.swf',
    'script'    : 'uploadify/uploadify.php',
    'cancelImg' : 'uploadify/cancel.png',
    'folder'    : '../images',
		'fileExt'   : '*.jpeg;*.jpg;*.png;*.gif',
	'fileDesc'    : 'Image Files',
	'queueID'   : 'fileQueue',
    'auto'      : true,
	'onProgress'  : function(event,ID,fileObj,data) {
		$('#progress2').html('<span style="color:#f00">Upload in progress...</span>');
	},
	'onComplete'  	 : function(event, queueID, fileObj, response, data) {
		//$('#img_progress2').css("color","#8cc501");
		$('#progress2').html('<span style="color:#8cc501">Image Upload Successfully</span>');
		$('#sub_image2').val(fileObj['name']);
				//$('#prev_img').html('<span style="color:#8cc501">Your uploaded File is  : </span>'+fileObj['name']);
				//alert(fileObj['name']);
	}
	  });
	  
	  
	  
	});// end of document
	
	
	
</script>

<script type="text/javascript" src="js/tinymce.min.js"></script>
	<script type="text/javascript">

		tinymce.init({
	selector: "p.editable",
    plugins: "save",
    toolbar: "save",
	 inline: true,
	 save_enablewhendirty: true,
	save_onsavecallback: function() {
	var ids=$(this).attr('id');
	if(ids=='index_about_body')
	{
	 var index_about_body = $("#index_about_body").html();
	   //alert(index_about_body);
	   var dataValue = "index_about_body="+ encodeURIComponent(index_about_body);
	   jQuery.post('process_edit_index.php', dataValue, function(data){
	   //alert('in');
	   //alert(data);
	    });
	}
	if(ids=='index_footer_body1')
	{
	 var index_footer_body1 = $("#index_footer_body1").html();
	   //alert(index_footer_body1);
	   var dataValue = "index_footer_body1="+ encodeURIComponent(index_footer_body1);
	   jQuery.post('process_edit_index.php', dataValue, function(data){
	   //alert('in');
	   //alert(data);
	    });
	}
	if(ids=='index_footer_body2')
	{
	 var index_footer_body2 = $("#index_footer_body2").html();
	   //alert(index_footer_body2);
	   var dataValue = "index_footer_body2="+ encodeURIComponent(index_footer_body2);
	   jQuery.post('process_edit_index.php', dataValue, function(data){
	   //alert('in');
	   //alert(data);
	    });
	}

	}
		});
		
	tinymce.init({
	selector: "h2.editable",
    plugins: "save",
    toolbar: "save",
	 inline: true,
	 save_enablewhendirty: true,
	save_onsavecallback: function() {
	var ids=$(this).attr('id');
	if(ids=='index_about_title')
	{
			var index_about_title = $("#index_about_title").text();
	   if(index_about_title.length>30)
	   {
				$("#name_error").html('');
				$("#index_about_title").after('<label class="error1" id="name_error">***Must be less than 30 characters.</label>');
				return false
	   }
	   else
	   {
	   $("#name_error").html('');
	   //alert(index_about_title);
	   var dataValue = "index_about_title="+ encodeURIComponent(index_about_title);
	   jQuery.post('process_edit_index.php', dataValue, function(data){
	   //alert('in');
	   //alert(data);
	    });
	   }
	}
	
	if(ids=='index_footer_title')
	{
			var index_footer_title = $("#index_footer_title").text();
	   if(index_footer_title.length>36)
	   {
				$("#name_error").html('');
				$("#index_footer_title").after('<label class="error1" id="name_error">***Must be less than 35 characters.</label>');
				return false
	   }
	   else
	   {
	   $("#name_error").html('');
	   //alert(index_footer_title);
	   var dataValue = "index_footer_title="+ encodeURIComponent(index_footer_title);
	   jQuery.post('process_edit_index.php', dataValue, function(data){
	   //alert('in');
	  // alert(data);
	    });
	   }
	}

	}//function end.
	
	
		});
</script>
    
		<style>
		.error{ color:#000; font-size:12px; margin:4px; font-style:italic ; width:155px;}
		.error1{ color:#fff; font-size:15px; margin:4px; font-style:italic ; font-weight:'bold'; width:155px ; background-color:red; }
		
		</style>

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
	<div class="page-heading">
		<h1>Edit Home</h1>
	</div>
	<!-- end page-heading -->

	<!---------<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>--->
		<!--  start content-table-inner ...................................................................... START -->
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
<h2 style="color:#FFF;" class= "editable" id= "index_about_title" ><?php echo $resultData['index_about_title']; ?></h2>

<div class="txt-box ">
<p class= "editable" id= "index_about_body"><?php echo $resultData['index_about_body']; ?></p>
</div>

<!--<p class="txt-benifits">The key benefits are : </p>-->

</div>
<div class="clear"></div>
</div>
<!--first half box end-->
<!--second half start-->
<div class="second-half">
<div class="second-cont">

<div class = "changebutton fright1"  value=""><a href="manage_slider.php">Manage Slider</a></div>
<ul class="bxslider2">
<?php while ($resultSlider = mysql_fetch_array($sqlSlider))
{
?>
  <li>
  <div class="sldr-box">
  <h2><?php echo $resultSlider['index_slider_title']; ?> </h2>
  <div align="center" class="sldr-pic">
  <img src="images/<?php echo $resultSlider['slider_images']; ?>"/>
  </div>
  <ul class="lst-2">
  <li><?php echo $resultSlider['index_slider_point1']; ?></li>
  <?php if($resultSlider['index_slider_point2']!='')
  {
  ?>
  <li><?php echo $resultSlider['index_slider_point2']; ?></li>
  <?php 
  }
  ?>
  <?php if($resultSlider['index_slider_point3']!='')
  {
  ?>
  <li><?php echo $resultSlider['index_slider_point3']; ?></li>
   <?php 
  }
  ?>
  <?php if($resultSlider['index_slider_point4']!='')
  {
  ?>
  <li><?php echo $resultSlider['index_slider_point4']; ?></li>
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

<div class = "changebutton" style="position:absolute;top: 0px;
left: 0px;" value=""><a class='inline1' href="#inline_content1">Change Image</a></div>
<img src="../images/<?php echo $resultData['feature_images']; ?>" style="width:537px; height:545"/>
		<!-- This contains the hidden content for inline calls -->
		<div style='display:none'>
			<div align = "center" id='inline_content1' style='padding:10px; background:#fff;'>

			<form name="feature_images" class= "form_table" action = "action_index_images.php" method="POST" >
			<table width="60%" style="margin:80px;" border="1" cellpadding="50" cellspacing="50">
			<tr>
			<td><strong>Change Image :</strong></td>
			<td><strong>(Width:540px, Height:550px)</strong></td>
			</tr>
			<tr>
			
			<td><input  id="file_upload1" name="file_upload_1" type="file" />
			<input type="hidden" value="" id="sub_image1" name="sub_image1" /></td>
				<td><div id="progress1"></div></td></tr>
			<tr>
			
			<td><input type="submit" value="Submit" class="test btn-submit"></td></tr>
			
			</table>
			</form>
			</div>
		</div>
</div>

<div class="ubm-desc-box">
<h2>Unique Features of Union Bank Money </h2>
<div class="managebtn "><a href="manage_feature.php">Manage Features</a></div>

<ul class="main-ubm">
<?php $sqlTitle = mysql_query("SELECT * FROM index_feature_titles WHERE `flag` = 1 ");
while($resultTitle = mysql_fetch_array($sqlTitle))
{
$title_id = $resultTitle['id'];
?>
<li><?php echo $resultTitle['title'] ; ?>
<ul class="sub-lst">
<?php $sqlPoint = mysql_query("SELECT * FROM index_feature_points WHERE `title_id`=  '$title_id' AND `flag`= 1 ");
while($resultPoint = mysql_fetch_array($sqlPoint))
{
$point_id = $resultPoint['id'];
$sqlDesc = mysql_query("SELECT * FROM index_feature_descriptions WHERE `point_id`=  '$point_id' AND `flag`= 1 ");
while($resultDesc = mysql_fetch_array($sqlDesc))
{
?>
<li><span><?php echo $resultPoint['point']; ?></span><?php echo $resultDesc['desc']; ?></li>
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
<h2 class= "editable" id= "index_footer_title" ><?php echo $resultData['index_footer_title']; ?></h2>

<p class= "editable" id="index_footer_body1" ><?php echo $resultData['index_footer_body1']; ?> </p>


<p class="coming-soon-txt editable" id= "index_footer_body2" ><?php echo $resultData['index_footer_body2']; ?></p>

</div>
<div class="clear"></div>
</div>

<div class="bottom-second-box">

<div class = "changebutton" style="position:absolute;top: 0px;
left: 0px;" value=""><a class='inline2' href="#inline_content2">Change Image</a></div>
<img src="../images/<?php echo $resultData['footer_images']; ?>" style="width:672px; height:554px" />
		<!-- This contains the hidden content for inline calls -->
		<div style='display:none'>
			<div align = "center" id='inline_content2' style='padding:10px; background:#fff;'>
	
			<form name="footer_images" class= "form_table" action = "action_index_images.php" method="POST" >
			<table width="60%" style="margin:80px;" border="1" cellpadding="50" cellspacing="50">
			<tr>
			<td><strong>Change Image :</strong></td>
			<td><strong>(Width:675px, Height:555px)</strong></td>
			</tr>
			<tr>
			
			<td><input  id="file_upload2" name="file_upload_2" type="file" />
			<input type="hidden" value="" id="sub_image2" name="sub_image2" /></td>
				<td><div id="progress2"></div></td></tr>
			<tr>
			
			<td><input type="submit" value="Submit" class="test btn-submit"></td></tr>
			</table>
			</form>
			</div>
		</div>
</div>

<div class="clear"></div>
</div>

</div>
		<!--  end content-table-inner ............................................END  -->
		<!----</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>------>
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