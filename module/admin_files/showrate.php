




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-17 18:52:42
Download Code On : developers.khontermfan.com
*/?> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<div class="container-fluid">
<h2><b>การประเมินกิจกรรม</b></h2>
<div class="w3-row content_box"><?php
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
				 	<th>รหัสการประเมิน  </th>
				 	<th>รหัสกิจกรรม  </th>
				 	<th>แบบประเมินกิจกรรม  </th>
				 	<th>รหัสผู้สมัคร  </th>
				 	<th>วันที่ประเมิน  </th>
				  	<th>แก้ไข  </th>
		</tr>
		</thead>
		<tbody><?php 
			$sql2 ="select * from tb_rate where 1  order by act_id asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
			
		?><tr>
					<td><?php echo $fd2['rate_id'];?></td>
					<td><?php echo $fd2['act_id'];?></td><?php 
							$sql3 ="select act_name name from tb_activity where act_id='".$fd2['rate_name']."'";  
							$qess3=$db->query($sql3);	
							$fd3=$qess3->fetch_assoc();
							
						?>
					<td><?php echo $dt->DTtoLDthai($fd3['name']);?></td><?php 
							$sql3 ="select mem_name 
 name from tb_member where mem_id='".$fd2['mem_id']."'";  
							$qess3=$db->query($sql3);	
							$fd3=$qess3->fetch_assoc();
							
						?>
					<td><?php echo $fd3['name'];?></td>
					<td><?php 
	        			$_array = array('S'=>'มาก','D'=>'น้อย');
	        		echo $_array[$fd2['date_rate']];?></td>
					  			<td><a href='?fd=admin&page=editrate&rate_id=<?php echo $fd2['rate_id'];?>'><img src="img/edit.jpg" height="30" width="30">  </a></td>
		  	</tr>
		  	<?php  } ?>
		  	
		</tbody>
		</table>
		</div>
		</div>
	</div>
	<script src="js/search.js"></script>