<meta charset="utf-8">
<?php
include('../backsystem/connections.php');
include('head.php');
	$m_pass  = $_POST["m_pass"];

	$sql = "UPDATE tbl_member SET 
	m_pass ='$m_pass'
	WHERE m_name='$m_name'
	 ";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไข password สำเร็จ');";
	echo "window.location = 'profile.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'profile.php'; ";
	echo "</script>";
}
?>