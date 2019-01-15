

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<div class="container-fluid">
<h2><b>รายชื่อผู้เข้าร่วมกิจกรรม</b></h2>
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
				 	<th>ลำดับ  </th>
				 	<th>ชื่อกิจกรรม  </th>
				 	<th>ชื่อผู้สมัคร  </th>
				 	<th>เบอร์โทร  </th>
                    <th>เลขบัตรประชาชน  </th>
				 	<th>เพศ  </th>
				  	<th>ลบ  </th>
		</tr>
		</thead>
		<tbody><?php 
			$sql2 ="select * from tb_member where 1  order by Act_id asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
			
		?><tr>
					<td><?php echo $fd2['mem_id'];?></td><?php 
							$sql3 ="select Act_name name from tb_activity where Act_id='".$fd2['Act_id']."'";  
							$qess3=$db->query($sql3);	
							$fd3=$qess3->fetch_assoc();
							
						?>
					<td><?php echo $fd3['name'];?></td>
					<td><?php echo $fd2['mem_name'];?></td>
					<td><?php echo $fd2['mem_tel'];?></td>
                    <td><?php echo $fd2['mem_card'];?></td>
					<td><?php echo $fd2['mem_sex'];?></td>
					  			<td><span class ="mem_id"><?php echo $fd2['mem_id'];?></span><img class="picdel"  src="img/del.png" height="25" width="25"></td>
		  	</tr>
		  	<?php  } ?>
		  	
		</tbody>
		</table>
		</div>
		</div>
	</div>
	<script src="js/search.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
    	   $(".mem_id").hide();
  		   $(".picdel").click(function(){
           var  mem_id=$(this).parent().find(".mem_id").html();
           //alert(course_id);
           if(confirm('คุณต้องการลบข้อมูลใช่หรือไม่')){
             var url="module/admin_files/deltb_member.php";
             $.post(url,{mem_id:mem_id},function (data) {
              alert(data);
              location.reload(); 
          });
    }
  });
  });
	</script>
    