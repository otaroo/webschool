<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2019-01-17 18:50:33
Download Code On : developers.khontermfan.com
*/?>
<style> .err{color:red;}</style>
<div style="display:table; margin:0 auto; padding: 20px; width:70%;">
  <h2>การประเมินกิจกรรม</h2>
  <form id="frminsert" name="frminsert" method="post" enctype="multipart/form-data">
    <div class="form-group"><label for="act_id">รหัสกิจกรรม:</label><label id="err2" class="err"></label>
      <select id="act_id" name="act_id" class="form-control">
        <option value="" disabled>เลือก</option>
        <?php
							$sql3 ="select act_id id, act_name name from tb_activity ";  
							$qess3=$db->query($sql3);	
							while($fd3=$qess3->fetch_assoc()){ ?>
        <option value="<?php echo $fd3['id'];?>">
          <?php echo $fd3['name'];?>
        </option>
        <?php
						     }
						       ?>
      </select>
    </div>
    <div class="form-group"><label for="rate_name">แบบประเมินกิจกรรม:</label><label id="err3" class="err"></label>
      <table width="499" border="1">
        <tr>
          <td>
            <div align="left">1. กิจกรรมนี้มีประโยชน์
            </div>
            <label></label><label></label>
          </td>
          <td><label>
            </label>
            <div align="center">มาก
              <label>
                <input type="radio" name="radio" id="radio" value="radio" />
              </label>
            </div>
          </td>
          <td><label>
            </label>
            <div align="center">ปานกลาง
              <label>
                <input type="radio" name="radio2" id="radio2" value="radio2" />
              </label>
            </div>
          </td>
          <td><label>
            </label>
            <div align="center">น้อย
              <label>
                <input type="radio" name="radio3" id="radio3" value="radio3" />
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <td>2.</td>
          <td><label> </label>
            <div align="center">มาก
              <label>
                <input type="radio" name="radio4" id="radio4" value="radio4" />
              </label>
            </div>
          </td>
          <td>
            <label></label>
            <label> </label>
            <div align="center">ปานกลาง
              <label>
                <input type="radio" name="radio13" id="radio13" value="radio13" />
              </label>
            </div>
          </td>
          <td> <label>
              <div align="center">น้อย
                <input type="radio" name="radio22" id="radio22" value="radio22" />
              </div>
            </label></td>
        </tr>
        <tr>
          <td>3.</td>
          <td>
            <div align="center">มาก
              <input type="radio" name="radio5" id="radio5" value="radio5" />
            </div>
            <label></label>
          </td>
          <td>
            <div align="center">ปานกลาง
              <input type="radio" name="radio14" id="radio14" value="radio14" />
            </div>
            <label></label>
          </td>
          <td>
            <div align="center">น้อย
              <input type="radio" name="radio13" id="radio23" value="radio13" />
            </div>
          </td>
        </tr>
        <tr>
          <td>4.</td>
          <td>
            <div align="center">มาก
              <input type="radio" name="radio6" id="radio6" value="radio6" />
            </div>
            <label></label>
          </td>
          <td>
            <div align="center">ปานกลาง
              <input type="radio" name="radio13" id="radio15" value="radio13" />
            </div>
          </td>
          <td>
            <div align="center">น้อย
              <input type="radio" name="radio13" id="radio24" value="radio13" />
            </div>
          </td>
        </tr>
        <tr>
          <td>5.</td>
          <td>
            <div align="center">มาก
              <input type="radio" name="radio7" id="radio7" value="radio7" />
            </div>
            <label></label>
          </td>
          <td>
            <div align="center">ปานกลาง
              <input type="radio" name="radio13" id="radio16" value="radio13" />
            </div>
          </td>
          <td>
            <div align="center">น้อย
              <input type="radio" name="radio13" id="radio25" value="radio13" />
            </div>
          </td>
        </tr>
        <tr>
          <td>6.</td>
          <td>
            <div align="center">มาก
              <input type="radio" name="radio8" id="radio8" value="radio8" />
            </div>
            <label></label>
          </td>
          <td>
            <div align="center">ปานกลาง
              <input type="radio" name="radio13" id="radio17" value="radio13" />
            </div>
          </td>
          <td>
            <div align="center">น้อย
              <input type="radio" name="radio13" id="radio26" value="radio13" />
            </div>
          </td>
        </tr>
        <tr>
          <td>7.</td>
          <td>
            <div align="center">มาก
              <input type="radio" name="radio9" id="radio9" value="radio9" />
            </div>
            <label></label>
          </td>
          <td>
            <div align="center">ปานกลาง
              <input type="radio" name="radio13" id="radio18" value="radio13" />
            </div>
          </td>
          <td>
            <div align="center">น้อย
              <input type="radio" name="radio13" id="radio27" value="radio13" />
            </div>
          </td>
        </tr>
        <tr>
          <td>8.</td>
          <td>
            <div align="center">มาก
              <input type="radio" name="radio10" id="radio10" value="radio10" />
            </div>
            <label></label>
          </td>
          <td>
            <div align="center">ปานกลาง
              <input type="radio" name="radio13" id="radio19" value="radio13" />
            </div>
          </td>
          <td>
            <div align="center">น้อย
              <input type="radio" name="radio13" id="radio28" value="radio13" />
            </div>
          </td>
        </tr>
        <tr>
          <td>9.</td>
          <td>
            <div align="center">มาก
              <input type="radio" name="radio11" id="radio11" value="radio11" />
            </div>
            <label></label>
          </td>
          <td>
            <div align="center">ปานกลาง
              <input type="radio" name="radio13" id="radio20" value="radio13" />
            </div>
          </td>
          <td>
            <div align="center">น้อย
              <input type="radio" name="radio13" id="radio29" value="radio13" />
            </div>
          </td>
        </tr>
        <tr>
          <td>10.</td>
          <td>
            <div align="center">มาก
              <input type="radio" name="radio12" id="radio12" value="radio12" />
            </div>
            <label></label>
          </td>
          <td>
            <div align="center">ปานกลาง
              <input type="radio" name="radio13" id="radio21" value="radio13" />
            </div>
          </td>
          <td>
            <div align="center">น้อย
              <input type="radio" name="radio13" id="radio30" value="radio13" />
            </div>
          </td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <div class="checkbox">
      </div>
    </div>
    <div class="form-group"><label for="mem_id">รหัสผู้สมัคร:</label><label id="err4" class="err"></label>
      <select id="mem_id" name="mem_id" class="form-control">
        <option value="" disabled>เลือก</option>
        <?php
							$sql3 ="select mem_id id,mem_name   name from tb_member ";  
							$qess3=$db->query($sql3);	
							while($fd3=$qess3->fetch_assoc()){ ?>
        <option value="<?php echo $fd3['id'];?>">
          <?php echo $fd3['name'];?>
        </option>
        <?php
						     }
						       ?>
      </select>
    </div>
    <div class="form-group"><label for="date_rate">วันที่ประเมิน:</label><label id="err5" class="err"></label>
      <input type="date" class="form-control" id="date_rate" name="date_rate">
    </div>
    <span id="status_save"></span>
    <button type="button" onclick="return checkEmpty();" id="btnAdd" name="btnAdd" class="btn btn-info">เพิ่มข้อมูล</button>
    <button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
  </form>
