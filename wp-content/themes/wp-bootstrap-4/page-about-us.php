<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */


if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
}
else {
    if ( ! is_page_template() ) {
        get_header();
        ?>
        <section class="wp-bp-main-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <h2 class="text-center mb-5"><?php the_title(); ?></h2>
                            <?php wp_bootstrap_4_post_thumbnail(); ?>
                            <?php //the_content(); ?>
                        <?php endwhile; ?>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="treatment-title text-center">
                                    About The Beauty Boutique
                                </p>
                                <p class="treatment-desc  text-center">
                                    Beauty Boutique By Elyse is a first-class Beauty and Laser Therapy Clinic. Elyse is a highly qualified and passionate Beauty and Laser Therapist who is committed to offering her clients the very best treatments using the most innovative and modern technology. In the past Elyse has worked with some of the best salons and beauty experts in Melbourne before eventually opening her own salon Beauty Boutique By Elyse. Her love and dedication to the Industry is undeniable.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="treatment-title  text-center">
                                    What we do
                                </p>
                                <p class="treatment-desc  text-center">
                                    Beauty Boutique By Elyse offers a variety of specialist treatments includingLaser Hair Removal and Advanced Facial Treatments targeting all age groups and all skin types. Elyse is highly accredited and experienced in Laser HairRemoval and offers clients a private and relaxing environment for their treatment. Elyse is committed to ensuring every client has a positive experience from the moment they step into her boutique. Whether you step through the door for an Advanced Facial, Beauty Treatment or Laser HairRemoval you will be greeted with a warm, friendly and professional welcome every single time. Click on the treatments tab for more information.
                                    <br/> <br/> <br/>
                                    Book with Elyse today — you deserve the best treatment and you will find that at Beauty Boutique By Elyse.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div class="container-fluid about-image-section">
            <div class="container">
                <div class="row about-first-image-row">
                    <div class="col-md-7">
                        <img src="/wp-content/themes/wp-bootstrap-4/assets/images/about-img-1.jpg" />
                    </div>
                    <div class="col-md-5">
                        <img src="/wp-content/themes/wp-bootstrap-4/assets/images/about-img-2.png" />
                    </div>
                </div>
                <div class="row about-second-image-row">
                    <div class="col-md-5">
                        <img src="/wp-content/themes/wp-bootstrap-4/assets/images/about-img-4.jpg" />
                    </div>
                    <div class="col-md-7">
                        <img src="/wp-content/themes/wp-bootstrap-4/assets/images/about-img-1.jpg" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-white">
            <?php  get_template_part( 'template-parts/front-page/contract' ); ?>
        </div>

        <?php
        get_footer();
    }
    else {
        include( get_page_template() );
    }
}
?>