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
            <tr align="center">
              <th scope="col">รายการ</th>
              <th scope="col">มาก</th>
              <th scope="col">ปานกลาง</th>
              <th scope="col">น้อย</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1.กิจกรรมนี้มีประโยชน์หรือไม่</th>
              <td align="center"><input type="radio" name="r1" id="r1" value="3"> </td>
              <td align="center"><input type="radio" name="r1" id="r1" value="2"> </td>
              <td align="center"><input type="radio" name="r1" id="r1" value="1"> </td>
            </tr>
            <tr>
              <th scope="row">2.การประชาสัมพันธ์กิจกรรม/โครงการ</th>
              <td align="center"><input type="radio" name="r2" id="r2" value="3"> </td>
              <td align="center"><input type="radio" name="r2" id="r2" value="2"> </td>
              <td align="center"><input type="radio" name="r2" id="r2" value="1"> </td>
            </tr>
            <tr>
              <th scope="row">3.รูปแบบการจัดกิจกรรมมีความเหมาะสม</th>
              <td align="center"><input type="radio" name="r3" id="r3" value="3"> </td>
              <td align="center"><input type="radio" name="r3" id="r3" value="2"> </td>
              <td align="center"><input type="radio" name="r3" id="r3" value="1"> </td>
            </tr>
            <tr>
              <th scope="row">4.สิ่งอำนวยความสะดวกมีความเหมาะสม</th>
              <td align="center"><input type="radio" name="r4" id="r4" value="3"> </td>
              <td align="center"><input type="radio" name="r4" id="r4" value="2"> </td>
              <td align="center"><input type="radio" name="r4" id="r4" value="1"> </td>
            </tr>
            <tr>
              <th scope="row">5.สถานที่ให้บริการมีความสะดวกในการเดินทาง</th>
              <td align="center"><input type="radio" name="r5" id="r5" value="3"> </td>
              <td align="center"><input type="radio" name="r5" id="r5" value="2"> </td>
              <td align="center"><input type="radio" name="r5" id="r5" value="1"> </td>
            </tr>
            <tr>
              <th scope="row">6.เวลาที่ใช้ในการจัดกิจกรรมมีความเหมาะสม</th>
              <td align="center"><input type="radio" name="r6" id="r6" value="3"> </td>
              <td align="center"><input type="radio" name="r6" id="r6" value="2"> </td>
              <td align="center"><input type="radio" name="r6" id="r6" value="1"> </td>
            </tr>
            <tr>
              <th scope="row">7.สถานที่จัดมีความเหมาะสม</th>
              <td align="center"><input type="radio" name="r7" id="r7" value="3"> </td>
              <td align="center"><input type="radio" name="r7" id="r7" value="2"> </td>
              <td align="center"><input type="radio" name="r7" id="r7" value="1"> </td>
            </tr>
            <tr>
              <th scope="row">8.จิตสำนึก ทัศนคติ ความตระหนัก ความยุติธรรม</th>
              <td align="center"><input type="radio" name="r8" id="r8" value="3"> </td>
              <td align="center"><input type="radio" name="r8" id="r8" value="2"> </td>
              <td align="center"><input type="radio" name="r8" id="r8" value="1"> </td>
            </tr>
            <tr>
              <th scope="row">9.การมีส่วนร่วมและในการทำงานเป็นทีม</th>
              <td align="center"><input type="radio" name="r9" id="r9" value="3"> </td>
              <td align="center"><input type="radio" name="r9" id="r9" value="2"> </td>
              <td align="center"><input type="radio" name="r9" id="r9" value="1"> </td>
            </tr>
            <tr>
              <th scope="row">10.ความพึงพอใจโดยรวมในการเข้าร่วมโครงการนี้</th>
              <td align="center"><input type="radio" name="r10" id="r10" value="3"> </td>
              <td align="center"><input type="radio" name="r10" id="r10" value="2"> </td>
              <td align="center"><input type="radio" name="r10" id="r10" value="1"> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row justify-content-end">
      <div class="col-3 text-right">
        <div class="form-group">
          <input type="text" name="mem_id" id="mem_id" min="13" class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp" placeholder="รหัสบัตรประชาชน">
        </div>
      </div>
      <div class="col-2 text-right">
        <button type="button" onclick="return checkEmpty();" class="btn btn-primary btn-block">ส่งคำตอบ</button>
      </div>
    </div>

  </form>
</div>
<script language="javascript">
  function checkEmpty() {
    var chk = true;
    if ($("#mem_id").val() == "") {
      alert('กรุณาใส่รหัสบัตรประชาชน');
      chk = false;
      return;
    }
    console.log(chk);
    if (chk) {
      var url = "module/admin_files/savetb_rate.php";
      var form = $('#frminsert')[0];
      var data = new FormData(form);
      $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: url,
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function (data) {
          //alert(data);
          if (data.trim() == '1') { 
            alert('บันทึกสำเร็จ');
            setTimeout(function () {
              location = '?';
            }, 3000);
          } else {
            alert('บันทึกไม่สำเร็จ');
          }
        },
        error: function (e) {
          $("#status_save").html(e.responseText);
        }
      });

    } else {
      return false;
    }
  }
</script>