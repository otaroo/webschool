<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-17 13:33:48
Download Code On : developers.khontermfan.com
*/?>
<?php
		require_once "../../config.php";
					
					$act_id = $_POST['act_id'];
					// $mem_id = $_POST['mem_id'];
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
					
  			 $sql_add = "insert into tb_rate (act_id,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10) values('$act_id',$r1,$r2,$r3,$r4,$r5,$r6,$r7,$r8,$r9,'$r10')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>