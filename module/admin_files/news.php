<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h1 class="my-4">ข่าวสาร</h1>
    <!-- Marketing Icons Section -->
    <div class="row">
        <?php
		$id_news=$_GET['id_news'];
    $sql ="SELECT * FROM tb_new order by description_news asc limit 5 ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>

        <div class="col-lg-4 mb-4">
            <div class="card h-100">
               
                <div class="card-body">
                    <p class="card-text">
                        <?php echo $fd['description_news'];  ?>
                    </p>
                   
                </div>
                
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- /.row  -->
   
</body>
</html>
