<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3"><span class="card-title text-center">ข้อมูลกิจกรรม</span></h1>

  <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php?page=main">เครือข่าย &quot;เพื่อนเด็ก&quot;</a>
        </li>
        <li class="breadcrumb-item active"><span class="card-title text-center">ข้อมูลกิจกรรม</span></li>
<?php
	if(@$_SESSION['sess_status']=='A'){
?>
        <li class="breadcrumb-item active">
          <a href="index.php?fd=admin&page=activities_add"><span class="card-title text-center">เพิ่มข้อมูลกิจกรรม</span></a>
        </li>
<?php
	}
?>
  </ol>

      <div class="container-fluid">
<div class="w3-row content_box"><?php
	require_once("class/DatetimeFormat.class.php");
	$dt = new DatetimeFormat();
	?>
    	<p style="text-align:center;width:100%;">
         <span style="font-weight:;">ค้นหา:</span> <input type="text" id="txtSearch" name="txtSearch" mgetShowTableaxlength="50" />
         <img id="imgSearch" src="img/del.png" alt="เคลียร์" title="เคลียร์" style="width:150px;width:14px;height:14px;">
      </p>
    	<div class='datagrid'>      
   			<table id='tblSearch' width='90%' align='center' class='tblSearch table table-bordered table-hover'>
			    <thead>
			      <tr>
				 	
				 	<th>ชื่อกิจกรรม  </th>
				 	<th>วันที่จัดกิจกรรม  </th>
				 	<th>สถานที่จัดกิจกรรม  </th>
				 	<th>สถานะ  </th>
				 	<th>รายละเอียด  </th>
				 	<th>รูปภาพกิจกรรม  </th>
                    <th>อ่านรายละเอียดเพิ่มเติม  </th>
				  	<th>แก้ไข  </th>
				  	<th>ลบ  </th>
		</tr>
		</thead>
		<tbody><?php 
			$sql2 ="select * from tb_activities where 1  order by activities_id desc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
			
		?><tr>
					
					<td><?php echo $fd2['activities_name'];?></td>
					<td><?php echo $dt->DTtoLDthai($fd2['activities_date']);?></td>
					<td><?php echo $fd2['activities_place'];?></td>
					<td><?php 
	        			$_array = array('0'=>'ยังไม่ได้ดำเนินการ','1'=>'กำลังดำเนินการ','2'=>'ดำเนินการแล้ว');
	        		echo $_array[$fd2['activities_status']];?></td>
					<td><?php echo $fd2['activities_description'];?></td>
					<td><?php
					$url_img = "files/".$fd2['activities_id']."/".$fd2['activities_id'].$fd2['activities_photo'];

					?>
						<img src="<?php echo $url_img;?>" width="50px">

					</td>
                    <td><?php echo $fd2['activities_id'];?></td>
					  			<td><a href='?fd=admin&page=activities_edit&activities_id=<?php echo $fd2['activities_id'];?>'><img src="img/edit.png" height="30" width="30">  </a></td>
					  			<td><span class ="activities_id"><?php echo $fd2['activities_id'];?></span><img class="picdel"  src="img/del.png" height="30" width="30"></td>
		  	</tr>
		  	<?php  } ?>
		  	
		</tbody>
		</table>
		</div>
		</div>
	</div>
      <div class="row">
        <div class="col-lg-6"></div>
  </div>
     
      <!-- /.row -->

</div>
<script src="js/search.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
    	   $(".activities_id").hide();
  		   $(".picdel").click(function(){
           var  activities_id=$(this).parent().find(".activities_id").html();
           //alert(course_id);
           if(confirm('คุณต้องการลบข้อมูลใช่หรือไม่')){
             var url="module/admin_files/activities_delete.php";
             $.post(url,{activities_id:activities_id},function (data) {
              alert(data);
              location.reload(); 
          });
    }
  });
  });
	</script>