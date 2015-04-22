<?php
include('includes/config.php');
include('includes/session.php');

$sqlFaq = mysql_query("SELECT * FROM faq WHERE `flag` = 1 ");
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
	
		
	<!------------------------------->
	
	$('#form_faq_submit').click(function(){
	var question = $('#question_ifr').contents().find("body").html();
	var answer = $('#answer_ifr').contents().find("body").html();
		var link = $('#link').val();
	alert(question);
	var dataString = "question=" + encodeURIComponent(question) + "&answer=" + encodeURIComponent(answer) + "&link=" + encodeURIComponent(link);
	alert(dataString);
	jQuery.post('process_add_faq.php', dataString, function(data){
	//alert (data);
	if(data==1)
	{
	window.location.reload();
	}
	else{
	$("#answer_ifr").val('');
	$("#question_ifr").val('');
	$('#msg_add').text('FAQ not added.')
	}
	});
	//var id = $this.attr('rel');
	});
	
	
		$('.edit_button').click(function(){
	var faq_id=$(this).attr('rel');
	var question=$(this).attr('bel');
	var answer=$(this).attr('tel');
	var link=$(this).attr('mel');

	
	$('#ques').val(question);
	$('#ans').val(answer);
	$('#docu').val(link);
	$('.edit-slider-container').slideDown('slow');
	
	})
	
	$('#edit_cancel').click(function(){
	

	$('#ques').val('');
	$('#ans').val('');
	$('#docu').val('');
	$('.edit-slider-container').slideUp('slow');
	
	})
	
		$('#edit_submit').click(function(){
		
			var question= $("#ques").val();
			var answer = $("#ans").val();
			var link = $("#docu").val();
			var ids = $("#faq_ids").val();
			
			//alert(slider_id);
			//alert(point3);
		var dataString = "question=" + encodeURIComponent(question) + "&answer=" + encodeURIComponent(answer)+ "&link=" + encodeURIComponent(link)+ "&ids=" + encodeURIComponent(ids);
	alert(dataString);
			jQuery.post('process_edit_faq.php', dataString, function(data){
				//alert(data);
				if(data==1)
			{
			$('#link').val('');
			$('#ques').val('');
			$('#ans').val('');
	
			$('.edit-slider-container').slideUp('slow');
			window.location.reload();
			}
			
			});
		
		});
	<!---------------------delete------------>
	
	 $('.del').live('click',function(){
				
				
				var iid = $(this).attr('rel');
				//alert(iid);
				if(confirm('Are you sure u want to delete')==true)
				{
					$.ajax ({
				type: 'POST',
				url: 'ajax_delete_question.php',
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
<div class = "backstyle">
<a href = "edit_faq.php" ><h1>Back to FAQ </h1></a>
</div>
<div  class="addbtn add-div fright"><a href="javascript:void(0)">Add FAQ</a></div>

<div align="center" class="form-add-div forms" style="display: none" >
<form name="add_faq_form" id="add_faq_form" >

<table width="60%" style="margin:10px;" border="1" cellpadding="10" cellspacing="10">
<tr>
<td align="center" colspan="2"><strong> Add FAQ</strong></td>

</tr>
<tr>
<td align=""> <strong>Question&nbsp;<span class="compulsory">*</span></strong></td>
<td> <textarea rows = "1" col = "200" class= "editable" name="question" id="question" value="">
</textarea></td>
</tr>
<tr>
<td align=""> <strong>Answer&nbsp;<span class="compulsory">*</span></strong></td>
<td> <textarea rows = "1" col = "200" class= "editable" name="answer" id="answer" value="">
</textarea></td>
</tr>
<tr>
<td align=""> <strong>Link&nbsp;</strong>(Any document)</td>
<td> <input name="link" id="link" value=""/></td>
</tr>

 <tr>
<td align="left"> <span class="compulsory">*</span> fields are required</td>
  <td><a id="form_faq_submit" class="btn" href="javascript:void(0)">Submit</a></td>
    </tr>
	<tr> <td colspan="2"><div id="msg_add"></div> </td> </tr>
</table>

</form>
</div>
	<div class = "container-up edit-slider-container" style="display:none">
	<h2>Edit Slider</h2>
<table width="60%" style="margin:10px;" border="1" cellpadding="10" cellspacing="10">
<form name="edit_form" id="Edit_form" >
<input type="hidden" value="" id="faq_ids" name="faq_ids" />
		
			<tr></tr>
			<tr>
			<td>Question</td>
			<td><textarea  id="ques" name="ques"  height="250px" rows="4" cols="40" ></textarea>
			</td></tr>
				<tr>
				<tr></tr>
			<td>Answer</td>
			<td><textarea  id="ans" name="ans" rows="4" cols="40" >
			</textarea></td></tr>
				<tr>
			<td>Link Document</td>
			<td><input type = "text" id="docu" name="docu"  cols="80" />
			</td></tr>
			
			<tr></tr>
			<tr><td><input type="hidden" class="faq_ids" /><a id="edit_submit" href="javascript:void(0)"><img src="images/submit_bt.jpg" />&nbsp;&nbsp;<a id="edit_cancel" class= "btn" href="javascript:void(0)">Cancel</a></td></tr>

</form> 
 <tr> <td colspan="2"><div id="msg"></div> </td> </tr>
</table>


</div>

<div align = "center" id="edit_title" >
<div id="demo1" style="width:80%;">
	<div>&nbsp;</div>	
<table cellpadding="1" cellspacing="1" border="0" class="display" id="example1" width="100%">
	<thead>
		<tr>
			<th>Serial No.</th>
			<th>Question</th>
			<th>Answer</th>
			<th>Link Document</th>
			<th></th>
			<th></th>
			
		</tr>
	</thead>
	<tbody>
		<?php 
			$i=1;
			while($resultFaq = mysql_fetch_array($sqlFaq))
			 {
			 ?>
			<tr align="center">
			<td><?php echo $i; ?></td>
			<td><?php  echo $resultFaq['question'] ; ?></td>
			<td><?php  $string =  $resultFaq['answer'] ; 
						$string = (strlen($string)>100) ? substr($string,0,100).'...' : $string; 
						echo $string;
			?></td>
			<td><?php  echo $resultFaq['link'] ; ?></td>
				<td><a class="edit_button"  href="javascript:void(0)" 
			rel="<?php echo $resultFaq['id'] ?>" 
			bel="<?php echo $resultFaq['question']; ?>" 
			tel="<?php echo $resultFaq['answer']; ?>" 
			mel="<?php echo $resultFaq['link']; ?> " 
			 >EDIT</a></td>
			<td><a style="color:#D02A1E;" href="javascript:void(0)" class="del" rel="<?php echo $resultFaq['id']; ?>" sel="2">DELETE</a></td>
	
			</tr>
			<?php $i++; 
				}?>
	</tbody>
	<tfoot>
		<tr>
			<th>Serial No.</th>
			<th>Title</th>
			<th>Answer</th>
			<th>Link Document</th>
			<th></th>
			<th></th>
			
		</tr>
	</tfoot>
</table>
			</div>
			</div>
		
</body>
</html>