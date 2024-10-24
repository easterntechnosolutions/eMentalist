<?php 
/*
 * Template Name: Team Page
 */
?>
<?php get_header(); 
get_template_part('parts/page-title'); 
?>
 
<!--Home 4 Section 9 -->
<section class="position-relative overflow-hidden box-dedicated-2">
    <div class="container" data-aos="fade-up">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="sub-heading-fitree-sm primary-500 text-uppercase mb-20">
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6.5" cy="6.5" r="5.75" stroke="" stroke-width="1.5" />
                </svg>Dedicated Team
            </div>
            <h2 class="heading-48-fitree dark-950 mb-30">Professional Team Members</h2>
        </div>
        <div class="box-list-teams" data-aos="fade-up">
            <div class="row">
            <?php
            $args = array(
                'post_type' => 'team_member',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
            );
            $team_members = new WP_Query($args);
            if ($team_members->have_posts()) :
                while ($team_members->have_posts()) : $team_members->the_post();
                    $team_member_image = get_field('member_image');
                    $team_member_name = get_the_title();
                    $team_member_designation = get_field('member_designation', get_the_ID());
                    $team_member_details = get_field('details', get_the_ID());
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-team-2">
                            <div class="card-image">
                                <div class="card-image-inner">
                                    <a href="<?php the_permalink(); ?>"><img srcset="<?php echo esc_url($team_member_image['url']); ?>" src="<?php echo esc_url($team_member_image['url']); ?>" alt="<?php echo esc_attr($team_member_name); ?>" /></a>
                                </div>
                            </div>
                            <div class="card-info">
                                <a href="<?php the_permalink(); ?>"><h3 class="secondery-500 heading-lg"><?php echo esc_html($team_member_name); ?></h3></a>
                                <p class="dark-950 paragraph-base"><?php echo esc_html($team_member_designation); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
            </div>
        </div>
    </div>
</section>


 <!-- Team -->
 <section class="box-section box-contact-section-2">
    <div class="container">
        <div class="row mt-4">
            <?php
            $args = array(
                'post_type' => 'team_member',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
            );
            $team_members = new WP_Query($args);
            if ($team_members->have_posts()) :
                while ($team_members->have_posts()) : $team_members->the_post();
                    $team_member_image = get_field('member_image');
                    $team_member_name = get_the_title();
                    $team_member_designation = get_field('member_designation', get_the_ID());
                    $team_member_details = get_field('details', get_the_ID());
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card-best-team hover-up" data-aos="fade-up" data-aos-duration="0">
                            <div class="card-image">
                                <a href="<?php the_permalink(); ?>"><img srcset="<?php echo esc_url($team_member_image['url']); ?>" src="<?php echo esc_url($team_member_image['url']); ?>" alt="<?php echo esc_attr($team_member_name); ?>" /></a>
                            </div>
                            <div class="card-info">
                                <div class="card-info-left">
                                    <a href="<?php the_permalink(); ?>" class="heading-md"><?php echo esc_html($team_member_name); ?></a>
                                    <p class="paragraph-rubik-r"><?php echo esc_html($team_member_designation); ?></p>
                                </div>
                                <div class="card-info-right">
                                    <?php if ($team_member_details) : ?>
                                        <p class="paragraph-rubik-r"><?php echo esc_html($team_member_details); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>