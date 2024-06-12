

<?php 
function  render_product($data,$data_cate) { ?>

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
                                    <a href="index.php?controller=home&action=cate&id=<?=$key['category_id'] ?>&page=1">
                                        <div class="category-img">
                                            <img src="lib/img/<?= $key['category_img'] ?>" alt="Category Image">
                                        </div>
                                        <div class="category-info">
                                            <h6><?= $key['category_name'] ?></h6>
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
                                        <a href="index.php?index.php?controller=home&action=Details&id=<?= $key['product_id'] ?>" class="product-name"><?= $key['product_name'] ?></a>
                                        <div class="product-price">
                                            <span class="price"><?= $key['product_price'] ?></span>
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
                                        <a href="index.php?index.php?controller=home&action=Details&id=<?= $key['product_id'] ?>" class="product-name"><?= $key['product_name'] ?></a>
                                        <div class="product-price">
                                            <span class="price"><?= $key['product_price'] ?></span>
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
                <!-- Best Sales Products End -->
            </div>
            <!-- body end -->

          
          
        </main>

<?php } ?>

