




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-12-20 18:47:54
Download Code On : developers.khontermfan.com
*/
	require_once "../../config.php";
	$personnel_id = $_POST['personnel_id'];
	$sql_pk ="delete from  personnel where personnel_id='$personnel_id' ";
	$qess3=$db->query($sql_pk);	
	echo "ลบรายการสำเร็จ";
 	?>