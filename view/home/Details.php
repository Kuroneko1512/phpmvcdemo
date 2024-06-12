<?php function render_product_details($data) { ?>
    <main>
            <!-- body start -->
            <div class="body">
                    
                <!-- <section class="product-page"> -->
                    
                    <div class="content-product-area">
                        <section class="product-section">
                            <div class="product-detail-area">
                                <div class="detail-left">
                                    <div class="product-image">
                                        <img src="./lib/img/<?= $data['product_img'] ?>" alt="Product Image">
                                    </div>
                                    <div class="product-thumbnails">
                                        <div class="thumbnail">
                                            <img src="./img/Products/S20964-213_1.jpeg" alt="Thumbnail 1">
                                        </div>
                                        <div class="thumbnail">
                                            <img src="./img/Products/S20964-213_2.jpeg" alt="Thumbnail 2">
                                        </div>
                                        <div class="thumbnail">
                                            <img src="./img/Products/S20964-213_3.jpeg" alt="Thumbnail 1">
                                        </div>
                                        <div class="thumbnail">
                                            <img src="./img/Products/S20964-213_4.jpeg" alt="Thumbnail 2">
                                        </div>
                                        <div class="thumbnail">
                                            <img src="./img/Products/S20964-213_5.jpeg" alt="Thumbnail 1">
                                        </div>

                                        <!-- Thêm các thumbnail khác tại đây -->
                                    </div>
                                </div>
                                <div class="detail-right">                                    
                                    <h2 class="product-name">Tên Sản Phẩm</h2>
                                    <div class="product-rating">
                                        <span class="rating-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </span>
                                        <span class="rating-count">(20 đánh giá)</span>
                                    </div>
                                    <p class="product-category">Loại Sản Phẩm</p>
                                    <p class="product-code">Mã Sản Phẩm: ABC123</p>
                                    <div class="product-colors">
                                        <span>Màu sắc:</span>
                                        <div class="color-options">
                                            <div class="color-option" style="background-color: red;"></div>
                                            <div class="color-option" style="background-color: blue;"></div>
                                            <!-- Thêm các tùy chọn màu sắc khác tại đây -->
                                        </div>
                                    </div>
                                    <div class="product-sizes">
                                        <span>Kích cỡ:</span>
                                        <div class="size-options">
                                            <div class="size-option">S</div>
                                            <div class="size-option">M</div>
                                            <div class="size-option">L</div>
                                            <!-- Thêm các tùy chọn kích cỡ khác tại đây -->
                                        </div>
                                    </div>
                                    <div class="product-quantity">
                                        <span>Số lượng:</span>
                                        <input type="number" value="1" min="1">
                                        <button class="add-to-cart-btn">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="info-tab">
                                <div class="nav-tabs">
                                    <a href="#" class="tab-link active">Thông tin sản phẩm</a>
                                    <a href="#" class="tab-link">Bình luận và đánh giá</a>
                                </div>
                                <div class="nav-tab-content">
                                    <div class="tab-pane tab-active tab-show" id="tab-pane-1">
                                        <p>Nội dung thông tin sản phẩm tại đây...</p>
                                    </div>
                                    <div class="tab-pane" id="tab-pane-2">
                                        <p>Nội dung bình luận và đánh giá tại đây...</p>
                                    </div>
                                </div>
                            </div> -->
                        </section>
                    </div>

                </section>
            
                
                <!-- Services start
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
                </section> -->
                <!-- Services end -->
                
            </div>
            <!-- body end -->
            
        

        </main>
        <!-- <main>
                    <div class="body">
                    <div class="info-tab">
                                <div class="nav-tabs">
                                    <a href="#" class="tab-link active">Thông tin sản phẩm</a>
                                    <a href="#" class="tab-link">Bình luận và đánh giá</a>
                                </div>
                                <div class="nav-tab-content">
                                    <div class="tab-pane tab-active tab-show" id="tab-pane-1">
                                        <p>Nội dung thông tin sản phẩm tại đây...</p>
                                    </div>
                                    <div class="tab-pane" id="tab-pane-2">
                                        <p>Nội dung bình luận và đánh giá tại đây...</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </main> -->
   
<?php } ?>