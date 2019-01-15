<?php 
	require_once "../../config.php";
	$activities_id = $_POST['activities_id'];
	$sql_pk ="delete from  tb_activities where activities_id='$activities_id' ";
	$qess3=$db->query($sql_pk);	
	echo "ลบรายการสำเร็จ";
 	?>