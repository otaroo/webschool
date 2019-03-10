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
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<div class="container-fluid">

	<h2 class="style1 style2">&nbsp;</h2>
	<h2 align="center" class="style1 style2">การสรุปผลประเมินกิจกรรม</h2>
	<div class="row">
		<div class="col-12 text-center">
	 
		    <form name="form" id="form" action="reportaddpro.php">
		      <select name="act_id" id="act_id" onchange="MM_jumpMenu('parent',this,0)">
		      	<option value="">เลือกกิจกรรม</option>
				<?php 
				$act_id = (isset($_GET['act_id']))?$_GET['act_id']:"";
					$sql2 ="select * from tb_activity where 1  order by act_name desc";  
					$qess2=$db->query($sql2);	
					while($fd2=$qess2->fetch_assoc()){	
						$act_select = ($act_id==$fd2['act_id'])?"selected":"";
				?>
				<option value="?fd=admin&page=showtbrate&act_id=<?php echo $fd2['act_id'];?>" <?php echo $act_select;?>>
					<?php echo $fd2['act_name'];?>
				</option>
				<?php  } ?>
               
              </select>
            
	    </div>
	</div>

<?php
$_arr = array("","1.กิจกรรมนี้มีประโยชน์หรือไม่","2.การประชาสัมพันธ์กิจกรรม/โครงการ","3.รูปแบบการจัดกิจกรรมมีความเหมาะสม","4.สิ่งอำนวยความสะดวกมีความเหมาะสม","5.สถานที่ให้บริการมีความสะดวกในการเดินทาง","6.เวลาที่ใช้ในการจัดกิจกรรมมีความเหมาะสม","7.สถานที่จัดมีความเหมาะสม","8.จิตสำนึก ทัศนคติ ความตระหนัก ความยุติธรรม","9.การมีส่วนร่วมและในการทำงานเป็นทีม","10.ความพึงพอใจโดยรวมในการเข้าร่วมโครงการนี้");


?>
	<div class="row">
		<div class="col-12">
			<table id="table_id" class="table" style="width:100%">
				<thead>
					<tr align="center">
					 
						<th   valign="center" rowspan="2">รายการ</th>
						<th scope="col" colspan="3">ระดับความคิดเห็น (ร้อยละ)</th>
						<th valign="center" rowspan="2">ค่าเฉลี่ย</th>
					</tr>
					<tr align="center">				 
						<th>มาก</th>
						<th>ปานกลาง</th>
						<th>น้อย</th>			 
					</tr>
				</thead>
				<tbody>
					<?php
$sql2 =" SELECT * FROM `tb_rate` where act_id = '$act_id' ";  
$qess2=$db->query($sql2);
$result;	
$arr_act = array();
$arr_act_count = array();
for($l=1;$l<=10;$l++){
	$arr_act_count[$l][1]=0;
	$arr_act_count[$l][2]=0;
	$arr_act_count[$l][3]=0;
}
$count_act = $qess2->num_rows;
while($fd2=$qess2->fetch_assoc()){
	$arr_act_count[1][$fd2['r1']]+=1;
	$arr_act_count[2][$fd2['r2']]+=1;
	$arr_act_count[3][$fd2['r3']]+=1;
	$arr_act_count[4][$fd2['r4']]+=1;
	$arr_act_count[5][$fd2['r5']]+=1;
	$arr_act_count[6][$fd2['r6']]+=1;
	$arr_act_count[7][$fd2['r7']]+=1;
	$arr_act_count[8][$fd2['r8']]+=1;
	$arr_act_count[9][$fd2['r9']]+=1;
	$arr_act_count[10][$fd2['r10']]+=1;

	/*$arr_act[1]+=$fd2['r1'];
	$arr_act[2]+=$fd2['r2'];
	$arr_act[3]+=$fd2['r3'];
	$arr_act[4]+=$fd2['r4'];
	$arr_act[5]+=$fd2['r5'];
	$arr_act[6]+=$fd2['r6'];
	$arr_act[7]+=$fd2['r7'];
	$arr_act[8]+=$fd2['r8'];
	$arr_act[9]+=$fd2['r9'];
	$arr_act[10]+=$fd2['r10'];*/
}
?>
					<tr  >
					 
		<?php
$act_avg =0;
$act_avg_all =0;

		 for($i=1;$i<count($_arr);$i++){?>
						<td><?php echo $_arr[$i];?></td>
						<td><?php 
							$act_max = $arr_act_count[$i][3]*3;
							$act_max_per = ($arr_act_count[$i][3]*100/$count_act);
							echo  number_format($act_max_per,2,".",",");
						?></td>
						<td><?php 
							$act_middle = $arr_act_count[$i][2]*2;
							$act_middle_per = ($arr_act_count[$i][2]*100/$count_act);
							echo  number_format($act_middle_per,2,".",",");
						?></td>
						<td><?php 
							$act_min = $arr_act_count[$i][1];
							$act_middle_per = ($arr_act_count[$i][1]*100/$count_act);
							echo  number_format($act_middle_per,2,".",",");
						?></td>
						<td>
							<?PHP
							 $act_avg = (($act_max+$act_middle+$act_min)/$count_act) ;
							 $act_avg_all += $act_avg;
							 echo number_format($act_avg,2,".",",");
							?>						</td>
	</tr>

				<?php } ?>		
				<tr>
					<td colspan="3">สรุผลการประเมินกิจกรรม</td>
					<td><?php
$t = number_format(($act_avg_all/10),2,".",",");

if ($t < "1") {
    echo "น้อย";
} elseif ($t < "2.60") {
    echo "ปานกลาง";
} else {
    echo "มาก";
}
?></td>
					<td><?php echo number_format(($act_avg_all/10),2,".",",");?></td>
</tr>
				<tr>
					<td colspan="5"><p>จำนวนผู้ประเมิน <?php echo $count_act;?> หน่อ</p>
                   
				    <p>&nbsp;</p></td>
</tr>
				</tbody>
			</table>
	  </div>
	</div>

</form>



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
					console.log(data);
					
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
					// result.push({
					// 	"name": 'จำนวนคนประเมินทั้งหมด',
					// 	"point": data['count_mem'] + ' คน'
					// });
					result.push({
						"name": '<b>รวม</b>',
						"point":((parseFloat(data['r1']) +parseFloat(data['r2'])+parseFloat(data['r3'])+parseFloat(data['r4'])+parseFloat(data['r5'])
						+parseFloat(data['r6'])+parseFloat(data['r7'])+parseFloat(data['r8'])+parseFloat(data['r9'])+parseFloat(data['r10']) )/10).toFixed(2)
					});
					result.push({
						"name": '<b>จำนวนคนประเมินทั้งหมด</b>',
						"point": data['count_mem'] + ' คน'
					});
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
			]
		});

	});
</script>