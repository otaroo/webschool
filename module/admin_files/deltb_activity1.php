




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-19 22:39:56
Download Code On : developers.khontermfan.com
*/
	require_once "../../config.php";
	$act_id = $_POST['act_id'];
	$sql_pk ="delete from  tb_activity where act_id='$act_id' ";
	$qess3=$db->query($sql_pk);	
	echo "ลบรายการสำเร็จ";
 	?>