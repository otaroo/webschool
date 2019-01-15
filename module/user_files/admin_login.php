<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-27 19:23:33
Download Code On : developers.khontermfan.com
*/?> 
<meta charset='UTF-8'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
<link rel="stylesheet" href="css/style_login.css">
<div class="wrapper">
  <form class="form-signin" id="frm_login"  method="post">       
    <h2 align="center" class="form-signin-heading">การเข้าสู่ระบบ</h2>
    <input type="text" class="form-control" name="member_user" id="member_user" placeholder="User Name" required="" autofocus="" /><span id='err1'></span>
    <input type="password" class="form-control" name="member_pass" id="member_pass" placeholder="Password" required=""/><span id='err2'></span>
    <label class="checkbox">
      <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
    </label>
    <span id='status_login'></span>
    <button class="btn btn-lg btn-primary btn-block" onclick="return checkEmpty();" type="button">Login</button>   
  </form>
</div>
<script>
function checkEmpty(){
 $("#err1").html('');
 $("#err2").html('');
 var chk = true;
 if($("#member_user").val() == ""){
    $("#err1").html('กรุณากำหนดค่าชื่อเข้าสู่ระบบด้วยค่ะ');
	$("#member_user").focus();
	chk= false;
 }
 if($("#member_pass").val() == ""){
    $("#err2").html('กรุณากำหนดค่ารหัสผ่านเข้าสู่ระบบด้วยค่ะ');
	$("#member_pass").focus();
	chk= false;
 }
  if(chk){
	var url="module/user_files/checklogin_admin.php";
	var form = $('#frm_login')[0];
	var data = new FormData(form);
	$.ajax({
		type: "POST",
		enctype: 'multipart/form-data',
		url: url,
		data: data,
		processData: false,
		contentType: false,
		cache: false,
		timeout: 600000,
		success: function (data) {
	 		//alert(data);
			if(data.trim()=='1'){
				$("#status_login").html('<font color=green>เข้าสู่ระบบเรียบร้อยแล้วค่ะ...</font><br>');
					setTimeout(function(){ 
						location='index_new.php';
					}, 3000);  
			}else $("#status_login").html('<font color=red>ไม่สามารถเข้าสู่ระบบได้...กรุณาตรวจสอบข้อมูลอีกครั้ง...</font><br>');
		},
		error: function (e) {
		    $("#status_login").html(e.responseText);
		}
	});
					  
  }else{ 
	    return false;
  }
}
</script>