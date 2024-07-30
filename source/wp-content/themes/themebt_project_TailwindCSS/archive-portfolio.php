<?php get_header(); ?>

<div class="container mx-auto my-8">
    <h1 class="text-3xl font-bold mb-4">Portfolio</h1>

    <div class="grid grid-cols-2 gap-4">
        <?php
        $portfolio_query = new WP_Query( array(
            'post_type' => 'portfolio',
            'posts_per_page' => -1,
        ) );

        if ( $portfolio_query->have_posts() ) :
            while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
        ?>
            <div class="border p-4">
                <h2 class="text-xl font-bold mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_post_thumbnail( 'medium', array( 'class' => 'mb-2' ) ); ?>
                <p><?php the_excerpt(); ?></p>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No portfolio items found.</p>';
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
