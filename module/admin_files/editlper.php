




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-12-20 18:43:04
Download Code On : developers.khontermfan.com
*/?> 
    	<style> .err{color:red;}</style>
    	 <div style="display:table; margin:0 auto; padding: 20px; width:70%;">
		  <ol class="breadcrumb">
		   <li class="active">
		       <h2>แก้ไขรูปภาพคณะทำงาน</h2>
		   </li>
		  </ol>
<?php 
  $personnel_id = $_GET['personnel_id'];
  $sql = "select * from personnel where personnel_id='$personnel_id'";
  $qqes=$db->query($sql);
  $row_q = $qqes->fetch_assoc();
?>
    	<form id="frmedit" name="frmedit"  method="post"  enctype="multipart/form-data">
				<div class="form-group">    	
    		<input type="hidden" class="form-control" id="personnel_id" name="personnel_id" value="<?php echo $row_q['personnel_id'] ?>" >
				</div>
				<div class="form-group"><label for="personnel_name">ชื่อผู้ทำงาน:</label><label id="err2" class="err"></label> <?php echo $row_q['personnel_name'] ?>   	   		
				</div>
				<div class="form-group"><label for="personnel_position">ตำแหน่ง:</label><label id="err3" class="err"></label>    	
    		<?php echo $row_q['personnel_position'] ?>
				</div>
				<div class="form-group"><label for="personnel_img">รูปคณะทำงาน:</label><label id="err4" class="err"></label>    	
    		<input type="file" class="form-control" id="personnel_img" name="personnel_img" accept="pdf,doc,docx,jpg,png,gif,ppt,pptx,jpge,xls,xlsx">
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
		 			  
				  if($("#personnel_id").val() == "")
				  {
				    $("#err1").html('กรุณากำหนดค่า ลำดับผู้ทำงาน ด้วยค่ะ');
				    $("#personnel_id").focus();
				    chk= false;
				  }
				  if($("#personnel_name").val() == "")
				  {
				    $("#err2").html('กรุณากำหนดค่า ชื่อผู้ทำงาน ด้วยค่ะ');
				    $("#personnel_name").focus();
				    chk= false;
				  }
				  if($("#personnel_position").val() == "")
				  {
				    $("#err3").html('กรุณากำหนดค่า ตำแหน่ง ด้วยค่ะ');
				    $("#personnel_position").focus();
				    chk= false;
				  }
				  if($("#personnel_img").val() == "")
				  {
				    $("#err4").html('กรุณากำหนดค่า รูปคณะทำงาน ด้วยค่ะ');
				    $("#personnel_img").focus();
				    chk= false;
				  }
			  
				  if(chk){ 
				  	  
				  	    var url="module/admin_files/updatper.php"
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
								       location='?fd=admin&page=showpersonnel';
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