<?php
   

    ?>
 
 <header>
            <!-- top header -->
            <div class="logo">
              <a href="index.php"> <img src="./lib/img/NekoSports.svg" alt=""> </a> 
                
            </div>
            
            <form action="">
                <div class="search">
                    <input type="text" name="" placeholder="Tìm kiếm sản phẩm" required>
                    <button type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </form>
            <div class="right">
            <?php if (empty($_SESSION['user'])) { ?>
                <a href="index.php?controller=user&action=loginView">
                
                <div class="account-icon" id="account">  
                       
                       <p>Tài khoản</p>
                       <i class="fa-regular fa-user" aria-hidden="true"></i>
                   </div>
                </a>
         <?php } else { ?>
            <a href="index.php?controller=user&action=logout">
                
                <div class="account-icon" id="account">  
                       
                       <p>Đăng suất</p>
                       <i class="fa-regular fa-user" aria-hidden="true"></i>
                   </div>
                </a>
         <?php } ?>
            <!-- <a href="index.php?controller=user&action=loginView">
                
            <div class="account-icon" id="account">  
                   
                   <p>Tài khoản</p>
                   <i class="fa-regular fa-user" aria-hidden="true"></i>
               </div>
            </a> -->
               
                <div class="love-icon">
                    <p>Yêu thích</p>
                    <i class="fa-regular fa-heart" aria-hidden="true"></i>
                </div>
                <div class="cart-icon">
                    <p>Giỏ hàng</p>
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <div class="cart-count">
                        <span class="count" id="count">99</span>
                    </div>                    
                </div>
            </div>
            
            
        </header>
       