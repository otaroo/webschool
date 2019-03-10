<?php
include("config.php");
echo $_POST["act_id"]; exit();
if ($_POST["act_id"]==43) {
require('fpdf.php');
	
	define('FPDF_FONTPATH','font/');

	$pdf=new FPDF();
	$pdf->SetMargins( 20,15,10 );
	$pdf->AddPage();
	$pdf->AddFont('angsa','','angsa.php');
	$pdf->SetFont('angsa','',14);
	
$pdf->Cell(170,10,iconv( 'UTF-8','TIS-620','สรุปแบบประเมินกิจรรม'),0,1,"C");
$pdf->Cell(170,10,iconv( 'UTF-8','TIS-620','(พนักงาน)'),0,1,"C");
$pdf->Cell(180,10,iconv( 'UTF-8','TIS-620',"--------------------------------------------------------------------------------------------------------------------------------------------"),0,1,"C");


$sql6 = "SELECT * FROM `tb_rate` GROUP BY em_name";
$query6 = mysqli_query($conn,$sql6);
$pdf->Ln();

while($rs=mysqli_fetch_array($query6,MYSQLI_ASSOC)){
	$name = $rs["em_name"];
	$pdf->Cell(40,10,iconv( 'UTF-8','TIS-620',"{$name}"),0,1,"C");
	$pdf->Cell(50,10,iconv( 'UTF-8','TIS-620',",มาก"),0,0,"C");
	$pdf->Cell(20,10,iconv( 'UTF-8','TIS-620',"ปานกลาง"),0,0,"C");
	$pdf->Cell(20,10,iconv( 'UTF-8','TIS-620',"น้อย"),0,0,"C");
	$pdf->Cell(25,10,iconv( 'UTF-8','TIS-620',"ค่าเฉลี่ย"),0,1,"C");
	
$sql7 = "SELECT * FROM `tb_rate`WHERE act_id = '".$rs["em_name"]."'";
	$query7 = mysqli_query($conn,$sql7);
	while($rss=mysqli_fetch_array($query7,MYSQLI_ASSOC)) {
		if($rss["em_name"] == $rs["em_name"]){
	$date1 = $rss["type_protype"];
	$date2 = $rss["type_prosize"];
	$date3 = $rss["act_id"];
	$date4 = $rss["act_name"];
	$pdf->Cell(50,10,iconv( 'UTF-8','TIS-620',"{$date1}"),0,0,"C");
	$pdf->Cell(20,10,iconv( 'UTF-8','TIS-620',"{$date2}"),0,0,"C");
	$pdf->Cell(20,10,iconv( 'UTF-8','TIS-620',"{$date3}"),0,0,"C");
	$pdf->Cell(25,10,iconv( 'UTF-8','TIS-620',"{$date4}"),0,1,"C");
		} // off if
	} //off while
		$pdf->Cell(150,10,iconv( 'UTF-8','TIS-620',"--------------------------------------------------------------------------------------------------------------"),0,1,"C");
} //off while
mysqli_close($conn);
$pdf->Output();
} //off if 1
else if($_POST["act_id"]==43) {
	$count=explode("-",$_POST['datepicker']);
	$count1=explode("-",$_POST['datepicker1']);
	require('module/admin_files/fpdf.php');
	
	define('FPDF_FONTPATH','font/');

	$pdf=new FPDF();
	$pdf->SetMargins( 20,15,10 );
	$pdf->AddPage();
	$pdf->AddFont('angsa','','angsa.php');
	$pdf->SetFont('angsa','',14);
	
$pdf->Cell(170,10,iconv( 'UTF-8','TIS-620','รายงาน'),0,1,"C");
$pdf->Cell(170,10,iconv( 'UTF-8','TIS-620','lสรุปแบบการประเมิน'),0,1,"C");
$pdf->Cell(170,10,iconv( 'UTF-8','TIS-620','เลือกจากรายชื่อกิจกรรม'),0,1,"C");

$date1 = $_POST['datepicker'];
$date2 = $_POST['datepicker1']; 
$pdf->Cell(20,10,iconv( 'UTF-8','TIS-620','ระหว่างวันที่'),0,0,"C");
$pdf->Cell(25,10,iconv( 'UTF-8','TIS-620',"{$date1}"),0,0,"C");
$pdf->Cell(20,10,iconv( 'UTF-8','TIS-620','ถึงวันที่'),0,0,"C");
$pdf->Cell(25,10,iconv( 'UTF-8','TIS-620',"{$date2}"),0,1,"C");
$pdf->Cell(180,5,iconv( 'UTF-8','TIS-620',"--------------------------------------------------------------------------------------------------------------------------------------------"),0,1,"C");

$sql6 = "SELECT * FROM `tb_rate` WHERE act_id BETWEEN '".$count[0]."-".$count[1]."-".$count[2]."' AND '".$count1[0]."-".$count1[1]."-".$count1[2]."' GROUP BY act_date";
$query6 = mysqli_query($conn,$sql6);
$pdf->Ln();
while($rs=mysqli_fetch_array($query6,MYSQLI_ASSOC)){
	$date = $rs["act_date"];
	$pdf->Cell(30,10,iconv( 'UTF-8','TIS-620',"วันที่"),0,0,"C");
	$pdf->Cell(10,10,iconv( 'UTF-8','TIS-620',"{$date}"),0,1,"C");
	$pdf->Cell(50,10,iconv( 'UTF-8','TIS-620',"ประเภท"),0,0,"C");
	$pdf->Cell(20,10,iconv( 'UTF-8','TIS-620',"ขนาด"),0,0,"C");
	$pdf->Cell(30,10,iconv( 'UTF-8','TIS-620',"จำนวน(ชิ้น)"),0,1,"C");
	
$sql7 = "SELECT * FROM `act_id`WHERE act_date = act_name'".$rs["act_name"]."'";
	$query7 = mysqli_query($conn,$sql7);
	
	while($rss=mysqli_fetch_array($query7,MYSQLI_ASSOC)) {
		if($rss["act_id"] == $rs["act_id"]){
	$date1 = $rss["type_protype"];
	$date2 = $rss["type_prosize"];
	$date3 = $rss["act_name"];
	$pdf->Cell(50,10,iconv( 'UTF-8','TIS-620',"{$date1}"),0,0,"C");
	$pdf->Cell(25,10,iconv( 'UTF-8','TIS-620',"{$date2}"),0,0,"C");
	$pdf->Cell(30,10,iconv( 'UTF-8','TIS-620',"{$date3}"),0,1,"C");
		} // off if
	} //off while
	$pdf->Cell(150,10,iconv( 'UTF-8','TIS-620',"--------------------------------------------------------------------------------------------------------------"),0,1,"C");
} //off while
mysqli_close($conn);
$pdf->Output();
	
	} //off if
?>