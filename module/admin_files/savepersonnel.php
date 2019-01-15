




<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-12-20 18:43:04
Download Code On : developers.khontermfan.com
*/?> <?php
		require_once "../../config.php";
			

			$sql2 ="select * from personnel  order by personnel_id desc limit 0,1";  
					$qess2=$db->query($sql2);	
					 $fd2=$qess2->fetch_assoc();
					$personnel_id = ($fd2['personnel_id']+1);;
					$personnel_name = $_POST['personnel_name'];
					$personnel_position = $_POST['personnel_position'];
					//$personnel_img = $_POST['personnel_img'];


					 $dir = "../../img/user/";
					 if(!is_dir($dir))
						mkdir($dir, 0755, true);
						$source= $_FILES['personnel_img']['tmp_name'];
						$files_name =$_FILES['personnel_img']['name'];
						$array_last=explode (".",$files_name);
				 		$c=count($array_last) -1 ;
						$lastname=strtolower($array_last [$c]);
						$distination = $dir."/".$personnel_id.".".$lastname;
	 					@copy($source,$distination);
	 			//	$activities_id ="";
  		 	  $sql_add = "insert into personnel (personnel_id,personnel_name,personnel_position,personnel_img) values('$personnel_id','$personnel_name','$personnel_position','.$lastname')";
			  

			

			  $qqes = $db->query($sql_add);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>