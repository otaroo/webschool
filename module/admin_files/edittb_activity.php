




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-30 19:26:46
Download Code On : developers.khontermfan.com
*/?> 
    	<style> .err{color:red;}</style>
    	 <div style="display:table; margin:0 auto; padding: 20px; width:70%;">
		  <ol class="breadcrumb">
		   <li class="active">
		       <h2>แก้ไขข้อมูลกิจกรรม</h2>
		   </li>
		  </ol>
<?php 
  $Act_id = $_GET['Act_id'];
  $sql = "select * from tb_activity where Act_id='$Act_id'";
  $qqes=$db->query($sql);
  $row_q = $qqes->fetch_assoc();
?>
    	<form id="frmedit" name="frmedit"  method="post"  enctype="multipart/form-data">
				<div class="form-group">    	
    		<input type="hidden" class="form-control" id="Act_id" name="Act_id" value="<?php echo $row_q['Act_id'] ?>" >
				</div>
				<div class="form-group"><label for="Act_name">ชื่อกิจกรรม:</label><label id="err2" class="err"></label>    	
    		<input type="text" class="form-control" id="Act_name" name="Act_name" value="<?php echo $row_q['Act_name'] ?>" >
				</div>
				<div class="form-group"><label for="Act_date">วันที่กิจกรรม:</label><label id="err3" class="err"></label>    	
    		<input type="date" class="form-control" id="Act_date" name="Act_date" value="<?php echo $row_q['Act_date'] ?>" >
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
		 			  
				  if($("#Act_id").val() == "")
				  {
				    $("#err1").html('กรุณากำหนดค่า รหัสกิจกรรม ด้วยค่ะ');
				    $("#Act_id").focus();
				    chk= false;
				  }
				  if($("#Act_name").val() == "")
				  {
				    $("#err2").html('กรุณากำหนดค่า ชื่อกิจกรรม ด้วยค่ะ');
				    $("#Act_name").focus();
				    chk= false;
				  }
				  if($("#Act_date").val() == "")
				  {
				    $("#err3").html('กรุณากำหนดค่า วันที่กิจกรรม ด้วยค่ะ');
				    $("#Act_date").focus();
				    chk= false;
				  }
			  
				  if(chk){ 
				  	  
				  	    var url="module/admin_files/updatetb_activity.php"
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
								       location='?fd=admin&page=showtb_activity';
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