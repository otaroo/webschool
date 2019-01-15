




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-30 17:00:07
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "config.php";
			
					$rate_id = $_POST['rate_id'];
					$r1 = $_POST['r1'];
					$r2 = $_POST['r2'];
					$r3 = $_POST['r3'];
					$r4 = $_POST['r4'];
					$r5 = $_POST['r5'];
					$r6 = $_POST['r6'];
					$r7 = $_POST['r7'];
					$r8 = $_POST['r8'];
					$r9 = $_POST['r9'];
					$r10 = $_POST['r10'];
					$Act_id = $_POST['Act_id'];
					$mem_id = $_POST['mem_id'];
			
  		 	  $sql_update = "update tb_rate set r1='$r1',r2='$r2',r3='$r3',r4='$r4',r5='$r5',r6='$r6',r7='$r7',r8='$r8',r9='$r9',r10='$r10',Act_id='$Act_id',mem_id='$mem_id' where rate_id='$rate_id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>