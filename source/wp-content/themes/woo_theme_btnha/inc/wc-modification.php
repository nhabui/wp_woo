<?php
// Remove WooCommerce shop page title
add_filter('woocommerce_show_page_title', '__return_false');


remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_init', function() {
  remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
});
//remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
// Remove default WooCommerce breadcrumb
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

// Remove default WooCommerce sidebar action
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );
function nhabt_shop_register_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Shop 1 Sidebar', 'theme-text-domain' ),
        'id'            => 'sidebar-shop-1',
        'description'   => __( 'Widgets for the shop sidebar.', 'theme-text-domain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'nhabt_shop_register_sidebar' );

// Add custom main content layout
add_action('woocommerce_before_main_content', 'custom_before_main_content', 10);
function custom_before_main_content() {
    ?>
<?php do_action('custom_breadcrumb'); ?>
<div class="page-main-wrapper">
    <div class="container">
        <div class="row">
            <?php
    
}

add_action('woocommerce_after_main_content', 'custom_after_main_content', 10);
function custom_after_main_content() {
    ?>
        </div>
    </div>
</div><!-- .container end -->
<?php
}

// Output the custom sidebar markup within the main content
add_action( 'woocommerce_before_main_content', 'nhabt_output_shop_sidebar', 10 );
function nhabt_output_shop_sidebar() {
    ?>

<div class="col-lg-3 order-2 order-lg-1">
    <div class="shop-sidebar-wrap mt-md-28 mt-sm-28">
        <!-- Sidebar category start -->
        <div class="sidebar-widget mb-30">
            <div class="sidebar-category">
                <ul>
                    <?php dynamic_sidebar( 'sidebar-shop-1' ); ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
}

// Remove the default WooCommerce filter for shop loop columns
remove_filter('loop_shop_columns', 'wc_get_default_products_per_row');
// Customize the shop loop columns
add_filter('loop_shop_columns', 'custom_loop_shop_columns');
function custom_loop_shop_columns() {
    return 4; // Set the number of columns as needed
}

// Add custom main content (products) column for WooCommerce shop
add_action('woocommerce_before_main_content', 'custom_before_woocommerce_shop_main_content', 20);
function custom_before_woocommerce_shop_main_content() {
    echo '<div class="col-lg-9 order-1 order-lg-2">';
    echo '<div class="shop-product-wrapper pt-34">';
   // echo '<div class="shop-product-wrap grid row">';
}

// Close the main content (products) column for WooCommerce shop
add_action('woocommerce_after_main_content', 'custom_after_woocommerce_shop_main_content', 10);
function custom_after_woocommerce_shop_main_content() {
    echo '</div><!-- .shop-product-wrap grid row end -->';
    echo '</div><!-- .col-lg-9 order-1 order-lg-2 end -->';
   // echo '</div>';
}

// Add custom HTML for before each product in the shop loop
add_action('woocommerce_before_shop_loop_item', 'custom_before_shop_loop_item', 10);
function custom_before_shop_loop_item() {
    global $product;
    
    echo '<div class="product-item fix mb-30">';
    echo '<div class="product-thumb">';
    
    echo '<a href="' . esc_url(get_permalink()) . '">';
    echo $product->get_image(); // Display product thumbnail
    echo '</a>';
    
    // Custom Product Content
    echo '<div class="product-content">';
    
    // Product Title and Link
    echo '<h4><a href="' . esc_url(get_permalink()) . '">' . esc_html(get_the_title()) . '</a></h4>';

    // Pricebox
    echo '<div class="pricebox">';
    echo '<span class="regular-price">' . $product->get_price_html() . '</span>';
  
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
add_action('woocommerce_after_shop_loop_item', 'custom_after_shop_loop_item', 10);
function custom_after_shop_loop_item() {
    
}

?>