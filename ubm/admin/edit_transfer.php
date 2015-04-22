<?php 
include('includes/config.php');
include('includes/session.php');

$sqlBox2 = mysql_query(" SELECT * FROM `box2` WHERE `flag` = 1 ");
$sqlBox3 = mysql_query(" SELECT * FROM `box3` WHERE `flag` = 1 ");
$sqlBox4 = mysql_query(" SELECT * FROM `box4` WHERE `flag` = 1 ");

$sqlBox3_feature = mysql_query(" SELECT * FROM `box3_feature` WHERE `flag` = 1 ");
$sqlBox4_feature = mysql_query(" SELECT * FROM `box4_feature` WHERE `flag` = 1 ");

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

	$('.nav-box ul li').hover(function(){
$(this).find('.nav-blank').stop().fadeIn('fast')	
},function(){
	
$('.nav-blank').fadeOut('fast')		
	});	

<!-----------------add --------------------->.
	$('.add-box2').click(function(){
	$('.forms').slideUp();
				$('.form-add-box2').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#title').val('');
				
			$('.form-add-box2').slideUp('slow');

				});
				
	$('#form_submit_box2').click(function(){
	
		var title = $('#title').val();
		
		var dataString = "title=" + encodeURIComponent(title) ;
		
		jQuery.post('process_add_box2.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-box2').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		
		$('.add-box3').click(function(){
		$('.forms').slideUp();

				$('.form-add-box3').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#title').val('');
				
			$('.form-add-box3').slideUp('slow');

				});
				
	$('#form_submit_box3').click(function(){
	
		var title = $('#title3').val();
		
		var dataString = "title=" + encodeURIComponent(title) ;
		
		jQuery.post('process_add_box3.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-box3').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		
		$('.add-box4').click(function(){
		$('.forms').slideUp();
				$('.form-add-box4').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#title').val('');
				
			$('.form-add-box4').slideUp('slow');

				});
				
	$('#form_submit_box4').click(function(){
	
		var title = $('#title4').val();
		
		var dataString = "title=" + encodeURIComponent(title) ;
		
		jQuery.post('process_add_box4.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-box4').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
	<!---------------edit--------------------->

$('.edit_button_box2').click(function(){
	var ids=$(this).attr('rel');
	var title=$(this).attr('bel');

	
	//alert(title_id);
	//alert(title);
	
	$('#edit_id2').val(ids);
	$('#edit_title').val(title);
	
	$('.forms').slideUp();
	$('.edit-title-box2').slideDown('slow');
	
	})
	
	$('.edit_cancel').click(function(){
	
	$('#edit_title').val('');

	
	$('.edit-title-box2').slideUp('slow');
	
	})
	
		$('#edit_submit_box2').click(function(){
			var ids=$('#edit_id2').val();
			var title=$('#edit_title').val();
			
		//alert(ids);
			//alert(title);
			
		var dataString = "ids=" + encodeURIComponent(ids) + "&title=" + encodeURIComponent(title)  ;
	//alert(dataString);
			jQuery.post('process_edit_box2.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#edit_title').val('');

			$('.edit-title-box2').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});
		
		
		$('.edit_button_box3').click(function(){
	var ids=$(this).attr('rel');
	var title=$(this).attr('bel');
	//alert(ids);
	//alert(title);
	
	$('#edit_id3').val(ids);
	$('#edit_title3').val(title);
	
	$('.forms').slideUp();
	 $('.edit-title-box3').slideDown('slow');
	
	}) 
	
	$('.edit_cancel').click(function(){
	
	$('#edit_title3').val('');

	
	$('.edit-title-box3').slideUp('slow');
	
	})
	
		$('#edit_submit_box3').click(function(){
			var ids=$('#edit_id3').val();
			var title=$('#edit_title3').val();
			
		//alert(ids);
			//alert(title);
			
		var dataString = "ids=" + encodeURIComponent(ids) + "&title=" + encodeURIComponent(title)  ;
	//alert(dataString);
			jQuery.post('process_edit_box3.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#edit_title3').val('');

			$('.edit-title-box3').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});
		
		$('.edit_button_box4').click(function(){
	var ids=$(this).attr('rel');
	var title=$(this).attr('bel');

	
	//alert(title_id);
	//alert(title);
	
	$('#edit_id4').val(ids);
	$('#edit_title4').val(title);
	
	$('.forms').slideUp();
	$('.edit-title-box4').slideDown('slow');
	
	})
	
	$('.edit_cancel').click(function(){
	
	$('#edit_title4').val('');

	
	$('.edit-title-box4').slideUp('slow');
	
	})
	
		$('#edit_submit_box4').click(function(){
			var ids=$('#edit_id4').val();
			var title=$('#edit_title4').val();
			
		//alert(ids);
			//alert(title);
			
		var dataString = "ids=" + encodeURIComponent(ids) + "&title=" + encodeURIComponent(title)  ;
	//alert(dataString);
			jQuery.post('process_edit_box4.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#edit_title4').val('');

			$('.edit-title-box4').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});
	<!------------------delete--------------------------->	
	
	 $('.del2').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_box2.php',
				data : 'iid='+iid,
				success: function(b){
					//alert(b);
					
					if(b==1)
					{
						window.location.reload();
					}
					}
				});
				}
				
				});
				
				 $('.del3').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_box3.php',
				data : 'iid='+iid,
				success: function(b){
					//alert(b);
					
					if(b==1)
					{
						window.location.reload();
					}
					}
				});
				}
				
				});

				
				 $('.del4').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_box4.php',
				data : 'iid='+iid,
				success: function(b){
					//alert(b);
					
					if(b==1)
					{
						window.location.reload();
					}
					}
				});
				}
				
				});

