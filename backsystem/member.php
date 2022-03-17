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
    
      <div class="col-md-9 font080 ">⠀
      <i class="fas fa-user"></i><font size="10"> จัดการสมาชิก </font></a>⠀<a href="member.php?act=add" class="btn btn-primary btn-sm">เพิ่มข้อมูลใหม่</a><br>⠀</font>
      <div align="left">   
      ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
      <p></p>
      <?php
$act = (isset($_GET['act']) ? $_GET['act'] : '');
if($act == 'add'){
include('member_form.php');
}else if ($act == 'edit') {
include('member_edit.php');
}
else {
include('member_list.php');
}
?><?php include('foot.php');?>
    </div>
  </div>
  </body>
</html>