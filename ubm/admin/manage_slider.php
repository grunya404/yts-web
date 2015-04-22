<?php
require_once('includes/config.php');
include('includes/session.php');
$sql = mysql_query("SELECT * FROM index_slider WHERE `index_slider_flag` = '1' ORDER BY `index_slider_id` ASC");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/ubm-style.css" rel="stylesheet" media="screen"/>
	<title>View Images</title>
   <style type="text/css" title="currentStyle">
			@import "css/demo_page.css";
			@import "css//demo_table_jui.css";
			@import "css/eggplant/jquery-ui-1.8.17.custom_2.css";
		</style>
		<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable({
				"bJQueryUI": true
				});
			} );
		</script>
		
		<script type="text/javascript">
	  $(document).ready(function(){
	  
		$("#add_submit").click(function(){
		//alert('aaa');
		var theForm = typeof form != 'object' ? document.getElementById("add_form"): form;
		
			$("#notificationArea").html("<img src='images/ajax-loader.gif' />");
			
			
			var sub_image1 = $("input#sub_image1").val();
			var title = $("input#addTitle").val();
			var point1 = $("#addPoint1").val();
			var point2= $("#addPoint2").val();
			var point3 = $("#addPoint3").val();
			var point4 = $("#addPoint4").val();
			
			var dataString = "sub_image1=" + encodeURIComponent(sub_image1) + "&title=" + encodeURIComponent(title)+ "&point1=" + encodeURIComponent(point1)+ "&point2=" + encodeURIComponent(point2)+ "&point4=" + encodeURIComponent(point4)+ "&point3=" + encodeURIComponent(point3);
				//alert(dataString);
			jQuery.post('process_add_slider.php', dataString, function(data){
				//alert(data);
			if(data==1)
			{
			$('#msg').text('Added successfully.');	
			$('#msg').fadeIn();
			}
			else
			{
			$('#msg').text('Not successfully.');	
			$('#msg').fadeIn();
			}
				
			});
			return false;
	});
		  
		  $('.del').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_slider.php',
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
        <!----- Uploadify ----->
		
	<link href="uploadify/uploadify.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="uploadify/swfobject.js"></script>
	<script type="text/javascript" src="uploadify/jquery.uploadify.v2.1.4.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$('.edit_button').click(function(){
	var slider_id=$(this).attr('rel');
	var slider_image=$(this).attr('bel');
	var title=$(this).attr('tel');
	var point1=$(this).attr('mel');
	var point2=$(this).attr('jel');
	var point3=$(this).attr('hel');
	var point4=$(this).attr('sel');
	//alert(slider_id);
	//alert(point3);
	
	$('#sub_image2').val(slider_image);
	$('#slider_ids').val(slider_id);
	$('#Title').val(title);
	$('#Point1').val(point1);
	$('#Point2').val(point2);
	$('#Point3').val(point3);
	$('#Point4').val(point4);
	$('.edit-slider-container').slideDown('slow');
	
	})
	
	$('#edit_cancel').click(function(){
	
	$('#Title').val('');
	$('#Point1').val('');
	$('#Point2').val('');
	$('#Point3').val('');
	$('#Point4').val('');
	$('.edit-slider-container').slideUp('slow');
	
	})
	
		$('#edit_submit').click(function(){
			var slider_image=$('#sub_image2').val();
			var slider_id=$('#slider_ids').val();
			var title = $("input#Title").val();
			var point1 = $("#Point1").val();
			var point2= $("#Point2").val();
			var point3 = $("#Point3").val();
			var point4 = $("#Point4").val();
			//alert(slider_id);
			//alert(point3);
		var dataString = "slider_image=" + encodeURIComponent(slider_image) + "&title=" + encodeURIComponent(title)+ "&point1=" + encodeURIComponent(point1)+ "&point2=" + encodeURIComponent(point2)+ "&point4=" + encodeURIComponent(point4)+ "&point3=" + encodeURIComponent(point3) + "&slider_id=" + encodeURIComponent(slider_id);
	alert(dataString);
			jQuery.post('process_edit_slider.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#Title').val('');
			$('#Point1').val('');
			$('#Point2').val('');
			$('#Point3').val('');
			$('#Point4').val('');
			$('.edit-slider-container').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});
	
	
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
		$('#progress1').html('<span style="color:#999">Upload in progress...</span>');
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
		$('#progress2').html('<span style="color:#999">Upload in progress...</span>');
	},
	'onComplete'  	 : function(event, queueID, fileObj, response, data) {
		//$('#img_progress1').css("color","#8cc501");
		$('#progress2').html('<span style="color:#8cc501">Image Upload Successfully</span>');
		$('#sub_image2').val(fileObj['name']);
				//$('#prev_img').html('<span style="color:#8cc501">Your uploaded File is  : </span>'+fileObj['name']);
				//alert(fileObj['name']);
	}
	  });
	  
	   });
	   </script>
</head>

<body>

<div class="container">

  </div>
  <div class="content">
    <div id="dt_example">
		<div id="container">
		
		<a href = "edit_index.php" ><h1>Back to Home </h1></a>
		<div class = "container-up">
	

<form name="add_form" id="add_form" >
<table width="60%" style="margin:10px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add Image</strong></td>

</tr>
<tr>
			<td>Title<span class="compulsory">*</span></td>
			<td><input type = "text" id="addTitle" name="addTitle"  cols="80" />
			</td></tr>
