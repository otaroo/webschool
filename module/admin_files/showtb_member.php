<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-28 19:37:13
Download Code On : developers.khontermfan.com
*/?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script> -->
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<div class="container-fluid">
	<html>

	<head>


		<h2><b>ข้อมูลการสมัคร</b></h2>
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

							<th bgcolor="#3399CC">ลำดับ </th>
							<th bgcolor="#3399CC">ชื่อกิจกรรม </th>
                             <th bgcolor="#3399CC">คำนำหน้า</th>
							<th bgcolor="#3399CC">ชื่อผู้สมัคร </th>
							<th bgcolor="#3399CC">เบอร์โทรศัพท์ </th>
							
							<th bgcolor="#3399CC">เพศ </th>
                            
							

						</tr>
					</thead>
					<tbody>
						<?php 
			$sql2 ="select * from tb_member where 1  order by act_id asc";  
			$qess2=$db->query($sql2);
			$num = 1 ;

		
		

			while($fd2=$qess2->fetch_assoc()){	
			$num += 1;
		?>
						<tr>
							<td>
								<?php echo $num ;?>
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
								<?php echo $fd2['mem_title'];?>
							</td>
							<td>
								<?php echo $fd2['mem_name'];?>
							</td>
							<td>
								<?php echo $fd2['mem_tel'];?>
							</td>
							
							<td>
								<?php echo $fd2['mem_sex'];?>
							</td>

					


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
		$(".mem_id").hide();
		$(".picdel").click(function () {
			var mem_id = $(this).parent().find(".mem_id").html();
			//alert(course_id);
			if (confirm('คุณต้องการลบข้อมูลใช่หรือไม่')) {
				var url = "?fd=admin&page=deltb_member.php";
				$.post(url, {
					mem_id: mem_id
				}, function (data) {
					alert(data);
					location.reload();
				});
			}
		});
	});
</script>