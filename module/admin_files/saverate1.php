




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-17 20:03:09
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$rate_id = '';
					$act_id = $_POST['act_id'];
					$rate_name = $_POST['rate_name'];
					$mem_id = $_POST['mem_id'];
					$date_rate = $_POST['date_rate'];
  		 	  $sql_add = "insert into tb_rate (rate_id,act_id,rate_name,mem_id,date_rate) values('$rate_id','$act_id','$rate_name','$mem_id','$date_rate')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>