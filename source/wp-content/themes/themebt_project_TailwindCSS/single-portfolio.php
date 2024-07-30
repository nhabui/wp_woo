<?php get_header(); ?>

<div class="container mx-auto my-8">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'mb-8' ); ?>>
                <h2 class="text-3xl font-bold"><?php the_title(); ?></h2>
                <div class="mt-4">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No content found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
