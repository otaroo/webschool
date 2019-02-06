<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-28 19:25:49
Download Code On : developers.khontermfan.com
*/?>
<style> .err{color:red;}</style>
<div style="display:table; margin:0 auto; padding: 20px; width:70%;">
	<h2>สมัครกิจกรรม</h2>
	<form id="frminsert" name="frminsert" method="post" enctype="multipart/form-data">
		<div class="form-group"><label for="act_id">ชื่อกิจกรรม:</label><label id="err2" class="err"></label>
			<select id="act_id" name="act_id" class="form-control">
				<option selected value="" disabled>เลือก</option>
				<?php
								 $id_activity='';
								 $id_activity=$_GET['id_activity'];
							$sql3 ="select act_id id,act_name  name from tb_activity ";  
							$qess3=$db->query($sql3);	
							
							$num = 1;
							$num += 1; 													
							while ($fd3=$qess3->fetch_assoc()){
								if($fd3['id'] ==  $id_activity){ ?>
				<option value="<?php echo $fd3['id'];?>">
					<?php echo $fd3['name'];?>
				</option>

				<?php	}else{ ?>
				?>
				<option value="<?php echo $fd3['id'];?>">
					<?php echo $fd3['name'];?>
				</option>
				<?php
						     } }
						       ?>
			</select>
		</div>
        
		<div class="form-group"><label for="mem_name">ชื่อผู้สมัคร:</label><label id="err3" class="err"></label>
			<input type="text" class="form-control" id="mem_name" name="mem_name">
		</div>
		<div class="form-group"><label for="mem_tel">เบอร์โทร:</label><label id="err4" class="err"></label>
			<input type="tex"  Maxlength ="10" class="form-control" id="mem_tel" name="mem_tel" />
		</div>
		<div class="form-group"><label for="mem_card">เลขบัตรประชาชน:</label><label id="usercheck"></label><label id="err4"
			 class="err"></label>
			<input type="tex" Maxlength ="13" class="form-control" id="mem_card" name="mem_card">
			<div class="form-group"><label for="mem_sex">เพศ:</label><label id="err5" class="err"></label>
				<div class="radio">
					<label class="radio-inline"><input type="radio" id="mem_sex" name="mem_sex" value="M"> ชาย</label>
					<label class="radio-inline"><input type="radio" id="mem_sex" name="mem_sex" value="F"> หญิง</label>
				</div>
			</div>

			<span id="status_save"></span>
			<button type="button" onclick="return checkEmpty();" id="btnAdd" name="btnAdd" class="btn btn-info">เพิ่มข้อมูล</button>
			<button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		//alert(55);
		let act_id = '';
		$('#act_id').on('change', function () {
			let value = $("#act_id option:selected").val();
			act_id = value;
			$("#mem_card").val('');
		});

		$("#mem_card").focusout(function () {
			var mem_card = $(this).val();
			if (act_id == "") {
				$("#err2").html('กรุณากำหนดค่า รหัสกิจกรรม ด้วยค่ะ');
				$("#act_id").focus();
				return false;
			}else{
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
	});

	function checkEmpty() {
		$("#err2").html('');
		$("#err3").html('');
		$("#err4").html('');
		$("#err5").html('');
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
			$("#err5").html('กรุณากำหนดค่า เลขบัตรประชาชน ด้วยค่ะ');
			$("#mem_card").focus();
			chk = false;
		}
		if ($("#mem_sex").val() == "") {
			$("#err5").html('กรุณากำหนดค่า เพศ ด้วยค่ะ');
			$("#mem_sex").focus();
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
						$("#status_save").html('<font color=green>บันทึกข้อมูลเรียบร้อยแล้วค่ะ...</font><br>');
						setTimeout(function () {
							location = '?fd=admin&page=showtb_member';
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