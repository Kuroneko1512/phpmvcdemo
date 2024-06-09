<?php  
    function render_product($data,$data_cate) {
?>
<!-- <div class="banner center">
<div class="banner_content">
    <div class="img_left"> 
       <a href="index.php?controller=home&action=cate&id=7"><img src="lib/img/banner-quang-cao-dien-thoai-dep_103211368.jpg" alt=""></a> 

    </div>
    <div class="img_right">
        <div class="img_top">
            <a href="index.php?controller=home&action=cate&id=9"><img src="lib/img/banner_ipad.webp" alt=""></a> 
        </div>
        <div class="img_bottom">
            <a href="index.php?controller=home&action=cate&id=8"><img src="lib/img/banner_laptop.png" alt=""></a> 
        </div>
    </div>
</div>
</div>
<article class="center">
<h1>NEW</h1>

<div class="products">
   <?php foreach($data as $key){ ?>
    <figure>
        <div class="img_pro"> <a href="index.php?controller=home&action=details&id=<?=$key['product_id']?>"><img src="lib/img/<?= $key['path'] ?>" alt=""></a> </div>
        <div class="name_pro"><a href=""><?= $key['product_name'] ?></a></div>
        <div class="price_pro"><a href=""><?= $key['product_price'] ?></a></div>

    </figure>
   <?php } ?>

</div> -->
    <!-- nav start-->
    <nav>
            <div class="horizontal">
                <div class="horizontal-menu">
                    <ul>
                        <li class="nav-item">
                            <a href="">Giới Thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a href="">category
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
                                
                              
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>          
        </nav>
        <section class="banner">
            <div class="banner-container">
                <div class="banner-slide">
                    <img id="banner_img" src="" alt="Banner Image">
                </div>
                <a class="prev bannerL"><i class="fa-solid fa-angle-double-left"></i></a>
                <a class="next bannerR"><i class="fa-solid fa-angle-double-right"></i></a>
            </div>
            <div id="dots-container" class="dots-container"></div>
        </section>
<?php }?>

<?php 
function  render_products($data,$data_cate) {
 ?>
<!-- <h1>PRODUCTS</h1>
<div class="products" style="height: 1200px;">
<?php foreach($data as $key){ ?>
    <figure>
        <div class="img_pro"> <a href=""><img src="lib/img/<?= $key['path'] ?>" alt=""></a> </div>
        <div class="name_pro"><a href=""><?= $key['product_name'] ?></a></div>
        <div class="price_pro"><a href=""><?= $key['product_price'] ?></a></div>

    </figure>
   <?php } ?>

   

</div>

</article> -->
<main>
            <!-- body start -->
            <div class="body">
                
                <!-- Category Start -->
                <section class="category">
                    <section class="category-section">
                        <h2 class="section-title">
                            <span class="title-bg">Categories</span>
                        </h2>
                        <div class="category-grid">
                            <?php foreach ($data_cate as $key ) { ?>
                                <div class="category-item">
                                <a href="#">
                                    <div class="category-img">
                                        <img src="./img/sp1.jpg" alt="Category Image">
                                    </div>
                                    <div class="category-info">
                                        <h6>Category Name</h6>
                                        <p>100 Products</p>
                                    </div>
                                </a>
                            </div>
                          <?php  } ?>
                          
                        </div>
                    </section>
                </section>
                
                <!-- Category End -->

                <!-- New Products Start -->
                <section class="new-products">
                    <section class="product-section">
                        <h2 class="section-title">
                            <span class="title-bg">News Products</span>
                        </h2>
                        <div class="product-grid">
                        <?php foreach ($data as $key ) { ?>
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="lib/img/<?= $key['product_img'] ?>" alt="Product Image">
                                    <div class="product-overlay">
                                        <div class="product-actions">
                                            <a href="#" class="action-btn"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" class="action-btn"><i class="far fa-heart"></i></a>
                                            <a href="#" class="action-btn"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="product-info">
                                    <a href="index.php?index.php?controller=home&action=Details&id=<?= $key['product_id'] ?>" class="product-name">Product Name Goes Here</a>
                                    <div class="product-price">
                                        <span class="price">$123.00</span>
                                        <span class="old-price">$123.00</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>(99)</span>
                                    </div>
                                </div>
                            </div>
                          <?php  } ?>
                            <!-- <div class="product-item">
                                <div class="product-img">
                                    <img src="./img/Products/S20964-213_1.jpeg" alt="Product Image">
                                    <div class="product-overlay">
                                        <div class="product-actions">
                                            <a href="#" class="action-btn"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" class="action-btn"><i class="far fa-heart"></i></a>
                                            <a href="#" class="action-btn"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name">Product Name Goes Here</a>
                                    <div class="product-price">
                                        <span class="price">$123.00</span>
                                        <span class="old-price">$123.00</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>(99)</span>
                                    </div>
                                </div>
                            </div> -->
                            
                            <!-- Các sản phẩm khác -->
                        </div>
                    </section>
                </section>                
                <!-- New Products End -->

                <!-- Services start -->
                <section class="services">
                    <div class="services-container">
                        <div class="service">
                            <div class="service-icon">
                                <i class="fa-solid fa-check fa-1x"></i>
                            </div>
                            <h5 class="service-heading">Quality Product</h5>
                        </div>
                        <div class="service">
                            <div class="service-icon">
                                <i class="fa-solid fa-shipping-fast fa-1x" aria-hidden="true"></i>
                            </div>
                            <h5 class="service-heading">Free Shipping</h5>
                        </div>
                        <div class="service">
                            <div class="service-icon">
                                <i class="fa-solid fa-exchange-alt fa-1x"></i>
                            </div>
                            <h5 class="service-heading">14-Day Return</h5>
                        </div>
                        <div class="service">
                            <div class="service-icon">
                                <i class="fa-solid fa-phone-volume fa-1x"></i>
                            </div>
                            <h5 class="service-heading">24/7 Support</h5>
                        </div>
                    </div>
                </section>
                <!-- Services end -->

                <!-- Best Sales Products Start -->
                <section class="best-sales-products">
                    <section class="product-section">
                        <h2 class="section-title">
                            <span class="title-bg">Best Sales Products</span>
                        </h2>
                        <div class="product-grid">
                        <?php foreach ($data as $key ) { ?>
                            <div class="product-item">
                                <div class="product-img">
                                    <img src="lib/img/<?= $key['product_img'] ?>" alt="Product Image">
                                    <div class="product-overlay">
                                        <div class="product-actions">
                                            <a href="#" class="action-btn"><i class="fa fa-shopping-cart"></i></a>
                                            <a href="#" class="action-btn"><i class="far fa-heart"></i></a>
                                            <a href="#" class="action-btn"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="product-info">
                                    <a href="index.php?index.php?controller=home&action=Details&id=<?= $key['product_id'] ?>" class="product-name">Product Name Goes Here</a>
                                    <div class="product-price">
                                        <span class="price">$123.00</span>
                                        <span class="old-price">$123.00</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>(99)</span>
                                    </div>
                                </div>
                            </div>
                          <?php  } ?>
                            <!-- Các sản phẩm khác -->
                        </div>
                    </section>
                </section>  
                <!-- Best Sales Products End -->
            </div>
            <!-- body end -->

          
          
        </main>

<?php } ?>

