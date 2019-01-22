




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-22 07:12:04
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$photo_id = '';
					$photo_name = $_POST['photo_name'];
					$img = $_POST['img'];



					$sql2 ="select * from tb_photo  order by photo_id asc limit 0,1";  
					$qess2=$db->query($sql2);	
					 $fd2=$qess2->fetch_assoc();
					$photo_id = ($fd2['photo_id']+1);;
					$photo_name = $_POST['photo_name'];
					
					//$img = $_POST['img'];





				 $dir = "../../img/user/";
					 if(!is_dir($dir))
						mkdir($dir, 0755, true);
						$source= $_FILES['photo_name']['tmp_name'];
						$files_name =$_FILES['photo_name']['name'];
						$array_last=explode (".",$files_name);
				 		$c=count($array_last) -1 ;
						$lastname=strtolower($array_last [$c]);
						$distination = $dir."/".$photo_id.".".$lastname;
	 					@copy($source,$distination);
	 			//	$activities_id ="";


  		 	  $sql_add = "insert into tb_photo (photo_id,photo_name,img) values('$photo_id','$photo_name','$img')";


			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>