<!-----------------------Features-------------->
$('.add-div3').click(function(){
$('.forms').slideUp();

						$('.li-height3').height(function (index, height) {
					return (height + 200);
				});
				$('.form-add-div3').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#feature3').val('');
				$('#desc3').val('');
				$('#sms3').val('');
				$('#example3').val('');
			$('.form-add-div3').slideUp('slow');
				});
				
	$('#form_submit3').click(function(){
	
		var feature = $('#feature3').val();
		var desc = $('#desc3').val();
		var sms = $('#sms3').val();
		var example = $('#example3').val();
		var dataString = "feature=" + encodeURIComponent(feature) + "&desc=" + encodeURIComponent(desc) + "&sms=" + encodeURIComponent(sms) + "&example=" + encodeURIComponent(example) ;
		
		jQuery.post('process_add_transfer_features3.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-div3').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		
		
		$('.edit_button_feature3').click(function(){
		
		$('.li-height3').height(function (index, height) {
    return (height + 200);
});
	var ids=$(this).attr('rel');
	var feature=$(this).attr('bel');
	var desc=$(this).attr('mel');
	var sms=$(this).attr('sel');
	var example=$(this).attr('hel');
	
	//alert(title_id);
	//alert(title);
	
	$('#edit_id_feature3').val(ids);
	$('#edit_feature3').val(feature);
	$('#edit_desc3').val(desc);
	$('#edit_sms3').val(sms);
	$('#edit_example3').val(example);
	
	$('.forms').slideUp();
	$('.edit-title-container3').slideDown('slow');
	
	})
	
	$('.edit_cancel').click(function(){
	
	$('#edit_feature3').val('');
	$('#edit_desc3').val('');
	$('#edit_sms3').val('');
	$('#edit_example3').val('');
	
	$('.edit-title-container3').slideUp('slow');
	
	})
	
		$('#edit_submit3').click(function(){
			var ids=$('#edit_id_feature3').val();
			var feature=$('#edit_feature3').val();
			var desc=$('#edit_desc3').val();
			var sms=$('#edit_sms3').val();
			var example=$('#edit_example3').val();
			//alert(title_id);
			//alert(title);
			
		var dataString = "ids=" + encodeURIComponent(ids) + "&feature=" + encodeURIComponent(feature) + "&desc=" + encodeURIComponent(desc) + "&sms=" + encodeURIComponent(sms) + "&example=" + encodeURIComponent(example) ;
	//alert(dataString);
			jQuery.post('process_edit_box3_feature.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#edit_feature3').val('');
			$('#edit_desc3').val('');
			$('#edit_sms3').val('');
			$('#edit_example3').val('');
			
			
			$('.edit-title-container3').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});

 $('.del_feature3').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_box3_feature.php',
				data : 'iid='+iid,
				success: function(b){
					//alert(b);
					
					if(b==1)
					{
						window.location.reload();
					}
					}
				});
				}
				
				});

