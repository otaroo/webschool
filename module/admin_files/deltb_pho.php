




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-24 13:09:49
Download Code On : developers.khontermfan.com
*/
	require_once "../../config.php";
	$photo_id = $_POST['photo_id'];
	$sql_pk ="delete from  tb_photo where photo_id='$photo_id' ";
	$qess3=$db->query($sql_pk);	
	echo "ลบรายการสำเร็จ";
 	?>