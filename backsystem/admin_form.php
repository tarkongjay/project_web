<?php include('head.php');?>
<form  name="admin" action="admin_form_add_db.php" method="POST" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-10" align="left">
              <input  name="a_user" type="text" required class="form-control" id="a_user" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น  และความยาวต้องเกิน 4 ตัว" minlength="4"  />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-10" align="left">
              <input  name="a_pass" type="password" required class="form-control" id="a_pass" placeholder="Password" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น และความยาวต้องเกิน 6 ตัว" minlength="6" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10" align="left">
              <input  name="a_name" type="text" required class="form-control" id="a_name" placeholder="ชื่อ-นามสกุล" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-3"> </div>
            <div class="col-sm-10" align="right">
              <button type="submit" class="btn-info btn btn-outline-success" id="btn"> <span class="glyphicon glyphicon-saved"></span>  บันทึก  </button>      
            </div> 
          </div>
        </form>