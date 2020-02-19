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
                        <div class="row"  style="margin-bottom: 30px;">
                            <div class="col-md-6" style="margin-bottom: 15px;">
                                <img class="treatment-image" src="/wp-content/themes/wp-bootstrap-4/assets/images/hydrating_facial.jpg" alt=""/>
                                <p class="treatment-title">
                                    Hydrating Facial
                                </p>
                                <p class="treatment-desc">
                                    Perfect for all age groups and all skin types as this treatment is loaded with many benefits. It will make your skin looking extra dewy, glowing and healthy.
                                </p>
                                <p class="treatment-price">
                                    Price: $60
                                </p>

                                <a href="/book-online/" class="treatment-link">Book me in &gt;</a>

                            </div>
                            <div class="col-md-6">
                                <img class="treatment-image" src="/wp-content/themes/wp-bootstrap-4/assets/images/acne_clearing_facial_treatment.jpg" alt=""/>
                                <p class="treatment-title">
                                    Acne Clearing Facial
                                </p>
                                <p class="treatment-desc">
                                    Focusing on minimising your oil production, this treatment will deeply clean your skin releasing any excess build up of dirt that will be clogging up your pores.
                                </p>
                                <p class="treatment-price">
                                    Price: $60
                                </p>
                                <a href="/book-online/" class="treatment-link">Book me in &gt;</a>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 30px;">
                            <div class="col-md-6" style="margin-bottom: 15px;">
                                <img class="treatment-image" src="/wp-content/themes/wp-bootstrap-4/assets/images/skin_ageing_facial.jpg" alt=""/>
                                <p class="treatment-title">
                                    Skin Ageing Facial
                                </p>
                                <p class="treatment-desc">
                                    Our skin ageing facial is all about focusing on loss of elasticity in the skin. We will promote blood flow and loss of hydration which will result in more plump, smooth and tighter skin.
                                </p>
                                <p class="treatment-price">
                                    Price: $60
                                </p>
                                <a href="/book-online/" class="treatment-link">Book me in &gt;</a>
                            </div>
                        </div>
                        <h2 class="text-center mb-5">Add Ons</h2>
                        <div class="row">
                            <div class="col-md-6" style="margin-bottom: 15px;">
                                <img class="treatment-image" src="/wp-content/themes/wp-bootstrap-4/assets/images/add_on_steam.jpg" alt=""/>
                                <p class="treatment-title">
                                    Steam
                                </p>
                                <p class="treatment-desc">

                                </p>
                                <p class="treatment-price">
                                    Price: $15
                                </p>

                                <a href="/book-online/" class="treatment-link">Book me in &gt;</a>

                            </div>
                            <div class="col-md-6">
                                <img class="treatment-image" src="/wp-content/themes/wp-bootstrap-4/assets/images/add_on_extractions.jpg" alt=""/>
                                <p class="treatment-title">
                                    Extractions
                                </p>
                                <p class="treatment-desc">

                                </p>
                                <p class="treatment-price">
                                    Price: $10
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