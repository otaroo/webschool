




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-30 19:43:11
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "config.php";



			
					$photo_id = '';
					$act_id = $_POST['act_id'];
					$photo_img = $_POST['photo_img'];
					$photo_date = $_POST['photo_date'];

  		 	  $sql_add = "insert into tb_photo (photo_id,act_id,photo_img,photo_date) values('$photo_id','$act_id','$photo_img','$photo_date')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>