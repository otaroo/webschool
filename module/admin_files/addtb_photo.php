




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-29 12:06:30
Download Code On : developers.khontermfan.com
*/?> 
    	<style> .err{color:red;}</style>
    	 <div style="display:table; margin:0 auto; padding: 20px; width:70%;">
		       <h2>รูปภาพ</h2>
			<form id="frminsert" name="frminsert"  method="post" enctype="multipart/form-data">
				<div class="form-group"><label for="act_id">รหัสกิจกรรม:</label><label id="err2" class="err"></label>
					<select  id="act_id" name="act_id" class="form-control">
		       			<option value="" disabled >เลือก</option><?php
							$sql3 ="select act_id id,act_name  name from tb_activity ";  
							$qess3=$db->query($sql3);	
							while($fd3=$qess3->fetch_assoc()){ ?>
						       <option value="<?php echo $fd3['id'];?>">
						        <?php echo $fd3['name'];?>
						        </option> 
						      <?php
						     }
						       ?>
					</select>
				</div>
				<div class="form-group"><label for="photo">รูปภาพ:</label><label id="err3" class="err"></label>    	
    		<input type="file" class="form-control" id="photo" name="photo" accept="pdf,doc,docx,jpg,png,gif,ppt,pptx,jpge,xls,xlsx">
				</div>
		  <span id="status_save"></span>
		  <button type="button" onclick="return checkEmpty();" id="btnAdd" name="btnAdd" class="btn btn-info">เพิ่มข้อมูล</button>
		  <button type="reset"   class="btn btn-warning">ล้างข้อมูล</button>
		</form>
		</div>
				<script language="javascript">
				function checkEmpty()
				{
				 $("#err2").html('');
				 $("#err3").html('');
		 			  var chk=true; 
		 			  
				  if($("#act_id").val() == "")
				  {
				    $("#err2").html('กรุณากำหนดค่า รหัสกิจกรรม ด้วยค่ะ');
				    $("#act_id").focus();
				    chk= false;
				  }
				  if($("#photo").val() == "")
				  {
				    $("#err3").html('กรุณากำหนดค่า รูปภาพ ด้วยค่ะ');
				    $("#photo").focus();
				    chk= false;
				  }
			  
				  if(chk){ 
				  	  
				  	  	var url="module/admin_files/savetb_photo.php";
						var form = $('#frminsert')[0];
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
								       location='?fd=admin&page=showtb_photo';
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