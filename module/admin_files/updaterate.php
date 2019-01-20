




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-17 18:50:33
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$rate_id = $_POST['rate_id'];
					$act_id = $_POST['act_id'];
					$rate_name = $_POST['rate_name'];
					$mem_id = $_POST['mem_id'];
					$date_rate = $_POST['date_rate'];
			
  		 	  $sql_update = "update tb_rate set act_id='$act_id',rate_name='$rate_name',mem_id='$mem_id',date_rate='$date_rate' where rate_id='$rate_id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>