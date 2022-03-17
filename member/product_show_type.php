<link rel="stylesheet" type="text/css" href="../backsystem/as/css/reg.css">
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
<div class="container">
</div>
            </div>
 
            
            <div class="container">
                
                <div class="row karl-new-arrivals">
                <?php foreach ($result_product as $row_product) { ?>

                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s"> 
                    <!-- Product Image -->
                        <div class="product-img">
                            <img src="../backsystem/p_img/<?php echo $row_product['p_img']; ?>" alt="">
                            <div class="product-quicview">
                                <a href="product_detaill.php?p_id=<?php echo $row_product['p_id']  ?>"" data-target="#quickview"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h4 class="text-dark font080"></i><font size="6"><?php echo $row_product['p_name']; ?></h4></font></a></h6>
                            <p class="text-secondary font080"></i><font size="3"><?php echo $row_product['p_detail'];?></h4></font></a></h6>
                            <br />
                            <p class="text-dark  font080"></i><font size="4">ประเภท : <?php echo $row_product['type_name'];?></h4></font></a></h6>
                            <br />
                            <p class="text-warning  font080"></i><font size="4">ราคา : <?php echo $row_product['p_price'];?> บาท</h4></font></a></h6>
                        </div>
                   
                    </div>
<?php } ?>
    </dvi>
    </div>
                </div>
                
                <?php include('foot_profile.php');?>
        </section>
        <br/>
