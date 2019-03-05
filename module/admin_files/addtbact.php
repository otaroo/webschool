<?php 
if(!isset($_SESSION['Status']))
{
	echo "Please Login!";
	exit();
}	


if(!isset($_SESSION['Status']))
{
	echo "This page for Admin only!";
	exit();
}	
?>





<style> .err{color:red;}</style>
<div style="display:table; margin:0 auto; padding: 20px; width:70%;">
	<h2>กิจกรรม</h2>
	<form id="frminsert" name="frminsert" method="post" enctype="multipart/form-data">
		<div class="form-group"><label for="act_name">ชื่อกิจกรรม:</label><label id="err2" class="err"></label>
			<input type="text" autocomplete="off" class="form-control" id="act_name" name="act_name">
		</div>
		<div class="form-group"><label for="act_date">วันที่กิจกรรม:</label><label id="err3" class="err"></label>
			<input type="date" class="form-control" id="act_date" name="act_date">
		</div>
		<div class="form-group"><label for="act_des">รายละเอียด:</label><label id="err4" class="err"></label>
			<textarea class="form-control" rows="5" id="act_des" name="act_des"></textarea>
		</div>
		<div class="form-group"><label for="act_place">สถานที่:</label><label id="err5" class="err"></label>

			<input type="text" autocomplete="off" class="form-control" id="act_place" name="act_place">
		</div>

		<div class="form-group"><label for="act_delimit">จำนวนเปิดรับสมัคร:</label><label id="err6" class="err"></label>
			<input type="number" class="form-control" id="act_delimit" name="act_delimit">
		</div>

		<div class="form-group"><label for="act_limited">วันที่สิ้นสุดการสมัคร:</label><label id="err7" class="err"></label>
			<input type="date" class="form-control" id="act_limited" name="act_limited">
		</div>
		<div class="form-group"><label for="rate_limited">วันที่สิ้นสุดการประเมิน:</label><label id="err8" class="err"></label>
			<input type="date" class="form-control" id="rate_limited" name="rate_limited">
		</div>

		<span id="status_save"></span>
		<button type="button" onclick="return checkEmpty();" id="btnAdd" name="btnAdd" class="btn btn-info">เพิ่มข้อมูล</button>
		<button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
	</form>
</div>
<script language="javascript">
	function checkEmpty() {
		$("#err2").html('');
		$("#err3").html('');
		$("#err4").html('');
		$("#err5").html('');
		$("#err6").html('');
		$("#err7").html('');
		$("#err8").html('');
		var chk = true;

		if ($("#act_name").val() == "") {
			$("#err2").html('กรุณากำหนดค่า ชื่อกิจกรรม ด้วยค่ะ');
			$("#act_name").focus();
			chk = false;
		}
		if ($("#act_date").val() == "") {
			$("#err3").html('กรุณากำหนดค่า วันที่กิจกรรม ด้วยค่ะ');
			$("#act_date").focus();
			chk = false;
		}
		if ($("#act_des").val() == "") {
			$("#err4").html('กรุณากำหนดค่า รายละเอียด ด้วยค่ะ');
			$("#act_des").focus();
			chk = false;
		}
		if ($("#act_place").val() == "") {
			$("#err5").html('กรุณากำหนดค่า สถานที่ ด้วยค่ะ');
			$("#act_place").focus();
			chk = false;
		}
		if ($("#act_delimit").val() == "") {
			$("#err6").html('กรุณากำหนดค่า จำนวนคน ด้วยค่ะ');
			$("#act_place").focus();
			chk = false;
		}
		if ($("#act_limited").val() == "") {
			$("#err7").html('กรุณากำหนดค่า วันที่สิ้นสุดการสมัคร ด้วยค่ะ');
			$("#act_place").focus();
			chk = false;
		}

		if ($("#rate_limited").val() == "") {
			$("#err8").html('กรุณากำหนดค่า วันที่สิ้นสุดการประเมิน ด้วยค่ะ');
			$("#act_place").focus();
			chk = false;
		}

		if (chk) {

			var url = "module/admin_files/savetbact.php";
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
					if (data.trim() == '1') {
						$("#status_save").html('<font color=green>บันทึกข้อมูลเรียบร้อยแล้วค่ะ...</font><br>');
						setTimeout(function () {
							location = '?fd=admin&page=showtbact';
						}, 3000);
					} else $("#status_save").html(
						'<font color=red>ไม่สามารถบันทึกข้อมูลได้...กรุณาตรวจสอบข้อมูลอีกครั้ง...</font><br>');

				},
				error: function (e) {
					$("#status_save").html(e.responseText);
				}
			});

		} else {
			return false;
		}
	}
</script>