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

	<!-- <div class="w3-row content_box">

		<p style="text-align:center;width:90%;">&nbsp;</p>
		<div class='datagrid'>
			<table id='tblSearch' width='90%' align='center' class='tblSearch table table-bordered table-hover'>
				<thead>
					<tr>
						<th>ลำดับ </th>
						<th>ชื่อกิจกรรม </th>
						<th>ชื่อผู้สมัคร </th>
						<th>เบอร์โทร </th>
						<th>เลขบัตรประชาชน </th>
						<th>เพศ </th>
						<th>ลบ </th>

					</tr>
				</thead>
				<tbody>
					<?php 
			$sql2 ="select * from tb_member where 1  order by act_id asc";  
			$qess2=$db->query($sql2);	
			$num = 1;

			while($fd2=$qess2->fetch_assoc()){	
			
		?>
					<tr>
						<td>
							<?php echo $num;?>
						</td>
						<?php 
							$sql3 ="select act_name name from tb_activity where act_id='".$fd2['act_id']."'";  
							$qess3=$db->query($sql3);	
							$fd3=$qess3->fetch_assoc();
							
						?>
						<td>
							<?php echo $fd3['name'];?>
						</td>
						<td>
							<?php echo $fd2['mem_name'];?>
						</td>
						<td>
							<?php echo $fd2['mem_tel'];?>
						</td>
						<td>
							<?php echo $fd2['mem_card'];?>
						</td>
						<td>
							<?php echo $fd2['mem_sex'];?>
						</td>
						<td><span class="mem_id">
								<?php echo $fd2['mem_id'];?></span><img class="picdel" src="img/del.png" height="25" width="25"></td>


						<?php $num += 1; } ?>

				</tbody>
			</table>
			<td>
				<div align="center"><a href='module/view_files/print_mem.php?act_id=<?php echo $fd2[' act_id'];?>' target="_blank"><img
						 src="img/ac.png" height="30" width="30"> </a></div>
			</td>
			<p>&nbsp;</p>
		</div>
	</div> -->

	<div class="row">
		<div class="col-12">
			<table id="table_id" class="table" style="width:100%">
				<thead>
					<tr>
						<th>รหัสกิจกรรม </th>
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
			<a id="print" href=target="_blank"><img src="img/ac.png" height="30" width="30"> </a>
		</div>
	</div>
</div>
<!-- <script src="js/search.js"></script> -->
<script type="text/javascript">
	$(document).ready(function () {
		let table_mem;
		let act_id = '';
		$("#print").hide();


		$('#activity').on('change', function () {
			let value = $("#activity option:selected").val();
			act_id = value;
			table_mem.ajax.reload();
		});


		var groupColumn = 2;
		var url = "module/admin_files/get_member_by_act.php"
		table_mem = $('#table_id').DataTable({
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
					console.log(data.length);


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
					"data": "act_id"
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
					"data": "mem_sex"
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
				console.log(api.rows({
					page: 'current'
				}).data());




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
			
				
				// $(rows).eq(i).before(
				// 			'<tr class="group"><td colspan="5">4</td></tr>'
				// 		);

				// var api = this.api();
				
				// var last = null;
				// api.column(groupColumn, {
				// 	page: 'current'
				// }).data().each(function (group, i) {
				// 	if (last !== group) {
				// 		$(rows).eq(i).before(
				// 			'<tr class="group"><td colspan="5">' + group + '</td></tr>'
				// 		);

				// 		last = group;
				// 	}
				// });
			}
		});


	});
</script>