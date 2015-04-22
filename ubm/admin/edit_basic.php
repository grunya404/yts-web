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
	
				$('.form-add').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#title').val('');
				
			$('.form-add').slideUp('slow');

				});
				
	$('#form_submit').click(function(){
	
		var title = $('#title').val();
		var title_id = $('#title_id').val();
		
		//alert(title_id);
		var dataString = "title=" + encodeURIComponent(title)+ "&title_id=" + encodeURIComponent(title_id) ;
		
		jQuery.post('process_add_basic.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		$('.add-wallet1').click(function(){
	$('.forms').slideUp();
				$('.form-add1').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#desc').val('');
				
			$('.form-add1').slideUp('slow');

				});
				
	$('#form_submit1').click(function(){
	
		var desc = $('#desc').val();
		var title_id = $('#title_id1').val();
		var point_id = $('#point_id1').val();
		
		//alert(desc);
		//alert(point_id);
		var dataString = "desc=" + encodeURIComponent(desc) + "&title_id=" + encodeURIComponent(title_id) + "&point_id=" + encodeURIComponent(point_id) ;
		
		jQuery.post('process_add_basic1.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add1').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
	
	<!----------------edit--------------------->
	
	$('.edit_button').click(function(){
	var ids=$(this).attr('rel');
	var title=$(this).attr('bel');
	
	
	//alert(title_id);
	//alert(title);
	
	$('#edit_title_id').val(ids);
	$('#edit_title').val(title);
	
	
	$('.forms').slideUp();
	$('.edit-title-container').slideDown('slow');
	
	})
	
	$('.edit_cancel').click(function(){
	
	$('#edit_title').val('');
	
	
	$('.edit-title-container').slideUp('slow');
	
	})
	
		$('#edit_submit').click(function(){
			var ids=$('#edit_title_id').val();
			var title=$('#edit_title').val();
			
			//alert(ids);
			//alert(title);
			
		var dataString = "ids=" + encodeURIComponent(ids) + "&title=" + encodeURIComponent(title) ;
	//alert(dataString);
			jQuery.post('process_edit.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#edit_title').val('');

			$('.edit-title-container').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});
		
		$('.edit_button1').click(function(){
	var ids=$(this).attr('rel');
	var point=$(this).attr('bel');
	
	
	//alert(title_id);
	//alert(title);
	
	$('#edit_point_id').val(ids);
	$('#edit_point').val(point);
	
	
	$('.forms').slideUp();
	$('.edit-title-container1').slideDown('slow');
	
	})
	
	$('.edit_cancel').click(function(){
	
	$('#edit_point').val('');
	
	
	$('.edit-title-container1').slideUp('slow');
	
	})
	
		$('#edit_submit1').click(function(){
			var ids=$('#edit_point_id').val();
			var point=$('#edit_point').val();
			
			//alert(ids);
			//alert(point);
			
		var dataString = "ids=" + encodeURIComponent(ids) + "&point=" + encodeURIComponent(point) ;
	//alert(dataString);
			jQuery.post('process_edit1.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#edit_point').val('');
			
			
			
			$('.edit-title-container1').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});
		
		
	<!-----------------------delete------------------->
	
	 $('.del').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete.php',
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
				
	 $('.del1').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete1.php',
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
				
				
				var titless='';
				
				//select title
				var titles=$('#title_id1').val();
				$('#point_id1 > option').each(function(){
					if($(this).attr('rel')==titles)
					{
						$(this).show()
					}
					else
					{
						$(this).hide();
					}
				
				})		
				$('#title_id1').change(function(){
					 titless=$(this).val();
					
					$('#point_id1').val('');
					$('#point_id1 > option').each(function(){
						
						if($(this).attr('rel')==titless)
						{
						
							$(this).show()
						}
						else
						{
						
							$(this).hide();
						}
						
					})
					
					
				})
				
				
				<!------------------ffffffffffffffff44444444444----------->
$('.add-table').click(function(){
$('.forms').slideUp();
			$('.li-height2').height(function (index, height) {
    return (height + 500);
});
				$('.form-add-table').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#feature').val('');
				$('#desc').val('');
				$('#sms').val('');
				$('#example').val('');
			$('.form-add-table').slideUp('slow');

				});
				
	$('#form_submit_table').click(function(){
	
		var feature = $('#feature').val();
		var desc = $('#basic_desc').val();
		var sms = $('#sms').val();
		var example = $('#example').val();
		var dataString = "feature=" + encodeURIComponent(feature) + "&desc=" + encodeURIComponent(desc) + "&sms=" + encodeURIComponent(sms) + "&example=" + encodeURIComponent(example) ;
		
		//alert(feature);
		jQuery.post('process_add_feature.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-table').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		
		
		$('.edit_button_table').click(function(){
	var ids=$(this).attr('rel');
	var feature=$(this).attr('bel');
	var desc=$(this).attr('mel');
	var sms=$(this).attr('sel');
	var example=$(this).attr('hel');
	
	alert(ids);
	//alert(title);
	
	$('#edit_id_feature').val(ids);
	$('#edit_feature').val(feature);
	$('#edit_desc').val(desc);
	$('#edit_sms').val(sms);
	$('#edit_example').val(example);
	
	$('.forms').slideUp();
				$('.li-height2').height(function (index, height) {
    return (height + 500);
});
	$('.edit-title-table').slideDown('slow');
	
	})
	
	$('.edit_cancel').click(function(){
	
	$('#edit_feature').val('');
	$('#edit_desc').val('');
	$('#edit_sms').val('');
	$('#edit_example').val('');
	
	$('.edit-title-table').slideUp('slow');
	
	})
	
		$('#edit_submit_table').click(function(){
			var ids=$('#edit_id_feature').val();
			var feature=$('#edit_feature').val();
			var desc=$('#edit_desc').val();
			var sms=$('#edit_sms').val();
			var example=$('#edit_example').val();
			//alert(desc);
			//alert(title);
			
		var dataString = "ids=" + encodeURIComponent(ids) + "&feature=" + encodeURIComponent(feature) + "&desc=" + encodeURIComponent(desc) + "&sms=" + encodeURIComponent(sms) + "&example=" + encodeURIComponent(example) ;
	//alert(dataString);
			jQuery.post('process_edit_feature.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#edit_feature').val('');
			$('#edit_desc').val('');
			$('#edit_sms').val('');
			$('#edit_example').val('');
			
			
			$('.edit-title-table').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});

 $('.del_table').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_feature.php',
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
					   <div align="center" class="form-add forms" style="display: none" >
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
<option value="<?php echo $result_select_title['id'] ; ?>"><?php echo $result_select_title['title'] ; ?></option>
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

					   <div align="center" class="form-add1 forms" style="display: none" >
<form name="add_form" id="add_form" >

<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add Points </strong></td>

</tr>
<tr>
<td align=""> <strong>Title&nbsp;<span class="compulsory">*</span></strong></td>
<td> <select name="title_id1" id = "title_id1">
<option value= "" >Select Title</option>
<?php 
$sql_select_title = mysql_query(" SELECT * FROM `basic_titles` WHERE `flag` = 1 ");
while($result_select_title = mysql_fetch_array($sql_select_title))
{
?>
<option value="<?php echo $result_select_title['id'] ; ?>"><?php echo $result_select_title['title'] ; ?></option>
<?php
}
?>
</select>
</td>
</tr>

<tr>
<td align=""> <strong>Point&nbsp;<span class="compulsory">*</span></strong></td>
<td> <select name="point_id1" id= "point_id1">
<option rel="" value= "" >Select Point</option>
<?php 
$sql_select_point = mysql_query(" SELECT * FROM `basic_points` WHERE `flag` = 1  ");
while($result_select_point = mysql_fetch_array($sql_select_point))
{
?>
<option rel= "<?php echo $result_select_point['title_id'] ; ?>" value="<?php echo $result_select_point['id'] ; ?> "><?php echo $result_select_point['point'] ; ?></option>
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

<!-----------------edit------------------>

<div class = "container-up edit-title-container forms" style="display:none" align="center">
<form name="edit_form"  class="edit_form" >
<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Title</strong></td>
</tr>
<input type="hidden" value="" id="edit_title_id" name="edit_title_id" />
			<tr>
			<td>Edit Title</td>
			<td><input type="text" id="edit_title" name="edit_title"  />
			</td></tr>
			<tr>

			<tr><td align="right"><a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>&nbsp;&nbsp;<td><a id="edit_submit" class="btn" href="javascript:void(0)">Submit</a></td></tr>


 <tr> <td colspan="2"><div id="msg3"></div> </td> </tr>
</table>
</form> 
</div>

<div class = "container-up edit-title-container1 forms" style="display:none" align="center">
<form name="edit_form"  class="edit_form" >
<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Point</strong></td>
</tr>
<input type="hidden" value="" id="edit_point_id" name="edit_point_id" />
			<tr>
			<td>Edit Point</td>
			<td><input type="text" id="edit_point" name="edit_point"  />
			</td></tr>
			<tr>
	
			<tr><td align="right"><a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>&nbsp;&nbsp;<td><a id="edit_submit1" class="btn" href="javascript:void(0)">Submit</a></td></tr>


 <tr> <td colspan="2"><div id="msg3"></div> </td> </tr>
</table>
</form> 
</div>


<div id="st-accordion" class="st-accordion">
                    
                    <ul>
                    
                    <li>
                     <a href="#">Wallet Activation<span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
					  <div class = "add-wallet addbtn fright"><a href = "javascript:void(0)" > Add Point </a></div>
					  <div class = "add-wallet1 addbtn fright"><a href = "javascript:void(0)" > Add Desc </a></div>
                       
                       <div class="contact-detail">
                       <?php
					   $sqlWallet = mysql_query("SELECT * FROM `basic_points` WHERE `title_id` = 1 AND `flag` = 1 ");
					   while($resultWallet = mysql_fetch_array($sqlWallet))
					   {
					   $point_id = $resultWallet['id'] ;
					   ?>
                       <p><strong><?php echo $resultWallet['point'] ; ?></strong> &nbsp;&nbsp;&nbsp;
					   <a class="edit_button"  href="javascript:void(0)" 
						rel="<?php echo $resultWallet['id'] ?>" 
						bel="<?php echo $resultWallet['point']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="del" href= "javascript:void(0)" rel= "<?php echo $resultWallet['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
					   <?php
					   
					   $sqlWallet1 = mysql_query(" SELECT * FROM `basic_descriptions` WHERE `point_id` = '$point_id' AND `flag` = '1' ");
					   while($resultWallet1 = mysql_fetch_array($sqlWallet1))
					   {
					   ?>
                      
                      <p class="listing"><?php echo $resultWallet1['desc'] ; ?>&nbsp;&nbsp;&nbsp;
					  <a class="edit_button1"  href="javascript:void(0)" 
						rel="<?php echo $resultWallet1['id'] ?>" 
						bel="<?php echo $resultWallet1['desc']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="del1" href= "javascript:void(0)" rel= "<?php echo $resultWallet1['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
                      
                        <?php
					  } //desc
					  }// point
					  ?>
                      <div class="table-notes"><strong>Note:</strong> Union Bank of India takes minimum 5 working days to verify and activate a
UBM wallet</div>
                      
					  
					
                      </div>  
                               
                       </div>
                        </li>
                        
                        
                        
                        <li class= "li-height2">
                     <a href="#">Wallet Cash-In<span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
					  <div class = "add-wallet addbtn fright"><a href = "javascript:void(0)" > Add Point </a></div>
					  <div class = "add-wallet1 addbtn fright"><a href = "javascript:void(0)" > Add Desc </a></div>
                       
                       <div class="contact-detail">
                       <div class = "add-table addbtn fright"><a href = "javascript:void(0)" > Add Feature </a></div>
                       <p><strong>Approach nearby authorized UBM Agent and Cash-in your wallet</strong></p>

<p style="padding-left:20%;">OR</p>
<?php
					   $sqlCash = mysql_query("SELECT * FROM `basic_points` WHERE `title_id` = 2 AND `flag` = 1 ");
					   while($resultCash = mysql_fetch_array($sqlCash))
					   {
					   $point_id = $resultCash['id'] ;
					   ?>
                       <p><strong><?php echo $resultCash['point'] ; ?></strong> &nbsp;&nbsp;&nbsp;
					   <a class="edit_button"  href="javascript:void(0)" 
						rel="<?php echo $resultCash['id'] ?>" 
						bel="<?php echo $resultCash['point']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="del" href= "javascript:void(0)" rel= "<?php echo $resultCash['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
					   <?php
					   $sqlCash1 = mysql_query(" SELECT * FROM `basic_descriptions` WHERE `point_id` = '$point_id' AND `flag` = 1 ");
					   while($resultCash1 = mysql_fetch_array($sqlCash1))
					   {
					   ?>
                      
                      <p class="listing"><?php echo $resultCash1['desc'] ; ?>&nbsp;&nbsp;&nbsp;
					  <a class="edit_button1"  href="javascript:void(0)" 
						rel="<?php echo $resultCash1['id'] ?>" 
						bel="<?php echo $resultCash1['desc']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="del1" href= "javascript:void(0)" rel= "<?php echo $resultCash1['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>


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
  
  <?php
  $sql_table = mysql_query(" SELECT * FROM `basic_cash` WHERE `flag` = 1 " );
  while($result_table = mysql_fetch_array($sql_table))
  {
  ?>
  <tr>
    <td><?php echo $result_table['feature']; ?></td>
    <td><?php echo $result_table['desc']; ?></td>
    <td><?php echo $result_table['sms']; ?></td>
    <td><?php echo $result_table['example']; ?></td>
	<td><a class="edit_button_table"  href="javascript:void(0)" 
			rel="<?php echo $result_table['id'] ?>" 
			bel="<?php echo $result_table['feature']; ?>" 
			mel="<?php echo $result_table['desc']; ?>"			
			sel="<?php echo $result_table['sms']; ?>"			
			hel="<?php echo $result_table['example']; ?>"			
		 ><img src="images/edit.png" style="width:16px" /></a></td>
		 <td><a class="del_table" href= "javascript:void(0)" rel= "<?php echo $result_table['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></td>
  </tr>
  
  <?php
  }
  ?>

</table>
<p><strong>You will receive a confirmation SMS with cash-in details of the amount.</strong></p>

</div>  


<div class = "container-up edit-title-table forms" style="display:none" align="center">
<form name="edit_form"  class="edit_form" >
<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Charge</strong></td>
</tr>

<input type="hidden" value="" id="edit_id_feature" name="edit_id_feature3" />
			<tr>
			<td>Feature</td>
			<td><input type="text" id="edit_feature" name="edit_feature3"  />
			</td></tr>
			<tr>
			<td>Description</td>
			<td><textarea id="edit_desc" name="edit_desc" rows ="4" style="width:450px" ></textarea>
			</td></tr>
			<tr>
			<td>SMS</td>
			<td><input type="text" id="edit_sms" name="edit_sms"  />
			</td></tr>
			<tr>
			<td>Example</td>
			<td><input type="text" id="edit_example" name="edit_example"  />
			</td></tr>
	
			<tr><td align="right"><a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>&nbsp;&nbsp;<td><a id="edit_submit_table" class="btn" href="javascript:void(0)">Submit</a></td></tr>


 <tr> <td colspan="2"><div id="msg3"></div> </td> </tr>
</table>
</form> 
</div>


<div align="center" class="form-add-table forms" style="display: none" >
<form name="add_form" id="add_form" >

<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add </strong></td>

</tr>
<tr>
<td align=""> <strong>Feature&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="feature" id="feature" value=""/>
</td>
</tr>
<tr>
<td align=""> <strong>Description&nbsp;<span class="compulsory">*</span></strong></td>
<td> <textarea name="basic_desc" id="basic_desc" value="" rows= "4" style="width:450px " >
</textarea>
</td>
</tr>
<tr>
<td align=""> <strong>SMS&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="sms" id="sms" value=""/>
</td>
</tr>
<tr>
<td align=""> <strong>Example&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="example" id="example" value=""/>
</td>
</tr>

 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_submit_table" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add3"></div> </td> </tr>
</table>

</form>
</div>
</div>





                               
                       </div>
                        </li>
                        
                        
                        
                        <li>
                     <a href="#">Check Balance <span class="st-arrow">Open or Close</span></a>
                      <div class="st-content">
					  <div class = "add-wallet addbtn fright"><a href = "javascript:void(0)" > Add Point </a></div>
					  <div class = "add-wallet1 addbtn fright"><a href = "javascript:void(0)" > Add Desc </a></div>
                      
                       <div class="contact-detail">
                       

					    <?php
					   $sqlBalance = mysql_query("SELECT * FROM `basic_points` WHERE `title_id` = 3 AND `flag` = 1 ");
					   while($resultBalance = mysql_fetch_array($sqlBalance))
					   {
					   $point_id = $resultBalance['id'] ;
					   ?>
                       <p><strong><?php echo $resultBalance['point'] ; ?></strong> &nbsp;&nbsp;&nbsp;
					   <a class="edit_button"  href="javascript:void(0)" 
						rel="<?php echo $resultBalance['id'] ?>" 
						bel="<?php echo $resultBalance['point']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="del" href= "javascript:void(0)" rel= "<?php echo $resultBalance['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
					   <?php
					   $sqlBalance1 = mysql_query(" SELECT * FROM `basic_descriptions` WHERE `point_id` = '$point_id' AND `flag` = 1 ");
					   while($resultBalance1 = mysql_fetch_array($sqlBalance1))
					   {
					   ?>
					   
					   <p class="listing"><?php echo $resultBalance1['desc'] ; ?>&nbsp;&nbsp;&nbsp;
					   <a class="edit_button1"  href="javascript:void(0)" 
						rel="<?php echo $resultBalance1['id'] ?>" 
						bel="<?php echo $resultBalance1['desc']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="del" href= "javascript:void(0)" rel= "<?php echo $resultBalance1['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
           
					   
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
					  <div class = "add-wallet addbtn fright"><a href = "javascript:void(0)" > Add Point </a></div>
					  <div class = "add-wallet1 addbtn fright"><a href = "javascript:void(0)" > Add Desc </a></div>
                       
                        <div class="contact-detail">
                        
                        <?php
					   $sqlWithdraw = mysql_query("SELECT * FROM `basic_points` WHERE `title_id` = 4 AND `flag` = 1 ");
					   while($resultWithdraw = mysql_fetch_array($sqlWithdraw))
					   {
					   $point_id = $resultWithdraw['id'] ;
					   ?>
                       <p><strong><?php echo $resultWithdraw['point'] ; ?></strong> &nbsp;&nbsp;&nbsp;
					   <a class="edit_button"  href="javascript:void(0)" 
						rel="<?php echo $resultWithdraw['id'] ?>" 
						bel="<?php echo $resultWithdraw['point']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="del" href= "javascript:void(0)" rel= "<?php echo $resultWithdraw['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
					   <?php
					   $sqlWithdraw1 = mysql_query(" SELECT * FROM `basic_descriptions` WHERE `point_id` = '$point_id' AND `flag` = 1 ");
					   while($resultWithdraw1 = mysql_fetch_array($sqlWithdraw1))
					   {
					   ?>
					   
					   <p class="listing"><?php echo $resultWithdraw1['desc'] ; ?>&nbsp;&nbsp;&nbsp;
					   <a class="edit_button1"  href="javascript:void(0)" 
						rel="<?php echo $resultWithdraw1['id'] ?>" 
						bel="<?php echo $resultWithdraw1['desc']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="del1" href= "javascript:void(0)" rel= "<?php echo $resultWithdraw1['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
           
					   
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
					  <div class = "add-wallet addbtn fright"><a href = "javascript:void(0)" > Add Point </a></div>
					  <div class = "add-wallet1 addbtn fright"><a href = "javascript:void(0)" > Add Desc </a></div>
                       
                        <div class="contact-detail">
                        
                         <?php
					   $sqlPin = mysql_query("SELECT * FROM `basic_points` WHERE `title_id` = 5 AND `flag` = 1 ");
					   while($resultPin = mysql_fetch_array($sqlPin))
					   {
					   $point_id = $resultPin['id'] ;
					   ?>
                       <p><strong><?php echo $resultPin['point'] ; ?></strong>&nbsp;&nbsp;&nbsp;
					   <a class="edit_button"  href="javascript:void(0)" 
						rel="<?php echo $resultPin['id'] ?>" 
						bel="<?php echo $resultPin['point']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="del" href= "javascript:void(0)" rel= "<?php echo $resultPin['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
					   <?php
					   $sqlPin1 = mysql_query(" SELECT * FROM `basic_descriptions` WHERE `point_id` = '$point_id' AND `flag` = 1 ");
					   while($resultPin1 = mysql_fetch_array($sqlPin1))
					   {
					   ?>
					   
					   <p class="listing"><?php echo $resultPin1['desc'] ; ?>&nbsp;&nbsp;&nbsp;
					   <a class="edit_button1"  href="javascript:void(0)" 
						rel="<?php echo $resultPin1['id'] ?>" 
						bel="<?php echo $resultPin1['desc']; ?>" 			
						><img src="images/edit.png" style="width:16px" /></a>&nbsp;&nbsp;&nbsp;
						<a class="del1" href= "javascript:void(0)" rel= "<?php echo $resultPin1['id'] ; ?>"><img src="images/delete.png" style="width:16px" /></a></p>
           
					   
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