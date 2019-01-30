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
	<h2 class="style1 style2">การสรุปผลประเมินกิจกรรม</h2>
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
		$('#activity').on('change', function () {
			let value = $("#activity option:selected").text();
			alert(value);
		});
		getmember('41');
		$('#table_id').DataTable();

		function getmember(value) {
			var url = "module/admin_files/get_member_by_act.php?act_id=" + value;
			$.ajax({
				type: "GET",
				url: url,
				success: function (result) {
					var content = '';
					$.each(result, function (i, item) { // loop..
						// content = content + "Location : " + item.LOC_NAME + ', Lat = ' + item.LAT + ', Lng = ' + item.LNG + ' <br>';
						console.log('item', item);
					});

				},
				error: function (e) {
					console.log('error', e);

				}
			});
		}

	});
</script>