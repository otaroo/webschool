




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-29 20:00:40
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$act_id = '';
					$act_name = $_POST['act_name'];
					$act_date = $_POST['act_date'];
					$act_des = $_POST['act_des'];
					$act_place = $_POST['act_place'];
					$act_delimit = $_POST['act_delimit'];
					$act_limited = $_POST['act_limited'];
					$rate_limited = $_POST['rate_limited'];

  		 	  $sql_add = "insert into tb_activity (act_id,act_name,act_date,act_des,act_place,act_delimit,act_limited,rate_date) values('$act_id','$act_name','$act_date','$act_des','$act_place','$act_delimit','$act_limited','$rate_limited')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>