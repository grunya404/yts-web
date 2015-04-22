<?php
include('includes/config.php');

$sqlTitle = mysql_query("SELECT * FROM index_feature_titles WHERE `flag` = 1 ");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Union Bank Money - Home</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href="css/ubm-style.css" rel="stylesheet" media="screen"/>

 <style type="text/css" title="currentStyle">
			@import "css/demo_page.css";
			@import "css/demo_table_jui.css";
			@import "css/eggplant/jquery-ui-1.8.17.custom_2.css";
		</style>
		
		<script src="js/jquery.min.js"></script>
		
		  
		  <script type="text/javascript">
    $(document).ready(function(){
	$('#example1').dataTable({
	"bJQueryUI": true
	});
	$('#example2').dataTable({
	"bJQueryUI": true
	});
	
<!---------- DIV ------------->
	 $('.add-div').click(function(){
		
        var location = $(this).val();
        div = $('#' + location);

		$('.forms').slideUp();
		$('.form-add-div').stop().slideDown('slow');
       // $('#show_add').show();
	   
       
    }); 
	
		 $('.add-div-point').click(function(){
		
        var location = $(this).val();
        div = $('#' + location);

		$('.forms').slideUp();
		$('.form-add-div-point').stop().slideDown('slow');
       // $('#show_add').show();
	   
       
    });
	<!------------------------------->
	
	$('#form_title_submit').click(function(){
	var title = $('#title_ifr').contents().find("body").html();
	//alert(title);
	var dataString = "title=" + encodeURIComponent(title);
	
	jQuery.post('process_add_title.php', dataString, function(data){
	//alert (data);
	if(data==1)
	{
	window.location.reload();
	}
	else{
	$("#title").val('');
	$('#msg_add').text('Title not added.')
	}
	});
	//var id = $this.attr('rel');
	});
	
	$('.edit_cancel').click(function(){
	
		$('.form-add-div').slideUp('slow');
	});
	
	
	$('#form_point_submit').click(function(){
	var point = $('#point_ifr').contents().find("body").html();
	var desc = $('#desc_ifr').contents().find("body").html();
	var title_id = $('#select_t').val();
	//alert(title_id);
	var dataString = "title_id=" + encodeURIComponent(title_id) + "&point=" + encodeURIComponent(point) + "&desc=" + encodeURIComponent(desc);
	
	jQuery.post('process_add_point.php', dataString, function(data){
	//alert (data);
	if(data==1)
	{
	window.location.reload();
	}
	else{
	$("#title").val('');
	$('#msg_add').text('Point not added.')
	}
	});
	//var id = $this.attr('rel');
	});
	
	$('.edit_cancel').click(function(){
	
		$('.form-add-div-point').slideUp('slow');
	});
	<!---------------------delete------------>
	
	 $('.del').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_title.php',
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
				url: 'ajax_delete_point.php',
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
				
			<!------------------------edit------------>	
			
			$('.edit_button').click(function(){
	var title_id=$(this).attr('rel');
	var title=$(this).attr('bel');
	
	//alert(title_id);
	//alert(title);
	
	$('#title_id').val(title_id);
	$('#edit_title').val(title);
	
	$('.edit-slider-container').slideDown('slow');
	
	})
	
	$('.edit_cancel').click(function(){
	
	$('#edit_title').val('');
	
	$('.edit-slider-container').slideUp('slow');
	
	})
	
		$('#edit_submit').click(function(){
			var title_id=$('#title_id').val();
			var title=$('#edit_title').val();
			//alert(title_id);
			//alert(title);
			
		var dataString = "title_id=" + encodeURIComponent(title_id) + "&title=" + encodeURIComponent(title);
	//alert(dataString);
			jQuery.post('process_edit_title.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#edit_title').val('');
			
			$('.edit-slider-container').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});
		
		
		$('.edit_button_point').click(function(){
	var point_id=$(this).attr('rel');
	var point=$(this).attr('bel');
	var desc=$(this).attr('tel');
	
	//alert(point_id);
	//alert(point);
	
	$('#point_id').val(point_id);
	$('#edit_point').val(point);
	$('#edit_desc').val(desc);
	
	$('.edit-point-container').slideDown('slow');
	
	})
	
	$('.edit_cancel').click(function(){
	
	$('#edit_point').val('');
	$('#edit_desc').val('');
	
	$('.edit-point-container').slideUp('slow');
	
	})
	
		$('#edit_submit_point').click(function(){
			var point_id=$('#point_id').val();
			var point=$('#edit_point').val();
			var desc=$('#edit_desc').val();
			//alert(point_id);
			//alert(title);
			
		var dataString = "point_id=" + encodeURIComponent(point_id) + "&point=" + encodeURIComponent(point)
		+ "&desc=" + encodeURIComponent(desc);
	//alert(dataString);
			jQuery.post('process_edit_point.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#edit_point').val('');
			$('#edit_desc').val('');
			
			$('.edit-point-container').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});
		
				
	<!-----------------end docu ready------------->
	});
    </script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
	
		 	  	<script type="text/javascript" src="js/tinymce.min.js"></script>
	<script type="text/javascript">

	tinymce.init({
	selector: "textarea.editable",
    plugins: " ",
    toolbar: ""
	});
	 </script>
	 
	 
