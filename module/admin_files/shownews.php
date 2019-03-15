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







<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-29 17:51:48
Download Code On : developers.khontermfan.com
*/?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script> -->
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<style type="text/css">
	.style1 {
		font-size: 36px;
		font-weight: bold;
	}
</style>
<div class="dropdown">
	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
	 aria-haspopup="true" aria-expanded="false">
		คลิกเพิ่มข่าว
	</button>
	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		<a class="dropdown-item" href="?fd=admin&page=addnews">เพิ่มข่าว</a>

	</div>
</div>



<h2><b>ข่าวประชาสัมพันธ์</b></h2>
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
					<th>ลำดับข่าว </th>
					<th>หัวข้อข่าว </th>
					<th>รายละเอียดข่าว </th>
					<th>เพิ่มรูปภาพข่าว</th>
					<th>แก้ไข </th>
					<th>ลบ </th>
				</tr>
			</thead>
			<tbody>
				<?php 
			$sql2 ="select * from tb_new where 1  order by title_news asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
			
		?>
				<tr>
					<td>
						<?php echo $fd2['id_news'];?>
					</td>
					<td>
						<?php echo $fd2['title_news'];?>
					</td>
					<td>
						<?php echo $fd2['description_news'];?>
					</td>
					 <td><a href='?fd=admin&page=add_file_img&id_news=<?php echo $fd2['id_news'];?>'> <i class="fas fa-images"></i>   </a></td>
					<td><a href='?fd=admin&page=editnews&id_news=<?php echo $fd2['id_news'];?>'>  <i class="fas fa-edit"></i>  </a></td>
					<td> <span class ="id_news"><?php echo $fd2['id_news'];?></span> <i class="fas fa-trash-alt picdel"></i></td> 
					
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
		$(".id_news").hide();
		$(".picdel").click(function () {
			var id_news = $(this).parent().find(".id_news").html().trim();
			//alert(course_id);
			if (confirm('คุณต้องการลบข้อมูลใช่หรือไม่')) {
				var url = "module/admin_files/delnews.php";
				$.get(url, {
					id_news: id_news
				}, function (data) {
					alert(data);					
					location.reload();
				});
			}
		});
	});
</script>