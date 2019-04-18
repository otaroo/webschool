<?
ob_clean();
// require_once __DIR__ . '/vendor/autoload.php';
require_once dirname(__DIR__, 2). '/vendor/autoload.php';
// echo __DIR__;
 require_once dirname(__DIR__, 2).'/config.php';
 $act_id = $_GET['act_id'];
 $sqlact ="select * from tb_activity  where act_id = '$act_id' "; 
 $result=$db->query($sqlact);	
 while($fd2=$result->fetch_assoc()){
	$act_name =  $fd2['act_name'];

 	}


 $_arr = array("","1.กิจกรรมนี้มีประโยชน์หรือไม่","2.การประชาสัมพันธ์กิจกรรม/โครงการ","3.รูปแบบการจัดกิจกรรมมีความเหมาะสม","4.สิ่งอำนวยความสะดวกมีความเหมาะสม","5.สถานที่ให้บริการมีความสะดวกในการเดินทาง","6.เวลาที่ใช้ในการจัดกิจกรรมมีความเหมาะสม","7.สถานที่จัดมีความเหมาะสม","8.จิตสำนึก ทัศนคติ ความตระหนัก ความยุติธรรม","9.การมีส่วนร่วมและในการทำงานเป็นทีม","10.ความพึงพอใจโดยรวมในการเข้าร่วมโครงการนี้");
 $sql2 =" SELECT * FROM `tb_rate` where act_id = '$act_id' ";  
 $qess2=$db->query($sql2);
 $result;	
 $arr_act = array();
 $arr_act_count = array();
 for($l=1;$l<=10;$l++){
	 $arr_act_count[$l][1]=0;
	 $arr_act_count[$l][2]=0;
	 $arr_act_count[$l][3]=0;
 }
 $count_act = $qess2->num_rows;
 while($fd2=$qess2->fetch_assoc()){
	 $arr_act_count[1][$fd2['r1']]+=1;
	 $arr_act_count[2][$fd2['r2']]+=1;
	 $arr_act_count[3][$fd2['r3']]+=1;
	 $arr_act_count[4][$fd2['r4']]+=1;
	 $arr_act_count[5][$fd2['r5']]+=1;
	 $arr_act_count[6][$fd2['r6']]+=1;
	 $arr_act_count[7][$fd2['r7']]+=1;
	 $arr_act_count[8][$fd2['r8']]+=1;
	 $arr_act_count[9][$fd2['r9']]+=1;
	 $arr_act_count[10][$fd2['r10']]+=1;
 
	 /*$arr_act[1]+=$fd2['r1'];
	 $arr_act[2]+=$fd2['r2'];
	 $arr_act[3]+=$fd2['r3'];
	 $arr_act[4]+=$fd2['r4'];
	 $arr_act[5]+=$fd2['r5'];
	 $arr_act[6]+=$fd2['r6'];
	 $arr_act[7]+=$fd2['r7'];
	 $arr_act[8]+=$fd2['r8'];
	 $arr_act[9]+=$fd2['r9'];
	 $arr_act[10]+=$fd2['r10'];*/
 }
$act_avg =0;
$act_avg_all =0;
$tr1 = '';
for($i=1;$i<count($_arr);$i++){


	$act_max = $arr_act_count[$i][3]*3;
	$act_max_per = ($arr_act_count[$i][3]*100/$count_act);
	$td3 =  number_format($act_max_per,2,".",",");

	$act_middle = $arr_act_count[$i][2]*3;
	$act_middle_per = ($arr_act_count[$i][2]*100/$count_act);
	$td2 =  number_format($act_middle_per,2,".",",");

	$act_min = $arr_act_count[$i][1]*3;
	$act_min_per = ($arr_act_count[$i][1]*100/$count_act);
	$td1 =  number_format($act_min_per,2,".",",");

	$act_avg = (($act_max+$act_middle+$act_min)/$count_act) ;
	$act_avg_all += $act_avg;
	$tdsum = number_format($act_avg,2,".",",");

	$tr1 =  $tr1 .'
	<tr>
				<td align="left">'.$_arr[$i].'</td>
				<td>
				'.
				$td3
				.'
				</td>
				<td>
				'.
				$td2
				.'
				</td>
				<td>
				'.
				$td1
				.'
				</td>
				<td>
				'.
				$tdsum
				.'
				</td>
	</tr>
	';
}

$tr2 = '';
$avg='';
$t = number_format(($act_avg_all/10),2,".",",");

if ($t < "1") {
	$avg= "น้อย";
} elseif ($t < "2.60") {
	$avg= "ปานกลาง";
} else {
	$avg= "มาก";
}

$tr2 =  $tr2 .'
	<tr>
				<td  align="left" colspan="3">สรุผลการประเมินกิจกรรม</td>
				<td>
				'.
				$avg
				.'
				</td>
				<td>
				'.
				$t
				.'
				</td>
				
	</tr>
	';

$tr3 = '
	<tr>
	<td  align="left" colspan="5">จำนวนผู้ประเมิน '.$count_act.' คน</td>
</tr>
	';
 $html = '
<style >
table {
    
    text-align: center;
    font-size: 12pt;
	border: 7mm solid aqua;
	border-collapse: collapse;
}
td {
	padding : 5px;
}
</style>
<div align="center"><img src="img/icon.png" width="70" height="70" /></div>
 <h1><div align="center">การสรุปผลประเมินกิจกรรม</div></h1>
 <h2><div align="center">'.$act_name.'</div><h2>
 <table border="1" align="center">
  <thead>
  <tr align="center">
					 
  <th  valign="center" rowspan="2">รายการ</th>
  <th scope="col" colspan="3">ระดับความคิดเห็น (ร้อยละ)</th>
  <th valign="center" rowspan="2">ค่าเฉลี่ย</th>
</tr>
<tr align="center">				 
  <th>มาก</th>
  <th>ปานกลาง</th>
  <th>น้อย</th>			 
</tr>
  </thead>
  <tbody>
		'.$tr1.$tr2.$tr3.'
  </tbody>
</table>'; 

$html2 = 'ss'.'aa'; 
$mpdf = new \Mpdf\Mpdf([
		'autoLangToFont' => true,
		'orientation' => 'L'
]);
$mpdf->useAdobeCJK = true;
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;
$mpdf->WriteHTML($html);
$mpdf->Output();