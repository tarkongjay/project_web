<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>สินค้า</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<?php include('head.php');?>
<?php include('navbar.php');?>
<body>
<br />
	<br /><div align="center"> 
<table width="600" border="0" align="center" class="square font080">
  <tr><td colspan="3"><b>สินค้า</b></td></tr>
  
<?php
//connect db
    include("connect.php");
	$p_id = $_GET['p_id']; //สร้างตัวแปร p_id เพื่อรับค่า
	
	$sql = "select * from tbl_product where p_id=$p_id";  //รับค่าตัวแปร p_id ที่ส่งมา
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	//แสดงรายละเอียด
	echo "<tr>";
  	echo "<td width='85' valign='top'><b>หัวข้อ</b></td>";
    echo "<td width='279'>" . $row["p_name"] . "</td>";
    echo "<td width='70' rowspan='4'><img src='../backsystem/p_img/" . $row["p_img"] . " ' width='100'></td>";
  	echo "</tr>";
  	echo "<tr>";
    echo "<td valign='top'><b>รายละเอียด</b></td>";
    echo "<td>" . $row["p_detail"] . "</td>";
  	echo "</tr>";
  	echo "<tr>";
    echo "<td valign='top'><b>ราคา</b></td>";
    echo "<td>" .number_format($row["p_price"],2) . "</td>";
  	echo "</tr>"; 
  	echo "<tr>";
    echo "<td colspan='2' align='center'>";
    echo "<a href='cart.php?p_id=$row[p_id]&act=add'> เพิ่มลงตะกร้าสินค้า </a></td>";
    echo "</tr>";
?>
</table><p>
<?php include('foot_profile.php');?>
</body>
</html>