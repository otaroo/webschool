<style>

</style>
<div class="container">
  <div class="row">
    <div class="col-12">
      <h2>
      <center>
        ข้อมูลบุคลากร
        </center>
      </h2>
    </div>
  </div>
<center>
  <div class="row justify-content-center">

    <?php
    $sql ="SELECT * FROM personnel where id_personnel = 1 ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>
    <div class="col-4">
      <div class="card text-center" style="width: 16rem;">
        <img class="card-img-top" src="img/user/<? echo $fd['personnel_img']?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">
            <? echo $fd['personnel_name']?>
          </h5>
          <p class="card-text">
            <? echo $fd['personnel_position']?>
          </p>
        </div>
      </div>
    </div>
    <?php }?>
  </div>



  <div class="row justify-content-center">
    <?php
    $sql ="SELECT * FROM personnel where id_personnel = 2 ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>
    <div class="col-4 ">
    <div class="card text-center" style="width: 16rem;">
    <img class="card-img-top" src="img/user/<? echo $fd['personnel_img']?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">
            <? echo $fd['personnel_name']?>
          </h5>
          <p class="card-text">
            <? echo $fd['personnel_position']?>
          </p>
        </div>
      </div>
    </div>
    <?php }?>
  </div>



  <div class="row justify-content-center">
    <?php
    $sql ="SELECT * FROM personnel where id_personnel = 3 ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>
    <div class="col-4 ">
    <div class="card text-center" style="width: 16rem;">
    <img class="card-img-top" src="img/user/<? echo $fd['personnel_img']?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">
            <? echo $fd['personnel_name']?>
          </h5>
          <p class="card-text">
            <? echo $fd['personnel_position']?>
          </p>
        </div>
      </div>
    </div>
    <?php }?>
  </div>



  <div class="row justify-content-center" >
    <?php
    $sql ="SELECT * FROM personnel where id_personnel = 4 ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>
    <div class="col-4 ">
    <div class="card text-center" style="width: 16rem;">
    <img class="card-img-top" src="img/user/<? echo $fd['personnel_img']?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">
            <? echo $fd['personnel_name']?>
          </h5>
          <p class="card-text">
            <? echo $fd['personnel_position']?>
          </p>
        </div>
      </div>
    </div>
    <?php }?>
  </div>




  <div class="row justify-content-center" >
    <?php
    $sql ="SELECT * FROM personnel where id_personnel = 5 ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>
    <div class="col-4 ">
    <div class="card text-center" style="width: 16rem;">
    <img class="card-img-top" src="img/user/<? echo $fd['personnel_img']?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">
            <? echo $fd['personnel_name']?>
          </h5>
          <p class="card-text">
            <? echo $fd['personnel_position']?>
          </p>
        </div>
      </div>
    </div>
    <?php }?>
  </div>





  <div class="row justify-content-center" >
    <?php
    $sql ="SELECT * FROM personnel where id_personnel = 6 ";  
    $qess=$db->query($sql);	
    while($fd=$qess->fetch_assoc()){	?>
    <div class="col-4 ">
    <div class="card text-center" style="width: 16rem;">
    <img class="card-img-top" src="img/user/<? echo $fd['personnel_img']?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">
            <? echo $fd['personnel_name']?>
          </h5>
          <p class="card-text">
            <? echo $fd['personnel_position']?>
          </p>
        </div>
      </div>
    </div>
    <?php }?>
  </div>





  </center>
</div>