<?php
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$member_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_member WHERE member_id='$member_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<?php include('head.php');?>
<form  name="register" action="member_edit_db.php" method="POST" class="form-horizontal">
<input type="hidden" name="member_id" value="<?php echo $member_id; ?>">
       <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_user" type="text" required class="form-control" id="m_user" value="<?=$m_user;?>" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น  และความยาวต้องเกิน 4 ตัว" minlength="4"  />
          </div>
      </div> 
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_pass" type="password" required class="form-control" id="m_pass" value="<?=$m_pass;?>" placeholder="Password" pattern="^[a-zA-Z0-9]+$"title="ภาษาอังกฤษหรือตัวเลขเท่านั้น  และความยาวต้องเกิน 6 ตัว" minlength="6" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_name" type="text" required class="form-control" id="m_name"  value="<?=$m_name;?>" placeholder="ชื่อ-สกุล " />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_email" type="email" class="form-control" id="m_email"  value="<?=$m_email;?>" placeholder="อีเมล์@hotmail.com"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_tel" type="text" class="form-control" id="m_tel"  value="<?=$m_tel;?>" placeholder="เบอร์โทร ตัวเลขเท่านั้น" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <textarea name="m_address" class="form-control" id="m_address" placeholder="ที่อยู่" required><?php echo $m_address;?></textarea> 
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_level" type="text" class="form-control" id="m_level"  value="<?=$m_level;?>" placeholder="0 หรือ 1" />
          </div>
        </div>
      <div class="form-group">
          <div class="col-sm-10" align="right">
          <button type="submit" class="btn btn-outline-success" id="btn"><span class="glyphicon glyphicon-ok"></span> แก้ไข  </button>
          </div>     
      </div>
      </form>