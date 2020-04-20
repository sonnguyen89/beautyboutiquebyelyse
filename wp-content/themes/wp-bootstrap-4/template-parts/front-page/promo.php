<?php $promo_sliders = get_field('promo_slider'); ?>
<?php if(count($promo_sliders) > 0): ?>
<div id="testimonial_095" class="carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
     <div class="carousel-inner" role="listbox">
        <?php foreach($promo_sliders as $key => $item): ?>
            <!-- First Slide -->
            <div class="carousel-item <?php if($key == 0): ?>active<?php endif; ?>">
                <!-- Text Layer -->
                <div class="testimonial_095_slide">
                    <h1 class="slider-title"><?php echo $item['title']; ?> </h1>
                    <p class="hero-subtitle"><?php echo $item['subtitle']; ?></p>
                    <p><?php echo $item['button']; ?></p>
                </div> <!-- /Text Layer -->
            </div> <!-- /item -->
        <?php endforeach; ?>
     </div>

    <!-- Left Control -->
    <a class="carousel-control-prev" href="#testimonial_095" data-slide="prev">
        <!--<span class="fal fa-chevron-left"></span>-->
        <img src="/wp-content/themes/wp-bootstrap-4/assets/images/left-arrow.png" />
    </a>
    <!-- Right Control -->
    <a class="carousel-control-next" href="#testimonial_095" data-slide="next">
        <!-- <span class="fa fa-chevron-right"></span>-->
        <img src="/wp-content/themes/wp-bootstrap-4/assets/images/right-arrow.png" />
    </a>

    <!-- Indicators -->
    <ol class="carousel-indicators">
    <?php $index = 0; ?>
    <?php foreach($promo_sliders as $item): ?>
        <?php if($index == 0): ?>
            <li data-target="#testimonial_095" data-slide-to="<?php echo $index; ?>" class="active"></li>
        <?php else: ?>
            <li data-target="#testimonial_095" data-slide-to="<?php echo $index; ?>"></li>
        <?php endif; ?>
        <?php $index++; ?>
    <?php endforeach; ?>
    </ol>
</div>
<?php else: ?>
<div id="testimonial_095" class="carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

    <!-- Header of Slider -->
  <!--  <div class="testimonial_095_header">
        <h5>what people<span>say</span></h5>
    </div>-->
    <!-- /Header of Slider -->

    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">

        <!-- First Slide -->
        <div class="carousel-item active">
            <!-- Text Layer -->
            <div class="testimonial_095_slide">
                <h1 class="slider-title">Microdermabrasion NOW $40 usually $60 <br/> </h1>
                <p class="hero-subtitle"></p>
                <p><a class="btn hero-button" role="button" href="/advanced-facial/">Learn More</a></p>
            </div> <!-- /Text Layer -->
        </div> <!-- /item -->
        <!-- End of First Slide -->

        <!-- First Slide -->
        <div class="carousel-item">
            <!-- Text Layer -->
            <div class="testimonial_095_slide">
                <h1 class="slider-title">Refer a friend </h1>
                <p class="hero-subtitle">and both of you will receive 10% OFF your next salon treatment</p>
                <p><a class="btn hero-button" role="button" href="/book-online/">Learn More</a></p>
            </div> <!-- /Text Layer -->
        </div> <!-- /item -->
        <!-- End of First Slide -->

    </div> <!-- End of Wrapper For Slides -->

    <!-- Left Control -->
    <a class="carousel-control-prev" href="#testimonial_095" data-slide="prev">
        <!--<span class="fal fa-chevron-left"></span>-->
        <img src="/wp-content/themes/wp-bootstrap-4/assets/images/left-arrow.png" />
    </a>

    <!-- Right Control -->
    <a class="carousel-control-next" href="#testimonial_095" data-slide="next">
        <!-- <span class="fa fa-chevron-right"></span>-->
        <img src="/wp-content/themes/wp-bootstrap-4/assets/images/right-arrow.png" />
    </a>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#testimonial_095" data-slide-to="0" class="active"></li>
        <li data-target="#testimonial_095" data-slide-to="1"></li>
        <!--   <li data-target="#testimonial_095" data-slide-to="2"></li>-->
    </ol>
</div>
<?php endif; ?>