




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-28 18:51:43
Download Code On : developers.khontermfan.com
*/?> 
    	<style> .err{color:red;}</style>
    	 <div style="display:table; margin:0 auto; padding: 20px; width:70%;">
		  <ol class="breadcrumb">
		   <li class="active">
		       <h2>แก้ไขรูปภาพ</h2>
		   </li>
		  </ol>
<?php 
  $photo_id = $_GET['photo_id'];
  $sql = "select * from tb_photo where photo_id='$photo_id'";
  $qqes=$db->query($sql);
  $row_q = $qqes->fetch_assoc();
?>
    	<form id="frmedit" name="frmedit"  method="post"  enctype="multipart/form-data">
				<div class="form-group">    	
    		<input type="hidden" class="form-control" id="photo_id" name="photo_id" value="<?php echo $row_q['photo_id'] ?>" >
				</div>
				<div class="form-group"><label for="photo_img">รูป:</label><label id="err2" class="err"></label>    	
    		<input type="file" class="form-control" id="photo_img" name="photo_img" accept="pdf,doc,docx,jpg,png,gif,ppt,pptx,jpge,xls,xlsx">
				</div>
				<div class="form-group"><label for="act_id">รหัสกิจกรรม:</label><label id="err3" class="err"></label>
					<select  id="act_id" name="act_id" class="form-control">
		       			<option value="" disabled >เลือก</option><?php
							$sql3 ="select act_id id,act_name  name from tb_activity ";  
							$qess3=$db->query($sql3);	
							while($fd3=$qess3->fetch_assoc()){ 
								$chk = ($row_q['act_id']==$fd3['id'])?"selected":"";
								?>
						       <option value="<?php echo $fd3['id'];?>" <?php echo $chk;?>>
						        <?php echo $fd3['name'];?>
						        </option> 
						      <?php
						     }
						       ?>
					</select>
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
		 			  var chk=true; 
		 			  
				  if($("#photo_id").val() == "")
				  {
				    $("#err1").html('กรุณากำหนดค่า รหัสรูปภาพ ด้วยค่ะ');
				    $("#photo_id").focus();
				    chk= false;
				  }
				  if($("#photo_img").val() == "")
				  {
				    $("#err2").html('กรุณากำหนดค่า รูป ด้วยค่ะ');
				    $("#photo_img").focus();
				    chk= false;
				  }
				  if($("#act_id").val() == "")
				  {
				    $("#err3").html('กรุณากำหนดค่า รหัสกิจกรรม ด้วยค่ะ');
				    $("#act_id").focus();
				    chk= false;
				  }
			  
				  if(chk){ 
				  	  
				  	    var url="module/admin_files/updatepho1.php"
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
								       location='?fd=admin&page=showpho1';
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