<?php
require "../../config.php";
$mem_card=$_POST["mem_card"];
 $sql = "select * from tb_member where mem_card = '".$mem_card."'";
$query = mysqli_query($db,$sql);
if($query->num_rows>0){
	echo 0;
}else echo 1;
?>