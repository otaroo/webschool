




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-20 23:18:04
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$id = $_POST['id'];
					$title = $_POST['title'];
					$description = $_POST['description'];
					$publish_time = $_POST['publish_time'];
			
  		 	  $sql_update = "update tb_news set title='$title',description='$description',publish_time='$publish_time' where id='$id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>