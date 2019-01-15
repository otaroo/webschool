<?php
		require_once "../../config.php";
			
					$activities_id = $_POST['activities_id'];
					$activities_name = $_POST['activities_name'];
					$activities_date = $_POST['activities_date'];
					$activities_place = $_POST['activities_place'];
					$activities_status = $_POST['activities_status'];
					$activities_description = $_POST['activities_description'];
					//$activities_photo ='';// $_POST['activities_photo'];
			$dir = "../../files/$activities_id/";
			
					if(!is_dir($dir))
						mkdir($dir, 0755, true);
						$source= $_FILES['activities_photo']['tmp_name'];
						$files_name =$_FILES['activities_photo']['name'];
						$array_last=explode (".",$files_name);
				 		$c=count($array_last) -1 ;
						$lastname=strtolower($array_last [$c]);
						$distination = $dir."/".$activities_id.".".$lastname;
	 					@copy($source,$distination);
				 	
  		 	  $sql_update = "update tb_activities set activities_name='$activities_name',activities_date='$activities_date',activities_place='$activities_place',activities_status='$activities_status',activities_description='$activities_description',activities_photo='."
			  .$lastname."' where activities_id='$activities_id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>