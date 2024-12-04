<?php include_once ROOT_DIR . "views/clients/header.php" ?>

<div class="custom-container">
  <div class="custom-header">
    <h2>Đăng ký</h2>
  </div>
  <form class="custom-form" action="<?= ROOT_URL . '?ctl=register' ?>" method="POST">
    <div class="custom-form-group">
      <label for="fullname" class="custom-label">Họ tên</label>
      <input type="text" id="fullname" class="custom-input" name="fullname" placeholder="Nhập họ tên">
    </div>
    <div class="custom-form-group">
      <label for="email" class="custom-label">Email</label>
      <input type="email" id="email" class="custom-input" name="email" placeholder="Nhập email">
    </div>
    <div class="custom-form-group">
      <label for="password" class="custom-label">Mật khẩu</label>
      <input type="password" id="password" class="custom-input" name="password" placeholder="Nhập mật khẩu">
    </div>
    <div class="custom-form-group">
      <label for="phone" class="custom-label">Điện thoại</label>
      <input type="text" id="phone" class="custom-input" name="phone" placeholder="Nhập số điện thoại">
    </div>
    <div class="custom-form-group">
      <label for="address" class="custom-label">Địa chỉ</label>
      <input type="text" id="address" class="custom-input" name="address" placeholder="Nhập địa chỉ">
    </div>
    <button type="submit" class="custom-button">Đăng ký</button>
  </form>
</div>













<?php include_once ROOT_DIR . "views/clients/footer.php" ?>