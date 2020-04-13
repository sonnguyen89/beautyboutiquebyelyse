<?php
/**
 * Template Name: Treatments Template
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
                <?php $treatment_items = get_field('treatments'); ?>
                <?php if(count($treatment_items) > 0): ?>
                    <?php $index = 0?>
                    <?php foreach($treatment_items as $item): ?>
                        <?php $index++; ?>
                        <?php if($index % 2 != 0): ?>
                            <?php echo"<div class='row' style='margin-bottom: 30px;'>"; ?>
                        <?php endif; ?>
                        <div class="col-md-6" style="margin-bottom: 15px;">
                            <img class="treatment-image" src="<?php echo $item['image']['url'] ?>" alt=""/>
                            <p class="treatment-title">
                               <?php echo $item['title']; ?>
                            </p>
                            <p class="treatment-desc">
                                <?php echo $item['description']; ?>
                            </p>
                            <p class="treatment-price">
                                <?php echo $item['price']; ?>
                            </p>
                            <?php echo $item['link']; ?>
                        </div>
                        <?php if($index % 2 == 0): ?>
                            <?php echo "</div>"; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                <!-- END OF DISPLAY TREATMENT ITEMS --->
            </div>
        </div>

    </div>
</section>
<div class="container-fluid bg-white">
    <?php  get_template_part( 'template-parts/front-page/contract' ); ?>
</div>
<?php
get_footer();

?>