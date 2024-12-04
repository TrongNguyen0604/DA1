<?php include_once ROOT_DIR . "views/clients/header.php" ?>

<div class="custom-container">
  <div class="custom-header">
    <h2>Đăng nhập</h2>
  </div>
  <?php if($message != '') : ?>
    <div class="custom-alert">
      <?= $message ?>
    </div>
  <?php endif ?>
  <?php if($error) : ?>
    <div class="custom-alert custom-alert-error">
      <?= $error ?>
    </div>
  <?php endif ?>
  <form class="custom-form" action="<?= ROOT_URL . '?ctl=login' ?>" method="POST">
    <div class="custom-form-group">
      <label for="loginEmail" class="custom-label">Email</label>
      <input 
        type="email" 
        id="loginEmail" 
        class="custom-input" 
        name="email" 
        placeholder="Nhập email" 
        value="<?= $_SESSION['email'] ?? '' ?>" 
      />
    </div>
    <div class="custom-form-group">
      <label for="loginPassword" class="custom-label">Mật khẩu</label>
      <input 
        type="password" 
        id="loginPassword" 
        class="custom-input" 
        name="password" 
        placeholder="Nhập mật khẩu" 
        value="<?= $_SESSION['password'] ?? '' ?>" 
      />
    </div>
    <button type="submit" class="custom-button">Đăng nhập</button>
  </form>
</div>


<?php include_once ROOT_DIR . "views/clients/footer.php" ?>