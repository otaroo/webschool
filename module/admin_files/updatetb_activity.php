




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-30 19:26:46
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$act_id = $_POST['act_id'];
					$act_name = $_POST['act_name'];
					$act_date = $_POST['act_date'];
					$act_des = $_POST['act_des'];
			
  		 	  $sql_update = "update tb_activity set act_name='$act_name',act_date,act_des='$act_des' where act_id='$act_id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>