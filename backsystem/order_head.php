<?php
      include('head.php');
       error_reporting( error_reporting() & ~E_NOTICE );
                //1. เชื่อมต่อ database:
                include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM order_head ORDER BY o_id ASC" or die("Error:" . mysqli_error());
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
    <tr class="info">    
    <th>หมายเลขออเดอร์</th>
    <th>เวลาที่สั่ง</th>
    <th>ชื่อ</th>
    <th>ที่อยู่</th>
    <th>อีเมล</th>
    <th>เบอร์โทรศัพท์</th>
  </tr>
</thead>
  <?php do { ?>
  
    <tr>
      <td><?php echo $row_am['o_id']; ?></td>
      <td><?php echo $row_am['o_dttm']; ?></td>
      <td ><?php echo $row_am['o_name']; ?></td>
      <td ><?php echo $row_am['o_addr']; ?></td>
      <td ><?php echo $row_am['o_email']; ?></td>
      <td ><?php echo $row_am['o_phone']; ?></td>
    </tr>

    <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
  
    </table> 