 <?php
		require_once "../../config.php";
					$sql2 ="select * from tb_activities  order by activities_id desc limit 0,1";  
					$qess2=$db->query($sql2);	
					 $fd2=$qess2->fetch_assoc();
					 $activities_id = ($fd2['activities_id']+1);
					$activities_name = $_POST['activities_name'];
					$activities_date = $_POST['activities_date'];
					$activities_place = $_POST['activities_place'];
					$activities_status = $_POST['activities_status'];
					$activities_description = $_POST['activities_description'];
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
	 			//	$activities_id ="";
  		 	   $sql_add = "insert into tb_activities (activities_id,activities_name,activities_date,activities_place,activities_status,activities_description,activities_photo) values('$activities_id','$activities_name','$activities_date','$activities_place','$activities_status','$activities_description','.$lastname')";
			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>
		
        