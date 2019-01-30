<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
  <h2>กิจกรรม</h2>

    <div class="row">
        <?php
    $sql ="SELECT * FROM tb_activity limit 3";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>

        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">
                            <?php echo $fd['act_name'];  ?></a>
                    </h4>
                    <p class="card-text">รายละเอียด :
                        <?php echo $fd['act_des']; ?>
                    </p>
                    
                </div>
                <div class="card-footer">
                    <a href="?fd=admin&page=des" class="btn btn-primary">สมัคร</a>
                </div>
            </div>
        </div>

        <?php } ?>

    </div>
    <!-- /.row  -->
</body>
</html>
