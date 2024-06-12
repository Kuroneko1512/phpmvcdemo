<?php function render_login() {  ?>
  
<?php if (isset($_SESSION['error'])) {
            $mes = $_SESSION['error'];
        ?>
            <div class="alert alert-primary center" role="alert">
                <?= $mes; ?>
            </div>

        <?php unset($_SESSION['error']);
        } ?>
  <main>
        

    <section class="login-sign-up-section ">
            <div class="log-sign" id="log-sign">
                <div class="form-container sign-up-container">
                    <form action="index.php?controller=user&action=register" method="POST">
                        <h1>Create Account</h1>
                        <!-- <h1>Đăng Ký</h1> -->
                        <div class="social-container">
                            <a href="#" class="social">
                                <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="social">
                                <i class="fa-brands fa-google-plus-g" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="social">
                                <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                            </a>
                        </div>
                        <span>or use your email for registration</span>                        
                        <input type="text" placeholder="UserName"  name="username"/>
                        <input type="email" placeholder="Email" name="email"/>
                        <input type="password" placeholder="Password" name="password"/>
                        <button >Sign Up</button>
                        <!-- <button>Đăng Ký</button> -->
                    </form>
                </div>
                <div class="form-container sign-in-container">
                  <form action="index.php?controller=user&action=login" method="POST">
                        <h1>Sign in</h1>
                        <!-- <h1>Đăng Nhập</h1> -->
                        <div class="social-container">
                            <a href="#" class="social">
                                <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="social">
                                <i class="fa-brands fa-google-plus-g" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="social">
                                <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                            </a>
                        </div>
                        <span>or use your account</span>                        
                        <input type="text" placeholder="Username" name="username"/>
                        <input type="password" placeholder="Password" name="password" />
                        <!-- <div class="form-text" style="color: red">Thông tin đăng nhập không chính xác</div> -->
                        <div class="remember-check">
                            <div class="check-box">
                                <input type="checkbox" name="remember" id="" />
                                <label for="">Remember</label>                                
                            </div>
                            <a href=""><b>Forgot your password?</b></a>
                        </div>
                        <button type="submit" name="btnSubmit">Sign In</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Welcome Back!</h1>
                            <p>To keep connected with us please login with your personal info</p>
                            <button class="ghost" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1>Hello, Friend!</h1>
                            <p>Enter your personal details and start journey with us</p>
                            <button class="ghost" id="signUp">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
  </main>


<?php } ?>