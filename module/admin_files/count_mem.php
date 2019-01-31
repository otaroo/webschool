<?php
header('Content-Type: application/json');
require_once "../../config.php";
$act_id = $_GET['act_id'];
$sql2 ="SELECT mem_sex,COUNT(*) as mem_count FROM tb_member where act_id='$act_id' GROUP by mem_sex";  
$qess2=$db->query($sql2);
$resultArray = array();	
while($fd2=$qess2->fetch_assoc()){
    array_push($resultArray,$fd2);
}
echo json_encode($resultArray);
?>