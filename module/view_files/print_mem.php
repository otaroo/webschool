<div class="container-fluid">


	<h2 align="center">&nbsp;</h2>
	<h2 align="center" class="style1">รายชื่อผู้เข้าร่วมกิจกรรม</h2>
<div class="w3-row content_box">
		
		<p style="text-align:center;width:90%;">&nbsp;</p>
<div class='datagrid'>
<table id='tblSearch' width='90%' align='center' class='tblSearch table table-bordered table-hover'>
				<thead>
					<tr>
						<th>ลำดับ </th>
						<th>ชื่อกิจกรรม </th>
						<th>ชื่อผู้สมัคร </th>
						<th>เบอร์โทร </th>
						<th>เลขบัตรประชาชน </th>
						<th>เพศ </th>
						
                      
					</tr>
				</thead>
				<tbody>
					<?php 
			$sql2 ="select * from tb_member where 1  order by act_id asc";  
			$qess2=$db->query($sql2);	
			$num = 1;
			
			while($fd2=$qess2->fetch_assoc()){	
			
		?>
					<tr>
						<td>
							<?php echo $num;?>
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
							<?php echo $fd2['mem_sex'];?>
						</td>
					  
					 
                                
                    
					<?php $num += 1; } ?>

				
	  </table>

		    <p>&nbsp;</p>
	</div>
	</div>
</div>
 <script src="../../vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    window.print();
  });

</script>