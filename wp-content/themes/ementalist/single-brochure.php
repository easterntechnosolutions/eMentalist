<?php get_header(); ?>


<?php 
$brochure_shortcode = get_field('brochure_shortcode', get_the_ID());
echo do_shortcode($brochure_shortcode); 
?>

<?php get_footer(); ?>
