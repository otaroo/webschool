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
  <h2>ประเมินกิจกรรม:
    <?php echo $fd['act_name'];  ?>
  </h2>
  <?php } ?>
  <form id="frminsert" method="post" enctype="multipart/form-data">
    <input type="hidden" name="act_id" value="<?php echo $act_id?>">
    <div class="row">
      <div class="col-12">
        <table class="table table-striped">
          <thead>
           
          </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>