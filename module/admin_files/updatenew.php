




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-24 18:22:20
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$id_news = $_POST['id_news'];
					$title_news = $_POST['title_news'];
					$description_news = $_POST['description_news'];
					
			
  		 	  $sql_update = "update tb_new set title_news='$title_news',description_news='$description_news',date_news=' where id_news='$id_news' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>