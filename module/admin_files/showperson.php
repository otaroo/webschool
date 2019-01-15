
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<div class="container-fluid">
<h2>&nbsp;</h2>
<p><a href="?fd=admin&page=addperson">เพิ่มข้อมูล</a></p>
<h2><b>ข้อมูลบุคลากร</b></h2>
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
				 	
				 	<th>ชื่อบุคลากร  </th>
				 	<th>ดำรงตำแหน่ง  </th>
				 	<th>ตั้งแต่  </th>
				 	<th>พ้นจากตำแหน่ง  </th>
				  	<th>แก้ไข  </th>
				  	<th>ลบ  </th>
		</tr>
		</thead>
		<tbody><?php 
			$sql2 ="select * from tb_person where 1  order by person_name asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
			
		?><tr>
					
					<td><?php echo $fd2['person_name'];?></td>
					<td><?php echo $fd2['person_pos'];?></td>
					<td><?php echo $fd2['person_since'];?></td>
					<td><?php echo $fd2['person_pos1'];?></td>
					  			<td><a href='?fd=admin&page=editperson&person_id=<?php echo $fd2['person_id'];?>'><img src="img/edit.png" height="30" width="30">  </a></td>
					  			<td><span class ="person_id"><?php echo $fd2['person_id'];?></span><img class="picdel"  src="img/del.png" height="25" width="25"></td>
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
    	   $(".person_id").hide();
  		   $(".picdel").click(function(){
           var  person_id=$(this).parent().find(".person_id").html();
           //alert(course_id);
           if(confirm('คุณต้องการลบข้อมูลใช่หรือไม่')){
             var url="module/admin_files/delperson.php";
             $.post(url,{person_id:person_id},function (data) {
              alert(data);
              location.reload(); 
          });
    }
  });
  });
	</script>