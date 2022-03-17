<link rel="stylesheet" type="text/css" href="../backsystem/as/css/reg.css">
<?php
$query_product = "SELECT * FROM tbl_product as p
INNER JOIN tbl_type as t
ON p.type_id = t.type_id
ORDER BY p.p_id ASC";
	$result_product =mysqli_query($con, $query_product) or die ("Error in query: $query_product " . mysqli_error());
		 //echo($query_product);
		 //exit()

?>
   <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="../js/plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
    <link rel="icon" href="../img/core-img/favicon.ico">

<!-- Core Style CSS -->
<link rel="stylesheet" href="../css/core-style.css">
<link rel="stylesheet" href="../style.css">

<!-- Responsive CSS -->
<link href="../css/responsive.css" rel="stylesheet">
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
