<?php 
include('includes/config.php');
include('includes/session.php');
$sqlTitle = mysql_query("SELECT * FROM limit_title");
$sqlRow = mysql_query("SELECT * FROM limit_row WHERE `flag` = 1 ");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin-Limits</title>
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

<!---------- DIV ------------->
	 $('.add-div').click(function(){
		
        var location = $(this).val();
        div = $('#' + location);

		$('.forms').slideUp();
		$('.form-add-div').stop().slideDown('slow');
       // $('#show_add').show();
	   
       
    }); 
		 $('.add-div-row').click(function(){
		
        var location = $(this).val();
        div = $('#' + location);

		$('.forms').slideUp();
		$('.form-add-div-row').stop().slideDown('slow');
       // $('#show_add').show();
	   
       
    }); 
	
		 $('.add-div-point').click(function(){
		
        var location = $(this).val();
        div = $('#' + location);

		$('.forms').slideUp();
		$('.form-add-div-point').stop().slideDown('slow');
       // $('#show_add').show();
	   
       
    });
	
	
		
		$('.edit_cancel').click(function(){
	
	$('.form-add-div').slideUp('slow');
	$('.form-add-div-row').slideUp('slow');
	$('.form-add-div-point').slideUp('slow');
	
	})
	
	<!--------submit ------------->
	$('#form_point_submit').click(function(){
			var title_id=$('#select_title').val();
			var row_id=$('#select_row').val();
			var lite_min=$('#lite_min').val();
			var lite_max=$('#lite_max').val();
			var lite_daily=$('#lite_daily').val();
			var smart_min=$('#smart_min').val();
			var smart_max=$('#smart_max').val();
			var smart_daily=$('#smart_daily').val();
			//alert(point_id);
			//alert(title);
			
		var dataString = "title_id=" + encodeURIComponent(title_id) + "&row_id=" + encodeURIComponent(row_id)
		+ "&lite_min=" + encodeURIComponent(lite_min) + "&lite_max=" + encodeURIComponent(lite_max) + "&lite_daily=" + encodeURIComponent(lite_daily) + "&smart_min=" + encodeURIComponent(smart_min) + "&smart_max=" + encodeURIComponent(smart_max) + "&smart_daily=" + encodeURIComponent(smart_daily);
	//alert(dataString);
			jQuery.post('process_add_row_point.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{

			$('.edit-point-container').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});
		
		$('#form_title_submit').click(function(){
		var title = $('#title').val();
		var dataString = "title=" + encodeURIComponent(title);
		
		jQuery.post('process_add_limit_title.php', dataString, function(data){
			if(data==1)
			{

			$('.form-add-div').slideUp('slow');
			window.location.reload();
			}
		
		});
		
		});
	
		
		$('#form_row_submit').click(function(){
		var row_title = $('#row_title').val();
		var title_id = $('#select_title_row').val();
	
		var dataString = "row_title=" + encodeURIComponent(row_title) + "&title_id=" + encodeURIComponent(title_id);
		
		jQuery.post('process_add_row_title.php', dataString, function(data){
			if(data==1)
			{

			$('.form-add-div-row').slideUp('slow');
			window.location.reload();
			}
		
		});
		
		});
	
	<!----------------edit------------------------>
	
	$('.edit_title').click(function(){
	var title_id=$(this).attr('rel');
	var title=$(this).attr('bel');
	
	
	//alert(point_id);
	//alert(point);
	
	$('#title_id').val(title_id);
	$('#edit_title').val(title);
	
	$('.edit-title-container').slideDown('slow');
	
	})
	
	$('.edit_cancel').click(function(){
	
	
	$('.edit-title-container').slideUp('slow');
	
	})
	
		$('#edit_submit_title').click(function(){
			var title_id=$('#title_id').val();
			var title=$('#edit_title').val();
			
			
		var dataString = "title_id=" + encodeURIComponent(title_id) + "&title=" + encodeURIComponent(title);
	//alert(dataString);
			jQuery.post('process_edit_limit_title.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#title').val('');
			
			$('.edit-title-container').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});
		
		
		$('.edit_point').click(function(){
	var ids =parseInt($(this).attr('rel'));  
	var row_id =$(this).attr('tel');
	//alert(row_id);

		
	var liteMin_id = $(this).attr('mel'+ids);
	var liteMin = $(this).attr('bel'+ids);
	
	var liteMax_id = $(this).attr('mel'+(ids+1));
	var liteMax = $(this).attr('bel'+(ids+1));
	//alert(liteMax);
	
	var liteDaily_id = $(this).attr('mel'+(ids+2));
	var liteDaily = $(this).attr('bel'+(ids+2));
	
	var smartMin_id = $(this).attr('mel'+(ids+3));
	var smartMin = $(this).attr('bel'+(ids+3));
	//alert(smartMin);
	
	var smartMax_id = $(this).attr('mel'+(ids+4));
	var smartMax = $(this).attr('bel'+(ids+4));
	//alert(smartMax);
	
	var smartDaily_id = $(this).attr('mel'+(ids+5));
	var smartDaily = $(this).attr('bel'+(ids+5));
	//alert(smartDaily_id);
	
	$('#row_ids').val(row_id);
	
	$('#lite_min_id').val(liteMin_id);
	$('#lite_max_id').val(liteMax_id);
	$('#lite_daily_id').val(liteDaily_id);
	$('#smart_min_id').val(smartMin_id);
	$('#smart_max_id').val(smartMax_id);
	$('#smart_daily_id').val(smartDaily_id);
	
	$('#edit_lite_min').val(liteMin);
	$('#edit_lite_max').val(liteMax);
	$('#edit_lite_daily').val(liteDaily);
	$('#edit_smart_min').val(smartMin);
	$('#edit_smart_max').val(smartMax);
	$('#edit_smart_daily').val(smartDaily);
	
	$('.form-edit-div-point').slideDown('slow');
	
	})
	
	$('.edit_cancel').click(function(){
	
	
	$('.form-edit-div-point').slideUp('slow');
	
	})
	
		$('#form_point_edit_submit').click(function(){
			var lite_min_id=$('#lite_min_id').val();
			var lite_max_id=$('#lite_max_id').val();
			var lite_daily_id=$('#lite_daily_id').val();
			var smart_min_id=$('#smart_min_id').val();
			var smart_max_id=$('#smart_max_id').val();
			var smart_daily_id=$('#smart_daily_id').val();
			
			var lite_min=$('#edit_lite_min').val();
			var lite_max=$('#edit_lite_max').val();
			var lite_daily=$('#edit_lite_daily').val();
			var smart_min=$('#edit_smart_min').val();
			var smart_max=$('#edit_smart_max').val();
			var smart_daily=$('#edit_smart_daily').val();
			
			//alert(lite_max_id);
		var dataString = "lite_min_id=" + encodeURIComponent(lite_min_id) +"&lite_max_id=" + encodeURIComponent(lite_max_id)+"&lite_daily_id=" + encodeURIComponent(lite_daily_id)+"&smart_min_id=" + encodeURIComponent(smart_min_id)+"&smart_max_id=" + encodeURIComponent(smart_max_id)+"&smart_daily_id=" + encodeURIComponent(smart_daily_id)+ "&lite_min=" + encodeURIComponent(lite_min)+ "&lite_max=" + encodeURIComponent(lite_max)+ "&lite_daily=" + encodeURIComponent(lite_daily)+ "&smart_min=" + encodeURIComponent(smart_min)+ "&smart_max=" + encodeURIComponent(smart_max)+ "&smart_daily=" + encodeURIComponent(smart_daily);
			//alert(dataString);
			jQuery.post('process_edit_limit_value.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#edit_lite_min').val('');
			
			$('.edit-title-container').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});
	
	
	<!----------------delete -------------------->
	 $('.delete_title').live('click',function(){
				
				
				var iid = $('#title_id').val();
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_limit_title.php',
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
				
				 $('.delete_point').live('click',function(){
				
				
				var iid = $('#row_ids').val();
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_limit_row.php',
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
	
	
	 }); /////////////////////////end
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
		<h1>Edit Limit</h1>
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
<div class="second-cont-spacing1">

<div  class="addbtn add-div fright"><a href="javascript:void(0)">Add Title</a></div>
<div  class="addbtn add-div-row fright"><a href="javascript:void(0)">Add Row</a></div>
<!-------
<div  class="addbtn add-div-point fright"><a href="javascript:void(0)">Add Point</a></div> ----->

<div align="center" class="form-add-div forms" style="display: none" >
<form name="add_title_form" id="add_title_form" >

<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add Title</strong></td>

</tr>
<tr>
<td align=""> <strong>Title&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="title" id="title" value=""/>
</td>
</tr>

 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_title_submit" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add"></div> </td> </tr>
</table>

</form>
</div>

<div align="center" class="form-add-div-row forms" style="display: none" >
<form name="add_row_form" id="add_row_form" >

<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add Row Title</strong></td>

</tr>
<tr>
<td align=""> <strong>Title&nbsp;<span class="compulsory">*</span></strong></td>
<td> <select rows = "1" col = "200" class= "editable" name="select_title_row" id="select_title_row" value="">
<?php
$sqlTitle1 = mysql_query("SELECT * FROM limit_title WHERE `flag` = 1 ");
while($resultTitle1 = mysql_fetch_array($sqlTitle1))
{
?>
<option value = "<?php echo $resultTitle1['id'] ; ?> "><?php echo $resultTitle1['title'] ; ?></option>
<?php
}
?>
</select></td>
</tr>
<tr>
<td align=""> <strong>Row Title&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type = "text" name="row_title" id="row_title" value="" />
</td>
</tr>

 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_row_submit" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_row"></div> </td> </tr>
</table>

</form>
</div>
<!-------------
<div align="center" class="form-add-div-point forms" style="display: none" >
<form name="add_point_form" id="add_point_form" >

<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add Point</strong></td>

</tr>
<tr>
<td align=""> <strong>Title&nbsp;<span class="compulsory">*</span></strong></td>
<td> <select rows = "1" col = "200" class= "editable" name="select_title" id="select_title" value="">
<?php
while($resultTitle = mysql_fetch_array($sqlTitle))
{
?>
<option value = "<?php echo $resultTitle['id'] ; ?> "><?php echo $resultTitle['title'] ; ?></option>
<?php
}
?>
</select></td>
</tr>

<tr>
<td align=""> <strong>Row Title&nbsp;<span class="compulsory">*</span></strong></td>
<td> <select rows = "1" col = "200" class= "editable" name="select_row" id="select_row" value="">
<?php
while($resultRow = mysql_fetch_array($sqlRow))
{
?>
<option value = "<?php echo $resultRow['id'] ; ?> "><?php echo $resultRow['row_title'] ; ?></option>
<?php
}
?>
</select></td>
</tr>
<tr>
<td></td>
<td align=""> <strong>UBM Lite&nbsp;</strong></td>
</tr>

<tr>
<td align=""> <strong>Min. per transcation&nbsp;</strong></td>
<td><input type = "text" value="" id = "lite_min" name= "lite_min" /></td>
</tr>

<tr>
<td align=""> <strong>Max. per Transaction&nbsp;</strong></td>
<td><input type = "text" value="" id = "lite_max" name= "lite_max" /></td>
</tr>

<tr>
<td align=""> <strong>Daily&nbsp;</strong></td>
<td><input type = "text" value="" id = "lite_daily" name= "lite_daily" /></td>
</tr>

<tr>
<td></td>
<td align=""> <strong>UBM Smart&nbsp;</strong></td>
</tr>

<tr>
<td align=""> <strong>Min. per transcation&nbsp;</strong></td>
<td><input type = "text" value="" id = "smart_min" name= "smart_min" /></td>
</tr>

<tr>
<td align=""> <strong>Max. per Transaction&nbsp;</strong></td>
<td><input type = "text" value="" id = "smart_max" name= "smart_max" /></td>
</tr>

<tr>
<td align=""> <strong>Daily&nbsp;</strong></td>
<td><input type = "text" value="" id = "smart_daily" name= "smart_daily" /></td>
</tr>

 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_point_submit" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel" class= "btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add2"></div> </td> </tr>
</table>

</form>
</div> --------->

<div align="center" class="form-edit-div-point forms" style="display: none" >
<form name="edit_point_form" id="edit_point_form" >
<input type="hidden" value="" id="row_ids" name="row_ids" />
<input type="hidden" value="" id="lite_min_id" name="lite_min_id" />
<input type="hidden" value="" id="lite_max_id" name="lite_max_id" />
<input type="hidden" value="" id="lite_daily_id" name="lite_daily_id" />
<input type="hidden" value="" id="smart_min_id" name="smart_min_id" />
<input type="hidden" value="" id="smart_max_id" name="smart_max_id" />
<input type="hidden" value="" id="smart_daily_id" name="smart_daily_id" />
<table width="60%" style="margin:80px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Point</strong></td>

</tr>

<tr>
<td></td>
<td align=""> <strong>UBM Lite&nbsp;</strong></td>
</tr>

<tr>
<td align=""> <strong>Min. per transcation&nbsp;</strong></td>
<td><input type = "text" value="" id = "edit_lite_min" name= "edit_lite_min" /></td>
</tr>

<tr>
<td align=""> <strong>Max. per Transaction&nbsp;</strong></td>
<td><input type = "text" value="" id = "edit_lite_max" name= "edit_lite_max" /></td>
</tr>

<tr>
<td align=""> <strong>Daily&nbsp;</strong></td>
<td><input type = "text" value="" id = "edit_lite_daily" name= "edit_lite_daily" /></td>
</tr>

<tr>
<td></td>
<td align=""> <strong>UBM Smart&nbsp;</strong></td>
</tr>

<tr>
<td align=""> <strong>Min. per transcation&nbsp;</strong></td>
<td><input type = "text" value="" id = "edit_smart_min" name= "edit_smart_min" /></td>
</tr>

<tr>
<td align=""> <strong>Max. per Transaction&nbsp;</strong></td>
<td><input type = "text" value="" id = "edit_smart_max" name= "edit_smart_max" /></td>
</tr>

<tr>
<td align=""> <strong>Daily&nbsp;</strong></td>
<td><input type = "text" value="" id = "edit_smart_daily" name= "edit_smart_daily" /></td>
</tr>

 <tr>
<td align="right">&nbsp;&nbsp;<a class="delete_point btn" href="javascript:void(0)">Delete</a></td>
  <td><a id="form_point_edit_submit" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add3"></div> </td> </tr>
</table>

</form>
</div>
<div class = "container-up edit-title-container" style="display:none">
<form name="edit_form"  class="edit_form" >
<table width="60%" style="margin: 50px;margin-left: 263px" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Title</strong></td>
</tr>

<input type="hidden" value="" id="title_id" name="title_id" />
			<tr>
			<td>Title</td>
			<td><input type="text" id="edit_title" name="edit_title"  />
			</td></tr>
	
			<tr><td><input type="hidden" class="title_ids" /><a id="edit_submit_title" href="javascript:void(0)"><img src="images/submit_bt.jpg" /></td>&nbsp;&nbsp;<td><a class="delete_title btn" href="javascript:void(0)">Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="edit_cancel btn" href="javascript:void(0)">Cancel</a></td></tr>


 <tr> <td colspan="2"><div id="msg"></div> </td> </tr>
</table>
</form> 
</div>

<div class="page-title"><h1>Transaction Limits for Services</h1></div>


<div class="table-chart1">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Wallet Type</td>
    <td colspan="3">UBM Lite</td>
    <td colspan="3">UBM Smart</td>
    </tr>
  <tr>
    <td>Services</td>
    <td>Min. per<br />Transaction
</td>
    <td>Max. per<br />Transaction
</td>
    <td>Daily</td>
    <td>Min. per<br />Transaction
</td>
    <td>Max. per<br />Transaction</td>
    <td>Daily</td>
  </tr>
  </table>


</div>        

<div class="table-chart2">

<table width="100%" border="0" cellspacing="0" cellpadding="0" >
  <?php
  $sqlTitle = mysql_query("SELECT * FROM limit_title WHERE `flag` = 1 ");
  //echo "SELECT * FROM limit_title WHERE `flag` = 1";
  while($resultTitle = mysql_fetch_array($sqlTitle))
  {
  $title_id = $resultTitle['id'];
  ?>
  <tr>
    <td colspan="7" ><?php echo $resultTitle['title']; ?> </td>
	<td><a href="javascript:void(0)" class="edit_title" rel="<?php echo $resultTitle['id'] ; ?>" bel="<?php echo $resultTitle['title'] ; ?>" ><img src="images/edit.png" width="16" /></a></td>
  </tr>
  <?php 

  $sqlRow = mysql_query("SELECT * FROM limit_row WHERE `flag` = 1 AND `title_id` = '$title_id'  ");
  while($resultRow = mysql_fetch_array($sqlRow))
  {
  $row_id = $resultRow['id'];
  ?>
  <tr>
    <td width="19%"><?php echo $resultRow['row_title']; ?> </td>
	
	<?php 
	 $sqlCol = mysql_query("SELECT * FROM limit_column2 ");
  while($resultCol = mysql_fetch_array($sqlCol))
  {
  $col_id = $resultCol['id'];
	$sqlValue = mysql_query("SELECT * FROM limit_value WHERE `flag` = 1 AND `row_id` = '$row_id' AND `col2_id` = '$col_id' ");
	while($resultValue = mysql_fetch_array($sqlValue))
	{
	?>
	<?php
	if($resultValue['col2_id']=='2' || $resultValue['col2_id']=='3'||$resultValue['col2_id']=='5'||$resultValue['col2_id']=='6')
	{
	?>
    <td width="16%"><?php echo $resultValue['value']; ?> </td>
	<?php
	}
	else
	{
	?>
	<td width="9%"><?php echo $resultValue['value']; ?> </td>
	<?php
	}
	?>
	
  <?php
  } //end value ?>
 
  <?php } //end col
  ?>
  
  <!-----------taking values ------------------->
	
	<td><a href="javascript:void(0)" class="edit_point"
	<?php 
	 $sqlCol = mysql_query("SELECT * FROM limit_column2 ");
  while($resultCol = mysql_fetch_array($sqlCol))
  {
  $col_id = $resultCol['id'];
	$sqlValue = mysql_query("SELECT * FROM limit_value WHERE `flag` = 1 AND `row_id` = '$row_id' AND `col2_id` = '$col_id' ");
	while($resultValue = mysql_fetch_array($sqlValue))
	{
	?>
  
  
  rel ="<?php echo $resultValue['id']; ?>"
  mel<?php echo $resultValue['id']; ?> ="<?php echo $resultValue['id']; ?>"
  bel<?php echo $resultValue['id']; ?> = "<?php echo $resultValue['value']; ?>"
  tel = "<?php echo $resultValue['row_id']; ?>"
  

   <?php
  } //end row
  }  //end title
  ?>
  
    ><img src="images/edit.png" width="16" /></a></td>
  </tr>
  
  <?php
  } //end row
  }  //end title
  ?>

</table>

</div>

<div class="table-notes">
<p>* Maximum wallet balance</p>
<p>** Two transactions allowed in a month</p>
<p>** Two transactions allowed in a month</p>
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