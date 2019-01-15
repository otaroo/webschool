

<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-30 19:39:14
Download Code On : developers.khontermfan.com
*/
	require_once "../../config.php";
	$Act_id = $_POST['Act_id'];
	$sql_pk ="delete from  tb_activity where Act_id='$Act_id' ";
	$qess3=$db->query($sql_pk);	
	echo "ลบรายการสำเร็จ";
 	?>