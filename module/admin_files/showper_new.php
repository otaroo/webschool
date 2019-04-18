<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-29 18:12:43
Download Code On : developers.khontermfan.com*/

require_once("class/DatetimeFormat.class.php");
	$dt = new DatetimeFormat();

?>

<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-30 09:04:59
Download Code On : developers.khontermfan.com
*/?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<div class="container-fluid">
	<center>
	<br>
		<h2>
		<div class="alert alert-warning" role="alert"><b>ข้อมูลบุคลากร</b></h2></div>
	</center>
	<div class="w3-row content_box"><?php
	require_once("class/DatetimeFormat.class.php");
	$dt = new DatetimeFormat();
	?>
<br>
<div class="alert alert-secondary" role="alert">
			<table class="table table-hover">
				<thead>
					<tr>

						<th scope="col">ชื่อบุคลากร</th>
						<th scope="col">ดำรงตำแหน่ง </th>
						<th scope="col">ตั้งแต่ พ.ศ.</th>
						<th scope="col">พ้นจากตำแหน่ง</th>

					</tr>
				</thead>
				<tbody><?php 
			$sql2 ="select * from tb_person where 1  order by person_id asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
			
		?><tr>




						<td><?php echo $fd2['person_name'];?></td>
						<td><?php echo $fd2['person_pos'];?></td>
						<td><?php echo $dt->DtoLDthai($fd2['person_since']);?></td>
						<td><?php echo $dt->DtoLDthai($fd2['person_pos1']);?></td>

					</tr>
					<?php  } ?>

				</tbody>
			</table>
		</div>
	</div>
</div>
<script src="js/search.js"></script>