




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-30 19:58:11
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";




$sql2 ="select * from tb_photo  order by photo_id desc limit 0,1";  
					$qess2=$db->query($sql2);	
					 $fd2=$qess2->fetch_assoc();
			
					$photo_id = '';
					$act_id = $_POST['act_id'];
					$photo_img = $_POST['photo_img'];
					$photo_date = $_POST['photo_date'];




					 $dir = "../../img/act/";
					 if(!is_dir($dir))
						mkdir($dir, 0755, true);
						$source= $_FILES['photo_img']['tmp_name'];
						$files_name =$_FILES['photo_img']['name'];
						$array_last=explode (".",$files_name);
				 		$c=count($array_last) -1 ;
						$lastname=strtolower($array_last [$c]);
						$distination = $dir."/".$photo_id.".".$lastname;
	 					@copy($source,$distination);
	 			//	$activities_id ="";
  		 	  $sql_add = "insert into tb_photo (photo_id,act_id,photo_img,photo_date) values('$photo_id','$act_id','$photo_img','$photo_date')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>