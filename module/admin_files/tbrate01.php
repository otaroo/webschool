<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แบบประเมิน</title>
</head>

<body>
<p>&nbsp;</p>

<?php 

$act_id=$_GET['act_id'];
  
      $sql2 ="select * from tb_activity where act_id='$act_id' ";  
      $qess2=$db->query($sql2); 
      ($fd2=$qess2->fetch_assoc());  
      
    ?><tr>
          
      <td><?php echo $fd2['act_name'];?></td>


<table width="542" height="354" border="1" align="center">
  <tr>


    <td width="312" bgcolor="#00CC33"><div align="center"><strong>กรอกเลขบัตรประชาชน</strong></div></td>
    <td colspan="3" bgcolor="#00CC33"><form action="" method="post" name="mem_card" id="mem_card">
      <strong>      </strong><strong>
      <label>        </label>
      </strong>
      <label><div align="center">
          <strong>          </strong>
          <div align="left">
          
            <strong>
              <div align="center">
                <input type="text" name="textfield" id="textfield" />
            </div>
          </strong></div>
      </div>
      </label>
      <strong></strong><strong>        </strong>
    </form>    </td>
  </tr>
  <tr>
    <td rowspan="2" bgcolor="#FF6666"><div align="center"><strong>รายงานการประเมิน</strong></div></td>
    <td colspan="3" bgcolor="#FF6666"><div align="center"><strong>ระดับความพึงพอใจ</strong></div></td>
  </tr>
  <tr>
    <td width="61" bgcolor="#FF6666"><div align="center"><strong>มาก</strong></div></td>
    <td width="72" bgcolor="#FF6666"><div align="center"><strong>ปานกลาง</strong></div></td>
    <td width="69" bgcolor="#FF6666"><div align="center"><strong>น้อย</strong></div></td>
  </tr>
  <tr>
     <td bgcolor="#FFFFCC">1.กิจกรรมนี้มีประโยชน์หรือไม่</td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <p>
          <input type="radio" name="r1" id="r1" value="3" />      
          </p>
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <p>
          <input type="radio" name="r1" id="r1" value="2" />      
          </p>
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <p>
          <input type="radio" name="r1" id="r1" value="1" />      
          </p>
      </div>
    </label></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">2. การประชาสัมพันธ์กิจกรรม/โครงการ</td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r2" id="r2" value="3" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r2" id="r2" value="2" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r2" id="r2" value="1" />      
      </div>
    </label></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">3. รูปแบบการจัดกิจกรรมมีความเหมาะสม</td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r3" id="r3" value="3" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r3" id="r3" value="2" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r3" id="r3" value="1" />      
      </div>
    </label></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">4. สิ่งอำนวยความสะดวกมีความเหมาะสม</td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r4" id="r4" value="3" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r4" id="r4" value="2" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r4" id="r4" value="1" />      
      </div>
    </label></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">5. สถานที่ให้บริการมีความสะดวกในการเดินทาง</td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r5" id="r5" value="3" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r5" id="r5" value="2" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r5" id="r5" value="1" />      
      </div>
    </label></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">6. เวลาที่ใช้ในการจัดกิจกรรมมีความเหมาะสม</td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r6" id="r6" value="3" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r6" id="r6" value="2" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r6" id="r6" value="1" />      
      </div>
    </label></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">7. สถานที่จัดมีความเหมาะสม</td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r7" id="r7" value="3" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r7" id="r7" value="2" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r7" id="r7" value="1" />      
      </div>
    </label></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">8. จิตสำนึก  ทัศนคติ   ความตระหนัก ความยุติธรรม</td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r8" id="r8" value="3" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r8" id="r8" value="2" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r8" id="r8" value="1" />      
      </div>
    </label></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">9. การมีส่วนร่วมและในการทำงานเป็นทีม</td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r9" id="r9" value="3" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r9" id="r9" value="2" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r9" id="r9" value="1" />      
      </div>
    </label></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">10. ความพึงพอใจโดยรวมในการเข้าร่วมโครงการนี้</td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r10" id="r10" value="3" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r10" id="r10" value="2" />      
      </div>
    </label></td>
    <td bgcolor="#FFFFCC"><label>
      <div align="center">
        <input type="radio" name="r10" id="r10" value="1" />      
      </div>
    </label></td>
  </tr>
</table>

<p align="center">&nbsp;</p>
<p align="center">
  <td><div align="center"><a href='?fd=admin&page=saverate>'><img src="img/a.png" height="30" width="30">  </a></div></td>
</p>

<form id="form1" name="form1" method="post" action="">
  <label></label>
</form>
<tr>
  <p align="center">
    <label></label>
  </p>
</body>
</html>
