<?php
		require_once "../../config.php";
			

					$act_id = $_GET['act_id'];
					$rate = $_GET['rate'];

  		 	  $sql2 = "SELECT $rate,count($rate) FROM tb_rate WHERE act_id = '$act_id' GROUP by $rate";
              $qess2=$db->query($sql2);	
              $resultArray = array();	
              while($fd2=$qess2->fetch_assoc()){
                array_push($resultArray,$fd2);
                
              }
              echo json_encode($resultArray);
		?>