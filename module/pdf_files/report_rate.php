
<?php
require('../../fpdf181/fpdf.php');
define('FPDF_FONTPATH','../../fpdf181/font/');
class PDF extends FPDF
{
// Load data
function LoadData($file)
{
  // Read file lines
  $lines = file($file);
  $data = array();
  foreach($lines as $line)
    $data[] = explode(';',trim($line));
  return $data;
}

// Simple table
function BasicTable($header, $data)
{
  // Header
  foreach($header as $col)
    $this->Cell(40,7,$col,1);
  $this->Ln();
  // Data
  foreach($data as $row)
  {
    foreach($row as $col)
      $this->Cell(40,6,$col,1);
    $this->Ln();
  }
}

// Better table
function ImprovedTable($header, $data)
{
  // Column widths
  $w = array(40, 35, 40, 45);
  // Header
  for($i=0;$i<count($header);$i++)
    $this->Cell($w[$i],7,$header[$i],1,0,'C');
  $this->Ln();
  // Data
  foreach($data as $row)
  {
    $this->Cell($w[0],6,$row[0],'LR');
    $this->Cell($w[1],6,$row[1],'LR');
 //   $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
   // $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
    $this->Ln();
  }
  // Closing line
  $this->Cell(array_sum($w),0,'','T');
}

// Colored table
function FancyTable($header, $data)
{
  // Colors, line width and bold font
  $this->SetFillColor(255,0,0);
  $this->SetTextColor(255);
  $this->SetDrawColor(128,0,0);
  $this->SetLineWidth(.3);
  $this->AddFont('tahoma','','tahoma.php');
  $this->SetFont('tahoma','',36);
  // Header
  $w = array(40, 35, 40, 45);
  for($i=0;$i<count($header);$i++)
    $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
  $this->Ln();
  // Color and font restoration
  $this->SetFillColor(224,235,255);
  $this->SetTextColor(0);
 
   $this->AddFont('tahoma','','tahoma.php');
  $this->SetFont('tahoma','',36);
  // Data
  $fill = false;
  foreach($data as $row)
  {
    $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
    $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
 //   $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
  //  $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
    $this->Ln();
    $fill = !$fill;
  }
  // Closing line
  $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Column headings
$header = array('กิจกรรม', 'คะแนน');
// Data loading
$data = $pdf->LoadData('../../fpdf181/tutorial/countries.txt');

//$data = $pdf->LoadData($_data);
/*$data= array(array('กิจกรรมนี้มีประโยชน์หรือไม่','3.00'),
         array('การประชาสัมพันธ์กิจกรรม/โครงการ','2.71'),
        array('รูปแบบการจัดกิจกรรมมีความเหมาะสม','2.28'),
        array('สิ่งอำนวยความสะดวกมีความเหมาะสม','2.57'));*/
$pdf->AddFont('tahoma','','tahoma.php');
$pdf->SetFont('tahoma','',36);
$pdf->AddPage();
$pdf->BasicTable($header,$data);
$pdf->AddPage();
$pdf->ImprovedTable($header,$data);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->Output();
?>
<meta charset="utf-8">