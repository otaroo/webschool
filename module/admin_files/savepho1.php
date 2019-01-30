




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-28 18:51:43
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			

				$sql2 ="select * from tb_photo  order by photo_id desc limit 0,1";  

					$photo_id = '';
					$photo_img = $_POST['photo_img'];
					$act_id = $_POST['act_id'];
  		 	  		//$photo_img = $_POST['photo_img'];




$dir = "../../img/act/";
					 if(!is_dir($dir))
						mkdir($dir, 0755, true);
						$source= $_FILES['photo_img']['tmp_name'];
						$files_name =$_FILES['photo_img']['name'];
						$array_last=explode (".",$files_name);
				 		$c=count($array_last) -1 ;
						$lastname=strtolower($array_last [$c]);
						$distination = $dir."/".$personnel_id.".".$lastname;
	 					@copy($source,$distination);
	 			//	$activities_id ="";


  		 	  $sql_add = "insert into tb_photo (photo_id,photo_img,act_id) values('$photo_id','$photo_img','$act_id')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>