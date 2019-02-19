<?php 
require_once "config.php";
?>
<p>&nbsp;</p>
<div class="container">
    <?php
    $act_id = $_GET['act_id'];
    $sql ="SELECT * FROM tb_activity where act_id='$act_id' ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){ ?>
    <h2>กิจกรรม:
        <?php echo $fd['act_name'];  ?>
    </h2>
    <?php } ?>
    form id="frminsert" method="post" enctype="multipart/form-data">
    <input type="hidden" name="act_id" value="<?php echo $act_id?>">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr align="center">
                        <th scope="col">ชื่อกิจกรรม</th>
                        <th scope="col">วันที่กิจกรรม</th>
                        
                    </tr>
                </thead>
                <tbody>

              

                    <table class="table">
                        <thead>
                            <tr>

                                <th scope="col"><?php echo $act_id?></th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                       
                    </table>