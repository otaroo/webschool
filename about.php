<?php
		ob_start();
		@session_start();
		include("config.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
.style2 {font-size: 18}
.style3 {font-weight: bold}
.style4 {font-size: 24px}
body {
	background-color: #99FFCC;
	background-image: url(img/1264242635.jpg);
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle"   data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">กศน.ตำบลนาโบสถ์</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">หน้าหลัก</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">เกี่ยวกับ
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="history.php">ประวัติโรงเรียน</a></li>
          <li><a href="about.php">ความเป็นมา</a></li>
           <li><a href="index.php?page=showpersonnel_new">คณะทำงาน</a></li>
          <li><a href="index.php?page=showper_new.php">ทำเนียบผู้บริหาร</a></li>
        </ul>
      </li>
        <li><a href="index.php?page=showtb_activity_new">กิจกรรม</a></li>
        <li><a href="?fd=admin&page=addtb_member">สมัครกิจกรรมกศน</a></li>
        <li><a href="#">ประเมินกิจกรรม</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?fd=user&page=admin_login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
</head>
<body>

<form id="form1" name="form1" method="post" action="">
 
  <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  <p align="center"><img src="http://www.samsenwit.ac.th/images/courses_icon.png" alt=" วิสัยทัศน์/พันธกิจ, อัตลักษณ์/เอกลักษณ์, สัญลักษณ์/คำขวัญ" height="40" /> <span class="style5 style4"><strong>วิสัยทัศน์/พันธกิจ, เป้าหมาย/กลยุทธ์</strong></span></p>
  <div align="center">
    <table width="500" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><p class="style2">&nbsp;</p>
          <p class="style2"><span class="style4"><strong>วิสัยทัศน์(Vision)</strong></span></p>
          <p class="style2"><br />
            จัดและส่งเสริมการศึกษาตลอดชีวิตอย่างทั่วถึงและ <br />
            เท่าเทียมเพื่อสร้างสังคมบนฐานความรู้สู่ความพอเพียง <br />
        มุ่งพัฒนาอาชีพเพื่อการมีงานทำ  นำสู่อาเซียนอย่างยั่งยืน</p></td>
      </tr>
      <tr>
        <td><p align="left" class="style4">&nbsp;</p>
          <p align="left" class="style4"><strong>พันธกิจ  (Mission)</strong></p>
          <p align="left" class="style2"><strong>1. </strong>จัดการศึกษานอกระบบและการศึกษาตามอัธยาศัยอย่างมีคุณภาพเท่าเทียมกัน  เพื่อยกระดับการศึกษา</p>
          <p align="left" class="style2">2. จัดและส่งเสริมการพัฒนาอาชีพเพื่อมีงานทำน้อมนำหลักหลักปรัชญาของเศรษฐกิจพอเพียง </p>
          <p align="left" class="style2">3.พัฒนาบุคลากรและจัดระบบการจัดการสถานศึกษาให้สามารถดำเนินการจัดการศึกษาตลอดชีวิตอย่างมีประสิทธิภาพและยั่งยืน</p>
          <p align="left" class="style2"> 4.จัดและส่งเสริมให้ประชาชนเรียนรู้การใช้สื่อ  นวัตกรรมและเทคโนโลยีเพื่อพัฒนาทักษะชีวิต  เพื่อเรียนรู้สู่อาเซียน</p>
        <p align="left" class="style2"> 5.ส่งเสริม สนับสนุน  ประสานงานและประชาสัมพันธ์งานการศึกษานอกระบบการศึกษาตามอัธยาศัยและภาคีเครือข่ายอย่างกัลญาณมิตร </p></td>
      </tr>
      <tr>
        <td><p class="style2">&nbsp;</p>
          <p class="style2"><span class="style4"><strong>เป้าหมาย</strong></span> </p>
          <p class="style2"><br />
        มุ่งเน้นการจัดกิจกรรมการศึกษานอกระบบระดับการศึกษาขั้นพื้นฐาน  การศึกษาเพื่อพัฒนาอาชีพ   การศึกษาเพื่อพัฒนาทักษะชีวิต   การศึกษาเพื่อพัฒนาสังคมและชุมชน การศึกษาตามอัธยาศัย   การจัดกระบวนการเรียนรู้เพื่อพัฒนาเศรษฐกิจพอเพียง ส่งเสริมการรู้หนังสือ  จัดการเรียนรู้ด้านการพัฒนาอาชีพเพื่อลดรายจ่ายและสร้างรายได้ให้ประชาชนตามหลักปรัชญาเศรษฐกิจพอเพียงสร้างชุมชนแห่งการเรียนรู้ให้มีความเข้มแข็งอย่างยั่งยืนให้กับกลุ่มเป้าหมายประชากรวัยแรงงานอายุ  15-39 ปี และ อายุ 40 - 59 ปี  ในด้านการศึกษานอกระบบระดับการศึกษาขั้นพื้นฐานและการศึกษาต่อเนื่องให้ได้ร้อยละ  80 </p></td>
      </tr>
      <tr>
        <td><p align="center" class="style4">&nbsp;</p>
          <p align="left" class="style4"><strong>กลยุทธ์</strong></p>
          <p align="left" class="style2">กลยุทธ์ที่ 1  เข้าถึงกลุ่มเป้าหมายที่หลากหลายและทั่วถึง </p>
          <p align="left" class="style2"><strong>หลักการ  </strong>ทำงานโดยให้บริการถึงที่ถึงถิ่นให้เข้าถึงกลุ่มเป้าหมายประชากรวัยแรงงานในอำเภอวังเจ้าอย่างทั่วถึงครอบคลุมทุกหมู่บ้านหรือชุมชน </p>
          <p align="left" class="style2"><span class="style3"><strong>กลยุทธ์ที่  2  ปรับวิธีเรียนเปลี่ยนวิธีสอนให้สอดคล้องกับสภาพและความต้องการของแต่ละกลุ่มเป้าหมาย</strong> </span></p>
          <p align="left" class="style2"><strong>หลักการ  </strong>ในการแก้ปัญหาและพัฒนาผู้เรียนนั้นผู้เรียนจะเกิดความรู้ใหม่ใช้หลักเทียบต่อยอดความรู้ได้ทุกรูปแบบ</p>
          <p align="left" class="style2"><span class="style3"><strong>กลยุทธ์ที่  3  พัฒนาแหล่งการเรียนรู้เทคโนโลยีเพื่อการศึกษาและภูมิปัญญาให้เป็นฐานความรู้ของชุมชน</strong> </span></p>
          <p align="left" class="style2"><strong>หลักการ </strong>เปิดโอกาสและช่องทางการเรียนรู้ให้กับประชากรวัยแรงงานโดยเน้นให้มีแหล่งเรียนรู้ที่หลากหลาย</p>
          <p align="left" class="style2"><span class="style3"><strong>กลยุทธ์ที่  4  ผนึกกำลังภาคีเครือข่ายให้มีส่วนร่วมจัดการศึกษา</strong> </span></p>
          <p align="left" class="style2"><strong>หลักการ </strong>จัดส่งเสริม/สนับสนุนหรือประสานงานในการผนึกกำลังภาคีเครือข่ายในการการจัดการศึกษานอกระบบอย่างทั่วถึง  เต็มที่โดยมีภาคีพันธมิตร  ร่วมจัดโดยใช้รูปแบบวิธีการดำเนินงาน</p>
          <p align="left" class="style2"><span class="style3"><strong>กลยุทธ์ที่  5   จัดระบบบริหารเพื่อเพิ่มประสิทธิภาพการบริการ</strong> </span></p>
        <p align="left" class="style2"><strong>หลักการ </strong>พัฒนาระบบบริหารระบบบริการทุกระดับประทับใจเปี่ยมคุณภาพโดยใช้รูปแบบวิธีการดำเนินการ </p></td>
      </tr>
      </table>
  </div>
  <p align="center" class="style2">&nbsp;</p>
  <p align="center" class="style2">&nbsp;</p>
  <p align="center" class="style2">
  <p align="center" class="style4">&nbsp;</p>
  <p align="center" class="style2">
  <p align="left" class="style2">&nbsp;</p>
  <p align="center" class="style2">
  <p align="center" class="style4">&nbsp;</p>
</form>
<ul class="pager">
  <li class="previous"><a href="history.php">ย้อนกลับ</a></li>
  
</ul>
</body>
</html>
