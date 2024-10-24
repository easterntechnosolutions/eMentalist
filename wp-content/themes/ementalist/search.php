<?php //get_template_part('parts/posts'); ?>

<?php get_header();  ?>

<div class="search-results">
    <?php if ( have_posts() ) : ?>
        <div class="grid-container">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="grid-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no results found.' ); ?></p>
    <?php endif; ?>
</div>


<?php get_footer(); ?>