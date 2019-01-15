
<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-29 12:06:30
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			
					$ph_id = $_POST['ph_id'];
					$Act_id = $_POST['Act_id'];
					$photo = $_POST['photo'];
			$dir = "files/$ph_id/";
					if(!is_dir($dir))
						mkdir($dir, 0755, true);
						$source= $_FILES['photo']['tmp_name'];
						$files_name =$_FILES['photo']['name'];
						$array_last=explode (".",$files_name);
				 		$c=count($array_last) -1 ;
						$lastname=strtolower($array_last [$c]);
						$distination = $dir."/".$ph_id.".".$lastname;
	 					@copy($source,$distination);
  		 	  $sql_update = "update tb_photo set Act_id='$Act_id',photo='.".$lastname' where ph_id='$ph_id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>