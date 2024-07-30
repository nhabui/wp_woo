<?php

// Enqueue Bootstrap CSS and JavaScript from CDN
function enqueue_bootstrap() {
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/style.css', array(), '1.0.0');
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true);
}

add_action('wp_enqueue_scripts', 'enqueue_bootstrap');

// Add WooCommerce support
function my_woocommerce_theme_support() {
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 200,
        'single_image_width'    => 400,
        'product_grid'          => array(
            'default_columns' => 4,
            'default_rows'    => 4,
            'min_rows'        => 1,
            'max_rows'        => 6,
            'min_columns'     => 1,
            'max_columns'     => 6,
        ),
    ));

    // Enable WooCommerce product gallery features (optional)
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'my_woocommerce_theme_support');

function remove_woocommerce_default_styles() {
    // Remove WooCommerce CSS
    wp_dequeue_style('woocommerce-layout');
    wp_dequeue_style('woocommerce-general');
    wp_dequeue_style('woocommerce-smallscreen');
}
add_action('wp_enqueue_scripts', 'remove_woocommerce_default_styles', 100);
// Remove default WooCommerce styles
add_filter('woocommerce_enqueue_styles', '__return_empty_array');
// Disable WooCommerce default styles and scripts (optional)
add_filter('woocommerce_enqueue_styles', '__return_false');
remove_action('wp_enqueue_scripts', array('WC_Frontend_Scripts', 'load_scripts'));
// Example to remove the shop loop from archive-product.php
remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 40);
remove_action('woocommerce_before_shop_loop', 'woocommerce_product_loop_start', 50);
remove_action('woocommerce_shop_loop', 'woocommerce_product_subcategories', 10);
remove_action('woocommerce_shop_loop', 'woocommerce_product_loop_start', 10);
remove_action('woocommerce_shop_loop', 'woocommerce_product_loop_end', 10);
remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);


// Customize product loop before and after
function custom_before_product_loop()
{
    // Add custom actions or HTML before the product loop
}
add_action('custom_before_product_loop', 'custom_before_product_loop');

// Customize product details display
function custom_product_details()
{
    global $product;
    echo '<h3 class="font-monospace fs-6">' . get_the_title() . '</h3>';
    echo '<p class="fw-bold">' . $product->get_price_html() . '</p>';
    // Add more details as needed
}
add_action('custom_product_details', 'custom_product_details');

