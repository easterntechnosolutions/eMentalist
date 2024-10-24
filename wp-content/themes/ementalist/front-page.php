<?php
/**
 * The front-page.php corresponds to the "static front page"
 * when setting static front page in Settings > Reading 
 */
get_header();
?>

<?php 
// if( get_option('page_on_front') == "" || get_option('page_on_front') == "0" ) {
//     get_template_part('parts/posts');
// } else {
//     get_template_part('parts/pages');
// }
?>

 <!--Home 1 Section 3-->
 <section class="position-relative overflow-hidden box-process">
            <div class="container" data-aos="fade-up">
                <div class="row position-relative align-items-end">
                    <div class="col-lg-7">
                        <h6 class="title-line color-white mb-30" data-aos="fade-up">Our PROCESS</h6>
                        <h3 class="heading-3xl color-white" data-aos="fade-up">
                            SMART COMPANIES OUTSOURCE.
                        </h3>
                    </div>
                    <div class="col-lg-5">
                        <p class="paragraph-base gray-50" data-aos="fade-up"></p>
                    </div>
                </div>
                <div class="box-list-process">
                    <div class="item-process" data-aos="fade-up" data-aos-duration="0">
                        <div class="card-process">
                            <div class="card-icon">
                                <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/process.png" alt="Vatech" /></div>
                                <div class="number">01</div>
                            </div>
                            <div class="card-info">
                                <h5 class="heading-lg color-white">We impart Value</h5>
                                <p class="button-sm desc-process">Higher value at a lesser cost.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-process" data-aos="fade-up" data-aos-duration="400">
                        <div class="card-process">
                            <div class="card-icon">
                                <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/process2.png" alt="Vatech" /></div>
                                <div class="number">02</div>
                            </div>
                            <div class="card-info">
                                <h5 class="heading-lg color-white">We deliver with Intensity</h5>
                                <p class="button-sm desc-process">Achievements that outperform all standards.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-process" data-aos="fade-up" data-aos-duration="800">
                        <div class="card-process">
                            <div class="card-icon">
                                <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/process3.png" alt="Vatech" /></div>
                                <div class="number">03</div>
                            </div>
                            <div class="card-info">
                                <h5 class="heading-lg color-white">We create & build Relations</h5>
                                <p class="button-sm desc-process">All our relationships are on an unflinching base of trust.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-process" data-aos="fade-up" data-aos-duration="0">
                        <div class="card-process">
                            <div class="card-icon">
                                <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/process4.png" alt="Vatech" /></div>
                                <div class="number">04</div>
                            </div>
                            <div class="card-info">
                                <h5 class="heading-lg color-white">We increase Productivity</h5>
                                <p class="button-sm desc-process">The best form of performance every time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-process" data-aos="fade-up" data-aos-duration="400">
                        <div class="card-process">
                            <div class="card-icon">
                                <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/process5.png" alt="Vatech" /></div>
                                <div class="number">05</div>
                            </div>
                            <div class="card-info">
                                <h5 class="heading-lg color-white">We facilitate Transformation</h5>
                                <p class="button-sm desc-process">Constant evolution through innovation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-process" data-aos="fade-up" data-aos-duration="800">
                        <div class="card-process">
                            <div class="card-icon">
                                <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/process6.png" alt="Vatech" /></div>
                                <div class="number">06</div>
                            </div>
                            <div class="card-info">
                                <h5 class="heading-lg color-white">We adapt to changing Dynamics</h5>
                                <p class="button-sm desc-process">The ability to learn, re-learn & unlearn.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


 <!--Home 4 Section 10 -->
 <section class="position-relative overflow-hidden box-blog-4">
    <div class="container" data-aos="fade-up">
        <div class="row position-relative align-items-end">
            <div class="col-lg-9 mb-4" data-aos="fade-up">
                <h6 class="heading-18-fitree primary-500 text-uppercase mb-2">Latest Blog</h6>
                <h3 class="heading-48-fitree secondery-500">
                    Our Latest Trending<br class="d-none d-lg-block" />
                    Blogs & News
                </h3>
            </div>
            <div class="col-lg-3 mb-4 text-center text-lg-end" data-aos="fade-up">
                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Blog' ) ) ); ?>" class="btn btn-primary-square bg-secondery-500">Explore More</a>
            </div>
        </div>
        <div class="row position-relative mt-60" data-aos="fade-up">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'DESC',
                'orderby' => 'date'
            );
            $latest_posts = new WP_Query($args);
            if ($latest_posts->have_posts()) :
                while ($latest_posts->have_posts()) : $latest_posts->the_post();
            ?>
                <div class="col-lg-4">
                    <div class="card-blog-6">
                        <div class="card-image">
                            <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium_large');?></a>
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) :
                                $first_category = $categories[0];
                            ?>
                                <a href="<?php echo esc_url(get_category_link($first_category->term_id)); ?>" class="post-cat"><?php echo esc_html($first_category->name); ?></a>
                            <?php endif; ?>
                        </div>
                        <div class="card-info">
                            <div class="card-meta">
                                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="by-user">By <?php the_author(); ?></a>
                            </div>
                            <div class="card-title">
                                <a href="<?php the_permalink(); ?>" class="link-title"><?php the_title(); ?></a>
                                <a href="<?php the_permalink(); ?>" class="link-readmore">
                                    Read More
                                    <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 14C16 13.258 16.733 12.15 17.475 11.22C18.429 10.02 19.569 8.973 20.876 8.174C21.856 7.575 23.044 7 24 7M24 7C23.044 7 21.855 6.425 20.876 5.826C19.569 5.026 18.429 3.979 17.475 2.781C16.733 1.85 16 0.74 16 -3.49691e-07M24 7L3.0598e-07 7" stroke="" stroke-width="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
        
<!--Home 4 Section 4-->
<section class="position-relative overflow-hidden box-client-logo awards-recognitions">
    <div class="container">
        <h2 class="heading-48-fitree color-black mb-30">
            AWARDS AND RECOGNITIONS
        </h2>
        <div class="box-logos-partner box-logos-partner-5-col">
            <div class="item-partner awards-images">
                <img src="<?php echo get_template_directory_uri(); ?>/images/awards/27001.png" alt="27001" />
            </div>
            <div class="item-partner awards-images">
                <img src="<?php echo get_template_directory_uri(); ?>/images/awards/GDPR-new.png" alt="Vatech" />
            </div>
            <div class="item-partner awards-images">
                <img src="<?php echo get_template_directory_uri(); ?>/images/awards/sis_cert_new.png" alt="Vatech" />
            </div>
            <div class="item-partner awards-images">
                <img src="<?php echo get_template_directory_uri(); ?>/images/awards/Untitled-1.png" alt="Vatech" />
            </div>
            <div class="item-partner awards-images">
                <img src="<?php echo get_template_directory_uri(); ?>/images/awards/bpo.svg" alt="Vatech" />
            </div>
            <div class="item-partner awards-images">
                <img src="<?php echo get_template_directory_uri(); ?>/images/awards/cyberessentials_certification-mark_colour-.png" alt="Vatech" />
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
