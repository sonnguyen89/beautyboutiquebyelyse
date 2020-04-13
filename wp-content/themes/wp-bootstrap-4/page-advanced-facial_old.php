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
                            <div class="col-md-6" style="margin-bottom: 15px;">
                                <img class="treatment-image" src="/wp-content/themes/wp-bootstrap-4/assets/images/skin_needling_treatment.jpg" alt=""/>
                                <p class="treatment-title">
                                    SKIN NEEDLING
                                </p>
                                <p class="treatment-desc">
                                    This treatment will stimulate the production of your collagen and elastin. It will eliminate your acne scarring, fine lines, wrinkles, uneven skin tone,enlarged pores, pigmentation and sun damage.
                                </p>
                                <p class="treatment-price">
                                    Price: $150
                                </p>

                                <a href="/book-online/" class="treatment-link">Book me in &gt;</a>

                            </div>
                            <div class="col-md-6">
                                <img class="treatment-image" src="/wp-content/themes/wp-bootstrap-4/assets/images/microdermabrasion_treatment.jpg" alt=""/>
                                <p class="treatment-title">
                                    MICRODERMABRASION DELUXE 7 STEP
                                </p>
                                <p class="treatment-desc">
                                    An advanced, professional, mechanical exfoliation of the skin whichwill minimise your dead skin cells and impurities. It will improve skins texture and remove congestion. Our Microdermabrasion Deluxe treatment also includes a facial steam and a customised mask to suit your skin type.
                                </p>
                                <p class="treatment-price">
                                    Price: $60 <br/>
                                    <strong>MARCH PROMOTION $40</strong>
                                </p>
                                <a href="/book-online/" class="treatment-link">Book me in &gt;</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
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