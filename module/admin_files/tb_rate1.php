<div class="container">
  <?php  
  $act_id = $_GET['act_id'];
   $sql = "SELECT act_name FROM `tb_activity` where act_id = '$act_id'";
   $qess=$db->query($sql);
   while($fd=$qess->fetch_assoc()){ ?>
  <h3> กิจกรรม:
    <?php  echo $fd['act_name']; ?>
  </h3>
  <?php } ?>
  <div class="row">
    <div class="col">
      <h3>

        <?php 


   $sql = "SELECT COUNT(mem_id) as loveyou FROM `tb_member` where act_id = '$act_id'";
   $qess=$db->query($sql);
   while($fd=$qess->fetch_assoc()){ ?>
        <h3> จำนวนคนสมัคร:
          <?php  echo $fd['loveyou']; ?>
        </h3>
        <?php } ?>

      </h3>
    </div>
  </div>
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
                act_id = '$act_id'"; 
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
          <tr>
            <th>
              3.รูปแบบการจัดกิจกรรมมีความเหมาะสม
            </th>
            <td>
              <?php echo $fd['r3'];  ?>
            </td>
          </tr>
          <tr>
            <th>
              4.สิ่งอำนวยความสะดวกมีความเหมาะสม
            </th>
            <td>
              <?php echo $fd['r4'];  ?>
            </td>
          </tr>
          <tr>
            <th>
              5.สถานที่ให้บริการมีความสะดวกในการเดินทาง
            </th>
            <td>
              <?php echo $fd['r5'];  ?>
            </td>
          </tr>
          <tr>
            <th>
              6.เวลาที่ใช้ในการจัดกิจกรรมมีความเหมาะสม
            </th>
            <td>
              <?php echo $fd['r6'];  ?>
            </td>
          </tr>
          <tr>
            <th>
              7.สถานที่จัดมีความเหมาะสม
            </th>
            <td>
              <?php echo $fd['r7'];  ?>
            </td>
          </tr>
          <tr>
            <th>
              8.จิตสำนึก ทัศนคติ ความตระหนัก ความยุติธรรม
            </th>
            <td>
              <?php echo $fd['r8'];  ?>
            </td>
          </tr>
          <tr>
            <th>
              9.การมีส่วนร่วมและในการทำงานเป็นทีม
            </th>
            <td>
              <?php echo $fd['r9'];  ?>
            </td>
          </tr>
          <tr>
            <th>
              10.ความพึงพอใจโดยรวมในการเข้าร่วมโครงการนี้
            </th>
            <td>
              <?php echo $fd['r10'];  ?>
            </td>
          </tr>
          <tr>
            <th>
              จำนวนคนประเมิน
            </th>
            <td>
              <?php echo $fd['mem_id_card'];  ?>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>