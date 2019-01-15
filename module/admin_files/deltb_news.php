




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-25 16:25:00
Download Code On : developers.khontermfan.com
*/
	require_once "../../config.php";
	$id = $_POST['id'];
	$sql_pk ="delete from  tb_news where id='$id' ";
	$qess3=$db->query($sql_pk);	
	echo "ลบรายการสำเร็จ";
 	?>