




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-30 08:48:33
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$person_id = $_POST['person_id'];
					$person_name = $_POST['person_name'];
					$person_pos = $_POST['person_pos'];
					$person_since = $_POST['person_since'];
					$person_pos1 = $_POST['person_pos1'];
			
  		 	  $sql_update = "update tb_person set person_name='$person_name',person_pos='$person_pos',person_since='$person_since',person_pos1='$person_pos1' where person_id='$person_id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>