<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-29 18:12:43
Download Code On : developers.khontermfan.com*/

require_once("class/DatetimeFormat.class.php");
	$dt = new DatetimeFormat();

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script> -->
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<style type="text/css">
	.style1 {
		font-size: 36px;
		font-weight: bold;
	}
</style>
<div class="container-fluid">
	<br>
	<center>
		<h2 class="style1">การประเมินกิจกรรม</h2>
	</center>
	<div class="w3-row content_box">
		<?php
	
	?>
		<br>
		<div class='datagrid'>
			<table class="table table-hover">
				<thead>
					<tr>

						<th scope="col">ชื่อกิจกรรม</th>
						<th scope="col">วันที่กิจกรรม</th>
						<th scope="col">ประเมินกิจกรรม</th>
					</tr>
				</thead>

				<tbody>
					<?php 
			$sql2 ="select * from tb_activity where 1  order by act_date desc ";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){				
		?>
					<tr>
						<td>
							<?php echo $fd2['act_name'];?>
						</td>
						<td>
							<?php echo $dt->DtoLDthai($fd2['act_date']); ?>
						</td>

						<td>
							<? if($fd2['rate_date'] > date("Y-m-d")){ ?>
							<a href='?fd=admin&page=tbrate01&act_id=<?php echo $fd2['act_id'];?>'>ประเมินกิจกรรม </a>
							<? }else{ ?>
							<div style="color:red;">หมดเวลาประเมิน</div>
							<? } ?>


						</td>
					</tr>
					<?php  } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- <script src="js/search.js"></script> -->