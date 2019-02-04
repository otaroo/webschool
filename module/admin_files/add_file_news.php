
  
<script src="https://rawgithub.com/hayageek/jquery-upload-file/master/js/jquery.uploadfile.min.js"></script>
<link href="https://rawgithub.com/hayageek/jquery-upload-file/master/css/uploadfile.css" rel="stylesheet">
 <div style="display:table; margin:0 auto; padding: 20px; width:70%;">
      <ol class="breadcrumb">
                            <li class="active">
  <h2>จัดการรูปภาพข่าวประชาสัมพันธ์</h2>
  </li>
  </ol>
   <form name="frm" id="frm" action="#"  method="post" onsubmit="return checkdata();" enctype="multipart/form-data">
    <input name="act_id" id="act_id" type="hidden" value="<?php echo $_GET['act_id'];?>" >
  <br><br><br>
  <p id="strup">เลือกไฟล์ได้มากกว่า 1 ไฟล์ หรือทำการลากไฟล์วางด้านล่างนี้ <label class="showlink"></label></p>
  <div id="fileuploader">เลือกไฟล์ </div>
 <!--  <button type="submit"  id="btnAdd" name="btnAdd" class="btn btn-info">ตกลง</button> -->
  </form>
</div>
</br>
</br>
 <div id="showPhoto"> </div>
 <script language="javascript">
 $(document).ready(function(){
  getPhoto();
 
$("#fileuploader").uploadFile({
    url: "module/admin_files/upload_multifile.php", // Server URL which handles File uploads
    //url: "upload_multifile.php", // Server URL which handles File uploads
    method: "POST", // Upload Form method type POST or GET.
    enctype: "multipart/form-data", // Upload Form enctype.
    formData: null, // An object that should be send with file upload. data: { key1: 'value1', key2: 'value2' }
    returnType: null,
    allowedTypes:"pdf,doc,docx,jpg,png,gif,ppt,pptx,jpge,xls,xlsx", // List of comma separated file extensions: Default is "*". Example: "jpg,png,gif"
    fileName: "myfile", // Name of the file input field. Default is file
    //formData: {},
    dynamicFormData: function () { // To provide form data dynamically
      var data = {act_id:$("#act_id").val()};
        return data;
    },
    maxFileSize: -1, // Allowed Maximum file Size in bytes.
    maxFileCount: -1, // Allowed Maximum number of files to be uploaded
    multiple: true, // If it is set to true, multiple file selection is allowed. 
    dragDrop: true, // Drag drop is enabled if it is set to true
    autoSubmit: true, // If it is set to true, files are uploaded automatically. Otherwise you need to call .startUpload function. Default istrue
    showCancel: true,
    showAbort: true,
    showDone: false,
    showDelete: false,
    showError: true,
    showStatusAfterSuccess: true,
    showStatusAfterError: true,
    showFileCounter: true,
    fileCounterStyle: "). ",
    showProgress: true,
    nestedForms: true,
    showDownload:false,
    onLoad:function(obj){},
    onSelect: function (files) {
        return true;
    },
    onSubmit: function (files, xhr) {},
    onSuccess: function (files, response, xhr,pd) {
      $(".showlink").html('<font color=green>ดำเนินการเรียบร้อยแล้ว..</font>');
      //alert(response);
      getPhoto();
    },
    onError: function (files, status, message,pd) {
      alert(message);
    },
    onCancel: function(files,pd) {},
    downloadCallback:false,
    deleteCallback: false,
    afterUploadAll: false,
    uploadButtonClass: "ajax-file-upload",
    dragDropStr: "<span><b>Drag &amp; Drop Files</b></span>",
    abortStr: "Abort",
    cancelStr: "Cancel",
    deletelStr: "Delete",
    doneStr: "Done",
    multiDragErrorStr: "Multiple File Drag &amp; Drop is not allowed.",
    extErrorStr: "is not allowed. Allowed extensions: ",
    sizeErrorStr: "is not allowed. Allowed Max size: ",
    uploadErrorStr: "Upload is not allowed",
    maxFileCountErrorStr: " is not allowed. Maximum allowed files are:",
    downloadStr:"Download",
    showQueueDiv:false,
    statusBarWidth:600,
    dragdropWidth:600
  });
// alert(55);

});

 function getPhoto(){

  var act_id = $("#act_id").val();
  var url="module/admin_files/getPhoto.php";
  $.post(url,{
      act_id:act_id
    },function (data)  { 
     //alert(data);
       setTimeout(function(){ 
          $("#showPhoto").html(data);
          $(".path_img").hide();
          $(".del_img").click(function(){ 
            if(confirm("คุณต้องการลบภาพนี้ใช่หรือไม่")){
             var del_file =  $(this).parent().find(".path_img").html();
              del_file ="../../"+del_file; 
             var url_img="module/admin_files/del_file.php";

             $.post(url_img,{
                del_file:del_file
              },function (data)  { 
               // alert(data);
                location.reload();
             });
            }
          });
        }, 1000);  
      });
 }
</script>

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