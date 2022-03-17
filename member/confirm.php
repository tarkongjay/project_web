<?php
	session_start();
    include("connect.php");  
    error_reporting(E_ALL & ~E_WARNING);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php include('head.php');?>
<?php include('navbar.php');?>
<body>
<form id="frmcart" name="frmcart" method="post" action="saveorder.php">
<div align="center"> 
  <table width="600" border="0" align="center" class="square font080">
    <tr>
    <br />
	<br />
      <td width="1558" colspan="4">
      <strong>สั่งซื้อสินค้า</strong></td>
    </tr>
    <tr>
      <td >สินค้า</td>
      <td align="center">ราคา</td>
      <td align="center">จำนวน</td>
      <td align="center">รวม/รายการ</td>
    </tr>
<?php
	$total=0;
	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql	= "select * from tbl_product where p_id=$p_id";
		$query	= mysqli_query($conn, $sql);
		$row	= mysqli_fetch_array($query);
		$sum	= $row['p_price']*$qty;
		$total	+= $sum;
    echo "<tr>";
    echo "<td>" . $row["p_name"] . "</td>";
    echo "<td align='right'>" .number_format($row['p_price'],2) ."</td>";
    echo "<td align='right'>$qty</td>";
    echo "<td align='right'>".number_format($sum,2)."</td>";
    echo "</tr>";
	}
	echo "<tr>";
    echo "<td  align='right' colspan='3' ><b>รวม</b></td>";
    echo "<td align='right'>"."<b>".number_format($total,2)."</b>"."</td>";
    echo "</tr>";
?>
</table>
<p>    
<br />
	<br />
  <br />

<table border="0" cellspacing="0" align="center" class="font080">
<tr>
	<td colspan="2" >รายละเอียดในการติดต่อ</td>
</tr>
<tr>
    <td >ชื่อ</td>
    <td><input name="name" type="text" id="name" required/></td>
</tr>
<tr>
    <td width="22%" >ที่อยู่</td>
    <td width="78%">
    <textarea name="address" cols="35" rows="5" id="address" required></textarea>
    </td>
</tr>
<tr>
  	<td >อีเมล</td>
  	<td><input name="email" type="email" id="email"  required/></td>
</tr>
<tr>
  	<td >เบอร์ติดต่อ</td>
  	<td><input name="phone" type="text" id="phone" required /></td>
</tr>
<tr>
	<td colspan="2" align="Right" >
	<input type="submit" name="Submit2" class="btn btn-reg btn-dark" value="สั่งซื้อ" />
</td>
</tr>
</table>
</form>
<?php include('foot_profile.php');?>
</body>
</html>