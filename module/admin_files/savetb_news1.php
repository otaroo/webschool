




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-20 23:18:04
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$id = '';
					$title = $_POST['title'];
					$description = $_POST['description'];
					$publish_time = $_POST['publish_time'];
  		 	  $sql_add = "insert into tb_news (id,title,description,publish_time) values('$id','$title','$description','$publish_time')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>