</html><!DOCTYPE html>
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
      <font size="10"> :: การจัดการประเภทสินค้า :: </font>
  <div align="right">
      <a href="type.php?act=add" class="btn btn-outline-primary">เพิ่มข้อมูลใหม่</a>    
      <p></p>
      <div align="left">
      <?php
$act = (isset($_GET['act']) ? $_GET['act'] : '');
if($act == 'add'){
include('type_form.php');
}else if ($act == 'edit') {
include('type_edit.php');
}
else {
include('type_list.php');
}
?><?php include('foot.php');?>
    </div>
  </div>
  </body>
</html>