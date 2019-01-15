




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-12-20 18:43:04
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$personnel_id = $_POST['personnel_id'];
					$personnel_name = $_POST['personnel_name'];
					$personnel_position = $_POST['personnel_position'];
					$personnel_img = $_POST['personnel_img'];
			$dir = "files/$personnel_id/";
					if(!is_dir($dir))
						mkdir($dir, 0755, true);
						$source= $_FILES['personnel_img']['tmp_name'];
						$files_name =$_FILES['personnel_img']['name'];
						$array_last=explode (".",$files_name);
				 		$c=count($array_last) -1 ;
						$lastname=strtolower($array_last [$c]);
						$distination = $dir."/".$personnel_id.".".$lastname;
	 					@copy($source,$distination);
  		 	  $sql_update = "update personnel set personnel_name='$personnel_name',personnel_position='$personnel_position',personnel_img='.".$lastname' where personnel_id='$personnel_id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>