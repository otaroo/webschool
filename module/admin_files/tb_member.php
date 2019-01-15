




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-27 18:17:43
Download Code On : developers.khontermfan.com
*/?> 
    	<style> .err{color:red;}</style>
    	 <div style="display:table; margin:0 auto; padding: 20px; width:70%;">
		       <h2>ข้อมูลกิจกรรม</h2>
			<form id="frminsert" name="frminsert"  method="post" enctype="multipart/form-data">
				<div class="form-group"><label for="mem_name">ชื่อผู้สมัคร:</label><label id="err2" class="err"></label>    	
    		<input type="text" class="form-control" id="mem_name" name="mem_name"  >
				</div>
				<div class="form-group"><label for="mem_tel">เบอร์โทร:</label><label id="err3" class="err"></label>    	
    		<input type="tel" class="form-control" id="mem_tel" name="mem_tel"  >
				</div>
				<div class="form-group"><label for="mem_sex">เพศ:</label><label id="err4" class="err"></label>
					<div class="radio">
					 <label  class="radio-inline"><input type="radio"  id="mem_sex" name="mem_sex" value="M"> ชาย</label>
					 <label  class="radio-inline"><input type="radio"  id="mem_sex" name="mem_sex" value="F"> หญิง</label>
					</div>
				</div>
				<div class="form-group"><label for="mem_age">อายุ:</label><label id="err5" class="err"></label>    	
    		<input type="text" class="form-control" id="mem_age" name="mem_age"  >
				</div>
				<div class="form-group"><label for="mem_sta">สถานะ:</label><label id="err6" class="err"></label>    	
    		<input type="text" class="form-control" id="mem_sta" name="mem_sta"  >
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
				 $("#err4").html('');
				 $("#err5").html('');
				 $("#err6").html('');
		 			  var chk=true; 
		 			  
				  if($("#mem_name").val() == "")
				  {
				    $("#err2").html('กรุณากำหนดค่า ชื่อผู้สมัคร ด้วยค่ะ');
				    $("#mem_name").focus();
				    chk= false;
				  }
				  if($("#mem_tel").val() == "")
				  {
				    $("#err3").html('กรุณากำหนดค่า เบอร์โทร ด้วยค่ะ');
				    $("#mem_tel").focus();
				    chk= false;
				  }
				  if($("#mem_sex").val() == "")
				  {
				    $("#err4").html('กรุณากำหนดค่า เพศ ด้วยค่ะ');
				    $("#mem_sex").focus();
				    chk= false;
				  }
				  if($("#mem_age").val() == "")
				  {
				    $("#err5").html('กรุณากำหนดค่า อายุ ด้วยค่ะ');
				    $("#mem_age").focus();
				    chk= false;
				  }
				  if($("#mem_sta").val() == "")
				  {
				    $("#err6").html('กรุณากำหนดค่า สถานะ ด้วยค่ะ');
				    $("#mem_sta").focus();
				    chk= false;
				  }
			  
				  if(chk){ 
				  	  
				  	  	var url="savetb_member.php";
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
								       location='showtb_member.php';
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