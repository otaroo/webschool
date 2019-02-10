




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-28 19:25:49
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$mem_id = $_POST['mem_id'];
					$act_id = $_POST['act_id'];
					$mem_name = $_POST['mem_title'];
					$mem_name = $_POST['mem_name'];
					$mem_tel = $_POST['mem_tel'];
					$mem_sex = $_POST['mem_sex'];
			
  		 	  $sql_update = "update tb_member set act_id='$act_id',mem_title='$mem_title',mem_name='$mem_name',mem_tel='$mem_tel',mem_sex='$mem_sex' where mem_id='$mem_id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>