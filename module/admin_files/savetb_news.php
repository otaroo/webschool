




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-12-01 14:25:22
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$id = '';
					$title = $_POST['title'];
					$description = $_POST['description'];
					$publish_time = $_POST['publish_time'];
					$new_files = $_POST['new_files'];
  		 	  $sql_add = "insert into tb_news (id,title,description,publish_time,new_files) values('$id','$title','$description','$publish_time','$new_files')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>