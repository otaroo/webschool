<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-29 18:12:43
Download Code On : developers.khontermfan.com
*/?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<style type="text/css">
	.style1 {
		font-size: 36px;
		font-weight: bold;
	}

	.style2 {
		font-size: 24px
	}
</style>
<div class="container-fluid">

	<h2 class="style1 style2">&nbsp;</h2>
	<h2 align="center" class="style1 style2">การสรุปผลประเมินกิจกรรม</h2>
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

	<div class="row">
		<div class="col-12">
			<table id="table_id" class="table" style="width:100%">
				<thead>
					<tr align="center">
						<th scope="col">รายการ</th>
						<th scope="col">คะแนน</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>



	<!-- <div class="w3-row content_box">
		<?php
	// require_once("class/DatetimeFormat.class.php");
	// $dt = new DatetimeFormat();
	?> -->

	<!-- <div class='datagrid'>
			<table id='tblSearch' width='47%' align='center' class='tblSearch table table-bordered table-hover'>
				<thead>
					<tr>

						<th>
							<div align="center">ชื่อกิจกรรม </div>
						</th>
						<th>
							<div align="center">วันที่กิจกรรม </div>
						</th>
						<th>
							<div align="center">ดูผลการประเมิน</div>
						</th>
						<th>
							<div align="center">พิมพ์ </div>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php 
			$sql2 ="select * from tb_activity where 1  order by act_name desc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
		?>
					<tr>
						<td>
							<?php echo $fd2['act_name'];?>
						</td>
						<td>
							<?php echo $fd2['act_date'];?>
						</td>
						<td>
							<div align="center"><a href='?fd=admin&page=tb_rate1&act_id=<?php echo $fd2[' act_id'];?>'>ดูผลการประเมิน
						</td>
						<td>
							<div align="center"><a href='module/view_files/print_rate.php?act_id=<?php echo $fd2[' act_id'];?>'
									target="_blank"><img src="img/ac.png" height="30" width="30"> </a></div>
						</td>
					</tr>
					<?php  } ?>
				</tbody>
			</table>
		</div> -->
	<!-- </div> -->


</div>

<!-- <script src="js/search.js"></script> -->
<script>
	$(document).ready(function () {
		let table_mem;
		let act_id = '';
		$('#activity').on('change', function () {
			let value = $("#activity option:selected").val();
			act_id = value;
			table_mem.ajax.reload();
		});



		var url = "module/admin_files/get_rate_by_act.php"
		table_mem = $('#table_id').DataTable({
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

					let result = []
					result.push({
						"name": '1.กิจกรรมนี้มีประโยชน์หรือไม่',
						"point": data['r1']
					});
					result.push({
						"name": '2.การประชาสัมพันธ์กิจกรรม/โครงการ',
						"point": data['r2']
					});
					result.push({
						"name": '3.รูปแบบการจัดกิจกรรมมีความเหมาะสม',
						"point": data['r3']
					});
					result.push({
						"name": '4.สิ่งอำนวยความสะดวกมีความเหมาะสม',
						"point": data['r4']
					});
					result.push({
						"name": '5.สถานที่ให้บริการมีความสะดวกในการเดินทาง',
						"point": data['r5']
					});
					result.push({
						"name": '6.เวลาที่ใช้ในการจัดกิจกรรมมีความเหมาะสม',
						"point": data['r6']
					});
					result.push({
						"name": '7.สถานที่จัดมีความเหมาะสม',
						"point": data['r7']
					});
					result.push({
						"name": '8.จิตสำนึก ทัศนคติ ความตระหนัก ความยุติธรรม',
						"point": data['r8']
					});
					result.push({
						"name": '9.การมีส่วนร่วมและในการทำงานเป็นทีม',
						"point": data['r9']
					});
					result.push({
						"name": '10.ความพึงพอใจโดยรวมในการเข้าร่วมโครงการนี้',
						"point": data['r10']
					});
					result.push({
						"name": 'จำนวนคนประเมินทั้งหมด',
						"point": data['count_mem']
					});
					console.log(data);
					if (data['act_id'] === null) {
						result = []
					}

					return result
				}
			},

			columns: [{
					"data": "name",

				},
				{
					"data": "point",
					"className": "text-center",
				},
				// {
				// 	"data": "r3"
				// },
				// {
				// 	"data": "r4"
				// },
				// {
				// 	"data": "r5"
				// },
				// {
				// 	"data": "r6"
				// },
				// {
				// 	"data": "r7"
				// },
				// {
				// 	"data": "r8"
				// },
				// {
				// 	"data": "r9"
				// },
				// {
				// 	"data": "r10"
				// },
				// {
				// 	"data": null,
				// 	"render": function (data) {
				// 		return data.act_id
				// 	}
				// },

			]
		});

	});
</script>