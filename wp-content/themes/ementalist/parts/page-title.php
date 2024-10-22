
<?php
	global $post;
	if (  get_field( 'page_title_section', $post->ID ) ) {
		$feaured_image_array = get_field( 'background_image', $post->ID  );
		$feaured_image = $feaured_image_array['url'];
	} else {
		$feaured_image = get_stylesheet_directory_uri() . "/images/background/17.jpg";
	}
?>

<!-- Page Title -->
<section class="box-faq-single-banner" style='background-image:url("<?php echo $feaured_image; ?>"); background-position:top;background-size:100%;'>
	<div class="box-faq-single-banner-inner">
        <div class="container">
            <?php
            if ( is_front_page() && is_home() ) {
                echo "<h2 class='display-ag-2xl color-white'>";
            } else {
                echo "<h1 class='display-ag-2xl color-white'>";
            }

            if (is_blog()) :
                if (is_category()) :
                    single_cat_title("Category: ");
                elseif (is_tag()) :
                    single_tag_title("Tag: ");
                elseif (is_day()) : 
                    echo "Day of : " . get_the_time('l, F j, Y');
                elseif (is_month()) :
                    echo "Month of : " . get_the_time('F Y');
                elseif (is_year()) :
                    echo "Year of : " . get_the_time('Y');
                elseif (is_single()) :
                    if ( get_field( 'page_title_section', $post->ID ) ) {
                        if ( get_field('custom_page_title', $post->ID ) ) {
                            echo get_field('custom_page_title', $post->ID );
                        } else {
                            echo get_the_title();
                        }
                    } else {
                        echo get_the_title( get_option( 'page_for_posts' ) );
                    }
                else:
                    echo get_the_title( get_option( 'page_for_posts' ) );
                endif;
            elseif (is_post_type_archive()) :
                post_type_archive_title();
            elseif (is_tax()) :
                global $wp_query;
                $term = $wp_query->get_queried_object();
                $title = $term->name; 
                echo $title;
            elseif (is_404()):
                echo "Page not found";
            elseif (is_search()):
                echo "Search results";
            elseif (is_author()) : 
                global $post;
                $author_id = $post->post_author;
                echo "Posts by " . get_the_author_meta( 'display_name', $author_id );
            else  :
                if ( get_field( 'page_title_section', $post->ID ) ) {
                    if ( get_field('custom_page_title', $post->ID ) ) {
                        echo get_field('custom_page_title', $post->ID );
                    } else {
                        echo get_the_title();
                    }
                } else {
                    echo get_the_title();
                }
            endif;

            if ( is_front_page() && is_home() ) {
                echo "</h2>";
            } else {
                echo "</h1>";
            }
            ?>
            <div class="box-breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo home_url(); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span><?php echo get_the_title(); ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title -->
