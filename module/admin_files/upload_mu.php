<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$id_news = $_POST['id_news'];
 require_once "../../class/PKImages.class.php";
 $img = new PKImages();
 
 $distination = "../../img/news/".$id_news."";
//chmod("../../img",0777);
//chmod("../../img/news",0777);
 //rmdir($distination);
 //unlink($distination);
if(!is_dir($distination))
   mkdir($distination,0777,true);

$output_dir = $distination."/";
if(isset($_FILES["myfile"]))
{
	$ret = array();
	$type = array("jpg","png","gif","jpge");
//	This is for custom errors;	
/*	$custom_error= array();
	$custom_error['jquery-upload-file-error']="File already exists";
	echo json_encode($custom_error);
	die();
*/
	$error =$_FILES["myfile"]["error"];
	//You need to handle  both cases
	//If Any browser does not support serializing of multiple files using FormData() 
	if(!is_array($_FILES["myfile"]["name"])) //single file
	{
 	 	$fileName = $_FILES["myfile"]["name"];
 		//move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
 		$source= $_FILES['myfile']['tmp_name'];
        $files_name =$_FILES["myfile"]["name"];
		$array_last=explode (".",$files_name);
		$c=count($array_last) -1 ;
		$lastname=strtolower ($array_last [$c]);
		$t = rand(1000,10000);
		$imgname =$t.(time()).".".$lastname;
		if(in_array($lastname,$type)){
			$saveToDir = $output_dir;
			$imagePath = $source;
			$imageName = $imgname;
			$max_x =970;
			$max_y =647;
		 	$img->saveTo($saveToDir, $imagePath, $imageName,$max_x, $max_y);
	 	}else{
	 		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$imgname);
	 	}

    	$ret[]= $imgname;
	}
	else  //Multiple files, file[]
	{
	  $fileCount = count($_FILES["myfile"]["name"]);
	  for($i=0; $i < $fileCount; $i++)
	  {
	  	$fileName = $_FILES["myfile"]["name"][$i];
		//move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
		$source= $_FILES['myfile']['tmp_name'];
        $files_name =$_FILES["myfile"]["name"];
		$array_last=explode (".",$files_name);
		$c=count($array_last) -1 ;
		$lastname=strtolower ($array_last [$c]);
		$t = rand(1000,10000);
		$imgname =$t.(time()).".".$lastname;

		if(in_array($lastname,$type)){
			$saveToDir = $output_dir;
			$imagePath = $source;
			$imageName = $imgname;
			$max_x =970;
			$max_y =647;
		 	$img->saveTo($saveToDir, $imagePath, $imageName,$max_x, $max_y);
	 	}else{
	 		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$imgname);
	 	}

	  	$ret[]= $imgname;
	  
	  }
	
	}
	
    echo json_encode($ret);
 }	
 //echo  $distination;
 ?>