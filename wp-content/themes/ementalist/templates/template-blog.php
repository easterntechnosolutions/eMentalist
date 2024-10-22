<?php   
/*
Template Name: Blog
*/

get_header();
get_template_part('parts/page-title');
?>

<?php
// Get all categories
$categories = get_terms(array(
    'taxonomy' => 'category',
    'hide_empty' => false, // Show even empty categories
));

// Check if there are categories and display clickable names
if (!empty($categories) && !is_wp_error($categories)) {
    $category_links = array();

    foreach ($categories as $category) {
        // Create a clickable link for each category
        $category_links[] = '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
    }

    // Output clickable category names in a single line, separated by commas
    echo implode(', ', $category_links);
}
?>

<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                // Get all categories
               // $categories = get_categories();

                // Loop through each category
                foreach ($categories as $category) {
                    // echo '<h2>' . $category->name . '</h2>';

                    // Query posts for the current category
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'cat' => $category->term_id,
                    );
                    $query = new WP_Query($args);

                    // Check if there are posts
                    if ($query->have_posts()) {
                        echo '<div class="row">';
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <div class="col-md-4">
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="post-thumbnail">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="entry-header">
                                        <p class="entry-author"><?php the_author(); ?></p>
                                        <p class="entry-date"><?php echo get_the_date('d M'); ?></p>
                                        <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    </div>
                                    <div class="entry-content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="entry-footer">
                                        <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                                    </div>
                                </article>
                            </div>
                            <?php
                        }
                        echo '</div>';
                    } else {
                        echo '<p>No posts found in this category.</p>';
                    }
                    // Reset post data
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php echo do_shortcode('[ivory-search id="46" title="Custom Search Form"]'); ?>

<?php get_footer(); ?>