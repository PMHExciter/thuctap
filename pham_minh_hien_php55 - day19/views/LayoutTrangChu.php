<!DOCTYPE html>
<html>
<head>
  <title>Trang chu</title>
  <link rel="canonical" href="index.html">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/frontend/css/trangchu1.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel = "preconnect" href = "https://fonts.gstatic.com">
  <link href = "https://fonts.googleapis.com/css2? family = Noto + Sans + KR: wght @ 500 & display = swap "rel =" stylesheet ">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <!-- load thu vien -->
  <script type="text/javascript" src="assets/frontend/js/jquery-3.6.0.js"></script>
  <link rel="stylesheet" href="assets/frontend/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/frontend/owlcarousel/assets/owl.theme.default.min.css">
  <script src="assets/frontend/owlcarousel/owl.carousel.min.js"></script>
</head>
<body>
  <!--Start of Tawk.to Script-->
      <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/60ca02dd65b7290ac6364804/1f8ahmco9';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
      </script>
<!--End of Tawk.to Script-->
  <!-- ---------------- -->
  <div class="wrapper">
    <!-- -------------- header-------------- -->
    <?php include "views/HeaderView.php"; ?>
    <!-- --------------end header-------------- -->
    <div class="slide">
      <div class="container">
        <div class="prev"><img src="assets/frontend/images/left.png"></div>

        <img src="assets/frontend/images/slide-1.jpg" class="slide-show">
  
        <div class="next"><img src="assets/frontend/images/right.png"></div>
      <script type="text/javascript">
        $(document).ready(function(){
          // khai bao aray chua link anh
          var slide = new Array();
          slide[0] = "assets/frontend/images/slide-2.jpg"
          slide[1] = "assets/frontend/images/slide-1.jpg"
          var n=0;
          setInterval(function(){
            $(".slide-show").fadeOut(function(){
              $(".slide-show").attr("src",slide[n]);
              $(".slide-show").fadeIn();
              n++;
              if( n == slide.length)
                n = 0;
            });

          },4000);
          //-------------
            $(".next").click(function(){
            $(".slide-show").fadeOut(function(){
              $(".slide-show").attr("src",slide[n]);
              $(".slide-show").fadeIn();
              n++;
              if( n == slide.length)
                n = 0;
            });
          },);
          //------
          $(".prev").click(function(){
            $(".slide-show").fadeOut(function(){
              $(".slide-show").attr("src",slide[n]);
              $(".slide-show").fadeIn();
              n--;
              if( n == slide.length)
                n = 0;
            });
          },);
          //------

        });
      </script>
      </div><!-- End .container  -->
    </div><!-- End .slide  -->
    <!-- ----------------end slide----------------- -->
  <!-- ------Main------------- -->
  <?php echo $this->view ?>
  <!-- ------Main------------- -->

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-top">
        <div class="new">
          <h4 class="widget-title">PMH SHOP Real beauty</h4>
                    <p>Sự hài lòng của khách hàng là niềm vui của chúng tôi</p>
        </div>
        <!-- <div class="mail">
          <form action="" method="POST">
                        <input type="email" class="form-control" placeholder="Địa chỉ email" name="email" required>
                        <input type="submit" class="btn" value="Đăng ký" name="nhantin">
                    </form>
        </div> -->
      </div><!-- End .footer-top  -->
      <div class="main">
      <div class="footer-left">
        <p class="widget-title">LIÊN HỆ VỚI CHÚNG TÔI</p>
          <p><span style="color:#F0FFF0;"><strong>ADDRESS:</strong></span><br/>123 Street Name, City, England</p>

          <p><span style="color:#FFFFFF;"><strong>PHONE:</strong></span><br/>0999 899 399</p>

          <p><span style="color:#FFFFFF;"><strong>EMAIL:</strong></span><br/>pmhstore@gmail.com</p>

          <p><span style="color:#FFFFFF;"><strong>WORKING DAYS/HOURS:</strong></span><br/>Mon - Sun / 9:00AM - 8:00PM</p>
      </div><!-- End .footer-left  -->
      <div class="footer-right">
        <div class="protop">
          <div class="protop1">
            <p class="title">SẢN PHẨM</p>
            <p><a href="index.php?controller=products&action=category&category_id=24">Nhẫn</a></p>
            <p><a href="index.php?controller=products&action=category&category_id=23">Dây Chuyền</a></p>
            <p><a href="index.php?controller=products&action=category&category_id=22">Bông tai</a></p>
          </div><!-- End .protop1  -->
          <div class="protop2">
            <p class="title">CHÍNH SÁCH</p>
            <p><a href="index.php?controller=intro">Hướng dẫn thanh toán</a></p>
            <p><a href="index.php?controller=intro">Chính sách đổi trả hàng</a></p>
            <p><a href="index.php?controller=intro">Chính sách giao hàng</a></p>
          </div><!-- End .protop2  -->
        </div>
        <div class="probot">
          <p class="footer-copyright">PMH Store. © 2023. All Rights Reserved</p>
          <div class="footer-image">
            <img src="assets/frontend/images/payments.png">
          </div>
        </div><!-- End .probot  -->
      </div><!-- End .footer-right  -->
      </div><!-- End .main  -->
    </div><!-- End .container  -->
  </footer>
  <!-- end .footer -->
</body>
</html>