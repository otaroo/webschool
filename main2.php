<?php 
require_once "config.php";
?>

<div class="container">

    <h1 class="my-4">ข่าวสาร</h1>
    <!-- Marketing Icons Section -->
    <div class="row">
        <?php
    $sql ="SELECT * FROM tb_news order by publish_time desc limit 3 ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>

        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">
                    <?php echo $fd['title'];  ?>
                </h4>
                <div class="card-body">
                    <p class="card-text">
                        <?php echo $fd['description'];  ?>
                    </p>
                    <p class="card-text">วันที่ :
                        <?php echo $fd['publish_time'];  ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">รายละเอียด</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- /.row  -->

    <h2>กิจกรรม</h2>

    <div class="row">
    <?php
    $sql ="SELECT * FROM tb_activity";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>

        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/cut10.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">  <?php echo $fd['act_name'];  ?></a>
                    </h4>
                    <p class="card-text">วันที่ : <?php echo $fd['act_date']; ?></p>
                      <p class="card-text"> <?php echo $fd['act_des']; ?></p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">สมัคร</a>
                </div>
            </div>
        </div>

        <?php } ?>

    </div>
    <!-- /.row  -->

</div>