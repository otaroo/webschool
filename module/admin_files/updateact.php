



<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-29 16:03:46
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$act_id = $_POST['act_id'];
					$act_name = $_POST['act_name'];
					$act_date = $_POST['act_date'];
					$act_des = $_POST['act_des'];
					$act_delimit = $_POST['act_delimit'];
					$act_limited = $_POST['act_limited'];
					
  		 	  $sql_update = "update tb_activity set act_name='$act_name',act_date='$act_date',act_des='$act_des',act_delimit='$act_delimit', act_limited='$act_limited'where act_id='$act_id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>