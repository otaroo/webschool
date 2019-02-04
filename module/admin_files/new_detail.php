<div class="container">
    <div class="row">
        <?php
		$id_news=$_GET['id_news'];
    $sql ="SELECT * FROM tb_news where id = '$id_news' ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>
      
        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">  <? echo $fd['title']?></h1>

            <!-- Author -->
            <p class="lead">
                by
                <a href="#">Admin</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>วันที่  <? echo $fd['publish_time']?></p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

            <hr>

            <!-- Post Content -->
            <p class="lead"> <? echo $fd['description']?> </p>

          
            <hr>



        </div>
        <? }?>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">


            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <a href="#">HTML</a>
                                </li>
                                <li>
                                    <a href="#">Freebies</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">JavaScript</a>
                                </li>
                                <li>
                                    <a href="#">CSS</a>
                                </li>
                                <li>
                                    <a href="#">Tutorials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the
                    new Bootstrap 4 card containers!
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->