</head>

<body>
<a href = "edit_index.php" ><h1>Back to Home </h1></a>
<div  class="addbtn add-div fright"><a href="javascript:void(0)">Add Title</a></div>
<div  class="addbtn add-div-point fright"><a href="javascript:void(0)">Add Point</a></div>

<div align="center" class="form-add-div forms" style="display: none" >
<form name="add_title_form" id="add_title_form" >

<table width="60%" style="margin:10px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add Title</strong></td>

</tr>
<tr>
<td align=""> <strong>Title&nbsp;<span class="compulsory">*</span></strong></td>
<td> <textarea rows = "1" col = "200" class= "editable" name="title" id="title" value="">
</textarea></td>
</tr>

 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_title_submit" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="edit_cancel" class= "btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add"></div> </td> </tr>
</table>

</form>
</div>

<div class = "container-up edit-slider-container" style="display:none">
<form name="edit_form"  class="edit_form" >
<table width="60%" style="margin: 50px;margin-left: 263px" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Title</strong></td>
</tr>

<input type="hidden" value="" id="title_id" name="title_id" />
			<tr>
			<td>Title</td>
			<td><textarea id="edit_title" name="edit_title"  rows = "3" cols="80" >
			</textarea>
			</td></tr>
	
			<tr><td><input type="hidden" class="slider_ids" /><a id="edit_submit" href="javascript:void(0)"><img src="images/submit_bt.jpg" /></td>&nbsp;&nbsp;<td><a class="edit_cancel" class= "btn" href="javascript:void(0)">Cancel</a></td></tr>


 <tr> <td colspan="2"><div id="msg"></div> </td> </tr>
</table>
</form> 
</div>

	<div class = "container-up-point edit-point-container" style="display:none">
	<form name="edit_form"  class="edit_form" >
<table width="60%" style="margin: 50px;margin-left: 263px" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Point</strong></td>
</tr>

<input type="hidden" value="" id="point_id" name="point_id" />
			<tr>
			<td>Point</td>
			<td><textarea id="edit_point" name="edit_point"  rows = "3" cols="80" >
			</textarea>
			</td></tr>
			<tr>
			<td>Description</td>
			<td><textarea id="edit_desc" name="edit_desc"  rows = "3" cols="80" >
			</textarea>
			</td></tr>
	
			<tr><td><input type="hidden" class="point_ids" /><a id="edit_submit_point" href="javascript:void(0)"><img src="images/submit_bt.jpg" /></td>&nbsp;&nbsp;<td><a class="edit_cancel" class= "btn" href="javascript:void(0)">Cancel</a></td></tr>


 <tr> <td colspan="2"><div id="msg2"></div> </td> </tr>
</table>
</form> 


</div>
<div align = "center" id="edit_title" >
<div id="demo1" style="width:80%;">
	<div>&nbsp;</div>	
