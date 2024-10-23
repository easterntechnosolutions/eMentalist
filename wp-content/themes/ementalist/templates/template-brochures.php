<?php 
/*
 * Template Name: Brochures Page
 */
?>
<?php get_header(); 
get_template_part('parts/page-title'); 
?>

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
        $brochure_shortcode = get_field('brochure_shortcode', get_the_ID());
        if ($brochure_image && $brochure_shortcode) {
            echo '<a href="' . $brochure_shortcode . '" target="_blank"><img src="' . $brochure_image . '" alt="' . get_the_title() . '"></a>';
        }
    endwhile;
endif;
wp_reset_postdata();
?>


<?php get_footer(); ?>
