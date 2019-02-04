<?php
$idnews = $_POST['idnews'];
$dir_l = "../../img/news/".$idnews."/";
$dir_url = "img/news/".$idnews."/";
 $type = array("jpg","png","gif","jpge");
$files_url = array();
$files_type = array();
if(is_dir($dir_l)){
    $fol2 = scandir($dir_l);
   //print_r($fol2);
    $i=0;
    for($a=2;$a<count($fol2);$a++){ 

        $url_img = $dir_url .$fol2[$a];
        $lastname = explode(".",$fol2[$a]);
        if(in_array($lastname[1],$type)){
        ?>
        <div class="col-sm-4 sm-margin-b-50 " >
            <div class="margin-b-20 "><?php //echo $url_img;?>
               <img id="myImg<?php echo ($i+1);?>" onclick="showPhoto('<?php echo ($i+1);?>')" class="img-responsive" src="<?php echo $url_img;?>" style="height:300px; text-align: center; overflow-x:hidden; overflow-y:hidden;" />  
                <div style="background-color:#fff;   text-align:center; padding-right:5px;"> 
                    <span class="path_img"><?php echo $url_img;?></span>
                    <p class="del_img" style="color:red; font-size:20pt; cursor: pointer; margin-top:5px;"> ลบภาพนี้ X </p> 
                </div>
            </div>  
         </div>
        <div id="myModal<?php echo ($i+1);?>" class="modal" style="text-align:center; margin:auto;  border:5px solid #fff; padding: 25px; background-color:#000;">
            <span class="close<?php echo ($i+1);?>">&times;</span>
            <img class="modal-content" id="img<?php echo ($i+1);?>">
            <div id="caption<?php echo ($i+1);?>"></div>
        </div>
 
 
<?php $i++;
     }else{
        $files_url[]=$url_img;
        $files_type[]=$lastname[1];
      }
    }
    ?>
    <div style="clear:both;margin-top:10px;">
    <?php
    for($a=0;$a<count($files_url);$a++){ ?>
    
        <div><a href="<?php echo $files_url[$a];?>" target="_blank"><?php echo $files_type[$a];?> ไฟล์แนบที่ <?php echo ($a+1);?></a></div>
   <?php } ?>
    </div>
<?php   
 }           
?>

<script>
// Get the modal
/*
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
*/

function showPhoto(n){

var modal = document.getElementById('myModal'+n);

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg'+n);
var modalImg = document.getElementById("img"+n);
//var captionText = document.getElementById("caption"+n);
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
  //  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close"+n)[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
modalImg.onclick = function(){
   modal.style.display = "none"; 
}
}
</script>