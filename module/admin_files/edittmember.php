




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-15 16:22:25
Download Code On : developers.khontermfan.com
*/?> 
    	<style> .err{color:red;}</style>
    	 <div style="display:table; margin:0 auto; padding: 20px; width:70%;">
		  <ol class="breadcrumb">
		   <li class="active">
		       <h2>แก้ไขสมัครกิจกรรม</h2>
		   </li>
		  </ol>
<?php 
  $mem_id = $_GET['mem_id'];
  $sql = "select * from tb_member where mem_id='$mem_id'";
  $qqes=$db->query($sql);
  $row_q = $qqes->fetch_assoc();
?>
    	<form id="frmedit" name="frmedit"  method="post"  enctype="multipart/form-data">
				<div class="form-group">    	
    		<input type="hidden" class="form-control" id="mem_id" name="mem_id" value="<?php echo $row_q['mem_id'] ?>" >
				</div>
				<div class="form-group"><label for="act_id">ลำดับกิจกรรม:</label><label id="err2" class="err"></label>
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
				<div class="form-group"><label for="mem_name">ชื่อผู้สมัคร:</label><label id="err3" class="err"></label>    	
    		<input type="text" class="form-control" id="mem_name" name="mem_name" value="<?php echo $row_q['mem_name'] ?>" >
				</div>
				<div class="form-group"><label for="mem_tel">เบอร์โทร:</label><label id="err4" class="err"></label>    	
    		<input type="number" class="form-control" id="mem_tel" name="mem_tel" value="<?php echo $row_q['mem_tel'] ?>" >
				</div>
				<div class="form-group"><label for="mem_card">บัตรประชาชน:</label><label id="err5" class="err"></label>    	
    		<input type="number" class="form-control" id="mem_card" name="mem_card" value="<?php echo $row_q['mem_card'] ?>" >
				</div>
				<div class="form-group"><label for="mem_sex">เพศ:</label><label id="err6" class="err"></label>
					<div class="radio">
					</div>
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
				 $("#err6").html('');
		 			  var chk=true; 
		 			  
				  if($("#mem_id").val() == "")
				  {
				    $("#err1").html('กรุณากำหนดค่า ลำดับผู้สมัคร ด้วยค่ะ');
				    $("#mem_id").focus();
				    chk= false;
				  }
				  if($("#act_id").val() == "")
				  {
				    $("#err2").html('กรุณากำหนดค่า ลำดับกิจกรรม ด้วยค่ะ');
				    $("#act_id").focus();
				    chk= false;
				  }
				  if($("#mem_name").val() == "")
				  {
				    $("#err3").html('กรุณากำหนดค่า ชื่อผู้สมัคร ด้วยค่ะ');
				    $("#mem_name").focus();
				    chk= false;
				  }
				  if($("#mem_tel").val() == "")
				  {
				    $("#err4").html('กรุณากำหนดค่า เบอร์โทร ด้วยค่ะ');
				    $("#mem_tel").focus();
				    chk= false;
				  }
				  if($("#mem_card").val() == "")
				  {
				    $("#err5").html('กรุณากำหนดค่า บัตรประชาชน ด้วยค่ะ');
				    $("#mem_card").focus();
				    chk= false;
				  }
				  if($("#mem_sex").val() == "")
				  {
				    $("#err6").html('กรุณากำหนดค่า เพศ ด้วยค่ะ');
				    $("#mem_sex").focus();
				    chk= false;
				  }
			  
				  if(chk){ 
				  	  
				  	    var url="module/admin_files/updatemember.php"
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
								       location='?fd=admin&page=showmember';
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