




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-24 13:05:33
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$photo_id = '';
					$photo_name = $_POST['photo_name'];
					
					
  		 	   $dir = "../../img/act/";
					 if(!is_dir($dir))
						mkdir($dir, 0755, true);
						$source= $_FILES['photo_name']['tmp_name'];
						$files_name =$_FILES['photo_name']['name'];
						$array_last=explode (".",$files_name);
				 		$c=count($array_last) -1 ;
						$lastname=strtolower($array_last [$c]);
						$distination = $dir."/".$personnel_id.".".$lastname;
	 					@copy($source,$distination);
	 			//	$activities_id ="";
			  
			  
			  $sql_add = "insert into tb_photo (photo_id,photo_name) values('$photo_id','$photo_name')";
			  
			  
			  
			  
			  
			  
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>