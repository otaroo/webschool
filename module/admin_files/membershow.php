<div class="container">
  <?php  
   $sql = "SELECT mem_name FROM `tb_member` where act_id = 42";
   $qess=$db->query($sql);
   while($fd=$qess->fetch_assoc()){ ?>
  <h3> รายชื่อผู้สมัคร:
    <?php  echo $fd['mem_name']; ?>
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
                SUM(mem_id) as mem_id
                SUM(mem_name) as mem_name,
                SUM(mem_tel)  as mem_tel
                SUM(mem_card) as mem_card,
                SUM(mem_sex) as mem_sex,
               
                COUNT(act_id as act_id,
                act_id  
            FROM
                `tb_activity`
            where
               act_id = '$act_id'";  
            $qess=$db->query($sql);
            while($fd=$qess->fetch_assoc()){ ?>
          <tr>
            <th>
              1.รายชื่อผู้สมัคร
            </th>
            <td>
              <?php echo $fd['mem_name'];  ?>
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
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>