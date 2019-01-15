




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-29 12:16:04
Download Code On : developers.khontermfan.com
*/
	require_once "../../config.php";
	$ph_id = $_POST['ph_id'];
	$sql_pk ="delete from   tb_photo where ph_id='$ph_id' ";
	$qess3=$db->query($sql_pk);	
	echo "ลบรายการสำเร็จ";
 	?>