<?php
	session_start();
	error_reporting(E_ALL & ~E_WARNING);
$p_id = (isset($_GET['p_id']) ? $_GET['p_id'] : '');
$act = (isset($_GET['act']) ? $_GET['act'] : '');
	if($act=='add' && !empty($p_id))
	{
		if(isset($_SESSION['cart'][$p_id]))
		{
			$_SESSION['cart'][$p_id]++;
		}
		else
		{
			$_SESSION['cart'][$p_id]=1;
		}
		
	}

	if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['cart'][$p_id]);
	}

	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $p_id=>$amount)
		{
			$_SESSION['cart'][$p_id]=$amount;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php include('head.php');?>
<?php include('navbar.php');?>
<body>
<form id="frmcart" name="frmcart" method="post" action="?act=update">
	<div align="center"> 
  <table width="600" border="0" align="center" class="square font080">
  
    <tr>
	<br />
	<br />
      <td colspan="5">
      <b>ตะกร้าสินค้า</span></td>
    </tr>
    <tr>
      <td >สินค้า</td>
      <td align="center" >ราคา</td>
      <td align="center" >จำนวน</td>
      <td align="center">รวม(บาท)</td>
      <td align="center" >ลบ</td>
    </tr>
<?php
$total=0;
if(!empty($_SESSION['cart']))
{
	include("connect.php");
	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql = "select * from tbl_product where p_id=$p_id";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		$sum = $row['p_price'] * $qty;
		$total += $sum;
		echo "<tr>";
		echo "<td width='334'>" . $row["p_name"] . "</td>";
		echo "<td width='46' align='right'>" .number_format($row["p_price"],2) . "</td>";
		echo "<td width='57' align='right'>";  
		echo "<input type='text' name='amount[$p_id]' value='$qty' size='2'/></td>";
		echo "<td width='93' align='right'>".number_format($sum,2)."</td>";
		//remove product
		echo "<td width='46' align='center'><a href='cart.php?p_id=$p_id&act=remove'>ลบ</a></td>";
		echo "</tr>";
	}
	echo "<tr>";
  	echo "<td colspan='3'  align='center'><b>ราคารวม</b></td>";
  	echo "<td align='right' >"."<b>".number_format($total,2)."</b>"."</td>";
  	echo "<td align='left' ></td>";
	echo "</tr>";
}
?>
<tr>
<td><a href="index.php">กลับหน้ารายการสินค้า</a></td>
<td colspan="4" align="right">
    <input type="submit" name="button" id="button" value="ปรับปรุง" class="btn btn-reg btn-dark" />
    <input type="button" name="Submit2" value="สั่งซื้อ" class="btn btn-reg btn-dark" onclick="window.location='confirm.php';" />
</td>
</tr>
</table>
</form>
<?php include('foot_profile.php');?>
</body>
</html>