<?php
/*
 * Template Name: Custom WooCommerce Products
 * Description: Custom template for displaying WooCommerce products using Tailwind CSS.
 */

get_header();
?>

<div class="container mx-auto">
    <div class="grid gap-8 grid-cols-3">
        <h2 class="text-3xl font-bold text-gray-900 mb-6 col-span-3">Featured Products</h2>
        
        <div class="container text-center">
            <div class="row">
            <?php
            // Hook into WooCommerce actions to modify the product display
            do_action('custom_before_product_loop');

            // Define arguments for WooCommerce product query
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 8, // Number of products to display
                'orderby' => 'date',
                'order' => 'DESC',
            );

            $products = new WP_Query($args);

            if ($products->have_posts()) :
                while ($products->have_posts()) :
                    $products->the_post();
            ?>
                    <div class="col">
                        <a href="<?php the_permalink(); ?>" class="block">
                            <?php the_post_thumbnail('medium', ['class' => 'w-full h-auto']); ?>
                        </a>
                        <div class="p-4">
                            <?php
                            // Hook into WooCommerce actions to modify product details
                            do_action('custom_product_details');
                            ?>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No products found</p>';
            endif;
            ?>
            </div>    
        </div>
    </div>
</div>

<?php get_footer(); ?>
