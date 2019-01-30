<?php  
    include("../../config.php");
  $mem_id = $_GET['mem_id'];
   $sql = "SELECT act_name FROM `tb_member` where mem_id = '$mem_id'";
   $qess=$db->query($sql);
   while($fd=$qess->fetch_assoc()){ ?>
  <h3> กิจกรรม:
    <?php  echo $fd['mem_name']; ?>
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
      <table class="table" border="1" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">ผู้สมัคร</th>
            <th scope="col">คะแนน</th>

          </tr>
        </thead>
        <tbody>
          <?php 
            $sql ="
            SELECT
                SUM(r1) as r1,
                SUM(r2) as r2,
                SUM(r3) as r3,
                SUM(r4) as r4,
                SUM(r5) as r5,
                SUM(r6) as r6,
                SUM(r7) as r7,
                SUM(r8) as r8,
                SUM(r9) as r9,
                SUM(r10) as r10 ,
                COUNT(mem_id) as mcount,
                mem_id  
            FROM
                `tb_member`
            where
                mem_id = '$mem_id'"; 
            $qess=$db->query($sql);
      $_text= array("1.กิจกรรมนี้มีประโยชน์หรือไม่",
              "2.การประชาสัมพันธ์กิจกรรม/โครงการ",
              "3.รูปแบบการจัดกิจกรรมมีความเหมาะสม",
              "4.สิ่งอำนวยความสะดวกมีความเหมาะสม",
              "5.สถานที่ให้บริการมีความสะดวกในการเดินทาง",
              "6.เวลาที่ใช้ในการจัดกิจกรรมมีความเหมาะสม",
              "7.สถานที่จัดมีความเหมาะสม",
              "8.จิตสำนึก ทัศนคติ ความตระหนัก ความยุติธรรม",
              "9.การมีส่วนร่วมและในการทำงานเป็นทีม",
              "10.ความพึงพอใจโดยรวมในการเข้าร่วมโครงการนี้");
$fd=$qess->fetch_assoc();
            for($i=0;$i<count($_text);$i++){
                   $col = "r".($i+1);
             ?>
          <tr>
            <th align="left">
              <?php echo $_text[$i];?>
            </th>
            <td align="right">
              <?php echo number_format($fd[$col],2,".","");  ?>
            </td>
          </tr>
        <?php 
 
        } ?>
           
          <tr>
              <th align="left">
              จำนวนคนประเมิน
            </th>
        <td align="right">
              <?php echo $fd['mcount'];  ?>
            </td>
          </tr>
        
        </tbody>
      </table>
    </div>
  </div>
</div>
 <script src="../../vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    window.print();
  });

</script>
