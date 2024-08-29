<?php   
/*
Template Name: News & Events Page
*/

get_header();
get_template_part('parts/page-title');
?>

<!-- blog-classic -->
<div class="events-section style-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-sm-12 col-xs-12">
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array( 
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'paged' => $paged,
                        'order' => 'DESC',
                        'orderby' => 'date',
                        'category_name' => 'news,events',
                    );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ) {
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="single-item">
                                <div class="img-box col-lg-5">
                                    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                                        <?php
                                            the_post_thumbnail('medium_large');
                                        ?>
                                    </a>   
                                    <div class="label-nir"><?php
                                        $categories = get_the_category( $post->ID );
                                        echo $categories['0']->name; ?>
                                    </div>
                                    <div class="date-box">
                                        <h4><?php echo get_the_date( 'j' ); ?><br></h4>
                                        <p><?php echo get_the_date( 'M, Y' ); ?></p>
                                    </div>
                                </div>
                                <div class="text-box col-lg-7">
                                    <h3>
                                        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <p> <span><i class="fa fa-map-marker" aria-hidden="true"></i>India</span></p>
                                    <?php echo substr( get_the_excerpt(), 0, 120 ); ?>
                                    <a title="<?php the_title(); ?>" class="redmor" href="<?php the_permalink(); ?>">Know More</a>
                                </div>
                            </div><?php
                        endwhile;
                    } else { ?>
                        <h4>No Posts Found.</h4><?php
                    } ?>
                    <div class="pagination-wrapper centred">
                        <ul class="pagination">
                            <li>
                                <?php
                                    echo paginate_links(array(
                                        'total' => $loop->max_num_pages,
                                        'current' => max(1, get_query_var('paged')),
                                        'prev_text' => '&laquo;',
                                        'next_text' => '&raquo;',
                                    ));
                                ?>
                            </li>
                        </ul>
                    </div><?php
                wp_reset_postdata(); ?>
            </div>
            <div class="col-lg-3 col-sm-8 col-xs-12">
                <aside class="sidebar">
                    <div class="sidebar-widget sidebar-blog-category">
                        <div class="sidebar-title">
                            <h2>Categories</h2>
                        </div>
                        <ul class="blog-cat">
                            <li><a href="#"> News </a></li>	
                            <li><a href="#"> Events </a></li>	
						</ul>
                    </div>           
                </aside>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>