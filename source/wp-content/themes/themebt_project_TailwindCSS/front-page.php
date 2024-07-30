<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'mb-8' ); ?>>
            <h2 class="text-3xl font-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="mt-4">
                <?php the_excerpt(); ?>
            </div>
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <p>No posts found.</p>
<?php endif; ?>

<?php get_footer(); ?>
