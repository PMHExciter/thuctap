<?php 
  //load file Layout.php
  $this->layoutPath = "LayoutTrangTrong.php";
 
 ?>
  <!-- main -->
        
<div class="template-customer" style="margin:auto;">
  <h1>Đăng ký tài khoản</h1>
  <?php if(isset($_GET["notify"]) &&$_GET["notify"] == "error"): ?>
          	<p>Email đã tồn tại, bạn hãy chọn email khác</p>
          	<?php else: ?>
          	<p>Nếu bạn chưa có tài khoản</p>
          <?php endif; ?>
  <div class="row" style="margin-top:50px;">
    <div class="col-md-6">
      <div class="wrapper-form">
        <form method='post' action="index.php?controller=account&action=registerPost">
          <p class="title" style="width: 490px; text-align: center;"><span>Đăng ký tài khoản</span></p>
          <div class="form-group">
            <label>Họ và tên:</label>
            <input type="text" name="name" class="input-control">
          </div>
          <div class="form-group">
            <label>Email:<b id="req">*</b></label>
            <input type="text" name="email" class="input-control" required>
          </div>
          <div class="form-group">
            <label>Địa chỉ:(Ghi cụ thể)</label>
            <input type="text" name="address" class="input-control">
          </div>
          <div class="form-group">
            <label>Điện thoại:</label>
            <input type="text" name="phone" class="input-control">
          </div>
          <div class="form-group">
            <label>Mật khẩu:<b id="req">*</b></label>
            <input type="password" name="password" class="input-control" required="">
          </div>
          <!-- <div class="form-group"> -->
            <input type="submit" class="button" value="Đăng ký" style="width: 90px;">
          <!-- </div> -->
        </form>
      </div>
    </div>
    <div class="col-md-6">
      <div class="wrapper-form">
        <p class="title"><span>Đăng nhập</span></p>
        <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
        <a href="index.php?controller=account&action=login" class="button">Đăng nhập</a> </div>
    </div>
  </div>
</div>

<!-- end main --> 