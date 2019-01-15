




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-12-01 14:25:22
Download Code On : developers.khontermfan.com
*/?> 
    	<style> .err{color:red;}</style>
    	 <div style="display:table; margin:0 auto; padding: 20px; width:70%;">
		  <ol class="breadcrumb">
		   <li class="active">
		       <h2>แก้ไขข่าวประชาสัมพันธ์</h2>
		   </li>
		  </ol>
<?php 
  $id = $_GET['id'];
  $sql = "select * from tb_news where id='$id'";
  $qqes=$db->query($sql);
  $row_q = $qqes->fetch_assoc();
?>
    	<form id="frmedit" name="frmedit"  method="post"  enctype="multipart/form-data">
				<div class="form-group">    	
    		<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row_q['id'] ?>" >
				</div>
				<div class="form-group"><label for="title">รายละเอียดข่าว:</label><label id="err2" class="err"></label>    	
    		<input type="text" class="form-control" id="title" name="title" value="<?php echo $row_q['title'] ?>" >
				</div>
				<div class="form-group"><label for="description">เวลา:</label><label id="err3" class="err"></label>    	
    		<input type="date" class="form-control" id="description" name="description" value="<?php echo $row_q['description'] ?>" >
				</div>
				<div class="form-group"><label for="publish_time">ไฟล์งาน:</label><label id="err4" class="err"></label>    	
    		<input type="file" class="form-control" id="publish_time" name="publish_time" accept="pdf,doc,docx,jpg,png,gif,ppt,pptx,jpge,xls,xlsx">
				</div>
				<div class="form-group"><label for="new_files">new_files:</label><label id="err5" class="err"></label>    	
    		<input type="text" class="form-control" id="new_files" name="new_files" value="<?php echo $row_q['new_files'] ?>" >
				</div>
		  <span id="status_save"></span>
		  <button type="button" onclick="return checkEmpty();" id="btnAdd" name="btnAdd" class="btn btn-info">แก้ไขข้อมูล</button>
		  <button type="reset"   class="btn btn-warning">ล้างข้อมูล</button>
		</form>
		</div>
				<script language="javascript">
				function checkEmpty()
				{
				 $("#err1").html('');
				 $("#err2").html('');
				 $("#err3").html('');
				 $("#err4").html('');
				 $("#err5").html('');
		 			  var chk=true; 
		 			  
				  if($("#id").val() == "")
				  {
				    $("#err1").html('กรุณากำหนดค่า หัวข้อข่าว ด้วยค่ะ');
				    $("#id").focus();
				    chk= false;
				  }
				  if($("#title").val() == "")
				  {
				    $("#err2").html('กรุณากำหนดค่า รายละเอียดข่าว ด้วยค่ะ');
				    $("#title").focus();
				    chk= false;
				  }
				  if($("#description").val() == "")
				  {
				    $("#err3").html('กรุณากำหนดค่า เวลา ด้วยค่ะ');
				    $("#description").focus();
				    chk= false;
				  }
				  if($("#publish_time").val() == "")
				  {
				    $("#err4").html('กรุณากำหนดค่า ไฟล์งาน ด้วยค่ะ');
				    $("#publish_time").focus();
				    chk= false;
				  }
				  if($("#new_files").val() == "")
				  {
				    $("#err5").html('กรุณากำหนดค่า new_files ด้วยค่ะ');
				    $("#new_files").focus();
				    chk= false;
				  }
			  
				  if(chk){ 
				  	  
				  	    var url="module/admin_files/updatetb_news.php"
				  		var form = $('#frmedit')[0];
				  	    var data = new FormData(form);
				  	    $.ajax({
					            type: "POST",
					            enctype: 'multipart/form-data',
					            url: url,
					            data: data,
					            processData: false,
					            contentType: false,
					            cache: false,
					            timeout: 600000,
					            success: function (data) {
	 								//alert(data);
					                if(data.trim()=='1'){
								  	  $("#status_save").html('<font color=green>บันทึกข้อมูลเรียบร้อยแล้วค่ะ...</font><br>');
								  	 setTimeout(function(){ 
								       location='?fd=admin&page=showtb_news';
								      }, 3000);  
								  	 }else $("#status_save").html('<font color=red>ไม่สามารถบันทึกข้อมูลได้...กรุณาตรวจสอบข้อมูลอีกครั้ง...</font><br>');
								  
					            },
					            error: function (e) {
					                $("#status_save").html(e.responseText);
					            }
					        });
				  	  
				  }else{ 
				    return false;
				  }
				}
		</script>