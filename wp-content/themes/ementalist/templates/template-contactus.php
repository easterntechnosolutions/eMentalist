<?php 
/*
 * Template Name: Contact Us Page
 */
?>
<?php get_header(); 
get_template_part('parts/page-title'); ?>


<?php //echo do_shortcode('[gravityform id="1" title="true"]'); ?>

  <!-- Contact Section 2 -->
<section class="box-section box-contact-section-2">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6">
                <div class="">
                    <h3 class="heading-ag-xl color-black mb-3">Contact Info</h3>
                        <div class="paragraph-rubik-md-r color-black mb-4">
                            If your inquiry is urgent, please use the contact details provided below to get in touch.
                        </div>

                        <div class="sub-heading-ag-xl color-black d-flex align-items-center mb-4 contact-info-icons">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/address.png" alt="Email" class="me-3" />
                            <p class="mb-0 contact-info">
                                701, Skylar Building, Besides Shalin Bunglows,<br>
                                Corporate Road, Prahladnagar,<br>
                                Ahmedabad - 380015</p>
                        </div>

                        <p class="sub-heading-ag-xl color-black mb-4 contact-info-icons">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/phone.png" alt="Email" class="me-3" />
                            <a href="tel: +44 203 519 7097" class="contact-number">+44 203 519 7097</a>
                        </p>

                        <p class="sub-heading-ag-xl color-black mb-4 contact-info-icons">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/email.png" alt="Email" class="me-3" />
                            <a href="mailto: sales@ementalist.co.in">sales@ementalist.co.in</a>
                        </p>

                    </div>
            </div>
            <div class="col-lg-6">
                <div class="form-contact-us">
                    <?php echo do_shortcode('[gravityform id="1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google map Section -->
<section class="contact-map-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="map-outer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.498160954153!2d72.49957418543566!3d23.005474363313603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9bc4a0a127bd%3A0xf7e2436df73fdc1a!2seMentalist%20Outsourcing%20Services!5e0!3m2!1sen!2sin!4v1729661341795!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
