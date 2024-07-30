<?php

// Enqueue Styles
function woo_theme_btnha_enqueue_styles() {
   // Bootstrap
   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
   // Font Awesome
   wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
   // Helper
   wp_enqueue_style('helper', get_template_directory_uri() . '/assets/css/helper.min.css');
   // Plugins
   wp_enqueue_style('plugins', get_template_directory_uri() . '/assets/css/plugins.css');
   // Skin Default
   wp_enqueue_style('skin-default', get_template_directory_uri() . '/assets/css/skin-default.css');
}
add_action('wp_enqueue_scripts', 'woo_theme_btnha_enqueue_styles');

// Enqueue Fonts
function woo_theme_btnha_enqueue_fonts() {
   // Font Awesome
   wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/fontawesome-webfont3e6e.eot');
   wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/fontawesome-webfont3e6e.svg');
   wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/fontawesome-webfont3e6e.ttf');
   wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/fontawesome-webfont3e6e.woff');
   wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/fontawesome-webfont3e6e.woff2');
   wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/fontawesome-webfontd41d.eot');
}
add_action('wp_enqueue_scripts', 'woo_theme_btnha_enqueue_fonts');

function enqueue_custom_scripts() {
    // Register and enqueue Modernizr
    wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.6.0.min.js', array(), null, true);
    wp_enqueue_script('modernizr');

    // Register and enqueue jQuery
    wp_deregister_script('jquery'); // Deregister the default jQuery included with WordPress
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.3.1.min.js', array(), null, true);
    wp_enqueue_script('jquery');

    // Register and enqueue Popper
    wp_register_script('popper', get_template_directory_uri() . '/assets/js/vendor/popper.min.js', array(), null, true);
    wp_enqueue_script('popper');

    // Register and enqueue Bootstrap
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array('jquery', 'popper'), null, true);
    wp_enqueue_script('bootstrap');

    // Register and enqueue Plugins
    wp_register_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), null, true);
    wp_enqueue_script('plugins');

    // Register and enqueue Ajax Mail
    wp_register_script('ajax-mail', get_template_directory_uri() . '/assets/js/ajax-mail.js', array('jquery'), null, true);
    wp_enqueue_script('ajax-mail');

    // Register and enqueue Main
    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
    wp_enqueue_script('main');

    // Register and enqueue Switcher (remove if not needed)
    wp_register_script('switcher', get_template_directory_uri() . '/assets/js/switcher.js', array('jquery'), null, true);
    wp_enqueue_script('switcher');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


function register_my_menus() {
    register_nav_menus(
        array(
            'primary_menu' => __('Primary Menu'),
            'mega_menu'    => __('Mega Menu'),
            // Add other menu locations if needed
        )
    );
}
add_action('init', 'register_my_menus');

// Include slider settings
require get_template_directory() . '/func/slider.php';

// Include footer settings
require get_template_directory() . '/func/footer.php';


add_theme_support('widgets');

function theme_add_woocommerce_support() {
    // Add theme support for WooCommerce
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,
        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ));

    // Add support for WooCommerce gallery features
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    // Customize WooCommerce image sizes
    $thumbnail_width  = 100;
    $thumbnail_height = 100;

    update_option('woocommerce_gallery_thumbnail_image_width', $thumbnail_width);
    update_option('woocommerce_gallery_thumbnail_image_height', $thumbnail_height);

    // Check if options were updated successfully
    if (get_option('woocommerce_gallery_thumbnail_image_width') !== $thumbnail_width
        || get_option('woocommerce_gallery_thumbnail_image_height') !== $thumbnail_height) {
        // Handle the error or log a message
        error_log('Failed to update WooCommerce thumbnail image sizes.');
    }

    // Disable WooCommerce default styles
    define('WOOCOMMERCE_USE_CSS', false);
}
add_action('after_setup_theme', 'theme_add_woocommerce_support');

// Add custom image size
add_action('after_setup_theme', 'custom_theme_setup');
function custom_theme_setup() {
    add_image_size('nha-custom-thumbnail', 282, 225, true);
}

