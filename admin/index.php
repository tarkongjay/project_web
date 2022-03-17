
<?php session_start();?>
<?php include('head.php');?>

<body>  
<?php include('indexs.php');?>
    <div class="row">
    <div class="col-md-2 body">
    </div>
    <div class="col-md-9">
    <?php
$act = (isset($_GET['act']) ? $_GET['act'] : '');
$q = (isset($_GET['q']) ? $_GET['q'] : '');
if($act == 'showbytype'){
    include('product_show_type.php');
}else if($q!=''){
    include('product_show_search.php');

}else{

    include('product_show.php');
}
    ?> 
    </div>
    </div>    
  </div>
</body>
</html>