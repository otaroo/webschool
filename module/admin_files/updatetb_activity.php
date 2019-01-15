




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-30 19:26:46
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$Act_id = $_POST['Act_id'];
					$Act_name = $_POST['Act_name'];
					$Act_date = $_POST['Act_date'];
			
  		 	  $sql_update = "update tb_activity set Act_name='$Act_name',Act_date='$Act_date' where Act_id='$Act_id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>