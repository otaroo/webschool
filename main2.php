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
<<<<<<< HEAD
    $sql ="SELECT * FROM tb_news order by publish_time desc limit 5 ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>

        <div class="col-lg-12 mb-12">
            <ul class="list-group">
                <li class="list-group-item">
                    <?php echo $fd['title'];  ?> --
                    <?php echo $fd['description'];  ?>
                </li>
            </ul>
=======
    $sql ="SELECT * FROM tb_new order by description_news asc limit 5 ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>

        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">
                    <?php echo $fd['title_news'];  ?>
                </h4>
                <div class="card-body">
                    
                   <div class="card-footer">
                    <a href="?fd=admin&page=news" class="btn btn-primary">รายละเอียด</a>
                </div>
                </div>
                
            </div>
>>>>>>> 83353502f8c065b68e1e49c9b79b927138ec5786
        </div>
        <?php } ?>
    </div>
    <!-- /.row  -->
    <br />
    <h2>กิจกรรม</h2>

    <div class="row">
        <?php
    $sql ="SELECT * FROM tb_activity order by act_date desc limit 3";  
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
                    <p class="card-text"> :
                        <?php echo $fd['act_place']; ?>
                    </p>
                    
                </div>
                <div class="card-footer">
                    <a href="?fd=admin&page=des" class="btn btn-primary">รายละเอียด</a>
                </div>
            </div>
        </div>

        <?php } ?>

    </div>
    <!-- /.row  -->
</div>
<!-- /.row  -->