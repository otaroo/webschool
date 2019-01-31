<?php
header('Content-Type: application/json');
require_once "../../config.php";
$act_id = $_GET['act_id'];
$sql2 ="select count() from tb_member where act_id='$act_id' ";  
$qess2=$db->query($sql2);
$resultArray = array();	
while($fd2=$qess2->fetch_assoc()){
    array_push($resultArray,$fd2);
}
echo json_encode($resultArray);
?>