</div>
<script language="javascript">
  function checkEmpty() {
    $("#err2").html('');
    $("#err3").html('');
    $("#err4").html('');
    $("#err5").html('');
    var chk = true;

    if ($("#Act_id").val() == "") {
      $("#err2").html('กรุณากำหนดค่า รหัสกิจกรรม ด้วยค่ะ');
      $("#Act_id").focus();
      chk = false;
    }
    if ($("#rate_name").val() == "") {
      $("#err3").html('กรุณากำหนดค่า แบบประเมินกิจกรรม ด้วยค่ะ');
      $("#rate_name").focus();
      chk = false;
    }
    if ($("#mem_id").val() == "") {
      $("#err4").html('กรุณากำหนดค่า รหัสผู้สมัคร ด้วยค่ะ');
      $("#mem_id").focus();
      chk = false;
    }
    if ($("#date_rate").val() == "") {
      $("#err5").html('กรุณากำหนดค่า วันที่ประเมิน ด้วยค่ะ');
      $("#date_rate").focus();
      chk = false;
    }
 
    
    if (chk) {
      var url = "module/admin_files/saverate.php";
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
            $("#status_save").html('<font color=green>บันทึกข้อมูลเรียบร้อยแล้วค่ะ...</font><br>');
            setTimeout(function () {
              location = '?fd=admin&page=showrate';
            }, 3000);
          } else $("#status_save").html(
            '<font color=red>ไม่สามารถบันทึกข้อมูลได้...กรุณาตรวจสอบข้อมูลอีกครั้ง...</font><br>');

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