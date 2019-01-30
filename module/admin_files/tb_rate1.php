<div class="container">
  <?php  
   $sql = "SELECT act_name FROM `tb_activity` where act_id = 42";
   $qess=$db->query($sql);
   while($fd=$qess->fetch_assoc()){ ?>
  <h3> กิจกรรม:
    <?php  echo $fd['act_name']; ?>
  </h3>
  <?php } ?>
  <div class="row">
    <div class="col">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">รายการ</th>
            <th scope="col">คะแนน</th>

          </tr>
        </thead>
        <tbody>
          <?php 
            $sql ="
            SELECT
                AVG(r1) as r1,
                AVG(r2) as r2,
                AVG(r3) as r3,
                AVG(r4) as r4,
                AVG(r5) as r5,
                AVG(r6) as r6,
                AVG(r7) as r7,
                AVG(r8) as r8,
                AVG(r9) as r9,
                AVG(r10) as r10 ,
                COUNT(mem_id_card) as mem_id_card,
                act_id  
            FROM
                `tb_rate`
            where
                act_id = 42"; 
            $qess=$db->query($sql);
            while($fd=$qess->fetch_assoc()){ ?>
          <tr>
            <th>
              1.กิจกรรมนี้มีประโยชน์หรือไม่
            </th>
            <td>
              <?php echo $fd['r1'];  ?>
            </td>
          </tr>
          <tr>
            <th>
              2.การประชาสัมพันธ์กิจกรรม/โครงการ
            </th>
            <td>
              <?php echo $fd['r2'];  ?>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>