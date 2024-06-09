        <?php function render_register() { ?>
          <article class="center" style="height: 75vh;">
                 
                     
                 <div class="boxleft">
     
   
     <div class="box_content form_account">
     <form action="index.php?controller=user&action=register" method="POST">
     <h1 class="h3 mb-3 fw-normal text-center">đăng ký</h1>
     
     <div class="form-floating">
     <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
     <label for="floatingInput">Username</label>
     </div>
     <div class="form-floating">
     <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
     <label for="floatingPassword">Password</label>
     </div>
     <!-- <div  class="form-text" style="color: red">Thông tin đăng nhập không chính xác</div> -->
     <button class="w-100 btn btn-lg btn-primary" type="submit" name="btnSubmit">đăng ký</button>
     <button class="w-100 btn btn-lg btn-primary"  name="btnSubmit"><a href="index.php?controller=user&action=loginView">Sign in</a></button>
     </form>
     </div>
     
     </div>
     
                           
                       </article>
<?php } ?>