<?php
include('includes/config.php');
$sqlTitle = mysql_query("SELECT * FROM limit_title");
$sqlRow = mysql_query("SELECT * FROM limit_row");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Union Bank Money - Limits</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href="css/ubm-style.css" rel="stylesheet" media="screen"/>
<!--  <link rel="stylesheet" href="css/website.css" type="text/css" media="screen"/>-->

	<script src="js/jquery.min.js"></script>
		
		  
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
	
	
	 }); /////////////////////////end
	</script>

</head>

<body class="grey-color">
<div class="mob-menu"><a href="javascript:void(0)" ><img src="images/menu.jpg" /></a></div>
<!--main conatiner start-->
<div class="main-container">
<!--inner wrapper start-->

<!--inner wrapper end-->

<!--mid box start-->
<div class="mid-box">


<div class="clear"></div>
<div class="middle-con">

<!-- second -->
<div class="inner-second-half">
<div class="second-cont-spacing1">

<div  class="addbtn add-div fright"><a href="javascript:void(0)">Add Title</a></div>
<div  class="addbtn add-div-row fright"><a href="javascript:void(0)">Add Row</a></div>
<div  class="addbtn add-div-point fright"><a href="javascript:void(0)">Add Point</a></div>

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
  <td><a id="form_title_submit" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel" class= "btn" href="javascript:void(0)">Cancel</a></td>
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
  <td><a id="form_row_submit" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;<a class="edit_cancel" class= "btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_row"></div> </td> </tr>
</table>

</form>
</div>

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
	
			<tr><td><input type="hidden" class="title_ids" /><a id="edit_submit_title" href="javascript:void(0)"><img src="images/submit_bt.jpg" /></td>&nbsp;&nbsp;<td><a class="delete_title" class= "btn" href="javascript:void(0)">Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="edit_cancel" class= "btn" href="javascript:void(0)">Cancel</a></td></tr>


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
  <td><a href="javascript:void(0)" rel ="<?php echo $resultValue['id']; ?>"
  bel= "<?php echo $resultValue['value']; ?>"
  mel = "<?php echo $resultValue['value']; ?>"
  tel = "<?php echo $resultValue['value']; ?>"
  sel = "<?php echo $resultValue['value']; ?>"
  gel = "<?php echo $resultValue['value']; ?>"
  hel = "<?php echo $resultValue['value']; ?>"
  nel = "<?php echo $resultValue['value']; ?>"
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
<div class="inner-footer">
<ul class="ftr-lst">
<li><a href="index.html">Home </a></li>
<li><a href="javascript:void(0)">Limits and Charges</a></li>
<li><a href="javascript:void(0)">Support</a></li>
<li><a href="javascript:void(0)">Faq</a></li>
<li><a href="contact-us.html">Contact Us</a></li>
<li><a href="http://yts.net.in">YTS</a></li>
</ul>


<p>© 2014 Union Bank Money. All Rights Reserved.<br />
<a href="http://www.digitalvibe.in/" target="_blank">Site Credits : DV</a></p>

</div>
<div class="clear"></div>
</div>

</div>
<!--main container end-->

</body>
</html>