<tr>
<td> Image: </td>
<td> <input  id="file_upload1" name="file_upload_1" type="file" /></td>
			<input type="hidden" value="" id="sub_image1" name="sub_image1" />
			<div id="progress1"></div> </tr>
			<tr></tr>
			<tr>
			<td>Point1</td>
			<td><textarea  id="addPoint1" name="addPoint1"  height="250px" rows="4" cols="40" ></textarea>
			</td></tr>
				<tr>
				<tr></tr>
			<td>Point2</td>
			<td><textarea  id="addPoint2" name="addPoint2" rows="4" cols="40" >
			</textarea></td></tr>
			<td>Point3</td>
			<td><textarea  id="addPoint3" name="addPoint3"  height="250px" rows="4" cols="40" ></textarea>
			</td></tr>
				<tr>
				<tr></tr>
			<td>Point4</td>
			<td><textarea  id="addPoint4" name="addPoint4" rows="4" cols="40" >
			</textarea></td></tr>
			<tr></tr>
			<tr><td><a id="add_submit" href="javascript:void(0)"><img src="images/submit_bt.jpg" /></a></td></tr>


 <tr> <td colspan="2"><div id="msg"></div> </td> </tr>
</table>
</form> 

</div>

	<div class = "container-up edit-slider-container" style="display:none">


<form name="edit_form" id="edit_form" class="edit_form" >
<table width="60%" style="margin:10px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit slider</strong></td>

</tr>
<input type="hidden" value="" id="slider_ids" name="slider_ids" />
			<tr>
			<td>Title</td>
			<td><input type = "text" id="Title" name="Title"  cols="80" />
			</td></tr>
			<tr>
			<td> Image: </td>
			<td> <input  id="file_upload2" name="file_upload_2" type="file" /></td>
						<input type="hidden" value="" id="sub_image2" name="sub_image2" />
						<div id="progress2"></div></tr>
			<tr></tr>
			<tr>
			<td>Point1</td>
			<td><textarea  id="Point1" name="Point1"  height="250px" rows="4" cols="40" ></textarea>
			</td></tr>
				<tr>
				<tr></tr>
			<td>Point2</td>
			<td><textarea  id="Point2" name="Point2" rows="4" cols="40" >
			</textarea></td></tr>
			<tr>
			<td>Point3</td>
			<td><textarea  id="Point3" name="Point3"  height="250px" rows="4" cols="40" ></textarea>
			</td></tr>
				<tr>
				<tr></tr>
			<td>Point4</td>
			<td><textarea  id="Point4" name="Point4" rows="4" cols="40" >
			</textarea></td></tr>
			<tr></tr>
			<tr><td><input type="hidden" class="slider_ids" /><a id="edit_submit" href="javascript:void(0)"><img src="images/submit_bt.jpg" /></td>&nbsp;&nbsp;<td><a id="edit_cancel" class= "btn" href="javascript:void(0)">Cancel</a></td></tr>


 <tr> <td colspan="2"><div id="msg1"></div> </td> </tr>
</table>
</form> 

</div>



			
			<h1>View Images</h1>
			<div id="demo">
<table cellpadding="0" cellspacing="0" border="1" class="display" id="example" width="100%">
	<thead>
		<tr>
			<th>Serial No.</th>
			<th>Title</th>
			<th>Thumbnail</th>
			<th>Point 1</th>
			<th>Point 2</th>
			<th>Point 3</th>
			<th>Point 4</th>
			
			<th></th>
			<th></th>
			
		</tr>
	</thead>
	<tbody>
		<?php 
			$i=1;
			while($result = mysql_fetch_array($sql)) { ?>
			<tr align="center">
			<td><?php echo $i; ?></td>
			<td><?php echo $result['index_slider_title']; ?></td>
			<td><img src="../images/<?php echo $result['slider_images']; ?>" width="100px"/></td>	
			<td><?php echo $result['index_slider_point1']; ?></td>
			<td><?php echo $result['index_slider_point2']; ?></td>
			<td><?php echo $result['index_slider_point3']; ?></td>
			<td><?php echo $result['index_slider_point4']; ?></td>
			<td><a class="edit_button"  href="javascript:void(0)" 
			rel="<?php echo $result['index_slider_id'] ?>" 
			bel="<?php echo $result['slider_images']; ?>" 
			tel="<?php echo $result['index_slider_title']; ?>" 
			mel="<?php echo $result['index_slider_point1']; ?> " 
			jel="<?php echo $result['index_slider_point2']; ?>" 
			hel="<?php echo $result['index_slider_point3']; ?>" 
			sel="<?php echo $result['index_slider_point4']; ?>" >EDIT</a></td>
			<td><a href="javascript:void(0)" class="del" rel="<?php echo $result['index_slider_id']; ?>" sel="2">DELETE</a></td>
			
			
			</tr>
			<?php $i++; } ?>
	</tbody>
	<tfoot>
		<tr>
			<th>Serial No.</th>
			<th>Title</th>
			<th>Thumbnail</th>
			<th>Point 1</th>
			<th>Point 2</th>
			<th>Point 3</th>
			<th>Point 4</th>
			
			<th></th>
			<th></th>
			
		</tr>
	</tfoot>
</table>
			</div>
			<div class="spacer"></div>
	
			
		</div>
	</div>
    <p><!-- end .content --></p>
</div>
 <!-- start footer -->         
<div class="footer">
<!-- <div id="footer-pad">&nbsp;</div> -->
	<!--  start footer-left -->

	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
  <!-- end .container --></div>

</body>
</html>
