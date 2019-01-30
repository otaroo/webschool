




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-29 17:51:48
Download Code On : developers.khontermfan.com
*/
	require_once "../../config.php";
	$id_news = $_POST['id_news'];
	$sql_pk ="delete from  tb_new where id_news='$id_news' ";
	$qess3=$db->query($sql_pk);	
	echo "ลบรายการสำเร็จ";
 	?>