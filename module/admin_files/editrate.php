




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-30 17:00:07
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
  $rate_id = $rate_id;
  $sql = "select * from tb_rate where rate_id='$rate_id'";
  $qqes=$db->query($sql);
  $row_q = $qqes->fetch_assoc();
?>
    	<form id="frmedit" name="frmedit"  method="post"  enctype="multipart/form-data">
				<div class="form-group">    	
    		<input type="hidden" class="form-control" id="rate_id" name="rate_id" value="<?php echo $row_q['rate_id'] ?>" >
				</div>
				<div class="form-group"><label for="r1">ข้อ1:</label><label id="err2" class="err"></label>
					<div class="checkbox">
					</div>
				</div>
				<div class="form-group"><label for="r2">ข้อ2:</label><label id="err3" class="err"></label>
					<div class="checkbox">
					</div>
				</div>
				<div class="form-group"><label for="r3">ข้อ3:</label><label id="err4" class="err"></label>
					<div class="checkbox">
					</div>
				</div>
				<div class="form-group"><label for="r4">ข้อ4:</label><label id="err5" class="err"></label>
					<div class="checkbox">
					  <label class="checkbox-inline"><input  id="r4" name="r4" type="checkbox" value="M"> ดีมาก</label>
					  <label class="checkbox-inline"><input  id="r4" name="r4" type="checkbox" value="F"> ดี</label>
					</div>
				</div>
				<div class="form-group"><label for="r5">ข้อ5:</label><label id="err6" class="err"></label>
					<div class="checkbox">
					</div>
				</div>
				<div class="form-group"><label for="r6">ข้อ6:</label><label id="err7" class="err"></label>
					<div class="checkbox">
					</div>
				</div>
				<div class="form-group"><label for="r7">ข้อ7:</label><label id="err8" class="err"></label>
					<div class="checkbox">
					</div>
				</div>
				<div class="form-group"><label for="r8">ข้อ8:</label><label id="err9" class="err"></label>
					<div class="checkbox">
					</div>
				</div>
				<div class="form-group"><label for="r9">ข้อ9:</label><label id="err10" class="err"></label>
					<div class="checkbox">
					</div>
				</div>
				<div class="form-group"><label for="r10">ข้อ10:</label><label id="err11" class="err"></label>
					<div class="checkbox">
					</div>
				</div>
				<div class="form-group"><label for="Act_id">รหัสกิจกรรม:</label><label id="err12" class="err"></label>
					<select  id="Act_id" name="Act_id" class="form-control">
		       			<option value="" disabled >เลือก</option><?php
							$sql3 ="select Act_id id,Act_name  name from tb_rate ";  
							$qess3=$db.->query($sql3);	
							while($fd3=$qess3->fetch_assoc()){ 
								$chk = ($row_q['Act_id']==$fd3['id'])?"selected":"";
								?>
						       <option value="<?php echo $fd3['id'];?>" <?php echo $chk;?>>
						        <?php echo $fd3['name'];?>
						        </option> 
						      <?php
						     }
						       ?>
					</select>
				</div>
				<div class="form-group"><label for="mem_id">รหัสผู้สมัคร:</label><label id="err13" class="err"></label>
					<select  id="mem_id" name="mem_id" class="form-control">
		       			<option value="" disabled >เลือก</option><?php
							$sql3 ="select  id,  name from tb_member ";  
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
				 $("#err7").html('');
				 $("#err8").html('');
				 $("#err9").html('');
				 $("#err10").html('');
				 $("#err11").html('');
				 $("#err12").html('');
				 $("#err13").html('');
		 			  var chk=true; 
		 			  
				  if($("#rate_id").val() == "")
				  {
				    $("#err1").html('กรุณากำหนดค่า รหัสการประเมิน ด้วยค่ะ');
				    $("#rate_id").focus();
				    chk= false;
				  }
				  if($("#r1").val() == "")
				  {
				    $("#err2").html('กรุณากำหนดค่า ข้อ1 ด้วยค่ะ');
				    $("#r1").focus();
				    chk= false;
				  }
				  if($("#r2").val() == "")
				  {
				    $("#err3").html('กรุณากำหนดค่า ข้อ2 ด้วยค่ะ');
				    $("#r2").focus();
				    chk= false;
				  }
				  if($("#r3").val() == "")
				  {
				    $("#err4").html('กรุณากำหนดค่า ข้อ3 ด้วยค่ะ');
				    $("#r3").focus();
				    chk= false;
				  }
				  if($("#r4").val() == "")
				  {
				    $("#err5").html('กรุณากำหนดค่า ข้อ4 ด้วยค่ะ');
				    $("#r4").focus();
				    chk= false;
				  }
				  if($("#r5").val() == "")
				  {
				    $("#err6").html('กรุณากำหนดค่า ข้อ5 ด้วยค่ะ');
				    $("#r5").focus();
				    chk= false;
				  }
				  if($("#r6").val() == "")
				  {
				    $("#err7").html('กรุณากำหนดค่า ข้อ6 ด้วยค่ะ');
				    $("#r6").focus();
				    chk= false;
				  }
				  if($("#r7").val() == "")
				  {
				    $("#err8").html('กรุณากำหนดค่า ข้อ7 ด้วยค่ะ');
				    $("#r7").focus();
				    chk= false;
				  }
				  if($("#r8").val() == "")
				  {
				    $("#err9").html('กรุณากำหนดค่า ข้อ8 ด้วยค่ะ');
				    $("#r8").focus();
				    chk= false;
				  }
				  if($("#r9").val() == "")
				  {
				    $("#err10").html('กรุณากำหนดค่า ข้อ9 ด้วยค่ะ');
				    $("#r9").focus();
				    chk= false;
				  }
				  if($("#r10").val() == "")
				  {
				    $("#err11").html('กรุณากำหนดค่า ข้อ10 ด้วยค่ะ');
				    $("#r10").focus();
				    chk= false;
				  }
				  if($("#Act_id").val() == "")
				  {
				    $("#err12").html('กรุณากำหนดค่า รหัสกิจกรรม ด้วยค่ะ');
				    $("#Act_id").focus();
				    chk= false;
				  }
				  if($("#mem_id").val() == "")
				  {
				    $("#err13").html('กรุณากำหนดค่า รหัสผู้สมัคร ด้วยค่ะ');
				    $("#mem_id").focus();
				    chk= false;
				  }
			  
				  if(chk){ 
				  	  
				  	    var url="updaterate.php"
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
								       location='showrate.php';
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