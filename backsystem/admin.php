<!DOCTYPE html>
<html>
<head>
<?php include('head.php');
error_reporting(E_ALL & ~E_WARNING);
?>
<head>
  <body>
        
  <?php include('navbar.php');?>
  <div class="container">
  <p></p>
    <div class="row">
      <div class="col-md-3">

        
      </div>
      <div class="col-md-9 font080">
      <i class="fas fa-suitcase"></i><font size="10"> จัดการผู้ดูแลระบบ </font></a>⠀<a href="admin.php?act=add" class="btn btn-primary btn-sm">เพิ่มข้อมูลใหม่</a><br>⠀</font>
      ⠀<div align="left">  ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
      <p></p>
      <?php
$act = (isset($_GET['act']) ? $_GET['act'] : '');
if($act == 'add'){
include('admin_form.php');

}else if ($act == 'edit') {
include('admin_edit.php');

}else if ($act == 'rwd') {
  include('admin_form_rwd.php');
  }
else {
include('admin_list.php');
}
?><?php include('foot.php');?>
    </div>
  </div>
  </body>
</html>