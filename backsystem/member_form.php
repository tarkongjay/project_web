<?php include('head.php');?>
<form  name="register" action="member_form_add_db.php" method="POST" class="form-horizontal">
       <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_user" type="text" required class="form-control" id="m_user" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น  และความยาวต้องเกิน 4 ตัว" minlength="4"  />
          </div>
      </div> 
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_pass" type="password" required class="form-control" id="m_pass" placeholder="Password" pattern="^[a-zA-Z0-9]+$"title="ภาษาอังกฤษหรือตัวเลขเท่านั้น  และความยาวต้องเกิน 6 ตัว" minlength="6" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_name" type="text" required class="form-control" id="m_name" placeholder="ชื่อ-สกุล " />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_email" type="email" class="form-control" id="m_email"   placeholder="อีเมล์@hotmail.com"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_tel" type="text" class="form-control" id="m_tel"  placeholder="เบอร์โทร ตัวเลขเท่านั้น" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <textarea name="m_address" class="form-control" id="m_address" placeholder="ที่อยู่" required></textarea> 
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10" align="left">
            <input  name="m_level" type="text" class="form-control" id="m_level" placeholder="0 หรือ 1" />
          </div>
        </div>
      <div class="form-group">
          <div class="col-sm-10" align="right">
          <button type="submit" class="btn btn-outline-success" id="btn"><span class="glyphicon glyphicon-ok"></span> สมัครสมาชิก  </button>
          </div>     
      </div>
      </form>
  