




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-15 16:22:25
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$mem_id = $_POST['mem_id'];
					$Act_id = $_POST['Act_id'];
					$mem_name = $_POST['mem_name'];
					$mem_tel = $_POST['mem_tel'];
					$mem_card = $_POST['mem_card'];
					$mem_sex = $_POST['mem_sex'];
			
  		 	  $sql_update = "update tb_member set Act_id='$Act_id',mem_name='$mem_name',mem_tel='$mem_tel',mem_card='$mem_card',mem_sex='$mem_sex' where mem_id='$mem_id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>