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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

  <link rel="stylesheet" href="js/DataTables/datatables.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
      <a href="index_new.php" class="navbar-brand style1"><strong>กศน.ตำบลนาโบสถ์</strong></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              เกี่ยวกับ
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="?fd=admin&page=history">ประวัติโรงเรียน</a>
              <a class="dropdown-item" href="?fd=admin&page=addpersonnel">คณะทำงาน</a>
              <a class="dropdown-item" href="?fd=admin&page=addperson">ทำเนียบผู้บริหาร</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?fd=admin&page=showtbact">แสดงกิจกรรม</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?fd=admin&page=addtbact">เพิ่มกิจกรรม</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="?fd=admin&page=addnews">เพิ่มข่าวประชาสัมพันธ์</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?fd=admin&page=showmember_new">รายชื่อผู้เข้าร่วมกิจกรรม</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?fd=admin&page=showtbrate">ผลการประเมิน</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?fd=admin&page=logout">ออกจากระบบ</a>
          </li>
          <? 
        $user = $_SESSION['UserID'];
        $sql ="SELECT * FROM tb_admin WHERE member_user = '$user'";  
         $qess=$db->query($sql);	
         while($fd=$qess->fetch_assoc()){ ?>
          <li class="nav-item">
            <p class="nav-link"><?php echo $fd['member_name'];?></p>
          </li>
          <?}?>

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
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/002.jpg')">
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/003.jpg')">
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
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
                require_once("main2.php");
                }
            ?>

    </div>
  </section>

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">กศน.ตำบลนาโบสถ์ อำเภอวังเจ้า จังหวัดตาก 63000 โทร 087-1986902</p>
    </div>
    <!-- /.container -->
  </footer>
  <!-- Bootstrap core JavaScript -->

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/DataTables/datatables.min.js"></script>


</body>

</html>