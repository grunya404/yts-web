<?php 
include('includes/config.php');
include('includes/session.php');

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

<!----------script start-------------->
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

<!-----------------add --------------------->.
	$('.add-wallet').click(function(){
	$('.forms').slideUp();
				$('.form-add-wallet').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#title_wallet').val('');
				
			$('.form-add-wallet').slideUp('slow');

				});
				
	$('#form_submit_wallet').click(function(){
	
		var title = $('#title_wallet').val();
		var title_id = $('#title_id').val();
		
		
		var dataString = "title=" + encodeURIComponent(title)+ "&title_id=" + encodeURIComponent(title_id) ;
		
		jQuery.post('process_add_basic.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-wallet').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		$('.add-wallet1').click(function(){
	$('.forms').slideUp();
				$('.form-add-wallet1').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#desc_wallet').val('');
				
			$('.form-add-wallet1').slideUp('slow');

				});
				
	$('#form_submit_wallet1').click(function(){
	
		var desc = $('#desc_wallet').val();
		var title_id = $('#title_id').val();
		var point_id = $('#point_id').val();
		
		var dataString = "desc=" + encodeURIComponent(desc) + "&title_id=" + encodeURIComponent(title_id) + "&point_id=" + encodeURIComponent(point_id) ;
		
		jQuery.post('process_add_basic1.php.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-wallet1').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
	<!-----------------2222---------------->
	
	$('.add-cash').click(function(){
	$('.forms').slideUp();
				$('.form-add-cash').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#title_cash').val('');
				
			$('.form-add-cash').slideUp('slow');

				});
				
	$('#form_submit_cash').click(function(){
	
		var title = $('#title_cash').val();
		var title_id = $('#title_id').val();
		
		
		var dataString = "title=" + encodeURIComponent(title) + "&title_id=" + encodeURIComponent(title_id) ;
		
		jQuery.post('process_add_basic.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-cash').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		$('.add-cash1').click(function(){
	$('.forms').slideUp();
				$('.form-add-cash1').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#desc_cash').val('');
				
			$('.form-add-cash1').slideUp('slow');

				});
				
	$('#form_submit_cash1').click(function(){
	
		var desc = $('#desc_cash').val();
		var title_id = $('#title_id').val();
		var point_id = $('#point_id').val();
		
		var dataString = "desc=" + encodeURIComponent(desc) + "&title_id=" + encodeURIComponent(title_id) + "&point_id=" + encodeURIComponent(point_id) ;
		
		jQuery.post('process_add_basic1.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-cash1').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		
		<!---------------3333333333------------------->
		
		$('.add-balance').click(function(){
	$('.forms').slideUp();
				$('.form-add-balance').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#title_balance').val('');
				
			$('.form-add-balance').slideUp('slow');

				});
				
	$('#form_submit_balance').click(function(){
	
		var title = $('#title_balance').val();
		var title_id = $('#title_id').val();
		
		
		var dataString = "title=" + encodeURIComponent(title) + "&title_id=" + encodeURIComponent(title_id);
		
		jQuery.post('process_add_basic.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-balance').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		
		$('.add-balance1').click(function(){
	$('.forms').slideUp();
				$('.form-add-balance1').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#desc_balance').val('');
				
			$('.form-add-balance1').slideUp('slow');

				});
				
	$('#form_submit_balance1').click(function(){
	
		var desc = $('#desc_balance').val();
		var title_id = $('#title_id').val();
		var point_id = $('#point_id').val();
		
		var dataString = "desc=" + encodeURIComponent(desc) + "&title_id=" + encodeURIComponent(title_id) + "&point_id=" + encodeURIComponent(point_id) ;
		
		jQuery.post('process_add_basic1.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-balance1').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		
		<!-----------------44444444444444------------>
		$('.add-withdraw').click(function(){
	$('.forms').slideUp();
				$('.form-add-withdraw').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#title_withdraw').val('');
				
			$('.form-add-withdraw').slideUp('slow');

				});
				
	$('#form_submit_withdraw').click(function(){
	
		var title = $('#title_withdraw').val();
		var title_id = $('#title_id').val();
		
		
		var dataString = "title=" + encodeURIComponent(title) + "&title_id=" + encodeURIComponent(title_id) ;
		
		jQuery.post('process_add_basic.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-withdraw').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		
		$('.add-withdraw1').click(function(){
	$('.forms').slideUp();
				$('.form-add-withdraw1').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#desc_withdraw').val('');
				
			$('.form-add-withdraw1').slideUp('slow');

				});
				
	$('#form_submit_withdraw1').click(function(){
	
		var desc = $('#desc_withdraw').val();
		var title_id = $('#title_id').val();
		var point_id = $('#point_id').val();
		
		var dataString = "desc=" + encodeURIComponent(desc) + "&title_id=" + encodeURIComponent(title_id) + "&point_id=" + encodeURIComponent(point_id) ;
		
		jQuery.post('process_add_basic1.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-withdraw1').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		
		<!--------------------555555555--------------------->
		
		$('.add-pin').click(function(){
	$('.forms').slideUp();
				$('.form-add-pin').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#title_pin').val('');
				
			$('.form-add-pin').slideUp('slow');

				});
				
	$('#form_submit_pin').click(function(){
	
		var title = $('#title_pin').val();
		var title_id = $('#title_id').val();
		
		
		var dataString = "title=" + encodeURIComponent(title) + "&title_id=" + encodeURIComponent(title_id) ;
		
		jQuery.post('process_add_basic.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-pin').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		
		$('.add-pin1').click(function(){
	$('.forms').slideUp();
				$('.form-add-pin1').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#desc_pin').val('');
				
			$('.form-add-pin1').slideUp('slow');

				});
				
	$('#form_submit_pin1').click(function(){
	
		var desc = $('#desc_pin').val();
		var title_id = $('#title_id').val();
		var point_id = $('#point_id').val();
		
		var dataString = "desc=" + encodeURIComponent(desc) + "&title_id=" + encodeURIComponent(title_id) + "&point_id=" + encodeURIComponent(point_id) ;
		
		jQuery.post('process_add_basic1.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-pin1').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
	
	<!-----------------------delete------------------->
	
	 $('.delWallet').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_wallet.php',
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
				 $('.delWallet1').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_wallet1.php',
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
				
				 $('.delCash').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_cash.php',
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
				 $('.delCash1').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_cash.php',
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
				
				 $('.delBalance').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_balance.php',
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
				 $('.delBalance1').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_balance1.php',
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
				
				 $('.delWithdraw').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_withdraw.php',
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
				 $('.delWithdraw1').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_withdraw1.php',
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
				
				 $('.delPin').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_pin.php',
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
				
				}); $('.delPin1').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_pin1.php',
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
		<h1>Edit Basic</h1>
	</div>
	<!-- end page-heading -->

	<div class="inner-second-half">
<div class="second-cont-spacing">

<!-----wallet------------>
					   <div align="center" class="form-add-wallet forms" style="display: none" >
<form name="add_form" id="add_form" >

<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add Title </strong></td>

</tr>
<tr>
<td align=""> <strong>Title&nbsp;<span class="compulsory">*</span></strong></td>
<td> <select name="title_id" id = "title_id">
<?php 
$sql_select_title = mysql_query(" SELECT * FROM `basic_titles` WHERE `flag` = 1 ");
while($result_select_title = mysql_fetch_array($sql_select_title))
{
?>
<option value="<?php echo $result_select_title['id'] ; ?> "><?php echo $result_select_title['title'] ; ?></option>
<?php
}
?>
</select>
</td>
</tr>


<tr>
<td align=""> <strong>Point&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="title" id="title" value="" size= "200" />
</td>
</tr>
 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_submit" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add_wallet"></div> </td> </tr>
</table>

</form>
</div>

					   <div align="center" class="form-add-wallet1 forms" style="display: none" >
<form name="add_form" id="add_form" >

<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add Points </strong></td>

</tr>
<tr>
<td align=""> <strong>Title&nbsp;<span class="compulsory">*</span></strong></td>
<td> <select name="title_id1" id = "title_id1">
<?php 
$sql_select_title = mysql_query(" SELECT * FROM `basic_titles` WHERE `flag` = 1 ");
while($result_select_title = mysql_fetch_array($sql_select_title))
{
?>
<option value="<?php echo $result_select_title['id'] ; ?> "><?php echo $result_select_title['title'] ; ?></option>
<?php
}
?>
</select>
</td>
</tr>

<tr>
<td align=""> <strong>Point&nbsp;<span class="compulsory">*</span></strong></td>
<td> <select name="point_id1" id= "point_id1">
<?php 
$sql_select_point = mysql_query(" SELECT * FROM `basic_titles` WHERE `flag` = 1 ");
while($result_select_point = mysql_fetch_array($sql_select_point))
{
?>
<option value="<?php echo $result_select_point['id'] ; ?> "><?php echo $result_select_point['title'] ; ?></option>
<?php
}
?>
</select>
</td>
</tr>


<tr>
<td align=""> <strong>Description&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="desc" id="desc" value="" size= "200" />
</td>
</tr>
 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_submit1" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add_wallet1"></div> </td> </tr>
</table>

</form>
</div>

<div id="st-accordion" class="st-accordion">
                    
                    <ul>
                    
                    <li>
                     <a href="#">Wallet Activation<span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
					  <div class = "add-wallet addbtn fright"><a href = "javascript:void(0)" > Add Point </a></div>
					  <div class = "add-wallet1 addbtn fright"><a href = "javascript:void(0)" > Add Description </a></div>
                       
                       <div class="contact-detail">
                       <?php
					   $sqlWallet = mysql_query("SELECT * FROM `basic_points` WHERE `title_id` = 1 AND `flag` = 1 ");
					   while($resultWallet = mysql_fetch_array($sqlWallet))
					   {
					   $point_id = $resultWallet['id'] ;
					   ?>
                       <p><strong><?php echo $resultWallet['point'] ; ?></strong> 
					   <a class="edit_button_wallet"  href="javascript:void(0)" 
						rel="<?php echo $resultWallet['id'] ?>" 
						bel="<?php echo $resultWallet['point']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="delWallet" href= "javascript:void(0)" rel= "<?php echo $resultWallet['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
					   <?php
					   
					   $sqlWallet1 = mysql_query(" SELECT * FROM `basic_descriptions` WHERE `point_id` = '$point_id' AND `flag` = '1' ");
					   while($resultWallet1 = mysql_fetch_array($sqlWallet1))
					   {
					   ?>
                      
                      <p class="listing"><?php echo $resultWallet1['desc'] ; ?>
					  <a class="edit_button_wallet1"  href="javascript:void(0)" 
						rel="<?php echo $resultWallet1['id'] ?>" 
						bel="<?php echo $resultWallet1['desc']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="delWallet1" href= "javascript:void(0)" rel= "<?php echo $resultWallet1['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
                      
                        <?php
					  } //desc
					  }// point
					  ?>
                      <div class="table-notes"><strong>Note:</strong> Union Bank of India takes minimum 5 working days to verify and activate a
UBM wallet</div>
                      
					  
					
                      </div>  
                               
                       </div>
                        </li>
                        
                        
                        
                        <li>
                     <a href="#">Wallet Cash-In<span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
					  <div class = "add-cash addbtn fright"><a href = "javascript:void(0)" > Add Point </a></div>
					  <div class = "add-cash1 addbtn fright"><a href = "javascript:void(0)" > Add Description </a></div>
                       
                       <div class="contact-detail">
                       
                       <p><strong>Approach nearby authorized UBM Agent and Cash-in your wallet</strong></p>

<p style="padding-left:20%;">OR</p>
<?php
					   $sqlCash = mysql_query("SELECT * FROM `basic_points` WHERE `title_id` = 2 AND `flag` = 1 ");
					   while($resultCash = mysql_fetch_array($sqlCash))
					   {
					   $point_id = $resultCash['id'] ;
					   ?>
                       <p><strong><?php echo $resultCash['point'] ; ?></strong> 
					   <a class="edit_button_cash"  href="javascript:void(0)" 
						rel="<?php echo $resultCash['id'] ?>" 
						bel="<?php echo $resultCash['point']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="delCash" href= "javascript:void(0)" rel= "<?php echo $resultCash['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
					   <?php
					   $sqlCash1 = mysql_query(" SELECT * FROM `basic_descriptions` WHERE `point_id` = '$point_id' AND `flag` = 1 ");
					   while($resultCash1 = mysql_fetch_array($sqlCash1))
					   {
					   ?>
                      
                      <p class="listing"><?php echo $resultCash1['desc'] ; ?>
					  <a class="edit_button_cash1"  href="javascript:void(0)" 
						rel="<?php echo $resultCash1['id'] ?>" 
						bel="<?php echo $resultCash1['desc']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="delCash1" href= "javascript:void(0)" rel= "<?php echo $resultCash1['desc'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>


  <?php
					  } //desc
					  }// point
					  ?>


<div class="table-chart4">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Feature </td>
    <td>Short description </td>
    <td>SMS syntax</td>
    <td>Example</td>
  </tr>
  <tr>
    <td>Get MMID

 </td>
    <td>Get the MMID number linked to your wallet. You will receive a SMS on your mobile
</td>
    <td>MMID</td>
    <td>MMID

</td>
  </tr>
  <tr>
    <td>Cancel MMID


 </td>
    <td>Cancel the MMID linked to your wallet</td>
   <td>MMIDCANCEL</td>   
   <td>MMIDCANCEL</td>
  </tr>
</table>
<br />
<br />


</div>

<p><strong>You will receive a confirmation SMS with cash-in details of the amount.</strong></p>

</div>  



                               
                       </div>
                        </li>
                        
                        
                        
                        <li>
                     <a href="#">Check Balance <span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
					  <div class = "add-balance addbtn fright"><a href = "javascript:void(0)" > Add Point </a></div>
					  <div class = "add-balance1 addbtn fright"><a href = "javascript:void(0)" > Add Description </a></div>
                      
                       <div class="contact-detail">
                       

					    <?php
					   $sqlBalance = mysql_query("SELECT * FROM `basic_points` WHERE `title_id` = 3 AND `flag` = 1 ");
					   while($resultBalance = mysql_fetch_array($sqlBalance))
					   {
					   $point_id = $resultBalance['id'] ;
					   ?>
                       <p><strong><?php echo $resultBalance['point'] ; ?></strong> 
					   <a class="edit_button_balance"  href="javascript:void(0)" 
						rel="<?php echo $resultBalance['id'] ?>" 
						bel="<?php echo $resultBalance['point']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="delBalance" href= "javascript:void(0)" rel= "<?php echo $resultBalance['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
					   <?php
					   $sqlBalance1 = mysql_query(" SELECT * FROM `basic_descriptions` WHERE `point_id` = '$point_id' AND `flag` = 1 ");
					   while($resultBalance1 = mysql_fetch_array($sqlBalance1))
					   {
					   ?>
					   
					   <p class="listing"><?php echo $resultBalance1['desc'] ; ?>
					   <a class="edit_button_balance1"  href="javascript:void(0)" 
						rel="<?php echo $resultBalance1['id'] ?>" 
						bel="<?php echo $resultBalance1['desc']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="delBalance" href= "javascript:void(0)" rel= "<?php echo $resultBalance1['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
           
					   
					     <?php
					  } //desc
					  }// point
					  ?>
					   
                        </div>
                      
                       
                         
                               
                       </div>
                        </li>
                        
                        
                        <li>
                     <a href="#">Withdraw Cash<span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
					  <div class = "add-cash addbtn fright"><a href = "javascript:void(0)" > Add Point </a></div>
					  <div class = "add-cash1 addbtn fright"><a href = "javascript:void(0)" > Add Description </a></div>
                       
                        <div class="contact-detail">
                        
                        <?php
					   $sqlWithdraw = mysql_query("SELECT * FROM `basic_points` WHERE `title_id` = 4 AND `flag` = 1 ");
					   while($resultWithdraw = mysql_fetch_array($sqlWithdraw))
					   {
					   $point_id = $resultWithdraw['id'] ;
					   ?>
                       <p><strong><?php echo $resultWithdraw['point'] ; ?></strong> 
					   <a class="edit_button_withdraw"  href="javascript:void(0)" 
						rel="<?php echo $resultWithdraw['id'] ?>" 
						bel="<?php echo $resultWithdraw['point']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="delWithdraw" href= "javascript:void(0)" rel= "<?php echo $resultWithdraw['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
					   <?php
					   $sqlWithdraw1 = mysql_query(" SELECT * FROM `basic_descriptions` WHERE `point_id` = '$point_id' AND `flag` = 1 ");
					   while($resultWithdraw1 = mysql_fetch_array($sqlWithdraw1))
					   {
					   ?>
					   
					   <p class="listing"><?php echo $resultWithdraw1['desc'] ; ?>
					   <a class="edit_button_withdraw1"  href="javascript:void(0)" 
						rel="<?php echo $resultWithdraw1['id'] ?>" 
						bel="<?php echo $resultWithdraw1['desc']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="delWithdraw1" href= "javascript:void(0)" rel= "<?php echo $resultWithdraw1['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
           
					   
					     <?php
					  } //desc
					  }// point
					  ?>
<div class="table-notes">* ATMs of all banks connected with National Financial Switch (NFS)</div>
                        
                        </div>
   
                       </div>
                        </li>
                        
                        
                        <li>
                     <a href="#">Manage mPIN<span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
					  <div class = "add-pin addbtn fright"><a href = "javascript:void(0)" > Add Point </a></div>
					  <div class = "add-pin1 addbtn fright"><a href = "javascript:void(0)" > Add Description </a></div>
                       
                        <div class="contact-detail">
                        
                         <?php
					   $sqlPin = mysql_query("SELECT * FROM `basic_points` WHERE `title_id` = 5 AND `flag` = 1 ");
					   while($resultPin = mysql_fetch_array($sqlPin))
					   {
					   $point_id = $resultPin['id'] ;
					   ?>
                       <p><strong><?php echo $resultPin['point'] ; ?></strong>
					   <a class="edit_button_pin"  href="javascript:void(0)" 
						rel="<?php echo $resultPin['id'] ?>" 
						bel="<?php echo $resultPin['point']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="delPin" href= "javascript:void(0)" rel= "<?php echo $resultPin['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
					   <?php
					   $sqlPin1 = mysql_query(" SELECT * FROM `basic_descriptions` WHERE `point_id` = '$point_id' AND `flag` = 1 ");
					   while($resultPin1 = mysql_fetch_array($sqlPin1))
					   {
					   ?>
					   
					   <p class="listing"><?php echo $resultPin1['desc'] ; ?>
					   <a class="edit_button_pin1"  href="javascript:void(0)" 
						rel="<?php echo $resultPin1['id'] ?>" 
						bel="<?php echo $resultPin1['desc']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="delPin1" href= "javascript:void(0)" rel= "<?php echo $resultPin1['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
           
					   
					     <?php
					  } //desc
					  }// point
					  ?>
                       </div>
                        </li>
                        
                        
                    
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
 
   <script type="text/javascript">
            $(function() {
			
				$('#st-accordion').accordion({
					oneOpenedItem	: true
				});
				
            });
        </script>

		
		
</body>
</html>