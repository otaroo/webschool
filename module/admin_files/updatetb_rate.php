




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-17 13:33:48
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$rate_id = $_POST['rate_id'];
					$act_id = $_POST['act_id'];
					$mem_id = $_POST['mem_id'];
					$date_rate = $_POST['date_rate'];
			
  		 	  $sql_update = "update tb_rate set act_id='$act_id',mem_id='$mem_id',date_rate='$date_rate' where rate_id='$rate_id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>