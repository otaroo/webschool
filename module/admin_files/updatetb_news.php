<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-12-01 14:25:22
Download Code On : developers.khontermfan.com
*/?>
<?php
		require_once "../../config.php";
			
					$id = $_POST['id'];
					$title = $_POST['title'];
					$description = $_POST['description'];
					$publish_time = $_POST['publish_time'];
					$new_files = $_POST['new_files'];
			$dir = "files/$id/";
					if(!is_dir($dir))
						mkdir($dir, 0755, true);
						$source= $_FILES['publish_time']['tmp_name'];
						$files_name =$_FILES['publish_time']['name'];
						$array_last=explode (".",$files_name);
				 		$c=count($array_last) -1 ;
						$lastname=strtolower($array_last [$c]);
						$distination = $dir."/".$id.".".$lastname;
	 					@copy($source,$distination);
						 $sql_update = "update tb_news set title='$title',description='$description',publish_time='$lastname',new_files='$new_files' where id='$id' ";
			  $qqes = $db->query($sql_update);
			 if($qqes){
				echo "1";
			}else{
				echo "0";
			}
		?>