// Custom Breadcrumb
function custom_breadcrumb() {
    $separator = ' <i class="fa fa-angle-right"></i> '; // You can change the separator icon or text

    echo '<div class="breadcrumb-area">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-12">';
    echo '<div class="breadcrumb-wrap">';
    echo '<nav aria-label="breadcrumb">';
    echo '<ul class="breadcrumb">';

    // Home link
    echo '<li class="breadcrumb-item"><a href="' . home_url() . '">Home</a></li>';

    // Check if it's a single post (blog details)
    if (is_single()) {
        $categories = get_the_category();
        if ($categories) {
        $category = $categories[0]; // Assuming you want to use the first category
        echo '<li class="breadcrumb-item"><a href="' . get_category_link($category->term_id) . '">' . esc_html($category->name) . '</a></li>';
    }
        //echo '<li class="breadcrumb-item"><a href="' . get_permalink(get_option('page_for_posts')) . '"></a></li>';
        //echo '<li class="breadcrumb-item"><a href="' . get_permalink(get_option('page_for_posts')) . '">' . get_the_title(get_option('page_for_posts')) . '</a></li>';
        echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
    } elseif (is_page()) {
        // Check if it's a page
        $ancestors = get_ancestors(get_the_ID(), 'page');
        $ancestors = array_reverse($ancestors);

        foreach ($ancestors as $ancestor) {
            echo '<li class="breadcrumb-item"><a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
        }

        echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
    } elseif (is_category() || is_tag() || is_tax()) {
        // Check if it's a category, tag, or taxonomy archive
        echo '<li class="breadcrumb-item active" aria-current="page">' . single_term_title('', false) . '</li>';
    } elseif (is_search()) {
        // Check if it's a search result
        echo '<li class="breadcrumb-item active" aria-current="page">Search Results for "' . esc_html(get_search_query()) . '"</li>';
    } else {
        // Default for other pages
        echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
    }

    echo '</ul>';
    echo '</nav>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

// Display the breadcrumb
add_action('custom_breadcrumb', 'custom_breadcrumb');

function theme_register_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Shop Sidebar', 'theme-text-domain' ),
        'id'            => 'sidebar-shop',
        'description'   => __( 'Widgets for the shop sidebar.', 'theme-text-domain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}

add_action( 'widgets_init', 'theme_register_sidebar' );

// Include wc settings
require get_template_directory() . '/inc/wc-modification.php';


// Add the logo customization to the WordPress Customizer
add_action('customize_register', 'customize_logo');
function customize_logo($wp_customize) {
    // Create 'image' section
    $wp_customize->add_section('image', array(
        'title' => __('Logo Settings', 'theme-text-domain'),
    ));

    // Logo
    $wp_customize->add_setting('logo', array(
        'sanitize_callback' => 'esc_url_raw', // Use esc_url_raw for image URLs
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
        'label'    => __('Logo', 'theme-text-domain'),
        'section'  => 'image', // Assuming 'image' is the correct section name
        'settings' => 'logo',
        'type'     => 'upload',
    )));
}





// Add action to customize information
add_action('customize_register', 'nhabt_custom_information');
// Custom information customization function
function nhabt_custom_information($wp_customize) {
    // Working Time
    $wp_customize->add_setting('working_time_title', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('working_time_title', array(
        'label'    => __('Working Time Title', 'theme-text-domain'),
        'section'  => 'title_tagline',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('working_time_description', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('working_time_description', array(
        'label'    => __('Working Time Description', 'theme-text-domain'),
        'section'  => 'title_tagline',
        'type'     => 'text',
    ));
    
    // Free Shipping
    $wp_customize->add_setting('free_shipping_title', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('free_shipping_title', array(
        'label'    => __('Free Shipping Title', 'theme-text-domain'),
        'section'  => 'title_tagline',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('free_shipping_description', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('free_shipping_description', array(
        'label'    => __('Free Shipping Description', 'theme-text-domain'),
        'section'  => 'title_tagline',
        'type'     => 'text',
    ));

    // Money Back
    $wp_customize->add_setting('money_back_title', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('money_back_title', array(
        'label'    => __('Money Back Title', 'theme-text-domain'),
        'section'  => 'title_tagline',
        'type'     => 'text',
    ));
     $wp_customize->add_setting('money_back_description', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('money_back_description', array(
        'label'    => __('Money Back Description', 'theme-text-domain'),
        'section'  => 'title_tagline',
        'type'     => 'text',
    ));
}

// Add the custom header call to action customization to the WordPress Customizer
add_action('customize_register', 'customize_header_call_to_action');
function customize_header_call_to_action($wp_customize) {
    // Create 'header_call_to_action' section
    $wp_customize->add_section('header_call_to_action', array(
        'title' => __('Header Call to Action', 'theme-text-domain'),
    ));

    // Email
    $wp_customize->add_setting('header_email', array(
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('header_email', array(
        'label'    => __('Email Address', 'theme-text-domain'),
        'section'  => 'header_call_to_action',
        'type'     => 'text',
    ));

    // Phone
    $wp_customize->add_setting('header_phone', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('header_phone', array(
        'label'    => __('Phone Number', 'theme-text-domain'),
        'section'  => 'header_call_to_action',
        'type'     => 'text',
    ));
}

// Add the banner customization to the WordPress Customizer
add_action('customize_register', 'customize_banner');
function customize_banner($wp_customize) {
    // Create 'banner' section
    $wp_customize->add_section('banner', array(
        'title' => __('Banner Settings', 'theme-text-domain'),
    ));

    // Banner Left Image
    $wp_customize->add_setting('banner_left_image', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_left_image', array(
        'label'    => __('Banner Left Image', 'theme-text-domain'),
        'section'  => 'banner',
        'settings' => 'banner_left_image',
        'type'     => 'image',
    )));

    // Banner Right Image
    $wp_customize->add_setting('banner_right_image', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_right_image', array(
        'label'    => __('Banner Right Image', 'theme-text-domain'),
        'section'  => 'banner',
        'settings' => 'banner_right_image',
        'type'     => 'image',
    )));

    // Banner Top Image
    $wp_customize->add_setting('banner_top_image', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_top_image', array(
        'label'    => __('Banner Top Image', 'theme-text-domain'),
        'section'  => 'banner',
        'settings' => 'banner_top_image',
        'type'     => 'image',
    )));
    
    // Banner Under Image
    $wp_customize->add_setting('banner_under_image', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_under_image', array(
        'label'    => __('Banner Under Image', 'theme-text-domain'),
        'section'  => 'banner',
        'settings' => 'banner_under_image',
        'type'     => 'image',
    )));
}


