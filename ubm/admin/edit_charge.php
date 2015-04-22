<?php 
include('includes/config.php');
include('includes/session.php');
$sql = mysql_query(" SELECT * FROM `charge` WHERE `flag` = 1 ");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin-</title>
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
				$('#title').val('');
				$('#value').val('');
			$('.form-add-div').slideUp('slow');

				});
				
	$('#form_submit').click(function(){
	
		var title = $('#title').val();
		var value = $('#value').val();
		var dataString = "title=" + encodeURIComponent(title) + "&value=" + encodeURIComponent(value);
		
		jQuery.post('process_add_charge.php', dataString, function(data){
			if(data==1)
			{

			$('.form-add-div').slideUp('slow');
			window.location.reload();
			}
		
		});

				
		});
	
<!---------------edit--------------------->

$('.edit_button').click(function(){
	var ids=$(this).attr('rel');
	var title=$(this).attr('bel');
	var value=$(this).attr('tel');
	
	//alert(title_id);
	//alert(title);
	
	$('#edit_id').val(ids);
	$('#edit_title').val(title);
	$('#edit_value').val(value);
	
	$('.forms').slideUp();
	$('.edit-title-container').slideDown('slow');
	
	})
	
	$('.edit_cancel').click(function(){
	
	$('#edit_title').val('');
	$('#edit_value').val('');
	
	$('.edit-title-container').slideUp('slow');
	
	})
	
		$('#edit_submit').click(function(){
			var ids=$('#edit_id').val();
			var title=$('#edit_title').val();
			var value=$('#edit_value').val();
			//alert(title_id);
			//alert(title);
			
		var dataString = "ids=" + encodeURIComponent(ids) + "&title=" + encodeURIComponent(title) + "&value=" + encodeURIComponent(value) ;
	//alert(dataString);
			jQuery.post('process_edit_charge.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#edit_title').val('');
			$('#edit_value').val('');
			
			
			$('.edit-title-container').slideUp('slow');
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
				url: 'ajax_delete_charge.php',
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
		<h1>Edit Charge</h1>
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
			<div class = "add-div addbtn fright"><a href = "javascript:void(0)" > Add </a></div>
		<div class="inner-second-half">



<div class = "container-up edit-title-container forms" style="display:none">
<form name="edit_form"  class="edit_form" >
<table width="60%" style="margin: 50px;margin-left: 263px" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Edit Charge</strong></td>
</tr>

<input type="hidden" value="" id="edit_id" name="edit_id" />
			<tr>
			<td>Title</td>
			<td><input type="text" id="edit_title" name="edit_title"  />
			</td></tr>
			<tr>
			<td>Value</td>
			<td><input type="text" id="edit_value" name="edit_value"  />
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
<td align=""> <strong>Title&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="title" id="title" value=""/>
</td>
</tr>

<tr>
<td align=""> <strong>Value&nbsp;<span class="compulsory">*</span></strong></td>
<td> <input type="text" name="value" id="value" value=""/>
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
<div class="second-cont-spacing">

<h2>&nbsp;</h2>

<div class="table-chart3">

<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <?php 
  while($result = mysql_fetch_array($sql))
  {
  ?>
  <tr>
    <td><?php echo $result['title'] ; ?></td>
    <td><?php echo $result['value'] ; ?> </td>
	<td><a class="edit_button"  href="javascript:void(0)" 
			rel="<?php echo $result['id'] ?>" 
			bel="<?php echo $result['title']; ?>" 
			tel="<?php echo $result['value']; ?>"			
		 ><img src="images/edit.png" width="16" /></a></td>
		 <td><a class="del" href= "javascript:void(0)" rel= "<?php echo $result['id'] ; ?>"><img src="images/delete.png" width="16" /></a></td>
  </tr>
  <?php
  }
  ?>

</table>


</div>
<br />
<br />
<br />
<br />

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