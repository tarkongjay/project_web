
<link rel="stylesheet" type="text/css" href="backsystem/as/css/reg.css">
<?php

$type_id = $_GET['type_id'];
//echo $type_id;
//exit();

$query_product_type = "SELECT * FROM tbl_product as p
INNER JOIN tbl_type as t
ON p.type_id = t.type_id
WHERE p.type_id = $type_id
ORDER BY p.p_id ASC";
	$result_product =mysqli_query($con, $query_product_type) or die ("Error in query: $query_product_type " . mysqli_error());
?>
<dvi class="row">

<?php foreach ($result_product as $row_product) { ?>
    <div class="card" style="width: 18rem; margin-top: 10px;">
    <img class="card-img-top" src="backsystem/p_img/<?php echo $row_product['p_img']; ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title font45"><?php echo $row_product['p_name']; ?></h5>
      <p class="card-text font44">ประเภท : <?php echo $row_product['type_name']; ?></p>
      <p class="card-text font45">ราคา : <?php echo $row_product['p_price']; ?></p>
      <a href="product_detail.php?id=<?php echo $row_product['p_id']  ?>" class="btn btn-primary btn-reg font44">รายละเอียด</a>
      <a href="login.php" class="btn btn-primary btn-reg font44">ซื้อ</a>
      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
<?php } ?>
    </dvi>
    </div>