<div class="container">
    <div class="row">
        <?php
		$id_activity=$_GET['id_activity'];
    $sql ="SELECT * FROM tb_activity where act_id = '$id_activity' ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>
      
        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4"> กิจกรรม: <? echo $fd['act_name']?></h1>

            <!-- Author -->
            <p class="lead">
                by
                <a href="#">Admin</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>วันที่  <? echo $fd['act_date']?></p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

            <hr>

            <!-- Post Content -->
            <p class="lead"> <? echo $fd['act_des']?> </p>

            <a type="button"  href="?fd=admin&page=addtb_member&id_activity=<? echo  $id_activity; ?>" class="btn btn-primary">สมัคร</a>
          
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
                    facebook: กศน. ตำบลนาโบสถ์ นาโบสถ์
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->