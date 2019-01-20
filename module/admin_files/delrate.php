




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-16 19:29:13
Download Code On : developers.khontermfan.com
*/
	require_once "../../config.php";
	$rate_id = $_POST['rate_id'];
	$sql_pk ="delete from  tb_rate where rate_id='$rate_id' ";
	$qess3=$db->query($sql_pk);	
	echo "ลบรายการสำเร็จ";
 	?>