




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-26 07:29:24
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$photo_cate_id = '';
					$photo_cate_name = $_POST['photo_cate_name'];
					$photo = $_POST['photo'];
					$photo_cate_date = $_POST['photo_cate_date'];
  		 	  $sql_add = "insert into tb_photo_cate (photo_cate_id,photo_cate_name,photo,photo_cate_date) values('$photo_cate_id','$photo_cate_name','$photo','$photo_cate_date')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>