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
      <i class="fas  fa-info-circle"></i><font size="10"> รายละเอียดออเดอร์สินค้า</font></a>
      <div align="right">   ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
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
include('order_detail.php');
}
?>
    </div>
  </div>
  <?php include('foot.php');?>
  </body>
</html>