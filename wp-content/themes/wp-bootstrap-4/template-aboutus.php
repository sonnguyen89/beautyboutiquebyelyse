<?php
/**
 * Template Name: About Us Template
 */

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
                    <?php $contents = get_field('contents'); ?>
                    <?php if(count($contents) > 0): ?>
                        <?php foreach($contents as $item): ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="treatment-title text-center">
                                        <?php echo $item['title']; ?>
                                    </p>
                                    <p class="treatment-desc text-center">
                                        <?php echo $item['description']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </section>
    <div class="container-fluid about-image-section">
        <div class="container">
            <div class="row about-first-image-row">
                <div class="col-md-7">
                <?php $image_1 = get_field('image_1'); ?>
                <?php $image_2 = get_field('image_2'); ?>
                <?php $image_3 = get_field('image_3'); ?>
                <?php $image_4 = get_field('image_4'); ?>
                <?php if(isset($image_1)): ?>
                    <img src="<?php echo $image_1['url'] ?>" />
                <?php endif; ?>
                </div>
                <div class="col-md-5">
                <?php if(isset($image_2)): ?>
                    <img src="<?php echo $image_2['url'] ?>" />
                <?php endif; ?>
                </div>
            </div>
            <div class="row about-second-image-row">
                <div class="col-md-5">
                <?php if(isset($image_3)): ?>
                    <img src="<?php echo $image_3['url'] ?>" />
                <?php endif; ?>
                </div>
                <div class="col-md-7">
                <?php if(isset($image_4)): ?>
                    <img src="<?php echo $image_4['url'] ?>" />
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white">
        <?php  get_template_part( 'template-parts/front-page/contract' ); ?>
    </div>

<?php
get_footer();
?>