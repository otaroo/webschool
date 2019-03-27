
<<<<<<< HEAD

=======
>>>>>>> 2fae0b05c1c597c044acbd9b9a629a97a2410169



<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-29 17:49:50
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$id_news = $_POST['id_news'];
					$title_news = $_POST['title_news'];
					$description_news = $_POST['description_news'];
			
  		 	  $sql_update = "UPDATE tb_new SET title_news='$title_news',description_news='$description_news' WHERE  id_news='$id_news' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>