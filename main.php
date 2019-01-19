<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
</head>

<body>
  <br />

  <?php 
  require_once "config.php";
  ?>

  <div class="container text-center">
    <div class="row">
      <div class="col-sm-3 well">
        <div class="well">
          <p><a href="#">My Profile</a></p>
          <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="well">
          <p><a href="#">การติดต่อสื่อสาร</a></p>
          <a href="https://www.facebook.com/profile.php?id=100021403591840"><img src="img/icon/iconfinder_social_media_icon-01_3199790.png"
              width="100" height="100" /></a>
          </p>
          <img src="img/icon/iconfinder_social_media_icon-09_3199782.png" width="100" height="100" />
        </div>
        <div class="alert alert-success fade in">
          <p><strong>เว็บลิงค์แนะนำ</strong></p>
        </div>
        <p><a href="http://www.nfe.go.th/">สำนักงาน กศน.</a></p>
        <p><a href="http://www.moe.go.th/moe/th/home/">กระทรวงศึกษาธิการ</a></p>
        <p><a href="http://www.etvthai.tv/stream/home.aspx">สถานีโทรทัศน์เพื่อการศึกษา</a></p>
        <p><a href="http://www.ceted.org/">ศูนย์เทคโนโลยีทางการศึกษา</a></p>
      </div>
      <div class="col-sm-7">

        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default text-left">
              <div class="panel-body">
                <p contenteditable="true">การศึกษานอกระบบการศึกษาตามอัธยาศัย กศน.ตำบลนาโบสถ์</p>

              </div>
            </div>
          </div>
        </div>
    <?php
    $sql ="SELECT * FROM tb_activity";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?> 
        <div class="row">
          <div class="col-sm-3">
            <div class="well">
              <p><?php  echo $fd['Act_name']; ?></p>
              <img src="img/cut10.jpg" class="img-circle" height="55" width="55" alt="Avatar">
            </div>
          </div>
          <div class="col-sm-9">
            <div class="well">
              <p>วันที่ :<?php echo $fd['Act_date']; ?></p>
            </div>
          </div>
        </div>
   <?php } ?>
      </div>
      <div class="col-sm-2 well">
        <div class="thumbnail">
          <p>รูปกิจกรรม</p>
          <img src="img/cut10.jpg" alt="Paris" width="400" height="300">

          <button class="btn btn-primary">คลิก</button>
        </div>
        <div class="well">
          <p>ADS</p>
        </div>
        <div class="well">
          <p>ADS</p>
        </div>
      </div>
    </div>
  </div>


</body>

</html>