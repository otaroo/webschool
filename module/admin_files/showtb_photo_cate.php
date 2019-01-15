




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-26 07:32:48
Download Code On : developers.khontermfan.com
*/?> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<div class="container-fluid">
<h2><b>ข้อมูลรูปภาพ</b></h2>
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
				 	<th>รหัสรูปภาพ  </th>
				 	<th>ชื่อรูปภาพ  </th>
				 	<th>รูปภาพ  </th>
				 	<th>วันที่  </th>
				  	<th>แก้ไข  </th>
				  	<th>ลบ  </th>
		</tr>
		</thead>
		<tbody><?php 
			$sql2 ="select * from tb_photo_cate where 1  order by photo_cate_name asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
			
		?><tr>
					<td><?php echo $fd2['photo_cate_id'];?></td>
					<td><?php echo $fd2['photo_cate_name'];?></td>
					<td><?php echo $dt->DTtoLDthai($fd2['photo']);?></td>
					<td><?php echo $fd2['photo_cate_date'];?></td>
					  			<td><a href='?fd=admin&page=edittb_photo_cate.php?photo_cate_id=<?php echo $fd2['photo_cate_id'];?>'><img src="img/edit.jpg" height="30" width="30">  </a></td>
					  			<td><span class ="photo_cate_id"><?php echo $fd2['photo_cate_id'];?></span><img class="picdel"  src="img/del.png" height="25" width="25"></td>
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
    	   $(".photo_cate_id").hide();
  		   $(".picdel").click(function(){
           var  photo_cate_id=$(this).parent().find(".photo_cate_id").html();
           //alert(course_id);
           if(confirm('คุณต้องการลบข้อมูลใช่หรือไม่')){
             var url="module/admin_files/deltb_photo_cate.php";
             $.post(url,{photo_cate_id:photo_cate_id},function (data) {
              alert(data);
              location.reload(); 
          });
    }
  });
  });
	</script>