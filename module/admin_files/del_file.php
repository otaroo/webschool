<?php
	$del_file = $_POST['del_file'];
	//$del_folder = $_POST['del_folder'];
	// $file =$del_folder.$del_file ;
	 $file =$del_file ;
	//chmod($file, 0777);
	unlink($file);
	echo "ลบรายการสำเร็จ";
?>