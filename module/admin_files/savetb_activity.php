




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-30 19:26:46
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$Act_id = '';
					$Act_name = $_POST['Act_name'];
					$Act_date = $_POST['Act_date'];
  		 	  $sql_add = "insert into tb_activity (Act_id,Act_name,Act_date) values('$Act_id','$Act_name','$Act_date')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>