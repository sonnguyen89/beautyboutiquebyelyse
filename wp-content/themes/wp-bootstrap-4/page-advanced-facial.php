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
                            <h2 class="text-center mb-4"><?php the_title(); ?></h2>
                            <?php wp_bootstrap_4_post_thumbnail(); ?>
                            <?php //the_content(); ?>
                        <?php endwhile; ?>
                        <div class="row">
                            <div class="col-md-6" style="margin-bottom: 15px;">
                                <img src="/wp-content/themes/wp-bootstrap-4/assets/images/skin_needling_treatment.jpg" alt=""/>
                                <p class="treatment-title">
                                    SKIN NEEDLING
                                </p>
                                <p class="treatment-desc">
                                    This treatment will stimulate the production of your collagen and elastin. It will eliminate your acne scarring, ﬁne lines, wrinkles, uneven skin tone, enlarged pores and sun damage
                                </p>
                                <p class="treatment-price">
                                    Price: $150
                                </p>

                                <a href="/book-online/" class="treatment-link">Book me in &gt;</a>

                            </div>
                            <div class="col-md-6">
                                <img src="/wp-content/themes/wp-bootstrap-4/assets/images/microdermabrasion_treatment.jpg" alt=""/>
                                <p class="treatment-title">
                                    MICRODERMABRASION
                                </p>
                                <p class="treatment-desc">
                                    An advanced professional mechanical exfoliation of the skin which will minimise your dead skin cells and impurities. It will also improve skins texture and quality leaving you with healthier, glowing skin.
                                </p>
                                <p class="treatment-price">
                                    Price: $70
                                </p>
                                <a href="/book-online/" class="treatment-link">Book me in &gt;</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <?php
        get_footer();
    }
    else {
        include( get_page_template() );
    }
}
?>