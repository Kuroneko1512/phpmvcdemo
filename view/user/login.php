<?php function render_login() { ?>
<?php if (isset($_SESSION['error'])) {
            $mes = $_SESSION['error'];
        ?>
            <div class="alert alert-primary center" role="alert">
                <?= $mes; ?>
            </div>

        <?php unset($_SESSION['error']);
        } ?>
  <main>
    <div class="body" style="height: 75vh;">
      <div class="box_title">Đăng nhập</div>
      <div class="box_content form_account">
        <form action="index.php?controller=user&action=login" method="POST">

          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-text" style="color: red">Thông tin đăng nhập không chính xác</div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="btnSubmit">Sign in</button>
          <button class="w-100 btn btn-lg btn-primary" name="btnSubmit"><a href="index.php?controller=user&action=registerView">register</a></button>
        </form>
      </div>

    </div>
    </div>
  </main>
<?php } ?>