<?php   
	get_header();
	get_template_part('parts/page-title');
?>

<!-- Blog Section 2 -->
<section class="box-section box-contact-section-2">
            <div class="container" data-aos="fade-up">
                <div class="blog-main-content">
                    <div class="blog-content-left">
                        <div class="">
                            <div class="row">
                            <?php
                                    // Get the current category
                                    $category = get_queried_object();
                                    // Get all posts in the current category
                                    $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => -1,
                                        'cat' => $category->term_id
                                    );
                                    $query = new WP_Query($args);
                                    // Check if there are posts
                                    if ($query->have_posts()) {
                                    
                                        while ($query->have_posts()) {
                                            $query->the_post();
                                            ?>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="card-blog-7">
                                                        <div class="card-image">
                                                            <a href="<?php the_permalink(); ?>">
                                                                <?php 
                                                                if (has_post_thumbnail()) {
                                                                    the_post_thumbnail('medium', array(
                                                                        'alt' => get_the_title(),
                                                                        'title' => get_the_title(),
                                                                        'style' => 'width:100%; height:auto;'
                                                                    ));
                                                                } else {
                                                                    echo '<img src="' . get_template_directory_uri() . '/assets/imgs/pages/blog/blog.png" alt="' . get_the_title() . '" />';
                                                                }
                                                                ?>
                                                            </a>
                                                        </div>
                                                        <div class="card-info">
                                                            <div class="text-end mb-2">
                                                                <span class="post-date sub-heading-ag-sm d-inline-block"><?php echo get_the_date('M d'); ?></span>
                                                            </div>
                                                            <a href="<?php the_permalink(); ?>" class="heading-md"><?php the_title(); ?></a>
                                                            <a href="<?php the_permalink(); ?>" class="link-more button-ag-bold">
                                                                Discover More
                                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.8125 5.75C11.8125 6.24219 11.4023 6.65234 10.9375 6.65234H7V10.5898C7 11.0547 6.58984 11.4375 6.125 11.4375C5.63281 11.4375 5.25 11.0547 5.25 10.5898V6.65234H1.3125C0.820312 6.65234 0.4375 6.24219 0.4375 5.75C0.4375 5.28516 0.820312 4.90234 1.3125 4.90234H5.25V0.964844C5.25 0.472656 5.63281 0.0625 6.125 0.0625C6.58984 0.0625 7 0.472656 7 0.964844V4.90234H10.9375C11.4023 4.875 11.8125 5.28516 11.8125 5.75Z" fill="" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                        }
                                    
                                    } else {
                                        echo '<p>No posts found. Please go back.</p>';
                                    }
                                    // Reset post data
                                    wp_reset_postdata();
                                    ?>
                               
                            </div>
                            <div class="box-paginations">
                                <nav>
                                    <ul class="pagination">
                                        <?php
                                        $total_pages = $query->max_num_pages;
                                        $current_page = max(1, get_query_var('paged'));

                                        if ($total_pages > 1) {
                                            // Previous page
                                            if ($current_page > 1) {
                                                echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($current_page - 1) . '">
                                                    <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.68269 15.811C7.6281 15.871 7.56286 15.9186 7.49083 15.951C7.4188 15.9835 7.34144 16.0001 7.26331 16C7.18518 15.9999 7.10787 15.983 7.03593 15.9503C6.96399 15.9176 6.89889 15.8698 6.84448 15.8097L0.182493 8.48072C0.065486 8.35201 9.53674e-07 8.17939 9.53674e-07 7.99965C9.53674e-07 7.81992 0.065486 7.6473 0.182493 7.51859L6.84448 0.189653C6.89898 0.129633 6.96415 0.0819283 7.03613 0.0493546C7.10811 0.0167809 7.18545 0 7.26358 0C7.34171 0 7.41905 0.0167809 7.49103 0.0493546C7.56302 0.0819283 7.62818 0.129633 7.68269 0.189653C7.79482 0.312741 7.8576 0.477977 7.8576 0.650039C7.8576 0.822101 7.79482 0.987335 7.68269 1.11042L1.41796 7.99965L7.68269 14.8916C7.79444 15.0147 7.85697 15.1796 7.85697 15.3513C7.85697 15.5231 7.79444 15.688 7.68269 15.811ZM12.8251 15.811C12.7705 15.871 12.7053 15.9186 12.6332 15.951C12.5612 15.9835 12.4838 16.0001 12.4057 16C12.3276 15.9999 12.2503 15.983 12.1783 15.9503C12.1064 15.9176 12.0413 15.8698 11.9869 15.8097L5.3249 8.48072C5.20789 8.35201 5.1424 8.17939 5.1424 7.99965C5.1424 7.81992 5.20789 7.6473 5.3249 7.51859L11.9869 0.189653C12.0414 0.129633 12.1066 0.0819283 12.1785 0.0493546C12.2505 0.0167809 12.3279 0 12.406 0C12.4841 0 12.5615 0.0167809 12.6334 0.0493546C12.7054 0.0819283 12.7706 0.129633 12.8251 0.189653C12.9372 0.312741 13 0.477977 13 0.650039C13 0.822101 12.9372 0.987335 12.8251 1.11042L6.56036 7.99965L12.8251 14.8916C12.9368 15.0147 12.9994 15.1796 12.9994 15.3513C12.9994 15.5231 12.9368 15.688 12.8251 15.811Z" fill="" />
                                                                </svg>
                                                            </a></li>';
                                            }

                                            // Page numbers
                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                if ($i == $current_page) {
                                                    echo '<li class="page-item active"><span class="page-link">' . $i . '</span></li>';
                                                } else {
                                                    echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
                                                }
                                            }

                                            // Next page
                                            if ($current_page < $total_pages) {
                                                echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($current_page + 1) . '">
                                                    <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.31731 15.811C5.3719 15.871 5.43714 15.9186 5.50917 15.951C5.5812 15.9835 5.65856 16.0001 5.73669 16C5.81482 15.9999 5.89214 15.983 5.96407 15.9503C6.03601 15.9176 6.10111 15.8698 6.15552 15.8097L12.8175 8.48072C12.9345 8.35201 13 8.17939 13 7.99965C13 7.81992 12.9345 7.6473 12.8175 7.51859L6.15552 0.189653C6.10102 0.129633 6.03585 0.081928 5.96387 0.0493546C5.89189 0.0167811 5.81455 0 5.73642 0C5.65829 0 5.58095 0.0167811 5.50897 0.0493546C5.43698 0.081928 5.37182 0.129633 5.31731 0.189653C5.20518 0.312741 5.1424 0.477977 5.1424 0.650039C5.1424 0.8221 5.20518 0.987335 5.31731 1.11042L11.582 7.99965L5.31731 14.8916C5.20556 15.0147 5.14303 15.1796 5.14303 15.3513C5.14303 15.5231 5.20556 15.688 5.31731 15.811ZM0.174909 15.811C0.2295 15.871 0.294735 15.9186 0.366764 15.951C0.438792 15.9835 0.516156 16.0001 0.594286 16C0.672417 15.9999 0.749733 15.983 0.821668 15.9503C0.893604 15.9176 0.958702 15.8698 1.01312 15.8097L7.6751 8.48072C7.79211 8.35201 7.8576 8.17939 7.8576 7.99965C7.8576 7.81992 7.79211 7.6473 7.6751 7.51859L1.01312 0.189653C0.958617 0.129633 0.89345 0.081928 0.821468 0.0493546C0.749485 0.0167811 0.672146 0 0.594015 0C0.515884 0 0.438545 0.0167811 0.366563 0.0493546C0.29458 0.081928 0.229414 0.129633 0.174909 0.189653C0.0627762 0.312741 0 0.477977 0 0.650039C0 0.8221 0.0627762 0.987335 0.174909 1.11042L6.43964 7.99965L0.174909 14.8916C0.0631609 15.0147 0.000626815 15.1796 0.000626815 15.3513C0.000626815 15.5231 0.0631609 15.688 0.174909 15.811Z" fill="" />
                                                                </svg>
                                                            </a></li>';
                                            }
                                        }
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content-right">
                        <div class="sidebar-border border-10 bdr-5 p-4 mb-4">
                            <div class="form-search-sidebar">
                                <?php dynamic_sidebar('footer-4'); ?>
                            </div>
                        </div>
                        <div class="sidebar-border border-10 bdr-5 p-4 mb-4">
                            <h4 class="sub-heading-ag-xl mb-2">Recent post</h4>
                            <ul class="recent-news-list-md">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'cat' => $category->term_id
                                );
                                $recent_posts = new WP_Query($args);
                                
                                if ($recent_posts->have_posts()) :
                                    while ($recent_posts->have_posts()) : $recent_posts->the_post();
                                ?>
                                <li>
                                    <div class="news-image">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('alt' => get_the_title())); ?></a>
                                    </div>
                                    <div class="news-info">
                                        <div class="news-postdate">
                                            <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.5625 2H6.9375V1.0625C6.9375 0.757812 7.17188 0.5 7.5 0.5C7.80469 0.5 8.0625 0.757812 8.0625 1.0625V2H9C9.82031 2 10.5 2.67969 10.5 3.5V11C10.5 11.8438 9.82031 12.5 9 12.5H1.5C0.65625 12.5 0 11.8438 0 11V3.5C0 2.67969 0.65625 2 1.5 2H2.4375V1.0625C2.4375 0.757812 2.67188 0.5 3 0.5C3.30469 0.5 3.5625 0.757812 3.5625 1.0625V2ZM1.125 6.3125H3V5H1.125V6.3125ZM1.125 7.4375V8.9375H3V7.4375H1.125ZM4.125 7.4375V8.9375H6.375V7.4375H4.125ZM7.5 7.4375V8.9375H9.375V7.4375H7.5ZM9.375 5H7.5V6.3125H9.375V5ZM9.375 10.0625H7.5V11.375H9C9.1875 11.375 9.375 11.2109 9.375 11V10.0625ZM6.375 10.0625H4.125V11.375H6.375V10.0625ZM3 10.0625H1.125V11C1.125 11.2109 1.28906 11.375 1.5 11.375H3V10.0625ZM6.375 5H4.125V6.3125H6.375V5Z" fill=""></path>
                                            </svg>
                                            <span class="paragraph-rubik-r-sm"><?php echo get_the_date('F j, Y'); ?></span>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="sub-heading-ag-lg news-link"><?php the_title(); ?></a>
                                    </div>
                                </li>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo '<li>No recent posts found.</li>';
                                endif;
                                ?>
                            </ul>
                        </div>
                        <div class="sidebar-border border-10 bdr-5 p-4 mb-4">
                            <h4 class="sub-heading-ag-xl mb-2">Categories</h4>
                            <div class="content-sidebar">
                                <ul>
                                    <?php
                                    $categories = get_categories(array(
                                        'orderby' => 'name',
                                        'order'   => 'ASC'
                                    ));
                                    
                                    foreach($categories as $category) {
                                        $category_link = get_category_link($category->term_id);
                                        echo '<li>';
                                        echo '<a href="' . esc_url($category_link) . '"> ' . esc_html($category->name) . ' <span>(' . $category->count . ')</span></a>';
                                        echo '</li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
</section>

<?php get_footer(); ?>