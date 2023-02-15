<?php 
  //load file Layout.php
  $this->layoutPath = "LayoutTrangTrong.php";
  $category_id = isset($_GET["category_id"])?$_GET["category_id"]:0;
 ?>

<div class="home">
      <i class="fas fa-home"></i>
      <i class="fas fa-angle-right"></i>
      <span><a href="#">Sản Phẩm</a></span>
      <i class="fas fa-angle-right"></i>
    </div><!-- End .home  -->

    <div class="main-product">
      <div class="main-left">
        <div class="widget">
          <a href="#">PMH Store</a>
          <ul class="fas">
            <li><a href="#">Mọi thắc mắc của quý khách xin gửi về email: pmhstore@gmail.com</a></li>
            <li><a href="#">Hoặc số tổng đài: 0999 899 339</a></li>
          </ul>
        </div> 
    <style type="text/css">
    .main-product .main-left{
        margin: 0px auto;
        padding: 0px;
        width: 1168px;
    }
      .main-product .main-left .widget{
        margin: 0px auto;
        padding: 0px;
        width: 1168px;
        height: 140px;
        margin-bottom: 10px;
      }
      .main-product .main-left .widget a{
        display: block;
        margin: 5px 30px;
      }
      .main-product .main-left .widget ul li{
        width: 1168px;
      }
      .main-product .main-left .widget ul li a{
        display: block;
        margin: 0px 30px;
      }
    </style>

<!-- ---------------------------------------------------------------------- -->
<div class="main-product">
    <div class="main-left" style="height: auto;">
        <div class="main-top">
            <div class="main-top-left">
                <div class="main-image">
                    <img src="assets/upload/products/<?php echo $record->photo; ?>" style=" margin-left:30px" class="img-responsive"/>
                </div>
                <!-- End .main-image  -->
                 <!-- <div class="main-little">
                    <img src="assets/upload/products/<?php echo $record->photo; ?>" style=" margin-left:30px" class="img-responsive"/>                
                </div> -->
            </div><!-- End .main-top-left -->
            <div class="main-main">
                <div class="product-detail">
                    <h1><?php echo $record->name; ?></h1>
                    <div class="price-box">
                        <span class="old-price"><del><?php echo number_format($record->price); ?>đ </del></span>
                        <span class="product-price"><?php echo number_format($record->price - $record->price * $record->discount/100); ?> đ </span>
                    </div><!-- End .price-box -->
                    <div class="product-desc" style="height: auto; width: 680px;">
                        <p><?php echo $record->description; ?>
                        </p>
                        <p><?php echo $record->content; ?>
                        </p>
                    </div><!-- End .product-desc -->
                    <div class="product-action">
                        <span><i class="fas fa-shopping-cart"></i><a href="index.php?controller=cart&action=add&id=<?php echo $record->id; ?>">Thêm vào giỏ hàng</a></span>
                    </div><!-- End .product-action  -->                
                </div><!-- End .product-detail -->
            </div><!-- End .main-main  -->
        </div>
    </div><!-- End .main-left  -->
</div>
<!-- ---------------------------------------------------------------------- -->

</div><!-- End .main-product  -->
