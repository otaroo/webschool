
<?php
$act_id = $_POST['act_id'];
$dir_l = "../../img/news/".$act_id."/";
$dir_url = "img/news/".$act_id."/";
 $type = array("jpg","png","gif","jpge");
$files_url = array();
$img_url = array();
$files_type = array();
if(is_dir($dir_l)){
    $fol2 = scandir($dir_l);
   //print_r($fol2);
    $i=0;
    ?>
     <div class="row">
    <?php
    for($a=2;$a<count($fol2);$a++){ 

        $url_img = $dir_url .$fol2[$a];
        $lastname = explode(".",$fol2[$a]); 
        if(in_array($lastname[1],$type)){
        ?>
     
      <div class="column" style="background-color:#fff;   text-align:center; padding:5px; ">
        <img src="<?php echo $url_img;?>" style="height:300px;" onclick="openModal();currentSlide(<?php echo ($a-1);?>)" class="hover-shadow cursor">
        <div  > 
            <span class="path_img"><?php  echo $url_img;?></span>
            <p class="del_img" style="color:red; font-size:20pt; cursor: pointer; margin-top:5px;"> ลบภาพนี้ X </p> 
        </div>
      </div>
     
 
<?php $i++;
        $img_url[]=$url_img;
        //$files_type[]=$lastname[1];
     }else{
        $files_url[]=$url_img;
        $files_type[]=$lastname[1];
      }
    }
    ?>
</div>

    <div style="clear:both;margin-top:10px;">
    <?php
     $img_type = array("doc"=>"doc.jpg","docx"=>"doc.jpg","xls"=>"xls.jpg","xlsx"=>"xls.jpg","ptt"=>"ppt.jpg","pttx"=>"ppt.jpg","pdf"=>"pdf.jpg");
    for($a=0;$a<count($files_url);$a++){ ?>
    
        <div>
            <a href="<?php echo $files_url[$a];?>" target="_blank"><img src="img/<?php echo $img_type[$files_type[$a]];?>" width="150px"> ไฟล์แนบที่ <?php echo ($a+1);?></a>
             <span class="path_img"><?php  echo $files_url[$a];?></span>
            <p class="del_img" style="color:red; font-size:20pt; cursor: pointer; margin-top:5px;"> ลบไฟล์นี้ X </p> 
        </div>
   <?php } ?>
    </div>
    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">
    <?php
    for($a=0;$a<count($img_url);$a++){ ?>
        <div class="mySlides">
          <div class="numbertext"><?php echo ($a+1);?> / <?php echo count($img_url); ?></div>
          <img src="<?php  echo $img_url[$a];?>" style="height:65%;">
        </div>
    <?php } ?> 
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <div class="caption-container">
          <p id="caption"></p>
        </div>
      </div>
</div>
<?php   
 }           
?>


<style>
 
* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;  
  z-index:99999;
  padding-top: 30px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
 /* overflow:auto; */
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 95%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
  text-align:center;
}

.cursor {
  cursor: pointer
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
</style>
 
 

