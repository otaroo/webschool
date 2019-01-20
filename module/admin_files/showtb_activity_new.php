




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-29 18:12:43
Download Code On : developers.khontermfan.com
*/?> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://sogddt.vinhphuc.gov.vn/ResourcesList/jquery.tablePagination.0.5.js"></script>
<link rel="stylesheet" href="css/pagation-style.css">
<link rel="stylesheet" href="css/page-style.css">
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style2 {font-size: 24px}
-->
</style>
<div class="container-fluid">

<h2 class="style1 style2">กิจกรรมทางโรงเรียน กศน.นาโบสถ์</h2>
<div class="w3-row content_box"><?php
	require_once("class/DatetimeFormat.class.php");
	$dt = new DatetimeFormat();
	?>
    	<p style="text-align:center;width:90%;">&nbsp;</p>
<div class='datagrid'>      
   			<table id='tblSearch' width='90%' align='center' class='tblSearch table table-bordered table-hover'>
			    <thead>
			      <tr>
				 	
				 	<th bgcolor="#3399FF">ชื่อกิจกรรม  </th>
				 	<th bgcolor="#3399FF">วันที่กิจกรรม  </th>
                    <th bgcolor="#3399FF">รายละเอียด  </th>
                    <th bgcolor="#3399FF">สมัครกิจกรรม  </th>
                    
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
            <td><div align="center"><a href='?fd=admin&amp;page=addtb_member&mem_id=<?php echo $fd2['act_id'];?>'><img src="img/us.png" height="30" width="30">  </a></div></td>      
		  	</tr>
		  	<?php  } ?>
		  	
		</tbody>
		</table>
	</div>
  </div>
</div>

	<script src="js/search.js"></script>