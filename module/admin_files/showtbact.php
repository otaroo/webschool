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





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">


<div class="dropdown">
	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
	 aria-haspopup="true" aria-expanded="false">
		คลิกเพิ่มกิจกรรม
	</button>
	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		<a class="dropdown-item" href="?fd=admin&page=addtbact">เพิ่มกิจกรรม</a>

	</div>
</div>




<h2><b>ชื่อกิจกรรม</b></h2>
<div class="w3-row content_box">
	<?php
	require_once("class/DatetimeFormat.class.php");
	$dt = new DatetimeFormat();
	?>
	<p style="text-align:center;width:90%;">
		<span style="font-weight:;">ค้นหา:</span> <input type="text" id="txtSearch" name="txtSearch" mgetShowTableaxlength="50" />&nbsp;
		<img id="imgSearch" src="img/del.png" alt="เคลียร์" title="เคลียร์" style="width:150px;width:14px;height:14px;">
	</p>
	<div class='datagrid'>
		<table id='tblSearch' width='90%' align='center' class='tblSearch table table-bordered table-hover'>
			<thead>
				<tr>

					<th>ชื่อกิจกรรม </th>
					<th>วันที่กิจกรรม </th>
					<th>รายละเอียด </th>
					<th>สถานที่ </th>
					<th>จำนวนคนสมัคร </th>
					<th>วันเวลาที่หมดการสมัคร </th>
					<th>เพิ่มรูปกิจกรรม </th>
					<th>แก้ไข </th>
					<th>ลบ </th>
				</tr>
			</thead>
			<tbody>
				<?php 
			$sql2 ="select * from  tb_activity where 1  order by act_name asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
		?>
				<tr>
					<td>
						<?php echo $fd2['act_name'];?>
					</td>
					<td>
						<?php echo $dt->DtoLDthai($fd2['act_date']);?>
					</td>
					<td>
						<?php echo $fd2['act_des'];?>
					</td>
					<td>
						<?php echo $fd2['act_place'];?>
					</td>
					<td>
						<?php echo $fd2['act_delimit'];?>
					</td>
					<td>
						<?php echo $dt->DtoLDthai($fd2['act_limited']);?>
					</td>
					<td><a href='?fd=admin&page=add_file_news&act_id=<?php echo $fd2[' act_id'];?>'><i class="fas fa-images"></i> </a></td>
					<td><a href='?fd=admin&page=edittbact&act_id=<?php echo $fd2[' act_id'];?>'><i class="fas fa-edit"></i> </a></td>
					<td><span class="act_id">
							<?php echo $fd2['act_id'];?></span><i class="fas fa-trash-alt"></i></td>
				</tr>
				<?php  } ?>

			</tbody>
		</table>
	</div>
</div>
</div>
<script src="js/search.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$(".act_id").hide();
		$(".picdel").click(function () {
			var act_id = $(this).parent().find(".act_id").html();
			//alert(course_id);
			if (confirm('คุณต้องการลบข้อมูลใช่หรือไม่')) {
				var url = "?fd=admin&page=delact.php";
				$.post(url, {
					act_id: act_id
				}, function (data) {
					alert(data);
					location.reload();
				});
			}
		});
	});
</script>