




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-24 18:22:20
Download Code On : developers.khontermfan.com
*/?> 
    	<style> .err{color:red;}</style>
    	 <div style="display:table; margin:0 auto; padding: 20px; width:70%;">
		  <ol class="breadcrumb">
		   <li class="active">
		       <h2>แก้ไขข่าวประชาสัมพันธ์</h2>
		   </li>
		  </ol>
<?php 
  $id_news = $_GET['id_news'];
  $sql = "select * from tb_new where id_news='$id_news'";
  $qqes=$db->query($sql);
  $row_q = $qqes->fetch_assoc();
?>
    	<form id="frmedit" name="frmedit"  method="post"  enctype="multipart/form-data">
				<div class="form-group">    	
    		<input type="hidden" class="form-control" id="id_news" name="id_news" value="<?php echo $row_q['id_news'] ?>" >
				</div>
				<div class="form-group"><label for="title_news">ชื่อข่าว:</label><label id="err2" class="err"></label>    	
    		<input type="text" class="form-control" id="title_news" name="title_news" value="<?php echo $row_q['title_news'] ?>" >
				</div>
				<div class="form-group"><label for="description_news">รายละเอียดข่าว:</label><label id="err3" class="err"></label>    	
    		<input type="text" class="form-control" id="description_news" name="description_news" value="<?php echo $row_q['description_news'] ?>" >
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
		 			  
				  if($("#id_news").val() == "")
				  {
				    $("#err1").html('กรุณากำหนดค่า รหัสข่าว ด้วยค่ะ');
				    $("#id_news").focus();
				    chk= false;
				  }
				  if($("#title_news").val() == "")
				  {
				    $("#err2").html('กรุณากำหนดค่า ชื่อข่าว ด้วยค่ะ');
				    $("#title_news").focus();
				    chk= false;
				  }
				  if($("#description_news").val() == "")
				  {
				    $("#err3").html('กรุณากำหนดค่า รายละเอียดข่าว ด้วยค่ะ');
				    $("#description_news").focus();
				    chk= false;
				  }
				  if($("#date_news").val() == "")
				  {
				    $("#err4").html('กรุณากำหนดค่า วันที่ ด้วยค่ะ');
				    $("#date_news").focus();
				    chk= false;
				  }
			  
				  if(chk){ 
				  	  
				  	    var url="module/admin_files/updatenew.php"
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
								       location='?fd=admin&page=shownew';
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