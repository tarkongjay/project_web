<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$a_id = $_REQUEST["ID"];
 
//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา
 
$sql = "DELETE FROM tbl_admin WHERE a_id='$a_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "window.location = 'delsuss.php'; ";
  echo "</script>";
  }
  else{
    echo "<script type='text/javascript'>";
    echo "window.location = 'delerror.php'; ";
    echo "</script>";
}
?>