




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-30 07:37:44
Download Code On : developers.khontermfan.com
*/
	require_once "../../config.php";
	$mem_id = $_POST['mem_id'];
	$sql_pk ="delete from  tb_member where mem_id='$mem_id' ";
	$qess3=$db->query($sql_pk);	
	echo "ลบรายการสำเร็จ";
 	?>