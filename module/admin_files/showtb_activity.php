<?php 
if(!isset($_SESSION['Status']))
{
	echo "Please Login!";
	exit();
}	


if(!isset($_SESSION['Status']))
{
	echo "This page for Admin only!";
	exit();
}	
?>




 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<style type="text/css">
<!--
.style1 {color: #0066FF}
-->
</style>
<div class="container-fluid">
<br />
<a href="?fd=admin&amp;page=addtb_activity">เพิ่มข้อมูล
</tr>
  </a>
<h2><b>ข้อมูลกิจกรรม</b></h2>
<div class="w3-row content_box"><?php
	require_once("class/DatetimeFormat.class.php");
	$dt = new DatetimeFormat();
	?>
    	
    	<div class='datagrid'>      
   			<table id='tblSearch' width='90%' align='center' class='tblSearch table table-bordered table-hover'>
			    <thead>
			      <tr>
				 	
				 	<th><div align="center">ชื่อกิจกรรม  </div></th>
				 	<th><div align="center">วันที่กิจกรรม  </div></th>
                    <th><div align="center">รายละเอียด  </div></th>
				  	<th><div align="center">แก้ไข  </div></th>
				  	<th><div align="center">ลบ  </div></th>
		</tr>
		</thead>
		<tbody><?php 
			$sql2 ="select * from tb_activity where 1  order by act_name asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
			
		?><tr>
					
					<td><?php echo $fd2['act_name'];?></td>
					<td><?php echo $fd2['act_date'];?></td>
                    <td><?php echo $fd2['act_des'];?></td>
  			<td><div align="center"><a href='?fd=admin&page=edittb_activity&act_id=<?php echo $fd2['act_id'];?>'><img src="img/do.png" height="30" width="30">  </a></div></td>
					  			<td><div align="center"><span class ="act_id"><?php echo $fd2['act_id'];?></span><img class="picdel"  src="img/del.png" height="25" width="25"></div></td>
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
    	   $(".act_id").hide();
  		   $(".picdel").click(function(){
           var  act_id=$(this).parent().find(".act_id").html();
           //alert(course_id);
           if(confirm('คุณต้องการลบข้อมูลใช่หรือไม่')){
             var url="module/admin_files/deltb_activity.php";
             $.post(url,{act_id:act_id},function (data) {
              alert(data);
              location.reload(); 
          });
    }
  });
  });
	</script>