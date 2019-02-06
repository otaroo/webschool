<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-29 18:12:43
Download Code On : developers.khontermfan.com
*/?>
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

	<h2 class="style1">กิจกรรม</h2>
	<div class="w3-row content_box">
		<?php
	// require_once("class/DatetimeFormat.class.php");
	// $dt = new DatetimeFormat();
	?>

		<div class='datagrid'>
			<table id='tblSearch' width='51%' align='center' class='tblSearch table table-bordered table-hover'>
				<thead>
					<tr>

						<th>
							<div align="center">ชื่อกิจกรรม </div>
						</th>
						<th>
							<div align="center">วันที่กิจกรรม </div>
						</th>
						<th>
							<div align="center">ประเมินกิจกรรม </div>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php 
			$sql2 ="select * from tb_activity where 1  order by act_name desc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
			
		?><tr>
					
			<td><?php echo $fd2['act_name'];?></td>
			<td><?php echo $fd2['act_date'];?></td>
        
            <td><div align="center"><a href='?fd=admin&page=tbrate01&act_id=<?php echo $fd2['act_id'];?>'>ประเมินกิจกรรม  </a></div></td>
                   
		  	</tr>
		  	<?php  } ?>
		</tbody>
		</table>
		</div>
	</div>
</div>

<!-- <script src="js/search.js"></script> -->