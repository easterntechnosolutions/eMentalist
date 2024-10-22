<?php   
	get_header();
	get_template_part('parts/page-title');
?>

<section class="single-post-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                            <div class="entry-meta">
                                <span class="posted-on">Posted on <?php the_date(); ?></span>
                                <span class="byline"> by <?php the_author(); ?></span>
                            </div>
						</div>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>