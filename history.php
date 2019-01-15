<?php
		ob_start();
		@session_start();
		include("config.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>ประวัติความเป็นมา</title>
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
.style4 {font-size: 24px}
body {
	background-color: #99FFCC;
	background-image: url(img/1264242635.jpg);
}
.style7 {font-size: 18px}
.style9 {color: #FF0000}
.style10 {
	font-size: 24px;
	color: #FF0000;
	font-weight: bold;
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
         <li><a href="?fd=admin&page=showpersonnel_new">คณะทำงาน</a></li>
          <li><a href="?fd=admin&page=showper_new">ทำเนียบผู้บริหาร</a></li>
        </ul>
      </li>
        <li><a href="?fd=admin&page=showtb_activity_new">กิจกรรม</a></li>
        <li><a href="?fd=admin&page=addtb_member">สมัครกิจกรรมกศน</a></li>
        <li><a href="#">ประเมินกิจกรรม</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?fd=user&page=admin_login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav></head>
<body>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  <div align="center">
    <table width="1105" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1105"><p align="center" class="style4 style1  style9"><strong>ประวัติความเป็นมาของสถานศึกษา </strong></p>
          <p align="left"><span class="style7">ศูนย์บริการการศึกษานอกโรงเรียนกิ่งอำเภอวังเจ้า  (ศบก.วังเจ้า)   เป็นสถานศึกษาในสังกัดศูนย์การศึกษานอกโรงเรียนจังหวัดตาก (ศนจ.ตาก  ขณะนั้น) ได้จัดตั้งขึ้นเมื่อปี  พ.ศ.   2539  โดยได้เช่าอาคารพาณิชย์  ขนาด  2  ชั้น   ในบริเวณตลาดวังเจ้า   เป็นอาคารที่ทำการของสถานศึกษา ชั้นบนได้บูรณาการเป็นที่พักอาศัยของผู้บริหาร(หัวหน้าศูนย์ฯ)  ไปในตัวด้วย   ต่อมาเมื่อวันที่  5 ธันวาคม  พ.ศ.2540   อาคารที่ว่าการกิ่งอำเภอวังเจ้า(ขณะนั้น)   ได้ก่อสร้างแล้วเสร็จ   และได้รับการอนุเคราะห์จากที่ว่าการกิ่งอำเภอ    ให้ใช้สถานที่บริเวณชั้นล่างด้านซ้าย  จำนวน   2   ห้อง  สำหรับเป็นที่ทำการของ  ศบก.วังเจ้า   ตั้งแต่ปี    พ.ศ. 2540  เป็นต้นมา   จวบจน  พ.ศ. 2548  ศูนย์การศึกษานอกโรงเรียนจังหวัดตาก   ได้รับการบริจาคทรัพย์สินจากหนังสือพิมพ์“ไทยรัฐ”เพื่อใช้ในการดำเนินการก่อสร้างอาคารห้องสมุดประชาชนกิ่งอำเภอวังเจ้า  จำนวนหนึ่ง   และได้ก่อสร้างแล้วเสร็จตั้งแต่เดือนมิถุนายน  2548   จึงได้ย้ายสำนักงานมาอยู่ในห้องสมุดประชาชนกิ่งอำเภอวังเจ้า  และต่อมาได้มีพระราชกฤษฎีกายกฐานะขึ้นเป็นอำเภอวังเจ้า  ตามโครงการอำเภอเฉลิมพระเกียรติ<a href="file:///F:/wiki/%25E0%25B8%259E%25E0%25B8%25A3%25E0%25B8%25B0%25E0%25B8%259A%25E0%25B8%25B2%25E0%25B8%2597%25E0%25B8%25AA%25E0%25B8%25A1%25E0%25B9%2580%25E0%25B8%2594%25E0%25B9%2587%25E0%25B8%2588%25E0%25B8%259E%25E0%25B8%25A3%25E0%25B8%25B0%25E0%25B9%2580%25E0%25B8%2588%25E0%25B9%2589%25E0%25B8%25B2%25E0%25B8%25AD%25E0%25B8%25A2%25E0%25B8%25B9%25E0%25B9%2588%25E0%25B8%25AB%25E0%25B8%25B1%25E0%25B8%25A7">พระบาทสมเด็จพระเจ้าอยู่หัว</a>เนื่องในโอกาสมหามงคลเฉลิมพระนมพรรษา  80 พรรษา  5 ธันวาคม  2550 ในวันที่  <a href="file:///F:/wiki/24_%25E0%25B8%25AA%25E0%25B8%25B4%25E0%25B8%2587%25E0%25B8%25AB%25E0%25B8%25B2%25E0%25B8%2584%25E0%25B8%25A1">24  สิงหาคม</a>  <a href="file:///F:/wiki/%25E0%25B8%259E.%25E0%25B8%25A8._2550">พ.ศ. 2550</a>   โดยมีผลบังคับในวันที่  <a href="file:///F:/wiki/8_%25E0%25B8%2581%25E0%25B8%25B1%25E0%25B8%2599%25E0%25B8%25A2%25E0%25B8%25B2%25E0%25B8%25A2%25E0%25B8%2599">8 กันยายน</a>  ปีเดียวกัน   \จึงได้เปลี่ยนชื่อสถานศึกษาเป็นศูนย์การศึกษานอกโรงเรียนอำเภอวังเจ้าแต่นั้นมา  จนกระทั่งได้มีพระราชบัญญัติส่งเสริมการศึกษานอกระบบและการศึกษาตามอัธยาศัย พุทธศักราช   2551    ประกาศในราชกิจจานุเบกษา   เมื่อวันที่  3  มีนาคม   2551  ปี  ศูนย์บริการการศึกษานอกโรงเรียนอำเภอวังเจ้า   จึงเปลี่ยนชื่อสถานศึกษาใหม่ตามที่ประกาศใช้ในราชกิจจานุเบกษา   เป็นศูนย์การศึกษานอกระบบและการศึกษาตามอัธยาศัยอำเภอวังเจ้า  (กศน.วังเจ้า)   สังกัดสำนักงานการศึกษานอกระบบและการศึกษาตามอัธยาศัยจังหวัดตาก  เมื่อวันที่   4 มีนาคม พ.ศ.2551 เป็นต้นมา และได้รับงบประมาณในการก่อสร้างอาคารขนาด 2  ชั้น  จำนวน 1 หลัง ในปีงบประมาณ  2554   จำนวน  1,700,000  บาท   เมื่อสร้างแล้วเสร็จจึงได้ย้ายเข้ามาเมื่อวันที่ 6 พฤษภาคม 2554  โดยได้รับเกียรติจากนายสามารถ  ลอยฟ้า  ผู้ว่าราชการจังหวัดตาก  ได้มาเปิดป้ายอย่างเป็นทางการ   จนถึงปัจจุบัน</span><br />
        </p></td>
      </tr>
      <tr>
        <td><p align="center"><span class="style10">ข้อมูลทั่วไปของสถานศึกษา </span></p>
          <p align="left"><span class="style7"> สภาพทั่วไปของสถานศึกษา <br />
            ชื่อสถานศึกษา  :  ศูนย์การศึกษานอกระบบและการศึกษาตามอัธยาศัยอำเภอวังเจ้า <br />
            ที่อยู่              : 225  หมู่ที่  2   บ้านสบยมใต้  ตำบลเชียงทอง  อำเภอวังเจ้า<br />
            จังหวัด           : ตาก <br />
            เบอร์โทรศัพท์   : 055  - 593013  เบอร์โทรสาร  :  055-593013<br />
            E-mail ติดต่อ   : wangchao.tak@hotmail.com <br />
            สังกัด             :สำนักงานการศึกษานอกระบบและการศึกษาตามอัธยาศัยจังหวัดตาก</span> </p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d290585.4182475009!2d99.06301944776062!3d16.875711726375133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x977b1bec294afd58!2z4LiB4Lio4LiZLuC4reC4s-C5gOC4oOC4reC4p-C4seC4h-C5gOC4iOC5ieC4sg!5e0!3m2!1sth!2sth!4v1542533544370" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <p></p></td>
      </tr>
      </table>
  </div>
  <p align="left">&nbsp;</p>
  <p align="left">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<ul class="pager">
  <li class="previous"><a href="index.php">ย้อนกลับ</a></li>
  <li class="next"><a href="about.php">ถัดไป</a></li>
</ul>
</body>
</html>
