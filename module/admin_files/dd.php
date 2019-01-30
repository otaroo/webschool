<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<div class="row">
    <?php 
            $sql ="SELECT * FROM tb_news"; 
            $qess=$db->query($sql);
            while($fd=$qess->fetch_assoc()){ ?>    
         <div class="col">
         <?php echo $fd['title'];  ?>
        </div>
       <?php }?>
      
    </div>
</div>
<!-- /.row  -->

</body>
</html>
