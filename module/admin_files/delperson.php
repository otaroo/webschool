




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-30 08:56:32
Download Code On : developers.khontermfan.com
*/
	require_once "../../config.php";
	$person_id = $_POST['person_id'];
	$sql_pk ="delete from  tb_person where person_id='$person_id' ";
	$qess3=$db->query($sql_pk);	
	echo "ลบรายการสำเร็จ";
 	?>