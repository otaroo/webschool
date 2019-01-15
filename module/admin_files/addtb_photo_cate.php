




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-26 07:29:24
Download Code On : developers.khontermfan.com
*/?> 
    	<style> .err{color:red;}</style>
    	 <div style="display:table; margin:0 auto; padding: 20px; width:70%;">
		       <h2>ข้อมูลรูปภาพ</h2>
			<form id="frminsert" name="frminsert"  method="post" enctype="multipart/form-data">
				<div class="form-group"><label for="photo_cate_name">ชื่อรูปภาพ:</label><label id="err2" class="err"></label>    	
    		<input type="text" class="form-control" id="photo_cate_name" name="photo_cate_name"  >
				</div>
				<div class="form-group"><label for="photo">รูปภาพ:</label><label id="err3" class="err"></label>    	
    		<input type="file" class="form-control" id="photo" name="photo" accept="pdf,doc,docx,jpg,png,gif,ppt,pptx,jpge,xls,xlsx">
				</div>
				<div class="form-group"><label for="photo_cate_date">วันที่:</label><label id="err4" class="err"></label>    	
    		<input type="date" class="form-control" id="photo_cate_date" name="photo_cate_date"  >
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
		 			  var chk=true; 
		 			  
				  if($("#photo_cate_name").val() == "")
				  {
				    $("#err2").html('กรุณากำหนดค่า ชื่อรูปภาพ ด้วยค่ะ');
				    $("#photo_cate_name").focus();
				    chk= false;
				  }
				  if($("#photo").val() == "")
				  {
				    $("#err3").html('กรุณากำหนดค่า รูปภาพ ด้วยค่ะ');
				    $("#photo").focus();
				    chk= false;
				  }
				  if($("#photo_cate_date").val() == "")
				  {
				    $("#err4").html('กรุณากำหนดค่า วันที่ ด้วยค่ะ');
				    $("#photo_cate_date").focus();
				    chk= false;
				  }
			  
				  if(chk){ 
				  	  
				  	  	var url="module/admin_files/savetb_photo_cate.php";
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
								       location='?fd=admin&page=showtb_photo_cate.php';
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