<html lang="en"><head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Project_db</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!--start data table-->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js">
</script>
<script>
$(document).ready(function() {
$('#example').DataTable( {
"aaSorting" :[[0,'desc']],
//"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
});
} );
</script>

<!-- end data table -->
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head><body class="animsition" style="animation-duration: 900ms; opacity: 1;">       
  



    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">




    <div class="page-wrapper">
    
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo1.png" alt="t">
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-users"></i><font size="5">จัดการผู้ใช้</a></font></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                <a href="admin.php"></i><font size="4">ผู้ดูแลระบบ</font></a>
                                </li>
                                <li>
                                    <a href="member.php"></i><font size="4">สมาชิก</font></a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-tags"></i><font size="5">สินค้า</a></font></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                <a href="product.php"></i><font size="4">รายการสินค้า</font></a>
                                </li>
                                <li>
                                    <a href="type.php"></i><font size="4">จัดประเภทสินค้า</font></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-shopping-cart"></i><font size="5">ออเดอร์สินค้า</font></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                    <a href="order.php"></i><font size="4">ออเดอร์</font></a>
                                </li>
                                <li>
                                    <a href="order_de.php"></i><font size="4">รายละเอียด</font></a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="images/icon/logo1.png" alt="Parcharapon Kongjay">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1 ps">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow fontnav" href="#">
                                <i class="fas fa-users"></i><font size="5">จัดการผู้ใช้</a></font></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list fontnav">
                                <li>
                                    <a href="admin.php"></i><font size="4">ผู้ดูแลระบบ</font></a>
                                </li>
                                <li>
                                    <a href="member.php"></i><font size="4">สมาชิก</font></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            
                        <li class="has-sub">
                            <a class="js-arrow fontnav" href="#">
                                <i class="fas fa-tags"></i><font size="5">สินค้า</a></font></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list fontnav">
                                <li>
                                    <a href="product.php"></i><font size="4">รายการสินค้า</font></a>
                                </li>
                                <li>
                                    <a href="type.php"></i><font size="4">จัดประเภทสินค้า</font></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow fontnav" href="#">
                                <i class="fas fa-shopping-cart"></i><font size="5">ออเดอร์สินค้า</font></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list fontnav">
                                <li>
                                    <a href="order.php"></i><font size="4">ออเดอร์</font></a>
                                </li>
                                <li>
                                    <a href="order_de.php"></i><font size="4">รายละเอียด</font></a>
                                </li>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                                
                            </form>
               
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        <img src="images/icon/profile.png" alt="Parcharapons">
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/profile.png" alt="Parcharapon">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name fontnav">
                                                        <a href="#"><font size="6"><?php echo  $a_name; ?></font></a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer fontnav">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i><font size="4"> ออกจากระบบ </font></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header></div>
                                      
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group"></div>
                                                     
     </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>




<!-- end document-->
  <div class="container">
  <p></p>
    <div class="row">
  
        
      
      </div>
      <div class="col-md-9">
      <link rel="stylesheet" type="text/css" href="../backsystem/as/css/reg.css">
<div class="d-flex flex-column h-100">
<style type="text/css">
@font-face {  
	font-family: abcd1;  
	src: url('../fonts/THSarabun Bold.ttf');
	
}
.fontnav{
	  font-family: abcd1;
	   font-size:38px;
}
@font-face {  
	font-family: abcd2;  
	src: url('../fonts/THSarabun Bold.ttf');
	
}
.fontnavv{
	  font-family: abcd2;
	   font-size:24px;
}
@font-face {  
	font-family: abcd3;  
	src: url('../fonts/THSarabun Bold.ttf');
	
}
.fontnavvv{
	  font-family: abcd3;
	   font-size:17px;
}

    </div>
  </div>
  </body>
</html>
</style></div></div></div></div></div></body></html>