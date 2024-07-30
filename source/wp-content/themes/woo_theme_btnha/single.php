<?php
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
                        <div class="col-lg-12">
                            <?php
                            // Check if there are posts
                            if (have_posts()) :
                                while (have_posts()) : the_post();
                            ?>
                                    <h2><?php the_title(); ?></h2>
                                    <div class="blog-meta">
                                        <span class="posted-author"><?php the_author(); ?></span>
                                        <span class="post-date"><?php echo get_the_date(); ?></span>
                                    </div>
                                    <div class="entry-content">
                                        <?php the_content(); ?>
                                    </div>
                            <?php
                                endwhile;
                            else :
                            ?>
                                <p>No posts found</p>
                            <?php
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
