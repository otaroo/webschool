<?php
require "../../config.php";
$act_id=$_GET["act_id"];
$mem_count =0;
$act_count =0;
$sql = "select * from tb_member where act_id = '".$act_id."' ";
$query = mysqli_query($db,$sql);
$mem_count = $query->num_rows;

$sql = "select act_delimit from tb_activity where act_id = '".$act_id."' ";
$query = mysqli_query($db,$sql);
while($row = $query->fetch_assoc()) {
    $act_count = $row["act_delimit"];
}
echo $act_count.'|'.$mem_count;
?>