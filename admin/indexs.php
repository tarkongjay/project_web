<!DOCTYPE html>
<html lang="en">

<?php include('head.php');?>
<?php require_once('../backsystem/connections.php');

	$query_type = "SELECT * FROM tbl_type ORDER BY type_id ASC";
	$result_type =mysqli_query($con, $query_type) or die ("Error in query: $query_type " . mysqli_error());
		// echo($query_type);
		// exit()

?>
<?php
$query_product = "SELECT * FROM tbl_product as p
INNER JOIN tbl_type as t
ON p.type_id = t.type_id
ORDER BY p.p_id ASC";
	$result_product =mysqli_query($con, $query_product) or die ("Error in query: $query_product " . mysqli_error());
		 //echo($query_product);
		 //exit()

?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Raochana - ร้านขายหนังสือ ครบถูก ดี</title>

    <!-- Favicon  -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="../css/core-style.css">
    <link rel="stylesheet" href="../style.css">

    <!-- Responsive CSS -->
    <link href="../css/responsive.css" rel="stylesheet">

</head>

<body>
    <div class="catagories-side-menu">
        <!-- Close Icon -->
        <div id="sideMenuClose">
            <i class="ti-close"></i>
        </div>
        <!--  Side Nav  -->
        <div class="nav-side-menu">
            <div class="menu-list">
                <h6>เข้าสู่ระบบ</h6>
                <ul id="menu-content" class="menu-content collapse out">
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#women" class="collapsed active">
                        <a href="#">Account<span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="women">
                            <li><a href="login.php">เข้าสู่ระบบ</a></li>
                            <li><a href="register.php">สมัครสมาชิก</a></li>
                        </ul>
                    </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <header class="header_area">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="index.php"><img src="../img/core-img/logo1.png" alt=""></a>
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    <div class="cart">
                                        <a href="cart.php" id="header-cart-btn"><span class=""></span> <i class="ti-bag"></i>กระเป๋า</a>
                                        <a href="profile.php" id="header-cart-btn"><span class=""></span> <i class=""></i>โปรไฟล์</a>
                                        <!-- Cart List Area Start -->
                                           
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">
                            <!-- Header Social Area -->
                            <div class="header-social-area">
                             &nbsp; &nbsp;
                            </div>
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                         
                                            
                                            <li class="nav-item dropdown">
      
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">

                                                    <?php
		foreach ($result_type as $row )  { ?>

		 <a href="index.php"class="dropdown-item"> 
		 	<?php echo $row["type_name"]; ?></a>

	<?php } ?>
                                                </div>
                                            </li>
                                        </ul>
    
                                </form>
                            <!-- Help Line -->
                                    
                                </form>   
                        
                                      </div>
                    </div>
                    <div class="col-10 col-lg-4 ">
                                <div class="subscribtion_form">
                                <form class="d-flex" action="index.php"method="GET">
                                <input type="text" type="search" class="mail" placeholder="ค้นหาหนังสือที่สนใจ" aria-label="Search" name="q">
                                <button type="submit" class="submit"></i><font size="4"> ค้นหา </font></a></button> 
                                     </div>
            </div>
        </header>
        <!-- ****** Header Area End ****** -->

        <!-- ****** Top Discount Area Start ****** -->
        <!-- ****** Top Discount Area End ****** -->

        <!-- ****** Welcome Slides Area Start ****** -->


                <!-- Single Slide Start -->
                
        </section>
        <!-- ****** Welcome Slides Area End ****** -->

        <!-- ****** Top Catagory Area Start ****** -->
        <section class="top_catagory_area d-md-flex clearfix">
        </section>
        <!-- ****** Top Catagory Area End ****** -->

        <!-- ****** Quick View Modal Area Start ****** -->
        <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
<?php foreach ($result_product as $row_product)?>
                    <div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">    
                                    <div class="col-12 col-lg-5">
                                    
                                        <div class="quickview_pro_img">
            
                                     
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="quickview_pro_des">
                                            <h4 class="title">Boutique Silk Dress</h4>
                                            <div class="top_seller_product_rating mb-15">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="price">$120.99 <span>$130</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                            <a href="#">View Full Product Details</a>
                                        </div>
                                        <!-- Add to Cart Form -->
                                        <form class="cart" method="post">
                                            <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">

                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                            <button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button>
                                            <!-- Wishlist -->
                                            <div class="modal_pro_wishlist">
                                                <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                            </div>
                                            <!-- Compare -->
                                            <div class="modal_pro_compare">
                                                <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                            </div>
                                        </form>

                                        <div class="share_wf mt-30">
                                            <p>Share With Friend</p>
                                            <div class="_icon">
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            
                                            </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div><?php  ?>
                </div>
            </div>
        </div>
        
        <!-- ****** Quick View Modal Area End ****** -->

        <!-- ****** New Arrivals Area Start ****** -->
        
       
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="karl-projects-menu mb-100">
                <div class="text-center portfolio-menu">
               <a href="index.php" class="btn active"></i>ทั้งหมด</a>     
    <?php
		    
		foreach ($result_type as $row )  { ?>

		 <a href="index.php?act=showbytype&type_id=<?php echo $row['type_id'];?>" class="btn active"> 
		 	<?php echo $row["type_name"]; ?></a>

	<?php } ?>   
	             
                </div>
            </div>
 
            
            <div class="container">
                
                <div class="row karl-new-arrivals">
   
    </dvi>
    </div>
                </div>
            
        </section>
        <!-- ****** Popular Brands Area End ****** -->

        <!-- ****** Footer Area Start ****** -->
        <footer class="footer_area ">
            <div class="container ">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <img src="img/core-img/logo2.png" alt="">
                            </div>
                            <div class="copywrite_text d-flex align-items-center">
                        
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu font1">
                       
                              
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                           
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-lg-5 ">
                        <div class="single_footer_area">
                            <div class="footer_heading mb-30">
                    
                            </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Bottom Area Start -->
        <!-- ****** Footer Area End ****** -->
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script> 
</body>
</html>