<?php
/*
Template Name: Home Page
*/
get_header();
?>

<!-- home banner area start -->
<div class="banner-area mt-30">
    <div class="container">
        <div class="row">
            <?php
            // Get banner image URLs
            $banner_left_image = get_theme_mod('banner_left_image', '');
            $banner_right_image = get_theme_mod('banner_right_image', '');
            $banner_top_image = get_theme_mod('banner_top_image', '');
            $banner_under_image = get_theme_mod('banner_under_image', '');
            ?>

            <div class="col-lg-3 col-md-3 col-sm-6 order-1">
                <div class="img-container img-full fix imgs-res mb-sm-30">
                    <a href="#">
                        <img src="<?php echo esc_url($banner_left_image); ?>" alt="" width="270" height="355">
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 order-sm-3">
                <div class="img-container img-full fix mb-30">
                    <a href="#">
                        <img src="<?php echo esc_url($banner_top_image); ?>" alt="" width="470" height="162">
                    </a>
                </div>
                <div class="img-container img-full fix mb-30">
                    <a href="#">
                        <img src="<?php echo esc_url($banner_under_image); ?>" alt="" width="470" height="162">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 order-2 order-md-3">
                <div class="img-container img-full fix">
                    <a href="#">
                        <img src="<?php echo esc_url($banner_right_image); ?>" alt="" width="370" height="355">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- home banner area end -->

<!-- featured category area start -->
<div class="latest-product">
            <div class="container">
                        <div class="feature-category-area">
                            <div class="section-title mb-30">
                                <div class="title-icon">
                                    <i class="fa fa-gift"></i>
                                </div>
                                <h3>new arrivals</h3>
                            </div> 
                            <!-- section title end -->
                            <!-- featured category start -->
                            <div class="container">
                                <div class="featured-carousel-active2 row slick-arrow-style" data-row="2">
                                    <!-- product single item start -->
                                    <div class="col">
                                        <div class="product-item fix mb-30">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img1.jpg" class="img-pri" alt="">
                                                    <img src="assets/img/product/product-img2.jpg" class="img-sec" alt="">
                                                </a>
                                                <div class="product-label">
                                                    <span>hot</span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="product-details.html">affiliate product</a></h4>
                                                <div class="pricebox">
                                                    <span class="regular-price">$90.00</span>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product single item end -->
                                    <!-- product single item start -->
                                    <div class="col">
                                        <div class="product-item fix mb-30">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img3.jpg" class="img-pri" alt="">
                                                    <img src="assets/img/product/product-img4.jpg" class="img-sec" alt="">
                                                </a>
                                                <div class="product-label">
                                                    <span>hot</span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="product-details.html">simple product 01</a></h4>
                                                <div class="pricebox">
                                                    <span class="regular-price">$120.00</span>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product single item end -->
                                    <!-- product single item start -->
                                    <div class="col">
                                        <div class="product-item fix mb-30">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img5.jpg" class="img-pri" alt="">
                                                    <img src="assets/img/product/product-img6.jpg" class="img-sec" alt="">
                                                </a>
                                                <div class="product-label">
                                                    <span>hot</span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="product-details.html">vertual product</a></h4>
                                                <div class="pricebox">
                                                    <span class="regular-price">$60.00</span>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product single item end -->
                                    <!-- product single item start -->
                                    <div class="col">
                                        <div class="product-item fix mb-30">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img7.jpg" class="img-pri" alt="">
                                                    <img src="assets/img/product/product-img8.jpg" class="img-sec" alt="">
                                                </a>
                                                <div class="product-label">
                                                    <span>hot</span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="product-details.html">grouped product</a></h4>
                                                <div class="pricebox">
                                                    <span class="regular-price">$10.00</span>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product single item end -->
                                    <!-- product single item start -->
                                    <div class="col">
                                        <div class="product-item fix mb-30">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img9.jpg" class="img-pri" alt="">
                                                    <img src="assets/img/product/product-img10.jpg" class="img-sec" alt="">
                                                </a>
                                                <div class="product-label">
                                                    <span>hot</span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="product-details.html">simple product 10</a></h4>
                                                <div class="pricebox">
                                                    <span class="regular-price">$70.00</span>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product single item end -->
                                    <!-- product single item start -->
                                    <div class="col">
                                        <div class="product-item fix mb-30">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img11.jpg" class="img-pri" alt="">
                                                    <img src="assets/img/product/product-img12.jpg" class="img-sec" alt="">
                                                </a>
                                                <div class="product-label">
                                                    <span>hot</span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="product-details.html">affiliate product</a></h4>
                                                <div class="pricebox">
                                                    <span class="regular-price">$70.00</span>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product single item end -->
                                    <!-- product single item start -->
                                    <div class="col">
                                        <div class="product-item fix mb-30">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img11.jpg" class="img-pri" alt="">
                                                    <img src="assets/img/product/product-img12.jpg" class="img-sec" alt="">
                                                </a>
                                                <div class="product-label">
                                                    <span>hot</span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="product-details.html">simple product 10</a></h4>
                                                <div class="pricebox">
                                                    <span class="regular-price">$70.00</span>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product single item end -->
                                    <!-- product single item start -->
                                    <div class="col">
                                        <div class="product-item fix mb-30">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img13.jpg" class="img-pri" alt="">
                                                    <img src="assets/img/product/product-img14.jpg" class="img-sec" alt="">
                                                </a>
                                                <div class="product-label">
                                                    <span>hot</span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="product-details.html">affiliate product</a></h4>
                                                <div class="pricebox">
                                                    <span class="regular-price">$70.00</span>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product single item end -->
                                    <!-- product single item start -->
                                    <div class="col">
                                        <div class="product-item fix mb-30">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img15.jpg" class="img-pri" alt="">
                                                    <img src="assets/img/product/product-img16.jpg" class="img-sec" alt="">
                                                </a>
                                                <div class="product-label">
                                                    <span>hot</span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="product-details.html">simple product 10</a></h4>
                                                <div class="pricebox">
                                                    <span class="regular-price">$70.00</span>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product single item end -->
                                    <!-- product single item start -->
                                    <div class="col">
                                        <div class="product-item fix mb-30">
                                            <div class="product-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img6.jpg" class="img-pri" alt="">
                                                    <img src="assets/img/product/product-img8.jpg" class="img-sec" alt="">
                                                </a>
                                                <div class="product-label">
                                                    <span>hot</span>
                                                </div>
                                                <div class="product-action-link">
                                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="product-details.html">affiliate product</a></h4>
                                                <div class="pricebox">
                                                    <span class="regular-price">$70.00</span>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product single item end -->
                                </div>
                            </div>
                        </div>
                </div>
                        </div>
                        <!-- featured category area end -->


<?php get_footer(); ?>