<!------------------ffffffffffffffff44444444444----------->
$('.add-div4').click(function(){
$('.forms').slideUp();
		$('.li-height4').height(function (index, height) {
    return (height + 100);
});
				$('.form-add-div4').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#feature4').val('');
				$('#desc4').val('');
				$('#sms4').val('');
				$('#example4').val('');
			$('.form-add-div4').slideUp('slow');

				});
				
	$('#form_submit4').click(function(){
	
		var feature = $('#feature4').val();
		var desc = $('#desc4').val();
		var sms = $('#sms4').val();
		var example = $('#example4').val();
		var dataString = "feature=" + encodeURIComponent(feature) + "&desc=" + encodeURIComponent(desc) + "&sms=" + encodeURIComponent(sms) + "&example=" + encodeURIComponent(example) ;
		
		jQuery.post('process_add_transfer_features4.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-div4').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		
		
		$('.edit_button_feature4').click(function(){
	var ids=$(this).attr('rel');
	var feature=$(this).attr('bel');
	var desc=$(this).attr('mel');
	var sms=$(this).attr('sel');
	var example=$(this).attr('hel');
	
	//alert(title_id);
	//alert(title);
	
	$('#edit_id_feature4').val(ids);
	$('#edit_feature4').val(feature);
	$('#edit_desc4').val(desc);
	$('#edit_sms4').val(sms);
	$('#edit_example4').val(example);
	
	$('.forms').slideUp();
	
			$('.li-height4').height(function (index, height) {
    return (height + 100);
});
	$('.edit-title-container4').slideDown('slow');
	
	})
	
	$('.edit_cancel').click(function(){
	
	$('#edit_feature4').val('');
	$('#edit_desc4').val('');
	$('#edit_sms4').val('');
	$('#edit_example4').val('');
	
	$('.edit-title-container4').slideUp('slow');
	
	})
	
		$('#edit_submit4').click(function(){
			var ids=$('#edit_id_feature4').val();
			var feature=$('#edit_feature4').val();
			var desc=$('#edit_desc4').val();
			var sms=$('#edit_sms4').val();
			var example=$('#edit_example4').val();
			//alert(title_id);
			//alert(title);
			
		var dataString = "ids=" + encodeURIComponent(ids) + "&feature=" + encodeURIComponent(feature) + "&desc=" + encodeURIComponent(desc) + "&sms=" + encodeURIComponent(sms) + "&example=" + encodeURIComponent(example) ;
	//alert(dataString);
			jQuery.post('process_edit_box4_feature.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#edit_feature4').val('');
			$('#edit_desc4').val('');
			$('#edit_sms4').val('');
			$('#edit_example4').val('');
			
			
			$('.edit-title-container4').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});

 $('.del_feature4').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_box4_feature.php',
				data : 'iid='+iid,
				success: function(b){
					//alert(b);
					
					if(b==1)
					{
						window.location.reload();
					}
					}
				});
				}
				
				});
				
	<!-----------------end doc ready---------------->		
		
		

	
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
	<div class="page-heading">
		<h1>Add product</h1>
	</div>
	<!-- end page-heading -->
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start -content  -->
		
		<div class="inner-first-half">

<div class="clear"></div>
</div>

<!-- second -->
<div class="inner-second-half">
<div class="second-cont-spacing">


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
                       <div class = "add-box2 addbtn fright"><a href = "javascript:void(0)" > Add Point </a></div>
			
                       <div class="contact-detail">
                       
                       <p><strong>Send Instant cash without a need of bank account or a digital wallet. All
you require is recipient's mobile number. Recipient can collect cash
from UBM authorized agent by producing:
</strong></p>
			
			<div class = "container-up edit-title-box2 forms" style="display:none" align="center">
