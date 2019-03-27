<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-28 19:25:49
Download Code On : developers.khontermfan.com
*/?>
<style> .err{color:red;}</style>
<div style="display:table; margin:0 auto; padding: 20px; width:70%;">
	<h2>สมัครเข้าร่วมกิจกรรม</h2>
	<form id="frminsert" name="frminsert" method="post" enctype="multipart/form-data">
		<div class="form-group"><label for="act_id">ชื่อกิจกรรม:</label><label id="err2" class="err"></label>
			<select id="act_id" name="act_id" class="form-control">
				<option  value="" disabled>เลือก</option>
				<?php
								 $id_activity='111';
								
								 $id_activity=$_GET['id_activity'];
								
							$sql3 ="select act_id id,act_name  name from tb_activity ";  
							$qess3=$db->query($sql3);													
							while ($fd3=$qess3->fetch_assoc()){
								if(intval($fd3['id']) ==  intval($id_activity)){ ?>
				<option selected value="<?php echo $fd3['id'];?>">
					<?php echo $fd3['name'];?>
				</option>
				<?php	}else{ ?>
				
				<option value="<?php echo $fd3['id'];?>">
					<?php echo $fd3['name'];?>
				</option>
				<?php
						     } }
						       ?>
			</select>
		</div>
		<div class="form-group"><label for="mem_name">คำนำหน้า:</label><label id="err6" class="err"></label>
			<div class="radio">
				<label class="radio-inline"><input type="radio" id="mem_title" name="mem_title" value="นาย"> นาย</label>
				<label class="radio-inline"><input type="radio" id="mem_title" name="mem_title" value="นาง"> นาง</label>
				<label class="radio-inline"><input type="radio" id="mem_title" name="mem_title" value="นางสาว"> นางสาว</label>
			</div>
		</div>
		<div class="form-group"><label for="mem_name">ชื่อผู้สมัคร:</label><label id="err3" class="err"></label>
			<input type="text" autocomplete="off" class="form-control" id="mem_name" name="mem_name">
		</div>
		<div class="form-group"><label for="mem_tel">เบอร์โทร:</label><label id="err4" class="err"></label>
			<input type="number" autocomplete="off" Maxlength="10" class="form-control" id="mem_tel" name="mem_tel" />
		</div>
		<div class="form-group"><label for="mem_card">เลขบัตรประชาชน:</label><label id="usercheck"></label><label id="err8"
			 class="err"></label>
			<input type="number" autocomplete="off" Maxlength="13" class="form-control" id="mem_card" name="mem_card">

		</div>
		<div class="form-group"><label for="mem_sex">เพศ:</label><label id="err7" class="err"></label>
			<div class="radio">
				<label class="radio-inline"><input type="radio" id="mem_sex" name="mem_sex" value="M"> ชาย</label>
				<label class="radio-inline"><input type="radio" id="mem_sex" name="mem_sex" value="F"> หญิง</label>
			</div>
		</div>
		<span id="status_save"></span>
		<button type="button" onclick="return checkEmpty();" id="btnAdd" name="btnAdd" class="btn btn-info">เพิ่มข้อมูล</button>

		<button type="reset" class="btn btn-warning">ล้างข้อมูล</button><label id="err9" class="err"></label>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		let act_id = '';
		$('#act_id').on('change', function () {
			let value = $("#act_id option:selected").val();
			act_id = value;
			$("#mem_card").val('');
			checkActCount();
		});

		$("#mem_card").focusout(function () {
			var mem_card = $(this).val();
			if (act_id == "") {
				$("#err2").html('กรุณากำหนดค่า รหัสกิจกรรม ด้วยค่ะ');
				$("#act_id").focus();
				return false;
			} else {
				$("#err2").html('');
			}
			if (mem_card != "") {
				//   alert(mem_card);
				$.get("module/user_files/checkuser.php", {
					mem_card: mem_card,
					act_id: act_id
				}, function (data) {
					//   alert(data);
					if (data == 0) {
						$("#usercheck").html('<font color=red>ใช้ไม่ได้นะค่ะ เนื่องจากมีการลงทะเบียนแล้วค่ะ</font>');
						$("#mem_card").val('');
						$("#mem_card").focus();
					} else {
						$("#usercheck").html('<font color=green>ใช้ได้ค่ะ..</font>');
					}
				});
			}
		});

		function checkActCount() {
			$.get("module/user_files/checkActCount.php", {
				act_id: act_id
			}, function (data) {
				var arr = data.split("|");
				if (parseInt(arr[1]) >= parseInt(arr[0])) {
					$('#btnAdd').hide();
					$("#err9").html('กิจกรรมนี้คนสมัครเต็มแล้ว');

					return false

				} else {
					$('#btnAdd').show();
					$("#err9").html('');

				}

				if (diffDate(arr[2]) < 0) {
					$('#btnAdd').hide();
					$("#err9").html('กิจกรรมนี้หมดเวลารับสมัครแล้ว');
					return false
				} else {
					$('#btnAdd').show();
					$("#err9").html('');

				}
			});
		}



		function diffDate(date1) {
			var date_act = new Date(date1)
			var date_now = new Date(Date.now())
			var date = (date_act - date_now);
			var one_day = 1000 * 60 * 60 * 24;
			return Math.round(date / one_day);

		}
	});

	function checkEmpty() {
		$("#err2").html('');
		$("#err3").html('');
		$("#err4").html('');
		$("#err5").html('');
		$("#err6").html('');
		$("#err7").html('');
		$("#err8").html('');
		$("#err9").html('');
		var chk = true;

		if ($("#act_id").val() == "") {
			$("#err2").html('กรุณากำหนดค่า รหัสกิจกรรม ด้วยค่ะ');
			$("#act_id").focus();
			chk = false;
		}
		if ($("#mem_name").val() == "") {
			$("#err3").html('กรุณากำหนดค่า ชื่อผู้สมัคร ด้วยค่ะ');
			$("#mem_name").focus();
			chk = false;
		}
		if ($("#mem_tel").val() == "") {
			$("#err4").html('กรุณากำหนดค่า เบอร์โทร ด้วยค่ะ');
			$("#mem_tel").focus();
			chk = false;
		}
		if ($("#mem_card").val() == "") {
			$("#err8").html('กรุณากำหนดค่า เลขบัตรประชาชน ด้วยค่ะ');
			$("#mem_card").focus();
			chk = false;
		}
		if ($("input[name='mem_sex']:checked").val() == undefined) {
			$("#err7").html('กรุณากำหนดค่า เพศ ด้วยค่ะ');
			$("#mem_sex").focus();
			chk = false;
		}
		if ($("input[name='mem_title']:checked").val() == undefined) {
			$("#err6").html('กรุณากำหนดค่า คำนำหน้า ด้วยค่ะ');
			$("#mem_title").focus();
			chk = false;
		}
		$.get("module/user_files/checkuser.php", {
			mem_card: $("#mem_card").val(),
			act_id: $("#act_id").val()
		}, function (data) {
			//   alert(data);
			if (data == 0) {
				$("#usercheck").html('<font color=red>ใช้ไม่ได้นะค่ะ เนื่องจากมีการลงทะเบียนแล้วค่ะ</font>');
				$("#mem_card").val('');
				$("#mem_card").focus();
				chk = false;
			} else {
				chk = true;
			}
		});

		if ($("#act_id").val() != null) {
			$.get("module/user_files/checkActCount.php", {
				act_id: $("#act_id").val()
			}, function (data) {
				var arr = data.split("|");
				if (arr[1] >= arr[0]) {
					$('#btnAdd').hide();
					$("#err9").html('กิจกรรมนี้คนสมัครเต็มแล้ว');
					chk = false;
				} else {
					$('#btnAdd').show();
					$("#err9").html('');
					chk = true;
				}

				if (diffDate(arr[2]) < 0) {
					$('#btnAdd').hide();
					$("#err9").html('กิจกรรมนี้หมดเวลารับสมัครแล้ว');
					chk = false;
				} else {
					$('#btnAdd').show();
					$("#err9").html('');
					chk = true;
				}
			});
		}


		if (chk) {
			var url = "module/admin_files/savetb_member.php";
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
						$("#status_save").html('<font color=green>กรุณาตรวจสอบข้อมูลให้เรียบร้อยก่อนกดตกลงนะค่ะ...</font><br>');
						setTimeout(function () {
							location = '?fd=admin&page=showtb_member&act_id='+$("#act_id").val();
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

	function checkuser(mem_card) {
		if (mem_card != "") {
			//   alert(mem_card);

		} else {
			return false;
		}
	}
</script>