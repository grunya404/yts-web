<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Union Bank Money - Contact Us</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href="css/ubm-style.css" rel="stylesheet" media="screen"/>


<!-- jQuery library (served from Google) -->
<script src="js/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="js/jquery.bxslider.min.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>

<!-- bxSlider CSS file -->
<link href="css/bxslider.css" rel="stylesheet" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider({
	  controls:false,
	  pager:false,
	  
	  });
	  function validationco() {

			
			
			if(!sprytextfield1.validate())
			{
				$('html, body').animate({
			        scrollTop: $( $("#sprytextfield1") ).offset().top -20
			    }, 500);
				return false;
			}
			else if(!sprytextfield2.validate())
			{
				$('html, body').animate({
			        scrollTop: $( $("#sprytextfield2") ).offset().top -20
			    }, 500);
				return false;
			}
			else if(!sprytextfield3.validate())

			{
				$('html, body').animate({
			        scrollTop: $( $("#sprytextfield3") ).offset().top -20
			    }, 500);
			return false;
			}
			else if(!sprytextfield4.validate())

			{
				$('html, body').animate({
			        scrollTop: $( $("#sprytextfield4") ).offset().top -20
			    }, 500);
			return false;
			}
			
			
			else if(!spryselect1.validate())
			{
				$('html, body').animate({
			        scrollTop: $( $("#spryselect1") ).offset().top -20
			    }, 500);
				return false;
			}
			
			else if(!sprytextarea1.validate())
			{
				$('html, body').animate({
			        scrollTop: $( $("#sprytextarea1") ).offset().top -20
			    }, 500);
				return false;
			}


			else
			{
				return true;
			}


		}
	 $('#fsubmit').click(function(event){
		 event.preventDefault();
			if(!validationco())
				{
				}
				else {
				
				var fname=encodeURIComponent($.trim($('input[name="name"]').val()));
				var fphone=encodeURIComponent($.trim($('input[name="phone"]').val()));
				var femail=encodeURIComponent($.trim($('input[name="email"]').val()));
				var faddress=encodeURIComponent($.trim($('input[name="address"]').val()));
				var ffeedback_type=encodeURIComponent($.trim($('select[name="feedback_type"]').val()));
				var ffeedback=encodeURIComponent($.trim($('textarea[name="feedback"]').val()));
				
				var datas='name='+fname+'&phone='+fphone+'&email='+femail+'&feedback_type='+ffeedback_type+'&feedback='+ffeedback+'&address='+faddress;
				//alert(datas);
				$.ajax({
					type:'POST',
					url:'request_action.php',
					data:datas,
					success: function(abc){
						alert(abc);
							$('.contact-left').html('<div align="center" style="padding-top:50px;"><strong>Thank you for submitting contact details. We will get back to you shortly.</strong></div>')
						
					}
				
					
					
					})
				
				}
		 
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
<a href="index.php"><img src="images/home_icon2.jpg" width="14" height="14" /></a>  &nbsp;Contact Us
</div>
<div class="clear"></div>
<div class="inner-title-con">
<div class="icon"><img src="images/contact_icon.jpg" /></div>
<div class="first-cont2"><h2 class="title-spasing">Contact Us</h2></div>
</div>
<div class="clear"></div>
<div class="middle-con">

<!--first half box-->
<div class="contact-left">
<form id="f"  method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top">Name</td>
  </tr>
  <tr>
    <td align="left" valign="top"><span id="sprytextfield1">
      <input name="name" type="text" />
      <br/><span class="textfieldRequiredMsg">Name required.</span></span></td>
  </tr>
  <tr>
    <td align="left" valign="top">Phone Number</td>
  </tr>
  <tr>
    <td align="left" valign="top"><span id="sprytextfield2">
    <input name="phone" type="text" />
    <br/><span class="textfieldRequiredMsg">Phone number required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
  </tr>
  <tr>
    <td align="left" valign="top">Email</td>
  </tr>
  <tr>
    <td align="left" valign="top"><span id="sprytextfield3">
      <input name="email" type="text" />
      <br/><span class="textfieldRequiredMsg">Email required.</span></span></td>
  </tr>
  <tr>
    <td align="left" valign="top">Address</td>
  </tr>
  <tr>
    <td align="left" valign="top"><span id="sprytextfield4">
      <input name="address" type="text" />
      <br/><span class="textfieldRequiredMsg">Address required.</span></span></td>
  </tr>
  <tr>
    <td align="left" valign="top">Select Feedback </td>
  </tr>
  <tr>
    <td align="left" valign="top"><span id="spryselect1">
      <select name="feedback_type">
        <option value="-1">Select Feedback</option>
        <option value="Feedback">Feedback</option>
        <option value="Other">Other</option>
        <option value="Query">Query</option>
      </select>
     <br/> <span class="selectInvalidMsg">Feedback type required.</span><span class="selectRequiredMsg">Please select valid feedback type.</span></span></td>
  </tr>
  <tr>
    <td align="left" valign="top"><span id="sprytextarea1">
      <textarea name="feedback" cols="" rows=""></textarea>
      <br/><span class="textareaRequiredMsg">Feedback required.</span></span></td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <input type="image" id="fsubmit" src="images/submit_bt.jpg" value="Submit" style="margin-top:15px;" />
    </td>
  </tr>
</table>

</form>
</div>

<!-- second -->
<div class="contact-right">
<div class="second-cont-spacing">
<h2>&nbsp;</h2>
<div class="contact-detail">

<p class="tele">Call Us @ <span>1800 3000 4300*</span></p>

<p class="cal"><span>(Monday to Saturday 8:00 am to 10:00 pm, Sun 10.00 AM to 8.00 PM)</span></p>

<p class="email">Customers, please write to us at <a href="mailto:customercare@yts.net.in"><span>customercare@yts.net.in</span></a></p>

<p class="email">For business partnership, write to us at  <a href="mailto:partner@yts.net.in"><span>partner@yts.net.in</span></a></p>

<p>Partners can write to become franchisee or distributors</p>

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
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "real", {validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur"]});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["blur"], invalidValue:"-1"});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["blur"]});
</script>
</body>
</html>
