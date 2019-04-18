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



<br>
<ul class="nav justify-content-end">
<nav class="nav nav-pills nav-fill">
<a class="nav-link active" href="?fd=admin&page=addtbact">เพิ่มกิจกรรม</a>
</nav>
</ul>


<h2 align="center"><b>รายชื่อของกิจกรรม</b></h2>
<div class="w3-row content_box"><?php
	require_once("class/DatetimeFormat.class.php");
	$dt = new DatetimeFormat();
	?>

	<div class='datagrid'>
		<table id='tblSearch' width='90%' align='center' class='tblSearch table table-bordered table-hover'>
			<thead>
				<tr>
					<th>ลำดับข่าว </th>
					<th>ชื่อกิจกรรม </th>
					<th>วันที่กิจกรรม </th>
					<th>รายละเอียด </th>
					<th>สถานที่ </th>
					<th>จำนวนคนสมัคร </th>
					<th>วันเวลาที่หมดการสมัคร </th>
					<th>สิ้นสุดวันเวลาการประเมิน </th>
					<th>เพิ่มรูปภาพ </th>
					<th>แก้ไข </th>
					<th>ลบ </th>
				</tr>
			</thead>
			<tbody><?php 
			$sql2 ="select * from  tb_activity where 1  order by act_id asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
			
		?><tr>
					<td><?php echo $fd2['act_id'];?></td>
					<td><?php echo $fd2['act_name'];?></td>

					<td><?php echo $dt->DtoLDthai($fd2['act_date']);?></td>
					<td><?php echo $fd2['act_des'];?></td>
					<td><?php echo $fd2['act_place'];?></td>
					<td><?php echo $fd2['act_delimit'];?></td>
					<td><?php echo $dt->DtoLDthai($fd2['act_limited']);?></td>
					<td><?php echo $dt->DtoLDthai($fd2['rate_date']);?></td>
					<td><a href='?fd=admin&page=add_file_news&act_id=<?php echo $fd2['act_id'];?>'> <i class="fas fa-images"></i>
						</a></td>
					<td><a href='?fd=admin&page=edittbact&act_id=<?php echo $fd2['act_id'];?>'> <i class="fas fa-edit"></i> </a>
					</td>
					<td> <span class="act_id"><?php echo $fd2['act_id'];?></span> <i class="fas fa-trash-alt picdel"></i></td>
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
			if (confirm('คุณต้องการลบข้อมูลใช่หรือไม่')) {
				var url = "module/admin_files/delact.php";
				$.get(url, {
					act_id: act_id
				}, function (data) {
					alert(data);
					location.reload();
				});
			}
		});
	});
</script>