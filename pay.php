<?php include('head.php');?>
<link rel="stylesheet" type="text/css" href="backsystem/as/css/pay.css">
<link rel="stylesheet" type="text/css" href="backsystem/as/js/pay.js">
<link rel="stylesheet" type="text/css" href="backsystem/as/css/reg.css">
<div class="container py-5">

  <!-- For demo purpose -->
  <div class="row mb-4">
    <div class="col-lg-8 mx-auto text-center">
      <h1 class="display-4 font1">ชำระสินค้า</h1>
      <p class="lead mb-0 font2">โปรดชำระค่าหนังสือ ถ้าไม่ชำระเราจะไม่ทำการส่งหนังสือให้คุณ</p>
      <p class="lead mb-0 font2-1">ชำระแบบ TrueMoney Wallet</p>
    </div>
  </div>
  <!-- End -->


  <div class="row font2-1">
    <div class="col-lg-7 mx-auto">
      <div class="bg-white rounded-lg shadow-sm p-5">
        <!-- Credit card form tabs -->
        <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
          <li class="nav-item">
            <a data-toggle="pill" href="#truewallet" class="nav-link rounded-pill ">
                                <i class="fa fa-credit-card"></i>
                                ทรูมันนี่วอเลท
                            </a>
          </li>
          <li class="nav-item">
            <a data-toggle="pill" href="#bank" class="nav-link rounded-pill">
                                <i class="fa fa-paypal"></i>
                                ธนาคาร(ยังไม่เปิดใช้บริการในตอนนี้)
                            </a>
          </li>
          <li class="nav-item">
            <a data-toggle="pill" href="nav-tab-bank" class="nav-link active rounded-pill">
                                <i class="fa fa-university"></i>
                                 ชำระสินค้าในภายหลัง
                             </a>
          </li>
        </ul>
        <!-- End -->


        <!-- Credit card form content -->
        <div class="tab-content">

          <!-- credit card info-->
          <div id="nav-tab-card" class="tab-pane fade show active">
        
            <form role="form">
              <div class="form-group">
                <label for="username">ชื่อ - นามสกุล (บนบัตร)</label>
                <input type="text" name="username" placeholder="พชรพล กองจาย" required class="form-control">
              </div>
              <div class="form-group">
                <label for="cardNumber">หมายเลขบัตร</label>
                <div class="input-group">
                  <input type="text" name="cardNumber" placeholder="ใส่หมายเลขบัตร" class="form-control" required>
                  <div class="input-group-append">
                    <span class="input-group-text text-muted">
                                                <i class="fa fa-cc-visa mx-1"></i>
                                                <i class="fa fa-cc-amex mx-1"></i>
                                                <i class="fa fa-cc-mastercard mx-1"></i>
                                            </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="form-group">
                    <label><span class="hidden-xs">วันหมดอายุของบัตร</span></label>
                    <div class="input-group">
                      <input type="number" placeholder="MM" name="" class="form-control" required>
                      <input type="number" placeholder="YY" name="" class="form-control" required>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group mb-4">
                    <label data-toggle="tooltip" title="Three-digits code on the back of your card">CVV
                                                <i class="fa fa-question-circle"></i>
                                            </label>
                    <input type="text" required class="form-control">
                  </div>
                </div>



              </div>
              <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm btn-reg font2"> ยืนยัน  </button>
            </form>
          </div>
        </div>
        <!-- End -->

      </div>
    </div>
  </div>
</div>
<style type="text/css">

@font-face {  
	font-family: fonthead;  
	src: url('fonts/THSarabun Bold.ttf');
	
}
.font1{
	  font-family: fonthead;
	   font-size:80px;
}
@font-face {  
	font-family: fonti;  
	src: url('fonts/THSarabun.ttf');
	
}
.font2{
	  font-family: fonti;
	   font-size:24px;
}
@font-face {  
	font-family: fonti2;  
	src: url('fonts/THSarabun.ttf');
	
}
.font2-1{
	  font-family: fonti2;
	   font-size:28px;
}