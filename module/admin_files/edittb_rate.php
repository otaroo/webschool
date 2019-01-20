




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-17 13:33:48
Download Code On : developers.khontermfan.com
*/?> 
    	<style> .err{color:red;}</style>
    	 <div style="display:table; margin:0 auto; padding: 20px; width:70%;">
		  <ol class="breadcrumb">
		   <li class="active">
		       <h2>แก้ไขการประเมินกิจกรรม</h2>
		   </li>
		  </ol>
<?php 
  $rate_id = $_GET['rate_id'];
  $sql = "select * from tb_rate where rate_id='$rate_id'";
  $qqes=$db->query($sql);
  $row_q = $qqes->fetch_assoc();
?>
    	<form id="frmedit" name="frmedit"  method="post"  enctype="multipart/form-data">
				<div class="form-group">    	
    		<input type="hidden" class="form-control" id="rate_id" name="rate_id" value="<?php echo $row_q['rate_id'] ?>" >
				</div>
				<div class="form-group"><label for="act_id">รหัสกิจกรรม:</label><label id="err2" class="err"></label>
					<select  id="act_id" name="act_id" class="form-control">
		       			<option value="" disabled >เลือก</option><?php
							$sql3 ="select  id,  name from  ";  
							$qess3=$->query($sql3);	
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
				<div class="form-group"><label for="mem_id">รหัสผู้สมัคร:</label><label id="err3" class="err"></label>
					<select  id="mem_id" name="mem_id" class="form-control">
		       			<option value="" disabled >เลือก</option><?php
							$sql3 ="select act_id id,act_name  name from tb_activity ";  
							$qess3=$db->query($sql3);	
							while($fd3=$qess3->fetch_assoc()){ 
								$chk = ($row_q['mem_id']==$fd3['id'])?"selected":"";
								?>
						       <option value="<?php echo $fd3['id'];?>" <?php echo $chk;?>>
						        <?php echo $fd3['name'];?>
						        </option> 
						      <?php
						     }
						       ?>
					</select>
				</div>
				<div class="form-group"><label for="date_rate">วันที่ประเมิน:</label><label id="err4" class="err"></label>    	
    		<input type="date" class="form-control" id="date_rate" name="date_rate" value="<?php echo $row_q['date_rate'] ?>" >
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
		 			  var chk=true; 
		 			  
				  if($("#rate_id").val() == "")
				  {
				    $("#err1").html('กรุณากำหนดค่า รหัสการประเมิน ด้วยค่ะ');
				    $("#rate_id").focus();
				    chk= false;
				  }
				  if($("#act_id").val() == "")
				  {
				    $("#err2").html('กรุณากำหนดค่า รหัสกิจกรรม ด้วยค่ะ');
				    $("#act_id").focus();
				    chk= false;
				  }
				  if($("#mem_id").val() == "")
				  {
				    $("#err3").html('กรุณากำหนดค่า รหัสผู้สมัคร ด้วยค่ะ');
				    $("#mem_id").focus();
				    chk= false;
				  }
				  if($("#date_rate").val() == "")
				  {
				    $("#err4").html('กรุณากำหนดค่า วันที่ประเมิน ด้วยค่ะ');
				    $("#date_rate").focus();
				    chk= false;
				  }
			  
				  if(chk){ 
				  	  
				  	    var url="module/admin_files/updatetb_rate.php"
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
								       location='?fd=admin&page=showtb_rate';
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