<table cellpadding="1" cellspacing="1" border="0" class="display" id="example1" width="100%">
	<thead>
		<tr>
			<th>Serial No.</th>
			<th>Title</th>
			<th></th>
			<th></th>
			
		</tr>
	</thead>
	<tbody>
		<?php 
			$i=1;
			while($resultTitle = mysql_fetch_array($sqlTitle))
			 {
			 ?>
			<tr align="center">
			<td><?php echo $i; ?></td>
			<td><?php  echo $resultTitle['title'] ; ?></td>
				<td><a class="edit_button"  href="javascript:void(0)" 
			rel="<?php echo $resultTitle['id'] ?>" 
			bel="<?php echo $resultTitle['title']; ?>"  
		 >EDIT</a></td>
			<td><a style="color:#D02A1E;" href="javascript:void(0)" class="del" rel="<?php echo $resultTitle['id']; ?>" sel="2">DELETE</a></td>
	
			</tr>
			<?php $i++; 
				}?>
	</tbody>
	<tfoot>
		<tr>
			<th>Serial No.</th>
			<th>Title</th>
			<th></th>
			<th></th>
			
		</tr>
	</tfoot>
</table>
			</div>
			</div>
		


<?php
$sqlTitle1 = mysql_query("SELECT * FROM index_feature_titles WHERE `flag` = 1 ");
?>
<div align="center" class="form-add-div-point forms" style="display: none" >
<form name="add_point_form" id="add_point_form" >

<table width="60%" style="margin:10px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add Point</strong></td>

</tr>
<tr>
<td align=""> <strong>Title&nbsp;<span class="compulsory">*</span></strong></td>
<td> <select rows = "1" col = "200" name="select_t" id="select_t" value="">
<?php while($resultTitle1 = mysql_fetch_array($sqlTitle1))
{
?>
<option value = "<?php  echo $resultTitle1['id'] ; ?> "><?php  echo $resultTitle1['title'] ; ?></option>
<?php
}
?>
</select></td>
</tr>

<tr>
<td align=""> <strong>Point&nbsp;<span class="compulsory">*</span></strong></td>
<td> <textarea rows = "1" col = "200" class= "editable" name="point" id="point" value="">
</textarea></td>
</tr>

<tr>
<td align=""> <strong>Description&nbsp;<span class="compulsory">*</span></strong></td>
<td> <textarea rows = "1" col = "200" class= "editable" name="desc" id="desc" value="">
</textarea></td>
</tr>

 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_point_submit" class="btn" href="javascript:void(0)">Submit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="edit_cancel" class= "btn" href="javascript:void(0)">Cancel</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add2"></div> </td> </tr>
</table>

</form>
</div>		
	<div align = "center" id="edit_point" >
<div id="demo2" style="width:80%;">
	<div>&nbsp;</div>	
<table cellpadding="1" cellspacing="1" border="1" class="display" id="example2" width="100%">
	<thead>
		<tr>
			<th>Serial No.</th>
			<th>Point</th>
			<th>Description</th>
			<th></th>
			<th></th>
			
		</tr>
	</thead>
	<tbody>
		<?php 
			$i=1;
			$sqlPoint = mysql_query("SELECT * FROM index_feature_points WHERE `flag`= 1 ");
			while($resultPoint = mysql_fetch_array($sqlPoint))
			{
				$point_id = $resultPoint['id'];
				$sqlDesc = mysql_query("SELECT * FROM index_feature_descriptions WHERE `point_id`=  '$point_id' AND `flag`= 1 ");
				while($resultDesc = mysql_fetch_array($sqlDesc))
					{

			 ?>
			<tr align="center">
			<td><?php echo $i; ?></td>
			<td><?php  echo $resultPoint['point'] ; ?></td>
			<td><?php  echo $resultDesc['desc'] ; ?></td>
							<td><a class="edit_button_point"  href="javascript:void(0)" 
			rel="<?php echo $resultPoint['id'] ?>" 
			bel="<?php echo $resultPoint['point']; ?>" 
			tel="<?php echo $resultDesc['desc']; ?>"			
		 >EDIT</a></td>
			<td><a style="color:#D02A1E;" href="javascript:void(0)" class="del1" rel="<?php echo $resultPoint['id']; ?>" sel="2">DELETE</a></td>
	
			</tr>
			<?php $i++; 
				}
				}
				?>
	</tbody>
	<tfoot>
		<tr>
			<th>Serial No.</th>
			<th>Point</th>
			<th>Description</th>
			<th></th>
			<th></th>
			
		</tr>
	</tfoot>
</table>
			</div>
			</div>
</body>
</html>