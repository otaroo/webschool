




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-29 12:06:30
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$ph_id = '';
					$Act_id = $_POST['Act_id'];
					$photo = $_POST['photo'];
  		 	  $sql_add = "insert into tb_photo (ph_id,Act_id,photo) values('$ph_id','$Act_id','$photo')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>