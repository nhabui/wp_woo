<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Helper Class CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/helper.min.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/skin-default.css" rel="stylesheet" id="galio-skin">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- header top start -->
    <div class="header-top-area bg-gray text-center text-md-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="header-call-action">
                        <a href="mailto:<?php echo esc_attr(get_theme_mod('header_email', '')); ?>">
                            <i class="fa fa-envelope"></i>
                            <?php echo esc_html(get_theme_mod('header_email', '')); ?>
                        </a>
                        <a href="tel:<?php echo esc_attr(get_theme_mod('header_phone', '')); ?>">
                            <i class="fa fa-phone"></i>
                            <?php echo esc_html(get_theme_mod('header_phone', '')); ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="header-top-right float-md-right float-none">
                        <nav>
                            <ul>
                                <li>
                                    <div class="dropdown header-top-dropdown">
                                        <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            my account
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="myaccount">
                                            <a class="dropdown-item" href="my-account.html">my account</a>
                                            <a class="dropdown-item" href="login-register.html"> login</a>
                                            <a class="dropdown-item" href="login-register.html">register</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">my wishlist</a>
                                </li>
                                <li>
                                    <a href="#">my cart</a>
                                </li>
                                <li>
                                    <a href="#">checkout</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top end -->

    <!-- header middle start -->
    <div class="header-middle-area pt-20 pb-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="brand-logo">
                        <a href="<?php echo home_url(); ?>">
                            <?php
    $logo_url = get_theme_mod('logo');

    if ($logo_url) {
        // Display the logo with custom size or full size
        echo '<img src="' . esc_url($logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
    } else {
        // Fallback to default logo
        echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/img/logo/logo.png') . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
    }
    ?>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header-middle-right">
                        <div class="header-middle-shipping mb-20">
                            <div class="single-block-shipping">
                                <div class="shipping-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="shipping-content">
                                    <h5><?php echo esc_html(get_theme_mod('working_time_title', 'Working Time Title')); ?></h5>
                                    <span><?php echo esc_html(get_theme_mod('working_time_description', 'Working Time Description')); ?></span>
                                </div>
                            </div> <!-- end single shipping -->
                            <div class="single-block-shipping">
                                <div class="shipping-icon">
                                    <i class="fa fa-truck"></i>
                                </div>
                                <div class="shipping-content">
                                    <h5><?php echo esc_html(get_theme_mod('free_shipping_title', 'Free Shipping Title')); ?></h5>
                                    <span><?php echo esc_html(get_theme_mod('free_shipping_description', 'Free Shipping Description')); ?></span>
                                </div>
                            </div> <!-- end single shipping -->
                            <div class="single-block-shipping">
                                <div class="shipping-icon">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="shipping-content">
                                    <h5><?php echo esc_html(get_theme_mod('money_back_title', 'Money Back Title')); ?></h5>
                                    <span><?php echo esc_html(get_theme_mod('money_back_description', 'Money Back Description')); ?></span>
                                </div>
                            </div> <!-- end single shipping -->
                        </div>
                        <div class="header-middle-block">
                            <div class="header-middle-searchbox">
                                <input type="text" placeholder="Search...">
                                <button class="search-btn"><i class="fa fa-search"></i></button>
                            </div>
                            <div class="header-mini-cart">
                                <div class="mini-cart-btn">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="cart-notification">2</span>
                                </div>
                                <div class="cart-total-price">
                                    <span>total</span>
                                    $50.00
                                </div>
                                <ul class="cart-list">
                                    <li>
                                        <div class="cart-img">
                                            <a href="product-details.html"><img src="assets/img/cart/cart-1.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-info">
                                            <h4><a href="product-details.html">simple product 09</a></h4>
                                            <span>$60.00</span>
                                        </div>
                                        <div class="del-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart-img">
                                            <a href="product-details.html"><img src="assets/img/cart/cart-2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-info">
                                            <h4><a href="product-details.html">virtual product 10</a></h4>
                                            <span>$50.00</span>
                                        </div>
                                        <div class="del-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </li>
                                    <li class="mini-cart-price">
                                        <span class="subtotal">subtotal : </span>
                                        <span class="subtotal-price">$88.66</span>
                                    </li>
                                    <li class="checkout-btn">
                                        <a href="#">checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header middle end -->


    <!-- main menu area start -->
    <!-- header top start -->

    <div class="main-header-wrapper bdr-bottom1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-header-inner">
                        <div class="category-toggle-wrap">
                            <div class="category-toggle">
                                MENU
                                <div class="cat-icon">
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                            <!-- Mega Menu Template -->
                            <?php include_once('inc/mega-menu-template.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header top end -->

    <!-- hero slider start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="slider-wrapper-area">
                    <div class="hero-slider-active hero__1 slick-dot-style hero-dot">
                        <?php
                     $num_slides = 5;
                    for ($i = 1; $i <= $num_slides; $i++) :
                    ?>
                        <div class="single-slider" style="background-image: url(<?php echo esc_url(get_theme_mod("slider_bg_image_$i", "assets/img/slider/slider{$i}_bg.jpg")); ?>); background-size: cover;">
                            <div class="container p-0">
                                <div class="slider-main-content">
                                    <div class="slider-text">
                                        <h1><?php echo esc_html(get_theme_mod("slider_title_$i", "Slide Title {$i}")); ?></h1>
                                        <p><?php echo esc_html(get_theme_mod("slider_content_$i", "Slider {$i} Content")); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main menu area end -->



    <?php wp_footer(); ?>
</body>