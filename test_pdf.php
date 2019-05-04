<?php 
require_once("vendor/autoload.php"); 
ob_clean();

// Write some HTML code:


// Output a PDF file directly to the browser
$mpdf = new \Mpdf\Mpdf([
    'autoLangToFont' => true

]);
$mpdf->WriteHTML('Hello World');
$mpdf->useAdobeCJK = true;
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;
$mpdf->Output();
/* Start to develop here. Best regards https://php-download.com/ */