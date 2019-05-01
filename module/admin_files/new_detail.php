<div class="container">
    <div class="row">
        <?php
		$id_news=$_GET['id_news'];
    $sql ="SELECT * FROM tb_new where id_news = '$id_news' ";    // ในส่วนของ from มาจาก ตารางข่าว tb_new ทำการแวร์ จากไอดีข่าว
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>
      
        <!-- Post Content Column -->
        <div class="col-lg-8">
		<input type="hidden" id="id_news" value="<? echo $fd['id_news']?>">
            <!-- Title -->
            <!-- Title -->
            <h1 class="mt-4"> ข่าว:  <? echo $fd['title_news'];?></h1>

            <!-- Author -->
            <p class="lead">
                by
                <a href="#">Admin</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p> </p>

           <hr>
            <?php
             $dir_url="img/news/".$fd['id_news']."/";

				if(is_dir($dir_url)){
				    $fol2 = scandir($dir_url);
					$url_img = $dir_url .$fol2[2];
				    $lastname = explode(".",$fol2[2]); 

				}
            ?>
            <style>
                .a {
                wi
                
            }
            </style>
            <!-- Preview Image -->
            <!-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> -->
            <img src="<?php echo $url_img;?>" style=" width: 100%" />

            <!-- Post Content -->
            <p class="lead"> <? echo $fd['description_news'];?> </p>

          
            <hr>



        </div>
        <? }?>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">


           <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">เว็บไซต์ที่น่าสนใจ</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="http://www.nfe.go.th/">สำนักงาน กศน.</a>
                                </li>
                                
                               <li>
                                    <a href="http://www.etvthai.tv/stream/home.aspx">สถานีวิทยุเพื่อการศึกษา ETV</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="http://www.ceted.org/">CET ศูนย์เทคโนโลยีทางการศึกษา</a>
                                </li>
                                <li>
                                    <a href="http://www.moe.go.th/moe/th/home/">กระทรวงศึกษาธิการ</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
       
              <h5 class="card-header">ช่องทางการติดต่อ</h5>
                <div class="card-body">
                    <p><img src="img/icon/icontexto-user-web20-facebook_icon-icons.com_55373.png" width="48" height="48" /><a href="https://web.facebook.com/profile.php?id=100021403591840&amp;epa=SEARCH_BOX">facebook: กศน. ตำบลนาโบสถ์ นาโบสถ์                </a></p>
                  <p><img src="img/icon/Email_30017.png" width="48" height="48" />wangchao.tak@hotmail.com </p>
                    <p><img src="img/icon/linphone_phonecall_linphone_6086.png" width="48" height="48" />087-1986902</p>
                  <p>เบอร์โทรสาร :  055-593013</p>
                </div>
          </div>

        </div>

    </div>
    </div>
    <!-- /.row -->

    <div class="row">
            <div class="col-12">
                <div id="showPhoto"> </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    
    <<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $.get("module/user_files/checkActCount.php", { 
                act_id: $('#act_id').val()
            }, function (data) {
                var arr = data.split("|");
                console.log(arr);

                if (parseInt(arr[1]) >= parseInt(arr[0])) {  
                    $('#btn_reg').hide();
                    $("#err9").html('กิจกรรมนี้คนสมัครเต็มแล้ว');

                    return false

                } else {
                    $('#btn_reg').show();
                    $("#err9").html('');

                }

                if (diffDate(arr[2]) < 0) {
                    $('#btn_reg').hide();
                    $("#err9").html('กิจกรรมนี้หมดเวลารับสมัครแล้ว');
                    return false
                } else {
                    $('#btn_reg').show();
                    $("#err9").html('');

                }
            });

            function diffDate(date1) {
                var date_act = new Date(date1)
                var date_now = new Date(Date.now())
                var date = (date_act - date_now);
                var one_day = 1000 * 60 * 60 * 24;
                return Math.round(date / one_day);

            }

            var id_news = $('#id_news').val();
            var url = "module/admin_files/getpho_news.php";
            $.post(url, {
                id_news: id_news
            }, function (data) {
                //alert(data);
                setTimeout(function () {
                    $("#showPhoto").html(data);
                    // $(".path_img").hide();
                    // $(".del_img").click(function () {
                    //     if (confirm("คุณต้องการลบภาพนี้ใช่หรือไม่")) {
                    //         var del_file = $(this).parent().find(".path_img").html();
                    //         del_file = "../../" + del_file;
                    //         var url_img = "module/admin_files/del_file.php";

                    //         $.post(url_img, {
                    //             del_file: del_file
                    //         }, function (data) {
                    //             // alert(data);
                    //             location.reload();
                    //         });
                    //     }
                    // });
                }, 1000);
            });
        });
    </script>