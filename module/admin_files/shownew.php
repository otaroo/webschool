
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



<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-24 18:23:38
Download Code On : developers.khontermfan.com
*/?> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<div class="container-fluid">
<h2><b>ข่าวประชาสัมพันธ์</b></h2>
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
				 	<th>ลำดับข่าว  </th>
				 	<th>ชื่อข่าว  </th>
				 	<th>รายละเอียดข่าว  </th>
				  	<th>แก้ไข  </th>
				  	<th>ลบ  </th>
		</tr>
		</thead>
		<tbody><?php 
			$sql2 ="select * from tb_new where 1  order by title_news asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
			
		?><tr>
					<td><?php echo $fd2['id_news'];?></td>
					<td><?php echo $fd2['title_news'];?></td>
					<td><?php echo $fd2['description_news'];?></td>
					
					  			<td><a href='?fd=admin&page=editnew&id_news=<?php echo $fd2['id_news'];?>'><img src="img/edit.jpg" height="30" width="30">  </a></td>
					  			<td><span class ="id_news"><?php echo $fd2['id_news'];?></span><img class="picdel"  src="img/del.png" height="25" width="25"></td>
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
    	   $(".id_news").hide();
  		   $(".picdel").click(function(){
           var  id_news=$(this).parent().find(".id_news").html();
           //alert(course_id);
           if(confirm('คุณต้องการลบข้อมูลใช่หรือไม่')){
             var url="?fd=admin&page=delnew.php";
             $.post(url,{id_news:id_news},function (data) {
              alert(data);
              location.reload(); 
          });
    }
  });
  });
	</script>