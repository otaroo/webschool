<div class="container">
  <div class="row">
  <?php 
			$sql2 ="select * from personnel where 1  order by personnel_name asc";  
			$qess2=$db->query($sql2);	
			while($fd2=$qess2->fetch_assoc()){	
				$url_img = "img/user/".$fd2['personnel_id'].$fd2['personnel_img'];
		?>
    <div class="col">
    <?php echo $fd2['personnel_id'];?>
    </div>
    <div class="col-6">
    <?php echo $fd2['personnel_name'];?>
    </div>
    <div class="col">
    <?php echo $fd2['personnel_name'];?>
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col-5">
      2 of 3 (wider)
    </div>
    <div class="col">
      3 of 3
    </div>
    <?php } ?>
  </div>
</div>










