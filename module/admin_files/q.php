<?
 $act_id = $_GET['act_id'];
ob_clean();
// require_once __DIR__ . '/vendor/autoload.php';
require_once dirname(__DIR__, 2). '\vendor\autoload.php';
// echo __DIR__;
 require_once dirname(__DIR__, 2).'\config.php';
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

<h2 align="center">แบบสรุปผลการประเมินกิจกรรม</h2> 

<table border="1" width=600px height=90% align="center">

<tbody><tr><td width=200><strong>รายการ</strong></td><td width=100><strong>มาก</strong></td><td width=100><strong>ปานกลาง</strong></td><td width=100><strong>น้อย</strong></td><td width=100><strong>ค่าเฉลี่ย</strong></td></tr>'; 




$sql2 ="select * from tb_rate where act_id='$act_id'";  
$qess2=$db->query($sql2);	
while($fd2=$qess2->fetch_assoc()){	
    $html = $html.'<tr><td align="left">'.$fd2['r1'].'</td><td>'.$fd2['mem_tel'].'</td><td></td></tr>';
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