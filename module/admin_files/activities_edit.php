<style> .err{color:red;}</style>
    	 <div class="container">
  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3"><span class="card-title text-center">แก้ไขข้อมูลกิจกรรม</span></h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"> <a href="index.php?page=main">เครือข่าย &quot;เพื่อนเด็ก&quot;</a> </li>
    <li class="breadcrumb-item active"><span class="card-title text-center">แก้ไขข้อมูลกิจกรรม</span></li>
  </ol>
  <!-- Intro Content -->
  <div class="row">
    <div class="col-lg-6"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signup my-5">
            <div class="card-body">
              <h3 class="card-title text-center">แก้ไขข้อมูลกิจกรรม</h3>
              <?php 
  $activities_id = $_GET['activities_id'];
  $sql = "select * from tb_activities where activities_id='$activities_id'";
  $qqes=$db->query($sql);
  $row_q = $qqes->fetch_assoc();
?>
    	<form id="frmedit" name="frmedit"  method="post"  enctype="multipart/form-data">
				<div class="form-group">    	
    		<input type="hidden" class="form-control" id="activities_id" name="activities_id" value="<?php echo $row_q['activities_id'] ?>" >
				</div>
				<div class="form-group"><label for="activities_name">ชื่อกิจกรรม:</label><label id="err2" class="err"></label>    	
    		<input type="text" class="form-control" id="activities_name" name="activities_name" value="<?php echo $row_q['activities_name'] ?>" >
				</div>
				<div class="form-group"><label for="activities_date">วันที่จัดกิจกรรม:</label><label id="err3" class="err"></label>    	
    		<input type="date" class="form-control" id="activities_date" name="activities_date" value="<?php echo $row_q['activities_date'] ?>" >
				</div>
				<div class="form-group"><label for="activities_place">สถานที่จัดกิจกรรม:</label><label id="err4" class="err"></label>    	
    		<input type="text" class="form-control" id="activities_place" name="activities_place" value="<?php echo $row_q['activities_place'] ?>" >
				</div>
				<div class="form-group"><label for="activities_status">สถานะ:</label><label id="err5" class="err"></label>
					<select  id="activities_status" name="activities_status" class="form-control">
			       		<option value="" disabled >เลือก</option><?php 
		        			$_array = array('0'=>'ยังไม่ดำเนินการ','1'=>'กำลังดำเนินการ','2'=>'ดำเนินการแล้ว');
		        			$k = array_keys($_array);
		        			for($l=0;$l<count($_array);$l++){
		        				$chk = ($row_q['activities_status']==$k[$l])?"selected":"";
		        			?><option value="<?php echo $k[$l]; ?>" <?php echo $chk;?>>
			       		<?php echo $_array[$k[$l]];?>
			       		</option>
							<?php } ?>
			       		</select>
				</div>
				<div class="form-group"><label for="activities_description">รายละเอียดกิจกรรม:</label><label id="err6" class="err"></label>
			<textarea class="form-control" rows="5" id="activities_description" name="activities_description"><?php echo $row_q['activities_description'] ?></textarea>
				</div>
				<div class="form-group"><label for="activities_photo">รูปภาพกิจกรรม:</label><label id="err7" class="err"></label>    	
    		<input type="file" class="form-control" id="activities_photo" name="activities_photo" accept="pdf,doc,docx,jpg,png,gif,ppt,pptx,jpge,xls,xlsx">
				</div>
		  <span id="status_save"></span>
		  <button type="button" onclick="return checkEmpty();" id="btnAdd" name="btnAdd" class="btn btn-primary">แก้ไขข้อมูล</button>
		  <button type="reset"   class="btn btn-warning">ล้างข้อมูล</button>
		</form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6"></div>
  </div>
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
		 			  var chk=true; 
		 			  
				  if($("#activities_id").val() == "")
				  {
				    $("#err1").html('กรุณากำหนดค่า รหัสกิจกรรม ด้วยค่ะ');
				    $("#activities_id").focus();
				    chk= false;
				  }
				  if($("#activities_name").val() == "")
				  {
				    $("#err2").html('กรุณากำหนดค่า ชื่อกิจกรรม ด้วยค่ะ');
				    $("#activities_name").focus();
				    chk= false;
				  }
				  if($("#activities_date").val() == "")
				  {
				    $("#err3").html('กรุณากำหนดค่า วันที่จัดกิจกรรม ด้วยค่ะ');
				    $("#activities_date").focus();
				    chk= false;
				  }
				  if($("#activities_place").val() == "")
				  {
				    $("#err4").html('กรุณากำหนดค่า สถานที่จัดกิจกรรม ด้วยค่ะ');
				    $("#activities_place").focus();
				    chk= false;
				  }
				  if($("#activities_status").val() == "")
				  {
				    $("#err5").html('กรุณากำหนดค่า สถานะ ด้วยค่ะ');
				    $("#activities_status").focus();
				    chk= false;
				  }
				  if($("#activities_description").val() == "")
				  {
				    $("#err6").html('กรุณากำหนดค่า รายละเอียด ด้วยค่ะ');
				    $("#activities_description").focus();
				    chk= false;
				  }
				  if($("#activities_photo").val() == "")
				  {
				    $("#err7").html('กรุณากำหนดค่า รูปภาพกิจกรรม ด้วยค่ะ');
				    $("#activities_photo").focus();
				    chk= false;
				  }
			  
				  if(chk){ 
				  	  
				  	    var url="module/admin_files/activities_update.php"
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
								         location='?fd=admin&page=activities_show';
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
    	 