<?php
/*
Plugin Name: WooCommerce Products by Category
Description: A simple plugin to display WooCommerce products based on selected categories.
Version: 1.0
Author: Your Name
*/

// Enqueue JavaScript for Ajax
function custom_enqueue_scripts() {
    wp_enqueue_script('custom-woo-scripts', plugin_dir_url(__FILE__) . 'js/custom-woo-scripts.js', array('jquery'), '1.0', true);
    wp_enqueue_script('custom-add-new-scripts', plugin_dir_url(__FILE__) . 'js/add-new.js', array('jquery'), '1.0', true);
    wp_localize_script('custom-woo-scripts', 'customWooAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');

// Shortcode to display products from selected category
function custom_products_shortcode($atts) {
    ob_start();

    $atts = shortcode_atts(array(
        'category' => '', // Default category
    ), $atts);

    // Use the default category if not specified in the shortcode
    $category_slug = sanitize_text_field($atts['category']);
    if (empty($category_slug)) {
        $category_slug = get_option('custom_products_default_category', '');
    }

    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
        'tax_query'      => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => $category_slug,
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            wc_get_template_part('content', 'product'); // Adjust based on your theme
        }
        wp_reset_postdata();
    } else {
        echo 'No products found';
    }

    return ob_get_clean();
}
add_shortcode('custom_products', 'custom_products_shortcode');

// Function to display the form for getting products from selected categories
function custom_get_products_form() {
    ob_start();

    // Get WooCommerce product categories
    $categories = get_terms(array(
        'taxonomy'   => 'product_cat',
        'hide_empty' => false,
    ));

    if ($categories) {
        ?>
<form method="post" action="">
    <label for="category_to_get_products">Select Category:</label>
    <select name="category_to_get_products" id="category_to_get_products">
        <?php
                foreach ($categories as $category) {
                    echo '<option value="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</option>';
                }
                ?>
    </select>
    <button class="button-primary" type="submit">Get Products</button>
</form>
<?php
    } else {
        echo '<p>No product categories found</p>';
    }

    return ob_get_clean();
}
add_shortcode('custom_get_products_form', 'custom_get_products_form');

// Add admin menu
function custom_products_menu() {
    add_menu_page(
        'Custom Products Settings',   // Page title
        'Custom Products',            // Menu title
        'manage_options',             // Capability required to access the menu
        'custom-products-settings',   // Menu slug (unique identifier)
        'custom_products_settings_page', // Callback function to display the page content
        'dashicons-cart',             // Icon for the menu item (you can change this icon)
        30                            // Position in the menu
    );
}
add_action('admin_menu', 'custom_products_menu');

// Function to handle AJAX request and add a new form
function custom_products_add_new_form() {
    ob_start();

    // Counter to keep track of the form number
    $counter = isset($_POST['counter']) ? absint($_POST['counter']) : 1;

    // Output the new form
    custom_products_settings_page($counter);

    $output = ob_get_clean();

    // Return the response
    wp_send_json_success($output);
}
add_action('wp_ajax_custom_products_add_new_form', 'custom_products_add_new_form');




// Adjust the settings page callback function to handle different forms
function custom_products_settings_page($counter = 1) {
    // Extract the page number from the menu slug
    $page_number = $counter;
    
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['custom_products_settings_submit'])) {
        // Process and save form data
        $category_slug = sanitize_text_field($_POST['category_slug']);
        $products_per_page = absint($_POST['products_per_page']);

        // Save the form data to options
        update_option('custom_products_default_category', $category_slug);
        update_option('custom_products_products_per_page', $products_per_page);

        echo '<div class="updated"><p>Settings saved!</p></div>';
    }

    // Get saved values
    $default_category = get_option('custom_products_default_category', '');
    $products_per_page = get_option('custom_products_products_per_page', 10);

    ?>




<div class="wrap">
    <h1>Custom Products Settings <?php echo $page_number; ?></h1>
    <!-- Add New button -->
    <button class="button" id="add-new-form-button">Add New</button>
    <!-- Container for dynamically created forms -->
    <div id="custom-products-forms-container"></div>
    <form method="post" action="">
        <table class="form-table">
            <tr>
                <th scope="row"><label for="category_slug">Default Category:</label></th>
                <td>
                    <select name="category_slug" id="category_slug">
                        <?php
                        $categories = get_terms(array(
                            'taxonomy'   => 'product_cat',
                            'hide_empty' => false,
                        ));

                        foreach ($categories as $category) {
                            $selected = ($category->slug === $default_category) ? 'selected' : '';
                            echo '<option value="' . esc_attr($category->slug) . '" ' . $selected . '>' . esc_html($category->name) . '</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="products_per_page">Products Per Page:</label></th>
                <td><input type="number" name="products_per_page" id="products_per_page" value="<?php echo esc_attr($products_per_page); ?>" min="1"></td>
            </tr>
        </table>

        <p class="submit">
            <button class="button-primary" type="submit" name="custom_products_settings_submit">Save Settings</button>
        </p>
    </form>

    <h2>Saved Settings</h2>
    <table class="widefat">
        <thead>
            <tr>
                <th>Setting</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Products</td>
                <td>
                    <div style="display: flex; align-items: center;">
                        <?php
                        $args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => $products_per_page,
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field'    => 'slug',
                                    'terms'    => $default_category,
                                ),
                            ),
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                // Display product information here
                                echo '<div style="margin-right: 20px;">';
                                echo get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                                echo '<h3>' . get_the_title() . '</h3>';
                                echo '<p>' . wc_price(get_post_meta(get_the_ID(), '_price', true)) . '</p>';
                                echo '</div>';
                            }
                            wp_reset_postdata();
                        } else {
                            echo 'No products found';
                        }
                        ?>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>



<?php
}