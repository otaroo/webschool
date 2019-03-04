<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script> -->
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<style type="text/css">
	.style1 {
		font-size: 24px;
		font-weight: bold;
	}
</style>

<div class="container-fluid">


	<h2 align="center">&nbsp;</h2>
	<h2 align="center" class="style1">รายชื่อผู้เข้าร่วมกิจกรรม</h2>
	<div class="row">
		<div class="col-12 text-center">
			<select id="activity">
				<option value="">เลือกกิจกรรม</option>
				<?php 
					$sql2 ="select * from tb_activity where 1  order by act_name desc";  
					$qess2=$db->query($sql2);	
					while($fd2=$qess2->fetch_assoc()){	
				?>
				<option value="<?php echo $fd2['act_id'];?>">
					<?php echo $fd2['act_name'];?>
				</option>
				<?php  } ?>
			</select>
		</div>
	</div>

	<br />
	<div class="row">
		<div class="col-4">
			<table id="table_count" class="table" style="width:100%">
				<thead>
					<tr align="center">
						<th>เพศ </th>
						<th>จำนวน </th>
					</tr>
				</thead>
				<tbody>
					<tr align="center">
						<td>ชาย</td>
						<td>
							<p id="mem_m"></p>
						</td>
					</tr>
					<tr align="center">
						<td>หญิง</td>
						<td>
							<p id="mem_f"></p>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-4">
			<table id="table_count_all" class="table" style="width:100%">
				<thead>
					<!-- <tr align="center">
						<th>เพศ </th>
						<th>จำนวน </th>
					</tr> -->
				</thead>
				<tbody>
					<tr align="center">
						<td>ผู้สมัครทั้งหมด</td>
						<td>
							<p id="mem_all"></p>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<table id="table_mem" class="table" style="width:100%">
				<thead>
					<tr>
						<th>ลำดับ </th>
						<th>ชื่อผู้สมัคร </th>
						<th>เบอร์โทร </th>
						<th>เลขบัตรประชาชน </th>
						<th>เพศ </th>
						<th>ลบ </th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-12 text-center">
			
		</div>
	</div>
</div>
<!-- <script src="js/search.js"></script> -->
<script type="text/javascript">
	$(document).ready(function () {
		let table_mem;
		let table_count;
		let act_id = '';
		$("#print").hide();
		$("#table_count").hide();
		$("#table_count_all").hide();


		$('#activity').on('change', function () {
			let value = $("#activity option:selected").val();
			act_id = value;
			table_mem.ajax.reload();
			count_mem(act_id);
		});

		function count_mem(params) {
			var url_count = "module/admin_files/count_mem.php?act_id=" + params;
			$.get(url_count, function (data, status) {
				$('#mem_f').text(0 + ' คน');
				$('#mem_m').text(0 + ' คน');
				$('#mem_all').text(0 + ' คน');
				let mem_all = 0;

				if (data.length > 0) {
					data.forEach(element => {
						console.log(element);
						
						mem_all +=parseInt(element['mem_count']);
						if (element['mem_sex'] == "F") {
							$('#mem_f').text(element['mem_count'] + ' คน');
						}
						if (element['mem_sex'] == "M") {
							$('#mem_m').text(element['mem_count'] + ' คน');
						}
					});
					console.log(mem_all);
					
					$('#mem_all').text(mem_all + ' คน');
					$("#table_count").show();
					$("#table_count_all").show();
				} else {
					$("#table_count").hide();
					$("#table_count_all").hide();
				}



			});
		}


		var url = "module/admin_files/get_member_by_act.php"
		table_mem = $('#table_mem').DataTable({
			"language": {
				"url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Thai.json"
			},
			"searching": false,
			"paging": false,
			"ordering": false,
			"ordering": false,
			"info": false,
			"serverSide": true,
			"ajax": {
				"url": url,
				"data": function (d) {
					d.act_id = act_id;
				},
				dataSrc: function (data) {
					if (data.length != 0) {
						$("#print").show();
						$("#print").attr("href", "module/view_files/print_mem.php?act_id=" + act_id)
					} else {
						$("#print").hide();
					}

					return data
				}
			},
			columns: [{
					"data": null,
					render: function (data, type, row, meta) {
						return meta.row + meta.settings._iDisplayStart + 1;
					}
				},
				{
					"data": "mem_name"
				},
				{
					"data": "mem_tel"
				},
				{
					"data": "mem_card"
				},
				{
					"data": "mem_sex",
					"render": function (data) {
						let text = '';
						if (data == "F") {
							text = "หญิง";
						}
						if (data == "M") {
							text = "ชาย";
						}
						return text
					}
				},
				{
					"data": null,
					"render": function (data) {
						return '<span class="mem_id">' +
							'<?php echo $fd2["mem_id"];?></span><img class="picdel" src="img/del.png" height="25" width="25">'
					}
				},

			],
			drawCallback: function (settings) {
				var api = this.api();
				$(".mem_id").hide();
				$(".picdel").click(function () {
					var mem_id = $(this).parent().find(".mem_id").html();
					//alert(course_id);
					if (confirm('คุณต้องการลบข้อมูลใช่หรือไม่')) {
						var url = "module/admin_files/deltb_member.php";
						$.post(url, {
							mem_id: mem_id
						}, function (data) {
							alert(data);
							location.reload();
						});
					}
				});
			}
		});


	});
</script>
