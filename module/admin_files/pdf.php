<?
ob_clean();
// require_once __DIR__ . '/vendor/autoload.php';
require_once dirname(__DIR__, 2). '\vendor\autoload.php';
// echo __DIR__;
 require_once dirname(__DIR__, 2).'\config.php';
$html = '<h1>mPDF</h1>
<table border="1">
<tbody><tr><td>Row 1</td><td>This is data</td><td>This is data</td></tr>'; 




$sql2 ="select * from tb_activity";  
$qess2=$db->query($sql2);	
while($fd2=$qess2->fetch_assoc()){	
    $html = $html.'<tr><td>Row 1</td><td>'.$fd2['act_name'].'</td></tr>';
}
$html = $html.'</tbody></table>'; 


$mpdf = new \Mpdf\Mpdf([
    'autoLangToFont' => true

]);
$mpdf->useAdobeCJK = true;
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;
$mpdf->WriteHTML($html);
$mpdf->Output();