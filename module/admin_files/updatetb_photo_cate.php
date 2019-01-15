




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-26 07:29:24
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$photo_cate_id = $_POST['photo_cate_id'];
					$photo_cate_name = $_POST['photo_cate_name'];
					$photo = $_POST['photo'];
					$photo_cate_date = $_POST['photo_cate_date'];
			$dir = "files/$photo_cate_id/";
					if(!is_dir($dir))
						mkdir($dir, 0755, true);
						$source= $_FILES['photo']['tmp_name'];
						$files_name =$_FILES['photo']['name'];
						$array_last=explode (".",$files_name);
				 		$c=count($array_last) -1 ;
						$lastname=strtolower($array_last [$c]);
						$distination = $dir."/".$photo_cate_id.".".$lastname;
	 					@copy($source,$distination);
  		 	  $sql_update = "update tb_photo_cate set photo_cate_name='$photo_cate_name',photo='.".$lastname',photo_cate_date='$photo_cate_date' where photo_cate_id='$photo_cate_id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>