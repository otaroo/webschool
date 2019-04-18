




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-12-20 18:47:54
Download Code On : developers.khontermfan.com
*/?> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<div class="container-fluid">
<br>
<center><h2><b>ข้อมูลคณะทำงาน</b></h2></center>
<div class="w3-row content_box"><?php
	require_once("class/DatetimeFormat.class.php");
	$dt = new DatetimeFormat();
	?>
    	<br>
    	<div class='datagrid'>      
   			<table id='tblSearch' width='90%' align='center' class='tblSearch table table-bordered table-hover'>
			    <thead>
			      <tr>
				 	
				 	<th width="18%"><div align="center">ชื่อผู้ทำงาน  </div></th>
				 	<th width="13%"><div align="center">ตำแหน่ง  </div></th>
				 	<th width="23%"><div align="center">รูปคณะทำงาน  </div></th>
				  	<th width="11%"><div align="center">ลบ  </div></th>
		</tr>
		</thead>
		<tbody><?php 
			$sql2 ="select * from personnel where 1  order by personnel_name asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
				$url_img = "img/user/".$fd2['personnel_img'];
		?><tr>
					
					<td><?php echo $fd2['personnel_name'];?></td>
					<td><?php echo $fd2['personnel_position'];?></td>
					<td><p align="center"><img src="<?php echo $url_img;?>" width="150px"/> </p>
                    
                   <p align="center"><a href='?fd=admin&page=editlper&personnel_id=<?php echo $fd2['personnel_id'];?>'>  <i class="fas fa-edit"></i>  </a>แก้ไขรูปภาพ
                    <p align="center"><a href='?fd=admin&page=editlper1&personnel_id=<?php echo $fd2['personnel_id'];?>'>  <i class="fas fa-edit"></i>  </a>แก้ไขข้อมูล
				   
                    <td> <p align="center"> <span class ="personnel_id"><?php echo $fd2['personnel_id'];?></span> <i class="fas fa-trash-alt picdel"></i></td> 
                  
					  
		  </div></td>
					  			
					  			
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
    	   $(".personnel_id").hide();
  		   $(".picdel").click(function(){
           var  personnel_id=$(this).parent().find(".personnel_id").html();
           //alert(course_id);
           if(confirm('คุณต้องการลบข้อมูลใช่หรือไม่')){
             var url="module/admin_files/delpersonnel.php";
             $.post(url,{personnel_id:personnel_id},function (data) {
              alert(data);
              location.reload(); 
          });
    }
  });
  });
	</script>