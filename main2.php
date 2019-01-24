<?php 
require_once "config.php";
?>
<style type="text/css">
    body {
        background-image: url(img/1264242635.jpg);
    }
</style>

<div class="container">

    <h1 class="my-4">ข่าวสาร</h1>
    <!-- Marketing Icons Section -->
    <div class="row">

        <?php
    $sql ="SELECT * FROM tb_news order by publish_time asc limit 5 ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>

        <div class="col-lg-12 mb-12">
            <ul class="list-unstyled">
                <li>
                    <?php echo $fd['title'];  ?>
                </li>
            </ul>
        </div>

        <?php } ?>
    </div>
    <!-- /.row  -->

    <h2>กิจกรรม</h2>

    <div class="row">
        <?php
    $sql ="SELECT * FROM tb_activity limit 3";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>

        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/cut10.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">
                            <?php echo $fd['act_name'];  ?></a>
                    </h4>
                    <p class="card-text">วันที่ :
                        <?php echo $fd['act_date']; ?>
                    </p>
                    <p class="card-text">
                        <?php echo $fd['act_des']; ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a href="?fd=admin&page=addtb_member" class="btn btn-primary">สมัคร</a>
                </div>
            </div>
        </div>

        <?php } ?>

    </div>
    <!-- /.row  -->


</div>