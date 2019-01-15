




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-30 18:01:17
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$person_id = '';
					$person_name = $_POST['person_name'];
					$person_pos = $_POST['person_pos'];
					$person_since = $_POST['person_since'];
					$person_pos1 = $_POST['person_pos1'];
  		 	  $sql_add = "insert into tb_person (person_id,person_name,person_pos,person_since,person_pos1) values('$person_id','$person_name','$person_pos','$person_since','$person_pos1')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>