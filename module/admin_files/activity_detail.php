<div class="container">
    <div class="row">

        <?php
		$id_activity=$_GET['id_activity'];
    $sql ="SELECT * FROM tb_activity where act_id = '$id_activity' ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>

        <!-- Post Content Column -->
        <div class="col-lg-8">
            <input type="hidden" id="act_id" value="<? echo $fd['act_id']?>">
            <!-- Title -->
            <h1 class="mt-4"> กิจกรรม:
                <? echo $fd['act_name']?>
            </h1>

            <!-- Author -->
            <p class="lead">
                by
                <a href="#">Admin</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>วันที่
                <? echo $fd['act_date']?>
            </p>

            <hr>
            <?php
             $dir_url="img/news/".$fd['act_id']."/";

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

            <a href="<?php echo $url_img;?>" data-lightbox="image-1" data-title="My caption"> 
                <img src="<?php echo $url_img;?>"
                    style=" width: 100%" />
            </a>
            <hr>

            <!-- Post Content -->
            <p class="lead">
                <? echo $fd['act_des']?>
            </p>

            <a type="button" id="btn_reg" href="?fd=admin&page=addtb_member&id_activity=<? echo  $id_activity; ?>"
                class="btn btn-primary">สมัคร</a>
            <label id="err9" class="err"></label>
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
                    <p><img src="img/icon/icontexto-user-web20-facebook_icon-icons.com_55373.png" width="48" height="48" /><a href="https://web.facebook.com/profile.php?id=100021403591840&amp;epa=SEARCH_BOX">facebook:
                        กศน. ตำบลนาโบสถ์ นาโบสถ์ </a></p>
                  <p><img src="img/icon/Email_30017.png" width="48" height="48" />wangchao.tak@hotmail.com </p>
                    <p><img src="img/icon/linphone_phonecall_linphone_6086.png" width="48" height="48" />087-1986902</p>
                    <p>เบอร์โทรสาร :  055-593013</p>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

            var act_id = $('#act_id').val();
            var url = "module/admin_files/getPhoto_act.php";
            $.post(url, {
                act_id: act_id
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