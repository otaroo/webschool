




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-29 20:01:55
Download Code On : developers.khontermfan.com
*/
	require_once "../../config.php";
	$act_id = $_GET['act_id'];
	$sql_pk ="delete from   tb_activity where act_id='$act_id' ";
	$qess3=$db->query($sql_pk);	
	$sql_pk1 ="delete from   tb_member where act_id='$act_id' ";
	$qess4=$db->query($sql_pk1);	
	$sql_pk2 ="delete from   tb_rate where act_id='$act_id' ";
	$qess5=$db->query($sql_pk2);	
	echo "ลบรายการสำเร็จ";
 	?>