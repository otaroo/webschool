




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-28 19:25:49
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$mem_id = '';
					$Act_id = $_POST['Act_id'];
					$mem_name = $_POST['mem_name'];
					$mem_tel = $_POST['mem_tel'];
					$mem_card = $_POST['mem_card'];
					$mem_sex = $_POST['mem_sex'];
  		 	  $sql_add = "insert into tb_member (mem_id,Act_id,mem_name,mem_tel,mem_card,mem_sex) values('$mem_id','$Act_id','$mem_name','$mem_tel','$mem_card','$mem_sex')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>