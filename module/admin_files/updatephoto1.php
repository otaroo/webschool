




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-30 19:43:11
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "config.php";
			
					$photo_id = $_POST['photo_id'];
					$act_id = $_POST['act_id'];
					$photo_img = $_POST['photo_img'];
					$photo_date = $_POST['photo_date'];
			$dir = "files/$photo_id/";
					if(!is_dir($dir))
						mkdir($dir, 0755, true);
						$source= $_FILES['photo_img']['tmp_name'];
						$files_name =$_FILES['photo_img']['name'];
						$array_last=explode (".",$files_name);
				 		$c=count($array_last) -1 ;
						$lastname=strtolower($array_last [$c]);
						$distination = $dir."/".$photo_id.".".$lastname;
	 					@copy($source,$distination);
  		 	  $sql_update = "update tb_photo set act_id='$act_id',photo_img='.".$lastname',photo_date='$photo_date' where photo_id='$photo_id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>