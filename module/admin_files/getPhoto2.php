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
    ?>
     <div class="row">
    <?php
    for($a=2;$a<count($fol2);$a++){ 

        $url_img = $dir_url .$fol2[$a];
        $lastname = explode(".",$fol2[$a]); 
        if(in_array($lastname[1],$type)){
        ?>
     
      <div class="column">
        <img src="<?php echo $url_img;?>" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
        <div style="background-color:#fff;   text-align:center; padding-right:5px;"> 
            <span class="path_img"><?php  echo $url_img;?></span>
            <p class="del_img" style="color:red; font-size:20pt; cursor: pointer; margin-top:5px;"> ลบภาพนี้ X </p> 
        </div>
      </div>
      <!--div class="column">
        <img src="img_fjords.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="img_mountains.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="img_lights.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
      </div>
    

        <div class="col-sm-4 sm-margin-b-50 " >
            <div class="margin-b-20 "><?php //echo $url_img;?>
               <img  class="img-responsive" src="<?php //echo $url_img;?>" style="height:300px; text-align: center; overflow-x:hidden; overflow-y:hidden;" />  
                <div style="background-color:#fff;   text-align:center; padding-right:5px;"> 
                    <span class="path_img"><?php //echo $url_img;?></span>
                    <p class="del_img" style="color:red; font-size:20pt; cursor: pointer; margin-top:5px;"> ลบภาพนี้ X </p> 
                </div>
            </div>  
         </div-->
 
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
    for($a=0;$a<count($files_url);$a++){ ?>
    
        <div><a href="<?php echo $files_url[$a];?>" target="_blank"><?php echo $files_type[$a];?> ไฟล์แนบที่ <?php echo ($a+1);?></a></div>
   <?php } ?>
    </div>
    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">
    <?php
    for($a=0;$a<count($img_url);$a++){ ?>
        <div class="mySlides">
          <div class="numbertext">1 / 4</div>
          <img src="<?php  echo $url_img;?>" style="width:100%">
        </div>
    <?php } ?>
        <!--div class="mySlides">
          <div class="numbertext">2 / 4</div>
          <img src="img_fjords_wide.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 4</div>
          <img src="img_mountains_wide.jpg" style="width:100%">
        </div>
        
        <div class="mySlides">
          <div class="numbertext">4 / 4</div>
          <img src="img_lights_wide.jpg" style="width:100%">
        </div-->
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
          <p id="caption"></p>
        </div>

    <?php
    for($a=0;$a<count($img_url);$a++){ ?>
        <div class="column">
          <img class="demo cursor" src="<?php  echo $url_img;?>" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
        </div>
         <?php } ?>
        <!--div class="column">
          <img class="demo cursor" src="img_fjords_wide.jpg" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
        </div>
        <div class="column">
          <img class="demo cursor" src="img_mountains_wide.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
        </div>
        <div class="column">
          <img class="demo cursor" src="img_lights_wide.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
        </div-->
      </div>
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


<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

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
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
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
 





<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>