<?php
header('Content-Type: application/json');
require_once "../../config.php";
$act_id = $_GET['act_id'];
$sql2 =" SELECT
AVG(r1) as r1,
AVG(r2) as r2,
AVG(r3) as r3,
AVG(r4) as r4,
AVG(r5) as r5,
AVG(r6) as r6,
AVG(r7) as r7,
AVG(r8) as r8,
AVG(r9) as r9,
AVG(r10) as r10 ,
COUNT(mem_id_card) as count_mem,
act_id  
FROM
`tb_rate`
where
act_id = '$act_id' ";  
$qess2=$db->query($sql2);
$result;	
while($fd2=$qess2->fetch_assoc()){
    $result=$fd2;	
    //  = array_push($resultArray,$fd2);
}
echo json_encode($result);
?>