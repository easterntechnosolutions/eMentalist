<?php   
	get_header();
	get_template_part('parts/page-title');
?>
 <!-- Blog Section 2 -->
 <section class="box-section box-contact-section-2">
    <div class="container" data-aos="fade-up">
        <div class="blog-main-content">
            <div class="blog-content">
                <div class="blog-detail">
                    <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                        ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                        <?php  endwhile;
                    endif;
                    ?>

                        <div class="post-cont"> 
                            <a href="#"><span class="tag"><?php
                                $post_categories = wp_get_post_terms(get_the_ID(), 'category');
                                if (!empty($post_categories)) {
                                    $categories_list = array_map(function($term) {
                                        return $term->name;
                                    }, $post_categories);
                                    echo implode(', ', $categories_list);
                                }
                                ?> </span></a> <i>|</i> <span class="date"><?php echo get_the_date(); ?></span>
                            <h4><?php the_title();?></h4>
                           
                        </div>

                    <p><?php the_content(); ?></p>
                </div>
                <div class="box-pagination d-flex align-items-center justify-content-between">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>
                    <?php if (!empty($prev_post)) : ?>
                        <div class="page-left">
                            <a href="<?php echo get_permalink($prev_post); ?>">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="29" height="29" rx="14.5" fill="white" stroke="#E4E4E4" />
                                    <path d="M12.0469 19.0156L8.10938 15.0781C8.02734 14.9961 8 14.8867 8 14.75C8 14.6406 8.02734 14.5312 8.10938 14.4492L12.0469 10.5117C12.2109 10.3477 12.5117 10.3477 12.6758 10.5117C12.8398 10.6758 12.8398 10.9766 12.6758 11.1406L9.47656 14.3125H21.5625C21.7812 14.3125 22 14.5312 22 14.75C22 14.9961 21.7812 15.1875 21.5625 15.1875H9.47656L12.6758 18.3867C12.8398 18.5508 12.8398 18.8516 12.6758 19.0156C12.5117 19.1797 12.2109 19.1797 12.0469 19.0156Z" fill="#222222" />
                                </svg>
                                Prev Post
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($next_post)) : ?>
                        <div class="page-right">
                            <a href="<?php echo get_permalink($next_post); ?>">
                                Next Post
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="29" height="29" rx="14.5" fill="white" stroke="#E4E4E4" />
                                    <path d="M17.9258 10.5117L21.8633 14.4492C21.9453 14.5312 22 14.6406 22 14.75C22 14.832 21.9453 14.9688 21.8633 15.0508L17.9258 18.9883C17.7617 19.1523 17.4609 19.1523 17.2969 18.9883C17.1328 18.8242 17.1328 18.5508 17.2969 18.3594L20.4961 15.1875H8.4375C8.19141 15.1875 8 14.9688 8 14.75C8 14.5312 8.19141 14.3125 8.4375 14.3125H20.4961L17.2969 11.1406C17.1328 10.9766 17.1328 10.6758 17.2969 10.5117C17.4609 10.3477 17.7617 10.3477 17.9258 10.5117Z" fill="#222222" />
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="box-feedbacks">
                    <h4 class="paragraph-rubik-md-b mb-4">User Feedbacks <span class="gray-1500">(06)</span></h4>
                    <?php
                    // Display WordPress comments
                    comments_template();
                    ?>
                </div>
            </div>            
        </div>
    </div>
</section>

<?php get_footer(); ?>