<form name="edit_form"  class="edit_form" >
<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Point</strong></td>
</tr>

<input type="hidden" value="" id="edit_id2" name="edit_id2" />
			<tr>
			<td>Point</td>
			<td><input type="text" id="edit_title" name="edit_title" size= "200"  />
			</td></tr>

			<tr><td align="right"><a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>&nbsp;&nbsp;<td><a id="edit_submit_box2" class="btn" href="javascript:void(0)">Submit</a></td></tr>


 <tr> <td colspan="2"><div id="msg2"></div> </td> </tr>
</table>
</form> 
</div>


					   <div align="center" class="form-add-box2 forms" style="display: none" >
<form name="add_form" id="add_form" >

<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add Points </strong></td>

</tr>
<tr>
<td align=""> <strong>Point&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="title" id="title" value="" size= "200" />
</td>
</tr>
 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_submit_box2" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add_box2"></div> </td> </tr>
</table>

</form>
</div>



<?php
while($resultBox2 = mysql_fetch_array($sqlBox2))
{
?>
<p class="listing"><?php echo $resultBox2['title'] ; ?>&nbsp;&nbsp;&nbsp;
<a class="edit_button_box2"  href="javascript:void(0)" 
			rel="<?php echo $resultBox2['id'] ?>" 
			bel="<?php echo $resultBox2['title']; ?>" 			
		 ><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
		 <a class="del2" href= "javascript:void(0)" rel= "<?php echo $resultBox2['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
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
                        
                        
                        
                        <li class="li-height3">
                     <a href="#">UBM to any bank account, instantly, 24X7 <span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
                      
                       <div class="contact-detail">
                        
                        <p><strong>Transfer money instantly to any bank account 24x7. It's an emerging way of transferring money. All you require is recipients'</strong></p>
						 <div class = "add-box3 addbtn fright"><a href = "javascript:void(0)" > Add Point </a></div>
						 <div class = "add-div3 addbtn fright"><a href = "javascript:void(0)" > Add Feature </a></div>
						 
						 <div class = "container-up edit-title-container3 forms" style="display:none" align="center">
<form name="edit_form"  class="edit_form" >
<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Charge</strong></td>
</tr>

<input type="hidden" value="" id="edit_id_feature3" name="edit_id_feature3" />
			<tr>
			<td>Feature</td>
			<td><input type="text" id="edit_feature3" name="edit_feature3"  />
			</td></tr>
			<tr>
			<td>Description</td>
			<td><textarea id="edit_desc3" name="edit_desc3" rows ="4" style="width:450px" ></textarea>
			</td></tr>
			<tr>
			<td>SMS</td>
			<td><input type="text" id="edit_sms3" name="edit_sms3"  />
			</td></tr>
			<tr>
			<td>Example</td>
			<td><input type="text" id="edit_example3" name="edit_example3"  />
			</td></tr>
	
			<tr><td align="right"><a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>&nbsp;&nbsp;<td><a id="edit_submit_feature3" class="btn" href="javascript:void(0)">Submit</a></td></tr>


 <tr> <td colspan="2"><div id="msg3"></div> </td> </tr>
</table>
</form> 
</div>


<div align="center" class="form-add-div3 forms" style="display: none" >
<form name="add_form" id="add_form" >

<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add </strong></td>

</tr>
<tr>
<td align=""> <strong>Feature&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="feature3" id="feature3" value=""/>
</td>
</tr>
<tr>
<td align=""> <strong>Description&nbsp;<span class="compulsory">*</span></strong></td>
<td> <textarea name="desc3" id="desc3" value="" rows= "4" style="width:450px " >
</textarea>
</td>
</tr>
<tr>
<td align=""> <strong>SMS&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="sms3" id="sms3" value=""/>
</td>
</tr>
<tr>
<td align=""> <strong>Example&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="example3" id="example3" value=""/>
</td>
</tr>

 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_submit3" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add3"></div> </td> </tr>
</table>

</form>
</div>
						
						<!--------------3333333333333----------------->

<div class = "container-up edit-title-box3 forms" style="display:none" align="center">
<form name="edit_form"  class="edit_form" >
<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Point</strong></td>
</tr>

<input type="hidden" value="" id="edit_id3" name="edit_id3" />
			<tr>
			<td>Point</td>
			<td><input type="text" id="edit_title3" name="edit_title3" size= "200"  />
			</td></tr>

			<tr><td align="right"><a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>&nbsp;&nbsp;<td><a id="edit_submit_box3" class="btn" href="javascript:void(0)">Submit</a></td></tr>


 <tr> <td colspan="2"><div id="msg3"></div> </td> </tr>
</table>
</form> 
</div>


					   <div align="center" class="form-add-box3 forms" style="display: none" >
<form name="add_form" id="add_form" >

<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add Points </strong></td>

</tr>
<tr>
<td align=""> <strong>Point&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="title3" id="title3" value="" size= "200" />
</td>
</tr>
 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_submit_box3" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add_box3"></div> </td> </tr>
</table>

</form>
</div>


                       
<?php
while($resultBox3 = mysql_fetch_array($sqlBox3))
{
?>
<p class="listing"><?php echo $resultBox3['title'] ; ?>&nbsp;&nbsp;&nbsp;
<a class="edit_button_box3"  href="javascript:void(0)" 
			rel="<?php echo $resultBox3['id'] ?>" 
			bel="<?php echo $resultBox3['title']; ?>" 			
		 ><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
		 <a class="del3" href= "javascript:void(0)" rel= "<?php echo $resultBox3['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
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
    <td><?php echo $resultBox3_feature['feature'] ; ?></td>
    <td><?php echo $resultBox3_feature['desc'] ; ?></td>
    <td><?php echo $resultBox3_feature['sms'] ; ?></td>
    <td><?php echo $resultBox3_feature['example'] ; ?></td>
	<td><a class="edit_button_feature3"  href="javascript:void(0)" 
			rel="<?php echo $resultBox3_feature['id'] ?>" 
			bel="<?php echo $resultBox3_feature['feature']; ?>" 
			mel="<?php echo $resultBox3_feature['desc']; ?>"			
			sel="<?php echo $resultBox3_feature['sms']; ?>"			
			hel="<?php echo $resultBox3_feature['example']; ?>"			
		 ><img src="images/edit.png" style="width:16px" /></a></td>
		 <td><a class="del_feature3" href= "javascript:void(0)" rel= "<?php echo $resultBox3_feature['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></td>
  </tr>
  <?php
  }
  ?>
  
</table>


</div>  
                               
                       </div>
                        </li>
                        
                        
                        <li class= "li-height4">
                     <a href="#">UBM to any Bank Account<span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
                       
                        <div class="contact-detail">
                        
                        <p><strong>Transfer money to any bank account in a day. All you require is recipients'</strong></p>
						 <div class = "add-box4 addbtn fright"><a href = "javascript:void(0)" > Add Point </a></div>
						 <div class = "add-div4 addbtn fright"><a href = "javascript:void(0)" > Add Feature </a></div>
						 
						 <div align="center" class="form-add-div4 forms" style="display: none" >
<form name="add_form" id="add_form" >

<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add </strong></td>

</tr>
<tr>
<td align=""> <strong>Feature&nbsp;<span class="compulsory">*</span></strong></td>
<td> <textarea name="feature4" id="feature4" value="" rows= "4" style="width:450px "></textarea>
</td>
</tr>
<tr>
<td align=""> <strong>Description&nbsp;<span class="compulsory">*</span></strong></td>
<td> <textarea name="desc4" id="desc4" value="" rows= "4" style="width:450px " >
</textarea>
</td>
</tr>
<tr>
<td align=""> <strong>SMS&nbsp;<span class="compulsory">*</span></strong></td>
<td> <textarea name="sms4" id="sms4" value=" rows= "4" style="width:450px " ></textarea>
</td>
</tr>
<tr>
<td align=""> <strong>Example&nbsp;<span class="compulsory">*</span></strong></td>
<td> <textarea name="example4" id="example4" value="" rows= "4" style="width:450px " ></textarea>
</td>
</tr>

 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_submit4" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add4"></div> </td> </tr>
</table>

</form>
</div>

<div class = "container-up edit-title-container4 forms" style="display:none" align="center">
<form name="edit_form"  class="edit_form" >
<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Charge</strong></td>
</tr>

<input type="hidden" value="" id="edit_id_feature4" name="edit_id_feature4" />
			<tr>
			<td>Feature</td>
			<td><textarea id="edit_feature4" name="edit_feature4" rows ="4" style="width:450px" ></textarea>
			</td></tr>
			<tr>
			<td>Description</td>
			<td><textarea id="edit_desc4" name="edit_desc4" rows ="4" style="width:450px" ></textarea>
			</td></tr>
			<tr>
			<td>SMS</td>
			<td><textarea id="edit_sms4" name="edit_sms4"  rows ="4" style="width:450px" ></textarea>
			</td></tr>
			<tr>
			<td>Example</td>
			<td><textarea id="edit_example4" name="edit_example4"  rows ="4" style="width:450px" ></textarea>
			</td></tr>
	
			<tr><td align="right"><a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>&nbsp;&nbsp;<td><a id="edit_submit4" class="btn" href="javascript:void(0)">Submit</a></td></tr>


 <tr> <td colspan="2"><div id="msg4"></div> </td> </tr>
</table>
</form> 
</div>


						
						<!--------------4444444444444----------------->

<div class = "container-up edit-title-box4 forms" align="center" style="display:none">
<form name="edit_form"  class="edit_form" >
<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Point</strong></td>
</tr>

<input type="hidden" value="" id="edit_id4" name="edit_id2" />
			<tr>
			<td>Point</td>
			<td><input type="text" id="edit_title4" name="edit_title4" size= "200"  />
			</td></tr>

			<tr><td align="right"><a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>&nbsp;&nbsp;<td><a id="edit_submit_box4" class="btn" href="javascript:void(0)">Submit</a></td></tr>


 <tr> <td colspan="2"><div id="msg4"></div> </td> </tr>
</table>
</form> 
</div>


					   <div align="center" class="form-add-box4 forms" style="display: none" >
<form name="add_form" id="add_form" >

<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add Points </strong></td>

</tr>
<tr>
<td align=""> <strong>Point&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="title4" id="title4" value="" size= "200" />
</td>
</tr>
 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_submit_box4" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add_box4"></div> </td> </tr>
</table>

</form>
</div>


                       
 <?php
while($resultBox4 = mysql_fetch_array($sqlBox4))
{
?>
<p class="listing"><?php echo $resultBox4['title'] ; ?>&nbsp;&nbsp;&nbsp;
<a class="edit_button_box4"  href="javascript:void(0)" 
			rel="<?php echo $resultBox4['id'] ?>" 
			bel="<?php echo $resultBox4['title']; ?>" 			
		 ><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
		 <a class="del4" href= "javascript:void(0)" rel= "<?php echo $resultBox4['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
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
    <td><?php echo $result4_feature['feature'] ; ?></td>
    <td><?php echo $result4_feature['desc'] ; ?></td>
    <td><?php echo $result4_feature['sms'] ; ?></td>
    <td><?php echo $result4_feature['example'] ; ?></td>
	<td><a class="edit_button_feature4"  href="javascript:void(0)" 
			rel="<?php echo $result4_feature['id'] ?>" 
			bel="<?php echo $result4_feature['feature']; ?>" 
			mel="<?php echo $result4_feature['desc']; ?>"			
			sel="<?php echo $result4_feature['sms']; ?>"			
			hel="<?php echo $result4_feature['example']; ?>"			
		 ><img src="images/edit.png" style="width:16px" /></a></td>
		 <td><a class="del_feature4" href= "javascript:void(0)" rel= "<?php echo $result4_feature['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></td>
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
			<!--  end -content  -->
	
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
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

   <script type="text/javascript">
            $(function() {
			
				$('#st-accordion').accordion({
					oneOpenedItem	: true
				});
				
            });
        </script>

		
		
</body>
</html>