<?php 
require_once "config.php";
?>
<style type="text/css">
    body {
        background-image: url(img/1264242635.jpg);
    }
</style>

<div class="container">


    <h2 class="my-4">ข่าวสารประชาสัมพันธ์</h2>
    <!-- Marketing Icons Section -->
    <div class="row">
        <?php
    $sql ="SELECT * FROM tb_new  limit 5 ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>

        <div class="col-lg-4 mb-4">
            <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/new2.jpg" alt=""></a>
                <h4 class="card-header">
                    <?php echo $fd['title_news'];  ?>
                </h4>
                <div class="card-body">
                   
                   <div class="card-footer">
                    <a href="index.php?fd=admin&page=new_detail&id_news=<?php echo $fd['id_news'];?>" class="btn btn-primary">รายละเอียด</a>
                </div>
                </div>

            </div>
        </div>
        <?php } ?>
    </div>
    <!-- /.row  -->
    <br />
    <h2>กิจกรรมของ กศน.นาโบสถ์</h2>

    <div class="row">
        <?php
    $sql ="SELECT * FROM tb_activity order by act_date desc limit 10";  
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
                    <p class="card-text"> 
                        <?php echo $fd['act_des']; ?>
                    </p>
                   
                </div>
                <div class="card-footer">
                    <a href="index.php?fd=admin&page=activity_detail&id_activity=<?php echo $fd['act_id'];?>" class="btn btn-primary">รายละเอียด</a>
                </div>
            </div>
        </div>

        <?php } ?>

    </div>
    <!-- /.row  -->
  
    
</div>
<!-- /.row  -->