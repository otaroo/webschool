<?php 
require_once "config.php";
?>
<style type="text/css">
    body {
        background-image: url();
    }
</style>

<div class="container">


    <h2 class="my-4">ข่าวสารประชาสัมพันธ์</h2>
    <!-- Marketing Icons Section -->
    <div class="row">
        <?php
    $sql ="SELECT * FROM tb_new order by id_news  limit 6 ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>

        <div class="col-lg-4 mb-4">
            <div class="card h-100">
            
              <p>
                <?php
             $dir_url="img/news/".$fd['id_news']."/";

				if(is_dir($dir_url)){
				    $fol2 = scandir($dir_url);
					$url_img = $dir_url .$fol2[2];
				    $lastname = explode(".",$fol2[2]); 

				}
            ?>
                <img src="<?php echo $url_img;?>" style=" height:250px" width="340"/>
                
                
                
                
                     <a href="index.php?fd=admin&page=new_detail&id_news=<?php echo $fd['id_news']; ?>"><img class="card-img-top" src="img/.jpg" alt="">
                          </a></p>
              <a href="index.php?fd=admin&page=new_detail&id_news=<?php echo $fd['id_news']; ?>">
              <h4 class="card-header">
                  <?php echo $fd['title_news'];  ?>              </h4>
              </a>
                <!-- <div class="card-body">

                    <div class="card-footer">
                        <a href="index.php?fd=admin&page=new_detail&id_news=<?php echo $fd['id_news']; ?>" class="btn btn-primary">รายละเอียด</a>
                    </div>
                </div> -->
            </div>
      </div>
        <?php } ?>
    </div>
    <!-- /.row  -->