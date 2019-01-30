<div class="container">
  <?php  
    include("../../config.php");
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
      <table class="table" border="1" cellpadding="0" cellspacing="0">
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
                COUNT(mem_id_card) as mcount,
                act_id  
            FROM
                `tb_rate`
            where
                act_id = '$act_id'"; 
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