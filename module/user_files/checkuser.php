<?php
require "../../config.php";
$mem_card=$_GET["mem_card"];
$act_id=$_GET["act_id"];
 $sql = "select * from tb_member where mem_card = '".$mem_card."' and act_id = '".$act_id."' ";
$query = mysqli_query($db,$sql);
if($query->num_rows>0){
	echo 0;
}else echo 1;
?>