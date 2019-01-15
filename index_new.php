<?php
		ob_start();
		@session_start();
		include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>กศน.ตำบลนาโบสถ์</title>
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
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #000000;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
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
          <li><a href="?fd=admin&page=addpersonnel">คณะทำงาน</a></li>
          <li><a href="?fd=admin&page=addperson">ทำเนียบผู้บริหาร</a></li>
        </ul>
      </li>
        <li><a href="?fd=admin&page=addtb_activity">เพิ่มกิจกรรม</a></li>
        <li><a href="?fd=admin&page=showmember_new">รายชื่อผู้เข้าร่วมกิจกรรม</a></li>
        <li><a href="#">ดูผลประเมินกิจกรรม</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/cut1.png" alt="Image">
        <div class="carousel-caption">
          
        </div>      
      </div>

      <div class="item">
        <img src="img/หัว.png" alt="Image">
        <div class="carousel-caption">
          
        </div>      
      </div>
    </div>

   
<section>
      <div class="container">
          <?php 
            if(@$_GET['fd'])
                $file="module/".$_GET['fd']."_files/".$_GET['page'].".php";
            else
                $file=@$_GET['page'].".php";
              
            if(is_file($file)){
                require_once("$file");
                }
            else{
                require_once("main.php");
                }
            ?>
      </div>
</section>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
