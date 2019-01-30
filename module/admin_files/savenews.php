




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-29 17:49:50
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$id_news = '';
					$title_news = $_POST['title_news'];
					$description_news = $_POST['description_news'];
  		 	  $sql_add = "insert into tb_new (id_news,title_news,description_news) values('$id_news','$title_news','$description_news')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>