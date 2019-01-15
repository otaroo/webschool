
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<div class="container-fluid">
<p>&nbsp;</p>
<p><a href="?fd=admin&page=addtb_activity">เพิ่มข้อมูล</a></p>
<h2><b>ข้อมูลกิจกรรม</b></h2>
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
				 	
				 	<th>ชื่อกิจกรรม  </th>
				 	<th>วันที่กิจกรรม  </th>
				  	<th>แก้ไข  </th>
				  	<th>ลบ  </th>
		</tr>
		</thead>
		<tbody><?php 
			$sql2 ="select * from tb_activity where 1  order by Act_name desc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
			
		?><tr>
					
					<td><?php echo $fd2['Act_name'];?></td>
					<td><?php echo $fd2['Act_date'];?></td>
					  			<td><a href='?fd=admin&page=edittb_activity&Act_id=<?php echo $fd2['Act_id'];?>'><img src="img/edit.png" height="30" width="30">  </a></td>
					  			<td><span class ="Act_id"><?php echo $fd2['Act_id'];?></span><img class="picdel"  src="img/del.png" height="25" width="25"></td>
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
    	   $(".Act_id").hide();
  		   $(".picdel").click(function(){
           var  Act_id=$(this).parent().find(".Act_id").html();
           //alert(course_id);
           if(confirm('คุณต้องการลบข้อมูลใช่หรือไม่')){
             var url="module/admin_files/deltb_activity.php";
             $.post(url,{Act_id:Act_id},function (data) {
              alert(data);
              location.reload(); 
          });
    }
  });
  });
	</script>