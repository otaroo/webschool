<?php
		ob_start();
		@session_start();
		include("config.php");   //คือการเชื่อมต่อมาจาก หน้า config ที่เชื่อมกับฐานข้อมูล

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>กศน.ตำบลนาโบสถ์</title>
  <link rel="stylesheet" href="../dist/css/lightbox.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

  <link href="vendor/lightbox2/src/css/lightbox.css" rel="stylesheet">

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #228B22;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%;
      /* Set width to 100% */
      margin: auto;
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none;
      }
    }

    .style1 {
      font-size: 36px
    }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a href="index.php" class="navbar-brand style1">กศน.ตำบลนาโบสถ์</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              เกี่ยวกับ </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="?fd=admin&page=history">ประวัติโรงเรียน</a>
              <a class="dropdown-item" href="?fd=admin&page=showper">คณะทำงาน</a>
              <a class="dropdown-item" href="?fd=admin&page=showper_new">ทำเนียบผู้บริหาร</a> </div>
          </li>
          <li class="nav-item">

            <a class="nav-link" href="?fd=admin&page=showtb_activity_new">ข่าวสาร/กิจกรรมทั้งหมด</a> </li>
          <li class="nav-item">
            <a class="nav-link" href="?fd=admin&page=addtb_member">สมัครกิจกรรม กศน.</a> </li>
          <li class="nav-item">
          <li class="nav-item">

            <a class="nav-link" href="?fd=admin&page=showtb_activity_rate">ประเมินกิจกรรม</a> </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?fd=user&page=admin_login">ADMIN</a> </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
       
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/001.jpg')">
          <div class="carousel-caption d-none d-md-block"> </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/002.jpg')">
          <div class="carousel-caption d-none d-md-block"> </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/003.jpg')">
          <div class="carousel-caption d-none d-md-block"> </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span> </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span> </a>
    </div>
  </header>



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
                require_once("main2.php");   // คือการเชื่อมกับไฟล์ main2 ใน การเพิ่มข้อมูล
                }
            ?>
    </div>
  </section>

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white style2">กศน.ตำบลนาโบสถ์ อำเภอวังเจ้า จังหวัดตาก 63180 โทร087-1986902</p>
    </div>
    <span class="style2">
      <!-- /.container -->
    </span>
  </footer>
  <span class="style2">
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
  </span>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/DataTables/datatables.min.js"></script>
  <script src="vendor/lightbox2/src/js/lightbox.js"></script>  

</body>

</html>