<?php 
include('includes/config.php');
include('includes/session.php');

$sqlLeft = mysql_query(" SELECT * FROM `top_up` WHERE `flag` = 1 AND `column` = 1 ");
$sqlRight = mysql_query(" SELECT * FROM `top_up` WHERE `flag` = 1 AND `column` = 2 ");

$sql = mysql_query(" SELECT * FROM `top_up_feature` WHERE `flag` = 1 ");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin-Mobile Top-Up</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<link href="css/ubm-style.css" rel="stylesheet" media="screen"/>
 <link rel="stylesheet" type="text/css" href="css/acc.css" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery.min.js"></script>

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

<!-----------------add --------------------->
	
				$('.add-div').click(function(){
				$('.forms').slideUp();
				$('.form-add-div').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#operator').val('');
				$('#code').val('');
				$('#column').val('');
			$('.form-add-div').slideUp('slow');

				});
				
	$('#form_submit').click(function(){
	
		var operator = $('#operator').val();
		var code = $('#code').val();
		var column = $('#column').val();
		
		var dataString = "operator=" + encodeURIComponent(operator) + "&code=" + encodeURIComponent(code) + "&column=" + encodeURIComponent(column) ;
		
		jQuery.post('process_add_top_up.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-div').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		
		
		$('.add-div-feature').click(function(){
		$('.forms').slideUp();
				$('.form-add-div-feature').slideDown('slow');
					});
				
				$('.edit_cancel').click(function(){
				$('#feature').val('');
				$('#desc').val('');
				$('#sms').val('');
				$('#example').val('');
			$('.form-add-div-feature').slideUp('slow');

				});
				
	$('#form_submit_feature').click(function(){
	
		var feature = $('#feature').val();
		var desc = $('#desc').val();
		var sms = $('#sms').val();
		var example = $('#example').val();
		var dataString = "feature=" + encodeURIComponent(feature) + "&desc=" + encodeURIComponent(desc) + "&sms=" + encodeURIComponent(sms) + "&example=" + encodeURIComponent(example) ;
		
		jQuery.post('process_add_top_up_feature.php', dataString, function(data){
		//alert(data);
			if(data==1)
			{

			$('.form-add-div-feature').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
		
	<!---------------edit--------------------->

$('.edit_button').click(function(){
	var ids=$(this).attr('rel');
	var operator=$(this).attr('bel');
	var code=$(this).attr('mel');
	var columns=$(this).attr('sel');

	$('#edit_id').val(ids);
	$('#edit_operator').val(operator);
	$('#edit_code').val(code);
	$('#edit_column').val(columns);
	
	$('.forms').slideUp();
	$('.edit-title-container').slideDown('slow');
	
	})
	
	$('.edit_cancel').click(function(){
	
	$('#edit_operator').val('');
	$('#edit_code').val('');
	$('#edit_column').val('');
	
	$('.edit-title-container').slideUp('slow');
	
	})
	
		$('#edit_submit').click(function(){
			var ids=$('#edit_id').val();
			var operator=$('#edit_operator').val();
			var code=$('#edit_code').val();
			var columns=$('#edit_column').val();
			//alert(title_id);
			//alert(title);
			
		var dataString = "ids=" + encodeURIComponent(ids) + "&operator=" + encodeURIComponent(operator) + "&code=" + encodeURIComponent(code) + "&columns=" + encodeURIComponent(columns) ;
	//alert(dataString);
			jQuery.post('process_edit_top_up.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#edit_operator').val('');
			$('#edit_code').val('');
			$('#edit_column').val('');
			
			
			$('.edit-title-container').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});
		
		
		$('.edit_button_feature').click(function(){
	var ids=$(this).attr('rel');
	var feature=$(this).attr('bel');
	var desc=$(this).attr('mel');
	var sms=$(this).attr('sel');
	var example=$(this).attr('hel');
	
	//alert(title_id);
	//alert(title);
	
	$('#edit_id').val(ids);
	$('#edit_feature').val(feature);
	$('#edit_desc').val(desc);
	$('#edit_sms').val(sms);
	$('#edit_example').val(example);
	
	$('.forms').slideUp();
	$('.edit-title-container-feature').slideDown('slow');
	
	})
	
	$('.edit_cancel').click(function(){
	
	$('#edit_feature').val('');
	$('#edit_desc').val('');
	$('#edit_sms').val('');
	$('#edit_example').val('');
	
	$('.edit-title-container-feature').slideUp('slow');
	
	})
	
		$('#edit_submit_feature').click(function(){
			var ids=$('#edit_id').val();
			var feature=$('#edit_feature').val();
			var desc=$('#edit_desc').val();
			var sms=$('#edit_sms').val();
			var example=$('#edit_example').val();
			//alert(title_id);
			//alert(title);
			
		var dataString = "ids=" + encodeURIComponent(ids) + "&feature=" + encodeURIComponent(feature) + "&desc=" + encodeURIComponent(desc) + "&sms=" + encodeURIComponent(sms) + "&example=" + encodeURIComponent(example) ;
	//alert(dataString);
			jQuery.post('process_edit_top_up_feature.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#edit_feature').val('');
			$('#edit_desc').val('');
			$('#edit_sms').val('');
			$('#edit_example').val('');
			
			
			$('.edit-title-container-feature').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});
	<!------------------delete--------------------------->	
	
	 $('.del').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_top_up.php',
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
				url: 'ajax_delete_top_up_feature.php',
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
		<h1>Edit Top-Up</h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start -content  -->
	
		<div class="inner-second-half">

		<div class = "add-div-feature addbtn fright"><a href = "javascript:void(0)" > Add Features </a></div>
<div class = "add-div addbtn fright"><a href = "javascript:void(0)" > Add Codes </a></div>

<div class = "container-up edit-title-container forms" style="display:none" align="center">
<form name="edit_form"  class="edit_form" >
<table width="60%" style="margin: 50px;margin-left: 165px" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Charge</strong></td>
</tr>

<input type="hidden" value="" id="edit_id" name="edit_id" />
			<tr>
			<td>Operator</td>
			<td><input type="text" id="edit_operator" name="edit_operator"  />
			</td></tr>
			<tr>
			<td>Short code</td>
			<td><input type= "text" id="edit_code" name="edit_code" />
			</td></tr>
			<tr>
			<td>Column</td>
			<td><input type="text" id="edit_column" name="edit_column"  />
			</td></tr>
	
			<tr><td align="right"><a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>&nbsp;&nbsp;<td><a id="edit_submit" class="btn" href="javascript:void(0)">Submit</a></td></tr>


 <tr> <td colspan="2"><div id="msg"></div> </td> </tr>
</table>
</form> 
</div>

<div align="center" class="form-add-div forms" style="display: none" >
<form name="add_form" id="add_form" >

<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add </strong></td>

</tr>
<tr>
<td align=""> <strong>Operator&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="operator" id="operator" value=""/>
</td>
</tr>
<tr>
<td align=""> <strong>Short Code &nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type= "text" name="code" id="code" value="" />

</td>
</tr>
<tr>
<td align=""> <strong>Column&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="column" id="column" value=""/>
</td>
</tr>

 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_submit" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add"></div> </td> </tr>
</table>

</form>
</div>

<!-------------Feature------------------>


<div class = "container-up edit-title-container-feature forms" style="display:none" align="center">
<form name="edit_form"  class="edit_form" >
<table width="60%" style="margin: 50px;margin-left: 165px" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Charge</strong></td>
</tr>

<input type="hidden" value="" id="edit_id" name="edit_id" />
			<tr>
			<td>Feature</td>
			<td><input type="text" id="edit_feature" name="edit_feature"  />
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
	
			<tr><td align="right"><a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>&nbsp;&nbsp;<td><a id="edit_submit_feature" class="btn" href="javascript:void(0)">Submit</a></td></tr>


 <tr> <td colspan="2"><div id="msg1"></div> </td> </tr>
</table>
</form> 
</div>

<div align="center" class="form-add-div-feature forms" style="display: none" >
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
<td> <textarea name="desc" id="desc" value="" rows= "4" style="width:450px " >
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
  <td><a id="form_submit_feature" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add1"></div> </td> </tr>
</table>

</form>
</div>



<div class="second-cont-spacing">

<h2>&nbsp;</h2>
<div class="table-chart1">
<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td>Features</td>
    <td>Short Description</td>
    <td>SMS Syntax</td>
    <td>Example</td>
  </tr>
  <?php
while($result = mysql_fetch_array($sql))
{
?> 
  <tr>
    <td><?php echo $result['feature'] ; ?></td>
    <td><?php echo $result['desc'] ; ?></td>
    <td><?php echo $result['sms'] ; ?></td>
    <td><?php echo $result['example'] ; ?></td>
	<td><a class="edit_button_feature"  href="javascript:void(0)" 
			rel="<?php echo $result['id'] ?>" 
			bel="<?php echo $result['feature']; ?>" 
			mel="<?php echo $result['desc']; ?>"			
			sel="<?php echo $result['sms']; ?>"			
			hel="<?php echo $result['example']; ?>"			
		 ><img src="images/edit.png" width="16" /></a></td>
		 <td><a class="del1" href= "javascript:void(0)" rel= "<?php echo $result['id'] ; ?>"><img src="images/delete.png" width="16" /></a></td>
  </tr>
  <?php
  }
  ?>
</table>
</div>

<div class="page-title" style="margin-top:20px; border-top:solid 2px #333092; padding-top:15px; margin-right:5%;"><h1>Operator Short Codes</h1></div>

<div>

<div class="table-chart4">
<table border="0" cellspacing="0" cellpadding="0" width="50%" style= "float:left">
  <tr>
    <td>Operator </td>
    <td>Short Code</td>
  </tr>
  <?php
  while($resultLeft = mysql_fetch_array($sqlLeft))
  {
  ?>
  <tr>
    <td><?php echo $resultLeft['operator'] ; ?></td>
    <td><?php echo $resultLeft['code'] ; ?></td>
		<td><a class="edit_button"  href="javascript:void(0)" 
			rel="<?php echo $resultLeft['id'] ?>" 
			bel="<?php echo $resultLeft['operator']; ?>" 
			mel="<?php echo $resultLeft['code']; ?>"					
			sel="<?php echo $resultLeft['column']; ?>"					
		 ><img src="images/edit.png" width="16" /></a></td>
		 <td style="border-right:solid 2px #333092"><a class="del" href= "javascript:void(0)" rel= "<?php echo $resultLeft['id'] ; ?>"><img src="images/delete.png" width="16" /></a></td>
 
  </tr>
<?php
}
?>
</table>
</div>

<div class="table-chart4">
<table border="0" cellspacing="0" cellpadding="0" width="50%" style= "float:left; margin-top:-2px;">
  <tr>

    <td>Operator</td>
    <td>Short Code</td>
  </tr>
  
    <?php
  while($resultRight = mysql_fetch_array($sqlRight))
  {
  ?>
  <tr>
    <td><?php echo $resultRight['operator'] ; ?></td>
    <td><?php echo $resultRight['code'] ; ?></td>
		<td><a class="edit_button"  href="javascript:void(0)" 
			rel="<?php echo $resultRight['id'] ?>" 
			bel="<?php echo $resultRight['operator']; ?>" 
			mel="<?php echo $resultRight['code']; ?>"
			sel="<?php echo $resultRight['column']; ?>"			
		 ><img src="images/edit.png" width="16" /></a></td>
		 <td ><a class="del" href= "javascript:void(0)" rel= "<?php echo $resultRight['id'] ; ?>"><img src="images/delete.png" width="16" /></a></td>
  </tr>
<?php
}
?>
</table>


</div>
<div class="clear"></div>
</div>          

</div>



</div>
			<!--  end -content  -->
	
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
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