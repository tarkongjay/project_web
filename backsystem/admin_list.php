<?php
      include('head.php');
       error_reporting( error_reporting() & ~E_NOTICE );
                //1. เชื่อมต่อ database:
                include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM tbl_admin ORDER BY a_id ASC" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                $row_am = mysqli_fetch_assoc($result);
                ?>

<script>    
$(document).ready(function() {
    $('#example1').DataTable( {
      "aaSorting" :[[0,'ASC']],
    //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
  });
} );
 
  </script>

  <table border="2" class="display table table-bordered" id="example1" align="center"  >
  <thead>
    <tr class="info font080">    
    <th>ไอดี</th>
    <th>ยูสเซอร์</th>
    <th>ชื่อ</th>
    <th width="5%">รหัสผ่าน</th>
    <th width="5%"></th>
    <th width="5%"></th>
  </tr>
</thead>
  <?php do { ?>
  
    <tr>
      <td><?php echo $row_am['a_id']; ?></td>
      <td><?php echo $row_am['a_user']; ?></td>
      <td ><?php echo $row_am['a_name']; ?></td>
      <td><a href="admin.php?act=rwd&ID=<?php echo $row_am['a_id']; ?>" class="btn btn-dark btn-sm"> เปลี่ยนรหัส </a> </td>
      <td><a href="admin.php?act=edit&ID=<?php echo $row_am['a_id']; ?>" class="btn btn-warning btn-sm"> แก้ไข </a> </td>
       <td><a href="admin_del_db.php?ID=<?php echo $row_am['a_id']; ?>" class='btn btn-danger btn-sm'  onclick="return confirm('ยันยันการลบ')">ลบ</a> </td>
    </tr>

    <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
  
    </table> 