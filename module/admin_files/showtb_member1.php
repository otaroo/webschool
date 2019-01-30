




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-30 18:30:33
Download Code On : developers.khontermfan.com
*/?> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<div class="container-fluid">
<h2><b>การสมัคร</b></h2>
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
				 	<th>รหัสผู้สมัคร  </th>
				 	<th>รหัสกิจกรรม  </th>
				 	<th>ชื่อผู้สมัคร  </th>
				 	<th>เบอร์โทร  </th>
				 	<th>รหัสบัตรประชาชน  </th>
				 	<th>เพศ  </th>
				  	<th>แก้ไข  </th>
		</tr>
		</thead>
		<tbody><?php 
			$sql2 ="select * from tb_member where 1  order by act_id desc";  
			$qess2=$db->query($sql2);	
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
								<?php echo $fd2['mem_name'];?>
							</td>
							<td>
								<?php echo $fd2['mem_tel'];?>
							</td>
							<td>
								<?php echo $fd2['mem_card'];?>
							</td>
							<td>
								<?php 
	        			$_array = array('M'=>'ชาย','F'=>'หญิง');
	        		echo $_array[$fd2['mem_sex']];?>
							</td>

					  			<td><a href='?fd=admin&page=edittb_member1&mem_id=<?php echo $fd2['mem_id'];?>'><img src="img/edit.jpg" height="30" width="30">  </a></td>
		  	</tr>
		  	<?php  } ?>
		  	
		</tbody>
		</table>
		</div>
		</div>
	</div>
	<script src="js/search.js"></script>