




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-29 16:03:46
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$act_id = '';
					$act_name = $_POST['act_name'];
					$act_date = $_POST['act_date'];
					$act_des = $_POST['act_des'];
  		 	  $sql_add = "insert into tb_activity (act_id,act_name,act_date,act_des) values('$act_id','$act_name','$act_date','$act_des')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>