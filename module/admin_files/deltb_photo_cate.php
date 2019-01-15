




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-26 07:32:48
Download Code On : developers.khontermfan.com
*/
	require_once "../../config.php";
	$photo_cate_id = $_POST['photo_cate_id'];
	$sql_pk ="delete from  tb_photo_cate where photo_cate_id='$photo_cate_id' ";
	$qess3=$db->query($sql_pk);	
	echo "ลบรายการสำเร็จ";
 	?>