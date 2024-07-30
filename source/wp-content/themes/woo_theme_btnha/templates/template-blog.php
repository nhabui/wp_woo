<?php
/*
Template Name: Blog Template
*/

get_header();
?>

<?php do_action('custom_breadcrumb'); ?>

<div class="blog-main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
    <?php get_sidebar('shop'); ?>
</div>

            <div class="col-lg-9 order-1 order-lg-2">
                <div class="blog-wrapper-inner">
                    <div class="row">
                        <?php
            // Custom query to get blog posts
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 10,
                'post_status'    => 'publish',
                'has_excerpt'    => true,
            );
            $query = new WP_Query($args);

            // Check if there are posts
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                        
            ?>

                        <div class="col-lg-6 col-md-6">
                            <div class="blog-item mb-26">
                                <div class="blog-thumb img-full fix">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('nha-custom-thumbnail', array('class' => 'img-responsive'));
                                    } else {
                                        echo '<img src="' . get_template_directory_uri() . '/assets/img/default-thumbnail.jpg" alt="Default Thumbnail">';
                                    }
                                    ?>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="blog-meta">
                                        <span class="posted-author"><?php the_author(); ?></span>
                                        <span class="post-date"><?php echo get_the_date(); ?></span>
                                    </div>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <a href="<?php the_permalink(); ?>">read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <?php
                endwhile;
                // Restore global post data
                wp_reset_postdata();
            else :
            ?>
                        <div class="col-lg-9 order-1 order-lg-2">
                            <div class="blog-wrapper-inner">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>No posts found</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
            endif;
            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Move wp_reset_postdata outside the loop
wp_reset_postdata();
get_footer();
?>