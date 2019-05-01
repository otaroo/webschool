
<?
 $act_id = $_GET['act_id'];
ob_clean();
// require_once __DIR__ . '/vendor/autoload.php';
require_once dirname(__DIR__, 2). '/vendor/autoload.php';
// echo __DIR__;
 require_once dirname(__DIR__, 2).'/config.php';





$act_name='';
$sql2 ="select * from tb_activity where act_id='$act_id'";  
$qess2=$db->query($sql2);	
while($fd2=$qess2->fetch_assoc()){	
    $act_name = $fd2['act_name'];
	
}
$html = '

<style>

table {
    
    text-align: center;
    font-size: 14pt;
	border: 7mm solid aqua;
	border-collapse: collapse;
}

</style>

<div class="container">
<div align="center"><img src="img/icon.png" width="70" height="70" /></div>

<h2 align="center">รายชื่อผู้เข้าร่วมกิจกรรม '.$act_name.'</h2> 

<table border="1" width=600px height=90% align="center">

<tbody><tr><td width=30><strong>ลำดับ</strong></td><td width=174><strong>ชื่อ-นามสกุล</strong></td><td width=174><strong>เบอร์โทร</strong></td><td width=174><strong>ลงชื่อ</strong></td></tr>'; 




$sql2 ="select * from tb_member where act_id='$act_id'";  
$qess2=$db->query($sql2);	
$count=1;
while($fd2=$qess2->fetch_assoc()){	
    
    $html = $html.'<tr>
                    <td align="left">'.$count.'</td>
                    <td align="left">'.$fd2['mem_name'].'</td>
                    <td>'.$fd2['mem_tel'].'</td>
                    <td></td>
                </tr>';
    $count = $count + 1;           
}
$html = $html.'</tbody></table>' ; 


$mpdf = new \Mpdf\Mpdf([
    'autoLangToFont' => true

]);
$mpdf->useAdobeCJK = true;
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;
$mpdf->WriteHTML($html);
$mpdf->Output();