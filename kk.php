

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


<style type="text/css">
	.style1 {
		font-size: 36px;
		font-weight: bold;
	}

	.style2 {
		font-size: 24px
	}
</style>
<div class="container">
  <div class="row">
    <div class="col-md-4">.col-md-4</div>
    <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
  </div>
  <div class="row">
    <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
    <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
  </div>
 
</div>

<h2><b>ข้อมูลคณะทำงาน</b></h2>
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
				 	<th width="22%"><div align="center">ลำดับผู้ทำงาน  </div></th>
				 	<th width="18%"><div align="center">ชื่อผู้ทำงาน  </div></th>
				 	<th width="13%"><div align="center">ตำแหน่ง  </div></th>
				 	<th width="23%"><div align="center">รูปคณะทำงาน  </div></th>
				  	<th width="13%"><div align="center">แก้ไข  </div></th>
				  	<th width="11%"><div align="center">ลบ  </div></th>
		</tr>
		</thead>
		<tbody><?php 
			$sql2 ="select * from personnel where 1  order by personnel_name asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
				$url_img = "img/user/".$fd2['personnel_id'].$fd2['personnel_img'];
		?><tr>
					<td><?php echo $fd2['personnel_id'];?></td>
					<td><?php echo $fd2['personnel_name'];?></td>
					<td><?php echo $fd2['personnel_position'];?></td>
					<td><p align="center"><img src="<?php echo $url_img;?>" width="150px"/> </p>
                    
                   
                    
				    <p align="center"><a href="?fd=admin&amp;page=editlper&personnel_id=<?php echo $fd2['personnel_id'];?>"><img src="img/dl.png" height="30" width="30"></a>แก้ไขรูปภาพ
                     <p align="center"><a href="?fd=admin&amp;page=editlper1&personnel_id=<?php echo $fd2['personnel_id'];?>"><img src="img/dl.png" height="30" width="30"></a>แก้ไขข้อมูล
					<p align="center">
					  
					<p align="center">
                  
					  
		  </div></td>
					  			<td><div align="center"><a href='?fd=admin&page=editpersonnel&personnel_id=<?php echo $fd2['personnel_id'];?>'><img src="img/do.png" height="30" width="30">  </a></div></td>
					  			<td><div align="center"><span class ="personnel_id"><?php echo $fd2['personnel_id'];?></span><img class="picdel"  src="img/del.png" height="25" width="25"></div></td>
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