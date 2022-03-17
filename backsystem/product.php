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
      <font size="10"> :: การจัดการสินค้า ::       <a href="product.php?act=add" class="btn btn-primary btn-sm">เพิ่มข้อมูลใหม่</a></font>
     <div align="left">  
     <p></p>
      
      <?php
$act = (isset($_GET['act']) ? $_GET['act'] : '');
if($act == 'add'){
include('product_form.php');
}else if ($act == 'edit') {
include('product_edit.php');
}
else {
include('product_list.php');
}
?><?php include('foot.php');?>
    </div>
  </div>
  </body>
</html>