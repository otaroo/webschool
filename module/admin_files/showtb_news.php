
<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-25 16:25:00
Download Code On : developers.khontermfan.com
*/?> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<div class="container-fluid">
<h5>&nbsp;</h5>
<h5><a href="?fd=admin&page=addtb_news">เพิ่มข้อมูล</a></h5>
<h2><b>ข้อมูลข่าว</b></h2>
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
				 	<th>รหัสข่าว  </th>
				 	<th>กลุ่มข่าว  </th>
				 	<th>หัวข้อข่าว  </th>
				 	<th>รายละเอียด  </th>
				 	<th>วันที่ตีพิมพ์  </th>
				 	<th>ผุ้แต่ง  </th>
				 	<th>คำค้น  </th>
				 	<th>เวลา  </th>
				 	<th>ผลรวม  </th>
				 	<th>สถานะผู้เพิ่ม  </th>
				  	<th>แก้ไข  </th>
				  	<th>ลบ  </th>
		</tr>
		</thead>
		<tbody><?php 
			$sql2 ="select * from tb_news where 1  order by category asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
			
		?><tr>
					<td><?php echo $fd2['id'];?></td>
					<td><?php echo $fd2['category'];?></td>
					<td><?php echo $fd2['title'];?></td>
					<td><?php echo $fd2['description'];?></td>
					<td><?php echo $dt->DTtoLDthai($fd2['publish_time']);?></td>
					<td><?php echo $fd2['author'];?></td>
					<td><?php echo $fd2['tags'];?></td>
					<td><?php echo $dt->DTtoLDthai($fd2['edit_time']);?></td>
					<td><?php echo $fd2['total_view'];?></td>
					<td><?php echo $fd2['status'];?></td>
					  			<td><a href='?fd=admin&page=edittb_news&id=<?php echo $fd2['id'];?>'><img src="img/edit.png" height="30" width="30">  </a></td>
					  			<td><span class ="id"><?php echo $fd2['id'];?></span><img class="picdel"  src="img/del.png" height="25" width="25"></td>
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
    	   $(".id").hide();
  		   $(".picdel").click(function(){
           var  id=$(this).parent().find(".id").html();
           //alert(course_id);
           if(confirm('คุณต้องการลบข้อมูลใช่หรือไม่')){
             var url="module/admin_files/deltb_news.php";
             $.post(url,{id:id},function (data) {
              alert(data);
              location.reload(); 
          });
    }
  });
  });
	</script>