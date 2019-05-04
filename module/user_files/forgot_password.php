<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST["btnforget"]))
{

 
 $sql="SELECT * from tb_admin where email='".$_POST["email"]."'";
$result=$db->query($sql);
 
 $total_record = mysqli_num_rows($result);
 if ($total_record > 0){
while($row=$result->fetch_array(MYSQLI_BOTH) ){
	$member_name = $row["member_name"];
	$member_user = $row["member_user"];
	$member_pass = $row["member_pass"];  
	$member_status = $row["member_status"];
	$email = $row["email"];
}
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that


require dirname(__DIR__, 2).'/vendor/PHPMailer/src/Exception.php';
require dirname(__DIR__, 2).'/vendor/PHPMailer/src/PHPMailer.php';
require dirname(__DIR__, 2).'/vendor/PHPMailer/src/SMTP.php';


date_default_timezone_set('Asia/Bangkok');
//Create a new PHPMailer instance
$mail = new PHPMailer;
$mail->CharSet = "utf-8";
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "jibtnp0704@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "07042540"; 
//Set who the message is to be sent from
$mail->setFrom('adminpage@gmail.com', 'Admin');
//Set who the message is to be sent to
$mail->addAddress($email);
//Set the subject line
$mail->Subject = 'รหัสผ่าน';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('content.html'), dirname(__FILE__));
$mail->msgHTML("ชื่ออาจารย์    ".$member_name.  "          ".$member_status."<br>ชื่อผู้ใช้ของคุณคือ    ".$member_user ."<br>รหัสผ่านของคุณคือ    ".$member_pass);
 
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    //echo "Message sent!";
}
}
}
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Forgot Password</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>
  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"></div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>ลืมรหัสผ่านหรือไม่?</h4>
            <p>ป้อนที่อยู่อีเมลของคุณแล้วเราจะส่งรหัสผ่านให้คุณ</p>
          </div>
          <form action=""  method="post" >
            <div class="form-group">
              <div class="form-label-group">
              <label for="email">ป้อนที่อยู่อีเมล</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="ป้อนที่อยู่อีเมล" required="required" autofocus="autofocus">
                
                <?php
				if(isset($_POST["btnforget"]))
{
	if ($total_record > 0){
				?>
                  <h4>รหัสผ่านถูกส่งไปยังอีเมล์ที่ลงทะเบียนไว้เรียบร้อยแล้ว</h4>
                  <?php
	}else{
				  ?>
                   <h4>อีเมล์ที่ระบุไม่ถูกต้อง</h4>
                    <?php
	}
}
				  ?>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" name="btnforget" value="ขอรหัสผ่าน" />
          </form>
          <div class="text-center">
           
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
