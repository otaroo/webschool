




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-02-05 22:34:02
Download Code On : developers.khontermfan.com
*/?> 
    	<style> .err{color:red;}</style>
    	 <div style="display:table; margin:0 auto; padding: 20px; width:70%;">
		  <ol class="breadcrumb">
		   <li class="active">
		       <h2>แก้ไขข้อมูลบุคลากร</h2>
		   </li>
		  </ol>
<?php 
  $person_id = $_GET['person_id'];
  $sql = "select * from tb_person where person_id='$person_id'";
  $qqes=$db->query($sql);
  $row_q = $qqes->fetch_assoc();
?>
    	<form id="frmedit" name="frmedit"  method="post"  enctype="multipart/form-data">
				<div class="form-group">    	
    		<input type="hidden" class="form-control" id="person_id" name="person_id" value="<?php echo $row_q['person_id'] ?>" >
				</div>
				<div class="form-group"><label for="person_name">ชื่อบุคลากร:</label><label id="err2" class="err"></label>    	
    		<input type="text" class="form-control" id="person_name" name="person_name" value="<?php echo $row_q['person_name'] ?>" >
				</div>
				<div class="form-group"><label for="person_pos">ดำรงตำแหน่ง:</label><label id="err3" class="err"></label>    	
    		<input type="text" class="form-control" id="person_pos" name="person_pos" value="<?php echo $row_q['person_pos'] ?>" >
				</div>
				<div class="form-group"><label for="person_since">ตั้งแต่:</label><label id="err4" class="err"></label>    	
    		<input type="date" class="form-control" id="person_since" name="person_since" value="<?php echo $row_q['person_since'] ?>" >
				</div>
				<div class="form-group"><label for="person_pos1">พ้นจากตำแหน่ง:</label><label id="err5" class="err"></label>    	
    		<input type="date" class="form-control" id="person_pos1" name="person_pos1" value="<?php echo $row_q['person_pos1'] ?>" >
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
		 			  
				  if($("#person_id").val() == "")
				  {
				    $("#err1").html('กรุณากำหนดค่า ลำดับบุคลากร ด้วยค่ะ');
				    $("#person_id").focus();
				    chk= false;
				  }
				  if($("#person_name").val() == "")
				  {
				    $("#err2").html('กรุณากำหนดค่า ชื่อบุคลากร ด้วยค่ะ');
				    $("#person_name").focus();
				    chk= false;
				  }
				  if($("#person_pos").val() == "")
				  {
				    $("#err3").html('กรุณากำหนดค่า ดำรงตำแหน่ง ด้วยค่ะ');
				    $("#person_pos").focus();
				    chk= false;
				  }
				  if($("#person_since").val() == "")
				  {
				    $("#err4").html('กรุณากำหนดค่า ตั้งแต่ ด้วยค่ะ');
				    $("#person_since").focus();
				    chk= false;
				  }
				  if($("#person_pos1").val() == "")
				  {
				    $("#err5").html('กรุณากำหนดค่า พ้นจากตำแหน่ง ด้วยค่ะ');
				    $("#person_pos1").focus();
				    chk= false;
				  }
			  
				  if(chk){ 
				  	  
				  	    var url="module/admin_files/updatetb_person.php"
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
								       location='?fd=admin&page=showtb_person';
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