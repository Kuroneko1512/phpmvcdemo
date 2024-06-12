<?php
    
    $data_cate = get_categories();
    
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

        <nav>
            <div class="horizontal">
                <div class="horizontal-menu">
                    <ul>
                        <li class="nav-item">
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a href="">Danh Mục
                                <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="menu-dropdown-lv1">
                            <?php foreach ($data_cate as $key ) {?>
                                <li class="first nav-dropdown-item-lv1">
                                    <a href="index.php?controller=home&action=cate&id=<?=$key['category_id'] ?>&page=1"><?= $key['category_name'] ?></a>                            
                                </li>
                                
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="">Nam
                                <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="menu-dropdown-lv1">
                                <li class="first nav-dropdown-item-lv1">
                                    <a href="">Giày Chạy Bộ
                                        <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                    <ul class="menu-dropdown-lv2">
                                        <li class="nav-dropdown-item-lv2">
                                            <a href="">Giày Luyện Tập</a>
                                        </li>                                
                                        <li class="nav-dropdown-item-lv2">
                                            <a href="">Giày Thi Đấu</a>
                                        </li>
                                        <li class="nav-dropdown-item-lv2">
                                            <a href="">Giày Chạy Hàng Ngày</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Giày Chạy Địa Hình</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Giày Leo Núi</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Dép Chạy Bộ</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Áo Chạy Bộ</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Quần Chạy Bộ</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Quần Áo Triathlon</a>
                                </li>
                            </ul>
                        </li>
        
                        <li class="nav-item">
                            <a href="">Nữ
                                <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="menu-dropdown-lv1">
                                <li class="first nav-dropdown-item-lv1">
                                    <a href="">Giày Chạy Bộ
                                        <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                    <ul class="menu-dropdown-lv2">
                                        <li class="nav-dropdown-item-lv2">
                                            <a href="">Giày Luyện Tập</a>
                                        </li>                                
                                        <li class="nav-dropdown-item-lv2">
                                            <a href="">Giày Thi Đấu</a>
                                        </li>
                                        <li class="nav-dropdown-item-lv2">
                                            <a href="">Giày Chạy Hàng Ngày</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Giày Chạy Địa Hình</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Giày Leo Núi</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Dép Chạy Bộ</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Áo Chạy Bộ</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Áo Ngực Chạy Bộ (Bra)</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Quần Chạy Bộ</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Quần Áo Triathlon</a>
                                </li>
                            </ul>
                        </li>
        
                        <li class="nav-item">
                            <a href="">Phụ Kiện
                                <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="menu-dropdown-lv1">
                                <li class="first nav-dropdown-item-lv1">
                                    <a href="">Mũ Chạy Bộ
                                        <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                    <ul class="menu-dropdown-lv2">
                                        <li class="nav-dropdown-item-lv2">
                                            <a href="">Mũ nửa đầu</a>
                                        </li>                                
                                        <li class="nav-dropdown-item-lv2">
                                            <a href="">Mũ Vành Rộng</a>
                                        </li>
                                        <li class="nav-dropdown-item-lv2">
                                            <a href="">Mũ cả đầu</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Kính Chạy Bộ
                                        <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                    <ul class="menu-dropdown-lv2">
                                        <li class="nav-dropdown-item-lv2">
                                            <a href="">Kính kèm gọng cận</a>
                                        </li>                                
                                        <li class="nav-dropdown-item-lv2">
                                            <a href="">Kính Phân Cực</a>
                                        </li>
                                        <li class="nav-dropdown-item-lv2">
                                            <a href="">Kính Râm</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Khăn Ống Đa Năng</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Đèn Chạy Địa Hình</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Vest Chạy Bộ</a>
                                </li>                        
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Đai Chạy Bộ</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Gậy Chạy Địa Hình</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Tất Chạy Bộ
                                        <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                    <ul class="menu-dropdown-lv2">
                                        <li class="nav-dropdown-item-lv2">
                                            <a href="">Tất Triathlon</a>
                                        </li>                                
                                        <li class="nav-dropdown-item-lv2">
                                            <a href="">Tất Xỏ Ngón</a>
                                        </li>                                
                                    </ul>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Bó Calf</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Phụ Kiện Khác</a>
                                </li>
                            </ul>
                        </li>
        
                        <li class="nav-item">
                            <a href="">Đồng Hồ - Tai Nghe
                                <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="menu-dropdown-lv1">
                                <li class="first nav-dropdown-item-lv1">
                                    <a href="">Đồng Hồ Coros</a>                            
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Đồng Hồ Garmin</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Tai Nghe Shokz</a>
                                </li>
                            </ul>
                        </li>
        
                        <li class="nav-item">
                            <a href="">Dinh Dưỡng
                                <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="menu-dropdown-lv1">
                                <li class="first nav-dropdown-item-lv1">
                                    <a href="">Gel Năng Lượng</a>                            
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Bột Năng Lượng</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Phục Hồi</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Muối</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Viên Sủi</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Thanh Năng Lượng</a>
                                </li>
                            </ul>
                        </li>
        
                        <li class="nav-item">
                            <a href="">Phục Hồi
                                <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="menu-dropdown-lv1">
                                <li class="first nav-dropdown-item-lv1">
                                    <a href="">Súng Massage</a>                            
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Bó Gối</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Bó Cổ Chân</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Băng Dán Cơ</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a href="">Thương Hiệu
                                <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="menu-dropdown-lv1">
                                <li class="first nav-dropdown-item-lv1">
                                    <a href="">Nike</a>                            
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Addidas</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">HoKa</a>
                                </li>
                                <li class="nav-dropdown-item-lv1">
                                    <a href="">Saucony</a>
                                </li>
                            </ul>
                        </li>

                        <?php if (!empty($_SESSION['user']) && !empty($_SESSION['role']) ) { ?>
                            <li class="nav-item">
                                <a href="">Quản lý
                                    <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="menu-dropdown-lv1">
                            
                                    <li class="first nav-dropdown-item-lv1">
                                        <a href="index.php?controller=product&action=index&page=1">product</a>
                                    </li>
                                    <li class="first nav-dropdown-item-lv1">
                                        <a href="index.php?controller=category&action=index&page=1">category</a>
                                    </li>
                                    <li class="first nav-dropdown-item-lv1">
                                        <a href="index.php?controller=user&action=lists&page=1">user</a>
                                    </li>
                                    <li class="first nav-dropdown-item-lv1">
                                        <a href="index.php?controller=comment&action=index&page=1">comment</a>
                                    </li>
                                    <li class="first nav-dropdown-item-lv1">
                                        <a href="index.php?controller=giangvien&action=index&page=1">GiangVien</a>
                                    </li>
                                    
                                </ul>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            </div>          
        </nav>