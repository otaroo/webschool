<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-29 18:12:43
Download Code On : developers.khontermfan.com*/

require_once("class/DatetimeFormat.class.php");
	$dt = new DatetimeFormat();

?>





 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<div class="container-fluid">
<h2>&nbsp;</h2>

<br>
<ul class="nav justify-content-end">
<nav class="nav nav-pills nav-fill">
<a class="nav-link active" href="?fd=admin&page=addperson">เพิ่มข้อมูล</a>
</nav>
</ul>
<center><h2><b>ข้อมูลบุคลากร</b></h2></center.
<div class="w3-row content_box"><?php
	require_once("class/DatetimeFormat.class.php");
	$dt = new DatetimeFormat();
	?>
    	<br>
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
			$sql2 ="select * from tb_person where 1  order by person_id asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
			
		?><tr>
					
					<td><?php echo $fd2['person_name'];?></td>
					<td><?php echo $fd2['person_pos'];?></td>
					
					<td><?php echo $dt->DtoLDthai($fd2['person_since']);?></td>
					<td><?php echo $dt->DtoLDthai($fd2['person_pos1']);?></td>


									<td><a href='?fd=admin&page=editperson&person_id=<?php echo $fd2['person_id'];?>'>  <i class="fas fa-edit"></i>  </a></td>
					  			<td> <span class ="person_id"><?php echo $fd2['person_id'];?></span> <i class="fas fa-trash-alt picdel"></i></td>  
					  			
		  	
				
				
				
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