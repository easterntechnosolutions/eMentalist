<?php 
/*
 * Template Name: Brochures Page
 */
?>
<?php get_header(); 
get_template_part('parts/page-title'); 
?>

  <!--Home 1 Section 4-->
<section class="position-relative overflow-hidden box-project">
    <div class="box-project-inner">
        <div class="container" data-aos="fade-up">
            <div class="row " data-masonry='{"percentPosition": true }' data-aos="fade-up">
                
                <?php
                $args = array(
                    'post_type' => 'brochure',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC',
                );
                $brochures = new WP_Query($args);
                if ($brochures->have_posts()) :
                    while ($brochures->have_posts()) : $brochures->the_post();
                        $brochure_image = get_the_post_thumbnail_url();
                        $brochure_name = get_the_title();
                        $brochure_link = get_the_permalink(get_the_ID());

                        if ($brochure_image) {
                            ?>
                            <div class="col-lg-4">
                                <div class="card-project">
                                    <div class="card-image hover-zoom-in">
                                        <a href="<?php echo esc_url($brochure_link); ?>" target="_blank">
                                            <img src="<?php echo esc_url($brochure_image); ?>" alt="<?php echo esc_attr($brochure_name); ?>" class="wow img-custom-anim-top" />
                                        </a>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-info-left">
                                            <h6><?php echo esc_html($brochure_name); ?></h6>
                                        </div>
                                        <div class="card-info-right">
                                            <a href="<?php echo esc_url($brochure_link); ?>" target="_blank">
                                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.8607 1.03121L7.62381 0.347327C7.22746 0.289877 6.85792 0.564616 6.79854 0.961032C6.73912 1.3574 7.01224 1.72535 7.40865 1.78276C7.44561 1.7881 7.48295 1.79064 7.52028 1.79022L16.0114 2.36261L0.32817 16.0137C0.0252356 16.2774 -0.00764104 16.7356 0.254784 17.037C0.51721 17.3385 0.975513 17.3691 1.27845 17.1054L16.9617 3.45435L16.353 11.9378C16.2936 12.3342 16.5667 12.7022 16.9631 12.7596C17.3595 12.817 17.729 12.5423 17.7884 12.1459C17.7939 12.1089 17.7966 12.0716 17.7964 12.0343L18.5307 1.80078C18.5581 1.40285 18.2588 1.05899 17.8607 1.03121Z" fill="" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
                
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
