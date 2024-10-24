<?php get_header(); 
get_template_part('parts/page-title'); 
?>

 <!-- Single Team -->
 <section class="box-section box-contact-section-2">
    <div class="container" data-aos="fade-up">
        <div class="row mt-4">
            <?php
            $team_member_image = get_field('member_image');
            $team_member_name = get_the_title();
            $team_member_designation = get_field('member_designation', get_the_ID());
            // $team_member_details = the_content();
            ?>
            <div class="col-lg-5 col-md-4 mb-4">
                <img src="<?php echo esc_url($team_member_image['url']); ?>" class="w-100" alt="<?php echo esc_attr($team_member_name); ?>" />
            </div>
            <div class="col-lg-7 col-md-8 mb-4">
                <h1 class="heading-ag-3xl mb-3"><?php echo esc_html($team_member_name); ?></h1>
                <h3 class="neutral-2900 mb-4"><?php echo esc_html($team_member_designation); ?></h3>
                
                <?php $social_media_link = get_field('social_media_link', get_the_ID()); ?>
                <?php if ($social_media_link) : ?>
                    <div class="team-socials">
                        <a href="<?php echo esc_url($social_media_link); ?>" target="_blank">
                            <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.17383 9.3125L8.58398 6.58789H5.97656V4.83008C5.97656 4.43945 6.09375 4.10742 6.32812 3.83398C6.54297 3.54102 6.94336 3.38477 7.5293 3.36523H8.70117V1.05078C8.68164 1.05078 8.45703 1.02148 8.02734 0.962891C7.61719 0.904297 7.13867 0.875 6.5918 0.875C5.51758 0.875 4.6582 1.1875 4.01367 1.8125C3.38867 2.4375 3.06641 3.3457 3.04688 4.53711V6.58789H0.673828V9.3125H3.04688V15.875H5.97656V9.3125H8.17383Z" fill="" />
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>

                <div class="content-detail-team">
                    <?php //if ($team_member_details) : ?>
                        <p><?php echo the_content(); ?></p>
                    <?php //endif; ?>
                </div>
                
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>