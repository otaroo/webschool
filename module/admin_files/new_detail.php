<div class="container">
    <div class="row">
        <?php
		$id_news=$_GET['id_news'];
    $sql ="SELECT * FROM tb_new where id_news = '$id_news' ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>
      
        <!-- Post Content Column -->
        <div class="col-lg-8">
		<input type="hidden" id="act_id" value="<? echo $fd['id_news']?>">
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
            <p>วันที่ </p>

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
                    <p><img src="img/icon/icontexto-user-web20-facebook_icon-icons.com_55373.png" width="48" height="48" />facebook: กศน. ตำบลนาโบสถ์ นาโบสถ์                </p>
                    <p><img src="img/icon/Email_30017.png" width="48" height="48" />wangchao.tak@hotmail.com </p>
                    <p><img src="img/icon/linphone_phonecall_linphone_6086.png" width="48" height="48" />055 - 593013  </p>
                    <p>เบอร์โทรสาร :  055-593013</p>
                </div>
          </div>

        </div>

    </div>
    <!-- /.row -->
    
</div>